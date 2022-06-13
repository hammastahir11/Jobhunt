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
        Session::pull('userId');
        $id=Request::input('emailId');
        $data=user_profile::where('userId',$id)->get();
        if(count($data)>0){
            Session::put('userId',$id);
            
        }
        $data=user_profile::where('userId',$id)->get()->first();


        view('Layouts.layout',['userData'=>$data]);
        
        // return  Session::get('userId');
         return view('index');
    }

    
}


//user_profile::where('userId',$id)->get();
//user_profile::where('userId',$id)->get()->first();
//user_profile::find($id);
//user_profile::all();


