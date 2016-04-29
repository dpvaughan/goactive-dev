@extends('layouts.authenticated_layout', array('name'=> $name))
@section('content')

<div class="row">
  <div class="col-md-12 text-center"><h3>GoActive For Students</h3></div>
</div>

<div>
  <div>
    <p class="text-center">Login to add points to your account and claim rewards.</p>
  </div>
  <div>
    <p class="text-center"><a class="btn-lg btn-success" href="{{ url('/login') }}" role="button">Log In</a></p>
  </div>
</div>

@stop
