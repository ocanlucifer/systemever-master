@extends('systemever/layouts/main', [
    'spesifice_page_seo' => $spesifice_page_seo
])

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset_to_webp(asset('assets/img/portrait-woman-customer-service-worker.png')) }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            {{-- <h1>{{ stringlang('How can we help you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p> --}}
            <h1>{{ stringlang('One Page ERP for Small Medium Enterprises', 'One Page ERP untuk Usaha Kecil dan Menengah Anda') }}</h1>
            <p>{{ stringlang('Running your business now easier with SystemEver', 'menjalankan bisnis anda kini lebih mudah dengan SystemEver') }}</p>
        </div>
    </div>
</section>
@include('systemever/includes/breadcrumbs')
@yield('content_services')
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')


@endsection