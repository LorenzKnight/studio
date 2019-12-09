<?php require_once('connections/conexion.php');?>
<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s ORDER BY id_student ASC",
GetSQLValueString($_SESSION['ydl_UserId'], "int"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<?php
$query_DatosRegCourse = sprintf("SELECT * FROM inscriptions WHERE id_student=%s ORDER BY id_insc ASC",
GetSQLValueString($_SESSION['ydl_UserId'], "int"));
$DatosRegCourse = mysqli_query($con, $query_DatosRegCourse) or die(mysqli_error($con));
$row_DatosRegCourse = mysqli_fetch_assoc($DatosRegCourse);
$totalRows_DatosRegCourse = mysqli_num_rows($DatosRegCourse);
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Yandali Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>
    <?php include("inc/head.php")?>
    <div class="space">
        <div class="" style="background-color: white; width: 400px; overflow: auto; padding: 50px 0; margin: 0 auto; text-align: center; border: 1px solid #f1f1f1; border-radius: 7px;">
            Paypal method...<br><br>
            <?php //echo $_SESSION['ydl_UserId']; ?>
            <h3><?php echo ObtenerNombrePacket($row_DatosReg["package"]); ?> - <?php echo ObtenerPrecioPacket($row_DatosReg["package"]); ?> SEK</h3>
            <?php if ($row_DatosRegCourse["course_1"] != "") { ?>
            Kurs 1: <?php echo ObtenerNombreCurso($row_DatosRegCourse["course_1"]); ?><br>
            <?php } ?>
            <?php if ($row_DatosRegCourse["course_2"] != "") { ?>
            Kurs 2: <?php echo ObtenerNombreCurso($row_DatosRegCourse["course_2"]); ?><br>
            <?php } ?>
            <?php if ($row_DatosRegCourse["course_3"] != "") { ?>
            Kurs 3: <?php echo ObtenerNombreCurso($row_DatosRegCourse["course_3"]); ?><br>
            <?php } ?>
            <?php if ($row_DatosRegCourse["course_4"] != "") { ?>
            Kurs 4: <?php echo ObtenerNombreCurso($row_DatosRegCourse["course_4"]); ?><br>
            <?php } ?>
            <br><br>
            <?php
            //DATOS FAKE
            //$urlpaypal="https://www.sandbox.paypal.com/cgi-bin/webscr";
            //$mailpaypal="joellorenzo.k@gmail.com";
            //DATOS REAL
            $urlpaypal="https://www.paypal.com/cgi-bin/webscr";
            $mailpaypal="ekonomi@yandali.se";
            ?>
            <form action="<?php echo $urlpaypal;?>" method="post" id="paypal_form">
                <input type="hidden" name="upload" value="1" />
                <input type="hidden" name="amount" value="<?php echo ObtenerPrecioPacket($row_DatosReg["package"]); ?>" />
                <input type="hidden" name="business" value="<?php echo $mailpaypal;?>" />
                <input type="hidden" name="receiver_email" value="<?php echo $mailpaypal;?>" />
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="charset" value="utf-8" />
                <input type="hidden" name="currency_code" value="SEK" />
                <input type="hidden" name="item_name" value="<?php echo ObtenerNombrePacket($row_DatosReg["package"]); ?>" />
                <input type="hidden" name="payer_id" value="<?php echo $row_DatosReg["id_student"]; ?>" />
                <input type="hidden" name="payer_email" value="<?php echo $row_DatosReg["email"]; ?>" />
                <input type="hidden" name="return" value="http://www.yandali.se/reg_done.php?control=<?php echo $row_DatosReg["id_student"]; ?>" />
                <input type="hidden" name="cancel_return" value="http://www.yandali.se/reg_error.php?control=<?php echo $row_DatosReg["id_student"]; ?>" />
                <input type="hidden" name="rm" value="2" />
                <input type="hidden" name="bn" value="PRESTASHOP_WPS" />
                <input type="hidden" name="cbt" value="Volver a www.yandali.se" />
                <input type="image" src="https://www.paypal.com/es_ES/ES/i/btn/btn_xpressCheckout.gif" name="image">
            </form>
        </div>
        <a href="reg_done.php?control=<?php //echo $row_DatosReg["id_student"]; ?>">Click test</a>
    </div>
    <?php include("inc/foot.php")?>
</body>
</html>