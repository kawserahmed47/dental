@extends('back.master')
@section('content')

<div class="modal fade" id="gallery_model" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gallery Create</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    
        <div class="modal-body">
            <form action="{{route('insertGallery')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                    <label  for="">Image</label> <img style="width: 100px; height: 100px;" id="blah_gallery" src="#" alt="Preview" /><br>
                    <input class="form-control" type="file"  id="imgInp_gallery" name="image">
                    <label  for="">Name </label>
                    <input type="text" class="form-control" name="name">
                    <label  for="">About </label>
                    <textarea class="form-control" name="about" id="" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    
      </div>
    </div>
  </div>



 <!-- START CONTENT -->
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Gallaries List</h1>
                    <!-- PAGE HEADING TAG - END -->
                    @if(Session::get('success'))
                        <p class="text-success">{{Session::get('success')}}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12">
            <a href="" class="btn bg-success" data-toggle="modal" data-target="#gallery_model">ADD GALLERY</a><br>
        </div> 
        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->

        <div class='col-xs-12'>
            <table class="table table-bordered">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>About</td>
                    <td>Image</td>
                    <td>Action</td>

                </tr>
                @if($galleries)
                @foreach ($galleries as $key=>$gallary)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$gallary->name}}</td>
                    <td>{{$gallary->about}}</td>
                    <td><img style="height: 100px; width:100px" src="{{$gallary->image}}" alt="{{$gallary->image}}"></td>
                    <td>
                       <a href="#" class="badge badge-info">Edit</a>

                    <a class="badge badge-danger" onclick="return confirm('Are you sure?')" href="{{route('deletegallaries',$gallary->id)}}">Delete</a>
                    </td>

                </tr>

                    
                @endforeach
                @endif

            </table>
            {{ $galleries->links() }}
        </div>
    
   
    </div>


</section>
<!-- END CONTENT --> 
@endsection

@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah_gallery').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imgInp_gallery").change(function(){
        readURL(this);
    });
    </script>
    
@endsection