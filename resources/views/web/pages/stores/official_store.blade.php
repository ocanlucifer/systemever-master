@extends('web/layouts/main')

@section('custom_css')

@endsection

@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - Store") }}</title>
    @if (!empty($seo->description))
    <meta name="description" content="{{ $seo->description }}" itemprop="description" />
    @endif
    @if (!empty($seo->keyword))
    <meta name="keywords" content="{{ $seo->keyword }}" itemprop="keywords" />
    @endif
    @if (!empty($seo->title))
    <meta property="og:title" content="{{$seo->title}}" />
    @endif
    <meta property="og:image" content="{{ asset("assets/img/logo.png") }}" />
    @if (!empty($seo->description))
    <meta property="og:description" content="{{ $seo->description }}" />
    @endif
    <meta property="og:url" content="{{ $url }}" />
@endsection

@section('content')
<div class="bg-gading">
    @include('web/includes/breadcrumbs')
    <section class="section-store position-relative">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-9 title-pages">
                    <h1>Store Bakpia Tugu</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 px-lg-3 px-mb-3 px-sm-0 px-0 banner-about">
                    <img src="{{ asset('assets/img/banner-store.svg') }}" class="s-rounded" alt="">
                </div>
            </div>
            @include('web/pages/stores/menu-store')
            <div class="row">
                @foreach ($store as $v)
                <div class="col-lg-6 px-lg-3 px-md-3 px-sm-3 px-5 mb-5">
                    <div class="media media-store">
                        <img class="mr-3 mb-lg-0 mb-md-0 mb-sm-0 mb-3 s-rounded" src="{{ uri($v->featured_image) }}" alt="">
                        <div class="media-body pl-3">
                            <h5 class="mt-0">{{ $v->name }}</h5>
                            <address>
                                {{ $v->address }}
                            </address>
                            <div class="telp mb-2"><b>Tel:</b> <a href="tel:{{$v->phone}}">{{ $v->phone }}</a></div>
                            <div class="office-hour mb-2">
                                @if (activelang() == "ID")
                                <b>Jam Operasional:</b><br/>
                                
                                Hari Kerja : {{ $v->operating_hours_weekday }}<br/>
                                Akhir Pekan : {{ $v->operating_hours_weekend }}<br/>
                                Libur Nasional : {{ $v->operating_hours_ph }}
                                @else 
                                <b>Operating Hours:</b><br/>
                                
                                Weekday : {{ $v->operating_hours_weekday }}<br/>
                                Weekend : {{ $v->operating_hours_weekend }}<br/>
                                PH : {{ $v->operating_hours_ph }}
                                @endif
                            </div>
                            <a href="{{ $v->google_map }}" target="_blank" class="map">
                                @if (activelang() == "ID")
                                Klik disini untuk melihat di Google Map >>
                                @else 
                                Click here to view on Google Map >>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="vektor-store position-absolute">
            <img src="{{ asset('assets/img/Vector-store-1.svg') }}" alt="">
        </div>
        <div class="vektor-store position-absolute">
            <img src="{{ asset('assets/img/Vector-store-2.svg') }}" alt="">
        </div>
        <div class="vektor-store position-absolute">
            <img src="{{ asset('assets/img/Vector-store-3.svg') }}" alt="">
        </div>
        <div class="vektor-store position-absolute">
            <img src="{{ asset('assets/img/Vector-store-1.svg') }}" alt="">
        </div>
        <div class="vektor-store position-absolute">
            <img src="{{ asset('assets/img/Vector-store-3.svg') }}" alt="">
        </div>
        <div class="vektor-store position-absolute">
            <img src="{{ asset('assets/img/Vector-store-3.svg') }}" alt="">
        </div>
    </section>
</div>

@endsection

@section('footer')
<div class="bg-gading">
    @include('web/includes/footer')
</div>
@endsection

@section('custom_js')
<script>
    var controller = new ScrollMagic.Controller();
    $(".section-store").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-store");
        tl.to(child, 1, { y: -100, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "100%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
</script>
@endsection