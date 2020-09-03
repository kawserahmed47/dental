@extends('back.master')
@section('content')


 <!-- START CONTENT -->
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Comments List</h1>
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
                    <td>Message</td>
                    <td>Action</td>

                </tr>
                @foreach ($comments as $key=>$comment)
                <tr>
                <td>{{++$key}}</td>
                <td>{{$comment->name}}</td>
                    <td>{{$comment->phone}}</td>
                    <td>{{$comment->message}}</td>
                    <td>
                        @if ($comment->status==0)
                            <a class="badge badge-primary" href="{{route('commentStatus',$comment->id)}}">Pending</a>
                        @else 
                            <a class="badge badge-success" href="{{route('commentStatus',$comment->id)}}">Publish</a>
                        @endif
                       
                    <a class="badge badge-danger" onclick="return confirm('Are you sure?')" href="{{route('deletecomment',$comment->id)}}">Delete</a>
                    </td>

                </tr>

                    
                @endforeach

            </table>
        </div>
    
   
    </div>


</section>
<!-- END CONTENT --> 
@endsection