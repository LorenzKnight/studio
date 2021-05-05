<?php include("discountcodes_form.php")?>
<script>
    function asegurar_borrado()
    {
        rc = confirm("Är du säkert på att du vill radera den här register?");
        return rc;
    }
</script>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
<table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
    <tr height="40" style="color: #FFF;">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Code</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">discount</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Uses</td>
        <td width="30%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Start - End</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
    </tr>
</table>
    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['code']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php if ($row_DatosConsulta['percent'] != "") { echo $row_DatosConsulta['percent']; ?> % <?php } else { echo $row_DatosConsulta['money']; ?> kr <?php } ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo codeUses($row_DatosConsulta['code']);?> / <?php echo $row_DatosConsulta['quanti']; ?></td>
        <td width="30%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><p style="font-size:11px;">Start: <?php echo $row_DatosConsulta['start_date']; ?></p> <p style="font-size:11px;">Stop: <?php echo $row_DatosConsulta['stop_date']; ?></p></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0008") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="discountcodes.php?editi=<?php echo $row_DatosConsulta['id_adm_disc']; ?>" class="alt_button">Configure code</a>
                    <a href="discountcodes_delete.php?id=<?php echo $row_DatosConsulta['id_adm_disc']; ?>" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
    }
    else
    { // Show if recordset is empty ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
</table>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0008") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="discountcodes.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>