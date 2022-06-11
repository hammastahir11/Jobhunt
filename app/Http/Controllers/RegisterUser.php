<?php

namespace App\Http\Controllers;

use Request;
use App\Models\user_profile;


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

    
}
