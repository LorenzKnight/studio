<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s",
GetSQLValueString($_SESSION['ydl_UserId'], "text"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<?php
  $query_DatosReg = sprintf("SELECT * FROM site_info");
  $DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
  $row_DatosReg = mysqli_fetch_assoc($DatosReg);
  $totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<div class="space">
    <div class="text_div">
        <div class="heading">
            <h1 style="font-weight: bold;">Ny i Loops familj?</h1>
            <p style="color: rgba(201,172,140,1);">- Här hittar du lite info som kan vara bra att veta! -</p>
        </div>
    </div>
    <div class="info_div" style="border-bottom: 1px solid rgba(201,172,140,1);">
        <div class="goodtoknow" id="text1">
            <div class="gtk_zoom">
                <h3 style="text-transform:uppercase;">GRATIS PROVA-PÅ</h3>
                <p>Första kursveckan (<?php echo $row_DatosPeriod['start_week']; ?>) kan du prova på de olika kurserna gratis. </p>
                <p>Observera dock att det är först till kvar på platser till kurserna så om du vill vara säker på att 
                få en plats på en specefik kurs så gör du bäst i att anmäla dig innan.</p>
            </div>
        </div>
        <div class="goodtoknow" id="text2">
            <div class="gtk_zoom">
                <h3 style="text-transform:uppercase;">KURSER</h3>
                <p>Gå en kurs och ta chansen att lära dig en ny dans! </p> 
                <p>Våra kurser pågår i <?php echo $row_DatosPeriod['no_weeks']; ?> veckor och du får lära dig både steg, koreografi och teknik. </p>
                <p>Anmäl dig till kurserna här på hemsidan eller i kassan under prova-på-veckan. </p>
            </div>
        </div>
        <div class="goodtoknow" id="text3">
            <div class="gtk_zoom">
                <h3 style="text-transform:uppercase;">SOCIALDANS</h3>
                <p>Sociala träningstillfällen som är öppna både för kursdeltagare och andra besökare. 
                Passar allt från nybörjare som vill träna danssteg till erfarna dansare som vill träffa andra dansare.</p>
            </div>
        </div>
        <div class="goodtoknow" id="text4">
            <div class="gtk_zoom">
                <h3 style="text-transform:uppercase;">PRIVATLEKTIONER</h3>
                <p>Vill du hellre ta privatlektioner? </p>
                <p>Varje vecka erbjuder vi privatlektioner i flertalet kurser för både enskilda personer och par. 
                Mejla oss på info@loopsdancestudio.se för mer information.</p>
            </div>
        </div>
        <div class="goodtoknow" id="text5">
            <div class="gtk_zoom">
                <h3 style="text-transform:uppercase;">INTENSIVKURSER</h3>
                <p>Flera gånger om året erbjuder vi intensinvkurser och bootcamps i olika danser. </p>
                <p>Håll koll här på vår hemsida eller följ vår FB-grupp för att hålla dig uppdaterad.</p>
            </div>
        </div>

        <!-- <ul class="hop" style="margin-left:-30px;">
            <li class="text1">
                <h3 style="text-transform:uppercase;">GRATIS PROVA-PÅ</h3>
                <p>Första kursveckan (<?php echo $row_DatosPeriod['start_week']; ?>) kan du prova på de olika kurserna gratis. </p>
                <p>Observera dock att det är först till kvar på platser till kurserna så om du vill vara säker på att 
                få en plats på en specefik kurs så gör du bäst i att anmäla dig innan.</p>
            </li>
            <li class="text2">
                <h3 style="text-transform:uppercase;">KURSER</h3>
                <p>Gå en kurs och ta chansen att lära dig en ny dans! </p> 
                <p>Våra kurser pågår i <?php echo $row_DatosPeriod['no_weeks']; ?> veckor och du får lära dig både steg, koreografi och teknik. </p>
                <p>Anmäl dig till kurserna här på hemsidan eller i kassan under prova-på-veckan. </p>
            </li>
            <li class="text3">
                <h3 style="text-transform:uppercase;">SOCIALDANS</h3>
                <p>Sociala träningstillfällen som är öppna både för kursdeltagare och andra besökare. 
                Passar allt från nybörjare som vill träna danssteg till erfarna dansare som vill träffa andra dansare.</p>
            </li>
            <li class="text4">
                <h3 style="text-transform:uppercase;">PRIVATLEKTIONER</h3>
                <p>Vill du hellre ta privatlektioner? </p>
                <p>Varje vecka erbjuder vi privatlektioner i flertalet kurser för både enskilda personer och par. 
                Mejla oss på info@loopsdancestudio.se för mer information.</p>
            </li>
            <li class="text5">
                <h3 style="text-transform:uppercase;">INTENSIVKURSER</h3>
                <p>Flera gånger om året erbjuder vi intensinvkurser och bootcamps i olika danser. </p>
                <p>Håll koll här på vår hemsida eller följ vår FB-grupp för att hålla dig uppdaterad.</p>
            </li>
        </ul> -->
    </div>
    <div class="text_div" style="border-bottom: 1px solid rgba(201,172,140,1);">
        <div class="heading">
            <h3 style="text-transform:uppercase;">Intresserad av att anmäla dig till en danskurs på Loops Dance Studio?</h3>

            <p >Hos oss hittar du kurser i flera olika dansstilar och på olika nivåer som passar allt från nybörjare till erfarna dansare.</p>
            <p> Hit kan du anmäla dig själv eller tillsammans med vänner och/eller en danspartner.</p>
            <p>Våra klasser är välkomnade och sociala och du kommer lära känna andra dansare under kursens gång.</p>
            <br>
            <h3 style="text-align: center;"><?php echo $row_DatosPeriod['term_name']; ?> börjar <?php echo $row_DatosPeriod['start_week']; ?>.</h3>
        </div>
    </div>
    <div class="checkin">
        <div class="register_info">
            <h3 style="text-transform:uppercase;">KURSER OCH SOCIALDANS</h3>
            <?php //echo $_SESSION['ydl_UserId'];?>
            <h3>Kurser & paket</h3>
            <p>Varje kursomgång pågår i <?php echo $row_DatosPeriod['no_weeks']; ?> veckor.</p>
            <br>
            <p>Innan kursstart anmäler du dig till de kurser du vill gå.</p>
            <p>Du kan också anmäla dig i kassan under prova-på-veckan.</p>
            
            <h3>OBS!</h3>
            <p>Din anmälan gäller bara den specifika kurs du anmält dig till, man kan ej byta till annan kurs efter köp.</p>
        </div>
        
        <div class="to_register">
            <h3 style="text-transform:uppercase;">ORDINARIE PRISER</h3>
            <p>- 1 kurs: 980 kr (gäller ej balett)</p>
            <br/>
            <h3 style="text-transform:uppercase;">KÖP FLER KURSER OCH FÅ UPP TILL 30 % RABATT</h3>
            <p>- Köp 2 kurser, få 10 % rabatt = 1764 kr</p>
            <p>- Köp 3 kurser, få 20 % rabatt = 2352 kr</p>
            <p>- Köp 4 eller fler kurser, få 30 % rabatt = 2744 kr</p>
            <br/>
            <h3 style="text-transform:uppercase;">BALETT</h3>
            <p>- Balett: 1 290 kr (90 min klasser, ingår ej i erbjudande om grupprabatt)</p>
            <br/>
            <?php if($row_DatosReg['registration_off'] == "") { ?>
            <button class="button_reg" style="background-color:#999;">Anmälningar öppnar inom kort</button>
            <?php } else { ?>
            <button class="button_reg" onclick="location='registration.php?id=1'">Anmäl mig</button>
            <?php } ?>
        </div>
    </div>

    <?php include("inc/form_registration.php")?>
</div>