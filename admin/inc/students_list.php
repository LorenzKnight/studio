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
<script>
    function asegurar_borrado()
    {
            rc = confirm("Är du säkert på att du vill radera den här register?");
            return rc;
    }
</script>

<?php include("students_form.php")?>
<div class="search">
    <div class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        <form action="students.php" method="get" name="formsearch" id="formsearch">
            <input class="textf" placeholder="sök" name="search" id="search" style="min-width:75%;" />
            <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Sök</button>
            <input type="hidden" name="MM_search" id="MM_search" value="formsearch" />
        </form>
    </div>


    <div class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
    <form action="students.php" method="get" name="formfilter" id="formfilter">
        Periods : 
        <select class="textf" style="font-size:14px; color:#999; margin-top:10px;" name="term" id="term" onchange="validarForm();">
                <option value="">None</option>
            <?php
            if ($totalRows_DatosTerm_filter > 0) {
            do { ?>
                <option value="<?php echo $row_DatosTerm_filter['id_term'];?>" <?php if ($_GET['term'] == $row_DatosTerm_filter['id_term']) echo "selected"; ?>><?php echo $row_DatosTerm_filter['term_name'];?></option>
            <?php } while ($row_DatosTerm_filter = mysqli_fetch_assoc($DatosTerm_filter));
            }
            ?>
        </select>
        <!-- <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Ok</button> -->
    </div>
    <div class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        Courses : 
        <select class="textf" style="font-size:14px; color:#999; margin-top:10px;" name="course" id="course" onchange="validarForm();">
                <option value="">None</option>
            <?php
            if ($totalRows_DatosCourse_filter > 0) {
            do { ?>
                <option value="<?php echo $row_DatosCourse_filter['id_course'];?>" <?php if ($_GET['course'] == $row_DatosCourse_filter['id_course']) echo "selected"; ?>><?php echo $row_DatosCourse_filter['name'];?></option>
            <?php } while ($row_DatosCourse_filter = mysqli_fetch_assoc($DatosCourse_filter));
            }
            ?>
        </select>
        <!-- <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Ok</button> -->
        <input type="hidden" name="MM_search" id="MM_search" value="formfilter" />
        </form>
    </div>

    <div style="width:100px; text-align:center; color:#FFF; text-shadow: 0px 1px 15px rgba(58, 59, 69, 0.63); font-size:14px;">
        <a style="margin: 0;" href="students.php"><button type="" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>" value="">Rensa</button> </a><br/>
        <?php echo $totalRows_DatosConsulta; ?> elev(er)
    </div>
</div>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Name</td>
            <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;">Surname</td>
            <td width="10%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">Obs.</td>
            <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Telefone</td>
            <td width="19%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">E-Mail</td>
            <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">sex</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Course Package</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>
    <?php do { ?>
    <table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px; <?php if (statusInsc($row_DatosConsulta['id_student'], $TermAct) != 1) { ?><?php echo statusColors(statusInsc($row_DatosConsulta['id_student'], $TermAct))?><?php } ?>">
    <tr height="">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo ObtenerNombreStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;"><?php echo ObtenerApellidoStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="10%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">
        <p><?php 
            $texto= $row_DatosConsulta['commentary'];
            if (strlen($texto) > 0) {
                $texto = substr($texto,0,15).'...';
                print '<div class="texto_original">'.$texto.'</div>';
        ?></p>
        <?php } ?>
        </td>
        <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo ObtenerTelefonoStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="19%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;"><?php echo ObtenerEmailStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo sex($row_DatosConsulta['id_student']); ?></td></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo OptenerPaqueteEnLista($row_DatosConsulta['id_insc'], $row_DatosTerm['id_term']); ?> <?php echo OptenerPaqueteEnLista($row_DatosConsulta['transaction_made'], $row_DatosTerm['id_term']); ?></td>
        
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0001") || showPermissions($_SESSION['std_UserId'], "TSYS-P0003") || $_SESSION['std_Nivel'] < 2) : ?>
        <div class="arternative">
            <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
            <div class="arternative-content">
                <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0001") || $_SESSION['std_Nivel'] < 2) : ?>
                <a href="students.php?see=<?php echo $row_DatosConsulta['id_student']; ?>&IDinsc=<?php echo $row_DatosConsulta['id_insc']; ?>" class="alt_button">See more</a>
                <?php endif ?>
                <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0003") || $_SESSION['std_Nivel'] < 2) : ?>
                <a href="students.php?editi=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">Edit info</a>
                <a href="students.php?editc=<?php echo $row_DatosConsulta['id_insc']; ?> <?php if($_GET['course'] !=""){echo ncsnID($row_DatosConsulta['id_student'], $TermAct);} ?>" class="alt_button">Edit course</a>
                <a href="students.php?deleteID=<?php echo $row_DatosConsulta['id_insc']; ?> <?php if($_GET['course'] !=""){echo ncsnID($row_DatosConsulta['id_student'], $TermAct);} ?>" class="alt_button">Delete</a>
                <?php endif ?>
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
    <tr height="60">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
</table>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0002") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="students.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>