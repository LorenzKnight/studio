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
    <div style="width:100px; text-align:center; color:#FFF; text-shadow: 0px 1px 15px rgba(58, 59, 69, 0.63); font-size:14px;">
        <a style="margin: 0;" href="students.php"><button type="" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>" value="">Rensa</button> </a><br/>
         elev(er)
    </div>
    <div class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        <form action="students.php" method="get" name="formfilter" id="formfilter">
            Filtrera efter : 
            <select class="textf" style="font-size: 14px; color: #999;" name="course" id="course">
                <?php
                if ($totalRows_DatosCourse_filter > 0) {
                do { ?>
                    <option value="<?php echo $row_DatosCourse_filter['id_course'];?>" <?php if ($_GET['course'] == $row_DatosCourse_filter['id_course']) echo "selected"; ?>><?php echo $row_DatosCourse_filter['name'];?></option>
                <?php } while ($row_DatosCourse_filter = mysqli_fetch_assoc($DatosCourse_filter));
                }
                ?>
            </select>
            <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Ok</button>
            <input type="hidden" name="MM_search" id="MM_search" value="formfilter" />
        </form>
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

    <table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;" id="students">
        <tr height="">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php ?></td>
            <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;"><?php ?></td>
            <td width="10%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">
            
            
            </td>
            <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php ?></td>
            <td width="19%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;"><?php ?></td>
            <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php ?></td></td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php ?></td>
            
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0001") || showPermissions($_SESSION['std_UserId'], "TSYS-P0003") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0001") || $_SESSION['std_Nivel'] < 2) : ?>
                    <a href="students.php?see=&IDinsc=" class="alt_button">See more</a>
                    <?php endif ?>
                    <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0003") || $_SESSION['std_Nivel'] < 2) : ?>
                    <a href="students.php?editi=" class="alt_button">Edit info</a>
                    <a href="students.php?editc=" class="alt_button">Edit course</a>
                    <a href="student_delete.php?id=" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a>
                    <?php endif ?>
                </div>
            </div>
            <?php endif ?>
            </td>
        </tr>
    </table>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0002") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="students.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>