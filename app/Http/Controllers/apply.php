<?php

namespace App\Http\Controllers;

use Request;
use App\Models\applyjob;
use App\Models\postjob;
use Session;

class apply extends Controller
{
    public function store(){

        $apply = new applyjob();
        
        $apply->userId=Session::get('userId')->userId;
        $apply->postID=Session::get('postId');
        $apply->fullName=Request::input('fname');
        $apply->emailId=Request::input('email');
        $apply->phoneNumber=Request::input('pNumber');
        $file=Request::input('resume');
        $apply->save();


        $jobData=postjob::all();
        $data=postjob::all()->first();
        
       
        return view('AllJobPage', ['jobs' => $jobData,'jobDes'=>$data]);
        
    }

}
