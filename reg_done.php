<?php require_once('connections/conexion.php');?>
<!-- Esta linea en conjunto con la funcion "ConfirmacionPago" hace que la celda done cambie su valor-->
<?php ConfirmacionPago(1, date('Ymd')); ?>
<?php
$query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term ASC");
$DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
$row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosTerm = mysqli_num_rows($DatosTerm);

$TermAct = $row_DatosTerm['id_term'];
?>
<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s ORDER BY id_student ASC",
GetSQLValueString($_SESSION['ydl_UserId'], "int"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<?php
    $query_DatosRegDone = sprintf("SELECT * FROM inscriptions WHERE id_student=%s AND term=%s ORDER BY id_insc ASC",
                                    GetSQLValueString($_SESSION['ydl_UserId'], "int"),
                                    GetSQLValueString($TermAct, "int"));
    $DatosRegDone = mysqli_query($con, $query_DatosRegDone) or die(mysqli_error($con));
    $row_DatosRegDone = mysqli_fetch_assoc($DatosRegDone);
    $totalRows_DatosRegDone = mysqli_num_rows($DatosRegDone);
?>
<?php
    $query_DatosCart = sprintf("SELECT * FROM cart WHERE id_student=%s AND id_term=%s AND transaction_made!=%s ORDER BY id_counter ASC",
                                GetSQLValueString($_SESSION['ydl_UserId'], "int"),
                                GetSQLValueString($TermAct, "int"),
                                0);
    $DatosCart = mysqli_query($con, $query_DatosCart) or die(mysqli_error($con));
    $row_DatosCart = mysqli_fetch_assoc($DatosCart);
    $totalRows_DatosCart = mysqli_num_rows($DatosCart);
?>
<html>
<head>
<title>Loops Dance Studio</title>
<meta charset="ISO-8859-1">
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>
    <?php include("inc/head.php")?>
    <div class="space">
        <div class="theemail">
            <?php //echo $_SESSION['ydl_UserId']; ?>
            <?php 
                $nombre = $row_DatosRegDone['id_student'];
                $packet = $row_DatosRegDone['package'];
                $week = $row_DatosTerm['start_week'];
                $date = $row_DatosRegDone['date'];
                $price = $row_DatosRegDone['total'];
                // $cursos = CursosParaMail($row_DatosRegDone['id_student'], $TermAct);
            ?>
            <?php
            $contenido='<p>Kära '; $contenido.=ObtenerNombreStudent($nombre); $contenido.='&nbsp;'; $contenido.=ObtenerApellidoStudent($nombre);
            $contenido.='</p><p>Du är anmält f.o.m. '; $contenido.=$date; $contenido.=' med '; $contenido.=$packet; $contenido.='</p>';

            $contenido.=CursosParaMail($row_DatosRegDone['id_student'], $TermAct); 
            
            $contenido.='<p style="margin-top:160px;">Priset för din kurspacket är totalt ('; $contenido.=$price; $contenido.=' kr) inkl 0% moms.</p>
            <br/>
            <p>Vi ser verkligen fram emot vårens termin och är så glada att du vill vara en del av vår dansskola!</p>
            <br/>
            <p>Kurserna startar '; $contenido.=$week; $contenido.='</p>
            <p>Om du har några frågor inför start så är det bara att höra av dig till oss via mejl på <a href="mailto:info@loopsdancestudio.se">info@loopsdancestudio.se</a></p>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <p>Vi ses snart!</p>
            <p>/ Loops</p>
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

<style>
.theemail {
    width: 680px;
    margin: 0 auto;
    padding: 3% 2%;
    background-color: white;
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
}
</style>