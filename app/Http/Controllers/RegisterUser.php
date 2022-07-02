<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RegisterUser;
use App\Models\postjob;
use App\Models\userinfo;
use App\Models\user_profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Request;
use Validator;


use Session;

class RegisterUser extends Controller
{

    public function ViewProfile()
    {
        $id = Session::get('userId')->userId;
        $candidate = DB::table('user_profiles')->join('userinfo', 'userinfo.userId', '=', 'user_profiles.userId')->where('user_profiles.userId', $id)->get()->first();
        //return $candidate;
        return view('userprofile', ['userData' => $candidate]);
    }

    public function updateProfile()
    {
        $id = Session::get('userId')->userId;
        $givenData = DB::table('userinfo')->where('userinfo.userId', $id)->get()->first();
        //return $givenData;
        return view('createprofile', ['userData' => $givenData]);
        //
    }

    public function createProfile(Request $request)
    {
        
        Request::validate([
            'field' => 'required|string|min:3|max:20',
            'dob'=>'required|date',
            'city'=>'required|string|min:3|max:15',
            'country'=>'required|string|min:3|max:15',
            'phone'=>'required|digits:11',
            'website'=>'required',
            'pic'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'personalInfo'=>'required',

        ]);
        $id = Session::get('userId')->userId;
        $givenData = DB::table('userinfo')->where('userinfo.userId', $id)->get()->first();

        if ($givenData != null) {
            $user_info = userinfo::find($givenData->iD);
        } else {

            $user_info = new userinfo();
        }

        $user_info->userId = Session::get('userId')->userId;
        $user_info->gender = Request::input('Gender');
        $user_info->aboutUser = Request::input('personalInfo');
        $user_info->profession = Request::input('field');
        $user_info->dateOfBirth = Request::input('dob');
        $user_info->city = Request::input('city');
        $user_info->country = Request::input('country');
        $user_info->phoneNumber = Request::input('phone');
        $user_info->portfolioSite = Request::input('website');
        $pics =  Request::file('pic');
        
        
        
        if ($pics !== null) {
            $pics = Request::file('pic');
            $picName = $pics->getClientOriginalName();
            
            $pics->move('Images/', $picName);
            $destination = 'Images/' . $picName;
            $user_info->profilePic = $destination;
        }
        
        if ($givenData != null) {
            $user_info = $user_info->toArray();
            // DB::table('userinfo')->where('iD',$id)->update(['userId'=>$user_info->userId,'gender'=>$user_info->gender,'aboutUser'=>$user_info->aboutUser,'profession'=>$user_info->profession,'dateOfBirth'=>$user_info->dateOfBirth,'city'=>$user_info->city,'country'=>$user_info->country,'phoneNumber'=>$user_info->phoneNumber]);
            DB::table('userinfo')->where('iD', $givenData->iD)->update($user_info); 
            $id = Session::get('userId')->userId;
            $givenData = DB::table('userinfo')->where('userinfo.userId', $id)->get()->first();
            //return $givenData;
            return view('createprofile', ['userData' => $givenData,'error'=>'Record Updated Successfully']);
       
            

        } else {

            $user_info->save();
            $id = Session::get('userId')->userId;
            $givenData = DB::table('userinfo')->where('userinfo.userId', $id)->get()->first();
            //return $givenData;
            return view('createprofile', ['userData' => $givenData,'error'=>'Record Added Successfully']);
           
        }

       
    }

    //Register a new User on Job Hunt
    public function store()
    {
        
        Request::validate([
            'fName' => 'required|string|min:3|max:10',
            'lName' => 'required|string|min:3|max:10',
            'emailId' => 'required|email|min:10|max:25',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
        $user = new user_profile();
        $user->fName = Request::input('fName');
        $user->lName = Request::input('lName');
        $user->emailId = Request::input('emailId');

//Image Upload

        $pic = Request::file('pic');
        return $pic;
        error_log($pic);
        if ($pic !== null) {
            $pic = Request::file('pic');
            $picName = $pic->getClientOriginalName();
            //$path = $pic->store('public/images');;

            //$picType = $pic->getClientOriginalExtension();

            //$picSize = $pic->getSize();
            $pic->move('Images/', $picName);
            $destination = 'images/' . $picName;
            $user->pic = $destination;
        }
        $user->password = (Request::input('password'));
        $user->save();

        return redirect('/login');
    }

    public function LoginUser()
    {
        $emailId = Request::input('emailId');
        $data = user_profile::where('emailId', $emailId)->get()->first();


        Session::pull('userId');
        if ($data != null) {
            
            Session::put('userId', $data);

           
        
            $password = Request::input('password');
            if ($password == $data->password) {

                view('Layouts.layout', ['userData' => $data]);
                $jobData = postjob::all();
                return view('index', ['jobs' => $jobData]);
            } else {
                $err = 'Password is Incorrect!';
                return view('login', ['error' => $err]);
            }

        } else {
            $err = 'User Name is Incorrect!';
            return view('login', ['error' => $err]);
        }

        // return  Session::get('userId');
        //    {
        //     "userId": 5,
        //     "fName": "KASHIF",
        //     "lName": "SATTAR",
        //     "emailId": "kashidevlab@gmail.com",
        //     "password": "KAS",
        //     "pic": null
        //     }

    }

}

//user_profile::where('userId',$id)->get();
//user_profile::where('userId',$id)->get()->first();
//user_profile::find($id);
//user_profile::all();
