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
                        <option value="0">17:00</option>
                        <option value="54">17:30</option>
                        <option value="110">18:00</option>
                        <option value="165">18:30</option>
                        <option value="220">19:00</option>
                        <option value="275">19:30</option>
                        <option value="330">20:00</option>
                        <option value="385">20:30</option>
                        <option value="440">21:00</option>
                        <option value="495">21:30</option>
                        <option value="550">22:00</option>
                        <option value="605">22:30</option>
                        <option value="660">23:00</option>
                        <option value="715">23:30</option>
                        <option value="770">00:00</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Tid: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="duration" id="duration" required>
                        <option value="54">0.5 timma</option>
                        <option value="110" selected>1 timma</option>
                        <option value="165">1.5 timma</option>
                        <option value="220">2 timma</option>
                        <option value="275">2.5 timmar</option>
                        <option value="330">3 timmar</option>
                        <option value="385">3.5 timmar</option>
                        <option value="440">4 timmar</option>
                        <option value="495">4.5 timmar</option>
                        <option value="550">5 timmar</option>
                        <option value="605">5.5 timmar</option>
                        <option value="660">6 timmar</option>
                        <option value="715">6.5 timmar</option>
                        <option value="770">7 timmar</option>
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
                        Sal: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sal" id="sal" required>
                        <option value="1" <?php if ($row_DatosEdit["sal"]=="1") echo "selected"; ?>>Sal 1</option>
                        <option value="2" <?php if ($row_DatosEdit["sal"]=="2") echo "selected"; ?>>Sal 2</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Kl: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="hour" id="hour" required>
                        <option value="0" <?php if ($row_DatosEdit["hour"]=="0") echo "selected"; ?>>17:00</option>
                        <option value="54" <?php if ($row_DatosEdit["hour"]=="54") echo "selected"; ?>>17:30</option>
                        <option value="110" <?php if ($row_DatosEdit["hour"]=="110") echo "selected"; ?>>18:00</option>
                        <option value="165" <?php if ($row_DatosEdit["hour"]=="165") echo "selected"; ?>>18:30</option>
                        <option value="220" <?php if ($row_DatosEdit["hour"]=="220") echo "selected"; ?>>19:00</option>
                        <option value="275" <?php if ($row_DatosEdit["hour"]=="275") echo "selected"; ?>>19:30</option>
                        <option value="330" <?php if ($row_DatosEdit["hour"]=="330") echo "selected"; ?>>20:00</option>
                        <option value="385" <?php if ($row_DatosEdit["hour"]=="385") echo "selected"; ?>>20:30</option>
                        <option value="440" <?php if ($row_DatosEdit["hour"]=="440") echo "selected"; ?>>21:00</option>
                        <option value="495" <?php if ($row_DatosEdit["hour"]=="495") echo "selected"; ?>>21:30</option>
                        <option value="550" <?php if ($row_DatosEdit["hour"]=="550") echo "selected"; ?>>22:00</option>
                        <option value="605" <?php if ($row_DatosEdit["hour"]=="605") echo "selected"; ?>>22:30</option>
                        <option value="660" <?php if ($row_DatosEdit["hour"]=="660") echo "selected"; ?>>23:00</option>
                        <option value="715" <?php if ($row_DatosEdit["hour"]=="715") echo "selected"; ?>>23:30</option>
                        <option value="770" <?php if ($row_DatosEdit["hour"]=="770") echo "selected"; ?>>00:00</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Tid: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="duration" id="duration" required>
                        <option value="54" <?php if ($row_DatosEdit["duration"]=="54") echo "selected"; ?>>0.5 timma</option>
                        <option value="110" <?php if ($row_DatosEdit["duration"]=="110") echo "selected"; ?>>1 timma</option>
                        <option value="165" <?php if ($row_DatosEdit["duration"]=="165") echo "selected"; ?>>1.5 timma</option>
                        <option value="220" <?php if ($row_DatosEdit["duration"]=="220") echo "selected"; ?>>2 timma</option>
                        <option value="275" <?php if ($row_DatosEdit["duration"]=="275") echo "selected"; ?>>2.5 timmar</option>
                        <option value="330" <?php if ($row_DatosEdit["duration"]=="330") echo "selected"; ?>>3 timmar</option>
                        <option value="385" <?php if ($row_DatosEdit["duration"]=="385") echo "selected"; ?>>3.5 timmar</option>
                        <option value="440" <?php if ($row_DatosEdit["duration"]=="440") echo "selected"; ?>>4 timmar</option>
                        <option value="495" <?php if ($row_DatosEdit["duration"]=="495") echo "selected"; ?>>4.5 timmar</option>
                        <option value="550" <?php if ($row_DatosEdit["duration"]=="550") echo "selected"; ?>>5 timmar</option>
                        <option value="605" <?php if ($row_DatosEdit["duration"]=="605") echo "selected"; ?>>5.5 timmar</option>
                        <option value="660" <?php if ($row_DatosEdit["duration"]=="660") echo "selected"; ?>>6 timmar</option>
                        <option value="715" <?php if ($row_DatosEdit["duration"]=="715") echo "selected"; ?>>6.5 timmar</option>
                        <option value="770" <?php if ($row_DatosEdit["duration"]=="770") echo "selected"; ?>>7 timmar</option>
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