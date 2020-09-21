<?php require_once('connections/conexion.php');?>
<!-- Esta linea en conjunto con la funcion "ConfirmacionPago" hace que la celda done cambie su valor-->
<?php ConfirmacionPago(1, date('Ymd')); ?>
<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s ORDER BY id_student ASC",
GetSQLValueString($_SESSION['ydl_UserId'], "int"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<?php
$query_DatosRegDone = sprintf("SELECT * FROM inscriptions WHERE id_student=%s ORDER BY id_insc ASC",
GetSQLValueString($_SESSION['ydl_UserId'], "int"));
$DatosRegDone = mysqli_query($con, $query_DatosRegDone) or die(mysqli_error($con));
$row_DatosRegDone = mysqli_fetch_assoc($DatosRegDone);
$totalRows_DatosRegDone = mysqli_num_rows($DatosRegDone);
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Loops Dance Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>
    <?php include("inc/head.php")?>
    <div class="space">
        <div class="theemail">
            <?php //echo $_SESSION['ydl_UserId']; ?>
            <?php //echo $_GET["control"];?>
            <?php 
                $curso1 = $row_DatosRegDone["course_1"];
                $curso2 = $row_DatosRegDone["course_2"];
                $curso3 = $row_DatosRegDone["course_3"];
                $curso4 = $row_DatosRegDone["course_4"];

                $price = $row_DatosRegDone['package'];
            ?>
            <?php
            $contenido ='<p>Du är nu anmäld till kursen/kurserna</p><br/><p style="color:#666;">'; 
            $contenido.=ObtenerNombreCurso($curso1); $contenido.='</p><p style="color:#666;">';
            $contenido.=ObtenerNombreCurso($curso2); $contenido.='</p><p style="color:#666;">';
            $contenido.=ObtenerNombreCurso($curso3); $contenido.='</p><p style="color:#666;">';
            $contenido.=ObtenerNombreCurso($curso4); $contenido.='</p></br>';

            $contenido.='Priset för din kurs/kurser är totalt ('; $contenido.=ObtenerPrecioPacket($price); $contenido.=' kr) inkl 0% moms.
            <br/>
            <br/>
            <p>Vi ser verkligen fram emot vårens termin och är så glada att du vill vara en del av vår dansskola!</p>
            <br/>
            <p>Kurserna startar v.3.</p>
            <p>Om du har några frågor inför start så är det bara att höra av dig till oss via mejl på <a href="mailto:info@yandali.se">info@yandali.se</a></p>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <p>Vi ses snart!</p>
            <p>/ Yandali</p>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>';
            $asunto ='Bekräftelse-Anmälan till kurs';
            SendMailHtml($row_DatosReg['email'], $contenido, $asunto);
            ?>
        </div>
    </div>
    <?php include("inc/foot.php")?>
</body>
</html>