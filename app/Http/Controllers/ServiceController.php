<?php

namespace App\Http\Controllers;

use App\DoctorInfo;
use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function allServices(){

        $data = array();
        $data['menu_active']= 3;
        $data['title']="Services";
        $data['services']= Service::all();
        $data['doctors']= DoctorInfo::all();


        return view('front.pages.services.allServices',$data);

    }

    public function serviceDetails($id){
        $data = array();
        $data['menu_active']= 3;
        $data['services']= Service::all();
        $data['doctors']= DoctorInfo::all();
        $data['servicedetails']= Service::find($id);
        $data['title']="Services";
        return view('front.pages.services.serviceDetails',$data);
    }


    public function index(){
        $data=Service::all();
//        return view('back.doctor_info.doctor_info',compact('data'));
        return view('back.service.service',compact('data'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'about' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();



            if(!Storage::disk('public')->exists('service'))
            {
                Storage::disk('public')->makeDirectory('service');
            }

            $doctorImage = Image::make($image)->resize(270,177)->stream();
            Storage::disk('public')->put('service/'.$imageName,$doctorImage);




            if(!Storage::disk('public')->exists('service/post'))
            {
                Storage::disk('public')->makeDirectory('service/post');
            }

            $doctorImagepost = Image::make($image)->resize(840,330)->stream();
            Storage::disk('public')->put('service/post/'.$imageName,$doctorImagepost);


        } else {
            $imageName = "default.png";
        }

        $data = new Service();
        $data->name = $request->name;
        $data->about = $request->about;
        $data->description = $request->description;
        $data->slug = $slug;
        $data->image = $imageName;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }
        $data->status = true;
        $data->save();
//        Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->back();



    }

    public function distroy($id){
//        return $id;
        $data= Service::find($id);
        $data->delete();
        return redirect()->back();

    }
}
