<!-- <script src="../js/script_front.js"></script> -->
<div class="head">
    <div class="logo">
        <a href="index.php"><img src="img/yandali_dance_studio.svg" width="" height="70%" style="margin: 0 auto;"></a>
    </div>
    <div id="menu">
        <ul>
            <li><a href="contact" <?php if ($menuactive == 4) { ?> class="active" <?php }?>>kontakt</a></li>
            <li><a href="about" <?php if ($menuactive == 5) { ?> class="active" <?php }?>>om oss</a></li>
            <!--<li><a href="#">nyheter</a></li>-->
            <!--<li><a href="events.php" <?php if ($menuactive == 6) { ?> class="active" <?php }?>>Events</a></li>-->
            <li><a href="schemma" <?php if ($menuactive == 3) { ?> class="active" <?php }?>>schema</a></li>
            <li><a href="registration" <?php if ($menuactive == 2) { ?> class="active" <?php }?>>priser & anmälan</a></li>
            <li><a href="index" <?php if ($menuactive == 1) { ?> class="active" <?php }?>>Hem</a></li>
            <!--<li><a href="inc/logout.php">Log out <?php echo $_SESSION['ydl_UserId']; ?></a></li>-->
        <ul>
    </div>
</div>