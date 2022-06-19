<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\postjob;
use App\Models\applyjob;
use App\Models\user_profile;
use Request;
use Session;


class specificUserJobData extends Controller
{

    //

    public function JobsDetails(){

        $id=Session::get('userId')->userId;
        //$Jobs_Applied=applyjob::where('userId',$id)->get();
        $Jobs_Applied = applyjob::join('postjobs','postjobs.postId','=','applyjobs.postId')->where('applyjobs.userId',$id)->get(['postjobs.postId','postjobs.EmploymentType','postjobs.Title','postjobs.CompanyName','postjobs.JobDescription']);
        $firstAppliedjob=$Jobs_Applied[0];

        $mypostJob=postjob::where('userId',$id)->get();
        $firstPostJobs=postjob::where('userId',$id)->get()->first();


        $off=DB::table('user_profiles')->join('applyjobs','user_profiles.userId','=','applyjobs.userId')->join('postjobs','postjobs.postId','=','applyjobs.postId')->where('postjobs.userId',$id)->select('user_profiles.fName','applyjobs.postId','user_profiles.lName','postjobs.JobDescription','user_profiles.userId','user_profiles.emailId','postjobs.Title')->get();
        // return $off;
        // $users = DB::table('users')
        // ->join('contacts', 'users.id', '=', 'contacts.user_id')
        // ->join('orders', 'users.id', '=', 'orders.user_id')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        // ->get();
       
        
        $offerRecievedfirst=$off[0];//$offerRecieved[0];

        


        
        return view('AppliedandPostJobList',compact('Jobs_Applied'),['firstjob'=>$firstAppliedjob,'postjobs'=>$mypostJob,'firstpostjob'=>$firstPostJobs,'tabactive'=>1,'offerRecieved'=>$off,'offerRecievedfirst'=>$offerRecievedfirst]);
        

    } 


    public function Descriptoin($postId){
        $id=Session::get('userId')->userId;
        $Jobs_Applied = applyjob::join('postjobs','postjobs.postId','=','applyjobs.postId')->get(['postjobs.postId','postjobs.EmploymentType','postjobs.Title','postjobs.CompanyName','postjobs.JobDescription','postjobs.JobLocation']);
        $firstjob=postjob::where('postId',$postId)->first();

        $mypostJob=postjob::where('userId',$id)->get();
        $firstPostJobs=postjob::where('userId',$id)->get()->first();



        return view('AppliedandPostJobList',compact('Jobs_Applied'),['firstjob'=>$firstjob,'postjobs'=>$mypostJob,'firstpostjob'=>$firstPostJobs,'tabactive'=>1]);
    }



    public function postJobDescription($postId){
        $id=Session::get('userId')->userId;
        $Jobs_Applied = applyjob::join('postjobs','postjobs.postId','=','applyjobs.postId')->get(['postjobs.postId','postjobs.EmploymentType','postjobs.Title','postjobs.CompanyName','postjobs.JobDescription','postjobs.JobLocation']);
        $firstAppliedjob=$Jobs_Applied[0];

        $mypostJob=postjob::where('userId',$id)->get();
        $firstPostJobs=postjob::where('postId',$postId)->get()->first();

        return view('AppliedandPostJobList',compact('Jobs_Applied'),['firstjob'=>$firstAppliedjob,'postjobs'=>$mypostJob,'firstpostjob'=>$firstPostJobs,'tabactive'=>2]);
    }






    /*
    $user = User::where('id', 1)->with(['educationDetails', 'languageDetails', 'certificationDetails'])->first();




        //return username from users table
        $user->name;  


        // return education from the education_details table
        $user->educationDetails->education;


        // return lang_name from the language_details table
        $user->languageDetails->lang_name;


        // return certificate_title from the certificationDetails table
        $user->certificationDetails->certificate_title;


    */
}
