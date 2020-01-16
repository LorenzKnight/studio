<script>
    // const isElementOrDescendant = function (parent, child) {
    //     if (parent === child) return true

    //     var node = child.parentNode;
    //     while (node != null) {
    //     if (node == parent) {
    //         return true;
    //     }
    //     node = node.parentNode;
    //     }
    //     return false;
    // }

    // const onClick = function (e) {
    //     const el = document.getElementById('formrequest')
    //     const al = document.getElementById('formrequeste')
    //     const clickableAreas = Array.from(document.getElementsByClassName('paquetes'))
    //     clickableAreas.push(el)
    //     clickableAreas.push(al)

    //     let isClickOutside = true

    //     for (let i = 0; i < clickableAreas.length; i++) {
    //         if (isElementOrDescendant(clickableAreas[i], e.target)) {
    //             isClickOutside = false
    //         }
    //     }

    //     if (isClickOutside) {
    //         location = 'price_registration.php'
    //     }
    // }

    // document.addEventListener('click', onClick)
</script>
<script>
    function mostrar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="block";
    }
    function ocurtar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="none";
    }
</script>

<div class="checkin">
    <div class="register_info">
        <h3 style="text-transform:uppercase;">KURSER OCH SOCIALDANS</h3>
        <?php //echo $_SESSION['ydl_UserId'];?>
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
        <div class="paquetes">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:14px;">
                    <tr height="70">
                        <td width="25%" valign="middle" align="center" style="padding: 0 10px;"><?php echo $row_DatosPackage['package_name'];?></td>
                        <td width="40%" valign="middle" align="left" style="padding: 0 10px;"><?php echo $row_DatosPackage['description'];?></td>
                        <td width="20%" valign="middle" align="center" style="padding: 0 10px;"><?php echo $row_DatosPackage['price'];?> kr</td>
                        <td width="15%" valign="middle" align="right" style="padding: 0 10px;"><input class="button_m" type="submit" onclick="location='price_registration.php?id=<?php echo $row_DatosPackage['id_package']; ?>'" value="Välj"></td>
                    </tr>
                </table>
        </div>
            <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
            }
            ?>
    </div>


    <?php if($_GET["id"]):?>
        <div class="form_frame">
        <form action="price_registration.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
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
                        Läs villkor <a href="#" onclick="mostrar()">här</a><br>
                        <input class="class1_content" type="checkbox" name="agree" value="yes" required> Jag acepterar villkoren 
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
                <input type="hidden" name="via" id="via" value="1000"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
        </div>
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

    <div class="agreement" id="popup">
        <table class="agre_frame" border="0" cellspacing="0" cellpadding="0">
            <tr height="92%">
                <td>
                    <div style="width: 99%; height: 99%; margin: 0.5%; font-size: 12px; background-color: #F0F0F0; overflow: auto;">
                    <h3 style="text-align:center;">YANDALI VILLKOREN</h3>
                    <br/>
                    <p>För att kunna genomföra ditt köp måste du först godkänna vårt avtal. Detta gör du genom att läsa avtalet och sedan kryssa i avtalsrutan. 
                    Du kan sedan gå vidare och genomföra ditt köp.</p>
                    <br/>
                    <br/>
                    <p>1. KÖP AV KURS / EVENT</p>
                    <p>- Du köper din plats på kurser och event på vår hemsida.</p>
                    <p>För att genomföra ditt köp måste du läsa du först godkänna vårt avtal. Detta gör du genom att läsa avtalet och sedan kryssa i avtalsrutan. 
                    Du kan sedan gå vidare och genomföra ditt köp.</p>
                    <br/>
                    <br/>
                    <p>2. OM DU ÄR UNDER 18 ÅR</p>
                    <p>- För dig som är under 18 år krävs målsmans uppgifter och godkännande.</p>
                    <br/>
                    <br/>
                    <p>3. ÅNGERRÄTT VID KÖP ONLINE</p>
                    <p>- Yandali förhåller sig till lag om distansavtal och avtal utanför affärslokaler (SFS 2005:59).</p>
                    <br/>
                    <p>- Du som har köpt en plats på en kurs eller event online på vår hemsida kan frånträda detta avtal utan att ange något skäl inom 14 dagar efter det att köpet gjordes. 
                    Denna ångerfrist löper ut 14 dagar efter den dag då avtalet ingicks. Om du vill utöva denna ångerrätt så ska du meddela Yandali om ditt beslut att frånträda avtalet via mejl till info@yandali.se .</p>
                    <br/>
                    <p>- Vi skickar alltid en bekräftelse via mejl på ditt beslut om att frånträda avtalet, om du inte har fått en bekräftelse så ber vi dig att kontakta oss snarast då du inte räknas som av-anmäld innan vi skickat en bekräftelse.</p>
                    <br/>
                    <p>- Om du har utövat ångerrätten på detta sätt så kommer Yandali återbetala erlagd ersättning inom 14 dagar, minus en administrationsavgift på 300 kr. 
                    Observera att för köp av deltagande vid event så gäller denna ångerrätt endast före den tid då eventet äger rum, för köp av kurs så gäller denna ångerrätt endast före kursstart.</p>
                    <br/>
                    <br/>
                    <p>4. ÅTERANMÄLAN</p>
                    <p>-Ett köp av kurs gäller endast för 1 termin. Man blir alltså inte automatiskt anmäld till nästa termin utan måste inför varje termin köpa en ny kurs.</p>
                    <br/>
                    <br/>
                    <p>5. ATT BYTA KURS</p>
                    <p>-Det är inte möjligt att byta kurs efter att du genomfört ditt köp via hemsidan.</p>
                    <p>Vid förfrågningar om byte av kurs skicka ett mejl till info@yandali.se så återkommer vi med mer information kring eventuell möjlighet att byta kurs. 
                    Observera att denna förfrågan endast beviljas i mån av plats och inte garanteras.</p>
                    <br/>
                    <br/>
                    <p>6. MISSADE LEKTIONER</p>
                    <p>- Missade lektioner ersätts aldrig. Vid längre tids sjukdom eller skada med läkarintyg kan man däremot få ta igen missade kurstillfällen vid senare tillfällen under samma termin.</p>
                    <br/>
                    <br/>
                    <p>7. ÄNDRINGAR AV KURSER OCH LÄRARE</p>
                    <p>- Yandali förbehåller sig rätten att ändra kursuplägg, tider och lärare.</p>
                    <br/>
                    <br/>
                    <p>8. DELTAGANDE I FOTOGRAFERING OCH/ELLER FILMNING</p>
                    <p>-Vid våra kurser och events är det vanligt att vi fotograferar och filmar.</p> 
                    <br/>
                    <p>Detta gör vi både i marknadsföringssyfte och för att visa upp vår verksamhet för våra bidragsgivare. 
                    Om du inte vill eller får vara med på foton eller filmer så ber vi dig informera oss via mejl på info@yandali.se. 
                    Vid tillfällen då fotografer och filmare befinner sig i lokalen är det alltid okej att be någon av personalen att ta bort eventuella foton och filmer på dig.</p>
                    <br/>
                    <br/>
                    <br/>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="middle" align="center">
                    <a href="#" onclick="ocurtar()">Ok</a>
                </td>
            </tr>
        </table>
    </div>

    <?php if($_GET["idCompl"]):?>
        <div class="form_frame">
        <form action="price_registration.php" method="post" name="formrequeste" id="formrequeste">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                        Du har valt <?php echo ObtenerNombrePacket($row_DatosReg["package"]); ?><br>
                        <?php //echo $_SESSION['ydl_UserId'];?>
                    </td>
                </tr>
                <?php if($row_DatosReg["package"] <= 4):?>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Scrolla i listorna för att välja dina kurser.
                    </td>
                </tr>
                <tr height="20">
                </tr> 
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1" style="flex: 1;">
                                <p>Kurs 1</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr height="50">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 2);?>;">
                                <p>Kurs 2</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse2 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="50">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse2['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 3);?>;">
                                <p>Kurs 3</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse3 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="50">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse3['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 4);?>;">
                                <p>Kurs 4</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse4 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="50">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse4['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4));
                                }
                                ?>
                            </div>
                        </div>
                        <?php endif ?>
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
                            <a href="price_registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäl mig" />
                    </td>
                </tr>
                <tr height="20">
                </tr>
                <input type="hidden" name="term" id="term" value="<?php echo $row_DatosTerm["id_term"]; ?>"/>
                <input type="hidden" name="term_start" id="term_start" value="<?php echo $row_DatosTerm["term_start"]; ?>"/>
                <input type="hidden" name="term_stop" id="term_stop" value="<?php echo $row_DatosTerm["term_stop"]; ?>"/>
                <input type="hidden" name="package" id="package" value="<?php echo $row_DatosReg["package"]; ?>"/>
                <input type="hidden" name="id_student" id="id_student" value="<?php echo $_SESSION['ydl_UserId'];?>"/>
                <input type="hidden" name="payment" id="payment" value="1"/>
                <input type="hidden" name="status" id="status" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequeste" />
            </table>
        </form>
        </div>
    <?php endif ?>
</div>