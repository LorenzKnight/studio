<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <div class="formulario_user">
            <form action="discountcodes.php" method="post" name="formcode" id="formcode">
                <table style="width:90%; margin:0 auto;" border="0" cellspacing="0" cellpadding="0">
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <h2>Ny  discount code</h2>
                        </td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center"><input class="textf" style="text-align:center;" type="text" placeholder="CODE..." name="code" id="code" size="42" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();" required/></td>
                    </tr>
                    <tr height="50">
                        <td valign="middle" align="center" style="color:#999; font-size:13px;"><input class="textf" style="text-align:center;" type="text" placeholder="%" name="percent" id="percent" size="14" onkeyup="inputone()"/> %</td>
                        <td valign="middle" align="center" style="color:#999; font-size:13px;"><input class="textf" style="text-align:center;" type="text" placeholder="kr" name="money" id="money" size="14" onkeyup="inputtwo()"/> kr</td>
                    </tr>
                    <tr height="50">
                        <td valign="middle" align="center"><input  class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" id="start_date" name="start_date" autocomplete="off" size="17" placeholder="Start date..." required/></td>
                        <td valign="middle" align="center"><input  class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" id="stop_date" name="stop_date" autocomplete="off" size="17" placeholder="Stop date..." required/></td>
                    </tr>
                    <tr height="50">
                        <td valign="middle" align="center"><input class="textf" style="text-align:center;" type="text" placeholder="# kod tillgängligt" name="quanti" id="quanti" size="14" required/> st</td>
                        <td valign="middle" align="center"></td>
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
                            <p>Kurser den här koden kan förändra</p>

                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="0" onchange="permissions2(this.value);" checked="checked">
                            <label for="all">Ingen kurs har valts</label>
                            <br/>
                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="1" onchange="permissions2(this.value);">
                            <label for="selected">Välj kurs här</label>

                                <div id="actions" style="width:90%; padding: 5px 0; display:none;">
                                    <table cellspacing="0" style="font-size:12px; text-align:left;">
                                        <tr height="10">
                                            <td width="" nowrap="nowrap" align="left" style="color:#666; padding: 2px 0 2px 22px; text-align:left;">
                                            <?php if ($row_DatosCursos > 0) { // Show if recordset not empty ?>
                                                <?php do { ?>
                                                <input type="checkbox" id="id_course" name="id_course[]" value="<?php echo $row_DatosCursos['id_course']?>"> <?php echo $row_DatosCursos['name']?><br/>   
                                                <?php } while ($row_DatosCursos = mysqli_fetch_assoc($DatosCursos)); 
                                            }
                                            else
                                            { // Show if recordset is empty ?>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                        </td>
                    </tr>
                    <tr height="80">
                        <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                <input class="button_a" style="width: 170px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" value="Lägg till" />
                        </td>
                    </tr>
                    <tr height="10">
                        <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                            
                        </td>
                    </tr>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="formcode" />
                </table>
            </form>
        </div>
    </div>
<?php endif ?>

<?php if($_GET["editi"]):?>
    <div class="subform_cont1">
        <div class="formulario_user">
            <form action="discountcodes.php" method="post" name="formcodeedit" id="formcodeedit">
                <table style="width:90%; margin:0 auto;" border="0" cellspacing="0" cellpadding="0">
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <h2>Redigera discount code</h2>
                        </td>
                    </tr>
                    <tr height="50">
                        <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['code'];?>" placeholder="CODE..." name="code" id="code" size="42" autocomplete="off" style="text-align:center;" onkeyup="this.value = this.value.toUpperCase();" required/></td>
                    </tr>
                    <tr height="50">
                        <td valign="middle" align="center" style="color:#999; font-size:13px;"><input class="textf" style="text-align:center;" type="text" value="<?php echo $row_DatosEdit['percent'];?>" placeholder="%" name="percent" id="percent" size="14" onkeyup="inputone()"/> %</td>
                        <td valign="middle" align="center" style="color:#999; font-size:13px;"><input class="textf" style="text-align:center;" type="text" value="<?php echo $row_DatosEdit['money'];?>" placeholder="kr" name="money" id="money" size="14" onkeyup="inputtwo()"/> kr</td>
                    </tr>
                    <tr height="50">
                        <td valign="middle" align="center"><input  class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" value="<?php echo $row_DatosEdit['start_date'];?>" id="start_date" name="start_date" autocomplete="off" size="17" placeholder="Start date..." required/></td>
                        <td valign="middle" align="center"><input  class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" value="<?php echo $row_DatosEdit['stop_date'];?>" id="stop_date" name="stop_date" autocomplete="off" size="17" placeholder="Stop date..." required/></td>
                    </tr>
                    <tr height="50">
                        <td valign="middle" align="center"><input class="textf" style="text-align:center;" type="text" value="<?php echo $row_DatosEdit['quanti'];?>" placeholder="# kod tillgängligt" name="quanti" id="quanti" size="14" required/> st</td>
                        <td valign="middle" align="center"></td>
                    </tr>
                    <tr height="50">
                        <td style="color:#999; padding: 20px 30px 10px; font-size:14px;" colspan="2" valign="middle" align="left">
                            <p>Kurser den här koden kan förändra</p>

                            <input type="radio" id="selected_actions_only" name="selected_actions_only" value="1" checked="checked">
                            <label for="selected">Välj kurs här</label>

                                <div id="actions" style="width:90%; padding: 5px 0; display:block;">
                                    <table cellspacing="0" style="font-size:12px; text-align:left;">
                                        <tr height="10">
                                            <td width="" nowrap="nowrap" align="left" style="color:#666; padding: 2px 0 2px 22px; text-align:left;">
                                            <?php if ($row_DatosCursos > 0) { // Show if recordset not empty ?>
                                                <?php do { ?>
                                                <input type="checkbox" id="id_course" name="id_course[]" value="<?php echo $row_DatosCursos['id_course']?>" <?php if(showCousePCode($_GET['editi'], $row_DatosCursos['id_course'])) {?>checked<?php } ?>> <?php echo $row_DatosCursos['name']?><br/>   
                                                <?php } while ($row_DatosCursos = mysqli_fetch_assoc($DatosCursos)); 
                                            }
                                            else
                                            { // Show if recordset is empty ?>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                        </td>
                    </tr>
                    <tr height="80">
                        <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <input class="button_a" style="width: 170px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" value="Redigera" onclick="javascript:return asegurar ();"/>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                            
                        </td>
                    </tr>
                    <input type="hidden" name="id_adm_disc" id="id_adm_disc" value="<?php echo $_GET['editi']; ?>"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="formcodeedit" />
                </table>
            </form>
        </div>
    </div>
<?php endif ?>
<script>
    function asegurar()
    {
        rc = confirm("Är du säkert på den här ändring?");
        return rc;
    }

    function inputone()
    {
        var percent = document.getElementById("percent").value;
        if (percent != "")
        { 
            document.getElementById("money").disabled = true;
            document.getElementById("money").style.border="1px solid #F0F0F0";
        } else { 
            document.getElementById("money").disabled = false;
            document.getElementById("money").style.border="1px solid #999";
        }
    }

    function inputtwo()
    {
        var percent = document.getElementById("money").value;
        if (percent != "")
        { 
            document.getElementById("percent").disabled = true;
            document.getElementById("percent").style.border="1px solid #F0F0F0";
        } else { 
            document.getElementById("percent").disabled = false;
            document.getElementById("percent").style.border="1px solid #999";
        }
    }
</script>