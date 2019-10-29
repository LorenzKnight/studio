<div class="head">
    <?php include("inc/menu.php"); ?>
    <div class="config_m">
        <ul>
            <!--<li><a href="">Config</a></li>-->
            <li><a href="inc/logout.php">Log out</a></li>
            <li><a href="">
            <?php
            if ((isset($_SESSION['MM_Username'])) && ($_SESSION['MM_Username'] != ""))
            {
                echo ObtenerNombreUsuario($_SESSION['std_UserId']);
                echo " ". ObtenerApellidoUsuario($_SESSION['std_UserId']);
            }
            else
            { ?>
                No User...
            <?php } ?>
            </a></li>
        </ul>
    </div>
<!--Div insert-->
    <div id="myForm2" class="subform_cont">
        <form action="page_settings.php" method="post" name="formpage" id="formpage">
            <table class="subform" style="width:400px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="color: #333;">
                        New Div <?php //echo $divid ?>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center">
                        <table border="0" cellspacing="0" cellpadding="0" style="margin:0 0 10px;">
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#FFF;">
                                    <input type="radio" name="background" id="background" value="#FFF">
                                </td>
                                <td align="center" style="width:30px; background-color:#FEF9E7;">
                                    <input type="radio" name="background" id="background" value="#FEF9E7">
                                </td>
                                <td align="center" style="width:30px; background-color:#FDF2E9;">
                                    <input type="radio" name="background" id="background" value="#FDF2E9">
                                </td>
                                <td align="center" style="width:30px; background-color:#FDEDEC;">
                                    <input type="radio" name="background" id="background" value="#FDEDEC">
                                </td>
                                <td align="center" style="width:30px; background-color:#F9EBEA;">
                                    <input type="radio" name="background" id="background" value="#F9EBEA">
                                </td>
                                <td align="center" style="width:30px; background-color:#F4ECF7;">
                                    <input type="radio" name="background" id="background" value="#F4ECF7">
                                </td>
                                <td align="center" style="width:30px; background-color:#F5EEF8;">
                                    <input type="radio" name="background" id="background" value="#F5EEF8">
                                </td>
                                <td align="center" style="width:30px; background-color:#EBF5FB;">
                                    <input type="radio" name="background" id="background" value="#EBF5FB">
                                </td>
                                <td align="center" style="width:30px; background-color:#EAF2F8;">
                                    <input type="radio" name="background" id="background" value="#EAF2F8">
                                </td>
                                <td align="center" style="width:30px; background-color:#E8F6F3;">
                                    <input type="radio" name="background" id="background" value="#E8F6F3">
                                </td>
                                <td align="center" style="width:30px; background-color:#E9F7EF;">
                                    <input type="radio" name="background" id="background" value="#E9F7EF">
                                </td>
                                <td align="center" style="width:30px; background-color:#566573;">
                                    <input type="radio" name="background" id="background" value="#566573">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F4F6F7;">
                                    <input type="radio" name="background" id="background" value="#F4F6F7">
                                </td>
                                <td align="center" style="width:30px; background-color:#FCF3CF;">
                                    <input type="radio" name="background" id="background" value="#FCF3CF">
                                </td>
                                <td align="center" style="width:30px; background-color:#FAE5D3;">
                                    <input type="radio" name="background" id="background" value="#FAE5D3">
                                </td>
                                <td align="center" style="width:30px; background-color:#FADBD8;">
                                    <input type="radio" name="background" id="background" value="#FADBD8">
                                </td>
                                <td align="center" style="width:30px; background-color:#F2D7D5;">
                                    <input type="radio" name="background" id="background" value="#F2D7D5">
                                </td>
                                <td align="center" style="width:30px; background-color:#E8DAEF;">
                                    <input type="radio" name="background" id="background" value="#E8DAEF">
                                </td>
                                <td align="center" style="width:30px; background-color:#EBDEF0;">
                                    <input type="radio" name="background" id="background" value="#EBDEF0">
                                </td>
                                <td align="center" style="width:30px; background-color:#D6EAF8;">
                                    <input type="radio" name="background" id="background" value="#D6EAF8">
                                </td>
                                <td align="center" style="width:30px; background-color:#D4E6F1;">
                                    <input type="radio" name="background" id="background" value="#D4E6F1">
                                </td>
                                <td align="center" style="width:30px; background-color:#D0ECE7;">
                                    <input type="radio" name="background" id="background" value="#D0ECE7">
                                </td>
                                <td align="center" style="width:30px; background-color:#D4EFDF;">
                                    <input type="radio" name="background" id="background" value="#D4EFDF">
                                </td>
                                <td align="center" style="width:30px; background-color:#2C3E50;">
                                    <input type="radio" name="background" id="background" value="#2C3E50">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F0F3F4;">
                                    <input type="radio" name="background" id="background" value="#F0F3F4">
                                </td>
                                <td align="center" style="width:30px; background-color:#F9E79F;">
                                    <input type="radio" name="background" id="background" value="#F9E79F">
                                </td>
                                <td align="center" style="width:30px; background-color:#F5CBA7;">
                                    <input type="radio" name="background" id="background" value="#F5CBA7">
                                </td>
                                <td align="center" style="width:30px; background-color:#F5B7B1;">
                                    <input type="radio" name="background" id="background" value="#F5B7B1">
                                </td>
                                <td align="center" style="width:30px; background-color:#E6B0AA;">
                                    <input type="radio" name="background" id="background" value="#E6B0AA">
                                </td>
                                <td align="center" style="width:30px; background-color:#D2B4DE;">
                                    <input type="radio" name="background" id="background" value="#D2B4DE">
                                </td>
                                <td align="center" style="width:30px; background-color:#D7BDE2;">
                                    <input type="radio" name="background" id="background" value="#D7BDE2">
                                </td>
                                <td align="center" style="width:30px; background-color:#AED6F1;">
                                    <input type="radio" name="background" id="background" value="#AED6F1">
                                </td>
                                <td align="center" style="width:30px; background-color:#A9CCE3;">
                                    <input type="radio" name="background" id="background" value="#A9CCE3">
                                </td>
                                <td align="center" style="width:30px; background-color:#A2D9CE;">
                                    <input type="radio" name="background" id="background" value="#A2D9CE">
                                </td>
                                <td align="center" style="width:30px; background-color:#A9DFBF;">
                                    <input type="radio" name="background" id="background" value="#A9DFBF">
                                </td>
                                <td align="center" style="width:30px; background-color:#273746;">
                                    <input type="radio" name="background" id="background" value="#273746">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#ECF0F1;">
                                    <input type="radio" name="background" id="background" value="#ECF0F1">
                                </td>
                                <td align="center" style="width:30px; background-color:#F7DC6F;">
                                    <input type="radio" name="background" id="background" value="#F7DC6F">
                                </td>
                                <td align="center" style="width:30px; background-color:#F0B27A;">
                                    <input type="radio" name="background" id="background" value="#F0B27A">
                                </td>
                                <td align="center" style="width:30px; background-color:#F1948A;">
                                    <input type="radio" name="background" id="background" value="#F1948A">
                                </td>
                                <td align="center" style="width:30px; background-color:#D98880;">
                                    <input type="radio" name="background" id="background" value="#D98880">
                                </td>
                                <td align="center" style="width:30px; background-color:#BB8FCE;">
                                    <input type="radio" name="background" id="background" value="#BB8FCE">
                                </td>
                                <td align="center" style="width:30px; background-color:#C39BD3;">
                                    <input type="radio" name="background" id="background" value="#C39BD3">
                                </td>
                                <td align="center" style="width:30px; background-color:#85C1E9;">
                                    <input type="radio" name="background" id="background" value="#85C1E9">
                                </td>
                                <td align="center" style="width:30px; background-color:#7FB3D5;">
                                    <input type="radio" name="background" id="background" value="#7FB3D5">
                                </td>
                                <td align="center" style="width:30px; background-color:#73C6B6;">
                                    <input type="radio" name="background" id="background" value="#73C6B6">
                                </td>
                                <td align="center" style="width:30px; background-color:#7DCEA0;">
                                    <input type="radio" name="background" id="background" value="#7DCEA0">
                                </td>
                                <td align="center" style="width:30px; background-color:#212F3D;">
                                    <input type="radio" name="background" id="background" value="#212F3D">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#D0D3D4;">
                                    <input type="radio" name="background" id="background" value="#D0D3D4">
                                </td>
                                <td align="center" style="width:30px; background-color:#F4D03F;">
                                    <input type="radio" name="background" id="background" value="#F4D03F">
                                </td>
                                <td align="center" style="width:30px; background-color:#EB984E;">
                                    <input type="radio" name="background" id="background" value="#EB984E">
                                </td>
                                <td align="center" style="width:30px; background-color:#EC7063;">
                                    <input type="radio" name="background" id="background" value="#EC7063">
                                </td>
                                <td align="center" style="width:30px; background-color:#CD6155;">
                                    <input type="radio" name="background" id="background" value="#CD6155">
                                </td>
                                <td align="center" style="width:30px; background-color:#A569BD;">
                                    <input type="radio" name="background" id="background" value="#A569BD">
                                </td>
                                <td align="center" style="width:30px; background-color:#AF7AC5;">
                                    <input type="radio" name="background" id="background" value="#AF7AC5">
                                </td>
                                <td align="center" style="width:30px; background-color:#5DADE2;">
                                    <input type="radio" name="background" id="background" value="#5DADE2">
                                </td>
                                <td align="center" style="width:30px; background-color:#5499C7;">
                                    <input type="radio" name="background" id="background" value="#5499C7">
                                </td>
                                <td align="center" style="width:30px; background-color:#45B39D;">
                                    <input type="radio" name="background" id="background" value="#45B39D">
                                </td>
                                <td align="center" style="width:30px; background-color:#52BE80;">
                                    <input type="radio" name="background" id="background" value="#52BE80">
                                </td>
                                <td align="center" style="width:30px; background-color:#1C2833;">
                                    <input type="radio" name="background" id="background" value="#1C2833">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#B3B6B7;">
                                    <input type="radio" name="background" id="background" value="#B3B6B7">
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="background" id="background" value="#F1C40F">
                                </td>
                                <td align="center" style="width:30px; background-color:#E67E22;">
                                    <input type="radio" name="background" id="background" value="#E67E22">
                                </td>
                                <td align="center" style="width:30px; background-color:#E74C3C;">
                                    <input type="radio" name="background" id="background" value="#E74C3C">
                                </td>
                                <td align="center" style="width:30px; background-color:#C0392B;">
                                    <input type="radio" name="background" id="background" value="#C0392B">
                                </td>
                                <td align="center" style="width:30px; background-color:#8E44AD;">
                                    <input type="radio" name="background" id="background" value="#8E44AD">
                                </td>
                                <td align="center" style="width:30px; background-color:#9B59B6;">
                                    <input type="radio" name="background" id="background" value="#9B59B6">
                                </td>
                                <td align="center" style="width:30px; background-color:#3498DB;">
                                    <input type="radio" name="background" id="background" value="#3498DB">
                                </td>
                                <td align="center" style="width:30px; background-color:#2980B9;">
                                    <input type="radio" name="background" id="background" value="#2980B9">
                                </td>
                                <td align="center" style="width:30px; background-color:#16A085;">
                                    <input type="radio" name="background" id="background" value="#16A085">
                                </td>
                                <td align="center" style="width:30px; background-color:#27AE60;">
                                    <input type="radio" name="background" id="background" value="#27AE60">
                                </td>
                                <td align="center" style="width:30px; background-color:#17202A;">
                                    <input type="radio" name="background" id="background" value="#17202A">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#7B7D7D;">
                                    <input type="radio" name="background" id="background" value="#7B7D7D">
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="background" id="background" value="#F1C40F">
                                </td>
                                <td align="center" style="width:30px; background-color:#CA6F1E;">
                                    <input type="radio" name="background" id="background" value="#CA6F1E">
                                </td>
                                <td align="center" style="width:30px; background-color:#CB4335;">
                                    <input type="radio" name="background" id="background" value="#CB4335">
                                </td>
                                <td align="center" style="width:30px; background-color:#A93226;">
                                    <input type="radio" name="background" id="background" value="#A93226">
                                </td>
                                <td align="center" style="width:30px; background-color:#7D3C98;">
                                    <input type="radio" name="background" id="background" value="#7D3C98">
                                </td>
                                <td align="center" style="width:30px; background-color:#884EA0;">
                                    <input type="radio" name="background" id="background" value="#884EA0">
                                </td>
                                <td align="center" style="width:30px; background-color:#2E86C1;">
                                    <input type="radio" name="background" id="background" value="#2E86C1">
                                </td>
                                <td align="center" style="width:30px; background-color:#2471A3;">
                                    <input type="radio" name="background" id="background" value="#2471A3">
                                </td>
                                <td align="center" style="width:30px; background-color:#138D75;">
                                    <input type="radio" name="background" id="background" value="#138D75">
                                </td>
                                <td align="center" style="width:30px; background-color:#229954;">
                                    <input type="radio" name="background" id="background" value="#229954">
                                </td>
                                <td align="center" style="width:30px; background-color:#000;">
                                    <input type="radio" name="background" id="background" value="#000">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="40">
                    <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        border
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="border" id="border">
                            <option value="">none</option>
                            <option value="border-top">top</option>
                            <option value="border-bottom">bottom</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        <input class="textf" type="text" placeholder="1 px" name="borderpx" id="borderpx" size="5"/> px
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #CCC;">
                        <table border="0" cellspacing="0" cellpadding="0" style="margin:0 0 10px;">
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#FFF;">
                                    <input type="radio" name="border_color" id="border_color" value="#FFF">
                                </td>
                                <td align="center" style="width:30px; background-color:#FEF9E7;">
                                    <input type="radio" name="border_color" id="border_color" value="#FEF9E7">
                                </td>
                                <td align="center" style="width:30px; background-color:#FDF2E9;">
                                    <input type="radio" name="border_color" id="border_color" value="#FDF2E9">
                                </td>
                                <td align="center" style="width:30px; background-color:#FDEDEC;">
                                    <input type="radio" name="border_color" id="border_color" value="#FDEDEC">
                                </td>
                                <td align="center" style="width:30px; background-color:#F9EBEA;">
                                    <input type="radio" name="border_color" id="border_color" value="#F9EBEA">
                                </td>
                                <td align="center" style="width:30px; background-color:#F4ECF7;">
                                    <input type="radio" name="border_color" id="border_color" value="#F4ECF7">
                                </td>
                                <td align="center" style="width:30px; background-color:#F5EEF8;">
                                    <input type="radio" name="border_color" id="border_color" value="#F5EEF8">
                                </td>
                                <td align="center" style="width:30px; background-color:#EBF5FB;">
                                    <input type="radio" name="border_color" id="border_color" value="#EBF5FB">
                                </td>
                                <td align="center" style="width:30px; background-color:#EAF2F8;">
                                    <input type="radio" name="border_color" id="border_color" value="#EAF2F8">
                                </td>
                                <td align="center" style="width:30px; background-color:#E8F6F3;">
                                    <input type="radio" name="border_color" id="border_color" value="#E8F6F3">
                                </td>
                                <td align="center" style="width:30px; background-color:#E9F7EF;">
                                    <input type="radio" name="border_color" id="border_color" value="#E9F7EF">
                                </td>
                                <td align="center" style="width:30px; background-color:#566573;">
                                    <input type="radio" name="border_color" id="border_color" value="#566573">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F4F6F7;">
                                    <input type="radio" name="border_color" id="border_color" value="#F4F6F7">
                                </td>
                                <td align="center" style="width:30px; background-color:#FCF3CF;">
                                    <input type="radio" name="border_color" id="border_color" value="#FCF3CF">
                                </td>
                                <td align="center" style="width:30px; background-color:#FAE5D3;">
                                    <input type="radio" name="border_color" id="border_color" value="#FAE5D3">
                                </td>
                                <td align="center" style="width:30px; background-color:#FADBD8;">
                                    <input type="radio" name="border_color" id="border_color" value="#FADBD8">
                                </td>
                                <td align="center" style="width:30px; background-color:#F2D7D5;">
                                    <input type="radio" name="border_color" id="border_color" value="#F2D7D5">
                                </td>
                                <td align="center" style="width:30px; background-color:#E8DAEF;">
                                    <input type="radio" name="border_color" id="border_color" value="#E8DAEF">
                                </td>
                                <td align="center" style="width:30px; background-color:#EBDEF0;">
                                    <input type="radio" name="border_color" id="border_color" value="#EBDEF0">
                                </td>
                                <td align="center" style="width:30px; background-color:#D6EAF8;">
                                    <input type="radio" name="border_color" id="border_color" value="#D6EAF8">
                                </td>
                                <td align="center" style="width:30px; background-color:#D4E6F1;">
                                    <input type="radio" name="border_color" id="border_color" value="#D4E6F1">
                                </td>
                                <td align="center" style="width:30px; background-color:#D0ECE7;">
                                    <input type="radio" name="border_color" id="border_color" value="#D0ECE7">
                                </td>
                                <td align="center" style="width:30px; background-color:#D4EFDF;">
                                    <input type="radio" name="border_color" id="border_color" value="#D4EFDF">
                                </td>
                                <td align="center" style="width:30px; background-color:#2C3E50;">
                                    <input type="radio" name="border_color" id="border_color" value="#2C3E50">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F0F3F4;">
                                    <input type="radio" name="border_color" id="border_color" value="#F0F3F4">
                                </td>
                                <td align="center" style="width:30px; background-color:#F9E79F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F9E79F">
                                </td>
                                <td align="center" style="width:30px; background-color:#F5CBA7;">
                                    <input type="radio" name="border_color" id="border_color" value="#F5CBA7">
                                </td>
                                <td align="center" style="width:30px; background-color:#F5B7B1;">
                                    <input type="radio" name="border_color" id="border_color" value="#F5B7B1">
                                </td>
                                <td align="center" style="width:30px; background-color:#E6B0AA;">
                                    <input type="radio" name="border_color" id="border_color" value="#E6B0AA">
                                </td>
                                <td align="center" style="width:30px; background-color:#D2B4DE;">
                                    <input type="radio" name="border_color" id="border_color" value="#D2B4DE">
                                </td>
                                <td align="center" style="width:30px; background-color:#D7BDE2;">
                                    <input type="radio" name="border_color" id="border_color" value="#D7BDE2">
                                </td>
                                <td align="center" style="width:30px; background-color:#AED6F1;">
                                    <input type="radio" name="border_color" id="border_color" value="#AED6F1">
                                </td>
                                <td align="center" style="width:30px; background-color:#A9CCE3;">
                                    <input type="radio" name="border_color" id="border_color" value="#A9CCE3">
                                </td>
                                <td align="center" style="width:30px; background-color:#A2D9CE;">
                                    <input type="radio" name="border_color" id="border_color" value="#A2D9CE">
                                </td>
                                <td align="center" style="width:30px; background-color:#A9DFBF;">
                                    <input type="radio" name="border_color" id="border_color" value="#A9DFBF">
                                </td>
                                <td align="center" style="width:30px; background-color:#273746;">
                                    <input type="radio" name="border_color" id="border_color" value="#273746">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#ECF0F1;">
                                    <input type="radio" name="border_color" id="border_color" value="#ECF0F1">
                                </td>
                                <td align="center" style="width:30px; background-color:#F7DC6F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F7DC6F">
                                </td>
                                <td align="center" style="width:30px; background-color:#F0B27A;">
                                    <input type="radio" name="border_color" id="border_color" value="#F0B27A">
                                </td>
                                <td align="center" style="width:30px; background-color:#F1948A;">
                                    <input type="radio" name="border_color" id="border_color" value="#F1948A">
                                </td>
                                <td align="center" style="width:30px; background-color:#D98880;">
                                    <input type="radio" name="border_color" id="border_color" value="#D98880">
                                </td>
                                <td align="center" style="width:30px; background-color:#BB8FCE;">
                                    <input type="radio" name="border_color" id="border_color" value="#BB8FCE">
                                </td>
                                <td align="center" style="width:30px; background-color:#C39BD3;">
                                    <input type="radio" name="border_color" id="border_color" value="#C39BD3">
                                </td>
                                <td align="center" style="width:30px; background-color:#85C1E9;">
                                    <input type="radio" name="border_color" id="border_color" value="#85C1E9">
                                </td>
                                <td align="center" style="width:30px; background-color:#7FB3D5;">
                                    <input type="radio" name="border_color" id="border_color" value="#7FB3D5">
                                </td>
                                <td align="center" style="width:30px; background-color:#73C6B6;">
                                    <input type="radio" name="border_color" id="border_color" value="#73C6B6">
                                </td>
                                <td align="center" style="width:30px; background-color:#7DCEA0;">
                                    <input type="radio" name="border_color" id="border_color" value="#7DCEA0">
                                </td>
                                <td align="center" style="width:30px; background-color:#212F3D;">
                                    <input type="radio" name="border_color" id="border_color" value="#212F3D">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#D0D3D4;">
                                    <input type="radio" name="border_color" id="border_color" value="#D0D3D4">
                                </td>
                                <td align="center" style="width:30px; background-color:#F4D03F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F4D03F">
                                </td>
                                <td align="center" style="width:30px; background-color:#EB984E;">
                                    <input type="radio" name="border_color" id="border_color" value="#EB984E">
                                </td>
                                <td align="center" style="width:30px; background-color:#EC7063;">
                                    <input type="radio" name="border_color" id="border_color" value="#EC7063">
                                </td>
                                <td align="center" style="width:30px; background-color:#CD6155;">
                                    <input type="radio" name="border_color" id="border_color" value="#CD6155">
                                </td>
                                <td align="center" style="width:30px; background-color:#A569BD;">
                                    <input type="radio" name="border_color" id="border_color" value="#A569BD">
                                </td>
                                <td align="center" style="width:30px; background-color:#AF7AC5;">
                                    <input type="radio" name="border_color" id="border_color" value="#AF7AC5">
                                </td>
                                <td align="center" style="width:30px; background-color:#5DADE2;">
                                    <input type="radio" name="border_color" id="border_color" value="#5DADE2">
                                </td>
                                <td align="center" style="width:30px; background-color:#5499C7;">
                                    <input type="radio" name="border_color" id="border_color" value="#5499C7">
                                </td>
                                <td align="center" style="width:30px; background-color:#45B39D;">
                                    <input type="radio" name="border_color" id="border_color" value="#45B39D">
                                </td>
                                <td align="center" style="width:30px; background-color:#52BE80;">
                                    <input type="radio" name="border_color" id="border_color" value="#52BE80">
                                </td>
                                <td align="center" style="width:30px; background-color:#1C2833;">
                                    <input type="radio" name="border_color" id="border_color" value="#1C2833">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#B3B6B7;">
                                    <input type="radio" name="border_color" id="border_color" value="#B3B6B7">
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F1C40F">
                                </td>
                                <td align="center" style="width:30px; background-color:#E67E22;">
                                    <input type="radio" name="border_color" id="border_color" value="#E67E22">
                                </td>
                                <td align="center" style="width:30px; background-color:#E74C3C;">
                                    <input type="radio" name="border_color" id="border_color" value="#E74C3C">
                                </td>
                                <td align="center" style="width:30px; background-color:#C0392B;">
                                    <input type="radio" name="border_color" id="border_color" value="#C0392B">
                                </td>
                                <td align="center" style="width:30px; background-color:#8E44AD;">
                                    <input type="radio" name="border_color" id="border_color" value="#8E44AD">
                                </td>
                                <td align="center" style="width:30px; background-color:#9B59B6;">
                                    <input type="radio" name="border_color" id="border_color" value="#9B59B6">
                                </td>
                                <td align="center" style="width:30px; background-color:#3498DB;">
                                    <input type="radio" name="border_color" id="border_color" value="#3498DB">
                                </td>
                                <td align="center" style="width:30px; background-color:#2980B9;">
                                    <input type="radio" name="border_color" id="border_color" value="#2980B9">
                                </td>
                                <td align="center" style="width:30px; background-color:#16A085;">
                                    <input type="radio" name="border_color" id="border_color" value="#16A085">
                                </td>
                                <td align="center" style="width:30px; background-color:#27AE60;">
                                    <input type="radio" name="border_color" id="border_color" value="#27AE60">
                                </td>
                                <td align="center" style="width:30px; background-color:#17202A;">
                                    <input type="radio" name="border_color" id="border_color" value="#17202A">
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#7B7D7D;">
                                    <input type="radio" name="border_color" id="border_color" value="#7B7D7D">
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F1C40F">
                                </td>
                                <td align="center" style="width:30px; background-color:#CA6F1E;">
                                    <input type="radio" name="border_color" id="border_color" value="#CA6F1E">
                                </td>
                                <td align="center" style="width:30px; background-color:#CB4335;">
                                    <input type="radio" name="border_color" id="border_color" value="#CB4335">
                                </td>
                                <td align="center" style="width:30px; background-color:#A93226;">
                                    <input type="radio" name="border_color" id="border_color" value="#A93226">
                                </td>
                                <td align="center" style="width:30px; background-color:#7D3C98;">
                                    <input type="radio" name="border_color" id="border_color" value="#7D3C98">
                                </td>
                                <td align="center" style="width:30px; background-color:#884EA0;">
                                    <input type="radio" name="border_color" id="border_color" value="#884EA0">
                                </td>
                                <td align="center" style="width:30px; background-color:#2E86C1;">
                                    <input type="radio" name="border_color" id="border_color" value="#2E86C1">
                                </td>
                                <td align="center" style="width:30px; background-color:#2471A3;">
                                    <input type="radio" name="border_color" id="border_color" value="#2471A3">
                                </td>
                                <td align="center" style="width:30px; background-color:#138D75;">
                                    <input type="radio" name="border_color" id="border_color" value="#138D75">
                                </td>
                                <td align="center" style="width:30px; background-color:#229954;">
                                    <input type="radio" name="border_color" id="border_color" value="#229954">
                                </td>
                                <td align="center" style="width:30px; background-color:#000;">
                                    <input type="radio" name="border_color" id="border_color" value="#000">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <input onclick="ocurtar2()" class="button_a" style="width: 170px; text-align: center;" value="avbryt" /> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <input type="hidden" name="level" id="level" value="0"/>
                <input type="hidden" name="height" id="height" value="200"/>
                <input type="hidden" name="padre" id="padre" value="<?php echo $divid ?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formpage" />
            </table>
        </form>
    </div>
    <!--END Div insert-->


    <!--bDiv edit-->
    <?php
    $query_EditPage = sprintf("SELECT * FROM pages WHERE level=0 AND padre!='' AND id_page=%s", GetSQLValueString($_GET["bdivid"], "int"));
    $EditPage = mysqli_query($con, $query_EditPage) or die(mysqli_error($con));
    $row_EditPage = mysqli_fetch_assoc($EditPage);
    $totalRows_EditPage = mysqli_num_rows($EditPage);
    ?>
    <?php
    $editFormAction = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
    }

    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formedit")) {
    $updateSQL = sprintf("UPDATE pages SET background=%s, border=%s, borderpx=%s, border_color=%s WHERE id_page=%s",
                        GetSQLValueString($_POST["background"], "text"),
                        GetSQLValueString($_POST["border"], "text"),
                        GetSQLValueString($_POST["borderpx"], "int"),
                        GetSQLValueString($_POST["border_color"], "text"),
                        GetSQLValueString($_POST["id_page"], "int"));
            

    $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

    $insertGoTo = $_SERVER['HTTP_REFERER'];
    if (isset($_SERVER['QUERY_STRING'])) {
        $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
        $insertGoTo .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo));
    }
    ?>
