<div class="space">
        <div class="text_div">
            <h3 style="text-transform:uppercase;">Vad är Lorem Ipsum?</h3>
            <div class="text_cont">Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin.
            Lorem ipsum har varit standard ända sedan 1500-talet,
            när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok.
            Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk typografi utan större förändringar.
            Det blev allmänt känt på 1960-talet i samband med lanseringen av Letraset-ark med avsnitt av Lorem Ipsum,
            och senare med mjukvaror som Aldus PageMaker.</div>
        </div>
        <div class="contact_content">
            <div class="separador">
                    <br><br>	
                            <h3 style="text-transform:uppercase; text-align:center;">Skicka ditt meddelande</h3>
                    <br>
                <form action="MAILTO:<?php echo $row_DatosSite['email']; ?>" method="post" enctype="text/plain">
                    <form name="contactform" method="post" action="send_form_email.php">
                        <table width="100%" border="0" cellspacing="0">
                            <tr height="60">
                                <td nowrap="nowrap" align="center" width="50%"><input class="textf" type="text" name="first_name" placeholder="Ditt namn..." maxlength="50" size="37"></td>
                                <td nowrap="nowrap" align="center" width="50%"><input class="textf" type="text" name="email" placeholder="Din mail..." maxlength="80" size="37"></td>
                            </tr>
                            <tr height="60">
                                <td nowrap="nowrap" align="center" colspan="2"><textarea class="textf" name="comments" placeholder="Meddelande..." maxlength="2000" cols="100" rows="2" style="margin: 0px; height: 188px; width: 570px;"></textarea></td>
                            </tr>
                            <tr height="60">
                                <td nowrap="nowrap" align="left"><input class="button_m" type="submit" value="Skicka"></td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </form>           
            </div>
            <div class="contact_info">
            
                <h3 style="text-transform:uppercase;">Nå oss</h3>                       
                <div class="text_cont">
                    Intresserad av att arbeta med mig
                        eller beställa mina tjänster? 
                        Hör av dig så pratar vi mer!.<br>

                    Jag kommer svara så fort jag ser din mail.</div>
                    

                <h3 style="text-transform:uppercase;">Kontaktinformation</h3>
                <div class="text_cont">
                    <?php echo $row_DatosSite['name']; ?><br>
                    <?php echo $row_DatosSite['adress']; ?><br>
                    <?php echo $row_DatosSite['post']; ?><br>
                    <?php echo $row_DatosSite['email']; ?>
                </div>
            
            </div>
        </div>
    </div>