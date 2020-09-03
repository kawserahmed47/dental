@extends('back.master')
@push('css')
    <style>
        #addslider {

            padding: 17px 16px;

            margin-right: 24px;
            text-align: center;
            font-size: 13px;
        }

        .btn.btn-info {
            background: no-repeat;
        }


        .btn {
            background: none;
            padding: 4px 6px;
            outline: none;
        }

        @media only screen and (max-width: 600px) {
            body {
                background-color: lightblue;
            }
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

@endpush

@section('content')

    <!-- START CONTENT -->
    <section id="main-content">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title" style="padding: 0px 25px;">
                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Doctor Information</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right mt-2 pt-2">
                        <!-- PAGE HEADING TAG - START -->
                        <a href="#" type="button" class="btn btn-primary" data-toggle="modal"
                           data-target="#exampleModal" id="addslider">Add Information</a>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix mb-5"></div>


        <div class="col-xs-12 ">
            {{--        <div class="add-header-wrapper gradient-blue curved-section text-center">--}}
            {{--            <h2 class="uppercase bold w-text">Recent Payments</h2>--}}
            {{--            <div class="before-text">Hospital Payments</div>--}}
            {{--            <p class="g-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto magni consequatur excepturi ab veritatis id facere facilis tempora sit amet, consectetur adipisicing elit. Iusto magni.</p>--}}
            {{--        </div>--}}



            <div class=" bg-w">
                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Hospital Payments</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">



                                <table id="example" class="display table table-hover table-condensed table table-striped">
                                    <thead>
                                    <tr>
                                        <th width="5%">Sl</th>
                                        <th width="20%">Name</th>
                                        <th width="20%">Description</th>
                                        <th width="5%">Status</th>
                                        <th width="20%">Doctor Image</th>
                                        <th width="30%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key=>$value)
                                        <tr>
                                            <td width="5%">{{$key+1}}</td>
                                            <td width="20%"> {{$value->name}}</td>
                                            <td width="20%">{{ substr($value->about,0,20)}}...</td>
                                            <td width="5%">{{$value->status}}</td>
                                            <td width="20%"><img
                                                    src="{{asset('public/storage/doctorinfo/'.$value->image)}}"
                                                    style="height: 50px; width: 60px;" alt=""></td>
                                            <td width="30%">
{{--                                                                                            <a href="{{ route('admin.post.show',$post->id) }}" class="btn btn-info waves-effect">--}}
                                                <a href="#" class="btn ">
                                                    <i class="material-icons" style="font-size:30px;color:green;">visibility</i>
                                                </a>
{{--                                                                                            <a href="{{ route('admin.post.edit',$post->id) }}" class="btn btn-info waves-effect">--}}
                                                <a href="#" class="btn ">
                                                    <i class="material-icons"
                                                       style="font-size:30px;color:blue;">edit</i>
                                                </a>
{{--                                                                                            <button class="btn btn-danger waves-effect" type="button" onclick="deletePost({{ $post->id }})">--}}
                                                <button class="btn" type="button" onclick="deleteDoctorInfo({{ $value->id }})">
                                                    <i class="material-icons btn delete-confirm" style="font-size:30px;color:red;">delete</i>
                                                </button>


                                                <form id="delete-form-{{ $value->id }}" action="{{ route('doctorinfo.destroy',$value->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>







                                            </td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- ********************************************** -->

                            </div>

                        </div>
                    </section>
                </div>
            </div>




        </div>





    {{--......................................................model............................................................--}}
    <!-- Button trigger modal -->
    {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
    {{--        Launch demo modal--}}
    {{--    </button>--}}

    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class=" modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Doctor Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{route('doctorinfo.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="field-1">Name</label>
                                <span class="desc"></span>
                                <div class="controls">
                                 <input type="text" name="name" class="form-control" id="field-1">
{{--                                    <textarea id="editor" name="title" class="form-control" cols="30" rows="2"></textarea>--}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">About</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{--                                <input type="text" name="subtitle" class="form-control" id="field-1">--}}
                                    <textarea  name="about" class="form-control" cols="30" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-1">Description</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    {{--                                <input type="text" name="subtitle" class="form-control" id="field-1">--}}
                                    <textarea id="editor" name="description" class="form-control" cols="30" rows="3"></textarea>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="form-label" for="field-1">Doctor Image</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="file" class="form-control" name="image" id="field-1">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- END CONTENT -->
@endsection

@push('js')

    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteDoctorInfo(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>


@endpush
