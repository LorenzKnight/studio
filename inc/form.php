<?php
$query_DatosPackage = sprintf("SELECT * FROM package WHERE status = 1 ORDER BY id_package ASC");
$DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
$row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
$totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
?>
<script>
const isElementOrDescendant = function (parent, child) {
    if (parent === child) return true

    var node = child.parentNode;
    while (node != null) {
    if (node == parent) {
        return true;
    }
    node = node.parentNode;
    }
    return false;
}

const onClick = function (e) {
    const el = document.getElementById('big_b')
    const clickableAreas = Array.from(document.getElementsByClassName('paquetes'))
    clickableAreas.push(el)

    let isClickOutside = true

    for (let i = 0; i < clickableAreas.length; i++) {
        if (isElementOrDescendant(clickableAreas[i], e.target)) {
            isClickOutside = false
        }
    }

    if (isClickOutside) {
        location = 'price_registration.php'
    }
}

document.addEventListener('click', onClick)
</script>
<?php if($_GET["tickets"]):?>
    <div class="checkin_frame">
        <div class="checkin" id="big_b">
            <div class="register_info">
                <h3 style="text-transform:uppercase;">KURSER OCH SOCIALDANS</h3>

                <h3>Kurser & paket</h3>
                <p>Varje termin är uppdelad i två kurs-omgångar och varje kurs pågår i 9 veckor.</p>
                <br>
                <p>Innan kursstart anmäler du dig till de kurser du vill gå. 
                I de olika paketen ingår även så kallade practica, tillfällen då du kan öva och repetera steg tillsammans med andra kursdeltagare. 
                I vårt brons-paket ingår den practica som äger rum samma dag som de kurs du anmält dig till. I de övriga paketen ingår samtliga practicas.</p>
                
                <h3>OBS!</h3>
                <p>Din anmälan gäller bara den specifika kurs du anmält dig till, man kan ej byta till annan kurs efter köp.</p>
            </div>
            
            <div class="to_register">
                    <?php
                    if ($totalRows_DatosPackage > 0) {
                    do { ?> 
                <a href="registration.php?id=<?php echo $row_DatosPackage['id_package']; ?>"><div class="paquetes">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr height="80">
                                <td width="33.3333333%" valign="middle" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosPackage['package_name'];?></td>
                                <td width="33.3333333%" valign="middle" align="left" style="padding: 0 10px;"><?php echo $row_DatosPackage['description'];?></td>
                                <td width="33.3333333%" valign="middle" align="left" style="padding: 0 0 0 50px;"><?php echo $row_DatosPackage['price'];?> Kr</td>
                            </tr>
                        </table>
                </div></a>
                    <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage));
                    }
                    ?>
                    <!--<a href="reg_done.php?control=<?php //echo $row_DatosReg["id_student"]; ?>">Click test</a>-->
            </div>
        </div>
    </div>
    <?php endif ?>