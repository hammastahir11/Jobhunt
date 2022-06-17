<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createJobs;
use App\Http\Controllers\RegisterUser;

class userControl extends Controller
{
    public function logout(){
        Session::forget('userId');
        return redirect()->action([createJobs::class, 'index']);
        
    }
}
