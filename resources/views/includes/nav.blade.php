<div style="background-color:white; border-bottom:solid 1px #e7e7e7; margin-bottom:10px;">
  <div style="padding:5px;" role="navigation">
    <ul class="nav nav-pills nav-justified">
      <li role="presentation" {{{ (Request::is('/') ? 'class=active' : '') }}}><a class="front" href="/"><b>Home</b></a></li>
      <li role="presentation" {{{ (Request::is('about') ? 'class=active' : '') }}}><a class="front" href="/about"><b>About GoActive</b></a></li>
      <li role="presentation" {{{ (Request::is('team') ? 'class=active' : '') }}}><a class="front" href="/team"><b>The Team</b></a></li>
      <li role="presentation" {{{ (Request::is('contact') ? 'class=active' : '') }}}><a class="front" href="/contact"><b>Contact Us</b></a></li>

      @if (Auth::check())
        <li role="presentation" {{{ (Request::is('student') ? 'class=active' : '') }}}><a class="front" href="/student"><b>Your Account</b></a></li>
      @else
        <li role="presentation" {{{ (Request::is('login') ? 'class=active' : '') }}}><a class="front" href="/login"><b>Sign In</b></a></li>
      @endif

    </ul>
  </div>
</div>
