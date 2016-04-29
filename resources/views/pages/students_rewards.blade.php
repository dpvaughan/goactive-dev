@extends('layouts.authenticated_layout')

@section('content')

<div class="row">
  <div class="col-md-12 text-center"><h3 style="padding-top:0px;">Rewards</h3></div>
</div>

<div class="row" style="margin-top:5px;">
  <div class="col-md-12 text-center">
    <p>Rewards</p>
  </div>
</div>

<div class="col-md-12 text-center">
  <div class="row" style="margin:10px;">
    <h3 class="points-added">You have a total of {{ $points }} points</h3>
  </div>
</div>

<div class="page-header text-center">
  <h3>Rewards To Claim</h3>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="thumbnail" @if ( $frisbee <= 0 ) style="box-shadow: 0 1px 15px rgba(0, 0, 0, 0.3);" @endif >
      {{ Html::image('img/site/frisbee_bee_red.png', 'GoActive Frisbee Image', array('class' => 'img-responsive')) }}
      <div class="caption">

        @if ( $frisbee <= 0)
          <h3 class="text-center" style="margin-top:0px">Well Done You Have Enough Points To Claim A Frisbee</h3>
          <p class="text-center"><a href="rewards/frisbee" class="btn btn-success" role="button">Claim Frisbee</a></p>
        @else
          <h3 class="text-center">{{ $frisbee }} Points Needed To Claim A Frisbee</h3>
        @endif

      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail" @if ( $bottle <= 0 ) style="box-shadow: 0 1px 15px rgba(0, 0, 0, 0.3);" @endif>
      {{ Html::image('img/site/water.png', 'GoActive Frisbee Water Bottle Image', array('class' => 'img-responsive')) }}
      <div class="caption">

        @if ( $bottle <= 0)
          <h3 class="text-center" style="margin-top:0px">Well Done You Have Enough Points To Claim A Water Bottle</h3>
          <p class="text-center"><a href="rewards" class="btn btn-success" role="button">Claim Water Bottle</a></p>
        @else
          <h3 class="text-center">{{ $bottle }} Points Needed To Claim A Water Bottle</h3>
        @endif

      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail" @if ( $bag <= 0 ) style="box-shadow: 0 1px 15px rgba(0, 0, 0, 0.3);" @endif>
      {{ Html::image('img/site/frisbee_bee_red.png', 'GoActive Sports Bag', array('class' => 'img-responsive')) }}
      <div class="caption">

        @if ( $bag <= 0)
          <h3 class="text-center" style="margin-top:0px">Well Done You Have Enough Points To Claim A Sports Bag</h3>
          <p class="text-center"><a href="rewards" class="btn btn-success" role="button">Claim Sports Bag</a></p>
        @else
          <h3 class="text-center">{{ $bag }} Points Needed To Claim Sports Bag</h3>
        @endif

      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail" @if ( $hoody <= 0 ) style="box-shadow: 0 1px 15px rgba(0, 0, 0, 0.3);" @endif>
      {{ Html::image('img/site/frisbee_bee_red.png', 'GoActive Hoody', array('class' => 'img-responsive')) }}
      <div class="caption">

        @if ( $hoody <= 0)
          <h3 class="text-center" style="margin-top:0px">Well Done You Have Enough Points To Claim A Hoody</h3>
          <p class="text-center"><a href="rewards" class="btn btn-success" role="button">Claim Hoody</a></p>
        @else
          <h3 class="text-center">{{ $hoody }} Points Needed To Claim Hoody</h3>
        @endif

      </div>
    </div>
  </div>
</div>

@stop
