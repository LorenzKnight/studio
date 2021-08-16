<?php
$query_DatosPublications = sprintf("SELECT * FROM publications WHERE site= 2 AND status= 1 ORDER BY id_publications DESC LIMIT 4");
$DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
$row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
$totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space">
    <div class="box_position_2">
        <?php if ($row_DatosPublications > 0) { 
                do { ?>
        <div class="box_2">
            <div class="foto_box_2">
                <a href=""><img style="left: -<?php echo $row_DatosPublications['settings']; ?>px;" src="img/news/<?php echo $row_DatosPublications['foto']; ?>" height="100%" width=""></a>
            </div>
            <div class="text_box_2">
                

                    <?php 
                    $texto= $row_DatosPublications['content'];
                    if (strlen($texto) > 0) {
                    $texto = substr($texto,0,450).'';
                    print '<p>'.$texto.'</p>';
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