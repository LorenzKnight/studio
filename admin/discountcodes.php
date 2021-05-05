<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<!--/////////////////////////////////////////////////control de permisos/////////////////////////////////////////////////-->
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0008") || $_SESSION['std_Nivel'] < 2) { ?>
<!--////////////////////////la otra parte del codigo control de permisos esta al final///////////////////////////////////-->
<?php
 $query_DatosConsulta = sprintf("SELECT * FROM adm_discount_list ORDER BY id_adm_disc"); 
 $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
 $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
 $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<?php
 $query_DatosCursos = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_course"); 
 $DatosCursos = mysqli_query($con, $query_DatosCursos) or die(mysqli_error($con));
 $row_DatosCursos = mysqli_fetch_assoc($DatosCursos);
 $totalRows_DatosCursos = mysqli_num_rows($DatosCursos);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

$password=md5($_POST["password"]);
    
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formcode")) {

    if (comprobarcodeunico($_POST["code"])) {

      $insertSQL = sprintf("INSERT INTO adm_discount_list(code, percent, money, quanti, start_date, stop_date) 
                            VALUES (%s, %s, %s, %s, %s, %s)",
            GetSQLValueString($_POST["code"], "text"),
            GetSQLValueString($_POST["percent"], "int"),
            GetSQLValueString($_POST["money"], "int"),
            GetSQLValueString($_POST["quanti"], "int"),
            GetSQLValueString($_POST['start_date'], "text"),
            GetSQLValueString($_POST["stop_date"], "text"));


      $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

        if($_POST['id_course'] != "") {

                if(is_array($_POST['id_course'])) {

                    // realizamos el ciclo de los checkbox selccionados
                    while(list($key,$value) = each($_POST['id_course'])) {

                        $insertSQL = sprintf("INSERT INTO discount(id_code, code, id_course, percent, money, quanti, start_date, stop_date) 
                                                VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                                                GetSQLValueString(discID($_POST["code"]), "int"),
                                                GetSQLValueString($_POST["code"], "text"),                   
                                                GetSQLValueString($value, "text"),
                                                GetSQLValueString(discPerc($_POST["code"]), "int"), 
                                                GetSQLValueString(discMoney($_POST["code"]), "int"), 
                                                GetSQLValueString(discQuan($_POST["code"]), "int"), 
                                                GetSQLValueString(discStartd($_POST["code"]), "text"), 
                                                GetSQLValueString(discStopd($_POST["code"]), "text"));

                        $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

                        $insertGoTo = "discountcodes.php";
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                            $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));
                    }
                }
        } else {

            $insertGoTo = "discountcodes.php";
            if (isset($_SERVER['QUERY_STRING'])) {
                $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                $insertGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $insertGoTo));
    
        }
    
    } else {

        $insertGoTo = "discountcodes.php?existe=1";
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
 $query_DatosEdit = sprintf("SELECT * FROM adm_discount_list WHERE id_adm_disc=%s", 
                              GetSQLValueString($_GET["editi"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
 $query_DatosEditCourse = sprintf("SELECT * FROM discount WHERE id_code=%s", 
                                    GetSQLValueString($_GET["editi"], "int")); 
 $DatosEditCourse = mysqli_query($con, $query_DatosEditCourse) or die(mysqli_error($con));
 $row_DatosEditCourse = mysqli_fetch_assoc($DatosEditCourse);
 $totalRows_DatosEditCourse = mysqli_num_rows($DatosEditCourse);
?>
<!-- codigo para editar las condiciones -->
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
} 
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formcodeedit")) {

        $updateSQL = sprintf("UPDATE adm_discount_list SET code=%s, percent=%s, money=%s, quanti=%s, start_date=%s, stop_date=%s WHERE id_adm_disc=%s",
                              GetSQLValueString($_POST["code"], "text"),
                              GetSQLValueString($_POST["percent"], "int"),
                              GetSQLValueString($_POST["money"], "int"),
                              GetSQLValueString($_POST["quanti"], "int"),
                              GetSQLValueString($_POST["start_date"], "text"),
                              GetSQLValueString($_POST["stop_date"], "text"),
                              GetSQLValueString($_POST["id_adm_disc"], "int"));
          

        $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));


        $query_Delete = sprintf("DELETE FROM discount WHERE id_code=%s", GetSQLValueString($_POST["id_adm_disc"], "int"));
        echo $query_Delete;
        $Result2 = mysqli_query($con, $query_Delete) or die(mysqli_error($con));


        if($_POST['id_course'] != "") {

                if(is_array($_POST['id_course'])) {

                    // realizamos el ciclo de los checkbox selccionados
                    while(list($key,$value) = each($_POST['id_course'])) {

                      $insertSQL = sprintf("INSERT INTO discount(id_code, code, id_course, percent, money, quanti, start_date, stop_date) 
                                              VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                                              GetSQLValueString(discID($_POST["code"]), "int"),
                                              GetSQLValueString($_POST["code"], "text"),                   
                                              GetSQLValueString($value, "text"),
                                              GetSQLValueString(discPerc($_POST["code"]), "int"), 
                                              GetSQLValueString(discMoney($_POST["code"]), "int"), 
                                              GetSQLValueString(discQuan($_POST["code"]), "int"), 
                                              GetSQLValueString(discStartd($_POST["code"]), "text"), 
                                              GetSQLValueString(discStopd($_POST["code"]), "text"));

                        $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));

                        $insertGoTo = "discountcodes.php?editdone=1";
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                            $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));

                    }
                }
        } else {

            $insertGoTo = "discountcodes.php";
            if (isset($_SERVER['QUERY_STRING'])) {
                $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                $insertGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $insertGoTo));
        }  
}      
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />

<link rel="stylesheet" type="text/css" href="simple_calendar/tcal.css" />
<script type="text/javascript" src="simple_calendar/tcal.js"></script>
</head>
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Discount codes</h2></div>
          <?php include("inc/adm_discountcodes_list.php"); ?>
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