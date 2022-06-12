<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\postjob;
use Request;
use Session;
use Carbon;
class createJobs extends Controller
{
    public function store(){

        $jobAdd = new postjob();
        $jobAdd->userId=Session::get('userId');
        $jobAdd->Title=Request::input('title');
        $jobAdd->CompanyName=Request::input('company');
        $jobAdd->WorkPlace=Request::input('workPlace');
        $jobAdd->JobLocation=Request::input('address');
        $jobAdd->EmploymentType=Request::input('jobType');
        $jobAdd->JobDescription=Request::input('editor');
        $mytime = Carbon\Carbon::now();
        $date =$mytime->toDateTimeString();
        $jobAdd->CreateDate=$date;

        $jobAdd->save();


        $jobData=postjob::all();

        return view('AllJobPage', ['jobs' => $jobData]);
        
    }

    public function AllJobs(){
        $jobData=postjob::all();
        return view('AllJobPage', ['jobs' => $jobData]);
    }
}
