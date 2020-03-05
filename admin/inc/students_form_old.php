<?php if($_GET["new"]):?>
<div class="subform_cont1">
    <form action="students.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario" border="0" cellspacing="0" cellpadding="0">
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    Packet:
                    <select class="textf" style="font-size: 14px; color: #999;" name="package" id="package" onchange="showDiv(this)" required>
                    <?php
                    if ($totalRows_DatosPackage > 0) {
                    do { ?>
                    <option value="<?php echo $row_DatosPackage["id_package"]; ?>"><?php echo $row_DatosPackage["package_name"]; ?></option>
                    <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Kön: 
                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                    <option value="None" >None</option>
                    <option value="Man">Man</option>
                    <option value="Kvinna">Kvinna</option>
                    </select>
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input style="padding: 20px 65px;" type="submit" class="button" value="Nästa" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
            <input type="hidden" name="password" id="password" value="newstudent246"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>
</div>
<?php endif ?>

<?php if($_GET["newcompl"]):?>
<div class="subform_cont1">
    <form action="students.php" method="post" name="formcompl" id="formcompl">
      <table class="formulario" border="0" cellspacing="0" cellpadding="0">
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                <?php echo ObtenerNombrePacket($row_DatosInsc["package"]); ?>
              </td>
          </tr>
          <?php if($row_DatosInsc["package"] <= 4):?>
            <tr>
                <td colspan="2" valign="middle" align="center">
                    <div class="courses">
                        <div class="class1" style="flex: 1;">
                          <p>Klass 1</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                              <tr height="60">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_1" value="<?php echo $row_DatosCourse['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                          }
                          ?>
                        </div>
                        <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosInsc["package"], 2);?>;" id="courses2">
                          <p>Klass 2</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse2 > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="60">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_2" value="<?php echo $row_DatosCourse2['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse2['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosInsc["package"], 3);?>;" id="courses3">
                          <p>Klass 3</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse3 > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="60">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_3" value="<?php echo $row_DatosCourse3['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse3['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse3 = mysqli_fetch_assoc($DatosCourse3));
                          }
                          ?>
                      </div>
                      <div class="class1" style="border-left: 2px solid #CCC; display: <?php echo packet2($row_DatosInsc["package"], 4);?>;" id="courses4">
                          <p>Klass 4</p>
                          <hr>
                          <?php
                          if ($totalRows_DatosCourse4 > 0) {
                          do { ?>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr height="60">
                                  <td width="20%" align="center" ><input style="font-size: 14px;" type="radio" name="course_4" value="<?php echo $row_DatosCourse4['id_course'];?>"></td>
                                  <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosCourse4['name'];?></td>
                              <tr>
                          </table>
                          <?php } while ($row_DatosCourse4 = mysqli_fetch_assoc($DatosCourse4));
                          }
                          ?>
                        </div>
                    </div>
                </td>
            </tr>
          <?php endif ?>
          <?php if($row_DatosInsc["package"] > 4):?>
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1" style="flex: 1;">
                                <p>Kurs nivå</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosSpecialCourse > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr height="50">
                                        <td width="20%" align="center" ><input style ="font-size: 14px;" type="radio" name="course_s1" value="<?php echo $row_DatosSpecialCourse['id_course'];?>"></td>
                                        <td width="80%" align="left" style ="font-size: 12px;"><?php echo $row_DatosSpecialCourse['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosSpecialCourse = mysqli_fetch_assoc($DatosSpecialCourse));
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
          <?php endif ?> 
          <tr height="80">
              <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                    <input type="submit" class="button" value="Resgistrera" />
              </td>
          </tr>
          <tr height="30">
              <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                  
              </td>
          </tr>
          <input type="hidden" name="payment" id="payment" value="1"/>
          <input type="hidden" name="term" id="term" value="<?php echo $row_DatosTerm["id_term"]; ?>"/>
          <input type="hidden" name="term_start" id="term_start" value="<?php echo $row_DatosTerm["term_start"]; ?>"/>
          <input type="hidden" name="term_stop" id="term_stop" value="<?php echo $row_DatosTerm["term_stop"]; ?>"/>
          <input type="hidden" name="package" id="package" value="<?php echo $row_DatosInsc["package"]; ?>"/>
          <input type="hidden" name="id_student" id="id_student" value="<?php echo $row_DatosInsc["id_student"]; ?>"/>
          <input type="hidden" name="sex" id="sex" value="<?php echo $row_DatosInsc["sex"]; ?>"/>
          <input type="hidden" name="status" id="status" value="1"/>
          <input type="hidden" name="done" id="done" value="1"/>
          <input type="hidden" name="MM_insert" id="MM_insert" value="formcompl" />
      </table>
  </form>
</div>
<?php endif ?>

    

<script>
    function showDiv(select){
        if(select.value>=2){
            document.getElementById('courses2').style.display = "block";
        } else{
            document.getElementById('courses2').style.display = "none";
        }

        if(select.value>=3){
            document.getElementById('courses3').style.display = "block";
        } else{
            document.getElementById('courses3').style.display = "none";
        }

        if(select.value>=4){
            document.getElementById('courses4').style.display = "block";
        } else{
            document.getElementById('courses4').style.display = "none";
        }

        if(select.value>=5){
            document.getElementById('courses5').style.display = "block";
        } else{
            document.getElementById('courses5').style.display = "none";
        }
    } 
</script>


<?php if($_GET["see"]):?>
    <div class="subform_cont1">
        <form id="formart">
            <table class="popwindows" style="width: 500px; margin: 40px auto;" border="0" cellspacing="0" cellpadding="0">
                <tr height="20">
                </tr>
                <tr height="40">
                    <td colspan="2" valign="middle" align="center">
                        <?php echo ObtenerNombreStudent($_GET['see']); ?> <?php echo ObtenerApellidoStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="top" align="center">
                        (<?php echo Sex($_GET['see']); ?>)
                    </td>
                </tr>
                <tr height="40">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Personal no:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNumeroPStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Telefon no:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerTelefonoStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        E-mail:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerEmailStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Adress:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerAdressStudent($_GET['see']); ?><br/>
                        <?php echo ObtenerPostStudent($_GET['see']); ?> <?php echo ObtenerCityStudent($_GET['see']); ?>
                    </td>
                </tr>
                <tr height="55">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Registration date:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo $row_DatosSee['day']; ?> <?php echo month($row_DatosSee['month']); ?> <?php echo $row_DatosSee['year']; ?><br/>  
                        kl. <?php echo $row_DatosSee['time']; ?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Termin:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreTermin($row_DatosSee['term']);?>
                    </td>
                </tr>
                <tr height="40">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                        Packet:
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombrePacket($row_DatosSee['package']); ?>
                    </td>
                </tr>
                <tr height="10">
                </tr>
                <tr height="25">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreCurso($row_DatosSee['course_1']);?>
                    </td>
                </tr>
                <tr height="25">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreCurso($row_DatosSee['course_2']);?>
                    </td>
                </tr>
                <tr height="25">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreCurso($row_DatosSee['course_3']);?>
                    </td>
                </tr>
                <tr height="25">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreCurso($row_DatosSee['course_4']);?>
                    </td>
                </tr>
                <tr height="25">
                    <td width="40%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    </td>
                    <td width="60%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                        <?php echo ObtenerNombreCurso($row_DatosSee['course_s1']);?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                    <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Stänga" /></a>
                    </td>
                </tr>
                <tr height="20">
                </tr>
            </table>
        </form>
    </div>
<?php endif ?>

<?php if($_GET["editi"]):?>
    <div class="subform_cont1">
        <form action="students.php" method="post" name="formediti" id="formediti">
            <table class="formulario" border="0" cellspacing="0" cellpadding="0">
                <tr height="30">
                    <td colspan="2" valign="middle" align="center">
                        <?php //echo $row_DatosEdit['id_student'];?>
                    </td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['email'];?>" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['personal_number'];?>" placeholder="Ditt Personnummer" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telephone'];?>" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Kön: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None" >None</option>
                        <option value="Man" <?php if ($row_DatosEdit['sex'] == Man) echo "selected"; ?>>Man</option>
                        <option value="Kvinna" <?php if ($row_DatosEdit['sex'] == Kvinna) echo "selected"; ?>>Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['adress'];?>" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
                </tr>
                <tr height="60">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['post'];?>" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['city'];?>" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                </table>
                <input type="hidden" name="id_student" id="id_student" value="<?php echo $row_DatosEdit['id_student'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formediti" />
        </form>
    </div>
<?php endif ?>

<?php if($_GET["editc"]):?>
    <div class="subform_cont1">
        <form action="students.php" method="post" name="formeditc" id="formeditc">
            <table class="formulario_e" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        Packet:
                        <select class="textf" style="font-size: 14px; color: #999;" name="package" id="package" onchange="showDiv(this)" required>
                        <?php
                        if ($totalRows_DatosPackage2 > 0) {
                        do { ?>
                        <option value="<?php echo $row_DatosPackage2["id_package"]; ?>" <?php if ($row_DatosEditInc['package'] == $row_DatosPackage2['id_package']) echo "selected"; ?>><?php echo $row_DatosPackage2["package_name"]; ?></option>
                        <?php } while ($row_DatosPackage2 = mysqli_fetch_assoc($DatosPackage2));
                        }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1" style="flex: 1;">
                                <p>Klass 1</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse_edit > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr height="60">
                                        <td width="20%" align="center" style="font-size: 14px;"><input class="class1_content" type="radio" name="course_1" value="<?php echo $row_DatosCourse_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_1'] == $row_DatosCourse_edit['id_course']) echo "checked"; ?>></td>
                                        <td width="80%" align="left" style="font-size: 12px;"><?php echo $row_DatosCourse_edit['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse_edit = mysqli_fetch_assoc($DatosCourse_edit));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses2">
                                <p>Klass 2</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse2_edit > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="60">
                                        <td width="20%" align="center" style="font-size: 14px;"><input class="class1_content" type="radio" name="course_2" value="<?php echo $row_DatosCourse2_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_2'] == $row_DatosCourse2_edit['id_course']) echo "checked"; ?>></td>
                                        <td width="80%" align="left" style="font-size: 12px;"><?php echo $row_DatosCourse2_edit['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse2_edit = mysqli_fetch_assoc($DatosCourse2_edit));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses3">
                                <p>Klass 3</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse3_edit > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="60">
                                        <td width="20%" align="center" style="font-size: 14px;"><input class="class1_content" type="radio" name="course_3" value="<?php echo $row_DatosCourse3_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_3'] == $row_DatosCourse3_edit['id_course']) echo "checked"; ?>></td>
                                        <td width="80%" align="left" style="font-size: 12px;"><?php echo $row_DatosCourse3_edit['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse3_edit = mysqli_fetch_assoc($DatosCourse3_edit));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses4">
                                <p>Klass 4</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosCourse4_edit > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="60">
                                        <td width="20%" align="center" style="font-size: 14px;"><input class="class1_content" type="radio" name="course_4" value="<?php echo $row_DatosCourse4_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_4'] == $row_DatosCourse4_edit['id_course']) echo "checked"; ?>></td>
                                        <td width="80%" align="left" style="font-size: 12px;"><?php echo $row_DatosCourse4_edit['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosCourse4_edit = mysqli_fetch_assoc($DatosCourse4_edit));
                                }
                                ?>
                            </div>
                            <div class="class1" style="border-left: 2px solid #CCC; display: none;" id="courses5">
                                <p>Special Klass</p>
                                <hr>
                                <?php
                                if ($totalRows_DatosSpecialCourse_edit > 0) {
                                do { ?>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr height="60">
                                        <td width="20%" align="center" style="font-size: 14px;"><input class="class1_content" type="radio" name="course_s1" value="<?php echo $row_DatosSpecialCourse_edit['id_course'];?>" <?php if ($row_DatosEditInc['course_s1'] == $row_DatosSpecialCourse_edit['id_course']) echo "checked"; ?>></td>
                                        <td width="80%" align="left" style="font-size: 12px;"><?php echo $row_DatosSpecialCourse_edit['name'];?></td>
                                    <tr>
                                </table>
                                <?php } while ($row_DatosSpecialCourse_edit = mysqli_fetch_assoc($DatosSpecialCourse_edit));
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        Status:
                        <select class="textf" style="font-size: 14px; color: #999;" name="status" id="status">
                        <option value="1" <?php if ($row_DatosEditInc['status'] == 1) echo "selected"; ?>>Activ</option>
                        <option value="0" <?php if ($row_DatosEditInc['status'] == 0) echo "selected"; ?>>Inactiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Uppdatera !" />
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
                <input type="hidden" name="id_student" id="id_student" value="<?php echo $_GET["editc"];?>"/>
            </table>
        </form>
    </div>
<?php endif ?>