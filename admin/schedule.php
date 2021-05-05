<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0015") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_ScheduleMon1 = sprintf("SELECT * FROM schedule WHERE day =1 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleMon1 = mysqli_query($con, $query_ScheduleMon1) or die(mysqli_error($con));
$row_ScheduleMon1 = mysqli_fetch_assoc($ScheduleMon1);
$totalRows_ScheduleMon1 = mysqli_num_rows($ScheduleMon1);
?>
<?php
$query_ScheduleMon2 = sprintf("SELECT * FROM schedule WHERE day =1 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleMon2 = mysqli_query($con, $query_ScheduleMon2) or die(mysqli_error($con));
$row_ScheduleMon2 = mysqli_fetch_assoc($ScheduleMon2);
$totalRows_ScheduleMon2 = mysqli_num_rows($ScheduleMon2);
?>
<?php
$query_ScheduleTue1 = sprintf("SELECT * FROM schedule WHERE day =2 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleTue1 = mysqli_query($con, $query_ScheduleTue1) or die(mysqli_error($con));
$row_ScheduleTue1 = mysqli_fetch_assoc($ScheduleTue1);
$totalRows_ScheduleTue1 = mysqli_num_rows($ScheduleTue1);
?>
<?php
$query_ScheduleTue2 = sprintf("SELECT * FROM schedule WHERE day =2 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleTue2 = mysqli_query($con, $query_ScheduleTue2) or die(mysqli_error($con));
$row_ScheduleTue2 = mysqli_fetch_assoc($ScheduleTue2);
$totalRows_ScheduleTue2 = mysqli_num_rows($ScheduleTue2);
?>
<?php
$query_ScheduleWed1 = sprintf("SELECT * FROM schedule WHERE day =3 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleWed1 = mysqli_query($con, $query_ScheduleWed1) or die(mysqli_error($con));
$row_ScheduleWed1 = mysqli_fetch_assoc($ScheduleWed1);
$totalRows_ScheduleWed1 = mysqli_num_rows($ScheduleWed1);
?>
<?php
$query_ScheduleWed2 = sprintf("SELECT * FROM schedule WHERE day =3 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleWed2 = mysqli_query($con, $query_ScheduleWed2) or die(mysqli_error($con));
$row_ScheduleWed2 = mysqli_fetch_assoc($ScheduleWed2);
$totalRows_ScheduleWed2 = mysqli_num_rows($ScheduleWed2);
?>
<?php
$query_ScheduleThu1 = sprintf("SELECT * FROM schedule WHERE day =4 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleThu1 = mysqli_query($con, $query_ScheduleThu1) or die(mysqli_error($con));
$row_ScheduleThu1 = mysqli_fetch_assoc($ScheduleThu1);
$totalRows_ScheduleThu1 = mysqli_num_rows($ScheduleThu1);
?>
<?php
$query_ScheduleThu2 = sprintf("SELECT * FROM schedule WHERE day =4 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleThu2 = mysqli_query($con, $query_ScheduleThu2) or die(mysqli_error($con));
$row_ScheduleThu2 = mysqli_fetch_assoc($ScheduleThu2);
$totalRows_ScheduleThu2 = mysqli_num_rows($ScheduleThu2);
?>
<?php
$query_ScheduleFri1 = sprintf("SELECT * FROM schedule WHERE day =5 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleFri1 = mysqli_query($con, $query_ScheduleFri1) or die(mysqli_error($con));
$row_ScheduleFri1 = mysqli_fetch_assoc($ScheduleFri1);
$totalRows_ScheduleFri1 = mysqli_num_rows($ScheduleFri1);
?>
<?php
$query_ScheduleFri2 = sprintf("SELECT * FROM schedule WHERE day =5 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleFri2 = mysqli_query($con, $query_ScheduleFri2) or die(mysqli_error($con));
$row_ScheduleFri2 = mysqli_fetch_assoc($ScheduleFri2);
$totalRows_ScheduleFri2 = mysqli_num_rows($ScheduleFri2);
?>
<?php
$query_ScheduleSat1 = sprintf("SELECT * FROM schedule WHERE day =6 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleSat1 = mysqli_query($con, $query_ScheduleSat1) or die(mysqli_error($con));
$row_ScheduleSat1 = mysqli_fetch_assoc($ScheduleSat1);
$totalRows_ScheduleSat1 = mysqli_num_rows($ScheduleSat1);
?>
<?php
$query_ScheduleSat2 = sprintf("SELECT * FROM schedule WHERE day =6 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleSat2 = mysqli_query($con, $query_ScheduleSat2) or die(mysqli_error($con));
$row_ScheduleSat2 = mysqli_fetch_assoc($ScheduleSat2);
$totalRows_ScheduleSat2 = mysqli_num_rows($ScheduleSat2);
?>
<?php
$query_ScheduleSun1 = sprintf("SELECT * FROM schedule WHERE day =7 AND sal =1 ORDER BY id_schedule DESC");
$ScheduleSun1 = mysqli_query($con, $query_ScheduleSun1) or die(mysqli_error($con));
$row_ScheduleSun1 = mysqli_fetch_assoc($ScheduleSun1);
$totalRows_ScheduleSun1 = mysqli_num_rows($ScheduleSun1);
?>
<?php
$query_ScheduleSun2 = sprintf("SELECT * FROM schedule WHERE day =7 AND sal =2 ORDER BY id_schedule DESC");
$ScheduleSun2 = mysqli_query($con, $query_ScheduleSun2) or die(mysqli_error($con));
$row_ScheduleSun2 = mysqli_fetch_assoc($ScheduleSun2);
$totalRows_ScheduleSun2 = mysqli_num_rows($ScheduleSun2);
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
  $insertSQL = sprintf("INSERT INTO schedule(via, name, level, teacher, duration, day, hour, sal, status) 
                        VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["via"], "int"),                      
                        GetSQLValueString($_POST["name"], "text"),
                        GetSQLValueString($_POST["level"], "int"),
                        GetSQLValueString($_POST["teacher"], "text"),
                        GetSQLValueString($_POST["duration"], "int"),
                        GetSQLValueString($_POST["day"], "int"),
                        GetSQLValueString($_POST["hour"], "text"),
                        GetSQLValueString($_POST["sal"], "int"),
                        GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "schedule.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM schedule WHERE id_schedule=%s", GetSQLValueString($_GET["regedit"], "int")); 
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
  $updateSQL = sprintf("UPDATE schedule SET name=%s, teacher=%s, level=%s, day=%s, sal=%s, hour=%s, duration=%s WHERE id_schedule=%s",
                       GetSQLValueString($_POST["name"], "text"),
                       GetSQLValueString($_POST["teacher"], "text"),
                       GetSQLValueString($_POST["level"], "int"),
                       GetSQLValueString($_POST["day"], "int"),
                       GetSQLValueString($_POST["sal"], "int"),
                       GetSQLValueString($_POST["hour"], "int"),
                       GetSQLValueString($_POST["duration"], "int"),
					   GetSQLValueString($_POST["id_schedule"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "schedule.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<script>
// const isElementOrDescendant = function (parent, child) {
//     if (parent === child) return true

//     var node = child.parentNode;
//     while (node != null) {
//     if (node == parent) {
//         return true;
//     }
//     node = node.parentNode;
//     }
//     return false;
// }

//     //Esto es para cerrar el div si le damos click afuera de este click
// const onClick = function (e) {
//     const el = document.getElementById('formrequest')
//     const clickableAreas = Array.from(document.getElementsByClassName('flying_button'))

//     //for severarl div
//      clickableAreas.push(...Array.from(document.getElementsByClassName('button_cancel')))
//      clickableAreas.push(document.getElementById('formedit'))
//     //end several div

//     clickableAreas.push(el)

//     let isClickOutside = true

//     for (let i = 0; i < clickableAreas.length; i++) {
//         if (isElementOrDescendant(clickableAreas[i], e.target)) {
//             isClickOutside = false
//         }
//     }

//     if (isClickOutside) {
//         location = 'schedule.php'
//     }
// }

// document.addEventListener('click', onClick)
</script>
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
          <div class="title"><h2>Schedule</h2></div>
          <?php include("inc/schedule_management.php"); ?>
        </div>
    </div>
</body>
</html>
<!--////////////////////////parte 2 del codigo control de permisos esta al final////////////////////////////-->
<?php } else {
      header(sprintf("Location: dashboard.php")); exit;
} ?>