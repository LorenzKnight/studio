<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <form action="users.php" method="post" name="forminsert" id="forminsert">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Ny Användare</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Namn..." name="name" id="name" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Efternamn..." name="surname" id="surname" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Majl..." name="mail" id="mail" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Telefon..." name="telefon" id="telefon" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" Style="padding: 0 10px; color: #999; font-size: 14px;">
                        Level: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="rank" id="rank" required>
                        <option value="1">Admin</option>
                        <option value="2">Editor</option>
                        <option value="3">Contributor</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="users.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="password" id="password" value="123456"/>
                <input type="hidden" name="status" id="status" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" />
            </table>
        </form>
    </div>
<?php endif ?>

<?php if($_GET["edit"]):?>
    <div class="subform_cont1">
        <form action="users.php" method="post" name="formedit" id="formedit">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Redigera Användare</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Namn..." name="name" id="name" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Efternamn..." name="surname" id="surname" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['mail'];?>" placeholder="Majl..." name="mail" id="mail" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telefon'];?>" placeholder="Telefon..." name="telefon" id="telefon" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Level: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="rank" id="rank" required>
                        <option value="1" <?php if ($row_DatosEdit['rank'] == 1) echo "selected"; ?>>Admin</option>
                        <option value="2" <?php if ($row_DatosEdit['rank'] == 2) echo "selected"; ?>>Editor</option>
                        <option value="3" <?php if ($row_DatosEdit['rank'] == 3) echo "selected"; ?>>Contributor</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                        status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                        <option value="1" <?php if ($row_DatosEdit['status'] == 1) echo "selected"; ?>>Activ</option>
                        <option value="2" <?php if ($row_DatosEdit['status'] == 2) echo "selected"; ?>>Inactiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="users.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_user" id="id_user" value="<?php echo $row_DatosEdit["id_user"]; ?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
            </table>
        </form>
    </div>
<?php endif ?>