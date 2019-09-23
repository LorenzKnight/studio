<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
$query_Delete = sprintf("DELETE FROM schedule WHERE id_schedule=%s", GetSQLValueString($_GET["regdel"], "int"));
echo $query_Delete;
$Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $insertGoTo = "schedule.php";
  header(sprintf("Location: %s", $insertGoTo));
  mysqli_free_result($Result1);
?>