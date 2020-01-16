<?php require_once('connections/conexion.php');?>
<?php
    if (comprobarpromocode($_POST["Fticket"])){
        $updateSQL = sprintf("UPDATE inscriptions SET promocode=%s WHERE id_student=%s",
                        GetSQLValueString($_POST["Fticket"], "text"),               
                        GetSQLValueString($_SESSION['ydl_UserId'], "int"));
		
        $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

        $updateGoTo = "payment.php?check=1";
        if (isset($_SERVER['QUERY_STRING'])) {
            $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
            $updateGoTo .= $_SERVER['QUERY_STRING'];
          }
        header(sprintf("Location: %s", $updateGoTo));
     } else {
        $updateGoTo = "payment.php?error=1";
        header(sprintf("Location: %s", $updateGoTo));  
    }
    
?>