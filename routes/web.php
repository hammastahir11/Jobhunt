<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/allJobs', function () {
    return view('AllJobPage');
});
Route::get('/JobsDetails', function () {
    return view('AppliedandPostJobList');
});
Route::get('/chat', function () {
    return view('Chat');
});
Route::get('/CreateJob', function () {
    return view('CreateJob');
});

Route::get('/jobapply', function () {
    return view('JobApply');
});
Route::get('/userprofile', function () {
    return view('userprofile');
});
Route::get(('login'), function () {
    return view('login');
});
Route::get(('createprofile'), function () {
    return view('createprofile');
});


Route::get(('menu'), function () {
    return view('Layouts.layout');
});
