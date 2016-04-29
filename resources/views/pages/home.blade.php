@extends('layouts.default', array('name'=> $name))
@section('content')

<style>

p {
  color: #393d40;
  font-family: "Open Sans",Helvetica,Arial,sans-serif;
  -moz-font-feature-settings: "kern";
  font-feature-settings: "kern";
  font-size: 14px;
  font-weight: 300;
  line-height: 1.5;
}

</style>

<div class="row maintext" id="maintext">

  <div class="col-md-8" style="padding-top:10px;">
    <p>Welcome to the GoActive Evaluation Study. GoActive is an exciting new programme designed to increase physical activity in secondary school students. The GoActive programme includes the whole of Year 9, and encourages students to try new physical activities with their friends. We are currently recruiting secondary schools in East Anglia to help us evaluate the programme.</p>
    <p>For more information about the study you can watch our video below and read more about the study on our <a href="about.html">about</a> page. If you have any questions about the study or want to hear more we’d love to hear from you, you can contact us <a href="contact.html">here.</a></p>

    <br>
    <div class="embed-responsive embed-responsive-16by9">
      <p><iframe width="750" height="420" src="//sms.cam.ac.uk/media/2206142/embed" frameborder="0" scrolling="no" allowfullscreen></iframe></p>
    </div>
    <br>

    <p class="text-right"><a target="_blank" href="http://www.cuh.org.uk/childrens-services/active-our-children-and-young-people%E2%80%99s-board"> {{ Html::image('img/logos/active-logo.png', 'MRC Epidemiology Unit Logo', array('class' => 'img-responsive', 'class' => 'img-thumbnail')) }} </a></p>
    <p class="text-left">The GoActive Study is funded by the <a target="_blank" href="http://www.nihr.ac.uk/funding/public-health-research-programme.htm">National Institute for Health Research's Public Health Research Programme (Project number 13/90/18)</a></p>

  </div>

  <div class="col-md-4">
    <a class="twitter-timeline" href="https://twitter.com/GoActiveCamb" data-widget-id="699600485246959616">Tweets by @GoActiveCamb</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>

@stop
