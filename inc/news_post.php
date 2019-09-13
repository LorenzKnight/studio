<?php
$query_DatosPublications = sprintf("SELECT * FROM publications WHERE site= 1 ORDER BY position ASC");
$DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
$row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
$totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space">
<?php if ($row_DatosPublications > 0) { 
        do { ?>
<div class="newspost">
    <div style="float: left; flex: 1; ">
        <img src="../img/news/<?php echo $row_DatosPublications['foto']; ?>" alt="" id="" height="100%">
    </div>
    <div style="float: left; flex: 1; padding: 10px 20px;">
        <h3><?php echo $row_DatosPublications['title']; ?></h3>
        <p><?php echo $row_DatosPublications['content']; ?></p>
    </div>
</div>
<?php } while ($row_DatosPublications = mysqli_fetch_assoc($DatosPublications));
        }
        else
        { ?>
        No record to show.
        <?php }  ?>
</div>