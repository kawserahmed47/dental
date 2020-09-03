
<section class="service-two">
    <div class="container">
        <div class="block-title text-left text-center">
            <h2 class="block-title__title">Symptoms &amp; Treatments</h2>
            <p class="block-title__text">For the greater part of us, our house isn't only a place, it's the place we bring up our kids,</p>
        </div><!-- /.block-title -->
        <div class="row">

@foreach($services as $service)
            <div class="col-lg-3">
                <div class="service-two__single">
                    <div class="service-two__image">
                        <img src="{{asset('public/storage/service/'.$service->image)}}" alt="Awesome Image">
                        <div class="service-two__image-hover">
                        <a href="{{url('serviceDetails/'.$service->id)}}"><i class="fa fa-link"></i></a>
                        </div><!-- /.service-two__image-hover -->
                    </div><!-- /.service-two__image -->
                    <div class="service-two__content">
                        <h3 class="service-two__title"><a href="{{url('serviceDetails/'.$service->id)}}">{{$service->name}}</a></h3><!-- /.service-two__title -->
                        <p class="service-two__text">{{$service->about}}</p><!-- /.service-two__text -->
                        <a href="{{url('serviceDetails/'.$service->id)}}" class="service-two__link">Read More</a>
                    </div><!-- /.service-two__content -->
                </div><!-- /.service-two__single -->
            </div><!-- /.col-lg-3 -->

@endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
