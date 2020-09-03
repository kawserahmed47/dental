@extends('front.master')
@section('content')

<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title">Blog</h2>
        <ul class="thm-breadcrumb">
        <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="{{url('/')}}">Home</a></li>
        <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="{{url('/blogs')}}">Blog</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="blog-details.html">Blog Details</a></li>
        </ul>
    </div>
</section>


<section class="blog-two mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-two__single">
                    <div class="blog-two__image">
                        <img src="{{asset('public/storage/blog/'.$blogs->image)}}" alt="Awesome Image" />
                        <div class="blog-two__date">
                            <span class="blog-two__date-number">{{date('d',strtotime( $blogs->updated_at))}}</span>
                            {{date('F',strtotime( $blogs->updated_at))}}
                        </div><!-- /.blog-two__date -->
                    </div><!-- /.blog-two__image -->

                    <h2 class="blog-two__title mt-3">{{$blogs->name}}</h2><!-- /.blog-two__title -->
                    <p class="blog-two__text"> {{$blogs->about}}</p><!-- /.blog-two__text -->
                    <br>
{{--                    <h3 class="blog-two__sub-title">Two Column Text Sample</h3><!-- /.blog-two__sub-title -->--}}
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="blog-two__text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod max ime placeat facere possimus, omnis voluptas assumenda est.</p>
                            <br>
                        </div><!-- /.col-lg-6 -->

                    </div><!-- /.row -->
                    <p class="blog-two__text">Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat here is link cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><!-- /.blog-two__text -->
                </div>




                {{-- Done From Up --}}

            </div>



        </div>
    </div>
</section>

@endsection



