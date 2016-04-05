
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $firstslider; ?>" alt="Chania" height="200px" width="100%" class="carousel">
    </div>

    <div class="item">
      <img src="<?php echo $secondslider; ?>" alt="Chania" height="200px" width="100%" class="carousel">
    </div>

    <div class="item">
      <img src="<?php echo $thirdslider; ?>" alt="Flower" height="200px" width="100%" class="carousel">
    </div>

    <div class="item">
      <img src="<?php echo $fourthslider; ?>" alt="Flower" height="200px" width="100%" class="carousel">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- End Slider -->
