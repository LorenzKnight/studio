<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term ASC");
$DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
$row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosTerm = mysqli_num_rows($DatosTerm);

$TermAct = $row_DatosTerm['status'];
?>
<?php
 $query_DatosConsulta = sprintf("SELECT * FROM inscriptions WHERE term = $TermAct ORDER BY id_insc"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
$query_DatosPackage = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
$row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
$totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
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
  $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, password, personal_number, telephone, adress, post, city, sex, agree, package, via) 
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
                        GetSQLValueString($_POST["via"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "students.php?newcompl=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php
 $method = $_SESSION['std_UserId'];

 $query_DatosInsc = sprintf("SELECT * FROM students WHERE via = $method ORDER BY id_student DESC"); 
 $DatosInsc = mysqli_query($con, $query_DatosInsc) or die(mysqli_error($con));
 $row_DatosInsc = mysqli_fetch_assoc($DatosInsc);
 $totalRows_DatosInsc = mysqli_num_rows($DatosInsc);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formcompl")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO inscriptions(date, year, month, day, time, id_student, term, package, course_1, course_2, course_3, course_4, status, payment) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["id_student"], "int"),                      
                        GetSQLValueString($_POST["term"], "int"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["course_1"], "int"),
                        GetSQLValueString($_POST["course_2"], "int"),
                        GetSQLValueString($_POST["course_3"], "int"),
                        GetSQLValueString($_POST["course_4"], "int"),
                        GetSQLValueString($_POST["status"], "text"),
                        GetSQLValueString($_POST["payment"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "students.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM students WHERE id_student=%s", GetSQLValueString($_GET["editi"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formediti")) {
     
     $updateSQL = sprintf("UPDATE students SET name=%s, surname=%s, email=%s, personal_number=%s, telephone=%s, sex=%s, adress=%s, post=%s, city=%s WHERE id_student=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["surname"], "text"),
                          GetSQLValueString($_POST["email"], "text"),
                          GetSQLValueString($_POST["personal_number"], "text"),
                          GetSQLValueString($_POST["telephone"], "int"),
                          GetSQLValueString($_POST["sex"], "text"),
                          GetSQLValueString($_POST["adress"], "text"),
                          GetSQLValueString($_POST["post"], "int"),
                          GetSQLValueString($_POST["city"], "text"),
                          GetSQLValueString($_POST["id_student"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "students.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<?php
$query_DatosPackage2 = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage2 = mysqli_query($con, $query_DatosPackage2) or die(mysqli_error($con));
$row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2);
$totalRows_DatosPackage2 = mysqli_num_rows($DatosPackage2);
?>
<?php
 $query_DatosCourse_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse_edit = mysqli_query($con, $query_DatosCourse_edit) or die(mysqli_error($con));
$row_DatosCourse_edit = mysqli_fetch_assoc($DatosCourse_edit);
$totalRows_DatosCourse_edit = mysqli_num_rows($DatosCourse_edit);

 $query_DatosCourse2_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse2_edit = mysqli_query($con, $query_DatosCourse2_edit) or die(mysqli_error($con));
$row_DatosCourse2_edit = mysqli_fetch_assoc($DatosCourse2_edit);
$totalRows_DatosCourse2_edit = mysqli_num_rows($DatosCourse2_edit);

$query_DatosCourse3_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse3_edit = mysqli_query($con, $query_DatosCourse3_edit) or die(mysqli_error($con));
$row_DatosCourse3_edit = mysqli_fetch_assoc($DatosCourse3_edit);
$totalRows_DatosCourse3_edit = mysqli_num_rows($DatosCourse3_edit);

$query_DatosCourse4_edit = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course ASC"); 
 $DatosCourse4_edit = mysqli_query($con, $query_DatosCourse4_edit) or die(mysqli_error($con));
$row_DatosCourse4_edit = mysqli_fetch_assoc($DatosCourse4_edit);
$totalRows_DatosCourse4_edit = mysqli_num_rows($DatosCourse4_edit);
?>
<?php
 $query_DatosEditInc = sprintf("SELECT * FROM inscriptions WHERE id_student=%s", GetSQLValueString($_GET["editc"], "int")); 
 $DatosEditInc = mysqli_query($con, $query_DatosEditInc) or die(mysqli_error($con));
 $row_DatosEditInc = mysqli_fetch_assoc($DatosEditInc);
 $totalRows_DatosEditInc = mysqli_num_rows($DatosEditInc);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditc")) {
     
     $updateSQL = sprintf("UPDATE inscriptions SET package=%s, course_1=%s, course_2=%s, course_3=%s, course_4=%s, status=%s WHERE id_student=%s",
                          GetSQLValueString($_POST["package"], "int"),
                          GetSQLValueString($_POST["course_1"], "int"),
                          GetSQLValueString($_POST["course_2"], "int"),
                          GetSQLValueString($_POST["course_3"], "int"),
                          GetSQLValueString($_POST["course_4"], "int"),
                          GetSQLValueString($_POST["status"], "text"),
                          GetSQLValueString($_POST["id_student"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "students.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END SEE/////////////////////////////////////////////////////////-->
<?php
 $query_DatosSee = sprintf("SELECT * FROM inscriptions WHERE id_student=%s", GetSQLValueString($_GET["see"], "int")); 
 $DatosSee = mysqli_query($con, $query_DatosSee) or die(mysqli_error($con));
 $row_DatosSee = mysqli_fetch_assoc($DatosSee);
 $totalRows_DatosSee = mysqli_num_rows($DatosSee);
?>
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

<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="9%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Surname</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Telefone</td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">E-Mail</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Personal no.</td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">sex</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Package</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">registration date</td>
        <td width="4%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>

    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="9%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo ObtenerNombreStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;"><?php echo ObtenerApellidoStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo ObtenerTelefonoStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;"><?php echo ObtenerEmailStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo ObtenerNumeroPStudent($row_DatosConsulta['id_student']); ?></td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo sex($row_DatosConsulta['id_student']); ?></td></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo ObtenerNombrePacket($row_DatosConsulta['package']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['date']; ?></td>
        <td width="4%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['status']; ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <div class="arternative">
            <button class="artbtn">o o o</button>
            <div class="arternative-content">
                <a href="students.php?see=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">See more</a>
                <a href="students.php?editi=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">Edit info</a>
                <a href="students.php?editc=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">Edit course</a>
                <a href="student_delete.php?id=<?php echo $row_DatosConsulta['id_student']; ?>" class="alt_button">Delete</a>
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

<?php if($_GET["new"]):?>
<form action="students.php" method="post" name="formrequest" id="formrequest">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                Packet:
                <select class="textf" style="font-size: 14px; color: #999;" name="package" id="package" onchange="showDiv(this)" required>
                <?php
                if ($totalRows_DatosPackage > 0) {
                do { ?>
                <option value="<?php echo $row_DatosPackage["id_package"]; ?>"><?php echo $row_DatosPackage["package_name"]; ?></option>
                <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
                }
                ?>
                </select>
              </td>
          </tr>
          <tr height="60">
              <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
              <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
          </tr>
          <tr height="60">
              <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
              <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
          </tr>
          <tr height="60">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Kön: 
                  <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                  <option value="None" >None</option>
                  <option value="Man">Man</option>
                  <option value="Kvinna">Kvinna</option>
                  </select>
              </td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
          </tr>
          <tr height="60">
              <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
              <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
          </tr>
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäla mig" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
          <input type="hidden" name="password" id="password" value="newstudent246"/>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
      </table>
  </form>

<?php endif ?>

<?php if($_GET["newcompl"]):?>
<form action="students.php" method="post" name="formcompl" id="formcompl">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                Packet: <?php echo $row_DatosInsc["package"]; ?>
              </td>
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
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosInsc["package"], 2);?>;" id="courses2">
                          <p>Klass 2</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse2 > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosInsc["package"], 3);?>;" id="courses3">
                          <p>Klass 3</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse3 > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosInsc["package"], 4);?>;" id="courses4">
                          <p>Klass 4</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse4 > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
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
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                    <input type="submit" class="button" value="Resgistrera" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="payment" id="payment" value="1"/>
          <input type="hidden" name="term" id="term" value="<?php echo $row_DatosTerm["id_term"]; ?>"/>
          <input type="hidden" name="package" id="package" value="<?php echo $row_DatosInsc["package"]; ?>"/>
          <input type="hidden" name="id_student" id="id_student" value="<?php echo $row_DatosInsc["id_student"]; ?>"/>
          <input type="hidden" name="status" id="status" value="Activ"/>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formcompl" />
      </table>
  </form>

<?php endif ?>

    <a href="students.php?new=1"><div class="flying_button">+</div></a>

<script>
    function showDiv(select){
        if(select.value>=2){
            document.getElementById('courses2').style.display = "block";
        } else{
            document.getElementById('courses2').style.display = "none";
        }

        if(select.value>=3){
            document.getElementById('courses3').style.display = "block";
        } else{
            document.getElementById('courses3').style.display = "none";
        }

        if(select.value>=4){
            document.getElementById('courses4').style.display = "block";
        } else{
            document.getElementById('courses4').style.display = "none";
        }
    } 
</script>


    <?php if($_GET["see"]):?>
<form id="formart">
    <table class="popwindows" style="width: 500px; margin: 150px 35%;" border="0" cellspacing="0" cellpadding="0">
        <tr height="60">
            <td colspan="2" valign="middle" align="center">
                <?php echo ObtenerNombreStudent($_GET['see']); ?> <?php echo ObtenerApellidoStudent($_GET['see']); ?>
            </td>
        </tr>
        <tr height="40">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
                Termin:
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo ObtenerNombreTermin($row_DatosSee['term']);?>
            </td>
        </tr>
        <tr height="40">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
                Registration date:
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo $row_DatosSee['day']; ?> <?php echo month($row_DatosSee['month']); ?> <?php echo $row_DatosSee['year']; ?>
            </td>
        </tr>
        <tr height="40">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
                Packet:
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo ObtenerNombrePacket($row_DatosSee['package']); ?>
            </td>
        </tr>
        <tr height="20">
        </tr>
        <tr height="25">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo ObtenerNombreCurso($row_DatosSee['course_1']);?>
            </td>
        </tr>
        <tr height="25">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo ObtenerNombreCurso($row_DatosSee['course_2']);?>
            </td>
        </tr>
        <tr height="25">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo ObtenerNombreCurso($row_DatosSee['course_3']);?>
            </td>
        </tr>
        <tr height="25">
            <td width="50%" valign="middle" align="right" style="padding: 0 10px;">
            </td>
            <td width="50%" valign="middle" align="left" style="padding: 0 10px;">
                <?php echo ObtenerNombreCurso($row_DatosSee['course_4']);?>
            </td>
        </tr>
        <tr height="30">
            <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
            <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Stänga" /></a>
            </td>
        </tr>
        <tr height="30">
        </tr>
    </table>
</form>
    <?php endif ?>

    <?php if($_GET["editi"]):?>
<form action="students.php" method="post" name="formediti" id="formediti">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="30">
            <td colspan="2" valign="middle" align="center">
                <?php echo $row_DatosEdit['id_student'];?>
            </td>
          </tr>
          <tr height="60">
              <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
              <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['email'];?>" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
          </tr>
          <tr height="60">
              <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['personal_number'];?>" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
              <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telephone'];?>" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
          </tr>
          <tr height="60">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Kön: 
                  <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                  <option value="None" >None</option>
                  <option value="Man" <?php if ($row_DatosEdit['sex'] == Man) echo "selected"; ?>>Man</option>
                  <option value="Kvinna" <?php if ($row_DatosEdit['sex'] == Kvinna) echo "selected"; ?>>Kvinna</option>
                  </select>
              </td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['adress'];?>" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
          </tr>
          <tr height="60">
              <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['post'];?>" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
              <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['city'];?>" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
          </tr>
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
        </table>
          <input type="hidden" name="id_student" id="id_student" value="<?php echo $row_DatosEdit['id_student'];?>"/>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formediti" />
  </form>

<?php endif ?>

<?php if($_GET["editc"]):?>
<form action="students.php" method="post" name="formeditc" id="formeditc">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="60">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                Packet:
                <select class="textf" style="font-size: 14px; color: #999;" name="package" id="package" onchange="showDiv(this)" required>
                <?php
                if ($totalRows_DatosPackage2 > 0) {
                do { ?>
                <option value="<?php echo $row_DatosPackage2["id_package"]; ?>" <?php if ($row_DatosEditInc['package'] == $row_DatosPackage2['id_package']) echo "selected"; ?>><?php echo $row_DatosPackage2["package_name"]; ?></option>
                <?php } while ($row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2));
                }
                ?>
                </select>
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <tr>
              <td colspan="2" valign="middle" align="center">
                  <div class="courses">
                      <div class="class1" style="flex: 1;">
                          <p>Klass 1</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_1" value="<?php echo $row_DatosCourse_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_1'] == $row_DatosCourse_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse_edit = mysqli_fetch_assoc($DatosCourse_edit));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses2">
                          <p>Klass 2</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse2_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_2" value="<?php echo $row_DatosCourse2_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_2'] == $row_DatosCourse2_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse2_edit = mysqli_fetch_assoc($DatosCourse2_edit));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses3">
                          <p>Klass 3</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse3_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_3" value="<?php echo $row_DatosCourse3_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_3'] == $row_DatosCourse3_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse3_edit = mysqli_fetch_assoc($DatosCourse3_edit));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses4">
                          <p>Klass 4</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse4_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_4" value="<?php echo $row_DatosCourse4_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_4'] == $row_DatosCourse4_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse4_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse4_edit = mysqli_fetch_assoc($DatosCourse4_edit));
                          }
                          ?>
                      </div>
                  </div>
              </td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                Status:
                <select class="textf" style="font-size: 14px; color: #999;" name="status" id="status">
                <option value="Activ" <?php if ($row_DatosConsulta['status'] == Activ) echo "selected"; ?>>Activ</option>
                <option value="Inactiv" <?php if ($row_DatosConsulta['status'] == Inactiv) echo "selected"; ?>>Inactiv</option>
                </select>
              </td>
          </tr>
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera !" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
          <input type="hidden" name="id_student" id="id_student" value="<?php echo $_GET["editc"];?>"/>
      </table>
  </form>

<?php endif ?>