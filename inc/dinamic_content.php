<?php
 $query_DatosUnderSiteDiv = sprintf("SELECT * FROM pages WHERE padre=%s", GetSQLValueString($_GET["recordID"], "int")); 
 $DatosUnderSiteDiv = mysqli_query($con, $query_DatosUnderSiteDiv) or die(mysqli_error($con));
 $row_DatosUnderSiteDiv = mysqli_fetch_assoc($DatosUnderSiteDiv);
 $totalRows_DatosUnderSiteDiv = mysqli_num_rows($DatosUnderSiteDiv);
?>
<div class="space">
    <?php if ($totalRows_DatosUnderSiteDiv > 0) {
    do { ?>

    <div style="width:100%; height:500px; <?php echo $row_DatosUnderSiteDiv['border'];?>:<?php echo $row_DatosUnderSiteDiv['borderpx'];?>px solid <?php echo $row_DatosUnderSiteDiv['border_color'];?>; background-color:<?php echo $row_DatosUnderSiteDiv['background'] ?>; color:<?php echo $row_DatosUnderSiteDiv['color'] ?>;">
    </div>

    <?php } while ($row_DatosUnderSiteDiv = mysqli_fetch_assoc($DatosUnderSiteDiv));
    }
    ?>
</div>