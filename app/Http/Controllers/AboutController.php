<?php

namespace App\Http\Controllers;

use App\DoctorInfo;
use App\Service;
use DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function drProfile($id){
        $data = array();
        $data['menu_active']= 2;
        $data['services']= Service::all();
        $data['title']="Dr Profile";
        $data['doctors']= DoctorInfo::all();
        $data['doctor']= DoctorInfo::find($id);
        return view('front.pages.about.drProfile',$data);
    }

    public function team(){
        $data = array();
        $data['menu_active']= 2;
        $data['services']= Service::all();
        $data['doctors']= DoctorInfo::all();
        $data['title']="Team";
        return view('front.pages.about.team',$data);
    }

    public function gallery(){
        $data = array();
        $data['menu_active']= 2;
        $data['services']= Service::all();
        $data['doctors']= DoctorInfo::all();
        $data['title']="Gallery";
        $data['galleries']= DB::table('galleries')->paginate(9);
        return view('front.pages.about.gallery',$data);
    }
}
