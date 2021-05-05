<?php require_once('../connections/conexion.php');?>
<?php

?>
<?php
  $query_DatosTerm = sprintf("SELECT * FROM term WHERE status = 1 ORDER BY id_term ASC");
  $DatosTerm = mysqli_query($con, $query_DatosTerm) or die(mysqli_error($con));
  $row_DatosTerm = mysqli_fetch_assoc($DatosTerm);
  $totalRows_DatosTerm = mysqli_num_rows($DatosTerm);

  $TermAct = $row_DatosTerm['id_term'];
?>
<?php
$query_DatosConsulta = sprintf("SELECT * FROM inscriptions WHERE term = $TermAct ORDER BY id_insc DESC");
$DatosConsulta= mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
$row_DatosConsulta = mysqli_fetch_assoc($DatosTerm);
$totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);

$studentArray = array();
	
	while($row_DatosConsulta  = $DatosConsulta->fetch_array()) {
		
		$studentArray[] = array(
					'id' => $row_DatosConsulta ['id_insc'],
					'student' => ObtenerNombreStudent($row_DatosConsulta ['id_student'])
					);
	}
	header('Access-Control-Allow-Origin: *');
	// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
	// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	// header("Allow: GET, POST, OPTIONS, PUT, DELETE");
	// $method = $_SERVER['REQUEST_METHOD'];
	// if($method == "OPTIONS") {
	// 	die();
	// }

	echo json_encode($studentArray);
?>
<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
?>