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
    text-shadow: 1px 1px 15px #666;
    font-size: 60px;
    font-weight: 200;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    /*font-family: 'Montserrat', sans-serif;*/
    text-align: center;
    position: absolute;
    top: 200px;
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: #FFF;
      text-shadow: 1px 1px 15px #333;
  }
}
</style>
<div class="banner">
  <div class="tile">
    <img class="photo_b" src="img/banners/pic1.png" alt="" height="" width="">
    <img class="photo" src="img/banners/nor.png" alt="" height="" width="">
    <div class="txt">
      <p>Göteborgs</p>
      <p>nya dansstudio.</p>
      <sup>- av dansare, för dansare -</sup>
    </div>
  </div>
</div>
<script>
  document.getElementsByClassName('tile')[0].addEventListener('mousemove', function (e) {
    const target = e.target.classList.contains('tile') ? e.target : e.target.parentElement
    var photo = null;
    for (var i = 0; i < target.childNodes.length; i++) {
        if (target.childNodes[i].className == "photo") {
          photo = target.childNodes[i];
          break;
        }        
    }

    var rect = target.getBoundingClientRect()
    const top = rect.top + document.body.scrollTop
    const left = rect.left + document.body.scrollLeft
    const width = parseFloat(getComputedStyle(target, null).width.replace("px", ""))
    const height = parseFloat(getComputedStyle(target, null).height.replace("px", ""))

    photo.style.transform = `translate(${((e.pageX - left) / width) * -5}%, ${(((e.pageY - top) / height) * -5) + 10}%`
    // $(this).children('.photo').css({'transform': `translate(${((e.pageX - $(this).offset().left) / $(this).width()) * -5}%, ${(((e.pageY - $(this).offset().top) / $(this).height()) * -5) + 10}%`});
  })

  document.getElementsByClassName('tile')[0].addEventListener('mouseout', function (e) {
    const target = e.target.classList.contains('tile') ? e.target : e.target.parentElement
    var photo = null;
    for (var i = 0; i < target.childNodes.length; i++) {
        if (target.childNodes[i].className == "photo") {
          photo = target.childNodes[i];
          break;
        }        
    }

    photo.style.transform = `translate(0%, 10%)`
    // $(this).children('.photo').css({'transform': `translate(${((e.pageX - $(this).offset().left) / $(this).width()) * -5}%, ${(((e.pageY - $(this).offset().top) / $(this).height()) * -5) + 10}%`});
  })
  </script>