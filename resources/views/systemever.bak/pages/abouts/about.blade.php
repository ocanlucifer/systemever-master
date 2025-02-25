@extends('systemever/layouts/main', ['spesifice_page_seo' => $spesifice_page_seo])

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    @if (!empty($main_banner))
        <img src="{{uri($main_banner)}}" alt="{{ $main_banner_title }}">
    @else 
        <img src="{{ asset('assets/img/banner-about.png') }}" alt="{{ $main_banner_title }}">
    @endif
    <div class="caption-banner d-flex align-items-center">
        <div class="container">
            @if (!empty($main_banner_title))
            <h1>{{ $main_banner_title }}</h1>
            @else
            <h1>{{ stringlang("About", "Tentang Kami") }}</h1>
            @endif
        </div>
    </div>
</section>
@include('systemever/includes/breadcrumbs')
<section class="section-menu-about mt-5 mb-5">
    <div class="container">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="list-unstyled menu-about d-flex justify-content-center">
                <li><a class="{{ Request::segment(1) == 'en' ? Request::segment(3) == 'indonesia-branch' ? 'active':'' : Request::segment(2) == 'indonesia-branch' ? 'active':'' }}" href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang("Indonesia Branch", "Cabang Indonesia") }} </a></li>
                <li><a class="{{ Request::segment(1) == 'en' ? Request::segment(3) == 'system-ever' ? 'active':'' : Request::segment(2) == 'system-ever' ? 'active':'' }}" href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a></li>
                <li><a class="{{ Request::segment(1) == 'en' ? Request::segment(3) == 'history' ? 'active':'' :  Request::segment(2) == 'history' ? 'active':'' }}" href="{{ route('get.pages.abouts.history') }}">{{ stringlang("History", "Sejarah") }} </a></li>
            </ul>
        </div>
    </div>
</section>
@yield('content_about')
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')

@endsection