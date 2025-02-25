@extends('frontend/layouts/main')

@section('custom_css')
@endsection
@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ asset('assets/img/banner-solutions-2.png') }}" alt="">
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
<section class="section-choose-plan mt-4">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-5 mb-sm-4 mb-4">
            <div class="col-lg-12">
                <ul class="list-unstyled nav nav-tabs menu-pricing d-lg-flex justify-content-center border-bottom-0 mb-1">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu1">i1 AccounTax Service ERP </a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Accounting & Tax <br>
                        Consulting Services</a></li>
                </ul>
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
                                <h3>i1 AccounTax Service</h3>
                                <p><i>Built for accountants by accountants</i></p>
                            </div>
                            <div class="desc-erp-item mb-lg-5">
                                <p><b>i1 AccounTax is the cloud accounting ERP that’s ideal for accounting firms.</b></p>
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Impress clients with professional report.</div></li>
                                    <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Delight clients with on time and accurate data.</div></li>
                                    <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Help you to reduce tedious and repetitive work.</div></li>
                                </ul>
                            </div>
                            <a href="{{ route('get.pages.pricing.integrated_erp') }}"><button class="btn-oval btn-view-detail btn-white-green mb-lg-5">{{ stringlang("Check Price", "Cek Harga") }}</button></a>
                        </div>
                        <div class="col-lg-7 px-0 position-relative">
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
        <section class="section-sparator-green section-in-solutions">
            <div class="container">
                <div class="row d-flex justify-content-center py-lg-5 py-md-5 py-sm-4 py-4">
                    <div class="col-lg-12 px-lg-3 px-md-3 px-sm-4 px-4 text-center">
                        <h2>{{ stringlang('Who Need It?', 'Siapa yang Membutuhkan SystemEver i1 AccounTax Service?')}} </h2>
                        <p>Financial Firms | Accounting Firms | Accountants | Bookkeepers</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-basic-plan section-in-solutions" style="background-image: url('{{ asset('assets/img/Rectangle393.png') }}')">
            <div class="bg-basic-plan pb-5" style="background-image: url('{{ asset('assets/img/Rectangle435.png') }}')">
               <div class="container-content">
                   <div class="row py-lg-5 py-md-5 py-sm-4 py-4">
                        <div class="col-lg-12 text-center">
                            <h2>{{ stringlang('Basic Plan', 'Paket Dasar') }}</h2>
                        </div>
                   </div>
                   <div class="row mb-3">
                       <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3 px-sm-4 px-4">
                            <div class="monitor-slide accounting position-relative" style="background-image:url({{ asset('assets/img/monitor.png') }})">
                                <div class="box-slide position-absolute">
                                    <div class="owl-carousel owl-slide-monitor account owl-theme">
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
                                        <img src="{{ asset('assets/img/Group660.svg') }}" alt="">
                                        <div class="body-list-basic-plan">
                                            As a for-profit corporation, a company that uses external services such as excel, handwriting, and bookkeeping services for personnel /salary/accounting
                                        </div>
                                    </div>
                                </div>
                                <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                                    <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                        <img src="{{ asset('assets/img/Group661.svg') }}" alt="">
                                        <div class="body-list-basic-plan">
                                            Established a new corporation or used for accounting alone, but intends to use it in conjunction with budget, personnel, and salary
                                        </div>
                                    </div>
                                </div>
                                <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                                    <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                        <img src="{{ asset('assets/img/Group662.svg') }}" alt="">
                                        <div class="body-list-basic-plan">
                                            Companies that need connection with expense expenditure management, electronic payment (groupware), and banking (Firm Banking)
                                        </div>
                                    </div>
                                </div>
                                <div class="list-basic-plan d-flex justify-content-start align-items-center pr-3 pl-lg-0 pl-md-0 pl-3">
                                    <div class="d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-start align-items-lg-center align-items-md-center align-items-sm-start align-items-start">
                                        <img src="{{ asset('assets/img/Group663.svg') }}" alt="">
                                        <div class="body-list-basic-plan">
                                            Companies that require year-end settlement for business income earners when year-end settlement is in progress
                                        </div>
                                    </div>
                                </div>
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
                                <img src="{{ asset('assets/img/img-join21.png') }}" alt="">
                            </div>
                            <img src="{{ asset('assets/img/Ellipse26.svg') }}" alt="" class="img-dots-1 d-none">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-2">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-3">
                            <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-4">
                            <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-5">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center">
                            <div class="title-form-consultant py-lg-4 py-md-4 py-3">
                                <h5>{{ stringlang('We are hiring now', 'Kami sedang mencari mitra') }}</h5>
                                <h3>{{ stringlang('Become Our Partner', 'Jadilah Mitra Kami') }}<br> <small>{{ stringlang('to get special offers!', 'untuk mendapatkan penawaran special!') }}</small></h3>
                                <p>{{ stringlang('We can help you get to know us better by', 'Kami akan membantu anda untuk lebih mengenal kami dengan') }} <br> {{ stringlang('providing steps to use SystemEver.', 'menyajikan langkah - langkah penggunaan SystemEver') }}</p>
                                <button type="button" class="btn-oval btn-view-detail btn-contact-us btn-white-orange mt-3" data-toggle="modal" data-target="#modal-patner">{{ stringlang('Join Us', 'Gabung Sekarang') }}</button>
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
                            <h2>Accounting & Tax Consulting Service ​​</h2>
                            <p>Free up time ​<br>
                                by outsourcing your Accounting & Bookkeeping & Taxation​</p>
                        </div>
                    </div>
                    <div class="row mb-lg-5 mb-md-5 mb-sm-2 mb-2">
                        <div class="col-lg-5 col-md-5 d-lg-none d-md-none d-sm-block d-block px-lg-3 px-md-3 px-sm-0 px-0">
                            <div class="img-desc-consultant">
                                <img src="{{ asset('assets/img/image216.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="desc-consultant-service desc-erp-item pr-5">
                                <h3>Why Accounting & Tax Consulting Services?​</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                        <div> Accounting and tax Consulting services in Indonesia are geared to help companies comply with the financial reporting requirements.</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                        <div> ​i1 AccounTax Service ERP is built for accountants by Accountants X SystemEVer.</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                        <div> SystemEver also have professional Accountants and tax accountants to provide clients with accounting tax consulting services. 
                                            These specialists can help the business deal with the tedious accounting and tax work, and the enterprise will be more focused 
                                            on more meaningful business development.​
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                            <div class="img-desc-consultant">
                                <img src="{{ asset('assets/img/image216.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-5 mb-md-5 mb-sm-2 mb-2">
                        <div class="col-lg-12">
                            <div class="desc-consultant-service desc-erp-item">
                                <h3>​How does it work? ​​</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                        <div> Planning of accounting systems to the processing of receipts and payment​.</div>
                                    </li>
                                    <li class="mb-1">
                                        <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                        <div> Compile and review financial statement, analyze management system, aid in budget preparation, prepare financial forecast, and assist in long range planning.</div>
                                    </li>
                                    <li class="mb-1">
                                        <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                        <div> Help with filing all the tax forms, Calculating Taxable Income correctly and decision-making on Taxation​</div>
                                    </li>
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
                        <h3>Benefits of engaging <br class="d-lg-block d-md-block d-sm-none d-none">
                            Accounting & Tax Consulting <br class="d-lg-none d-md-none d-sm-block d-block"> Services</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-benefit py-5">
            <div class="container-content">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                        <div class="list-benefit d-flex justify-content-start align-items-center">
                            <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/uptodate.svg') }}" alt="">
                            <div class="body-list-benefit">
                                <div class="d-lg-none d-md-none d-sm-flex d-flex justify-content-start align-items-center mb-2">
                                    <img src="{{ asset('assets/img/uptodate.svg') }}" alt="">
                                    <h3>Up-to-date information & Statutory requirements​</h3>
                                </div>
                                <h3 class="d-lg-block d-md-block d-sm-none d-none">Up-to-date information & Statutory requirements​</h3>
                                <p>​Accounting  and tax specialists that have the right skills to get it done will not stop until reach client is satisfied.​</p>
                            </div>
                        </div>
                        <div class="list-benefit d-flex justify-content-start align-items-center">
                            <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/timecost.svg') }}" alt="">
                            <div class="body-list-benefit">
                                <div class="d-lg-none d-md-none d-sm-flex d-flex justify-content-start align-items-center mb-2">
                                    <img src="{{ asset('assets/img/timecost.svg') }}" alt="">
                                    <h3>Time & Cost Saving</h3>
                                </div>
                                <h3 class="d-lg-block d-md-block d-sm-none d-none">Time & Cost Saving</h3>
                                <p>Save time and minise cost as you outsource your accounting and tax. Your talents can focus on business strategies that will help grow your business.​​</p>
                            </div>
                        </div>
                        <div class="list-benefit d-flex justify-content-start align-items-center">
                            <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/taxt.svg') }}" alt="">
                            <div class="body-list-benefit">
                                <div class="d-lg-none d-md-none d-sm-flex d-flex justify-content-start align-items-center mb-2">
                                    <img src="{{ asset('assets/img/taxt.svg') }}" alt="">
                                    <h3>Avoid penalties and proper filing</h3>
                                </div>
                                <h3 class="d-lg-block d-md-block d-sm-none d-none">Avoid penalties and proper filing</h3>
                                <p>​By ensuring you meet all compliance requirements,  our certified Tax Accountants can help you avoid penalties imposed.​</p>
                            </div>
                        </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-include">
            <div class="container-content">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="box-include-service pt-5">
                            <h3>Accounting & Tax Consulting Service Includes</h3>
                            <div class="row mb-5">
                                <div class="col-lg-6">
                                    <h4>
                                        Accounting Services​
                                    </h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> General Ledger​</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Balance Sheet​</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Income Statement</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Cash Flow​</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Monthly Tax Report (withholding tax and VAT)​</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Annual Tax Report​​</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Payments Processing</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Invoices Issuance​​</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 pl-lg-5 pl-md-5 pl-sm-3 pl-3">
                                    <h4>
                                        Tax Reporting Services
                                    </h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Individual Tax</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> ​Corporate Tax​</div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/Vector.svg') }}" alt=""> 
                                            <div> Tax Review</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-lg-5 mb-md-5 mb-sm-4 mb-4 d-flex justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-8 col-8 text-center">
                                   <a href="{{ url('frontend/pricing/accounting-tax') }}"><button type="button" class="btn-oval btn-view-detail btn-white-orange ">{{ stringlang("Check Price", "Cek Harga") }}</button></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-lg-5 mb-md-5 mb-sm-4 mb-4">
                    <div class="col-lg-12">
                        <div class="tagline-caption">
                            Free up time by outsourcing your <a href=""> <i>Accounting & Bookkeeping & Taxation</i> </a> 
                            <br>
                            <br class="d-lg-none d-md-none d-sm-block d-block">
                            Ensure you <a href=""><i> follow taxation laws and file</i> </a> correctly on time.
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
                                <h5>{{ stringlang('We are hiring now', 'Kami sedang mencari mitra') }}</h5>
                                <h3>When it comes to your <br class="d-lg-block d-md-block d-sm-none d-none">
                                    Accounting & Tax needs</h3>
                                <p>{{ stringlang('We can help you get to know us better by', 'Kami akan membantu anda untuk lebih mengenal kami dengan') }} <br> {{ stringlang('providing steps to use SystemEver.', 'menyajikan langkah - langkah penggunaan SystemEver') }}</p>
                                <button type="button" class="btn-oval btn-view-detail btn-contact-us btn-white-orange mt-3" data-toggle="modal" data-target="#modal-contact-us">Contact Us</button>
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
</div>



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