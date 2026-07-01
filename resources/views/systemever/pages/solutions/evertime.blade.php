@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution EverTime ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap'); 

    :root {
        --evertime-green: #00b34f;
        --evertime-soft: #eaf7ee;
        --evertime-dark-green: #007a37;
        --evertime-gray: #8f8f8f;
        --evertime-light-gray: #8f8f8f;
    }

    /* Animation Definitions */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .evertime-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto;
        padding: 0 30px; 
        box-sizing: border-box;
    }
    
    .evertime-img-right {
        margin: 0 auto;
        padding: 0 0px 0 200px;
    }

    
    .evertime-hero-grid {
        display: grid;
        grid-template-columns: 1.10fr 0.90fr;
        gap: 0;
        align-items: center;
    }
    
    .evertime-hero.lang-en {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }

    .evertime-hero.lang-en h1 {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 35px;
        line-height: 1.25;
        font-weight: 700;
        color: #1f1f1f;
        margin-bottom: 25px;
        letter-spacing: -0.5px;
        max-width: 650px;
    }

    .evertime-hero.lang-en p {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 30px;
        line-height: 1.2;
        font-weight: 300;
        color: var(--evertime-gray);
        margin-bottom: 25px;
        letter-spacing: 1px;
        max-width: 720px;
    }

    .evertime-hero.lang-en span {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 19px;
        line-height: -1.5;
        font-weight: 500;
        color: var(--evertime-green);
        max-width: 620px;
        margin-bottom: 0;
        margin-right: -65px;
        display: block;
    }

    /* korea */

    
    .evertime-hero.lang-kor {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }
    
    .evertime-hero.lang-kor h1 {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 50px;
        line-height: 1.25;
        font-weight: 750;
        color: #1f1f1f;
        margin-bottom: 25px;
        letter-spacing: -0.5px;
    }

    .evertime-hero.lang-kor h1.kor-heavy {
        font-family: 'Noto Sans KR', sans-serif;
        font-weight: 900 !important;
        letter-spacing: -0.2px;
        -webkit-text-stroke: 0.15px currentColor;
    }

    .evertime-hero.lang-kor p {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 28px;
        line-height: 1.2;
        color: var(--evertime-gray);
        margin-bottom: 25px;
        letter-spacing: 1px;
        max-width: 720px;
        font-weight: 450;
    }

    .evertime-hero span {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 18.5px;
        line-height: -1.5;
        font-weight: 500;
        color: var(--evertime-green);
        max-width: 700px;
        margin-bottom: 0;
        margin-right: -65px;
        display: block;
    }

    .evertime-hero-visual {
        justify-self: end;     
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }
    
    .evertime-hero-visual:hover {
        transform: scale(1.02);
        max-width: none; 
    }

    .evertime-hero-visual img {
        display: block;
        width: 117%;
        max-width: none;
        margin-left: auto;     
        margin-right: -60px
    }

    .evertime-section-title {
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 24px;
        margin: 60px auto 12px;
        max-width: 800px;
        line-height: 1.4;
    }

    .evertime-section-subtitle {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        color: var(--evertime-gray);
        margin-bottom: 24px;
    }

    .evertime-pill-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 32px 0 16px;
    }

    .evertime-info-card {
        background: var(--evertime-green);
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 600;
        padding: 16px 20px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        min-height: 80px;
        box-shadow: 0 8px 18px rgba(0, 153, 68, 0.15);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        cursor: default;
    }
    
    .evertime-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 153, 68, 0.25);
        background: var(--evertime-dark-green);
    }

    .evertime-note {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        font-size: 18px;
        color: var(--evertime-gray);
        margin-bottom: 48px;
        margin-top: 16px;
    }

    .evertime-highlight {
        background: var(--evertime-soft);
        border-radius: 24px;
        padding: 40px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
        margin-bottom: 60px;
    }

    .evertime-highlight h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 24px;
        color: #1f1f1f;
    }

    .evertime-highlight-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .evertime-highlight-item {
        background: #ffffff;
        padding: 12px 20px;
        border-radius: 12px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #3b3b3b;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
    }

    .evertime-highlight img {
        width: 100%;
        max-width: 400px;
        justify-self: center;
    }

    .evertime-full-img {
        padding: 60px 0 60px;
    }

    .evertime-features {
        padding: 72px 0 80px;
        /* background: #fcfcfc; */
        animation: fadeInUp 0.8s ease-out;
    }

    .evertime-features h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        font-weight: 700;
        text-align: left;
        margin-bottom: 32px;
        color: #1f1f1f;
    }
    
    .features-header {
        text-align: left;
        margin-bottom: 40px;
    }
    
    .features-header h3 {
        text-align: left;
        margin-bottom: 10px;
        font-size: 26px;
    }

    .evertime-feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 40px;
        row-gap: 32px;
    }

    .evertime-feature-card {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        padding: 16px;
        border-radius: 12px;
        transition: background-color 0.3s ease;
    }
    
    .evertime-feature-card:hover {
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    
    .evertime-feature-card:hover .evertime-feature-number {
        transform: scale(1.1) rotate(5deg);
        background: var(--evertime-dark-green);
    }

    .evertime-feature-number {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 12px;
        background: var(--evertime-green);
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 153, 68, 0.2);
        transition: all 0.3s ease;
    }

    .evertime-feature-content h4 {
        margin: 0 0 8px;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #1f1f1f;
    }

    .evertime-feature-content p {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        color: var(--evertime-gray);
        line-height: 1.5;
    }

    .evertime-dashboard {
        padding: 40px 0 60px;
        text-align: center;
    }

    .evertime-dashboard h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 32px;
        color: #1f1f1f;
    }

    .evertime-dashboard-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
        max-width: 800px;
        margin: 0 auto 20px;
    }

    .evertime-dashboard-pill {
        background: var(--evertime-soft);
        border-radius: 16px;
        padding: 24px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: var(--evertime-dark-green);
        transition: all 0.2s;
        border: 1px solid transparent;
    }

    .evertime-dashboard-pill:hover {
        background: #fff;
        border-color: var(--evertime-green);
        box-shadow: 0 10px 20px rgba(0, 153, 68, 0.1);
        transform: translateY(-2px);
    }

    .evertime-integration {
        padding: 40px 0 40px;
        text-align: center;
        animation: fadeInUp 0.8s ease-out;
    }

    .evertime-screenshot-img {
        width: auto;
        max-width: 95%;
        height: auto;
        object-fit: contain;
        margin: 0 auto;
        display: block;
    }

    .evertime-integration h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 32px;
        color: #1f1f1f;
    }

    .evertime-integration-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
        max-width: 700px;
        margin: 0 auto;
    }

    .evertime-integration-pill {
        background: var(--evertime-light-gray);
        border-radius: 16px;
        padding: 24px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #3b3b3b;
        transition: all 0.2s;
        border: 1px solid transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        min-height: 100px;
    }

    .evertime-integration-pill:hover {
        background: #fff;
        border-color: var(--evertime-green);
        box-shadow: 0 10px 20px rgba(0, 153, 68, 0.1);
        transform: translateY(-2px);
    }

    @media (max-width: 1024px) {
        .evertime-hero-grid,
        .evertime-highlight {
            grid-template-columns: 1fr;
        }

        .evertime-container {
            padding: 0 20px;
        }

        .evertime-img-right {
            padding: 0 20px;
        }

        .evertime-hero {
            padding: 28px 0 30px !important;
        }

        .evertime-hero h1,
        .evertime-hero.lang-en h1,
        .evertime-hero.lang-kor h1 {
            font-size: 32px;
            line-height: 1.14;
            letter-spacing: -0.5px;
            margin-bottom: 14px;
            max-width: 100%;
        }

        .evertime-hero p,
        .evertime-hero.lang-en p,
        .evertime-hero.lang-kor p {
            font-size: 16px;
            line-height: 1.45;
            letter-spacing: 0;
            margin-bottom: 10px;
            max-width: 100%;
        }

        .evertime-hero span,
        .evertime-hero.lang-en span,
        .evertime-hero.lang-kor span {
            font-size: 14px;
            line-height: 1.45;
            margin-right: 0;
            max-width: 100%;
        }

        .evertime-hero-visual {
            justify-content: center;
            margin-top: 18px;
        }

        .evertime-hero-visual img {
            width: 100%;
            max-width: 360px;
            margin-left: 0;
            margin-right: 0;
        }

        .evertime-pill-row {
            grid-template-columns: 1fr;
        }

        .evertime-feature-grid,
        .evertime-dashboard-grid,
        .evertime-integration-grid {
            grid-template-columns: 1fr;
        }

        .evertime-screenshot-img {
            width: 100%;
            max-width: 100%;
        }
        
        .evertime-feature-card {
            align-items: center;
        }
        
        .evertime-highlight-list {
            text-align: left;
        }

        .evertime-full-img {
            padding: 36px 0;
        }
    }

    @media (max-width: 430px) {
        .evertime-container,
        .evertime-img-right {
            padding: 0 16px;
        }

        .evertime-hero h1,
        .evertime-hero.lang-en h1,
        .evertime-hero.lang-kor h1 {
            font-size: 30px;
            line-height: 1.12;
        }

        .evertime-hero p,
        .evertime-hero.lang-en p,
        .evertime-hero.lang-kor p {
            font-size: 15px;
        }

        .evertime-hero span,
        .evertime-hero.lang-en span,
        .evertime-hero.lang-kor span {
            font-size: 13px;
            line-height: 1.4;
        }
    }

    @media (max-width: 768px) {
        img[style*="width:"] {
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
        }
    }
