<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
$query_Delete = sprintf("DELETE FROM events WHERE id_event=%s", GetSQLValueString($_GET["DeleteID"], "int"));
echo $query_Delete;
$Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $insertGoTo = "events.php";
  header(sprintf("Location: %s", $insertGoTo));
  mysqli_free_result($Result1);
?>