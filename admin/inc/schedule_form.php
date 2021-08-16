<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <form action="schedule.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario_schedule" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Ny Klass</h2>
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
                        <option value="1">Steg 1</option>
                        <option value="2">Steg 2</option>
                        <option value="3">Steg 3</option>
                        <option value="4">Steg 4</option>
                        <option value="5">Open level</option>
                        <option value="6">none</option>
                        <option value="7">Private class</option>
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
                        Rooms: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sal" id="sal" required>
                        <option value="1">Room 1</option>
                        <option value="2">Room 2</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Kl: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="hour" id="hour" required>
                        <option value="1">17:00</option>
                        <option value="56">17:30</option>
                        <option value="111">18:00</option>
                        <option value="166">18:30</option>
                        <option value="221">19:00</option>
                        <option value="276">19:30</option>
                        <option value="331">20:00</option>
                        <option value="386">20:30</option>
                        <option value="441">21:00</option>
                        <option value="496">21:30</option>
                        <option value="551">22:00</option>
                        <option value="606">22:30</option>
                        <option value="661">23:00</option>
                        <option value="716">23:30</option>
                        <option value="771">00:00</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Tid: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="duration" id="duration" required>
                        <option value="52">0.5 timma</option>
                        <option value="107" selected>1 timma</option>
                        <option value="162">1.5 timma</option>
                        <option value="217">2 timma</option>
                        <option value="272">2.5 timmar</option>
                        <option value="327">3 timmar</option>
                        <option value="382">3.5 timmar</option>
                        <option value="437">4 timmar</option>
                        <option value="492">4.5 timmar</option>
                        <option value="547">5 timmar</option>
                        <option value="602">5.5 timmar</option>
                        <option value="657">6 timmar</option>
                        <option value="712">6.5 timmar</option>
                        <option value="767">7 timmar</option>
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
    </div>
<?php endif ?>

