<?php

namespace App\Http\Controllers;

use App\blog;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\DoctorInfo;

class BlogController extends Controller
{
    public function blogs(){
        $data = array();
        $data['menu_active']= 5;
        $data['title']="Blog";
        $data['services']= Service::all();
        $data['blogs']= blog::paginate(6);
        $data['doctors']= DoctorInfo::all();
        return view('front.pages.blog.blogs',$data);
    }
    public function blogDetails($id){
        $data = array();
        $data['menu_active']= 5;
        $data['services']= Service::all();
        $data['doctors']= DoctorInfo::all();

        $data['title']="Blog Details";
        $data['blogs']= blog::find($id);
        return view('front.pages.blog.blogDetails',$data);
    }
//    ..............................for backend...............................
    public function index(){

        $data=blog::all();
        return view('back.blog.blog',compact('data'));

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



            if(!Storage::disk('public')->exists('blog'))
            {
                Storage::disk('public')->makeDirectory('blog');
            }

            $doctorImage = Image::make($image)->resize(840,360)->stream();
            Storage::disk('public')->put('blog/'.$imageName,$doctorImage);




            if(!Storage::disk('public')->exists('blog/post'))
            {
                Storage::disk('public')->makeDirectory('blog/post');
            }

            $blogImagepost = Image::make($image)->resize(370,218)->stream();
            Storage::disk('public')->put('blog/post/'.$imageName,$blogImagepost);


        } else {
            $imageName = "default.png";
        }

        $data = new blog();
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

        return redirect()->back();
    }

    public function distroy($id){
        $data=blog::find($id);
        $data->delete();
        return redirect()->back();

    }
}
