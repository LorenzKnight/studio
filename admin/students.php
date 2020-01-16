<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term ASC");
$DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
$row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosTerm = mysqli_num_rows($DatosTerm);

$TermAct = $row_DatosTerm['id_term'];
?>
<?php
if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formsearch"))
{   
     $query_DatosConsulta = sprintf("SELECT * FROM inscriptions WHERE id_student LIKE %s AND id_student LIKE %s AND term = $TermAct ORDER BY id_insc ASC",
                              GetSQLValueString("%".ObtenerNombreParaBuscar($_GET["search"])."%", "text"),
                              GetSQLValueString("%".ObtenerApellidoParaBuscar($_GET["search"])."%", "text"));
}
else if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formfilter"))
{   
     $query_DatosConsulta = sprintf("SELECT * FROM inscriptions WHERE course_1 LIKE %s OR course_2 LIKE %s OR course_3 LIKE %s OR course_4 LIKE %s AND term = $TermAct ORDER BY id_insc ASC",
                              GetSQLValueString("%".$_GET["course"]."%", "text"),
                              GetSQLValueString("%".$_GET["course"]."%", "text"),
                              GetSQLValueString("%".$_GET["course"]."%", "text"),
                              GetSQLValueString("%".$_GET["course"]."%", "text"));
}
else
{
 $query_DatosConsulta = sprintf("SELECT * FROM inscriptions WHERE term = $TermAct ORDER BY id_insc");
}
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
$query_DatosPackage = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
$row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
$totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
?>
<?php
 $query_DatosCourse = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse = mysqli_query($con, $query_DatosCourse) or die(mysqli_error($con));
$row_DatosCourse = mysqli_fetch_assoc($DatosCourse);
$totalRows_DatosCourse = mysqli_num_rows($DatosCourse);

 $query_DatosCourse2 = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse2 = mysqli_query($con, $query_DatosCourse2) or die(mysqli_error($con));
$row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2);
$totalRows_DatosCourse2 = mysqli_num_rows($DatosCourse2);

$query_DatosCourse3 = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse3 = mysqli_query($con, $query_DatosCourse3) or die(mysqli_error($con));
$row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3);
$totalRows_DatosCourse3 = mysqli_num_rows($DatosCourse3);

