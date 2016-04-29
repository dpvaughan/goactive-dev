<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use View;

use App\Classes\GoactiveFunctions;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile(){

      # Check that there is an authenticated user
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

        /*
        Hard code in the week for testing - Change in the seetings file
        */
        $week = config('settings.week');

        # Work out the points need to get each prize
        $fisbeePoints = config('settings.frisbeePoints') - $points;
        $bottlePoints = config('settings.bottlePoints') - $points;
        $bagPoints = config('settings.bagPoints') - $points;
        $hoodyPoints = config('settings.hoodyPoints') - $points;

        # Get the weekly data
        $weeksDisplay = '';
        $ruunigSumDisplay = '';
        $runningSum = 0;

        for($i = 1; $i <= 12; $i++){

          $data = DB::table('points')->select('points')->where('user_id', $userInfo->id)->where('week', "$i")->sum('points');

          $weeksDisplay .= $data . ",";

          if ($i > $week){
            $runningSum = 0;
          } else {
            if ($data == 0){
              $runningSum = $runningSum;
            } else {
              $runningSum += $data;
            }
          }

          $ruunigSumDisplay .= $runningSum . ",";

        }

        # Get the users points by activity
        $res = DB::select("select activity as activity, sum(points) as points from points where user_id = $userInfo->id group by activity order by sum(points)");

        $activityList = '';
        $activityPoints = '';

        foreach($res as $data){
          $activityList .= "'" . ucfirst($data->activity) . "'" . ',';
          $activityPoints .= $data->points . ',';
        }

        # Push the data to the view
        View::share(['school_name'        => $schoolInfo->school_name,
                     'school_image'       => $schoolInfo->image,
                     'intervention_week'  => $week,
                     'messages'           => $messages]);

        return view('pages.students_profile', ['name'           => $userInfo->name,
                                               'schoolName'     => $schoolInfo->school_name,
                                               'formName'       => $formInfo->form_name,
                                               'points'         => $points,
                                               'frisbee'        => $fisbeePoints,
                                               'bottle'         => $bottlePoints,
                                               'bag'            => $bagPoints,
                                               'hoody'          => $hoodyPoints,
                                               'weeks'          => rtrim($weeksDisplay, ","),
                                               'cumulative'     => rtrim($ruunigSumDisplay, ","),
                                               'activityList'   => rtrim($activityList, ","),
                                               'activityPoints' => rtrim($activityPoints, ",")]);

      }

  }

}
