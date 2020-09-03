
@extends('front.master')
@section('content')
<!-- The Modal -->
<div class="modal fade  mt-5" id="myModal1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <section class=" mt-5" id="appointment">
            <div class="container">
                <div class="inner-container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="appointment-one__content">
                                <h3 class="appointment-one__title">Give your valuable <br> Opinion !</h3><!-- /.appointment-one__title -->
                                <p class="appointment-one__text">How was your experience with us? <br>Share with all. <br>Thanks for connecting with us.</p><!-- /.appointment-one__text -->
                            </div><!-- /.appointment-one__content -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-7">

                            <form class="" action="{{route('insertComment')}}" method="POST">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name"><br>
                                        <input type="text" class="form-control" name="email" placeholder="Email Address"><br>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"><br>
                                        <textarea placeholder="Message" class="form-control" name="message"></textarea><br>
                                        <button type="submit" class="thm-btn ">Submit Now</button>
                                    </div>

                                </div><!-- /.row -->
                            </form>
                        </div><!-- /.col-lg-7 -->

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



    @include('front.layouts.slider')
    @include('front.layouts.cat_two')
    @include('front.layouts.service_one')
    @include('front.layouts.doctor_one')
    @include('front.layouts.cta_one')
    @include('front.layouts.about_one')
    @include('front.layouts.feature_one')
    @include('front.layouts.testimonials_one')
    @include('front.layouts.appointment_one')
{{--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__home" allowfullscreen></iframe>--}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d456.0625296242211!2d90.38638120490855!3d23.87187401790983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1598179459505!5m2!1sen!2sbd" width="1500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
@endsection

@section('extraJS')
    <script>
        $(document).ready(function(){

            $('#home').click(function(){
                // alert("Test Jquery");
              //  $('li a').removeClass("current");
                $(this).addClass("current");
            }) ;
        });
    </script>
@endsection
