<?php

namespace App\Http\Controllers;
use App\DoctorInfo;
use App\Service;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $data = array();
        $data['menu_active']= 6;
        $data['title']="Contact";
        $data['doctors']= DoctorInfo::all();
        $data['services']= Service::all();
        return view('front.pages.contact',$data);
    }
}
