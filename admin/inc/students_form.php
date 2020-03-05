<?php if($_GET["new"]):?>
<div class="subform_cont1">
    <form action="students.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario" border="0" cellspacing="0" cellpadding="0">
            <tr height="30">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Kön: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                    <option value="None" >None</option>
                    <option value="Man">Man</option>
                    <option value="Kvinna">Kvinna</option>
                    </select>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input style="padding: 20px 65px;" type="submit" class="button" value="Nästa" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
            <input type="hidden" name="password" id="password" value="newstudent246"/>
            <input type="hidden" name="status" id="status" value="Active"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>
</div>
<?php endif ?>

<?php if($_GET["newcompl"]):?>
    <?php $studentadmin = $row_DatosInsc['id_student'];?>   
    <div class="subform_cont1">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                        <?php echo ObtenerNombreStudent($studentadmin);?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Scrolla i kurs listan för att välja dina kurser.
                    </td>
                </tr>
                <tr height="5">
                </tr> 
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1">
                                <p>Kurs Lista</p>
                                <div class="lista_c">
                                    <?php
                                    if ($totalRows_DatosCourse > 0) {
                                    do { ?>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr height="35">
                                            <td align="left"><a style="font-size: 11px;" href="cart_add.php?courseID=<?php echo $row_DatosCourse['id_course'];?>"><?php echo $row_DatosCourse['name'];?></a></td>
                                        <tr>
                                    </table>
                                    <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                    }
                                    ?>
                                </div>
                            </div>
        
                            <div class="class1" style="border-left: 1px solid #CCC;">
                                <p>Utvaldag Kurser</p>
                                <div class="lista_c">
                                    <?php $SubTotal = 0; ?>
                                    <?php
                                    if ($totalRows_DatosCart2 > 0) {
                                    do { ?>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr height="35">
                                            <td align="left"><a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart2['id_counter'];?>"><?php echo ObtenerNombreCurso($row_DatosCart2['id_course']);?></a></td>
                                        <tr>
                                    </table>
                                    <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCart2['id_course']);?>
                                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
        <form action="students.php?done=1" method="post" name="" id="">
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    <br/>
                    <h4><?php echo GetPacket($totalRows_DatosCart2); ?></h4>
                    <?php 
                    $resprosent = ObtenerPDescuento($totalRows_DatosCart2);
                    $preciorebaja = $SubTotal / 100 * $resprosent;
                    $precioTotal = $SubTotal - $preciorebaja;
                    ?>
                    Sub Total: <?php echo $SubTotal; ?> SEK <br/>
                    <?php echo ObtenerPDescuento($totalRows_DatosCart2); ?> <?php if ($totalRows_DatosCart2 > 1) {?>% Rabbat: <?php echo $preciorebaja; ?> SEK<br/> <?php } ?>
                    <?php $_SESSION["TotalCompra"] = $precioTotal;?>
                    <?php $_SESSION["paquete"] = GetPacket($totalRows_DatosCart2);?>
                    Total: <?php echo $precioTotal; ?> SEK
                    <!-- Pay method:<br/>
                    Paypal -->
                    </td>
                </tr>
                <tr height="85">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäl mig" />
                    </td>
                </tr>
                <tr height="3">
                </tr>
            </table>
            <input type="hidden" name="id_student" id="id_student" value=""/>
        </form>
    </div>
<?php endif ?>

<?php if($_GET["done"]):?>
    <?php
    $studentadmin = $row_DatosInsc['id_student'];
    $sexadmin = $row_DatosInsc['sex'];
    $Termin = $row_DatosTerm["id_term"];
    $TerminStart = $row_DatosTerm["term_start"];
    $TerminStop = $row_DatosTerm["term_stop"];
    $total = $_SESSION["TotalCompra"];
    $Package = GetPacket($totalRows_DatosCart2);

    $fecha2=time()+3600;
    date("H:i:s",$fecha2);
    ?>
    <?php ConfirmationDone(date('Y'), date('m'), date('d'), date('His',$fecha2), $studentadmin, $sexadmin, $Termin, $TerminStart, $TerminStop, $Package, $total); ?>
        <div class="subform_cont1">
            <div class="msn_done">
                <br/><br/><br/><br/>
                <h1>Klart!</h1>
                <br/><br/>
                <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Ok" /></a>
            </div>
        </div>
<?php endif ?>

<script>
    function showDiv(select){
        if(select.value>=2){
            document.getElementById('courses2').style.display = "block";
        } else{
            document.getElementById('courses2').style.display = "none";
        }

        if(select.value>=3){
            document.getElementById('courses3').style.display = "block";
        } else{
            document.getElementById('courses3').style.display = "none";
        }

        if(select.value>=4){
            document.getElementById('courses4').style.display = "block";
        } else{
            document.getElementById('courses4').style.display = "none";
        }

        if(select.value>=5){
            document.getElementById('courses5').style.display = "block";
        } else{
            document.getElementById('courses5').style.display = "none";
        }
    } 
</script>

<?php if($_GET["see"]):?>
    <div class="subform_cont1">
        <form id="formart">
            <table class="popwindows" style="width: 500px; margin: 40px auto;" border="0" cellspacing="0" cellpadding="0">
                <tr height="20">
                </tr>
                <tr height="40">
                    <td colspan="2" valign="middle" align="center">
                        <?php echo ObtenerNombreStudent($_GET['see']); ?> <?php echo ObtenerApellidoStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="top" align="center">
                        (<?php echo Sex($_GET['see']); ?>)
                    </td>
                </tr>
                <tr height="40">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Personal no:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNumeroPStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Telefon no:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerTelefonoStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        E-mail:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerEmailStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Adress:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerAdressStudent($_GET['see']); ?><br/>
                        <?php echo ObtenerPostStudent($_GET['see']); ?> <?php echo ObtenerCityStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="55">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Registration date:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo $row_DatosSee['day']; ?> <?php echo month($row_DatosSee['month']); ?> <?php echo $row_DatosSee['year']; ?><br/>  
                        kl. <?php echo $row_DatosSee['time']; ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Termin:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreTermin($row_DatosSee['term']);?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Packet:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo GetPacket($totalRows_DatosPackage); ?> (<?php echo $row_DatosSee['total']; ?> SEK)
                    </td>
                </tr>
                <tr height="10">
                </tr>
                <tr height="25">
                    <td width="30%" valign="top" align="right" style="padding: 0 10px; font-size:14px;">
                        Courses:
                    </td>
                    <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php if ($row_DatosPackage > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <p><?php echo ObtenerNombreCurso($row_DatosPackage['id_course']); ?></p>
                        <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage)); 
                        }
                        else
                        { // Show if recordset is empty ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Stänga" /></a>
                    </td>
                </tr>
                <tr height="20">
                </tr>
            </table>
        </form>
    </div>
<?php endif ?>

<?php if($_GET["editi"]):?>
    <div class="subform_cont1">
        <form action="students.php" method="post" name="formediti" id="formediti">
            <table class="formulario" border="0" cellspacing="0" cellpadding="0">
                <tr height="30">
                    <td colspan="2" valign="middle" align="center">
                        <?php //echo $row_DatosEdit['id_student'];?>
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['email'];?>" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['personal_number'];?>" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telephone'];?>" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Kön: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None" >None</option>
                        <option value="Man" <?php if ($row_DatosEdit['sex'] == Man) echo "selected"; ?>>Man</option>
                        <option value="Kvinna" <?php if ($row_DatosEdit['sex'] == Kvinna) echo "selected"; ?>>Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['adress'];?>" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['post'];?>" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['city'];?>" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="Active" <?php if ($row_DatosEdit['status'] == Active) echo "selected"; ?>>Active</option>
                        <option value="Inactive" <?php if ($row_DatosEdit['status'] == Inactive) echo "selected"; ?>>Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                </table>
                <input type="hidden" name="id_student" id="id_student" value="<?php echo $row_DatosEdit['id_student'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formediti" />
        </form>
    </div>
<?php endif ?>

<?php if($_GET["editc"]):?>
    <div class="subform_cont1">
        <table class="formulario" style="" border="0" cellspacing="0" cellpadding="0">
            <tr height="60">
                <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 20px 0 0 0;">
                    <?php echo ObtenerNombreStudent($_GET['editc']);?> <?php echo ObtenerApellidoStudent($_GET['editc']);?>
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                Scrolla i kurs listan för att välja kurs.
                </td>
            </tr>
            <tr height="5">
            </tr> 
            <tr>
                <td colspan="2" valign="middle" align="center">
                    <div class="courses">
                        <div class="class1">
                            <p>Kurs Lista</p>
                            <div class="lista_c">
                                <?php
                                if ($totalRows_DatosCourseEdit > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="35">
                                        <td align="left"><a style="font-size: 11px; margin:0 5px;" href="cart_add_edit.php?editc=<?php echo $_GET['editc'];?>&courseID=<?php echo $row_DatosCourseEdit['id_course'];?>&tm=<?php echo $_GET['editc'];?>"><?php echo $row_DatosCourseEdit['name'];?></a></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourseEdit = mysqli_fetch_assoc($DatosCourseEdit));
                                }
                                ?>
                            </div>
                        </div>
    
                        <div class="class1" style="border-left: 1px solid #CCC;">
                            <p>Utvaldag Kurser</p>
                            <div class="lista_c">
                                <?php $SubTotal = 0; ?>
                                <?php
                                if ($totalRows_DatosCart > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="35">
                                        <td align="left"><a style="font-size: 11px; margin:0 5px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart['id_counter'];?>"><?php echo ObtenerNombreCurso($row_DatosCart['id_course']);?></a></td>
                                    <tr>
                                </table>
                                <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCart['id_course']);?>
                                <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                                }
                                ?>
                            </div>
                        </div>
                    </div>
    <form action="students.php" method="post" name="formeditc" id="formeditc">
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                <br/>
                <h4><?php echo GetPacket($totalRows_DatosCart); ?></h4>
                <?php 
                $resprosent = ObtenerPDescuento($totalRows_DatosCart);
                $preciorebaja = $SubTotal / 100 * $resprosent;
                $precioTotal = $SubTotal - $preciorebaja;
                ?>
                Sub Total: <?php echo $SubTotal; ?> SEK <br/>
                <?php echo ObtenerPDescuento($totalRows_DatosCart); ?> <?php if ($totalRows_DatosCart > 1) {?>% Rabbat: <?php echo $preciorebaja; ?> SEK<br/> <?php } ?>
                <?php $_SESSION["TotalCompra"] = $precioTotal;?>
                <?php $_SESSION["paquete"] = GetPacket($totalRows_DatosCart);?>
                Total: <?php echo $precioTotal; ?> SEK
                </td>
            </tr>
            <tr height="85">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <input type="submit" class="button" value="Ok!" />
                </td>
            </tr>
            <tr height="3">
            </tr>
        </table>
        <input type="hidden" name="total" id="total" value="<?php echo $precioTotal; ?>"/>
        <input type="hidden" name="id_student" id="id_student" value="<?php echo $_GET['editc'];?>"/>
        <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
    </form>
    </div>
<?php endif ?>