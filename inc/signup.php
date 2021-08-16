<?php
    $query_DatosPubInfo = sprintf("SELECT * FROM publications WHERE site = 3 AND status = 1 ORDER BY id_publications ASC LIMIT 4");
    $DatosPubInfo = mysqli_query($con, $query_DatosPubInfo) or die(mysqli_error($con));
    $row_DatosPubInfo = mysqli_fetch_assoc($DatosPubInfo);
    $totalRows_DatosPubInfo = mysqli_num_rows($DatosPubInfo);
?>
<div class="signup_div">
    <div class="signup_info">
        <?php if ($row_DatosPubInfo > 0) { 
                do { ?>
        <div class="post_content">
            <?php if($row_DatosPubInfo['more'] == 1){ ?>
                <P><?php 
                    $texto = $row_DatosPubInfo['content'];
                    if (strlen($texto) > 5) {
                    $texto = substr($texto,0,600).' ...';
                    print '<div class="text_cont">'.$texto.'</div>';
                ?></p>
                <?php } ?>
                <br>
                <a href="details.php?id=<?php echo $row_DatosPubInfo['id']; ?>" style="color: red; text-decoration: underline;">läs mer</a>
            <?php }else{ ?>
                <p><?php echo $row_DatosPubInfo['content']; ?></p>
            <?php } ?>
        </div>
        <?php } while ($row_DatosPubInfo = mysqli_fetch_assoc($DatosPubInfo));
        }
        else
        { ?>
        <div class="text_cont">No record to show.</div>
        <?php }  ?>
    </div>
    <div class="signup_graf">
        <div class="foto_frame">
            <div class="foto_frame_2"></div>
        </div>
        
    </div>
</div>