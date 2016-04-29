<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GoActive</title>

  @include('includes.head')

</head>
<body>

<style>

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
      margin: auto;
  }



</style>

<div class="container" style="width:100%; padding:0px;">
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
        {{ Html::image('img/site/carousel_one.png', 'Goactive Logo', array('class' => 'img-responsive')) }}
      </div>

      <div class="item">
        {{ Html::image('img/site/carousel_one.png', 'Goactive Logo', array('class' => 'img-responsive')) }}
      </div>

      <div class="item">
        {{ Html::image('img/site/carousel_one.png', 'Goactive Logo', array('class' => 'img-responsive')) }}
      </div>

      <div class="item">
        {{ Html::image('img/site/carousel_one.png', 'Goactive Logo', array('class' => 'img-responsive')) }}
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
</div>

<div class="container">

  @include('includes.nav')
  @yield('content')
  @include('includes.footer')

</div>

</body>
</html>
