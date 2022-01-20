<?php
define('ProPayPal', 0);
if(ProPayPal){
	define("PayPalClientId",  $row_DatosPagina['paypal_client_id']);
	define("PayPalSecret", $row_DatosPagina['paypal_secret']);
	define("PayPalBaseUrl", "https://api.paypal.com/v1/");
	define("PayPalENV", "production");
} else {
	define("PayPalClientId",  $row_DatosPagina['paypal_client_id']);
	define("PayPalSecret", $row_DatosPagina['paypal_secret']);
	// define("PayPalClientId", "AVACP5vOuQheKwTdBy_tlt2CY3g9CT4NAK3D8j3gEpMIpiO79WuRXaGi--I1ycXOhlaTfzXauydINNoS");
	// define("PayPalSecret", "EMA6lVCQBJ20WMKOj93Z-M3t9cB5_sq0lV3AZgB0eu8pX2PKuFAsHus87bz3N6EdVyVmfyX1B3QqsEHG");
	define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
	define("PayPalENV", "sandbox");
}
?>
<?php //echo $row_DatosPagina['paypal_client_id']; ?>