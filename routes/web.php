<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('finalExam/guide');
});
Route::get('/firstStep', function () {
    return view('finalExam/firstStep');
});
Route::get('/secondStep', function () {
    return view('finalExam/secondStep');
});
Route::get('/thirdStep', function () {
    return view('finalExam/thirdStep');
});
Route::get('/fourthStep', function () {
    return view('finalExam/fourthStep');
});
Route::post('/api/', 'CloudController@binarization');
Route::post("/api/download", "CloudController@download");