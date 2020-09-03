<div class="banner-wrapper">
    <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel banner-one__home-four">

       @foreach($sliders as $key=>$slider)
        <div class="item">
            <div class="banner-one__slide banner-one__slide-one" style="background-image: url('{{asset('public/storage/slider/'.$slider->image)}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <span class="banner-one__tag-line " style="color: blanchedalmond;">{{$slider->subtitle}}</span>
                            <h3 class="banner-one__title " style="color: #fff;">{{$slider->title}}</h3>
                            <div class="banner-one__btn-block">
                            <a href="{{route('allServices')}}" class="thm-btn banner-one__btn">View our services</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.banner-one__slide -->
        </div><!-- /.item -->
       @endforeach

    </section><!-- /.banner-one -->
    <div class="carousel-btn-block banner-carousel-btn">
        <span class="carousel-btn left-btn"><i class="fa fa-angle-left"></i></span>
        <span class="carousel-btn right-btn"><i class="fa fa-angle-right"></i></span>
    </div><!-- /.carousel-btn-block banner-carousel-btn -->
</div><!-- /.banner-wrapper -->
