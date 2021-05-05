<?php
    $query_DatosPubInfo = sprintf("SELECT * FROM publications WHERE site = 3 AND status = 1 ORDER BY id_publications ASC LIMIT 4");
    $DatosPubInfo = mysqli_query($con, $query_DatosPubInfo) or die(mysqli_error($con));
    $row_DatosPubInfo = mysqli_fetch_assoc($DatosPubInfo);
    $totalRows_DatosPubInfo = mysqli_num_rows($DatosPubInfo);
?>
<div class="signup_div">
    <div class="signup_info">
        <!-- <div class="post_content">
            <h3>Höstens kurser</h3>
            Loops Dance Studio är en dansskola i centrala Göteborg med fokus på pardans och andra härliga dansstilar.
            <br><br>
            Hos oss hittar du danslärare som undervisar i flera olika stilar och i danser med ursprung från olika delar av världen.
            <br><br>
            Information om vilka kurser vi erbjuder och schemat hittar du <a href="schemma.php">här</a>.
            <br><br>
            <a href="registration.php">Anmäl dig här</a>
        </div>
        <div class="post_content">
            <h3>ANGÅENDE COVID-19</h3>
            På grund av Covid-19 har vi begränsat antalet deltagare på våra kurser och events.
            <br><br>
            För våra kurser är platserna till varje kurs begränsad till max 30 personer.
            <br>
            På socialdansen på tisdagar och torsdagar släpper vi in max 50 personer.
            <br><br>
            För kurserna i pardans är rotation frivilligt.
            <br>
            Du som inte vill rotera kan anmäla dig tillsammans med en danspartner (anmäl dig som vanligt och skicka sedan ett mail med information om den du registrerat dig med till info@loopsdansstudio.se)."
        </div> -->

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