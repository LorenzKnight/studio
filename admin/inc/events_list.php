<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosEvents = sprintf("SELECT * FROM events ORDER BY event_date DESC");
$DatosEvents = mysqli_query($con, $query_DatosEvents) or die(mysqli_error($con));
$row_DatosEvents = mysqli_fetch_assoc($DatosEvents);
$totalRows_DatosEvents = mysqli_num_rows($DatosEvents);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formnewevent")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO events(date, time, foto, name, description, event_date, link, status) 
                        VALUES (NOW(), NOW(), %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["foto"], "text"),                      
                        GetSQLValueString($_POST["name"], "text"),
                        GetSQLValueString($_POST["description"], "text"),
                        GetSQLValueString($_POST["event_date"], "text"),
                        GetSQLValueString($_POST["link"], "text"),
                        GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "events.php";
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

<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Date</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Foto</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; border-bottom: 1px solid #F7B500;">Link</td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>
    <?php if ($row_DatosEvents > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosEvents['event_date']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><img style="margin:5px;" src="../img/news/<?php echo $row_DatosEvents['foto']; ?>" height="" width="90%"></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosEvents['name']; ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo status($row_DatosEvents['link']); ?></td>
        <td width="20%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
            <div class="arternative">
                <button class="artbtn">o o o</button>
            </div>
        </td>
    </tr>
    <?php } while ($row_DatosEvents = mysqli_fetch_assoc($DatosEvents)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</table>
</div>

<a href="events.php?newevent=1"><div class="flying_button">+</div></a>

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
