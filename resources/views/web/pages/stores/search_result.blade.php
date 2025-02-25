@extends('frontend/layouts/main')

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
    <section class="section-store position-relative pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 back mb-5 pt-5">
                    <a href="{{ url('frontend/store/store-mitra') }}"><i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-9 title-pages">
                    <h1>Store Bakpia Tugu</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 px-lg-3 px-mb-3 px-sm-0 px-0 banner-about">
                    <img src="{{ asset('assets/img/banner-store.svg') }}" alt="">
                </div>
            </div>
            @include('frontend/pages/stores/menu-store')
            <div class="row px-md-0 px-sm-0 px-3">
                <div class="col-lg-12 mb-5">
                    <div class="result">Hasil Pencarian untuk : "Malioboro"</div>
                </div>
            </div>
            <div class="row px-lg-0 px-md-0 px-sm-0 px-3 mb-3">
                @foreach ($store_mitra as $item)
                <div class="col-lg-12 list-mitra pt-4">
                    <div class="row">
                        <div class="col-lg-4 nama-toko d-lg-flex d-md-flex d-sm-flex d-block justify-content-start align-items-center mb-lg-4 mb-md-4 mb-sm-4 mb-3">
                            <img class="mr-3 mb-lg-0 mb-md-0 mb-sm-0 mb-3" src="{{ asset('assets/img/shop.svg') }}" alt="">
                           <div class="box-name-toko">{{ $item['nama'] }}</div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="telp">
                                <b>Tel:</b> <a href="">{{ $item['telp'] }}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 alamat">
                            @foreach ($item['alamat'] as $value)
                                {{ $value }}<br/>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- @include('frontend/includes/pagination') --}}
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
    @include('frontend/includes/footer')
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