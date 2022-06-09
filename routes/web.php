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
Route::get(('login'), function () {
    return view('login');
});
Route::get(('createprofile'), function () {
    return view('createprofile');
});
Route::get(('userprofile'), function () {
    return view('userprofile');
});

Route::get(('menu'), function () {
    return view('Layouts.layout');
});
