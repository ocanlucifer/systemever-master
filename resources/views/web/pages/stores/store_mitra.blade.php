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
    @if (empty(get('search')))
    @include('web/includes/breadcrumbs')
    @endif
    <section class="section-store position-relative pb-5">
        <div class="container">
            @if (!empty(get('search')))
            <div class="row">
                <div class="col-lg-12 back mb-5 pt-5">
                    <a href="{{ route('get.store.mitra') }}"><i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>
            @endif
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
            @include('web/pages/stores/menu-store')
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3">
                    <form action="">
                        <div class="input-group search-store mb-3">
                            @if (activelang() == "ID")
                            <input name="search" type="text" class="form-control txt-search" placeholder="Cari Toko dan Alamat" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ get('search') }}">
                            @else 
                            <input name="search" type="text" class="form-control txt-search" placeholder="Search Store and Location" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ get('search') }}">
                            @endif
                            <div class="input-group-append">
                            <button class="btn btn-search" type="submit"><img src="{{ asset('assets/img/search.svg') }}" alt="" style="height: 15px;">
                                @if (activelang() == "ID")
                                Cari
                                @else 
                                Search
                                @endif
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (!empty(get('search')))
            <div class="row px-md-0 px-sm-0 px-3">
                <div class="col-lg-12 mb-5">
                    @if (activelang() == "ID")
                    <div class="result">Hasil Pencarian untuk : "{{get('search')}}"</div>
                    @else 
                    <div class="result">Search Result for : "{{get('search')}}"</div>
                    @endif
                </div>
            </div>
            @endif
            <div class="row px-lg-0 px-md-0 px-sm-3 px-3 mb-3">
                @foreach ($store as $v)
                <div class="col-lg-12 list-mitra pt-4">
                    <div class="row">
                        <div class="col-lg-4 nama-toko d-lg-flex d-md-flex d-sm-flex d-block justify-content-start align-items-center mb-lg-4 mb-md-4 mb-sm-4 mb-3">
                            <img class="mr-3 mb-lg-0 mb-md-0 mb-sm-0 mb-3" src="{{ asset('assets/img/shop.svg') }}" alt="">
                           <div class="box-name-toko">{{ $v->name }}</div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="telp">
                                <b>Tel:</b> <a href="tel:{{$v->phone}}">{{ $v->phone }}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 alamat">
                            @foreach ($v->addresses as $add)
                                {{ $add->address }}<br/>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- @include('web/includes/pagination') --}}
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