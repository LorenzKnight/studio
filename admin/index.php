<?php require_once('../connections/conexion.php');?>
<?php
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

function mysqli_result($res, $row, $field=0) { 
    $res->data_seek($row); 
    $datarow = $res->fetch_array(); 
    return $datarow[$field]; 
}

if (isset($_POST['mail'])) {
  $loginUsername=$_POST['mail'];
  //ATENCIÓN USAMOS MD5 para guardar la contraseña.
  $password=md5($_POST['password']);
  $MM_fldUserAuthorization = "rank";
  $MM_redirectLoginSuccess = "dashboard.php";
  $MM_redirectLoginFailed = "error.php?error=1";
  $MM_redirecttoReferrer = false;
  
  	
  $LoginRS__query=sprintf("SELECT id_user, mail, password, rank FROM users WHERE mail=%s AND password=%s AND status=1",
  GetSQLValueString($loginUsername, "text"),
  GetSQLValueString($password, "text")); 
   
  $LoginRS = mysqli_query($con,  $LoginRS__query) or die(mysqli_error($con));
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysqli_result($LoginRS,0,'rank');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	 
    $_SESSION['std_UserId'] = mysqli_result($LoginRS,0,'id_user');
    $_SESSION['std_Mail'] = mysqli_result($LoginRS,0,'mail');
    $_SESSION['std_Nivel'] = mysqli_result($LoginRS,0,'rank');
	//ContabilizarAcceso($_SESSION['vpt_UserId']);
	
	/* DESCOMENTAR SOLO SI SE USA EL CHECK DE RECORDAR CONTRASEÑA, HABRÁ QUE USAR LA FUNCIÓN generar_cookie()
	if ((isset($_POST["CAMPORECUERDA"])) && ($_POST["CAMPORECUERDA"]=="1"))
	generar_cookie($_SESSION['NOMBREWEB_UserId']);
	*/	     

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />

</head>
<body style="background-color:#000;">
    <div class="adm_login">
        <form action="index.php" method="post" name="forminsert" id="forminsert">
            <table width="100%" align="center" cellspacing="0">
                <tr valign="baseline" height="60">
                    <td style="" colspan="6" align="center" valign="middle">
                        <h2 style="margin:0;">Studio</h2>
                        <h4 style="margin:0;">LK-LDS20</h4>
                        <p style="margin:0 0 20px 0;">v1.2</p>
                    </td>      
                </tr>
                <tr valign="baseline" height="60">
                    <td colspan="6" valign="middle" align="center">
                        <input class="textin" type="email" name="mail" id="mail" size="35" placeholder="Enter your E-Mail..." title="Enter a valid email" required/>
                    </td>
                </tr>
                <tr valign="baseline" height="60">
                    <td style="" colspan="6" valign="middle" align="center">
                        <input class="textin" type="password" name="password" id="password" size="35" placeholder="Enter your Password..." required/>
                    </td>
                </tr>
                <tr valign="baseline" height="60">
                    <td style="padding-bottom:10px;" nowrap="nowrap" align="center"><input style="padding: 10px 105px;" type="submit" class="button_in" value="LOGING" /></td>
                </tr>
                <tr valign="baseline" height="40">
                    <td style="font-size: 12px; padding-bottom:10px;" nowrap="nowrap" align="center">
                        Powered by:<br>
                        <a href="http://lorenzknight.com/" target="_blank">www.lorenzknight.com</a>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" />
        </form>
    </div>
</body>
</html>