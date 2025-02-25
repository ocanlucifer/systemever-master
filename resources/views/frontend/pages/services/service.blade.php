@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help<br/> you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
@yield('content_services')
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')


@endsection