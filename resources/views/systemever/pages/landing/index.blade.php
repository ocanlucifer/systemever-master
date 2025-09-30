@extends('systemever/pages/landing/windi', [
'spesifice_page_seo' => 'Home ' . activelang()
])

@section('custom_css')


<!--@include('systemever/includes/swiper')-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.css"  />
{{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

    .bc {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;
        color: #000000;
        display: flex;
        align-items: center;
    }

    .bc .active {
        color: #009944;
        font-weight: bold;
    }

    /* .section-demo {
        opacity: 0;
    } */

    .page-content {
        margin-top: 0;
    }

    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .font-opensans {
        font-family: 'Open Sans', sans-serif;
    }

    .font-inter {
        font-family: 'Inter', sans-serif;
    }

    .container {
        max-width: 1140px;
        margin: auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    .hsd:hover {
        box-shadow: 0px 4px 20px 0px #00000055;
    }

    .aspect-mod {
        aspect-ratio: 12/11;
    }

    .aspect-mod1 {
        aspect-ratio: 12/8;
    }
    /* Menyembunyikan scrollbar tapi masih bisa di-scroll */
    .tabs-container::-webkit-scrollbar {
    display: none;
    }
    .tabs-container {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        display: flex;
        justify-content: center;
        margin-bottom: 5px;
    }
    /* .tabs-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    } */

    .tabs {
        display: flex;
        gap: 10px;
        width: 80%; /* Batas lebar container */
        font-size: 18px;
    }

    .tab-button {
        flex: 1; /* Membagi ruang secara merata */
        padding: 14px 20px;
        border: none;
        cursor: pointer;
        background-color: #D4F1E4;
        border-radius: 30px;
        transition: background-color 0.3s ease;
        text-align: center;
        white-space: nowrap; /* Mencegah teks pindah baris */
    }

    .tab-button.active {
        background-color: #179244;
        color: white;
    }

    .tab-content-container {
        text-align: center;
        border: none;
    }

    .tab-content {
        display: none;
        padding: 20px;
        /* border: 1px solid #ddd; */
    }

    .tab-content.active {
        display: block;
    }
    .tab-label {
        display: block;
        font-size: 17px;
        color: #179244;
        font-weight: 500;
        font-size: px;
        flex: 1; /* Membagi ruang secara merata */
        padding: 10px 20px;
        border: none;
        text-align: center;
        white-space: nowrap; /* Mencegah teks pindah baris */
    }
    /* Styling paragraf penjelasan dengan numbering */
    .description {
        text-align: left;
    }
    .description-box {
        margin: 20px 0;
        font-size: 14px;
        line-height: 1.8;
        color: #333;
    }
    .description-box ol {
        list-style-type: decimal; /* Menampilkan numbering */
        padding-left: 20px;
        text-align: left;
    }

    .description-box li {
        margin-bottom: 10px;
    }

    /* Styling untuk video */
    .video-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* Rasio 16:9 (9/16 = 0.5625) */
        height: 0;
        overflow: hidden;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        margin: 0 auto;
    }
    .video-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        margin: 0 auto;
    }

    .custom-button {
        font-family: 'Montserrat', sans-serif; /* Sesuai dengan font yang digunakan */
        font-size: 20px; /* Ukuran font */
        padding: 14px 65px; /* Padding agar tombol proporsional */
        border-radius: 50px; /* Agar tetap bulat */
        background-color: white !important; /* Warna background */
        color: #009944  !important; /* Warna teks */
        font-weight: bold; /* Teks tebal */
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border: 2px solid #009944; /* Tambahkan border untuk outline */
        transition: all 0.3s ease-in-out; /* Animasi hover */
    }

    .custom-button:hover {
        color: rgb(0, 0, 0);
        background-color: #D4F1E4;
    }

    .table-container {
        /* max-width: 800px; */
        /* margin: auto; */
        padding: 20px;
        text-align: left;
    }
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .custom-table th {
        background-color: #107c10; /* Warna hijau seperti gambar */
        color: white;
        padding: 12px;
        font-size: 18px;
        text-align: left;
    }
    .custom-table td {
        padding: 12px;
        /* border-bottom: 1px solid #ddd; */
    }
    .icon-check {
        color: #107c10; /* Warna hijau */
        font-size: 20px;
        margin-right: 10px;
    }
    .bold-text {
        font-weight: bold;
    }

    .truncate-3-lines {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 48px; /* set sesuai tinggi 2 baris */
        text-align: left;
        font-size: 11px;
        word-break: keep-all;      /* penting: biar kata tidak terpotong */
        text-overflow: ellipsis;
        white-space: normal; /* ⬅️ ini lebih aman dari pre-line */
    }
    .truncate-2-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 48px;
        text-align: left;
        word-break: keep-all;      /* penting: biar kata tidak terpotong */
        text-overflow: ellipsis;
        white-space: normal; /* ⬅️ ini lebih aman dari pre-line */
    }
     /* .truncate-2-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis; */
        /* min-height: 48px;
        text-align: left;
    } */
    .truncate-1-lines {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 20px; /* set sesuai tinggi 2 baris */
        text-align: left;
        font-size: 13px;
    }

    .swiper-pagination {
    backdrop-filter: blur(10px);
    padding: 8px 16px;
    border-radius: 16px;
    }

    .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.3);
    opacity: 1;
    margin: 0 6px;
    transition: all 0.3s ease;
    border-radius: 50%;
    }

    .swiper-pagination-bullet:hover {
    background: rgba(0, 255, 204, 0.5);
    transform: scale(1.2);
    }

    .swiper-pagination-bullet-active {
    background: rgba(0, 255, 204, 1);
    box-shadow: 0 0 8px rgba(0, 255, 204, 0.6);
    transform: scale(1.4);
    }

    .title-ceo {
        font-size: 47px;
    }
    .swipper-ceo-body {
        background: rgba(155, 158, 155, 0.363);
        backdrop-filter: blur(70px);
        -webkit-backdrop-filter: blur(70px);
        border-radius: 16px;
        padding: 1rem;
        text-align: center;
        transition: transform 0.3s;
    }
    .swipper-ceo-button {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        background: rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 9999px;
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        color: #fff;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.3s, transform 0.3s;
    }
    .swipper-ceo-img {
        height: 200px;
        width: 400px;
    }

    @media only screen and (max-width: 1024px) {
        .page-content {
            margin-top: 55px;
        }

        .aspect-mod {
            aspect-ratio: 12/8;
        }
        .custom-button {
            font-size: 14px; /* Font lebih besar */
            padding: 7px 50px; /* Padding lebih besar */
        }
        .tabs-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory; /* Menyediakan efek snap antar tab */
            padding-left: 300px; /* atau sesuai kebutuhan */
            padding-right: 300px;
        }

        .tabs {
            display: inline-flex;
            min-width: 600px; /* Memastikan cukup lebar untuk scroll horizontal */
            width: max-content; /* Lebar tab menyesuaikan konten */
            scroll-snap-align: start; /* Setiap tab berhenti di posisi awal */
            font-size: 14px;
        }

        .tab-button {
            flex: 1; /* Membagi ruang secara merata */
            padding: 10px 20px;
            white-space: nowrap; /* Mencegah teks pindah baris */
            border: none;
            cursor: pointer;
            background-color: #D4F1E4;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            text-align: center;
            white-space: nowrap; /* Mencegah teks pindah baris */
            scroll-snap-align: start; /* Snap pada posisi awal */
        }

        .tab-button.active {
            background-color: #179244;
            color: white;
        }

        .tab-content-container {
            text-align: center;
            border: none;
        }

        .tab-content {
            display: none;
            padding: 20px;
            /* border: 1px solid #ddd; */
        }

        .tab-content.active {
            display: block;
        }
        .tab-label {
            font-size: 14px; /* Ukuran label lebih kecil untuk layar kecil */
        }
        /* Styling paragraf penjelasan dengan numbering */
        .description {
            text-align: left;
        }
        .description-box {
            font-size: 14px;
        }

        .truncate-1-lines {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 20px; /* set sesuai tinggi 2 baris */
            text-align: left;
            font-size: 12px;
        }
        .truncate-2-lines {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 48px; /* set sesuai tinggi 2 baris */
            text-align: left;
            font-size: 15px;
            word-break: keep-all;      /* penting: biar kata tidak terpotong */
            text-overflow: ellipsis;
            white-space: normal; /* ⬅️ ini lebih aman dari pre-line */
        }
        .truncate-3-lines {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 48px; /* set sesuai tinggi 2 baris */
            text-align: left;
            font-size: 10px;
            word-break: keep-all;      /* penting: biar kata tidak terpotong */
            text-overflow: ellipsis;
            white-space: normal; /* ⬅️ ini lebih aman dari pre-line */
        }
        .title-ceo {
            font-size: 27px;
        }
        .swipper-ceo-body {
            background: rgba(155, 158, 155, 0.363);
            backdrop-filter: blur(70px);
            -webkit-backdrop-filter: blur(70px);
            border-radius: 16px;
            padding: 0.75rem; /* lebih kecil */
            text-align: center;
            transition: transform 0.3s;
        }
        .swipper-ceo-button {
            background: rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            transition: all 0.3s;
        }
        .swipper-ceo-img {
            height: 160px;
            width: 100%;
            max-width: 100%;
        }
    }

