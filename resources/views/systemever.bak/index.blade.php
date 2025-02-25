@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Home ' . activelang()
])

@section('custom_css')
<style>
.owl-pain-points .owl-dots{
    padding-top:0px !important;
}
.bg-green-pain-point {
    height:400px;
}
.desc-erp-item ul {
    list-style-image: url('{{ uri('assets/img/Vector.svg') }}');
    padding-left:21px !important;
}
.desc-erp-item ul li {
    display: revert !important;
}
.mainowl-margin {
    padding-top:30px;
}
@media only screen and (max-width: 600px) {
    .mainowl-margin {
        padding-top:65px;
    } 
}   
@media only screen and (max-width: 480px) {
    .mainowl-margin {
        padding-top:40px;
    } 
}   
.home-video-systemever {
    margin-bottom:-4px;
}
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
  <section class="section-banner-full mb-lg-5 mb-sm-4 mb-4 position-relative">
    <img src="{{ asset_to_webp(uri($meta->home_banner)) }}" alt="">
    <div class="caption-banner  d-flex align-items-center">
        <div class="container">
            <h1 class="col-12 col-md-9">{{ordefault($meta->banner_title, "Successful ERP Management")}}</h1>
            <p class="col-12 col-md-9">{{ordefault($meta->banner_subtitle, "Our ERP system has been tested for more than 27 years and is used by thousands of customers.")}}</p>
            @if (!empty($meta->banner_url))
            <a href="{{$meta->banner_url}}"><button class="btn-oval btn-white-border btn-banner text-uppercase mb-3 col-12 col-md-3 px-3 ml-3">{{ stringlang("See more", "Selengkapnya") }}</button></a>
            @endif
        </div>
    </div>
  </section>
  <section class="section-home position-relative over-flow-hide">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-sm-4 mb-4">
            <div class="col-lg-12 px-4">
                <div class="info-system-ever text-center">
                    <h2 class="cl-dark-gray">{{$meta->home_main_title}}</h2>
                    <p><i>{{ $meta->home_main_subtitle }}</i></p>
                </div>
            </div>
        </div>
        
        <div class="row mb-lg-5">
            <div class="col-lg-12 d-lg-flex d-sm-block d-block px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="col-lg-6 col-12 bg-green pl-0 pr-0 d-lg-block d-md-block d-none">
                    <div class="video-home video-systemever home-video-systemever">
                        <iframe 
                         src="https://www.youtube.com/embed/{{get_youtube_id($meta->home_youtube)}}" 
                         title="YouTube video player" 
                         frameborder="0" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-12 konsep bg-green d-flex justify-content-center align-items-center mainowl-margin">
                   <div class="owl-carousel owl-slide-konsep">
                        @foreach($meta->home_image_slider as $v)
                        <div class="item active">
                            <img src="{{ asset_to_webp(uri($v->home_image_slider_upload)) }}" alt="">
                        </div>
                        @endforeach
                   </div>
                </div>
            </div>
        </div>
        {{-- before maintanance --}}
        {{-- <div class="row d-flex justify-content-center pt-4 mb-lg-5">
            <div class="col-lg-11">
                <ul class="list-unstyled d-flex justify-content-center list-icon">
                    @foreach ($pain_point['icon'] as $v)
                    <li>
                        <img src="{{  asset_to_webp(url_to_svg($v->media)) }}" alt="">
                        <p>{{ $v->text }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div> --}}
        {{-- end before maintanance --}}
    </div>
    {{-- after maintanance --}}
</section>
<section class="section-home position-relative">
    <div class="box-problem">
        <div class="container-content px-lg-3 px-md-5 px-sm-5">
            <div class="title-problem">
                <h3 class="d-lg-block d-md-none d-none">{{ $meta->home_painpoint_title }}</h3>
                <h2>{{ $meta->home_painpoint_subtitle }} </h2>
            </div>
            <div class="row">
                @if (!empty($meta->home_accountax_painpoint))
                    @foreach ($meta->home_accountax_painpoint as $v)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="item-problem">
                            <img src="{{ url_to_svg($v->home_accountax_painpoint_icon) }}" alt="" />
                            <div class="title-item">{{ $v->home_accountax_painpoint_title }}</div>
                            <div class="desc-item">{{ $v->home_accountax_painpoint_desc }} </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="item-problem">
                        <img src="{{ asset('assets/img/jadwal.svg') }}" alt="" />
                        <div class="title-item">Jadwal Padat</div>
                        <div class="desc-item">Banyaknya lot bulanan harus diselesaikan dengan deadline yang singkat secara bersamaan.</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="item-problem">
                        <img src="{{ asset('assets/img/efisien.svg') }}" alt="" />
                        <div class="title-item">Kurang Efisien</div>
                        <div class="desc-item">Beragam system yang digunakan klien membutuhkan proses manual yang membuat efisiensi pekerjaan menjadi berkurang</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="item-problem">
                        <img src="{{ asset('assets/img/akses-data.svg') }}" alt="" />
                        <div class="title-item">Akses Data</div>
                        <div class="desc-item">Data tersimpan di drive lokal dan belum menggunakan system cloud yang aman dan bisa diakses kapanpun dan dimanapun​</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="item-problem">
                        <img src="{{ asset('assets/img/miskom.svg') }}" alt="" />
                        <div class="title-item">Miskomunikasi</div>
                        <div class="desc-item">Kesalahpahaman dengan klien dalam mempersiapkan dan memproses data karena kurangnya komunikasi maupun kolaborasi.</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="item-problem">
                        <img src="{{ asset('assets/img/human-error.svg') }}" alt="" />
                        <div class="title-item">Human Error</div>
                        <div class="desc-item">Input ulang atau copas data secara manual dan melelahkan cenderung menyebabkan terjadinya human error</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="item-problem">
                        <img src="{{ asset('assets/img/repetitif.svg') }}" alt="" />
                        <div class="title-item">Repetitif</div>
                        <div class="desc-item">Pengulangan Input data untuk perhitungan dan pelaporan pajak</div>
                    </div>
                </div> --}}
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
                    <h2>{{ $meta->home_accountax_title }}</h2>
                    <h4><i>{{ $meta->home_accountax_subtitle }}</i></h4>
                    <p>{{ $meta->home_accountax_desc }}</p>
                </div>
            </div>
        </div>
        {{-- start maintanance --}}
        <div class="row d-flex justify-content-center pt-lg-5 pt-md-4 pt-1">
            <div class="col-lg-11 pt-4 padding-container-box-solution">
                @php $i = 0 @endphp
                @if (!empty($meta->home_accountax_solution))
                    @foreach ($meta->home_accountax_solution as $v)
                        @php $i++ @endphp
                        @if ($i % 2)
                        <div class="row box-item-solution d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center pb-lg-4 mb-lg-5 mb-md-5 mb-3">
                            <div class="col-12 d-flex align-items-center d-lg-none d-md-flex d-flex">
                                <div class="title-erp-item mt-lg-4 mt-md-3 mt-3 mb-2">
                                    <h3>{{ $v->home_accountax_solution_title }}</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-6 d-flex align-items-center">
                                <div>
                                    <div class="title-erp-item mb-lg-4 mb-md-3 mb-3  d-lg-flex d-md-none d-none">
                                        <h3>{{ $v->home_accountax_solution_title }}</h3>
                                    </div>
                                    <div class="desc-erp-item">
                                        <ul>
                                            @foreach ( explode(PHP_EOL, $v->home_accountax_solution_desc)  as $li)
                                            <li>{{$li}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-6 col-6 box-img-erp d-flex justify-content-end align-items-center left position-relative">
                                <div class="img-erp">
                                    <img src="{{ uri($v->home_accountax_solution_image) }}" alt="{{ $v->home_accountax_solution_title }}">
                                </div>
                            </div>
                        </div>
                        @else 
                        <div class="row box-item-solution d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center pb-lg-4 mb-lg-5 mb-md-5 mb-3">
                            <div class="col-lg-6 col-md-5 col-sm-6 col-6 box-img-erp d-flex justify-content-start align-items-center left position-relative">
                                <div class="img-erp">
                                    <img src="{{ uri($v->home_accountax_solution_image) }}" alt="{{ $v->home_accountax_solution_title }}">
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-7 col-sm-6 col-6 d-flex align-items-center justify-content-end">
                                <div>
                                    <div class="title-erp-item mb-lg-4 mb-md-3 mb-3">
                                        <h3>{{ $v->home_accountax_solution_title }}</h3>
                                    </div>
                                    <div class="desc-erp-item">
                                        <ul>
                                            @foreach ( explode(PHP_EOL, $v->home_accountax_solution_desc)  as $li)
                                            <li>{{$li}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
                {{-- <div class="row box-item-solution d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center pb-lg-4 mb-lg-5 mb-md-5 mb-3">
                    <div class="col-12 d-flex align-items-center d-lg-none d-md-flex d-flex">
                        <div class="title-erp-item mt-lg-4 mt-md-3 mt-3 mb-2">
                            <h3>Berkolaborasi dengan Mudah dan Aman</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-6 col-6 d-flex align-items-center">
                        <div>
                            <div class="title-erp-item mb-lg-4 mb-md-3 mb-3  d-lg-flex d-md-none d-none">
                                <h3>Berkolaborasi dengan Mudah dan Aman</h3>
                            </div>
                            <div class="desc-erp-item">
                                <ul>
                                    <li>Data aman dengan dukungan cloud by Microsoft Azure </li>
                                    <li>Akses data kapan pun dan dimanapun</li>
                                    <li>Meningkatkan efektifitas dan efisisensi kerja</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-6 col-6 box-img-erp d-flex justify-content-end align-items-center left position-relative">
                        <div class="img-erp">
                            <img src="{{ asset('assets/img/accountTaxt1.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row box-item-solution d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center pb-lg-4 mb-lg-5 mb-md-5 mb-3">
                    <div class="col-lg-6 col-md-5 col-sm-6 col-6 box-img-erp d-flex justify-content-start align-items-center left position-relative">
                        <div class="img-erp">
                            <img src="{{ asset('assets/img/accountTaxt2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-7 col-sm-6 col-6 d-flex align-items-center justify-content-end">
                        <div>
                            <div class="title-erp-item mb-lg-4 mb-md-3 mb-3">
                                <h3>Cepat dan Akurat</h3>
                            </div>
                            <div class="desc-erp-item">
                                <ul>
                                    <li>Konfigurasi yang Mudah</li>
                                    <li>Mempercepat Proses dan tetap Akurat</li>
                                    <li>Update terkini setiap saat</li>
                                    <li>Manajemen asset</li>
                                    <li>Integrasi Mitra Perpajakan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row box-item-solution d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center pb-lg-4 mb-lg-5 mb-md-5 mb-3">
                    <div class="col-12 d-flex align-items-center d-lg-none d-md-flex d-flex">
                        <div class="title-erp-item mt-lg-4 mt-md-3 mt-3 mb-2">
                            <h3>Dukungan Pemenuhan Kepatuhan Perpajakan</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-6 col-6 d-flex align-items-center">
                        <div>
                            <div class="title-erp-item mb-lg-4 mb-md-3 mb-3 d-lg-flex d-md-none d-none">
                                <h3>Dukungan Pemenuhan Kepatuhan Perpajakan</h3>
                            </div>
                            <div class="desc-erp-item">
                                <ul>
                                    <li>Generate data untuk format impor bupot dan faktur pajak</li>
                                    <li>Kerjasama dengan Online-Pajak dan Pajak IO untuk memudahkan Everbuddy dalam pemenuhan kebutuhan perpajakan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-6 col-6 box-img-erp d-flex justify-content-end align-items-center left position-relative">
                        <div class="img-erp">
                            <img src="{{ asset('assets/img/accountTaxt3.png') }}" alt="">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- end maintanance  --}}
        {{-- @php 
        $link = [
            'i1' => "get.pages.solutions.accounting_management_systems",
            'i5' => "get.pages.solutions.i5_trading",
            'i7' => "get.pages.solutions.i7_manufacture",
        ]
        @endphp
        @foreach($solutions as $v)
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-lg-11 pt-4">
                @if ($v->main_type == "i5")
                <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp left position-relative">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-2.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ asset_to_webp(uri($v->main_image)) }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-8 col-sm-11 col-11">
                        <div class="title-erp-item mb-lg-5">
                            <h3>{{ $v->featured_title }}</h3>
                            <p><i>{{ $v->featured_sub_title }}</i></p>
                        </div>
                        <div class="desc-erp-item mb-lg-5">
                            {!! $v->featured_sort_description !!}
                        </div>

                        <a class="btn-oval btn-view-detail btn-block text-white text-center btn-white-orange mb-lg-4" href="{{ $link[$v->main_type] ? route($link[$v->main_type]) : '#' }}">
                            @if (activelang() == "EN")
                            View Detail
                            @else
                            Lihat Detail
                            @endif
                        </a>
                    </div>
                </div>
                @else
                <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp position-relative d-lg-none d-md-none d-sm-block d-block ">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-3.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ asset_to_webp(uri($v->main_image)) }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-8 col-sm-11 col-11 pr-lg-0">
                        <div class="title-erp-item mb-lg-5">
                            <h3>{{ $v->featured_title }}</h3>
                            <p><i>{{ $v->featured_sub_title }}</i></p>
                        </div>
                        <div class="desc-erp-item mb-lg-5">
                            {!! $v->featured_sort_description !!}
                        </div>
                        <a class="btn-oval btn-view-detail btn-block text-white text-center btn-white-orange mb-lg-4" href="{{ $link[$v->main_type] ? route($link[$v->main_type]) : '#' }}">
                            @if (activelang() == "EN")
                            View Detail
                            @else
                            Lihat Detail
                            @endif
                        </a>
                    </div>
                    <div class="col-lg-7 box-img-erp position-relative d-lg-block d-md-block d-sm-none d-none ">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-3.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ asset_to_webp(uri($v->main_image)) }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endforeach --}}
    </div>
  </section>
  {{-- after maintanance --}}
  <section class="section-fitur-accountTax pt-lg-5 pb-lg-5 pt-md-4 pb-md-4 pt-5 pb-3">
    <div class="container-content px-lg-3 px-4">
        <div class="row d-sm-flex justify-content-lg-start justify-content-sm-center justify-content-center mb-lg-5 mb-md-5 mb-3">
            <div class="col-lg-7 col-md-12 col-sm-8 col-9 box-img-erp mb-lg-0 mb-3 d-lg-none d-md-flex d-flex justify-content-lg-end justify-content-sm-center justify-content-center position-relative">
                <div class="elipsis">
                    <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                </div>
                <div class="icon-erp">
                    <img src="{{ asset('assets/img/fitur-taxt-icon.svg') }}" alt="">
                </div>
                <div class="img-erp fitur-tax">
                    <img src="{{ asset($meta->home_accountax_feature_image) }}" alt="">
                </div>
                <div class="lingkaran">
                    <img src="{{ asset('assets/img/lingkaran-border-putih.svg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-11 col-12 d-flex align-items-start justify-content-center">
                <div>
                    <h2>{{ $meta->home_accountax_feature_title }}</h2>
                    <ul class="list-group list-group-fitur-taxt mb-lg-5">
                        @if (!empty($meta->home_accountax_feature_list))
                            @foreach ($meta->home_accountax_feature_list as $v)
                            <li class="list-group-item">
                                <img src="{{ url_to_svg($v->home_accountax_feature_list_icon) }}" alt="{{ $v->home_accountax_feature_list_title }}">
                                <p>{{ $v->home_accountax_feature_list_title }}</p>
                            </li>
                            @endforeach 
                        @endif
                        {{-- <li class="list-group-item">
                            <img src="{{ asset('assets/img/icon-setting.svg') }}" alt="">
                            <p>Konfigurasi yang Mudah</p>
                        </li>
                        <li class="list-group-item">
                            <img src="{{ asset('assets/img/icon-darts.svg') }}" alt="">
                            <p>Mempercepat Proses dan  tetap Akurat</p>
                        </li>
                        <li class="list-group-item">
                            <img src="{{ asset('assets/img/icon-management.svg') }}" alt="">
                            <p>Manajemen Aset</p>
                        </li>
                        <li class="list-group-item">
                            <img src="{{ asset('assets/img/icon-update-terkini.svg') }}" alt="">
                            <p>Dapatkan Update Terkini Setiap Saat </p>
                        </li>
                        <li class="list-group-item">
                            <img src="{{ asset('assets/img/icon-tax.svg') }}" alt="">
                            <p>Integrasi Mitra Perpajakan</p>
                        </li> --}}
                    </ul>
                    <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-center pt-lg-0 pt-3">
                        <a class="btn-oval btn-view-detail btn-block text-white text-center btn-white-orange mb-lg-4" href="{{ route('get.pages.solutions.index') }}">
                            @if (activelang() == "EN")
                            View Detail
                            @else
                            Lihat Detail
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp d-lg-flex d-md-none d-none justify-content-end position-relative">
                <div class="elipsis">
                    <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                </div>
                <div class="icon-erp">
                    <img src="{{ asset('assets/img/fitur-taxt-icon.svg') }}" alt="">
                </div>
                <div class="img-erp fitur-tax">
                    <img src="{{ asset('assets/img/img-fitur-tax.png') }}" alt="">
                </div>
                <div class="lingkaran">
                    <img src="{{ asset('assets/img/lingkaran-border-putih.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="section-home">
    <div class="box-problem">
        <div class="container-content">
            <div class="title-problem">
                @if (activelang() == "EN")
                <h2>Problems that we meet</h3>
                @else
                <h2>Masalah yang sering di hadapi</h3>
                @endif
            </div>
            <div class="row">
                @if (!empty($meta->home_bms_painpoint))
                    @foreach ($meta->home_bms_painpoint as $v)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 px-lg-3 px-2">
                        <div class="item-problem tiga-item">
                            <img src="{{ url_to_svg($v->home_bms_painpoint_icon) }}" alt="{{ $v->home_bms_painpoint_title }}" />
                            <div class="title-item">{{ $v->home_bms_painpoint_title }}</div>
                            <div class="desc-item">{{ $v->home_bms_painpoint_desc }}</div>
                        </div>
                    </div>
                    @endforeach
                @endif
                {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-4 px-lg-3 px-2">
                    <div class="item-problem tiga-item">
                        <img src="{{ asset('assets/img/icon-handover.svg') }}" alt="" />
                        <div class="title-item">Handover Issue</div>
                        <div class="desc-item">Misinformasi dalam proses transisi PIC yang menyebabkan informasi penting terkait data klien tidak lengkap atau hilang.</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 px-lg-3 px-2">
                    <div class="item-problem tiga-item">
                        <img src="{{ asset('assets/img/icon-late.svg') }}" alt="" />
                        <div class="title-item">Late Issued Invoice</div>
                        <div class="desc-item">Keterlambatan penerbitan invoice karena miskomunikasi dalam internal organisasi dan pengarsipan kontrak.</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 px-lg-3 px-2">
                    <div class="item-problem tiga-item">
                        <img src="{{ asset('assets/img/icon-collection.svg') }}" alt="" />
                        <div class="title-item">Collection Issue</div>
                        <div class="desc-item">Difficult to deal with tax process and the regulations update.</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever  info-bms text-center pt-lg-4 pt-md-4 pt-4">
                    {{-- @if (activelang() == "EN")
                    <h2>SystemEver BMS</h2>
                    <h4><i>Business Management System</i></h4>
                    <p>Cloud application dedicated to EverBuddy to manage contracts and billing for business well and efficiently</p>
                    @else
                    <h2>SystemEver BMS</h2>
                    <h4><i>Business Management System</i></h4>
                    <p>
                        Cloud aplikasi yang dedikasikan bagi EverBuddy untuk mengelola kontrak dan penagihan agar bisnis terorganisir dengan baik dan lebih efisien
                    </p>
                    @endif --}}
                    <h2>{{ $meta->home_bms_title }}</h2>
                    <h4><i>{{ $meta->home_bms_subtitle }}</i></h4>
                    <p>{{ $meta->home_bms_desc }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-content padding-container-box-solution mb-lg-5 mb-md-4 mb-sm-3 mb-3">
        <div class="row d-lg-flex d-md-none d-none">
            <div class="col-12">
                <div class="info-system-ever  info-bms text-center">
                    <h3>{{ $meta->home_bms_solution_title }}</h3>
                </div>
            </div>
        </div>
        <div class="pt-lg-0 pt-md-3 pt-4">
            @if (!empty($meta->home_bms_solution))
                @php $i=0 @endphp
                @foreach ($meta->home_bms_solution as $v)
                    @if ($i % 2 == 0) 
                    <div class="row box-item-solution {{ $i == 0 ? 'pt-lg-0 pt-4' : '' }} d-flex">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-7 d-flex align-items-center">
                            <div class="desc-tab-solution desc-fitur-bms">
                                <h4>{{ $v->home_bms_solution_title }}</h4>
                                <ul>
                                    @foreach ( explode(PHP_EOL, $v->home_bms_solution_desc)  as $li)
                                    <li>{{$li}}</li>
                                    @endforeach
                                    {{-- <li>Data tersimpan dalam cloud</li>
                                    <li>Tidak perlu khawatir mis informasi saat proses <br/> Transisi PIC</li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-end">
                            <div class="img-tab-solution img-fitur-bms">
                                <img src="{{ asset($v->home_bms_solution_image) }}" alt="{{ $v->home_bms_solution_title }}">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row box-item-solution {{ $i == 0 ? 'pt-lg-0 pt-4' : '' }} d-flex">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-end">
                            <div class="img-tab-solution img-fitur-bms">
                                <img src="{{ asset($v->home_bms_solution_image) }}" alt="{{ $v->home_bms_solution_title }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-7 d-flex align-items-center">
                            <div class="desc-tab-solution desc-fitur-bms">
                                <h4>{{ $v->home_bms_solution_title }}</h4>
                                <ul>
                                    @foreach ( explode(PHP_EOL, $v->home_bms_solution_desc)  as $li)
                                    <li>{{$li}}</li>
                                    @endforeach
                                    {{-- <li>Data tersimpan dalam cloud</li>
                                    <li>Tidak perlu khawatir mis informasi saat proses <br/> Transisi PIC</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                @php $i++ @endphp
                @endforeach
            @endif
            {{-- <div class="row box-item-solution pt-lg-0 pt-4 d-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-7 d-flex align-items-center">
                    <div class="desc-tab-solution desc-fitur-bms">
                        <h4>Data Filling</h4>
                        <ul>
                            <li>Data tersimpan dalam cloud</li>
                            <li>Tidak perlu khawatir mis informasi saat proses <br/> Transisi PIC</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-end">
                    <div class="img-tab-solution img-fitur-bms">
                        <img src="{{ asset('assets/img/fitur-bms1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row box-item-solution d-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-start">
                    <div class="img-tab-solution img-fitur-bms">
                        <img src="{{ asset('assets/img/fitur-bms2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-7 d-flex align-items-center">
                    <div class="desc-tab-solution desc-fitur-bms">
                        <h4>Contract & Billing <br/> Management</h4>
                        <p>
                            Kelola Kontrak dan penagihan secara tepat waktu,<br/> mudah dan akurat
                        </p>
                    </div>
                </div>
            </div>
            <div class="row box-item-solution d-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-7 d-flex align-items-center">
                    <div class="desc-tab-solution desc-fitur-bms">
                        <h4>Collection Tracking</h4>
                        <p>Telusuri status penagihan dan bukti potong pajak <br/> dengan mudah dan efisien</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-5 d-flex justify-content-end">
                    <div class="img-tab-solution img-fitur-bms">
                        <img src="{{ asset('assets/img/fitur-bms3.png') }}" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
  </section>
  <section class="section-fitur-accountTax py-lg-5 py-md-4 py-3">
    <div class="container-content">
        <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center mb-lg-5 mb-0">
            <div class="col-lg-7 col-md-12 col-sm-10 col-9 box-img-erp mb-lg-0 mb-3 d-lg-none d-md-flex d-flex justify-content-lg-end justify-content-sm-center justify-content-centerd position-relative">
                <div class="elipsis">
                    <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                </div>
                <div class="icon-erp">
                    <img src="{{ asset('assets/img/fitur-taxt-icon.svg') }}" alt="">
                </div>
                <div class="img-erp fitur-tax">
                    <img src="{{ asset($meta->home_bms_feature_image) }}" alt="{{ $meta->home_bms_feature_title }}">
                </div>
                <div class="lingkaran">
                    <img src="{{ asset('assets/img/lingkaran-border-putih.svg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-11 col-11 d-flex align-items-start justify-content-start px-lg-3 px-md-5">
                <div class="w-100">
                    <h2>{{ $meta->home_bms_feature_title }}</h2>
                    <ul class="list-group list-group-fitur-taxt list-group-bms mb-lg-5">
                        @if (!empty($meta->home_bms_feature_list))
                            @foreach ($meta->home_bms_feature_list as $v)
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <img src="{{ url_to_svg($v->home_bms_feature_list_icon) }}" alt="{{ $v->home_bms_feature_list_title }}">
                                    <p>{{ $v->home_bms_feature_list_title }}</p>
                                </div>
                            </li>
                            @endforeach
                        @endif
                        {{-- <li class="list-group-item">
                            <div class="d-flex">
                                <img src="{{ asset('assets/img/icon-data-client.svg') }}" alt="">
                                <p>Manajemen Data Client</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex">
                                <img src="{{ asset('assets/img/icon-agreement.svg') }}" alt="">
                                <p>Manajemen Kontrak</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex">
                                <img src="{{ asset('assets/img/icon-otomatisasi.svg') }}" alt="">
                                <p>Otomatisasi Billing</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex">
                                <img src="{{ asset('assets/img/icon-penagihan.svg') }}" alt="">
                                <p>Telusuri Penagihan</p>
                            </div>
                        </li> --}}
                    </ul>
                    <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-center pt-lg-0 pt-3">
                        <a class="btn-oval btn-view-detail btn-block text-white text-center btn-white-orange mb-lg-4" href="{{ route('get.pages.solutions.bms') }}">
                            @if (activelang() == "EN")
                            View Detail
                            @else
                            Lihat Detail
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp d-lg-flex d-md-none d-none justify-content-endposition-relative">
                <div class="elipsis">
                    <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                </div>
                <div class="icon-erp">
                    <img src="{{ asset('assets/img/fitur-taxt-icon.svg') }}" alt="">
                </div>
                <div class="img-erp fitur-tax">
                    <img src="{{ asset($meta->home_bms_feature_image) }}" alt="{{ $meta->home_bms_feature_title }}">
                </div>
                <div class="lingkaran">
                    <img src="{{ asset('assets/img/lingkaran-border-putih.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
  </section>
  {{-- end maintanance --}}
  {{-- before maintanance --}}
  {{-- <section class="section-business pb-lg-4">
    <div class="container">
        <div class="row pt-lg-5 mb-lg-5">
            <div class="col-lg-12">
                <div class="title-business text-center">
                    @if (activelang() == "EN")
                    <h1>BUSINESS</h1>
                    <h3>Suitable for various types of business</h3>
                    @else
                    <h1>BISNIS</h1>
                    <h3>SystemEver sangat tepat untuk berbagai industri</h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled list-produk-category">
                    @foreach ($business as $v)
                    <li>
                        <div class="produk-category text-left">
                            <a>
                                <img class="gray" src="{{ asset_to_webp((url_to_svg($v->main_image))) }}" alt="">
                                <img class="green" src="{{ asset_to_webp((url_to_svg($v->secondary_image))) }}" alt="">
                                {!! $v->description !!}
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
  </section> --}}
  {{-- end before maintanance --}}
  <section class="section-medium-business section-sparator-green d-none">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-12 mb-5 text-center">
                @if (activelang() == "EN")
                <h2>Who Need It?</h2>
                @else
                <h2>Siapa yang Membutuhkannya?</h2>
                @endif
                <p>Accounting Firms | Accountants | Bookkeepers</p>
            </div>
        </div>
        {{-- <div class="row mb-5">
            <div class="col-sm-12 px-lg-3 px-sm-0 px-0 d-lg-none d-md-none d-sm-flex d-flex">
                <div class="video-home">
                    <iframe 
                         src="https://www.youtube.com/embed/m3o1KpM2g9w" 
                         title="YouTube video player" 
                         frameborder="0" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 list-medium-business">
                @foreach ($superiority as $v)
                <div class="row mb-4">
                    <div class="col-lg-2 px-0">
                        <img src="{{ asset_to_webp((url_to_svg($v->icon))) }}" alt="">
                    </div>
                    <div class="col-lg-10 pl-4">
                        {{ $v->description }}
                    </div>
                </div>
                @endforeach
                <div class="row mb-4 pt-3">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-10">
                        <a class="btn-oval btn-view-detail btn-block text-white text-center btn-white-orange mb-lg-4" href="{{ route('get.pages.services.feature') }}">
                            @if (activelang() == "EN")
                            View Detail
                            @else
                            Lihat Detail
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-lg-block d-md-block d-sm-none d-none">
                <div class="video-home">
                    <iframe 
                         src="https://www.youtube.com/embed/m3o1KpM2g9w" 
                         title="YouTube video player" 
                         frameborder="0" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen></iframe>                    
                </div>
            </div>
        </div> --}}
        <div class="row d-flex justify-content-center testimony">
            <div class="col-lg-10 px-lg-5 pt-lg-5 pb-3 box-testimony  px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="owl-carousel owl-testimoni owl-theme">
                    @foreach ($testimony as $v)
                    <div class="item home-testimoni">
                        <div class="row">
                            <div class="col-12 d-lg-none d-md-none d-sm-block d-block  px-lg-3 px-md-3 px-4">
                                <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{ $v->name }}">
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3  px-4">
                                <div class="desc-testimoni mb-3 mt-2">
                                    {{ $v->description }}
                                </div>
                                <div class="media media-testimoni d-flex align-items-center">
                                <img class="mr-3" src="{{ asset_to_webp(uri($v->photo)) }}" alt="{{ $v->name }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0">{{ $v->name }}</h5>
                                        {{ $v->job_title }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                                <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{ $v->name }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="alas-testimoni"></div>
  </section>
  <section class="section-award pt-3">
    <div class="container">
        <div class="row d-lg-flex d-md-none d-none justify-content-center ">
            <div class="col-lg-10">
                <div class="award text-center pt-lg-5 mb-5">
                    {{-- @if (activelang() == "EN")
                    <h2>Who Makes SystemEver®?<br>
                        Younglimwon (永林院) Softlab Co., Ltd.</h2>
                    <p>
                        For last 28 years,  Younglimwon (永林院) Softlab Co., Ltd. has provided ERP solutions and services to over 2,000 customers(Middle size enterprise). They are not only tech-savvy Korean companies but also Japanese, Chinese, Vietnamese and Indonesian companies. Our goal is to be an ABC (Asia Best Cloud) ERP firm.
                        Our 28-year experience and technical knowhow is crystallized into SystemEver®. We proudly introduce a Cloud ERP, SystemEver® for your Success.
                    </p>
                    @else
                    <h2>
                        Siapa yang Membuat SystemEver®?<br>
                        Younglimwon (永林院) Softlab Co., Ltd.
                    </h2>
                    <p>
                        Selama 28 tahun,  Younglimwon (永林院) Softlab Co., Ltd. telah menyediakan solusi dan layanan ERP kepada lebih dari 2.000 pelanggan (Usaha Kecil Menengah). Mereka tidak hanya perusahaan Korea yang paham teknologi tetapi juga perusahaan Jepang, Cina, Vietnam, dan Indonesia. Tujuan kami adalah menjadi perusahaan <strong>ERP ABC (Asia Best Cloud)</strong>, Cloud ERP Terbaik di Asia.
                        Pengalaman 28 tahun dan pengetahuan teknis kami dikristalisasi menjadi SystemEver®. Kami dengan bangga memperkenalkan Cloud ERP, SystemEver® untuk Kesuksesan Anda.    
                    </p>
                    @endif --}}
                    <h2>{{$meta->home_award_title}}</h2>
                    <p>{{$meta->home_award_desc}}</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-10 px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="owl-carousel owl-award owl-theme">
                    @foreach($award as $v)
                    <div class="item">
                        <div class="box-img">
                            <div class="img-aword d-flex justify-content-center">
                                <img src="{{ asset_to_webp(uri($v->photo)) }}" alt="">
                            </div>
                        </div>
                        <div class="desc-trophy text-center">
                            {{$v->title}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="section-customer-slide py-4">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-represented owl-theme">
                    @foreach ($customer_logo as $v)
                    <div class="item"><img src="{{ asset_to_webp((url_to_svg($v->image))) }}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
  </section>
  @include('systemever/includes/form_request', ['meta' => $meta])

  <section class="section-available-country pb-5 mb-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                    @if (activelang() == "EN")
                    <div class="title-available mb-5 d-lg-block d-md-block d-sm-none d-none">SystemEver Available in 4 Countries</div>
                    <div class="title-available mb-5 d-lg-none d-md-none d-sm-block d-block">SystemEver <br> Available in 4 Countries</div>
                    @else
                    <div class="title-available mb-5 d-lg-block d-md-block d-sm-none d-none">SystemEver Tersedia di 4 Negara</div>
                    <div class="title-available mb-5 d-lg-none d-md-none d-sm-block d-block">SystemEver <br> Tersedia di 4 Negara</div>
                    @endif
              </div>
          </div>
          <div class="row">
            @foreach ($country as $v)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                <div class="country">
                    <img src="{{ asset_to_webp(uri($v->photo)) }}" alt="">
                    <h5>{{ $v->country_name }}</h5>
                    <p><a href="tel:+{{ $v->phone }}">+{{ $v->phone }}</a></p>
                    <p><a href="http://www.{{ $v->website }}/" target="_blank"> {{ $v->website }}</a></p>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </section>
  @include('systemever/includes/modals/intro')
@endsection

@section('footer')
    @include('systemever/includes/footer')
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
 $('.owl-testimoni').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 80,
            nav:false,
            margin:15,
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
 $('.owl-slide-konsep').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
 $('.owl-award').owlCarousel({
    loop:true,
    margin:30,
    navText:['<img src="{{ asset("assets/img/arrow-left.svg") }}" alt="">','<img src="{{ asset("assets/img/arrow-right.svg") }}" alt="">'],
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 100,
        },
        600:{
            items:3
        },
        1000:{
            items:4,
            nav:true
        }
    }
})
$('.owl-represented').owlCarousel({
        loop:true,
        margin:50,
        nav:false,
        dots:false,
        // autoplay:true,
        // autoplayTimeout:3000,
        autoplayHoverPause:true,

        autoplay: true,
        slideTransition: 'linear',
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        center: true,

        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })
</script>

<script>
    var lastheight = 0;
    $(".home-testimoni").each(function(){
        height = $(this).height();
        if (lastheight <= height) {
            lastheight = height;
        }
    })

    setTimeout(function(){
        lastheight = lastheight + 50;
        $(".home-testimoni").css("height", lastheight + "px");
    }, 500)

</script>

@if (!empty($notice))
<script>
    $(document).ready(function(){
        setTimeout(() => {
            int_intro('{{$notice->image}}', '{{$notice->url}}');
        }, 500);
    })
</script>
@endif

@endsection
