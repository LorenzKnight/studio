<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <form action="periods.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Ny Termin</h2>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Termin Namn..." name="term_name" id="term_name" size="40" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;"> 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="start_week" id="start_week" required>
                            <option value="Vecka 1">Vecka 1</option>
                            <option value="Vecka 2">Vecka 2</option>
                            <option value="Vecka 3">Vecka 3</option>
                            <option value="Vecka 4">Vecka 4</option>
                            <option value="Vecka 5">Vecka 5</option>
                            <option value="Vecka 6">Vecka 6</option>
                            <option value="Vecka 7">Vecka 7</option>
                            <option value="Vecka 8">Vecka 8</option>
                            <option value="Vecka 9">Vecka 9</option>
                            <option value="Vecka 10">Vecka 10</option>
                            <option value="Vecka 11">Vecka 11</option>
                            <option value="Vecka 12">Vecka 12</option>
                            <option value="Vecka 13">Vecka 13</option>
                            <option value="Vecka 14">Vecka 14</option>
                            <option value="Vecka 15">Vecka 15</option>
                            <option value="Vecka 16">Vecka 16</option>
                            <option value="Vecka 17">Vecka 17</option>
                            <option value="Vecka 18">Vecka 18</option>
                            <option value="Vecka 19">Vecka 19</option>
                            <option value="Vecka 20">Vecka 20</option>
                            <option value="Vecka 21">Vecka 21</option>
                            <option value="Vecka 22">Vecka 22</option>
                            <option value="Vecka 23">Vecka 23</option>
                            <option value="Vecka 24">Vecka 24</option>
                            <option value="Vecka 25">Vecka 25</option>
                            <option value="Vecka 26">Vecka 26</option>
                            <option value="Vecka 27">Vecka 27</option>
                            <option value="Vecka 28">Vecka 28</option>
                            <option value="Vecka 29">Vecka 29</option>
                            <option value="Vecka 30">Vecka 30</option>
                            <option value="Vecka 31">Vecka 31</option>
                            <option value="Vecka 32">Vecka 32</option>
                            <option value="Vecka 33">Vecka 33</option>
                            <option value="Vecka 34">Vecka 34</option>
                            <option value="Vecka 35">Vecka 35</option>
                            <option value="Vecka 36">Vecka 36</option>
                            <option value="Vecka 37">Vecka 37</option>
                            <option value="Vecka 38">Vecka 38</option>
                            <option value="Vecka 39">Vecka 39</option>
                            <option value="Vecka 40">Vecka 40</option>
                            <option value="Vecka 41">Vecka 41</option>
                            <option value="Vecka 42">Vecka 42</option>
                            <option value="Vecka 43">Vecka 43</option>
                            <option value="Vecka 44">Vecka 44</option>
                            <option value="Vecka 45">Vecka 45</option>
                            <option value="Vecka 46">Vecka 46</option>
                            <option value="Vecka 47">Vecka 47</option>
                            <option value="Vecka 48">Vecka 48</option>
                            <option value="Vecka 49">Vecka 49</option>
                            <option value="Vecka 50">Vecka 50</option>
                            <option value="Vecka 51">Vecka 51</option>
                            <option value="Vecka 52">Vecka 52</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;"><input class="textf" style="text-align:center;" type="text" placeholder="No. Veckor" name="no_weeks" id="no_weeks" size="12" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="left" style="padding: 0 0 0 50px; color: #999; font-size: 14px;">
                        <input class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" placeholder="Start V" name="term_start" id="term_start" size="17" autocomplete="off" required/>
                    </td>
                    <td width="50%" valign="middle" align="right" style="padding: 0 50px 0 0; color: #999; font-size: 14px;">
                        <input class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" placeholder="Slut V" name="term_stop" id="term_stop" size="17" autocomplete="off" required/>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                        <option value="0">Inaktiv</option>
                        <option value="1">Aktiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="periods.php"><input class="button_a" style="width: 150px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
    </div>
