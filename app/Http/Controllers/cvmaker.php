<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvmaker extends Controller
{
    public function createCV1(Request $request){


        $validated = $request->validate([
            'fname'=>'required|string|min:3|max:10',
            'lname'=>'required|string|min:3|max:10',
            'Field' => 'required|string|min:3|max:20',
            'aboutus'=>'required',
            'address'=>'required',
            'country'=>'required|string|min:3|max:15',
            'phone'=>'required|digits:11',
            'email'=>'required|email',
            'website'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'=>'required|string|min:3|max:50',
            'jobname'=>'required|string|min:3|max:20',
            'jobdesc'=>'required|string|min:3|max:50',
            'sy'=>'required|year',
            'ey'=>'required|year',
            'instname'=>'required|string|min:3|max:50',
            'coursedesc'=>'required|string|min:3|max:50',
            'esy'=>'required|year',
            'eey'=>'required|year',

        ]);
        $pic = $request->file('image');
       
       
        if ($pic !== null) {
            $pic = $request->file('image');
            $picName = $pic->getClientOriginalName();
            
            $pic->move('cvImages/', $picName);
            $destination = 'cvImages/' . $picName;
            $request->image = $destination;
        }
        return view('CVTemplate1', ['cvdata' => $request]);
    }


}
