@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Solution i1 ' . activelang()
])

@section('custom_css')
<style>
    .desc-tab-solution ul {
        list-style-image: url('{{ uri('assets/img/Vector.svg') }}');
        padding-left:21px !important;
    }
    .desc-tab-solution ul li {
        display: revert !important;
    }
</style>
@endsection
@section('content')
<section class="section-banner-full position-relative">
    <img src="{{ uri($data->solution_bms_banner) }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-lg-5 pt-md-3 pt-sm-0 pt-0">
        <div class="container">
            <h1>{{ $data->solution_bms_banner_title }}</h1>
            <p>{{ $data->solution_bms_banner_subtitle }}</p>
            <div class="row">
                <div class="col-lg-4 pt-lg-3 pt-md-3 pt-sm-0 pt-0">
                    <a href="{{ route('get.contact') }}"><button class="btn-oval btn-white-border btn-banner text-uppercase  mb-3"><img src="{{ asset('assets/img/play-button.svg') }}" alt="">{{ stringlang("Free Demo" , "Demo Gratis") }}</button></a>
                    <button class="btn-oval btn-white-border btn-banner text-uppercase " data-toggle="modal" data-target="#modal-download-form"><img src="{{ asset('assets/img/icon-download.svg') }}" alt="">{{ stringlang("Download Brochure", "Unduh Brosur") }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-home position-relative">
    <div class="box-problem">
        <div class="container-content">
            <div class="title-problem">
                <h2>{{ $data->solution_bms_painpoint_title }}</h2>
            </div>
            <div class="row">
                @if (!empty($data->solution_bms_painpoint_list))
                    @foreach ($data->solution_bms_painpoint_list as $v)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="item-problem">
                            <img src="{{ url_to_svg($v->solution_bms_painpoint_list_icon) }}" alt="{{ $v->solution_bms_painpoint_list_title }}" />
                            <div class="title-item">{{ $v->solution_bms_painpoint_list_title }}</div>
                            <div class="desc-item">{{ $v->solution_bms_painpoint_list_desc }}</div>
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
<section class="section-home">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center pt-lg-4 pt-md-4 pt-4">
                    <h2>{{ $data->solution_bms_title }}</h2>
                    <h4><i>{{ $data->solution_bms_subtitle }}</i></h4>
                    <p class="cl-black">{{ $data->solution_bms_desc }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-home">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center pt-lg-4 pt-md-4 pt-4 pb-lg-2 pb-md-2 pb-4">
                    <h3>{{ $data->solution_bms_feature_title }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-content padding-container-box-solution mb-lg-5 mb-md-4 mb-sm-3 mb-3">
        @if (!empty($data->solution_bms_feature_list))
        @php $i = 0 @endphp
        @foreach ($data->solution_bms_feature_list as $v)
        <div class="row box-item-solution box-item-tax-mobile d-flex">
            @if (($i % 2) == 0)
            <div class="col-lg-6 col-md-6 d-lg-flex d-md-flex d-none justify-content-start">
                <div class="img-tab-solution">
                    <img src="{{ uri($v->solution_bms_feature_list_image) }}" alt="{{ $v->solution_bms_feature_list_title }}">
                </div>
            </div>
            @endif
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="desc-tab-solution text-left">
                    <h4>{{ $v->solution_bms_feature_list_title }}</h4>
                    @php 
                    $line_explode = explode(PHP_EOL, $v->solution_bms_feature_list_desc);
                    @endphp
                    <p>{{$line_explode[0]}}</p>
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
            @if (($i % 2) == 0)
            <div class="col-lg-6 col-md-6 d-lg-none d-md-none d-flex justify-content-center">
                <div class="img-tab-solution">
                    <img src="{{ uri($v->solution_bms_feature_list_image) }}" alt="{{ $v->solution_bms_feature_list_title }}">
                </div>
            </div>
            @else
            <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                <div class="img-tab-solution">
                    <img src="{{ uri($v->solution_bms_feature_list_image) }}" alt="{{ $v->solution_bms_feature_list_title }}">
                </div>
            </div>
            @endif
        </div>
        @php $i++ @endphp
        @endforeach
        @endif        
    </div>
</section>

@include('systemever/includes/form_request', ['meta' => (Object)[
    'home_contact_title' => $data->solution_bms_contact_title,
    'home_contact_question' => $data->solution_bms_contact_question,
    'home_contact_desc' => $data->solution_bmc_contact_desc,
]])
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')
@endsection