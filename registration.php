<?php require_once('connections/conexion.php');?>
<?php
  $query_DatosPeriod = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term DESC");
  $DatosPeriod = mysqli_query($con, $query_DatosPeriod) or die(mysqli_error($con));
  $row_DatosPeriod = mysqli_fetch_assoc($DatosPeriod);
  $totalRows_DatosPeriod = mysqli_num_rows($DatosPeriod);

  $TermAct = $row_DatosPeriod['id_term'];
?>
<!-- /////////////////////////////////// Consulta para optener el lista de cursos que se muestran en el formulario con categoria 1/////////////////////////////////////////// -->
<?php
  $query_DatosCourse = sprintf("SELECT * FROM courses WHERE category = 1 AND status = 1 ORDER BY id_course ASC"); 
  $DatosCourse = mysqli_query($con, $query_DatosCourse) or die(mysqli_error($con));
  $row_DatosCourse = mysqli_fetch_assoc($DatosCourse);
  $totalRows_DatosCourse = mysqli_num_rows($DatosCourse);
?>
<!-- /////////////////////////////////// Final Consulta para optener el lista de cursos que se muestran en el formulario con categoria 1/////////////////////////////////////////// -->
<!-- /////////////////////////////////// Consulta para optener el lista de cursos que se muestran en el formulario con categoria 1/////////////////////////////////////////// -->
<?php
  $query_DatosCourse2 = sprintf("SELECT * FROM courses WHERE category = 2 AND status = 1 ORDER BY id_course ASC"); 
  $DatosCourse2 = mysqli_query($con, $query_DatosCourse2) or die(mysqli_error($con));
  $row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2);
  $totalRows_DatosCourse2 = mysqli_num_rows($DatosCourse2); 
?>
<!-- /////////////////////////////////// Final Consulta para optener el lista de cursos que se muestran en el formulario con categoria 1/////////////////////////////////////////// -->
<!-- /////////////////////////////////// Consulta para optener el porsiento de rebajas que se muestran en el formulario/////////////////////////////////////////// -->
<?php
  $query_DatosPDiscount = sprintf("SELECT * FROM pack_discount ORDER BY id_p_discount ASC"); 
  $DatosPDiscount = mysqli_query($con, $query_DatosPDiscount) or die(mysqli_error($con));
  $row_DatosPDiscount = mysqli_fetch_assoc($DatosPDiscount);
  $totalRows_DatosPDiscount = mysqli_num_rows($DatosPDiscount);
?>
<!-- /////////////////////////////////// Final Consulta para optener el porsiento de rebajas que se muestran en el formulario/////////////////////////////////////////// -->
<!-- /////////////////////////////////// Consulta para optener la lista de cursos seleccionados categoria 1 /////////////////////////////////////////// -->
<?php
  $query_DatosCart = sprintf("SELECT * FROM cart WHERE id_student = %s AND course_category = 1 AND transaction_made = 0 ORDER BY id_counter ASC",
                              GetSQLValueString($_SESSION["ydl_UserId"], "int")); 
  $DatosCart = mysqli_query($con, $query_DatosCart) or die(mysqli_error($con));
  $row_DatosCart = mysqli_fetch_assoc($DatosCart);
  $totalRows_DatosCart = mysqli_num_rows($DatosCart);
?>
<!-- /////////////////////////////////// Final Consulta para optener la lista de cursos seleccionados categoria 1 /////////////////////////////////////////// -->
<!-- /////////////////////////////////// Consulta para optener la lista de cursos seleccionados categoria 2 /////////////////////////////////////////// -->
<?php
  $query_DatosCart2 = sprintf("SELECT * FROM cart WHERE id_student = %s AND course_category = 2 AND transaction_made = 0 ORDER BY id_counter ASC",
                              GetSQLValueString($_SESSION["ydl_UserId"], "int")); 
  $DatosCart2 = mysqli_query($con, $query_DatosCart2) or die(mysqli_error($con));
  $row_DatosCart2 = mysqli_fetch_assoc($DatosCart2);
  $totalRows_DatosCart2 = mysqli_num_rows($DatosCart2);
?>
<!-- /////////////////////////////////// Final Consulta para optener la lista de cursos seleccionados categoria 2 /////////////////////////////////////////// -->
<!-- /////////////////////////////////// Consulta para optener la lista de cursos seleccionados para el paquete /////////////////////////////////////////// -->
<?php
  $query_DatosParaPaquete = sprintf('SELECT * FROM cart WHERE id_student = %s AND transaction_made = 0 AND discountcode IS NULL ORDER BY id_counter ASC',
                              GetSQLValueString($_SESSION["ydl_UserId"], "int")); 
  $DatosParaPaquete = mysqli_query($con, $query_DatosParaPaquete) or die(mysqli_error($con));
  $row_DatosParaPaquete = mysqli_fetch_assoc($DatosParaPaquete);
  $totalRows_DatosParaPaquete = mysqli_num_rows($DatosParaPaquete);
