<?php include("p_discount_form.php")?>
<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Tillstånd</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;"># Kurser</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Procent %</td>
        <td width="30%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;"></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>
    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['package_conditions']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['valor']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['percent']; ?> %</td>
        <td width="30%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <div class="arternative">
                <button class="artbtn">o o o</button>
                <div class="arternative-content">
                    <a href="p_discount.php?editp=<?php echo $row_DatosConsulta['id_p_discount']; ?>" class="alt_button">Edit Discount</a>
                    <a href="p_discount_delete.php?id=<?php echo $row_DatosConsulta['id_p_discount']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        </td>
    </tr>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
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

<a href="p_discount.php?new=1"><div class="flying_button">+</div></a>