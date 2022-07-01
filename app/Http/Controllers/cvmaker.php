<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvmaker extends Controller
{
    public function createCV1(Request $request){
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