</style>


<section class="relative overflow-hidden flex items-center justify-center" style="padding-top: 110px; padding-bottom: 170px;">
    <picture class="absolute top-0 left-0 w-full h-full z-0">
        <source srcset="{{ asset('assets/fl/home-bg-1.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: bottom center;" />
        <img src="{{ asset('assets/fl/home-bg-1-m.png')}}" alt="" class="w-full h-full object-cover" style="object-position: bottom center;" />
    </picture>
    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-[60%]  mx-auto">
                <p class="font-opensans text-white lg:text-16px lg:mb-0 mb-0 lg:text-left text-center text-11px ">
                    한국 대표 ERP 기업, 영림원소프트랩의 인니 법인,
                </p>
                <h1 class="font-poppins lg:text-37px  lg:leading-12 lg:text-left  lg:mb-5 lg:mt-8 mb-2 leading-7 text-26px font-bold text-white text-center">
                    System Ever <br> Indonesia
                </h1>
                <p class="font-opensans text-white lg:text-16px lg:mb-3 mb-5 lg:text-left text-center text-11px ">
                    <strong>모든 업무를 하나로! 통합형 클라우드 ERP </strong>
                </p>
                <p class="font-opensans text-white lg:text-16px lg:mb-2 mb-2 lg:text-left text-center text-11px ">
                    ERP가 필요한 규모가 되었나요?
                </p>
                <p class="font-opensans text-white lg:text-16px lg:mb-2 mb-2 lg:text-left text-center text-11px ">
                    System Ever Indonesia와 함께 쉽고 빠르게 디지털 전환을 시작하세요​
                </p>
                <p class="font-opensans text-white lg:text-16px lg:mb-4 mb-2 lg:text-left text-center text-11px ">
                    영업, 구매, 회계, 생산까지 하나의 ERP로 완전 통합!
                </p>
                <div class="flex gap-4 justify-center lg:justify-start">
                    <a href="https://wa.me/6281119971017?text=Hello, I want to know more about system ever" target="_blank" class="custom-button">
                        <i class="fab fa-whatsapp"></i> &nbsp; 무료 상담 받기
                    </a>
                    <a href="{{ 
                        activelang() == 'EN' ? url('en/ITInventory') : 
                        (activelang() == 'KOR' ? url('kor/ITInventory') : url('ITInventory')) 
                    }}" class="custom-button">
                        <i class="fas fa-laptop"></i> &nbsp; {{ stringlang('IT Inventory', 'IT Inventory', 'IT 인벤토리') }}
                    </a>
                    {{-- <a href="https://wa.me/6281119971017?text=Hello, I want to know more about system ever" target="_blank" class="font-montserrat inline-flex items-center justify-center lg:h-48px lg:px-70px lg:text-16px text-12px h-28px px-20px rounded-full bg-transparent hover:text-white text-white font-bold border-1 border-white">
                        문의하기 (Whatsapp)
                    </a> --}}
                </div>
            </div>
            <div class="lg:w-[40%] pt-10">
                <div class="lg:h-[372px] lg:w-[550px] w-[72%] aspect-mod1 overflow-hidden flex items-center justify-center mx-auto lg:-mt-10">
                    <video src="{{ ordefault($meta->home_banner, asset('assets/fl/home.mp4')) }}" autoplay muted loop playsinline class=""></video>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="section-video">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 position-relative">
                <div class="owl-carousel owl-tabs-video owl-theme" style="margin-left: -19px;">
                    <div class="item"><button class="tab-button active" data-tab="tabITInventory"><strong>IT Inventory</strong></button></div>
                    <div class="item"><button class="tab-button" data-tab="tabProduction"><strong>생산관리</strong></button></div>
                    <div class="item"><button class="tab-button" data-tab="tabSales"><strong>영업관리</strong></button></div>
                    <div class="item"><button class="tab-button" data-tab="tabInventory"><strong>물류관리</strong></button></div>
                    <div class="item"><button class="tab-button" data-tab="tabAccounting"><strong>회계관리</strong></button></div>
                    <div class="item"><button class="tab-button" data-tab="tabPurchase"><strong>구매관리</strong></button></div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <br>
