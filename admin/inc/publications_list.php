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
//     const el = document.getElementById('formrequest')
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
//         location = 'publications.php'
//     }
// }

// document.addEventListener('click', onClick)
</script>
<?php include("publications_form.php")?>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40" style="color: #FFF;">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Date</Title></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Foto</td>
            <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Content</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Site</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Position</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosPub1 > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">    
    <tr height="100" style="background-color:<?php if (status($row_DatosConsulta['id_student']) == Inactive) echo "#999"?>;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosPub1['date']; ?></td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
            <img src='<?php if ($row_DatosPub1['foto'] != "") { ?> ../img/news/<?php echo $row_DatosPub1['foto']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
        </td>
        <!-- <td width="19%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php //echo $row_DatosPub1['title']; ?></td> -->
        <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
        <?php if($row_DatosPub1['title'] != "") { ?>
            <?php echo $row_DatosPub1['title']; ?>
        <?php } else { ?>
            <p><?php 
                $texto= $row_DatosPub1['content'];
                if (strlen($texto) > 0) {
                    $texto = substr($texto,0,100).'...';
                    print '<div class="texto_original">'.$texto.'</div>';
            ?></p>
            <?php } ?>
        <?php } ?>
        </td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo publicationsSite($row_DatosPub1['site']); ?></td></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPub1['position']; ?></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPub1['status']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="publications.php?edit=<?php echo $row_DatosPub1['id_publications']; ?>" class="alt_button">Edit info</a>
                    <a href="publications_delete.php?DeleteID=<?php echo $row_DatosPub1['id_publications']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosPub1 = mysqli_fetch_assoc($DatosPub1)); 
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


<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40" style="color: #FFF;">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Date</Title></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Foto</td>
            <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Content</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Site</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Position</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosPub2 > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">    
    <tr height="100" style="background-color:<?php if (status($row_DatosConsulta['id_student']) == Inactive) echo "#999"?>;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosPub2['date']; ?></td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
            <img src='<?php if ($row_DatosPub2['foto'] != "") { ?> ../img/news/<?php echo $row_DatosPub2['foto']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
        </td>
        <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
            <p><?php 
                $texto= $row_DatosPub2['content'];
                if (strlen($texto) > 0) {
                    $texto = substr($texto,0,100).'...';
                    print '<div class="texto_original">'.$texto.'</div>';
            ?></p>
            <?php } ?>
        </td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo publicationsSite($row_DatosPub2['site']); ?></td></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPub2['position']; ?></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPub2['status']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="publications.php?edit=<?php echo $row_DatosPub2['id_publications']; ?>" class="alt_button">Edit info</a>
                    <a href="publications_delete.php?DeleteID=<?php echo $row_DatosPub2['id_publications']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosPub2 = mysqli_fetch_assoc($DatosPub2)); 
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


<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40" style="color: #FFF;">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Date</Title></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Foto</td>
            <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Content</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Site</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Position</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosPub3 > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">    
    <tr height="100" style="background-color:<?php if (status($row_DatosConsulta['id_student']) == Inactive) echo "#999"?>;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosPub3['date']; ?></td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
            <img src='<?php if ($row_DatosPub3['foto'] != "") { ?> ../img/news/<?php echo $row_DatosPub3['foto']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
        </td>
        <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
            <p><?php 
                $texto= $row_DatosPub3['content'];
                if (strlen($texto) > 0) {
                    $texto = substr($texto,0,100).'...';
                    print '<div class="texto_original">'.$texto.'</div>';
            ?></p>
            <?php } ?>
        </td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo publicationsSite($row_DatosPub3['site']); ?></td></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPub3['position']; ?></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPub3['status']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="publications.php?edit=<?php echo $row_DatosPub3['id_publications']; ?>" class="alt_button">Edit info</a>
                    <a href="publications_delete.php?DeleteID=<?php echo $row_DatosPub3['id_publications']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosPub3 = mysqli_fetch_assoc($DatosPub3)); 
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


<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40" style="color: #FFF;">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Date</Title></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Foto</td>
            <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Content</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Site</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Position</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosPub4 > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">    
    <tr height="100" style="background-color:<?php if (status($row_DatosConsulta['id_student']) == Inactive) echo "#999"?>;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosPub4['date']; ?></td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
            <img src='<?php if ($row_DatosPub4['foto'] != "") { ?> ../img/news/<?php echo $row_DatosPub4['foto']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
        </td>
        <td width="34%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
        <?php if($row_DatosPub4['title'] != "") { ?>
            <?php echo $row_DatosPub4['title']; ?>
        <?php } else { ?>
            <p><?php 
                $texto= $row_DatosPub4['content'];
                if (strlen($texto) > 0) {
                    $texto = substr($texto,0,100).'...';
                    print '<div class="texto_original">'.$texto.'</div>';
            ?></p>
            <?php } ?>
        <?php } ?>
        </td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo publicationsSite($row_DatosPub4['site']); ?></td></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPub4['position']; ?></td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPub4['status']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="publications.php?edit=<?php echo $row_DatosPub4['id_publications']; ?>" class="alt_button">Edit info</a>
                    <a href="publications_delete.php?DeleteID=<?php echo $row_DatosPub4['id_publications']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosPub4 = mysqli_fetch_assoc($DatosPub4)); 
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
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
<div onclick="location='publications.php?new=1'" class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>