<?php

namespace App\Http\Controllers;

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

        // $off=DB::table('user_profiles')->join('applyjobs','user_profiles.userId','=','applyjobs.userId')
        // ->join('postjobs','postjobs.postId','=','applyjobs.postId')->where('postjobs.userId',$id)
        // ->select('user_profiles.fName','applyjobs.applyId','applyjobs.postId','user_profiles.lName','postjobs.JobDescription','user_profiles.userId','user_profiles.emailId','postjobs.Title')->get();
        


        $candidates = DB::table('user_profiles')->join('userinfo','userinfo.userId','=','user_profiles.userId')->where('user_profiles.fName',$searchData)->get();

        return view('CandidatePage',['candidates'=>$candidates]);
        //$candidates = user_profiles::where('user_profile.fName',$searchData)->get();
        //First Complete the user_Profile Page then I will do any other thing
    }
}
