<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0010") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
 $query_DatosConsulta = sprintf("SELECT * FROM courses WHERE status = 0 ORDER BY id_course DESC"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO courses(name, schedule, teacher, category, price, status) 
                        VALUES (%s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["schedule"], "text"),
                        GetSQLValueString($_POST["teacher"], "text"),
                        GetSQLValueString($_POST["category"], "int"),
                        GetSQLValueString($_POST["price"], "text"),
                        GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "inactive_courses.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM courses WHERE id_course=%s", GetSQLValueString($_GET["editc"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditc")) {
     
     $updateSQL = sprintf("UPDATE courses SET name=%s, schedule=%s, teacher=%s, category=%s, price=%s, status=%s WHERE id_course=%s",
                          GetSQLValueString($_POST["name"], "text"),                      
                          GetSQLValueString($_POST["schedule"], "text"),
                          GetSQLValueString($_POST["teacher"], "text"),
                          GetSQLValueString($_POST["category"], "int"),
                          GetSQLValueString($_POST["price"], "text"),
                          GetSQLValueString($_POST["status"], "int"),
                          GetSQLValueString($_POST["id_course"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "inactive_courses.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
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
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Inactive Courses</h2></div>
          <?php include("inc/inactive_courses_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>
<!--////////////////////////parte 2 del codigo control de permisos esta al final////////////////////////////-->
<?php } else {
      header(sprintf("Location: dashboard.php")); exit;
} ?>