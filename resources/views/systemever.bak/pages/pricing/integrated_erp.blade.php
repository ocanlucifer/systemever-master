@extends('systemever/pages/pricing/pricing', [
    'spesifice_page_seo' => 'PRICING ERP ' . activelang()
])

@section('custom_css')
<style>
.btn-get-quotation {
    color: #fff !important;
}

.btn-get-quotation:hover {
    cursor: pointer;
}

.pricing-action-tab:hover {
    cursor: pointer;
}

.relaunch-phar {
    padding-top: 23px;
    padding-bottom: 73px;
    font-weight: bold;
    color: #fff;
}

.support-list {
    text-align: left;
}
</style>
@endsection

@section('content_pricing')
<section class="mb-5 section-erp"  style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-4 px-md-3 px-3 mb-lg-0 mb-md-0 mb-5">
                <div class="title-account bg-merah-redup mb-5">
                    {{ stringlang('i5 Trading and Distribution ERP', 'i5 ERP Perdagangan dan Distribusi') }}
                </div>
                <div class="row pt-lg-3 pt-md-3 pt-0 row-min-7-mb">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        @if (!empty($data->i5_standard_price))
                        <div class="box-price bg-yellow pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-yellow">Standard</div>
                            </div>
                            <div class="start-form">{{ stringlang('Monthly','Bulanan') }}</div>
                            <h2>{{substr($data->i5_standard_price,-7,1)}}<span class="digit2">.{{substr($data->i5_standard_price,-6,1)}}</span><small>juta </small><span class="permonth"> per {{ stringlang('month','bulan') }}</span></h2>
                        </div>
                        @else
                        <div class="box-price bg-yellow pt-lg-5 pt-md-4 pt-4">
                            <div class="box-grade">
                                <div class="grade grade-yellow">Standard</div>
                            </div>
                        </div>
                        @endif
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4" style="{{ empty($data->i5_standard_price) ? 'margin-top: -50px !important;' : '' }}">
                            <div class="body-service support border-bottom py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-4">
                                    @foreach($data->i5_standard_user_space as $v)
                                    <li><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                                <a class="btn-oval bg-yellow btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">{!! stringlang('Get Quotation','Dapatkan&nbsp;Penawaran') !!}</a>
                            </div>
                            <div class="body-service box-nav-tab integrated py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i5-trading-body">
                                <ul class="list-unstyled">
                                    @foreach($data->i5_standard_feature as $v)
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a class="btn-oval btn-request btn-block btn-yellow w-100" href="{{ route('get.contact') }}">{{ stringlang('Request Demo', 'Demo') }}</a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        @if (!empty($data->i5_Enterprice_price))
                        <div class="box-price bg-marun pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-marun">Enterprise</div>
                            </div>
                            <div class="start-form">{{ stringlang('Monthly','Bulanan') }}</div>
                            <h2>{{substr($data->i5_Enterprice_price,-7,1)}}<span class="digit2">.{{substr($data->i5_Enterprice_price,-6,1)}}</span><small>juta </small><span class="permonth"> per {{ stringlang('month','bulan') }}</span></h2>
                        </div>
                        @else 
                        <div class="box-price bg-marun pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-marun">Enterprise</div>
                            </div>
                        </div>
                        @endif
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4" style="{{ empty($data->i5_Enterprice_price) ? 'margin-top: -50px !important;' : '' }}">
                            <div class="body-service support border-bottom py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-4">
                                    @foreach($data->i5_Enterprice_user_space as $v)
                                    <li><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                                <a class="btn-oval  bg-marun btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">{!! stringlang('Get Quotation','Dapatkan&nbsp;Penawaran') !!}</a>
                            </div>
                            <div class="body-service box-nav-tab integrated py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i5-trading-body">
                                <ul class="list-unstyled">
                                    @foreach($data->i5_Enterprice_feature as $v)
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a class="btn-oval btn-request btn-block btn-marun w-100" href="{{ route('get.contact') }}">{{ stringlang('Request Demo', 'Demo') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-4 px-md-3 px-3">
                <div class="title-account bg-blue-medium mb-5" id="pricing-i7">
                    {{ stringlang('i7 Manufacturing ERP', 'i7 ERP Manufaktur') }}
                </div>
                <div class="row pt-lg-3 pt-md-3 pt-0 row-min-7-mb">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        @if (!empty($data->i7_standard_price))
                        <div class="box-price bg-light-blue pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-light-blue">Standard</div>
                            </div>
                            <div class="start-form">{{ stringlang('Monthly','Bulanan') }}</div>
                            <h2>{{substr($data->i7_standard_price,-7,1)}}<span class="digit2">.{{substr($data->i7_standard_price,-6,1)}}</span><small>juta </small><span class="permonth"> per {{ stringlang('month','bulan') }}</span></h2>
                        </div>
                        @else 
                        <div class="box-price bg-light-blue pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-light-blue">Standard</div>
                            </div>
                            <p class="relaunch-phar">
                                Manufacturing ERP
                                <br>(coming soon)
                            </p>
                        </div>
                        @endif
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4" style="{{ empty($data->i7_standard_price) ? 'margin-top: -50px !important;' : '' }}">
                            <div class="body-service support border-bottom  py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-0">
                                    @foreach($data->i7_standard_user_space as $v)
                                    <li><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                                {{-- <a class="btn-oval bg-light-blue btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">{!! stringlang('Get Quotation','Dapatkan&nbsp;Penawaran') !!}</a> --}}
                            </div>
                            <div class="body-service box-nav-tab integrated py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i7-manufacture-body">
                                <ul class="list-unstyled">
                                    @foreach($data->i7_standard_feature as $v)
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a class="btn-oval btn-request btn-block btn-light-blue w-100" href="{{ route('get.contact') }}">{{ stringlang('Request Demo', 'Demo') }}</a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        @if (!empty($data->i7_Enterprice_price))
                        <div class="box-price bg-blue pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-blue">Enterprise</div>
                            </div>
                            <div class="start-form">{{ stringlang('Monthly','Bulanan') }}</div>
                            <h2>{{substr($data->i7_Enterprice_price,-7,1)}}<span class="digit2">.{{substr($data->i7_Enterprice_price,-6,1)}}</span><small>juta </small><span class="permonth"> per {{ stringlang('month','bulan') }}</span></h2>
                        </div>
                        @else 
                        <div class="box-price bg-blue pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-blue">Enterprise</div>
                            </div>
                            <p class="relaunch-phar">
                                Manufacturing ERP
                                <br>(coming soon)
                            </p>
                        </div>
                        @endif
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4" style="{{ empty($data->i7_Enterprice_price) ? 'margin-top: -50px !important;' : '' }}">
                            <div class="body-service support border-bottom  py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-0">
                                    @foreach($data->i7_Enterprice_user_space as $v)
                                    <li><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                                {{-- <a class="btn-oval w-100 bg-blue btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">{!! stringlang('Get Quotation','Dapatkan&nbsp;Penawaran') !!}</a> --}}
                            </div>
                            <div class="body-service box-nav-tab integrated  py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i7-manufacture-body">
                                <ul class="list-unstyled">
                                    @foreach($data->i7_Enterprice_feature as $v)
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">{{$v->title}}</div></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a class="btn-oval btn-request btn-block btn-blue w-100" href="{{ route('get.contact') }}">{{ stringlang('Request Demo', 'Demo') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mb-5 section-accounting">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="title-account account-tax bg-merah-oren mb-3">
                    {{ stringlang('Accounting & Tax Consulting Service', 'Layanan Akuntansi & Konsultasi Pajak') }}
                </div>
                @if (!empty($data->i1_price))
                <div class="box-price bg-oren-merah pt-lg-5 pt-md-4 pt-4 pb-4">
                    <div class="start-form">{{ stringlang('Start from', 'Mulai Dari')}}</div>
                    <h1>{{substr($data->i1_price,-7,1)}}<span class="digit2">.{{substr($data->i1_price,-6,1)}}</span><small>juta </small><span class="permonth"> per {{ stringlang('month', 'bulan')}}</span></h1>
                </div>
                @endif
                <div class="row row-min-7 d-flex mt-3">
                    <div class="col-sm-12 padding-min-7">
                        <div class="box-service">
                            <div class="header-service">{{ stringlang('Optional Service', 'Layanan Operasional') }}</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7">
                        <div class="box-service h-100">
                            <div>
                                <div class="header-service bg-oren-merah header-service-title-big">{{ stringlang('Accounting Service', 'Layanan Akuntansi') }}</div>
                            </div>
                            <div class="body-service box-nav-tab py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="list-unstyled">
                                    @if (!empty($data->account_service_feature))
                                        @foreach($data->account_service_feature as $v)
                                        <li><img src="{{ asset_to_webp(asset('assets/img/check-join2.png')) }}" alt=""><div class="list">{{$v->title}}</div></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7">
                        <div class="box-service h-100">
                            <div>
                                <div class="header-service bg-oren-merah header-service-title-big">{{ stringlang('Tax Service', 'Layanan Pajak') }}</div>
                            </div>
                            <div class="body-service box-nav-tab py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="list-unstyled">
                                    @if (!empty($data->tax_service_feature))
                                        @foreach($data->tax_service_feature as $v)
                                        <li><img src="{{ asset_to_webp(asset('assets/img/check-join2.png')) }}" alt=""><div class="list">{{$v->title}}</div></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="box-final-price px-3 py-2 text-center">
                            {{ stringlang('The final price will be determinated according to the service you choose', 
                            'Harga akhir akan disesuaikan dengan layanan & module yang anda pilih')}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-service mb-5">
                            <div class="header-service">{{ stringlang('Support Software Included', 'Software Pendukung Termasuk') }}</div>
                            <div class="body-service support p-4">
                                <ul class="support-list">
                                    @if (!empty($data->support_software))
                                        @foreach($data->support_software as $v)
                                        <li><div class="list">{{$v->title}}</div></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-oren-merah btn-get-question-account w-100" data-toggle="modal" data-target="#modal-request-quotation">{{ stringlang('Request Demo', 'Demo') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection