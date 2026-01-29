@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Cloud ERP ' . activelang()
])

@section('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
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
        --cloud-green: #009944;
        --cloud-green-soft: #eaf7ee;
        --cloud-dark: #2d2d2d;
        --cloud-gray: #6c6c6c;
        --cloud-green-dark: #007a37;
    }

    /* Animation Definitions */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .cloud-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Hero Section */
    .cloud-hero {
        padding: 80px 0 60px;
        animation: fadeInUp 0.8s ease-out;
    }

    .cloud-hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .cloud-hero h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 42px;
        font-weight: 700;
        line-height: 1.2;
        color: #1f1f1f;
        margin-bottom: 24px;
    }

    .cloud-hero p {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: var(--cloud-gray);
        margin-bottom: 0;
    }

    .cloud-hero-logos {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }

    .cloud-hero-img img {
        width: 100%;
        height: auto;
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

    /* Comparison Section */
    .comparison-section {
        padding: 60px 0;
        background: #f4f4f4;
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

    @media (max-width: 768px) {
        .cloud-hero-grid, 
        .key-benefit-box {
            grid-template-columns: 1fr;
        }
    }

</style>
@endsection

@section('content')
<section class="cloud-hero">
    <div class="cloud-container">
        <div class="cloud-hero-grid">
            <div data-aos="fade-right">
                <h1>{{ stringlang('Integrated ERP Solutions for', 'Solusi ERP Terintegrasi untuk', '지속 가능한 성장을 위한 ') }}<br>{{ stringlang('Sustainable', 'Pertumbuhan Bisnis', '통합 ERP 솔루션') }}@if(activelang() != 'KOR')<br>{{ stringlang('Business Growth', 'Berkelanjutan') }}@endif</h1>
                <p>{{ stringlang('End-to-end enterprise solutions designed to streamline', 'Solusi enterprise end-to-end yang dirancang untuk mengoptimalkan', '기업 전반의 업무를 하나의 흐름으로 연결하여') }}<br>{{ stringlang('operations, improve visibility, and support long-term', 'operasional, meningkatkan transparansi, dan mendukung', '운영 효율을 높이고, 데이터 가시성을 강화하며,') }}<br>{{ stringlang('business scalability.', 'skalabilitas bisnis jangka panjang.', '중·장기적인 비즈니스 확장을 안정적으로 지원합니다.') }}</p>
                <div class="cloud-hero-logos">
                    <!-- Logos would go here -->
                </div>
            </div>
            <div class="cloud-hero-img" data-aos="fade-left">
                <img src="{{ asset('assets/img/cloud1.png') }}" alt="Cloud ERP Illustration" style="width: 85%; height: auto; margin: 0 auto; display: block;">
            </div>
        </div>
    </div>
</section>

<section class="key-benefit-section" style="padding-bottom: 0;">
    <div class="cloud-container">
        <h2 class="key-benefit-title">{{ stringlang('Our ERP Solutions, SystemEver and CloudAce, are', 'SystemEver ERP dirancang agar, ', 'SystemEver ERP는 업무 환경에 맞게') }} <span>{{ stringlang('flexible,', 'fleksibel,', '유연하게 적용 가능한') }}</span> {{ stringlang('easy to use.', 'mudah digunakan, dan siap mengikuti kebutuhan bisnis yang telah berkembang', 'ERP 솔루션입니다.') }}</h2>
    </div>
    <div style="width: 100%; max-width: 1600px; margin: 0 auto; padding: 0 20px; text-align: center;">
        <div class="key-benefit-box" data-aos="fade-up" style="background: none; padding: 0; box-shadow: none; display: block;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/cloudkorea.png') }}" alt="Cloud ERP Benefits" style="width: 85%; border-radius: 20px; margin: 0 auto; display: block;">
            @elseif(activelang() == 'ID')
                <img src="{{ asset('assets/img/cloudindo.png') }}" alt="Cloud ERP Benefits" style="width: 85%; border-radius: 20px; margin: 0 auto; display: block;">
            @else
                <img src="{{ asset('assets/img/cloud2.png') }}" alt="Cloud ERP Benefits" style="width: 85%; border-radius: 20px; margin: 0 auto; display: block;">
            @endif
        </div>
    </div>
</section>

<!-- <section class="pt-8 lg:pt-16" x-data="{current:0}">
    <div class="container pb-5 lg:pb-10">
        <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6  leading-6 lg:leading-9">
            {{ stringlang('The production process of manufacturing industry is challenging', 'Proses produksi industri manufaktur adalah tantangan', '제조업 생산 프로세스는 도전적입니다') }}<br><strong>#MakeITSimple</strong> {{ stringlang('with SystemEver Manufacture', 'dengan SystemEver Manufacture', 'SystemEver Manufacture와 함께') }}
        </h2>

        <p class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[60%] mx-auto leading-4 lg:leading-6">
            {{ stringlang('Increase the productivity and efficiency of the production process through one application', 'Tingkatkan produktivitas dan efisiensi proses produksi melalui satu aplikasi', '하나의 애플리케이션을 통해 생산 프로세스의 생산성과 효율성을 높이세요') }}</p>
        <div class="justify-between w-full px-14 mt-16 hidden lg:flex">
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=0">
                <img src="{{ asset('assets/fl/tab-9.png') }}" alt="" :class="current!=0?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Optimize productions plan', 'Optimalkan rencana produksi', '생산 계획 최적화') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==0"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=1">
                <img src="{{ asset('assets/fl/tab-6.png') }}" alt="" :class="current!=1?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Export Import module', 'Modul Ekspor Impor', '수출입 모듈') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==1"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=2">
                <img src="{{ asset('assets/fl/tab-10.png') }}" alt="" :class="current!=2?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Smart Reporting', 'Pelaporan Cerdas', '스마트 리포팅') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==2"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=3">
                <img src="{{ asset('assets/fl/tab-3.png') }}" alt="" :class="current!=3?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Real-time operational visualization', 'Visualisasi operasional secara realtime', '실시간 운영 시각화') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==3"></div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==0">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1);filter:grayscale(1)">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-9.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Optimize productions plan', 'Optimalkan rencana produksi', '생산 계획 최적화') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Optimize productions plan', 'Optimalkan rencana produksi', '생산 계획 최적화') }}</h3>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Improve the efficiency of production planning', 'Tingkatkan efisiensi perencanaan produksi', '생산 계획의 효율성 향상') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Maximize production planning through raw material and finished good planning management', 'Maksimalkan perencanaan produksi melalui manajemen perencanaan bahan baku dan barang jadi', '원자재 및 완제품 계획 관리를 통한 생산 계획 최대화') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Aware of the calculation production planning errors', 'Sadar akan kesalahan perhitungan perencanaan produksi', '생산 계획 계산 오류 인식') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Avoid mistakes in planning production with an accurate production management system', 'Hindari kesalahan dalam perencanaan produksi dengan sistem manajemen produksi yang akurat', '정확한 생산 관리 시스템으로 생산 계획의 실수를 방지') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Increase productivity', 'Tingkatkan produktivitas', '생산성 향상') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Automation can streamline operations and improve efficiency by completing tasks faster and with fewer errors.', 'Otomatisasi dapat merampingkan operasi dan meningkatkan efisiensi dengan menyelesaikan tugas lebih cepat dan dengan lebih sedikit kesalahan.', '자동화는 작업을 더 빠르고 오류 없이 완료하여 운영을 간소화하고 효율성을 높입니다.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="https://systemever.co.id/uploads/2023-06/fmjLzSpZl0itdB0d2iM1DryXLQicfEdSnZLCEOw1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==1">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-6.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Export Import module', 'Modul Ekspor Impor', '수출입 모듈') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Export Import module', 'Modul Ekspor Impor', '수출입 모듈') }}</h3>

                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Export and import module compliant with regulations in various countries', 'Modul ekspor dan impor sesuai aturan yang berlaku di berbagai negara', '다양한 국가의 규정을 준수하는 수출입 모듈') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Avoid mistakes in export import with modules that are always updated with the latest regulations', 'Hindari kesalahan dalam melakukan ekspor impor dengan modul yang selalu update dengan regulasi terbaru', '언제나 최신 규정으로 업데이트되는 모듈로 수출입 실수를 방지') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Real-time process updates', 'Update proses secara realtime', '실시간 프로세스 업데이트') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Update data and export or import process in real-time in one dashboard', 'Update data dan proses ekspor ataupun impor secara realtime dalam satu dashboard', '하나의 대시보드에서 실시간으로 데이터 및 수출입 프로세스 업데이트') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Export and import process can be monitored from anywhere', 'Proses dan progress ekspor dan impor bisa dipantau dari mana saja', '어디서나 수출입 프로세스 모니터링 가능') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Only need internet connection, you can monitor your export or import progress from anywhere and anytime', 'Hanya perlu jaringan internet, Anda bisa memantau progress ekspor ataupun impor Anda dari manapun dan kapanpun', '인터넷 연결만 있으면 언제 어디서나 수출입 진행 상황을 모니터링할 수 있습니다') }}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="https://systemever.co.id/uploads/2023-06/pasv6heSPs4QGpzn9L5MNDYTniLN7Ej256ZFx3pT.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==2">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-10.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Smart Reporting', 'Pelaporan Cerdas', '스마트 리포팅') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Smart Reporting', 'Pelaporan Cerdas', '스마트 리포팅') }}</h3>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Data-Driven Decisions', 'Keputusan Berbasis Data', '데이터 기반 의사결정') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Generate accurate financial and operational reports instantly.', 'Hasilkan laporan keuangan dan operasional yang akurat secara instan.', '정확한 재무 및 운영 보고서를 즉시 생성합니다.') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Customizable Dashboards', 'Dashboard yang Dapat Disesuaikan', '맞춤형 대시보드') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Monitor key performance indicators (KPIs) relevant to your business goals.', 'Pantau indikator kinerja utama (KPI) yang relevan dengan tujuan bisnis Anda.', '비즈니스 목표와 관련된 핵심 성과 지표(KPI)를 모니터링합니다.') }}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="https://systemever.co.id/uploads/2023-06/8SBm4UHmAFIlvy9RnQszRxnlQS7Ld0QwVvpoCpU3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==3">
        <div class="w-full h-full">
            <div class="container">

                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-3.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Real-time operational visualization', 'Visualisasi operasional secara realtime', '실시간 운영 시각화') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="filter:grayscale(1)">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Real-time operational visualization', 'Visualisasi operasional secara realtime', '실시간 운영 시각화') }}
                        </h3>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Track business operational processes easily', 'Lacak proses operasional bisnis dengan mudah', '비즈니스 운영 프로세스를 쉽게 추적') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Business operational progress can be monitored through Visual-K', 'Progress operasional bisnis bisa dipantau lewat Visual-K', 'Visual-K를 통해 비즈니스 운영 진행 상황 모니터링 가능') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Monitor conditions in every business process in real-time', 'Memantau kondisi yang terjadi di setiap proses bisnis secara realtime', '실시간으로 모든 비즈니스 프로세스 상태 모니터링') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Identify errors faster with real-time monitored business processes', 'Identifikasi kesalahan lebih cepat dengan proses bisnis yang terpantau secara realtime', '실시간 모니터링되는 비즈니스 프로세스로 오류를 더 빨리 식별') }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Facilitate decision making', 'Memudahkan pengambilan keputusan', '의사결정 용이') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Make the right decisions with quickly identified problems', 'Ambil keputusan tepat dengan masalah yang teridentifikasi dengan cepat', '빠르게 식별된 문제로 올바른 결정을 내림') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="https://systemever.co.id/uploads/2023-06/ekhvVCWZylAgwglHfQHDySfRCy6lh59PfQNXPEH2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="pt-8 lg:pt-16" x-data="{currentInventory:0}">
    <div class="container pb-5 lg:pb-10">
        <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6 leading-6 lg:leading-9">
            {{ stringlang('Control Business is challenging?', 'Mengontrol Bisnis adalah tantangan?', '비즈니스 제어가 어렵습니까?') }} <strong>#MakeITSimple</strong> {{ stringlang('with SystemEver', 'dengan SystemEver', 'SystemEver와 함께') }}
        </h2>

        <p class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[60%] mx-auto leading-4 lg:leading-6">
            {{ stringlang('Smart inventory is the best way to manage stock every aspect of inventory such as stock opname and inventory report', 'Inventaris pintar adalah cara terbaik untuk mengelola stok setiap aspek inventaris seperti opname stok dan laporan inventaris', '스마트 재고는 재고 실사 및 재고 보고서와 같은 재고의 모든 측면을 관리하는 가장 좋은 방법입니다') }}
        </p>
        
        <div class="justify-between w-full px-14 mt-16 hidden lg:flex">
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="currentInventory=0">
                <img src="{{ asset('assets/img/multi-warehouse-logo.png') }}" alt="" :class="currentInventory!=0?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Multi-warehouse Inventory Tracking', 'Pelacakan Inventaris Multi-gudang', '다중 창고 재고 추적') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="currentInventory==0"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="currentInventory=1">
                <img src="{{ asset('assets/fl/tab-6.png') }}" alt="" :class="currentInventory!=1?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Export-Import Modul for International Trade', 'Modul Ekspor-Impor untuk Perdagangan Internasional', '국제 무역을 위한 수출입 모듈') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="currentInventory==1"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="currentInventory=2">
                <img src="{{ asset('assets/img/procurement-logo.png') }}" alt="" :class="currentInventory!=2?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Procurement Digitalizations', 'Digitalisasi Pengadaan', '조달 디지털화') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="currentInventory==2"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="currentInventory=3">
                <img src="{{ asset('assets/img/realtime-logo.png') }}" alt="" :class="currentInventory!=3?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ stringlang('Realtime operational vizualisation', 'Visualisasi operasional secara realtime', '실시간 운영 시각화') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="currentInventory==3"></div>
            </div>
        </div>
    </div>
    
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="currentInventory==0">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1);filter:grayscale(1)">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/img/multi-warehouse-logo.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Multi-warehouse Inventory Tracking', 'Pelacakan Inventaris Multi-gudang', '다중 창고 재고 추적') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="currentInventory++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Multi-warehouse Inventory Tracking', 'Pelacakan Inventaris Multi-gudang', '다중 창고 재고 추적') }}</h3>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Monitor the stock movement in various warehouse', 'Pantau pergerakan stok di berbagai gudang', '다양한 창고의 재고 이동 모니터링') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Track the stock movement in various warehouse with one application.', 'Lacak pergerakan stok di berbagai gudang dengan satu aplikasi.', '하나의 애플리케이션으로 다양한 창고의 재고 이동을 추적하세요.') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Manage and monitor stock from anywhere', 'Kelola dan pantau stok dari mana saja', '어디서나 재고 관리 및 모니터링') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Get inventory updates without having to come to the warehouse.', 'Dapatkan update inventaris tanpa harus datang ke gudang.', '창고에 오지 않아도 재고 업데이트를 받을 수 있습니다.') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Avoid mistake when managing the inventory', 'Hindari kesalahan saat mengelola inventaris', '재고 관리 시 실수 방지') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Real-time records all processes starting from stock data, and transactions, with accurate result based on a certain period according to company policy.', 'Pencatatan real-time semua proses mulai dari data stok, dan transaksi, dengan hasil yang akurat berdasarkan periode tertentu sesuai kebijakan perusahaan.', '재고 데이터, 거래부터 시작하여 회사 정책에 따라 특정 기간을 기준으로 정확한 결과를 제공하는 실시간 기록.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{ asset('assets/img/multi-warehouse.png') }}" alt="Multi-warehouse Inventory Tracking">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="currentInventory==1">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="currentInventory--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-6.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Export-Import Modul for International Trade', 'Modul Ekspor-Impor untuk Perdagangan Internasional', '국제 무역을 위한 수출입 모듈') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="currentInventory++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Export-Import Module for International Trade', 'Modul Ekspor-Impor untuk Perdagangan Internasional', '국제 무역을 위한 수출입 모듈') }}</h3>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Always updated Import and export agreements and rules between country', 'Perjanjian dan aturan impor ekspor antar negara selalu diperbarui', '국가 간 수출입 협정 및 규정 항상 업데이트') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Avoid mistakes with modules that are always updated with the latest regulations.', 'Hindari kesalahan dengan modul yang selalu diperbarui dengan regulasi terbaru.', '최신 규정으로 항상 업데이트되는 모듈로 실수를 방지하세요.') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Real-time update', 'Update real-time', '실시간 업데이트') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('Real-time update for export and import process.', 'Update real-time untuk proses ekspor dan impor.', '수출입 프로세스에 대한 실시간 업데이트.') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('The export-import progress could be monitored from anywhere', 'Kemajuan ekspor-impor dapat dipantau dari mana saja', '어디서나 수출입 진행 상황 모니터링 가능') }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ stringlang('You only need an internet network to monitor the progress of your trading business.', 'Anda hanya perlu jaringan internet untuk memantau kemajuan bisnis perdagangan Anda.', '무역 비즈니스 진행 상황을 모니터링하려면 인터넷 네트워크만 있으면 됩니다.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{ asset('assets/img/international-trade.png') }}" alt="Export Import Module">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="currentInventory==2">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="currentInventory--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/img/procurement-logo.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Procurement Digitalizations', 'Digitalisasi Pengadaan', '조달 디지털화') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="currentInventory++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Procurement Digitalizations', 'Digitalisasi Pengadaan', '조달 디지털화') }}</h3>
                        <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6 mb-3 lg:mb-6">
                            {{ stringlang('Take full control of the procurement process in easy way', 'Kendalikan sepenuhnya proses pengadaan dengan cara yang mudah', '쉬운 방법으로 조달 프로세스를 완전히 제어하세요') }}
                        </p>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Monitor the entire procurement process', 'Pantau seluruh proses pengadaan', '전체 조달 프로세스 모니터링') }}</p>
                                <p class="text-11px lg:text-17px font-opensans text-[#707070] leading-4 lg:leading-6">{{ stringlang('Monitor the entire procurement process from various divisions through one application.', 'Pantau seluruh proses pengadaan dari berbagai divisi melalui satu aplikasi.', '하나의 애플리케이션을 통해 다양한 부서의 전체 조달 프로세스를 모니터링하세요.') }}</p>
                            </div>
                        </div>

                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Minimalize human error', 'Minimalkan kesalahan manusia', '인적 오류 최소화') }}</p>
                                <p class="text-11px lg:text-17px font-opensans text-[#707070] leading-4 lg:leading-6">{{ stringlang('Avoids human error because the entire procurement process is carried out digitally.', 'Hindari kesalahan manusia karena seluruh proses pengadaan dilakukan secara digital.', '전체 조달 프로세스가 디지털로 수행되므로 인적 오류를 방지합니다.') }}</p>
                            </div>
                        </div>

                        <div class="flex gap-3 lg:gap-4">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Transparent and inclusive budgeting', 'Penganggaran yang transparan dan inklusif', '투명하고 포괄적인 예산 편성') }}</p>
                                <p class="text-11px lg:text-17px font-opensans text-[#707070] leading-4 lg:leading-6">{{ stringlang('Because of realtime update, digital procurement increase efficiency and eliminates repetitive paperwork, reduce manual touchpoints, and avoid human errors and fraud.', 'Dengan pembaruan realtime, pengadaan digital meningkatkan efisiensi dan menghilangkan dokumen berulang, mengurangi titik sentuh manual, dan menghindari kesalahan manusia dan penipuan.', '실시간 업데이트로 디지털 조달은 효율성을 높이고 반복적인 서류 작업을 제거하며 수동 접점을 줄이고 인적 오류 및 사기를 방지합니다.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{ asset('assets/img/procurement.png') }}" alt="Procurement" style="min-height: 400px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="currentInventory==3">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="currentInventory--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/img/realtime-logo.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ stringlang('Realtime operational vizualisation', 'Visualisasi operasional secara realtime', '실시간 운영 시각화') }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="filter:grayscale(1)">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ stringlang('Realtime operational vizualisation', 'Visualisasi operasional secara realtime', '실시간 운영 시각화') }}</h3>
                        <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6 mb-3 lg:mb-6">
                            {{ stringlang('Track business operational process in one dashboard. Monitor every step and progress in operational business using Visual-K.', 'Lacak proses operasional bisnis dalam satu dasbor. Pantau setiap langkah dan kemajuan dalam bisnis operasional menggunakan Visual-K.', '하나의 대시보드에서 비즈니스 운영 프로세스를 추적하세요. Visual-K를 사용하여 비즈니스 운영의 모든 단계와 진행 상황을 모니터링하세요.') }}
                        </p>
                        
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Monitor conditions that occur in every business process in real-time', 'Pantau kondisi yang terjadi di setiap proses bisnis secara real-time', '모든 비즈니스 프로세스에서 발생하는 상황을 실시간으로 모니터링') }}</p>
                                <p class="text-11px lg:text-17px font-opensans text-[#707070] leading-4 lg:leading-6">{{ stringlang('Early error detection with real-time business process monitoring.', 'Deteksi kesalahan dini dengan pemantauan proses bisnis secara real-time.', '실시간 비즈니스 프로세스 모니터링으로 조기 오류 감지.') }}</p>
                            </div>
                        </div>

                        <div class="flex gap-3 lg:gap-4">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ stringlang('Facilitate decision making', 'Memfasilitasi pengambilan keputusan', '의사 결정 촉진') }}</p>
                                <p class="text-11px lg:text-17px font-opensans text-[#707070] leading-4 lg:leading-6">{{ stringlang('Make the right decisions with quickly identified problems', 'Buat keputusan yang tepat dengan masalah yang teridentifikasi dengan cepat', '신속하게 식별된 문제로 올바른 결정을 내리세요') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{ asset('assets/img/realtime.png') }}" alt="Visualization">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="total-solutions">
    <div class="cloud-container">
        
        <div style="text-align: center;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/cloudkorea3.png') }}" alt="Total Solutions" style="width: 85%; max-width: 1020px; margin: 0 auto; display: block;">
            @else
                <img src="{{ asset('assets/img/ganti-1.png') }}" alt="Total Solutions" style="width: 85%; max-width: 1020px; margin: 0 auto; display: block;">
            @endif
        </div>
    </div>
</section>

<section class="comparison-section" style="padding: 60px 0; background: #f8f9fa;">
    <div class="cloud-container" style="text-align: center;">
        @if(activelang() == 'KOR')
            <img src="{{ asset('assets/img/cloudkorea2.png') }}" alt="Cloud ERP Classification" style="width: 85%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
        @elseif(activelang() == 'ID')
            <img src="{{ asset('assets/img/cloudindo2.png') }}" alt="Cloud ERP Classification" style="width: 85%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
        @else
            <img src="{{ asset('assets/img/ganti-2.png') }}" alt="Cloud ERP Classification" style="width: 85%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
        @endif
    </div>
</section>

<section class="integration-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="cloud-container">
        
        <div style="text-align: center; margin-top: 40px;">
            @if(activelang() == 'KOR')
                <img src="{{ asset('assets/img/it-inventorykorea.png') }}" alt="CloudAce VS SystemEver Comparison" style="width: 85%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
            @elseif(activelang() == 'ID')
                <img src="{{ asset('assets/img/it-inventoryindo.png') }}" alt="CloudAce VS SystemEver Comparison" style="width: 85%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
            @else
                <img src="{{ asset('assets/img/cloud9.png') }}" alt="CloudAce VS SystemEver Comparison" style="width: 85%; max-width: 1020px; border-radius: 10px; margin: 0 auto; display: block;">
            @endif
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            @php
                $itRoute = route('get.pages.it_inventory');
                if (activelang() == 'EN') {
                    $itRoute = route('get.pages.it_inventory.en');
                } elseif (activelang() == 'KOR') {
                    $itRoute = route('get.pages.it_inventory.kor');
                }
            @endphp
            <a href="{{ $itRoute }}" class="btn-details">{{ stringlang('Click more details', 'Klik untuk detail lebih lanjut', '자세히 보기') }}</a>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('systemever.includes.footer')
@endsection
