<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
 $query_DatosConsulta = sprintf("SELECT * FROM users ORDER BY id_user"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "forminsert")) {

  $insertSQL = sprintf("INSERT INTO users(name, surname, mail, telefon, password, rank, status) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                            GetSQLValueString($_POST["name"], "text"),
                            GetSQLValueString($_POST["surname"], "text"),
                            GetSQLValueString($_POST["mail"], "text"),
                            GetSQLValueString($_POST["telefon"], "text"),
                            GetSQLValueString($_POST["password"], "text"),
                            GetSQLValueString($_POST["rank"], "int"),
                            GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));


  $insertGoTo = "users.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END EDIT/////////////////////////////////////////////////////////-->
<?php
 $query_DatosEdit = sprintf("SELECT * FROM users WHERE id_user=%s", GetSQLValueString($_GET["edit"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formedit")) {
     
     $updateSQL = sprintf("UPDATE users SET name=%s, surname=%s, mail=%s, telefon=%s, rank=%s, status=%s WHERE id_user=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["surname"], "text"),
                          GetSQLValueString($_POST["mail"], "text"),
                          GetSQLValueString($_POST["telefon"], "text"),
                          GetSQLValueString($_POST["rank"], "int"),
                          GetSQLValueString($_POST["status"], "int"),
                          GetSQLValueString($_POST["id_user"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "users.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
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
    const el = document.getElementById('forminsert')
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
        location = 'users.php'
    }
}

document.addEventListener('click', onClick)
</script>
<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Surname</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">E-Mail</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Telefone</td>
        <td width="28%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;"></td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Level</td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>
    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['name']; ?></td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"> <?php echo $row_DatosConsulta['surname']; ?></td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['mail']; ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo $row_DatosConsulta['telefon']; ?></td>
        <td width="28%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"></td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo rank($row_DatosConsulta['rank']); ?></td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo status($row_DatosConsulta['status']); ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
        <div class="arternative">
            <button class="artbtn">o o o</button>
            <div class="arternative-content">
                <a href="users.php?edit=<?php echo $row_DatosConsulta['id_user']; ?>" class="alt_button">Edit user</a>
                <a href="users_delete.php?regdel=<?php echo $row_DatosConsulta['id_user']; ?>" class="alt_button">Delete</a>
            </div>
        </div>
        </td>
    </tr>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</table>
</div>

<a href="users.php?new=1"><div class="flying_button">+</div></a>

<?php if($_GET["new"]):?>
    <form action="users.php" method="post" name="forminsert" id="forminsert">
        <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
            <tr height="60">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    <h2>Ny Användare</h2>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Namn..." name="name" id="name" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Efternamn..." name="surname" id="surname" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Majl..." name="mail" id="mail" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Telefon..." name="telefon" id="telefon" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center" Style="padding: 0 10px; color: #999; font-size: 14px;">
                    Level: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="rank" id="rank" required>
                    <option value="1">Admin</option>
                    <option value="2">Editor</option>
                    <option value="3">Contributor</option>
                    </select>
                </td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="users.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" />
        </table>
    </form>
    <?php endif ?>

    <?php if($_GET["edit"]):?>
    <form action="users.php" method="post" name="formedit" id="formedit">
        <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
            <tr height="60">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    <h2>Redigera Användare</h2>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Namn..." name="name" id="name" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Efternamn..." name="surname" id="surname" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['mail'];?>" placeholder="Majl..." name="mail" id="mail" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telefon'];?>" placeholder="Telefon..." name="telefon" id="telefon" size="52" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Level: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="rank" id="rank" required>
                    <option value="1" <?php if ($row_DatosEdit['rank'] == 1) echo "selected"; ?>>Admin</option>
                    <option value="2" <?php if ($row_DatosEdit['rank'] == 2) echo "selected"; ?>>Editor</option>
                    <option value="3" <?php if ($row_DatosEdit['rank'] == 3) echo "selected"; ?>>Contributor</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    status: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                    <option value="1" <?php if ($row_DatosEdit['status'] == 1) echo "selected"; ?>>Activ</option>
                    <option value="2" <?php if ($row_DatosEdit['status'] == 2) echo "selected"; ?>>Inactiv</option>
                    </select>
                </td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="users.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="id_user" id="id_user" value="<?php echo $row_DatosEdit["id_user"]; ?>"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
        </table>
    </form>
    <?php endif ?>