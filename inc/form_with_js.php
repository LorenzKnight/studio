<?php
$query_DatosPackage = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
$row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
$totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
?>
<?php
 $query_DatosPackage2 = sprintf("SELECT * FROM package WHERE id_package=%s", GetSQLValueString($_GET["id"], "int")); 
 $DatosPackage2 = mysqli_query($con, $query_DatosPackage2) or die(mysqli_error($con));
$row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2);
$totalRows_DatosPackage2 = mysqli_num_rows($DatosPackage2);
?>
<?php
 $query_DatosPackage3 = sprintf("SELECT * FROM package WHERE id_package=%s", GetSQLValueString($_GET["idCompl"], "int")); 
 $DatosPackage3 = mysqli_query($con, $query_DatosPackage3) or die(mysqli_error($con));
$row_DatosPackage3 = mysqli_fetch_assoc($DatosPackage3);
$totalRows_DatosPackage3 = mysqli_num_rows($DatosPackage3);
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
  $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, personal_number, telephone, sex, package, course_1, course_2, course_3, course_4, payment, status) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["surname"], "text"),
                        GetSQLValueString($_POST["email"], "text"),
                        GetSQLValueString($_POST["personal_number"], "text"),
                        GetSQLValueString($_POST["telephone"], "int"),
                        GetSQLValueString($_POST["sex"], "int"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["course_1"], "int"),
                        GetSQLValueString($_POST["course_2"], "int"),
                        GetSQLValueString($_POST["course_3"], "int"),
                        GetSQLValueString($_POST["course_4"], "int"),
                        GetSQLValueString($_POST["payment"], "int"),
                        GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "inc/comp_reg.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s",
GetSQLValueString($_SESSION['ydl_UserId'], "text"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
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

const onClick = function (e) {
    const el = document.getElementById('formrequest')
    const clickableAreas = Array.from(document.getElementsByClassName('paquetes'))
    clickableAreas.push(el)

    let isClickOutside = true

    for (let i = 0; i < clickableAreas.length; i++) {
        if (isElementOrDescendant(clickableAreas[i], e.target)) {
            isClickOutside = false
        }
    }

    if (isClickOutside) {
        location = 'price_registration.php'
    }
}

document.addEventListener('click', onClick)
</script>

<div class="checkin">
    <div class="register_info">
        <h3 style="text-transform:uppercase;">KURSER OCH SOCIALDANS</h3>
        <?php echo $_SESSION['ydl_UserId'];?>
        <h3>Kurser & paket</h3>
        <p>Varje termin är uppdelad i två kurs-omgångar och varje kurs pågår i 9 veckor.</p>
        <br>
        <p>Innan kursstart anmäler du dig till de kurser du vill gå. 
        I de olika paketen ingår även så kallade practica, tillfällen då du kan öva och repetera steg tillsammans med andra kursdeltagare. 
        I vårt brons-paket ingår den practica som äger rum samma dag som de kurs du anmält dig till. I de övriga paketen ingår samtliga practicas.</p>
        
        <h3>OBS!</h3>
        <p>Din anmälan gäller bara den specifika kurs du anmält dig till, man kan ej byta till annan kurs efter köp.</p>
    </div>
    
    <div class="to_register">
            <?php
            if ($totalRows_DatosPackage > 0) {
            do { ?> 
        <div class="paquetes" onclick="location='price_registration.php?id=<?php echo $row_DatosPackage['id_package']; ?>'">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="70">
                        <td width="50%" valign="middle" align="center" style="padding: 0 10px;"><?php echo $row_DatosPackage['package_name'];?></td>
                        <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><?php echo $row_DatosPackage['description'];?></td>
                    </tr>
                </table>
        </div>
            <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
            }
            ?>
    </div>


    <?php if($_GET["id"]):?>
        <form action="price_registration.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">Du val <?php echo $row_DatosPackage2["package_name"]; ?>!</td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Kön:
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="0">None</option>
                        <option value="1">Man</option>
                        <option value="2">Kvinna</option>
                        </select>
                    </td>
                </tr>
                    <style>
                        .class1_content{
                            font-size: 14px;
                        }
                    </style>
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <?php if($_GET["id"] < 5):?>
                        <div class="courses">
                            <div class="class1" style="flex: 1;">
                                <p>Klass 1</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr height="40">
                                        <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosPackage2["id_package"], 2);?>;">
                                <p>Klass 2</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse2 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="40">
                                        <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosPackage2["id_package"], 3);?>;">
                                <p>Klass 3</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse3 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="40">
                                        <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosPackage2["id_package"], 4);?>;">
                                <p>Klass 4</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse4 > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="40">
                                        <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse4['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4));
                                }
                                ?>
                            </div>
                        </div>
                        <?php endif ?>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="price_registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäla mig" />
                    </td>
                </tr>
                <tr height="20">
                </tr>
                <input type="hidden" name="package" id="package" value="<?php echo $_GET['id']; ?>"/>
                <input type="hidden" name="payment" id="payment" value="1"/>
                <input type="hidden" name="status" id="status" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
    <?php endif ?>



    <?php if($_GET["idCompl"]):?>

    <form action="price_registration.php" method="post" name="formrequest" id="formrequest">
        <table style="backgroiund: red;" class="formulario" border="0" cellspacing="0" cellpadding="0">
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">Du val <?php echo $row_DatosPackage3["package_name"]; ?>!</td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Kön:
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                    <option value="0">None</option>
                    <option value="1">Man</option>
                    <option value="2">Kvinna</option>
                    </select>
                </td>
            </tr>
                <style>
                    .class1_content{
                        font-size: 14px;
                    }
                </style>
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
                                    <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                            }
                            ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosPackage2["id_package"], 2);?>;">
                            <p>Klass 2</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse2 > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr height="40">
                                    <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                            }
                            ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosPackage2["id_package"], 3);?>;">
                            <p>Klass 3</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse3 > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr height="40">
                                    <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                    <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3['name'];?></td>
                                <tr>
                            </table>
                            <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                            }
                            ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosPackage2["id_package"], 4);?>;">
                            <p>Klass 4</p>
                            <hr>
                            <?php
                            if ($totalRows_DatosCourse4 > 0) {
                            do { ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr height="40">
                                    <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
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
            <input type="hidden" name="package" id="package" value="<?php echo $_GET['id']; ?>"/>
            <input type="hidden" name="payment" id="payment" value="1"/>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>

    <?php endif ?>
</div>