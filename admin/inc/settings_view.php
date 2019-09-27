<?php
 $query_DatosConsulta = sprintf("SELECT * FROM pages ORDER BY id_page"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<div class="user_div">
    <div class="space">
        <div class="settings_sb">
            <div class="under_sites">
                <ul>
                    <a href="#"><li>Page info</li></a>
                </ul>
            </div>
            <?php
            if ($totalRows_DatosConsulta > 0) {
            do { ?>
            <div class="under_sites">
                <ul>
                    <a href="#"><li><?php echo $row_DatosConsulta["name"]; ?></li></a>
                </ul>
            </div>
            <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta));
            }
            ?>
            <div class="add_under_button">
                <ul>
                    <a href="page_settings.php?newpage=1"><li>+ Add page</li></a>
                </ul>
            </div>
        </div>
        <div class="settings_cnt">
        </div>
    </div>
    <?php if($_GET["newpage"]):?>
        <form action="page_settings.php" method="post" name="formpage" id="formpage">
            <table class="formulario_schedule" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        Page
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="page_settings.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formpage" />
            </table>
        </form>
    <?php endif ?>
</div>