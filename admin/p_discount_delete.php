<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
$query_Delete = sprintf("DELETE FROM pack_discount WHERE id_p_discount=%s", GetSQLValueString($_GET["id"], "int"));
echo $query_Delete;
$Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $insertGoTo = "p_discount.php";
  header(sprintf("Location: %s", $insertGoTo));
  mysqli_free_result($Result1);
?>