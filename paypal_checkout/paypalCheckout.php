<?php require_once('connections/conexion.php');?>
<?php
	$query_DatosReg = sprintf("SELECT * FROM inscriptions WHERE id_student=%s ORDER BY id_insc DESC",
			GetSQLValueString($_SESSION['ydl_UserId'], "int"));
	$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
	$row_DatosReg = mysqli_fetch_assoc($DatosReg);
	$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<div id="paypal-button-container"></div>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
  env: '<?php echo PayPalENV; ?>',
  client: {
	<?php if(ProPayPal) { ?>  
	production: '<?php echo PayPalClientId; ?>'
	<?php } else { ?>
	sandbox: '<?php echo PayPalClientId; ?>'
	<?php } ?>	
  },
  payment: function (data, actions) {
	return actions.payment.create({
	  transactions: [{
		amount: {
		  total: '<?php echo $productPrice; ?>',
		  currency: '<?php echo $currency; ?>'
		}
	  }]
	});
  },
  onAuthorize: function (data, actions) {
	return actions.payment.execute()
	  .then(function () {
		// window.location = "/paypal-php-integracion-con-ejemplo-completo/orderDetails.php?paymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&pid=<?php echo $productId; ?>";
		window.location = "reg_done.php?control=<?php echo $row_DatosReg["id_student"]; ?>&paymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&pid=<?php echo $productId; ?>";
	  });
  }
}, '#paypal-button');
</script>