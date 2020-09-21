<?php 

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
  global $con;
  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($con, $theValue) : mysqli_escape_string($con,$theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function comprobaremailunico($email)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT mail FROM users WHERE mail = %s ",
		 GetSQLValueString($email, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function comprobarRegistroUnico($estudianteID, $terminA)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE id_student = %s AND term = %s ",
// 									   GetSQLValueString($estudianteID, "int"),
// 									   GetSQLValueString($terminA, "int"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	if ($totalRows_ConsultaFuncion==0) 
// 		return true;
// 	else return false;
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function comprobaremailestudiante($EstudianteUnico)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT email FROM students WHERE email = %s ",
		 GetSQLValueString($EstudianteUnico, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerIDUsuario($Umail)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_user FROM users WHERE mail = %s ",
		 GetSQLValueString($Umail, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_user"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreUsuario($nombre)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT name FROM users WHERE id_user = %s ",
		 GetSQLValueString($nombre, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerApellidoUsuario($apellido)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT surname FROM users WHERE id_user = %s ",
		 GetSQLValueString($apellido, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["surname"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerTelefonoUsuario($telefonU)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT telefon FROM users WHERE id_user = %s ",
		 GetSQLValueString($telefonU, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["telefon"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerMailUsuario($mailU)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT mail FROM users WHERE id_user = %s ",
		 GetSQLValueString($mailU, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["mail"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPasswordUsuario($passwordU)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT password FROM users WHERE id_user = %s ",
		 GetSQLValueString($passwordU, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["password"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function showPermissions($multiUserID, $permissionID)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM multi_user_access WHERE id_user = %s AND permissions = %s",
									GetSQLValueString($multiUserID, "int"),
									GetSQLValueString($permissionID, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion > 0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreParaBuscar($nombresarch)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_student FROM students WHERE name = %s ",
		 GetSQLValueString($nombresarch, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_student"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerApellidoParaBuscar($apellidosarch)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_student FROM students WHERE surname = %s ",
		 GetSQLValueString($apellidosarch, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_student"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerAnoUsuario($year)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT year FROM users WHERE id_user = %s ",
		 GetSQLValueString($year, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["year"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCursos($cursos)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_user ASC");
	
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	?>   
    <?php
	if ($totalRows_ConsultaFuncion > 0) {
		do {
			?> 
		<option value="<?php echo $row_ConsultaFuncion['id_courses']?>"><?php echo $row_ConsultaFuncion['name']?></option>
	<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreTermin($nombreTermin)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT term_name FROM term WHERE id_term = %s ",
		 GetSQLValueString($nombreTermin, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["term_name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreCurso($nombreCurso)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT name FROM courses WHERE id_course = %s ",
		 GetSQLValueString($nombreCurso, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function CourseCategory($categoriaCurso)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT category FROM courses WHERE id_course = %s ",
		 GetSQLValueString($categoriaCurso, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["category"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerEsquemaCurso($nombreCurso) 
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT schedule FROM courses WHERE id_course = %s ",
		 GetSQLValueString($nombreCurso, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["schedule"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPrecioCurso($precioCurso)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT price FROM courses WHERE id_course = %s ",
		 GetSQLValueString($precioCurso, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["price"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function packet2($packet, $currentPacket)
{
	if ($packet >= $currentPacket) return "initial";
	return "none";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCursosSeleccionados($cursosSeleccionado)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student=%s AND transaction_made!=0 ORDER BY id_counter ASC",
			GetSQLValueString($cursosSeleccionado, "int"));
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

?>
<?php
	if ($totalRows_ConsultaFuncion > 0) {
	do {
	?> 
			<p style="color:#999;"><?php echo ObtenerNombreCurso($row_ConsultaFuncion['id_course']);?></p>
	<?php
	} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}

	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function productosRestantes($idEst, $idCous)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s AND id_course = %s AND transaction_made = 0",
										 GetSQLValueString($idEst, "int"),
										 GetSQLValueString($idCous, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function productosRestantesEdit($idEstE, $idCousE, $tmE)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s AND id_course = %s AND transaction_made = %s",
										 GetSQLValueString($idEstE, "int"),
										 GetSQLValueString($idCousE, "int"),
										 GetSQLValueString($tmE, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function SendMailHtml($destinatario, $contenido, $asunto)
{
	$mensaje = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<table width="100%" border="0" cellspacing="3" cellpadding="3" style="">
  <tr>
    <td><img src="http://loopsdancestudio.se/img/loops_dance_studio.svg" width="" height="65" /></td>
  </tr>
  <tr>
	<td>
		<br/>'; 
		$mensaje.= $nombre;
		':
		<br/>
		<br/>
		<p>';
		$mensaje.= $contenido;
		$mensaje.='</p>
		<br/><br/>
	</td>
  </tr>
  <tr>
	<td>
	<p style="color:#666;">FRISKVÅRDSBIDRAG?</p>
	<br/>
	<p style="font-size:12px; color:#666;">Detta mejl gäller som kvitto och går hos de flesta arbetsgivare att använda för friskvårdsbidrag. 
	Om du vill ha ett mer utfärligt intyg så kan du kontakta oss på <a style="font-size:14px;" href="mailto:ekonomi@loopsdancestudio.se">ekonomi@loopsdancestudio.se</a> </p>
	</td>
  </tr>
</table>
</body>
</html>';

	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$cabeceras  = 'MIME-Version: 1.0' . "\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
	// Cabeceras adicionales
	$cabeceras .= 'From: info@loopsdancestudio.se' . "\n";
	$cabeceras .= 'Bcc: info@loopsdancestudio.se' . "\n";
	
	// Enviarlo
	mail($destinatario, $asunto, $mensaje, $cabeceras);
	echo $mensaje;
	
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPrecioPacket($precio)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT price FROM package WHERE id_package = %s ",
	GetSQLValueString($precio, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["price"];	
	
	mysqli_free_result($ConsultaFuncion);
}

//DELETE//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPaqueteCursos($idstudiante, $idtransaccion)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student=%s AND transaction_made=%s",
							GetSQLValueString($idstudiante, "int"),
							GetSQLValueString($idtransaccion, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_counter"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombrePacket($tipo)
{
	global $con;

	$query_ConsultaFuncion = sprintf("SELECT package_name FROM package WHERE id_package = %s ",
	GetSQLValueString($tipo, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["package_name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function GetPacket($GetPacket)
{
	if ($GetPacket == 1) return "Bronspaket";
	if ($GetPacket == 2) return "Silverpaket";
	if ($GetPacket == 3) return "Guldpaket";
	if ($GetPacket == 4) return "VIP-paket";
	if ($GetPacket > 4) return "VIP PLUS";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function status($status)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT status FROM students WHERE id_student = %s ",
		 GetSQLValueString($status, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["status"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function statusBinario($statusB)
{
	if ($statusB == 1) return "Aktiv";
	else return "Inaktiv";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function publicationsSite($site)
{
	if ($site == 1) return "Important"; 
	if ($site == 2) return "Publication";
	if ($site == 3) return "Releases";
	if ($site == 4) return "PR Publication";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function rank($rank)
{
	if ($rank == 0) return "Admin *";
	if ($rank == 1) return "Admin"; 
	if ($rank == 2) return "Editor";
	if ($rank == 3) return "Teacher/Author";
	if ($rank == 4) return "Volunteer/Contributor";
	if ($rank == 5) return "Subscriber";
	//Admin * – somebody with access to the site network administration features and all other features. See the Create a Network article.
	//Administrator (slug: ‘administrator’) – somebody who has access to all the administration features within a single site.
	//Editor (slug: ‘editor’) – somebody who can publish and manage posts including the posts of other users.
	//Author  (slug: ‘author’)  – somebody who can publish and manage their own posts.
	//Contributor (slug: ‘contributor’) – somebody who can write and manage their own posts but cannot publish them.
	//Subscriber (slug: ‘subscriber’) – somebody who can only manage their profile.
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function month($mes)
{
	if ($mes == 1) return "Jan";
	if ($mes == 2) return "Feb";
	if ($mes == 3) return "Mar";
	if ($mes == 4) return "Apr";
	if ($mes == 5) return "May";
	if ($mes == 6) return "Jun";
	if ($mes == 7) return "Jul";
	if ($mes == 8) return "Aug";
	if ($mes == 9) return "Sept";
	if ($mes == 10) return "Oct";
	if ($mes == 11) return "Nob";
	if ($mes == 12) return "Dec";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreStudent($nombreS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT name FROM students WHERE id_student = %s ",
		 GetSQLValueString($nombreS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerApellidoStudent($apellidoS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT surname FROM students WHERE id_student = %s ",
		 GetSQLValueString($apellidoS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["surname"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerTelefonoStudent($telefonoS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT telephone FROM students WHERE id_student = %s ",
		 GetSQLValueString($telefonoS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["telephone"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerEmailStudent($emailS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT email FROM students WHERE id_student = %s ",
		 GetSQLValueString($emailS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["email"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNumeroPStudent($numeroPS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT personal_number FROM students WHERE id_student = %s ",
		 GetSQLValueString($numeroPS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["personal_number"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerAdressStudent($Adress)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT adress FROM students WHERE id_student = %s ",
		 GetSQLValueString($Adress, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["adress"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPostStudent($Post)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT post FROM students WHERE id_student = %s ",
		 GetSQLValueString($Post, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["post"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCityStudent($City)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT city FROM students WHERE id_student = %s ",
		 GetSQLValueString($City, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["city"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function sex($sex)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT sex FROM students WHERE id_student = %s ",
		 GetSQLValueString($sex, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["sex"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function sexfilter($sexF)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT * FROM students WHERE id_student = %s and sex='Kvinna' ",
// 		 GetSQLValueString($sexF, "int"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	return $row_ConsultaFuncion["sex"];	
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function statusS($statusS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT status FROM students WHERE id_student = %s ",
		 GetSQLValueString($statusS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["status"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function OptenerPaqueteEnLista($Paquete)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE transaction_made = %s ",
		 GetSQLValueString($Paquete, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	if ($totalRows_ConsultaFuncion == 1) return "Bronspaket";
	if ($totalRows_ConsultaFuncion == 2) return "Silverpaket";
	if ($totalRows_ConsultaFuncion == 3) return "Guldpaket";
	if ($totalRows_ConsultaFuncion == 4) return "VIP-Paket";
	if ($totalRows_ConsultaFuncion > 4) return "VIP PLUS";
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function Mesabreviado($varmesabrev)
{
	if ($varmesabrev == 1) return "JAN";
	if ($varmesabrev == 2) return "FEB";
	if ($varmesabrev == 3) return "MAR";
	if ($varmesabrev == 4) return "APR";
	if ($varmesabrev == 5) return "MAJ";
	if ($varmesabrev == 6) return "JUN";
	if ($varmesabrev == 7) return "JUL";
	if ($varmesabrev == 8) return "AUG";
	if ($varmesabrev == 9) return "SEP";
	if ($varmesabrev == 10) return "OCT";
	if ($varmesabrev == 11) return "NOV";
	if ($varmesabrev == 12) return "DEC";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function NombreCurso($varcurso)
{
	if ($varcurso == 1) return "Nybörjare";
	if ($varcurso == 2) return "Steg 2";
	if ($varcurso == 3) return "Steg 3";
	if ($varcurso == 4) return "Steg 4";
	if ($varcurso == 5) return "Open level";
	if ($varcurso == 6) return "";
	if ($varcurso == 7) return "Private class";
	if ($varcurso == 8) return "Nybörjare/Open level";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function NombreCursoColor($varcursocolor)
{
	if ($varcursocolor == 1) return "#97d1f7";
	if ($varcursocolor == 2) return "#2a86d1";
	if ($varcursocolor == 3) return "rgb(250, 211, 103)";
	if ($varcursocolor == 4) return "rgb(253, 173, 0)";
	if ($varcursocolor == 5) return "rgb(240, 121, 100)";
	if ($varcursocolor == 6) return "rgb(160, 72, 57)";
	if ($varcursocolor == 7) return "linear-gradient(to right, #999, #CCC, #999)";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ConfirmacionPago($Paid, $now)
{
	global $con;
		$updateSQL = sprintf("UPDATE inscriptions SET done=%s WHERE id_student=%s AND date=%s",
			$Paid,
			$_SESSION["ydl_UserId"],
			$now);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
	}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function TerminStop($stop, $datenow)
{
	global $con;
		$updateSQL = sprintf("UPDATE term SET status=%s WHERE status=1 AND term_stop<%s",
			$stop,
			$datenow);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function studentInactiv($stopactiv, $datenow2)
{
	global $con;
		$updateSQL = sprintf("UPDATE inscriptions SET status=%s WHERE status=1 AND term_stop<%s",
			$stopactiv,
			$datenow2);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
	}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function categorianivel($padre)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM pages WHERE name!='' AND padre = %s",
	GetSQLValueString($padre, "int"));
	
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	if ($totalRows_ConsultaFuncion > 0) {
		do {
			?> 
		<div class="sub_cat">
			<ul>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_ConsultaFuncion['name']?></li>
			</ul>
		</div>
	<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function divelement($padre2)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM pages WHERE padre2 = %s",
	GetSQLValueString($padre2, "int"));
	
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	$rwidth = $row_ConsultaFuncion['width']-$row_ConsultaFuncion['mleft']-$row_ConsultaFuncion['mright'];
	
		if ($totalRows_ConsultaFuncion > 0) {
		do {
		?>
		<?php
		$rwidth = $row_ConsultaFuncion['width']-$row_ConsultaFuncion['mleft']-$row_ConsultaFuncion['mright'];
		$rheight = $row_ConsultaFuncion['height']-$row_ConsultaFuncion['mtop']-$row_ConsultaFuncion['mbottom'];
		?>
		<div style="width:<?php echo $rwidth; ?>%; height:<?php echo $rheight; ?>px; box-shadow:<?php echo $row_ConsultaFuncion['shadow']; ?>; background:<?php echo $row_ConsultaFuncion['background']; ?>; <?php echo $row_ConsultaFuncion['border']; ?>:<?php echo $row_ConsultaFuncion['borderpx']; ?>px solid <?php echo $row_ConsultaFuncion['border_color']; ?>; border-radius:<?php echo $row_ConsultaFuncion['radius']; ?>px; margin:0.5% 0; margin-top:<?php echo $row_ConsultaFuncion['mtop']; ?>px; margin-right:<?php echo $row_ConsultaFuncion['mright']; ?>%; margin-bottom:<?php echo $row_ConsultaFuncion['mbottom']; ?>px; margin-left:<?php echo $row_ConsultaFuncion['mleft']; ?>%; float:left; overflow:hidden;">
			<div class="arternative" style="margin:0 5px 1px;">
				<button class="ele2btn">o o o</button>
				<div class="arternative-content">
					<a href="element_add.php?ele2id=<?php echo $row_ConsultaFuncion['id_page']; ?>" class="alt_button">Add Element</a>
					<a href="page_edit.php?bdivid=<?php echo $row_DatosPage['id_page']; ?>" class="alt_button">Edit Div</a>
					<a href="page_delete.php?DeleteEDivID=<?php echo $row_DatosPage['id_page']; ?>" class="alt_button">Delete</a>
				</div>
			</div>
			<div style="width:99%; height:100px; background-color:green; margin:0 auto; 1.5px">
			</div>
			<?php echo $rwidth; ?>
		</div>
		<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////


function comprobarpromocode($promocode)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT code FROM discount WHERE code = %s ",
		 GetSQLValueString($promocode, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPDescuento($Pdescuento)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT percent FROM pack_discount WHERE valor = %s ",
		 GetSQLValueString($Pdescuento, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["percent"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerGift($gift)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT gift FROM discount WHERE code = %s ",
		 GetSQLValueString($gift, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["gift"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ActualizacionCarrito($Inscription)
{
	global $con;
		$updateSQL = sprintf("UPDATE cart SET transaction_made=%s WHERE id_student=%s AND transaction_made= 0",
			$Inscription,
			$_SESSION["ydl_UserId"]);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ConfirmationPago($ano, $mes, $dia, $hora, $sex, $Termin, $TerminStart, $TerminStop, $Package, $total)
{
	global $con;
	
	$insertSQL = sprintf("INSERT INTO inscriptions (date, year, month, day, time, id_student, sex, term, term_start, term_stop, package, payment, status, total) 
									VALUES (NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
									 GetSQLValueString($ano, "text"),
									 GetSQLValueString($mes, "int"),
									 GetSQLValueString($dia, "text"),
									 GetSQLValueString($hora, "text"),
									 GetSQLValueString($_SESSION["ydl_UserId"], "int"),
									 GetSQLValueString($sex, "text"),
									 GetSQLValueString($Termin, "text"),
									 GetSQLValueString($TerminStart, "text"),
									 GetSQLValueString($TerminStop, "text"),
									 GetSQLValueString($Package, "text"),
									 1,
									 1,
									 GetSQLValueString($total, "text"));
	//echo $insertSQL;
	$Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
	$ultimacompra = mysqli_insert_id($con);
	ActualizacionCarrito($ultimacompra);
	
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ActualizacionCarrito2($Inscription2, $studentadmin)
{
	global $con;
		$updateSQL = sprintf("UPDATE cart SET transaction_made=%s WHERE id_student=%s AND transaction_made= 0",
			$Inscription2,
			$studentadmin);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
	}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ConfirmationDone($ano, $mes, $dia, $hora, $studentadmin, $sexadmin, $Termin, $TerminStart, $TerminStop, $Package, $total)
{
	global $con;
	
	$insertSQL = sprintf("INSERT INTO inscriptions (date, year, month, day, time, id_student, sex, term, term_start, term_stop, package, payment, total) 
									VALUES (NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
									 GetSQLValueString($ano, "text"),
									 GetSQLValueString($mes, "int"),
									 GetSQLValueString($dia, "text"),
									 GetSQLValueString($hora, "text"),
									 GetSQLValueString($studentadmin, "int"),
									 GetSQLValueString($sexadmin, "text"),
									 GetSQLValueString($Termin, "text"),
									 GetSQLValueString($TerminStart, "text"),
									 GetSQLValueString($TerminStop, "text"),
									 GetSQLValueString($Package, "text"),
									 1,
									 GetSQLValueString($total, "text"));
	//echo $insertSQL;
	$Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
	$ultimacompra = mysqli_insert_id($con);
	ActualizacionCarrito2($ultimacompra, $studentadmin);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerTransaccion($trans)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s ",
		 GetSQLValueString($trans, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["transaction_made"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerIDstudentDesdeTransaccion($transE)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE id_insc = %s",
		 GetSQLValueString($transE, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_student"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function obtenerTerminActivo($terminActiv, $termStatus)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM term WHERE term_stop = %s AND status = %s ORDER BY id_term DESC ",
		 GetSQLValueString($terminActiv, "text"),
		 GetSQLValueString($termStatus, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function terminCaducado($statusTerm)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM term WHERE status = %s ORDER BY id_term ASC ",
		 GetSQLValueString($statusTerm, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return false;
	else return true;	
	
	mysqli_free_result($ConsultaFuncion);
}
?>








<style>
	.sub_cat {
		text-align: left;
		font-size: 14px;
	}
	.sub_cat ul {
		width: 100%;
		margin: 0;
		padding: 0;
	}
	.sub_cat ul li {
		background-color: #CCC;
		padding: 20px;
		color: #666;
	}
	.sub_cat ul li:hover {
		background-color: #0F1E41;
		color: #FFF;
	}
</style>