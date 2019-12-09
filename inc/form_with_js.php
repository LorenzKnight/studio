<script>
    const isElementOrDescendant = function (parent, child) {
        if (parent === child) return true

        var node = child.parentNode;
        while (node != null) {
        if (node == parent) {
            return true;
        }
        node = node.parentNode;
        }
        return false;
    }

    const onClick = function (e) {
        const el = document.getElementById('formrequest')
        const al = document.getElementById('formrequeste')
        const clickableAreas = Array.from(document.getElementsByClassName('paquetes'))
        clickableAreas.push(el)
        clickableAreas.push(al)

        let isClickOutside = true

        for (let i = 0; i < clickableAreas.length; i++) {
            if (isElementOrDescendant(clickableAreas[i], e.target)) {
                isClickOutside = false
            }
        }

        if (isClickOutside) {
            location = 'price_registration.php'
        }
    }

    document.addEventListener('click', onClick)
</script>

<div class="checkin">
    <div class="register_info">
        <h3 style="text-transform:uppercase;">KURSER OCH SOCIALDANS</h3>
        <?php echo $_SESSION['ydl_UserId'];?>
        <h3>Kurser & paket</h3>
        <p>Varje termin är uppdelad i två kurs-omgångar som pågår i 10 veckor.</p>
        <p>Under våren har vi en första kursomgång mellan v. 3-12 och en andra kursomgång mellan v. 13-22.</p>
        <br>
        <p>Innan kursstart anmäler du dig till de kurser du vill gå.</p>
        <p>I de olika paketen ingår även så kallade praktika, tillfällen då du kan öva och repetera steg tillsammans med andra kursdeltagare.</p> 
    
        
        <h3>OBS!</h3>
        <p>Din anmälan gäller bara den specifika kurs du anmält dig till, man kan ej byta till annan kurs efter köp.</p>
    </div>
    
    <div class="to_register">
            <?php
            if ($totalRows_DatosPackage > 0) {
            do { ?> 
        <div class="paquetes" onclick="location='price_registration.php?id=<?php echo $row_DatosPackage['id_package']; ?>'">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="70">
                        <td width="50%" valign="middle" align="center" style="padding: 0 10px;"><?php echo $row_DatosPackage['package_name'];?></td>
                        <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><?php echo $row_DatosPackage['description'];?></td>
                    </tr>
                </table>
        </div>
            <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
            }
            ?>
    </div>


    <?php if($_GET["id"]):?>
        <form action="price_registration.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario" style="top: 10px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">Du har valt <?php echo $row_DatosPackage2["package_name"]; ?></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="width: 100px; font-size: 14px; color: #999;">
                        Kön:
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None">None</option>
                        <option value="Man">Man</option>
                        <option value="Kvinna">Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Läs vilkor <a href="">här</a><br>
                        <input class="class1_content" type="checkbox" name="agree" value="yes" required> Jag acepterar vilkoren 
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="price_registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Next" />
                    </td>
                </tr>
                <tr height="20">
                </tr>
                <input type="hidden" name="package" id="package" value="<?php echo $_GET['id']; ?>"/>
                <input type="hidden" name="password" id="password" value="newstudent246"/>
                <input type="hidden" name="status" id="status" value="Activ"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
    <?php endif ?>

    <?php //if($_GET["idConf"]):?>

        <!-- <div class="formulario" style="padding: 20px; text-align: center; top: 250px;">
        Yandali kommer att skicka via mail kvitto på din anmällning!<br>
        bekräfta du att <?php //echo $row_DatosReg['email'];?> är ditt mail?<br><br>
        <form action="price_registration.php" method="post" name="forminsert" id="forminsert"> -->

            <!-- <input type="hidden" name="email" id="email" value="<?php //echo $row_DatosReg['email'];?>"/>
            <input type="hidden" name="password" id="password" value="<?php //echo $row_DatosReg['password'];?>"/>
            <input style="width: 180px; padding: 21px 0; text-align: center;" type="submit" class="button" value="Ja"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" /> -->
            <!--<a href="logout.php">Log out</a>-->
        <!-- </form>
        </div> -->

    <?php //endif ?>

    <?php if($_GET["idCompl"]):?>

        <form action="price_registration.php" method="post" name="formrequeste" id="formrequeste">
            <table style="" class="formulario" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                        <?php echo ObtenerNombrePacket($row_DatosReg["package"]); ?>!<br>
                        <?php echo $_SESSION['ydl_UserId'];?>
                    </td>
                </tr>
                <tr height="20">
                </tr> 
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1" style="flex: 1;">
                                <p>Klass 1</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr height="40">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 2);?>;">
                                <p>Klass 2</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse2 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="40">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 3);?>;">
                                <p>Klass 3</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse3 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="40">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 4);?>;">
                                <p>Klass 4</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse4 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="40">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse4['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4));
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Pay method:<br>
                    Paypal
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="price_registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäla mig" />
                    </td>
                </tr>
                <tr height="20">
                </tr>
                <input type="hidden" name="term" id="term" value="<?php echo $row_DatosTerm["id_term"]; ?>"/>
                <input type="hidden" name="package" id="package" value="<?php echo $row_DatosReg["package"]; ?>"/>
                <input type="hidden" name="id_student" id="id_student" value="<?php echo $_SESSION['ydl_UserId'];?>"/>
                <input type="hidden" name="payment" id="payment" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequeste" />
            </table>
        </form>

    <?php endif ?>
</div>