<?php

namespace App\Http\Controllers;

use Request;
use App\Models\user_profile;
use App\Models\userinfo;
use App\Models\postjob;
use Session;



class RegisterUser extends Controller
{

   public function createProfile(){
        $user_info = new userinfo();
        $user_info->userId=Session::get('userId')->userId;
        $user_info->profession = Request::input('field');
        $user_info->dateOfBirth = Request::input('dob');
        $user_info->city = Request::input('city');
        $user_info->country = Request::input('country');
        $user_info->phoneNumber = Request::input('phone');
        //$user_info->portfolioSite = Request::input('website');
        //$user_info->Address = Request::input('address');
        $user_info->save();
        return redirect('editprofile');
   }

    //Register a new User on Job Hunt
    public function store(){
        
        $user = new user_profile();
        $user->fName=Request::input('fName');
        $user->lName=Request::input('lName');
        $user->emailId=Request::input('emailId');

//Image Upload

        $pic = Request::file('pic');
        error_log($pic);
        if($pic!==NULL){

            $picName = $pic->getClientOriginalName();
        
            $picType = $pic->getClientOriginalExtension();
    
            $picSize = $pic->getSize();
            $pic->move('uploads',$picName);
            $destination = 'uploads/'.$picName;
            $user->pic=$destination;
        }
        $user->password= (Request::input('password'));
        $user->save();

        return redirect('/login');
    }

    public function LoginUser(){
        $emailId=Request::input('emailId');
        $data=user_profile::where('emailId',$emailId)->get()->first();

        Session::pull('userId');
        if($data!=NULL){

            Session::put('userId',$data);
            $password=Request::input('password');
            if($password==$data->password){

                view('Layouts.layout',['userData'=>$data]);
                 $jobData=postjob::all();
                 return view('index', ['jobs' => $jobData]);
            }

            else{
                $err='Password is Incorrect!';
                return view('login',['error'=>$err]);
            }
            
        }
        else{
            $err='User Name is Incorrect!';
            return view('login',['error'=>$err]);
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


