
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ashik.templatepath.net/dentallox-html-files/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 04:25:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Home|| {{$title}}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/')}}public/front/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/')}}public/front/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/')}}public/front/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}public/front/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/')}}public/front/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/')}}public/front/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/')}}public/front/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/')}}public/front/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}public/front/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/')}}public/front/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}public/front/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/')}}public/front/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}public/front/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{asset('/')}}public/front/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/')}}public/front/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/responsive.css')}}">
</head>


<body>
<!-- The Modal -->
<div class="modal fade  mt-5" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <section class=" mt-5" id="appointment">
            <div class="container">
                <div class="inner-container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="appointment-one__content">
                                <h3 class="appointment-one__title">Make an Appointment <br> Today !</h3><!-- /.appointment-one__title -->
                                <p class="appointment-one__text">Our clinic provides high-level dental services, <br> offers comprehensive solutions for the treat- <br>ment of any dental disease.</p><!-- /.appointment-one__text -->
                            </div><!-- /.appointment-one__content -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-7">

                            <form action="{{route('insertAppointment')}}" method="POST" class="appointment-one__form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="fname" placeholder="First Name">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="text" name="lname" placeholder="Last Name">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="Email">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <select class="selectpicker" name="gender">
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            {{-- <option>Departments</option>
                                            <option>Departments</option> --}}
                                        </select>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="text" name="age" placeholder="Age">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="date" name="s_date" class="" placeholder="Schedule Date">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        {{-- <input type="text" name="time" placeholder="Time"> --}}
                                        <select class="selectpicker" name="s_time">
                                            <option>Select Time</option>
                                            <option>10:00am</option>
                                            <option>10:30am</option>
                                            <option>11:00am</option>
                                            <option>11:30am</option>
                                            <option>12:00pm</option>
                                            <option>12:30pm</option>
                                            <option>01:00pm</option>
                                            <option>03:00pm</option>
                                            <option>03:30pm</option>
                                            <option>04:00pm</option>
                                            <option>04:30pm</option>
                                            <option>05:00pm</option>

                                            {{-- <option>Departments</option>
                                            <option>Departments</option> --}}
                                        </select>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="appointment-one__form-btn">Submit Now</button>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.appointment-one__form -->

                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.appointment-one -->
         <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
</div>


<div class="preloader"><span></span></div><!-- /.preloader -->
<div class="page-wrapper">

    @include('front.layouts.header')


    @yield('content')


    @include('front.layouts.footer')



</div><!-- /.page-wrapper -->
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- /.scroll-to-top -->
<script src="{{asset('public/front/js/jquery.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/front/js/theme.js')}}"></script>

{{-- <script>
    $(document).ready(function(){
       $('#home').click(function(){
           $('li a').removeClass("current");
           $(this).addClass("current");
       }) ;
    });
</script> --}}


</body>


<!-- Mirrored from ashik.templatepath.net/dentallox-html-files/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2020 04:26:52 GMT -->
</html>
