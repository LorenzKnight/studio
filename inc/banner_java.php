<style>
@import url(https://fonts.googleapis.com/css?family=Roboto+Slab:700);

@media only screen and (min-device-width : 280px) and (max-device-width : 374px) {
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
  .txt_position {
    width: 100%;
    position: absolute;
    top: 200px;
    z-index: 1;
  }
  .txt {
    width: 80%;
    padding: 10%;
    color: #FFF;
    text-shadow: 1px 1px 15px #999;
    font-size: 60px;
    font-weight: 200;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    margin: 0 auto;
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: rgba(201,172,140,1);
  }
}
@media (min-device-width: 375px) and (max-device-width : 767px) {
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
  .txt_position {
    width: 100%;
    position: absolute;
    top: 200px;
    z-index: 1;
  }
  .txt {
    width: 40%;
    padding: 10%;
    color: #FFF;
    text-shadow: 1px 1px 15px #999;
    font-size: 60px;
    font-weight: 200;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    /*background-color: blue;*/
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: rgba(201,172,140,1);
  }
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1023px) and (-webkit-min-device-pixel-ratio: 2) {
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
  .txt_position {
    width: 100%;
    position: absolute;
    top: 200px;
    z-index: 1;
  }
  .txt {
    width: 40%;
    padding: 7%;
    color: #FFF;
    text-shadow: 1px 1px 15px #999;
    font-size: 60px;
    font-weight: 200;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    margin: 0 auto;
  }
  .txt sup {
      font-size: 20px;
      font-weight: 200;
      color: #FFF;
      text-shadow: 1px 1px 15px #333;
  }
}
@media only screen and (min-device-width: 1024px) {
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
  .txt_position {
    width: 100%;
    position: absolute;
    top: 320px;
    z-index: 1;
    /* background-color: red; */
  }
  .txt {
    width: 27%;
    padding: 15px 0;
    margin: 0 0 0 180px;
    float: left;
    color: #FFF;
    text-shadow: 1px 1px 15px #666;
    font-size: 60px;
    font-weight: 200;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-align: center;
    /* background-color: blue; */
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
    <img class="photo_b" src="img/banners/pic1.png" alt="loops Dance Studio" height="" width="">
    <img class="photo" src="img/banners/nor.png" alt="loops Dance Studio" height="" width="">
      <div class="txt_position">
        <div class="txt">
          <p>Göteborgs</p>
          <p>nya dansstudio.</p>
          <sup>- av dansare, för dansare -</sup>
        </div>
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