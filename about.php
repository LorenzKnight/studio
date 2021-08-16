<?php require_once('connections/conexion.php');?>
<?php
    $query_Datoscollab = sprintf("SELECT * FROM collaborators WHERE id_collaborators = %s AND status= 1",
                                    GetSQLValueString($_GET["id"], "int"));
    $Datoscollab = mysqli_query($con, $query_Datoscollab) or die(mysqli_error($con));
    $row_Datoscollab = mysqli_fetch_assoc($Datoscollab);
    $totalRows_Datoscollab = mysqli_num_rows($Datoscollab);
?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<link href="css/card.css" rel="stylesheet" type="text/css"  media="all" />

<?php $menuactive= 5;?>
</head>

<body>
    <?php include("inc/head.php")?>
    <?php include("inc/about_wrap.php")?>
    <?php include("inc/collaborators.php")?>
    <?php include("inc/more_animate.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>