<br>
<br>
<br>
<br> --}}

<section class="lg:pt-10px lg:pb-50px pt-20px pb-60px relative">
    <div class="container relative">
        <div class="tabs-container">
            <div class="tabs">
                <button class="tab-button active" data-tab="tabITInventory"><strong>IT Inventory</strong></button>
                <button class="tab-button" data-tab="tabProduction"><strong>생산관리</strong></button>
                <button class="tab-button" data-tab="tabSales"><strong>영업관리</strong></button>
                <button class="tab-button" data-tab="tabInventory"><strong>물류관리</strong></button>
                <button class="tab-button" data-tab="tabAccounting"><strong>회계관리</strong></button>
                <button class="tab-button" data-tab="tabPurchase"><strong>구매관리</strong></button>
            </div>
        </div>

        <div class="tab-content-container">
            <div class="tab-content active" id="tabITInventory">
                @include('systemever/pages/landing/it_inventory')
            </div>
            <div class="tab-content" id="tabProduction">
                @include('systemever/pages/landing/production')
            </div>
            <div class="tab-content" id="tabSales">
                @include('systemever/pages/landing/sales')
            </div>
            <div class="tab-content" id="tabInventory">
                @include('systemever/pages/landing/inventory')
            </div>
            <div class="tab-content" id="tabAccounting">
                @include('systemever/pages/landing/accounting')
            </div>
            <div class="tab-content" id="tabPurchase">
                @include('systemever/pages/landing/purchase')
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
{{-- <section class="pt-8 pb-4 lg:pt-16 lg:pb-16" style="background: linear-gradient(135deg, #1a1f1d, #2c3e30, #2a403d   );"> --}}
<section class="pt-4 pb-4 lg:pt-16 lg:pb-16" style="background: linear-gradient(190deg, #3B5E56, #000000   );">

    <div class="container relative">
        <br>
        <p class="font-poppins lg:text-24px  lg:leading-12 lg:text-left  lg:mb-0 lg:mt-8 mb-0 leading-7 text-21px  text-white text-center">
            20년 넘게 이어온 영림원소프트랩의
        </p>
        <h1 class="font-poppins lg:leading-12 lg:text-left  lg:mb-5 lg:mt-0 mb-2 leading-7 font-bold text-white text-center title-ceo">
            CEO Forum
        </h1>
        <p class="font-opensans text-white lg:text-17px lg:mb-8 mb-4 lg:text-left text-center text-11px ">
            대한민국 리더들의 통찰과 전략이 만나는 자리
        </p>
        <div class="swiper CEOForumSwiper relative">
            <div class="swiper-wrapper">
                @if(!empty($ceoforum) && count($ceoforum) > 0)
                    @foreach ($ceoforum as $v)

                    <div class="swiper-slide">
                        <div class="swipper-ceo-body">
                            <div onmouseover="this.style.transform='scale(1.03)'"
                                 onmouseout="this.style.transform='scale(1)'">

                                {{-- Title --}}
                                <p class="text-sm text-white font-bold mb-2 truncate-2-lines min-h-[36px] leading-snug">
                                    @if(!empty($v->title) && $v->title !== '???????????? ????????? ??????? ?????? ?????? ????????? ?????? ???????????? ???????????? ??????????????????')
                                        {{ \Illuminate\Support\Str::limit(strip_tags($v->title), 100) }}
                                    @else
                                        {{ $loop->iteration }}회 CEO Forum - 리더들의 통찰과 전략
                                    @endif
                                </p>

                                {{-- Image --}}
                                <div class="rounded-xl overflow-hidden mb-2">
                                    @if(!empty($v->image_url))
                                        {{-- Try to load from live server first, fallback to placeholder if fails --}}
                                        <img src="https://systemever.co.id/{{ $v->image_url }}" 
                                             alt="{{ $v->title }}" 
                                             class="w-full h-[180px] object-cover swipper-ceo-img" 
                                             onerror="this.onerror=null; this.src='{{ uri($v->image_url) }}'"
                                             onabort="this.src='https://via.placeholder.com/400x200/009944/ffffff?text=CEO+Forum'"
                                             onload="console.log('Image loaded from live server')">
                                    @else
                                        <img src="https://via.placeholder.com/400x200/009944/ffffff?text=CEO+Forum" alt="CEO Forum" class="w-full h-[180px] object-cover swipper-ceo-img">
                                    @endif
                                </div>

                                {{-- Description --}}
                                @if(!empty($v->body) && !str_contains($v->body, '???'))
                                    <p class="text-sm text-white mb-1 truncate-1-lines min-h-[24px] leading-tight">
                                        {{ !empty($v->slider_title) && !str_contains($v->slider_title, '???') ? \Illuminate\Support\Str::limit(strip_tags($v->slider_title), 100) : '대한민국 리더들의 통찰과 전략' }}
                                    </p>
                                    <p class="text-sm text-white mb-2 truncate-3-lines min-h-[48px] leading-snug">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($v->body), 300) }}
                                    </p>
                                @else
                                    <p class="text-sm text-white mb-1 truncate-1-lines min-h-[24px] leading-tight">
                                        {{ $v->post_date ? date('Y.m.d', strtotime($v->post_date)) : '' }} CEO Forum
                                    </p>
                                    <p class="text-sm text-white mb-2 truncate-3-lines min-h-[48px] leading-snug">
                                        20년 넘게 이어온 영림원소프트랩의 CEO Forum에서 다양한 산업 리더들의 경험과 통찰을 만나보세요. 대한민국 리더들의 생생한 경영 철학과 성공 스토리를 확인하세요.
                                    </p>
                                @endif

                                {{-- <div class="my-4"> --}}
                                    <hr class="border-t-2 border-white w-2/3 mx-auto my-2">
                                {{-- </div> --}}

                                {{-- Read More Button --}}
                                <a href="{{ 'https://systemever.co.id/kor/business-insight/ceo_forum/detail/'.$v->id }}"
                                    class="text-xs font-medium text-white px-3 py-1 inline-block rounded-full swipper-ceo-button"
                                    onmouseover="this.style.background='rgba(0, 255, 204, 0.6)'; this.style.transform='scale(1.05)'"
                                    onmouseout="this.style.background='rgba(0, 0, 0, 0.15)'; this.style.transform='scale(1)'">
                                    Read More
                                </a>

                                <div class="my-2"></div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                @else
                    {{-- Fallback content when no CEO Forum data --}}
                    @for($i = 1; $i <= 3; $i++)
                    <div class="swiper-slide">
                        <div class="swipper-ceo-body">
                            <div onmouseover="this.style.transform='scale(1.03)'"
                                 onmouseout="this.style.transform='scale(1)'">

                                <p class="text-sm text-white font-bold mb-2 truncate-2-lines min-h-[36px] leading-snug">
                                    CEO Forum {{ $i }}{{ $i == 1 ? '회' : ($i == 2 ? '회' : '회') }} - 리더들의 통찰
                                </p>

                                <div class="rounded-xl overflow-hidden mb-2">
                                    <img src="https://via.placeholder.com/400x200/009944/ffffff?text=CEO+Forum+{{ $i }}" alt="CEO Forum {{ $i }}" class="w-full h-[180px] object-cover swipper-ceo-img">
                                </div>

                                <p class="text-sm text-white mb-1 truncate-1-lines min-h-[24px] leading-tight">
                                    대한민국 리더들의 통찰과 전략
                                </p>
                                <p class="text-sm text-white mb-2 truncate-3-lines min-h-[48px] leading-snug">
                                    20년 넘게 이어온 영림원소프트랩의 CEO Forum에서 다양한 산업 리더들의 경험과 통찰을 만나보세요.
                                </p>

                                <hr class="border-t-2 border-white w-2/3 mx-auto my-2">

                                <a href="https://systemever.co.id/kor/business-insight/ceo_forum"
                                    class="text-xs font-medium text-white px-3 py-1 inline-block rounded-full swipper-ceo-button"
                                    onmouseover="this.style.background='rgba(0, 255, 204, 0.6)'; this.style.transform='scale(1.05)'"
                                    onmouseout="this.style.background='rgba(0, 0, 0, 0.15)'; this.style.transform='scale(1)'">
                                    Read More
                                </a>

                                <div class="my-2"></div>
                            </div>
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
            <br><br>
            {{-- Pagination --}}
            <div class="swiper-pagination mt-6 !relative bottom-0 flex justify-center"></div>

        </div>
    </div>
