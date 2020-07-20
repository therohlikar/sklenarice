<style>
    .carousel-indicators li{
        border: 2px solid white;
    }
</style>
<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/gallery/1.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h4>Lorem ipsum</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/gallery/2.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h4>Lorem ipsum</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/gallery/3.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h4>Lorem ipsum</h4>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Předchozí</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Další</span>
  </a>
  <!--/.Controls-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="imgs/gallery/1.jpg"
        class="img-fluid"></li>
    <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="imgs/gallery/2.jpg"
        class="img-fluid"></li>
    <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="imgs/gallery/3.jpg"
        class="img-fluid"></li>
  </ol>
</div>
<!--/.Carousel Wrapper-->
