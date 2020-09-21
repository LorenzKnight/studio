<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s",
GetSQLValueString($_SESSION['ydl_UserId'], "text"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>

<div class="space">
    <div class="text_div" style="border-bottom: 1px solid rgba(201,172,140,1);">
        <div class="heading">
            <h1 style="font-weight: bold;">Ny i Loops familj?</h1>
            <p style="color: rgba(201,172,140,1);">- Här hittar du lite info som kan vara bra att veta! -</p>
        </div>

        <div class="beginfo">
            <h3 style="text-transform:uppercase;">GRATIS PROVA-PÅ</h3>
            <p>Första kursveckan (v.38) kan du prova på de olika kurserna gratis. </p>
                <p>Observera dock att det är först till kvar på platser till kurserna så om du vill vara säker på att 
                få en plats på en specefik kurs så gör du bäst i att anmäla dig innan.</p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">KURSER</h3>
            <p>Gå en kurs och ta chansen att lära dig en ny dans! </p> 
            <p>Våra kurser pågår i 12 veckor och du får lära dig både steg, koreografi och teknik. </p>
            <p>Anmäl dig till kurserna här på hemsidan eller i kassan under prova-på-veckan. </p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">SOCIALDANS</h3>
            <p>Sociala träningstillfällen som är öppna både för kursdeltagare och andra besökare. 
            Passar allt från nybörjare som vill träna danssteg till erfarna dansare som vill träffa andra dansare.</p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">PRIVATLEKTIONER</h3>
            <p>Vill du hellre ta privatlektioner? </p>
            <p>Varje vecka erbjuder vi privatlektioner i flertalet kurser för både enskilda personer och par. 
            Mejla oss på info@loopsdancestudio.se för mer information.</p>
        </div>
         
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">INTENSIVKURSER</h3>
            <p>Flera gånger om året erbjuder vi intensinvkurser och bootcamps i olika danser. </p>
            <p>Håll koll här på vår hemsida eller följ vår FB-grupp för att hålla dig uppdaterad.</p>
        </div>
            <!-- <h3 style="text-transform:uppercase;">VILKEN NIVÅ SKA JAG VÄLJA?</h3>
            <p>Nybörjare-kurser är öppna för alla att anmäla sig till oavsett förkunskap. 
            För kurser i högre nivå vänligen kontakta oss innan din anmälan.</p>

            <h3 style="text-transform:uppercase;">NIVÅER OCH KRAV PÅ FÖRKUNSKAP</h3>
            <p>Nybörjare: öppna för alla oavsett förkunskap</p>
            <p>1: (text kommer)</p>
            <p>2: (text kommer)</p>
            <p>3: (text kommer)</p>
            <p>4: (text kommer)</p>


            <h3 style="text-transform:uppercase;">REPETERA KURSER</h3>
            <p>Hos oss hittar du flertalet olika dansstilar i olika nivåer. 
            Många väljer därför att gå kurser i flera nivåer samtidigt. 
            Du kan nämligen alltid repetera en kurs och gå om samma nivå. 
            Du får då chans att slipa på din teknik och steg. 
            Många väljer till exempel att repetera steg 1 samtidigt som man går steg 2.</p> -->
    </div>
    <div class="text_div" style="border-bottom: 1px solid rgba(201,172,140,1);">
        <div class="heading">
            <h3 style="text-transform:uppercase;">Intresserad av att anmäla dig till en danskurs på Loops Dance Studio?</h3>

            <p >Hos oss hittar du kurser i flera olika dansstilar och på olika nivåer som passar allt från nybörjare till erfarna dansare.</p>
            <p> Hit kan du anmäla dig själv eller tillsammans med vänner och/eller en danspartner.</p>
            <p>Våra klasser är välkomnade och sociala och du kommer lära känna andra dansare under kursens gång.</p>
            <br>
            <h3 style="text-align: center;"><?php echo $row_DatosPeriod['term_name']; ?>/kurser börjar <?php echo $row_DatosPeriod['start_week']; ?>.</h3>
        </div>
    </div>

    <?php include("inc/form_registration.php")?>
</div>