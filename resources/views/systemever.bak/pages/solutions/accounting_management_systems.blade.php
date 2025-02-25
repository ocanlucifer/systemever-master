@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Solution i1 ' . activelang()
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
    
    @media only screen and (min-width: 480px) {
        .owl-slide-monitor .owl-item img {
            display: block;
            width: 100%;
            object-fit: cover !important;
            height: 318px !important;
        }
    }
    @media only screen and (max-width: 480px) {
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
    <img src="{{ asset_to_webp(asset('assets/img/banner-solutions-2.png')) }}" alt="">
    <div class="caption-banner d-flex align-items-center">
        <div class="container">
           <div class="bg-shadow-banner"></div>
           <div class="cap-banner">
                <h1>{{$data->banner_title}}</h1>
                <p>{{$data->banner_sub_title}}</p>
                <div class="row">
                    <div class="col-lg-4 pt-lg-3 pt-md-3 pt-sm-0 pt-0">
                        <a href="{{ route('get.contact') }}"><button class="btn-oval btn-white-border btn-banner text-uppercase  mb-3"><img src="{{ asset('assets/img/play-button.svg') }}" alt=""> {{ stringlang('Free Demo', 'Demo Gratis')}}</button></a>
                        <button class="btn-oval btn-white-border btn-banner text-uppercase " data-toggle="modal" data-target="#modal-download-form"><img src="{{ asset('assets/img/icon-download.svg') }}" alt=""> {{ stringlang('Download Brochure', 'Unduh Brosur')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-abu d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-choose-plan mt-4">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-5 mb-sm-4 mb-4">
            <div class="col-lg-12">
                @if (activelang() == "EN") 
                <ul class="list-unstyled nav nav-tabs menu-pricing d-lg-flex justify-content-center border-bottom-0 mb-1">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">i1 AccounTax Service&nbsp;ERP </a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Accounting & Tax <br>
                        Consulting&nbsp;Services</a></li>
                </ul>
                @else 
                <ul class="list-unstyled nav nav-tabs menu-pricing d-lg-flex justify-content-center border-bottom-0 mb-1">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">i1 AccounTax Service&nbsp;ERP  </a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Layanan Akuntansi dan<br>
                        Konsutlasi&nbsp;Pajak</a></li>
                </ul>
                @endif
            </div>
        </div>
    </div>
</section>
<div class="tab-content">
    <div class="tab-pane active" id="menu1">
        <section class="section-product" style="background-image: url('{{ asset('assets/img/skyscraper.svg') }}')">
            <div class="bg-white-gradient overflow-hide">
                <div class="container-content">
                    <div class="row ">
                        <div class="col-lg-5 pt-lg-5 pl-lg-5 px-lg-3 px-md-3 px-sm-4 px-4 mb-5">
                            <div class="title-erp-item mb-lg-5">
                                <h3>{{$data->featured_title}}</h3>
                                <p><i>{{$data->featured_sub_title}}</i></p>
                            </div>
                            <div class="desc-erp-item mb-lg-5">
                                {!! $data->featured_sort_description !!}
                            </div>
                            {{-- <a href="{{ route('get.pages.pricing.integrated_erp') }}"><button class="btn-oval btn-view-detail btn-white-green mb-lg-5">{{ stringlang("Check Price", "Cek Harga") }}</button></a> --}}
                            <a href="{{ route('get.contact') }}"><button class="btn-oval btn-view-detail btn-white-green mb-lg-5">{{ stringlang('Free Demo', 'Demo Gratis') }}</button></a>
                        </div>
                        <div class="col-lg-7 px-0 position-relative">
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
        <section class="section-sparator-green section-in-solutions">
            <div class="container">
                <div class="row d-flex justify-content-center py-lg-5 py-md-5 py-sm-4 py-4">
                    <div class="col-lg-12 px-lg-3 px-md-3 px-sm-4 px-4 text-center">
                        <h2>{{ stringlang('Who Need It?', 'Siapa yang Membutuhkan SystemEver i1 AccounTax Service?')}} </h2>
                        <p>{{$data->who_need_sub_title}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-basic-plan section-in-solutions" style="background-image: url('{{ asset_to_webp(asset('assets/img/Rectangle393.png')) }}')">
            <div class="bg-basic-plan pb-5" style="background-image: url('{{ asset_to_webp(asset('assets/img/Rectangle435.png')) }}')">
               <div class="container-content">
                   <div class="row py-lg-5 py-md-5 py-sm-4 py-4">
                        <div class="col-lg-12 text-center">
                            <h2>{{ stringlang('Basic Plan', 'Paket Dasar') }}</h2>
                        </div>
                   </div>
                   <div class="row mb-3">
                       <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3 px-sm-4 px-4">
                            <div class="monitor-slide accounting position-relative" style="background-image:url({{ asset_to_webp(asset('assets/img/monitor.png')) }})">
                                <div class="box-slide position-absolute">
                                    <div class="owl-carousel owl-slide-monitor account owl-theme">
                                        @foreach($basic_banner as $v)
                                        <div class="item">
                                            <img src="{{ uri($v->icon) }}" alt="">
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
        <section class="form-req-solutions">
            <section class="section-consultant mb-5">
                <div class="container-content">
                    <div class="row">
                        <div class="col-lg-6 box-img-consult join-us position-relative d-lg-block d-md-block d-sm-none d-none">
                            <div class="img-consultant join d-flex justify-content-end">
                                <img src="{{ asset('assets/img/img-join21.png') }}" alt="" style="position: absolute;bottom: 0px;">
                            </div>
                            <img src="{{ asset('assets/img/Ellipse26.svg') }}" alt="" class="img-dots-1 d-none">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-2">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-3">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-4">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-5">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="title-form-consultant py-lg-4 py-md-4 py-3">
                                @if (activelang() == "EN")
                                <h5>{{ stringlang('We are hiring now', 'Kami sedang mencari mitra') }}</h5>
                                <h3>{{ stringlang('Become Our Partner', 'Jadilah Mitra Kami') }}<br> <small>{{ stringlang('to get special offers!', 'untuk mendapatkan penawaran special!') }}</small></h3>
                                <p>{{ stringlang('We can help you get to know us better by', 'Kami akan membantu anda untuk lebih mengenal kami dengan') }} <br> {{ stringlang('providing steps to use SystemEver.', 'menyajikan langkah - langkah penggunaan SystemEver') }}</p>
                                @else
                                <h5>Bergabunglah menjadi Mitra Konsultan kami.</h5>
                                <h3>Mudah Mengelola Klien Anda dengan SystemEver AccounTax Service</h3>
                                <p>Kenali kami lebih dalam dan jadikan SystemEver solusi bagi klien Anda</p>
                                @endif
                                <button type="button" class="btn-oval btn-view-detail btn-contact-us btn-white-orange mt-3" data-toggle="modal" data-target="#modal-patner">{!! stringlang('Join Us', 'Bergabunglah&nbsp;Sekarang!') !!}</button>
                            </div>
                        </div>
                        <div class="col-lg-6 box-img-consult join-us position-relative d-lg-none d-md-none d-sm-block d-block">
                            <div class="img-consultant join d-flex justify-content-center">
                                <img src="{{ asset('assets/img/img-join2.png') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/Ellipse26.svg') }}" alt="" class="img-dots-1 d-none">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-2">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-3">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-4">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-5">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <div class="tab-pane fade" id="menu2">
        <section class="section-product " style="background-image: url('{{ asset('assets/img/skyscraper.svg') }}')">
            <div class="bg-white-gradient pt-lg-5 pt-md-5 pt-sm-0 pt-0 mt-lg-5 mt-md-4 mt-sm-0  mt-0  overflow-hide">
                <div class="container-content">
                    <div class="row mb-lg-5 mb-md-5 mb-sm-3 mb-3">
                        <div class="col-lg-12 box-consultant-service">
                            <h2>{{ $accounting->title }}​​</h2>
                            <p>{{ $accounting->sub_title }}​​</p>
                        </div>
                    </div>
                    <div class="row mb-lg-5 mb-md-5 mb-sm-2 mb-2">
                        <div class="col-lg-5 col-md-5 d-lg-none d-md-none d-sm-block d-block px-lg-3 px-md-3 px-sm-0 px-0">
                            <div class="img-desc-consultant">
                                <img src="{{ uri($accounting->why_ilustration) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="desc-consultant-service desc-erp-item pr-5">
                                <h3>{{ stringlang("Why Accounting & Tax Consulting Services?", "Mengapa Jasa Akuntansi & Konsultasi Pajak?") }}​</h3>
                                <ul class="list-unstyled">
                                    @foreach ($accounting->why as $v)
                                    <li>
                                        <div>{{$v->description}}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                            <div class="img-desc-consultant">
                                <img src="{{ asset_to_webp(uri($accounting->why_ilustration)) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-5 mb-md-5 mb-sm-2 mb-2">
                        <div class="col-lg-12">
                            <div class="desc-consultant-service desc-erp-item">
                                <h3>​{{ stringlang('How does it work?', 'Bagaimana cara kerjanya?') }} ​​</h3>
                                <ul class="list-unstyled">
                                    @foreach ($accounting->how as $v)
                                    <li class="mb-1">
                                        <div>{{$v->description}}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-sparator-green section-in-solutions">
            <div class="container">
                <div class="row d-flex justify-content-center py-lg-5 py-md-5 py-sm-4 py-4">
                    <div class="col-lg-12 text-center">
                        @if (activelang() == 'EN')
                        <h3>Benefits of engaging <br class="d-lg-block d-md-block d-sm-none d-none">
                            Accounting & Tax Consulting <br class="d-lg-none d-md-none d-sm-block d-block"> Services</h3>
                        @else
                        <h3>Manfaat menggunakan <br class="d-lg-block d-md-block d-sm-none d-none">
                            Jasa Konsultan Akuntansi & Pajak</h3>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="section-benefit py-5">
            <div class="container-content">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                        @foreach ($accounting->benefits as $v)
                        <div class="list-benefit d-flex justify-content-start align-items-center">
                            <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ url_to_svg(uri($v->icon)) }}" alt="">
                            <div class="body-list-benefit">
                                {{-- <h3>{{ $v->title }}​</h3>
                                <p>{{ $v->description }}</p> --}}

                                <div class="d-lg-none d-md-none d-sm-flex d-flex justify-content-start align-items-center mb-2">
                                    <img src="{{ url_to_svg(uri($v->icon)) }}" alt="">
                                    <h3>{{ $v->title }}​​</h3>
                                </div>
                                <h3 class="d-lg-block d-md-block d-sm-none d-none">{{ $v->title }}</h3>
                                <p>{{ $v->description }}</p>
                            </div>
                        </div>
                        @endforeach
                        {{--                         
                        <div class="list-benefit d-flex justify-content-start align-items-center">
                            <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/profesional.svg') }}" alt="">
                            <div class="body-list-benefit">
                                <div class="d-lg-none d-md-none d-sm-flex d-flex justify-content-start align-items-center mb-2">
                                    <img src="{{ asset('assets/img/profesional.svg') }}" alt="">
                                    <h3>Professional Software (i1 AccounTax Service ERP)​​</h3>
                                </div>
                                <h3 class="d-lg-block d-md-block d-sm-none d-none">Professional Software (i1 AccounTax Service ERP)​​</h3>
                                <p>Our professional Software (i1 AccounTax Service ERP) alleviates the administrative burden of managing complex bookkeeping activities with features and services that enable you to gain control of cost.​​</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="service-include">
            <div class="container-content">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="box-include-service pt-5">
                            <h3>{{ stringlang('Accounting & Tax Consulting Service Includes', 'Layanan Konsultan Akuntansi dan Pajak') }}</h3>
                            <div class="row mb-5">
                                <div class="col-lg-6">
                                    <h4>
                                        {{ stringlang('Accounting Services​', 'Jasa Konsultan Akuntansi') }}
                                    </h4>
                                    <ul class="list-unstyled">
                                        @foreach ($accounting->accounting_service as $v)
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> {{$v->title}}​</div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-6 pl-lg-5 pl-md-5 pl-sm-3 pl-3">
                                    <h4>
                                        {{ stringlang("Tax Reporting Services", "Jasa Perpajakan") }}
                                    </h4>
                                    <ul class="list-unstyled">
                                        @foreach($accounting->tax_reporting_service as $v)
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> {{$v->title}}</div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-lg-5 mb-md-5 mb-sm-4 mb-4 d-flex justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-8 col-8 text-center">
                                   <a href="{{ route('get.pages.pricing.accounting_tax') }}"><button type="button" class="btn-oval btn-view-detail btn-white-orange ">{{ stringlang("Check Price", "Cek Harga") }}</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-lg-5 mb-md-5 mb-sm-4 mb-4">
                    <div class="col-lg-12">
                        <div class="tagline-caption">
                            @if (activelang() == "EN")
                            Free up time by outsourcing your <a href=""> <i>Accounting & Bookkeeping & Taxation</i> </a> 
                            <br>
                            <br class="d-lg-none d-md-none d-sm-block d-block">
                            Ensure you <a href=""><i> follow taxation laws and file</i> </a> correctly on time.
                            @else
                            Mudah mengelola bisnis Anda dengan menggunakan <br><a href=""> <i>Jasa Akuntansi, Pembukuan & Perpajakan.</i> </a>
                            <br>
                            <br class="d-lg-none d-md-none d-sm-block d-block">
                            Pastikan Anda <a href=""><i> mengikuti undang-undang perpajakan dan pengarsipan</i> </a> dengan benar dan tepat waktu
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-req-solutions">
            <section class="section-consultant mb-5">
                <div class="container-content">
                    <div class="row">
                        <div class="col-lg-6 box-img-consult join-us position-relative d-lg-block d-md-block d-sm-none d-none">
                            <div class="img-consultant join d-flex justify-content-end">
                                <img src="{{ asset('assets/img/img-join21.png') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/Ellipse26.svg') }}" alt="" class="img-dots-1 d-none">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-2">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-3">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-4">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-5">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center pl-lg-5 pl-md-5 pl-sm-3 pl-3 justify-content-center">
                            <div class="title-form-consultant accounting py-lg-4 py-md-4 py-3">
                                @if (activelang() == "EN")
                                <h5>{{ stringlang('We are hiring now', 'Kami sedang mencari mitra') }}</h5>
                                <h3>When it comes to your <br class="d-lg-block d-md-block d-sm-none d-none">
                                    Accounting & Tax needs</h3>
                                <p>{{ stringlang('We can help you get to know us better by', 'Kami akan membantu anda untuk lebih mengenal kami dengan') }} <br> {{ stringlang('providing steps to use SystemEver.', 'menyajikan langkah - langkah penggunaan SystemEver') }}</p>
                                <a href="{{ route('get.contact') }}" class="btn-oval btn-view-detail btn-contact-us btn-white-orange btn-block mt-4 text-center m-auto">Contact Us</a>
                                @else 
                                <h5>Bergabunglah menjadi Mitra ERP Konsultan Kami!</h5>
                                <h3>Mudah Mengelola Klien Anda dengan<br class="d-lg-block d-md-block d-sm-none d-none">
                                    SystemEver AccounTax Service</h3>
                                <p>Kenali kami lebih dalam dan <br> jadikan SystemEver solusi bagi klien Anda.</p>
                                <a href="{{ route('get.contact') }}" class="btn-oval btn-view-detail btn-contact-us btn-white-orange btn-block mt-4 text-center m-auto">Bergabunglah Sekarang</a>                                
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 box-img-consult join-us position-relative d-lg-none d-md-none d-sm-block d-block">
                            <div class="img-consultant join d-flex justify-content-center">
                                <img src="{{ asset_to_webp(asset('assets/img/img-join2.png')) }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/Ellipse26.svg') }}" alt="" class="img-dots-1 d-none">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-2">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-3">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-4">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-5">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>



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