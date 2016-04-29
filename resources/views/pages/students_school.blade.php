@extends('layouts.authenticated_layout')

@section('content')

<script type="text/javascript">

  $(function () {
    $(document).ready(function() {
      var chart = new Highcharts.Chart({

        credits: {
          enabled: false
        },

        chart: {
            renderTo: 'container',
            type: 'column'
        },

        title: {
            text: ''
        },

        legend: {
          enabled: false
        },

        xAxis: {
          title: {
            text: 'Form Name'
          },
            categories: [{!! $formsInSchool !!}]
        },

        yAxis: {
          title: {
              text: 'Points Awarded'
          },
        },

        series: [{
            name: 'Week Data',
            data: [{{ $pointsPerForm }}]
        }],

      });
    });
  });

  $(function () {
    $(document).ready(function() {
      var chart = new Highcharts.Chart({

        credits: {
          enabled: false
        },

        chart: {
            renderTo: 'container2',
            type: 'column'
        },

        title: {
            text: ''
        },

        legend: {
          enabled: false
        },

        xAxis: {
          title: {
            text: 'Activity'
          },
            categories: [{!! $schoolActivitiesName !!}]
        },

        yAxis: {
          title: {
              text: 'Activity Times'
          },
        },

        series: [{
            name: 'Week Data',
            data: [{{ $schoolActivitiesCount }}]
        }],

      });
    });
  });

</script>

<div class="row">
  <div class="col-md-12 text-center">
    <h3 style="padding-top:0px;">Your School Performance</h3>
    <h4 style="padding-top:0px;">{{ $schoolInfo }}</h4>
  </div>
</div>

<div class="row" style="margin-top:5px;">
  <div class="col-md-12 text-center">
    <p>This page shows how your class are performing compared to the other classes in your school. The total number of points awarded (that is, how big the bar is!) is the sum of all of the points your class have achieved this week.</p>
    <p>You’re not going to let the other classes win, are you ?</p>
</p>
  </div>
</div>

<div id="sectionA">
  <h4 class="text-center">The Graph Below Shows The Performance Of All Year 9 Classes In Your School</h4>
  <div id="container" style="width:100%; height:380px;"></div>
</div>

<div id="sectionB">
  <h4 class="text-center">The Graph Below Shows The Most Popular Activities In Your School</h4>
  <div id="container2" style="width:100%; height:380px;"></div>
</div>

@stop
