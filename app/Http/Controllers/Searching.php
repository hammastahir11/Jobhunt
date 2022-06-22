<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

//In this we will try to create searching for jobs and candidates
class Searching extends Controller
{
    public function searchCandidate()
    {
        $searchData = Request::input('SearchField');

        // $off=DB::table('user_profiles')->join('applyjobs','user_profiles.userId','=','applyjobs.userId')
        // ->join('postjobs','postjobs.postId','=','applyjobs.postId')->where('postjobs.userId',$id)
        // ->select('user_profiles.fName','applyjobs.applyId','applyjobs.postId','user_profiles.lName','postjobs.JobDescription','user_profiles.userId','user_profiles.emailId','postjobs.Title')->get();

        $candidates = DB::table('user_profiles')->join('userinfo', 'userinfo.userId', '=', 'user_profiles.userId')->where('user_profiles.fName', $searchData)->get();

        return view('CandidatePage', ['candidates' => $candidates]);
        //$candidates = user_profiles::where('user_profile.fName',$searchData)->get();
        //First Complete the user_Profile Page then I will do any other thing
    }

    public function ViewProfile($id)
    {
        $candidate = DB::table('user_profiles')->join('userinfo', 'userinfo.userId', '=', 'user_profiles.userId')->where('user_profiles.userId', $id)->get()->first();
        //return $candidate;
        return view('userprofile', ['userData' => $candidate]);
    }
}
