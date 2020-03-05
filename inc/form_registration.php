<script>
    // const isElementOrDescendant = function (parent, child) {
    //     if (parent === child) return true

    //     var node = child.parentNode;
    //     while (node != null) {
    //     if (node == parent) {
    //         return true;
    //     }
    //     node = node.parentNode;
    //     }
    //     return false;
    // }

    // const onClick = function (e) {
    //     const el = document.getElementById('formrequest')
    //     const al = document.getElementById('formrequeste')
    //     const clickableAreas = Array.from(document.getElementsByClassName('paquetes'))
    //     clickableAreas.push(el)
    //     clickableAreas.push(al)

    //     let isClickOutside = true

    //     for (let i = 0; i < clickableAreas.length; i++) {
    //         if (isElementOrDescendant(clickableAreas[i], e.target)) {
    //             isClickOutside = false
    //         }
    //     }

    //     if (isClickOutside) {
    //         location = 'price_registration.php'
    //     }
    // }

    // document.addEventListener('click', onClick)
</script>
<script>
// Agrement popup
    function mostrar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="block";
    }
    function ocurtar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="none";
    }
// GDPR popup
    function mostrar2() {
    event.stopPropagation()
    document.getElementById("popup2").style.display="block";
    }
    function ocurtar2() {
    event.stopPropagation()
    document.getElementById("popup2").style.display="none";
    }
</script>

