<?php //require_once('../connections/conexion.php');?>
<?php
 $query_DatosAppearance = sprintf("SELECT * FROM appearance WHERE status = 1 ORDER BY appearance_name ASC"); 
 $DatosAppearance = mysqli_query($con, $query_DatosAppearance) or die(mysqli_error($con));
 $row_DatosAppearance = mysqli_fetch_assoc($DatosAppearance);
 $totalRows_DatosAppearance = mysqli_num_rows($DatosAppearance);
?>

<div class="appbutton">
    <div class="menuappear">
        <form name="appearanceselector" action="">
            <ul>
                <li id="theme_title">Themes</li>
                <?php if ($row_DatosAppearance > 0) { // Show if recordset not empty ?>
                <?php do { ?>
                    <li>
                <input type="radio" id="appearance" name="appearance" value="<?php echo $row_DatosAppearance['id_appearance']; ?>" onclick="appearencia();" <?php if(myAppearance($_SESSION['std_UserId']) == $row_DatosAppearance['id_appearance']) { ?>checked<?php } ?>>
                        <?php echo $row_DatosAppearance['appearance_name'] ?>
                    </li>
                <?php } while ($row_DatosAppearance = mysqli_fetch_assoc($DatosAppearance)); 
                }
                else
                { // Show if recordset is empty ?>
                <?php } ?>
            <ul>
        </form>
    </div>
</div>

<script type="text/javascript">

    function appearencia(){
    var radiovalue=document.appearanceselector.appearance.value;
    if(radiovalue.length==0) radiovalue="ninguno";

    // alert("Valor seleccionado: " + radiovalue);
    window.location="appearance_change.php?app="+radiovalue;
    }
</script>
