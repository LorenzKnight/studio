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
	
	$query_ConsultaFuncion = sprintf("SELECT email FROM users WHERE email = %s ",
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

function packet2($packet, $currentPacket)
{
	if ($packet >= $currentPacket) return "initial";
	return "none";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function SendMailHtml($destinatario, $contenido, $asunto)
{
	$mensaje = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><img src="img/yandali.png" width="" height="65" /></td>
  </tr>
  <tr>
    <td><p>Estimado Cliente: <br><br></p>
    <p>'; 
	$mensaje.= $contenido;
	$mensaje.='</p><br><br></td>
  </tr>
  <tr>
	<td>
		Tack för att vara en del av denna termin!<br><br>
		har du nån fråga? maila oss på:<br>
		<a href="mailto:info@yandali.se">info@yandali.se</a>
	</td>
  </tr>
</table>
</body>
</html>';

	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$cabeceras  = 'MIME-Version: 1.0' . "\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
	// Cabeceras adicionales
	$cabeceras .= 'From: info@yandali.se' . "\n";
	$cabeceras .= 'Bcc: info@yandali.se' . "\n";
	
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

function status($status)
{
	if ($status == 1) return "Active";
	return "Inactive";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function rank($rank)
{
	if ($rank == 0) return "Super Admin";
	if ($rank == 1) return "Admin";
	if ($rank == 2) return "Editor";
	if ($rank == 3) return "Contributor";
	//Super Admin – somebody with access to the site network administration features and all other features. See the Create a Network article.
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
	if ($varcurso == 1) return "Beginning 1";
	if ($varcurso == 2) return "Beginning 2";
	if ($varcurso == 3) return "Intermediate 1";
	if ($varcurso == 4) return "Intermediate 2";
	if ($varcurso == 5) return "Advance 1";
	if ($varcurso == 6) return "Advance 2";
	if ($varcurso == 7) return "Private class";
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

	if ($totalRows_ConsultaFuncion > 0) {
		do {
			?> 
		<div style="width:<?php echo $row_ConsultaFuncion['width']; ?>%; height:<?php echo $row_ConsultaFuncion['height']; ?>px; margin:0.5% 0.5%; background:<?php echo $row_ConsultaFuncion['background']; ?>; float:left;">
			aqui! aqui! aqui! aqui!
		</div>
	<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}
?>
<style>
	/* .sub_cat{
		width: 100%;
		padding: 10px;
		background-color: #CCC;
		color: #666;
		font-size: 12px;
		display:;
	} */
	

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