<?php require_once('connections/conexion.php');?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<?php $menuactive= 6;?>
</head>
<body>
    <?php include("inc/head.php")?>
    <?php include("inc/events_list.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>