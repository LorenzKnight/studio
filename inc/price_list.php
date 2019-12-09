<?php
 $query_DatosPackage3 = sprintf("SELECT * FROM package WHERE id_package=%s", GetSQLValueString($_GET["idCompl"], "int")); 
 $DatosPackage3 = mysqli_query($con, $query_DatosPackage3) or die(mysqli_error($con));
$row_DatosPackage3 = mysqli_fetch_assoc($DatosPackage3);
$totalRows_DatosPackage3 = mysqli_num_rows($DatosPackage3);
?>

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
            <h1 style="font-weight: bold;">Ny i Yandalis familj?</h1>
            <p style="color: rgba(201,172,140,1);">- Här hittar du lite info som kan vara bra att veta! -</p>
        </div>

        <div class="beginfo">
            <h3 style="text-transform:uppercase;">GRATIS PROVA-PÅ</h3>
            <p>Första kursveckan (v.3) kan du prova på de olika kurserna gratis. </p>
                <p>Observera dock att det är först till kvar på platser till kurserna så om du vill vara säker på att 
                få en plats på en specefik kurs så gör du bäst i att anmäla dig innan.</p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">DROP-IN</h3>
            <p>På torsdagar innan social-dansen erbjuder vi Drop-in. Enskilda klasser som inte kräver föranmälan.</p> 
            <p>Det är bara att dyka upp och betala i kassan innan lektionen startar.</p>
            <p>Pris: 150 kr (inkl. drop-in & socialdans). </p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">PRAKTIKA</h3>
            <p>Övningstillfällen som erbjuds i samband med kurser. Här ges du möjlighet att träna på de danssteg de precis lärt sig.</p>
            <p>För mer information kring vilka övningstillfällen som ingår i ditt paket se ”Kurser & paket”.</p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">SOCIALDANS</h3>
            <p>Sociala träningstillfällen som är öppna både för kursdeltagare och andra besökare. 
            Passar allt från nybörjare som vill träna danssteg till erfarna dansare som vill träffa andra dansare.</p>
            <p>Pris: 60 kr</p>
        </div>
        <div class="beginfo">
            <h3 style="text-transform:uppercase;">PRIVATLEKTIONER</h3>
            <p>Vill du hellre ta privatlektioner? </p>
            <p>Varje vecka erbjuder vi privatlektioner i flertalet kurser för både enskilda personer och par. 
            Mejla oss på info@yandali.se för mer information.</p>
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
            <h3 style="text-transform:uppercase;">Intresserad av att anmäla dig till en danskurs på Yandali?</h3>

            <p >Hos oss hittar du kurser i flera olika dansstilar och på olika nivåer som passar allt från nybörjare till erfarna dansare.</p>
           <p> Hit kan du anmäla dig själv eller tillsammans med vänner och/eller en danspartner.</p>
           <p>Våra klasser är välkomnade och sociala och du kommer lära känna andra dansare under kursens gång.</p>
            <br>
            <h3 style="text-align: center;">Vårens kurser börjar vecka 3.</h3>
        </div>
    </div>

    <!-- <a href="price_registration.php?tickets=1"><div class="big_button">Tickets</div></a> -->

    <?php include("inc/form_with_js.php")?>
</div>