<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <form action="courses.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Ny Kurs</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Kurs Namn..." name="name" id="name" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Schedule (Mon 00:00-00:00)" name="schedule" id="schedule" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Läraren" name="teacher" id="teacher" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Priset" name="price" id="price" size="18" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        typ: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="category" id="category" required>
                        <option value="1">Med rabatt</option>
                        <option value="2">Utan rabatt</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                        <option value="0">Inaktiv</option>
                        <option value="1">Aktiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="courses.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="user_rank" id="user_rank" value="<?php echo $_SESSION['std_Nivel'];?>"/>
                <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['std_UserId'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
    </div>
<?php endif ?>
<?php if($_GET["editc"]):?>
    <div class="subform_cont1">
        <form action="courses.php" method="post" name="formeditc" id="formeditc">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Redigera Kurs</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Kurs Namn..." name="name" id="name" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['schedule'];?>" placeholder="Schedule (Mon 00:00-00:00)" name="schedule" id="schedule" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['teacher'];?>" placeholder="Läraren" name="teacher" id="teacher" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['price'];?>" placeholder="Priset" name="price" id="price" size="18" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Typ: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="category" id="category" required>
                        <option value="1" <?php if ($row_DatosEdit['category'] == 1) echo "selected"; ?>>Med rabatt</option>
                        <option value="2" <?php if ($row_DatosEdit['category'] == 2) echo "selected"; ?>>Utan rabatt</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                        <option value="0" <?php if ($row_DatosEdit['status'] == 0) echo "selected"; ?>>Inaktiv</option>
                        <option value="1" <?php if ($row_DatosEdit['status'] == 1) echo "selected"; ?>>Aktiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="courses.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_course" id="id_course" value="<?php echo $_GET['editc'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
            </table>
        </form>
    </div>
<?php endif ?>