<?php require_once('connections/conexion.php');?>
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}

$query_DatosSite = sprintf("SELECT * FROM site_info"); 
$DatosSite = mysqli_query($con, $query_DatosSite) or die(mysqli_error($con));
$row_DatosSite = mysqli_fetch_assoc($DatosSite);
$totalRows_DatosSite = mysqli_num_rows($DatosSite);
?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<?php $menuactive= 4;?>
</head>
<body>
    <?php include("inc/head.php")?>
    <?php include("inc/mail_box.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>
<?php
mysqli_free_result($DatosSite);
?>