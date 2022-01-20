<?php require_once('../connections/conexion.php');?>

<?php funcionDone($_GET['inscID']); ?>
<?php
    $updateGoTo = "students.php";
    if (isset($_SERVER['QUERY_STRING'])) {
        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
        $updateGoTo .= $_SERVER['QUERY_STRING'];
      }
      header(sprintf("Location: %s", $updateGoTo));
?>