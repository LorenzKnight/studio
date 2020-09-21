<?php include("inactive_courses_form.php")?>
<script>
    function asegurar_borrado()
    {
        rc = confirm("Är du säkert på att du vill radera den här register?");
        return rc;
    }
</script>
<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="26%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="25%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Schedule</td>
        <td width="5.64%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Price</td>
        <td width="21.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Teacher</td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>

    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="26%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['name']; ?></td>
        <td width="25%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['schedule']; ?></td>
        <td width="5.64%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['price']; ?> kr</td>
        <td width="21.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['teacher']; ?></td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosConsulta['status']); ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0009") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="artbtn">o o o</button>
                <div class="arternative-content">
                    <a href="inactive_courses.php?editc=<?php echo $row_DatosConsulta['id_course']; ?>" class="alt_button">Edit course</a>
                    <a href="course_delete.php?id=<?php echo $row_DatosConsulta['id_course']; ?>" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</table>
</div>