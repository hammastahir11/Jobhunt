<?php

namespace App\Http\Controllers;

use App\Http\Controllers\createJobs;
use Session;

class userControl extends Controller
{
    public function logout()
    {
        Session::forget('userId');
        return redirect()->action([createJobs::class, 'index']);

    }
}
