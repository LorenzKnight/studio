<?php $divid = $_GET['pageid'];?>

<script>
    function Mostrar3() {
    event.stopPropagation()
    document.getElementById("myForm3").style.display="block";
    }
    function ocurtar3() {
    event.stopPropagation()
    document.getElementById("myForm3").style.display="none";
    }
</script>
<div class="user_div">
    <div class="space">
        <!-- <div class="settings_sb">
            <div class="under_sites">
                <ul>
                    <a href="page_settings.php?pageinfo=1"><li style="border-bottom: 1px solid #CCC;">Page info</li></a>
                </ul>
            </div>
        </div> -->

        <div class="settings_cnt">
            <form action="page_settings.php?pageinfo=1" method="post" name="formpageinf" id="formpageinf">
                <div class="pageinf">
                    <table style="width:80%; margin:0 auto;" border="0" cellspacing="0" cellpadding="0">
                        <tr height="80">
                            <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0; border-bottom:1px solid #CCC;">
                                Page Info
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Name</p>
                                <input class="textf" type="text" placeholder="Page Namn..." value="<?php echo $row_DatosPageInfo["name"]; ?>" name="name" id="name" size="52" required/>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Abbreviated name</p>
                                <input class="textf" type="text" placeholder="Abbreviated name..." value="<?php echo $row_DatosPageInfo["abbreviated_name"]; ?>" name="abbreviated_name" id="abbreviated_name" size="52"/>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Adress</p>
                                <input class="textf" type="text" placeholder="Page Adress..." value="<?php echo $row_DatosPageInfo["adress"]; ?>" name="adress" id="adress" size="52" required/>
                            </td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="right" style="padding: 0 10px 0 0;">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Post no.</p>
                                <input class="textf" type="text" placeholder="Post No..." value="<?php echo $row_DatosPageInfo["post"]; ?>" name="post" id="post" size="23" required/>
                            </td>
                            <td width="50%" valign="middle" align="left" style="padding: 0 0 0 10px;">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">City</p>
                                <input class="textf" type="text" placeholder="Ort..." value="<?php echo $row_DatosPageInfo["city"]; ?>" name="city" id="city" size="23" required/>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">E-mail</p>
                                <input class="textf" type="text" placeholder="Page Mail..." value="<?php echo $row_DatosPageInfo["email"]; ?>" name="email" id="email" size="52" required/>
                            </td>
                        </tr>
                        <tr height="80">
                            <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0; border-bottom:1px solid #CCC;">
                                Social networks
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Facebook</p>
                                <input class="textf" type="text" placeholder="Facebook Page..." value="<?php echo $row_DatosPageInfo["facebook"]; ?>" name="facebook" id="facebook" size="52"/>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Instagram</p>
                                <input class="textf" type="text" placeholder="Instagram Page..." value="<?php echo $row_DatosPageInfo["instagram"]; ?>" name="instagram" id="instagram" size="52"/>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">Youtube</p>
                                <input class="textf" type="text" placeholder="Youtube Canal..." value="<?php echo $row_DatosPageInfo["youtube"]; ?>" name="youtube" id="youtube" size="52"/>
                            </td>
                        </tr>
                        <tr height="80">
                            <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0; border-bottom:1px solid #CCC;">
                                Payment Options
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <p style="font-size:10px; margin:10px 0 5px 15px; color:; text-align:left;">PayPal Premier email or Business Account</p>
                                <input class="textf" type="text" placeholder="Paypal email..." value="<?php echo $row_DatosPageInfo["paypal_account"]; ?>" name="paypal_account" id="paypal_account" size="52"/>
                            </td>
                        </tr>
                        <tr height="120">
                            <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                <input type="submit" class="button" value="Spara" />
                            </td>
                        </tr>
                        <input type="hidden" name="id_site" id="id_site" value="1"/>
                        <input type="hidden" name="MM_insert" id="MM_insert" value="formpageinf" />
                    </table>
                </div>
            </form>
        </div>
    </div>
    
</div>