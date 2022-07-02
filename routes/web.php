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
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\createJobs@index');

Route::get('/home', function () {
    return view('index');
});
Route::get('/AdminPannelview', function () {
    return view('AdminPannel');
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
Route::get(('/createcv'), function () {
    return view('CreateCV');
});

Route::get(('menu'), function () {
    return view('Layouts.layout');
});

//////////////
Route::post('/register', 'App\Http\Controllers\RegisterUser@store');
Route::post('/login', 'App\Http\Controllers\RegisterUser@LoginUser');
Route::post('/saveProfile', 'App\Http\Controllers\RegisterUser@createProfile');
Route::get('/viewProfile', 'App\Http\Controllers\RegisterUser@ViewProfile');
Route::post('/createcv', 'App\Http\Controllers\cvmaker@createCV1');
Route::get('/editprofile', 'App\Http\Controllers\RegisterUser@updateProfile');

//ApplyJob
Route::post('/apply', 'App\Http\Controllers\apply@store');

// Creating Jobs
Route::post('/CreateJob', 'App\Http\Controllers\createJobs@store');
//Show all jobs data on job page
Route::get('/allJobs', 'App\Http\Controllers\createJobs@AllJobs');
//show job data on index page
Route::get('/ShowJobData', 'App\Http\Controllers\createJobs@ShowJobData');

//Check discription of jobs on allJobPage
Route::get('/jobdescription/{id}', 'App\Http\Controllers\createJobs@jobDescription');

//Search by category on index page
Route::get('/SoftwareDev/allJobs/{category}', 'App\Http\Controllers\homePage@CategoryJobs');

//Job Details 
Route::get('/JobsDetails', 'App\Http\Controllers\specificUserJobData@JobsDetails');
Route::get('/appliedJobDescription/{postId}', 'App\Http\Controllers\specificUserJobData@Descriptoin');
Route::get('/deleteAppliedJob/{applyId}', 'App\Http\Controllers\specificUserJobData@DeleteJobApply');

Route::get('/postJobDescription/{postId}', 'App\Http\Controllers\specificUserJobData@postJobDescription');
Route::get('/postJobdelete/{postId}', 'App\Http\Controllers\specificUserJobData@DeleteJobPost');

Route::get('/offerJobDescription/{applyId}', 'App\Http\Controllers\specificUserJobData@offerJobDescription');
Route::get('/deleteoffer/{applyId}', 'App\Http\Controllers\specificUserJobData@DeleteJoboffers');

///Search
Route::POST('/Search', 'App\Http\Controllers\Searching@searchCandidate');
Route::get('/ViewProfile/{userId}', 'App\Http\Controllers\Searching@ViewProfile');
//DOWNLOAD CV
Route::get('/downloadImage/{userId}', 'App\Http\Controllers\specificUserJobData@downloadcv');

//LOGOUT
Route::get('/logout', 'App\Http\Controllers\userControl@logout');


//AdminPannel Header and footer data
Route::POST('/saveAdminInfo', 'App\Http\Controllers\adminController@saveDetails');
Route::POST('/updateAdminDetails', 'App\Http\Controllers\adminController@updateDetails');
