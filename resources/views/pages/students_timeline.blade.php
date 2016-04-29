@extends('layouts.authenticated_layout')

@section('content')

<div class="row">
  <div class="col-md-12 text-center"><h3 style="padding-top:0px;">Your GoActive Timeline</h3></div>
</div>

<div class="row" style="margin-top:5px;">
  <div class="col-md-12 text-center">
    <p>Welcome to your timeline – this shows when you added GoActive points, and which activity you selected.</p>
  </div>
</div>

<div class="col-md-12 text-center">
  <div class="row" style="margin:10px;">
    <h3 class="points-added">You have a total of {{ $points }} points</h3>
  </div>
</div>

@if ($timeline_week_one)
<div class="text-center"><h3>Intervention Week One</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_one as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title"><b>Points Added</b></h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_two)
<div class="text-center"><h3>Intervention Week Two</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_two as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_three)
<div class="text-center"><h3>Intervention Week Three</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_three as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_four)
<div class="text-center"><h3>Intervention Week Four</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_four as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_five)
<div class="text-center"><h3>Intervention Week Five</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_five as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_six)
<div class="text-center"><h3>Intervention Week Six</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_six as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_seven)
<div class="text-center"><h3>Intervention Week Seven</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_seven as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_eight)
<div class="text-center"><h3>Intervention Week Eight</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_eight as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_nine)
<div class="text-center"><h3>Intervention Week Nine</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_nine as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_ten)
<div class="text-center"><h3>Intervention Week Ten</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_ten as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_eleven)
<div class="text-center"><h3>Intervention Week Eleven</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_eleven as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@if ($timeline_week_twelve)
<div class="text-center"><h3>Intervention Week Twelve</h3></div>
<ul class="timeline">
  @foreach ($timeline_week_twelve as $data)
    <li @if ($data->id % 2 == 0) class="timeline-inverted" @endif >
      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
        <div class="timeline-panel">
          <div class="timeline-body">
            <div class="thumbnail">
              <div class="col-md-6 text-left" style="padding-left:0px";><h4 class="timeline-title">Points Added {{ $data->week }}</h4></div>
              <div class="col-md-6 text-right"><h4 class="timeline-title">{{ date('l jS F Y', strtotime($data->created_at)) }}</div>
                {{ Html::image("img/activities/$data->activity" . ".png", "$data->activity" , array('class' => 'img-responsive points-img')) }}
            </div>
            <p class="timeline-title-color text-center"><b>{{ $data->text }}</b></p>
          </div>
        </div>
      </li>
  @endforeach
</ul>
@endif

@stop
