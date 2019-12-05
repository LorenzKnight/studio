<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />

<link rel="stylesheet" type="text/css" href="simple_calendar/tcal.css" />
<script type="text/javascript" src="simple_calendar/tcal.js"></script> 

<style>
    
</style>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Events</h2></div>
          <?php include("inc/events_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>