<?php

namespace App\Http\Controllers;

use Request;
use App\Models\user_profile;
use Session;


class RegisterUser extends Controller
{

    //Register a new User on Job Hunt
    public function store(){
        
        $user = new user_profile();
        $user->fName=Request::input('fName');
        $user->lName=Request::input('lName');
        $user->emailId=Request::input('emailId');
        $user->password= (Request::input('password'));
        $user->save();

        return redirect('/home');
    }

    public function LoginUser(){
        Session::pull('userId');
        $id=Request::input('emailId');
        $data=user_profile::where('userId',$id)->get();
        if(count($data)>0){
            Session::put('userId',$id);
            
        }
        return  Session::get('userId');
        
        


    }

    
}


//user_profile::where('userId',$id)->get();
//user_profile::where('userId',$id)->get()->first();
//user_profile::find($id);
//user_profile::all();


