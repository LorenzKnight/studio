<div class="dash_div" style="width: 86%; height:150px; padding: 0 2%; border: 0.5px solid #FFF;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 20px auto 0;">
        <tr height="20" style="color:#FFF;">
            <td colspan="2" valign="middle" align="left" style="border-bottom:1px solid #FFF; font-weight: 800;">
                Internal information/To do
            </td>
        </tr>
        <tr height="" style="color:#FFF;">
            <td colspan="2" valign="middle" align="left" style="">
                - Eventuel meddelander fråm andra user<br/>
                - Fixa en (to do) seccion på dashboard</br>
                - Fixa en rums eller access där eleverna kan komma in med lärarna tillåtelse (läraren är admin till sina rums)<br/>
                - kurserna kan också vara online *<br/>
                - En filter för att ser Elever änligt Termin *<br/>
                
            </td>
        </tr>
    </table>
</div>
<div style="width: 90%; margin: 0px auto 10px; display: flex;">
    <div class="dash_div" style="height:350px; float:left; flex: 1;">
        <table width="80%" border="0" cellspacing="0" cellpadding="0" style="margin: 20px auto 0;">
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #FFF; font-weight: 800;">
                    Students in the current term
                </td>
            </tr>
            <tr height="40">
                <td colspan="2" valign="middle" align="center">
                    <div style="margin: 20px auto 0; z-index:0;" id="shape"></div>
                </td>
            </tr>
            <tr height="20">
                <td colspan="2" valign="middle" align="center">
                </td>
            </tr>
                <?php $mens = $totalRows_DatosConsulta - $totalRows_DatosConsultaG; ?>
                <?php
                    if ($totalRows_DatosConsulta > 0) {
                    do { 
                            $total = $total + $row_DatosConsulta['total'];
                    } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta));
                    }
                ?>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right">Total Ladys:</td>
                <td width="50%" valign="middle" align="center"><?php echo $totalRows_DatosConsultaG; ?></td>
            </tr>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right">Total Mens:</td>
                <td width="50%" valign="middle" align="center"><?php echo $mens; ?></td>
            </tr>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right" style="border-top:1px solid #FFF;">Total student:</td>
                <td width="50%" valign="middle" align="center" style="border-top:1px solid #FFF;"><?php echo $totalRows_DatosConsulta; ?></td>
            </tr>
            <?php if (isset($_SESSION['std_Nivel']) && $_SESSION['std_Nivel'] < 2) { ?>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right" style="border-top:1px solid #FFF;">Total revenue:</td>
                <td width="50%" valign="middle" align="center" style="border-top:1px solid #FFF;"><?php echo $total; ?> kr.</td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="dash_div_2" style="height:350px; background-color: rgb(31, 31, 31); border:1px solid orange; margin: 0 0.5% 0 1%; float:left; flex: 1;">
        <table width="80%" border="0" cellspacing="0" cellpadding="0" style="margin: 20px auto 0;">
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #FFF; font-weight: 800;">
                    Current term
                </td>
            </tr>
            <tr height="20" style="color:#FFF; font-size:13px;">
                <td width="50%" valign="middle" align="center">Start week:</td>
                <td width="50%" valign="middle" align="center"><?php echo $row_DatosTerm['start_week']; ?></td>
            </tr>
            <tr height="20" style="color:#FFF; font-size:13px;">
                <td width="50%" valign="middle" align="center">Start:</td>
                <td width="50%" valign="middle" align="center"><?php echo $row_DatosTerm['term_start']; ?></td>
            </tr>
            <tr height="20" style="color:#FFF; font-size:13px;">
                <td width="50%" valign="middle" align="center">Stop:</td>
                <td width="50%" valign="middle" align="center"><?php echo $row_DatosTerm['term_stop']; ?></td>
            </tr>
            <tr height="35" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="">
                    
                </td>
            </tr>
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #FFF; font-weight: 800;">
                    Next event
                </td>
            </tr>
            <?php if ($totalRows_DatosEvent != 0) { ?>
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="padding:10px 0 0 0;">
                    <a href="<?php echo $row_DatosEvent['link']; ?>" target="_blank"><img style="" src="../img/news/<?php echo $row_DatosEvent['foto']; ?>" height="132.42" width="243"></a>   
                </td>
            </tr>
            <tr height="30" style="color:#FFF; font-size:13px;">
                <td width="50%" valign="middle" align="center">When:</td>
                <td width="50%" valign="middle" align="left"><?php echo $row_DatosEvent['event_date']; ?></td>
            </tr>
            <?php } else { ?>
            <tr height="150" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="padding:10px 0 0 0; font-size:12px;">
                    There is no event scheduled at the moment...<br/>
                    (Det finns ingen evenemang planerad just nu...)
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="dash_div" style="height:350px; margin: 0 0 0 0.5%; float:left; flex: 1;">
        <table width="80%" border="0" cellspacing="0" cellpadding="0" style="margin: 20px auto 0;">
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #FFF; font-weight: 800;">
                    Students for course (BETA)
                </td>
            </tr>
            <tr height="" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #FFF; font-size:14px;">
                    <form action="dashboard.php" method="get" name="formfilter" id="formfilter">
                        <select class="textf" style="font-size: 14px; color: #999;" name="course" id="course">
                        <?php
                        if ($totalRows_DatosCourse_filter > 0) {
                        do { ?>
                        <option value="<?php echo $row_DatosCourse_filter['id_course'];?>"><?php echo $row_DatosCourse_filter['name'];?></option>
                        <?php } while ($row_DatosCourse_filter = mysqli_fetch_assoc($DatosCourse_filter));
                        }
                        ?>
                        </select>
                        <button type="submit" class="button_dash">Ok</button>
                    <input type="hidden" name="MM_search" id="MM_search" value="formfilter" />
                </td>
            </tr>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right">Total Ladys:</td>
                <td width="50%" valign="middle" align="center">
                    <?php echo $totalRows_DatosSexW; ?>
                </td>
            </tr>
            <?php $SexM = $totalRows_DatosConsultaB - $totalRows_DatosSexW;?>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right">Total Mens:</td>
                <td width="50%" valign="middle" align="center">
                    <?php echo $SexM; ?>
                </td>
            </tr>
            <tr height="30" style="color:#FFF;">
                <td width="50%" valign="middle" align="right">Total student:</td>
                <td width="50%" valign="middle" align="center"><?php echo $totalRows_DatosConsultaB; ?></td>
            </tr>
        </table>
    </div>
    <!-- <div class="dash_div" style="height:350px; margin: 0 0 0 1%; float:left; flex: 1;">
        <table width="80%" border="0" cellspacing="0" cellpadding="0" style="margin: 20px auto 0;">
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="center" style="border-bottom:1px solid #FFF; font-weight: 800;">
                    scanner
                </td>
            </tr>
            <tr height="30" style="color:#FFF;">
                <td colspan="2" valign="middle" align="left">
                    
                </td>
            </tr>
        </table>
    </div> -->
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#type").roundSlider({
            value: 45,
        });
        $("#shape").roundSlider({
            value: '<?php echo $totalRows_DatosConsulta; ?>',
            // sliderType: "range"
            sliderType: "min-range"
        });
    });
    function sliderTypeChanged(e) {
        $("#type").roundSlider({ sliderType: e.value });
    }
    function sliderShapeChanged(e) {
        var options = { circleShape: e.value };
        if (e.value == "pie") options["startAngle"] = 0;
        else if (e.value == "custom-quarter" || e.value == "custom-half") options["startAngle"] = 45;
        $("#shape").roundSlider(options);
    }
</script>

<style>
    h1 span {
        font-size: 0.6em;
    }
    .types {
        display: inline-block;
        padding: 10px 30px;
        border: 1px dotted;
        margin-right: 20px;
        overflow: hidden;
    }
    /* .container {
        height: 180px;
        width: 400px;
    }
    .container > div {
        float: left;
    } */
    .control {
        margin: 0 auto;
        /* background-color: #CCC; */
    }
</style>