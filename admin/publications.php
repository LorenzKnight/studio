<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
  $query_DatosPub1 = sprintf("SELECT * FROM publications WHERE site = 1 ORDER BY position DESC");
  $DatosPub1 = mysqli_query($con, $query_DatosPub1) or die(mysqli_error($con));
  $row_DatosPub1 = mysqli_fetch_assoc($DatosPub1);
  $totalRows_DatosPub1 = mysqli_num_rows($DatosPub1);
?>
<?php
  $query_DatosPub2 = sprintf("SELECT * FROM publications WHERE site = 2 ORDER BY position DESC");
  $DatosPub2 = mysqli_query($con, $query_DatosPub2) or die(mysqli_error($con));
  $row_DatosPub2 = mysqli_fetch_assoc($DatosPub2);
  $totalRows_DatosPub2 = mysqli_num_rows($DatosPub2);
?>
<?php
  $query_DatosPub3 = sprintf("SELECT * FROM publications WHERE site = 3 ORDER BY position DESC");
  $DatosPub3 = mysqli_query($con, $query_DatosPub3) or die(mysqli_error($con));
  $row_DatosPub3 = mysqli_fetch_assoc($DatosPub3);
  $totalRows_DatosPub3 = mysqli_num_rows($DatosPub3);
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
  $insertSQL = sprintf("INSERT INTO publications(date, year, month, day, time, foto, title, content, site, status, settings) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["foto"], "text"),                      
                        GetSQLValueString($_POST["title"], "text"),
                        GetSQLValueString($_POST["content"], "text"),
                        GetSQLValueString($_POST["site"], "int"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["settings"], "int"));

  
  $Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "publications.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM publications WHERE id_publications=%s", GetSQLValueString($_GET["edit"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formedit")) {
  $updateSQL = sprintf("UPDATE publications SET foto=%s, title=%s, content=%s, site=%s, status=%s WHERE id_publications=%s",
                       GetSQLValueString($_POST["foto"], "text"),
                       GetSQLValueString($_POST["title"], "text"),
                       GetSQLValueString($_POST["content"], "text"),
                       GetSQLValueString($_POST["site"], "int"),
                       GetSQLValueString($_POST["status"], "int"),
					             GetSQLValueString($_POST["id_publications"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "publications.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
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
          <div class="title"><h2>Publications/News/Vlog</h2></div>
          <?php include("inc/publications_list.php"); ?>
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