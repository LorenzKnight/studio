<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
$query_Delete = sprintf("DELETE FROM inscriptions WHERE id_insc=%s", GetSQLValueString($_GET["id"], "int"));
echo $query_Delete;
$Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $insertGoTo = "students.php";
  header(sprintf("Location: %s", $insertGoTo));
  mysqli_free_result($Result1);
?>