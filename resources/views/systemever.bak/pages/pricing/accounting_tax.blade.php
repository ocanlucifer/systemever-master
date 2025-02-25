@extends('systemever/pages/pricing/pricing', [
    'spesifice_page_seo' => 'PRICING ACCOUNTING ' . activelang(),
    'banner' => $data->pricing_banner,
    'title' => $data->pricing_banner_title,
    'sub_title' => $data->pricing_banner_subtitle,
    'main_title' => $data->pricing_title
])

@section('custom_css')
<style>
.bg-oren-merah {
    background-color: #E66F3B !important;
}

.btn-get-quotation {
    color: #fff !important;
}

.btn-get-quotation:hover {
    cursor: pointer;
}

.pricing-action-tab:hover {
    cursor: pointer;
}
</style>
@endsection

@section('content_pricing')

{{-- {{ dd($data) }} --}}
<section class="mb-5 section-accounting">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="row row-min-7 d-flex mt-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7">
                        <div class="box-service mb-lg-4 mb-4">
                            <div class="header-service bg-oren-merah">{{ $data->pricing_accounting_service_title }}</div>
                            <div class="body-service box-nav-tab ">
                                {{-- <div class="box-support-list-account py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                    <ul class="listing-spec mb-0">
                                        <li><div class="list">5 users (each client)</div></li>
                                        <li><div class="list">Free up to 100GB</div></li>
                                    </ul>
                                </div> --}}
                                <div class="pt-lg-4 pt-md-4 pt-3 px-lg-4 px-md-4 px-2">
                                    @foreach ($data->pricing_accounting_service_feature_list as $v)
                                    <section class="section-list">
                                        <h4>{{ $v->pricing_accounting_service_feature_list_title }}</h4>
                                        @php 
                                        $list = explode(PHP_EOL, $v->pricing_accounting_service_feature_list_sublist);
                                        @endphp
                                        <ul class="list-unstyled">
                                            @foreach ($list as $l)
                                            <li>
                                                <img src="{{ asset_to_webp(asset('assets/img/icon-ceklist-oren.svg')) }}" alt="">
                                                <div class="list">{{ $l }}</div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </section>
                                    @endforeach
                                </div>
                            </div>
                            <div class="box-final-price bg-oren-merah text-center">
                               <b>{{ $data->pricing_accounting_service_feature_desc }}</b>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-oren-merah btn-get-question-account w-100" data-toggle="modal" data-target="#modal-request-quotation">{{ stringlang('Request Demo', 'Demo') }}</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7">
                        <div class="box-service mb-lg-4 mb-4">
                            <div class="header-service bg-biru-muda">{{ $data->pricing_bms_feature }}</div>
                            <div class="body-service box-nav-tab ">
                                {{-- <div class="box-support-list-account box-supp-list-bms py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                    <ul class="listing-spec mb-0">
                                        <li><div class="list">5 users (each client)</div></li>
                                        <li><div class="list">Free up to 100GB</div></li>
                                    </ul>
                                </div> --}}
                                
                                <div class="pt-lg-4 pt-md-4 pt-3 px-lg-4 px-md-4 px-2">
                                    @foreach ($data->pricing_bms_feature_list as $v)
                                    <section class="section-list">
                                        <h4>{{ $v->pricing_bms_feature_list_title }}</h4>
                                        @php 
                                        $list = explode(PHP_EOL, $v->pricing_bms_feature_list_sublist);
                                        @endphp
                                        <ul class="list-unstyled">
                                            @foreach($list as $l)
                                            <li>
                                                <img src="{{ asset_to_webp(asset('assets/img/icon-ceklist-biru.svg')) }}" alt="">
                                                <div class="list">{{ $l }}</div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </section>
                                    @endforeach
                                </div>
                            </div>
                            <div class="box-final-price bg-biru-muda text-center">
                                @php $desc = explode(" (", $data->pricing_bms_desc) @endphp
                                <h4>{{ $desc[0] }}</h4> <p>({{ $desc[1] }}</p>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-biru-muda btn-get-question-account w-100" data-toggle="modal" data-target="#modal-request-quotation">{{ stringlang('Request Demo', 'Demo') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection