<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Upload Imagen</title>
</head>

<body>

<?php if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "form1")) {
	$nombre_archivo = $_FILES['userfile']['name'];
	$random_digit = rand(0000,9999);
	$new_file_name = $random_digit.$nombre_archivo;	
	move_uploaded_file($_FILES['userfile']['tmp_name'],"../documentos/news/".$new_file_name);
	
	?>
    <script>
		opener.document.form1.image.value="<?php echo $new_file_name; ?>";
		self.close();
	</script>
    <?php
}
else
{?>


<form action="gestionimagen.php" method="post" enctype="multipart/form-data" id="form1">

  <p>
    <input name="userfile" type="file" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Upload image" />
  </p>
  <input type="hidden" name="enviado" value="form1" />
</form>
<?php
}
?>
</body>
</html>