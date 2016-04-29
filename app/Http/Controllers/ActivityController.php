<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{

  public function index(){

    $activities = Activity::all();

    return view('admin.pages.activity_index', compact('activities'));

  }

  public function show($id){

    $activities = Activity::find($id);

    return $activities;

  }

  public function add(){

    #return view('admin.pages.activity_add');

  }

}
