<div class="user_div">
    <div class="space">
        <div class="settings_cnt">
            <?php if($_GET["eleid"]):?>
            <div style="width:96%; height:400px; overflow:auto; margin:10 2%; <?php echo $row_DatosPage['border'];?>:<?php echo $row_DatosPage['borderpx'];?>px solid <?php echo $row_DatosPage['border_color'];?>; background-color:<?php echo $row_DatosPage['background'];?>; position:relative; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;">
                
            </div>
            <?php endif ?>
            <?php if($_GET["ele2id"]):?>
            <?php
            $rwidth = $row_DatosPage2['width']-$row_DatosPage2['mleft']-$row_DatosPage2['mright'];
            $rheight = $row_DatosPage2['height']-$row_DatosPage2['mtop']-$row_DatosPage2['mbottom'];
            ?>
            <div style="width:96%; min-height:400px; overflow:auto; margin:10 2%; background-color:<?php echo $row_DatosPadre2['background'];?>; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;">
                <div style="width:<?php echo $rwidth;?>%; height:<?php echo $row_DatosPage2['height'];?>px; background-color:<?php echo $row_DatosPage2['background'];?>; margin:0.5% 0; margin-left:<?php echo $row_DatosPage2['mleft'];?>%; margin-right:<?php echo $row_DatosPage2['mright'];?>%; margin-top:<?php echo $row_DatosPage2['mtop'];?>px; margin-bottom:<?php echo $row_DatosPage2['mbottom'];?>px; border-radius:<?php echo $row_DatosPage2['radius'];?>px; box-shadow:0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;">
                </div>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>
    