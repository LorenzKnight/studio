<?php
$query_DatosPublications = sprintf("SELECT * FROM events WHERE status= 1 ORDER BY date ASC");
$DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
$row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
$totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space">
    <div class="box_position">
        <?php if ($row_DatosPublications > 0) { 
        do { ?>
        <table width="100%" cellspacing="0" style="background-color: ; margin:0 0 20px; box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;" >
            <tr height="30">
                <td width="15%" nowrap="nowrap" align="center">
                    <div class="date_div">
                        <h3 style="margin:0;"><?php echo $row_DatosPublications['month']; ?></h3>
                        <h1 style="margin:0;"><?php echo $row_DatosPublications['day']; ?></h1>
                        <h4 style="margin:0;"><?php echo $row_DatosPublications['year']; ?></h4>
                    </div>
                </td>
                <td width="25%" nowrap="nowrap" align="center"><img style="margin:5px;" src="img/news/<?php echo $row_DatosPublications['foto']; ?>" height="" width="80%"></td>
                <td width="35%" nowrap="nowrap" align="center"><h3><?php echo $row_DatosPublications['name']; ?></h3></td>
                <td width="25%" nowrap="nowrap" align="center"><a href="#" target="_blank">Event on facebook 1</a></td>
            </tr> 
        </table>
        <?php } while ($row_DatosPublications = mysqli_fetch_assoc($DatosPublications));
        }
        else
        { ?>
        <div class="text_cont">No record to show.</div>
        <?php }  ?>
    </div>
</div>