@extends('systemever/pages/abouts/about', [
    'spesifice_page_seo' => 'About History ' . activelang(),
    'main_banner' => $data->main_banner,
    'main_banner_title' => $data->main_banner_title,
])
@section('custom_css')
<style>
.desc-content p {
    margin-bottom: 0px !important;
}

.desc-content ul {
    padding-right: 0px !important;
}

.desc-content ul li {
    margin-bottom: 0px !important;
}
</style>
@endsection
@section('content_about')
<section class="desc-history mb-5">
    <div class="container-content">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 px-lg-3 px-md-3 px-sm-4 px-4">
                {{ $data->title_detail }}
            </div>
        </div>
    </div>
</section>
<section class="section-history position-relative px-lg-0 px-md-0 px-2">
    <div class="img-titik history">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div>
    <div class="container-content px-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10  position-relative mb-5">
                @foreach ($history as $k => $v)
                <div class="row list-history">
                    @if ($k % 2 == 0)
                    <div class="col-lg-5 col-md-5 col-sm-6 col-6">
                        <div class="img-left">
                            <img src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-6 pl-lg-3 pl-md-3 pl-sm-2 pl-2 d-flex align-items-center">
                        <div class="content-history d-flex justify-content-start">
                            <div class="date-content-history text-right d-lg-block d-md-block d-sm-none d-none">
                                <b>{{$v->year}}</b><br>{{ substr(bulan_str($v->month), 0, 3) }}
                            </div>
                            <div class="desc-content pr-0">
                                <div class="date-content-history-mobile d-lg-none d-md-none d-sm-block d-block"><span class="tahun"><b>{{$v->year}}</b></span><span class="bulan"> {{ substr(bulan_str($v->month), 0, 3) }}</span></div>
                                {!! str_replace("®", "<sup>®</sup>", remove_attr_tag($v->body))!!}
                            </div>
                        </div>
                    </div>
                    @else 
                    <div class="col-lg-7 col-md-7 col-sm-6 col-6 pr-lg-3 pr-md-3 pr-sm-2 pr-2 d-flex align-items-center justify-content-center">
                        <div class="content-history d-flex justify-content-start">
                            <div class="date-content-history text-right d-lg-block d-md-block d-sm-none d-none">
                                <b>{{$v->year}}</b><br>
                            </div>
                            <div class="desc-content ">
                                <div class="date-content-history-mobile d-lg-none d-md-none d-sm-block d-block"><span class="tahun"><b>{{$v->year}}</b></span><span class="bulan"> {{ substr(bulan_str($v->month), 0, 3) }}</span></div>
                                {!! str_replace("®", "<sup>®</sup>", remove_attr_tag($v->body))!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-6">
                        <div class="img-left">
                            <img src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                        </div>
                    </div>
                    @endif
                    <div class="stroke-line">
                        @if ($k < count($history)-1)
                            @if ($k % 2 != 0)
                            <img src="{{ asset('assets/img/Group32.svg') }}" alt="">
                            @else 
                            <img src="{{ asset('assets/img/Group31.svg') }}" alt="">
                            @endif
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection