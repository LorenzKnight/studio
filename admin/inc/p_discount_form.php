<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <form action="p_discount.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Ny Discount</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Tillstånd..." name="package_conditions" id="package_conditions" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="# Kurser" name="valor" id="valor" size="12" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Procent" name="percent" id="percent" size="8" required/> %</td>
                </tr>
                
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="p_discount.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
    </div>
<?php endif ?>
<?php if($_GET["editp"]):?>
    <div class="subform_cont1">
        <form action="p_discount.php" method="post" name="formeditp" id="formeditp">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Redigera Discount</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['package_conditions'];?>" placeholder="Tillstånd..." name="package_conditions" id="package_conditions" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['valor'];?>" placeholder="# Kurser" name="valor" id="valor" size="12" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['percent'];?>" placeholder="Procent" name="percent" id="percent" size="8" required/> %</td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="p_discount.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_p_discount" id="id_p_discount" value="<?php echo $_GET['editp'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formeditp" />
            </table>
        </form>
    </div>
<?php endif ?>