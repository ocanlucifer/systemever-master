@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Quality Security ' . activelang()
])

@section('custom_css')
<style>
    .alas-background .box-last-content .last-content-service h4 {
        height: 30px !important;
    }
    .alas-background .box-last-content .last-content-service .apec {
        height: 80px !important;
    }
</style>
@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('One Page ERP for Small Medium Enterprises', 'Satu Halaman ERP untuk Usaha Micro dan Menengah') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-home position-relative mt-lg-5 mt-md-4 mt-sm-4 mt-4">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center">
                    <h3>{{ stringlang('Quality / Security', 'Kualitas / Keamanan') }}</h3>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-tabs-video nav-tabs-feature nav-quality mb-lg-5 mb-md-4 mb-sm-3 mb-3 w-auto">
                    @if (activelang() == "EN")
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" data-toggle="tab" href="#tab-menu-1">Cloud Quality <br/> Performance</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-2">Security <br/>Compliance</a>
                    </li>
                    @else 
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" data-toggle="tab" href="#tab-menu-1">Kualitas Cloud <br/> & Performanya</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-2">Kepatuhan<br/>Keamanan</a>
                    </li>
                    @endif
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-3">APAC CIOoutlook <br/>Top ERP 2018</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-4">APAC CIOoutlook<br/> Top ERP 2020</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex mb-lg-5 mb-md-5 mb-sm-4 mb-0">
        <div class="tab-content mb-lg-5 mb-md-4 mb-sm-3 mb-3 w-100">
            <div class="tab-pane active" id="tab-menu-1">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                        <div class="col-lg-12">
                            <div class="media media-quality mb-4">
                                <img class="mr-lg-3 mr-md-3 mr-0" src="{{ asset_to_webp(uri($data->cloud_quality_performance_logo)) }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h3 class="mt-0">{{$data->cloud_quality_performance_title}}</h3>
                                    <p>{{$data->cloud_quality_performance_detail}}</p>
                                </div>
                            </div>
                            <table class="table-service">
                                @foreach($data->cloud_quality_performance_service_name as $v)
                                <tr>
                                    <td><b>{{$v->title}}</b></td>
                                    <td>{{$v->description}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                        <div class="col-lg-12">
                            <div class="title-section-tab text-center">
                                <h3>{{ stringlang('Quality performance test', 'Test Kualitas Performa') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row content-quality">
                        @foreach($data->cloud_quality_performance_performance_test as $v)
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 padding-min-7-mb mb-md-0 mb-3">
                            <div class="box-quality">
                                <img src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="">
                                <div class="caption-box-quality">{{$v->title}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row section-alas">
                        <div class="col-lg-12">
                            <div class="title-section-tab text-center">
                                <h3>{{ stringlang('Checking', 'Permeriksaan') }} <br class="d-lg-none d-md-none d-sm-block d-block"> {{ stringlang('the management system', 'sistem manajemen') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alas-background bg-green">
                    <div class="container-content mb-5 d-lg-block d-md-block d-sm-none d-none">
                        <div class="row box-last-content">
                            @foreach($data->cloud_quality_performance_management_system as $v)
                            <div class="col-lg-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                                    <div class="desc-last-content px-3">
                                        <h4>{{$v->title}}</h4>
                                        <p>{{$v->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- mobile --}}
                    <div class="owl-carousel box-last-content owl-checking-management d-lg-none d-md-none d-sm-block d-block">
                        @foreach($data->cloud_quality_performance_management_system as $v)
                            <div class="item">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                                    <div class="desc-last-content px-3">
                                        <h4>{{$v->title}}</h4>
                                        <p>{{$v->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- endmobile --}}
                </div>
            </div>
            
            <div class="tab-pane container " id="tab-menu-2">
                <div class="row mb-lg-5 mb-md-4 mb-sm-2 mb-2">
                    <div class="col-lg-12">
                        <div class="desc-security-quality">
                            <h3>{{$data->security_compliance_title}}</h3>
                            <p>{{$data->security_compliance_sub_title}}</p>
                        </div>
                        <table class="table-service d-lg-block d-md-block d-sm-none d-none">
                            @foreach($data->azure_cloud_service_feature as $v)
                            <tr>
                                <td><b>{{$v->title}}</b></td>
                                <td>{{$v->description}}</td>
                            </tr>
                            @endforeach
                        </table>
                        {{-- mobile --}}
                        <div class="accordion accordion-quality d-lg-none d-md-none d-sm-block d-block" id="accordion-quality">
                            @foreach($data->azure_cloud_service_feature as $k => $v)
                            <div class="card card-quality">
                                <div class="card-header" id="acc-head-{{$k}}">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-{{$k}}" aria-expanded="true" aria-controls="collapse-quality-{{$k}}">
                                        {{$v->title}} <i class="fa fa-angle-down"></i>
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapse-quality-{{$k}}" class="collapse" aria-labelledby="acc-head-{{$k}}" data-parent="#accordion-quality">
                                  <div class="card-body">
                                    {{$v->description}}
                                  </div>
                                </div>
                              </div>
                            @endforeach
                        </div>
                        {{-- endmobile --}}
                    </div>
                </div>
                <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="col-lg-12">
                        <div class="desc-security-quality">
                            <h3>{{ stringlang('Azure compliance', 'Azure compliance') }}</h3>
                            <img src="{{ asset_to_webp(uri($data->cloud_quality_azure_compliance_mobile)) }}" alt="" class="w-100 d-block d-md-none">
                            <img src="{{ asset_to_webp(uri($data->cloud_quality_azure_compliance)) }}" class="w-100 d-none d-md-block">
                        </div>
                    </div>
                </div>
                <div class="row mb-md-4 mb-sm-3 mb-3">
                    <div class="col-lg-12">
                        <div class="desc-security-quality">
                            <h3>{{ stringlang('Compliant with various information protection standards and security controls, 
                                and obtained certifications from government and private industries', 
                                'Sesuai dengan berbagai standar perlindungan informasi dan kontrol keamanan, 
                                dan memperoleh sertifikasi dari industri pemerintah dan swasta')}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="col-lg-12">
                        <table class="table-certification d-lg-block d-md-block d-sm-none d-none">
                            <thead>
                                <tr>
                                    <th>Program</th>
                                    <th>Applicable country</th>
                                    <th>Type</th>
                                    <th>Explanation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data->cloud_quality_azure_standard as $v)
                                <tr>
                                    <td><b>{{$v->program}}</b></td>
                                    <td>{{$v->applicable_country}}</td>
                                    <td>{{$v->type}}</td>
                                    <td>{{$v->explanation}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- mobile --}}
                        <div class="accordion accordion-quality d-lg-none d-md-none d-sm-block d-block" id="accordion-certification">
                            @foreach($data->cloud_quality_azure_standard as $v)
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-1">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-1" aria-expanded="true" aria-controls="collapse-cert-1">
                                    {{$v->program}} <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapse-cert-1" class="collapse" aria-labelledby="acc-cert-1" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>{{$v->applicable_country}}</p>
                                    <h5>Type</h5>
                                    <p>{{$v->type}}</p>
                                    <h5>Explanation</h5>
                                    <p>{{$v->explanation}}</p>
                                </div>
                              </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- endmobile --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="media media-quality media-framework mb-lg-4 mb-sm-0 mb-0">
                            {{-- <img class="mr-5" src="{{ asset('assets/img/image203.png') }}" alt="Generic placeholder image"> --}}
                            <div class="media-body">
                                @if (activelang() == "EN")
                                <h3 class="mt-0">Microsoft Security Compliance <br> Framework</h3>
                                @else
                                <h3 class="mt-0">Microsoft Security Compliance <br> Framework</h3>
                                @endif
                                <ul>
                                    @foreach($data->cloud_quality_microsoft_security as $v)
                                    <li>{{$v->title}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="tab-menu-3">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                        <div class="col-lg-12">
                            <div class="media media-quality media-erp mb-4">
                                <img class="mr-5 d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/image201.png') }}" alt="">
                                <div class="media-body pr-lg-4 pr-md-4">
                                    <div class="d-lg-none d-md-none d-sm-flex d-flex align-items-center justify-content-start">
                                        <img class="mr-3" src="{{ asset('assets/img/image201.png') }}" alt="">
                                        <div>
                                            <h3 class="mt-0">{{$data->apac_cio_outlook_top_erp_2018_title}}</h3>
                                            <h5>{{ stringlang('Leading ERP Solution and Service Provider Announced by APAC CIO Outlook', 
                                            'Terdepan dalam Solusi ERP dan penyedia Layanan, Diumumkan oleh APAC CIO Outlook') }}</h5>
                                        </div>
                                    </div>
                                    <div class="d-lg-block d-md-block d-sm-none d-none">
                                        @if (activelang() == "EN")
                                        <h3 class="mt-0">Younglimwon Soft Lab, selected as <br>
                                        “Top 10 ERP Solution Provider 2018”</h3>
                                        @else
                                        <h3 class="mt-0">Younglimwon Soft Lab, terpilih sebagai <br>
                                            “Top 10 ERP Solution Provider 2018”</h3>
                                        @endif
                                        <h5>{{$data->apac_cio_outlook_top_erp_2018_sub_title}}</h5>
                                    </div>
                                    <p>{{$data->apac_cio_outlook_top_erp_2018_description}}</p>
                                </div>
                            </div>
                            <table class="table-service">
                                @foreach($data->apac_cio_outlook_top_erp_2018_service_name as $v)
                                <tr>
                                    <td><b>{{$v->title}}</b></td>
                                    <td>{{$v->description}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    
                    <div class="row section-alas">
                        <div class="col-lg-12">
                            <div class="title-section-tab text-center">
                                <h3>{{ stringlang('Features of SystemEver seen by APAC CIO outlook', 'Fitur SystemEver yang dilirik oleh APAC CIO outlook') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alas-background bg-green alas-bg-apac">
                    <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3 d-lg-block d-md-block d-sm-none d-none">
                        <div class="row box-last-content">
                            @foreach($data->apac_cio_outlook_top_erp_2018_features as $v)
                            <div class="col-lg-4 col-md-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                                    <div class="desc-last-content-apec px-3">
                                        <h4 class="apec">{{ $v->title }}</h4>
                                        <p>{{$v->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- mobile --}}
                    <div class="owl-carousel box-last-content owl-apac d-lg-none d-md-none d-sm-block d-block">
                        @foreach($data->apac_cio_outlook_top_erp_2018_features as $v)
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                                <div class="desc-last-content-apec px-3">
                                    <h4 class="apec">{{ $v->title }}</h4>
                                    <p>{{$v->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- endmobile --}}
                </div>
            </div>
            <div class="tab-pane " id="tab-menu-4">
                <div class="container-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="media media-quality media-apac2 border-media pb-5 mb-lg-5 mb-md-5 mb-3">
                                <img class="mr-3 d-lg-block d-md-block d-sm-none d-none" src="{{ asset_to_webp(uri($data->apac_cio_outlook_top_erp_2020_logo)) }}" alt="">
                                <div class="media-body pr-lg-5 pr-md-5">
                                    <div class="d-lg-none d-md-none d-sm-flex d-flex align-items-center justify-content-start">
                                        <img class="mr-3" src="{{ asset_to_webp(uri($data->apac_cio_outlook_top_erp_2020_logo)) }}" alt="">
                                        <div>
                                            <h3 class="mt-0">{{ $data->apac_cio_outlook_top_erp_2020_title }}</h3>
                                            <h5>{{ $data->apac_cio_outlook_top_erp_2020_sub_title }}</h5>
                                        </div>
                                    </div>
                                    <div class="d-lg-block d-md-block d-sm-none d-none">
                                        <h3 class="mt-0">{{ $data->apac_cio_outlook_top_erp_2020_title }}</h3>
                                        <h5>{{ $data->apac_cio_outlook_top_erp_2020_sub_title }}</h5>
                                    </div>
                                     
                                    {!! nl2br($data->apac_cio_outlook_top_erp_2020_description) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-4 mb-md-4  mb-2">
                        <div class="col-lg-12">
                            <div class="desc-security-quality text-center">
                                @if (activelang() == "EN")
                                <h3>Features of Cloud SaaS ERP “SystemEver” <br class="d-lg-block d-md-block d-sm-none d-none"> as seen by APAC CIO Outlook</h3>
                                @else 
                                <h3>Fitur dari Cloud SaaS ERP “SystemEver” <br class="d-lg-block d-md-block d-sm-none d-none"> yang dilirik oleh APAC CIO Outlook</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            @php $counter = 1 @endphp
                            @foreach($data->apac_cio_outlook_top_erp_2020_features as $v)
                            @php if ($counter > 3) { $counter++; continue; } @endphp
                            <div class="list-features-cloud">
                                <div class="nomer">{{$counter++}}</div>
                                <div class="desc-cloud">{{$v->description}}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            @php $counter = 1 @endphp
                            @foreach($data->apac_cio_outlook_top_erp_2020_features as $v)
                            @php if ($counter < 4) { $counter++; continue; } @endphp
                            <div class="list-features-cloud">
                                <div class="nomer">{{$counter++}}</div>
                                <div class="desc-cloud">{{$v->description}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
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
    $('.owl-checking-management').owlCarousel({
        loop:true,
        margin:20,
        stagePadding: 90,
        nav:false,
        dots:false,
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
    $('.owl-apac').owlCarousel({
        loop:true,
        margin:20,
        stagePadding: 90,
        nav:false,
        dots:false,
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
