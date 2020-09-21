<script>
const isElementOrDescendant = function (parent, child) {
    if (parent === child) return true

    var node = child.parentNode;
    while (node != null) {
    if (node == parent) {
        return true;
    }
    node = node.parentNode;
    }
    return false;
}

    //Esto es para cerrar el div si le damos click afuera de este click
const onClick = function (e) {
    const el = document.getElementById('formrequest')
    const clickableAreas = Array.from(document.getElementsByClassName('flying_button'))

    //for severarl div
     clickableAreas.push(...Array.from(document.getElementsByClassName('button_cancel')))
     clickableAreas.push(document.getElementById('formedit'))
    //end several div

    clickableAreas.push(el)

    let isClickOutside = true

    for (let i = 0; i < clickableAreas.length; i++) {
        if (isElementOrDescendant(clickableAreas[i], e.target)) {
            isClickOutside = false
        }
    }

    if (isClickOutside) {
        location = 'collaborators_admin.php'
    }
}

document.addEventListener('click', onClick)
</script>
<style>
    .content_lit {
        width: 175px;
        height: 70px;
        padding: 10px;
        border-radius: 4px;
        overflow: auto;
        background-color: #CCC;
        -webkit-box-shadow: inset 0px 0px 5px 0px rgba(82,81,82,1);
        -moz-box-shadow: inset 0px 0px 5px 0px rgba(82,81,82,1);
        box-shadow: inset 0px 0px 5px 0px rgba(82,81,82,1);
    }
</style>

<?php include("collaborators_admin_form.php")?>
<div class="user_div">
    <table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
        <tr height="40" style="color: #FFF;">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Date</Title></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Foto</td>
            <td width="19%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Title</td>
            <td width="23%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Content</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Position</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosColl > 0) { // Show if recordset not empty ?>
    <?php do { ?>
    <table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">    
        <tr class="line" height="100" style="background-color:<?php if (status($row_DatosConsulta['id_student']) == Inactive) echo "#999"?>;">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosColl['date']; ?></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
                <img src='<?php if ($row_DatosColl['foto'] != "") { ?> ../img/news/<?php echo $row_DatosColl['foto']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
            </td>
            <td width="19%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosColl['title']; ?></td>
            <td width="23%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
                <div class="content_lit">
                    <?php echo $row_DatosColl['content']; ?>
                </div>
            </td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosColl['position']; ?></td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosColl['status']); ?></td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0014") || $_SESSION['std_Nivel'] < 2) : ?>
                <div class="arternative">
                    <button class="artbtn">o o o</button>
                    <div class="arternative-content">
                        <a href="collaborators_admin.php?edit=<?php echo $row_DatosColl['id_collaborators']; ?>" class="alt_button">Edit info</a>
                        <a href="collaborators_admin_delete.php?DeleteID=<?php echo $row_DatosColl['id_collaborators']; ?>" class="alt_button">Delete</a>
                    </div>
                </div>
            <?php endif ?>
            </td>
        </tr>
    </table>
    <?php } while ($row_DatosColl = mysqli_fetch_assoc($DatosColl)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0014") || $_SESSION['std_Nivel'] < 2) : ?>
<div onclick="location='collaborators_admin.php?new=1'" class="flying_button">+</div>
<?php endif ?>