<?php if($_GET["regedit"]):?>
    <div class="subform_cont1">
        <form action="schedule.php" method="post" name="formedit" id="formedit">
            <table class="formulario_schedule" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Redigera Klass</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Kurs Namn..." name="name" id="name" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['teacher'];?>" placeholder="Instruktor..." name="teacher" id="teacher" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Nivå: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="level" id="level" required>
                        <option value="1" <?php if ($row_DatosEdit["level"]=="1") echo "selected"; ?>>Steg 1</option>
                        <option value="2" <?php if ($row_DatosEdit["level"]=="2") echo "selected"; ?>>Steg 2</option>
                        <option value="3" <?php if ($row_DatosEdit["level"]=="3") echo "selected"; ?>>Steg 3</option>
                        <option value="4" <?php if ($row_DatosEdit["level"]=="4") echo "selected"; ?>>Steg 4</option>
                        <option value="5" <?php if ($row_DatosEdit["level"]=="5") echo "selected"; ?>>Open level</option>
                        <option value="6" <?php if ($row_DatosEdit["level"]=="6") echo "selected"; ?>>none</option>
                        <option value="7" <?php if ($row_DatosEdit["level"]=="7") echo "selected"; ?>>Private class</option>
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
                        <option value="1" <?php if ($row_DatosEdit["day"]=="1") echo "selected"; ?>>Måndag</option>
                        <option value="2" <?php if ($row_DatosEdit["day"]=="2") echo "selected"; ?>>Tisdag</option>
                        <option value="3" <?php if ($row_DatosEdit["day"]=="3") echo "selected"; ?>>Onsdag</option>
                        <option value="4" <?php if ($row_DatosEdit["day"]=="4") echo "selected"; ?>>Tursdag</option>
                        <option value="5" <?php if ($row_DatosEdit["day"]=="5") echo "selected"; ?>>Fredag</option>
                        <option value="6" <?php if ($row_DatosEdit["day"]=="6") echo "selected"; ?>>Lördag</option>
                        <option value="7" <?php if ($row_DatosEdit["day"]=="7") echo "selected"; ?>>Söndag</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Rooms: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sal" id="sal" required>
                        <option value="1" <?php if ($row_DatosEdit["sal"]=="1") echo "selected"; ?>>Room 1</option>
                        <option value="2" <?php if ($row_DatosEdit["sal"]=="2") echo "selected"; ?>>Room 2</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Kl: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="hour" id="hour" required>
                        <option value="1" <?php if ($row_DatosEdit["hour"]=="1") echo "selected"; ?>>17:00</option>
                        <option value="56" <?php if ($row_DatosEdit["hour"]=="56") echo "selected"; ?>>17:30</option>
                        <option value="111" <?php if ($row_DatosEdit["hour"]=="111") echo "selected"; ?>>18:00</option>
                        <option value="166" <?php if ($row_DatosEdit["hour"]=="166") echo "selected"; ?>>18:30</option>
                        <option value="221" <?php if ($row_DatosEdit["hour"]=="221") echo "selected"; ?>>19:00</option>
                        <option value="276" <?php if ($row_DatosEdit["hour"]=="276") echo "selected"; ?>>19:30</option>
                        <option value="331" <?php if ($row_DatosEdit["hour"]=="331") echo "selected"; ?>>20:00</option>
                        <option value="386" <?php if ($row_DatosEdit["hour"]=="386") echo "selected"; ?>>20:30</option>
                        <option value="441" <?php if ($row_DatosEdit["hour"]=="441") echo "selected"; ?>>21:00</option>
                        <option value="496" <?php if ($row_DatosEdit["hour"]=="496") echo "selected"; ?>>21:30</option>
                        <option value="551" <?php if ($row_DatosEdit["hour"]=="551") echo "selected"; ?>>22:00</option>
                        <option value="606" <?php if ($row_DatosEdit["hour"]=="606") echo "selected"; ?>>22:30</option>
                        <option value="661" <?php if ($row_DatosEdit["hour"]=="661") echo "selected"; ?>>23:00</option>
                        <option value="716" <?php if ($row_DatosEdit["hour"]=="716") echo "selected"; ?>>23:30</option>
                        <option value="771" <?php if ($row_DatosEdit["hour"]=="771") echo "selected"; ?>>00:00</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Tid: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="duration" id="duration" required>
                        <option value="52" <?php if ($row_DatosEdit["duration"]=="52") echo "selected"; ?>>0.5 timma</option>
                        <option value="107" <?php if ($row_DatosEdit["duration"]=="107") echo "selected"; ?>>1 timma</option>
                        <option value="162" <?php if ($row_DatosEdit["duration"]=="162") echo "selected"; ?>>1.5 timma</option>
                        <option value="217" <?php if ($row_DatosEdit["duration"]=="217") echo "selected"; ?>>2 timma</option>
                        <option value="272" <?php if ($row_DatosEdit["duration"]=="272") echo "selected"; ?>>2.5 timmar</option>
                        <option value="327" <?php if ($row_DatosEdit["duration"]=="327") echo "selected"; ?>>3 timmar</option>
                        <option value="382" <?php if ($row_DatosEdit["duration"]=="382") echo "selected"; ?>>3.5 timmar</option>
                        <option value="437" <?php if ($row_DatosEdit["duration"]=="437") echo "selected"; ?>>4 timmar</option>
                        <option value="492" <?php if ($row_DatosEdit["duration"]=="492") echo "selected"; ?>>4.5 timmar</option>
                        <option value="547" <?php if ($row_DatosEdit["duration"]=="547") echo "selected"; ?>>5 timmar</option>
                        <option value="602" <?php if ($row_DatosEdit["duration"]=="602") echo "selected"; ?>>5.5 timmar</option>
                        <option value="657" <?php if ($row_DatosEdit["duration"]=="657") echo "selected"; ?>>6 timmar</option>
                        <option value="712" <?php if ($row_DatosEdit["duration"]=="712") echo "selected"; ?>>6.5 timmar</option>
                        <option value="767" <?php if ($row_DatosEdit["duration"]=="767") echo "selected"; ?>>7 timmar</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="schedule.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
                <input type="hidden" name="id_schedule" id="id_schedule" value="<?php echo $_GET['regedit']; ?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
            </table>
        </form>
    </div>
<?php endif ?>