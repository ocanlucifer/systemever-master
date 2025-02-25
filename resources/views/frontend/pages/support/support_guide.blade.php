@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help<br/> you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="mt-3 mb-lg-5 mb-md-5 mb-sm-4 mb-4 pb-lg-3 pb-md-3">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-5 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <div class="choose-plan text-center">
                    Customer  Support Guide
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset('assets/img/03-survey.svg') }}" alt="">
                            <div>
                                <div class="name-item mb-3">
                                    Introduction Inquiry · Product Inquiry
                                </div>
                                <ul class="list-unstyled mb-0 w-100 d-lg-none d-md-none d-sm-block d-block" >
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/icon-chat.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                            Real-time inquiry: Click the icon at the bottom right of the current page
                                        </div>
                                    </li>
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/envelope-dark-green.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <a href=""> info@systemever.co.id</a>
                                        </div>
                                    </li>
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/icon-wa.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <a href=""> 021 2985 1628</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3 w-100">
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/icon-chat.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        Real-time inquiry: Click the icon at the bottom right of the current page
                                    </div>
                                </li>
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/envelope-dark-green.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                       <a href=""> info@systemever.co.id</a>
                                    </div>
                                </li>
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/icon-wa.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                       <a href=""> 021 2985 1628</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset('assets/img/erp-connect.svg') }}" alt="">
                            <div>
                                <div class="name-item mb-3">
                                    ERP connection failure report
                                </div>
                                <ul class="list-unstyled mb-0 w-100 d-lg-none d-md-none d-sm-block d-block">
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/icon-chat.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                            Real-time inquiry: Click the icon at the bottom right of the current page
                                        </div>
                                    </li>
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/icon-wa.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <a href=""> 021 2985 1628</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3 w-100">
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/icon-chat.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        Real-time inquiry: Click the icon at the bottom right of the current page
                                    </div>
                                </li>
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/icon-wa.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                       <a href=""> 021 2985 1628</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset('assets/img/reporting.svg') }}" alt="">
                            <div>
                                <div class="name-item mb-3">
                                    Inquiries on how to use during use · Error reporting · Functional improvement
                                </div>
                                <ul class="list-unstyled mb-0 d-lg-none d-md-none d-sm-block d-block">
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/icon-chat.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body d-flex">
                                           Real-time inquiry: Click the icon <br> at the bottom right of <br> the current page
                                        </div>
                                    </li>
                                </ul>
                                <img class="img-master" src="{{ asset('assets/img/ylw-master.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3">
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/icon-chat.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body d-flex">
                                       Real-time inquiry: Click the icon <br> at the bottom right of <br> the current page
                                    </div>
                                </li>
                            </ul>
                            <img class="img-master" src="{{ asset('assets/img/ylw-master.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset('assets/img/education.svg') }}" alt="">
                            <div>
                                <div class="name-item mb-3">
                                    Education Inquiry
                                </div>
                                <ul class="list-unstyled mb-0 w-100 d-lg-none d-md-none d-sm-block d-block">
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/envelope-dark-green.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <a href=""> info@systemever.co.id</a>
                                        </div>
                                    </li>
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset('assets/img/icon-wa.svg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                           <a href=""> 021 2985 1628</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3 w-100">
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/envelope-dark-green.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                       <a href=""> info@systemever.co.id</a>
                                    </div>
                                </li>
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset('assets/img/icon-wa.svg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                       <a href=""> 021 2985 1628</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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

@endsection