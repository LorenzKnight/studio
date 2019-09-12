<?php
$query_DatosPublications = sprintf("SELECT * FROM publications WHERE site= 1 ORDER BY position ASC LIMIT 4");
$DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
$row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
$totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space">
    <?php if ($row_DatosPublications > 0) { 
            do { ?>
    <div class="box_1">
        <div class="foto_box_1">
            <a href=""><img style="left: <?php echo $row_DatosPublications['settings']; ?>px;" src="img/news/<?php echo $row_DatosPublications['foto']; ?>" height="100%" width=""></a>
        </div>
        <div class="text_box_1">
            <h3><?php echo $row_DatosPublications['title']; ?></h3>
            <p><?php echo $row_DatosPublications['content']; ?></p>
            <br>
            <a href="">see more</a>
        </div>
    </div>
    <?php } while ($row_DatosPublications = mysqli_fetch_assoc($DatosPublications));
        }
        else
        { ?>
        No record to show.
        <?php }  ?>
</div>