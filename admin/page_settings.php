<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0016") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
 $query_DatosPageInfo = sprintf("SELECT * FROM site_info ORDER BY id_site"); 
 $DatosPageInfo = mysqli_query($con, $query_DatosPageInfo) or die(mysqli_error($con));
 $row_DatosPageInfo = mysqli_fetch_assoc($DatosPageInfo);
 $totalRows_DatosPageInfo = mysqli_num_rows($DatosPageInfo);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formpageinf")) {
     
     $updateSQL = sprintf("UPDATE site_info SET name=%s, abbreviated_name=%s, adress=%s, post=%s, city=%s, email=%s, facebook=%s, instagram=%s, youtube=%s, schedule_off=%s, registration_off=%s, paypal_account=%s WHERE id_site=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["abbreviated_name"], "text"),
                          GetSQLValueString($_POST["adress"], "text"),
                          GetSQLValueString($_POST["post"], "text"),
                          GetSQLValueString($_POST["city"], "text"),
                          GetSQLValueString($_POST["email"], "text"),
                          GetSQLValueString($_POST["facebook"], "text"),
                          GetSQLValueString($_POST["instagram"], "text"),
                          GetSQLValueString($_POST["youtube"], "text"),
                          GetSQLValueString($_POST["schedule_off"], "int"),
                          GetSQLValueString($_POST["registration_off"], "int"),
                          GetSQLValueString($_POST["paypal_account"], "text"),
                          GetSQLValueString($_POST["id_site"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "page_settings.php";
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
</head>
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <div class="title"><h2>Settings</h2></div>
          <?php include("inc/settings_view.php"); ?>
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