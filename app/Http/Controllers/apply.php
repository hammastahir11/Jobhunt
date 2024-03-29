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
        Request::validate([
            'fname'=>'required|string|min:3|max:20',
            'email' => 'required|email|min:10|max:25|unique:users',
            'pNumber'=>'required|digits:11',
            'resume'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
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
        if (Session::get('userId')->userId == NULL) {
            return view('JobApply', ['error' => 'Please Login First']);
        }
        if (Request::input('email') == null) {
            return view('JobApply', ['error' => 'Please Fill Email']);
        }
        if (Request::input('pNumber') == null) {
            return view('JobApply', ['error' => 'Please write Phone Number']);
        }
        $resume = Request::file('resume');
        if($resume==NULL){
            return view('JobApply',['error'=>'Please Attach File']);
        }

        $resume = Request::file('resume');
        
        if ($resume !== null) {
            $resume = Request::file('resume');
            $resumeName = $resume->getClientOriginalName();
            
            $resume->move('AppilcantCV/', $resumeName);
            $destination = 'AppilcantCV/' . $resumeName;
            $apply->file = $destination;
        }
        $apply->fullName = Request::input('fname');

        $apply->emailId = Request::input('email');
        $apply->phoneNumber = Request::input('pNumber');
        
        $apply->save();

        $jobData = postjob::all();
        $data = postjob::all()->first();

        return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);

    }

}
