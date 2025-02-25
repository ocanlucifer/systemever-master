@extends('systemever/layouts/main')

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help<br/> you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="mt-4 section-content-parnership">
    <div class="container-content">
        <div class="row  mb-4">
            <div class="col-lg-12 px-lg-3 px-md-3 px-4">
                <div class="info-system-ever border-title-parnership pb-lg-4 pb-md-4 pb-3 px-lg-3 px-md-3 px-1 ">
                    <h3>{{ stringlang('Partnership', 'Kemitraan') }}</h3>
                </div>
            </div>
        </div>
        <div class="row  mb-4">
            <div class="col-lg-12 px-lg-3 px-md-3 px-4">
               <section class="section-partnership border-title-parnership  px-lg-3 px-md-3 px-1">
                    <h4>{{ stringlang('Integrated ERP', 'ERP Terintegrasi') }} </h4>
                    <h5>{{ stringlang('[i5 Trading & Distribution; i7 Management Manufacturing]', '[i5 Perdagangan & Distribusi; i7 Manufaktur Manajement]') }} </h5>
                    <div class="row">
                        <div class="col-lg-4 address-partnership">
                            <img src="{{ asset('assets/img/SIT.png') }}" alt="">
                            <h5>PT. SIT Global Systems</h5>
                            <p>Grand Wijaya Center <br>
                                Block F.41 3rd Floor No.11 <br>
                                Kebayoran Baru, South Jakarta - 12160
                            </p>
                        </div>
                    </div>
               </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 px-lg-3 px-md-3 px-4">
               <section class="section-partnership border-title-parnership  px-lg-3 px-md-3 px-1">
                    <h4>{{ stringlang('Consulting Partner', 'Mitra Konsultasi')}} </h4>
                    <h5>[i1 AccounTax Service] </h5>
                    <div class="row">
                        <div class="col-lg-4 address-partnership">
                            <img src="{{ asset('assets/img/BNG.png') }}" alt="">
                            <h5>BNG Consulting </h5>
                            <p>Menara Jamsostek <br>
                                Menara Selatan, Lt. 6 Suite 601 <br>
                                Jl. Jend. Gatot Subroto No. 38 - Jakarta Selatan 
                            </p>
                        </div>
                        <div class="col-lg-4 address-partnership">
                            <img src="{{ asset('assets/img/qst.png') }}" alt="">
                            <h5>QST Consulting</h5>
                            <p>KP Warung Bongkok <br>
                                JL perjuangan RT.006 RW.007 Sukadanau, Cikarang Barat, <br>
                                Bekasi, Jawa Barat (dalam komplek <br>
                                PT Global Hastama Jaya factory 2)
                                
                            </p>
                        </div>
                    </div>
               </section>
            </div>
        </div>
    </div>
</section>
<section class="section-partner-benefit">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-3 px-md-3 px-4">
                <div class="desc-benefit d-lg-none d-md-none d-block">
                    <h3>{{ stringlang("Partner’s Benefits", 'Keuntungan Mitra') }}</h3>
                </div>
                <div class="img-partner">
                    <img src="{{ asset('assets/img/partner-benefit.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-3 px-md-3 px-4">
                <div class="desc-benefit pl-lg-4 pl-md-4 pl-0">
                    <h3 class="d-lg-block d-md-block d-none">{{ stringlang("Partner’s Benefits", 'Keuntungan Mitra') }}</h3>
                    <div class="media media-partner-benefit">
                        <img class="mr-3" src="{{ asset('assets/img/check-hijau.svg') }}" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0">{{ stringlang("Trusted Product", 'Produk Terpercaya') }}</h5>
                            @if (activelang() == "EN")
                            with more than 28 years experienced in ERP technology and more than 2,000 
                            customers in Asia. Especially in Indonesia, we have special product for Indonesia Market. We believe we can become your valuable partner.​
                            @else
                            dengan lebih dari 28 tahun berpengalaman dalam teknologi ERP dan lebih dari 2.000
                            pelanggan di Asia. Khusus di Indonesia, kami memiliki produk khusus untuk Pasar Indonesia. Kami percaya kami dapat menjadi mitra berharga Anda.​
                            @endif
                        </div>
                    </div>
                    <div class="media media-partner-benefit">
                        <img class="mr-3" src="{{ asset('assets/img/check-hijau.svg') }}" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0">{{ string('Grow with Partner', 'Bertumbuh dengan Mitra') }}</h5>
                          {{ stringlang('SystemEver support partner to grow together. Opening Indonesia Office, Regular Event, Technical Support, Local Consultant and Knowledge Sharing.​', 
                          'System ever akan membantu mitra untuk tumbuh bersama. Pembukaan Kantor Indonesia, Event Reguler, Dukungan Teknis, Konsultan Lokal dan Knowledge Sharing') }}
                        </div>
                    </div>
                    <div class="media media-partner-benefit">
                        <img class="mr-3" src="{{ asset('assets/img/check-hijau.svg') }}" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0">{{ stringlang('Competitive Price', 'Harga yang Kompetitif') }}</h5>
                          {{ stringlang('SystemEver designed for Small Medium Enterprise (SMEs) to make their work more effective with value price. We believe you can have more chance to win the project with us.​', 
                          'System dirancang untuk Usaha Micro dan Menengah (UMKM) untuk membuat pekerjaan mereka lebih efektif dan efisien. Kami percaya anda dapat lebih banyak membuat perubahan untuk memenangkan proyek bersama kami') }}
                        </div>
                    </div>
                    <button class="btn-oval btn-view-detail btn-join-us btn-white-orange mb-lg-4 ml-md-4 ml-0 mt-lg-5 mt-md-5 mt-3" data-toggle="modal" data-target="#modal-patner">{{ stringlang('Join Us', 'Gabung Sekarang') }}</button>
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


@endsection