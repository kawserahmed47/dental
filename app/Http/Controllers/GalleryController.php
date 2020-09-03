<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class GalleryController extends Controller
{
    public function createGallery(){
        $data = array();
        $data['galleries']= DB::table('galleries')->paginate(15);
        return view('back.pages.gallery',$data);
    }

    public function insertGallery(Request $request){
        $time = time();
        $data = array();
        $data['name']= $request->name;
        $data['about']= $request->about;
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $image=$request->file('image');
    
        if($image){
            $image_name=Str::random(12);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='galleryImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['image']=$image_url;
                DB::table('galleries')->insert($data);
                Session::flash('success', 'Gallery Added Successfully!');
                return Redirect::route('createGallery');
            }else{
                Session::flash('failed', 'Gallery Insert Error!');
                return Redirect::route('createGallery');

            }
        }else{
                DB::table('galleries')->insert($data);
                Session::flash('success', 'Gallery Added Without Image!');
                return Redirect::route('createGallery');

        }
    }

    public function deletegallaries($id){
        $results = DB::table('galleries')->where('id',$id)->first();
        if(!empty($results->image)){
            unlink($results->image);
        }
       
                $result= DB::table('galleries')->where('id',$id)->delete();
                if($result){
                Session::flash('success', 'Gallery Deleted  Successfully!!');
                return Redirect::route('createGallery'); 
                }
    }
    
}
