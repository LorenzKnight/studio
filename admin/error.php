<?php require_once('../connections/conexion.php');?>
<html>
<head>
<meta charset="iso-8859-1">
<title>Studio</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />

</head>
<body>
<?php if ($_GET["error"] == 1) { ?>
    <div class="error">
            <table width="100%" align="center" cellspacing="0">
                <tr>
                    <td style="" colspan="6" height="20" align="center" valign="middle">
                        <h2>Error</h2>
                    </td>      
                </tr>
                <tr valign="baseline">
                    <td style="padding:0 0 20px;" colspan="6" valign="middle" align="center">
                        <p>Felaktigt mail eller lösenord<br/>
                        försök igen.</p>
                    </td>
                </tr>
                <tr valign="baseline" height="60">
                    <td style="padding-bottom:10px;" nowrap="nowrap" align="center">
                        <!-- <input style="padding: 10px 60px;" type="button" class="button_in" value="TILLBAKA" onclick="history.back()"/> -->
                        <a href="index.php"><input style="padding: 10px 60px;" type="button" class="button_in" value="TILLBAKA"/></a>
                    </td>
                </tr>
                <tr valign="baseline" height="20">
                    <td style="font-size: 12px; padding-bottom:10px;" nowrap="nowrap" align="center">
                        <!-- Powered by:<br>
                        <a href="http://lorenzknight.com/">www.lorenzknight.com</a>-->
                    </td>
                </tr> 
            </table>
    </div>
<?php } ?>
</body>
</html>