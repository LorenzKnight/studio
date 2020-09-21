<!---------------------------------------------------INSERT------------------------------------------->
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
    //     const el = document.getElementById('big_b')
    //     const clickableAreas = Array.from(document.getElementsByClassName('paquetes'))
    //     clickableAreas.push(el)

    //     let isClickOutside = true

    //     for (let i = 0; i < clickableAreas.length; i++) {
    //         if (isElementOrDescendant(clickableAreas[i], e.target)) {
    //             isClickOutside = false
    //         }
    //     }

    //     if (isClickOutside) {
    //         location = 'events.php'
    //     }
    // }

    // document.addEventListener('click', onClick)
</script>
<script>
    function asegurar()
    {
        rc = confirm("Är du säkert på den här ändring?");
        return rc;
    }
</script>
    <?php if ($_GET["newevent"]): ?>
        <div class="subform_cont1">
        <form action="events.php" method="post" name="formnewevent" id="formnewevent">
            <table class="subform" id="big_b" style="width:400px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="6" valign="middle" align="center" style="color: #333;">
                        New Event
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="border-top:1px solid #CCC; padding-bottom: 5px;">
                        <script src="../js/scriptupload.js"></script>
                        <?php 
                        //***********************BLOQUE INSERCION IMAGEN***********************//
                        //***********************PARÁMETROS DE IMAGEN**************************//
                        $nombrecampoimagen="foto";
                        $nombrecampoimagenmostrar="fotopic";
                        $nombrecarpetadestino="../img/news/"; //carpeta destino con barra al final
                        $nombrecampofichero="file1";
                        $nombrecampostatus="status1";
                        $nombrebarraprogreso="progressBar1";
                        $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
                        $tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
                        $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
                        $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                            
                        $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

                        //$cadenadeparametros="";                                 
                        ?>
                                <input type="hidden" class="textf" size="40" name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>">
                                <br>
                                <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>">
                                
                                <input class="form-control" type="button" value="Ladda up file" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                                <br>
                                <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="80" style="width: 80%;"></progress>
                                <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                                <div class="foto_prev">
                                    <img src="" alt="" id="<?php echo $nombrecampoimagenmostrar;?>" height="100">
                                </div>
                        <?php /*?>
                        //******************FIN BLOQUE INSERCION IMAGEN*************************
                        <?php */?>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" width="50%" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        <input class="textf" type="text" placeholder="Events name" name="name" id="name" size="62"/>
                    </td>
                </tr>
                <tr height="100">
                    <td colspan="6" valign="middle" align="center" style="padding-bottom: 10px;">
                        <textarea class="textf" type="text" placeholder="Content..." name="description" id="description" maxlength="2000" cols="60" rows="9" required></textarea>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        <input  class="tcal" type="text" id="event_date" name="event_date" autocomplete="off" value="" />
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px; border-top:1px solid #CCC;">
                            <a href="events.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <input type="hidden" name="status" id="status" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formnewevent" />
            </table>
        </form>
    </div>
    <?php endif ?>
<!---------------------------------------------------END INSERT------------------------------------------->
<!---------------------------------------------------EDIT------------------------------------------->
    <?php if ($_GET["edit"]): ?>
        <div class="subform_cont1">
        <form action="events.php" method="post" name="formedit" id="formedit">
            <table class="subform" id="big_b" style="width:400px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="6" valign="middle" align="center" style="color: #333;">
                        Edit Event
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="border-top:1px solid #CCC; padding-bottom: 5px;">
                        <script src="../js/scriptupload.js"></script>
                        <?php 
                        //***********************BLOQUE INSERCION IMAGEN***********************//
                        //***********************PARÁMETROS DE IMAGEN**************************//
                        $nombrecampoimagen="foto";
                        $nombrecampoimagenmostrar="fotopic";
                        $nombrecarpetadestino="../img/news/"; //carpeta destino con barra al final
                        $nombrecampofichero="file1";
                        $nombrecampostatus="status1";
                        $nombrebarraprogreso="progressBar1";
                        $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
                        $tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
                        $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
                        $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                            
                        $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

                        //$cadenadeparametros="";                                 
                        ?>
                                <input type="hidden" class="textf" size="40" name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>" value="<?php echo $row_DatosEdit['foto'];?>">
                                <br>
                                <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>">
                                
                                <input class="form-control" type="button" value="Ladda up file" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                                <br>
                                <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="80" style="width: 80%;"></progress>
                                <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                                <div class="foto_prev">
                                    <img src="<?php echo $nombrecarpetadestino.$row_DatosEdit['foto']; ?>" alt="" id="<?php echo $nombrecampoimagenmostrar;?>" height="100">
                                </div>
                        <?php /*?>
                        //******************FIN BLOQUE INSERCION IMAGEN*************************
                        <?php */?>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" width="50%" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        <input class="textf" type="text" placeholder="Events name" value="<?php echo $row_DatosEdit['name'];?>" name="name" id="name" size="62"/>
                    </td>
                </tr>
                <tr height="100">
                    <td colspan="6" valign="middle" align="center" style="padding-bottom: 10px;">
                        <textarea class="textf" type="text" placeholder="Content..." value="<?php echo $row_DatosEdit['description'];?>" name="description" id="description" maxlength="2000" cols="60" rows="9"></textarea>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="6" valign="middle" align="center" style="font-size:14px; color:#666; border-top:1px solid #CCC;">
                        <input  class="tcal" type="text" id="event_date" name="event_date" autocomplete="off" value="<?php echo $row_DatosEdit['event_date'];?>" />
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px; border-top:1px solid #CCC;">
                            <a href="events.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Updatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <input type="hidden" name="id_event" id="id_event" value="<?php echo $_GET['edit'];?>"/>
                <input type="hidden" name="status" id="status" value="1"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
            </table>
        </form>
    </div>
    <?php endif ?>
<!---------------------------------------------------END EDIT------------------------------------------->