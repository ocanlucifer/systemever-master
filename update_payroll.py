
file_path = r"c:\Users\SEI20\systemever-master\resources\views\systemever\pages\solutions\payroll.blade.php"
content = r"""@extends('systemever/layouts/windi', [
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

    .payroll-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .payroll-hero {
        padding: 60px 0 48px;
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
        transition: transform 0.2s;
    }
    
    .payroll-info-card:hover {
        transform: translateY(-3px);
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
                <h1>Accurate, Flexibility, and Automated Payroll System for Indonesian Businesses</h1>
                <p>Automate payroll, tax calculation, and statutory reporting with a payroll system designed specifically for Indonesian regulations.</p>
            </div>
            <div class="payroll-hero-visual">
                <img src="{{ asset('assets/img/payroll-hero.png') }}" alt="SystemEver Payroll">
            </div>
        </div>

        <h2 class="payroll-section-title">SystemEver Payroll automates calculations and reporting with regulation-ready logic.</h2>
        <div class="payroll-pill-row">
            <div class="payroll-info-card">Latest PPh 21 & PPh 26 rules</div>
            <div class="payroll-info-card">BPJS Kesehatan & Ketenagakerjaan regulations</div>
            <div class="payroll-info-card">Structured reporting aligned with Coretax DJP</div>
        </div>
        <div class="payroll-note">Payroll results are ready for review, reconciliation, and submission by HR, finance, and tax professionals.</div>

        <div class="payroll-highlight">
            <div>
                <h3>Payroll Core Benefits</h3>
                <div class="payroll-highlight-list">
                    <div class="payroll-highlight-item">Regulation-Ready Payroll Engine</div>
                    <div class="payroll-highlight-item">Automated PPh & BPJS Calculation</div>
                    <div class="payroll-highlight-item">Flexible Payroll Structure</div>
                    <div class="payroll-highlight-item">Coretax XML Reporting</div>
                </div>
            </div>
            <div class="payroll-hero-visual">
                 <img src="{{ asset('assets/img/payroll-benefit.png') }}" alt="Payroll Core Benefits">
            </div>
        </div>
    </div>
</section>

<section class="payroll-features">
    <div class="payroll-container">
        <div class="features-header">
            <h3>SystemEver Payroll Special Features</h3>
        </div>
        <div class="payroll-feature-grid">
            <!-- Row 1 -->
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">1</div>
                <div class="payroll-feature-content">
                    <h4>Seamless & Flexible Payroll Solution</h4>
                </div>
            </div>
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">4</div>
                <div class="payroll-feature-content">
                    <h4>Daily & Weekly Payroll Support</h4>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">2</div>
                <div class="payroll-feature-content">
                    <h4>Automated Tax Calculations</h4>
                </div>
            </div>
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">5</div>
                <div class="payroll-feature-content">
                    <h4>Shift-Based Payroll Calculation</h4>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">3</div>
                <div class="payroll-feature-content">
                    <h4>Attendance & Leave Integration</h4>
                </div>
            </div>
            <div class="payroll-feature-card">
                <div class="payroll-feature-number">6</div>
                <div class="payroll-feature-content">
                    <h4>Automated XML Coretax Generation</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="payroll-main-features">
    <div class="payroll-container">
        <h3>SystemEver Payroll Main Features</h3>
        <div class="payroll-main-pill-grid">
            <div class="payroll-main-pill">HR Data Management</div>
            <div class="payroll-main-pill">ESS (Employee Self Service)</div>
            <div class="payroll-main-pill">Payroll Management</div>
            <div class="payroll-main-pill">Payroll & Tax Reporting</div>
            <div class="payroll-main-pill single">EverTime (Time Attendance)</div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection
"""

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)