$query_DatosCourse4 = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse4 = mysqli_query($con, $query_DatosCourse4) or die(mysqli_error($con));
$row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4);
$totalRows_DatosCourse4 = mysqli_num_rows($DatosCourse4);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  $year = date("Y");
  $month = date("m");
  $day = date("d");
  $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, password, personal_number, telephone, adress, post, city, sex, agree, package, via) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["surname"], "text"),
                        GetSQLValueString($_POST["email"], "text"),
                        GetSQLValueString($_POST["password"], "text"),
                        GetSQLValueString($_POST["personal_number"], "text"),
                        GetSQLValueString($_POST["telephone"], "int"),
                        GetSQLValueString($_POST["adress"], "text"),
                        GetSQLValueString($_POST["post"], "int"),
                        GetSQLValueString($_POST["city"], "text"),
                        GetSQLValueString($_POST["sex"], "text"),
                        GetSQLValueString($_POST["agree"], "text"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["via"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo1 = "students.php?newcompl=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
    $insertGoTo1 .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo1));
}
?>
<?php
 $method = $_SESSION['std_UserId'];

 $query_DatosInsc = sprintf("SELECT * FROM students WHERE via = $method ORDER BY id_student DESC"); 
 $DatosInsc = mysqli_query($con, $query_DatosInsc) or die(mysqli_error($con));
 $row_DatosInsc = mysqli_fetch_assoc($DatosInsc);
 $totalRows_DatosInsc = mysqli_num_rows($DatosInsc);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formcompl")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO inscriptions(date, year, month, day, time, id_student, sex, term, term_start, term_stop, package, course_1, course_2, course_3, course_4, status, done, payment) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["id_student"], "int"),
                        GetSQLValueString($_POST["sex"], "text"),                   
                        GetSQLValueString($_POST["term"], "int"),
                        GetSQLValueString($_POST["term_start"], "text"),
                        GetSQLValueString($_POST["term_stop"], "text"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["course_1"], "int"),
                        GetSQLValueString($_POST["course_2"], "int"),
                        GetSQLValueString($_POST["course_3"], "int"),
                        GetSQLValueString($_POST["course_4"], "int"),
                        GetSQLValueString($_POST["status"], "text"),
                        GetSQLValueString($_POST["done"], "int"),
                        GetSQLValueString($_POST["payment"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "students.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END EDIT/////////////////////////////////////////////////////////-->
<?php
 $query_DatosEdit = sprintf("SELECT * FROM students WHERE id_student=%s", GetSQLValueString($_GET["editi"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formediti")) {
     
     $updateSQL = sprintf("UPDATE students SET name=%s, surname=%s, email=%s, personal_number=%s, telephone=%s, sex=%s, adress=%s, post=%s, city=%s WHERE id_student=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["surname"], "text"),
                          GetSQLValueString($_POST["email"], "text"),
                          GetSQLValueString($_POST["personal_number"], "text"),
                          GetSQLValueString($_POST["telephone"], "int"),
                          GetSQLValueString($_POST["sex"], "text"),
                          GetSQLValueString($_POST["adress"], "text"),
                          GetSQLValueString($_POST["post"], "int"),
                          GetSQLValueString($_POST["city"], "text"),
                          GetSQLValueString($_POST["id_student"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "students.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<?php
$query_DatosPackage2 = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage2 = mysqli_query($con, $query_DatosPackage2) or die(mysqli_error($con));
$row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2);
$totalRows_DatosPackage2 = mysqli_num_rows($DatosPackage2);
?>
<?php
 $query_DatosCourse_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse_edit = mysqli_query($con, $query_DatosCourse_edit) or die(mysqli_error($con));
$row_DatosCourse_edit = mysqli_fetch_assoc($DatosCourse_edit);
$totalRows_DatosCourse_edit = mysqli_num_rows($DatosCourse_edit);

 $query_DatosCourse2_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse2_edit = mysqli_query($con, $query_DatosCourse2_edit) or die(mysqli_error($con));
$row_DatosCourse2_edit = mysqli_fetch_assoc($DatosCourse2_edit);
$totalRows_DatosCourse2_edit = mysqli_num_rows($DatosCourse2_edit);

$query_DatosCourse3_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse3_edit = mysqli_query($con, $query_DatosCourse3_edit) or die(mysqli_error($con));
$row_DatosCourse3_edit = mysqli_fetch_assoc($DatosCourse3_edit);
$totalRows_DatosCourse3_edit = mysqli_num_rows($DatosCourse3_edit);

$query_DatosCourse4_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse4_edit = mysqli_query($con, $query_DatosCourse4_edit) or die(mysqli_error($con));
$row_DatosCourse4_edit = mysqli_fetch_assoc($DatosCourse4_edit);
$totalRows_DatosCourse4_edit = mysqli_num_rows($DatosCourse4_edit);
?>
<?php
 $query_DatosEditInc = sprintf("SELECT * FROM inscriptions WHERE id_student=%s", GetSQLValueString($_GET["editc"], "int")); 
 $DatosEditInc = mysqli_query($con, $query_DatosEditInc) or die(mysqli_error($con));
 $row_DatosEditInc = mysqli_fetch_assoc($DatosEditInc);
 $totalRows_DatosEditInc = mysqli_num_rows($DatosEditInc);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditc")) {
     $updateSQL = sprintf("UPDATE inscriptions SET package=%s, course_1=%s, course_2=%s, course_3=%s, course_4=%s, status=%s WHERE id_student=%s",
                          GetSQLValueString($_POST["package"], "int"),
                          GetSQLValueString($_POST["course_1"], "int"),
                          GetSQLValueString($_POST["course_2"], "int"),
                          GetSQLValueString($_POST["course_3"], "int"),
                          GetSQLValueString($_POST["course_4"], "int"),
                          GetSQLValueString($_POST["status"], "int"),
                          GetSQLValueString($_POST["id_student"], "int"));
$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
$updateGoTo = "students.php";
if (isset($_SERVER['QUERY_STRING'])) {
$updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
$updateGoTo .= $_SERVER['QUERY_STRING'];
}
header(sprintf("Location: %s", $updateGoTo));
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END SEE/////////////////////////////////////////////////////////-->
<?php
 $query_DatosSee = sprintf("SELECT * FROM inscriptions WHERE id_student=%s", GetSQLValueString($_GET["see"], "int")); 
 $DatosSee = mysqli_query($con, $query_DatosSee) or die(mysqli_error($con));
 $row_DatosSee = mysqli_fetch_assoc($DatosSee);
 $totalRows_DatosSee = mysqli_num_rows($DatosSee);
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////FILTER LISTS/////////////////////////////////////////////////////////-->
<?php
$query_DatosCourse_filter = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
$DatosCourse_filter = mysqli_query($con, $query_DatosCourse_filter) or die(mysqli_error($con));
$row_DatosCourse_filter = mysqli_fetch_assoc($DatosCourse_filter);
$totalRows_DatosCourse_filter = mysqli_num_rows($DatosCourse_filter);
?>
<?php
$query_DatosTerm_filter = sprintf("SELECT * FROM term ORDER BY id_term ASC"); 
$DatosTerm_filter = mysqli_query($con, $query_DatosTerm_filter) or die(mysqli_error($con));
$row_DatosTerm_filter = mysqli_fetch_assoc($DatosTerm_filter);
$totalRows_DatosTerm_filter = mysqli_num_rows($DatosTerm_filter);
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />

<style>
    
</style>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Students</h2></div>
          <?php include("inc/students_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>