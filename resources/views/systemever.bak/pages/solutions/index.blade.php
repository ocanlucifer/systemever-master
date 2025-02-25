@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Solution i1 ' . activelang()
])

@section('custom_css')
@endsection
@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ uri($data->solution_accountax_banner) }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-lg-5 pt-md-3 pt-sm-0 pt-0">
        <div class="container">
            <h1>{{ $data->solution_accountax_banner_title }}</h1>
            <p>{{ $data->solution_accountax_banner_subtitle }}</p>
            <div class="row">
                <div class="col-lg-4 pt-lg-3 pt-md-3 pt-sm-0 pt-0">
                    <a href="{{ route('get.contact') }}"><button class="btn-oval btn-white-border btn-banner text-uppercase  mb-3"><img src="{{ asset('assets/img/play-button.svg') }}" alt="">{{ stringlang("Free Demo" , "Demo Gratis") }}</button></a>
                    <button class="btn-oval btn-white-border btn-banner text-uppercase " data-toggle="modal" data-target="#modal-download-form"><img src="{{ asset('assets/img/icon-download.svg') }}" alt="">{{ stringlang("Download Brochure", "Unduh Brosur") }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-home position-relative over-flow-hide">
    <div class="box-problem">
        <div class="container-content">
            <div class="title-problem">
                <h1>{{ $data->solution_accountax_title }}</h1>
                <h3>{{ $data->solution_accountax_subtitle }}</h3>
                <h2>{{ $data->solution_accountax_painpoint_title }}</h2>
            </div>
            <div class="row">
                @if (!empty($data->solution_painpoint_list))
                    @foreach ($data->solution_painpoint_list as $v)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="item-problem">
                            <img src="{{ url_to_svg($v->solution_painpoint_list_icon) }}" alt="{{ $v->solution_painpoint_list_title }}" />
                            <div class="title-item">{{ $v->solution_painpoint_list_title }}</div>
                            <div class="desc-item">{{ $v->solution_painpoint_list_desc }}</div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    {{-- end after maintanance --}}
    <div class="img-titik atas">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div>
    <div class="img-titik bawah">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div>
</section>
<section class="section-keuntungan-tax">
    <div class="container-content">
        <h3>
            {{ $data->solution_accountax_benefit_title }}
        </h3>
        <div class="row">
            @if (!empty($data->solution_accountax_benefit_list))
                @foreach ($data->solution_accountax_benefit_list as $v)
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                    <div class="box-item-keuntungan">
                        <div class="img-title-keuntungan">
                            <img src="{{ url_to_svg($v->solution_accountax_benefit_list_icon) }}" alt="">
                            <h4>{{ $v->solution_accountax_benefit_list_title}} </h4>
                        </div>
                        <div class="desc-keuntungan">
                            {{ $v->solution_accountax_benefit_list_desc }}
                        </div>
                    </div>
                </div>
                @endforeach 
            @endif
        </div>
    </div>
</section>
<section class="section-home">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center pt-lg-4 pt-md-4 pt-5">
                    <h3>{{ $data->solution_accountax_feature_title }}</h3>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12 box-nav-tab box-nav-dekstop d-lg-flex d-md-flex d-sm-none d-none">
                <ul class="nav nav-tabs nav-tabs-video nav-tabs-feature nav-quality nav-solutions mb-lg-4 mb-md-4 mb-sm-3 mb-3">
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" data-toggle="tab" onclick="normalScroll()" href="#tab-menu-1">
                            @if (activelang() == "EN")
                            {!! str_replace(" ", "<br>", $data->solution_accountax_easy_configuration) !!}
                            @else 
                            {{ $data->solution_accountax_easy_configuration }}
                            @endif
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" onclick="normalScroll()" href="#tab-menu-2">{{ $data->solution_accountax_feature_speed_up }}</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto " data-toggle="tab" onclick="normalScroll()" href="#tab-menu-3">{{ $data->solution_accountax_latest_update_title }}</a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" onclick="normalScroll()" href="#tab-menu-4">{!! str_replace(" ", "<br>", $data->solution_accountax_asset_management_title) !!}</a>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" onclick="normalScroll()" href="#tab-menu-5">{{ $data->solution_accountax_tax_partner }} </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12 px-lg-3 px-md-3 px-1 box-nav-tab box-nav-dekstop d-lg-none d-md-none d-sm-flex d-flex">
                <ul class="nav nav-tabs nav-tabs-tax-mobile mb-lg-4 mb-md-4 mb-sm-3 mb-3">
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" onclick="normalScrollMobile()" data-toggle="tab" href="#tab-menu-1">
                            <div class="nav-img">
                                <img src="{{ asset('assets/img/icon-config-hijau.svg') }}" class="img-nav-green" alt="">
                                <img src="{{ asset('assets/img/icon-config-putih.svg') }}" class="img-nav-white" alt="">
                            </div>
                            <div style="height:50px;">{{ $data->solution_accountax_easy_configuration}}</div>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto" onclick="normalScrollMobile()" data-toggle="tab" href="#tab-menu-2">
                            <div class="nav-img">
                                <img src="{{ asset('assets/img/icon-proses-hijau.svg') }}" class="img-nav-green" alt="">
                                <img src="{{ asset('assets/img/icon-proses-putih.svg') }}" class="img-nav-white" alt="">
                            </div>
                            <div style="height:50px;">{{ $data->solution_accountax_feature_speed_up }}</div>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto " onclick="normalScrollMobile()" data-toggle="tab" href="#tab-menu-3">
                            <div class="nav-img">
                                <img src="{{ asset('assets/img/icon-update-hijau.svg') }}" class="img-nav-green" alt="">
                                <img src="{{ asset('assets/img/icon-update-putih.svg') }}" class="img-nav-white" alt="">
                            </div>
                            <div style="height:50px;">{{ $data->solution_accountax_latest_update_title }}</div>
                        </a>
                    </li>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto" onclick="normalScrollMobile()" data-toggle="tab" href="#tab-menu-4">
                            <div class="nav-img">
                                <img src="{{ asset('assets/img/icon-management-hijau.svg') }}" class="img-nav-green" alt="">
                                <img src="{{ asset('assets/img/icon-management-putih.svg') }}" class="img-nav-white" alt="">
                            </div>
                            <div style="height:50px;">{{ $data->solution_accountax_asset_management_title }}</div>
                        </a>
                    <li class="nav-item mx-lg-2 mx-md-3 mx-1">
                        <a class="nav-link w-auto" onclick="normalScrollMobile()" data-toggle="tab" href="#tab-menu-5">
                            <div class="nav-img">
                                <img src="{{ asset('assets/img/icon-tax-hijau.svg') }}" class="img-nav-green" alt="">
                                <img src="{{ asset('assets/img/icon-tax-putih.svg') }}" class="img-nav-white" alt="">
                            </div>
                            <div style="height:50px;">{{ $data->solution_accountax_tax_partner }}</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-lg-5 mb-md-5 mb-sm-4 mb-0">
        <div class="tab-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="tab-pane active" id="tab-menu-1">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    @if (!empty($data->solution_accountax_easy_configuratioln_list))
                        @foreach ($data->solution_accountax_easy_configuratioln_list as $v)
                            <div class="row box-item-solution box-item-tax-mobile d-flex">
                                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                    <div class="desc-tab-solution desc-account-tax mb-lg-0 mb-md-0 mb-3">
                                        <h4>{{ $v->solution_accountax_easy_configuratioln_list_title }}</h4>
                                        <p>
                                        {!! nl2br($v->solution_accountax_easy_configuratioln_list_desc) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                    <div class="img-tab-solution">
                                        <img src="{{ uri($v->solution_accountax_easy_configuratioln_list_image) }}" alt="{{ $v->solution_accountax_easy_configuratioln_list_title }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    @endif
                </div>
            </div>
            <div class="tab-pane" id="tab-menu-2">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3 px-lg-3 px-4">
                    @if (!empty($data->solution_accountax_speed_up_list))
                        @php $i = 0; @endphp
                        @foreach ($data->solution_accountax_speed_up_list as $v)
                        <div class="row box-item-solution box-item-tax-mobile d-flex">
                            @if (($i % 2) == 0) 
                            <div class="col-lg-6 col-md-6 d-flex justify-content-lg-first justify-content-md-first justify-content-center">
                                <div class="img-tab-solution">
                                    <img src="{{ uri($v->solution_accountax_speed_up_list_image) }}" alt="{{ $v->solution_accountax_speed_up_list_title }}">
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                <div class="desc-tab-solution desc-account-tax mb-lg-0 mb-md-0 mb-3">
                                    <h4>{{ $v->solution_accountax_speed_up_list_title }}</h4>
                                    <p>
                                        {!! nl2br($v->solution_accountax_speed_up_list_desc) !!}
                                    </p>
                                </div>
                            </div>
                            @if (($i % 2) != 0) 
                            <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                <div class="img-tab-solution">
                                    <img src="{{ uri($v->solution_accountax_speed_up_list_image) }}" alt="{{ $v->solution_accountax_speed_up_list_title }}">
                                </div>
                            </div>
                            @endif
                        </div>
                        @php $i++ @endphp
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-pane" id="tab-menu-3">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    @if (!empty($data->solution_accountax_latest_update_list))
                    @php $i = 0; @endphp
                        @foreach ($data->solution_accountax_latest_update_list as $v)
                            @if ($i == 0) 
                            <div class="row box-item-solution box-item-tax-mobile d-flex">
                                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                    <div class="desc-tab-solution desc-account-tax mb-lg-0 mb-md-0 mb-3">
                                        <h4 class="d-lg-none d-md-none d-inline-block">{{ $data->solution_accountax_latest_update_title }}</h4>
                                        <h4><div>{{ $v->solution_accountax_latest_update_list_title }}</div></h4>
                                        @php 
                                        $line_explode = explode(PHP_EOL, $v->solution_accountax_latest_update_list_desc);
                                        @endphp
                                        <h5>{{$line_explode[0]}}</h5>
                                        <ul>
                                            @foreach ($line_explode as $k => $line)
                                                @php
                                                if ($k == 0) {
                                                    continue;
                                                }
                                                @endphp
                                                <li>{{$line}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                    <div class="img-tab-solution">
                                        <img src="{{ uri($v->solution_accountax_latest_update_list_image) }}" alt="{{$v->solution_accountax_latest_update_list_title}}">
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if ($i==1) 
                            <div class="row box-item-solution box-item-tax-mobile d-flex">
                                <div class="col-lg-6 col-md-6 d-lg-flex d-md-flex d-none justify-content-start">
                                    <div class="img-tab-solution">
                                        <img src="{{ uri($v->solution_accountax_latest_update_list_image) }}" alt="{{$v->solution_accountax_latest_update_list_title}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                    <div class="desc-tab-solution desc-account-tax mb-lg-0 mb-md-0 mb-3">
                                        <h4>{{ $v->solution_accountax_latest_update_list_title }}</h4>
                                        <p>
                                            {!! nl2br($v->solution_accountax_latest_update_list_desc) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 d-lg-none d-md-none d-flex justify-content-center">
                                    <div class="img-tab-solution">
                                        <img src="{{ uri($v->solution_accountax_latest_update_list_image) }}" alt="{{$v->solution_accountax_latest_update_list_title}}">
                                    </div>
                                </div>
                            </div>  
                            @endif
                            @php $i++ @endphp
                        @endforeach 
                    @endif
                </div>
            </div>
            <div class="tab-pane" id="tab-menu-4">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    @if (!empty($data->solution_accountax_asset_management_list))
                        @foreach ($data->solution_accountax_asset_management_list as $v)
                            <div class="row box-item-solution box-item-tax-mobile d-flex">
                                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                    <div class="desc-tab-solution desc-account-tax mb-lg-0 mb-md-0 mb-3">
                                        <h4>{{ $v->solution_accountax_asset_management_list_title }}</h4>
                                        <p>
                                            {!! nl2br($v->solution_accountax_asset_management_list_desc) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                    <div class="img-tab-solution">
                                        <img src="{{ uri($v->solution_accountax_asset_management_list_image) }}" alt="{{ $v->solution_accountax_asset_management_list_title }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-pane" id="tab-menu-5">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    @if (!empty($data->solution_accountax_tax_partner_list))
                        @foreach ($data->solution_accountax_tax_partner_list as $v)
                        <div class="row box-item-solution box-item-tax-mobile d-flex">
                            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                                <div class="desc-tab-solution desc-account-tax mb-lg-0 mb-md-0 mb-3">
                                    <h4>{{ $v->solution_accountax_tax_partner_list_title }}</h4>
                                    <p>
                                        {!! nl2br($v->solution_accountax_tax_partner_list_desc) !!}
                                    </p>
                                </div>
                            </div>
                            @if (strpos($v->solution_accountax_tax_partner_list_image , 'default-pic') === false) 
                            <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                <div class="img-tab-solution">
                                    <img src="{{ uri($v->solution_accountax_tax_partner_list_image) }}" alt="{{ $v->solution_accountax_tax_partner_list_title }}">
                                </div>
                            </div>
                            @endif
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
{{-- {{ dd($data) }} --}}
@include('systemever/includes/form_request', ['meta' => (Object)[
    'home_contact_title' => $data->solution_accountax_contact_title,
    'home_contact_question' => $data->solution_accountax_contact_question,
    'home_contact_desc' => $data->solution_accountax_contact_desc,
]])
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')
<script>
    window.addEventListener("scroll", (event) => {
        let scroll = this.scrollY;
        if (scroll > 2249){
            $('.box-nav-dekstop').addClass('active');
        } else{
            $('.box-nav-dekstop').removeClass('active');
        }
    });

   function normalScroll(){
    window.scroll({
        top: 2158.5,
        behavior: 'smooth'
    });
   }
   function normalScrollMobile(){
    window.scroll({
        top: 2347.5,
        behavior: 'smooth'
    });
   }
</script>
@endsection