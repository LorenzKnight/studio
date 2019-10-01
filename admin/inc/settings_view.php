<?php
 $query_DatosConsulta = sprintf("SELECT * FROM pages WHERE padre = 0 ORDER BY id_page"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
 $query_DatosConsulta2 = sprintf("SELECT * FROM pages WHERE padre = 0 ORDER BY id_page"); 
 $DatosConsulta2 = mysqli_query($con, $query_DatosConsulta2) or die(mysqli_error($con));
 $row_DatosConsulta2 = mysqli_fetch_assoc($DatosConsulta2);
 $totalRows_DatosConsulta2 = mysqli_num_rows($DatosConsulta2);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formpage")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO pages(name, description, padre) 
                        VALUES (%s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["description"], "text"),
                        GetSQLValueString($_POST["padre"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "page_settings.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php
 $query_DatosPageInfo = sprintf("SELECT * FROM site_info ORDER BY id_site"); 
 $DatosPageInfo = mysqli_query($con, $query_DatosPageInfo) or die(mysqli_error($con));
 $row_DatosPageInfo = mysqli_fetch_assoc($DatosPageInfo);
 $totalRows_DatosPageInfo = mysqli_num_rows($DatosPageInfo);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formpageinf")) {
     
     $updateSQL = sprintf("UPDATE site_info SET name=%s, adress=%s, post=%s, city=%s, email=%s WHERE id_site=%s",
                          GetSQLValueString($_POST["name"], "text"),
                          GetSQLValueString($_POST["adress"], "text"),
                          GetSQLValueString($_POST["post"], "text"),
                          GetSQLValueString($_POST["city"], "text"),
                          GetSQLValueString($_POST["email"], "text"),
                          GetSQLValueString($_POST["id_site"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "page_settings.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<div class="user_div">
    <div class="space">
        <div class="settings_sb">
            <div class="under_sites">
                <ul>
                    <a href="page_settings.php?pageinfo=1"><li>Page info</li></a>
                </ul>
            </div>
            <?php
            if ($totalRows_DatosConsulta > 0) {
            do { ?>
            <div class="under_sites">
                <ul>
                    <a href="page_settings.php?pageid=<?php echo $row_DatosConsulta["id_page"]; ?>"><li><?php echo $row_DatosConsulta["name"]; ?></li></a>
                </ul>
            </div>
            <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta));
            }
            ?>
            <div class="add_under_button">
                <ul>
                    <a href="page_settings.php?newpage=1"><li>+ Add page</li></a>
                </ul>
            </div>
        </div>
        <div class="settings_cnt">
            <?php if($_GET["pageinfo"]):?>
                <form action="page_settings.php?pageinfo=1" method="post" name="formpageinf" id="formpageinf">
                    <table class="pageinf" border="0" cellspacing="0" cellpadding="0">
                        <tr height="80">
                            <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                                Page Info
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Page Namn..." value="<?php echo $row_DatosPageInfo["name"]; ?>" name="name" id="name" size="52" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Page Adress..." value="<?php echo $row_DatosPageInfo["adress"]; ?>" name="adress" id="adress" size="52" required/></td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="right" style="padding: 0 10px 0 0;"><input class="textf" type="text" placeholder="Post No..." value="<?php echo $row_DatosPageInfo["post"]; ?>" name="post" id="post" size="23" required/></td>
                            <td width="50%" valign="middle" align="left" style="padding: 0 0 0 10px;"><input class="textf" type="text" placeholder="Ort..." value="<?php echo $row_DatosPageInfo["city"]; ?>" name="city" id="city" size="23" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Page Mail..." value="<?php echo $row_DatosPageInfo["email"]; ?>" name="email" id="email" size="52" required/></td>
                        </tr>
                        <tr height="120">
                            <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                <input type="submit" class="button" value="Redigera" />
                            </td>
                        </tr>
                        <input type="hidden" name="id_site" id="id_site" value="1"/>
                        <input type="hidden" name="MM_insert" id="MM_insert" value="formpageinf" />
                    </table>
                </form>
            <?php endif ?>
        </div>
    </div>
    <?php if($_GET["newpage"]):?>
        <form action="page_settings.php" method="post" name="formpage" id="formpage">
            <table class="formulario_schedule" style="margin-top: 300px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        Page
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Page Namn..." name="name" id="name" size="52" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Description..." name="description" id="description" size="52" required/></td>
                </tr>
                <tr height="120">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="page_settings.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <input type="hidden" name="padre" id="padre" value="0"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formpage" />
            </table>
        </form>
    <?php endif ?>
</div>