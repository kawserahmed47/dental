<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class AppointmentController extends Controller
{
    public function insertAppointment(Request $request){
        $time = time();
        $data = array();
        $data['fname']=$request->fname;
        $data['lname']=$request->lname;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['gender']=$request->gender;
        $data['age']=$request->age;
        $data['s_date']=$request->s_date;
        $data['s_time']=$request->s_time;
        $data['status']=0;
        $data['created_at']=date("Y-m-d H:i:s",$time);

        $query=DB::table('appointments')->insert($data);

        if($query){
           // Toastr::success('Save successfully.','Success',["positionClass" => "toast-top-right"]);
            Session::flash('success','Appointments Recorded Successful !!!');
            return redirect()->back();
        }

    }
    public function appointmentList(){
        $data= array();
        $data['appointments']=DB::table('appointments')->orderBy('s_date', 'ASC')->orderBy('s_time', 'ASC')->get();
        return view('back.pages.appointments',$data);
    }

    public function deleteAppointment($id){
     $query= DB::table('appointments')->where('id',$id)->delete();
     if($query){
         Session::flash('success','Delete Successfull!');
         return redirect()->route('appointmentList');
     }

    }

    public function appointmentStatus($id){
        $data = array();
        $time = time();
        $query=DB::table('appointments')->where('id',$id)->first();
        if($query->status==0){
            $data['status']=1;
            $data['updated_at']=date("Y-m-d H:i:s",$time);
          $query1=DB::table('appointments')->where('id',$id)->update($data);   
          if($query1){
            Session::flash('success','Status Updated Successfull!');
            return redirect()->route('appointmentList');

          } 
        }elseif($query->status==1){
            $data['status']=0;
            $data['updated_at']=date("Y-m-d H:i:s",$time);
            $query2= DB::table('appointments')->where('id',$id)->update($data); 
            if($query2){
                Session::flash('success','Status Updated Successfull!');
                return redirect()->route('appointmentList');
            }
        }
    }
}
