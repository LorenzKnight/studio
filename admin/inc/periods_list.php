<?php include("periods_form.php")?>
<script>
    function asegurar_borrado()
    {
        rc = confirm("Är du säkert på att du vill radera den här register?");
        return rc;
    }
</script>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
<table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
    <tr height="40">
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">Name</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Start Date</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">End Date</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">No Weeks</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
    </tr>
</table>
    <?php if ($row_DatosPeriod > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosPeriod['term_name']; ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['term_start']; ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['term_stop']; ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['no_weeks']; ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPeriod['status']); ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0005") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="periods.php?editp=<?php echo $row_DatosPeriod['id_term']; ?>" class="alt_button">Edit Termin</a>
                    <a href="period_delete.php?id=<?php echo $row_DatosPeriod['id_term']; ?>" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosPeriod = mysqli_fetch_assoc($DatosPeriod)); 
    }
    else
    { // Show if recordset is empty ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
</table>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0004") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="periods.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>