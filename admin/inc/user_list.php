<div class="user_div">
<table width="100%" cellspacing="0" class="table_user" style="background-color: #F7B500;margin: 20px auto 0; ">
    <tr height="40" style="color: #FFF;">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Name</td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px; border-bottom: 1px solid #F7B500;">Surname</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">E-Mail</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Telefone</td>
        <td width="28%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;"></td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Level</td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">Status</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; border-bottom: 1px solid #F7B500;">-</td>
    </tr>
</table>
    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['name']; ?></td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"> <?php echo $row_DatosConsulta['surname']; ?></td>
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['mail']; ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo $row_DatosConsulta['telefon']; ?></td>
        <td width="28%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"></td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo rank($row_DatosConsulta['rank']); ?></td>
        <td width="6%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><?php echo status($row_DatosConsulta['status']); ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;"><input class="button_cancel" value="edit"/> - <input class="button_cancel" value="delete"/></td>
    </tr>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
    }
    else
    { // Show if recordset is empty ?>
    <?php } ?>
</table>
</div>

<table width="100%" cellspacing="0" class="" style="margin: 0 auto; width: 90%;">
    <tr height="60">
        <td width="100%" nowrap="nowrap" align="center" style="font-size: 30px;">
          <a href="#" class="formbtn" onclick="UserAddForm()">+</a>
        </td>
    </tr>
</table>
<div class="navmenu" style="background-color: #F7B500; border-radius: 0 0 7px 7px; padding: 10px 0 5px 0;">
  <form action="users.php" method="post" name="forminsert" id="forminsert">
  <table width="100%" cellspacing="0" class="table_user" style="margin: 0 auto; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
      <tr height="60">
          <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px; color: #CCC;"><input class="textf" type="text" placeholder="Name" name="name" id="name" size="20" required/></td>
          <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px; color: #CCC;"><input class="textf" type="text" placeholder="Surname" name="surname" id="surname" size="20" required/></td>
          <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px; color: #CCC;"><input class="textf" type="text" placeholder="your_name@yourmail.com" name="mail" id="mail" size="30" required/></td>
          <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; color: #CCC;"><input class="textf" type="text" placeholder="Telefon" name="telefon" id="telefon" size="20" required/></td>
          <td width="14%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px; color: #CCC;"><input class="textf" type="password" placeholder="Password" name="password" id="password" size="30" required/></td>
          <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px; color: #CCC;"></td>
          <td width="13%" nowrap="nowrap" align="right" style="padding: 0 0 0 10px; color: #CCC;"><input class="textf" type="text" placeholder="Level" name="rank" id="rank" size="10" required/></td>
          <td width="17%" nowrap="nowrap" align="right" style="padding: 0 25px 0 0;"><a href="users.php"><input class="button_cancel" value="cancel"/></a> - <input type="submit" class="button_ok" value="ok"/></td>
      </tr>
  </table>
  <input type="hidden" name="MM_insert" id="MM_insert" value="forminsert" />
  <input type="hidden" name="status" id="status" value="1" />
  </form>
</div>

    
     
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<style>
.formbtn {
  cursor: pointer;
  width: 40px;
  height: 20px;
  right: 10px;
  top: 10px;
}
.navmenu {
  width: 90%;
  margin: 30px auto;
  background: #fff;
  /*left: 170px;*/
  top: -95px;
  /*box-shadow: 0 0 10px 2px rgba(0, 0, 0, 15);*/
  z-index: 10;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 300ms ease;
  transition: all 300ms ease;
  position: relative;
}

.navmenu.opened {
  visibility: visible;
  opacity: 1;
}
</style>
<script>
    $('.formbtn').on('click', function(e) {
      e.stopPropagation();
      $('.navmenu').toggleClass('opened');
    });
    /*$(document).on('click', function() {
      $('.navmenu').removeClass('opened');
    });*/
</script>
