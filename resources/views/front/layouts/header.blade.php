<section class="topbar-one">
    <div class="container">
        <div class="topbar-one__left-text">Schedule: Mon to Sat 10:00 am - 9:00 pm</div><!-- /.left-text -->
        <div class="topbar-one__right-content">
            <div class="topbar-one__social">
                <a href="#"><i class="fa fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div><!-- /.topbar-one__social -->
            <select name="#" id="#" class="selectpicker topbar-one__language-picker">
                <option>EN</option>
{{--                <option>BN</option>--}}
{{--                <option>DU</option>--}}
            </select>
            {{-- <button type="button" class="topbar-one__btn" data-toggle="modal" data-target="#myModal">
                Book an Appointment
              </button> --}}
            <a href="#" data-toggle="modal" data-target="#myModal" class="topbar-one__btn">Book an Appointment</a>
        </div><!-- /.right-content -->
    </div><!-- /.container -->
</section><!-- /.topbar-one -->
<header class="site-header header-one">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('/')}}public/front/images/resources/logo.png" style="width: 200px;" class="main-logo" alt="Awesome Image" />
                    <img src="{{asset('/')}}public/front/images/resources/logo.png" style="width: 150px;" class="stick-logo" alt="Awesome Image" />
                </a>
                <button class="menu-toggler" data-target=".main-navigation">
                    <span class="fa fa-bars"></span>
                </button>
            </div><!-- /.logo-box -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation">
                <ul class=" navigation-box">
                    @if($menu_active==1)
                    <li class="current" >
                        @else
                        <li>
                            @endif
                        <a href="{{url('/')}}">Home</a>

                    </li>

                      @if($menu_active==2)
                    <li class="current" >
                        @else
                        <li>
                            @endif
                        <a href="#">About</a>
                        <ul class="submenu">
                            @foreach($doctors as $doctor)
                            <li><a href="{{url('/drProfile/'.$doctor->id)}}">{{$doctor->name}}</a></li>
                            @endforeach
                                <li><a href="{{url('/team')}}">Our Team</a></li>
                            <li><a href="{{url('/gallery')}}">Gallery</a></li>
                        </ul>
                    </li>


                    @if($menu_active==3)
                    <li class="current" >
                        @else
                        <li>
                            @endif
                        <a href="#">Services</a>
                        <ul class="submenu">
                            <li><a href="{{url('/allServices')}}">All Services</a></li>
                            @foreach($services as $service)
                            <li><a href="{{url('/serviceDetails/'.$service->id)}}">{{$service->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @if($menu_active==4)
                    <li class="current" >
                        @else
                        <li>
                            @endif
                            <a href="{{url('/schedules')}}">Schedules</a>
                            <ul class="submenu">
                                <li><a href="{{url('/doctorSchedules')}}">Doctors Schedules</a></li>
                                <li><a href="{{url('/schedules')}}">Patients Schedules</a></li>
                            </ul>
                    </li>
                    @if($menu_active==5)
                    <li class="current" >
                        @else
                        <li>
                            @endif
                        <a href="{{url('/blogs')}}">Blog</a>
                    </li>
                    @if($menu_active==6)
                    <li class="current" >
                        @else
                        <li>
                            @endif
                        <a href="{{url('/contact')}}">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <a href="tel:1800-456-7890" class="header-one__cta">
                            <span class="header-one__cta-icon">
                                <i class="dentallox-icon-call-answer"></i>
                            </span>
                    <span class="header-one__cta-content">
                                <span class="header-one__cta-text">Call Us for query:</span>
                                <span class="header-one__cta-number">+8801925612141</span>
                            </span>
                </a>
            </div><!-- /.right-side-box -->
        </div>
        <!-- /.container -->
    </nav>
</header><!-- /.header-one -->
