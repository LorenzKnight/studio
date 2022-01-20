<?php if($_GET["id"]):?>
<div class="form_frame">
    <div class="container">
        <div class="card">
            <div class="sneaker">
                <div class="circle"></div>
                <div class="foto">
                    <img src="img/news/<?php echo $row_Datoscollab['foto']; ?>" >
                </div>
                <!-- <img src="img/adidas.png" alt="adidas"> -->
            </div>
            <div class="info">
                    <div class="close">
                        <button onclick="window.location.replace('about');">+</button> 
                    </div>
                    
                    <div class="content">
                        <h1 class="title"><?php echo $row_Datoscollab['title']; ?></h1>
                        <p><?php echo $row_Datoscollab['content']; ?></p>

                        <!-- <button>39</button> -->
                        <!-- <button>40</button> -->
                        <!-- <button class="active">42</button> -->
                        <!-- <button>44</button> -->
                    </div>
                    
                
            </div>
        </div>
    </div>
    <script src="../js/card_animation.js"></script>
</div>
<?php endif ?>