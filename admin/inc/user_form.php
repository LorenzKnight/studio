<script>
    function asegurar()
    {
        rc = confirm("Är du säkert på den här ändring?");
        return rc;
    }
</script>
<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <div class="formulario_user">
            <form action="users.php" method="post" name="formpermissions" id="formpermissions">
                <table style="width:90%; margin:0 auto;" border="0" cellspacing="0" cellpadding="0">
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <h2>Ny Användare</h2>
                        </td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Namn..." name="name" id="name" size="42" required/></td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Efternamn..." name="surname" id="surname" size="42" required/></td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Majl..." name="mail" id="mail" size="42" required/></td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Telefon..." name="telefon" id="telefon" size="42" required/></td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center" Style="padding: 0 10px; color: #999; font-size: 14px;">
                            Level: 
                            <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="rank" id="rank" required>
                            <option value="5">Subscriber</option>
                            <option value="4">Volunteer/Contributor</option>
                            <option value="3">Teacher/Author</option>
                            <option value="2">Editor</option>
                            <option value="1">Admin</option>
                            </select>
                        </td>
                    </tr>
                    <script>
                        function permissions2(value) {
                            if(value=="1") {
                                document.getElementById('actions').style.display = 'block';
                            }else{
                                document.getElementById('actions').style.display = 'none';
                            }
                        }
                    </script>
                    <tr height="50">
                        <td style="color:#999; padding: 20px 30px 10px; font-size:14px;" colspan="2" valign="middle" align="left">
                            <p>Actions This User Can Perform</p>

                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="0" onchange="permissions2(this.value);" checked="checked">
                            <label for="all">No actions selected </label>
                            <br/>
                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="1" onchange="permissions2(this.value);">
                            <label for="selected">Selected actions only</label>

                                <div id="actions" style="width:90%; padding: 5px 0; display:none;">
                                    <table cellspacing="0" style="font-size:12px; text-align:left;">
                                        <tr height="10">
                                            <td width="" nowrap="nowrap" align="left" style="color:#666; padding: 2px 0 2px 22px; text-align:left;">
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0001"> See registration details<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0002"> Add inscriptions<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0003"> Edit student enrollment<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0004"> Add periods<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0005"> Edit periods<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0006"> Add couses<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0007"> Edit Couses<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0008"> Manage discount codes<br/>
                                                <?php if($_SESSION['std_Nivel'] < 1) : ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0009"> Manage Package discount (% discount)<br/>
                                                <?php endif ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0010"> Manage inactive courses<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0011"> See Posts<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0012"> Manage Events<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0013"> Manage Publications<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0014"> Manage Collaborators<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0015"> Manage schedule<br/>
                                                <?php if($_SESSION['std_Nivel'] < 1) : ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0016"> Manage Page settings<br/>
                                                <?php endif ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0017"> See users (admin)<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0018"> Manage users (admin)<br/>
                                                <?php if($_SESSION['std_Nivel'] < 1) : ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0019"> Delete users (admin)<br/>
                                                <?php endif ?>
                                                <!-- <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0020"> Manage economy -->
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                        </td>
                    </tr>
                    <tr height="80">
                        <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                <a href="users.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                        </td>
                    </tr>
                    <tr height="10">
                        <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                            
                        </td>
                    </tr>
                    <input type="hidden" name="password" id="password" value="123456"/>
                    <input type="hidden" name="status" id="status" value="1"/>
                    <input type="hidden" name="id_admin" id="id_admin" value="<?php echo $_SESSION['std_UserId']; ?>"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="formpermissions" />
                </table>
            </form>
        </div>
    </div>
<?php endif ?>

