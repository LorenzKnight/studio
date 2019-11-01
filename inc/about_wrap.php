<?php
$query_DatosPublications = sprintf("SELECT * FROM publications WHERE status= 1 ORDER BY id_publications DESC LIMIT 4");
$DatosPublications = mysqli_query($con, $query_DatosPublications) or die(mysqli_error($con));
$row_DatosPublications = mysqli_fetch_assoc($DatosPublications);
$totalRows_DatosPublications = mysqli_num_rows($DatosPublications);
?>
<div class="space">
    <div class="about_pic">
        <img style="opacity:0.6;" src="img/news/Yandali_people.jpg" height="" width="100%">
        <div class="about_text">
        <p>Den ideella föreningen Yandali startades under hösten 2019 av de fyra vännerna och dansarna Marie Husby, Sofia Franzén, Lorenz Knight och Lessly Awa Ayim.</p>
        <p>Dansare med en dröm om att skapa en ny kreativ plats i Göteborg för människor som älskar att dansa.</p>
        <br>
        <p>I november slår portarna upp till Yandali.</p>
        <p>En mötesplats och en dansskola med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.</p>
        <p>Med danslärare som undervisar i flera olika stilar och i danser med ursprung från olika delar av världen.</p>
        <p>En plats för kurser, workshops och danskvällar men även en social plats med många olika typer av evenemang där människor kan mötas och umgås.</p><br>
        <p>En plats att få känna sig hemma på.</p>
        </div>
    </div>
</div>