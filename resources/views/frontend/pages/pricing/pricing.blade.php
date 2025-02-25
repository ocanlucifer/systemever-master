@extends('frontend/layouts/main')

@section('custom_css')

@endsection

@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ asset('assets/img/pricing_banner.png') }}" alt="">
    <div class="caption-banner pricing d-flex align-items-center ">
        <div class="container cl-black">
            <div class="row d-flex justify-content-center">
                <div class="bg-shadow-banner-white"></div>
                <div class="cap-banner col-lg-9 d-lg-block d-md-block d-sm-none d-none">
                    <h3>Pricing</h3>
                    <p>Create your own Custom Price Quote for the products offered through SystemEver ERP system based on number, usage, and power of servers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="section-choose-plan pt-lg-5 pt-md-5 pt-sm-4 pt-4 mb-lg-5 mb-md-5 mb-sm-4 mb-4">
    <div class="container">
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-12 d-lg-none d-md-none d-sm-block d-block">
                <h3>Pricing</h3>
                <p>Create your own Custom Price Quote for the products offered through SystemEver ERP system based on number, usage, and power of servers.</p>
            </div>
            <div class="col-lg-8">
                {{-- <div class="title-price text-center">PRICING</div> --}}
                <div class="choose-plan text-center">Choose Your Best Plan</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="list-unstyled menu-pricing menu-price d-flex justify-content-center">
                    <li><a class="{{ Request::segment(3) == 'integrated-erp' ? 'active':'' }}" href="{{ url('frontend/pricing/integrated-erp') }}">Integrated ERP </a></li>
                    <li><a class="{{ Request::segment(3) == 'accounting-tax' ? 'active':'' }}" href="{{ url('frontend/pricing/accounting-tax') }}">Accounting & Tax
                        <br>Consulting Services</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@yield('content_pricing')
@include('frontend/includes/modals/request_quotation')
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')

@endsection
