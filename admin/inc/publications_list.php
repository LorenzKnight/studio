<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosPub = sprintf("SELECT * FROM publications ORDER BY id_publications ASC");
$DatosPub = mysqli_query($con, $query_DatosPub) or die(mysqli_error($con));
$row_DatosPub = mysqli_fetch_assoc($DatosPub);
$totalRows_DatosPub = mysqli_num_rows($DatosPub);
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
 $query_DatosEdit = sprintf("SELECT * FROM publications WHERE id_publications=%s", GetSQLValueString($_GET["edit"], "int")); 
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
  $updateSQL = sprintf("UPDATE publications SET foto=%s, title=%s, content=%s, status=%s WHERE id_publications=%s",
                       GetSQLValueString($_POST["foto"], "text"),
                       GetSQLValueString($_POST["title"], "text"),
                       GetSQLValueString($_POST["content"], "text"),
                       GetSQLValueString($_POST["status"], "int"),
					   GetSQLValueString($_POST["id_publications"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  $updateGoTo = "publications.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
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
        location = 'publications.php'
    }
}

document.addEventListener('click', onClick)

</script>
<style>
    .box_1 {
        width: 80px;
        overflow: auto;
        /*background-color: blueviolet;*/
        float: left;
        margin: 0 3%;
    }
    .foto_box_1 {
        width: 100%;
        height: 500px;
        background-color: blue;
        margin: 0;
        position: relative;
        display: block;
        overflow: hidden;
        box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
    }
    .foto_box_1 img {
        position: absolute;
    }
</style>
<div class="user_div">
    <?php if ($row_DatosPub > 0) { // Show if recordset not empty ?>
    <?php do { ?>
    <div class="pub_vy">
        <div class="pub_vy_foto">
                    <img src="../img/news/<?php echo $row_DatosPub['foto']; ?>" style="width: 100%;">
                
                <!-- <div class="box_1">
                    <div class="foto_box_1">
                        <img style="left: <?php //echo $row_DatosPub['settings']; ?>px;" src="../img/news/<?php //echo $row_DatosPub['foto']; ?>" height="60%">
                    </div>
                </div> -->
        </div>
        <div class="pub_vy_text">
            <h3><?php echo $row_DatosPub['title']; ?></h3>
            <p><?php echo $row_DatosPub['content']; ?><p>
        </div>
        <div class="arternative" style="float: right;">
            <button class="artbtn">o o o</button>
            <div class="arternative-content">
                <a href="publications.php?edit=<?php echo $row_DatosPub['id_publications']; ?>" class="alt_button">Edit info</a>
                <a href="student_delete.php?id=<?php echo $row_DatosPub['id_publications']; ?>" class="alt_button">Delete</a>
            </div>
        </div>
    </div>
    <?php } while ($row_DatosPub = mysqli_fetch_assoc($DatosPub)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
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

    <div onclick="location='publications.php?new=1'" class="flying_button">+</div>

    <?php if($_GET["edit"]):?>
<form action="publications.php" method="post" name="formedit" id="formedit">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="60">
              <td colspan="2" valign="middle" align="center">
                  Form Edit
              </td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center">

          <script src="scriptupload.js"></script>

            <?php 
            //BLOQUE INSERCION IMAGEN
            //***********************
            //***********************
            //***********************									  //***********************
            //PARÁMETROS DE IMAGEN
            $nombrecampoimagen="foto";
            $nombrecampoimagenmostrar="foto";
            $nombrecarpetadestino="../img/new/"; //carpeta destino con barra al final
            $nombrecampofichero="file1";
            $nombrecampostatus="status1";
            $nombrebarraprogreso="progressBar1";
            $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
            $tiposficheropermitidos="0"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
            $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
            $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                
            $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

            //$cadenadeparametros="";

                                                
                                                ?>
            <div class="form-group">
                <label>Imagen</label>
                <input class="form-control"  name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>">
            </div> 
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>"><br>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" type="button" value="Subir Fichero" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                    </div>
                </div>
                <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="100" style="width:100%;"></progress>
                <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                <img src="" alt="" id="<?php echo $nombrecampoimagenmostrar;?>">
            </div>   
            <?php /*?>
            //***********************
            //***********************
            //***********************									  //***********************
            // FIN BLOQUE INSERCION IMAGEN
            <?php */?>  
                </td>
          </tr>

          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['foto'];?>" placeholder="Title..." name="foto" id="foto" size="92" required/></td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['title'];?>" placeholder="Title..." name="title" id="title" size="92" required/></td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><textarea class="textf" type="text" placeholder="Content..." name="content" id="content" maxlength="2000" cols="90" rows="12" required><?php echo $row_DatosEdit['content'];?></textarea></td>
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
          
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="publications.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera !" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
          <input type="hidden" name="id_publications" id="id_publications" value="<?php echo $_GET["edit"];?>"/>
      </table>
  </form>

<?php endif ?>