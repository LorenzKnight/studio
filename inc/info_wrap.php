<style>
    .container{
        width: 90%;
        margin: 0 auto;
        /* background-color: green; */
        overflow: auto;
        display: flex;
    }
    .info_sidebar {
        width: 250px;
        height: 800px;
        background-color: red;
        float: left;
    }
    .info_content {
        flex: 1;
        /* background-color: orange; */
        overflow: auto;
        float: left;
    }
    .public_frame {
		width: 98%;
		height: 350px;
		background-color: white;
		margin: 5px auto 15px;
		display: flex;
		border-radius: 7px;
		-webkit-box-shadow: 0px 0px 7px -1px rgba(224,221,224,1);
        -moz-box-shadow: 0px 0px 7px -1px rgba(224,221,224,1);
        box-shadow: 0px 0px 7px -1px rgba(224,221,224,1);
	}
    .public_pic {
		width: 55%;
		/* flex: 1; */
		height: 350px;
		background-size: cover;
		background-repeat: no-repeat;
		background-color: #fafafa;
		background-position: 50% 60%;
		object-fit: cover;
		object-position: center;
		padding: 0 1%;
		overflow: hidden;
		text-align: center;
		border-radius: 7px 0 0 7px;
	}
    .public_txt {
		/* width: 40%; */
		flex: 1;
		/* height: 400px; */
		/* text-align: center; */
		/* background-color: #fafafa; */
        color: #999;
		padding: 0 5%;
		/* border-radius: 0 7px 7px 0; */
	}
	.texto_original_p {
		font-size: 16px;
		line-height:1.5;
		margin-top: 0;
	}
</style>
<div class="space">
    <div class="container">
        <div class="info_sidebar">
        </div>
        <div class="info_content">
            <?php if ($row_DatosInfo > 0) { // Show if recordset not empty ?>
            <?php do { ?>
                <div class="public_frame">
                    <?php //if($row_DatosInfo['foto'] != ''){ ?>
                    <div class="public_pic" style="background-image: url('img/news/<?php echo $row_DatosInfo['foto']; ?>');">

                    </div>
                    <?php //} ?>
                    <div class="public_txt" style="text-align:<?php //if($row_DatosInfo['foto'] == '') { ?> center <?php //} ?>;">
                        <h1 class="product_title"><?php //echo $row_DatosInfo['title']; ?></h1>

                        <?php 
                            $texto = $row_DatosInfo['content'];
                            if (strlen($texto) > 5) {
                            $texto = substr($texto,0,300).'';
                            print '<div class="texto_original_p">'.$texto.'</div>';
                        ?>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- <div class="detail_social">
                        <div class="addthis_toolbox addthis_default_style ">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_pinterest_pinit"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                        </div>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5132467a26319b6c"></script>
			        </div> -->

                </div>
            <?php } while ($row_DatosInfo = mysqli_fetch_assoc($DatosInfo)); 
            } ?>
        </div>
    </div>
</div>