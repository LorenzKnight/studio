<?php
$variable_Consulta = "0";
if (isset($VARIABLE)) {
  $variable_Consulta = $VARIABLE;
}

$query_DatosSite = sprintf("SELECT * FROM site_info"); 
$DatosSite = mysqli_query($con, $query_DatosSite) or die(mysqli_error($con));
$row_DatosSite = mysqli_fetch_assoc($DatosSite);
$totalRows_DatosSite = mysqli_num_rows($DatosSite);
?>
<div class="foot">
    <div class="foot_case">
        <div class="social">
            <div class="icon">
                <a href="https://www.facebook.com/YandaliDanceStudio/" target="_blank"><img src="/img/icon/fb.svg" class="social_icon"></a>
            </div>
            <div class="icon">
                <a href="https://www.instagram.com/yandalistudio/" target="_blank"><img src="/img/icon/ig.svg" class="social_icon"></a>
            </div>
            <!-- <div class="icon">
                <a href="#" target="_blank"><img src="/img/icon/yt.svg" class="social_icon"></a>
            </div> -->
        </div>
        <div class="adress">
            <div class="adress_text">
            <p><?php echo $row_DatosSite['name']; ?><br>
            <br>
            <?php echo $row_DatosSite['adress']; ?>,<br>
            <?php echo $row_DatosSite['post']; ?> <?php echo $row_DatosSite['city']; ?><br>
            <br>
            <?php echo $row_DatosSite['email']; ?></p>
            </div>
        </div>
        <div class="map">
            <div class="logo">
                <a href="index.php"><img src="img/yandali_dance_studio.svg" width="" height="70%" style="margin: 0 auto;"></a>
            </div>
        </div>
    </div>
</div>
<div class="site_bottom">
    <p>Powered by:</p>
    <p><a href="www.lorenzknight.com" target="_blank">www.lorenzknight.com</a></p>
    <p>& <a href="www.heycommunication.com" target="_blank">Hey Communication</a></p>
    <p>All Rights Reserved <?php echo date("Y"); ?></p>
</div>