<style>
    .time {
        width: 100%;
        height: 54px;
        background-color: #CCC;
        border-bottom: 1px solid #999;
        font-size: 10px;
    }
    .kurs {
        line-height: 26px;
        position: absolute;
    }
    .text_kurs {
        width: 100%;
        top: 27%;
        font-size: 11px;
    }
</style>
<div class="space">
<?php if ($totalRows_Schedule > 0 ) {?>
    <div class="open_calendar">
        <div style="width:3%; float:left;">
            <table width="100%" cellspacing="0" border-spacing="0">
                <tr height="51" style="color: #FFF;">
                    <td width="100%" nowrap="nowrap" align="center" style="background-color: #FFF; padding: 0; border-bottom: 1px solid #999;">
                    
                    </td>
                </tr>
                <tr height="25" style="">
                    <td width="100%" nowrap="nowrap" align="center" style="background-color:#CCC; color: #FFF; padding: 0; border-bottom: 1px solid #999;">
                    Tid
                    </td>
                </tr>
                <tr style="color: #FFF;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="100%" nowrap="nowrap" align="center" style="padding: 0;">
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
                </tr>
            </table>
        </div>
        <div style="width:97%; display:flex;">
        <?php if ($totalRows_ScheduleMon1 > 0 || $totalRows_ScheduleMon2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Måndag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleMon1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleMon1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleMon1['level']); ?>; top: <?php echo $row_ScheduleMon1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleMon2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleMon2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleMon2['level']); ?>; top: <?php echo $row_ScheduleMon2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        <?php if ($totalRows_ScheduleTue1 > 0 || $totalRows_ScheduleTue2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Tisdag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleTue1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleTue1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleTue1['level']); ?>; top: <?php echo $row_ScheduleTue1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleTue2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleTue2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleTue2['level']); ?>; top: <?php echo $row_ScheduleTue2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        <?php if ($totalRows_ScheduleWed1 > 0 || $totalRows_ScheduleWed2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Onsdag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleWed1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleWed1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleWed1['level']); ?>; top: <?php echo $row_ScheduleWed1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleWed2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleWed2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleWed2['level']); ?>; top: <?php echo $row_ScheduleWed2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        <?php if ($totalRows_ScheduleThu1 > 0 || $totalRows_ScheduleThu2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Torsdag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleThu1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleThu1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleThu1['level']); ?>; top: <?php echo $row_ScheduleThu1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleThu2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleThu2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleThu2['level']); ?>; top: <?php echo $row_ScheduleThu2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        <?php if ($totalRows_ScheduleFri1 > 0 || $totalRows_ScheduleFri2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Fredag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleFri1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleFri1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleFri1['level']); ?>; top: <?php echo $row_ScheduleFri1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleFri2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleFri2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleFri2['level']); ?>; top: <?php echo $row_ScheduleFri2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        <?php if ($totalRows_ScheduleSat1 > 0 || $totalRows_ScheduleSat2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Lördag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleSat1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleSat1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleSat1['level']); ?>; top: <?php echo $row_ScheduleSat1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleSat2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleSat2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleSat2['level']); ?>; top: <?php echo $row_ScheduleSat2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        <?php if ($totalRows_ScheduleSun1 > 0 || $totalRows_ScheduleSun2 > 0) {?>
            <div style="background-color:#FFF; flex:1;">
            <table cellspacing="0" border-spacing="0" class="" style="width:100%;">
                <tr height="50" style="color: #999;">
                    <td colspan="2" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sondag
                    </td>
                </tr>
                <tr height="25" style="color: #999;">
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 1
                    </td>
                    <td width="50%" nowrap="nowrap" align="center" style="padding: 0 10px; border-bottom: 1px solid #CCC; border-left: 1px solid #CCC;">
                    Sal 2
                    </td>
                </tr>
                <tr style="color: #FFF; height:883.5px;" valign="top" cellspacing="0" border-spacing="0">
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative; border-left: 1px solid #CCC;">
                        <?php if ($row_ScheduleSun1 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleSun1['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleSun1['level']); ?>; top: <?php echo $row_ScheduleSun1['hour']; ?>px;">
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
                    <td width="50%" nowrap="nowrap" align="center" style="position: relative;">
                        <?php if ($row_ScheduleSun2 > 0) { // Show if recordset not empty ?>
                        <?php do { ?>
                            <div class="kurs" style="width: 98%; height: <?php echo $row_ScheduleSun2['duration']; ?>px; background: <?php echo NombreCursoColor($row_ScheduleSun2['level']); ?>; top: <?php echo $row_ScheduleSun2['hour']; ?>px;">
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
                </tr>
            </table>
            </div>
        <?php } ?>
        </div>       
    </div>
<?php } else { ?>
    <div class="close_calendar">
        <h3>Schema comming soon</h3>
    </div>
<?php } ?>
</div>