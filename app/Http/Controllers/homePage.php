<?php

namespace App\Http\Controllers;

use App\Models\postjob;

class homePage extends Controller
{

    public function CategoryJobs($category)
    {

        $data = postjob::where('Category', $category)->first();
        $jobData = postjob::where('Category', $category)->get();
        return view('AllJobPage', ['jobs' => $jobData, 'jobDes' => $data]);

    }
    ///SoftwareDev/allJobs
}
