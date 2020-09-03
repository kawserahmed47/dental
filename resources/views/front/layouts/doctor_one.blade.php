<section class="doctor-one">
    @foreach($doctors1 as $doctor)
            <div class="container">
        <img src="{{asset('public/storage/doctorinfo/'.$doctor->image)}}" class="doctor-one__person" alt="Awesome Image" />
        <div class="row no-gutters justify-content-end">
            <div class="col-lg-7">
                <div class="doctor-one__content">
{{--                    <span class="doctor-one__tag-line">Meet Doctor</span>--}}
                    <h3 class="doctor-one__title">{{$doctor->name}}</h3><!-- /.doctor-one__title -->
                    <p class="doctor-one__text">{{$doctor->about}}</p>
{{--                    <p class="doctor-one__text">Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry. Our Clinic has grown to provide a world class facility for the treatment of tooth loss.</p><!-- /.doctor-one__text -->--}}
                </div><!-- /.doctor-one__content -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
        @endforeach
</section><!-- /.doctor-one -->

