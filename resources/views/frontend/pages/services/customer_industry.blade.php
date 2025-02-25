@extends('frontend/layouts/main')
@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center  pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help<br/> you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="mb-lg-5 mb-md-4 mb-sm-4 mb-4">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <div class="title-customer text-center mt-lg-0 mt-md-0 mt-sm-3 mt-3 mb-lg-5 mb-md-4 mb-sm-3 mb-3">{{ stringlang('Customer', 'Pelanggan') }}</div>
                <div class="img-map-customer text-center">
                    <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/Group621-new.png') }}" alt="">
                    <img class="d-lg-none d-md-none d-sm-block d-block" src="{{ asset('assets/img/Group728.png') }}" alt="">
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
                                        Language Support
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3 pl-lg-5 pl-md-5 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/Group399.svg') }}" alt="">
                                        Partnership
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 pl-lg-5 pl-md-5 pl-3">
                                    <div class="list-ket-map-customer pl-lg-5 pl-md-5 pl-0">
                                        <img src="{{ asset('assets/img/Ellipse157.svg') }}" alt="">
                                        Strategic Basis
                                    </div>
                                </div>
                                <div class="col-lg-5 mb-3 pl-lg-4 pl-md-4 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/Group398.svg') }}" alt="">
                                        Subsidiaries, Offices, R&D Center
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3 pl-lg-5 pl-md-5 pl-3">
                                    <div class="list-ket-map-customer">
                                        <img src="{{ asset('assets/img/origami.svg') }}" alt="">
                                        Plan to localize
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3 pl-lg-5 pl-md-5 pl-3">
                                    <div class="list-ket-map-customer pl-lg-5 pl-md-5 pl-0">
                                        <img src="{{ asset('assets/img/office-building.svg') }}" alt="">
                                        Our Headquarters
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 border-bottom py-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="jumlah-customer">1,900++</div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 d-flex justify-content-end align-items-center">
                                    <div class="country-jumlah">
                                        <img src="{{ asset('assets/img/korea.png') }}" alt="">
                                        <div> Korea</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 box-country-customer py-3">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 list-country-jumlah d-flex justify-content-center align-item-start">
                                    <div class="jumlah pr-2">70</div>
                                    <div class="country-jumlah pt-4">
                                        <img src="{{ asset('assets/img/vietnam.png') }}" alt="">
                                        <div> Vietnam</div>
                                    </div>
                                </div>
                                <div class="col-lg-3  col-md-3 col-sm-6 col-6  list-country-jumlah d-flex justify-content-center align-item-start">
                                    <div class="jumlah pr-2">55</div>
                                    <div class="country-jumlah pt-4">
                                        <img src="{{ asset('assets/img/china.png') }}" alt="">
                                        <div> China</div>
                                    </div>
                                </div>
                                <div class="col-12 border-bottom-box-country d-lg-none d-md-none d-block d-block"></div>
                                <div class="col-lg-3  col-md-3 col-sm-6 col-6  list-country-jumlah d-flex justify-content-center align-item-start">
                                    <div class="jumlah pr-2">20</div>
                                    <div class="country-jumlah pt-4">
                                        <img src="{{ asset('assets/img/japan.png') }}" alt="">
                                        <div> Japan</div>
                                    </div>
                                </div>
                                <div class="col-lg-3  col-md-3 col-sm-6 col-6  list-country-jumlah d-flex justify-content-center align-item-start">
                                    <div class="jumlah pr-2">20</div>
                                    <div class="country-jumlah pt-4">
                                        <img src="{{ asset('assets/img/indo.png') }}" alt="">
                                        <div> Indonesia</div>
                                    </div>
                                </div>
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
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/machine-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/machine-green.svg') }}" alt="">
                                <p> Machine/<br/>Equipment</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/elektronik-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/elektronik-green.svg') }}" alt="">
                                <p> Electric/<br/>Electronic</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/food-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/food-green.svg') }}" alt="">
                                <p> Food <br> Industry</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/distribusi-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/distribusi-green.svg') }}" alt="">
                                <p> Distribution <br> Business</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/cosmetic-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/cosmetic-green.svg') }}" alt="">
                                <p> Cosmetic</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/metal-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/metal-green.svg') }}" alt="">
                                <p> Metal <br> Processing</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/pharma-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/pharma-green.svg') }}" alt="">
                                <p> Pharmaceutical/ <br/>Medice Device</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/precision-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/precision-green.svg') }}" alt="">
                                <p> Precision <br> Equipment</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/finance-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/finance-green.svg') }}" alt="">
                                <p> Finance</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="produk-category text-center">
                            <a href="">
                                <img class="gray" src="{{ asset('assets/img/ect-abu.svg') }}" alt="">
                                <img class="green" src="{{ asset('assets/img/ect-green.svg') }}" alt="">
                                <p> ect.</p>
                            </a>
                        </div>
                    </li>
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
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="item">
                            <div class="row">
                                <div class="col-12 d-lg-none d-md-none d-sm-block d-block  px-lg-3 px-md-3 px-4">
                                    <img src="{{ asset('assets/img/img_konsep.png') }}" alt="">
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3  px-4">
                                    <div class="desc-testimoni mb-3">
                                        I chose SystemEver becaouse of their value and incredible Superior Customer Service they really awesome organization.
                                    </div>
                                    <div class="media media-testimoni d-flex align-items-center">
                                        <img class="mr-3" src="{{ asset('assets/img/ndc.png') }}" alt="">
                                        <div class="media-body">
                                          <h5 class="mt-0 mb-0">David McLean</h5>
                                          CEO PT Karya Makmur Abadi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                                    <img src="{{ asset('assets/img/img_konsep.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        @endfor
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
                        <div class="item"><img src="{{ asset('assets/img/image5.png') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('assets/img/image4.png') }}" alt=""></div>
                        <div class="item"><img src="{{ asset('assets/img/image3.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
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
        autoplay:true,
        autoplayTimeout:3000,
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

@endsection