<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;


class CommentController extends Controller
{
    public function insertComment(Request $request){
        $time = time();
        $data = array();

        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['message']=$request->message;
        $data['created_at']=date("Y-m-d H:i:s",$time);

        $query=DB::table('comments')->insert($data);
        if($query){
            Session::flash('success','Opinion Recorded Successful !!!');
            return redirect()->back();
        }

    }

    public function viewComment(Request $request){
        $data = array();
        $data['comments']= DB::table('comments')->get();
        return view('back.pages.patientcomments',$data);
    }

    public function commentStatus($id){
        $data = array();
        $time = time();
        $query=DB::table('comments')->where('id',$id)->first();
        if($query->status==0){
            $data['status']=1;
            $data['updated_at']=date("Y-m-d H:i:s",$time);
            DB::table('comments')->where('id',$id)->update($data);
            Session::flash('success','Status Update Successfull!');
            return redirect()->route('viewComment');

        }else{
            $data['status']=0;
            $data['updated_at']=date("Y-m-d H:i:s",$time);
            DB::table('comments')->where('id',$id)->update($data);
            Session::flash('success','Status Update Successfull!');
            return redirect()->route('viewComment');
        }
    }

    public function deletecomment($id){
        $query= DB::table('comments')->where('id',$id)->delete();
        if($query){
            Session::flash('success','Delete Successfull!');
            return redirect()->route('viewComment');
        }
   
       }

}
