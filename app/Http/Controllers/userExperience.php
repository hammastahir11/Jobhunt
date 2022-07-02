<?php

namespace App\Http\Controllers;

use App\Models\applyjob;
use App\Models\experience;
use File;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Request;
use Session;

class userExperience extends Controller
{
    public function store(){
        
        $exper = new experience();
        $exper->userId = Session::get('userId')->userId;
        $exper->jobname = Request::input('title');
        $exper->address = Request::input('address');
    $exper->jobdesc = Request::input('editor');

        $exper->save();
        return view('addexperience');

                              
    }
}
