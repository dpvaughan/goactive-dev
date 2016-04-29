<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use View;

use App\Classes\GoactiveFunctions;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolController extends Controller{

  public function showSchool(){

    if (Auth::check()){

      # Get authentication information
      $userInfo = Auth::user();

      # Define some variables to pass to the views
      $formsInSchool = '';
      $pointsPerForm = '';
      $schoolUsers = '';
      $schoolActivitiesName = '';
      $schoolActivitiesCount = '';

      # Get authenticated users school, their form and all forms in the school
      $schoolInfo = DB::table('school')->where('id', $userInfo->school)->first();
      $formInfo = DB::table('user_forms')->join('school_forms', 'user_forms.form_id', '=', 'school_forms.id')->where('user_id', '=', $userInfo->id)->first();
      $schoolFormInfo = DB::table('school_forms')->where('form_school', $schoolInfo->id)->get();
      $messages = DB::table('inbox')->where('user_id', '=', $userInfo->id)->where('status', 1)->count('message');

      /*
        Get all the forms in the school and work out the total number of points per school form.
        This is needed to make the graphs work.
      */
      foreach($schoolFormInfo as $data){

        $formsInSchool .= "'" . "Form " . ucfirst($data->form_name) . "'" . ',';

        # Get all the users in the form
        $informInfo = DB::table('user_forms')->where('form_id', $data->id)->get();

        $users = array();

        foreach($informInfo as $var){
          $users[] = $var->user_id;
        }

        # Get the total points of all the users in the form
        $points = DB::table('points')->select('points')->whereIn('user_id', $users)->sum('points');
        $pointsPerForm .= $points . ',';

      }

      /*
        Get all the users in a school from the users logged in school.
        This is needed to make the total activities per school graph work
      */
      $schoolData = DB::table('users')->where('school', $userInfo->school)->get();

      foreach($schoolData as $var){
        $schoolUsers .= $var->id . ',';
      }

      $schoolUsers = rtrim($schoolUsers, ',');

      $activitiesSchoolCount = DB::select("select activity as activity,
                                                  count(activity) as activitycount
                                           from points
                                           where user_id in($schoolUsers)
                                           group by activity
                                           order by count(activity) desc");

      foreach($activitiesSchoolCount as $var){
        $schoolActivitiesName .= "'" . ucfirst($var->activity) . "'" . ',';
        $schoolActivitiesCount .= $var->activitycount . ',';
      }

      # Construct the page title
      $schoolHeading = $schoolInfo->school_name . " Form " . $formInfo->form_name;

      # Get the start date of the study for the school
      $startDate = $schoolInfo->startdate;
      $endDate = date("Y-m-d");

      # Work out the week of the study form the start date and todays date
      $goactiveFunctions = new GoactiveFunctions();
      $week = $goactiveFunctions->GetWeek($startDate, $endDate);

      $week = config('settings.week');

      # Push the data to the view
      View::share(['school_name'        => $schoolInfo->school_name,
                   'school_image'       => $schoolInfo->image,
                   'intervention_week'  => $week,
                   'messages'           => $messages]);

      return view('pages.students_school', ['name'          => $userInfo->name,
                                            'schoolInfo'    => $schoolHeading,
                                            'formsInSchool' => $formsInSchool,
                                            'pointsPerForm' => $pointsPerForm,
                                            'schoolActivitiesName'  => $schoolActivitiesName,
                                            'schoolActivitiesCount' => $schoolActivitiesCount]);

    }

  }

}
