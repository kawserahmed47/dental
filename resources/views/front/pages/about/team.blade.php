@extends('front.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title">Team</h2><!-- /.inner-banner__title -->
        <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="about.html">About Us</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="team.html">Our Team</a></li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="team-one">
    <div class="container">
        <div class="block-title text-left">
            <h2 class="block-title__title">Meet Our Doctors</h2><!-- /.block-title__title -->
            <p class="block-title__text">Welcome to Dentallox Team! Our team is dedicated to making every patient feel welcome, comfortable, and valued – because in our office you are! One of our favorite things to do is help those patients who suffer from dental fear or anxiety. </p><!-- /.block-title__text -->
        </div><!-- /.block-title -->
        <div class="row">
            @foreach($doctors as $doctor)

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="{{asset('public/storage/doctorinfo/'.$doctor->image)}}" alt="Awesome Image" />
                        <div class="team-one__hover">
                            <h3 class="team-one__title"><a href="{{url('drProfile/'.$doctor->id)}}">{{$doctor->name}}</a></h3><!-- /.team-one__title -->
                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->
                            <a href="{{url('drProfile/'.$doctor->id)}}" class="team-one__link">Know More</a>
                        </div><!-- /.team-one__hover -->
                    </div><!-- /.team-one__image -->
                    <div class="team-one__content">
                        <h3 class="team-one__title"><a href="{{url('drProfile/'.$doctor->id)}}">{{$doctor->name}}</a></h3><!-- /.team-one__title -->
                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->
                    </div><!-- /.team-one__content -->
                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-3 -->

            @endforeach
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-2.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Herman Pegelow</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                            <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Herman Pegelow</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-3.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Sherrie Onks</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                            <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Sherrie Onks</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-4.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Dolores Broussard</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                            <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Dolores Broussard</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-2.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Herman Pegelow</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                            <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Herman Pegelow</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-3.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Sherrie Onks</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                            <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Sherrie Onks</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-4.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Dolores Broussard</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                            <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Dolores Broussard</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__image">--}}
{{--                        <img src="images/team/team-1-4.jpg" alt="Awesome Image" />--}}
{{--                        <div class="team-one__hover">--}}
{{--                            <h3 class="team-one__title"><a href="{{url('drProfile')}}">Dolores Broussard</a></h3><!-- /.team-one__title -->--}}
{{--                            <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                        <a href="{{url('drProfile')}}" class="team-one__link">Know More</a>--}}
{{--                        </div><!-- /.team-one__hover -->--}}
{{--                    </div><!-- /.team-one__image -->--}}
{{--                    <div class="team-one__content">--}}
{{--                        <h3 class="team-one__title"><a href="{{url('drProfile')}}">Dolores Broussard</a></h3><!-- /.team-one__title -->--}}
{{--                        <p class="team-one__designation">Dental Surgeon</p><!-- /.team-one__designation -->--}}
{{--                    </div><!-- /.team-one__content -->--}}
{{--                </div><!-- /.team-one__single -->--}}
{{--            </div><!-- /.col-lg-3 -->--}}
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one -->

@include('front.layouts.cat_two')

@endsection
