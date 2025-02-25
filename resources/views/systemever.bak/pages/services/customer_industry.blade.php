@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Customer Industry ' . activelang()
])

@section('custom_css')
<style>
.gray {
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    filter: grayscale(1); /* Microsoft Edge and Firefox 35+ */
  }
</style>
@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center  pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help you?', 'Apa yang bisa kami bantu?') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="mb-lg-5 mb-md-4 mb-sm-4 mb-4">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <div class="title-customer text-center mt-lg-0 mt-md-0 mt-sm-3 mt-3 mb-lg-5 mb-md-4 mb-sm-3 mb-3">{{ stringlang('Customer', 'Pelanggan') }}</div>
                <div class="img-map-customer text-center">
                    <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ uri($data->customer_map) }}" alt="">
                    <img class="d-lg-none d-md-none d-sm-block d-block" src="{{ uri($data->customer_map_mobile) }}" alt="">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9">
                <div class="box-info-customer">
                    <div class="row">
                        <div class="col-lg-12 border-bottom">
                            <div class="row">
                                <div class="col-lg-5 mb-3 pl-lg-4 pl-md-4 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/language-support.svg') }}" alt="">
                                        {{ stringlang('Language Support', 'Dukungan Bahasa Local') }}
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3 pl-lg-2 pl-md-2 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/Group399.svg') }}" alt="">
                                        {{ stringlang('Partnership', 'Kemitraaan')}}
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 pl-lg-5 pl-md-5 pl-3">
                                    <div class="list-ket-map-customer pl-lg-5 pl-md-5 pl-0">
                                        <img src="{{ asset('assets/img/Ellipse157.svg') }}" alt="">
                                        {{ stringlang('Strategic Basis', 'Basis Strategi')}}
                                    </div>
                                </div>
                                <div class="col-lg-5 mb-3 pl-lg-4 pl-md-4 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/Group398.svg') }}" alt="">
                                        {{ stringlang('Subsidiaries, Offices, R&D Center', 'Kantor Cabang, Pusat Litbang')}}
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3 pl-lg-2 pl-md-2 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/origami.svg') }}" alt="">
                                        {!! stringlang('Plan to localize', 'Rencana Lokalisasi') !!}
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 pl-lg-5 pl-md-5 pl-3">
                                    <div class="list-ket-map-customer pl-lg-5 pl-md-5 pl-0">
                                        <img src="{{ asset('assets/img/office-building.svg') }}" alt="">
                                        {{ stringlang('Our Headquarters', 'Kantor Pusat')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 border-bottom py-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="jumlah-customer">2,000++</div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end align-items-center">
                                    <div class="country-jumlah">
                                        <img src="{{ asset_to_webp(asset('assets/img/korea.png')) }}" alt="">
                                        <div> Korea</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 box-country-customer py-3">
                            <div class="row">
                                @foreach($data->country_counter as $v)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 list-country-jumlah d-flex justify-content-center align-item-start">
                                    <div class="jumlah pr-2">{{$v->counter}}</div>
                                    <div class="country-jumlah pt-4">
                                        <img src="{{ asset_to_webp(uri($v->icon)) }}" alt="">
                                        <div> {{$v->country}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-business pb-lg-4">
    <div class="container">
        <div class="row pt-lg-5 mb-lg-5">
            <div class="col-lg-12">
                <div class="title-business text-center">
                    <h3 class="mt-lg-0 mt-md-0 mt-3 mb-lg-0 mb-md-0 mb-4">{{ stringlang('Suitable Industries', 'Industri yang Sesuai') }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled list-produk-category suitable">
                    @foreach($data->suitable_insdustries as $v)
                    <li>
                        <div class="produk-category text-center">
                            <a>
                                <img class="gray" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="">
                                <img class="green" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="">
                                <p> {{$v->title}}</p>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
  </section>
  <section class="section-medium-business pt-5 mb-5">
        <div class="container">
            <div class="row d-flex justify-content-center testimony">
                <div class="col-lg-10 px-lg-5 pt-lg-5 pb-3 box-testimony shadow-testi px-lg-3 px-md-3 px-sm-0 px-0">
                    <div class="owl-carousel owl-testimoni owl-theme">
                        @foreach ($testimony as $v)
                        <div class="item service-testimoni">
                            <div class="row">
                                <div class="col-12 d-lg-none d-md-none d-sm-block d-block  px-lg-3 px-md-3 px-4">
                                    <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="">
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3  px-4">
                                    <div class="desc-testimoni mb-3 mt-2">
                                        {{ $v->description }}
                                    </div>
                                    <div class="media media-testimoni d-flex align-items-center">
                                        <img class="mr-3" src="{{ asset_to_webp(uri($v->photo)) }}" alt="{{ $v->name }}">
                                        <div class="media-body">
                                          <h5 class="mt-0 mb-0">{{ $v->name }}</h5>
                                          {{ $v->job_title }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                                    <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-represented-customer  mb-lg-5 mb-md-4 mb-sm-3 mb-5 pb-4">
        <div class="container-content">
            <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                <div class="col-lg-12">
                    <h3>{{ stringlang('Represented Customer', 'Pelanggan Kami') }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-represented owl-theme">
                        @foreach ($customer_logo as $v)
                        <div class="item"><img src="{{ asset_to_webp(url_to_svg(uri($v->image))) }}" alt=""></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')
<script>
     $('.owl-testimoni').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 80,
                nav:false,
                margin:15,
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
     $('.owl-represented').owlCarousel({
        loop:true,
        margin:50,
        nav:false,
        dots:false,
        autoplay: true,
        slideTransition: 'linear',
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        center: true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })
</script>
<script>
    var lastheight = 0;
    $(".service-testimoni").each(function(){
        height = $(this).height();
        if (lastheight <= height) {
            lastheight = height;
        }
    })

    setTimeout(function(){
        lastheight = lastheight + 50;
        $(".service-testimoni").css("height", lastheight + "px");
    }, 500)
</script>
@endsection