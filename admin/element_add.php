<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
 $query_DatosPage = sprintf("SELECT * FROM pages WHERE level=0 AND padre!='' AND id_page=%s", GetSQLValueString($_GET["eleid"], "int"));
 $DatosPage = mysqli_query($con, $query_DatosPage) or die(mysqli_error($con));
 $row_DatosPage = mysqli_fetch_assoc($DatosPage);
 $totalRows_DatosPage = mysqli_num_rows($DatosPage);
?>
<?php
 $query_DatosPage2 = sprintf("SELECT * FROM pages WHERE level=0 AND id_page=%s", GetSQLValueString($_GET["ele2id"], "int"));
 $DatosPage2 = mysqli_query($con, $query_DatosPage2) or die(mysqli_error($con));
 $row_DatosPage2 = mysqli_fetch_assoc($DatosPage2);
 $totalRows_DatosPage2 = mysqli_num_rows($DatosPage2);
?>
<?php
 $query_DatosPadre2 = sprintf("SELECT * FROM pages WHERE id_page=%s", GetSQLValueString($row_DatosPage2["padre2"], "int"));
 $DatosPadre2 = mysqli_query($con, $query_DatosPadre2) or die(mysqli_error($con));
 $row_DatosPadre2 = mysqli_fetch_assoc($DatosPadre2);
 $totalRows_DatosPadre2 = mysqli_num_rows($DatosPadre2);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formpage")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO pages(name, level, foto, width, height, background, radius, shadow, divfloat, border, borderpx, border_color, mtop, mright, mbottom, mleft, padre, padre2) 
                        VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["level"], "text"),
                        GetSQLValueString($_POST["foto"], "text"),
                        GetSQLValueString($_POST["width"], "int"),
                        GetSQLValueString($_POST["height"], "int"),
                        GetSQLValueString($_POST["background"], "text"),
                        GetSQLValueString($_POST["radius"], "int"),
                        GetSQLValueString($_POST["shadow"], "text"),
                        GetSQLValueString($_POST["divfloat"], "text"),
                        GetSQLValueString($_POST["border"], "text"),
                        GetSQLValueString($_POST["borderpx"], "int"),
                        GetSQLValueString($_POST["border_color"], "text"),
                        GetSQLValueString($_POST["mtop"], "int"),
                        GetSQLValueString($_POST["mright"], "int"),
                        GetSQLValueString($_POST["mbottom"], "int"),
                        GetSQLValueString($_POST["mleft"], "int"),
                        GetSQLValueString($_POST["padre"], "int"),
                        GetSQLValueString($_POST["padre2"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = $_SERVER['HTTP_REFERER'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <div class="title"><h2>Element add</h2></div>
          <?php include("inc/element_add_wrap.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>