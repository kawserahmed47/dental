@extends('front.master')
@push('css')

@endpush

@section('content')
    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Scheduling</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="{{route('index')}}">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="#">Schedules</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="{{route('schedules')}}">Schedules</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-sidebar">
                        <div class="service-sidebar__single">
                            <ul class="service-sidebar__list">
                                <li class="service-sidebar__list-item ">
                                <a href="{{route('doctorSchedules')}}" class="service-sidebar__list-link">Doctors' Schedules</a>
                                </li><!-- /.service-sidebar__list-item -->
                                <li class="service-sidebar__list-item current">
                                    <a href="{{route('schedules')}}" class="service-sidebar__list-link">Patients' Schedules</a>
                                </li><!-- /.service-sidebar__list-item -->
                            </ul><!-- /.service-sidebar__list -->
                        </div><!-- /.service-sidebar__single -->
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__cta">
                                <h3 class="service-sidebar__cta-title">Teeth Whitening</h3><!-- /.service-sidebar__cta-title -->
                                <p class="service-sidebar__cta-text">Offer Availaable for Whitening Teeth only at <span class="highlighted">BDT 500</span></p><!-- /.service-sidebar__cta-text -->
                                <a href="{{route('contact')}}" class="thm-btn">Contact Us</a>
                            </div><!-- /.service-sidebar__cta -->
                        </div><!-- /.service-sidebar__single -->
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__contact">
                                <p class="service-sidebar__contact-text"><i class="fa fa-phone"></i><a href="teL:+8801925612141" class="service-sidebar__contact-highlight">+8801925612141</a></p><!-- /.service-sidebar__contact-text -->
                                <p class="service-sidebar__contact-text"><i class="fa fa-paper-plane"></i><a href="mailto:dental1@gmail.com">dental1@gmail.com</a></p><!-- /.service-sidebar__contact-text -->
                            </div><!-- /.service-sidebar__contact -->
                        </div><!-- /.service-sidebar__single -->
                    </div><!-- /.service-sidebar -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-9">
                    <div class="patient-content">
                        <h1>Todays Schedules</h1>
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>Patient Name</td>
                                <td>Phone <span>(1st 8 Digits)</span> </td>
                                <td>Gender <span>(Age)</span></td>
                                <td>Date</td>
                                <td>Time</td>
                            
            
                            </tr>
                            @if($appointments!="")
                            @foreach ($appointments as $key=>$appointment)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$appointment->fname}}  {{$appointment->lname}}</td>
                                <td>{{substr($appointment->phone,0,8)}}</td>
                                <td>{{$appointment->gender}} ({{$appointment->age}})</td>
                                <td>{{$appointment->s_date}}</td>
                                <td>{{$appointment->s_time}}</td>
                            </tr>
            
                                
                            @endforeach

                            @else
                            <tr>
                                <td colspan="6" class="text-center">There are no Schedule</td>
                            </tr>
                            @endif
            
                        </table>
                    </div><!-- /.patient-content -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details -->
    @include('front.layouts.cat_two')

@endsection

@push('js')

@endpush






