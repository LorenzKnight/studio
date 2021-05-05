<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosEvents = sprintf("SELECT * FROM events ORDER BY event_date DESC");
$DatosEvents = mysqli_query($con, $query_DatosEvents) or die(mysqli_error($con));
$row_DatosEvents = mysqli_fetch_assoc($DatosEvents);
$totalRows_DatosEvents = mysqli_num_rows($DatosEvents);
?>

<?php include("event_form.php")?>
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
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Foto</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Name</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Link</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
    </tr>
</table>

    <?php if ($row_DatosEvents > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosEvents['event_date']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><img style="margin:5px;" src="../img/news/<?php echo $row_DatosEvents['foto']; ?>" height="" width="90%"></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosEvents['name']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><a href="<?php echo $row_DatosEvents['link']; ?>" target="_blank">FB Event</a></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0012") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="events.php?edit=<?php echo $row_DatosEvents['id_event']; ?>" class="alt_button">Edit event</a>
                    <a href="events_delete.php?DeleteID=<?php echo $row_DatosEvents['id_event']; ?>" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosEvents = mysqli_fetch_assoc($DatosEvents)); 
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
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0012") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="events.php?newevent=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>
