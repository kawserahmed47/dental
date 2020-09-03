@extends('back.master')
@section('content')


 <!-- START CONTENT -->
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Appointment List</h1>
                    <!-- PAGE HEADING TAG - END -->
                    @if(Session::get('success'))
                        <p class="text-success">{{Session::get('success')}}</p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->

        <div class='col-xs-12'>
            <table class="table table-bordered">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Gender</td>
                    <td>Date</td>
                    <td>Time</td>
                    <td>Action</td>

                </tr>
                @foreach ($appointments as $key=>$appointment)
                <tr>
                <td>{{++$key}}</td>
                <td>{{$appointment->fname}}  {{$appointment->lname}}</td>
                    <td>{{$appointment->phone}}</td>
                    <td>{{$appointment->gender}} /{{$appointment->age}}</td>
                    <td>{{$appointment->s_date}}</td>
                    <td>{{$appointment->s_time}}</td>
                    <td>
                        @if ($appointment->status==0)
                            <a class="badge badge-primary" href="{{route('appointmentStatus',$appointment->id)}}">Pending</a>
                        @else 
                            <a class="badge badge-success" href="{{route('appointmentStatus',$appointment->id)}}">Accepted</a>
                        @endif
                       
                    <a class="badge badge-danger" onclick="return confirm('Are you sure?')" href="{{route('deleteAppointment',$appointment->id)}}">Delete</a>
                    </td>

                </tr>

                    
                @endforeach

            </table>
        </div>
    
   
    </div>


</section>
<!-- END CONTENT --> 
@endsection