<script>
    function popupopen() {
    event.stopPropagation()
    document.getElementById("myForm3").style.display="block";
    }
    function popupclose() {
    event.stopPropagation()
    document.getElementById("myForm3").style.display="none";
    }
</script>
    <?php if($_GET["bdivid"]):?>
    <div class="subform_cont2">
        <form action="page_settings.php" method="post" name="formedit" id="formedit">
            <table class="subform" style="width:400px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="color: #333;">
                        Redigere Div <?php //echo $divid ?>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center">
                        <table border="0" cellspacing="0" cellpadding="0" style="margin:0 0 10px;">
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#FFF;">
                                    <input type="radio" name="background" id="background" value="#FFF" <?php if ($row_EditPage["background"]=="#FFF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FEF9E7;">
                                    <input type="radio" name="background" id="background" value="#FEF9E7" <?php if ($row_EditPage["background"]=="#FEF9E7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FDF2E9;">
                                    <input type="radio" name="background" id="background" value="#FDF2E9" <?php if ($row_EditPage["background"]=="#FDF2E9") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FDEDEC;">
                                    <input type="radio" name="background" id="background" value="#FDEDEC" <?php if ($row_EditPage["background"]=="#FDEDEC") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F9EBEA;">
                                    <input type="radio" name="background" id="background" value="#F9EBEA" <?php if ($row_EditPage["background"]=="#F9EBEA") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F4ECF7;">
                                    <input type="radio" name="background" id="background" value="#F4ECF7" <?php if ($row_EditPage["background"]=="#F4ECF7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F5EEF8;">
                                    <input type="radio" name="background" id="background" value="#F5EEF8" <?php if ($row_EditPage["background"]=="#F5EEF8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EBF5FB;">
                                    <input type="radio" name="background" id="background" value="#EBF5FB" <?php if ($row_EditPage["background"]=="#EBF5FB") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EAF2F8;">
                                    <input type="radio" name="background" id="background" value="#EAF2F8" <?php if ($row_EditPage["background"]=="#EAF2F8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E8F6F3;">
                                    <input type="radio" name="background" id="background" value="#E8F6F3" <?php if ($row_EditPage["background"]=="#E8F6F3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E9F7EF;">
                                    <input type="radio" name="background" id="background" value="#E9F7EF" <?php if ($row_EditPage["background"]=="#E9F7EF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#566573;">
                                    <input type="radio" name="background" id="background" value="#566573" <?php if ($row_EditPage["background"]=="#566573") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F4F6F7;">
                                    <input type="radio" name="background" id="background" value="#F4F6F7" <?php if ($row_EditPage["background"]=="#F4F6F7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FCF3CF;">
                                    <input type="radio" name="background" id="background" value="#FCF3CF" <?php if ($row_EditPage["background"]=="#FCF3CF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FAE5D3;">
                                    <input type="radio" name="background" id="background" value="#FAE5D3" <?php if ($row_EditPage["background"]=="#FAE5D3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FADBD8;">
                                    <input type="radio" name="background" id="background" value="#FADBD8" <?php if ($row_EditPage["background"]=="#FADBD8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F2D7D5;">
                                    <input type="radio" name="background" id="background" value="#F2D7D5" <?php if ($row_EditPage["background"]=="#F2D7D5") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E8DAEF;">
                                    <input type="radio" name="background" id="background" value="#E8DAEF" <?php if ($row_EditPage["background"]=="#E8DAEF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EBDEF0;">
                                    <input type="radio" name="background" id="background" value="#EBDEF0" <?php if ($row_EditPage["background"]=="#EBDEF0") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D6EAF8;">
                                    <input type="radio" name="background" id="background" value="#D6EAF8" <?php if ($row_EditPage["background"]=="#D6EAF8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D4E6F1;">
                                    <input type="radio" name="background" id="background" value="#D4E6F1" <?php if ($row_EditPage["background"]=="#D4E6F1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D0ECE7;">
                                    <input type="radio" name="background" id="background" value="#D0ECE7" <?php if ($row_EditPage["background"]=="#D0ECE7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D4EFDF;">
                                    <input type="radio" name="background" id="background" value="#D4EFDF" <?php if ($row_EditPage["background"]=="#D4EFDF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2C3E50;">
                                    <input type="radio" name="background" id="background" value="#2C3E50" <?php if ($row_EditPage["background"]=="#2C3E50") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F0F3F4;">
                                    <input type="radio" name="background" id="background" value="#F0F3F4" <?php if ($row_EditPage["background"]=="#F0F3F4") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F9E79F;">
                                    <input type="radio" name="background" id="background" value="#F9E79F" <?php if ($row_EditPage["background"]=="#F9E79F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F5CBA7;">
                                    <input type="radio" name="background" id="background" value="#F5CBA7" <?php if ($row_EditPage["background"]=="#F5CBA7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F5B7B1;">
                                    <input type="radio" name="background" id="background" value="#F5B7B1" <?php if ($row_EditPage["background"]=="#F5B7B1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E6B0AA;">
                                    <input type="radio" name="background" id="background" value="#E6B0AA" <?php if ($row_EditPage["background"]=="#E6B0AA") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D2B4DE;">
                                    <input type="radio" name="background" id="background" value="#D2B4DE" <?php if ($row_EditPage["background"]=="#D2B4DE") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D7BDE2;">
                                    <input type="radio" name="background" id="background" value="#D7BDE2" <?php if ($row_EditPage["background"]=="#D7BDE2") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#AED6F1;">
                                    <input type="radio" name="background" id="background" value="#AED6F1" <?php if ($row_EditPage["background"]=="#AED6F1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A9CCE3;">
                                    <input type="radio" name="background" id="background" value="#A9CCE3" <?php if ($row_EditPage["background"]=="#A9CCE3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A2D9CE;">
                                    <input type="radio" name="background" id="background" value="#A2D9CE" <?php if ($row_EditPage["background"]=="#A2D9CE") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A9DFBF;">
                                    <input type="radio" name="background" id="background" value="#A9DFBF" <?php if ($row_EditPage["background"]=="#A9DFBF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#273746;">
                                    <input type="radio" name="background" id="background" value="#273746" <?php if ($row_EditPage["background"]=="#273746") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#ECF0F1;">
                                    <input type="radio" name="background" id="background" value="#ECF0F1" <?php if ($row_EditPage["background"]=="#ECF0F1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F7DC6F;">
                                    <input type="radio" name="background" id="background" value="#F7DC6F" <?php if ($row_EditPage["background"]=="#F7DC6F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F0B27A;">
                                    <input type="radio" name="background" id="background" value="#F0B27A" <?php if ($row_EditPage["background"]=="#F0B27A") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F1948A;">
                                    <input type="radio" name="background" id="background" value="#F1948A" <?php if ($row_EditPage["background"]=="#F1948A") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D98880;">
                                    <input type="radio" name="background" id="background" value="#D98880" <?php if ($row_EditPage["background"]=="#D98880") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#BB8FCE;">
                                    <input type="radio" name="background" id="background" value="#BB8FCE" <?php if ($row_EditPage["background"]=="#BB8FCE") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#C39BD3;">
                                    <input type="radio" name="background" id="background" value="#C39BD3" <?php if ($row_EditPage["background"]=="#C39BD3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#85C1E9;">
                                    <input type="radio" name="background" id="background" value="#85C1E9" <?php if ($row_EditPage["background"]=="#85C1E9") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#7FB3D5;">
                                    <input type="radio" name="background" id="background" value="#7FB3D5" <?php if ($row_EditPage["background"]=="#7FB3D5") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#73C6B6;">
                                    <input type="radio" name="background" id="background" value="#73C6B6" <?php if ($row_EditPage["background"]=="#73C6B6") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#7DCEA0;">
                                    <input type="radio" name="background" id="background" value="#7DCEA0" <?php if ($row_EditPage["background"]=="#7DCEA0") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#212F3D;">
                                    <input type="radio" name="background" id="background" value="#212F3D" <?php if ($row_EditPage["background"]=="#212F3D") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#D0D3D4;">
                                    <input type="radio" name="background" id="background" value="#D0D3D4" <?php if ($row_EditPage["background"]=="#D0D3D4") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F4D03F;">
                                    <input type="radio" name="background" id="background" value="#F4D03F" <?php if ($row_EditPage["background"]=="#F4D03F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EB984E;">
                                    <input type="radio" name="background" id="background" value="#EB984E" <?php if ($row_EditPage["background"]=="#EB984E") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EC7063;">
                                    <input type="radio" name="background" id="background" value="#EC7063" <?php if ($row_EditPage["background"]=="#EC7063") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#CD6155;">
                                    <input type="radio" name="background" id="background" value="#CD6155" <?php if ($row_EditPage["background"]=="#CD6155") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A569BD;">
                                    <input type="radio" name="background" id="background" value="#A569BD" <?php if ($row_EditPage["background"]=="#A569BD") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#AF7AC5;">
                                    <input type="radio" name="background" id="background" value="#AF7AC5" <?php if ($row_EditPage["background"]=="#AF7AC5") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#5DADE2;">
                                    <input type="radio" name="background" id="background" value="#5DADE2" <?php if ($row_EditPage["background"]=="#5DADE2") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#5499C7;">
                                    <input type="radio" name="background" id="background" value="#5499C7" <?php if ($row_EditPage["background"]=="#5499C7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#45B39D;">
                                    <input type="radio" name="background" id="background" value="#45B39D" <?php if ($row_EditPage["background"]=="#45B39D") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#52BE80;">
                                    <input type="radio" name="background" id="background" value="#52BE80" <?php if ($row_EditPage["background"]=="#52BE80") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#1C2833;">
                                    <input type="radio" name="background" id="background" value="#1C2833" <?php if ($row_EditPage["background"]=="#1C2833") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#B3B6B7;">
                                    <input type="radio" name="background" id="background" value="#B3B6B7" <?php if ($row_EditPage["background"]=="#B3B6B7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="background" id="background" value="#F1C40F" <?php if ($row_EditPage["background"]=="#F1C40F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E67E22;">
                                    <input type="radio" name="background" id="background" value="#E67E22" <?php if ($row_EditPage["background"]=="#E67E22") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E74C3C;">
                                    <input type="radio" name="background" id="background" value="#E74C3C" <?php if ($row_EditPage["background"]=="#E74C3C") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#C0392B;">
                                    <input type="radio" name="background" id="background" value="#C0392B" <?php if ($row_EditPage["background"]=="#C0392B") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#8E44AD;">
                                    <input type="radio" name="background" id="background" value="#8E44AD" <?php if ($row_EditPage["background"]=="#8E44AD") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#9B59B6;">
                                    <input type="radio" name="background" id="background" value="#9B59B6" <?php if ($row_EditPage["background"]=="#9B59B6") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#3498DB;">
                                    <input type="radio" name="background" id="background" value="#3498DB" <?php if ($row_EditPage["background"]=="#3498DB") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2980B9;">
                                    <input type="radio" name="background" id="background" value="#2980B9" <?php if ($row_EditPage["background"]=="#2980B9") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#16A085;">
                                    <input type="radio" name="background" id="background" value="#16A085" <?php if ($row_EditPage["background"]=="#16A085") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#27AE60;">
                                    <input type="radio" name="background" id="background" value="#27AE60" <?php if ($row_EditPage["background"]=="#27AE60") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#17202A;">
                                    <input type="radio" name="background" id="background" value="#17202A" <?php if ($row_EditPage["background"]=="#17202A") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#7B7D7D;">
                                    <input type="radio" name="background" id="background" value="#7B7D7D" <?php if ($row_EditPage["background"]=="#7B7D7D") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="background" id="background" value="#F1C40F" <?php if ($row_EditPage["background"]=="#F1C40F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#CA6F1E;">
                                    <input type="radio" name="background" id="background" value="#CA6F1E" <?php if ($row_EditPage["background"]=="#CA6F1E") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#CB4335;">
                                    <input type="radio" name="background" id="background" value="#CB4335" <?php if ($row_EditPage["background"]=="#CB4335") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A93226;">
                                    <input type="radio" name="background" id="background" value="#A93226" <?php if ($row_EditPage["background"]=="#A93226") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#7D3C98;">
                                    <input type="radio" name="background" id="background" value="#7D3C98" <?php if ($row_EditPage["background"]=="#7D3C98") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#884EA0;">
                                    <input type="radio" name="background" id="background" value="#884EA0" <?php if ($row_EditPage["background"]=="#884EA0") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2E86C1;">
                                    <input type="radio" name="background" id="background" value="#2E86C1" <?php if ($row_EditPage["background"]=="#2E86C1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2471A3;">
                                    <input type="radio" name="background" id="background" value="#2471A3" <?php if ($row_EditPage["background"]=="#2471A3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#138D75;">
                                    <input type="radio" name="background" id="background" value="#138D75" <?php if ($row_EditPage["background"]=="#138D75") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#229954;">
                                    <input type="radio" name="background" id="background" value="#229954" <?php if ($row_EditPage["background"]=="#229954") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#000;">
                                    <input type="radio" name="background" id="background" value="#000" <?php if ($row_EditPage["background"]=="#000") echo "checked"; ?>>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="40">
                    <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        border
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="border" id="border">
                            <option value="" <?php if ($row_EditPage["border"]=="") echo "selected"; ?>>none</option>
                            <option value="border-top" <?php if ($row_EditPage["border"]=="border-top") echo "selected"; ?>>top</option>
                            <option value="border-bottom" <?php if ($row_EditPage["border"]=="border-bottom") echo "selected"; ?>>bottom</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        <input class="textf" type="text" placeholder="1 px" name="borderpx" id="borderpx" value="<?php echo $row_EditPage['borderpx']; ?>" size="5"/> px
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #CCC;">
                    <table border="0" cellspacing="0" cellpadding="0" style="margin:0 0 10px;">
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#FFF;">
                                    <input type="radio" name="border_color" id="border_color" value="#FFF" <?php if ($row_EditPage["border_color"]=="#FFF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FEF9E7;">
                                    <input type="radio" name="border_color" id="border_color" value="#FEF9E7" <?php if ($row_EditPage["border_color"]=="#FEF9E7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FDF2E9;">
                                    <input type="radio" name="border_color" id="border_color" value="#FDF2E9" <?php if ($row_EditPage["border_color"]=="#FDF2E9") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FDEDEC;">
                                    <input type="radio" name="border_color" id="border_color" value="#FDEDEC" <?php if ($row_EditPage["border_color"]=="#FDEDEC") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F9EBEA;">
                                    <input type="radio" name="border_color" id="border_color" value="#F9EBEA" <?php if ($row_EditPage["border_color"]=="#F9EBEA") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F4ECF7;">
                                    <input type="radio" name="border_color" id="border_color" value="#F4ECF7" <?php if ($row_EditPage["border_color"]=="#F4ECF7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F5EEF8;">
                                    <input type="radio" name="border_color" id="border_color" value="#F5EEF8" <?php if ($row_EditPage["border_color"]=="#F5EEF8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EBF5FB;">
                                    <input type="radio" name="border_color" id="border_color" value="#EBF5FB" <?php if ($row_EditPage["border_color"]=="#EBF5FB") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EAF2F8;">
                                    <input type="radio" name="border_color" id="border_color" value="#EAF2F8" <?php if ($row_EditPage["border_color"]=="#EAF2F8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E8F6F3;">
                                    <input type="radio" name="border_color" id="border_color" value="#E8F6F3" <?php if ($row_EditPage["border_color"]=="#E8F6F3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E9F7EF;">
                                    <input type="radio" name="border_color" id="border_color" value="#E9F7EF" <?php if ($row_EditPage["border_color"]=="#E9F7EF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#566573;">
                                    <input type="radio" name="border_color" id="border_color" value="#566573" <?php if ($row_EditPage["border_color"]=="#566573") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F4F6F7;">
                                    <input type="radio" name="border_color" id="border_color" value="#F4F6F7" <?php if ($row_EditPage["border_color"]=="#F4F6F7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FCF3CF;">
                                    <input type="radio" name="border_color" id="border_color" value="#FCF3CF" <?php if ($row_EditPage["border_color"]=="#FCF3CF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FAE5D3;">
                                    <input type="radio" name="border_color" id="border_color" value="#FAE5D3" <?php if ($row_EditPage["border_color"]=="#FAE5D3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#FADBD8;">
                                    <input type="radio" name="border_color" id="border_color" value="#FADBD8" <?php if ($row_EditPage["border_color"]=="#FADBD8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F2D7D5;">
                                    <input type="radio" name="border_color" id="border_color" value="#F2D7D5" <?php if ($row_EditPage["border_color"]=="#F2D7D5") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E8DAEF;">
                                    <input type="radio" name="border_color" id="border_color" value="#E8DAEF" <?php if ($row_EditPage["border_color"]=="#E8DAEF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EBDEF0;">
                                    <input type="radio" name="border_color" id="border_color" value="#EBDEF0" <?php if ($row_EditPage["border_color"]=="#EBDEF0") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D6EAF8;">
                                    <input type="radio" name="border_color" id="border_color" value="#D6EAF8" <?php if ($row_EditPage["border_color"]=="#D6EAF8") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D4E6F1;">
                                    <input type="radio" name="border_color" id="border_color" value="#D4E6F1" <?php if ($row_EditPage["border_color"]=="#D4E6F1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D0ECE7;">
                                    <input type="radio" name="border_color" id="border_color" value="#D0ECE7" <?php if ($row_EditPage["border_color"]=="#D0ECE7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D4EFDF;">
                                    <input type="radio" name="border_color" id="border_color" value="#D4EFDF" <?php if ($row_EditPage["border_color"]=="#D4EFDF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2C3E50;">
                                    <input type="radio" name="border_color" id="border_color" value="#2C3E50" <?php if ($row_EditPage["border_color"]=="#2C3E50") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#F0F3F4;">
                                    <input type="radio" name="border_color" id="border_color" value="#F0F3F4" <?php if ($row_EditPage["border_color"]=="#F0F3F4") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F9E79F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F9E79F" <?php if ($row_EditPage["border_color"]=="#F9E79F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F5CBA7;">
                                    <input type="radio" name="border_color" id="border_color" value="#F5CBA7" <?php if ($row_EditPage["border_color"]=="#F5CBA7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F5B7B1;">
                                    <input type="radio" name="border_color" id="border_color" value="#F5B7B1" <?php if ($row_EditPage["border_color"]=="#F5B7B1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E6B0AA;">
                                    <input type="radio" name="border_color" id="border_color" value="#E6B0AA" <?php if ($row_EditPage["border_color"]=="#E6B0AA") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D2B4DE;">
                                    <input type="radio" name="border_color" id="border_color" value="#D2B4DE" <?php if ($row_EditPage["border_color"]=="#D2B4DE") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D7BDE2;">
                                    <input type="radio" name="border_color" id="border_color" value="#D7BDE2" <?php if ($row_EditPage["border_color"]=="#D7BDE2") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#AED6F1;">
                                    <input type="radio" name="border_color" id="border_color" value="#AED6F1" <?php if ($row_EditPage["border_color"]=="#AED6F1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A9CCE3;">
                                    <input type="radio" name="border_color" id="border_color" value="#A9CCE3" <?php if ($row_EditPage["border_color"]=="#A9CCE3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A2D9CE;">
                                    <input type="radio" name="border_color" id="border_color" value="#A2D9CE" <?php if ($row_EditPage["border_color"]=="#A2D9CE") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A9DFBF;">
                                    <input type="radio" name="border_color" id="border_color" value="#A9DFBF" <?php if ($row_EditPage["border_color"]=="#A9DFBF") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#273746;">
                                    <input type="radio" name="border_color" id="border_color" value="#273746" <?php if ($row_EditPage["border_color"]=="#273746") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#ECF0F1;">
                                    <input type="radio" name="border_color" id="border_color" value="#ECF0F1" <?php if ($row_EditPage["border_color"]=="#ECF0F1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F7DC6F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F7DC6F" <?php if ($row_EditPage["border_color"]=="#F7DC6F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F0B27A;">
                                    <input type="radio" name="border_color" id="border_color" value="#F0B27A" <?php if ($row_EditPage["border_color"]=="#F0B27A") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F1948A;">
                                    <input type="radio" name="border_color" id="border_color" value="#F1948A" <?php if ($row_EditPage["border_color"]=="#F1948A") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#D98880;">
                                    <input type="radio" name="border_color" id="border_color" value="#D98880" <?php if ($row_EditPage["border_color"]=="#D98880") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#BB8FCE;">
                                    <input type="radio" name="border_color" id="border_color" value="#BB8FCE" <?php if ($row_EditPage["border_color"]=="#BB8FCE") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#C39BD3;">
                                    <input type="radio" name="border_color" id="border_color" value="#C39BD3" <?php if ($row_EditPage["border_color"]=="#C39BD3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#85C1E9;">
                                    <input type="radio" name="border_color" id="border_color" value="#85C1E9" <?php if ($row_EditPage["border_color"]=="#85C1E9") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#7FB3D5;">
                                    <input type="radio" name="border_color" id="border_color" value="#7FB3D5" <?php if ($row_EditPage["border_color"]=="#7FB3D5") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#73C6B6;">
                                    <input type="radio" name="border_color" id="border_color" value="#73C6B6" <?php if ($row_EditPage["border_color"]=="#73C6B6") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#7DCEA0;">
                                    <input type="radio" name="border_color" id="border_color" value="#7DCEA0" <?php if ($row_EditPage["border_color"]=="#7DCEA0") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#212F3D;">
                                    <input type="radio" name="border_color" id="border_color" value="#212F3D" <?php if ($row_EditPage["border_color"]=="#212F3D") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#D0D3D4;">
                                    <input type="radio" name="border_color" id="border_color" value="#D0D3D4" <?php if ($row_EditPage["border_color"]=="#D0D3D4") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F4D03F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F4D03F" <?php if ($row_EditPage["border_color"]=="#F4D03F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EB984E;">
                                    <input type="radio" name="border_color" id="border_color" value="#EB984E" <?php if ($row_EditPage["border_color"]=="#EB984E") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#EC7063;">
                                    <input type="radio" name="border_color" id="border_color" value="#EC7063" <?php if ($row_EditPage["border_color"]=="#EC7063") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#CD6155;">
                                    <input type="radio" name="border_color" id="border_color" value="#CD6155" <?php if ($row_EditPage["border_color"]=="#CD6155") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A569BD;">
                                    <input type="radio" name="border_color" id="border_color" value="#A569BD" <?php if ($row_EditPage["border_color"]=="#A569BD") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#AF7AC5;">
                                    <input type="radio" name="border_color" id="border_color" value="#AF7AC5" <?php if ($row_EditPage["border_color"]=="#AF7AC5") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#5DADE2;">
                                    <input type="radio" name="border_color" id="border_color" value="#5DADE2" <?php if ($row_EditPage["border_color"]=="#5DADE2") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#5499C7;">
                                    <input type="radio" name="border_color" id="border_color" value="#5499C7" <?php if ($row_EditPage["border_color"]=="#5499C7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#45B39D;">
                                    <input type="radio" name="border_color" id="border_color" value="#45B39D" <?php if ($row_EditPage["border_color"]=="#45B39D") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#52BE80;">
                                    <input type="radio" name="border_color" id="border_color" value="#52BE80" <?php if ($row_EditPage["border_color"]=="#52BE80") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#1C2833;">
                                    <input type="radio" name="border_color" id="border_color" value="#1C2833" <?php if ($row_EditPage["border_color"]=="#1C2833") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#B3B6B7;">
                                    <input type="radio" name="border_color" id="border_color" value="#B3B6B7" <?php if ($row_EditPage["border_color"]=="#B3B6B7") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F1C40F" <?php if ($row_EditPage["border_color"]=="#F1C40F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E67E22;">
                                    <input type="radio" name="border_color" id="border_color" value="#E67E22" <?php if ($row_EditPage["border_color"]=="#E67E22") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#E74C3C;">
                                    <input type="radio" name="border_color" id="border_color" value="#E74C3C" <?php if ($row_EditPage["border_color"]=="#E74C3C") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#C0392B;">
                                    <input type="radio" name="border_color" id="border_color" value="#C0392B" <?php if ($row_EditPage["border_color"]=="#C0392B") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#8E44AD;">
                                    <input type="radio" name="border_color" id="border_color" value="#8E44AD" <?php if ($row_EditPage["border_color"]=="#8E44AD") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#9B59B6;">
                                    <input type="radio" name="border_color" id="border_color" value="#9B59B6" <?php if ($row_EditPage["border_color"]=="#9B59B6") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#3498DB;">
                                    <input type="radio" name="border_color" id="border_color" value="#3498DB" <?php if ($row_EditPage["border_color"]=="#3498DB") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2980B9;">
                                    <input type="radio" name="border_color" id="border_color" value="#2980B9" <?php if ($row_EditPage["border_color"]=="#2980B9") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#16A085;">
                                    <input type="radio" name="border_color" id="border_color" value="#16A085" <?php if ($row_EditPage["border_color"]=="#16A085") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#27AE60;">
                                    <input type="radio" name="border_color" id="border_color" value="#27AE60" <?php if ($row_EditPage["border_color"]=="#27AE60") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#17202A;">
                                    <input type="radio" name="border_color" id="border_color" value="#17202A" <?php if ($row_EditPage["border_color"]=="#17202A") echo "checked"; ?>>
                                </td>
                            </tr>
                            <tr height="30">
                                <td align="center" style="width:30px; background-color:#7B7D7D;">
                                    <input type="radio" name="border_color" id="border_color" value="#7B7D7D" <?php if ($row_EditPage["border_color"]=="#7B7D7D") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#F1C40F;">
                                    <input type="radio" name="border_color" id="border_color" value="#F1C40F" <?php if ($row_EditPage["border_color"]=="#F1C40F") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#CA6F1E;">
                                    <input type="radio" name="border_color" id="border_color" value="#CA6F1E" <?php if ($row_EditPage["border_color"]=="#CA6F1E") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#CB4335;">
                                    <input type="radio" name="border_color" id="border_color" value="#CB4335" <?php if ($row_EditPage["border_color"]=="#CB4335") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#A93226;">
                                    <input type="radio" name="border_color" id="border_color" value="#A93226" <?php if ($row_EditPage["border_color"]=="#A93226") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#7D3C98;">
                                    <input type="radio" name="border_color" id="border_color" value="#7D3C98" <?php if ($row_EditPage["border_color"]=="#7D3C98") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#884EA0;">
                                    <input type="radio" name="border_color" id="border_color" value="#884EA0" <?php if ($row_EditPage["border_color"]=="#884EA0") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2E86C1;">
                                    <input type="radio" name="border_color" id="border_color" value="#2E86C1" <?php if ($row_EditPage["border_color"]=="#2E86C1") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#2471A3;">
                                    <input type="radio" name="border_color" id="border_color" value="#2471A3" <?php if ($row_EditPage["border_color"]=="#2471A3") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#138D75;">
                                    <input type="radio" name="border_color" id="border_color" value="#138D75" <?php if ($row_EditPage["border_color"]=="#138D75") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#229954;">
                                    <input type="radio" name="border_color" id="border_color" value="#229954" <?php if ($row_EditPage["border_color"]=="#229954") echo "checked"; ?>>
                                </td>
                                <td align="center" style="width:30px; background-color:#000;">
                                    <input type="radio" name="border_color" id="border_color" value="#000" <?php if ($row_EditPage["border_color"]=="#000") echo "checked"; ?>>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="javascript:history.back()"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera" />
                    </td>
                </tr>
                <input type="hidden" name="id_page" id="id_page" value="<?php echo $_GET["bdivid"]; ?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
            </table>
        </form>
    </div>
    <?php endif ?>
    <!--END bDiv edit-->

    <!--Element insert-->
    <?php if($_GET["eleid"]):?>
    <div id="myForm3" class="subform_cont2">
        <form action="page_settings.php" method="post" name="formpage" id="formpage">
        <table class="subform" style="padding:0 5px;" border="0" cellspacing="0" cellpadding="0">
            <tr height="50">
                <td colspan="2" valign="middle" align="center" style="color: #333;">
                    New Element <?php //echo $divid ?>
                </td>
            </tr>
            <tr>
                <td style="width:50%; border-right:1px solid #CCC; padding:0 5px 0 0;">
                    <table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
                        <tr height="40">
                            <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666;">
                                Width:
                                <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="border" id="border">
                                    <option value="16.66">1/6</option>
                                    <option value="20">1/5</option>
                                    <option value="25">1/4</option>
                                    <option value="33.33">1/3</option>
                                    <option value="50">1/2</option>
                                    <option value="100">1</option>
                                </select>
                            </td>
                            <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666;">
                                Height <input class="textf" type="text" placeholder="100" name="borderpx" id="borderpx" size="5"/> px
                            </td>
                        </tr>
                        <tr height="60">
                            <td style="border-bottom:1px solid #CCC;" colspan="2" valign="middle" align="center">
                                <table border="0" cellspacing="0" cellpadding="0" style="margin:10px 0;">
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#FFF;">
                                            <input type="radio" name="background" id="background" value="#FFF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FEF9E7;">
                                            <input type="radio" name="background" id="background" value="#FEF9E7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FDF2E9;">
                                            <input type="radio" name="background" id="background" value="#FDF2E9">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FDEDEC;">
                                            <input type="radio" name="background" id="background" value="#FDEDEC">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F9EBEA;">
                                            <input type="radio" name="background" id="background" value="#F9EBEA">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F4ECF7;">
                                            <input type="radio" name="background" id="background" value="#F4ECF7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F5EEF8;">
                                            <input type="radio" name="background" id="background" value="#F5EEF8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EBF5FB;">
                                            <input type="radio" name="background" id="background" value="#EBF5FB">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EAF2F8;">
                                            <input type="radio" name="background" id="background" value="#EAF2F8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E8F6F3;">
                                            <input type="radio" name="background" id="background" value="#E8F6F3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E9F7EF;">
                                            <input type="radio" name="background" id="background" value="#E9F7EF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#566573;">
                                            <input type="radio" name="background" id="background" value="#566573">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#F4F6F7;">
                                            <input type="radio" name="background" id="background" value="#F4F6F7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FCF3CF;">
                                            <input type="radio" name="background" id="background" value="#FCF3CF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FAE5D3;">
                                            <input type="radio" name="background" id="background" value="#FAE5D3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FADBD8;">
                                            <input type="radio" name="background" id="background" value="#FADBD8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F2D7D5;">
                                            <input type="radio" name="background" id="background" value="#F2D7D5">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E8DAEF;">
                                            <input type="radio" name="background" id="background" value="#E8DAEF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EBDEF0;">
                                            <input type="radio" name="background" id="background" value="#EBDEF0">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D6EAF8;">
                                            <input type="radio" name="background" id="background" value="#D6EAF8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D4E6F1;">
                                            <input type="radio" name="background" id="background" value="#D4E6F1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D0ECE7;">
                                            <input type="radio" name="background" id="background" value="#D0ECE7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D4EFDF;">
                                            <input type="radio" name="background" id="background" value="#D4EFDF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2C3E50;">
                                            <input type="radio" name="background" id="background" value="#2C3E50">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#F0F3F4;">
                                            <input type="radio" name="background" id="background" value="#F0F3F4">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F9E79F;">
                                            <input type="radio" name="background" id="background" value="#F9E79F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F5CBA7;">
                                            <input type="radio" name="background" id="background" value="#F5CBA7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F5B7B1;">
                                            <input type="radio" name="background" id="background" value="#F5B7B1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E6B0AA;">
                                            <input type="radio" name="background" id="background" value="#E6B0AA">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D2B4DE;">
                                            <input type="radio" name="background" id="background" value="#D2B4DE">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D7BDE2;">
                                            <input type="radio" name="background" id="background" value="#D7BDE2">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#AED6F1;">
                                            <input type="radio" name="background" id="background" value="#AED6F1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A9CCE3;">
                                            <input type="radio" name="background" id="background" value="#A9CCE3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A2D9CE;">
                                            <input type="radio" name="background" id="background" value="#A2D9CE">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A9DFBF;">
                                            <input type="radio" name="background" id="background" value="#A9DFBF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#273746;">
                                            <input type="radio" name="background" id="background" value="#273746">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#ECF0F1;">
                                            <input type="radio" name="background" id="background" value="#ECF0F1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F7DC6F;">
                                            <input type="radio" name="background" id="background" value="#F7DC6F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F0B27A;">
                                            <input type="radio" name="background" id="background" value="#F0B27A">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F1948A;">
                                            <input type="radio" name="background" id="background" value="#F1948A">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D98880;">
                                            <input type="radio" name="background" id="background" value="#D98880">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#BB8FCE;">
                                            <input type="radio" name="background" id="background" value="#BB8FCE">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#C39BD3;">
                                            <input type="radio" name="background" id="background" value="#C39BD3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#85C1E9;">
                                            <input type="radio" name="background" id="background" value="#85C1E9">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#7FB3D5;">
                                            <input type="radio" name="background" id="background" value="#7FB3D5">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#73C6B6;">
                                            <input type="radio" name="background" id="background" value="#73C6B6">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#7DCEA0;">
                                            <input type="radio" name="background" id="background" value="#7DCEA0">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#212F3D;">
                                            <input type="radio" name="background" id="background" value="#212F3D">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#D0D3D4;">
                                            <input type="radio" name="background" id="background" value="#D0D3D4">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F4D03F;">
                                            <input type="radio" name="background" id="background" value="#F4D03F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EB984E;">
                                            <input type="radio" name="background" id="background" value="#EB984E">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EC7063;">
                                            <input type="radio" name="background" id="background" value="#EC7063">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#CD6155;">
                                            <input type="radio" name="background" id="background" value="#CD6155">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A569BD;">
                                            <input type="radio" name="background" id="background" value="#A569BD">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#AF7AC5;">
                                            <input type="radio" name="background" id="background" value="#AF7AC5">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#5DADE2;">
                                            <input type="radio" name="background" id="background" value="#5DADE2">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#5499C7;">
                                            <input type="radio" name="background" id="background" value="#5499C7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#45B39D;">
                                            <input type="radio" name="background" id="background" value="#45B39D">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#52BE80;">
                                            <input type="radio" name="background" id="background" value="#52BE80">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#1C2833;">
                                            <input type="radio" name="background" id="background" value="#1C2833">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#B3B6B7;">
                                            <input type="radio" name="background" id="background" value="#B3B6B7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F1C40F;">
                                            <input type="radio" name="background" id="background" value="#F1C40F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E67E22;">
                                            <input type="radio" name="background" id="background" value="#E67E22">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E74C3C;">
                                            <input type="radio" name="background" id="background" value="#E74C3C">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#C0392B;">
                                            <input type="radio" name="background" id="background" value="#C0392B">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#8E44AD;">
                                            <input type="radio" name="background" id="background" value="#8E44AD">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#9B59B6;">
                                            <input type="radio" name="background" id="background" value="#9B59B6">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#3498DB;">
                                            <input type="radio" name="background" id="background" value="#3498DB">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2980B9;">
                                            <input type="radio" name="background" id="background" value="#2980B9">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#16A085;">
                                            <input type="radio" name="background" id="background" value="#16A085">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#27AE60;">
                                            <input type="radio" name="background" id="background" value="#27AE60">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#17202A;">
                                            <input type="radio" name="background" id="background" value="#17202A">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#7B7D7D;">
                                            <input type="radio" name="background" id="background" value="#7B7D7D">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F1C40F;">
                                            <input type="radio" name="background" id="background" value="#F1C40F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#CA6F1E;">
                                            <input type="radio" name="background" id="background" value="#CA6F1E">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#CB4335;">
                                            <input type="radio" name="background" id="background" value="#CB4335">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A93226;">
                                            <input type="radio" name="background" id="background" value="#A93226">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#7D3C98;">
                                            <input type="radio" name="background" id="background" value="#7D3C98">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#884EA0;">
                                            <input type="radio" name="background" id="background" value="#884EA0">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2E86C1;">
                                            <input type="radio" name="background" id="background" value="#2E86C1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2471A3;">
                                            <input type="radio" name="background" id="background" value="#2471A3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#138D75;">
                                            <input type="radio" name="background" id="background" value="#138D75">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#229954;">
                                            <input type="radio" name="background" id="background" value="#229954">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#000;">
                                            <input type="radio" name="background" id="background" value="#000">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="40">
                            <td width="50%" valign="middle" align="left" style="font-size:14px; color:#666; border-bottom:1px solid #CCC;">
                                border-radiun: <input class="textf" type="text" placeholder="2" name="borderpx" id="borderpx" size="5"/> px
                            </td>
                            <td width="50%" valign="middle" align="right" style="font-size:14px; color:#666; border-bottom:1px solid #CCC;">
                                Shadow:
                                <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="border" id="border">
                                    <option value="16.66">1/6</option>
                                    <option value="20">1/5</option>
                                    <option value="25">1/4</option>
                                    <option value="33.33">1/3</option>
                                    <option value="50">1/2</option>
                                    <option value="100">1</option>
                                </select>
                            </td>
                        </tr>
                        <tr height="40">
                            <td colspan="2" valign="middle" align="center" style="font-size:14px; color:#666;">
                                float:
                                <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="border" id="border">
                                    <option value="">none</option>
                                    <option value="border-top">top</option>
                                    <option value="border-bottom">bottom</option>
                                </select>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center" style="font-size:14px; color:#666;">
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:50%; padding:0 0 0 5px;">
                    <table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
                        <tr height="40">
                            <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666;">
                                border
                                <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="border" id="border">
                                    <option value="">none</option>
                                    <option value="border-top">top</option>
                                    <option value="border-bottom">bottom</option>
                                </select>
                            </td>
                            <td width="50%" valign="middle" align="center" style="font-size:14px; color:#666;">
                                <input class="textf" type="text" placeholder="1 px" name="borderpx" id="borderpx" size="5"/> px
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <table border="0" cellspacing="0" cellpadding="0" style="margin:0 0 10px;">
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#FFF;">
                                            <input type="radio" name="border_color" id="border_color" value="#FFF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FEF9E7;">
                                            <input type="radio" name="border_color" id="border_color" value="#FEF9E7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FDF2E9;">
                                            <input type="radio" name="border_color" id="border_color" value="#FDF2E9">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FDEDEC;">
                                            <input type="radio" name="border_color" id="border_color" value="#FDEDEC">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F9EBEA;">
                                            <input type="radio" name="border_color" id="border_color" value="#F9EBEA">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F4ECF7;">
                                            <input type="radio" name="border_color" id="border_color" value="#F4ECF7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F5EEF8;">
                                            <input type="radio" name="border_color" id="border_color" value="#F5EEF8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EBF5FB;">
                                            <input type="radio" name="border_color" id="border_color" value="#EBF5FB">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EAF2F8;">
                                            <input type="radio" name="border_color" id="border_color" value="#EAF2F8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E8F6F3;">
                                            <input type="radio" name="border_color" id="border_color" value="#E8F6F3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E9F7EF;">
                                            <input type="radio" name="border_color" id="border_color" value="#E9F7EF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#566573;">
                                            <input type="radio" name="border_color" id="border_color" value="#566573">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#F4F6F7;">
                                            <input type="radio" name="border_color" id="border_color" value="#F4F6F7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FCF3CF;">
                                            <input type="radio" name="border_color" id="border_color" value="#FCF3CF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FAE5D3;">
                                            <input type="radio" name="border_color" id="border_color" value="#FAE5D3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#FADBD8;">
                                            <input type="radio" name="border_color" id="border_color" value="#FADBD8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F2D7D5;">
                                            <input type="radio" name="border_color" id="border_color" value="#F2D7D5">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E8DAEF;">
                                            <input type="radio" name="border_color" id="border_color" value="#E8DAEF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EBDEF0;">
                                            <input type="radio" name="border_color" id="border_color" value="#EBDEF0">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D6EAF8;">
                                            <input type="radio" name="border_color" id="border_color" value="#D6EAF8">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D4E6F1;">
                                            <input type="radio" name="border_color" id="border_color" value="#D4E6F1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D0ECE7;">
                                            <input type="radio" name="border_color" id="border_color" value="#D0ECE7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D4EFDF;">
                                            <input type="radio" name="border_color" id="border_color" value="#D4EFDF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2C3E50;">
                                            <input type="radio" name="border_color" id="border_color" value="#2C3E50">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#F0F3F4;">
                                            <input type="radio" name="border_color" id="border_color" value="#F0F3F4">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F9E79F;">
                                            <input type="radio" name="border_color" id="border_color" value="#F9E79F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F5CBA7;">
                                            <input type="radio" name="border_color" id="border_color" value="#F5CBA7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F5B7B1;">
                                            <input type="radio" name="border_color" id="border_color" value="#F5B7B1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E6B0AA;">
                                            <input type="radio" name="border_color" id="border_color" value="#E6B0AA">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D2B4DE;">
                                            <input type="radio" name="border_color" id="border_color" value="#D2B4DE">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D7BDE2;">
                                            <input type="radio" name="border_color" id="border_color" value="#D7BDE2">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#AED6F1;">
                                            <input type="radio" name="border_color" id="border_color" value="#AED6F1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A9CCE3;">
                                            <input type="radio" name="border_color" id="border_color" value="#A9CCE3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A2D9CE;">
                                            <input type="radio" name="border_color" id="border_color" value="#A2D9CE">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A9DFBF;">
                                            <input type="radio" name="border_color" id="border_color" value="#A9DFBF">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#273746;">
                                            <input type="radio" name="border_color" id="border_color" value="#273746">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#ECF0F1;">
                                            <input type="radio" name="border_color" id="border_color" value="#ECF0F1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F7DC6F;">
                                            <input type="radio" name="border_color" id="border_color" value="#F7DC6F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F0B27A;">
                                            <input type="radio" name="border_color" id="border_color" value="#F0B27A">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F1948A;">
                                            <input type="radio" name="border_color" id="border_color" value="#F1948A">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#D98880;">
                                            <input type="radio" name="border_color" id="border_color" value="#D98880">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#BB8FCE;">
                                            <input type="radio" name="border_color" id="border_color" value="#BB8FCE">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#C39BD3;">
                                            <input type="radio" name="border_color" id="border_color" value="#C39BD3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#85C1E9;">
                                            <input type="radio" name="border_color" id="border_color" value="#85C1E9">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#7FB3D5;">
                                            <input type="radio" name="border_color" id="border_color" value="#7FB3D5">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#73C6B6;">
                                            <input type="radio" name="border_color" id="border_color" value="#73C6B6">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#7DCEA0;">
                                            <input type="radio" name="border_color" id="border_color" value="#7DCEA0">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#212F3D;">
                                            <input type="radio" name="border_color" id="border_color" value="#212F3D">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#D0D3D4;">
                                            <input type="radio" name="border_color" id="border_color" value="#D0D3D4">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F4D03F;">
                                            <input type="radio" name="border_color" id="border_color" value="#F4D03F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EB984E;">
                                            <input type="radio" name="border_color" id="border_color" value="#EB984E">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#EC7063;">
                                            <input type="radio" name="border_color" id="border_color" value="#EC7063">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#CD6155;">
                                            <input type="radio" name="border_color" id="border_color" value="#CD6155">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A569BD;">
                                            <input type="radio" name="border_color" id="border_color" value="#A569BD">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#AF7AC5;">
                                            <input type="radio" name="border_color" id="border_color" value="#AF7AC5">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#5DADE2;">
                                            <input type="radio" name="border_color" id="border_color" value="#5DADE2">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#5499C7;">
                                            <input type="radio" name="border_color" id="border_color" value="#5499C7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#45B39D;">
                                            <input type="radio" name="border_color" id="border_color" value="#45B39D">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#52BE80;">
                                            <input type="radio" name="border_color" id="border_color" value="#52BE80">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#1C2833;">
                                            <input type="radio" name="border_color" id="border_color" value="#1C2833">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#B3B6B7;">
                                            <input type="radio" name="border_color" id="border_color" value="#B3B6B7">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F1C40F;">
                                            <input type="radio" name="border_color" id="border_color" value="#F1C40F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E67E22;">
                                            <input type="radio" name="border_color" id="border_color" value="#E67E22">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#E74C3C;">
                                            <input type="radio" name="border_color" id="border_color" value="#E74C3C">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#C0392B;">
                                            <input type="radio" name="border_color" id="border_color" value="#C0392B">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#8E44AD;">
                                            <input type="radio" name="border_color" id="border_color" value="#8E44AD">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#9B59B6;">
                                            <input type="radio" name="border_color" id="border_color" value="#9B59B6">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#3498DB;">
                                            <input type="radio" name="border_color" id="border_color" value="#3498DB">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2980B9;">
                                            <input type="radio" name="border_color" id="border_color" value="#2980B9">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#16A085;">
                                            <input type="radio" name="border_color" id="border_color" value="#16A085">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#27AE60;">
                                            <input type="radio" name="border_color" id="border_color" value="#27AE60">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#17202A;">
                                            <input type="radio" name="border_color" id="border_color" value="#17202A">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td align="center" style="width:30px; background-color:#7B7D7D;">
                                            <input type="radio" name="border_color" id="border_color" value="#7B7D7D">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#F1C40F;">
                                            <input type="radio" name="border_color" id="border_color" value="#F1C40F">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#CA6F1E;">
                                            <input type="radio" name="border_color" id="border_color" value="#CA6F1E">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#CB4335;">
                                            <input type="radio" name="border_color" id="border_color" value="#CB4335">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#A93226;">
                                            <input type="radio" name="border_color" id="border_color" value="#A93226">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#7D3C98;">
                                            <input type="radio" name="border_color" id="border_color" value="#7D3C98">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#884EA0;">
                                            <input type="radio" name="border_color" id="border_color" value="#884EA0">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2E86C1;">
                                            <input type="radio" name="border_color" id="border_color" value="#2E86C1">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#2471A3;">
                                            <input type="radio" name="border_color" id="border_color" value="#2471A3">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#138D75;">
                                            <input type="radio" name="border_color" id="border_color" value="#138D75">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#229954;">
                                            <input type="radio" name="border_color" id="border_color" value="#229954">
                                        </td>
                                        <td align="center" style="width:30px; background-color:#000;">
                                            <input type="radio" name="border_color" id="border_color" value="#000">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="60">
                            <td width="50%" colspan="2" valign="middle" align="center" style="border-top:1px solid #CCC;">
                                <table border="0" cellspacing="0" cellpadding="0" style="border:1px solid #CCC; border-radius:3px; margin:5px;">
                                    <tr height="40">
                                        <td valign="middle" align="center" style="width:50px;"></td>
                                        <td valign="middle" align="center" style="width:50px;"><input class="textf" type="text" placeholder="top" name="mtop" id="mtop" size="5"/></td>
                                        <td valign="middle" align="center" style="width:50px;"></td>
                                    </tr>
                                    <tr height="40">
                                        <td valign="middle" align="center" style="width:50px;"><input class="textf" type="text" placeholder="left" name="mleft" id="mleft" size="5"/></td>
                                        <td valign="middle" align="center" style="width:50px; font-size:11px; color:#666;">Margin</td>
                                        <td valign="middle" align="center" style="width:50px;"><input class="textf" type="text" placeholder="right" name="mright" id="mright" size="5"/></td>
                                    </tr>
                                    <tr height="40">
                                        <td valign="middle" align="center" style="width:50px;"></td>
                                        <td valign="middle" align="center" style="width:50px;"><input class="textf" type="text" placeholder="bottom" name="mbottom" id="mbottom" size="5"/></td>
                                        <td valign="middle" align="center" style="width:50px;"></td>
                                    </tr>
                                </table>
                            </td>            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px; border-top:1px solid #CCC;">
                    <a href="javascript:history.back()"><input class="button_a" style="width: 150px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                </td>
            </tr>
            <input type="hidden" name="level" id="level" value="0"/>
            <input type="hidden" name="padre" id="padre" value="<?php echo $divid ?>"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formpage" />
        </table>
        </form>
    </div>
    <?php endif ?>
    <!--END Element insert-->
</div>