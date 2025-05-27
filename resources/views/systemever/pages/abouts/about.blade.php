@extends('systemever/layouts/main', ['spesifice_page_seo' => $spesifice_page_seo])

@section('custom_css')

@endsection
@section('content')
<!-- <section class="section-banner-full mb-lg-3 position-relative">
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
</section> -->
<!-- <div class="pt-5"></div> -->
@include('systemever/includes/breadcrumbs')
<section>
    <div class="container-content">
        <div class="d-flex newbanner flex-column-reverse flex-lg-row">
            <div class="w-lg-50 d-flex gap-3 flex-column justify-content-center pr-lg-5">
                @if (!empty($main_banner_title))
                <h1>{{ $main_banner_title }}</h1>
                @else
                <h1>{{ stringlang("About", "Tentang Kami", "회사소개") }}</h1>
                @endif

                @if (!empty($main_banner_text))
                <h1>{{ $main_banner_text }}</h1>
                @else
                <p>
                    {!! stringlang("With 30 years of experience, we successfully provide a feature rich and useful business software. We provide a solution for small and mid sized distributors and manufacturer because we believe that every business should be grow.",
                    "Dengan pengalaman selama 30 tahun, kami berhasil menyediakan perangkat lunak bisnis yang kaya fitur dan bermanfaat. Kami menyediakan solusi untuk distributor dan produsen skala kecil dan menengah karena kami percaya bahwa setiap bisnis harus berkembang.",
                    "30년의 경험을 바탕으로  풍부한 기능과  유용한 비즈니스 소프트웨어를 성공적으로 제공합니다. 모든 비즈니스의 성장을 믿기에 중소 규모 유통업체 및 제조업체를 위한 솔루션을 제공합니다.") !!}
                </p>
                @endif
            </div>
            <div class="w-lg-50">
                @if (!empty($main_banner))
                <img src="{{uri($main_banner)}}" alt="{{ $main_banner_title }}">
                @else
                <img src="{{ asset('assets/img/banner-about.png') }}" alt="{{ $main_banner_title }}">
                @endif
            </div>
        </div>
    </div>
</section>
<section class="section-menu-about mt-5 mb-5">
    <div class="container">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="list-unstyled menu-about d-flex justify-content-center">
                <li><a class="{{ Request::segment(3) == 'indonesia-branch' ? 'active':'' }} {{ Request::segment(2) == 'indonesia-branch' ? 'active':'' }}" href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang("Indonesia Branch", "Cabang Indonesia", "인도네시아 법인") }} </a></li>
                <li><a class="{{ Request::segment(3) == 'system-ever' ? 'active':'' }} {{ Request::segment(2) == 'system-ever' ? 'active':'' }}" href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a></li>
                <li><a class="{{ Request::segment(3) == 'history' ? 'active':'' }} {{ Request::segment(2) == 'history' ? 'active':'' }}" href="{{ route('get.pages.abouts.history') }}">{{ stringlang("History", "Sejarah", "연혁") }} </a></li>

                {{-- <li><a class="{{ Request::segment(1) == 'en' ? Request::segment(3) == 'indonesia-branch' ? 'active':'' : Request::segment(2) == 'indonesia-branch' ? 'active':'' }}" href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang("Indonesia Branch", "Cabang Indonesia", "인도네시아 법인") }} </a></li>
                <li><a class="{{ Request::segment(1) == 'en' ? Request::segment(3) == 'system-ever' ? 'active':'' : Request::segment(2) == 'system-ever' ? 'active':'' }}" href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a></li>
                <li><a class="{{ Request::segment(1) == 'en' ? Request::segment(3) == 'history' ? 'active':'' :  Request::segment(2) == 'history' ? 'active':'' }}" href="{{ route('get.pages.abouts.history') }}">{{ stringlang("History", "Sejarah", "연혁") }} </a></li> --}}
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