<?php endif ?>
<?php if($_GET["editp"]):?>
    <div class="subform_cont1">
        <form action="periods.php" method="post" name="formedit" id="formedit">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Redigera Termin</h2>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['term_name'];?>" placeholder="Termin Namn..." name="term_name" id="term_name" size="40" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="start_week" id="start_week">
                            <option value="Vecka 1" <?php if ($row_DatosEdit['start_week'] == "Vecka 1") echo "selected"; ?>>Vecka 1</option>
                            <option value="Vecka 2" <?php if ($row_DatosEdit['start_week'] == "Vecka 2") echo "selected"; ?>>Vecka 2</option>
                            <option value="Vecka 3" <?php if ($row_DatosEdit['start_week'] == "Vecka 3") echo "selected"; ?>>Vecka 3</option>
                            <option value="Vecka 4" <?php if ($row_DatosEdit['start_week'] == "Vecka 4") echo "selected"; ?>>Vecka 4</option>
                            <option value="Vecka 5" <?php if ($row_DatosEdit['start_week'] == "Vecka 5") echo "selected"; ?>>Vecka 5</option>
                            <option value="Vecka 6" <?php if ($row_DatosEdit['start_week'] == "Vecka 6") echo "selected"; ?>>Vecka 6</option>
                            <option value="Vecka 7" <?php if ($row_DatosEdit['start_week'] == "Vecka 7") echo "selected"; ?>>Vecka 7</option>
                            <option value="Vecka 8" <?php if ($row_DatosEdit['start_week'] == "Vecka 8") echo "selected"; ?>>Vecka 8</option>
                            <option value="Vecka 9" <?php if ($row_DatosEdit['start_week'] == "Vecka 9") echo "selected"; ?>>Vecka 9</option>
                            <option value="Vecka 10" <?php if ($row_DatosEdit['start_week'] == "Vecka 10") echo "selected"; ?>>Vecka 10</option>
                            <option value="Vecka 11" <?php if ($row_DatosEdit['start_week'] == "Vecka 11") echo "selected"; ?>>Vecka 11</option>
                            <option value="Vecka 12" <?php if ($row_DatosEdit['start_week'] == "Vecka 12") echo "selected"; ?>>Vecka 12</option>
                            <option value="Vecka 13" <?php if ($row_DatosEdit['start_week'] == "Vecka 13") echo "selected"; ?>>Vecka 13</option>
                            <option value="Vecka 14" <?php if ($row_DatosEdit['start_week'] == "Vecka 14") echo "selected"; ?>>Vecka 14</option>
                            <option value="Vecka 15" <?php if ($row_DatosEdit['start_week'] == "Vecka 15") echo "selected"; ?>>Vecka 15</option>
                            <option value="Vecka 16" <?php if ($row_DatosEdit['start_week'] == "Vecka 16") echo "selected"; ?>>Vecka 16</option>
                            <option value="Vecka 17" <?php if ($row_DatosEdit['start_week'] == "Vecka 17") echo "selected"; ?>>Vecka 17</option>
                            <option value="Vecka 18" <?php if ($row_DatosEdit['start_week'] == "Vecka 18") echo "selected"; ?>>Vecka 18</option>
                            <option value="Vecka 19" <?php if ($row_DatosEdit['start_week'] == "Vecka 19") echo "selected"; ?>>Vecka 19</option>
                            <option value="Vecka 20" <?php if ($row_DatosEdit['start_week'] == "Vecka 20") echo "selected"; ?>>Vecka 20</option>
                            <option value="Vecka 21" <?php if ($row_DatosEdit['start_week'] == "Vecka 21") echo "selected"; ?>>Vecka 21</option>
                            <option value="Vecka 22" <?php if ($row_DatosEdit['start_week'] == "Vecka 22") echo "selected"; ?>>Vecka 22</option>
                            <option value="Vecka 23" <?php if ($row_DatosEdit['start_week'] == "Vecka 23") echo "selected"; ?>>Vecka 23</option>
                            <option value="Vecka 24" <?php if ($row_DatosEdit['start_week'] == "Vecka 24") echo "selected"; ?>>Vecka 24</option>
                            <option value="Vecka 25" <?php if ($row_DatosEdit['start_week'] == "Vecka 25") echo "selected"; ?>>Vecka 25</option>
                            <option value="Vecka 26" <?php if ($row_DatosEdit['start_week'] == "Vecka 26") echo "selected"; ?>>Vecka 26</option>
                            <option value="Vecka 27" <?php if ($row_DatosEdit['start_week'] == "Vecka 27") echo "selected"; ?>>Vecka 27</option>
                            <option value="Vecka 28" <?php if ($row_DatosEdit['start_week'] == "Vecka 28") echo "selected"; ?>>Vecka 28</option>
                            <option value="Vecka 29" <?php if ($row_DatosEdit['start_week'] == "Vecka 29") echo "selected"; ?>>Vecka 29</option>
                            <option value="Vecka 30" <?php if ($row_DatosEdit['start_week'] == "Vecka 30") echo "selected"; ?>>Vecka 30</option>
                            <option value="Vecka 31" <?php if ($row_DatosEdit['start_week'] == "Vecka 31") echo "selected"; ?>>Vecka 31</option>
                            <option value="Vecka 32" <?php if ($row_DatosEdit['start_week'] == "Vecka 32") echo "selected"; ?>>Vecka 32</option>
                            <option value="Vecka 33" <?php if ($row_DatosEdit['start_week'] == "Vecka 33") echo "selected"; ?>>Vecka 33</option>
                            <option value="Vecka 34" <?php if ($row_DatosEdit['start_week'] == "Vecka 34") echo "selected"; ?>>Vecka 34</option>
                            <option value="Vecka 35" <?php if ($row_DatosEdit['start_week'] == "Vecka 35") echo "selected"; ?>>Vecka 35</option>
                            <option value="Vecka 36" <?php if ($row_DatosEdit['start_week'] == "Vecka 36") echo "selected"; ?>>Vecka 36</option>
                            <option value="Vecka 37" <?php if ($row_DatosEdit['start_week'] == "Vecka 37") echo "selected"; ?>>Vecka 37</option>
                            <option value="Vecka 38" <?php if ($row_DatosEdit['start_week'] == "Vecka 38") echo "selected"; ?>>Vecka 38</option>
                            <option value="Vecka 39" <?php if ($row_DatosEdit['start_week'] == "Vecka 39") echo "selected"; ?>>Vecka 39</option>
                            <option value="Vecka 40" <?php if ($row_DatosEdit['start_week'] == "Vecka 40") echo "selected"; ?>>Vecka 40</option>
                            <option value="Vekca 41" <?php if ($row_DatosEdit['start_week'] == "Vecka 41") echo "selected"; ?>>Vecka 41</option>
                            <option value="Vecka 42" <?php if ($row_DatosEdit['start_week'] == "Vecka 42") echo "selected"; ?>>Vecka 42</option>
                            <option value="Vecka 43" <?php if ($row_DatosEdit['start_week'] == "Vecka 43") echo "selected"; ?>>Vecka 43</option>
                            <option value="Vecka 44" <?php if ($row_DatosEdit['start_week'] == "Vecka 44") echo "selected"; ?>>Vecka 44</option>
                            <option value="Vecka 45" <?php if ($row_DatosEdit['start_week'] == "Vecka 45") echo "selected"; ?>>Vecka 45</option>
                            <option value="Vecka 46" <?php if ($row_DatosEdit['start_week'] == "Vecka 46") echo "selected"; ?>>Vecka 46</option>
                            <option value="Vecka 47" <?php if ($row_DatosEdit['start_week'] == "Vecka 47") echo "selected"; ?>>Vecka 47</option>
                            <option value="Vecka 48" <?php if ($row_DatosEdit['start_week'] == "Vecka 48") echo "selected"; ?>>Vecka 48</option>
                            <option value="Vecka 49" <?php if ($row_DatosEdit['start_week'] == "Vecka 49") echo "selected"; ?>>Vecka 49</option>
                            <option value="Vecka 50" <?php if ($row_DatosEdit['start_week'] == "Vecka 50") echo "selected"; ?>>Vecka 50</option>
                            <option value="Vecka 51" <?php if ($row_DatosEdit['start_week'] == "Vecka 51") echo "selected"; ?>>Vecka 51</option>
                            <option value="Vecka 52" <?php if ($row_DatosEdit['start_week'] == "Vecka 52") echo "selected"; ?>>Vecka 52</option>
                        </select>
                    </td>
                    <td width="50%" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;"><input class="textf" style="text-align:center;" type="text" value="<?php echo $row_DatosEdit['no_weeks'];?>" placeholder="No. Veckor" name="no_weeks" id="no_weeks" size="12" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="left" style="padding: 0 0 0 50px; color: #999; font-size: 14px;">
                        <input class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" value="<?php echo $row_DatosEdit['term_start'];?>" placeholder="Start V" name="term_start" id="term_start" size="15" autocomplete="off" required/>
                    </td>
                    <td width="50%" valign="middle" align="right" style="padding: 0 50px 0 0; color: #999; font-size: 14px;">
                        <input class="tcal" style="padding:8px 10px; border-radius:7px; font-size:12px; border: 1px solid #999;" type="text" value="<?php echo $row_DatosEdit['term_stop'];?>" placeholder="Slut V" name="term_stop" id="term_stop" size="15" autocomplete="off" required/>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                        <option value="0" <?php if ($row_DatosEdit['status'] == 0) echo "selected"; ?>>Inaktiv</option>
                        <option value="1" <?php if ($row_DatosEdit['status'] == 1) echo "selected"; ?>>Aktiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="periods.php"><input class="button_a" style="width: 150px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" style="padding:22px 33px;" value="Uppdatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_term" id="id_term" value="<?php echo $_GET['editp'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
            </table>
        </form>
    </div>
<?php endif ?>
<?php if($_GET["updatepopup"]):?>
    <div class="subform_cont1">
        <table class="formulario_user" style="margin-top:200px;" border="0" cellspacing="0" cellpadding="0">
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    <h2 style="color:red;">Important!</h2>
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    The period is about to expire or already expired, in order to continue using the system you have to create a new period where the expiration date is not the same or three days before the current one
                </td>
            </tr>
            <tr height="100">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    <a href="periods.php?new=1"><input class="button_a" style="width: 200px; text-align: center;" value="Create period" /></a>
                </td>
            </tr>
            <tr height="20">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
        </table>
    </div>
<?php endif ?>