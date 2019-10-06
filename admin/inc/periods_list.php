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

<div onclick="location='periods.php?new=1'" class="flying_button">+</div>

<?php if($_GET["new"]):?>
    <form action="periods.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
            <tr height="60">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    <h2>Ny Termin</h2>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Termin Namn..." name="term_name" id="term_name" size="52" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Instruktor..." name="teacher" id="teacher" size="52" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Nivå: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="level" id="level" required>
                    <option value="1">Beginning 1</option>
                    <option value="2">Beginning 2</option>
                    <option value="3">Intermediate 1</option>
                    <option value="4">Intermediate 2</option>
                    <option value="5">Advance 1</option>
                    <option value="6">Advance 2</option>
                    <option value="7">Private class</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Bokninsbar: 
                    
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Dag: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="day" id="day" required>
                    <option value="1">Måndag</option>
                    <option value="2">Tisdag</option>
                    <option value="3">Onsdag</option>
                    <option value="4">Tursdag</option>
                    <option value="5">Fredag</option>
                    <option value="6">Lördag</option>
                    <option value="7">Söndag</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Sal: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sal" id="sal" required>
                    <option value="1">Sal 1</option>
                    <option value="2">Sal 2</option>
                    </select>
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Kl: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="hour" id="hour" required>
                    <option value="0">17:00</option>
                    <option value="54">17:30</option>
                    <option value="110">18:00</option>
                    <option value="165">18:30</option>
                    <option value="220">19:00</option>
                    <option value="275">19:30</option>
                    <option value="330">20:00</option>
                    <option value="385">20:30</option>
                    <option value="440">21:00</option>
                    <option value="495">21:30</option>
                    <option value="550">22:00</option>
                    <option value="605">22:30</option>
                    <option value="660">23:00</option>
                    <option value="715">23:30</option>
                    <option value="770">00:00</option>
                    </select>
                </td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px; color: #999; font-size: 14px;">
                    Tid: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="duration" id="duration" required>
                    <option value="54">0.5 timma</option>
                    <option value="110" selected>1 timma</option>
                    <option value="165">1.5 timma</option>
                    <option value="220">2 timma</option>
                    <option value="275">2.5 timmar</option>
                    <option value="330">3 timmar</option>
                    <option value="385">3.5 timmar</option>
                    <option value="440">4 timmar</option>
                    <option value="495">4.5 timmar</option>
                    <option value="550">5 timmar</option>
                    <option value="605">5.5 timmar</option>
                    <option value="660">6 timmar</option>
                    <option value="715">6.5 timmar</option>
                    <option value="770">7 timmar</option>
                    </select>
                </td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="periods.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>
<?php endif ?>
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
