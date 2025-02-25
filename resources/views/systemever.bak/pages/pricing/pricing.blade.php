@extends('systemever/layouts/main', [
    'spesifice_page_seo' => $spesifice_page_seo
])

@section('custom_css')
<style>
    .pricing-action-tab:hover {
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ asset_to_webp(uri($banner, 'assets/img/pricing_banner.png')) }}" alt="{{ $title }}">
    <div class="caption-banner pricing d-flex align-items-center " style="background: rgb(255 255 255 / 60%);">
        <div class="container cl-black">
            <div class="row d-flex justify-content-center">
                <div class="bg-shadow-banner-white"></div>
                <div class="cap-banner col-lg-9 d-lg-block d-md-block d-sm-none d-none">
                    <h3>{{ $title }}</h3>
                    <p>{{ $sub_title }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-choose-plan pt-lg-5 pt-md-5 pt-sm-4 pt-4 mb-lg-4 mb-md-4 mb-sm-4 mb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 d-lg-none d-md-none d-sm-block d-block">
                <h3>{{ $title }}</h3>
                <p>{{ $sub_title }}</p>
            </div>
            <div class="col-lg-8">
                <div class="title-price text-center">{{$main_title}}</div>
                {{-- <div class="choose-plan text-center">{{ stringlang("Choose Your Best Plan", "Pilih Rencana Terbaikmu") }}</div> --}}
            </div>
        </div>
        <div class="row  d-none">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="list-unstyled menu-pricing menu-price d-flex justify-content-center">
                    {{-- <li><a class="{{ Request::segment(2) == 'integrated-erp' || Request::segment(3) == 'integrated-erp' ? 'active':'' }}" href="{{ route('get.pages.pricing.integrated_erp') }}">{{ stringlang('Integrated ERP', 'ERP Terintegrasi')}} </a></li>
                    <li><a class="{{ Request::segment(2) == 'accounting-tax' || Request::segment(3) == 'accounting-tax' ? 'active':'' }}" href="{{ route('get.pages.pricing.accounting_tax') }}">{!! stringlang('Accounting & Tax<br>Consulting&nbsp;Services', 'Layanan Akuntansi & Konsultansi&nbsp;Pajak') !!}</a></li> --}}

                    <li><a class="{{ Request::segment(2) == 'integrated-erp' || Request::segment(3) == 'integrated-erp' ? 'active':'' }} pricing-action-tab" onclick="$('.section-erp').show();$('.section-accounting').hide();$('.pricing-action-tab').removeClass('active');$(this).addClass('active')">{{ stringlang('Integrated ERP', 'ERP Terintegrasi')}} </a></li>
                    <li><a class="{{ Request::segment(2) == 'accounting-tax' || Request::segment(3) == 'accounting-tax' ? 'active':'' }} pricing-action-tab" onclick="$('.section-erp').hide();$('.section-accounting').show();$('.pricing-action-tab').removeClass('active');$(this).addClass('active')">{!! stringlang('Accounting & Tax<br>Consulting&nbsp;Services', 'Layanan Akuntansi & Konsultansi&nbsp;Pajak') !!}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@yield('content_pricing')
@include('systemever/includes/modals/request_quotation')
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')

@endsection
