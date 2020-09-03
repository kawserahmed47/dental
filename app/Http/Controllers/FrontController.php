<?php

namespace App\Http\Controllers;

use App\DoctorInfo;
use App\Service;
use App\slider;
use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 1;
        $data['title']="HOME";
        $data['sliders']= slider::all();
        $data['services']= Service::all();
        $data['comments']= DB::table('comments')->where('status',1)->get();
        $data['doctors']= DoctorInfo::all();
        $data['doctors1']= DoctorInfo::where('status',1)->limit(1)->get();
        return view('front.pages.home',$data);
    }

    public function aboutDr1(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']="Dr1";
        return view('front.pages.doctor_details',$data);

    }

    public function gallery(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']="Gallery";
        return view('front.pages.gallery',$data);

    }

    public function aboutDr2(){

    }

    public function service(){
        $data = array();
        $data['menu_active']= 3;
        $data['title']="Services";
        return view('front.pages.service',$data);
    }

    public function service1(){
        $data = array();
        $data['menu_active']= 3;
        $data['title']="Service 1";
        return view('front.pages.service-1',$data);
    }

    public function patient(){
        $data = array();
        $data['menu_active']= 4;
        $data['title']="New Patient";
        return view('front.pages.new_patient',$data);
    }

    public function schedule(){
        $data = array();
        $data['menu_active']= 4;
        $data['title']="Schedule";
        return view('front.pages.scheduling',$data);
    }

    public function first_visit(){
        $data = array();
        $data['menu_active']= 4;
        $data['title']="First Visit";
        return view('front.pages.first_visit',$data);
    }

    public function blog(){
        $data = array();
        $data['menu_active']= 5;
        $data['title']="Blog";
        return view('front.pages.blog',$data);
    }

    public function contact(){
        $data = array();
        $data['menu_active']= 6;
        $data['title']="Contact";
        $data['doctors']= DoctorInfo::all();
        $data['services']= Service::all();
        return view('front.pages.contact',$data);
    }
}
