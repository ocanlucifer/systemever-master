@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution EverTime ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

    :root {
        --evertime-green: #009944;
        --evertime-soft: #eaf7ee;
        --evertime-dark-green: #007a37;
        --evertime-gray: #6c6c6c;
        --evertime-light-gray: #d4e8dd;
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
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .evertime-hero {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }

    .evertime-hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 48px;
        align-items: center;
    }

    .evertime-hero h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 42px;
        line-height: 1.25;
        font-weight: 700;
        color: #1f1f1f;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
    }

    .evertime-hero p {
        font-family: 'Open Sans', sans-serif;
        font-size: 30px;
        line-height: 1.2;
        font-weight: 500;
        /* color: var(--evertime-gray); */
        margin-bottom: 12px;
    }

    .evertime-hero-visual {
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.5s ease;
    }
    
    .evertime-hero-visual:hover {
        transform: scale(1.02);
    }

    .evertime-hero-visual img {
        width: 100%;
        max-width: 480px;
        object-fit: contain;
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

    .evertime-features {
        padding: 72px 0 80px;
        background: #fcfcfc;
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
        padding: 40px 0 0;
        text-align: center;
        animation: fadeInUp 0.8s ease-out;
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
        max-width: 900px;
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

    @media (max-width: 768px) {
        .evertime-hero-grid,
        .evertime-highlight {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .evertime-hero-visual {
            order: -1;
        }

        .evertime-pill-row {
            grid-template-columns: 1fr;
        }

        .evertime-feature-grid,
        .evertime-dashboard-grid,
        .evertime-integration-grid {
            grid-template-columns: 1fr;
        }
        
        .evertime-feature-card {
            align-items: center;
        }
        
        .evertime-highlight-list {
            text-align: left;
        }
    }
</style>
@endsection

@section('content')
<section class="evertime-hero">
    <div class="evertime-container">
        <div class="evertime-hero-grid">
            <div>
                <h1>{{ stringlang('Time & Attendance Management', 'Manajemen Presensi', '근태관리 플랫폼') }}</h1>
                <p>{{ stringlang('A time & attendance solution that', 'Solusi sistem presensi', '모바일 기반 근태 데이터를 급여 시스템과') }}
                    <br>
                    {{ stringlang('automatically integrates mobile-based', 'yang mengintegrasikan data kehadiran', '자동으로 연동하는 스마트 근태 관리 솔루선') }}
                    <br>
                    {{ stringlang('attendance data with payroll', 'berbasis mobile langsung ke sistem', ' ') }}
                    <br>
                    {{ stringlang(' ', 'payroll secara otomatis.', ' ') }}
                </p>
            </div>
            <div class="evertime-hero-visual">
                <img src="{{ asset('assets/img/evertime1.png') }}" alt="EverTime">
            </div>
        </div>

        <!-- <h2 class="evertime-section-title">{{ stringlang('One-Stop Solution for Complex Attendance Management', 'Solusi Lengkap untuk Manajemen Kehadiran yang Kompleks', '복잡한 근태 관리를 위한 원스톱 솔루션') }}</h2>
        <div class="evertime-pill-row">
            <div class="evertime-info-card">{{ stringlang('Field Worker Solution', 'Solusi Pekerja Lapangan', '현장 근무자 지원') }}</div>
            <div class="evertime-info-card">{{ stringlang('Multi-shift Solution', 'Dukungan Multi-shift', '다중 교대근무 지원') }}</div>
            <div class="evertime-info-card">{{ stringlang('Payroll Integration', 'Integrasi dengan Sistem Payroll', '급여 시스템 연동') }}</div>
        </div>
        <div class="evertime-note">{{ stringlang('Perfect for companies with field teams, 24/7 operations, or dynamic shift schedules.', 'Sangat cocok untuk perusahaan yang memiliki tim lapangan, operasional non-stop, atau jadwal kerja yang dinamis.', '현장 인력, 24시간 운영, 유동적 교대근무 환경에 최적화') }}</div> -->

        <div style="text-align: center; margin: 40px 0;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/evertime-feature-kor.png') }}" alt="EverTime Benefits" style="width: 85%; max-width: 1020px; margin: 0 auto; display: block;">
            @elseif(activelang() == 'ID')
                <img src="{{ asset('assets/img/evertime-feature-ind.png') }}" alt="EverTime Benefits" style="width: 85%; max-width: 1020px; margin: 0 auto; display: block;">
            @else
                <img src="{{ asset('assets/img/evertime-feature-eng.png') }}" alt="EverTime Benefits" style="width: 85%; max-width: 1020px; margin: 0 auto; display: block;">
            @endif
        </div>
    </div>
</section>

<section class="evertime-features">
    <div class="evertime-container">
        <!-- <div class="features-header">
            <h3>{{ stringlang('EverTime Key Features', 'Fitur Utama EverTime', 'EverTime 주요 기능') }}</h3>
        </div>
        <div class="evertime-feature-grid">
            <div class="evertime-feature-card">
                <div class="evertime-feature-number">1</div>
                <div class="evertime-feature-content">
                    <h4>{{ stringlang('Precision Attendance', 'Kehadiran Tepat', '정밀 출석') }}</h4>
                </div>
            </div>
            <div class="evertime-feature-card">
                <div class="evertime-feature-number">4</div>
                <div class="evertime-feature-content">
                    <h4>{{ stringlang('⁠Absence & Leave', 'Ketidakhadiran & Cuti', '결근 및 휴가') }}</h4>
                </div>
            </div>

            <div class="evertime-feature-card">
                <div class="evertime-feature-number">2</div>
                <div class="evertime-feature-content">
                    <h4>{{ stringlang('Dynamic Shift Scheduling', 'Penjadwalan Shift Dinamis', '동적 교대 근무 일정') }}</h4>
                </div>
            </div>
            <div class="evertime-feature-card">
                <div class="evertime-feature-number">5</div>
                <div class="evertime-feature-content">
                    <h4>{{ stringlang('⁠Overtime & Adjustments', 'Lembur & Penyesuaian', '초과 근무 및 조정') }}</h4>
                </div>
            </div>

            <div class="evertime-feature-card">
                <div class="evertime-feature-number">3</div>
                <div class="evertime-feature-content">
                    <h4>{{ stringlang('⁠Instant Approvals', 'Persetujuan Instan', '즉시 승인') }}</h4>
                </div>
            </div>
        </div> -->

        <div style="text-align: center;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/evertime-footnote-kor.png') }}" alt="Evertime Summary" style="width: 100%; max-width: 100%; height: auto;">
            @elseif(activelang() == 'ID')
                <img src="{{ asset('assets/img/evertime-footnote-ind.png') }}" alt="Evertime Summary" style="width: 100%; max-width: 100%; height: auto;">
            @else
                <img src="{{ asset('assets/img/evertime-footnote-eng.png') }}" alt="Evertime Summary" style="width: 100%; max-width: 100%; height: auto;">
            @endif
        </div>
    </div>
</section>

<!-- <section class="evertime-dashboard">
    <div class="evertime-container">
        <h3>{{ stringlang('EverTime Dashboard & Visibility', 'EverTime Dashboard & Visibility', 'EverTime 대시보드 및 가시성') }}</h3>
        <div class="evertime-dashboard-grid">
            <div class="evertime-dashboard-pill">{{ stringlang('Real-time attendance dashboard', 'Dashboard kehadiran Real-time', '실시간 근태 대시보드') }}</div>
            <div class="evertime-dashboard-pill">{{ stringlang('Employee status monitoring', 'Monitoring Status Karyawan', '임직원 현황 모니터링') }}</div>
        </div>
    </div>
</section> -->

<section class="evertime-integration">
    <div class="evertime-container">
        <!-- <h3>{{ stringlang('EverTime Integration Section', 'EverTime Integration', 'EverTime 연동 영역') }}</h3>
        <div class="evertime-integration-grid">
            <div class="evertime-integration-pill">{{ stringlang('Payroll integration', 'Integrasi dengan Sistem Payroll', '급여 시스템 연동') }}</div>
            <div class="evertime-integration-pill">{{ stringlang('ERP integration via API', 'Integrasi ERP via API', 'API 기반 ERP 연동') }}</div>
            <div class="evertime-integration-pill">{{ stringlang('Attendance devices integration', 'Integrasi perangkat absensi', '근태 단말기 연동') }}</div>
        </div> -->

        <div style="text-align: center;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/evertime-screenshot-kor.png') }}" alt="Evertime Summary" style="width: 100%; max-width: 100%; height: auto;">
            @elseif(activelang() == 'ID')
                <img src="{{ asset('assets/img/evertime-screenshot-ind.png') }}" alt="Evertime Summary" style="width: 100%; max-width: 100%; height: auto;">
            @else
                <img src="{{ asset('assets/img/evertime-screenshot-eng.png') }}" alt="Evertime Summary" style="width: 100%; max-width: 100%; height: auto;">
            @endif
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection
