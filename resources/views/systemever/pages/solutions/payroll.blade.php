@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution Payroll ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

    :root {
        --payroll-blue: #28a6c2;
        --payroll-green: #00b34f;
        --payroll-soft: #eaf7ee;
        --payroll-dark-green: #007a37;
        --payroll-gray: #8f8f8f;
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

    .payroll-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto;
        padding: 0 30px; 
        box-sizing: border-box;
    }

    .payroll-img-left {
        margin: 0 auto;
        padding: 0 200px 0 0px;
    }

    .payroll-img-right {
        margin: 0 auto;
        padding: 0 0px 0 200px;
    }

    
    .payroll-hero-grid {
        display: grid;
        grid-template-columns: 1.10fr 0.90fr;
        gap: 0;
        align-items: center;
    }

    .payroll-hero.lang-en {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }
    
    .payroll-hero.lang-en h1 {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 48px;
        line-height: 1.25;
        font-weight: 700;
        color: #1f1f1f;
        margin-bottom: 30px;
        letter-spacing: -0.5px;
        max-width: 650px;
    }

    .payroll-hero.lang-en p {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 30px;
        line-height: 1.2;
        color: var(--payroll-gray);
        margin-bottom: 30px;
        letter-spacing: 1px;
        max-width: 650px;
        font-weight: 300;
    }

    .payroll-hero.lang-en span {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 19px;
        line-height: -1.5;
        font-weight: 500;
        color: var(--payroll-blue);
        max-width: 620px;
        margin-bottom: 0;
        margin-right: -65px;
        display: block;
    }

    /* korea */

    
    .payroll-hero.lang-kor {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }
    
    .payroll-hero.lang-kor h1 {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 55px;
        line-height: 1.25;
        font-weight: 800;
        color: #1f1f1f;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
    }

    .payroll-hero.lang-kor p {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 27px;
        line-height: 1.2;
        color: var(--payroll-gray);
        margin-bottom: 20px;
        letter-spacing: 1px;
        max-width: 640px;
        font-weight: 450;
    }

    .payroll-hero.lang-kor span {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 19px;
        line-height: -1.5;
        font-weight: 500;
        color: var(--payroll-blue);
        max-width: 620px;
        margin-bottom: 0;
        margin-right: -65px;
        display: block;
    }

    .payroll-hero-visual {
        justify-self: end;     
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }
    
    .payroll-hero-visual:hover {
        transform: scale(1.02);
        max-width: none; 
    }

    .payroll-hero-visual img {
        display: block;
        width: 117%;
        max-width: none;
        margin-left: auto;     
        margin-right: -60px;   
    }


    .payroll-section-title {
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 24px;
        margin: 60px auto 12px;
        max-width: 800px;
        line-height: 1.4;
    }

    .payroll-section-subtitle {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        color: var(--payroll-gray);
        margin-bottom: 24px;
    }

    .payroll-pill-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 32px 0 16px;
    }

    .payroll-info-card {
        background: var(--payroll-green);
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
    
    .payroll-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 153, 68, 0.25);
        background: var(--payroll-dark-green);
    }

    .payroll-note {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        color: var(--payroll-gray);
        margin-bottom: 48px;
        margin-top: 16px;
    }

    .payroll-highlight {
        background: var(--payroll-soft);
        border-radius: 24px;
        padding: 40px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .payroll-highlight h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 24px;
        color: #1f1f1f;
    }

    .payroll-highlight-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .payroll-highlight-item {
        background: #ffffff;
        padding: 12px 20px;
        border-radius: 12px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #3b3b3b;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.04);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .payroll-highlight-item::after {
        content: ""; /* Placeholder for potential arrow or check if needed, currently clean */
    }

    .payroll-highlight img {
        width: 100%;
        max-width: 400px;
        justify-self: center;
    }

    .payroll-full-img {
        padding: 60px 0 60px;
    }

    .payroll-features {
        padding: 72px 0 80px;
        background: #fcfcfc;
    }

    .payroll-features h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        font-weight: 700;
        text-align: left;
        margin-bottom: 32px;
        color: #1f1f1f;
    }
    
    .features-header {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .features-header h3 {
        text-align: center;
        margin-bottom: 10px;
        font-size: 26px;
    }

    .payroll-feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 40px;
        row-gap: 32px;
    }

    .payroll-feature-card {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        padding: 16px;
        border-radius: 12px;
        transition: background-color 0.3s ease;
    }
    
    .payroll-feature-card:hover {
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    
    .payroll-feature-card:hover .payroll-feature-number {
        transform: scale(1.1) rotate(5deg);
        background: var(--payroll-dark-green);
    }

    .payroll-feature-number {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 12px;
        background: var(--payroll-green);
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

    .payroll-feature-content h4 {
        margin: 0 0 8px;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #1f1f1f;
    }

    .payroll-feature-content p {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        color: var(--payroll-gray);
        line-height: 1.5;
    }

    .payroll-main-features {
        padding: 40px 0 88px;
        text-align: center;
    }

    .payroll-main-features h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 32px;
        color: #1f1f1f;
    }

    .payroll-main-pill-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
        max-width: 800px;
        margin: 0 auto 20px;
    }

    .payroll-main-pill {
        background: var(--payroll-soft);
        border-radius: 16px;
        padding: 24px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: var(--payroll-dark-green);
        transition: all 0.2s;
        border: 1px solid transparent;
    }

    .payroll-main-pill:hover {
        background: #fff;
        border-color: var(--payroll-green);
        box-shadow: 0 10px 20px rgba(0, 153, 68, 0.1);
        transform: translateY(-2px);
    }

    .payroll-main-pill.single {
        grid-column: span 2;
        width: 60%;
        margin: 0 auto;
    }

    @media (max-width: 1024px) {
        .payroll-hero-grid,
        .payroll-highlight {
            grid-template-columns: 1fr;
        }

        .payroll-container {
            padding: 0 20px;
        }

        .payroll-img-left,
        .payroll-img-right {
            padding: 0 20px;
        }

        .payroll-hero {
            padding: 28px 0 30px !important;
        }

        .payroll-hero h1,
        .payroll-hero.lang-en h1,
        .payroll-hero.lang-kor h1 {
            font-size: 32px;
            line-height: 1.14;
            letter-spacing: -0.5px;
            margin-bottom: 14px;
            max-width: 100%;
        }

        .payroll-hero p,
        .payroll-hero.lang-en p,
        .payroll-hero.lang-kor p {
            font-size: 16px;
            line-height: 1.45;
            letter-spacing: 0;
            margin-bottom: 10px;
            max-width: 100%;
        }

        .payroll-hero span,
        .payroll-hero.lang-en span,
        .payroll-hero.lang-kor span {
            font-size: 14px;
            line-height: 1.45;
            margin-right: 0;
            max-width: 100%;
        }

        .payroll-pill-row {
            grid-template-columns: 1fr;
        }

        .payroll-feature-grid,
        .payroll-main-pill-grid {
            grid-template-columns: 1fr;
        }

        .payroll-main-pill.single {
            width: 100%;
            grid-column: span 1;
        }
        
        .payroll-feature-card {
            align-items: center;
        }
        
        .payroll-highlight-list {
            text-align: left;
        }

        .payroll-hero-visual {
            justify-content: center;
            margin-top: 18px;
        }

        .payroll-hero-visual img {
            width: 100%;
            max-width: 360px;
            margin-left: 0;
            margin-right: 0;
        }

        .payroll-full-img {
            padding: 36px 0;
        }
    }

    @media (max-width: 430px) {
        .payroll-container,
        .payroll-img-left,
        .payroll-img-right {
            padding: 0 16px;
        }

        .payroll-hero h1,
        .payroll-hero.lang-en h1,
        .payroll-hero.lang-kor h1 {
            font-size: 30px;
            line-height: 1.12;
        }

        .payroll-hero p,
        .payroll-hero.lang-en p,
        .payroll-hero.lang-kor p {
            font-size: 15px;
        }

        .payroll-hero span,
        .payroll-hero.lang-en span,
        .payroll-hero.lang-kor span {
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
    
    .menu-about {
        gap: 10px;
    }

    .menu-box {
        background-color: #28a745; /* green */
        color: #fff;

        padding: 4px 6px;
        border-radius: 8px;

        font-weight: 600;
        font-size: 17px;
        text-align: center;

        /* make it feel like a label, not a button */
        cursor: default;
        user-select: none;

        display: flex;
        align-items: start;
        justify-content: start;
    }
</style>
@endsection

@php
    if (activelang() == 'KOR') {
        $ext = '-kor';
    } else {
        $ext = '-eng';
    }
@endphp

@section('content')
<section class="payroll-hero lang-{{ strtolower(activelang()) }}">
    <div class="payroll-container">
        <!-- Breadcrumbs removed to match design -->
        <div class="payroll-hero-grid">
            <div>
                <h1>{{ stringlang('Payroll Management Solution'
                                , 'Optimalkan Pengelolaan Payroll dengan SystemEver Payroll'
                                , '급여 관리 솔루션') }}</h1>
                
            <!-- @if (activelang() != "KOR")
                <section style="padding-bottom: 10px;">
                    <div class="col-lg-12 d-flex">
                        <ul class="menu-about d-flex">
                            <li class="menu-box">{{ stringlang('Accurate', 'Akurat','정확성') }}</li>
                            <li class="menu-box">{{ stringlang('Compliant', 'Patuh Regulasi','법규 준수') }}</li>
                            <li class="menu-box">{{ stringlang('Fast', 'Cepat','신속함') }}</li>
                            <li class="menu-box">{{ stringlang('Scalable', 'Skalabel','확장성') }}</li>
                        </ul>
                    </div>
                </section>
            @endif -->
                <p>{{ stringlang('SystemEver Payroll is a payroll management solution that automates salary calculations and statutory compliance processes.'
                               , 'SystemEver Payroll adalah solusi manajemen penggajian yang mengotomatiskan seluruh siklus payroll — mulai dari integrasi data kehadiran hingga perhitungan potongan sesuai ketentuan yang berlaku. Dengan proses yang lebih efisien, tim Anda dapat mengurangi waktu perhitungan manual dan lebih fokus pada inisiatif strategis.'
                               , 'SystemEver Payroll은 급여 계산과 법정 공제 처리를 자동화하는 ​급여 관리 솔루션입니다.​'
                                ) }}
                </p>
                <span>  
                        <!-- @if (activelang() != 'KOR')
                        {{ stringlang('Payroll is more than paying salaries —'
                                   , 'Payroll bukan sekadar membayar gaji —'
                                   , '급여 관리는 단순한 급여 지급이 아닙니다 —') }}
                        <br>
                        @endif -->
                        {{ stringlang('By integrating attendance data, it enables accurate and reliable payroll operations.'
                                   , 'melainkan tentang akurasi operasional, kepatuhan terhadap regulasi, dan membangun kepercayaan.'
                                   , '근태 데이터 연동을 기반으로 정확하고 안정적인 급여 운영을 지원합니다.') }}
                </span>
            </div>
            <div class="payroll-hero-visual">
                <img src="{{ asset('assets/img/payroll-logo.png') }}" alt="SystemEver Payroll">
            </div>
        </div>
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-img-left">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-challenges' . $ext . '.png') }}" alt="Payroll Challenges" style="width: 100%; max-width: 100%; height: auto;">
        </div>
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-img-right">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-smarter-way' . $ext . '.png') }}" alt="Payroll Special Features" style="width: 100%; max-width: 100%; height: auto;">
        </div>
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-container">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-why-systemever' . $ext . '.png') }}" alt="Why SystemEver Payroll" style="width: 100%; max-width: 1020px; height: auto; display: block; margin: 0 auto;">
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-container">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-core-features' . $ext . '.png') }}" alt="Payroll Core Features" style="width: 100%; max-width: 1020px; height: auto; display: block; margin: 0 auto;">
        </div>
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-container">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-table' . $ext . '.png') }}" alt="Manual Payroll vs. SystemEver Payroll" style="width: 60%; max-width: 1020px; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-container">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-drive-business' . $ext . '.png') }}" alt="Drive Business Result" style="width: 100%; max-width: 1020px; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

<section class="payroll-full-img">
    <div class="payroll-container">
        <div style="margin-top: 40px; text-align: center;">
            <img src="{{ asset('assets/img/payroll-built-as-part' . $ext . '.png') }}" alt="Part of an Integrated Business Platform" style="width: 100%; max-width: 1020px; height: auto; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection
