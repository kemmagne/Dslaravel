<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/weeks', 'WeekController');
Route::group(['prefix'=>'weeks'], function(){
    Route::apiResource('{week}/days', 'DayController');
});



Route::apiResource('/parent_tutors', 'ParentTutorController');
Route::group(['prefix'=>'parent_tutors'], function(){
    Route::apiResource('{parent_tutor}/students', 'StudentController');
});


Route::apiResource('/sessions', 'SessionController');
Route::group(['prefix'=>'sessions'], function(){
    Route::apiResource('{session}/classes', 'ClassetController');
});


Route::apiResource('/days', 'DayController');
Route::group(['prefix'=>'days'], function(){
    Route::apiResource('{day}/periods', 'PeriodController');
});


