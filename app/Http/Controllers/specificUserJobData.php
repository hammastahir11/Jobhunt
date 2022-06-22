<?php

namespace App\Http\Controllers;

use App\Models\applyjob;
use App\Models\postjob;
use Illuminate\Support\Facades\DB;
use Session;

class specificUserJobData extends Controller
{

    //

    public function JobsDetails()
    {

        $id = Session::get('userId')->userId;
        //$Jobs_Applied=applyjob::where('userId',$id)->get();
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('applyjobs.userId', $id)->get(['postjobs.postId', 'applyjobs.applyId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription']);
        if (count($Jobs_Applied) != 0) {

            $firstAppliedjob = $Jobs_Applied[0];
        } else {
            $firstAppliedjob = null;
        }

        $mypostJob = postjob::where('userId', $id)->get();

        if (count($mypostJob) != 0) {

            $firstPostJobs = $mypostJob[0];
        } else {
            $firstPostJobs = null;
        }
        //$firstPostJobs=postjob::where('userId',$id)->get()->first();

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.applyId', 'applyjobs.postId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();

        if (count($off) != 0) {

            $offerRecievedfirst = $off[0];
        } else {
            $offerRecievedfirst = null;
        }

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstAppliedjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 1, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);

    }

    public function Descriptoin($postId)
    {
        $id = Session::get('userId')->userId;
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('applyjobs.userId', $id)->get(['postjobs.postId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription']);

        // $Jobs_Applied = applyjob::join('postjobs','postjobs.postId','=','applyjobs.postId')->get(['postjobs.postId','postjobs.EmploymentType','postjobs.Title','postjobs.CompanyName','postjobs.JobDescription','postjobs.JobLocation']);
        $firstjob = postjob::where('postId', $postId)->first();

        $mypostJob = postjob::where('userId', $id)->get();
        $firstPostJobs = postjob::where('userId', $id)->get()->first();

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.applyId', 'applyjobs.postId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();

        if (count($off) != 0) {

            $offerRecievedfirst = $off[0];
        } else {
            $offerRecievedfirst = null;
        }

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 1, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);
    }

    public function DeleteJobApply($applyId)
    {

        $deleteRecored = applyjob::where('applyId', $applyId);
        $deleteRecored->delete();

        $id = Session::get('userId')->userId;
        //$Jobs_Applied=applyjob::where('userId',$id)->get();
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('applyjobs.userId', $id)->get(['postjobs.postId', 'applyjobs.applyId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription']);
        if (count($Jobs_Applied) != 0) {

            $firstAppliedjob = $Jobs_Applied[0];
        } else {
            $firstAppliedjob = null;
        }

        $mypostJob = postjob::where('userId', $id)->get();

        if (count($mypostJob) != 0) {

            $firstPostJobs = $mypostJob[0];
        } else {
            $firstPostJobs = null;
        }
        //$firstPostJobs=postjob::where('userId',$id)->get()->first();

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.applyId', 'applyjobs.postId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();

        if (count($off) != 0) {

            $offerRecievedfirst = $off[0];
        } else {
            $offerRecievedfirst = null;
        }

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstAppliedjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 1, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);

        // $request->session()->flash('alert-success', ' Report is deleted successfully.');

    }

    public function postJobDescription($postId)
    {
        $id = Session::get('userId')->userId;
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->get(['postjobs.postId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription', 'postjobs.JobLocation']);
        if (count($Jobs_Applied) != 0) {

            $firstAppliedjob = $Jobs_Applied[0];
        } else {
            $firstAppliedjob = null;
        }

        $mypostJob = postjob::where('userId', $id)->get();
        $firstPostJobs = postjob::where('postId', $postId)->get()->first();

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.postId', 'applyjobs.applyId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();
        if (count($off) != 0) {

            $offerRecievedfirst = $off[0];
        } else {
            $offerRecievedfirst = null;
        }

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstAppliedjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 2, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);
    }

    public function DeleteJobPost($postId)
    {
        $deleteRecored = postjob::where('postId', $postId);
        $deleteRecored->delete();

        $id = Session::get('userId')->userId;
        //$Jobs_Applied=applyjob::where('userId',$id)->get();
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('applyjobs.userId', $id)->get(['postjobs.postId', 'applyjobs.applyId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription']);
        if (count($Jobs_Applied) != 0) {

            $firstAppliedjob = $Jobs_Applied[0];
        } else {
            $firstAppliedjob = null;
        }

        $mypostJob = postjob::where('userId', $id)->get();

        if (count($mypostJob) != 0) {

            $firstPostJobs = $mypostJob[0];
        } else {
            $firstPostJobs = null;
        }
        //$firstPostJobs=postjob::where('userId',$id)->get()->first();

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.applyId', 'applyjobs.postId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();

        if (count($off) != 0) {

            $offerRecievedfirst = $off[0];
        } else {
            $offerRecievedfirst = null;
        }

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstAppliedjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 2, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);

    }

    public function offerJobDescription($offerid)
    {
        $id = Session::get('userId')->userId;
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->get(['postjobs.postId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription', 'postjobs.JobLocation']);
        $firstAppliedjob = $Jobs_Applied[0];

        $mypostJob = postjob::where('userId', $id)->get();
        $firstPostJobs = $mypostJob[0];

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.postId', 'applyjobs.applyId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();
        $offerRecievedfirst = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->where('applyjobs.applyId', $offerid)->select('user_profiles.fName', 'applyjobs.postId', 'applyjobs.applyId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get()->first();

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstAppliedjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 3, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);

    }

    public function DeleteJoboffers($offerid)
    {
        $deleteRecored = applyjob::where('applyId', $offerid);
        $deleteRecored->delete();

        $id = Session::get('userId')->userId;
        //$Jobs_Applied=applyjob::where('userId',$id)->get();
        $Jobs_Applied = applyjob::join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('applyjobs.userId', $id)->get(['postjobs.postId', 'applyjobs.applyId', 'postjobs.EmploymentType', 'postjobs.Title', 'postjobs.CompanyName', 'postjobs.JobDescription']);
        if (count($Jobs_Applied) != 0) {

            $firstAppliedjob = $Jobs_Applied[0];
        } else {
            $firstAppliedjob = null;
        }

        $mypostJob = postjob::where('userId', $id)->get();

        if (count($mypostJob) != 0) {

            $firstPostJobs = $mypostJob[0];
        } else {
            $firstPostJobs = null;
        }
        //$firstPostJobs=postjob::where('userId',$id)->get()->first();

        $off = DB::table('user_profiles')->join('applyjobs', 'user_profiles.userId', '=', 'applyjobs.userId')->join('postjobs', 'postjobs.postId', '=', 'applyjobs.postId')->where('postjobs.userId', $id)->select('user_profiles.fName', 'applyjobs.applyId', 'applyjobs.postId', 'user_profiles.lName', 'postjobs.JobDescription', 'user_profiles.userId', 'user_profiles.emailId', 'postjobs.Title')->get();

        if (count($off) != 0) {

            $offerRecievedfirst = $off[0];
        } else {
            $offerRecievedfirst = null;
        }

        return view('AppliedandPostJobList', compact('Jobs_Applied'), ['firstjob' => $firstAppliedjob, 'postjobs' => $mypostJob, 'firstpostjob' => $firstPostJobs, 'tabactive' => 3, 'offerRecieved' => $off, 'offerRecievedfirst' => $offerRecievedfirst]);

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