?>
<!-- /////////////////////////////////// Final Consulta para optener la lista de cursos seleccionados para el paquete /////////////////////////////////////////// -->
<!-- /////////////////////////////////// Consulta para optener la rebaja del promo code /////////////////////////////////////////// -->
<?php
  $query_DatosPromoCode = sprintf("SELECT * FROM cart WHERE id_student = %s AND id_term = %s ORDER BY id_counter ASC",
                              GetSQLValueString($_SESSION["ydl_UserId"], "int"),
                              GetSQLValueString($TermAct, "int")); 
  $DatosPromoCode = mysqli_query($con, $query_DatosPromoCode) or die(mysqli_error($con));
  $row_DatosPromoCode = mysqli_fetch_assoc($DatosPromoCode);
  $totalRows_DatosPromoCode = mysqli_num_rows($DatosPromoCode);
?>
<!-- /////////////////////////////////// Final Consulta para optener la rebaja del promo code /////////////////////////////////////////// -->
<!-- /////////////////////////////////// codigo para insertar un registro nuevo /////////////////////////////////////////// -->
<?php
  $editFormAction = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }

  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {

    if (comprobaremailestudiante($_POST["email"]))
    {
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $insertSQL = sprintf("INSERT INTO students(date, year, month, day, time, name, surname, email, password, personal_number, telephone, adress, post, city, sex, agree, via) 
                          VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
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
                          GetSQLValueString($_POST["via"], "int"));

    
    $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
    
    
    // $insertGoTo1 = "registration.php?idConf=1";
    $insertGoTo1 = "registration.php?discountCode=1";
    if (isset($_SERVER['QUERY_STRING'])) {
      $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
      $insertGoTo1 .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo1));

  }
  else if (!isset($_SESSION)) {
    session_start();
  }

  $loginFormAction = $_SERVER['PHP_SELF'];
  if (isset($_GET['accesscheck'])) {
    $_SESSION['PrevUrl'] = $_GET['accesscheck'];
  }

  function mysqli_result($res, $row, $field=0) { 
      $res->data_seek($row); 
      $datarow = $res->fetch_array(); 
      return $datarow[$field]; 
  }

  if (isset($_POST['email'])) {
    $loginUsername=$_POST['email'];
    //ATENCIÓN USAMOS MD5 para guardar la contraseña.
    $password=$_POST['password'];
    $MM_fldUserAuthorization = "rank";
    $MM_redirectLoginSuccess = "registration.php?discountCode=1";
    $MM_redirectLoginFailed = "error.php?error=3";
    $MM_redirecttoReferrer = false;
    
      
    $LoginRS__query=sprintf("SELECT id_student, email, password, rank FROM students WHERE email=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"),
    GetSQLValueString($password, "text")); 
    
    $LoginRS = mysqli_query($con,  $LoginRS__query) or die(mysqli_error($con));
    $loginFoundUser = mysqli_num_rows($LoginRS);
    if ($loginFoundUser) {
      
      $loginStrGroup  = mysqli_result($LoginRS,0,'rank');
      
    if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
      //declare two session variables and assign them
      $_SESSION['MM_Username'] = $loginUsername;
      $_SESSION['MM_UserGroup'] = $loginStrGroup;	 
      $_SESSION['ydl_UserId'] = mysqli_result($LoginRS,0,'id_student');
      $_SESSION['ydl_Mail'] = mysqli_result($LoginRS,0,'email');
      $_SESSION['ydl_Nivel'] = mysqli_result($LoginRS,0,'rank');
    //ContabilizarAcceso($_SESSION['vpt_UserId']);
    
    /* DESCOMENTAR SOLO SI SE USA EL CHECK DE RECORDAR CONTRASEÑA, HABRÁ QUE USAR LA FUNCIÓN generar_cookie()
    if ((isset($_POST["CAMPORECUERDA"])) && ($_POST["CAMPORECUERDA"]=="1"))
    generar_cookie($_SESSION['NOMBREWEB_UserId']);
    */	     

      if (isset($_SESSION['PrevUrl']) && false) {
        $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
      }
      header("Location: " . $MM_redirectLoginSuccess );
    }
    else {
      header("Location: ". $MM_redirectLoginFailed );
    }
  }
  }
