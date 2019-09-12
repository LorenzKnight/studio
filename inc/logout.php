<?php
    $_SESSION['MM_Username']="";
    $_SESSION['MM_UserGroup']="";
    $_SESSION['ydl_UserId']="";
    $_SESSION['ydl_Mail']="";
    $_SESSION['ydl_Nivel']="";

    unset($_SESSION['MM_Username']);
    unset($_SESSION['MM_UserGroup']);
    unset($_SESSION['ydl_UserId']);
    unset($_SESSION['ydl_Mail']);
    unset($_SESSION['ydl_Nivel']);
    session_start();
    session_destroy();

    header("Location: comp_reg.php");
    exit;
?>