<?php if($_GET["edit"]):?>
    <div class="subform_cont1">
        <div class="formulario_user">
            <form action="users.php" method="post" name="formpermissionsedit" id="formpermissionsedit">
                <table style="width:90%; margin:0 auto;" border="0" cellspacing="0" cellpadding="0">
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <h2>Redigera Användare</h2>
                        </td>
                    </tr>
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Namn..." name="name" id="name" size="42" required/></td>
                    </tr>
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Efternamn..." name="surname" id="surname" size="42" required/></td>
                    </tr>
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['mail'];?>" placeholder="Majl..." name="mail" id="mail" size="42" required/></td>
                    </tr>
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telefon'];?>" placeholder="Telefon..." name="telefon" id="telefon" size="42" required/></td>
                    </tr>
                    <!-- <tr height="60">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['password'];?>" placeholder="password..." name="password" id="password" size="42" required/></td>
                    </tr> -->
                    <tr height="60">
                        <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                            Level: 
                            <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="rank" id="rank" required>
                            <option value="1" <?php if ($row_DatosEdit['rank'] == 1) echo "selected"; ?>>Admin</option>
                            <option value="2" <?php if ($row_DatosEdit['rank'] == 2) echo "selected"; ?>>Editor</option>
                            <option value="3" <?php if ($row_DatosEdit['rank'] == 3) echo "selected"; ?>>Teacher/Author</option>
                            <option value="4" <?php if ($row_DatosEdit['rank'] == 4) echo "selected"; ?>>Volunteer/Contributor</option>
                            <option value="5" <?php if ($row_DatosEdit['rank'] == 5) echo "selected"; ?>>Subscriber</option>
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
                    <script>
                        function permissions3(value) {
                            if(value=="1") {
                                document.getElementById('actions').style.display = 'block';
                            }else{
                                document.getElementById('actions').style.display = 'none';
                            }
                        }
                    </script>
                    <tr height="50">
                        <td style="color:#999; padding: 20px 30px 10px; font-size:14px;" colspan="2" valign="middle" align="left">
                            <p>Actions This User Can Perform</p>

                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="0" onchange="permissions3(this.value);" checked="checked">
                            <label for="all">No actions selected </label>
                            <br/>
                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="1" onchange="permissions3(this.value);">
                            <label for="selected">Selected actions only</label>

                                <div id="actions" style="width:90%; padding: 5px 0; display:none;">
                                    <table cellspacing="0" style="font-size:12px; text-align:left;">
                                        <tr height="10">
                                            <td width="" nowrap="nowrap" align="left" style="color:#666; padding: 2px 0 2px 22px; text-align:left;">
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0001" <?php if(showPermissions($_GET['edit'], "TSYS-P0001")) {?>checked<?php } ?>> See registration details<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0002" <?php if(showPermissions($_GET['edit'], "TSYS-P0002")) {?>checked<?php } ?>> Add inscriptions<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0003" <?php if(showPermissions($_GET['edit'], "TSYS-P0003")) {?>checked<?php } ?>> Edit student enrollment<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0004" <?php if(showPermissions($_GET['edit'], "TSYS-P0004")) {?>checked<?php } ?>> Add periods<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0005" <?php if(showPermissions($_GET['edit'], "TSYS-P0005")) {?>checked<?php } ?>> Edit periods<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0006" <?php if(showPermissions($_GET['edit'], "TSYS-P0006")) {?>checked<?php } ?>> Add couses<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0007" <?php if(showPermissions($_GET['edit'], "TSYS-P0007")) {?>checked<?php } ?>> Edit couses<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0008" <?php if(showPermissions($_GET['edit'], "TSYS-P0008")) {?>checked<?php } ?>> Manage discount codes<br/>
                                                <?php if($_SESSION['std_Nivel'] < 1) : ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0009" <?php if(showPermissions($_GET['edit'], "TSYS-P0009")) {?>checked<?php } ?>> Manage Package discount (% discount)<br/>
                                                <?php endif ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0010" <?php if(showPermissions($_GET['edit'], "TSYS-P0010")) {?>checked<?php } ?>> Manage inactive courses<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0011" <?php if(showPermissions($_GET['edit'], "TSYS-P0011")) {?>checked<?php } ?>> See Posts<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0012" <?php if(showPermissions($_GET['edit'], "TSYS-P0012")) {?>checked<?php } ?>> Manage Events<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0013" <?php if(showPermissions($_GET['edit'], "TSYS-P0013")) {?>checked<?php } ?>> Manage Publications<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0014" <?php if(showPermissions($_GET['edit'], "TSYS-P0014")) {?>checked<?php } ?>> Manage Collaborators<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0015" <?php if(showPermissions($_GET['edit'], "TSYS-P0015")) {?>checked<?php } ?>> Manage schedule<br/>
                                                <?php if($_SESSION['std_Nivel'] < 1) : ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0016" <?php if(showPermissions($_GET['edit'], "TSYS-P0016")) {?>checked<?php } ?>> Manage Page settings<br/>
                                                <?php endif ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0017" <?php if(showPermissions($_GET['edit'], "TSYS-P0017")) {?>checked<?php } ?>> See users (admin)<br/>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0018" <?php if(showPermissions($_GET['edit'], "TSYS-P0018")) {?>checked<?php } ?>> Manage users (admin)<br/>
                                                <?php if($_SESSION['std_Nivel'] < 1) : ?>
                                                <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0019" <?php if(showPermissions($_GET['edit'], "TSYS-P0019")) {?>checked<?php } ?>> Delete users (admin)<br/>
                                                <?php endif ?>
                                                <!-- <input type="checkbox" id="permissions" name="permissions[]" value="TSYS-P0020" <?php if(showPermissions($_GET['edit'], "TSYS-P0020")) {?>checked<?php } ?>> Manage economy -->
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                        </td>
                    </tr>
                    <tr height="80">
                        <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                <a href="users.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera" onclick="javascript:return asegurar ();"/>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                            
                        </td>
                    </tr>
                    <input type="hidden" name="id_user" id="id_user" value="<?php echo $row_DatosEdit["id_user"]; ?>"/>
                    <input type="hidden" name="id_admin" id="id_admin" value="<?php echo $_SESSION['std_UserId']; ?>"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="formpermissionsedit" />
                </table>
            </form>
        </div>
    </div>
<?php endif ?>