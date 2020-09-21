<!-- <script src="../js/script_front.js"></script> -->
<div class="head">
    <div class="logo">
        <a href="index.php"><img src="img/loops_dance_studio.svg" width="" height="90%" style="margin: 0 auto;"></a>
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

    <div class="config_m">
        <ul>
            <li>
                <a href="#"><img class="photo" src="img/icon/mini_menu.png" alt="" height="120px" style="margin-right:30px;"></a>
                <div class="dropdown-config-content">
                    <ul>
                        <li><a href="index">Hem</a></li>
                        <li><a style="border-top: 1px solid #333;" href="registration">Priser & anmälan</a></li>
                        <li><a style="border-top: 1px solid #333;" href="schemma">Schema</a></li>
                        <li><a style="border-top: 1px solid #333;" href="about" >Om oss</a></li>
                        <li><a style="border-top: 1px solid #333;" href="contact" >Kontakt</a></li>
                    </ul>
                </div>
            </li>
            <!-- <li><a href="">Config</a></li> -->
        </ul>
    </div>
</div>