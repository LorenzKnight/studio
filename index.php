<?php require_once('connections/conexion.php');?>
<html>
<head>
<meta charset="iso-8859-1">
<meta name="keywords" content="Loops Dance studio, dans, dansskolan, bachata, salsa, kizomba, urban kiz, street dans, hiphop, balett, dans i göteborg">
<meta name="description" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<!-- <meta http-equiv="refresh" content="30"> -->
<!-- <meta name="Dance-in-Gothenburg" content="Loops Dance studio is a danceschool in Gothenburg with focus in Urban Kizomba but with heart for several diferent partners dance and dance style."> -->
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />

<?php $menuactive= 1;?>
</head>

<body>
    <?php include("inc/head.php")?>
    <?php include("inc/warnings.php")?>
    <?php include("inc/banner_java.php")?>
    <?php include("inc/news.php")?>
    <?php include("inc/next_events.php")?>
    <?php include("inc/signup.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>