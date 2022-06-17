<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Redirect;
use App\Models\postjob;
use Request;
use Session;



class homePage extends Controller
{

    public function CategoryJobs($category){
        
            $data=postjob::where('Category',$category)->first();
            $jobData=postjob::where('Category',$category)->get();
            return view('AllJobPage', ['jobs' => $jobData,'jobDes'=>$data]);
           
    
    }
    ///SoftwareDev/allJobs
}
