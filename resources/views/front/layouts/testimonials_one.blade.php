<section class="testimonials-one">
    <div class="container">
        <div class="block-title text-center">
            <h2 class="block-title__title block-title__lite-color">Our Happy Patient's Opinion!</h2>
            <a class="btn btn-outline-light" href="#" data-toggle="modal" data-target="#myModal1">Give your opinion</a><br>
            <div class="block-title__line block-title__lite-bg"></div><!-- /.block-title__line -->
        </div><!-- /.block-title -->
        <div class="testimonials-one__carousel owl-carousel owl-theme">
            @if ($comments)
            @foreach ($comments as $comment)
                <div class="item">
                    <div class="testimonials-one__single" style="height: 400px;">
                        <div class="testimonials-one__image">
                            <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                        </div><!-- /.testimonials-one__image -->
                        <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">{{$comment->name}}</h3><!-- /.testimonials-one__title -->
                        {{-- <span class="testimonials-one__designation">Melborne / Australia</span> --}}
                        <p class="testimonials-one__text">{{$comment->message}}</p><!-- /.testimonials-one__text -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
            @endforeach

            @else 

            <p>No Data Found</p>
                
            @endif
           
            
{{-- 
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Pok Ruffcorn</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Truman Preite</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Laurel Yearous</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Precious Bott</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Royce Hazen</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Pablo Mckey</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Benny Osenkowski</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-one__single">
                    <div class="testimonials-one__image">
                        <img src="{{asset('/')}}public/front/images/favicon/commentImg.jpg" alt="Awesome Image" />
                    </div><!-- /.testimonials-one__image -->
                    <img src="{{asset('/')}}public/front/images/resources/testi-qoute-1-1.png" class="testimonials-one__qoute" alt="Awesome Image" />
                    <h3 class="testimonials-one__title">Dominque Stinser</h3><!-- /.testimonials-one__title -->
                    <span class="testimonials-one__designation">Melborne / Australia</span>
                    <p class="testimonials-one__text">Override the digital divide with ad- ditional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p><!-- /.testimonials-one__text -->
                </div><!-- /.testimonials-one__single -->
            </div><!-- /.item --> --}}


        </div><!-- /.testimonials-one__carousel -->
    </div><!-- /.container -->
</section><!-- /.testimonials-one -->
