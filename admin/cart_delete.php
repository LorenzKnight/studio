<?php require_once('../connections/conexion.php');?>
<?php
$query_Delete = sprintf("DELETE FROM cart WHERE id_counter=%s", 
                        GetSQLValueString($_GET["counterID"], "int"));
echo $query_Delete;
$Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $insertGoTo = $_SERVER["HTTP_REFERER"];
  header(sprintf("Location: %s", $insertGoTo));
  mysqli_free_result($Result1);
?>