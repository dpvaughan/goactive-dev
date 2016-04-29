<div style="background-color:white; border-bottom:solid 1px #e7e7e7; margin-bottom:10px;">
  <div style="padding:5px;" role="navigation">
    <ul class="nav nav-pills nav-justified">
      <li role="presentation" {{{ (Request::is('student') ? 'class=active' : '') }}}><a class="front" href="/student"><b>Your Points</b></a></li>
      <li role="presentation" {{{ (Request::is('timeline') ? 'class=active' : '') }}}><a class="front" href="/timeline"><b>Your Timeline</b></a></li>
      <li role="presentation" {{{ (Request::is('school') ? 'class=active' : '') }}}><a class="front" href="/school"><b>Your School</b></a></li>
      <li role="presentation" {{{ (Request::is('points') ? 'class=active' : '') }}}><a class="front" href="/points"><b>Add Points</b></a></li>
      <li role="presentation" {{{ (Request::is('rewards') ? 'class=active' : '') }}}><a class="front" href="/rewards"><b>Rewards</b></a></li>

      @if ($messages > 0)
        <li role="presentation" class=""><a class="front" href="/inbox"><b>Inbox <span class="badge">{{ $messages }}</span></b></a></li>
      @else
        <li role="presentation" {{{ (Request::is('inbox') ? 'class=active' : '') }}}><a class="front" href="/inbox"><b>Inbox</b></a></li>
      @endif

      <li role="presentation"><a class="front" href="/logout"><b>Sign Out</b></a></li>
    </ul>
  </div>
</div>
