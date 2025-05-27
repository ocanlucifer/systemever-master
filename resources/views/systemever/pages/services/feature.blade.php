@extends('systemever/pages/services/service', [
    'spesifice_page_seo' => 'Service Feature ' . activelang()
])


@section('custom_css')
<style>
.owl-pain-point .owl-dots{
    padding-top:0px !important;
}
.mainowl-margin {
    padding-top:30px;
}
@media only screen and (max-width: 600px) {
    .mainowl-margin {
        padding-top:65px;
    }
}
.service-feature-video-systemever {
    margin-bottom:-4px !important;
}
.desc-tab-mobile .items-mobile img {
    width: 100px !important;
}
.desc-tab-mobile .items-mobile p {
    text-align:left;
    margin-top:15px;
}
</style>
@endsection
@section('content_services')
<section class="section-home position-relative over-flow-hide mt-5 mb-4">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center">
                    <h3>{{ stringlang('Unique Selling Point', 'Kelebihan Produk', 'SystemEver만의 경쟁력') }}</h3>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5 d-flex mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-green pl-0 pr-0">
                <div class="video-home feature service-feature-video-systemever">
                    <iframe
                        src="https://www.youtube.com/embed/{{get_youtube_id($data->unique_selling_point_youtube)}}"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 konsep feature bg-green d-flex justify-content-center align-items-center pb-3 px-4">
                <div class="owl-carousel owl-pain-point owl-theme mainowl-margin">
                    @foreach($data->unique_selling_point_image as $v)
                    <div class="item">
                        <img src="{{ asset_to_webp(uri($v)) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 pt-4">
                <div class="caption-img-konsep text-center">{{ stringlang('Visual-K™  Process Map', 'Peta Proses Visual-K™', 'Visual-K™ Process Map') }}</div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 d-flex justify-content-start align-items-start desc-map py-lg-3 py-md-3 py-sm-1 px-4">
                <img src="{{ asset('assets/img/check-hijau.svg') }}" alt="">
                <p>{{$data->visual_k_proccess_map_feature_1}}</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 d-flex justify-content-start align-items-start desc-map py-lg-3 py-md-3 py-sm-1 px-4">
                <img src="{{ asset('assets/img/check-hijau.svg') }}" alt="">
                <p>{{$data->visual_k_proccess_map_feature_2}}</p>
            </div>
        </div>
    </div>
  </section>
  <section class="section-work-environment mb-lg-5 mb-md-4 mb-sm-3 mb-4">
    <div class="container">
        <div class="row d-flex">
            <div class="box-list-proses-map">
                <div class="list">{{ stringlang('Self-Design', 'Self-Design', 'Self-design')}}</div>
                <div class="list">{{ stringlang('Visibly', 'Visibilitas', '직관적인 시각화' )}}</div>
                <div class="list">{{ stringlang('User Friendly', 'Mudah Digunakan','사용자 친화적')}}</div>
            </div>
            <div class="col-lg-9">
                {{-- <div class="img-circle-hijau">
                    <img src="{{ asset('assets/img/Ellipse141.png') }}" alt="">
                </div> --}}
                <div class="img-map mb-3">
                    <img src="{{ asset_to_webp(uri($data->visual_k_proccess_map_banner)) }}" alt="">
                    {{-- <img src="{{ asset_to_webp(uri($data->visual_k_proccess_map_banner_mobile)) }}" alt="" class="d-block d-md-none"> --}}
                </div>
                <div class="caption-img-map-proses bg-green">
                    {{ stringlang('Suitable to the implement work environment', 'Mudah digunakan dan diimplementasikan', '다양한 업무 환경에 맞게 유연하게 대응') }}
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="step-feature d-lg-flex d-md-flex d-sm-block d-block">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-green py-lg-5 py-md-4 py-sm-3 py-3 d-md-block d-none">
            <div class="img-step-feature my-3 pl-lg-5 pl-md-4 pl-sm-0 pl-0">
                <img src="{{ asset_to_webp($data->visual_k_superiority_map_banner) }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-green-old py-lg-5 py-md-4 py-sm-3 py-3 d-md-flex d-block align-items-center">
            <div class="img-step-feature my-3 pl-lg-5 pl-md-4 pl-sm-0 pl-0 d-md-none d-block">
                <img src="{{ asset_to_webp($data->visual_k_superiority_map_banner) }}" alt="">
            </div>
            <div class="box-list-step my-3">
                @foreach($data->visual_k_superiority_map_list as $v)
                <div class="list-step mb-4">
                    <div class="title-list d-flex justify-content-start align-items-center mb-3">
                        <img src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="">
                        <div>
                            <h4>{{ $v->title }}</h4>
                            <p>{{ $v->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
  </section>
  <section>
    <div class="container-content">
        <div class="row  mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12 mt-lg-5 mt-md-4 mt-sm-3 mt-3">
                <div class="caption-img-konsep text-center">{{ stringlang('Features', 'Fitur', '주요기능') }}</div>
            </div>
        </div>
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-tabs-video nav-tabs-feature mb-lg-5 mb-md-4 mb-sm-3 mb-3 w-auto system-feature-tab">
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" data-toggle="tab" href="#tab-menu-1">{{ stringlang('Mobile App', 'Aplikasi Mobile', '모바일 앱') }}</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link  w-auto" data-toggle="tab" href="#tab-menu-2">{{ stringlang('Multilingual', 'Multi Bahasa', '다국어') }}</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link  w-auto" data-toggle="tab" href="#tab-menu-3">{{ stringlang('Multi-currency', 'Multi-currency', '다중 통화') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex mb-lg-5 mb-md-5 mb-4">
        <div class="tab-content w-100">
            <div class="tab-pane active" id="tab-menu-1">
                <div class="container-content mb-lg-5 mb-md-4 mb-3">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-12 pl-lg-5 pl-md-5 pl-3">
                            <div class="desc-tab-mobile px-md-0 px-3">
                                <p>{{ $data->mobile_app_description }}</p>
                                <div class="row mt-lg-5 mt-md-4 mt-3">
                                    @foreach($data->mobile_app_selling_point as $v)
                                    <div class="col-lg-6 col-md-6 col-6 mb-4">
                                        <div class="items-mobile pb-4">
                                            <img src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="" class="w-100">
                                            <p style="witdh:50%">{!! str_replace(" ", "&nbsp;", $v->title) !!}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="img-mobile-apps text-center">
                                <img src="{{ asset_to_webp(asset('assets/img/Ellipse142.png')) }}" class="latar-hijau" alt="">
                                <img src="{{ asset_to_webp(asset('assets/img/image196.png')) }}" class="mobile-apps" alt="">
                                <p style='font-family: "Poppins",sans-serif; color:#DB2700'>{{ stringlang('(This app will be available for Indonesian market soon)', '(This app will be available for Indonesian market soon)', '(본 앱은 곧 인도네시아 시장에 출시될 예정입니다)') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-md-flex d-sm-block d-bloc">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-0 pr-md-0 pr-3">
                        <div class="img-mobile d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                            <img class="mr-3" src="{{ asset_to_webp(asset('assets/img/Group494.png')) }}" alt="">
                            <img src="{{ asset_to_webp(asset('assets/img/Group533.png')) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                        <div class="row bg-green-medium">
                            <div class="col-lg-12 px-lg-5 px-md-4 px-4 py-4">
                                <ul class="list-unstyled list-feature-mobile">
                                    @foreach($data->mobile_app_superiority as $v)
                                    <li><img src="{{ asset('assets/img/check-white.svg') }}" alt=""><div>{{ $v->title }}</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container " id="tab-menu-2">
                <div class="img-multilingual text-center">
                    <img class="d-lg-block d-md-block d-sm-none d-none w-100" src="{{ asset_to_webp(uri($data->mobile_app_multilanguage_feature)) }}" alt="">
                    <img class="d-lg-none d-md-none d-sm-block d-block w-100" src="{{ asset_to_webp(uri($data->mobile_app_multilanguage_feature_mobile)) }}" alt="">
                </div>
            </div>
            <div class="tab-pane container " id="tab-menu-3">
                <div class="desc-multi-currency">
                    <p>{{$data->mobile_app_multicurency_description}}
                    </p>
                    <img class="d-lg-block d-md-block d-sm-none d-none w-100" src="{{  asset_to_webp(uri($data->mobile_app_multi_curency_feature_ilustration)) }}" alt="">
                    <img class="d-lg-none d-md-none d-sm-block d-block w-100" src="{{  asset_to_webp(uri($data->mobile_app_multi_curency_feature_ilustration_mobile)) }}" alt="">

                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

@section('custom_js')
<script>
$('.owl-pain-point').owlCarousel({
    loop:true,
    margin:10,
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
