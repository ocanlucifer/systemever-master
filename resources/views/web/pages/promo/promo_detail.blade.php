@extends('web/layouts/main')

@section('custom_css')

@endsection

@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - " . $promo->title) }}</title>
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
    <section class="section-article pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-9 title-pages">
                    <h1>Promo</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-4">
                    <div class="bg-white">
                        <div class="owl-carousel promo-owl owl-theme mb-4">
                            <div class="item"><a href="{{ $promo->url }}" target="_blank"><img src="{{ uri($promo->featured_image) }}" alt="{{ $promo->title }}" class="w-100"></a></div>
                        </div>
                        <div class="desc-promo px-lg-5 px-md-5 px-sm-3 px-3 pb-4">
                            <h3>{{ $promo->title }}</h3>
                            <div>
                                {!! $promo->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-12">
                    <div class="info-promo bg-white py-4 mb-4">
                        <div class="row">
                            <div class="col-lg-6 col-6 text-center periode-minimum">
                                <img class="mb-3" src="{{ asset('assets/img/badge.svg') }}" alt="">
                                @if (activelang() == "ID")
                                <div class="label-promo mb-2">Periode Promo :</div>
                                @else 
                                <div class="label-promo mb-2">Promo Period :</div>
                                @endif

                                <div class="date-promo">{{ dateformatsimplenoyear($promo->period_start) }} - {{ dateformatsimple($promo->period_end) }}</div>
                            </div>
                            <div class="col-lg-6 col-6 text-center periode-minimum">
                                <img class="mb-3" src="{{ asset('assets/img/save-money.svg') }}" alt="">
                                @if (activelang() == "ID")
                                <div class="label-promo mb-2">Minimum Transaksi :</div>
                                @else 
                                <div class="label-promo mb-2">Minimum Transaction :</div>
                                @endif
                                
                                <div class="date-promo">Rp {{ nominal($promo->minimum_transaction) }}</div>
                            </div>
                        </div>
                    </div>
                    @if (activelang() == "ID")
                    <a href="{{ $promo->url}}" target="_blank" class="btn btn-oval btn-coklat w-100 mb-4">Beli Sekarang</a>
                    @else 
                    <a href="{{ $promo->url}}" target="_blank" class="btn btn-oval btn-coklat w-100 mb-4">Buy Now</a>
                    @endif
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled share-article d-flex align-items-center justify-content-start">
                                <li>Share :</li>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}" target="_blank"><img src="{{ asset('assets/img/share-fb.svg') }}" alt="share facebook"></a></li>
                                <li><a href="https://twitter.com/intent/tweet?url={{$url}}" target="_blank"><img src="{{ asset('assets/img/share-tw.svg') }}" alt="share twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
{{-- <script>
    $('.promo-owl').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        },
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    })
</script> --}}
@endsection