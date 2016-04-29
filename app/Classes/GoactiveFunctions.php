<?php

namespace App\Classes;

use DB;
use Carbon\Carbon;

class GoactiveFunctions {

  public function GetWeek($strtDate, $endDate){

    $startDateWeekCnt = round(floor( date('d',strtotime($strtDate)) / 7)) ;
    // echo $startDateWeekCnt ."\n";

    $endDateWeekCnt = round(ceil( date('d',strtotime($endDate)) / 7)) ;
    //echo $endDateWeekCnt. "\n";

    $datediff = strtotime(date('Y-m',strtotime($endDate))."-01") - strtotime(date('Y-m',strtotime($strtDate))."-01");
    $totalnoOfWeek = round(floor($datediff/(60*60*24)) / 7) + $endDateWeekCnt - $startDateWeekCnt;

    return $totalnoOfWeek;

  }

  public function AddPoints($points, $activity, $week, $userId){

    DB::table('points')->insert(['points'     => $points,
                                 'activity'   => $activity,
                                 'user_id'    => $userId,
                                 'week'       => $week,
                                 'created_at' => Carbon::now()->toDateTimeString()]);

    DB::table('events')->insert(['activity'   => $activity,
                                 'event_type' => 1,
                                 'user_id'    => $userId,
                                 'text'       => "$points Points added for $activity",
                                 'week'       => $week,
                                 'created_at' => Carbon::now()->toDateTimeString()]);

  }

}
