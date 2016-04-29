@extends('layouts.authenticated_layout')

@section('content')

<script type="text/javascript">

  $(document).ready(function(){
    $("#myTab li:eq(0) a").tab('show');
  });

  $(function () {
    $(document).ready(function() {
      var chart1 = new Highcharts.Chart({

        credits: { enabled: false },

        chart: { renderTo: 'container2', type: 'column' },

        title: { text: '' },

        legend: { enabled: false },

        xAxis: {
          title: {
            text: 'Week Number'
          },
            categories: ['Week 1','Week 2','Week 3','Week 4','Week 5','Week 6','Week 7','Week 8','Week 9','Week 10','Week 11','Week 12']
        },

        yAxis: {
          title: {
              text: 'Points Awarded'
          },
        },

        series: [{
            name: 'Week Data',
            data: [{{ $weeks }}]
        }],

      });
    });
  });

  $(function () {
    $(document).ready(function() {
      var chart = new Highcharts.Chart({

        credits: { enabled: false },

        chart: { renderTo: 'container', type: 'column' },

        title: { text: '' },

        legend: { enabled: false },

        xAxis: {
          title: {
            text: 'Week Number'
          },
            categories: ['Week 1','Week 2','Week 3','Week 4','Week 5','Week 6','Week 7','Week 8','Week 9','Week 10','Week 11','Week 12']
        },

        yAxis: {

          title: {
              text: 'Cumulative Points Awarded'
          },

          plotLines:[
          {
            value:10,
            color: '#ff0000',
            width:1,
            zIndex:4,
            label:{text:'goal'},
            dashStyle: 'line',
            label: {
                useHTML: true,
                text: '<span style="font-size:14px; font-weight: bold; padding: 20px;">Frisbee Target' + '10' + ' Points</span>',
                align: 'right',
                rotation: 0
            },
          },
          {
            value:25,
            color: '#ff0000',
            width:1,
            zIndex:4,
            label:{text:'goal'},
            dashStyle: 'line',
            label: {
                useHTML: true,
                text: '<span style="font-size:14px; font-weight: bold; padding: 20px;">Water Bottle' + '25' + ' Points</span>',
                align: 'right',
                rotation: 0
            },
          },
          {
            value:50,
            color: '#ff0000',
            width:1,
            zIndex:4,
            label:{text:'goal'},
            dashStyle: 'line',
            label: {
                useHTML: true,
                text: '<span style="font-size:14px; font-weight: bold; padding: 20px;">Sports Bag' + '50' + ' Points</span>',
                align: 'right',
                rotation: 0
            },
          },
          {
            value:200,
            color: '#ff0000',
            width:1,
            zIndex:4,
            label:{text:'goal'},
            dashStyle: 'line',
            label: {
                useHTML: true,
                text: '<span style="font-size:14px; font-weight: bold; padding: 20px;">Hoody' + '200' + ' Points</span>',
                align: 'right',
                rotation: 0
            },
          },
        ],

        },

        series: [{
            name: 'Cumulative Points',
            data: [{{ $cumulative }}]
        }],

      });
    });
  });

  $(function () {
    $(document).ready(function() {
      var chart1 = new Highcharts.Chart({

        credits: { enabled: false },

        chart: { renderTo: 'container3', type: 'column' },

        title: { text: '' },

        legend: { enabled: false },

        xAxis: {
          title: {
            text: 'Week Number'
          },
            categories: [{!! $activityList !!}]
        },

        yAxis: {
          title: {
              text: 'Points Awarded'
          },
        },

        series: [{
            name: 'Week Data',
            data: [{{ $activityPoints }}]
        }],

      });
    });
  });

</script>

<div class="row">
  <div class="col-md-12 text-center">
    <h3 style="padding-top:0px;">Welcome back {{ $name }}</h3>
    <h4 style="padding-top:0px;">{{ $schoolName }}&nbsp;Form&nbsp;{{ $formName }}</h4>
  </div>
</div>

<div class="row" style="margin-top:5px;">
  <div class="col-md-12 text-center">
    <p>Welcome to your GoActive programme pages; we’re thrilled to see you! Using the tabs above, you can upload your weekly physical activity points, track your timeline to see when you achieved the most points (and how!), and see where your school is compared to other schools taking part in GoActive. You can also claim exciting GoActive prizes, and view messages from your GoActive mentor. Have fun!</p>
  </div>
</div>

@if (Session::has('flash_message'))
  <div class="alert alert-success text-center">
    <b>{{ Session::get('flash_message') }}</b>
  </div>
@endif

<div class="col-md-12 text-center">
<div class="row" style="margin-top:5px;">
  <h3 class="points-added">You have a total of {{ $points }} points</h3>
</div>
</div>

<div class="bs-example">
  <ul class="nav nav-tabs" id="myTab">
    <li><a data-toggle="tab" href="#sectionA">Your Cumulative Points</a></li>
    <li><a data-toggle="tab" href="#sectionB">Your Weekly Points</a></li>
    <li><a data-toggle="tab" href="#sectionC">Your Points Per Activity</a></li>
  </ul>
  <div class="tab-content">
    <div id="sectionA" class="tab-pane fade">
      <h4 class="text-center">The Graph Below Shows Your Weekly Points Over The Intervention Period</h4>
      <div id="container" style="width:100%; height:380px;"></div>
    </div>
    <div id="sectionB" class="tab-pane fade">
      <h4 class="text-center">The Graph Below Shows Your Weekly Cumlative Points Over The Intervention Period</h4>
      <div id="container2" style="width:60%; height:380px;"></div>
    </div>
    <div id="sectionC" class="tab-pane fade">
      <h4 class="text-center">The Graph Below Shows Your Total Points Over The Intervention Period By Activity</h4>
      <div id="container3" style="width:60%; height:380px;"></div>
    </div>
  </div>
</div>

<div class="page-header text-center">
  <h3>Your Rewards</h3>
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
