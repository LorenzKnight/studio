<style>
    .warnings{
        width: 100%;
        overflow: auto;
        display: flex;
        background-color: #ec7571;
        /* border-left: 20px solid #d8413c; */
    }
    .signals{
        width: 100px;
    }
    .warning_msn{
        flex: 1;
        padding: 10px;
        font-size: 14px;
        color: #000;
    }
</style>
<?php
    $query_DatosWarnings = sprintf("SELECT * FROM publications WHERE site = 1 AND status = 1 ORDER BY id_publications ASC");
    $DatosWarnings = mysqli_query($con, $query_DatosWarnings) or die(mysqli_error($con));
    $row_DatosWarnings = mysqli_fetch_assoc($DatosWarnings);
    $totalRows_DatosWarnings = mysqli_num_rows($DatosWarnings);
?>
<?php if($totalRows_DatosWarnings != "" || $row_DatosWarnings["status"] == 1) {?>
<div class="warnings">
    <div class="signals">
        <img src="img/icon/alert.png" alt="" height="60px" style="margin:20px;">
    </div>
    <div class="warning_msn">
        <h4 style="margin:0 0 3px 0; padding:0;"><?php echo $row_DatosWarnings['title']; ?></h4>
        <p><?php echo $row_DatosWarnings['content']; ?></p>
    </div>
</div>
<?php } ?>