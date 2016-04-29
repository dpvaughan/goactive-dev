@extends('layouts.default', array('name'=> $name))
@section('content')

<style>

  span.ocbox {
  	display: none;
  }

  h4{
    padding:0px;
    margin:0px;
    margin-bottom:5px;
    font-family: "Open Sans",Helvetica,Arial,sans-serif;
    -moz-font-feature-settings: "kern";
    font-feature-settings: "kern";
    font-size: 18px;
    font-weight: 400;
    line-height: 1.5;
  }

  p,li{
    color: #393d40;
    font-family: "Open Sans",Helvetica,Arial,sans-serif;
    -moz-font-feature-settings: "kern";
    font-feature-settings: "kern";
    font-size: 14px;
    font-weight: 300;
    line-height: 1.5;
  }

  .aboutlinks{
    font-family: "Open Sans",Helvetica,Arial,sans-serif;
    -moz-font-feature-settings: "kern";
    font-feature-settings: "kern";
    font-size: 14px;
    font-weight: 300;
    line-height: 1.5;
  }

</style>

<div class="row maintext" id="maintext">
  <!--<div class="col-md-12 text-center"><h3>About GoActive</h3></div>-->
    <div class="col-md-4 text-left">
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#whydevelop">Why develop GoActive ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#howwas">How was GoActive developed ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#whatis">What is GoActive ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#howwill">How will we know if GoActive is effective ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#whatwill">What will we measure ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#when">When are the measurement sessions taking place ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#what">What will happen with the results of the study ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#how">How will we involve the people that matter ?</a></div>
      <div style="padding-bottom:10px;"><a class="aboutlinks" href="#who">Who is organising and funding the study ?</a></div>
    </div>

    <div class="col-md-8">

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="whydevelop">Why develop GoActive ?</a></h4>
        <p>We know that low physical activity levels when we are young increase the risk of obesity, mental health problems and poor bone development. Physical activity levels drop off during adolescence, and stay low in adulthood.  These low levels of activity also increase the risk of long-term health problems in adulthood, including diabetes and some cancers.</p>
        <p>Developing programmes that help teenagers to increase and maintain activity levels is therefore an important public health priority.</p>
        <div class="text-center" style="padding-bottom:20px;">
          {{ Html::image('img/about/about-run.png', 'MRC Epidemiology Unit Logo', array('class' => 'img-responsive', 'class' => 'img-thumbnail')) }}
        </div>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="howwas">How was GoActive developed ?</a></h4>
        <p>Our research team is mostly based at the University of Cambridge  (MRC Epidemiology Unit and Centre for Diet and Activity Research (CEDAR )).  We wanted to speak with the people that matter when we designed this programme aiming to increase teenagers’ physical activity levels. We worked closely with both teenagers and teachers to develop the GoActive programme – identifying new strategies that will be suitable for all students.</p>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="whatis">What is GoActive ?</a></h4>
        <p>
          <ul>
            <li>The GoActive programme includes the whole of Year 9</li>
	          <li>It encourages students to try new physical activities with their friends</li>
            <li>Each week, tutor groups choose two activities from a selection provided</li>
	          <li>Students are supported by Peer Leaders (one boy and one girl from the tutor group, which change weekly), and Mentors (older students within the school)</li>
	          <li>Classes have access to simple, ready-to-use instructions, and a video to support their participation in each activity</li>
	          <li>Students gain points for trying new activities, and these points are entered into an intra-class competition.</li>
          </ul>
        </p>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="howwill">How will we know if GoActive is effective ?</a></h4>
          <p>The GoActive programme has already been tested in four pilot schools, and has shown to be effective in getting students in Year 9 to be more active. This is great, but four schools aren’t enough for us to be sure that this will work for everyone. We need to evaluate the programme in more schools (16 to be precise) to find out if it works for others as well.</p>
          <p>We plan to do this by randomly selecting half of the schools to run the GoActive programme and for half to carry on as normal – this is known as a Cluster Randomised Controlled Trial.  We will measure students in all schools at four time points and then compare the results between the schools.</p>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="whatwill">What will we measure ?</a></h4>
        <p>All Year 9 students in all schools will be asked to complete the following measurements</p>

          <ul>
            <li><b>Questionnaire</b> – We will ask students to fill out a questionnaire about themselves, their family and friends, their feelings, and their activity patterns.</li>
          </ul>

          <div class="text-center" style="padding-bottom:20px;">
            {{ Html::image('img/about/about-question.png', 'MRC Epidemiology Unit Logo', array('class' => 'img-responsive', 'class' => 'img-thumbnail')) }}
          </div>

          <ul>
            <li><b>Physical measures</b> – We will use scales and tapes to measure height, weight, waist circumference.  All of the measurements taken will be kept private.</li>
          </ul>

          <div class="text-center" style="padding-bottom:20px;">
            {{ Html::image('img/about/about-measure.png', 'MRC Epidemiology Unit Logo', array('class' => 'img-responsive', 'class' => 'img-thumbnail')) }}
          </div>

          <ul>
            <li><b>Activity monitor</b> – We will fit students with an activity monitor to wear continuously for seven days. It measures how much we move around during the day, and gives us a really accurate picture of physical activity levels.</li>
          </ul>

          <ul>
            <li><b>Focus groups</b> – During and after the programme we will talk to participants, adolescent mentors and teachers in discussion groups, interviews and via an additional feedback questionnaire to see what they thought about the programme. We will try to find out how and why the programme did or did not work and how this may have varied by the different groups taking part.</li>
          </ul>

      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="when">When are the measurement sessions taking place ?</a></h4>
        <p>GoActive study staff will be visiting schools during the following time periods:</p>
          <ol>
            <li><b>September-December 2016</b></li>
            <li><b>March-April 2017</b></li>
            <li><b>May-July 2017</b></li>
            <li><b>April-June 2018</b></li>
          </ol>
        </p>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="what">What will happen with the results of the study ?</a></h4>
        <p>Results of this study will be reported in scientific journals and presented at conferences.  All information about participants will be reported with names removed and combined across multiple students so no individual can be identified from any results presented. We will test whether any physical activity changes we see could lead to longer and better quality of life if they last into adulthood, and if so what these changes would cost, and what the health care cost savings might be.   This will be fed back to the government and other agencies to consider in future planning. </p>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="how">How will we involve the people that matter ?</a></h4>
        <p>Throughout the project, we will hold workshops with parents, teachers, school governors and representatives from local and national government. At the start of the project, these workshops will focus on ensuring that this research will provide answers to the questions that matter to these groups.</p>
        <p>At the end of the project, we will discuss future use and potential roll-out of this programme, including how best to present the results to the right people.</p>
        <p>The first of these public workshops was held in November 2015 at the Moller Centre in Cambridge.  We had a fantastic group who really helped us bring this project off the paper and literally into the class room !</p>
        <p>The script for our study video was developed with a fantastic group of teenagers from the <a target="_blank" href="http://www.cuh.org.uk/childrens-services/active-our-children-and-young-people%E2%80%99s-board">Addenbrooke’s Active advisory group</a> who also starred in the video.</p>

        <p class="text-center"><a target="_blank" href="http://www.cuh.org.uk/childrens-services/active-our-children-and-young-people%E2%80%99s-board"> {{ Html::image('img/logos/active-logo.png', 'MRC Epidemiology Unit Logo', array('class' => 'img-responsive', 'class' => 'img-thumbnail')) }} </a></p>

        <p>We are extremely grateful for the advice and council from both our adult advisors and teenagers.</p>
        <p>Thank you to all of those who have contributed to the design and implementation of the GoActive Evaluation Study.</p>
      </div>

      <div class="col-md-12 text-left" style="padding-top:10px;">
        <h4><a name="who">Who is organising and funding the study ?</a></h4>
        <p>The study is organised by the MRC Epidemiology Unit and Centre for Diet and Activity Research (CEDAR), University of Cambridge.</p>
        <p>The GoActive Study is funded by the National Institute for Health Research's Public Health Research Programme  (project number 13/90/18)).  NIHR is funded through the Department of Health to improve the health and wealth of the nation through research.</p>
      </div>

    </div>

</div>

@stop
