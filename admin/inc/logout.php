<?php
    $_SESSION['MM_Username']="";
    $_SESSION['MM_UserGroup']="";
    $_SESSION['std_UserId']="";
    $_SESSION['std_Mail']="";
    $_SESSION['std_Nivel']="";

    unset($_SESSION['MM_Username']);
    unset($_SESSION['MM_UserGroup']);
    unset($_SESSION['std_UserId']);
    unset($_SESSION['std_Mail']);
    unset($_SESSION['std_Nivel']);
    session_start();
    session_destroy();

    header("Location: ../index.php");
    exit;
?>