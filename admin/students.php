<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
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
     $query_DatosConsulta = sprintf("SELECT * FROM cart WHERE id_course LIKE %s AND id_term = $TermAct ORDER BY id_counter ASC",
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
$query_DatosCourse = sprintf("SELECT * FROM courses WHERE category = 1 AND status = 1 ORDER BY id_course ASC"); 
$DatosCourse = mysqli_query($con, $query_DatosCourse) or die(mysqli_error($con));
$row_DatosCourse = mysqli_fetch_assoc($DatosCourse);
$totalRows_DatosCourse = mysqli_num_rows($DatosCourse);
?>
<?php
$query_DatosCourse2 = sprintf("SELECT * FROM courses WHERE category = 2 AND status = 1 ORDER BY id_course ASC"); 
$DatosCourse2 = mysqli_query($con, $query_DatosCourse2) or die(mysqli_error($con));
$row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2);
$totalRows_DatosCourse2 = mysqli_num_rows($DatosCourse2);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {

  if (comprobaremailestudiante($_POST["email"])) 
  {
    
  $year = date("Y");
  $month = date("m");
  $day = date("d");
  $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, password, personal_number, telephone, adress, post, city, sex, agree, status, via) 
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
                        GetSQLValueString($_POST["status"], "text"),
                        GetSQLValueString($_POST["via"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo1 = "students.php?newcompl=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
    $insertGoTo1 .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo1));
}

else {

  $query_DatosIdentidad = sprintf("SELECT * FROM students WHERE email=%s ORDER BY id_student DESC",
                              GetSQLValueString($_POST["email"], "text")); 
  $DatosIdentidad = mysqli_query($con, $query_DatosIdentidad) or die(mysqli_error($con));
  $row_DatosIdentidad = mysqli_fetch_assoc($DatosIdentidad);
  $totalRows_DatosIdentidad = mysqli_num_rows($DatosIdentidad);
  
  $StEmail = $row_DatosIdentidad["id_student"];
  $insertGoTo1 = "students.php?id=$StEmail";
  header(sprintf("Location: %s", $insertGoTo1));
 }
}
?>

<?php
 $query_DatosInsc = sprintf("SELECT * FROM students WHERE via=%s ORDER BY id_student DESC",
                            GetSQLValueString($_SESSION['std_UserId'], "int")); 
 $DatosInsc = mysqli_query($con, $query_DatosInsc) or die(mysqli_error($con));
 $row_DatosInsc = mysqli_fetch_assoc($DatosInsc);
 $totalRows_DatosInsc = mysqli_num_rows($DatosInsc);
?>
<?php
$query_DatosCart = sprintf("SELECT * FROM cart WHERE id_student=%s AND course_category = 1 AND transaction_made = 0 ORDER BY id_counter ASC",
                            GetSQLValueString($row_DatosInsc["id_student"], "int")); 
$DatosCart = mysqli_query($con, $query_DatosCart) or die(mysqli_error($con));
$row_DatosCart = mysqli_fetch_assoc($DatosCart);
$totalRows_DatosCart = mysqli_num_rows($DatosCart);
?>
<?php
$query_DatosCart2 = sprintf("SELECT * FROM cart WHERE id_student=%s AND course_category = 2 AND transaction_made = 0 ORDER BY id_counter ASC",
                            GetSQLValueString($row_DatosInsc["id_student"], "int")); 
$DatosCart2 = mysqli_query($con, $query_DatosCart2) or die(mysqli_error($con));
$row_DatosCart2 = mysqli_fetch_assoc($DatosCart2);
$totalRows_DatosCart2 = mysqli_num_rows($DatosCart2);
?>
<!-- /////////////////////////////////// Consulta para optener la lista de cursos seleccionados para el paquete /////////////////////////////////////////// -->
<?php
$query_DatosParaPaquete = sprintf("SELECT * FROM cart WHERE id_student = %s AND transaction_made = 0 ORDER BY id_counter ASC",
                            GetSQLValueString($row_DatosInsc["id_student"], "int")); 
