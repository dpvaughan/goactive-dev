<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use View;

use App\Classes\GoactiveFunctions;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentsTimeline extends Controller{

  public function showTimeline(){

    if (Auth::check()){

      # Get authentication information
      $userInfo = Auth::user();

      # Get authenticated users school, form, points and messages from the DB
      $schoolInfo = DB::table('school')->where('id', $userInfo->school)->first();
      $formInfo = DB::table('user_forms')->join('school_forms', 'user_forms.form_id', '=', 'school_forms.id')->where('user_id', '=', $userInfo->id)->first();
      $points = DB::table('points')->select('points')->where('user_id', '=', $userInfo->id)->sum('points');
      $messages = DB::table('inbox')->where('user_id', '=', $userInfo->id)->where('status', 1)->count('message');

      # Get the start date of the study for the school
      $startDate = $schoolInfo->startdate;
      $endDate = date("Y-m-d");

      # Work out the week of the study form the start date and todays date
      $goactiveFunctions = new GoactiveFunctions();
      $week = $goactiveFunctions->GetWeek($startDate, $endDate);

      $week = config('settings.week');

      View::share(['school_name'        => $schoolInfo->school_name,
                   'school_image'       => $schoolInfo->image,
                   'intervention_week'  => $week,
                   'messages'           => $messages]);

      $timelineWeekOne = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 1)->get();
      $timelineWeekTwo = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 2)->get();
      $timelineWeekThree = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 3)->get();
      $timelineWeekFour = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 4)->get();
      $timelineWeekFive = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 5)->get();
      $timelineWeekSix = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 6)->get();
      $timelineWeekSeven = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 7)->get();
      $timelineWeekEight = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 8)->get();
      $timelineWeekNine = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 9)->get();
      $timelineWeekTen = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 10)->get();
      $timelineWeekEleven = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 11)->get();
      $timelineWeekTwelve = DB::table('events')->where('user_id', '=', $userInfo->id)->where('week', 12)->get();

      return view('pages.students_timeline', ['name'                  => $userInfo->name,
                                              'points'                => $points,
                                              'timeline_week_one'     => $timelineWeekOne,
                                              'timeline_week_two'     => $timelineWeekTwo,
                                              'timeline_week_three'   => $timelineWeekThree,
                                              'timeline_week_four'    => $timelineWeekFour,
                                              'timeline_week_five'    => $timelineWeekFive,
                                              'timeline_week_six'     => $timelineWeekSix,
                                              'timeline_week_seven'   => $timelineWeekSeven,
                                              'timeline_week_eight'   => $timelineWeekEight,
                                              'timeline_week_nine'    => $timelineWeekNine,
                                              'timeline_week_ten'     => $timelineWeekTen,
                                              'timeline_week_eleven'  => $timelineWeekEleven,
                                              'timeline_week_twelve'  => $timelineWeekTwelve]);

    }

  }

}
