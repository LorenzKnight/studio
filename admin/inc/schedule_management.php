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
<script>
const isElementOrDescendant = function (parent, child) {
    if (parent === child) return true

    var node = child.parentNode;
    while (node != null) {
    if (node == parent) {
        return true;
    }
    node = node.parentNode;
    }
    return false;
}

    //Esto es para cerrar el div si le damos click afuera de este click
const onClick = function (e) {
    const el = document.getElementById('formrequest')
    const clickableAreas = Array.from(document.getElementsByClassName('flying_button'))

    //for severarl div
     clickableAreas.push(...Array.from(document.getElementsByClassName('button_cancel')))
     clickableAreas.push(document.getElementById('formedit'))
    //end several div

    clickableAreas.push(el)

    let isClickOutside = true

    for (let i = 0; i < clickableAreas.length; i++) {
        if (isElementOrDescendant(clickableAreas[i], e.target)) {
            isClickOutside = false
        }
    }

    if (isClickOutside) {
        location = 'schedule.php'
    }
}

document.addEventListener('click', onClick)
</script>
<style>
    .time {
        width: 100%;
        padding: 20.5px 0;
        background-color: #CCC;
        border-bottom: 1px solid #999;
        font-size: 11px;
    }
    .kurs {
        font-size: 13px;
        line-height: 26px;
        position: relative;
    }
    .text_kurs {
        width: 100%;
        top: 27%;
        position: absolute;
    }
