<?php require_once('connections/conexion.php');?>
<?php
    $date_act = date('Y-m-d');
    $fecha3 = strtotime('+1 day', strtotime($date_act));
    $fecha3 = date('Y-m-d', $fecha3);
?>
<?php //$fecha3=date("Y-m-d"); ?>
<!-- /////////////////////////////////// Consulta que recoje el ternim para insertarlo en un registro nuevo /////////////////////////////////////////// -->
<?php
$query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term ASC");
$DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
$row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosTerm = mysqli_num_rows($DatosTerm);
?>
<!-- /////////////////////////////////// Consulta que recoje el datos para mostrar especificacion de pago /////////////////////////////////////////// -->
<?php
$query_DatosReg = sprintf("SELECT * FROM inscriptions WHERE id_student=%s ORDER BY id_insc DESC",
        GetSQLValueString($_SESSION['ydl_UserId'], "int"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<?php
$query_DatosRegCourse = sprintf("SELECT * FROM cart WHERE id_student=%s AND date=%s AND id_term=%s ORDER BY id_counter ASC",
        GetSQLValueString($_SESSION['ydl_UserId'], "int"),
        GetSQLValueString($date_act, "text"),
        GetSQLValueString($row_DatosTerm['id_term'], "int"));
$DatosRegCourse = mysqli_query($con, $query_DatosRegCourse) or die(mysqli_error($con));
$row_DatosRegCourse = mysqli_fetch_assoc($DatosRegCourse);
$totalRows_DatosRegCourse = mysqli_num_rows($DatosRegCourse);
?>
<!-- /////////////////////////////////// Final Consulta que recoje el ternim para insertarlo en un registro nuevo /////////////////////////////////////////// -->
<?php
    $query_DatosPagina = sprintf("SELECT * FROM site_info"); 
    $DatosPagina = mysqli_query($con, $query_DatosPagina) or die(mysqli_error($con));
    $row_DatosPagina = mysqli_fetch_assoc($DatosPagina);
    $totalRows_DatosPagina = mysqli_num_rows($DatosPagina);
?>
<?php
$Termin = $row_DatosTerm["id_term"];
$TerminStart = $row_DatosTerm["term_start"];
$TerminStop = $row_DatosTerm["term_stop"];
$total = $_SESSION["TotalCompra"];
$Package = $_SESSION["paquete"];
$sex = $_SESSION["sex"];

$fecha2=time()+7200;//2 hora//
date("H:i:s",$fecha2);

?>
<?php //if (comprobarRegistroUnico($_SESSION['ydl_UserId'], $Termin)) { ?>
    <?php ConfirmationPago(date('Y'), date('m'), date('d'), date('His'), $sex, $Termin, $TerminStart, $TerminStop, $Package, $total); ?>
<?php //} else { 
    // $insertGoTo = "payment_method.php?exist=1";
    // if (isset($_SERVER['QUERY_STRING'])) {
    // $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    // $insertGoTo .= $_SERVER['QUERY_STRING'];
    // }
    // header(sprintf("Location: %s", $insertGoTo));
//} ?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>
    <?php include("inc/head.php")?>
    <div class="space">
        <div class="" style="background-color: white; width: 400px; overflow: auto; padding: 20px 0; margin: 0 auto; text-align: center; border: 1px solid #f1f1f1; border-radius: 7px;">           
            
            <h2 style="text-align: center">STEG 2</h2>
            <h4 style="text-align: center">BETALA OCH SLUTFÖR DIN ANMÄLAN</h4>
            </br>
            <div class="payment_over">
                <p>Klicka på den gula Paypal-ikonen.</p></br>
                <p>I nästa steg kommer du få välja om du vill betala via PayPal eller med ditt vanliga kort.</p></br>
                <hr>
            </div>
            
            <h4><?php echo ObtenerNombreStudent($_SESSION['ydl_UserId']); ?> <?php echo ObtenerApellidoStudent($_SESSION['ydl_UserId']); ?></h4>
                <table width="80%" cellspacing="0" style="background-color: ; margin: 0 auto;">
                    <tr height="20">
                        <td nowrap="nowrap" align="center">        
                            <p><?php echo $Package; ?></p>
                        </td>
                    </tr>
                    <?php
                    if ($totalRows_DatosRegCourse > 0) {
                    do { ?>
                    <tr height="20">
                        <td nowrap="nowrap" align="left">
                            <p style="font-size:12px;"><?php echo ObtenerNombreCurso($row_DatosRegCourse["id_course"]); ?></p>
                        </td>
                    </tr>
                    <?php } while ($row_DatosRegCourse = mysqli_fetch_assoc($DatosRegCourse));
                    }
                    ?>
                </table>
            <h4>Total efter rabatt:</h4>
            <h3><?php echo $total; ?> SEK</h3>
            <?php
            //DATOS FAKE
            $urlpaypal="https://www.sandbox.paypal.com/cgi-bin/webscr";
            $mailpaypal="joellorenzo.k@gmail.com";
            //DATOS REAL
            // $urlpaypal="https://www.paypal.com/cgi-bin/webscr";
            // $mailpaypal= $row_DatosPagina["paypal_account"];
            ?>
            <form action="<?php echo $urlpaypal;?>" method="post" id="paypal_form" target="_blank">
                <input type="hidden" name="upload" value="1" />
                <input type="hidden" name="amount" value="<?php echo $total; ?>" />
                <input type="hidden" name="business" value="<?php echo $mailpaypal;?>" />
                <input type="hidden" name="receiver_email" value="<?php echo $mailpaypal;?>" />
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="charset" value="utf-8" />
                <input type="hidden" name="currency_code" value="SEK" />
                <input type="hidden" name="item_name" value="<?php echo GetPacket($totalRows_DatosRegCourse);?>" />
                <input type="hidden" name="payer_id" value="<?php echo $row_DatosReg["id_student"]; ?>" />
                <input type="hidden" name="payer_email" value="<?php echo ObtenerEmailStudent($row_DatosReg["id_student"]); ?>" />
                <input type="hidden" name="return" value="<?php echo $dominio; ?>/reg_done.php?control=<?php echo $row_DatosReg["id_student"]; ?>" />
                <input type="hidden" name="cancel_return" value="<?php echo $dominio; ?>/reg_error.php?control=<?php echo $row_DatosReg["id_student"]; ?>" />
                <input type="hidden" name="rm" value="2" />
                <input type="hidden" name="bn" value="PRESTASHOP_WPS" />
                <input type="hidden" name="cbt" value="Volver a www.loopsdancestudio.se" />
                <input type="image" src="../img/sys/paypal_button.png" name="image" style="cursor: pointer; width: 260px;" />
            </form>
        </div>
        <!-- <a href="reg_done.php?control=<?php //echo $row_DatosReg["id_student"]; ?>">Click test</a> -->
    </div>
    <?php include("inc/foot.php")?>
</body>
</html>