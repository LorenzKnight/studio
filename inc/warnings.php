<style>
    @media only screen and (min-width: 320px) and (-webkit-device-pixel-ratio : 2) {
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
            font-size: 10px;
            color: #000;
        }
    }
    @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
        .warnings{
            width: 100%;
            overflow: auto;
            display: flex;
            background-color: #ec7571;
            /* border-left: 20px solid #d8413c; */
        }
        .signals{
            width: 200px;
        }
        .warning_msn{
            flex: 1;
            padding: 10px;
            font-size: 10px;
            color: #000;
        }
    }
    @media (min-width: 768px) {
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
            font-size: 12px;
            color: #000;
        }
    }
    @media (min-width: 1024px) {
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
        <p><?php echo $row_DatosWarnings['content']; ?></p>
    </div>
</div>
<?php } ?>