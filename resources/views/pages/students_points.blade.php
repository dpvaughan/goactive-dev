@extends('layouts.authenticated_layout')

@section('content')

<div class="row">
  <div class="col-md-12 text-center"><h3 style="padding-top:0px;">Add Points To Your Account</h3></div>
</div>

<div class="row" style="margin-top:5px;">
  <div class="col-md-12 text-center">
    <p>Each time you take part in a GoActive activity, you should add points to your GoActive account. The more points you add, the more prizes you can win!</p>
    <p>To add a point, scroll down to the activity you took part in. Click on the ‘Please Select’ button and use the drop-down menu to select how many points you’d like to add. For example, if you played football twice this week, select ‘2’ from the menu. Once you’ve selected all the points for this week,  click ‘Add points to account’ at the end of the page.</p>
  </div>
</div>

<div class="col-md-12 text-center">
  <div class="row" style="margin:10px;">
    <h3 class="points-added">You have a total of {{ $points }} points</h3>
  </div>
</div>

<div class="row" style="padding-top:10px;">

  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  {{ Form::open(array('action' => 'Points@addPoints')) }}

      @foreach ($activities as $item)

        <div class="col-sm-3 text-center">
          <div class="thumbnail">

            {{ Html::image("img/activities/$item->image" . ".png", "$item->image_alternative_text" , array('class' => 'img-responsive points-img')) }}

            <div class="caption">
              <h3 style="margin:0px;">{{{ $item->activity }}}</h3>
              <h3 class="points-added">Points To Add</h3>
              <select name={{ $item->form_name }} class="form-control">
                <option selected="selected">Please Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>

      @endforeach

      <div class="col-sm-4 text-center"></div>
      <div class="col-sm-4 text-center">
        <button type="submit" class="btn btn-success btn-block"><b>Add Points To Account</b></button>
      </div>
      <div class="col-sm-4 text-center"></div>

  {{ Form::close() }}

</div>

@stop
