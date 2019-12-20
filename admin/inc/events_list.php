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

<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Foto</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Link</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>

    <?php if ($row_DatosEvents > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosEvents['event_date']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><img style="margin:5px;" src="../img/news/<?php echo $row_DatosEvents['foto']; ?>" height="" width="90%"></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosEvents['name']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><a href="<?php echo $row_DatosEvents['link']; ?>" target="_blank">FB Event</a></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <div class="arternative">
                <button class="artbtn">o o o</button>
                <div class="arternative-content">
                    <a href="events.php?edit=<?php echo $row_DatosEvents['id_event']; ?>" class="alt_button">Edit event</a>
                    <a href="events_delete.php?DeleteID=<?php echo $row_DatosEvents['id_event']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosEvents = mysqli_fetch_assoc($DatosEvents)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</div>

<a href="events.php?newevent=1"><div class="flying_button">+</div></a>

