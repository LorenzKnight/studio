<?php require_once('connections/conexion.php');?>
<?php
 $query_DatosPackage2 = sprintf("SELECT * FROM package WHERE id_package=%s", GetSQLValueString($_GET["id"], "int")); 
 $DatosPackage2 = mysqli_query($con, $query_DatosPackage2) or die(mysqli_error($con));
$row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2);
$totalRows_DatosPackage2 = mysqli_num_rows($DatosPackage2);
?>
<?php
 $query_DatosCourse = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse = mysqli_query($con, $query_DatosCourse) or die(mysqli_error($con));
$row_DatosCourse = mysqli_fetch_assoc($DatosCourse);
$totalRows_DatosCourse = mysqli_num_rows($DatosCourse);

 $query_DatosCourse2 = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse2 = mysqli_query($con, $query_DatosCourse2) or die(mysqli_error($con));
$row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2);
$totalRows_DatosCourse2 = mysqli_num_rows($DatosCourse2);

$query_DatosCourse3 = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse3 = mysqli_query($con, $query_DatosCourse3) or die(mysqli_error($con));
$row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3);
$totalRows_DatosCourse3 = mysqli_num_rows($DatosCourse3);

$query_DatosCourse4 = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse4 = mysqli_query($con, $query_DatosCourse4) or die(mysqli_error($con));
$row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4);
$totalRows_DatosCourse4 = mysqli_num_rows($DatosCourse4);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, password, personal_number, telephone, adress, post, city, sex, agree, package, status) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["surname"], "text"),
                        GetSQLValueString($_POST["email"], "text"),
                        GetSQLValueString($_POST["password"], "text"),
                        GetSQLValueString($_POST["personal_number"], "text"),
                        GetSQLValueString($_POST["telephone"], "int"),
                        GetSQLValueString($_POST["adress"], "text"),
                        GetSQLValueString($_POST["post"], "int"),
                        GetSQLValueString($_POST["city"], "text"),
                        GetSQLValueString($_POST["sex"], "text"),
                        GetSQLValueString($_POST["agree"], "text"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["status"], "text"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "registration.php?idConf=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php
$query_DatosReg = sprintf("SELECT * FROM students ORDER BY id_student DESC");
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
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

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  //ATENCIÓN USAMOS MD5 para guardar la contraseña.
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "rank";
  $MM_redirectLoginSuccess = "registration.php?idCompl=1";
  $MM_redirectLoginFailed = "error.php?error=3";
  $MM_redirecttoReferrer = false;
  
  	
  $LoginRS__query=sprintf("SELECT id_student, email, password, rank FROM students WHERE email=%s AND password=%s AND status=1",
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
    $_SESSION['ydl_UserId'] = mysqli_result($LoginRS,0,'id_student');
    $_SESSION['ydl_Mail'] = mysqli_result($LoginRS,0,'email');
    $_SESSION['ydl_Nivel'] = mysqli_result($LoginRS,0,'rank');
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
<?php
$query_DatosTerm = sprintf("SELECT * FROM term ORDER BY id_term DESC");
$DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
$row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosTerm = mysqli_num_rows($DatosTerm);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequeste")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO inscriptions(date, year, month, day, time, id_student, term, package, course_1, course_2, course_3, course_4, payment) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["id_student"], "int"),                      
                        GetSQLValueString($_POST["term"], "int"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["course_1"], "int"),
                        GetSQLValueString($_POST["course_2"], "int"),
                        GetSQLValueString($_POST["course_3"], "int"),
                        GetSQLValueString($_POST["course_4"], "int"),
                        GetSQLValueString($_POST["payment"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "payment.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Yandali Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<?php $menuactive= 2;?>
</head>
<body>
    <?php include("inc/head.php")?>
    <div class="space">

    <?php if($_GET["id"]):?>
    <form action="registration.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario_solid" border="0" cellspacing="0" cellpadding="0">
            <tr height="80">
                <td colspan="6" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">Du val <?php echo $row_DatosPackage2["package_name"]; ?>!</td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="6" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
            </tr>
            <tr height="60">
                <td width="33.33%" valign="middle" align="center" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="21" required/></td>
                <td width="33.33%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Kön:
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                    <option value="None">None</option>
                    <option value="Man">Man</option>
                    <option value="Kvinna">Kvinna</option>
                    </select>
                </td>
                <td width="33.33%" valign="middle" align="center" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="21" required/></td>
            </tr>
            <tr height="60">
                <td colspan="6" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="70" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="6" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Läs på Vilkoren <a href="">här</a><br>
                    <input class="class1_content" type="checkbox" name="agree" value="yes" required> Jag acepterar vilkoren 
                </td>
            </tr>
            <tr height="80">
                <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="price_registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Next" />
                </td>
            </tr>
            <tr height="20">
            </tr>
            <input type="hidden" name="package" id="package" value="<?php echo $_GET['id']; ?>"/>
            <input type="hidden" name="password" id="password" value="newstudent246"/>
            <input type="hidden" name="status" id="status" value="Activ"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>

    <?php endif ?>

    <?php if($_GET["idConf"]):?>

    <div class="formulario_solid" style="padding: 20px; text-align: center;">
    Yandali kommer att skicka via mail kvitto på din anmällning!<br>
    bekäfta du att <?php echo $row_DatosReg['email'];?> är ditt mail?<br><br>
    <form action="registration.php" method="post" name="forminsert" id="forminsert">
        <!-- <input class="textin" type="email" name="email" id="email" size="43" placeholder="Enter your E-Mail..." title="Enter a valid email" required/><br>
        <input class="textin" type="password" name="password" id="password" size="43" placeholder="Enter your Password..." required/><br> -->

        <input type="hidden" name="email" id="email" value="<?php echo $row_DatosReg['email'];?>"/>
        <input type="hidden" name="password" id="password" value="<?php echo $row_DatosReg['password'];?>"/>
        <input style="width: 180px; padding: 21px 0; text-align: center;" type="submit" class="button" value="Ja"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a>
        <input type="hidden" name="status" id="status" value="1"/>
        <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" />
        <!--<a href="logout.php">Log out</a>-->
    </form>
    </div>

    <?php endif ?>

    <?php if($_GET["idCompl"]):?>

    <form action="registration.php" method="post" name="formrequeste" id="formrequeste">
        <table style="backgroiund: red;" class="formulario_solid" border="0" cellspacing="0" cellpadding="0">
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                    <?php echo ObtenerNombrePacket($row_DatosReg["package"]); ?>!<br>
                    <?php echo $_SESSION['ydl_UserId'];?>
                </td>
            </tr>
            <tr height="20">
            </tr> 
            <tr>
                <td colspan="2" valign="middle" align="center">
                    <div class="courses">
                        <div class="class1" style="flex: 1;">
                            <p>Klass 1</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                <tr height="40">
                                    <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                            }
                            ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 2);?>;">
                            <p>Klass 2</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse2 > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr height="40">
                                    <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                            }
                            ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 3);?>;">
                            <p>Klass 3</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse3 > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr height="40">
                                    <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                            }
                            ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosReg["package"], 4);?>;">
                            <p>Klass 4</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse4 > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr height="40">
                                    <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse4['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4));
                            }
                            ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                   Pay method:<br>
                   Paypal
                </td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="price_registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäla mig" />
                </td>
            </tr>
            <tr height="20">
            </tr>
            <input type="hidden" name="term" id="term" value="<?php echo $row_DatosTerm["id_term"]; ?>"/>
            <input type="hidden" name="package" id="package" value="<?php echo $row_DatosReg["package"]; ?>"/>
            <input type="hidden" name="id_student" id="id_student" value="<?php echo $_SESSION['ydl_UserId'];?>"/>
            <input type="hidden" name="payment" id="payment" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequeste" />
        </table>
    </form>

    <?php endif ?>
    </div>
    <?php include("inc/foot.php")?>
</body>
</html>