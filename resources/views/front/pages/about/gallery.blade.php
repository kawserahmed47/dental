@extends('front.master')
@section('title','Contact')
@push('css')
@endpush
@section('content')
    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Gallery</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="about.html">About Us</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="gallery.blade.php">Gallery</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <br><br>
    <div class="section">
        <div class="container">
        <div class="container-fluid">
            <div class="block-title text-left text-center">
                <h2 class="block-title__title">Gallaries</h2>
                <p class="block-title__text">This is our Gallaries. Find us for better service.</p>
            </div><!-- /.block-title -->
            <div class="row">

                @foreach ($galleries as $gallery)
                <div class="col-md-4 p-2">
                    <div class="card" style="width: 18rem; ">
                    <img class="card-img-top" style="height:200px" src="{{$gallery->image}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title text-center">{{$gallery->name}}</h5>
                        {{-- <p class="card-text">{{$gallery->about}}</p> --}}
                        </div>
                    </div>
                </div>
                                   
                @endforeach

                
            </div>
            {{ $galleries->links() }}
        </div>
    </div>
    </div>
<br>
  @include('front.layouts.cat_two')
@endsection

@push('js')

@endpush