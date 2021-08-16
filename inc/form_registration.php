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
    <?php if($_GET["id"]):?>
        <div class="form_frame">
            <div class="formulario">
                <table class="form_table" border="0" cellspacing="0" cellpadding="0">
                <form action="registration.php" method="post" name="formrequest" id="formrequest">
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center" style="font-size: 16px; padding: 30px 0 0 0;">
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line1" valign="middle" align="right">
                            <input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" style="width: 98%;" required/>
                        </td>
                        <td class="form_line1" valign="middle" align="left">
                            <input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" style="width: 98%;" required/>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                            <input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" style="width: 95%;" required/>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line1" valign="middle" align="right">
                            <input class="textf" type="text" minlength="10" maxlength="10" placeholder="Ditt Person No.(10 siffror)" name="personal_number" id="personal_number" style="width: 98%;" required/>
                        </td>
                        <td class="form_line1" valign="middle" align="left">
                            <input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" style="width: 98%;" required/>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center" style="color:#999;">
                            Kön:
                            <select class="textf" style="" name="sex" id="sex" required>
                            <option value="None">None</option>
                            <option value="Man">Man</option>
                            <option value="Kvinna">Kvinna</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                            <input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" style="width: 95%;" required/>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line1" valign="middle" align="right">
                            <input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" style="width: 98%;" required/>
                        </td>
                        <td class="form_line1" valign="middle" align="left">
                            <input class="textf" type="text" placeholder="Din Ort" name="city" id="city" style="width: 98%;" required/>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center" style="padding: 0 10px;">
                            Läs villkor <a href="#" onclick="mostrar()">här</a><br>
                            <input class="checks" type="checkbox" name="agree" value="yes" required> Jag acepterar villkoren<br>
                            <br>
                            Så här behändla vi lagen om <a href="#" onclick="mostrar2()">GDPR</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                        </td>
                    </tr>   
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                            <button class="button_a" onclick="location='registration.php'">avbryt</button> <input type="submit" class="button" value="Next" />
                        </td>
                    </tr>
                    <input type="hidden" name="password" id="password" value="newstudent246"/>
                    <input type="hidden" name="status" id="status" value="Active"/>
                    <input type="hidden" name="via" id="via" value="1000"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
                </form>
                </table>
            </div>
        </div>
    <?php endif ?>

    <div class="agreement" id="popup">
        <table class="agre_frame" border="0" cellspacing="0" cellpadding="0">
            <tr height="92%">
                <td>
                    <div style="width: 99%; height: 99%; margin: 0.5%; font-size: 12px; background-color: #F0F0F0; overflow: auto;">
                    <h3 style="text-align:center;">LOOPS VILLKOREN</h3>
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
                    <p>- Loops förhåller sig till lag om distansavtal och avtal utanför affärslokaler (SFS 2005:59).</p>
                    <br/>
                    <p>- Du som har köpt en plats på en kurs eller event online på vår hemsida kan frånträda detta avtal utan att ange något skäl inom 14 dagar efter det att köpet gjordes. 
                    Denna ångerfrist löper ut 14 dagar efter den dag då avtalet ingicks. Om du vill utöva denna ångerrätt så ska du meddela Loops om ditt beslut att frånträda avtalet via mejl till info@loopsdancestudio.se .</p>
                    <br/>
                    <p>- Vi skickar alltid en bekräftelse via mejl på ditt beslut om att frånträda avtalet, om du inte har fått en bekräftelse så ber vi dig att kontakta oss snarast då du inte räknas som av-anmäld innan vi skickat en bekräftelse.</p>
                    <br/>
                    <p>- Om du har utövat ångerrätten på detta sätt så kommer Loops återbetala erlagd ersättning inom 14 dagar, minus en administrationsavgift på 300 kr. 
                    Observera att för köp av deltagande vid event så gäller denna ångerrätt endast före den tid då eventet äger rum, för köp av kurs så gäller denna ångerrätt endast före kursstart.</p>
                    <br/>
                    <br/>
                    <p>4. ÅTERANMÄLAN</p>
                    <p>-Ett köp av kurs gäller endast för 1 termin. Man blir alltså inte automatiskt anmäld till nästa termin utan måste inför varje termin köpa en ny kurs.</p>
                    <br/>
                    <br/>
                    <p>5. ATT BYTA KURS</p>
                    <p>-Det är inte möjligt att byta kurs efter att du genomfört ditt köp via hemsidan.</p>
                    <p>Vid förfrågningar om byte av kurs skicka ett mejl till info@loopsdancestudio.se så återkommer vi med mer information kring eventuell möjlighet att byta kurs. 
                    Observera att denna förfrågan endast beviljas i mån av plats och inte garanteras.</p>
                    <br/>
                    <br/>
                    <p>6. MISSADE LEKTIONER</p>
                    <p>- Missade lektioner ersätts aldrig. Vid längre tids sjukdom eller skada med läkarintyg kan man däremot få ta igen missade kurstillfällen vid senare tillfällen under samma termin.</p>
                    <br/>
                    <br/>
                    <p>7. ÄNDRINGAR AV KURSER OCH LÄRARE</p>
                    <p>- Loops förbehåller sig rätten att ändra kursuplägg, tider och lärare.</p>
                    <br/>
                    <br/>
                    <p>8. DELTAGANDE I FOTOGRAFERING OCH/ELLER FILMNING</p>
                    <p>-Vid våra kurser och events är det vanligt att vi fotograferar och filmar.</p> 
                    <br/>
                    <p>Detta gör vi både i marknadsföringssyfte och för att visa upp vår verksamhet för våra bidragsgivare. 
                    Om du inte vill eller får vara med på foton eller filmer så ber vi dig informera oss via mejl på info@loopsdancestudio.se. 
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
                    <p>När du anmäler dig till en kurs på Loops eller deltar i ett event så samlar vi in information kring vilka kurser du anmält dig eller event du deltagit på till samt personuppgifter så som namn, ålder, personnummer och kontaktuppgifter så som telefonnummer, mejl och adress. Dessa uppgifter använder vi för att för administrativt arbete, insamlande av information till våra bidragsgivare samt för marknadsföring.</p>                   
                    <br/>
                    <br/>
                    <p>Vi värnar om att följa de lagar och regler kring som finns och om att dina personuppgifter ska vara skyddade. Den information som vi lagrar i vårt datasystem är enda tillgänglig för de hos Loops som arbetar med administration och som har särskild behörighet till personuppgifter. </p>
                    <br/>
                    <br/>
                    <p>Enligt Personuppgiftslagen 26 § (1998:204) har du som anmält dig till våra kurser eller events rätt att få information kring hur och vilka personuppgifter om dig vi behandlar. En skriftlig begäran ska då skickas till oss och kan max göras en gång per år.</p>
                    <br/>
                    <br/>
                    <p>Enligt Personuppgiftslagen 28 § har du även rätt att begära att dina personliga uppgifter tas bort/ändras om de är felaktiga eller inte är nödvändiga för vårt administrativa arbete.</p>
                    <br/>
                    <br/>
                    <p>FÖR FRÅGOR:</p>
                    <p>Loops Idéel föreningorg nr. 802525-8438</p>
                    <p>info@loopsdancestudio.se</p>
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

    <?php if($_GET["discountCode"]):?>
        <div class="form_frame">
            <div class="formulario" style="height: 50%;">
                <div class="discountcode" id="code" style="display:none; opacity:0;">
                    <form action="registration.php" method="post" name="discountrequest" id="discountrequest">
                        <table class="form_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center">
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center">
                                    <img class="img_discount" src="<?php //echo $dominio; ?>/img/sys/almost_free.png">
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center">
                                    <p>Do you have a code?</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center"> 
                                    <input class="textd" type="text" placeholder="Har du en kod?" name="discountcode" id="discountcode" size="25" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();" style="text-align:center;">
                                    
                                    <?php if ($_GET['discountCode'] == 2 ) { ?>
                                        <p style="font-size:12px; padding:0; color:red;">Den här koden är inte giltig</p>
                                    <?php } else if ($_GET['discountCode'] == 3 ) { ?>
                                        <p style="font-size:12px; padding:0; color:green;">Koden är giltig</p>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center">
                                    <input type="submit" class="button" value="Ok!" />
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center">
                                </td>
                            </tr>
                            <input type="hidden" name="id_student" id="id_student" value="<?php echo $_SESSION['ydl_UserId']; ?>"/>
                            <input type="hidden" name="id_term" id="id_term" value="Active"/>
                            <input type="hidden" name="MM_insert" id="MM_insert" value="discountrequest" />
                        </table>
                    </form>
                </div>

                <div class="discountcode" id="info">
                    <table class="form_table" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="form_line2" colspan="2" valign="middle" align="center">
                            </td>
                        </tr>
                        <tr>
                            <td class="form_line2" colspan="2" valign="middle" align="center">
                                <img src="<?php //echo $dominio; ?>/img/loops_dance_studio.svg" alt="" id="" style="margin:0 40px 20px;" width="30%">
                            </td>
                        </tr>
                        <tr>
                            <td class="form_line2" colspan="2" valign="middle" align="center">
                                <p>Ready to enjoy of</p>
                                <h3 style="font-weight:200; margin:0;">Loops Dance Studio kurs?</h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="form_line2" colspan="2" valign="middle" align="center">
                            </td>
                        </tr>
                        <tr>
                            <td class="form_line2" colspan="2" valign="middle" align="center">
                                <Button class="button" onclick="location='registration.php?idCompl=1'">Next</button>
                                <br>
                                <button class="button_a" style="text-transform: lowercase;" onclick="promocode()">I have a code!</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php endif ?>

    <?php if($_GET["idCompl"]):?>
        <div class="form_frame">
            <div class="formulario">
                <table class="form_table" border="0" cellspacing="0" cellpadding="0">
                    <tr height="10">
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                            <h2>Hej <?php echo ObtenerNombreStudent($_SESSION['ydl_UserId']);?></h2>
                        </td>
                    </tr>
                    <?php if (!confirmCodeTrue($_SESSION['ydl_UserId'], $TermAct)) { ?>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                            <p style="padding:0; color: green;">Du har en giltig rabattkod</p>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center" style="color: #666; padding: 0 10px;">
                            <p>Scrolla i listan med valbara kurser och klicka på de kurser du vill anmäla dig till.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                        </td>
                    </tr> 
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center">
                            <div class="courses">
                                <div class="class1">
                                    <p>Valbara kurser</p>
                                    <div class="lista_c">
                                        <?php
                                        if ($totalRows_DatosCourse > 0) {
                                        do { ?>
                                        <?php if(productosRestantes($_SESSION['ydl_UserId'], $row_DatosCourse['id_course'])) { ?>
                                        <div class="course_line">
                                            <a href="cart_add.php?courseID=<?php echo $row_DatosCourse['id_course'];?>">
                                                <div class="course_line_div" style="width:50%;">
                                                    <?php echo $row_DatosCourse['name'];?>
                                                </div>
                                                <div class="course_line_div" style="width:40%;">
                                                    <?php echo $row_DatosCourse['schedule'];?>
                                                </div>
                                                <div class="course_line_div" style="width:10%; color: green;">
                                                    ( + )
                                                </div>
                                            </a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="course_line">
                                            <div class="course_line_div" style="width:50%;">
                                                <?php echo $row_DatosCourse['name'];?>
                                            </div>
                                            <div class="course_line_div" style="width:40%;">
                                                <?php echo $row_DatosCourse['schedule'];?>
                                            </div>
                                            <div class="course_line_div" style="width:10%;">
                                                ( x )
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                        }
                                        ?>
                                        <?php if ($totalRows_DatosCourse2 > 0) {?>
                                        <p style="color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                        <?php
                                        if ($totalRows_DatosCourse2 > 0) {
                                        do { ?>
                                        <?php if(productosRestantes($_SESSION['ydl_UserId'], $row_DatosCourse2['id_course'])) { ?>
                                        <div class="course_line">
                                            <a href="cart_add.php?courseID=<?php echo $row_DatosCourse2['id_course'];?>">
                                                <div class="course_line_div" style="width:50%;">
                                                    <?php echo $row_DatosCourse2['name'];?>
                                                </div>
                                                <div class="course_line_div" style="width:40%;">
                                                    <?php echo $row_DatosCourse2['schedule'];?>
                                                </div>
                                                <div class="course_line_div" style="width:10%; color:green;">
                                                    ( + )
                                                </div>
                                            </a>
                                        </div>
                                        <?php } else { ?>
                                        <div class="course_line">
                                            <div class="course_line_div" style="width:50%;">
                                                <?php echo $row_DatosCourse2['name'];?>
                                            </div>
                                            <div class="course_line_div" style="width:40%;">
                                                <?php echo $row_DatosCourse2['schedule'];?>
                                            </div>
                                            <div class="course_line_div" style="width:10%;">
                                                ( x )
                                            </div>
                                        </div>
                                        <?php } ?>
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
                                            <div class="course_line">
                                                <a href="cart_delete.php?counterID=<?php echo $row_DatosCart['id_counter'];?>">
                                                    <div class="course_line_div" style="width:50%;">
                                                        <?php echo ObtenerNombreCurso($row_DatosCart['id_course']);?>
                                                    </div>
                                                    <div class="course_line_div" style="width:40%;">
                                                        <?php echo ObtenerEsquemaCurso($row_DatosCart['id_course']);?>
                                                    </div>
                                                    <div class="course_line_div" style="width:10%; color:red;">
                                                        ( - )
                                                    </div>
                                                </a>
                                            </div>
                                            <!--/////////////////////////codigo que descuenta/////////////////////////-->
                                        <?php if(getPorDiscount(ObtenerDisc($_SESSION["ydl_UserId"], $TermAct), $row_DatosCart['id_course']) != "") { ?>
                                            <?php $rebajaCodigo = getPorDiscount(ObtenerDisc($_SESSION["ydl_UserId"], $TermAct), $row_DatosCart['id_course']); ?>
                                            <?php $discPercentMoney = ObtenerPrecioCurso($row_DatosCart['id_course']) / 100 * $rebajaCodigo ; ?>
                                        <?php } else { ?>
                                            <?php $discPercentMoney = getMonDiscount(ObtenerDisc($_SESSION["ydl_UserId"], $TermAct), $row_DatosCart['id_course']);?>
                                        <?php } ?>
                                            <!--/////////////////////////codigo resutado sin descuento/////////////////////////-->
                                        <?php $SubTotalSinCode = $SubTotalSinCode + ObtenerPrecioCurso($row_DatosCart['id_course']); ?>

                                        <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCart['id_course']) - $discPercentMoney; ?>
                                        <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                                        }
                                        ?>
                                            <?php if ($totalRows_DatosCart2 > 0) {?>
                                            <p style="color:#999;">Kurser utan rabatt</p>
                                            <?php } ?>
                                        <?php
                                        if ($totalRows_DatosCart2 > 0) {
                                        do { ?>
                                            <div class="course_line">
                                                <a href="cart_delete.php?counterID=<?php echo $row_DatosCart2['id_counter'];?>">
                                                    <div class="course_line_div" style="width: 50%;">
                                                        <?php echo ObtenerNombreCurso($row_DatosCart2['id_course']);?>
                                                    </div>
                                                    <div class="course_line_div" style="width: 40%;">
                                                        <?php echo ObtenerEsquemaCurso($row_DatosCart2['id_course']);?>
                                                    </div>
                                                    <div class="course_line_div" style="width: 10%; color:red;">
                                                        ( - )
                                                    </div>
                                                </a>
                                            </div>
                                            <!--/////////////////////////codigo resutado sin descuento/////////////////////////-->
                                        <?php if(getPorDiscount(ObtenerDisc($_SESSION["ydl_UserId"], $TermAct), $row_DatosCart2['id_course'])) { ?>
                                            <?php $rebajaCodigo2 = getPorDiscount(ObtenerDisc($_SESSION["ydl_UserId"], $TermAct), $row_DatosCart2['id_course']); ?>
                                            <?php $discPercentMoney2 = ObtenerPrecioCurso($row_DatosCart2['id_course']) / 100 * $rebajaCodigo2 ; ?>
                                        <?php } else { ?>
                                            <?php $discPercentMoney2 = getMonDiscount(ObtenerDisc($_SESSION["ydl_UserId"], $TermAct), $row_DatosCart2['id_course']);?>
                                        <?php } ?>
                                            <!--/////////////////////////codigo resutado sin descuento/////////////////////////-->
                                        <?php $NoDiscTotalSinCode = $NoDiscTotalSinCode + ObtenerPrecioCurso($row_DatosCart2['id_course']); ?>

                                        <?php $NoDiscTotal = $NoDiscTotal + ObtenerPrecioCurso($row_DatosCart2['id_course']) - $discPercentMoney2;?>
                                        <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
            <form action="payment_method.php" method="post" name="" id="">
                    <tr>
                        <td style="background-color: ;" class="form_line2" colspan="2" valign="middle" align="center">
                        
                        <?php
                            $sumaNoCode = $SubTotalSinCode + $NoDiscTotalSinCode;
                            $SubTotalPlus = $SubTotal + $NoDiscTotal;

                            $SubTotalNoCode = $sumaNoCode - $SubTotalPlus;

                            $resprosent = ObtenerPDescuento($totalRows_DatosCart);
                            $preciorebaja = $SubTotal / 100 * $resprosent;
                            $precioTotalCR = $SubTotal - $preciorebaja;
                            $precioTotal = $SubTotal - $preciorebaja + $NoDiscTotal;
                        ?>

                        <table style="background-color: ; margin: 5px 0 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="form_line2" colspan="2" valign="middle" align="center" style="padding:0 0 10px;">
                                    <?php echo GetPacket($totalRows_DatosParaPaquete); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line1" valign="middle" align="right" style="padding:0 5px 0 0; color:#CCC;">
                                    Sub Total:
                                </td>
                                <td class="form_line1" valign="middle" align="left" style="padding:0 0 0 5px; color:#CCC;">
                                    &nbsp;<?php echo $SubTotalPlus; ?> SEK
                                </td>
                            </tr>
                            <?php if ($totalRows_DatosCart > 1) {?>
                            <tr>
                                <td class="form_line1" valign="middle" align="right" style="padding:0 5px 0 0; color:#CCC;">
                                    <?php //echo ObtenerPDescuento($totalRows_DatosCart); ?>Mängd rabatt:
                                </td>
                                <td class="form_line1" valign="middle" align="left" style="padding:0 0 0 5px; color:#CCC;">
                                    - <?php echo $preciorebaja; ?> SEK
                                </td>
                            </tr>
                            <?php } ?>
                            <?php if (confirmCodeTrue($_SESSION['ydl_UserId'], $TermAct)) { ?>
                            <?php } else { ?>
                            <tr>
                                <td class="form_line1" valign="middle" align="right" style="padding:0 5px 0 0; color:#CCC;">
                                    rabatt kod:
                                </td>
                                <td class="form_line1" valign="middle" align="left" style="padding:0 0 0 5px; color:#CCC;">
                                    - <?php echo $SubTotalNoCode; ?> SEK
                                </td>
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
                                <td class="form_line1" valign="middle" align="right" style="padding: 5px 5px 0 0; border-top:1px solid #999;">
                                    Total:
                                </td>
                                <td class="form_line1" valign="middle" align="left" style="padding: 5px 0 0 5px; border-top:1px solid #999;">
                                <?php echo $precioTotal; ?>
                                 SEK
                                </td>
                            </tr>
                        </table>

                        <?php $_SESSION["TotalCompra"] = $precioTotal;?>
                        <?php $_SESSION["paquete"] = GetPacket($totalRows_DatosParaPaquete);?>
                        <?php $_SESSION["sex"] = sex($_SESSION['ydl_UserId']);?>

                        <?php $_SESSION["name"] = ObtenerNombreStudent($_SESSION['ydl_UserId']);?>
                        <?php $_SESSION["surname"] = ObtenerApellidoStudent($_SESSION['ydl_UserId']);?>
                        
                        <!-- Pay method:<br/>
                        Paypal -->
                        </td>
                    </tr>
                    <tr>
                        <td class="form_line2" colspan="2" valign="middle" align="center" style="color: #666; padding:20px 0;">
                            <button class="button_a" onclick="location='registration.php'">avbryt</button> <input type="submit" class="button" value="Anmäl mig" />
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    <?php endif ?>
</div>