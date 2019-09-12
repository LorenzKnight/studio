<style>
@import url(https://fonts.googleapis.com/css?family=Roboto+Slab:700);

@media only screen and (min-width: 320px) and (-webkit-device-pixel-ratio : 2) {
  .tile {
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  .photo {
    position: absolute;
    top: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transform: translate(0%, 10%);
    transition: transform .5s ease-out;
    filter: contrast(1000%) sepia(1) hue-rotate() saturate(%);
  }
  .photo_b {
    position: absolute;
    top: 0;
    right: 160px;
    visibility: inherit;
  }
  .txt {
    width: 80%;
    padding: 10%;
    color: #FFF;
    text-shadow: 1px 1px 15px #999;
    font-size: 60px;
    font-weight: 600;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    position: absolute;
    top: 200px;
    /*background-color: blue;*/
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: rgba(201,172,140,1);
  }
}
@media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
  .tile {
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  .photo {
    position: absolute;
    top: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transform: translate(0%, 10%);
    transition: transform .5s ease-out;
    filter: contrast(1000%) sepia(1) hue-rotate() saturate(%);
  }
  .photo_b {
    position: absolute;
    top: 0;
    right: 160px;
    visibility: inherit;
  }
  .txt {
    width: 80%;
    padding: 10%;
    color: #FFF;
    text-shadow: 1px 1px 15px #999;
    font-size: 60px;
    font-weight: 600;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    position: absolute;
    top: 200px;
    /*background-color: blue;*/
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: rgba(201,172,140,1);
  }
}
@media (min-width: 425px) {
}
@media (min-width: 768px) {
}
@media (min-width: 1024px) {
 .tile {
    position: relative;
    float: left;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }

  .photo {
    position: absolute;
    top: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transform: translate(0%, 10%);
    transition: transform .5s ease-out;
    filter: contrast(1000%) sepia(1) hue-rotate() saturate(%);
  }
  .photo_b {
    position: absolute;
    top: 0;
    right: 160px;
    visibility: inherit;
  }
  .txt {
    width: 40%;
    padding: 5%;
    color: #FFF;
    text-shadow: 1px 1px 15px #999;
    font-size: 60px;
    font-weight: 600;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    position: absolute;
    top: 200px;
    /*background-color: blue;*/
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: rgba(201,172,140,1);
  }
}
</style>
<div class="banner">
  <div class="tile">
    <img class="photo_b" src="img/banners/pic1.png" alt="" height="" width="">
    <img class="photo" src="img/banners/nor.png" alt="" height="" width="">
    <div class="txt">
      <p>Din nya</p>
      <p>Dance stället.</p>
      <sup>- för allt och alla -</sup>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script>
    $('.tile')
      // tile mouse actions
      .on('mousemove', function(e){
        $(this).children('.photo').css({'transform': `translate(${((e.pageX - $(this).offset().left) / $(this).width()) * -5}%, ${(((e.pageY - $(this).offset().top) / $(this).height()) * -5) + 10}%`});
      })
  </script>