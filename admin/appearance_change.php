<?php require_once('../connections/conexion.php');?>
<?php 
    $editFormAction = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
        $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
    }  
            $updateSQL = sprintf("UPDATE users SET appearance=%s WHERE id_user=%s",
                                GetSQLValueString($_GET["app"], "int"),
                                GetSQLValueString($_SESSION['std_UserId'], "int"));
            
    
    $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
    
        $updateGoTo = $_SERVER['HTTP_REFERER'];
        // $updateGoTo = "students.php";
        if (isset($_SERVER['QUERY_STRING'])) {
            $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
            $updateGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $updateGoTo));
        
?>