?>
<!-- /////////////////////////////////// Final codigo para insertar un registro nuevo /////////////////////////////////////////// -->
<!-- /////////////////////////////////// codigo para insertar el codigo de descuento /////////////////////////////////////////// -->
<?php
  $editFormAction = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }

  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "discountrequest")) {

    $query_DatosPromoCodeControl = sprintf("SELECT * FROM cart WHERE discountcode = %s ORDER BY discountcode ASC",
                                GetSQLValueString($_POST["discountcode"], "int")); 
    $DatosPromoCodeControl = mysqli_query($con, $query_DatosPromoCodeControl) or die(mysqli_error($con));
    $row_DatosPromoCodeControl = mysqli_fetch_assoc($DatosPromoCodeControl);
    $totalRows_DatosPromoCodeControl = mysqli_num_rows($DatosPromoCodeControl);

    $startD = date("Y-m-d");
    if (comprobarDiscountCode($_POST["discountcode"]) && quantiCode($_POST["discountcode"], $totalRows_DatosPromoCodeControl) && dateConfirm($_POST["discountcode"], $startD, $startD))
    {

        $insertSQL = sprintf("INSERT INTO cart(date, discountcode, id_student, id_term) 
                              VALUES (NOW(), %s, %s, %s)",
                              GetSQLValueString($_POST["discountcode"], "text"),                      
                              GetSQLValueString($_POST["id_student"], "int"),
                              GetSQLValueString($TermAct, "int"));

        
        $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
        
        
        $insertGoTo = "registration.php?idCompl=1";
        if (isset($_SERVER['QUERY_STRING'])) {
          $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
          $insertGoTo .= $_SERVER['QUERY_STRING'];
        }
        header(sprintf("Location: %s", $insertGoTo));

    } else {
       $insertGoTo = "registration.php?discountCode=2";
        if (isset($_SERVER['QUERY_STRING'])) {
          $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
          $insertGoTo .= $_SERVER['QUERY_STRING'];
        }
        header(sprintf("Location: %s", $insertGoTo));
    }
  }
?>
<!-- /////////////////////////////////// Final del codigo para insertar el codigo de descuento /////////////////////////////////////////// -->
<!-- /////////////////////////////////// codigo para insertar los cursos del usuario recien registrado /////////////////////////////////////////// -->
<?php
  $editFormAction = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }

  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequeste")) {
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $insertSQL = sprintf("INSERT INTO inscriptions(date, year, month, day, time, id_student, term, term_start, term_stop, package, payment, status) 
                          VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s)",
                          GetSQLValueString($_POST["id_student"], "int"),                      
                          GetSQLValueString($_POST["term"], "int"),
                          GetSQLValueString($_POST["term_start"], "text"),
                          GetSQLValueString($_POST["term_stop"], "text"),
                          GetSQLValueString($_POST["package"], "int"),
                          GetSQLValueString($_POST["payment"], "int"),
                          GetSQLValueString($_POST["status"], "int"));

    
    $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
    
    
    $insertGoTo = "payment.php";
    if (isset($_SERVER['QUERY_STRING'])) {
      $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
      $insertGoTo .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo));
  }
?>
<!-- /////////////////////////////////// Final codigo para insertar los cursos del usuario recien registrado /////////////////////////////////////////// -->

<?php if($_GET['carrieOff']): ?>
<?php
  $query_Delete = sprintf("DELETE FROM cart WHERE id_student=%s AND transaction_made=0",
                            GetSQLValueString($_SESSION['ydl_UserId'], "int"));
  // echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

    $insertGoTo = "registration.php";
    header(sprintf("Location: %s", $insertGoTo));
    mysqli_free_result($Result1);
?>
<?php endif ?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<?php $menuactive= 2;?>
</head>
<script>
  function invalidCode() {
    console.log("tu codigo no es valido!");
  }
</script>
<script>
  function promocode() {
    var styles = {
      // "background-color": "red",
      "opacity": "1",
      // "transition": "300ms ease-in-out 100ms",
      // "animation-delay": "0.1s",
      "display": "block"
    };
    var promoCode = document.getElementById("code");
    Object.assign(promoCode.style, styles);

    document.getElementById("info").style.display="none";
  }

  // function ocurtar() {
  //   event.stopPropagation()
  //   document.getElementById("popup1").style.display="none";
  // }
</script>
<body>
    <?php include("inc/head.php")?>
    <?php include("inc/price_info.php")?>
    <?php include("inc/foot.php")?>
</body>
</html>