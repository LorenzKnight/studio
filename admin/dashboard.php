<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php studentInactiv(0, date('Ymd')); ?>
<?php TerminStop(0, date('Ymd')); ?>
<?php
$dateFuture = date('Ymd') + 2;
$currentDate = date('Ymd');
if (obtenerTerminActivo($dateFuture, 1) || obtenerTerminActivo($currentDate, 0) || terminCaducado(1)) {

  $insertGoTo = "periods.php?updatepopup=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
} 
?>
<?php
  $query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term DESC");
  $DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
  $row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
  $totalRows_DatosTerm = mysqli_num_rows($DatosTerm);

  $TermAct = $row_DatosTerm['id_term'];
?>
<?php
 $query_DatosConsulta = sprintf("SELECT * FROM inscriptions WHERE term = $TermAct AND status != 3 ORDER BY id_insc ASC"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
 $query_DatosConsultaG = sprintf("SELECT * FROM inscriptions WHERE sex = 'Kvinna' AND term = $TermAct ORDER BY id_insc ASC"); 
 $DatosConsultaG = mysqli_query($con, $query_DatosConsultaG) or die(mysqli_error($con));
 $row_DatosConsultaG = mysqli_fetch_assoc($DatosConsultaG);
 $totalRows_DatosConsultaG = mysqli_num_rows($DatosConsultaG);
?>
<?php $ActDate = date('Ymd'); ?>
<?php
  $query_DatosEvent = sprintf("SELECT * FROM events WHERE event_date >= $ActDate ORDER BY id_event ASC");
  $DatosEvent = mysqli_query($con, $query_DatosEvent) or die(mysqli_error($con));
  $row_DatosEvent = mysqli_fetch_assoc($DatosEvent);
  $totalRows_DatosEvent = mysqli_num_rows($DatosEvent);
?>
<!--/////////////////////////////////////////////////FILTER LISTS/////////////////////////////////////////////////////////-->
<?php
  $query_DatosCourse_filter = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
  $DatosCourse_filter = mysqli_query($con, $query_DatosCourse_filter) or die(mysqli_error($con));
  $row_DatosCourse_filter = mysqli_fetch_assoc($DatosCourse_filter);
  $totalRows_DatosCourse_filter = mysqli_num_rows($DatosCourse_filter);
?>
<?php
if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formfilter"))
{   
     $query_DatosConsultaB = sprintf("SELECT * FROM cart WHERE id_course LIKE %s AND id_term = $TermAct ORDER BY id_counter ASC",
                              GetSQLValueString("%".$_GET["course"]."%", "text"));
}
else
{
 $query_DatosConsultaB = sprintf("SELECT * FROM inscriptions WHERE term = $TermAct ORDER BY id_insc");
}
 $DatosConsultaB = mysqli_query($con, $query_DatosConsultaB) or die(mysqli_error($con));
 $row_DatosConsultaB = mysqli_fetch_assoc($DatosConsultaB);
 $totalRows_DatosConsultaB = mysqli_num_rows($DatosConsultaB);
?>

<?php
if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formfilter"))
{   
  $query_DatosSexW = sprintf("SELECT * FROM cart WHERE id_course LIKE %s AND sex_student = 'Kvinna' AND id_term = $TermAct ORDER BY id_counter ASC",
                          GetSQLValueString("%".$_GET["course"]."%", "text"));
}
else
{
 $query_DatosSexW = sprintf("SELECT * FROM inscriptions WHERE term = $TermAct ORDER BY id_insc");
}
 $DatosSexW = mysqli_query($con, $query_DatosSexW) or die(mysqli_error($con));
 $row_DatosSexW = mysqli_fetch_assoc($DatosSexW);
 $totalRows_DatosSexW = mysqli_num_rows($DatosSexW);
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />
<!-- Grafica de cantidad de estudiantes -->
<script src="roundSlider-1.3.3/demo/scripts/jquery-1.11.3.min.js"></script>
<link href="roundSlider-1.3.3/dist/roundslider.min.css" rel="stylesheet" />
<script src="roundSlider-1.3.3/dist/roundslider.min.js"></script>
<!-- Fin de la grafica de cantidad de estudiantes -->
<style>
    
</style>
</head>
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <div class="title"><h2>Dashboard <?php //echo $date?></h2></div>
          <?php include("inc/dashboard_content.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>