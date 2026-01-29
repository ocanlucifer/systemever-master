@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution Payroll ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

    :root {
        --payroll-green: #009944;
        --payroll-soft: #eaf7ee;
        --payroll-dark-green: #007a37;
        --payroll-gray: #6c6c6c;
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
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .payroll-hero {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }

    .payroll-hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 48px;
        align-items: center;
    }

    .payroll-hero h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 42px;
        line-height: 1.25;
        font-weight: 700;
        color: #1f1f1f;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
    }

    .payroll-hero p {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.7;
        color: var(--payroll-gray);
        margin-bottom: 12px;
    }

    .payroll-hero-visual {
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.5s ease;
    }
    
    .payroll-hero-visual:hover {
        transform: scale(1.02);
    }

    .payroll-hero-visual img {
        width: 100%;
        max-width: 480px;
        object-fit: contain;
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

    @media (max-width: 768px) {
        .payroll-hero-grid,
        .payroll-highlight {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .payroll-hero-visual {
            order: -1;
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
    }
</style>
@endsection

@section('content')
<section class="payroll-hero">
    <div class="payroll-container">
        <!-- Breadcrumbs removed to match design -->
        <div class="payroll-hero-grid">
            <div>
                <h1>{{ stringlang('Accurate, Flexibility, and Automated Payroll System for Indonesian Businesses', 'Sistem Payroll Otomatis yang Akurat dan Fleksibel untuk Perusahaan di Indonesia', '인도네시아 기업을 위한 정확하고 유연한 자동 급여 시스템') }}</h1>
                <p>{{ stringlang('Automate payroll, tax calculation, and statutory reporting with a payroll system designed specifically for Indonesian regulations.', 'Sistem payroll yang dirancang sesuai regulasi Indonesia untuk 

mengotomatiskan penggajian dan perhitungan pajak secara fleksibel, serta 

menghasilkan laporan XML siap CoreTax secara instan.', '인도네시아 규정에 특화된 급여 시스템으로 급여 및 세금 계산을 유연하게 자동화하고, CoreTax 제출이 가능한 XML 리포트를 즉시 생성합니다.') }}</p>
            </div>
            <div class="payroll-hero-visual">
                <img src="{{ asset('assets/img/payroll1.png') }}" alt="SystemEver Payroll">
            </div>
        </div>

        <h2 class="payroll-section-title">{{ stringlang('SystemEver Payroll automates calculations and reporting with regulation-ready logic.', 'SystemEver Payroll mengelola perhitungan dan pelaporan dengan logika yang siap regulasi.', 'SystemEver Payroll은 규정 대응 로직을 기반으로 급여 계산과 리포트를 자동화합니다.') }}</h2>
        <div class="payroll-pill-row">
            <div class="payroll-info-card">{{ stringlang('Latest PPh 21 & PPh 26 rules', 'Mendukung aturan terbaru PPh 21 dan PPh 26', '최신 PPh 21 및 PPh 26 규정 반영') }}</div>
            <div class="payroll-info-card">{{ stringlang('BPJS Kesehatan & Ketenagakerjaan regulations', 'Perhitungan iuran BPJS Kesehatan, JHT, dan JP yang terkelola otomatis', 'BPJS Kesehatan, JHT, JP 보험료 계산 관리') }}</div>
            <div class="payroll-info-card">{{ stringlang('Structured reporting aligned with Coretax DJP', 'Pelaporan Sesuai Standar Coretax DJP', 'Coretax DJP 기준에 부합하는 구조화된 리포트 제공') }}</div>
        </div>
        <div class="payroll-note">{{ stringlang('Payroll results are ready for review, reconciliation, and submission by HR, finance, and tax professionals.', 'Hasil payroll langsung siap ditinjau, direkonsiliasi, dan dilaporkan oleh tim HR, keuangan, dan pajak.', '급여 결과는 인사, 재무, 세무 담당자가 검토, 대사, 제출까지 바로 진행할 수 있도록 준비된 형태로 제공됩니다.') }}</div>

        <div style="margin-top: 40px; text-align: center;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/payroll1korea.png') }}" alt="Payroll Core Benefits" style="width: 100%; max-width: 100%; height: auto;">
            @elseif(activelang() == 'ID')
                <img src="{{ asset('assets/img/payroll1indo.png') }}" alt="Payroll Core Benefits" style="width: 100%; max-width: 100%; height: auto;">
            @else
                <img src="{{ asset('assets/img/payroll2.png') }}" alt="Payroll Core Benefits" style="width: 100%; max-width: 100%; height: auto;">
            @endif
        </div>
    </div>
</section>

<section class="payroll-features">
    <div class="payroll-container">
        <div class="features-header">
            <h3>{{ stringlang('SystemEver Payroll Special Features', 'Fitur Khusus SystemEver Payroll', 'SystemEver Payroll Special Features') }}</h3>
        </div>
        <div class="payroll-feature-grid">
            <!-- Row 1 -->
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">1</div>
                <div class="payroll-feature-content">
                    <h4>{{ stringlang('Flexible Payroll Structure', 'Struktur Sistem Payroll yang Fleksibel', '유연한 급여 구조') }}</h4>
                </div>
            </div>
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">4</div>
                <div class="payroll-feature-content">
                    <h4>{{ stringlang('Daily/Monthly Payroll Calculation', 'Perhitungan Gaji Harian/Bulanan', '일급·월급 급여 계산 지원') }}</h4>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">2</div>
                <div class="payroll-feature-content">
                    <h4>{{ stringlang('Automated Tax Calculations', 'Perhitungan Pajak Otomatis', '세금 자동 계산') }}</h4>
                </div>
            </div>
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">5</div>
                <div class="payroll-feature-content">
                    <h4>{{ stringlang('Shift Management', 'Manajemen Shift', '교대근무 관리') }}</h4>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">3</div>
                <div class="payroll-feature-content">
                    <h4>{{ stringlang('Leave & Attendance Integration', 'Integrasi Cuti & Kehadiran', '근태 및 휴가 데이터 연동') }}</h4>
                </div>
            </div>
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">6</div>
                <div class="payroll-feature-content">
                    <h4>{{ stringlang('Automated XML Coretax Report Generation', 'Pembuatan Laporan XML Coretax Otomatis', 'Coretax XML 자동 생성') }}</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="payroll-main-features">
    <div class="payroll-container">
        <h3>{{ stringlang('SystemEver Payroll Main Features', 'Fitur Utama SystemEver Payroll', 'SystemEver Payroll Main Features') }}</h3>
        <div class="payroll-main-pill-grid">
            <div class="payroll-main-pill">{{ stringlang('HR Data Management', 'Manajemen Data HR', '인사 데이터 관리') }}</div>
            <div class="payroll-main-pill">{{ stringlang('Payroll Management', 'Manajemen Penggajian', '급여 관리') }}</div>
            <div class="payroll-main-pill">{{ stringlang('ESS (Employee Self Service)', 'ESS (Employee Self Service)', 'ESS (임직원 셀프 서비스)') }}</div>
            <div class="payroll-main-pill">{{ stringlang('Payroll & Tax Reports', 'Laporan Penggajian & Pajak', '급여 및 세무 리포트') }}</div>
        </div>
        <div class="payroll-main-pill-grid">
            <div class="payroll-main-pill single">{{ stringlang('EverTime Attendance System Integration', 'Integrasi Sistem Kehadiran EverTime', 'EverTime 근태 시스템 연동') }}</div>
        </div>
    </div>
</section> -->

@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection
