@extends('front.master')
@push('css')
@endpush

@section('content')
{{--<section class="inner-banner">--}}
{{--    <div class="container">--}}
{{--        <h2 class="inner-banner__title">Services</h2><!-- /.inner-banner__title -->--}}
{{--        <ul class="thm-breadcrumb">--}}
{{--            <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>--}}
{{--            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="service-1.blade.php">Services</a></li>--}}
{{--        </ul><!-- /.thm-breadcrumb -->--}}
{{--    </div><!-- /.container -->--}}
{{--</section><!-- /.inner-banner -->--}}

    @include('front.layouts.service_one')
{{--    @include('front.layouts.cat_two')--}}

@endsection

@push('js')
@endpush



