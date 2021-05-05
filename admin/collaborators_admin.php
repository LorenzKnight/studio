<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0014") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
  $query_DatosColl = sprintf("SELECT * FROM collaborators WHERE status = 1 ORDER BY position DESC");
  $DatosColl = mysqli_query($con, $query_DatosColl) or die(mysqli_error($con));
  $row_DatosColl = mysqli_fetch_assoc($DatosColl);
  $totalRows_DatosColl = mysqli_num_rows($DatosColl);
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
  $insertSQL = sprintf("INSERT INTO collaborators(date, year, month, day, time, foto, title, content, status, settings) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["foto"], "text"),                      
                        GetSQLValueString($_POST["title"], "text"),
                        GetSQLValueString($_POST["content"], "text"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["settings"], "int"));

  
  $Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "collaborators_admin.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM collaborators WHERE id_collaborators=%s", GetSQLValueString($_GET["edit"], "int")); 
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
  $updateSQL = sprintf("UPDATE collaborators SET foto=%s, title=%s, content=%s, status=%s, settings=%s WHERE id_collaborators=%s",
                       GetSQLValueString($_POST["foto"], "text"),
                       GetSQLValueString($_POST["title"], "text"),
                       GetSQLValueString($_POST["content"], "text"),
                       GetSQLValueString($_POST["status"], "int"),
                       GetSQLValueString($_POST["settings"], "int"),
					             GetSQLValueString($_POST["id_collaborators"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "collaborators_admin.php";
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
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <div class="title"><h2>Collaborators</h2></div>
          <?php include("inc/collaborators_admin_list.php"); ?>
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