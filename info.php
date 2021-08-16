<?php require_once('connections/conexion.php');?>
<?php
    $query_DatosInfo = sprintf("SELECT * FROM publications WHERE site = 4 AND status = 1 ORDER BY id_publications DESC"); 
    $DatosInfo = mysqli_query($con, $query_DatosInfo) or die(mysqli_error($con));
    $row_DatosInfo = mysqli_fetch_assoc($DatosInfo);
    $totalRows_DatosInfo = mysqli_num_rows($DatosInfo);
?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>
    <?php include("inc/head.php")?>
    <?php include("inc/info_wrap.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>