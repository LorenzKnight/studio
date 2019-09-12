<div class="head">
    <?php include("inc/menu.php"); ?>
    <div class="config_m">
        <ul>
            <!--<li><a href="">Config</a></li>-->
            <li><a href="inc/logout.php">Log out</a></li>
            <li><a href="">
            <?php
            if ((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
            {
                echo ObtenerNombreUsuario($_SESSION['std_UserId']);
                echo " ". ObtenerApellidoUsuario($_SESSION['std_UserId']);
            }
            else
            { ?>
                No User...
            <?php } ?>
            </a></li>
        </ul>
    </div>
</div>