<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$password=md5($_POST["password"]);

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formprofil")) {
     
     $updateSQL = sprintf("UPDATE users SET name=%s, surname=%s, mail=%s, telefon=%s, password=%s WHERE id_user=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["surname"], "text"),
                          GetSQLValueString($_POST["mail"], "text"),
                          GetSQLValueString($_POST["telefon"], "text"),
                          GetSQLValueString($password, "text"),
                          GetSQLValueString($_POST["id_user"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = $_SERVER['HTTP_REFERER'];
// $updateGoTo = "users.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<script>
    function mostrar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="block";
    }
    function ocurtar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="none";
    }
</script>
<script>
    function asegurarprofil()
    {
        rc = confirm("Är du säkert på att du vill göra den här ändring i din profil?");
        return rc;
    }
</script>
<script>
    function asegurarlogout()
    {
        rc = confirm("Är du säkert på att du vill logga ut?");
        return rc;
    }
</script>
<div class="<?php echo headAppear(UserAppearance($_SESSION['std_UserId']));?>">
    <?php include("inc/menu.php"); ?>
    <div class="config_m">
        <ul>
            <li><a href="#">
            <?php
            if ((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
            {
                echo ObtenerNombreUsuario($_SESSION['std_UserId']);
                echo " ". ObtenerApellidoUsuario($_SESSION['std_UserId']);
                
                echo " - ". rank($_SESSION['std_Nivel']);
                //echo " ". $_SESSION['std_Nivel'];
            }
            else
            { ?>
                No User...
            <?php } ?><div class="flecha_abajo" style="float: right;"></div></a>
                <div class="dropdown-config-content">
                    <ul>
                        <?php if ((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != "")) { ?>
                        <li><a href="#" onclick="mostrar()">My Profil</a></li>
                        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0017") || $_SESSION['std_Nivel'] < 1) : ?>
                        <li><a href="users.php">Users admin</a></li>
                        <?php endif ?>
                        <li><a style="border-top: 1px solid #CCC;" href="inc/logout.php" onclick="javascript:return asegurarlogout ();">Log out</a></li>
                        <?php } 
                        else
                        { ?>
                        <li><a href="inc/index.php" >Log in</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
            <!-- <li><a href="">Config</a></li> -->
        </ul>
    </div>
<!-- ////////////////////////////////////////////////////// Formulario de perfil de usuario ////////////////////////////////////////////////////// -->
    <div class="subform_cont_myprofil" id="popup">
        <form method="post" name="formprofil" id="formprofil">
            <table class="formulario_user_myprofil" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>My Profil</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding:0 10px 0 0;"><input class="textf" type="text" value="<?php echo ObtenerNombreUsuario($_SESSION['std_UserId']);?>" placeholder="Namn..." name="name" id="name" size="22" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding:0 0 0 10px;"><input class="textf" type="text" value="<?php echo ObtenerApellidoUsuario($_SESSION['std_UserId']);?>" placeholder="Efternamn..." name="surname" id="surname" size="22" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo ObtenerTelefonoUsuario($_SESSION['std_UserId']);?>" placeholder="Telefon..." name="telefon" id="telefon" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo ObtenerMailUsuario($_SESSION['std_UserId']);?>" placeholder="Majl..." name="mail" id="mail" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center">
                        <p style="font-size:10px; color:F00;">Change your password here</p>
                        <input class="textf" type="password" value="<?php echo ObtenerPasswordUsuario($_SESSION['std_UserId']);?>" placeholder="Lösenord..." name="password" id="password" size="52"/>
                    </td>
                </tr>
                <tr height="20">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <input class="button_a" style="width: 170px; text-align: center;" value="avbryt" onclick="ocurtar()"/> <input type="submit" class="button" value="Redigera" onclick="javascript:return asegurarprofil ();"/>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['std_UserId']; ?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formprofil" />
            </table>
        </form>
    </div>
<!-- ////////////////////////////////////////////////////// Fin del Formulario de perfil de usuario ////////////////////////////////////////////////////// -->
</div>