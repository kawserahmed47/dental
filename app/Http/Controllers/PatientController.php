<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorInfo;
use App\Service;
use DB;
class PatientController extends Controller
{
    public function doctorSchedules(){
        $date = date("Y-m-d");
        $data = array();
        $data['menu_active']= 4;
        $data['title']="New Patient";
        $data['doctors']= DoctorInfo::all();
        $data['services']= Service::all();
        $data['appointments']=DB::table('appointments')->where('s_date',$date )->where('status',1)->orderBy('s_time', 'DESC')->get();
        return view('front.pages.patient.newPatient',$data);
    }

    public function schedules(){
        $date = date("Y-m-d");
        $data = array();
        $data['menu_active']= 4;
        $data['title']="Schedules";
        $data['doctors']= DoctorInfo::all();
        $data['services']= Service::all();
        $data['appointments']=DB::table('appointments')->where('s_date',$date )->where('status',1)->orderBy('s_time', 'DESC')->get();
        return view('front.pages.patient.schedules',$data);
    }
}
