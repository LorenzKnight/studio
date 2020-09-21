<?php require_once('../connections/conexion.php');?>
<?php
$query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term ASC");
$DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
$row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosTerm = mysqli_num_rows($DatosTerm);

$TermAct = $row_DatosTerm['id_term'];
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
  $insertSQL = sprintf("INSERT INTO cart(id_student, sex_student, id_course, course_category, id_term, date) 
                        VALUES (%s, %s, %s, %s, $TermAct, NOW())",
                        GetSQLValueString($_GET["id"], "int"), 
                        GetSQLValueString(sex($_GET["id"]), "text"),                      
                        GetSQLValueString($_GET["courseID"], "int"),
                        GetSQLValueString(CourseCategory($_GET["courseID"]), "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo1 = $_SERVER["HTTP_REFERER"];
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
    $insertGoTo1 .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo1));
?>