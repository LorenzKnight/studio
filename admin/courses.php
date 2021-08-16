<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
  $query_DatosTerm_filter = sprintf("SELECT * FROM term ORDER BY id_term DESC"); 
  $DatosTerm_filter = mysqli_query($con, $query_DatosTerm_filter) or die(mysqli_error($con));
  $row_DatosTerm_filter = mysqli_fetch_assoc($DatosTerm_filter);
  $totalRows_DatosTerm_filter = mysqli_num_rows($DatosTerm_filter);
?>
<?php
  if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formsearch"))
  { 
    // BLOQUE BUSCADOR INTELIGENTE NOMBRE
    $porciones = explode(" ", $_GET["search"]);
    $longitud = count($porciones);
    $extramodelo=" name LIKE '%".$_GET["search"] ."%'";
    for($i=0; $i<$longitud; $i++)
    {
      $extramodelo.=" OR name LIKE '%".$porciones[$i] ."%'";
    }
    //FIN BLOQUE BUSCADOR INTELIGENTE NOMBRE

    $query_DatosConsulta = "SELECT * FROM courses WHERE ".$extramodelo." AND status = 1 ORDER BY id_course ASC";
    //echo $query_DatosConsulta;


    // $query_DatosConsulta = sprintf("SELECT * FROM courses WHERE name = %s AND status = 1 ORDER BY id_course ASC",
    //                                 GetSQLValueString("%".$_GET["search"]."%", "text"));
  }
  else if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formfilter"))
  {
    $query_DatosConsulta = sprintf("SELECT * FROM courses WHERE status LIKE %s ORDER BY id_course ASC",
                                    GetSQLValueString("%".$_GET["statuscurse"]."%", "int"));
  }
  else if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formterm"))
  {
    $query_DatosConsulta = sprintf("SELECT * FROM courses WHERE term LIKE %s ORDER BY id_course ASC",
                                    GetSQLValueString("%".$_GET["term"]."%", "int"));
  }
  else
  {
    $query_DatosConsulta = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC");
  }
    $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
  $query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term DESC"); 
  $DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
  $row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
  $totalRows_DatosTerm = mysqli_num_rows($DatosTerm);
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
  $insertSQL = sprintf("INSERT INTO courses(name, schedule, term, teacher, category, price, status, user_rank, id_user) 
                        VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["schedule"], "text"),
                        GetSQLValueString($_POST["term"], "int"),
                        GetSQLValueString($_POST["teacher"], "text"),
                        GetSQLValueString($_POST["category"], "int"),
                        GetSQLValueString($_POST["price"], "text"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["user_rank"], "int"),
                        GetSQLValueString($_POST["id_user"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "courses.php";
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

$updateGoTo = "courses.php";
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
          <div class="title"><h2>Courses</h2></div>
          <?php include("inc/courses_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>