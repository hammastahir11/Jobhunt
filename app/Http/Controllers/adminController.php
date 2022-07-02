<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RegisterUser;
use App\Models\postjob;
use App\Models\WebPersonalData;
use App\Models\user_profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Request;

use Session;

class adminController extends Controller
{

    

    public function saveDetails(){

        $data=new WebPersonalData();
        $pic = Request::file('b1');
        if ($pic !== null) {
            $picName = $pic->getClientOriginalName();
            $pic->move('AdminBannerImages/', $picName);
            $destination = 'AdminBannerImages/' . $picName;
        }
       
        $data->img1 = $destination;
        $pic = Request::file('b2');
        if ($pic !== null) {
            $picName = $pic->getClientOriginalName();
            $pic->move('AdminBannerImages/', $picName);
            $destination = 'AdminBannerImages/' . $picName;
        }
        $data->img2 = $destination;
        $pic = Request::file('b3');
        if ($pic !== null) {
            $picName = $pic->getClientOriginalName();
            $pic->move('AdminBannerImages/', $picName);
            $destination = 'AdminBannerImages/' . $picName;
        }
        $data->img3 = $destination;

        $data->Description = Request::input('descr');
        $data->address = Request::input('address');
        $data->email = Request::input('email');
        $data->phoneNumber = Request::input('mbnumber');
        $data->mobileNumber = Request::input('pNumber');
        $data->save();

        return view('AdminPannel');

    }


    public function updateDetails(){
        $data=WebPersonalData::where('id',1)->get()->first();
        $pic = Request::file('b1');
        if ($pic !== null) {
            $picName = $pic->getClientOriginalName();
            $pic->move('AdminBannerImages/', $picName);
            $destination = 'AdminBannerImages/' . $picName;
            $data->img1 = $destination;
        }
       
        $pic = Request::file('b2');
        if ($pic !== null) {
            $picName = $pic->getClientOriginalName();
            $pic->move('AdminBannerImages/', $picName);
            $destination = 'AdminBannerImages/' . $picName;
            $data->img2 = $destination;
        }
        $pic = Request::file('b3');
        if ($pic !== null) {
            $picName = $pic->getClientOriginalName();
            $pic->move('AdminBannerImages/', $picName);
            $destination = 'AdminBannerImages/' . $picName;
            $data->img3 = $destination;
        }

        $data->Description = Request::input('descr');
        $data->address = Request::input('address');
        $data->email = Request::input('email');
        $data->phoneNumber = Request::input('mbnumber');
        $data->mobileNumber = Request::input('pNumber');
        $data = $data->toArray();
        DB::table('WebPersonalData')->where('id', 1)->update($data); 
        

        return view('AdminPannel');

    }

    
}
