<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Redirect;
use App\Models\postjob;
use App\Models\applyjob;
use Request;
use Session;


class specificUserJobData extends Controller
{

    //

    public function JobsDetails(){

        $id=Session::get('userId')->userId;
        //return $id;

        
        //$Jobs_Applied=applyjob::where('userId',$id)->get();
        $Jobs_Applied = applyjob::where('userId', $id)->with(['postjob'])->get();
        return $Jobs_Applied;
        /*
        SELECT 
    users.email, users.password, data.data_1, data.data_2
FROM 
    users
INNER JOIN 
    data 
ON
    users.user_id=data.user_id
WHERE 
    users.email='$user_email'
        */

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
