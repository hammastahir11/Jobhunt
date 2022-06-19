<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\createJobs;
use App\Http\Controllers\userControl;
use App\Http\Controllers\homePage;
use App\Http\Controllers\specificUserJobData;



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
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','App\Http\Controllers\createJobs@index');

Route::get('/home', function () {
    return view('index');
});
Route::get('/candidates', function () {
    return view('CandidatePage');
});
// Route::get('/allJobs', function () {
//     return view('AllJobPage');
// });
// Route::get('/JobsDetails', function () {
//     return view('AppliedandPostJobList');
// });
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
Route::get(('/editprofile'), function () {
    return view('createprofile');
});


Route::get(('menu'), function () {
    return view('Layouts.layout');
});







//////////////
Route::post('/register','App\Http\Controllers\RegisterUser@store');
Route::post('/login','App\Http\Controllers\RegisterUser@LoginUser');
Route::post('/editprofile','App\Http\Controllers\RegisterUser@createProfile');

//ApplyJob
Route::post('/apply','App\Http\Controllers\apply@store');




//////////////////////////////////////////
Route::post('/CreateJob','App\Http\Controllers\createJobs@store');

Route::get('/allJobs','App\Http\Controllers\createJobs@AllJobs');
Route::get('/ShowJobData','App\Http\Controllers\createJobs@ShowJobData');


//Check discription of jobs on allJobPage
Route::get('/jobdescription/{id}','App\Http\Controllers\createJobs@jobDescription');

//Search by category on index page
Route::get('/SoftwareDev/allJobs/{category}','App\Http\Controllers\homePage@CategoryJobs');


//Search by category on index page
Route::get('/JobsDetails','App\Http\Controllers\specificUserJobData@JobsDetails');
Route::get('/appliedJobDescription/{postId}','App\Http\Controllers\specificUserJobData@Descriptoin');
Route::get('/postJobDescription/{postId}','App\Http\Controllers\specificUserJobData@postJobDescription');



//LOGOUT
Route::get('/logout','App\Http\Controllers\userControl@logout');


