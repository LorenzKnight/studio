<?php
 $query_DatosPage = sprintf("SELECT * FROM pages WHERE level=0 AND padre!='' AND id_page=%s", GetSQLValueString($_GET["bdivid"], "int"));
 $DatosPage = mysqli_query($con, $query_DatosPage) or die(mysqli_error($con));
 $row_DatosPage = mysqli_fetch_assoc($DatosPage);
 $totalRows_DatosPage = mysqli_num_rows($DatosPage);
?>
<div class="user_div">
    <div class="space">
        <div class="settings_cnt">
            <?php if($_GET["bdivid"]):?>
            <div style="width:96%; height:400px; overflow:auto; margin:10 2%; <?php echo $row_DatosPage['border'];?>:<?php echo $row_DatosPage['borderpx'];?>px solid <?php echo $row_DatosPage['border_color'];?>; background-color:<?php echo $row_DatosPage['background'];?>; position:relative; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;">
            </div>
            <?php endif ?>
        </div>
    </div>
</div>
    