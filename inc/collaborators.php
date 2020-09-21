<?php
$query_DatosPublications = sprintf("SELECT * FROM collaborators WHERE status= 1 ORDER BY position DESC");
$DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
$row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
$totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space_2">
    <h3 style="text-transform:uppercase; margin:0 0 50px;">Lära känna våra lärare</h3>
    <div class="box_position">
        
        <?php if ($row_DatosPublications > 0) { 
                do { ?>
        <div class="box_1">
            <div class="foto_box_1">
                <a href=""><img style="left: -<?php echo $row_DatosPublications['settings']; ?>px;" src="img/news/<?php echo $row_DatosPublications['foto']; ?>" height="100%" width=""></a>
            </div>
            <div class="text_box_1">
                <h3 style="margin:2px 0 8px;"><?php echo $row_DatosPublications['title']; ?></h3>

                    <?php 
                    $texto= $row_DatosPublications['content'];
                    if (strlen($texto) > 0) {
                    $texto = substr($texto,0,700).'';
                    print '<div class="text_cont">'.$texto.'</div>';
                    ?>
                    <?php
                    }
                    ?>
                <br>
                <!-- <a href="">see more</a> -->
            </div>
        </div>
        <?php } while ($row_DatosPublications = mysqli_fetch_assoc($DatosPublications));
            }
            else
            { ?>
            <div class="text_cont">No record to show.</div>
            <?php }  ?>
    </div>
</div>