@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution Accounting ' . activelang()
])

@section('custom_css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

    :root {
        --cloud-green: #009944;
        --cloud-green-soft: #eaf7ee;
        --cloud-dark: #2d2d2d;
        --cloud-gray: #6c6c6c;
        --cloud-dark-green: #007a37;
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

    .cloud-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .cloud-hero {
        padding: 60px 0 48px;
        animation: fadeInUp 0.8s ease-out;
    }

    .cloud-hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 48px;
        align-items: center;
    }

    .cloud-hero h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        line-height: 1.25;
        font-weight: 700;
        color: #1f1f1f;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
    }

    .cloud-hero p {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.7;
        color: var(--cloud-gray);
        margin-bottom: 12px;
    }

    .cloud-hero-visual {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        box-shadow: none;
        background: transparent;
        transition: transform 0.5s ease;
    }

    .cloud-hero-visual:hover {
        transform: scale(1.02);
    }

    .cloud-hero-visual img {
        width: 100%;
        max-width: 480px;
        object-fit: contain;
    }

    .cloud-section-title {
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 30px;
        margin: 60px auto 12px;
        max-width: 800px;
        line-height: 1.4;
        color: #1f1f1f;
    }

    .cloud-section-subtitle {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        font-size: 20px;
        color: var(--cloud-gray);
        margin-bottom: 24px;
    }


    .cloud-section {
        padding: 64px 0 72px;
    }

    .cloud-feature-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 60px;
        flex-wrap: wrap;
    }

    .cloud-feature-tab {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        background: transparent;
        padding: 0;
        border: none;
        width: 180px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .cloud-feature-icon {
        width: auto;
        height: auto;
        background: transparent;
        display: block;
    }

    .cloud-feature-icon img {
        height: 50px;
        width: auto;
        margin-bottom: 5px;
        transition: all 0.3s;
        filter: grayscale(100%);
        opacity: 0.6;
    }

    .cloud-feature-tab h4 {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        font-weight: 700;
        color: #999;
        line-height: 1.4;
    }

    /* Active & Hover States */
    .cloud-feature-tab:hover h4, 
    .cloud-feature-tab.is-active h4 {
        color: var(--cloud-green-dark);
    }

    .cloud-feature-tab:hover img, 
    .cloud-feature-tab.is-active img {
        transform: scale(1.1);
        filter: grayscale(0%);
        opacity: 1;
    }

    .cloud-feature-tabs {
        position: relative;
        z-index: 2;
    }

    .cloud-tab-panel {
        display: none;
        margin-top: -4px;
    }

    .cloud-tab-panel.is-active {
        display: block;
        position: relative;
    }

    .cloud-tab-panel.is-active::before {
        content: '';
        position: absolute;
        top: -12px;
        left: var(--indicator-left, 50%);
        transform: translateX(-50%);
        width: 26px;
        height: 26px;
        background: var(--cloud-green-soft);
        border-radius: 8px;
        transform: translateX(-50%) rotate(45deg);
        z-index: 3;
    }

    .cloud-highlight {
        background: var(--cloud-green-soft);
        position: relative;
        overflow: visible;
        padding: 72px 0;
        margin-top: 0;
    }

    .cloud-highlight-grid {
        display: grid;
        grid-template-columns: 1.05fr 1fr;
        gap: 34px;
        align-items: center;
    }

    .cloud-highlight h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 16px;
        color: #1f1f1f;
    }

    .cloud-highlight-list {
        display: grid;
        gap: 16px;
    }

    .cloud-highlight-item {
        display: flex;
        gap: 12px;
    }

    .cloud-check {
        width: 22px;
        height: 22px;
        border-radius: 6px;
        background: var(--cloud-green);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        flex-shrink: 0;
    }

    .cloud-highlight-item h5 {
        margin: 0 0 4px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: #1f1f1f;
    }

    .cloud-highlight-item p {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        color: var(--cloud-gray);
    }

    .cloud-highlight-visual {
        background: transparent;
        border-radius: 0;
        padding: 0;
        box-shadow: none;
        min-height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cloud-highlight-visual img {
        width: 100%;
        max-width: 475px;
    }

    .cloud-diagram {
        padding: 72px 0 60px;
    }

    .cloud-diagram-card {
        position: relative;
        background: #ffffff;
        border-radius: 24px;
        padding: 40px 24px;
        box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.08);
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 24px;
        align-items: center;
    }

    .cloud-diagram-center {
        grid-column: span 2;
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }

    .cloud-diagram-center img {
        width: 100%;
        max-width: 840px;
    }

    .cloud-pill {
        border: 1px solid var(--cloud-green);
        color: var(--cloud-green);
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 999px;
        background: #fff;
    }

    .cloud-pill-group {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 18px;
    }

    .cloud-benefits {
        padding: 56px 0 72px;
        background: transparent;
    }

    .cloud-benefits-grid {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 40px;
        align-items: start;
    }

    .cloud-benefits-left {
        display: grid;
        gap: 24px;
    }

    .cloud-benefits-right {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 24px 36px;
    }

    .cloud-benefits h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .cloud-benefits p {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        color: var(--cloud-gray);
    }

    .cloud-benefit-card {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0 0 18px;
    }

    .cloud-benefit-card.is-divider {
        border-bottom: 1px solid #e2e2e2;
        padding-bottom: 18px;
    }

    .cloud-benefit-card .cloud-feature-icon {
        width: 32px;
        height: 32px;
    }

    .cloud-benefit-card .cloud-feature-icon img {
        width: 24px;
        height: 24px;
    }

    .cloud-benefit-card h5 {
        margin: 0 0 4px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: var(--cloud-green);
    }

    .cloud-benefit-card ul {
        margin: 0;
        padding-left: 0;
        list-style: none;
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        color: var(--cloud-gray);
    }

    .cloud-benefit-card li {
        position: relative;
        padding-left: 18px;
        margin-bottom: 4px;
    }

    .cloud-benefit-card li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: var(--cloud-green);
        font-weight: 700;
        font-size: 12px;
        line-height: 1.2;
    }

    @media (max-width: 1024px) {
        .cloud-hero-grid,
        .cloud-highlight-grid,
        .cloud-benefits-grid {
            grid-template-columns: 1fr;
        }

        .cloud-feature-row {
            grid-template-columns: 1fr;
        }

        .cloud-diagram-card {
            grid-template-columns: 1fr;
        }

        .cloud-diagram-center {
            grid-column: span 1;
        }

        .cloud-benefit-list {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<section class="cloud-hero">
    <div class="cloud-container">
        <div class="bc">
            <a href="/">{{ stringlang('Home', 'Beranda','홈페이지') }}</a>
            <img src="{{ asset('assets/fl/bc.png') }}" alt="">
            <a href="">{{ stringlang('Solution', 'Solusi','솔루션') }}</a>
            <img src="{{ asset('assets/fl/bc.png') }}" alt="">
            <a href="" class="active">{{ stringlang('Accounting', 'Akuntansi', '회계') }}</a>
        </div>
        <div class="cloud-hero-grid">
            <div>
                <h1>{{ stringlang('Integrated accounting helps analyze financial report in simple and efficient way', 'Akuntansi Terintegrasi untuk Analisis Keuangan yang Lebih Mudah dan Efisien ', '통합 회계 기반의 쉽고 효율적인 재무 보고서 분석') }}</h1>
                <div class="cloud-highlight-list" style="margin-top: 24px;">
                    <div class="cloud-highlight-item">
                        <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                        <div>
                            <p style="margin: 0; font-size: 16px; color: #1f1f1f; font-weight: 600;">{{ stringlang('Recap data without running out of time and effort', 'Rekap data secara efisien tanpa membuang waktu dan tenaga', '시간과 노력을 줄여 재무 데이터를 효율적으로 집 ') }}</p>
                        </div>
                    </div>
                    <div class="cloud-highlight-item">
                        <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                        <div>
                            <p style="margin: 0; font-size: 16px; color: #1f1f1f; font-weight: 600;">{{ stringlang('Manage all journal transactions in one system', 'Kelola seluruh transaksi jurnal dalam satu sistem', '모든 전표 거래를 하나의 시스템에서 통합 관리 ') }}</p>
                        </div>
                    </div>
                    <div class="cloud-highlight-item">
                        <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                        <div>
                            <p style="margin: 0; font-size: 16px; color: #1f1f1f; font-weight: 600;">{{ stringlang('Financial report automations', 'Otomatisasi laporan keuangan', '재무 리포트 자동화 ') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cloud-hero-visual">
                <img src="{{ asset('assets/img/1.png') }}" alt="SystemEver Accounting">
            </div>
        </div>
    </div>
</section>

<section class="cloud-section">
    <div class="cloud-container">
        <h2 class="cloud-section-title">{{ stringlang('Make Bookkeeping in Simple Way', 'Pembukuan Menjadi Lebih Sederhana', '간단한 방법으로 장부 작성') }}</h2>
        <p class="cloud-section-subtitle">{{ stringlang('SystemEver Accounting provides comprehensive features that make business accounting processes easier', 'SystemEver Accounting menyediakan fitur komprehensif yang memudahkan proses akuntansi bisnis', 'SystemEver Accounting은 비즈니스 회계 프로세스를 더 쉽게 만드는 포괄적인 기능을 제공합니다') }}</p>
        <div class="cloud-feature-tabs" id="cloud-feature-tabs">
            <div class="cloud-feature-row">
                <button class="cloud-feature-tab is-active" type="button" data-tab="journals" aria-pressed="true">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/2.png') }}" alt="{{ stringlang('Input multiple journals', 'Input beberapa jurnal', '전표일괄 업로드') }}">
                    </div>
                    <h4>{{ stringlang('Input multiple journals at once', 'Input beberapa jurnal sekaligus', '전표일괄 업로드') }}</h4>
                </button>
                <button class="cloud-feature-tab" type="button" data-tab="proof" aria-pressed="false">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/3.png') }}" alt="{{ stringlang('Upload proof of transactions', 'Upload bukti transaksi', '거래 증빙 업로드') }}">
                    </div>
                    <h4>{{ stringlang('Upload proof of transactions', 'Upload bukti transaksi', '거래 증빙 업로드') }}</h4>
                </button>
                <button class="cloud-feature-tab" type="button" data-tab="visual" aria-pressed="false">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/4.png') }}" alt="{{ stringlang('Menu visualisation', 'Visualisasi menu', '메뉴 시각화') }}">
                    </div>
                    <h4>{{ stringlang('Menu visualisation', 'Visualisasi menu', '메뉴 시각화') }}</h4>
                </button>
            </div>
        </div>
    </div>
</section>

<div class="cloud-feature-tabs" id="cloud-feature-panels">
    <section class="cloud-highlight cloud-tab-panel is-active" data-tab-panel="journals">
        <div class="cloud-container">
            <div class="cloud-highlight-grid">
                <div>
                    <h3>{{ stringlang('Input multiple journals at once', 'Input beberapa jurnal sekaligus', '간편한 회계 관리') }}</h3>
                    <div class="cloud-highlight-list">
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Speed Up the Bookkeeping Process', 'Percepat Proses Pembukuan', '자금관리') }}</h5>
                                <p>{{ stringlang('Eliminate manual journals entries, upload every journals with one click.', 'Hilangkan entri jurnal manual, upload semua jurnal dengan satu klik.', '수동 분개 입력을 제거하고 한 번의 클릭으로 모든 분개를 업로드하세요.') }}</p>
                            </div>
                        </div>
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Calculate Automation', 'Otomatisasi Perhitungan', '총계정원장') }}</h5>
                                <p>{{ stringlang('Get instant calculations without enter single unit formulas.', 'Dapatkan perhitungan instan tanpa memasukkan rumus satuan.', '단위 공식을 입력하지 않고 즉시 계산 결과를 얻으세요.') }}</p>
                            </div>
                        </div>
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Automatic Grouping', 'Pengelompokan Otomatis', '회계 리포트') }}</h5>
                                <p>{{ stringlang('Organizing Data will be easier with automatic grouping.', 'Pengorganisasian Data akan lebih mudah dengan pengelompokan otomatis.', '자동 그룹화로 데이터 정리가 더 쉬워집니다.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cloud-highlight-visual">
                    <img src="{{ asset('assets/img/5.png') }}" alt="Journal Preview">
                </div>
            </div>
        </div>
    </section>

    <section class="cloud-highlight cloud-tab-panel" data-tab-panel="proof">
        <div class="cloud-container">
            <div class="cloud-highlight-grid">
                <div>
                    <h3>{{ stringlang('Upload proof of transactions', 'Upload bukti transaksi', '거래 증빙 업로드') }}</h3>
                    <div class="cloud-highlight-list">
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Enter proof of transaction in a click', 'Masukkan bukti transaksi dalam satu klik', '한 번의 클릭으로 거래 증빙 입력') }}</h5>
                                <p>{{ stringlang('Upload proof of transaction in applications without using third-party.', 'Upload bukti transaksi di aplikasi tanpa menggunakan pihak ketiga.', '타사 도구 없이 애플리케이션에서 거래 증빙을 업로드하세요.') }}</p>
                            </div>
                        </div>
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Prevent lost data transactions', 'Mencegah kehilangan data transaksi', '거래 데이터 손실 방지') }}</h5>
                                <p>{{ stringlang('Dont be afraid losing your data, your data will be extraordinary save in AccounTax cloud.', 'Jangan takut kehilangan data Anda, data Anda akan tersimpan dengan aman di cloud AccounTax.', '데이터 손실을 걱정하지 마세요. 데이터는 AccounTax 클라우드에 안전하게 저장됩니다.') }}</p>
                            </div>
                        </div>
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Data Safety Guarantee', 'Jaminan Keamanan Data', '데이터 안전 보장') }}</h5>
                                <p>{{ stringlang('We use Microsoft Azure which secures your data using various encryption methods, protocols, and algorithms, including double encryption.', 'Kami menggunakan Microsoft Azure yang mengamankan data Anda menggunakan berbagai metode enkripsi, protokol, dan algoritma, termasuk enkripsi ganda.', 'Microsoft Azure를 사용하여 이중 암호화를 포함한 다양한 암호화 방법, 프로토콜 및 알고리즘으로 데이터를 보호합니다.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cloud-highlight-visual">
                    <img src="{{ asset('assets/img/trans-proof.png') }}" alt="Proof Preview">
                </div>
            </div>
        </div>
    </section>

    <section class="cloud-highlight cloud-tab-panel" data-tab-panel="visual">
        <div class="cloud-container">
            <div class="cloud-highlight-grid">
                <div>
                    <h3>{{ stringlang('Menu Visualisation', 'Visualisasi Menu', '메뉴 시각화') }}</h3>
                    <div class="cloud-highlight-list">
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Easy to use for every user', 'Mudah digunakan untuk setiap pengguna', '모든 사용자가 쉽게 사용') }}</h5>
                                <p>{{ stringlang('Even without training and manual, users can get an overview of product usage through the application.', 'Bahkan tanpa pelatihan dan manual, pengguna dapat memperoleh gambaran penggunaan produk melalui aplikasi.', '교육이나 매뉴얼 없이도 사용자는 애플리케이션을 통해 제품 사용법을 파악할 수 있습니다.') }}</p>
                            </div>
                        </div>
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Business process visibility', 'Visibilitas proses bisnis', '비즈니스 프로세스 가시성') }}</h5>
                                <p>{{ stringlang('Get an overview of business processes directly through Visual-K.', 'Dapatkan gambaran proses bisnis secara langsung melalui Visual-K.', 'Visual-K를 통해 비즈니스 프로세스를 직접 파악하세요.') }}</p>
                            </div>
                        </div>
                        <div class="cloud-highlight-item">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <h5>{{ stringlang('Improving business productivity and efficiency', 'Meningkatkan produktivitas dan efisiensi bisnis', '비즈니스 생산성 및 효율성 향상') }}</h5>
                                <p>{{ stringlang('Automation would help work be done in a matter of seconds.', 'Otomatisasi akan membantu pekerjaan selesai dalam hitungan detik.', '자동화를 통해 작업을 몇 초 만에 완료할 수 있습니다.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cloud-highlight-visual">
                    <img src="{{ asset('assets/img/menuvisual.png') }}" alt="Menu Preview">
                </div>
            </div>
        </div>
    </section>
</div>

<section class="cloud-diagram">
    <div class="cloud-container">
        <div class="cloud-diagram-card">
            <div class="cloud-diagram-center">
                @if(activelang() == 'KOR')
                    <img src="{{ asset('assets/img/accounting1korea.png') }}" alt="">
                @elseif(activelang() == 'ID')
                    <img src="{{ asset('assets/img/accounting1indo.png') }}" alt="">
                @else
                    <img src="{{ asset('assets/img/6.png') }}" alt="">
                @endif
            </div>
        </div>
    </div>
</section>

<section class="cloud-benefits">
    <div class="cloud-container">
        <div class="cloud-benefits-grid">
            <div class="cloud-benefits-left">
                <div>
                    <h3>{{ stringlang('Maximize your business with SystemEver Accounting', 'Maksimalkan bisnis Anda dengan SystemEver Accounting', 'SystemEver Accounting으로 비즈니스 극대화') }}</h3>
                    <p>{{ stringlang('Developed to provide convenience in accounting activities.', 'Dikembangkan untuk memberikan kemudahan dalam aktivitas akuntansi.', '회계 활동의 편의성을 제공하기 위해 개발되었습니다.') }}</p>
                </div>
                <div class="cloud-benefit-card">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/9.png') }}" alt="{{ stringlang('Tax Report Preparation', 'Persiapan Laporan Pajak', '세금 보고서 준비') }}">
                    </div>
                    <div>
                        <h5>{{ stringlang('Tax Report Preparation', 'Persiapan Laporan Pajak', '세금 보고서 준비') }}</h5>
                        <ul>
                            <li>{{ stringlang('PPN, PPh 23, 26, 15, 4(2), 22', 'PPN, PPh 23, 26, 15, 4(2), 22', 'PPN, PPh 23, 26, 15, 4(2), 22') }}</li>
                            <li>{{ stringlang('Optional: connect to Tax Report Application Provider (PJAP)', 'Opsional: terhubung ke Penyedia Jasa Aplikasi Perpajakan (PJAP)', '선택: 세금 보고서 애플리케이션 제공업체(PJAP)에 연결') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cloud-benefits-right">
                <div class="cloud-benefit-card is-divider">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/7.png') }}" alt="{{ stringlang('Accelerate Business', 'Percepat Bisnis', '계정 기준 다차원 분석') }}">
                    </div>
                    <div>
                        <h5>{{ stringlang('Accelerate Business', 'Percepat Bisnis', '계정 기준 다차원 분석') }}</h5>
                        <ul>
                            <li>{{ stringlang('Tax compliance', 'Kepatuhan pajak', '트리 구조의 계정과목 체계') }}</li>
                            <li>{{ stringlang('Tax templates', 'Template pajak', '계정별 통제 설정') }}</li>
                            <li>{{ stringlang('Import file master data', 'Import file master data', '하위계정 그룹 관리') }}</li>
                            <li>{{ stringlang('Export data and report', 'Export data dan laporan', '거래 유형 분류') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="cloud-benefit-card is-divider">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/8.png') }}" alt="{{ stringlang('Easy Configuration', 'Konfigurasi Mudah', 'Visual Process Map') }}">
                    </div>
                    <div>
                        <h5>{{ stringlang('Easy Configuration', 'Konfigurasi Mudah', 'Visual Process Map') }}</h5>
                        <ul>
                            <li>{{ stringlang('Initiation data setting', 'Pengaturan data awal', '간편한 데이터 이전') }}</li>

                        </ul>
                    </div>
                </div>
                <div class="cloud-benefit-card">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/10.png') }}" alt="{{ stringlang('Asset Management', 'Manajemen Aset', '고정자산 관리') }}">
                    </div>
                    <div>
                        <h5>{{ stringlang('Asset Management', 'Manajemen Aset', '고정자산 관리') }}</h5>
                        <ul>
                            <li>{{ stringlang('Acquisition', 'Akuisisi', '자산이력관리') }}</li>
                            <li>{{ stringlang('Depreciation', 'Depresiasi', '자산 취듍·처분 관리') }}</li>
                            <li>{{ stringlang('Migration', 'Migrasi', '감가상각 관리') }}</li>
                            <li>{{ stringlang('Disposal', 'Pembuangan', '마감처리') }}</li>
                            <li>{{ stringlang('Fixed asset statement', 'Laporan aset tetap', '월 마감') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="cloud-benefit-card">
                    <div class="cloud-feature-icon">
                        <img src="{{ asset('assets/img/11.png') }}" alt="{{ stringlang('Journal Management', 'Manajemen Jurnal', '마감처리') }}">
                    </div>
                    <div>
                        <h5>{{ stringlang('Journal Management', 'Manajemen Jurnal', '마감처리') }}</h5>
                        <ul>
                            <li>{{ stringlang('Detailed ledger', 'Buku besar detail', '월 마감') }}</li>
                            <li>{{ stringlang('Approval system', 'Sistem persetujuan', '연간 마감') }}</li>
                        </ul>
                    </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = Array.from(document.querySelectorAll('.cloud-feature-tab'));
        const panels = Array.from(document.querySelectorAll('.cloud-tab-panel'));
        const tabWrapper = document.getElementById('cloud-feature-tabs');
        const panelWrapper = document.getElementById('cloud-feature-panels');

        const updateIndicator = (activeTab) => {
            if (!panelWrapper || !activeTab) return;
            const wrapRect = panelWrapper.getBoundingClientRect();
            const tabRect = activeTab.getBoundingClientRect();
            const left = tabRect.left + tabRect.width / 2 - wrapRect.left;
            panelWrapper.style.setProperty('--indicator-left', `${left}px`);
        };

        const setActive = (target) => {
            let activeTab = null;
            tabs.forEach((tab) => {
                const isActive = tab.dataset.tab === target;
                tab.classList.toggle('is-active', isActive);
                tab.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                if (isActive) activeTab = tab;
            });
            panels.forEach((panel) => {
                panel.classList.toggle('is-active', panel.dataset.tabPanel === target);
            });
            updateIndicator(activeTab);
        };

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => setActive(tab.dataset.tab));
        });

        const initialTab = tabs.find((tab) => tab.classList.contains('is-active')) || tabs[0];
        if (initialTab) {
            setActive(initialTab.dataset.tab);
        }

        window.addEventListener('resize', () => {
            const activeTab = tabs.find((tab) => tab.classList.contains('is-active'));
            updateIndicator(activeTab);
        });
    });
</script>
@endsection
