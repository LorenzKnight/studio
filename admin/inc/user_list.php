<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
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
//     const el = document.getElementById('forminsert')
//     const clickableAreas = Array.from(document.getElementsByClassName('flying_button'))

//     //for severarl div
//      clickableAreas.push(...Array.from(document.getElementsByClassName('button_cancel')))
//      clickableAreas.push(document.getElementById('formedit'))
//     //end several div

//     clickableAreas.push(el)

//     let isClickOutside = true

//     for (let i = 0; i < clickableAreas.length; i++) {
//         if (isElementOrDescendant(clickableAreas[i], e.target)) {
//             isClickOutside = false
//         }
//     }

//     if (isClickOutside) {
//         location = 'users.php'
//     }
// }

// document.addEventListener('click', onClick)
</script>
<script>
    function asegurar_borrado()
    {
        rc = confirm("Är du säkert på att du vill radera den här register?");
        return rc;
    }
</script>
<?php include("user_form.php")?>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
<table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
    <tr height="40">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Name</td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Surname</td>
        <td width="22%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">E-Mail</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Telefone</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Level</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Status</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">-</td>
    </tr>
</table>
    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['name']; ?></td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"> <?php echo $row_DatosConsulta['surname']; ?></td>
        <td width="22%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['mail']; ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo $row_DatosConsulta['telefon']; ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo rank($row_DatosConsulta['rank']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo statusBinario($row_DatosConsulta['status']); ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0018") || $_SESSION['std_Nivel'] < 2) : ?>
            <?php if ((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] == "") || $row_DatosConsulta['rank'] != 0) { ?>
                <?php if ($row_DatosConsulta['mail'] != $_SESSION['MM_Username']) { ?>
        <div class="arternative">
            <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
            <div class="arternative-content">
                <a href="users.php?edit=<?php echo $row_DatosConsulta['id_user']; ?>" class="alt_button">Edit user</a>
                <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0019") || $_SESSION['std_Nivel'] < 1) : ?>
                <a href="users_delete.php?regdel=<?php echo $row_DatosConsulta['id_user']; ?>" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a>
                <?php endif ?>
            </div>
        </div>
                <?php } ?> 
            <?php } ?> 
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0018") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="users.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>