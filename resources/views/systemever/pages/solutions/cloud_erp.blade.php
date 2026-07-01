@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Cloud ERP ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .font-opensans {
        font-family: 'Open Sans', sans-serif;
    }

    .container {
        max-width: 1140px !important;
        margin: auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    :root {
        --cloud-green: #00b34f;
        --cloud-green-soft: #eaf7ee;
        --cloud-dark: #2d2d2d;
        --cloud-gray: #8f8f8f;
        --cloud-green-dark: #007a37;
    }

    /* Animation Definitions */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .cloud-container {
        max-width: 1350px;
        width: 100%;
        margin: 0 auto;
        padding: 0 30px; 
        box-sizing: border-box;
    }

    /* Hero Section */
    .cloud-hero.lang-en {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }

    .cloud-hero.lang-kor {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }

    .cloud-hero-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 0;
        align-items: center;
    }

    .cloud-hero-img-right {
        margin: 0 auto;
        padding: 0 0px 0 200px;
    }

    .cloud-hero.lang-en h1 {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 48px;
        line-height: 1.25;
        font-weight: 700;
        color: #1f1f1f;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }
    
    .cloud-hero.lang-en p {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 30px;
        font-weight: 300;
        line-height: 1.2;
        color: var(--cloud-gray);
        margin-bottom: 12px;
        letter-spacing: 1px;
        max-width: 700px;
    }
    
    .cloud-hero.lang-en span {
        font-family: 'Poppins', sans-serif;
        font-size: 19px;
        line-height: -1.5;
        font-weight: 500;
        color: var(--cloud-green);
        max-width: 600px;
        margin-bottom: 0;
        margin-right: -65px;
        display: block;
    }
    
    .cloud-hero.lang-kor h1 {
        font-family: 'Poppins', 'Noto Sans KR', sans-serif;
        font-size: 62px;
        line-height: 1.25;
        font-weight: 600;
        color: #1f1f1f;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }
    
    .cloud-hero.lang-kor p {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 29px;
        line-height: 1.2;
        color: var(--cloud-gray);
        margin-bottom: 12px;
        letter-spacing: 1px;
        max-width: 720px;
        font-weight: 450;
    }

    .cloud-hero.lang-kor span {
        font-family: 'Open Sans', 'Noto Sans KR', sans-serif;
        font-size: 19px;
        line-height: -1.5;
        font-weight: 500;
        color: var(--cloud-green);
        max-width: 640px;
        margin-bottom: 0;
        margin-right: -65px;
        display: block;
    }

    
    .cloud-hero-id p {
        font-family: 'Open Sans', sans-serif;
        font-size: 17px;
        line-height: 1.2;
        /* font-weight: 500; */
        color: var(--cloud-gray);
        margin-bottom: 10px;
    }

    .cloud-hero h1.kor-heavy {
        font-family: 'Noto Sans KR', sans-serif;
        font-weight: 900 !important;
        letter-spacing: -0.2px;
        -webkit-text-stroke: 0.15px currentColor;
    }

    .cloud-hero-id h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 22px;
        font-weight: 700;
        line-height: 1.25;
        color: #1f1f1f;
        margin-bottom: 10px;
    }


    .cloud-hero-id span {
        font-family: 'Open Sans', sans-serif;
        font-size: 15px;
        line-height: 0.8;
        font-weight: 500;
        color: var(--cloud-green);
        margin-bottom: 0;
    }

    .cloud-hero-logos {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }

    .cloud-hero-img {
        justify-self: end;     
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }

    .cloud-hero-img img {
        display: block;
        width: 117%;
        max-width: none;
        margin-left: auto;     
        margin-right: -60px;   
    }

    .cloud-hero-img:hover {
        transform: scale(1.02);
        max-width: none; 
    }

    /* Key Benefit Section */
    .key-benefit-section {
        padding: 60px 0;
        text-align: center;
    }

    .key-benefit-title {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: var(--cloud-green);
        margin-bottom: 40px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .key-benefit-title span {
        color: #1f1f1f;
        
    }

    .key-benefit-box {
        background: linear-gradient(180deg, #4CAF50 0%, #2E7D32 100%);
        border-radius: 30px;
        padding: 50px;
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 40px;
        align-items: center;
        color: white;
        position: relative;
    }

    /* What is Cloud ERP */
    .what-is-cloud-erp {
        padding: 80px 0;
    }

    .what-is-cloud-erp .cloud-hero-img-right {
        margin: 0 auto;
        padding: 0 0 0 200px;
        overflow: hidden;
    }

    .what-is-cloud-erp-image {
        display: block;
        width: 100%;
        max-width: 100%;
        height: auto;
        margin-left: auto;
    }

    /* Total Solutions */
    .total-solutions {
        padding: 80px 0;
        text-align: center;
    }

    .total-solutions h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 60px;
        color: #1f1f1f;
    }

    /* Built for Your Industry */
    .built-industry-section {
        padding: 60px 0;
    }

    /* Business Impact */
    .business-impact-section {
        padding: 60px 0;
    }

    /* Comparison Section */
    .comparison-section {
        padding: 60px 0;
    }

    /* Integration Section */
    .integration-section {
        padding: 80px 0;
        text-align: center;
    }

    .btn-details {
        background: #6c757d;
        color: white;
        padding: 12px 30px;
        border-radius: 30px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        margin-top: 40px;
        transition: none;
    }

    .btn-details:hover {
        background: #6c757d;
        color: white;
        text-decoration: none;
    }

    @media (max-width: 1024px) {
        .cloud-hero-grid, 
        .key-benefit-box {
            grid-template-columns: 1fr;
        }

        .cloud-container {
            padding: 0 20px;
        }

        .cloud-hero {
            padding: 28px 0 30px !important;
        }

        .cloud-hero-img-right {
            padding: 0 20px;
        }

        .what-is-cloud-erp .cloud-hero-img-right {
            padding: 0 20px;
        }

        .what-is-cloud-erp-image {
            width: 100%;
            max-width: 100%;
        }

        .cloud-hero h1,
        .cloud-hero.lang-en h1,
        .cloud-hero.lang-kor h1,
        .cloud-hero-id h1 {
            font-size: 38px !important;
            line-height: 1.14;
            letter-spacing: -0.5px;
            margin-bottom: 14px;
        }

        .cloud-hero p,
        .cloud-hero.lang-en p,
        .cloud-hero.lang-kor p,
        .cloud-hero-id p {
            font-size: 22px !important;
            line-height: 1.45;
            letter-spacing: 0;
            margin-bottom: 10px;
            max-width: 100%;
        }

        .cloud-hero span,
        .cloud-hero.lang-en span,
        .cloud-hero.lang-kor span,
        .cloud-hero-id span {
            font-size: 18px !important;
            line-height: 1.45;
            margin-right: 0;
            max-width: 100%;
        }

        .cloud-hero-img {
            justify-content: center;
            margin-top: 18px;
        }

        .cloud-hero-img img {
            width: 100%;
            max-width: 560px;
            margin-left: 0;
            margin-right: 0;
        }

        .what-is-cloud-erp,
        .total-solutions,
        .integration-section,
        .built-industry-section,
        .business-impact-section,
        .comparison-section {
            padding: 36px 0 !important;
        }

        .key-benefit-section {
            padding-top: 36px;
        }

        .btn-details {
            margin-top: 24px;
            padding: 11px 22px;
            font-size: 14px;
        }
    }

    @media (max-width: 430px) {
        .cloud-container {
            padding: 0 16px;
        }

        .cloud-hero-img-right {
            padding: 0 16px;
        }

        .what-is-cloud-erp .cloud-hero-img-right {
            padding: 0 16px;
        }

        .cloud-hero h1,
        .cloud-hero.lang-en h1,
        .cloud-hero.lang-kor h1,
        .cloud-hero-id h1 {
            font-size: 30px !important;
            line-height: 1.12;
        }

        .cloud-hero p,
        .cloud-hero.lang-en p,
        .cloud-hero.lang-kor p,
        .cloud-hero-id p {
            font-size: 16px !important;
        }

        .cloud-hero span,
        .cloud-hero.lang-en span,
        .cloud-hero.lang-kor span,
        .cloud-hero-id span {
            font-size: 13px !important;
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
<section class="cloud-hero lang-{{ strtolower(activelang()) }}">
    <div class="cloud-container">
        <div class="cloud-hero-grid">
            <div data-aos="fade-right">
                <h1>{{ stringlang('Cloud ERP Platform', 'Cloud ERP untuk Mendorong Pertumbuhan Bisnis', '클라우드 ERP 통합 플랫폼') }}
                </h1>
                <p> {{ stringlang('SystemEver ERP and CloudAce ERP is a cloud-based enterprise resource planning solution designed to manage core business operations in an integrated environment.'
                                , 'SystemEver Accounting memberdayakan bisnis dari berbagai skala untuk mengelola data keuangan dengan lebih cepat, lebih sederhana, akurat, dan efisien.'
                                , 'SystemEver ERP및 CloudAce ERP는 기업 운영 전반을 통합 관리하는 ​클라우드 ERP 솔루션입니다.') }}
                </p>
                <span> {{ stringlang('It supports accounting, sales, purchasing, inventory, and production processes within a single system.'
                                   , 'Tanpa infrastruktur yang rumit. Implementasi cepat. Dirancang fleksibel dan mudah dikembangkan sesuai pertumbuhan bisnis Anda.'
                                   , '회계, 영업, 구매, 재고, 생산 등 핵심 업무를 하나의 시스템에서 ​운영할 수 있도록 지원합니다.') }}</span>
                <div class="cloud-hero-logos">
                    <!-- Logos would go here -->
                </div>
            </div>
            <div class="cloud-hero-img" data-aos="fade-left">
                <img src="{{ asset('assets/img/cloud-logo.png') }}" alt="Cloud ERP Illustration">
            </div>
        </div>
    </div>
</section>

<section class="what-is-cloud-erp">
    <div class="cloud-hero-img-right">
        <div style="text-align: center;">
            <img src="{{ asset('assets/img/cloud-what-is-cloud-erp' . $ext . '.png') }}" alt="What is Cloud ERP" class="what-is-cloud-erp-image">
        </div>
    </div>
</section>

<section class="key-benefit-section" style="padding-bottom: 0;">
    <div class="cloud-container">
        <div>
            <img src="{{ asset('assets/img/cloud-keybenefit' . $ext . '.png') }}" alt="">
        </div>
    </div>
</section>

<section class="total-solutions">
<div class="cloud-container">

        <div style="text-align: center;">
            <img src="{{ asset('assets/img/cloud-core-erp-modules' . $ext . '.png') }}" alt="Total Solutions" style="width: 100%; max-width: 1020px; margin: 0 auto; display: block;">
        </div>
    </div>
</section>

<section class="integration-section" style="padding: 80px 0;">
    <div class="cloud-container">
        
        <div style="text-align: center; margin-top: 40px;">
            <img src="{{ asset('assets/img/cloud-itinventory' . $ext . '.png') }}" alt="IT Inventory" style="width: 100%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            @php
                $itRoute = route('get.pages.it_inventory.en');
            @endphp
            <a href="{{ $itRoute }}" class="btn-details">{{ stringlang('Click more details', 'Klik untuk detail lebih lanjut', '자세한 내용을 보려면 클릭하세요') }}</a>
        </div>
    </div>
</section>

<section class="built-industry-section" style="padding: 60px 0;">
    <div class="cloud-container" style="text-align: center;">
        <img src="{{ asset('assets/img/cloud-built-industry' . $ext . '.png') }}" alt="Built for Your Industry" style="width: 100%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
    </div>
</section>

<section class="business-impact-section" style="padding: 60px 0;">
    <div class="cloud-container" style="text-align: center;">
        <img src="{{ asset('assets/img/cloud-business-impact' . $ext . '.png') }}" alt="Business Impact" style="width: 100%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
    </div>
</section>

<section class="comparison-section" style="padding: 60px 0;">
    <div class="cloud-container" style="text-align: center;">
        <img src="{{ asset('assets/img/cloud-comparison' . $ext . '.png') }}" alt="CloudAce VS SystemEver Comparison" style="width: 100%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
    </div>
</section>
@endsection

@section('footer')
    @include('systemever.includes.footer')
@endsection
