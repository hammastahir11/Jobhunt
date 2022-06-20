<?php

namespace App\Http\Controllers;
App\Http\Controllers\RegisterUser;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\postjob;
use App\Models\applyjob;
use App\Models\user_profile;
use Request;
use Session;

//In this we will try to create searching for jobs and candidates
class Searching extends Controller
{
    public function searchCandidate(){
        $searchData=Request::input('SearchField');
        $candidates = user_profiles::where('user_profile.fName',$searchData)->get();
        //First Complete the user_Profile Page then I will do any other thing
    }
}
