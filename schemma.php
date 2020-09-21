<?php require_once('connections/conexion.php');?>
<?php
$query_Schedule = sprintf("SELECT * FROM schedule WHERE day !='' AND sal !='' ORDER BY id_schedule DESC");
$Schedule = mysqli_query($con, $query_Schedule) or die(mysqli_error($con));
$row_Schedule = mysqli_fetch_assoc($Schedule);
$totalRows_Schedule = mysqli_num_rows($Schedule);
?>
<?php
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
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<?php $menuactive= 3;?>
</head>
<body>
    <?php include("inc/head.php")?>
    <?php include("inc/calendar.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>