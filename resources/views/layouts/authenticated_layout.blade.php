<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>GoActive Login</title>

      @include('includes.head')

  </head>
  <body>

  <div class="navbar navbar-default navbar-fixed-top;">
    <div class="container" style="padding-top:8px; padding-bottom:8px;">
      <div class="col-md-3 text-left" style="padding-left:0px; padding-top:10px;">
        <a href="/">{{ Html::image('img/logos/logo-small.png', 'GoActive Logo') }}</a>
        DEVELOPMENT
      </div>
      <div class="col-md-6" style="padding:0px;">
          {{ Html::image("img/school_logos/$school_image" . ".png", "$school_name School Logo" , array('class' => 'img-responsive center-block')) }}
      </div>
      <div class="col-md-3 text-right" style="padding-top:25px; padding-right:0px;">
        <div class="btn btn-warning"><b>Intervention Week {{ $intervention_week }}</b></div>
      </div>
    </div>
  </div>

  <div class="container">

    @include('includes.authenticated_nav')
    @yield('content')
    @include('includes.footer')

    <!-- JavaScripts -->

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

  </div>

  </body>
</html>
