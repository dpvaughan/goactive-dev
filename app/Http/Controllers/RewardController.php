<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use View;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RewardController extends Controller
{

  public function index(){

    if (Auth::check()){

      # Get authentication information
      $userInfo = Auth::user();

      # Get authenticated users school, form, points and messages from the DB
      $schoolInfo = DB::table('school')->where('id', $userInfo->school)->first();
      $formInfo = DB::table('user_forms')->join('school_forms', 'user_forms.form_id', '=', 'school_forms.id')->where('user_id', '=', $userInfo->id)->first();
      $points = DB::table('points')->select('points')->where('user_id', '=', $userInfo->id)->sum('points');
      $messages = DB::table('inbox')->where('user_id', '=', $userInfo->id)->where('status', 1)->count('message');

      $week = config('settings.week');

      # Work out the points need to get each prize
      $fisbeePoints = config('settings.frisbeePoints') - $points;
      $bottlePoints = config('settings.bottlePoints') - $points;
      $bagPoints = config('settings.bagPoints') - $points;
      $hoodyPoints = config('settings.hoodyPoints') - $points;

      # Push the data to the view
      View::share(['school_name'        => $schoolInfo->school_name,
                   'school_image'       => $schoolInfo->image,
                   'intervention_week'  => $week,
                   'messages'           => $messages]);

      return view('pages.students_rewards', ['name'     => $userInfo->name,
                                             'points'   => $points,
                                             'frisbee'  => $fisbeePoints,
                                             'bottle'   => $bottlePoints,
                                             'bag'      => $bagPoints,
                                             'hoody'    => $hoodyPoints,]);

    }

  }

  public function frisbee(){

    print "In here";

  }

}
