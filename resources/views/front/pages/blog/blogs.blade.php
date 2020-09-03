@extends('front.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title">Blog</h2><!-- /.inner-banner__title -->
        <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="blog.html">Blog</a></li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="blog-two blog-two__two-col">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img  src="{{asset('public/storage/blog/'.$blog->image)}}" alt="Awesome Image" />
                                <div class="blog-two__date">
                                <span class="blog-two__date-number">{{date('d',strtotime( $blog->updated_at))}}</span>
                                {{date('F',strtotime( $blog->updated_at))}}
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <div style="height: 150px;">
                                <h2 class="blog-two__title mt-3"><a href="{{url('/blogDetails')}}">{{$blog->name}} </a></h2><!-- /.blog-two__title -->
                                <p class="blog-two__text">{{$blog->about}}</p><!-- /.blog-two__text -->
                            </div>
                           
                            <a href="{{url('blogDetails/'.$blog->id)}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                  @endforeach
                </div><!-- /.row -->
                <div class="post-pagination">
                    {{ $blogs->links() }}
                    {{-- <a href="#" class="post-pagination__link current">1</a>
                    <a href="#" class="post-pagination__link">2</a>
                    <a href="#" class="post-pagination__link"><i class="fa fa-angle-right"></i></a> --}}
                </div><!-- /.post-pagination -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-two -->





@endsection
