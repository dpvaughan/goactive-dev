<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use View;

use App\Classes\GoactiveFunctions;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InboxController extends Controller
{

  public function index(){

    # Check that there is an authenticated user
    if (Auth::check()){

      # Get authentication information
      $userInfo = Auth::user();

      # Get authenticated users school, form, points and messages from the DB
      $schoolInfo = DB::table('school')->where('id', $userInfo->school)->first();
      $points = DB::table('points')->select('points')->where('user_id', '=', $userInfo->id)->sum('points');
      $messagesUnread = DB::table('inbox')->where('user_id', '=', $userInfo->id)->where('status', 1)->count('message');
      $mesagesAll = DB::table('inbox')->where('user_id', '=', $userInfo->id)->get();

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

      # Push the data to the view
      View::share(['school_name'        => $schoolInfo->school_name,
                   'school_image'       => $schoolInfo->image,
                   'intervention_week'  => $week,
                   'messages'           => $messagesUnread]);

      return view('pages.students_inbox', ['points'      => $points,
                                           'messages'    => $messagesUnread,
                                           'messagesAll' => $mesagesAll]);

    }

  }

}