</style>
@endsection

@php
    if (activelang() == 'KOR') {
        $ext = '-kor';
    } else if (activelang() == 'EN') {
        $ext = '-eng';
    } else{
        $ext = '-ind';
    }
@endphp

@section('content')
<section class="evertime-hero lang-{{ strtolower(activelang()) }}">
    <div class="evertime-container">
        <div class="evertime-hero-grid">
            <div>
                <h1>{{ stringlang('Mobile Attendance Management Solution'
                                , 'Solusi Absensi Mobile yang Tumbuh Bersama Bisnis Anda'
                                , '근태 관리 솔루션') }}
                </h1>
                <p>{{ stringlang('EverTime is a mobile-based attendance management solution desgined to simplify workforce time tracking and approval processes.'
                               , 'EverTime menghadirkan transformasi dalam pengelolaan absensi dengan memberikan pencatatan kehadiran yang akurat dan mudah diakses oleh setiap karyawan melalui pengalaman mobile yang intuitif.'
                               , 'EverTime은 모바일 기반의 근태 관리 솔루션입니다.') }}
                </p>
                <span>{{ stringlang('It centralizes attendance data to support more efficient workforce management.'
                                  , 'Pencatatan waktu yang presisi, pengaturan jadwal yang fleksibel, serta integrasi payroll yang mulus — dirancang untuk menjawab kebutuhan tenaga kerja modern saat ini.'
                                  , '근태 기록, 승인, 스케줄 관리 등을 통합하여 인력 운영의 효율성을 높일 수 있습니다.​') }}
                </span>
            </div>
            <div class="evertime-hero-visual">
                <img src="{{ asset('assets/img/evertime-logo.png') }}" alt="EverTime">
            </div>
        </div>
    </div>
