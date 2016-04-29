@extends('layouts.default', array('name'=> $name))
@section('content')

<style>

.contact-main .item .item-inner {
  margin: 30px;
  padding: 30px 10px;
  background: #f5f5f5;
  min-height: 300px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}

.contact-main .item .icon .fa, .contact-main .item .icon .pe-icon {
    color: #1DA3C8;
    font-size: 48px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}

.contact-main .item .icon {
    position: relative;
    width: 90px;
    height: 90px;
    border: 2px solid #1DA3C8;
    background: #fff;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    display: table;
    margin: 0 auto;
    -webkit-transition: -webkit-transform ease-out 0.2s, background 0.3s;
    -moz-transition: -moz-transform ease-out 0.2s, background 0.3s;
    transition: transform ease-out 0.2s, background 0.3s;
    margin-bottom: 30px;
}

.delayp1 {
    animation-delay: .1s;
    -moz-animation-delay: .1s;
    -webkit-animation-delay: .1s;
    -o-animation-delay: .1s;
    transition-delay: .1s;
    -webkit-transition-delay: .1s;
    -moz-transition-delay: .1s;
    -o-transition-delay: .1s;
}
.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

a.btn-cta-primary, .btn-cta-primary {
    background: #1DA3C8;
    border: 2px solid #1DA3C8;
    color: #fff;
    text-transform: uppercase;
}

span.glyphicon-envelope {
  padding-top:19px;
  font-size: 3em;
  color: #1DA3C8;
}

span.glyphicon-phone-alt {
  padding-top:15px;
  font-size: 3em;
  color: #1DA3C8;
}

</style>

<div class="row">

  <section id="contact-main" class="contact-main section">
<div class="container text-center">
<h2 class="title">Get in touch</h2>
<p class="intro">We'd love to hear from you.</p>

<div class="row">
    <div class="item col-md-4 col-sm-12 col-xs-12">
        <div class="item-inner">
            <div class="icon">
                <span class="glyphicon glyphicon-envelope"></span>
            </div>
            <div class="details">
                <h4>Email &amp; Twitter:</h4>
                <p><a href="#">goactive@mrc-epid.cam.ac.uk </a></p>
                <p><a href="https://twitter.com/GoActiveCamb" target="_blank">@GoActiveCamb</a></p>
            </div><!--details-->
        </div><!--//item-inner-->
    </div><!--//item-->
    <div class="item col-md-4 col-sm-12 col-xs-12">
        <div class="item-inner">
            <div class="icon">
                <span class="glyphicon glyphicon-phone-alt"></span>
            </div>
            <div class="details">
                <h4>Call us on Freephone:</h4>
                <p class="phone">0800 917 3319</p>
                <p class="day">Mon-Sat 9am-5pm (GMT)</p>
            </div><!--details-->
        </div><!--//item-inner-->
    </div><!--//item-->
    <div class="item col-md-4 col-sm-12 col-xs-12 last">
            <div class="item-inner">
            <div class="icon">
                <!--<i class="fa fa-map-marker"></i>-->
                <span class="pe-icon pe-7s-map-2"></span>
            </div>
            <div class="details">
                <h4>Write to us :</h4>
                <p class="address text-left">GoActive Study<br>
                FREEPOST RRUL-TTXY-BRUY<br>
                MRC Epidemiology Unit<br>
                University of Cambridge School of Clinical Medicine<br>
                Box 285 Institute of Metabolic Science<br>
                Cambridge Biomedical Campus<br>
                Cambridge<br>
                CB2 0QQ</p>
            </div><!--details-->
        </div><!--//item-inner-->
    </div><!--//item-->
</div><!--//row-->
</div><!--//container-->
</section><!--//contact-->

<section class="container contact-form-section">
   <h3 class="title text-center">Contact GoActive</h3>
   <p class="intro text-center">Please use the contact form below to send GoActive a message.</p>
   <p class="intro text-center"><a href="https://twitter.com/GoActiveCamb" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @GoActiveCamb</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>

   <div class="row text-center">
       <div class="contact-form col-md-6 col-sm-12 col-xs-12 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
           <form class="form" id="contact-form" method="post" action="#">
               <div class="form-group name">
                   <label class="sr-only" for="name">Your name</label>
                   <input id="name" name="name" type="text" class="form-control" placeholder="Your name">
               </div><!--//form-group-->
               <div class="form-group email">
                   <label class="sr-only" for="email">Your email</label>
                   <input id="email" type="email" class="form-control" placeholder="Your email">
               </div><!--//form-group-->
               <div class="form-group message">
                   <label class="sr-only" for="message">Your message</label>
                   <textarea id="message" class="form-control" rows="8" placeholder="Your message"></textarea>
               </div><!--//form-group-->
               <button type="submit" class="btn btn-block btn-cta-primary">Send Message To GoActive</button>
           </form><!--//form-->
       </div><!--//contact-form-->
   </div><!--//row-->
</section>

</div>
<br>

@stop
