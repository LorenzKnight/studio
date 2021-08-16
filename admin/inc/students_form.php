<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
<div class="subform_cont1">
    <form action="students.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario" border="0" cellspacing="0" cellpadding="0">
            <tr height="30">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding:0;">
                    
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 20px 10px 0;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 20px 10px 0;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" minlength="10" maxlength="10" placeholder="Ditt Personnummer (10 siffror)" name="personal_number" id="personal_number" size="31" required/></td>
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
                        <?php echo ObtenerNombreStudent($studentadmin);?> <?php echo ObtenerApellidoStudent($studentadmin);?>
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
                                    <?php if(productosRestantes($row_DatosInsc['id_student'], $row_DatosCourse['id_course'])) { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add.php?courseID=<?php echo $row_DatosCourse['id_course'];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                    }
                                    ?>
                                        <?php if ($totalRows_DatosCourse2 > 0) {?>
                                        <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCourse2 > 0) {
                                    do { ?>
                                    <?php if(productosRestantes($row_DatosInsc['id_student'], $row_DatosCourse['id_course'])) { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add.php?courseID=<?php echo $row_DatosCourse2['id_course'];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                    }
                                    ?>
                                </div>
                            </div>
        
                            <div class="class1" style="border-left: 1px solid #CCC;">
                                <p>Utvaldag Kurser</p>
                                <div class="lista_c">
                                    <?php $SubTotal = 0; ?>
                                    <?php
                                    if ($totalRows_DatosCart3 > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart3['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart3['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart3['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCart3['id_course']);?>
                                    <?php } while ($row_DatosCart3 = mysqli_fetch_assoc($DatosCart3));
                                    }
                                    ?>
                                        <?php if ($totalRows_DatosCart4 > 0) {?>
                                        <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCart4 > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart4['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart4['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart4['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $NoDiscTotal = $NoDiscTotal + ObtenerPrecioCurso($row_DatosCart4['id_course']);?>
                                    <?php } while ($row_DatosCart4 = mysqli_fetch_assoc($DatosCart4));
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
                               

                                <?php
                                $SubTotalPlus = $SubTotal + $NoDiscTotal;
                                $resprosent = ObtenerPDescuento($totalRows_DatosCart3);
                                $preciorebaja = $SubTotal / 100 * $resprosent;
                                $precioTotalCR = $SubTotal - $preciorebaja;
                                $precioTotal = $SubTotal - $preciorebaja + $NoDiscTotal;
                                ?>

                                <table style="background-color: ; margin:10px 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td colspan="2" valign="middle" align="center" style="font-size:18px; padding:0 0 10px;"><?php echo GetPacket($totalRows_DatosParaPaquete); ?></td>
                                    </tr>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">Sub Total:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $SubTotalPlus; ?> SEK</td>
                                    </tr>
                                    <?php if ($totalRows_DatosCart3 > 1) {?>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">- <?php //echo ObtenerPDescuento($totalRows_DatosCart); ?> Rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $preciorebaja; ?> SEK </td>
                                    </tr>
                                    <?php } ?>
                                    <!-- <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">= Total efter rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $precioTotalCR; ?> SEK</td>
                                    </tr> -->
                                    <?php if ($totalRows_DatosCart2 > 0) {?>
                                    <!-- <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">+ Kurser utan rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $NoDiscTotal; ?> SEK</td>
                                    </tr> -->
                                    <?php } ?>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><input class="textd" type="text" value="<?php echo $precioTotal; ?>" name="admdiscount1" id="admdiscount1" size="5" autocomplete="off" style="text-align:center; font-size:18px"> SEK</td>
                                    </tr>
                                </table>

                                <?php //$_SESSION["TotalCompra"] = $precioTotal;?>
                                <?php $_SESSION["paquete"] = GetPacket($totalRows_DatosParaPaquete);?>
                                <?php $_SESSION["sex"] = sex($studentadmin);?>
                                
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
        </form>
    </div>
<?php endif ?>

<?php if($_GET["done"]):?>
    <?php
    $studentadmin = $row_DatosInsc['id_student'];
    $nameAdmin = $row_DatosInsc['name'];
    $surnameAdmin = $row_DatosInsc['surname'];
    $sexadmin = $row_DatosInsc['sex'];
    $Termin = $row_DatosTerm["id_term"];
    $TerminStart = $row_DatosTerm["term_start"];
    $TerminStop = $row_DatosTerm["term_stop"];
    $total = $_POST["admdiscount1"];
    $status = 1;

    $fecha2=time()+3600;
    date("H:i:s",$fecha2);
    ?>
    <?php ConfirmationDone(date('Y'), date('m'), date('d'), date('His',$fecha2), $studentadmin, $nameAdmin, $surnameAdmin, $sexadmin, $Termin, $TerminStart, $TerminStop, $_SESSION["paquete"], $total, $status); ?>
        <div class="subform_cont1">
            <div class="msn_done">
                <br/><br/><br/><br/>
                <h1>Klart!</h1>
                <br/><br/>
                <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Ok" /></a>
            </div>
        </div>
<?php endif ?>

<?php if($_GET["id"]):?>  
    <div class="subform_cont1">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                        <?php echo ObtenerNombreStudent($_GET["id"]);?> <?php echo ObtenerApellidoStudent($_GET["id"]);?>
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
                                    <?php if(productosRestantes($_GET["id"], $row_DatosCourse['id_course'])) { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add_exist.php?courseID=<?php echo $row_DatosCourse['id_course'];?>&id=<?php echo $_GET["id"];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                    }
                                    ?>
                                        <?php if ($totalRows_DatosCourse2 > 0) {?>
                                        <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCourse2 > 0) {
                                    do { ?>
                                    <?php if(productosRestantes($_GET["id"], $row_DatosCourse2['id_course'])) { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add_exist.php?courseID=<?php echo $row_DatosCourse2['id_course'];?>&id=<?php echo $_GET["id"];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                    }
                                    ?>
                                </div>
                            </div>
        
                            <div class="class1" style="border-left: 1px solid #CCC;">
                                <p>Utvaldag Kurser</p>
                                <div class="lista_c">
                                    <?php $SubTotal2 = 0; ?>
                                    <?php
                                    if ($totalRows_DatosCart > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $SubTotal2 = $SubTotal2 + ObtenerPrecioCurso($row_DatosCart['id_course']);?>
                                    <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                                    }
                                    ?>
                                        <?php if ($totalRows_DatosCart2 > 0) {?>
                                        <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCart2 > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart2['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart2['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart2['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $NoDiscTotal2 = $NoDiscTotal2 + ObtenerPrecioCurso($row_DatosCart2['id_course']);?>
                                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
        <form action="students.php?done_exist=<?php echo $_GET["id"]; ?>" method="post" name="" id="">
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                                
                                <?php
                                $SubTotalPlus2 = $SubTotal2 + $NoDiscTotal2;
                                $resprosent2 = ObtenerPDescuento($totalRows_DatosCart);
                                $preciorebaja2 = $SubTotal2 / 100 * $resprosent2;
                                $precioTotalCR2 = $SubTotal2 - $preciorebaja2;
                                $precioTotal2 = $SubTotal2 - $preciorebaja2 + $NoDiscTotal2;
                                ?>

                                <table style="background-color: ; margin:10px 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td colspan="2" valign="middle" align="center" style="font-size:18px; padding:0 0 10px;"><?php echo GetPacket($totalRows_DatosParaPaquete2); ?></td>
                                    </tr>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">Sub Total:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;">&nbsp;<?php echo $SubTotalPlus2; ?> SEK</td>
                                    </tr>
                                    <?php if ($totalRows_DatosCart > 1) {?>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;"><?php //echo ObtenerPDescuento($totalRows_DatosCart); ?> Rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;">- <?php echo $preciorebaja2; ?> SEK </td>
                                    </tr>
                                    <?php } ?>
                                    <!-- <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">= Total efter rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $precioTotalCR2; ?> SEK</td>
                                    </tr> -->
                                    <?php if ($totalRows_DatosCart2 > 0) {?>
                                    <!-- <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">+ Kurser utan rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $NoDiscTotal2; ?> SEK</td>
                                    </tr> -->
                                    <?php } ?>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><input class="textd" type="text" value="<?php echo $precioTotal2; ?>" name="admdiscount" id="admdiscount" size="5" autocomplete="off" style="text-align:center; font-size:18px"> SEK</td>
                                    </tr>
                                </table>

                                <?php //$_SESSION["TotalCompra2"] = $_POST["admdiscount"];?>
                                <?php $_SESSION["paquete2"] = GetPacket($totalRows_DatosParaPaquete2);?>
                                
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
        </form>
    </div>
<?php endif ?>

<?php if($_GET["done_exist"]):?>
    <?php
    $sexadmin2 = sex($_GET["done_exist"]);
    $Termin = $row_DatosTerm["id_term"];
    $TerminStart = $row_DatosTerm["term_start"];
    $TerminStop = $row_DatosTerm["term_stop"];
    $total2 = $_POST["admdiscount"];
    $Package2 = $_SESSION["paquete2"];
    $studentadmin2 = $_GET["done_exist"];
    $nameAdmin2 = ObtenerNombreStudent($_GET["done_exist"]);
    $surnameAdmin2 = ObtenerApellidoStudent($_GET["done_exist"]);
    $status2 = 1;
    $fecha2=time()+3600;
    date("H:i:s",$fecha2);
    ?>
    <?php ConfirmationDone(date('Y'), date('m'), date('d'), date('His',$fecha2), $studentadmin2, $nameAdmin2, $surnameAdmin2, $sexadmin2, $Termin, $TerminStart, $TerminStop, $Package2, $total2, $status2); ?>
        <div class="subform_cont1">
            <div class="msn_done">
                <br/><br/><br/><br/>
                <h1>Klart!</h1>
                <br/><br/>
                <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Ok" /></a>
            </div>
        </div>
<?php endif ?>

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
                    <input class="button_a" style="width: 170px; text-align: center;" value="Stänga" onclick="history.back()"/>
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
                <tr height="50">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['email'];?>" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['personal_number'];?>" minlength="10" maxlength="10" placeholder="Ditt Personnummer (10 siffror)" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telephone'];?>" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="50">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Kön: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None" >None</option>
                        <option value="Man" <?php if ($row_DatosEdit['sex'] == Man) echo "selected"; ?>>Man</option>
                        <option value="Kvinna" <?php if ($row_DatosEdit['sex'] == Kvinna) echo "selected"; ?>>Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['adress'];?>" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['post'];?>" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['city'];?>" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="50">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                            <option value="1" <?php if ($row_DatosInscEdit['status'] == 1) echo "selected"; ?>>Active</option>
                            <option value="2" <?php if ($row_DatosInscEdit['status'] == 2) echo "selected"; ?>>Waiting</option>
                            <option value="3" <?php if ($row_DatosInscEdit['status'] == 3) echo "selected"; ?>>Not paid</option>
                            <option value="0" <?php if ($row_DatosInscEdit['status'] == 0) echo "selected"; ?>>Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        <textarea name="commentary" id="commentary" rows="5" cols="58"><?php echo $row_DatosInscEdit['commentary']; ?></textarea>
                    </td>
                </tr>    
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <input class="button_a" style="width: 170px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" value="Uppdatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="25">
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
                    <?php echo ObtenerNombreStudent(ObtenerIDstudentDesdeTransaccion($_GET['editc']));?> <?php echo ObtenerApellidoStudent(ObtenerIDstudentDesdeTransaccion($_GET['editc']));?>
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
                                <?php if(productosRestantesEdit(ObtenerIDstudentDesdeTransaccion($_GET['editc']), $row_DatosCourseEdit['id_course'], $_GET['editc'])) { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px;" href="cart_add_edit.php?editc=<?php echo $_GET['editc'];?>&courseID=<?php echo $row_DatosCourseEdit['id_course'];?>&tm=<?php echo $_GET['editc'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit['name'];?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit['schedule'];?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                            ( + )
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <?php } while ($row_DatosCourseEdit = mysqli_fetch_assoc($DatosCourseEdit));
                                }
                                ?>
                                    <?php if ($totalRows_DatosCourseEdit2 > 0) {?>
                                    <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                    <?php } ?>
                                <?php
                                if ($totalRows_DatosCourseEdit2 > 0) {
                                do { ?>
                                <?php if(productosRestantesEdit(ObtenerIDstudentDesdeTransaccion($_GET['editc']), $row_DatosCourseEdit2['id_course'], $_GET['editc'])) { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px;" href="cart_add_edit.php?editc=<?php echo $_GET['editc'];?>&courseID=<?php echo $row_DatosCourseEdit2['id_course'];?>&tm=<?php echo $_GET['editc'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit2['name'];?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit2['schedule'];?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                            ( + )
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <?php } while ($row_DatosCourseEdit2 = mysqli_fetch_assoc($DatosCourseEdit2));
                                }
                                ?>
                            </div>
                        </div>
    
                        <div class="class1" style="border-left: 1px solid #CCC;">
                            <p>Utvaldag Kurser</p>
                            <div class="lista_c">
                                <?php $SubTotal = 0; ?>
                                <?php
                                if ($totalRows_DatosCartEdit > 0) {
                                do { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px; margin:0 5px;" href="cart_delete.php?counterID=<?php echo $row_DatosCartEdit['id_counter'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerNombreCurso($row_DatosCartEdit['id_course']);?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerEsquemaCurso($row_DatosCartEdit['id_course']);?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                            ( - )
                                        </div>
                                    </a>
                                </div>
                                <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCartEdit['id_course']);?>
                                <?php } while ($row_DatosCartEdit = mysqli_fetch_assoc($DatosCartEdit));
                                }
                                ?>
                                    <?php if ($totalRows_DatosCartEdit2 > 0) {?>
                                    <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                    <?php } ?>
                                <?php
                                if ($totalRows_DatosCartEdit2 > 0) {
                                do { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px; margin:0 5px;" href="cart_delete.php?counterID=<?php echo $row_DatosCartEdit2['id_counter'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerNombreCurso($row_DatosCartEdit2['id_course']);?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerEsquemaCurso($row_DatosCartEdit2['id_course']);?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                            ( - )
                                        </div>
                                    </a>
                                </div>
                                <?php $NoDiscTotal = $NoDiscTotal + ObtenerPrecioCurso($row_DatosCartEdit2['id_course']);?>
                                <?php } while ($row_DatosCartEdit2 = mysqli_fetch_assoc($DatosCartEdit2));
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
                            
                            <?php
                            $SubTotalPlus = $SubTotal + $NoDiscTotal;
                            $resprosent = ObtenerPDescuento($totalRows_DatosCartEdit);
                            $preciorebaja = $SubTotal / 100 * $resprosent;
                            $precioTotalCR = $SubTotal - $preciorebaja;
                            $precioTotal = $SubTotal - $preciorebaja + $NoDiscTotal;
                            ?>

                            <table style="background-color: ; margin:10px 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="2" valign="middle" align="center" style="font-size:18px; padding:0 0 10px;"><?php echo GetPacket($totalRows_DatosParaPaquete3); ?></td>
                            </tr>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">Sub Total:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $SubTotalPlus; ?> SEK</td>
                            </tr>
                            <?php if ($totalRows_DatosCartEdit > 1) {?>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">- <?php //echo ObtenerPDescuento($totalRows_DatosCart); ?> Rabatt:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $preciorebaja; ?> SEK </td>
                            </tr>
                            <?php } ?>
                            <!-- <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">= Total efter rabatt:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $precioTotalCR; ?> SEK</td>
                            </tr> -->
                            <?php if ($totalRows_DatosCartEdit > 0) {?>
                            <!-- <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">+ Kurser utan rabatt:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $NoDiscTotal; ?> SEK</td>
                            </tr> -->
                            <?php } ?>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><?php echo $precioTotal; ?> SEK</td>
                            </tr>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total Adm:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><input class="textd" type="text" value="<?php echo inscTotal($_GET['editc']); ?>" name="total" id="total" size="5" autocomplete="off" style="text-align:center; font-size:18px"> SEK</td>
                            </tr>
                        </table>

                        <?php $_SESSION["paquete3"] = GetPacket($totalRows_DatosParaPaquete3);?>
                        
                        <!-- Pay method:<br/>
                        Paypal -->
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
        <input type="hidden" name="package" id="package" value="<?php echo $_SESSION["paquete3"]; ?>"/>
        <!-- <input type="hidden" name="total" id="total" value="<?php //echo inscTotal($_GET['editc']); ?>"/> -->
        <input type="hidden" name="id_insc" id="id_insc" value="<?php echo $_GET['editc'];?>"/>
        <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
    </form>
    </div>
<?php endif ?>

<?php if($_GET["deleteID"]):?>
    <div class="subform_cont1">
        <div class="alert_msn">
            <form action="students.php" method="post" name="formdelete" id="formdelete">
                <table style="" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="85">
                        <td colspan="2" valign="middle" align="center" style="color: red; font-size: 14px;">
                            <h2>Delete</h2>
                            <label>Are you sure you want delete this Inscription?</label> 
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="2" valign="middle" align="center">
                           
                        </td>
                    </tr>
                    <tr height="85">
                        <td colspan="2" valign="middle" align="center">
                            <input class="button_a" style="width: 140px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" style="width: 140px;" value="Ok!" />
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['deleteID'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formdelete" />
            </form>
        </div>
    </div>
<?php endif?>