</section>

<section class="evertime-full-img">
    <div class="evertime-container">
        <div style="text-align: center; margin: 40px 0;">
            <img src="{{ asset('assets/img/evertime-why-attendance' . $ext . '.png') }}" alt="Why EverTime Attendance" style="width: 100%; max-width: 1020px; height: auto; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

<section class="evertime-full-img">
    <div class="evertime-img-right">
        <div style="margin: 40px 0;">
            <img src="{{ asset('assets/img/evertime-first-platform' . $ext . '.png') }}" alt="Built for Modern Work" style="width: 100%; max-width: 100%; height: auto; margin-left: auto; display: block;">
        </div>
    </div>
</section>

<section class="evertime-full-img">
    <div class="evertime-container">
        <div style="text-align: center; margin: 40px 0;">
            <img src="{{ asset('assets/img/evertime-table' . $ext . '.png') }}" alt="EverTime Comparison" style="width: 55%; max-width: 1020px; height: auto; display: block; margin: 0 auto;">
        </div>
    </div>
</section>

<section class="evertime-full-img">
    <div class="evertime-container">
        <div style="text-align: center; margin: 40px 0;">
            <img src="{{ asset('assets/img/evertime-features' . $ext . '.png') }}" alt="EverTime Features" style="width: 100%; max-width: 1020px; height: auto; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

<section class="evertime-full-img">
    <div class="evertime-container">
        <div style="text-align: center; margin: 40px 0;">
            <img src="{{ asset('assets/img/evertime-why-choose' . $ext . '.png') }}" alt="Why Choose EverTime" style="width: 100%; max-width: 1020px; height: auto; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

<!-- <section class="evertime-full-img">
    <div class="evertime-container">
        <div style="text-align: center; margin: 40px 0;">
            <img src="{{ asset('assets/img/evertime-built' . $ext . '.png') }}" alt="Built for Real Adoption" style="width: 60%; max-width: 1020px; margin: 0 auto; display: block;">
    </div>
</section> -->

<section class="evertime-integration">
    <div class="evertime-container">
        <div style="text-align: center;">
            <img src="{{ activelang() == 'KOR'
                ? asset('assets/img/evertime-screenshot-kor%20copy.png')
                : asset('assets/img/evertime-screenshot' . $ext . '.png') }}" alt="Evertime Summary" class="evertime-screenshot-img">
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection
