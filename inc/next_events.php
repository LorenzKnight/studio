<?php
    $query_DatosPrio = sprintf("SELECT * FROM events WHERE prio= 1 ORDER BY date ASC");
    $DatosPrio = mysqli_query($con, $query_DatosPrio) or die(mysqli_error($con));
    $row_DatosPrio = mysqli_fetch_assoc($DatosPrio);
    $totalRows_DatosPrio = mysqli_num_rows($DatosPrio);
?>
<?php
    if ($totalRows_DatosPrio > 0) {
        $query_DatosPublications = sprintf("SELECT * FROM events WHERE prio= 1 AND status= 1 ORDER BY date ASC");
    } else {
        $query_DatosPublications = sprintf("SELECT * FROM events WHERE status= 1 ORDER BY date ASC");
    }
        $DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
        $row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
        $totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space" style="display:<?php if($totalRows_DatosPublications == 0) { ?>none;<?php } else { ?>block<?php } ?>">
    <div class="wrapp-event">
        <h1 style="text-align:center; margin:0 0 10px; padding:0;"><span style="color:#999; font-size:28px;">Snart:</span> <?php echo $row_DatosPublications['name']; ?></h1>
        <p style="text-align:center; margin:0 0 10px; padding:0;">- <?php echo $row_DatosPublications['date']; ?> -</p>
        <a href="<?php echo $row_DatosPublications['link']; ?>" target="_blank">
            <div class="event_content">
                <img src="img/news/<?php echo $row_DatosPublications['foto']; ?>" width="130%">
            </div>
        </a>
    </div>
</div>