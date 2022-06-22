<?php

namespace App\Http\Controllers;

use App\Models\applyjob;
use App\Models\postjob;
use Request;
use Session;

class apply extends Controller
{
    public function store()
    {

        $apply = new applyjob();

        $apply->userId = Session::get('userId')->userId;
        $apply->postID = Session::get('postId');
        $applyId = applyjob::where('userId', Session::get('userId')->userId)->get();
        foreach ($applyId as $applyied) {
            if ($applyied->postId == Session::get('postId')) {
                return view('JobApply', ['error' => 'You have already apply for this post']);
            }
        }

        if (Request::input('fname') == null) {
            return view('JobApply', ['error' => 'Please Fill first Name']);
        }
        if (Request::input('email') == null) {
            return view('JobApply', ['error' => 'Please Fill Email']);
        }
        if (Request::input('pNumber') == null) {
            return view('JobApply', ['error' => 'Please write Phone Number']);
        }
        // if(Request::input('resume')==NULL){
        //     return view('JobApply',['error'=>'Please Attach File']);
        // }
        $apply->fullName = Request::input('fname');

        $apply->emailId = Request::input('email');
        $apply->phoneNumber = Request::input('pNumber');
        $file = Request::input('resume');
        $apply->save();

        $jobData = postjob::all();
        $data = postjob::all()->first();

        return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);

    }

}
