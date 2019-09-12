<?php
$query_DatosPackage = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
$row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
$totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
?>

<?php
 $query_DatosPackage3 = sprintf("SELECT * FROM package WHERE id_package=%s", GetSQLValueString($_GET["idCompl"], "int")); 
 $DatosPackage3 = mysqli_query($con, $query_DatosPackage3) or die(mysqli_error($con));
$row_DatosPackage3 = mysqli_fetch_assoc($DatosPackage3);
$totalRows_DatosPackage3 = mysqli_num_rows($DatosPackage3);
?>

<?php
$query_DatosReg = sprintf("SELECT * FROM students WHERE id_student=%s",
GetSQLValueString($_SESSION['ydl_UserId'], "text"));
$DatosReg = mysqli_query($con, $query_DatosReg) or die(mysqli_error($con));
$row_DatosReg = mysqli_fetch_assoc($DatosReg);
$totalRows_DatosReg = mysqli_num_rows($DatosReg);
?>
<div class="checkin">
    <div class="register_info">
        <h3 style="text-transform:uppercase;">Vad är Lorem Ipsum?</h3>
        <?php echo $_SESSION['ydl_UserId'];?><br>
        <p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin.
        Lorem ipsum har varit standard ända sedan 1500-talet,
        när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok.
        Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk typografi utan större förändringar.
        Det blev allmänt känt på 1960-talet i samband med lanseringen av Letraset-ark med avsnitt av Lorem Ipsum,
        och senare med mjukvaror som Aldus PageMaker.</p>
    </div>
    
    <div class="to_register">
            <?php
            if ($totalRows_DatosPackage > 0) {
            do { ?> 
        <div class="paquetes" onclick="location='registration.php?id=<?php echo $row_DatosPackage['id_package']; ?>'">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="80">
                        <td width="50%" valign="middle" align="center" style="padding: 0 10px;"><?php echo $row_DatosPackage['package_name'];?></td>
                        <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><?php echo $row_DatosPackage['description'];?></td>
                    </tr>
                </table>
        </div>
            <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
            }
            ?>

            <a href="reg_done.php?control=<?php echo $row_DatosReg["id_student"]; ?>">Click test</a>
    </div>
</div>