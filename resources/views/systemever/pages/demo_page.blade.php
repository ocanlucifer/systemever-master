@extends('systemever/layouts/windi', [
    'spesifice_page_seo' => 'Demo Page ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');

    :root {
        --demo-green: #18b35b;
        --demo-green-dark: #0f8d48;
        --demo-ink: #202020;
        --demo-muted: #666;
        --demo-border: #d9d9d9;
        --demo-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
    }

    .demo-page {
        font-family: 'Poppins', 'Open Sans', sans-serif;
        background: linear-gradient(180deg, #fbfbfb 0%, #f3f3f3 100%);
        padding: 52px 0 72px;
    }

    .demo-shell {
        width: 100%;
        max-width: 1318px;
        margin: 0 auto;
        padding-left: 13px;
        box-sizing: border-box;
    }

    .demo-hero {
        position: relative;
        overflow: hidden;
        border-radius: 18px;
        min-height: 190px;
        padding: 34px 28px;
        margin-bottom: 34px;
        box-shadow: var(--demo-shadow);
        background:
            linear-gradient(90deg, rgba(0, 0, 0, 0.88) 0%, rgba(10, 88, 48, 0.35) 34%, rgba(24, 179, 91, 0.92) 100%),
            radial-gradient(circle at 85% 40%, rgba(255, 255, 255, 0.25) 0%, transparent 32%),
            url('{{ asset('assets/img/contact-img.png') }}') center left / cover no-repeat;
    }

    .demo-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 78% 50%, rgba(255, 255, 255, 0.18) 0, transparent 44%),
            repeating-radial-gradient(circle at 82% 50%, rgba(255, 255, 255, 0.08) 0 2px, transparent 2px 10px);
        opacity: 0.55;
        pointer-events: none;
    }

    .demo-hero-copy {
        position: relative;
        z-index: 1;
        max-width: 620px;
        color: #fff;
    }

    .demo-hero-copy h1 {
        font-size: 56px;
        line-height: 1.05;
        font-weight: 700;
        margin: 0 0 10px;
        letter-spacing: -1px;
    }

    .demo-hero-copy p {
        margin: 0;
        font-size: 24px;
        line-height: 1.45;
        color: rgba(255, 255, 255, 0.92);
    }

    .demo-form-card {
        background: #fff;
        border-radius: 22px;
        box-shadow: var(--demo-shadow);
        padding: 34px 30px 30px;
    }

    .demo-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px 18px;
    }

    .demo-field {
        display: grid;
        grid-template-columns: 180px 1fr;
        align-items: center;
        gap: 12px;
    }

    .demo-field.demo-field-full {
        grid-column: 1 / -1;
    }

    .demo-field.demo-field-top {
        align-items: start;
    }

    .demo-label {
        font-size: 14px;
        line-height: 1.35;
        font-weight: 600;
        color: var(--demo-ink);
    }

    .demo-required {
        margin-left: 4px;
        color: #d63b31;
        font-weight: 700;
    }

    .demo-input,
    .demo-select,
    .demo-textarea {
        width: 100%;
        border: 1px solid var(--demo-border);
        border-radius: 14px;
        background: linear-gradient(180deg, #ffffff 0%, #f4f4f4 100%);
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.08);
        color: #222;
    }

    .demo-input,
    .demo-select {
        height: 42px;
        padding: 0 14px;
    }

    .demo-textarea {
        min-height: 170px;
        padding: 14px;
        resize: vertical;
    }

    .demo-control {
        width: 100%;
    }

    .demo-input.is-invalid,
    .demo-select.is-invalid,
    .demo-textarea.is-invalid,
    .demo-consent-check.is-invalid {
        border-color: #d63b31;
        box-shadow: 0 0 0 3px rgba(214, 59, 49, 0.08), inset 0 2px 5px rgba(0, 0, 0, 0.08);
    }

    .demo-field-error {
        margin-top: 6px;
        font-size: 12px;
        line-height: 1.35;
        color: #c0392b;
        font-weight: 600;
    }

    .demo-choice-group {
        grid-column: 1 / -1;
        display: grid;
        grid-template-columns: 170px minmax(0, 1fr) 170px minmax(0, 1.15fr);
        column-gap: 26px;
        align-items: start;
        margin-top: 4px;
    }

    .demo-choice-title {
        font-size: 14px;
        line-height: 1.35;
        font-weight: 600;
        color: var(--demo-ink);
        padding-top: 2px;
    }

    .demo-choice-title-right {
        padding-left: 23px;
        margin-right: -8px;
        white-space: nowrap;
    }

    .demo-checklist h3 {
        font-size: 14px;
        line-height: 1.35;
        margin: 0 0 12px;
        color: var(--demo-ink);
        font-weight: 700;
        display: block;
    }

    .demo-checklist label {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 9px;
        font-size: 13px;
        line-height: 1.35;
        color: var(--demo-muted);
    }

    .demo-checklist input[type="checkbox"] {
        margin-top: 2px;
        flex: 0 0 auto;
    }

    .demo-checklist span {
        display: block;
        max-width: 380px;
    }

    .demo-checklist-right {
        padding-left: 8px;
    }

    .demo-lower {
        max-width: 100%;
        margin: 22px 0 0;
        padding: 0;
    }

    .demo-consent {
        margin-top: 96px;
        max-width: 760px;
        padding: 0;
        border: 0;
        border-radius: 0;
        background: transparent;
    }

    .demo-consent h3 {
        margin: 0 0 18px;
        font-size: 18px;
        font-weight: 700;
        color: var(--demo-ink);
    }

    .demo-consent p {
        margin: 0 0 16px;
        font-size: 13px;
        line-height: 1.45;
        color: #202020;
    }

    .demo-consent-item {
        margin-bottom: 18px;
    }

    .demo-consent-item strong {
        display: block;
        margin-bottom: 2px;
        font-size: 13px;
        line-height: 1.35;
        color: #111;
    }

    .demo-consent-check {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: 28px;
        max-width: 575px;
        min-height: 68px;
        padding: 0 16px;
        border: 1px solid #d63b31;
        border-radius: 16px;
        background: #fff;
        font-size: 13px;
        line-height: 1.4;
        color: var(--demo-ink);
        font-weight: 400;
    }

    .demo-consent-check.glow-attention {
        animation: demoConsentGlow 1s ease-in-out 2;
    }

    @keyframes demoConsentGlow {
        0%,
        100% {
            border-color: #d63b31;
            box-shadow: 0 0 0 0 rgba(214, 59, 49, 0.08), inset 0 2px 5px rgba(0, 0, 0, 0.08);
        }
        50% {
            border-color: #ff4f45;
            box-shadow: 0 0 0 8px rgba(214, 59, 49, 0.18), 0 0 24px rgba(214, 59, 49, 0.2), inset 0 2px 5px rgba(0, 0, 0, 0.08);
        }
    }

    .demo-consent-check input[type="checkbox"] {
        width: 22px;
        height: 22px;
        margin: 0;
        accent-color: #18b35b;
        flex: 0 0 auto;
    }

    .demo-note {
        max-width: 100%;
        margin: 16px 0 0;
        padding-left: 190px;
        font-size: 12px;
        line-height: 1.45;
        color: #191919;
        text-align: left;
        font-weight: 600;
    }

    .demo-note a {
        color: #2f73ff;
        text-decoration: none;
    }

    .demo-actions {
        margin-top: 24px;
        display: flex;
        justify-content: flex-end;
    }

    .demo-alert {
        margin-bottom: 18px;
        border-radius: 14px;
        padding: 14px 16px;
        font-size: 13px;
        line-height: 1.5;
    }

    .demo-alert-success {
        background: #eaf7ee;
        color: #0f6d37;
        border: 1px solid #bfe4cb;
    }

    .demo-alert-error {
        background: #fff3f1;
        color: #a0322a;
        border: 1px solid #f0c0bb;
    }

    .demo-submit {
        border: 0;
        border-radius: 999px;
        padding: 12px 24px;
        background: linear-gradient(135deg, var(--demo-green) 0%, var(--demo-green-dark) 100%);
        color: #fff;
        font-weight: 700;
        box-shadow: 0 10px 20px rgba(24, 179, 91, 0.22);
    }

    .demo-submit.is-inactive {
        opacity: 0.7;
        box-shadow: 0 6px 14px rgba(24, 179, 91, 0.14);
    }

    @media (max-width: 991px) {
        .demo-page {
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .demo-hero-copy h1 {
            font-size: 42px;
        }

        .demo-hero-copy p {
            font-size: 18px;
        }

        .demo-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .demo-field {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .demo-label,
        .demo-choice-title,
        .demo-checklist h3 {
            font-size: 15px;
        }

        .demo-choice-group {
            grid-template-columns: 1fr;
            row-gap: 10px;
        }

        .demo-choice-title-right,
        .demo-checklist-right {
            padding-left: 0;
            margin-right: 0;
        }

        .demo-note,
        .demo-actions {
            text-align: left;
            justify-content: flex-start;
        }

        .demo-lower,
        .demo-note {
            padding: 0;
        }

        .demo-consent {
            margin-top: 44px;
        }

        .demo-consent-check {
            max-width: none;
        }
    }

    @media (max-width: 575px) {
        .demo-shell {
            padding: 0 14px;
        }

        .demo-form-card {
            padding: 22px 16px;
            border-radius: 18px;
        }

        .demo-hero {
            padding: 22px 18px;
            min-height: 172px;
            margin-bottom: 20px;
        }

        .demo-hero-copy h1 {
            font-size: 28px;
            line-height: 1.08;
            margin-bottom: 8px;
        }

        .demo-hero-copy p {
            font-size: 15px;
            line-height: 1.35;
        }

        .demo-input,
        .demo-select {
            height: 48px;
            font-size: 16px;
        }

        .demo-textarea {
            min-height: 160px;
        }

        .demo-checklist label {
            margin-bottom: 10px;
            font-size: 14px;
        }

        .demo-checklist span {
            max-width: none;
        }

        .demo-choice-title-right,
        .demo-checklist-right {
            padding-left: 0;
            margin-right: 0;
        }

        .demo-note {
            font-size: 13px;
            line-height: 1.5;
        }

        .demo-consent {
            margin-top: 32px;
        }

        .demo-consent h3 {
            font-size: 17px;
            line-height: 1.35;
        }

        .demo-consent p,
        .demo-consent-item strong,
        .demo-consent-check {
            font-size: 14px;
        }

        .demo-consent-check {
            min-height: 62px;
            padding: 12px 14px;
            border-radius: 14px;
            align-items: flex-start;
        }

        .demo-submit {
            width: 100%;
            justify-content: center;
            min-height: 48px;
        }
    }
</style>
@endsection

@section('content')
<section class="demo-page">
    <div class="demo-shell">
        <div class="demo-hero">
            <div class="demo-hero-copy">
                <h1>{{ stringlang('Request a Demo', 'Minta Demo', '데모 요청하기') }}</h1>
                <p>{{ stringlang('Get a personalized demo and consultation for your business', 'Dapatkan demo dan konsultasi yang sesuai untuk bisnis Anda', '귀사에 최적화된 맞춤 데모 및 상담을 제공합니다') }}</p>
            </div>
        </div>

        <div class="demo-form-card">
            @if (session('success'))
                <div class="demo-alert demo-alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="demo-alert demo-alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('post.demo_page') }}" method="post" id="demo-request-form">
                @csrf
                <input type="hidden" name="language" value="{{ activelang() }}">
                <input type="hidden" name="source_url" value="{{ url()->current() }}">
                <div class="demo-grid">
                    <div class="demo-field demo-field-full">
                        <label class="demo-label">{{ stringlang('How did you first hear about Younglimwon Soft Lab / System Ever Indonesia?', 'Dari mana Anda pertama kali mengenal Younglimwon Soft Lab / System Ever Indonesia?', 'Younglimwon Soft Lab / System Ever Indonesia 를 어떻게 처음 알게 되셨나요?') }}<span class="demo-required">*</span></label>
                        <select class="demo-select" name="heard_about" required>
                            <option value="" disabled {{ old('heard_about') ? '' : 'selected' }}>{{ stringlang('Please select', 'Silakan pilih', '선택해 주세요') }}</option>
                            <option value="{{ stringlang('Previous experience with Younglimwon Soft Lab / System Ever Indonesia', 'Pengalaman sebelumnya dengan Younglimwon Soft Lab / System Ever Indonesia', '기존에 사용했거나 이미 알고 있었음') }}">{{ stringlang('Previous experience with Younglimwon Soft Lab / System Ever Indonesia', 'Pengalaman sebelumnya dengan Younglimwon Soft Lab / System Ever Indonesia', '기존에 사용했거나 이미 알고 있었음') }}</option>
                            <option value="{{ stringlang('Recommendation from a colleague or partner', 'Rekomendasi dari kolega atau partner', '지인 또는 파트너 추천') }}">{{ stringlang('Recommendation from a colleague or partner', 'Rekomendasi dari kolega atau partner', '지인 또는 파트너 추천') }}</option>
                            <option value="Google search">Google search</option>
                            <option value="{{ stringlang('Generative AI (ChatGPT, etc.)', 'Generative AI (ChatGPT, dll.)', '생성형 AI (ChatGPT 등)') }}">{{ stringlang('Generative AI (ChatGPT, etc.)', 'Generative AI (ChatGPT, dll.)', '생성형 AI (ChatGPT 등)') }}</option>
                            <option value="{{ stringlang('Articles / Media (news, portals, blogs, etc.)', 'Artikel / Media (berita, portal, blog, dll.)', '기사 / 미디어 (뉴스, 포털, 블로그 등)') }}">{{ stringlang('Articles / Media (news, portals, blogs, etc.)', 'Artikel / Media (berita, portal, blog, dll.)', '기사 / 미디어 (뉴스, 포털, 블로그 등)') }}</option>
                            <option value="{{ stringlang('Advertising (PAGI, website banners, newspapers)', 'Iklan (PAGI, banner website, koran)', '광고 (PAGI, 온라인 광고, 신문 등)') }}">{{ stringlang('Advertising (PAGI, website banners, newspapers)', 'Iklan (PAGI, banner website, koran)', '광고 (PAGI, 온라인 광고, 신문 등)') }}</option>
                            <option value="{{ stringlang('Social Media', 'Social Media', '소셜 미디어') }}">{{ stringlang('Social Media', 'Social Media', '소셜 미디어') }}</option>
                            <option value="{{ stringlang('Contacted by System Ever Indonesia (sales visit, call, email, etc.)', 'Dihubungi oleh System Ever Indonesia (kunjungan sales, telepon, email, dll.)', 'System Ever Indonesia로부터 연락 (영업 방문, 전화, 이메일 등)') }}">{{ stringlang('Contacted by System Ever Indonesia (sales visit, call, email, etc.)', 'Dihubungi oleh System Ever Indonesia (kunjungan sales, telepon, email, dll.)', 'System Ever Indonesia로부터 연락 (영업 방문, 전화, 이메일 등)') }}</option>
                        </select>
                    </div>

                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Company Name:', 'Nama Perusahaan:', '회사명:') }}<span class="demo-required">*</span></label>
                        <div class="demo-control">
                            <input class="demo-input {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" value="{{ old('company_name') }}" required>
                            @if ($errors->has('company_name'))
                                <div class="demo-field-error">{{ $errors->first('company_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Industry:', 'Industri:', '업종:') }}<span class="demo-required">*</span></label>
                        <select class="demo-select" name="industry" required>
                            <option value="" disabled {{ old('industry') ? '' : 'selected' }}>{{ stringlang('Select industry', 'Pilih industri', '업종 선택') }}</option>
                            <option>{{ stringlang('Manufacturing - Food & Beverage', 'Manufaktur - Makanan & Minuman', '제조 - 식음료') }}</option>
                            <option>{{ stringlang('Manufacturing - Textile & Garment', 'Manufaktur - Tekstil & Garmen', '제조 - 섬유 / 의류') }}</option>
                            <option>{{ stringlang('Manufacturing - Chemicals & Petrochemicals', 'Manufaktur - Kimia & Petrokimia', '제조 - 화학 / 석유화학') }}</option>
                            <option>{{ stringlang('Manufacturing - Pharmaceuticals & Healthcare Products', 'Manufaktur - Farmasi & Produk Kesehatan', '제조 - 제약 / 헬스케어 제품') }}</option>
                            <option>{{ stringlang('Manufacturing - Electronics & Electrical', 'Manufaktur - Elektronik & Kelistrikan', '제조 - 전자 / 전기') }}</option>
                            <option>{{ stringlang('Manufacturing - Automotive & Parts', 'Manufaktur - Otomotif & Suku Cadang', '제조 - 자동차 / 부품') }}</option>
                            <option>{{ stringlang('Manufacturing - Metal & Machinery', 'Manufaktur - Logam & Mesin', '제조 - 금속 / 기계') }}</option>
                            <option>{{ stringlang('Manufacturing - Furniture & Wood Products', 'Manufaktur - Furnitur & Produk Kayu', '제조 - 가구 / 목재') }}</option>
                            <option>{{ stringlang('Manufacturing - Cosmetics & Personal Care', 'Manufaktur - Kosmetik & Personal Care', '제조 - 화장품 / 생활용품') }}</option>
                            <option>{{ stringlang('Wholesale / Distribution / Trading', 'Wholesale / Distribusi / Trading', '도매 / 유통 / 트레이딩') }}</option>
                            <option>{{ stringlang('Retail', 'Retail', '소매') }}</option>
                            <option>{{ stringlang('Construction & Engineering', 'Konstruksi & Engineering', '건설 / 엔지니어링') }}</option>
                            <option>{{ stringlang('Property & Real Estate', 'Properti & Real Estate', '부동산 / 개발') }}</option>
                            <option>{{ stringlang('Hospitality & Tourism', 'Hospitality & Pariwisata', '호텔 / 관광') }}</option>
                            <option>{{ stringlang('Logistics & Transportation', 'Logistik & Transportasi', '물류 / 운송') }}</option>
                            <option>{{ stringlang('Information Technology / Software', 'Teknologi Informasi / Software', 'IT / 소프트웨어') }}</option>
                            <option>{{ stringlang('Telecommunications', 'Telekomunikasi', '통신') }}</option>
                            <option>{{ stringlang('Professional Services', 'Jasa Profesional', '전문 서비스 (컨설팅, 회계, 법률 등)') }}</option>
                            <option>{{ stringlang('Financial Services', 'Jasa Keuangan', '금융 서비스') }}</option>
                            <option>{{ stringlang('Healthcare Services', 'Layanan Kesehatan', '헬스케어 서비스 (병원, 클리닉 등)') }}</option>
                            <option>{{ stringlang('Education', 'Pendidikan', '교육') }}</option>
                            <option>{{ stringlang('Agriculture & Plantation', 'Pertanian & Perkebunan', '농업 / 플랜테이션') }}</option>
                            <option>{{ stringlang('Energy & Mining', 'Energi & Pertambangan', '에너지 / 광업') }}</option>
                            <option>{{ stringlang('Government / Public Sector', 'Pemerintah / Sektor Publik', '정부 / 공공기관') }}</option>
                            <option>{{ stringlang('Other', 'Lainnya', '기타') }}</option>
                        </select>
                    </div>

                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Company Size (Annual Sales):', 'Ukuran Perusahaan (Penjualan Tahunan):', '회사 규모 (연매출):') }}<span class="demo-required">*</span></label>
                        <select class="demo-select" name="annual_sales_range" required>
                            <option value="" disabled {{ old('annual_sales_range') ? '' : 'selected' }}>{{ stringlang('Select range', 'Pilih rentang', '범위 선택') }}</option>
                            <option>{{ stringlang('≤ IDR 5 Billion', '≤ IDR 5 Miliar', 'IDR 50억 이하') }}</option>
                            <option>{{ stringlang('IDR 5 - 25 Billion', 'IDR 5 - 25 Miliar', 'IDR 50억 ~ 250억') }}</option>
                            <option>{{ stringlang('IDR 25 - 100 Billion', 'IDR 25 - 100 Miliar', 'IDR 250억 ~ 1,000억') }}</option>
                            <option>{{ stringlang('IDR 100 Billion +', 'IDR 100 Miliar +', 'IDR 1,000억 이상') }}</option>
                        </select>
                    </div>
                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Company Size (Employees):', 'Ukuran Perusahaan (Karyawan):', '회사 규모 (직원 수):') }}<span class="demo-required">*</span></label>
                        <select class="demo-select" name="employee_size_range" required>
                            <option value="" disabled {{ old('employee_size_range') ? '' : 'selected' }}>{{ stringlang('Select size', 'Pilih jumlah', '규모 선택') }}</option>
                            <option>{{ stringlang('≤ 50', '≤ 50', '50명 이하') }}</option>
                            <option>50 - 100</option>
                            <option>100 - 300</option>
                            <option>300 - 500</option>
                            <option>{{ stringlang('500+', '500+', '500명 이상') }}</option>
                        </select>
                    </div>

                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Contact Name:', 'Nama Kontak:', '담당자명:') }}<span class="demo-required">*</span></label>
                        <div class="demo-control">
                            <input class="demo-input {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" type="text" name="contact_name" value="{{ old('contact_name') }}" required>
                            @if ($errors->has('contact_name'))
                                <div class="demo-field-error">{{ $errors->first('contact_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Department:', 'Departemen:', '부서:') }}<span class="demo-required">*</span></label>
                        <input class="demo-input" type="text" name="department" value="{{ old('department') }}" required>
                    </div>

                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Title:', 'Jabatan:', '직급:') }}<span class="demo-required">*</span></label>
                        <input class="demo-input" type="text" name="job_title" value="{{ old('job_title') }}" required>
                    </div>
                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Phone Number:', 'Nomor Telepon:', '연락처:') }}<span class="demo-required">*</span></label>
                        <div class="demo-control">
                            <input class="demo-input {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" value="{{ old('phone_number') }}" required>
                            @if ($errors->has('phone_number'))
                                <div class="demo-field-error">{{ $errors->first('phone_number') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Email:', 'Email:', '이메일:') }}<span class="demo-required">*</span></label>
                        <div class="demo-control">
                            <input class="demo-input {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <div class="demo-field-error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="demo-field">
                        <label class="demo-label">{{ stringlang('Company Location:', 'Lokasi Perusahaan:', '회사 위치:') }}<span class="demo-required">*</span></label>
                        <input class="demo-input" type="text" name="company_location" value="{{ old('company_location') }}" required>
                    </div>

                    <div class="demo-field demo-field-full">
                        <label class="demo-label">{{ stringlang('Company Website (URL):', 'Website Perusahaan (URL):', '회사 웹사이트:') }}</label>
                        <input class="demo-input" type="text" name="company_website" value="{{ old('company_website') }}">
                    </div>

                    <div class="demo-choice-group">
                        <div class="demo-choice-title">{{ stringlang('Solutions of Interest:', 'Solusi yang Diminati:', '관심 솔루션:') }}<span class="demo-required">*</span></div>
                        <div class="demo-checklist">
                            <label><input type="checkbox" name="solutions_of_interest[]" value="Cloud ERP"> <span>Cloud ERP</span></label>
                            <label><input type="checkbox" name="solutions_of_interest[]" value="Customized ERP"> <span>Customized ERP</span></label>
                            <label><input type="checkbox" name="solutions_of_interest[]" value="ERP with Bonded Zone Inventory Management (IT Inventory)"> <span>ERP with Bonded Zone Inventory Management <br>(IT Inventory)</span></label>
                            <label><input type="checkbox" name="solutions_of_interest[]" value="Accounting Management"> <span>Accounting Management</span></label>
                            <label><input type="checkbox" name="solutions_of_interest[]" value="Payroll Management"> <span>Payroll Management</span></label>
                            <label><input type="checkbox" name="solutions_of_interest[]" value="Attendance Management (Mobile)"> <span>Attendance Management (Mobile)</span></label>
                            <label><input type="checkbox" name="solutions_of_interest[]" value="{{ stringlang('Other (Please specify)', 'Lainnya (Mohon sebutkan)', '기타 (직접 입력)') }}"> <span>{{ stringlang('Other (Please specify)', 'Lainnya (Mohon sebutkan)', '기타 (직접 입력)') }}</span></label>
                        </div>
                        <div class="demo-choice-title demo-choice-title-right">{{ stringlang('Current System in Use:', 'Sistem yang Digunakan Saat Ini:', '현재 사용 중인 시스템:') }}<span class="demo-required">*</span></div>
                        <div class="demo-checklist demo-checklist-right">
                            <label><input type="checkbox" name="current_systems_in_use[]" value="YoungLimWon Soft Lab / System Ever Indonesia"> <span>YoungLimWon Soft Lab / System Ever Indonesia</span></label>
                            <label><input type="checkbox" name="current_systems_in_use[]" value="{{ stringlang('Other Foreign ERP (SAP, Oracle, Microsoft Dynamics, Odoo, etc.)', 'ERP Asing Lainnya (SAP, Oracle, Microsoft Dynamics, Odoo, dll.)', '기타 해외 ERP (SAP, Oracle NetSuite, Microsoft Dynamics, Odoo 등)') }}"> <span>{{ stringlang('Other Foreign ERP (SAP, Oracle, Microsoft Dynamics, Odoo, etc.)', 'ERP Asing Lainnya (SAP, Oracle, Microsoft Dynamics, Odoo, dll.)', '기타 해외 ERP (SAP, Oracle NetSuite, Microsoft Dynamics, Odoo 등)') }}</span></label>
                            <label><input type="checkbox" name="current_systems_in_use[]" value="{{ stringlang('Local Indonesian System (Accurate, Jurnal, HashMicro, Zahir, etc.)', 'Sistem Lokal Indonesia (Accurate, Jurnal, HashMicro, Zahir, dll.)', '로컬 인도네시아 시스템 (Accurate, HashMicro, Jurnal, Zahir 등)') }}"> <span>{{ stringlang('Local Indonesian System (Accurate, Jurnal, HashMicro, Zahir, etc.)', 'Sistem Lokal Indonesia (Accurate, Jurnal, HashMicro, Zahir, dll.)', '로컬 인도네시아 시스템 (Accurate, HashMicro, Jurnal, Zahir 등)') }}</span></label>
                            <label><input type="checkbox" name="current_systems_in_use[]" value="Manual Process (Excel)"> <span>Manual Process (Excel)</span></label>
                            <label><input type="checkbox" name="current_systems_in_use[]" value="{{ stringlang('No Existing System', 'Belum Ada Sistem', '별도 시스템 없음') }}"> <span>{{ stringlang('No Existing System', 'Belum Ada Sistem', '별도 시스템 없음') }}</span></label>
                            <label><input type="checkbox" name="current_systems_in_use[]" value="{{ stringlang('Other (please specify)', 'Lainnya (mohon sebutkan)', '기타 (직접 입력)') }}"> <span>{{ stringlang('Other (please specify)', 'Lainnya (mohon sebutkan)', '기타 (직접 입력)') }}</span></label>
                        </div>
                    </div>

                    <div class="demo-field demo-field-full">
                        <label class="demo-label">{{ stringlang('When are you planning to implement a system?', 'Kapan Anda berencana mengimplementasikan sistem?', '시스템 도입 예정 시기:') }}<span class="demo-required">*</span></label>
                        <select class="demo-select" name="implementation_timeline" required>
                            <option value="" disabled {{ old('implementation_timeline') ? '' : 'selected' }}>{{ stringlang('Select timeline', 'Pilih waktu', '일정 선택') }}</option>
                            <option>{{ stringlang('Immediately', 'Segera', '즉시') }}</option>
                            <option>{{ stringlang('Within 3 months', 'Dalam 3 bulan', '3개월 이내') }}</option>
                            <option>{{ stringlang('Within 6 months', 'Dalam 6 bulan', '6개월 이내') }}</option>
                            <option>{{ stringlang('Within 1 year', 'Dalam 1 tahun', '1년 이내') }}</option>
                            <option>{{ stringlang('Just exploring', 'Masih eksplorasi', '단순 검토 단계') }}</option>
                        </select>
                    </div>

                    <div class="demo-field demo-field-full">
                        <label class="demo-label">{{ stringlang('How many users do you expect to use the system?', 'Berapa banyak pengguna yang akan menggunakan sistem?', '예상 사용자 수:') }}<span class="demo-required">*</span></label>
                        <select class="demo-select" name="expected_user_count_range" required>
                            <option value="" disabled {{ old('expected_user_count_range') ? '' : 'selected' }}>{{ stringlang('Select estimate', 'Pilih estimasi', '예상 선택') }}</option>
                            <option>{{ stringlang('≤ 10', '≤ 10', '10명 이하') }}</option>
                            <option>10 - 30</option>
                            <option>30 - 50</option>
                            <option>50 - 100</option>
                            <option>100+</option>
                        </select>
                    </div>

                    <div class="demo-field demo-field-full demo-field-top">
                        <label class="demo-label">{{ stringlang('Details Specify:', 'Detail Tambahan:', '상세 내용:') }}</label>
                        <textarea class="demo-textarea" name="additional_details">{{ old('additional_details') }}</textarea>
                    </div>
                </div>

                <p class="demo-note">
                    {{ stringlang('If you would like to share files for a more detailed consultation, please send them to:', 'Jika Anda ingin membagikan file untuk konsultasi lebih detail, silakan kirim ke:', '※ 보다 상세한 상담을 위해 관련 자료를 공유하실 경우, 아래 이메일로 전달해 주시기 바랍니다.') }}
                    <a href="mailto:info@systemever.com">info@systemever.com</a>
                </p>

                <div class="demo-lower">
                    <div class="demo-consent">
                        <h3>{{ stringlang('Consent to Collection and Use of Personal Information', 'Persetujuan Pengumpulan dan Penggunaan Informasi Pribadi', '개인정보 수집 및 이용 동의') }}</h3>
                        <div class="demo-consent-item">
                            <strong>{{ stringlang('Purpose of Collection', 'Tujuan Pengumpulan', '수집 목적') }}</strong>
                            <p>{{ stringlang('Consultation services related to system implementation', 'Layanan konsultasi terkait implementasi sistem', '시스템 도입 관련 상담 서비스 제공') }}</p>
                        </div>
                        <div class="demo-consent-item">
                            <strong>{{ stringlang('Collected Information', 'Informasi yang Dikumpulkan', '수집 항목') }}</strong>
                            <p>{{ stringlang('Company Name, Industry, Company Size, Contact Person, Department, Job Title, Phone Number, Email, Company Location, Solutions of Interest, Previous System Experience', 'Nama Perusahaan, Industri, Ukuran Perusahaan, Kontak Person, Departemen, Jabatan, Nomor Telepon, Email, Lokasi Perusahaan, Solusi yang Diminati, Pengalaman Sistem Sebelumnya', '회사명, 업종, 회사 규모, 담당자명, 부서, 직급, 연락처, 이메일, 회사 위치, 관심 솔루션, 기존 시스템 사용 여부') }}</p>
                        </div>
                        <div class="demo-consent-item">
                            <strong>{{ stringlang('Retention Period', 'Masa Penyimpanan', '보유 및 이용 기간') }}</strong>
                            <p>{{ stringlang('Until consent is withdrawn', 'Sampai persetujuan dicabut', '동의 철회 시까지') }}</p>
                        </div>
                        <p>{{ stringlang('However, if you do not consent, consultation services may be limited.', 'Namun, jika Anda tidak menyetujui, layanan konsultasi dapat dibatasi.', '동의를 거부하실 경우 상담 서비스 제공이 제한될 수 있습니다.') }}</p>
                        <label class="demo-consent-check {{ $errors->has('has_personal_data_consent') ? 'is-invalid' : '' }}">
                            <input type="checkbox" id="demo-consent-checkbox" name="has_personal_data_consent" value="1" required {{ old('has_personal_data_consent') ? 'checked' : '' }}>
                            <span>{{ stringlang('(Required) I agree to the collection and use of personal information.', '(Wajib) Saya setuju atas pengumpulan dan penggunaan informasi pribadi.', '(필수) 개인정보 수집 및 이용에 동의합니다.') }}</span>
                        </label>
                        @if ($errors->has('has_personal_data_consent'))
                            <div class="demo-field-error">{{ $errors->first('has_personal_data_consent') }}</div>
                        @endif
                    </div>
                </div>

                <div class="demo-actions">
                    <button class="demo-submit {{ old('has_personal_data_consent') ? '' : 'is-inactive' }}" type="submit" id="demo-submit-button">{{ stringlang('Submit Draft', 'Kirim Draft', '초안 제출') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('custom_js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('demo-request-form');
    var button = document.getElementById('demo-submit-button');
    var consentCheckbox = document.getElementById('demo-consent-checkbox');
    var consentBox = consentCheckbox ? consentCheckbox.closest('.demo-consent-check') : null;
    var solutionCheckboxes = form ? form.querySelectorAll('input[name="solutions_of_interest[]"]') : [];
    var currentSystemCheckboxes = form ? form.querySelectorAll('input[name="current_systems_in_use[]"]') : [];

    if (!form || !button || !consentCheckbox || !consentBox) {
        return;
    }

    function hasCheckedValue(nodeList) {
        return Array.prototype.some.call(nodeList, function (checkbox) {
            return checkbox.checked;
        });
    }

    function syncGroupValidity(nodeList, message) {
        var isValid = hasCheckedValue(nodeList);

        Array.prototype.forEach.call(nodeList, function (checkbox) {
            checkbox.setCustomValidity(isValid ? '' : message);
        });
    }

    function syncSubmitState() {
        button.classList.toggle('is-inactive', !consentCheckbox.checked);
    }

    function triggerConsentGlow() {
        consentBox.classList.remove('glow-attention');
        void consentBox.offsetWidth;
        consentBox.classList.add('glow-attention');
    }

    syncSubmitState();
    syncGroupValidity(solutionCheckboxes, 'Please select at least one solution.');
    syncGroupValidity(currentSystemCheckboxes, 'Please select at least one current system.');

    consentCheckbox.addEventListener('change', syncSubmitState);
    consentCheckbox.addEventListener('change', function () {
        if (consentCheckbox.checked) {
            consentBox.classList.remove('glow-attention');
        }
    });

    Array.prototype.forEach.call(solutionCheckboxes, function (checkbox) {
        checkbox.addEventListener('change', function () {
            syncGroupValidity(solutionCheckboxes, 'Please select at least one solution.');
        });
    });

    Array.prototype.forEach.call(currentSystemCheckboxes, function (checkbox) {
        checkbox.addEventListener('change', function () {
            syncGroupValidity(currentSystemCheckboxes, 'Please select at least one current system.');
        });
    });

    form.addEventListener('submit', function (event) {
        if (!consentCheckbox.checked) {
            event.preventDefault();
            syncSubmitState();
            triggerConsentGlow();
            consentCheckbox.focus();
            return;
        }

        syncGroupValidity(solutionCheckboxes, 'Please select at least one solution.');
        syncGroupValidity(currentSystemCheckboxes, 'Please select at least one current system.');

        if (!hasCheckedValue(solutionCheckboxes)) {
            event.preventDefault();
            solutionCheckboxes[0].reportValidity();
            return;
        }

        if (!hasCheckedValue(currentSystemCheckboxes)) {
            event.preventDefault();
            currentSystemCheckboxes[0].reportValidity();
            return;
        }

        button.classList.remove('is-inactive');
        button.disabled = true;
        button.textContent = 'Submitting...';
    });
});
</script>
@endsection



