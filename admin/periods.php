<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
  $variable_Consulta = "0";
  if (isset($VARIABLE)) {
    $variable_Consulta = $VARIABLE;
  }
  $query_DatosPeriod = sprintf("SELECT * FROM term ORDER BY id_term DESC");
  $DatosPeriod = mysqli_query($con, $query_DatosPeriod) or die(mysqli_error($con));
  $row_DatosPeriod = mysqli_fetch_assoc($DatosPeriod);
  $totalRows_DatosPeriod = mysqli_num_rows($DatosPeriod);
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
  $insertSQL = sprintf("INSERT INTO term(date, term_name, start_week, term_start, term_stop, status) 
                        VALUES (NOW(), %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["term_name"], "text"),                      
                        GetSQLValueString($_POST["start_week"], "text"),
                        GetSQLValueString($_POST["term_start"], "text"),
                        GetSQLValueString($_POST["term_stop"], "text"),
                        GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "periods.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM term WHERE id_term=%s", GetSQLValueString($_GET["editp"], "int")); 
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
     //if (comprobaridunico($_POST["given_id"]))
    //{
  $updateSQL = sprintf("UPDATE term SET term_name=%s, start_week=%s, term_start=%s, term_stop=%s, status=%s WHERE id_term=%s",
                        GetSQLValueString($_POST["term_name"], "text"),                      
                        GetSQLValueString($_POST["start_week"], "text"),
                        GetSQLValueString($_POST["term_start"], "text"),
                        GetSQLValueString($_POST["term_stop"], "text"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["id_term"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "periods.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
     //}
     //else
     //{
     // EL ID NO ES UNICO
     //$insertGoTo ="error.php";
     //header(sprintf("Location: %s", $insertGoTo));
     //}
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />
<link rel="stylesheet" type="text/css" href="simple_calendar/tcal.css" />
<script type="text/javascript" src="simple_calendar/tcal.js"></script> 
<style>
    
</style>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Terminer</h2></div> 
          <?php include("inc/periods_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>