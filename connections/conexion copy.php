<?php

if (!isset($_SESSION)) {
  session_start();
}

$hostname_con = "p:10.209.2.58 ";
$database_con = "158575-studio";
$username_con = "158575_qb87497";
$password_con = "Bohe03++";
$con = mysqli_connect($hostname_con, $username_con, $password_con, $database_con);
mysqli_set_charset($con, 'utf8');

if (is_file("inc/funciones.php")) 
include("inc/funciones.php"); 
else
{
	include("../inc/funciones.php");
}
?>