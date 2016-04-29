<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/', function () {
      return View::make('pages.home', ['name' => 'Home Page']);
    });

    Route::get('/about', function () {
      return View::make('pages.about', ['name' => 'About Page']);
    });

    Route::get('/team', function () {
      return View::make('pages.team', ['name' => 'Meet The Team']);
    });

    Route::get('/resources', function () {
      return View::make('pages.resources', ['name' => 'Resources']);
    });

    Route::get('/students', function () {
      return View::make('pages.students', ['name' => 'Students']);
    });

    Route::get('/contact', function () {
      return View::make('pages.contact', ['name' => 'Contact']);
    });

    /*
      Protected routes - The following routes require authentication
    */

    Route::get('/inbox', ['middleware' => 'auth', 'uses' => 'InboxController@index']);
    Route::get('/inbox/{id?}', array('middleware' => 'auth', function($email_id){

        $userInfo = Auth::user();
        $email = App\Inbox::where('id', $email_id)->where('user_id', $userInfo->id)->get();
        return Response::json($email);

    }));

    Route::get('/student', ['middleware' => 'auth', 'uses' => 'UserController@showProfile']);
    Route::get('/school', [ 'middleware' => 'auth', 'uses' => 'SchoolController@showSchool']);
    Route::get('/timeline', ['middleware' => 'auth', 'uses' => 'StudentsTimeline@showTimeline']);
    Route::get('/points', ['middleware' => 'auth', 'uses' => 'Points@index']);
    Route::get('/rewards', ['middleware' => 'auth', 'uses' => 'RewardController@index'])->where('name', '[A-Za-z]+');
    Route::get('/rewards/frisbee', ['middleware' => 'auth', 'uses' => 'RewardController@frisbee'])->where('name', '[A-Za-z]+');
    Route::post('/points/addpoints', ['middleware' => 'auth', 'uses' => 'Points@addPoints']);

});