$DatosParaPaquete = mysqli_query($con, $query_DatosParaPaquete) or die(mysqli_error($con));
$row_DatosParaPaquete = mysqli_fetch_assoc($DatosParaPaquete);
$totalRows_DatosParaPaquete = mysqli_num_rows($DatosParaPaquete);
?>
<!-- /////////////////////////////////// Final Consulta para optener la lista de cursos seleccionados para el paquete /////////////////////////////////////////// -->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formcompl")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO inscriptions(date, year, month, day, time, id_student, sex, term, term_start, term_stop, package, course_1, course_2, course_3, course_4, course_s1, status, done, payment) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
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
                        GetSQLValueString($_POST["course_s1"], "int"),
                        GetSQLValueString($_POST["status"], "text"),
                        GetSQLValueString($_POST["done"], "int"),
                        GetSQLValueString($_POST["payment"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "students.php?done=1";
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
<!--Consulta para traer datos para usuarios existentes-->
<?php
// $query_DatosIdent = sprintf("SELECT * FROM students WHERE id_student=%s ORDER BY id_student DESC",
//                             GetSQLValueString($_GET["exist"], "int")); 
// $DatosIdent = mysqli_query($con, $query_DatosIdent) or die(mysqli_error($con));
// $row_DatosIdent = mysqli_fetch_assoc($DatosIdent);
// $totalRows_DatosIdent = mysqli_num_rows($DatosIdent);
?>
<!--Fin de consulta para traer datos para usuarios existentes-->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formediti")) {
     
     $updateSQL = sprintf("UPDATE students SET name=%s, surname=%s, email=%s, personal_number=%s, telephone=%s, sex=%s, adress=%s, post=%s, city=%s, status=%s WHERE id_student=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["surname"], "text"),
                          GetSQLValueString($_POST["email"], "text"),
                          GetSQLValueString($_POST["personal_number"], "text"),
                          GetSQLValueString($_POST["telephone"], "int"),
                          GetSQLValueString($_POST["sex"], "text"),
                          GetSQLValueString($_POST["adress"], "text"),
                          GetSQLValueString($_POST["post"], "int"),
                          GetSQLValueString($_POST["city"], "text"),
                          GetSQLValueString($_POST["status"], "text"),
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
 $query_DatosEditInc = sprintf("SELECT * FROM inscriptions WHERE id_student=%s AND term=$TermAct", 
                          GetSQLValueString($_GET["editc"], "int")); 
 $DatosEditInc = mysqli_query($con, $query_DatosEditInc) or die(mysqli_error($con));
 $row_DatosEditInc = mysqli_fetch_assoc($DatosEditInc);
 $totalRows_DatosEditInc = mysqli_num_rows($DatosEditInc);
?>
<?php
$query_DatosCourseEdit = sprintf("SELECT * FROM courses WHERE category = 1 AND status = 1 ORDER BY id_course ASC"); 
$DatosCourseEdit = mysqli_query($con, $query_DatosCourseEdit) or die(mysqli_error($con));
$row_DatosCourseEdit = mysqli_fetch_assoc($DatosCourseEdit);
$totalRows_DatosCourseEdit = mysqli_num_rows($DatosCourseEdit);
?>
<?php
$query_DatosCourseEdit2 = sprintf("SELECT * FROM courses WHERE category = 2 AND status = 1 ORDER BY id_course ASC"); 
$DatosCourseEdit2 = mysqli_query($con, $query_DatosCourseEdit2) or die(mysqli_error($con));
$row_DatosCourseEdit2 = mysqli_fetch_assoc($DatosCourseEdit2);
$totalRows_DatosCourseEdit2 = mysqli_num_rows($DatosCourseEdit2);
?>
<?php
$query_DatosCartEdit = sprintf("SELECT * FROM cart WHERE id_student=%s AND course_category=%s AND transaction_made=%s ORDER BY id_counter ASC",
                            GetSQLValueString($_GET["editc"], "int"),
                            1,
                            GetSQLValueString($row_DatosEditInc["id_insc"], "int")); 
$DatosCartEdit = mysqli_query($con, $query_DatosCartEdit) or die(mysqli_error($con));
$row_DatosCartEdit = mysqli_fetch_assoc($DatosCartEdit);
$totalRows_DatosCartEdit = mysqli_num_rows($DatosCartEdit);
?>
<?php
$query_DatosCartEdit2 = sprintf("SELECT * FROM cart WHERE id_student=%s AND course_category=%s AND transaction_made=%s ORDER BY id_counter ASC",
                            GetSQLValueString($_GET["editc"], "int"),
                            2,
                            GetSQLValueString($row_DatosEditInc["id_insc"], "int")); 
$DatosCartEdit2 = mysqli_query($con, $query_DatosCartEdit2) or die(mysqli_error($con));
$row_DatosCartEdit2 = mysqli_fetch_assoc($DatosCartEdit2);
$totalRows_DatosCartEdit2 = mysqli_num_rows($DatosCartEdit2);
?>
<?php
$query_DatosCartEditPackage = sprintf("SELECT * FROM cart WHERE id_student=%s AND transaction_made=%s ORDER BY id_counter ASC",
                            GetSQLValueString($_GET["editc"], "int"),
                            GetSQLValueString($row_DatosEditInc["id_insc"], "int")); 
$DatosCartEditPackage = mysqli_query($con, $query_DatosCartEditPackage) or die(mysqli_error($con));
$row_DatosCartEditPackage = mysqli_fetch_assoc($DatosCartEditPackage);
$totalRows_DatosCartEditPackage = mysqli_num_rows($DatosCartEditPackage);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditc")) {
     
     $updateSQL = sprintf("UPDATE inscriptions SET total=%s WHERE id_student=%s",
                          GetSQLValueString($_POST["total"], "text"),
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
 $query_DatosSee = sprintf("SELECT * FROM inscriptions WHERE id_student=%s", 
                          GetSQLValueString($_GET["see"], "int")); 
 $DatosSee = mysqli_query($con, $query_DatosSee) or die(mysqli_error($con));
 $row_DatosSee = mysqli_fetch_assoc($DatosSee);
 $totalRows_DatosSee = mysqli_num_rows($DatosSee);
?>
<?php
$query_DatosPackage = sprintf("SELECT * FROM cart WHERE id_student=%s AND transaction_made=%s ORDER BY id_course ASC",
                              GetSQLValueString($_GET["see"], "int"),
                              GetSQLValueString(ObtenerTransaccion($_GET["see"]), "int"));
$DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
$row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
$totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
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