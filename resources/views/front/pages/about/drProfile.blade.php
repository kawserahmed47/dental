
@extends('front.master')

@section('title','Contact')


@push('css')

@endpush

@section('content')

    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Doctor Details</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="about.html">About Us</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="team-details.html">{{$doctor->name}}</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="doctor-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="doctor-two__image">
                        <img src="{{asset('public/storage/doctorinfo/'.$doctor->image)}}" alt="Awesome Image"/>
                    </div><!-- /.doctor-two__image -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="doctor-two__content">
                        <h2 class="doctor-two__title">{{$doctor->name}}</h2><!-- /.doctor-two__title -->
{{--                        <p class="doctor-two__tag-line">18 years experience in Dentistry</p><!-- /.doctor-two__tag-line -->--}}
                        <p class="doctor-two__text">{{$doctor->about}} </p><!-- /.doctor-two__text -->
                        <h2 class="doctor-two__sub-title">About</h2><!-- /.doctor-two__sub-title -->
                        <p class="doctor-two__text"> {!! html_entity_decode($doctor->description) !!} </p><!-- /.doctor-two__text -->
{{--                        <a href="#" class="doctor-two__btn">--}}
{{--                            <img src="{{asset('/')}}public/front/images/resources/pdf-icon.png" alt="Awesome Image" class="doctor-two__btn-icon-one" />--}}
{{--                            <span class="doctor-two__btn-title">Download PDF file</span>--}}
{{--                            <span class="doctor-two__btn-tag">Document size : 47 kb</span>--}}
{{--                            <img src="{{asset('/')}}public/front/images/resources/download-icon-1-1.png" alt="Awesome Image" class="doctor-two__btn-icon-two"/>--}}
{{--                        </a>--}}
                    </div><!-- /.doctor-two__content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.doctor-two -->

    {{-- <section class="cta-two">
        <div class="container">
            <h2 class="cta-two__title">Have Dental Problem : Call us at <a href="tel:1800-685-4321" class="cta-two__highlight">1800 456
                    7890</a> or make an <a href="contact.html"
                                           class="cta-two__highlight cta-two__link">Appointment</a></h2><!-- /.cta-two__title -->
        </div><!-- /.container -->
    </section><!-- /.cta-two --> --}}

    @include('front.layouts.cat_two')

@endsection

@push('js')

@endpush
