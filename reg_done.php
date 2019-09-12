<?php require_once('connections/conexion.php');?>
<?php
$query_DatosReg = sprintf("SELECT * FROM students ORDER BY id_student DESC");
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
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
        <div class="theemail">
            <?php echo $_GET["control"]?>
            <?php
            $contenido ='Aqui va el mensage del mail';
            $asunto ='Asunto o encabezado';
            SendMailHtml($row_DatosReg['email'], $contenido, $asunto);
            ?>
        </div>
    </div>
    <?php include("inc/foot.php")?>
</body>
</html>