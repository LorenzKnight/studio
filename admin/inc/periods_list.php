<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosPeriod = sprintf("SELECT * FROM term ORDER BY id_term ASC");
$DatosPeriod = mysqli_query($con, $query_DatosPeriod) or die(mysqli_error($con));
$row_DatosPeriod = mysqli_fetch_assoc($DatosPeriod);
$totalRows_DatosPeriod = mysqli_num_rows($DatosPeriod);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, personal_number, telephone, sex, package, status) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["surname"], "text"),
                        GetSQLValueString($_POST["email"], "text"),
                        GetSQLValueString($_POST["personal_number"], "text"),
                        GetSQLValueString($_POST["telephone"], "int"),
                        GetSQLValueString($_POST["sex"], "int"),
                        GetSQLValueString($_POST["package"], "int"),
                        GetSQLValueString($_POST["status"], "int"));

  
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
 $query_DatosEdit = sprintf("SELECT * FROM students WHERE id_student=%s", GetSQLValueString($_GET["id"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
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
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formedit")) {
     //if (comprobaridunico($_POST["given_id"]))
    //{
  $updateSQL = sprintf("UPDATE students SET name=%s, surname=%s, email=%s, personal_number=%s, telephone=%s, sex=%s, package=%s, course_1=%s, course_2=%s, course_3=%s, course_4=%s, payment=%s, status=%s WHERE id_student=%s",
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
                       GetSQLValueString($_POST["status"], "int"),
					   GetSQLValueString($_POST["id_student"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "students.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
     //}
     //else
     //{
     // EL ID NO ES UNICO
     //$insertGoTo ="error.php";
     //header(sprintf("Location: %s", $insertGoTo));
     //}
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END DELETE/////////////////////////////////////////////////////////-->
<?php
// $query_Delete = sprintf("DELETE FROM students WHERE id_student=%s",
//                        GetSQLValueString($_GET["DeleteID"], "int"));
// $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

//   $insertGoTo = "students.php";
//   header(sprintf("Location: %s", $insertGoTo));
//   mysqli_free_result($Result1);
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
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
        location = 'periods.php'
    }
}

document.addEventListener('click', onClick)

</script>

<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Start Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">End Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>
    <?php if ($row_DatosPeriod > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosPeriod['term_name']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['start_year']; ?> - <?php echo month($row_DatosPeriod['start_month']); ?> - <?php echo $row_DatosPeriod['start_day']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPeriod['stop_year']; ?> - <?php echo month($row_DatosPeriod['stop_month']); ?> - <?php echo $row_DatosPeriod['stop_day']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo status($row_DatosPeriod['status']); ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <div class="arternative">
                <button class="artbtn">o o o</button>
            </div>
        </td>
    </tr>
    <?php } while ($row_DatosPeriod = mysqli_fetch_assoc($DatosPeriod)); 
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
                  <option value="0" >None</option>
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
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses1">
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
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses2">
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
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses3">
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
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäla mig" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="payment" id="payment" value="1"/>
          <input type="hidden" name="status" id="status" value="1"/>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
      </table>
  </form>

<?php endif ?>

    <div onclick="location='students.php?new=1'" class="flying_button">+</div>

<script>
    function showDiv(select){
        if(select.value>=2){
            document.getElementById('courses1').style.display = "block";
        } else{
            document.getElementById('courses1').style.display = "none";
        }

        if(select.value>=3){
            document.getElementById('courses2').style.display = "block";
        } else{
            document.getElementById('courses2').style.display = "none";
        }

        if(select.value>=4){
            document.getElementById('courses3').style.display = "block";
        } else{
            document.getElementById('courses3').style.display = "none";
        }
    } 
</script>

    <?php if($_GET["id"]):?>
<form action="students.php" method="post" name="formredit" id="formedit">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="60">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                Packet:
                <select class="textf" style="font-size: 14px; color: #999;" name="package" id="package" onchange="showDiv(this)" required>
                <?php
                if ($totalRows_DatosPackage2 > 0) {
                do { ?>
                <option value="<?php echo $row_DatosPackage2["id_package"]; ?>" <?php if ($row_DatosEdit['package'] == $row_DatosPackage2['id_package']) echo "selected"; ?>><?php echo $row_DatosPackage2["package_name"]; ?></option>
                <?php } while ($row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2));
                }
                ?>
                </select>
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
              <td width="50%" valign="middle" align="right" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Kön:
                  <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                  <option value="0" <?php if ($row_DatosEdit["sex"]=="0") echo "selected"; ?>>None</option>
                  <option value="1" <?php if ($row_DatosEdit["sex"]=="1") echo "selected"; ?>>Man</option>
                  <option value="2" <?php if ($row_DatosEdit["sex"]=="2") echo "selected"; ?>>Kvinna</option>
                  </select>
              </td>
              <td width="50%" valign="middle" align="left" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Status:
                  <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                  <option value="1" <?php if ($row_DatosEdit["status"]=="1") echo "selected"; ?>>Aktiv</option>
                  <option value="0" <?php if ($row_DatosEdit["status"]=="0") echo "selected"; ?>>Inaktiv</option>
                  </select>
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
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_1" value="<?php echo $row_DatosCourse_edit['id_course'];?>" <?php if ($row_DatosEdit['course_1'] == $row_DatosCourse_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse_edit = mysqli_fetch_assoc($DatosCourse_edit));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses1">
                          <p>Klass 2</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse2_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_2" value="<?php echo $row_DatosCourse2_edit['id_course'];?>" <?php if ($row_DatosEdit['course_2'] == $row_DatosCourse2_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse2_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse2_edit = mysqli_fetch_assoc($DatosCourse2_edit));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses2">
                          <p>Klass 3</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse3_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_3" value="<?php echo $row_DatosCourse3_edit['id_course'];?>" <?php if ($row_DatosEdit['course_3'] == $row_DatosCourse3_edit['id_course']) echo "checked"; ?>></td>
                                  <td width="80%" align="left" style ="font-size: 14px;"><?php echo $row_DatosCourse3_edit['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse3_edit = mysqli_fetch_assoc($DatosCourse3_edit));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses3">
                          <p>Klass 4</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse4_edit > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="40">
                                  <td width="20%" align="center" ><input class="class1_content" type="radio" name="course_4" value="<?php echo $row_DatosCourse4_edit['id_course'];?>" <?php if ($row_DatosEdit['course_4'] == $row_DatosCourse4_edit['id_course']) echo "checked"; ?>></td>
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
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera !" />
              </td>
          </tr>
        <style>
            .delete_link a{
                color: red;
            }
            .delete_link a:hover{
                color: #F7B500;
            }
        </style>
          <tr height="10">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 10px 0 0 0;">
              <div class="delete_link"><a href="students.php?DeleteID=<?php echo $_GET["id"];?>">Radera denna register</a></div>
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="payment" id="payment" value="1"/>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
          <input type="hidden" name="id_student" id="id_student" value="<?php echo $_GET["id"];?>"/>
      </table>
  </form>

<?php endif ?>

<style>
.paquetes {
  cursor: pointer;
  width: 40px;
  height: 20px;
  right: 10px;
  top: 10px;
}
.navmenu {
  width: 90%;
  margin: 30px auto;
  background: #fff;
  /*left: 170px;*/
  top: -95px;
  /*box-shadow: 0 0 10px 2px rgba(0, 0, 0, 15);*/
  z-index: 10;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 300ms ease;
  transition: all 300ms ease;
  position: relative;
}
.navmenu.opened {
  visibility: visible;
  opacity: 1;
}
</style>
