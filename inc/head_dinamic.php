<?php
 $query_DatosUnderSite = sprintf("SELECT * FROM pages WHERE padre = 0 ORDER BY id_page"); 
 $DatosUnderSite = mysqli_query($con, $query_DatosUnderSite) or die(mysqli_error($con));
 $row_DatosUnderSite = mysqli_fetch_assoc($DatosUnderSite);
 $totalRows_DatosUnderSite = mysqli_num_rows($DatosUnderSite);
?>
<div class="head">
    <div class="logo">
        <a href="index.php"><img src="img/yandali_dance_studio.svg" width="" height="70%" style="margin: 0 auto;"></a>
    </div>
    <div id="menu">
        <ul>
            <?php
            if ($totalRows_DatosUnderSite > 0) {
            do { ?>
                <li><a href="undersite.php?recordID=<?php echo $row_DatosUnderSite['id_page'];?>"><?php echo $row_DatosUnderSite['name']; ?></a></li>
            <?php } while ($row_DatosUnderSite = mysqli_fetch_assoc($DatosUnderSite));
            }
            ?>
            <li><a href="index.php"<?php if ($menuactive == 1) { ?> class="active" <?php }?>>Hem</a></li>
        <ul>
    </div>
</div>