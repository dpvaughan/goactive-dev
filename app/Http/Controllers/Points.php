<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Activity;
use Validator;
use Request;
use Carbon\Carbon;
use View;

use App\Classes\GoactiveFunctions;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;

class Points extends Controller{

  public function index(){

    if (Auth::check()){

      # Get authentication information
      $userInfo = Auth::user();

      # Get authenticated users school, form, points and messages from the DB
      $schoolInfo = DB::table('school')->where('id', $userInfo->school)->first();
      $points = DB::table('points')->select('points')->where('user_id', '=', $userInfo->id)->sum('points');
      $messages = DB::table('inbox')->where('user_id', '=', $userInfo->id)->where('status', 1)->count('message');

      $startDate = $schoolInfo->startdate;
      $endDate = date("Y-m-d");

      $goactiveFunctions = new GoactiveFunctions();
      $week = $goactiveFunctions->GetWeek($startDate, $endDate);

      $week = config('settings.week');

      # Push the data to the view
      View::share(['school_name'        => $schoolInfo->school_name,
                   'school_image'       => $schoolInfo->image,
                   'intervention_week'  => $week,
                   'messages'           => $messages]);

      $activityData = Activity::all();

      return view('pages.students_points', ['name'        => $userInfo->name,
                                            'points'      => $points,
                                            'activities'  => $activityData]);

    }

  }

  public function addPoints(){

    if (Auth::check()){

      # Get authentication information
      $userData = Auth::user();

      # Get authenticated users school
      $school = DB::table('school')->where('id', $userData->school)->first();

      $startDate = $school->startdate;
      $endDate = date("Y-m-d");

      $goactiveFunctions = new GoactiveFunctions();
      $week = $goactiveFunctions->GetWeek($startDate, $endDate);

      $week = config('settings.week');

      View::share(['school_name' => $school->school_name, 'school_image' => $school->image, 'intervention_week' => $week]);

      $football = Request::input('football');
      $volleyball = Request::input('volleyball');
      $boxing = Request::input('boxing');
      $softball = Request::input('softball');
      $athletics = Request::input('athletics');
      $walking = Request::input('walking');
      $yoga = Request::input('yoga');
      $pilates = Request::input('pilates');
      $tennis = Request::input('tennis');
      $rounders = Request::input('rounders');
      $american = Request::input('american');
      $kabaddi = Request::input('kabaddi');
      $zumba = Request::input('zumba');
      $skipping = Request::input('skipping');
      $kickball = Request::input('kickball');
      $hula = Request::input('hula');
      $frisbee = Request::input('frisbee');
      $dodgeball = Request::input('dodgeball');
      $juggling = Request::input('juggling');
      $tug = Request::input('tug');

      DB::beginTransaction();

      try {

        if ($football != "Please Select" && $football < 6) {
            $goactiveFunctions->AddPoints($football, 'football', $week, $userData->id);
        }

        if ($volleyball != "Please Select" && $volleyball < 6){
          $goactiveFunctions->AddPoints($volleyball, 'volleyball', $week, $userData->id);
        }

        if ($boxing != "Please Select" && $boxing < 6){
          $goactiveFunctions->AddPoints($boxing, 'boxing', $week, $userData->id);
        }

        if ($softball != "Please Select" && $softball < 6){
          $goactiveFunctions->AddPoints($softball, 'softball', $week, $userData->id);
        }

        if ($athletics != "Please Select" && $athletics < 6){
          $goactiveFunctions->AddPoints($athletics, 'athletics', $week, $userData->id);
        }

        if ($walking != "Please Select" && $walking < 6){
          $goactiveFunctions->AddPoints($walking, 'walking', $week, $userData->id);
        }

        if ($yoga != "Please Select" && $yoga < 6){
          $goactiveFunctions->AddPoints($yoga, 'yoga', $week, $userData->id);
        }

        if ($pilates != "Please Select" && $pilates < 6){
          $goactiveFunctions->AddPoints($pilates, 'pilates', $week, $userData->id);
        }

        if ($tennis != "Please Select" && $tennis < 6){
          $goactiveFunctions->AddPoints($tennis, 'tennis', $week, $userData->id);
        }

        if ($rounders != "Please Select" && $rounders < 6){
          $goactiveFunctions->AddPoints($rounders, 'rounders', $week, $userData->id);
        }

        if ($american != "Please Select" && $american < 6){
          $goactiveFunctions->AddPoints($american, 'american', $week, $userData->id);
        }

        if ($kabaddi != "Please Select" && $kabaddi < 6){
          $goactiveFunctions->AddPoints($kabaddi, 'kabaddi', $week, $userData->id);
        }

        if ($zumba != "Please Select" && $zumba < 6){
          $goactiveFunctions->AddPoints($zumba, 'zumba', $week, $userData->id);
        }

        if ($skipping != "Please Select" && $skipping < 6){
          $goactiveFunctions->AddPoints($skipping, 'skipping', $week, $userData->id);
        }

        if ($kickball != "Please Select" && $kickball < 6){
          $goactiveFunctions->AddPoints($kickball, 'kickball', $week, $userData->id);
        }

        if ($hula != "Please Select" && $hula < 6){
          $goactiveFunctions->AddPoints($hula, 'hula', $week, $userData->id);
        }

        if ($frisbee != "Please Select" && $frisbee < 6){
          $goactiveFunctions->AddPoints($frisbee, 'frisbee', $week, $userData->id);
        }

        if ($dodgeball != "Please Select" && $dodgeball < 6){
          $goactiveFunctions->AddPoints($dodgeball, 'dodgeball', $week, $userData->id);
        }

        if ($juggling != "Please Select" && $juggling < 6){
          $goactiveFunctions->AddPoints($juggling, 'juggling', $week, $userData->id);
        }

        if ($tug != "Please Select" && $tug < 6){
          $goactiveFunctions->AddPoints($tug, 'tug', $week, $userData->id);
        }

      } catch(ValidationException $e){

          DB::rollback();
          return Redirect::to('/points')->withErrors( $e->getErrors() )->withInput();

      }

      DB::commit();

      $pointsTotal = $football + $volleyball + $boxing + $softball + $athletics + $walking + $yoga + $pilates + $tennis + $rounders + $american + $kabaddi + $zumba + $skipping + $kickball + $hula + $frisbee
      + $dodgeball + $juggling + $tug;

      return Redirect::to('/student')->withFlashMessage("$pointsTotal Points Have Been Added To Your Account");

    }

  }

}
