@extends('front.master')
@section('content')

  <section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title">Smile Makeover</h2><!-- /.inner-banner__title -->
                <ul class="thm-breadcrumb">
                    <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                    <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="service-1.html">Services</a></li>
                    <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="smile-makeover.html">Smile Makeover</a></li>
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
                                    @foreach ($services as $service)
                                    <li class="service-sidebar__list-item">
                                    <a href="{{route('serviceDetails',$service->id)}}" class="service-sidebar__list-link">{{$service->name}}</a>
                                    </li><!-- /.service-sidebar__list-item -->
                                        
                                    @endforeach
                                 
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
                        <div class="service-details__content">
                            <div class="service-details__image">
                                <img  src="{{asset('public/storage/service/post/'.$servicedetails->image)}}" alt="Awesome Image" />
                            </div><!-- /.service-details__image -->
                            <h3 class="service-details__title">{{$servicedetails->name}}</h3><!-- /.service-details__title -->
                            <p class="service-details__text">{{$servicedetails->about}}</p><!-- /.service-details__text -->
                            <p class="service-details__text">{!! html_entity_decode($servicedetails->description) !!}</p><!-- /.service-details__text -->

                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-lg-9 -->








                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->



@include('front.layouts.cat_two')
@endsection
