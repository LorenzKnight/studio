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
            <?php if($row_DatosSite['facebook'] != "") { ?>
            <div class="icon">
                <a href="<?php echo $row_DatosSite['facebook']; ?>" target="_blank"><img src="/img/icon/fb.svg" class="social_icon"></a>
            </div>
            <?php } ?>
            <?php if($row_DatosSite['instagram'] != "") { ?>
            <div class="icon">
                <a href="<?php echo $row_DatosSite['instagram']; ?>" target="_blank"><img src="/img/icon/ig.svg" class="social_icon"></a>
            </div>
            <?php } ?>
            <?php if($row_DatosSite['youtube'] != "") { ?>
            <div class="icon">
                <a href="<?php echo $row_DatosSite['youtube']; ?>" target="_blank"><img src="/img/icon/yt.svg" class="social_icon"></a>
            </div>
            <?php } ?>
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
                <a href="index.php"><img src="img/loops_dance_studio.svg" width="" height="30%" style="margin: 25% 0 25% 50px;"></a>
        </div>
    </div>
</div>
<div class="site_bottom">
    <p>All Rights Reserved <?php echo date("Y"); ?></p>
</div>