<div class="checkin">
    <div class="register_info">
        <h3 style="text-transform:uppercase;">KURSER OCH SOCIALDANS</h3>
        <?php //echo $_SESSION['ydl_UserId'];?>
        <h3>Kurser & paket</h3>
        <p>Varje kurs-omgångar pågår i 10 veckor.</p>
        <p>Under våren har vi en första kursomgång mellan v. 3-12 och en andra kursomgång mellan v. 13-22.</p>
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
        <input class="button_m" type="submit" onclick="location='registration.php?id=1'" value="Anmäl mig">
    </div>


    <?php if($_GET["id"]):?>
        <div class="form_frame">
        <form action="registration.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="40">
                    <td colspan="6" valign="middle" align="center" style="font-size: 16px; padding: 30px 0 0 0;">
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="width: 100px; font-size: 14px; color: #999;">
                        Kön:
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None">None</option>
                        <option value="Man">Man</option>
                        <option value="Kvinna">Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Läs villkor <a href="#" onclick="mostrar()">här</a><br>
                        <input class="class1_content" type="checkbox" name="agree" value="yes" required> Jag acepterar villkoren<br>
                        <br>
                        Så här behändla vi lagen om <a href="#" onclick="mostrar2()">GDPR</a>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Next" />
                    </td>
                </tr>
                <tr height="20">
                </tr>
                <input type="hidden" name="password" id="password" value="newstudent246"/>
                <input type="hidden" name="status" id="status" value="Active"/>
                <input type="hidden" name="via" id="via" value="1000"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
        </div>
    <?php endif ?>

    <?php //if($_GET["exist"]):?>
        <!-- <div class="form_frame">
        <form action="registration.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="font-size: 16px; padding: 30px 0 0 0;">Aqui</td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="width: 100px; font-size: 14px; color: #999;">
                        Kön:
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None">None</option>
                        <option value="Man">Man</option>
                        <option value="Kvinna">Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="70" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="6" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Läs villkor <a href="#" onclick="mostrar()">här</a><br>
                        <input class="class1_content" type="checkbox" name="agree" value="yes" required> Jag acepterar villkoren 
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Next" />
                    </td>
                </tr>
                <tr height="20">
                </tr>
                <input type="hidden" name="package" id="package" value="<?php echo $_GET['id']; ?>"/>
                <input type="hidden" name="password" id="password" value="newstudent246"/>
                <input type="hidden" name="status" id="status" value="Active"/>
                <input type="hidden" name="via" id="via" value="1000"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
        </div> -->
    <?php //endif ?>
    <?php //if($_GET["idConf"]):?>

        <!-- <div class="formulario" style="padding: 20px; text-align: center; top: 250px;">
        Yandali kommer att skicka via mail kvitto på din anmällning!<br>
        bekräfta du att <?php //echo $row_DatosReg['email'];?> är ditt mail?<br><br>
        <form action="price_registration.php" method="post" name="forminsert" id="forminsert"> -->

            <!-- <input type="hidden" name="email" id="email" value="<?php //echo $row_DatosReg['email'];?>"/>
            <input type="hidden" name="password" id="password" value="<?php //echo $row_DatosReg['password'];?>"/>
            <input style="width: 180px; padding: 21px 0; text-align: center;" type="submit" class="button" value="Ja"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a>
            <input type="hidden" name="status" id="status" value="1"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" /> -->
            <!--<a href="logout.php">Log out</a>-->
        <!-- </form>
        </div> -->

    <?php //endif ?>

    <div class="agreement" id="popup">
        <table class="agre_frame" border="0" cellspacing="0" cellpadding="0">
            <tr height="92%">
                <td>
                    <div style="width: 99%; height: 99%; margin: 0.5%; font-size: 12px; background-color: #F0F0F0; overflow: auto;">
                    <h3 style="text-align:center;">YANDALI VILLKOREN</h3>
                    <br/>
                    <p>För att kunna genomföra ditt köp måste du först godkänna vårt avtal. Detta gör du genom att läsa avtalet och sedan kryssa i avtalsrutan. 
                    Du kan sedan gå vidare och genomföra ditt köp.</p>
                    <br/>
                    <br/>
                    <p>1. KÖP AV KURS / EVENT</p>
                    <p>- Du köper din plats på kurser och event på vår hemsida.</p>
                    <p>För att genomföra ditt köp måste du läsa du först godkänna vårt avtal. Detta gör du genom att läsa avtalet och sedan kryssa i avtalsrutan. 
                    Du kan sedan gå vidare och genomföra ditt köp.</p>
                    <br/>
                    <br/>
                    <p>2. OM DU ÄR UNDER 18 ÅR</p>
                    <p>- För dig som är under 18 år krävs målsmans uppgifter och godkännande.</p>
                    <br/>
                    <br/>
                    <p>3. ÅNGERRÄTT VID KÖP ONLINE</p>
                    <p>- Yandali förhåller sig till lag om distansavtal och avtal utanför affärslokaler (SFS 2005:59).</p>
                    <br/>
                    <p>- Du som har köpt en plats på en kurs eller event online på vår hemsida kan frånträda detta avtal utan att ange något skäl inom 14 dagar efter det att köpet gjordes. 
                    Denna ångerfrist löper ut 14 dagar efter den dag då avtalet ingicks. Om du vill utöva denna ångerrätt så ska du meddela Yandali om ditt beslut att frånträda avtalet via mejl till info@yandali.se .</p>
                    <br/>
                    <p>- Vi skickar alltid en bekräftelse via mejl på ditt beslut om att frånträda avtalet, om du inte har fått en bekräftelse så ber vi dig att kontakta oss snarast då du inte räknas som av-anmäld innan vi skickat en bekräftelse.</p>
                    <br/>
                    <p>- Om du har utövat ångerrätten på detta sätt så kommer Yandali återbetala erlagd ersättning inom 14 dagar, minus en administrationsavgift på 300 kr. 
                    Observera att för köp av deltagande vid event så gäller denna ångerrätt endast före den tid då eventet äger rum, för köp av kurs så gäller denna ångerrätt endast före kursstart.</p>
                    <br/>
                    <br/>
                    <p>4. ÅTERANMÄLAN</p>
                    <p>-Ett köp av kurs gäller endast för 1 termin. Man blir alltså inte automatiskt anmäld till nästa termin utan måste inför varje termin köpa en ny kurs.</p>
                    <br/>
                    <br/>
                    <p>5. ATT BYTA KURS</p>
                    <p>-Det är inte möjligt att byta kurs efter att du genomfört ditt köp via hemsidan.</p>
                    <p>Vid förfrågningar om byte av kurs skicka ett mejl till info@yandali.se så återkommer vi med mer information kring eventuell möjlighet att byta kurs. 
                    Observera att denna förfrågan endast beviljas i mån av plats och inte garanteras.</p>
                    <br/>
                    <br/>
                    <p>6. MISSADE LEKTIONER</p>
                    <p>- Missade lektioner ersätts aldrig. Vid längre tids sjukdom eller skada med läkarintyg kan man däremot få ta igen missade kurstillfällen vid senare tillfällen under samma termin.</p>
                    <br/>
                    <br/>
                    <p>7. ÄNDRINGAR AV KURSER OCH LÄRARE</p>
                    <p>- Yandali förbehåller sig rätten att ändra kursuplägg, tider och lärare.</p>
                    <br/>
                    <br/>
                    <p>8. DELTAGANDE I FOTOGRAFERING OCH/ELLER FILMNING</p>
                    <p>-Vid våra kurser och events är det vanligt att vi fotograferar och filmar.</p> 
                    <br/>
                    <p>Detta gör vi både i marknadsföringssyfte och för att visa upp vår verksamhet för våra bidragsgivare. 
                    Om du inte vill eller får vara med på foton eller filmer så ber vi dig informera oss via mejl på info@yandali.se. 
                    Vid tillfällen då fotografer och filmare befinner sig i lokalen är det alltid okej att be någon av personalen att ta bort eventuella foton och filmer på dig.</p>
                    <br/>
                    <br/>
                    <br/>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="middle" align="center">
                    <a href="#" onclick="ocurtar()">Ok</a>
                </td>
            </tr>
        </table>
    </div>

    <div class="agreement" id="popup2">
        <table class="agre_frame" border="0" cellspacing="0" cellpadding="0">
            <tr height="92%">
                <td>
                    <div style="width: 99%; height: 99%; margin: 0.5%; font-size: 12px; background-color: #F0F0F0; overflow: auto;">
                    <br/>
                    <br/>
                    <h3 style="text-align:center;">POLICY OCH RIKTLINGER FÖR BEHANDLING AV PERSONUPPGIFTER (GDPR)</h3>
                    <br/>
                    <br/>
                    <p>Vi behandlar dina personuppgifter enligt dataskyddsförordningen (GDPR) som gäller som lag i samtliga EU:s medlemsländer sedan 2018.</p>
                    <br/>
                    <br/>                 
                    <p>När du anmäler dig till en kurs på Yandali eller deltar i ett event så samlar vi in information kring vilka kurser du anmält dig eller event du deltagit på till samt personuppgifter så som namn, ålder, personnummer och kontaktuppgifter så som telefonnummer, mejl och adress. Dessa uppgifter använder vi för att för administrativt arbete, insamlande av information till våra bidragsgivare samt för marknadsföring.</p>                   
                    <br/>
                    <br/>
                    <p>Vi värnar om att följa de lagar och regler kring som finns och om att dina personuppgifter ska vara skyddade. Den information som vi lagrar i vårt datasystem är enda tillgänglig för de hos Yandali som arbetar med administration och som har särskild behörighet till personuppgifter. </p>
                    <br/>
                    <br/>
                    <p>Enligt Personuppgiftslagen 26 § (1998:204) har du som anmält dig till våra kurser eller events rätt att få information kring hur och vilka personuppgifter om dig vi behandlar. En skriftlig begäran ska då skickas till oss och kan max göras en gång per år.</p>
                    <br/>
                    <br/>
                    <p>Enligt Personuppgiftslagen 28 § har du även rätt att begära att dina personliga uppgifter tas bort/ändras om de är felaktiga eller inte är nödvändiga för vårt administrativa arbete.</p>
                    <br/>
                    <br/>
                    <p>FÖR FRÅGOR:</p>
                    <p>Yandali Idéel förening org nr. 802525-8438</p>
                    <p>info@yandali.se</p>
                    <br/>
                    <br/>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="middle" align="center">
                    <a href="#" onclick="ocurtar2()">Ok</a>
                </td>
            </tr>
        </table>
    </div>
    <?php if($_GET["idCompl"]):?>
        <div class="form_frame">
        
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                        
                        Hej <?php echo ObtenerNombreStudent($_SESSION['ydl_UserId']);?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Scrolla i listan med valbara kurser och klicka på de kurser du vill anmäla dig till.
                    </td>
                </tr>
                <tr height="20">
                </tr> 
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1">
                                <p>Valbara kurser</p>
                                <div class="lista_c">
                                    <?php
                                    if ($totalRows_DatosCourse > 0) {
                                    do { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add.php?courseID=<?php echo $row_DatosCourse['id_course'];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                    }
                                    ?>
                                <?php if ($totalRows_DatosCourse2 > 0) {?>
                                <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCourse2 > 0) {
                                    do { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add.php?courseID=<?php echo $row_DatosCourse2['id_course'];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                    }
                                    ?>
                                </div>
                            </div>     
                            <div class="class1" style="border-left: 1px solid #CCC;">
                                <p>Dina valda kurser</p>
                                <div class="lista_C_delete">
                                    <?php $SubTotal = 0; ?>
                                    <?php
                                    if ($totalRows_DatosCart > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a href="cart_delete.php?counterID=<?php echo $row_DatosCart['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCart['id_course']);?>
                                    <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                                    }
                                    ?>
                                <?php if ($totalRows_DatosCart2 > 0) {?>
                                <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCart2 > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart2['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart2['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart2['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $NoDiscTotal = $NoDiscTotal + ObtenerPrecioCurso($row_DatosCart2['id_course']);?>
                                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
        <form action="payment_method.php" method="post" name="" id="">
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                    <?php
                    $SubTotalPlus = $SubTotal + $NoDiscTotal;
                    $resprosent = ObtenerPDescuento($totalRows_DatosCart);
                    $preciorebaja = $SubTotal / 100 * $resprosent;
                    $precioTotalCR = $SubTotal - $preciorebaja;
                    $precioTotal = $SubTotal - $preciorebaja + $NoDiscTotal;
                    ?>

                    <table style="background-color: ; margin:10px 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td colspan="2" valign="middle" align="center" style="font-size:18px; padding:0 0 10px;"><?php echo GetPacket($totalRows_DatosParaPaquete); ?></td>
                        </tr>
                        <tr>
                            <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">Sub Total:</td>
                            <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $SubTotalPlus; ?> SEK</td>
                        </tr>
                        <?php if ($totalRows_DatosCart > 1) {?>
                        <tr>
                            <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">- <?php //echo ObtenerPDescuento($totalRows_DatosCart); ?> Rabatt:</td>
                            <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $preciorebaja; ?> SEK </td>
                        </tr>
                        <?php } ?>
                        <!-- <tr>
                            <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">= Total efter rabatt:</td>
                            <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $precioTotalCR; ?> SEK</td>
                        </tr> -->
                        <?php if ($totalRows_DatosCart2 > 0) {?>
                        <!-- <tr>
                            <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">+ Kurser utan rabatt:</td>
                            <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $NoDiscTotal; ?> SEK</td>
                        </tr> -->
                        <?php } ?>
                        <tr>
                            <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total:</td>
                            <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><?php echo $precioTotal; ?> SEK</td>
                        </tr>
                    </table>

                    <?php $_SESSION["TotalCompra"] = $precioTotal;?>
                    <?php $_SESSION["paquete"] = GetPacket($totalRows_DatosParaPaquete);?>
                    <?php $_SESSION["sex"] = sex($_SESSION['ydl_UserId']);?>
                    
                    <!-- Pay method:<br/>
                    Paypal -->
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="registration.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäl mig" />
                    </td>
                </tr>
                <tr height="10">
                </tr>
            </table>
        </form>
        </div>
    <?php endif ?>
</div>