</style>
<div class="schedule_div">
    <div class="open_calendar">
        <table width="100%" cellspacing="0" border="0" class="" style="background-color: #FFF;">
            <tr height="50" style="color: #999;">
                <td width="2,0000001%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Måndag
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Tisdag
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Onsdag
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Torsdag
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Fredag
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Lördag
                </td>
                <td width="14%" colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC;">
                Sondag
                </td>
            </tr>
            <tr height="25" style="color: #999;">
                <td width="2,0000001%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Tid
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 2
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 2
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 2
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 2
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 2
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 2
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-right: 1px solid #CCC;">
                Sal 1
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC;">
                Sal 2
                </td>
            </tr>
            <tr style="color: #FFF;" valign="top" cellspacing="0" border="0">
                <td width="2,0000001%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <div class="time">
                        17:00
                    </div>
                    <div class="time">
                        17:30
                    </div>
                    <div class="time">
                        18:00
                    </div>
                    <div class="time">
                        18:30
                    </div>
                    <div class="time">
                        19:00
                    </div>
                    <div class="time">
                        19:30
                    </div>
                    <div class="time">
                        20:00
                    </div>
                    <div class="time">
                        20:30
                    </div>
                    <div class="time">
                        21:00
                    </div>
                    <div class="time">
                        21:30
                    </div>
                    <div class="time">
                        22:00
                    </div>
                    <div class="time">
                        22:30
                    </div>
                    <div class="time">
                        23:00
                    </div>
                    <div class="time">
                        23:30
                    </div>
                    <div class="time">
                        00:00
                    </div>
                    <div style="width: 100%; padding: 20px 0; background-color: #CCC; border-radius:0 0 0 4px;">
                        --
                    </div>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleMon1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleMon1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleMon1['level']); ?>; top: <?php echo $row_ScheduleMon1['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleMon1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleMon1['level']); ?><br>
                                <?php echo $row_ScheduleMon1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleMon1 = mysqli_fetch_assoc($ScheduleMon1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <?php if ($row_ScheduleMon2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleMon2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleMon2['level']); ?>; top: <?php echo $row_ScheduleMon2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleMon2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleMon2['level']); ?><br>
                                <?php echo $row_ScheduleMon2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleMon2 = mysqli_fetch_assoc($ScheduleMon2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleTue1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleTue1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleTue1['level']); ?>; top: <?php echo $row_ScheduleTue1['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleTue1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleTue1['level']); ?><br>
                                <?php echo $row_ScheduleTue1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleTue1 = mysqli_fetch_assoc($ScheduleTue1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <?php if ($row_ScheduleTue2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleTue2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleTue2['level']); ?>; top: <?php echo $row_ScheduleTue2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleTue2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleTue2['level']); ?><br>
                                <?php echo $row_ScheduleTue2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleTue2 = mysqli_fetch_assoc($ScheduleTue2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleWed1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleWed1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleWed1['level']); ?>; top: <?php echo $row_ScheduleWed1['hour']; ?>px;">
                            <div class="text_kurs">    
                                <?php echo $row_ScheduleWed1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleWed1['level']); ?><br>
                                <?php echo $row_ScheduleWed1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleWed1 = mysqli_fetch_assoc($ScheduleWed1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <?php if ($row_ScheduleWed2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleWed2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleWed2['level']); ?>; top: <?php echo $row_ScheduleWed2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleWed2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleWed2['level']); ?><br>
                                <?php echo $row_ScheduleWed2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleWed2 = mysqli_fetch_assoc($ScheduleWed2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleThu1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleThu1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleThu1['level']); ?>; top: <?php echo $row_ScheduleThu1['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleThu1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleThu1['level']); ?><br>
                                <?php echo $row_ScheduleThu1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleThu1 = mysqli_fetch_assoc($ScheduleThu1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <?php if ($row_ScheduleThu2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleThu2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleThu2['level']); ?>; top: <?php echo $row_ScheduleThu2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleThu2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleThu2['level']); ?><br>
                                <?php echo $row_ScheduleThu2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleThu2 = mysqli_fetch_assoc($ScheduleThu2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleFri1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleFri1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleFri1['level']); ?>; top: <?php echo $row_ScheduleFri1['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleFri1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleFri1['level']); ?><br>
                                <?php echo $row_ScheduleFri1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleFri1 = mysqli_fetch_assoc($ScheduleFri1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <?php if ($row_ScheduleFri2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleFri2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleFri2['level']); ?>; top: <?php echo $row_ScheduleFri2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleFri2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleFri2['level']); ?><br>
                                <?php echo $row_ScheduleFri2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleFri2 = mysqli_fetch_assoc($ScheduleFri2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleSat1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleSat1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleSat1['level']); ?>; top: <?php echo $row_ScheduleSat1['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleSat1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleSat1['level']); ?><br>
                                <?php echo $row_ScheduleSat1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleSat1 = mysqli_fetch_assoc($ScheduleSat1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center" style="border-right: 1px solid #CCC;">
                    <?php if ($row_ScheduleSat2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleSat2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleSat2['level']); ?>; top: <?php echo $row_ScheduleSat2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleSat2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleSat2['level']); ?><br>
                                <?php echo $row_ScheduleSat2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleSat2 = mysqli_fetch_assoc($ScheduleSat2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleSun1 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleSun1['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleSun1['level']); ?>; top: <?php echo $row_ScheduleSun1['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleSun1['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleSun1['level']); ?><br>
                                <?php echo $row_ScheduleSun1['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleSun1 = mysqli_fetch_assoc($ScheduleSun1)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
                <td width="7%" nowrap="nowrap" align="center">
                    <?php if ($row_ScheduleSun2 > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <div class="kurs" style="max-width: 100%; height: <?php echo $row_ScheduleSun2['duration']; ?>px; background-color: <?php echo NombreCursoColor($row_ScheduleSun2['level']); ?>; top: <?php echo $row_ScheduleSun2['hour']; ?>px;">
                            <div class="text_kurs">
                                <?php echo $row_ScheduleSun2['name']; ?><br>
                                <?php echo NombreCurso($row_ScheduleSun2['level']); ?><br>
                                <?php echo $row_ScheduleSun2['teacher']; ?>
                            </div>
                        </div>
                    <?php } while ($row_ScheduleSun2 = mysqli_fetch_assoc($ScheduleSun2)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
            <tr>
        </table>
    </div>

    <a href="schedule.php?new=1"><div class="flying_button">+</div></a>

    <?php if($_GET["new"]):?>
    <form action="schedule.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario_schedule" border="0" cellspacing="0" cellpadding="0">
            <tr height="60">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    <h2>Packet</h2>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Kurs Namn..." name="name" id="name" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Instruktor..." name="teacher" id="teacher" size="52" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Nivå: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="level" id="level" required>
                    <option value="1">1 (Beginning)</option>
                    <option value="2">2 (Intermediate)</option>
                    <option value="3">3 (Advance)</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Bokninsbar: 
                    
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Dag: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="day" id="day" required>
                    <option value="1">Måndag</option>
                    <option value="2">Tisdag</option>
                    <option value="3">Onsdag</option>
                    <option value="4">Tursdag</option>
                    <option value="5">Fredag</option>
                    <option value="6">Lördag</option>
                    <option value="7">Söndag</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Sal: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sal" id="sal" required>
                    <option value="1">Sal 1</option>
                    <option value="2">Sal 2</option>
                    </select>
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Kl: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="hour" id="hour" required>
                    <option value="165">18:00</option>
                    <option value="220">18:30</option>
                    <option value="275">19:00</option>
                    <option value="330">19:30</option>
                    <option value="385">20:00</option>
                    <option value="440">20:30</option>
                    <option value="495">21:00</option>
                    <option value="550">21:30</option>
                    <option value="605">22:00</option>
                    <option value="660">22:30</option>
                    <option value="715">23:00</option>
                    <option value="770">23:30</option>
                    <option value="825">00:00</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Tid: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="duration" id="duration" required>
                    <option value="165">1 timma</option>
                    <option value="220">1.5 timma</option>
                    <option value="275">2 timmar</option>
                    <option value="330">2.5 timmar</option>
                    <option value="385">3 timmar</option>
                    <option value="440">3.5 timmar</option>
                    <option value="495">4 timmar</option>
                    <option value="550">4.5 timmar</option>
                    <option value="605">5 timmar</option>
                    <option value="660">5.5 timmar</option>
                    <option value="715">6 timmar</option>
                    <option value="770">6.5 timmar</option>
                    <option value="825">7 timmar</option>
                    </select>
                </td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="schedule.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>

    <?php endif ?>