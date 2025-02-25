@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Solution i5 ' . activelang()
])

@section('custom_css')
<style>
.desc-erp-item ul {
    list-style-image: url('{{ uri('assets/img/Vector.svg') }}');
    padding-left:23px !important;
}
.desc-erp-item ul li {
    display: revert !important;
}
.half {
    width: 55%;
}
.list-trading-distribution ul li {
    display: revert !important;
}

@media only screen and (min-width: 480px) {
    .list-trading-distribution ul {
        list-style-image: url('{{ uri('assets/img/Vector.svg') }}');
        padding-left:23px !important;
    }

    .owl-slide-monitor .owl-item img {
        display: block;
        width: 100%;
        object-fit: cover !important;
        height: 330px !important;
    }
}
@media only screen and (max-width: 480px) {
    .list-trading-distribution ul {
        list-style-image: none !important;
        list-style: none !important;
        padding-left:0px !important;
    }

    .owl-slide-monitor .owl-item img {
        display: block;
        width: 100%;
        object-fit: cover !important;
        height: 193px !important;
    }
}
</style>
@endsection

@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ asset_to_webp(asset('assets/img/banner-solutions-1.png')) }}" alt="">
    <div class="caption-banner d-flex align-items-center">
        <div class="container">
           <div class="bg-shadow-banner"></div>
           <div class="cap-banner">
                <h1 class="half">{{$data->banner_title}}</h1>
                <p>{{$data->banner_sub_title}}</p>
                <div class="row">
                    <div class="col-lg-4 pt-lg-3 pt-md-3 pt-sm-0 pt-0">
                        <a href="{{ route('get.contact') }}"><button class="btn-oval btn-white-border btn-banner text-uppercase  mb-3"><img src="{{ asset('assets/img/play-button.svg') }}" alt="">{{ stringlang("Free Demo" , "Demo Gratis") }}</button></a>
                        <button class="btn-oval btn-white-border btn-banner text-uppercase " data-toggle="modal" data-target="#modal-download-form"><img src="{{ asset('assets/img/icon-download.svg') }}" alt="">{{ stringlang("Download Brochure", "Unduh Brosur") }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-abu d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-product" style="background-image: url('{{ asset_to_webp(asset('assets/img/skyscraper.svg')) }}')">
    <div class="bg-white-gradient overflow-hide">
        <div class="container-content">
            <div class="row">
                <div class="col-lg-5 pt-lg-5 pt-md-5 pt-sm-3 pt-4 pl-lg-5 px-4">
                    <div class="title-erp-item mb-lg-5">
                        <h3>{{$data->featured_title}}</h3>
                        <p><i>{{$data->featured_sub_title}}</i></p>
                    </div>
                    <div class="desc-erp-item mb-lg-4 mb-md-4 mb-sm-4 mb-4">
                        {!! $data->featured_sort_description !!}
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-lg-3 pr-md-3 pr-sm-2 pr-2">
                            <a href="{{ route('get.pages.pricing.integrated_erp') }}" class="btn-oval btn-view-detail btn-white-green w-100 btn-block">{{ stringlang('Check Price', 'Cek Harga') }}</a>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 pl-lg-3 pl-md-3 pl-sm-2 pl-2">
                            <a href="{{ route('get.contact') }}"><button class="btn-oval btn-view-detail btn-white-green mb-lg-4 w-100">{{ stringlang("Free Demo" , "Demo Gratis") }}</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pt-4 px-0 position-relative">
                    {{-- <div class="img-latar">
                        <img src="{{ asset('assets/img/Ellipse-solutions.svg') }}" alt="">
                    </div> --}}
                    <div class="img-product">
                        <img src="{{ asset_to_webp(asset('assets/img/img-product-group.png')) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-i-series pt-5">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-5 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <h3>{{ stringlang('i-Series Integrated Modules', 'Module Terintegrasi i-Series') }}</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center mb-5">
           <div class="col-lg-11 d-flex justify-content-center align-items-center">
               <div class="line-title"></div>
               <div class="title">{{ stringlang('i5 TRADING & DISTRIBUTION', 'SystemEver i5 PERDAGANGAN & DISTRIBUSI') }}</div>
               <div class="line-title"></div>
           </div>
        </div>
        <div class="row row-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start pb-5">
            @foreach ($integrated as $v)
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="">
                    <h4>{{ $v->title }}</h4>
                    {!! $v->feature !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-sparator-green section-in-solutions">
    <div class="container">
        <div class="row d-flex justify-content-center py-lg-5 py-md-5 py-sm-3 py-3">
            <div class="col-lg-12 text-center">
                <h2>{{ stringlang('Who Need It?', 'Siapa yang Membutuhkan SystemEver i5 Perdagangan & Distribusi?')}} </h2>
                <p class="text-center">{{$data->who_need_sub_title}}</p>
            </div>
        </div>
    </div>
</section>
<section class="section-basic-plan section-in-solutions" style="background-image: url('{{ asset_to_webp(asset('assets/img/Rectangle393.png')) }}')">
    <div class="bg-basic-plan pb-lg-5 pb-mb-5 pb-sm-3 pb-3" style="background-image: url('{{ asset_to_webp(asset('assets/img/Rectangle435.png')) }}')">
       <div class="container-content">
           <div class="row py-lg-5 py-md-5 py-sm-4 py-4">
                <div class="col-lg-12 text-center">
                    <h2>{{ stringlang('Basic Plan', 'Paket Dasar') }}</h2>
                </div>
           </div>
           <div class="row">
               <div class="col-md-7 col-sm-12 col-12 px-lg-3 px-md-3 px-sm-4 px-4">
                    <div class="monitor-slide position-relative" style="background-image:url({{ asset_to_webp(asset('assets/img/monitor.png')) }})">
                        <div class="box-slide position-absolute">
                            <div class="owl-carousel owl-slide-monitor owl-theme">
                                @foreach($basic_banner as $v)
                                <div class="item">
                                    <img src="{{ asset_to_webp(uri($v->icon)) }}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="d-flex flex-column box-list-basic-plan pl-lg-5 pl-sm-5 pl-sm-0 pl-0">
                        @foreach($basic_plan as $v)
                        <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                            <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                <img src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="">
                                <div class="body-list-basic-plan">
                                    {{ $v->description }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
<section class="section-industry section-in-solutions py-lg-5 py-md-5 py-sm-3 py-3">
    <div class="container container px-3 px-md-5">
        <div class="row">
            <div class="col-lg-12 text-center mb-lg-5 mb-md-5 mb-sm-3 mb-3">
                <h2>{{ stringlang('Applicable Industries', 'Industri yang dapat menggunakan SystemEver i5 Penjualan & Distribusi') }}</h2>
            </div>
        </div>
        <div class="row row-min-7-mb">
            @foreach($bussines as $v)
            <div class="col-lg col-sm-4 col-4 mb-lg-5 mb-md-5 mb-sm-3 mb-3 padding-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start">
                <div class="item-industry">
                    <img class="mb-lg-4 mb-md-4 mb-sm-2 mb-2" src="{{ asset_to_webp(url_to_svg(uri($v->main_image))) }}" alt="">
                    {!! $v->description !!}
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{ route('get.pages.pricing.integrated_erp') }}" class="btn-oval btn-view-detail btn-block btn-white-orange m-auto">{{ stringlang("Check Price", "Cek Harga") }}</a>
            </div>
        </div>
    </div>
</section>
<section class="form-req-solutions">
    @include('systemever/includes/form_request')
</section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')
<script>
 $('.owl-slide-monitor').owlCarousel({
    loop:true,
    margin:15,
    navText:['<img src="{{ asset("assets/img/arrow-left.svg") }}" alt="">','<img src="{{ asset("assets/img/arrow-right.svg") }}" alt="">'],
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
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
    }
})
</script>
@endsection