<?php

use Illuminate\Http\Request;

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

Route::resource('objectives', 'ObjectiveController')->only(['index', 'show']);
Route::resource('careers', 'CareerController')->only(['index', 'show']);
Route::resource('subjects', 'SubjectController')->only(['index']);
Route::get('/subjectsByYear/{year}', 'SubjectController@indexByYear');
Route::resource('events', 'EventController')->only(['index', 'show']);
Route::resource('notices', 'NoticeController')->only(['index', 'show']);
Route::resource('offers', 'OfferController')->only(['index', 'show']);
Route::resource('course', 'CourseController')->only(['index']);

