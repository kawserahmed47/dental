@extends('front.master')
@push('css')
@endpush

@section('content')


    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Contact Us</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="contact.html">Contact Us</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->

    
    <section class="contact-one contact-one__contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="block-title">
                        <h2 class="block-title__title">Complains or Opinion</h2><!-- /.block-title__title -->
                        <p class="block-title__text">To make an complain and give any suggestion, please complete the form available on this page. Otherwise, we welcome you to contact our scheduling coordinator directly during our normal office hours.</p><!-- /.block-title__text -->
                    </div><!-- /.block-title -->
                <form action="{{route('insertComment')}}" method="POST"  class="contact-one__form contact-form-validated">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Full Name">
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <input type="text" name="email" placeholder="Email Address">
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <input type="text" name="phone" placeholder="Phone">
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <textarea placeholder="Message" name="message"></textarea>
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn">Submit Now</button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-7 -->
                <div class="col-lg-5 ">
                    <div class="contact-one__page-content">
                        <h2 class="contact-one__page-title">Our Address</h2><!-- /.contact-one__page-title -->
                        <p class="contact-one__page-text">Find us following the address. Professionally cultivate one-to-one customer service.</p><!-- /.contact-one__page-text -->
                        <div class="contact-one__page-widget">
                            <i class="contact-one__page-widget__icon icon icon-Pointer"></i>
                            <h3 class="contact-one__page-widget__title">Address :</h3><!-- /.contact-one__page-widget__title -->
                            <p class="contact-one__page-widget__text">House #3, Road #16, Sector #13, Uttara, Dhaka-1230</p><!-- /.contact-one__page-widget__text -->
                        </div><!-- /.contact-one__page-widget -->
                        <div class="contact-one__page-widget">
                            <i class="contact-one__page-widget__icon icon icon-Phone2"></i>
                            <h3 class="contact-one__page-widget__title">Phone :</h3><!-- /.contact-one__page-widget__title -->
                            <p class="contact-one__page-widget__text"><a href="tel:01925612141">01925612141</a></p><!-- /.contact-one__page-widget__text -->
                        </div><!-- /.contact-one__page-widget -->
                        <div class="contact-one__page-widget">
                            <i class="contact-one__page-widget__icon icon icon-Plaine"></i>
                            <h3 class="contact-one__page-widget__title">Email : </h3><!-- /.contact-one__page-widget__title -->
                            <p class="contact-one__page-widget__text"><a href="mailto:dental1@gmail.com">dental1@gmail.com</a></p><!-- /.contact-one__page-widget__text -->
                        </div><!-- /.contact-one__page-widget -->
                        <div class="contact-one__page-widget">
                            <i class="contact-one__page-widget__icon icon icon-Timer"></i>
                            <h3 class="contact-one__page-widget__title">Visiting Hours</h3><!-- /.contact-one__page-widget__title -->
                            <p class="contact-one__page-widget__text">Tuesday – Friday 7:00am – 3:30pm <br>Monday and Saturday 9:00am – 1:30pm</p><!-- /.contact-one__page-widget__text -->
                        </div><!-- /.contact-one__page-widget -->
                    </div><!-- /.contact-one__page-content -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <section class="contact-map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d456.0625296242211!2d90.38638120490855!3d23.87187401790983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1598179459505!5m2!1sen!2sbd" class="google-map__home" allowfullscreen></iframe>
        </div><!-- /.container -->
    </section><!-- /.contact-map -->


@endsection

@push('js')

@endpush
