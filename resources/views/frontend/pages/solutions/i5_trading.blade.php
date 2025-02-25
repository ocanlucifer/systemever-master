@extends('frontend/layouts/main')

@section('custom_css')
@endsection
@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ asset('assets/img/banner-solutions-1.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center">
        <div class="container">
           <div class="bg-shadow-banner"></div>
           <div class="cap-banner">
                <h1>Track Your<br/>
                    Ingredient Inventory</h1>
                <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
                <div class="row">
                    <div class="col-lg-4 pt-lg-3 pt-md-3 pt-sm-0 pt-0">
                        <button class="btn-oval btn-white-border btn-banner text-uppercase  mb-3" data-toggle="modal" data-target="#modal-request-demo"><img src="{{ asset('assets/img/play-button.svg') }}" alt="">{{ stringlang("Free Demo" , "Demo Gratis") }}</button>
                        <button class="btn-oval btn-white-border btn-banner text-uppercase " data-toggle="modal" data-target="#modal-download-form"><img src="{{ asset('assets/img/icon-download.svg') }}" alt="">{{ stringlang("Download Brochure", "Unduh Brosur") }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-abu d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="section-product" style="background-image: url('{{ asset('assets/img/skyscraper.svg') }}')">
    <div class="bg-white-gradient overflow-hide">
        <div class="container-content">
            <div class="row">
                <div class="col-lg-5 pt-lg-5 pt-md-5 pt-sm-3 pt-3 pl-lg-5">
                    <div class="title-erp-item mb-lg-5">
                        <h3>i5 Trading & Distribution</h3>
                        <p><i>Managing Inventory </i></p>
                    </div>
                    <div class="desc-erp-item mb-lg-4 mb-md-4 mb-sm-4 mb-4">
                        <p><b>i5 is an integrated Cloud ERP system, from Basic Costing, Sales & Inventory which can be suitable for Trading & Distribution Company.</b></p>
                        <ul class="list-unstyled">
                            <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Integrated & Real-time.</div></li>
                            <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> No more Pain Managing Inventory, Basic Costing & Consigning.</div></li>
                            <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Help you to reduce tedious and repetitive work.</div></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 pr-lg-3 pr-md-3 pr-sm-2 pr-2"><a href="{{ url('frontend/pricing/integrated-erp') }}"><button class="btn-oval btn-view-detail btn-white-green mb-lg-4 w-100">{{ stringlang("Check Price", "Cek Harga") }}</button></a></div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 pl-lg-3 pl-md-3 pl-sm-2 pl-2"><button class="btn-oval btn-view-detail btn-white-green mb-lg-4 w-100" data-toggle="modal" data-target="#modal-request-demo">{{ stringlang("Free Demo" , "Demo Gratis") }}</button></div>
                    </div>
                </div>
                <div class="col-lg-7 pt-4 px-0 position-relative">
                    {{-- <div class="img-latar">
                        <img src="{{ asset('assets/img/Ellipse-solutions.svg') }}" alt="">
                    </div> --}}
                    <div class="img-product">
                        <img src="{{ asset('assets/img/img-product-group.png') }}" alt="">
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
           <div class="col-lg-9 d-flex justify-content-center align-items-center">
               <div class="line-title"></div>
               <div class="title">{{ stringlang('i5 TRADING & DISTRIBUTION', 'i5 PERDAGANGAN & DISTRIBUSI') }}</div>
               <div class="line-title"></div>
           </div>
        </div>
        <div class="row row-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start pb-5">
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/Group519.svg') }}" alt="">
                    <h4>Corporate</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Organization</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Item</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> User</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Authority</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/Group554.svg') }}" alt="">
                    <h4>Accounting</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> COA</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> General Ledger</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Fixed Asset</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Journal</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Trail Balance</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Finance Statement</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/Group522.svg') }}" alt="">
                    <h4>Purchase/ Import</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Contract</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Down Payment</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Price Control</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Import</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/Group523.svg') }}" alt="">
                    <h4>Sales/ Export</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Sales Plan</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Receivable</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Return</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Delivery Note</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Promotion</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Revenue</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/cosigning.svg') }}" alt="">
                    <h4>Consigning</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Sales Plan</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Receivable</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Revenue</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Delivery Note</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/Group599.svg') }}" alt="">
                    <h4>Inventory</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Warehouse</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Stock Moving</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Picking Up</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Counting</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-4 mb-lg-4 mb-md-4 mb-sm-2 mb-2 mt-2 padding-min-7-mb">
                <div class="list-trading-distribution py-lg-4 py-md-4 py-sm-3 py-3 px-lg-4 px-md-4 px-sm-3 px-3">
                    <img src="{{ asset('assets/img/Group553.svg') }}" alt="">
                    <h4>Costing</h4>
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Unit Pricing</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Merchandise Costing</div></li>
                        <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Profit Analysis</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-sparator-green section-in-solutions">
    <div class="container">
        <div class="row d-flex justify-content-center py-lg-5 py-md-5 py-sm-3 py-3">
            <div class="col-lg-12 text-center">
                <h2>{{ stringlang('Who Need It?', 'Siapa yang Membutuhkan SystemEver i1 AccounTax Service?')}} </h2>
                <p class="text-center">A company that purchases/imports products and holds  <br> inventory and transacts between companies.</p>
            </div>
        </div>
    </div>
</section>
<section class="section-basic-plan section-in-solutions" style="background-image: url('{{ asset('assets/img/Rectangle393.png') }}')">
    <div class="bg-basic-plan pb-lg-5 pb-mb-5 pb-sm-3 pb-3" style="background-image: url('{{ asset('assets/img/Rectangle435.png') }}')">
       <div class="container-content">
           <div class="row py-lg-5 py-md-5 py-sm-4 py-4">
                <div class="col-lg-12 text-center">
                    <h2>{{ stringlang('Basic Plan', 'Paket Dasar') }}</h2>
                </div>
           </div>
           <div class="row">
               <div class="col-md-7 col-sm-12 col-12 px-lg-3 px-md-3 px-sm-4 px-4">
                    <div class="monitor-slide position-relative" style="background-image:url({{ asset('assets/img/monitor.png') }})">
                        <div class="box-slide position-absolute">
                            <div class="owl-carousel owl-slide-monitor owl-theme">
                                <div class="item">
                                    <img src="{{ asset('assets/img/img-in-monitor.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/img-in-monitor.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/img-in-monitor.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/img-in-monitor.png') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/img-in-monitor.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="d-flex flex-column box-list-basic-plan pl-lg-5 pl-sm-5 pl-sm-0 pl-0">
                    <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                        <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                <img src="{{ asset('assets/img/Group636.svg') }}" alt="">
                                <div class="body-list-basic-plan">
                                    As a general distribution company,
                                    it is a company that efficiently manages inventory/delivery from order receipt
                                    to delivery.
                                </div>
                            </div>
                        </div>
                        <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                            <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                <img src="{{ asset('assets/img/Group637.svg') }}" alt="">
                                <div class="body-list-basic-plan">
                                    A company that intends to establish and improve an inventory management system such as available and actual inventory.
                                </div>
                            </div>
                        </div>
                        <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                            <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                <img src="{{ asset('assets/img/Group638.svg') }}" alt="">
                                <div class="body-list-basic-plan">
                                    As a B2B specialized company, it is inconvenient to do manual work of 
                                    export/import management that occurs
                                    in some cases.
                                </div>
                            </div>
                        </div>
                        <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                            <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                <img src="{{ asset('assets/img/Group639.svg') }}" alt="">
                                <div class="body-list-basic-plan">
                                    A company that seeks to merge (partial / complete) production and distribution
                                    as a short-term strategy through production or outsourcing production.
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
<section class="section-industry section-in-solutions py-lg-5 py-md-5 py-sm-3 py-3">
    <div class="container px-5">
        <div class="row">
            <div class="col-lg-12 text-center mb-lg-5 mb-md-5 mb-sm-3 mb-3">
                <h2>{{ stringlang('Applicable Industries', 'Industri Yang Berlaku') }}</h2>
            </div>
        </div>
        <div class="row row-min-7-mb">
            <div class="col-lg col-sm-4 col-4 mb-lg-5 mb-md-5 mb-sm-3 mb-3 padding-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start">
                <div class="item-industry">
                    <img class="mb-lg-4 mb-md-4 mb-sm-2 mb-2" src="{{ asset('assets/img/elektronik-green.svg') }}" alt="">
                    <ul>
                        <li>Electrical </li>
                        <li>Accessories </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg col-sm-4 col-4 mb-lg-5 mb-md-5 mb-sm-3 mb-3 padding-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start">
                <div class="item-industry">
                    <img class="mb-lg-4 mb-md-4 mb-sm-2 mb-2" src="{{ asset('assets/img/food.svg') }}" alt="">
                    <ul>
                        <li>Food </li>
                        <li>Food Material </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg col-sm-4 col-4 mb-lg-5 mb-md-5 mb-sm-3 mb-3 padding-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start">
                <div class="item-industry">
                    <img class="mb-lg-4 mb-md-4 mb-sm-2 mb-2" src="{{ asset('assets/img/metal-green.svg') }}" alt="">
                    <ul>
                        <li>Machine Parts </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg col-sm-4 col-4 mb-lg-5 mb-md-5 mb-sm-3 mb-3 padding-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start">
                <div class="item-industry">
                    <img class="mb-lg-4 mb-md-4 mb-sm-2 mb-2" src="{{ asset('assets/img/raw.svg') }}" alt="">
                    <ul>
                        <li>Raw Materials</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg col-sm-4 col-4 mb-lg-5 mb-md-5 mb-sm-3 mb-3 padding-min-7-mb d-flex justify-content-lg-center justify-content-md-center justify-content-start">
                <div class="item-industry">
                    <img class="mb-lg-4 mb-md-4 mb-sm-2 mb-2" src="{{ asset('assets/img/mobil-barang.svg') }}" alt="">
                    <ul>
                        <li>B2B Distribution</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{ route('frontend.pages.pricing.integrated_erp') }}"><button type="button" class="btn-oval btn-view-detail btn-block btn-white-orange ">{{ stringlang("Check Price", "Cek Harga") }}</button></a>
            </div>
        </div>
    </div>
</section>
<section class="form-req-solutions">
    @include('frontend/includes/form_request')
</section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')
<script>
 $('.owl-slide-monitor').owlCarousel({
    loop:true,
    margin:15,
    navText:['<img src="{{ asset("assets/img/arrow-left.svg") }}" alt="">','<img src="{{ asset("assets/img/arrow-right.svg") }}" alt="">'],
    nav:false,
    dots:true,
    // autoplay:true,
    // autoplayTimeout:3000,
    // autoplayHoverPause:true,
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