<div class="space">
        <div class="text_div2">
            <h3 style="text-transform:uppercase;">Vill du få kontakt med oss?</h3>
            <div class="text_cont">

            Har du kanske frågor om  kommande evenamang, vill boka privatlektion eller vill ha tips och råd kring vilken nivå du ska anmäla dig till?<br> 
            Hör av dig så hjälper vi dig och svarar på dina frågor så snart vi kan!<br>
            Skicka ett meddelande genom att fylla i formuläret här nedan eller skicka ett mejl till <?php echo $row_DatosSite['email']; ?>.<br> 
            <br>
            Vi hörs snart!<br>
            /Loops
            </div>
        </div>
        <div class="contact_content">
            <div class="separador">
                <form action="MAILTO:<?php echo $row_DatosSite['email']; ?>" method="post" enctype="text/plain">
                    <form name="contactform" method="post" action="send_form_email.php">
                        <table class="form_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="form_line2" colspan="2" nowrap="nowrap" align="center">
                                    <h3 style="text-transform: uppercase; text-align: center;">Skicka ditt meddelande</h3>
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line1" nowrap="nowrap" align="center">
                                    <input class="textf" type="text" name="first_name" placeholder="Ditt namn..." maxlength="50" style="width:98%;">
                                </td>
                                <td class="form_line1" nowrap="nowrap" align="center">
                                    <input class="textf" type="text" name="email" placeholder="Din mail..." maxlength="80" style="width:98%;">
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" nowrap="nowrap" align="center">
                                    <textarea class="textf" name="comments" placeholder="Meddelande..." maxlength="2000" cols="100" rows="2" style="margin: 0 auto; height: 188px; width: 98%;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="form_line2" colspan="2" nowrap="nowrap" align="center">
                                    <input class="button" type="submit" value="Skicka">
                                </td>
                            </tr>
                        </table>
                    </form>
                </form>           
            </div>
            <div class="contact_info">
            
                <h4 style="text-transform:uppercase;"><?php echo $row_DatosSite['name']; ?></h4>
                <div class="text_cont">
                    <?php echo $row_DatosSite['name']; ?><br>
                    <?php echo $row_DatosSite['adress']; ?><br>
                    <?php echo $row_DatosSite['post']; ?> <?php echo $row_DatosSite['city']; ?><br>
                    <?php echo $row_DatosSite['email']; ?>
                </div>
            
            </div>
        </div>
    </div>