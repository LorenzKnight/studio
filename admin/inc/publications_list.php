<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
$query_DatosPub = sprintf("SELECT * FROM publications ORDER BY id_publications DESC");
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
  $insertSQL = sprintf("INSERT INTO publications(date, year, month, day, time, foto, title, content, status, settings, id_publications) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["foto"], "text"),                      
                        GetSQLValueString($_POST["title"], "text"),
                        GetSQLValueString($_POST["content"], "text"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["settings"], "int"),
                        GetSQLValueString($_POST["id_publications"], "int"));

  
  $Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "publications.php";
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

<div class="pub_div">
    <?php if ($row_DatosPub > 0) { // Show if recordset not empty ?>
    <?php do { ?>
    <div class="pub_vy">
        <div class="pub_vy_foto">
            <img src="../img/news/<?php echo $row_DatosPub['foto']; ?>">
        </div>
        <div class="pub_vy_text">
            <h3><?php echo $row_DatosPub['title']; ?></h3>
            <p><?php echo $row_DatosPub['content']; ?><p>
        </div>
        <div class="arternative" style="float: right;">
            <button class="artbtn">o o o</button>
            <div class="arternative-content">
                <a href="publications.php?edit=<?php echo $row_DatosPub['id_publications']; ?>" class="alt_button">Edit info</a>
                <a href="publications_delete.php?DeleteID=<?php echo $row_DatosPub['id_publications']; ?>" class="alt_button">Delete</a>
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
<form action="publications.php" method="post" name="formrequest" id="formrequest">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="40">
              <td colspan="2" valign="middle" align="center">
                  Form New post
              </td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Title..." name="title" id="title" size="92" required/></td>
          </tr>
          <tr height="100">
              <td colspan="2" valign="middle" align="center"><textarea class="textf" type="text" placeholder="Content..." name="content" id="content" maxlength="2000" cols="90" rows="9" required></textarea></td>
          </tr>
          <tr height="200">
              <td colspan="2" valign="middle" align="center">

                <script src="scriptupload.js"></script>

                <?php 
                //***********************BLOQUE INSERCION IMAGEN***********************//
                //***********************PARÁMETROS DE IMAGEN**************************//
                $nombrecampoimagen="foto";
                $nombrecampoimagenmostrar="fotopic";
                $nombrecarpetadestino="../img/news/"; //carpeta destino con barra al final
                $nombrecampofichero="file1";
                $nombrecampostatus="status1";
                $nombrebarraprogreso="progressBar1";
                $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
                $tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
                $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
                $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                    
                $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

                //$cadenadeparametros="";                                 
                ?>
                        <input type="hidden" size="40" name="settings" id="settings">
                        <input type="hidden" class="textf" size="40" name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>">
                        <br>
                        <br>
                        <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>">
                        
                        <input class="form-control" type="button" value="Ladda up file" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                        <br>
                        <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="80" style="width: 80%;"></progress>
                        <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                        <div class="foto_prev">
                            <img src="" alt="" id="<?php echo $nombrecampoimagenmostrar;?>" height="150">

                            <?php $ajuste = (270);?>

                            <div class="new_index" style="left: <?php echo $ajuste; ?>px;">
                            </div>
                        </div>
                <?php /*?>
                //******************FIN BLOQUE INSERCION IMAGEN*************************
                <?php */?>  
              </td>
          </tr>
          <tr height="50">
              <td width="50%" valign="middle" align="right" style="color: #666; font-size: 14px; padding: 0 10px;">
                  foto setting:
                  <input class="textf" type="text" size="8" name="settings" id="settings">
              </td>
              <td width="50%" valign="middle" align="left" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Status:
                  <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                  <option value="1">Aktiv</option>
                  <option value="0">Inaktiv</option>
                  </select>
              </td>
          </tr>
          
          <tr height="60">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="publications.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera !" />
              </td>
          </tr>
          <tr height="10">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
              </td>
          </tr>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
          <input type="hidden" name="id_publications" id="id_publications" value="<?php echo $_GET["edit"];?>"/>
      </table>
    </form>

<?php endif ?>

    <div onclick="location='publications.php?new=1'" class="flying_button">+</div>

    <?php if($_GET["edit"]):?>
    <form action="publications.php" method="post" name="formedit" id="formedit">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="40">
              <td colspan="2" valign="middle" align="center">
                  Form Edit
              </td>
          </tr>
          <tr height="60">
              <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['title'];?>" placeholder="Title..." name="title" id="title" size="92" required/></td>
          </tr>
          <tr height="100">
              <td colspan="2" valign="middle" align="center"><textarea class="textf" type="text" placeholder="Content..." name="content" id="content" maxlength="2000" cols="90" rows="9" required><?php echo $row_DatosEdit['content'];?></textarea></td>
          </tr>
          <tr height="200">
              <td colspan="2" valign="middle" align="center">

          <script src="js/scriptupload.js"></script>

            <?php 
            //***********************BLOQUE INSERCION IMAGEN***********************//
            //***********************PARÁMETROS DE IMAGEN**************************//
            $nombrecampoimagen="foto";
            $nombrecampoimagenmostrar="fotopic";
            $nombrecarpetadestino="../img/news/"; //carpeta destino con barra al final
            $nombrecampofichero="file1";
            $nombrecampostatus="status1";
            $nombrebarraprogreso="progressBar1";
            $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
            $tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
            $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
            $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                
            $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

            //$cadenadeparametros="";                                 
            ?>
                    <input type="hidden" class="textf" size="40" name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>" value="<?php echo $row_DatosEdit['foto'];?>">
                    <br>
                    <br>
                    <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>">
                    
                    <input class="form-control" type="button" value="Ladda up file" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                    <br>
                    <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="80" style="width: 80%;"></progress>
                    <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                    <div class="foto_prev">
                        <img src="<?php echo $nombrecarpetadestino.$row_DatosEdit['foto']; ?>" alt="" id="<?php echo $nombrecampoimagenmostrar;?>" height="150">

                        <?php $ajuste = (270);?>

                        <div class="new_index" style="left: <?php echo $ajuste; ?>px;">
                        </div>
                    </div>
            <?php /*?>
            
            //******************FIN BLOQUE INSERCION IMAGEN*************************
            <?php */?>  
                </td>
          </tr>
          <tr height="50">
              <td width="50%" valign="middle" align="right" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Foto setting:
                  <input class="textf" type="text" value="<?php echo $row_DatosEdit['settings'];?>" size="8" name="settings" id="settings">
              </td>
              <td width="50%" valign="middle" align="left" style="color: #666; font-size: 14px; padding: 0 10px;">
                  Status:
                  <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                  <option value="1" <?php if ($row_DatosEdit["status"]=="1") echo "selected"; ?>>Aktiv</option>
                  <option value="0" <?php if ($row_DatosEdit["status"]=="0") echo "selected"; ?>>Inaktiv</option>
                  </select>
              </td>
          </tr>
          
          <tr height="60">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                      <a href="publications.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera !" />
              </td>
          </tr>
          <tr height="10">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
          <input type="hidden" name="id_publications" id="id_publications" value="<?php echo $_GET["edit"];?>"/>
      </table>
    </form>

<?php endif ?>