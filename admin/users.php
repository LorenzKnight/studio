<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0017") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}
 $query_DatosConsulta = sprintf("SELECT * FROM users ORDER BY id_user"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<!-- codigo para las condiciones -->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$password=md5($_POST["password"]);
    
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formpermissions")) {

    if (comprobaremailunico($_POST["mail"])) {

      $insertSQL = sprintf("INSERT INTO users(name, surname, mail, telefon, password, rank, status) VALUES (%s, %s, %s, %s, %s, %s, %s)",
            GetSQLValueString($_POST["name"], "text"),
            GetSQLValueString($_POST["surname"], "text"),
            GetSQLValueString($_POST["mail"], "text"),
            GetSQLValueString($_POST["telefon"], "text"),
            GetSQLValueString($password, "text"),
            GetSQLValueString($_POST["rank"], "int"),
            GetSQLValueString($_POST["status"], "int"));


      $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

        if($_POST['permissions'] != "") {

                if(is_array($_POST['permissions'])) {

                    // realizamos el ciclo de los checkbox selccionados
                    while(list($key,$value) = each($_POST['permissions'])) {

                        $insertSQL = sprintf("INSERT INTO multi_user_access(id_user, id_admin, permissions) 
                                                VALUES (%s, %s, %s)",
                                                GetSQLValueString(ObtenerIDUsuario($_POST["mail"]), "int"),
                                                GetSQLValueString($_POST["id_admin"], "int"),                   
                                                GetSQLValueString($value, "text"));

                        $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

                        $insertGoTo = "users.php";
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                            $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));
                    }
                }
        } else {

            $insertGoTo = "users.php";
            if (isset($_SERVER['QUERY_STRING'])) {
                $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                $insertGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $insertGoTo));
    
        }
    
    } else {

        $insertGoTo = "users.php?existe=1";
        if (isset($_SERVER['QUERY_STRING'])) {
            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
            $insertGoTo .= $_SERVER['QUERY_STRING'];
        }
        header(sprintf("Location: %s", $insertGoTo));

    }
}      
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END EDIT/////////////////////////////////////////////////////////-->
<?php
 $query_DatosEdit = sprintf("SELECT * FROM users WHERE id_user=%s", GetSQLValueString($_GET["edit"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<!-- codigo para editar las condiciones -->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
} 
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formpermissionsedit")) {

        $updateSQL = sprintf("UPDATE users SET name=%s, surname=%s, mail=%s, telefon=%s, rank=%s, status=%s WHERE id_user=%s",
                              GetSQLValueString($_POST["name"], "text"),
                              GetSQLValueString($_POST["surname"], "text"),
                              GetSQLValueString($_POST["mail"], "text"),
                              GetSQLValueString($_POST["telefon"], "text"),
                              GetSQLValueString($_POST["rank"], "int"),
                              GetSQLValueString($_POST["status"], "int"),
                              GetSQLValueString($_POST["id_user"], "int"));
          

        $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));


        $query_Delete = sprintf("DELETE FROM multi_user_access WHERE id_user=%s", GetSQLValueString($_POST["id_user"], "int"));
        echo $query_Delete;
        $Result2 = mysqli_query($con, $query_Delete) or die(mysqli_error($con));


        if($_POST['permissions'] != "") {

                if(is_array($_POST['permissions'])) {

                    // realizamos el ciclo de los checkbox selccionados
                    while(list($key,$value) = each($_POST['permissions'])) {

                        $insertSQL = sprintf("INSERT INTO multi_user_access(id_user, id_admin, permissions) 
                                                VALUES (%s, %s, %s)",
                                                GetSQLValueString($_POST["id_user"], "int"),
                                                GetSQLValueString($_POST["id_admin"], "int"),                   
                                                GetSQLValueString($value, "text"));

                        $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

                        $insertGoTo = "users.php?editdone=1";
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                            $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));

                    }
                }
        } else {

            $insertGoTo = "users.php";
            if (isset($_SERVER['QUERY_STRING'])) {
                $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                $insertGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $insertGoTo));
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
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <div class="title"><h2>Users</h2> <?php echo $row_DatosProfil['id_user']; ?></div>
          <?php include("inc/user_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>
<!--////////////////////////parte 2 del codigo control de permisos esta al final////////////////////////////-->
<?php } else {
      header(sprintf("Location: dashboard.php")); exit;
} ?>