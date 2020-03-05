<?php include("periods_form.php")?>
<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Start Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">End Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>
    <?php if ($row_DatosPeriod > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosPeriod['term_name']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['term_start']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['term_stop']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPeriod['status']); ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <div class="arternative">
                <button class="artbtn">o o o</button>
                <div class="arternative-content">
                    <a href="periods.php?editp=<?php echo $row_DatosPeriod['id_term']; ?>" class="alt_button">Edit Termin</a>
                    <a href="period_delete.php?id=<?php echo $row_DatosPeriod['id_term']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        </td>
    </tr>
    <?php } while ($row_DatosPeriod = mysqli_fetch_assoc($DatosPeriod)); 
    }
    else
    { // Show if recordset is empty ?>
        <table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
            <tr class="line" height="60">
                <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
            </tr>
        </table>
    <?php } ?>
</table>
</div>

<a href="periods.php?new=1"><div class="flying_button">+</div></a>