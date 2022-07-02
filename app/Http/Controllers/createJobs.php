<?php

namespace App\Http\Controllers;

use App\Models\postjob;

//use Illuminate\Http\Request;
use Request;
use Session;
use Carbon;

class createJobs extends Controller
{
    public function store()
    {
        Request::validate([
            'title' => 'required|string|min:3|max:20',
            'company'=>'required|string|min:3|max:50',
            'address'=>'required|string|min:10|max:100',
            'editor'=>'required',
        ]);

        $jobAdd = new postjob();
        $user = Session::get('userId');
        $jobAdd->userId = $user->userId;
        $jobAdd->Title = Request::input('title');
        $jobAdd->CompanyName = Request::input('company');

        $jobAdd->WorkPlace = Request::input('workPlace');
        $jobAdd->Category = Request::input('Category');

        $jobAdd->JobLocation = Request::input('address');

        $jobAdd->EmploymentType = Request::input('jobType');
        $jobAdd->JobDescription = Request::input('editor');
        $mytime = Carbon\Carbon::now();
        $date = $mytime->toDateTimeString();
        $jobAdd->CreateDate = $date;

        $jobAdd->save();

        $jobData = postjob::all();
        $data = postjob::all()->first();

        Session::pull('postId');
        Session::put('postId', $data->postId);
        return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);

    }

    public function AllJobs()
    {
        $jobData = postjob::all();
        $data = postjob::all()->first();
        if ($data == null) {
            return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);
        }
        Session::pull('postId');
        Session::put('postId', $data->postId);
        return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);
    }

    public function jobDescription($id)
    {
        $data = postjob::where('postId', $id)->first();
        $jobData = postjob::all();
        Session::pull('postId');
        Session::put('postId', $id);
        return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);
    }

    //Later I will change this to the main home page
    public function index()
    {
        $jobData = postjob::all();
        return view('index', ['jobs' => $jobData]);
    }

}
