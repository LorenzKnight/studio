<div class="head">
    <div class="logo">
        <img src="img/yandali.png" width="" height="70%" style="margin: 0 auto;"> 
    </div>
    <div id="menu">
        <ul>
            <li><a href="contact.php"<?php if ($menuactive == 4) { ?> class="active" <?php }?>>kontakt</a></li>
            <!--<li><a href="#">om skolan</a></li>-->
            <!--<li><a href="#">nyheter</a></li>-->
            <li><a href="schemma.php"<?php if ($menuactive == 3) { ?> class="active" <?php }?>>schemma</a></li>
            <li><a href="price_registration.php"<?php if ($menuactive == 2) { ?> class="active" <?php }?>>priser & anmälan</a></li>
            <!--<li><a href="courses.php">kurser</a></li>-->
            <li><a href="index.php"<?php if ($menuactive == 1) { ?> class="active" <?php }?>>Hem</a></li>
        <ul>
    </div>
</div>