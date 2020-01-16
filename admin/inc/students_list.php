<script>
// const isElementOrDescendant = function (parent, child) {
//     if (parent === child) return true

//     var node = child.parentNode;
//     while (node != null) {
//     if (node == parent) {
//         return true;
//     }
//     node = node.parentNode;
//     }
//     return false;
// }

//     //Esto es para cerrar el div si le damos click afuera de este click
// const onClick = function (e) {
//     const el = document.getElementById('formart')
//     const clickableAreas = Array.from(document.getElementsByClassName('alt_button'))

//     // //for severarl div
//     //  clickableAreas.push(...Array.from(document.getElementsByClassName('button_cancel')))
//     //  clickableAreas.push(document.getElementById('formedit'))
//     // //end several div

//     clickableAreas.push(el)

//     let isClickOutside = true

//     for (let i = 0; i < clickableAreas.length; i++) {
//         if (isElementOrDescendant(clickableAreas[i], e.target)) {
//             isClickOutside = false
//         }
//     }

//     if (isClickOutside) {
//         location = 'students.php'
//     }
// }

// document.addEventListener('click', onClick)

</script>

<?php include("students_form.php")?>
<div class="search">
    <div class="filter">
        <form action="students.php" method="get" name="formsearch" id="formsearch">
            <input class="textf" placeholder="sök" name="search" id="search" size="50" />
            <button type="submit" class="button_small">Sök</button>
            
            <input type="hidden" name="MM_search" id="MM_search" value="formsearch" />
        </form>
    </div>
    <div style="width:100px; text-align:center; padding:5px 0;">
        <a style="margin: 0;" href="students.php"><button type="" class="button_small" value="">Rensa</button> </a>
    </div>
    <div class="filter">
        <form action="students.php" method="get" name="formfilter" id="formfilter">
            Filtrera efter klass: 
            <select class="textf" style="font-size: 14px; color: #999;" name="course" id="course">
            <?php
            if ($totalRows_DatosCourse_filter > 0) {
            do { ?>
            <option value="<?php echo $row_DatosCourse_filter['id_course'];?>"><?php echo $row_DatosCourse_filter['name'];?></option>
            <?php } while ($row_DatosCourse_filter = mysqli_fetch_assoc($DatosCourse_filter));
            }
            ?>
            </select>
            <input type="submit" class="button_small" value="Ok" />
            <input type="hidden" name="MM_search" id="MM_search" value="formfilter" />
        </form>
    </div>
</div>
<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Surname</td>
        <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Telefone</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">E-Mail</td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">sex</td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">registration date</td>
        <td width="4%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>

    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo ObtenerNombreStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;"><?php echo ObtenerApellidoStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo ObtenerTelefonoStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="20%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;"><?php echo ObtenerEmailStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo sex($row_DatosConsulta['id_student']); ?></td></td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['date']; ?></td>
        <td width="4%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo status($row_DatosConsulta['status']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <div class="arternative">
            <button class="artbtn">o o o</button>
            <div class="arternative-content">
                <a href="students.php?see=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">See more</a>
                <a href="students.php?editi=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">Edit info</a>
                <a href="students.php?editc=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">Edit course</a>
                <a href="student_delete.php?id=<?php echo $row_DatosConsulta['id_insc']; ?>" class="alt_button">Delete</a>
            </div>
        </div>
        </td>
    </tr>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
    }
    else
    { // Show if recordset is empty ?>
    <tr class="line" height="60">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
    <?php } ?>
</table>
</div>

<a href="students.php?new=1"><div class="flying_button">+</div></a>