</section>

{{-- @include('systemever/includes/modals/intro') --}}
@endsection

@section('footer')
@include('systemever/pages/landing/footer')
@endsection

@section('custom_js')


<!--<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    new Swiper(".CEOForumSwiper", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 1, // Tampilkan hanya 1 slide di layar kecil
                spaceBetween: 16, // Sedikit spasi untuk tampilan mobile
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 32,
            },
        }
    });

    var userAgent = navigator.userAgent.toLowerCase();
    var isMac = /mac|iphone|ipad|ipod/.test(userAgent);
    if(isMac){
        $('.page-content section video').css('filter','brightness(.94) hue-rotate(-2deg)')
    }else{
        $('.page-content section video').css('filter','brightness(1.01) hue-rotate(-1deg)')
    }
$('.owl-tabs-video').owlCarousel({
    stagePadding: 20,
    loop:false,
    margin:5,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})

$('.arrow-left').on('click', function(e){
    document.getElementById('container-tab').scrollLeft -= 20;
});
$('.arrow-right').on('click', function(e){
  document.getElementById('container-tab').scrollLeft += 20;
});
window.onload = function(){
    Draggable.create("#content-tab",{
    type:"scrollLeft"
  });
};
    var userAgent = navigator.userAgent.toLowerCase();
    var isMac = /mac|iphone|ipad|ipod/.test(userAgent);
    if(isMac){
        $('.page-content section video').css('filter','brightness(.94) hue-rotate(-2deg)')
    }else{
        $('.page-content section video').css('filter','brightness(1.01) hue-rotate(-1deg)')
    }

    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll('.tab-button');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            // Reset active state
            tabs.forEach(btn => btn.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Set active tab and content
            tab.classList.add('active');
            const target = document.getElementById(tab.dataset.tab);
            if (target) {
            target.classList.add('active');
            }
        });
        });
    });
</script>
<style>
    .page-content section .aspect-mod1.overflow-hidden.flex{
        max-width: 270px;
    }
    @media(min-width: 1024px){
        .page-content section .aspect-mod1.overflow-hidden.flex{
            max-width: 550px;
        }
    }
</style>

@endsection
