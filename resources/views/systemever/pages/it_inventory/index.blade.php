@extends('systemever/layouts/windi', [
    'spesifice_page_seo' => 'IT Inventory ' . activelang()
])

@section('custom_css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

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
    
    @media only screen and (max-width: 1024px) {
        .aspect-mod {
            aspect-ratio: 12/8;
        }
        .page-content {
            margin-top: 55px;
        }
    }
    .page-content { margin-top: 0; }
    /* Offset hero dari navbar */
    .itinv-hero{padding-top:190px;padding-bottom:180px;}
    @media (max-width:1024px){.itinv-hero{padding-top:160px;padding-bottom:150px;}}
    /* Smooth anchor offset */
    section[id]{scroll-margin-top:120px;}
    /* Use global .fill button from homepage; ensure spacing override for this page */
    .btn-duo-wrapper a.fill{min-width:250px;}
    /* Decorative backgrounds */
    .bg-radial-green{
        background: radial-gradient(circle at 30% 30%,rgba(0,153,68,.25),rgba(0,153,68,0) 60%),
                    radial-gradient(circle at 80% 70%,rgba(0,153,68,.18),rgba(0,153,68,0) 65%);
    }
    .section-curve-top{position:relative;}
    /* Slimmer overlap curve for cleaner look */
    .section-curve-top:before{content:"";position:absolute;top:-42px;left:0;width:100%;height:90px;background:linear-gradient(to bottom,rgba(255,255,255,0),#ffffff 65%);border-bottom-left-radius:55% 100%;border-bottom-right-radius:55% 100%;pointer-events:none;}
    /* Problem cards */
    .problem-grid{display:grid;gap:18px;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));}
    .p-card{background:#f8fbfa;border:1px solid #e2ece7;border-radius:20px;padding:18px 18px 16px 18px;position:relative;overflow:hidden;transition:.35s border-color,.35s background,.35s transform;}
    .p-card:before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,rgba(0,153,68,.07),rgba(0,153,68,0));opacity:0;transition:.35s;}
    .p-card:hover{border-color:#b6dfcc;background:#ffffff;transform:translateY(-3px);} 
    .p-card:hover:before{opacity:1;}
    .p-ico{width:46px;height:46px;border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:10px;background:#ffffff;color:#0a7a3d;font-size:20px;border:1px solid #b9e8cf;box-shadow:0 2px 4px -1px rgba(0,0,0,.08)}
    .p-ico svg,.solution-icon svg{width:22px;height:22px;stroke:currentColor;stroke-width:1.6;fill:none;}
    .p-card h3{font-size:14px;font-weight:600;margin:0 0 4px;color:#134a2f;letter-spacing:.2px;}
    .p-card p{font-size:12.5px;line-height:1.5;color:#48605b;margin:0;}
    @media(min-width:1024px){.p-card h3{font-size:16px}.p-card p{font-size:13.5px}}
    .section-header-small{display:flex;align-items:center;gap:12px;margin-bottom:14px;}
    .section-header-small .dash{height:2px;width:42px;background:linear-gradient(90deg,#009944,#42c87f);border-radius:2px;flex-shrink:0;}
    /* Solution feature items */
    .feat-badge{display:inline-block;background:linear-gradient(120deg,#009944,#12b968);color:#fff;font-size:11px;padding:4px 12px;border-radius:999px;font-weight:600;letter-spacing:.5px;margin-bottom:14px;}
    .solution-wrapper{position:relative;}
    .solution-wrapper:before{content:"";position:absolute;inset:0;background:linear-gradient(135deg,#f0fff7,#ffffff 45%,#f2fff9);pointer-events:none;border-radius:34px;}
    .solution-list{display:flex;flex-direction:column;gap:18px;}
    .solution-item{display:flex;gap:14px;align-items:flex-start;padding:14px 16px;border:1px solid #ddebe4;border-radius:16px;background:#ffffff;position:relative;overflow:hidden;transition:.3s;}
    .solution-item:before{content:"";position:absolute;inset:0;background:linear-gradient(130deg,rgba(0,153,68,.08),transparent);opacity:0;transition:.3s;}
    .solution-item:hover:before{opacity:1;}
    .solution-icon{width:46px;height:46px;border-radius:14px;background:#ffffff;color:#0a7a3d;display:flex;align-items:center;justify-content:center;flex-shrink:0;border:1px solid #b9e8cf;box-shadow:0 2px 4px -1px rgba(0,0,0,.08)}
    .side-illustration{position:relative;}
    .side-illustration img{width:100%;border-radius:28px;box-shadow:0 18px 32px -10px rgba(0,0,0,.25);}
    /* Animation subtle */
    @keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
    .float{animation:floatY 5.5s ease-in-out infinite;}
    /* Modern form styles */
    .form-modern .f-group{position:relative;}
    .form-modern .f-control{width:100%;background:#f5f9f7;border:1px solid #d7e9e1;border-radius:16px;padding:20px 16px 8px;font-size:14px;font-family:'Open Sans';color:#1d3831;transition:.25s;}
    .form-modern textarea.f-control{min-height:130px;padding:24px 16px 12px;resize:vertical;}
    .form-modern .f-control:focus{outline:none;border-color:#009944;background:#ffffff;box-shadow:0 0 0 3px rgba(0,153,68,.18);}
    .form-modern .f-label{position:absolute;left:16px;top:50%;transform:translateY(-50%);font-size:14px;color:#5d7a70;pointer-events:none;transition:.25s;font-family:'Inter';}
    .form-modern .f-control:not(:placeholder-shown)+.f-label,.form-modern .f-control:focus+.f-label{top:10px;font-size:11px;letter-spacing:.5px;font-weight:600;color:#0a7a3d;}
    .form-modern .submit-btn-modern{display:inline-flex;align-items:center;gap:10px;background:linear-gradient(120deg,#009944,#12ba68);color:#fff;font-family:'Poppins';font-weight:600;padding:14px 34px;border-radius:999px;font-size:15px;letter-spacing:.5px;box-shadow:0 10px 24px -8px rgba(0,153,68,.45);transition:.35s;border:none;}
    .form-modern .submit-btn-modern:hover{transform:translateY(-2px);box-shadow:0 14px 28px -10px rgba(0,153,68,.55);}
    .form-modern .submit-btn-modern:active{transform:translateY(0);box-shadow:0 8px 18px -6px rgba(0,153,68,.5);}
    /* Minimal CTA redesign */
    .cta-minimal-wrapper{max-width:880px;margin:0 auto;padding:60px 42px 64px;background:#ffffff;border:1px solid #e7efe9;border-radius:28px;box-shadow:0 8px 28px -14px rgba(0,0,0,.08);} 
    @media(max-width:640px){.cta-minimal-wrapper{padding:46px 26px 54px;border-radius:22px;}}
    .cta-minimal-wrapper h2{font-family:'Poppins';font-size:32px;line-height:1.15;margin:0 0 8px;color:#0e1f18;font-weight:600;}
    @media(min-width:1024px){.cta-minimal-wrapper h2{font-size:40px;}}
    .cta-minimal-wrapper p.lead{font-family:'Open Sans';font-size:15px;line-height:1.6;color:#4a5c55;margin:0 0 34px;}
    .minimal-form{display:grid;grid-template-columns:1fr 1fr;gap:34px 40px;}
    @media(max-width:820px){.minimal-form{grid-template-columns:1fr;gap:30px;}}
    .m-field{display:flex;flex-direction:column;}
    .m-field input,.m-field textarea{background:transparent;border:none;border-bottom:1px solid #d5e3dd;padding:10px 2px 12px;font-family:'Open Sans';font-size:14px;color:#122821;outline:none;transition:.25s;border-radius:0;}
    .m-field textarea{min-height:130px;resize:vertical;}
    .m-field input::placeholder,.m-field textarea::placeholder{color:#7b9189;font-weight:400;}
    .m-field input:focus,.m-field textarea:focus{border-bottom-color:#009944;box-shadow:0 1px 0 0 #009944;}
    .submit-minimal{margin-top:12px;display:inline-flex;align-items:center;justify-content:center;gap:10px;background:#009944;color:#ffffff;font-family:'Poppins';font-weight:600;font-size:15px;padding:16px 42px;border:none;border-radius:18px;cursor:pointer;box-shadow:0 6px 18px -6px rgba(0,153,68,.55);transition:.3s;}
    .submit-minimal:hover{box-shadow:0 10px 24px -8px rgba(0,153,68,.55);transform:translateY(-2px);background:#00a850;} 
    .submit-minimal:active{transform:translateY(0);box-shadow:0 5px 14px -5px rgba(0,153,68,.55);background:#008b43;} 
    .m-note{font-size:11px;font-family:'Inter';letter-spacing:.4px;color:#6e817b;margin-top:24px;}
    .m-split{grid-column:span 2;} @media(max-width:820px){.m-split{grid-column:span 1;}}
    /* New typography system for section headings & body */
    .section-title{font-family:'Poppins';font-weight:700;line-height:1.15;letter-spacing:-.5px;color:#111f17;margin:0 0 14px;}
    .section-title.large{font-size:46px;}
    .section-title.mid{font-size:40px;}
    .section-title.sm{font-size:32px;}
    @media(max-width:1024px){.section-title.large{font-size:34px}.section-title.mid{font-size:30px}.section-title.sm{font-size:26px}}
    .body-text{font-family:'Open Sans';font-weight:400;line-height:1.65;color:#4a5c55;margin:0 0 28px;font-size:15px;}
    .body-text.lead{font-size:16px;}
    /* Submit loading spinner */
    .submit-minimal{position:relative;}
    .submit-minimal .spinner{display:none;position:absolute;left:50%;top:50%;width:20px;height:20px;border:3px solid rgba(255,255,255,.45);border-top-color:#ffffff;border-radius:50%;transform:translate(-50%,-50%);animation:spin .8s linear infinite;}
    .submit-minimal.loading .spinner{display:block;}
    .submit-minimal.loading .btn-label{opacity:0;}
    @keyframes spin{to{transform:translate(-50%,-50%) rotate(360deg)}}
    /* Alerts & error states */
    .alert-success,.alert-error{position:relative;padding:14px 18px 14px 46px;border-radius:14px;font-family:'Open Sans';font-size:14px;line-height:1.4;margin:0 0 28px;}
    .alert-success{background:#ecfdf5;border:1px solid #b5e8d2;color:#0d5031;}
    .alert-error{background:#fef2f2;border:1px solid #f5c2c0;color:#7f1d1d;}
    .alert-success:before,.alert-error:before{content:"";position:absolute;left:16px;top:50%;width:18px;height:18px;transform:translateY(-50%);}
    .alert-success:before{background:conic-gradient(from 180deg,#009944,#18c676);mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" stroke="white" stroke-width="2" fill="none" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>') center/contain no-repeat;}
    .alert-error:before{background:#dc2626;mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" stroke="white" stroke-width="2" fill="none" viewBox="0 0 24 24"><path d="M12 8v4m0 4h.01"/><circle cx="12" cy="12" r="9"/></svg>') center/contain no-repeat;}
    .m-field.has-error input,.m-field.has-error textarea{border-bottom-color:#dc2626;box-shadow:0 1px 0 0 #dc2626;}
    .f-error{margin-top:6px;font-size:11px;font-family:'Inter';letter-spacing:.4px;color:#b91c1c;}
    /* Language switcher */
    .lang-switch{position:absolute;top:18px;right:20px;display:flex;gap:6px;z-index:40;font-family:'Inter';}
    .lang-switch a{display:inline-flex;align-items:center;justify-content:center;padding:6px 14px;font-size:11px;font-weight:600;letter-spacing:.55px;border:1px solid rgba(255,255,255,.55);color:#ffffff;border-radius:999px;backdrop-filter:blur(5px);background:rgba(255,255,255,.12);transition:.25s;text-decoration:none;}
    .lang-switch a:hover{background:rgba(255,255,255,.22);} 
    .lang-switch a.active{background:#ffffff;color:#009944;border-color:#ffffff;box-shadow:0 4px 14px -4px rgba(0,0,0,.28);} 
    @media(max-width:640px){.lang-switch{top:14px;right:14px;}}
</style>
@endsection

@section('content')
<!-- HERO -->
<section class="itinv-hero relative overflow-hidden flex items-center justify-center">
    <picture class="absolute top-0 left-0 w-full h-full z-0">
        <source srcset="{{ asset('assets/fl/home-bg-1.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: bottom center;" />
        <img src="{{ asset('assets/fl/home-bg-1-m.png')}}" alt="IT Inventory" class="w-full h-full object-cover" style="object-position: bottom center;" />
    </picture>
    <div class="container relative z-10">
        <div class="lang-switch">
            @php $lang = activelang(); @endphp
            <a href="{{ url('ITInventory') }}" class="{{ $lang=='ID' ? 'active' : '' }}">ID</a>
            <a href="{{ url('en/ITInventory') }}" class="{{ $lang=='EN' ? 'active' : '' }}">EN</a>
            <a href="{{ url('kor/ITInventory') }}" class="{{ $lang=='KOR' ? 'active' : '' }}">KOR</a>
        </div>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-[60%] mx-auto">
                <p class="font-opensans text-white lg:text-16px lg:mb-0 mb-0 lg:text-left text-center text-11px">
                    {{ stringlang('Integrated ERP Compliance Module', 'Modul Kepatuhan ERP Terintegrasi', '통합 ERP 컴플라이언스 모듈') }}
                </p>
                <h1 class="font-poppins lg:text-37px lg:leading-12 lg:text-left lg:mb-5 lg:mt-8 mb-4 leading-7 text-26px font-bold text-white text-center">
                    It's Time to Stop the Risk!
                </h1>
                <p class="font-opensans text-white lg:text-16px lg:mb-6 mb-4 lg:text-left text-center text-11px">
                    Fines and License Suspension Await If Your IT Inventory Isn't Integrated.
                </p>
                <div class="flex gap-4 justify-center lg:justify-start mt-10">
                    <a href="#cta" class="font-montserrat inline-flex items-center justify-center lg:h-48px lg:px-70px lg:text-16px text-12px h-28px px-20px rounded-full bg-white hover:text-[#009944] text-[#009944] font-bold">
                        {{ activelang()=="EN" ? 'Demo' : (activelang()=="KOR" ? '데모' : 'Demo') }}
                    </a>
                    <a href="#cta" class="font-montserrat inline-flex items-center justify-center lg:h-48px lg:px-70px lg:text-16px text-12px h-28px px-20px rounded-full bg-transparent hover:text-white text-white font-bold border-1 border-white">
                        {{ activelang()=="EN" ? 'Learn More' : (activelang()=="KOR" ? '자세히보기' : 'Selengkapnya') }}
                    </a>
                </div>
            </div>
            <div class="lg:w-[40%] pt-10">
                <div class="lg:h-[372px] lg:w-[550px] w-[72%] aspect-mod1 overflow-hidden flex items-center justify-center mx-auto lg:-mt-10">
                    <video src="{{ asset('assets/custom/video-section-3.mp4?v=1') }}" autoplay muted loop playsinline class=""></video>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $lang = activelang();
    // Build steps array already translated for selected language only
    function tl($en,$id,$kr){return stringlang($en,$id,$kr);} // helper alias
    $steps = [
        [
            'title'=>tl('Capture & Normalize','Tangkap & Normalisasi','수집 및 정규화'),
            'short'=>tl('Inbound, outbound, production, adjustment feeds validated instantly.','Masuk, keluar, produksi, penyesuaian tervalidasi segera.','입출고, 생산, 조정 데이터 즉시 검증.'),
            'text'=>tl('Inbound / outbound, production issue & receipt, and inventory adjustments flow in via integrated ERP modules or API adapters. Each record is validated against item master, license limits, and unit conversion so downstream enrichment starts on a clean base.','Data masuk / keluar, produksi & penyesuaian persediaan mengalir via modul ERP terintegrasi atau adaptor API dan divalidasi terhadap master & batas lisensi agar proses lanjut bersih.','입출고, 생산 및 재고 조정이 ERP 모듈/AP I로 유입되고 마스터와 한도 검증을 거쳐 후속 처리를 위한 깨끗한 기반을 만듭니다.'),
            'tags'=>['API Feeds','Master Validation','Unit Control'],
            'out'=>[
                ['h'=>tl('Clean Movement Base','Basis Pergerakan Bersih','정제된 이동 기반'),'p'=>tl('Structured foundation ready for enrichment; reduces rework.','Fondasi terstruktur siap diperkaya; kurangi rework.','후속 처리 용이한 구조화 기반.')],
                ['h'=>tl('Rejected Queue','Antrian Ditolak','거부 큐'),'p'=>tl('Any failed record isolated with reason codes.','Record gagal diisolasi dengan kode alasan.','실패 레코드 사유 코드와 함께 분리.')]
            ],
            'why'=>tl('A normalized transactional layer prevents propagation of errors into customs valuation, costing, and reporting—cutting downstream reconciliation hours.','Lapisan transaksi ternormalisasi mencegah propagasi kesalahan ke valuasi & pelaporan sehingga mengurangi jam rekonsiliasi.','정규화된 트랜잭션 레이어가 오류 전파를 막아 후속 조정 시간을 단축합니다.'),
            'metrics'=>[
                ['value'=>tl('-60%','-60%','-60%'),'label'=>tl('Manual Fixes','Perbaikan Manual','수동 수정')],
                ['value'=>tl('+95%','+95%','+95%'),'label'=>tl('Data Validity','Validitas Data','데이터 정확도')],
                ['value'=>tl('Real-Time','Real-Time','실시간'),'label'=>tl('Visibility','Visibilitas','가시성')]
            ]
        ],
        [
            'title'=>tl('Enrich & Classify','Perkaya & Klasifikasikan','강화 및 분류'),
            'short'=>tl('BOM, HS, customs valuation & costing logic layered automatically.','BOM, HS, valuasi & costing otomatis diterapkan.','BOM, HS, 관세평가 및 코스트 로직 자동 적용.'),
            'text'=>tl('System applies BOM explosion, HS code, valuation and cost allocation logic. Each movement inherits enrichment metadata for traceability.','Sistem menerapkan ledakan BOM, HS, valuasi & alokasi biaya; tiap pergerakan mewarisi metadata untuk keterlacakan.','시스템이 BOM 전개, HS 코드, 평가 및 원가 배분 로직을 적용하여 추적성을 확보.'),
            'tags'=>['BOM','HS Code','Valuation','Cost Layer'],
            'out'=>[
                ['h'=>tl('Classified Lines','Baris Terklarifikasi','분류 라인'),'p'=>tl('Every record enriched with customs & cost attributes.','Setiap record diperkaya atribut kepabeanan & biaya.','각 레코드에 통관/비용 속성 부여.')],
                ['h'=>tl('Valuation Basis','Basis Valuasi','평가 기반'),'p'=>tl('Consistent FX & tariff logic captured at source.','Logika kurs & tarif konsisten terekam di sumber.','일관된 환율/관세 로직을 원천에서 확보.')]
            ],
            'why'=>tl('Consistent enrichment eliminates late manual mapping that delays documentation & costing.','Enrichment konsisten menghilangkan pemetaan manual terlambat yang menunda dokumentasi & costing.','일관된 강화로 늦은 수동 매핑 제거.'),
            'metrics'=>[
                ['value'=>tl('0 Drift','0 Drift','0 편차'),'label'=>tl('Tariff Logic','Logika Tarif','관세 로직')],
                ['value'=>tl('Unified','Terpadu','통합'),'label'=>tl('Cost Basis','Basis Biaya','비용 기반')],
                ['value'=>tl('Traceable','Terjejak','추적 가능'),'label'=>tl('BOM Links','Relasi BOM','BOM 연결')]
            ]
        ],
        [
            'title'=>tl('Monitor Exceptions','Monitor Pengecualian','예외 모니터링'),
            'short'=>tl('Tolerance engine flags variance & compliance anomalies in real-time.','Mesin toleransi menandai varian & anomali kepatuhan real-time.','허용 엔진이 실시간 이상 탐지.'),
            'text'=>tl('Tolerance & variance engine triggers alerts for negative stock, conversion mismatch and late postings.','Mesin toleransi memicu alert untuk stok negatif, mismatch konversi & posting terlambat.','허용/변동 엔진이 마이너스 재고 등 경보.'),
            'tags'=>['Tolerance Rules','Variance','Alerts'],
            'out'=>[
                ['h'=>tl('Exception Queue','Antrian Exception','예외 큐'),'p'=>tl('Prioritized list with severity & SLA timers.','Daftar prioritas dengan tingkat keparahan & SLA.','심각도 및 SLA 기반 우선 목록.')],
                ['h'=>tl('Risk Heatmap','Peta Risiko','리스크 히트맵'),'p'=>tl('Pattern detection across plants & items.','Deteksi pola lintas pabrik & item.','플랜트/아이템 패턴 탐지.')]
            ],
            'why'=>tl('Early detection cuts penalty exposure & prevents compounding data distortion.','Deteksi dini menurunkan risiko sanksi & distorsi data berantai.','조기 탐지로 제재 위험과 데이터 왜곡 감소.'),
            'metrics'=>[
                ['value'=>tl('-70%','-70%','-70%'),'label'=>tl('Late Fixes','Perbaikan Terlambat','늦은 수정')],
                ['value'=>tl('Faster','Lebih Cepat','더 빠른'),'label'=>tl('Audit Prep','Persiapan Audit','감사 준비')],
                ['value'=>tl('Proactive','Proaktif','선제적'),'label'=>tl('Risk Handling','Penanganan Risiko','리스크 처리')]
            ]
        ],
        [
            'title'=>tl('Generate Docs','Hasilkan Dokumen','문서 생성'),
            'short'=>tl('BC 2.3 / 2.6.1 / 4.0 rendered from validated ledger baseline.','BC 2.3 / 2.6.1 / 4.0 dibuat dari ledger tervalidasi.','BC 문서가 검증된 원장에서 생성.'),
            'text'=>tl('Validated ledger feeds generator for BC 2.3, 2.6.1, 4.0 with drill-down transparency.','Ledger tervalidasi menjadi basis generator BC 2.3, 2.6.1, 4.0 dengan transparansi drill down.','검증된 원장이 BC 문서 생성 및 추적 투명성 제공.'),
            'tags'=>['BC 2.3','BC 2.6.1','BC 4.0','Versioning'],
            'out'=>[
                ['h'=>tl('Auto BC Set','Set BC Otomatis','자동 BC 세트'),'p'=>tl('Regulatory forms populated instantly.','Formulir regulasi terisi instan.','규제 양식 즉시 생성.')],
                ['h'=>tl('Drill Trace','Jejak Drill','추적 조회'),'p'=>tl('Trace to originating movement line.','Telusuri ke pergerakan asal.','원천 이동 라인 추적.')]
            ],
            'why'=>tl('Removes manual compilation cycles and lowers submission turnaround.','Menghilangkan kompilasi manual & mempercepat pengajuan.','수동 취합 제거로 제출 시간 단축.'),
            'metrics'=>[
                ['value'=>tl('-80%','-80%','-80%'),'label'=>tl('Prep Time','Waktu Persiapan','준비 시간')],
                ['value'=>tl('Accurate','Akurat','정확'),'label'=>tl('First Pass','Pertama Kali','첫 제출')],
                ['value'=>tl('Full','Penuh','완전'),'label'=>tl('Traceability','Keterlacakan','추적성')]
            ]
        ],
        [
            'title'=>tl('Analytics & Audit','Analitik & Audit','분석 및 감사'),
            'short'=>tl('Searchable lineage + dashboards accelerate queries & decisions.','Garis data terindeks + dashboard mempercepat analisis & keputusan.','검색 가능한 계보 + 대시보드로 빠른 의사결정.'),
            'text'=>tl('Unified lineage + dashboards deliver instant query response and continuous improvement insights.','Garis data terpadu + dashboard memberi respon cepat & insight perbaikan berkelanjutan.','통합 계보와 대시보드가 즉각적 조회와 지속 개선 인사이트 제공.'),
            'tags'=>['Lineage','Dashboards','KPIs'],
            'out'=>[
                ['h'=>tl('Movement Ledger','Ledger Pergerakan','이동 원장'),'p'=>tl('Chronological drillable audit spine.','Tulangan audit kronologis dapat ditelusuri.','연대기적 감사 추적.')],
                ['h'=>tl('Exception Analytics','Analitik Exception','예외 분석'),'p'=>tl('Trending root causes & closure speed.','Akar penyebab trending & kecepatan penyelesaian.','원인 트렌드 및 해결 속도.')]
            ],
            'why'=>tl('Transforms compliance from periodic stress into always-on visibility.','Mengubah kepatuhan dari tekanan periodik menjadi visibilitas berkelanjutan.','컴플라이언스를 상시 가시성 체계로 전환.'),
            'metrics'=>[
                ['value'=>tl('Faster','Lebih Cepat','더 빠른'),'label'=>tl('Audit Cycle','Siklus Audit','감사 주기')],
                ['value'=>tl('Higher','Lebih Tinggi','더 높은'),'label'=>tl('Control Maturity','Kematangan Kontrol','통제 성숙도')],
                ['value'=>tl('Actionable','Dapat Ditindak','실행 가능'),'label'=>tl('Insights','Wawasan','인사이트')]
            ]
        ],
    ];
@endphp
<!-- SECTION 1: PROBLEMS (Modern Clean) -->
<section id="problems" class="pt-16 pb-24 lg:pt-20 lg:pb-28 bg-white section-curve-top">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-14 items-start">
            <!-- Content -->
            <div class="lg:col-span-3 order-2 lg:order-1">
                <div class="section-header-small">
                    <span class="dash"></span>
                    <span class="uppercase tracking-wide text-[11px] font-semibold text-emerald-700 font-inter">{{ tl('Pain Points','Tantangan','문제점') }}</span>
                </div>
                <h2 class="section-title mid">{{ tl('Problems in Bonded Zone Operations','Permasalahan Operasional di Kawasan Berikat','보세구역 운영상의 문제') }}</h2>
                <p class="body-text max-w-2xl">{{ tl('Key operational and compliance challenges slowing productivity & increasing risk:','Tantangan operasional dan kepatuhan utama yang memperlambat produktivitas & meningkatkan risiko:','생산성과 리스크에 영향을 주는 핵심 운영 및 컴플라이언스 과제:') }}</p>
                <div class="problem-grid max-w-3xl">
                    <div class="p-card"><div class="p-ico"><svg viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="10" rx="2"/><path d="M7 11h.01M11 11h.01M15 11h2M7 15h2M11 15h2"/></svg></div><h3>{{ tl('Manual Data Entry','Input Data Manual','수기 데이터 입력') }}</h3><p>{{ tl('Time-consuming and error-prone manual data entry slows operations and increases risk.','Input manual yang memakan waktu dan rawan salah memperlambat operasi dan menambah risiko.','시간이 많이 들고 오류가 잦은 수기 입력은 운영을 지연시키고 위험을 증가시킵니다.') }}</p></div>
                    <div class="p-card"><div class="p-ico"><svg viewBox="0 0 24 24"><path d="M4 7h4l2 4 4 2h6"/><path d="M4 17h4l2-4"/><path d="M15 7l2-2 2 2-2 2-2-2Z"/><path d="M15 17l2-2 2 2-2 2-2-2Z"/></svg></div><h3>{{ tl('Poor Synchronization','Sinkronisasi Buruk','부실한 동기화') }}</h3><p>{{ tl('Difficulty synchronizing data between departments creates silos and delays.','Sulitnya sinkronisasi antar departemen menciptakan silo dan keterlambatan.','부서 간 데이터 동기화 어려움이 사일로와 지연을 만듭니다.') }}</p></div>
                    <div class="p-card"><div class="p-ico"><svg viewBox="0 0 24 24"><path d="M7 3h7l5 5v11a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z"/><path d="M14 3v6h6"/><path d="M9 13h6"/><path d="M9 17h4"/></svg></div><h3>{{ tl('Complex Customs Reports','Laporan Bea Cukai Kompleks','복잡한 관세 보고') }}</h3><p>{{ tl('Preparing documents (BC 2.3, BC 2.6.1, BC 4.0) manually is tedious and error-prone.','Penyusunan dokumen (BC 2.3, BC 2.6.1, BC 4.0) manual itu melelahkan dan rawan salah.','문서(BC 2.3, 2.6.1, 4.0)를 수기로 작성하는 것은 번거롭고 오류가 많습니다.') }}</p></div>
                    <div class="p-card"><div class="p-ico"><svg viewBox="0 0 24 24"><path d="M12 9v4"/><path d="M12 17h.01"/><path d="m10.29 3.86-8.18 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.71-3.14l-8.18-14a2 2 0 0 0-3.42 0Z"/></svg></div><h3>{{ tl('Compliance Risks','Risiko Kepatuhan','컴플라이언스 리스크') }}</h3><p>{{ tl('Risk of fines and sanctions from the Directorate General of Customs and Excise (DJBC).','Risiko denda dan sanksi dari DJBC (Bea Cukai).','관세청 제재 및 벌금 리스크.') }}</p></div>
                </div>
            </div>
            <!-- Illustration -->
            <div class="lg:col-span-2 side-illustration float order-1 lg:order-2">
                <img src="{{ asset('assets/custom/section-1.png?v=1') }}" alt="Problems" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: SOLUTION -->
<section id="solution" class="py-20 lg:py-24 bg-[#f5fbf8] relative overflow-hidden">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-14 items-start">
            <!-- Illustration -->
            <div class="lg:col-span-2 side-illustration float order-2 lg:order-1">
                <img src="{{ asset('assets/custom/section-3.png?v=1') }}" alt="Solution" loading="lazy">
            </div>
            <!-- Content -->
            <div class="lg:col-span-3 order-1 lg:order-2">
                <div class="section-header-small mb-3">
                    <span class="dash"></span>
                    <span class="uppercase tracking-wide text-[11px] font-semibold text-emerald-700 font-inter">{{ tl('Solution','Solusi','솔루션') }}</span>
                </div>
                <h2 class="section-title mid">{{ tl('Integrated Compliance Platform','Platform Kepatuhan Terintegrasi','통합 컴플라이언스 플랫폼') }}</h2>
                <p class="body-text max-w-2xl">{{ tl('SystemEver IT Inventory (Category A) centralizes movements, documents & compliance reporting under one unified layer.','SystemEver IT Inventory (Kategori A) memusatkan pergerakan, dokumen & pelaporan kepatuhan dalam satu lapisan terpadu.','SystemEver IT Inventory (A등급)은 이동, 문서 및 컴플라이언스 보고를 하나의 통합 레이어로 중앙화합니다.') }}</p>
                <div class="solution-list max-w-xl">
                    <div class="solution-item"><div class="solution-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9.4 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9.4a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H10a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09c0 .69.4 1.31 1 1.51a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V10c.69 0 1.31.4 1.51 1H21a2 2 0 1 1 0 4h-.09c-.69 0-1.31.4-1.51 1Z"/></svg></div><div><h3 class="font-poppins text-[17px] font-semibold mb-1 text-emerald-800">{{ tl('Full Integration','Integrasi Penuh','완전 통합') }}</h3><p class="font-opensans text-sm lg:text-[15px] leading-relaxed text-gray-700">{{ tl('Real-time linkage from goods movement to financial impact. Single structured data spine.','Keterhubungan real-time dari pergerakan barang ke dampak finansial. Satu kerangka data terstruktur.','물류 이동에서 재무 영향까지 실시간 연계. 단일 구조화 데이터.') }}</p></div></div>
                    <div class="solution-item"><div class="solution-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/></svg></div><div><h3 class="font-poppins text-[17px] font-semibold mb-1 text-emerald-800">{{ tl('Category A Status','Status Kategori A','A등급 인증') }}</h3><p class="font-opensans text-sm lg:text-[15px] leading-relaxed text-gray-700">{{ tl('Official DJBC validation secures compliance & reduces audit friction.','Validasi resmi DJBC memastikan kepatuhan & mengurangi friksi audit.','관세청 공식 검증으로 컴플라이언스 확보 및 감사 부담 감소.') }}</p></div></div>
                    <div class="solution-item"><div class="solution-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/><path d="M10 9h4"/><path d="M8 13h8"/><path d="M8 17h5"/></svg></div><div><h3 class="font-poppins text-[17px] font-semibold mb-1 text-emerald-800">{{ tl('Automated Customs Docs','Dokumen Bea Cukai Otomatis','자동 관세 문서') }}</h3><p class="font-opensans text-sm lg:text-[15px] leading-relaxed text-gray-700">{{ tl('Generate BC 2.3, BC 2.6.1, BC 4.0 accurately from validated transactional data.','Hasilkan BC 2.3, 2.6.1, 4.0 akurat dari data transaksi tervalidasi.','검증된 거래 데이터를 기반으로 BC 2.3, 2.6.1, 4.0 문서 자동 생성.') }}</p></div></div>
                    <div class="solution-item"><div class="solution-icon"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 13l3-3 4 4 5-8"/></svg></div><div><h3 class="font-poppins text-[17px] font-semibold mb-1 text-emerald-800">{{ tl('Exception Monitoring','Monitoring Pengecualian','예외 모니터링') }}</h3><p class="font-opensans text-sm lg:text-[15px] leading-relaxed text-gray-700">{{ tl('Early anomaly flags reduce penalty risk & accelerate month-end close.','Tanda dini anomali mengurangi risiko sanksi & mempercepat closing akhir bulan.','조기 이상 탐지로 벌금 리스크 감소 및 월말 마감 가속화.') }}</p></div></div>
                </div>

            </div>
        </div>
    </div>
    <div class="pointer-events-none absolute inset-0" style="background:radial-gradient(circle at 75% 40%,rgba(0,153,68,.15),transparent 55%),radial-gradient(circle at 15% 70%,rgba(0,153,68,.12),transparent 60%);"></div>
</section>

<!-- SECTION 3: BUSINESS PROCESS (Storyboard Content) -->
@php
    // simple helper arrays if needed later for iteration (left as static now for clarity)
@endphp
<section id="business-process" class="py-28 lg:py-36 bg-white relative overflow-hidden">
    <style>
        /* New horizontal interactive design */
        .bp-shell{position:relative;}
        .bp-h-timeline{display:flex;flex-wrap:nowrap;overflow-x:auto;gap:34px;padding:6px 4px 12px;scroll-snap-type:x mandatory;}
        .bp-h-timeline::-webkit-scrollbar{height:6px}
        .bp-h-timeline::-webkit-scrollbar-track{background:transparent}
        .bp-h-timeline::-webkit-scrollbar-thumb{background:#cde6da;border-radius:3px}
        .bp-node{scroll-snap-align:start;flex:0 0 220px;background:linear-gradient(180deg,#ffffff,#f5fbf8);border:1px solid #d9e9e1;border-radius:24px;padding:18px 18px 20px;display:flex;flex-direction:column;gap:12px;position:relative;cursor:pointer;transition:.45s cubic-bezier(.22,.61,.36,1);}
        .bp-node:before{content:"";position:absolute;inset:0;border-radius:inherit;background:radial-gradient(circle at 30% 25%,rgba(0,153,68,.12),transparent 70%);opacity:0;transition:.5s;}
        .bp-node:hover{box-shadow:0 16px 36px -14px rgba(0,60,25,.35);transform:translateY(-8px);}
        .bp-node.active{border-color:#43c07b;box-shadow:0 18px 40px -18px rgba(0,153,68,.5);}
        .bp-node.active:before{opacity:1;}
        .bp-n-head{display:flex;align-items:center;gap:12px;}
        .bp-n-idx{width:42px;height:42px;border-radius:14px;background:linear-gradient(145deg,#009944,#18c676);display:flex;align-items:center;justify-content:center;color:#fff;font-family:'Poppins';font-weight:600;font-size:17px;box-shadow:0 8px 18px -6px rgba(0,153,68,.55)}
    .bp-n-title{font-family:'Poppins';font-size:15px;font-weight:600;color:#111f17;margin:0;line-height:1.25;}
        .bp-n-body{font-family:'Open Sans';font-size:12.5px;line-height:1.5;color:#456058;}
        .bp-detail-panel{margin-top:50px;position:relative;background:#ffffff;border:1px solid #dfeae4;border-radius:30px;padding:36px 40px 42px;display:grid;gap:46px;grid-template-columns:1.05fr .95fr;overflow:hidden;}
        @media(max-width:1000px){.bp-detail-panel{grid-template-columns:1fr;padding:30px 26px 34px;border-radius:26px;}}
        .bp-detail-panel:before{content:"";position:absolute;inset:0;background:linear-gradient(120deg,rgba(0,153,68,.08),rgba(0,153,68,0) 60%);pointer-events:none;}
    .bp-detail-col h3{font-family:'Poppins';font-size:20px;font-weight:600;margin:0 0 14px;color:#111f17;}
        .bp-detail-col p,.bp-detail-col li{font-family:'Open Sans';font-size:14px;line-height:1.6;color:#465c55;}
        .bp-tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:18px;}
        .bp-tag{font-size:11px;font-family:'Inter';letter-spacing:.5px;background:#f2faf6;color:#0d5a34;padding:6px 12px;border-radius:999px;font-weight:600;border:1px solid #d4efe3;}
        .bp-outcomes{display:grid;gap:18px;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));}
        .bp-out-card{position:relative;background:linear-gradient(180deg,#0f6c3d,#0b5a33);color:#fff;border-radius:22px;padding:20px 18px 22px;overflow:hidden;min-height:150px;display:flex;flex-direction:column;justify-content:space-between;}
        .bp-out-card:before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 65% 30%,rgba(255,255,255,.35),transparent 65%);opacity:.35;}
        .bp-out-card h4{font-family:'Poppins';font-size:16px;font-weight:600;z-index:2;position:relative;margin:0 0 8px;}
    .bp-out-card p{font-family:'Open Sans';font-size:12.5px;line-height:1.5;z-index:2;position:relative;margin:0;color:#ffffff;opacity:1;}
        .bp-out-icon{position:absolute;bottom:-14px;right:-10px;width:110px;height:110px;opacity:.14;}
        .bp-divider{height:1px;background:linear-gradient(90deg,rgba(0,153,68,.2),rgba(0,153,68,0));margin:32px 0;}
        .bp-fade-enter{animation:fadeSlide .55s cubic-bezier(.22,.61,.36,1);} 
        @keyframes fadeSlide{0%{opacity:0;transform:translateY(12px)}100%{opacity:1;transform:translateY(0)}}
        .bp-gradient-ring{position:absolute;top:-60px;right:-80px;width:340px;height:340px;border-radius:50%;background:radial-gradient(circle at 40% 40%,rgba(0,153,68,.25),transparent 70%);filter:blur(6px);}
        .bp-gradient-ring2{position:absolute;bottom:-120px;left:-100px;width:420px;height:420px;border-radius:50%;background:radial-gradient(circle at 40% 40%,rgba(0,153,68,.25),transparent 70%);filter:blur(10px);}
    </style>
    <div class="bp-gradient-ring"></div>
    <div class="bp-gradient-ring2"></div>
    <div class="container relative bp-shell">
        <div class="section-header-small mb-4">
            <span class="dash"></span>
            <span class="uppercase tracking-wide text-[11px] font-semibold text-emerald-700 font-inter">Business Process</span>
        </div>
    <h2 class="section-title large mb-5">Adaptive Compliance Journey</h2>
    <p class="body-text lead max-w-3xl mb-12">Hover or tap a stage to explore how raw operational events evolve into trusted customs & audit outputs.</p>
        <!-- Horizontal timeline -->
        <div class="bp-h-timeline" id="bpTimeline">
            @foreach($steps as $i=>$step)
            <div class="bp-node {{ $i==0 ? 'active' : '' }}" data-step="{{ $i }}">
                <div class="bp-n-head">
                    <div class="bp-n-idx">{{ $i+1 }}</div>
                    <h4 class="bp-n-title">{{ $step['title'] }}</h4>
                </div>
                <div class="bp-n-body">{{ $step['short'] }}</div>
            </div>
            @endforeach
        </div>
        <!-- Detail panel -->
        <div class="bp-detail-panel mt-14" id="bpDetailPanel">
            <div class="bp-detail-col" id="bpDetailPrimary">
                <h3 id="bpDetailTitle" class="bp-fade-enter">{{ $steps[0]['title'] }}</h3>
                <p id="bpDetailText" class="bp-fade-enter">{{ $steps[0]['text'] }}</p>
                <div class="bp-tags" id="bpTags">
                    @foreach($steps[0]['tags'] as $t)<span class="bp-tag">{{ $t }}</span>@endforeach
                </div>
                <div class="bp-divider"></div>
                <h3 class="font-poppins text-xl font-semibold mb-4 text-gray-900">@if($lang=='EN') Outcome Snapshot @elseif($lang=='ID') Ringkasan Hasil @else 결과 스냅샷 @endif</h3>
                <div class="bp-outcomes" id="bpOutcomes">
                    @foreach($steps[0]['out'] as $out)
                    <div class="bp-out-card">
                        <h4>{{ $out['h'] }}</h4>
                        <p>{{ $out['p'] }}</p>
                        <svg class="bp-out-icon" viewBox="0 0 24 24"><path stroke="white" stroke-width="1.4" fill="none" d="M4 4h16v4H4zM4 12h16v8H4z"/></svg>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="bp-detail-col" id="bpDetailSecondary">
                <h3 class="font-poppins text-xl font-semibold mb-4 text-gray-900">@if($lang=='EN') Why It Matters @elseif($lang=='ID') Kenapa Penting @else 왜 중요한가 @endif</h3>
                <p class="font-opensans text-[15px] leading-6 text-gray-600 mb-6" id="bpWhy">{{ $steps[0]['why'] }}</p>
                <div class="grid sm:grid-cols-3 gap-4 text-center" id="bpMetrics">
                    @foreach($steps[0]['metrics'] as $m)
                        <div class="p-4 rounded-xl bg-[#f5fbf8] border border-[#d9ebe3]"><strong class="block font-poppins text-emerald-700 text-lg">{{ $m['value'] }}</strong><span class="text-11px font-opensans tracking-wide">{{ $m['label'] }}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        (function(){
            const steps = @json($steps);
            const nodes=document.querySelectorAll('.bp-node');
            const titleEl=document.getElementById('bpDetailTitle');
            const textEl=document.getElementById('bpDetailText');
            const tagsEl=document.getElementById('bpTags');
            const outEl=document.getElementById('bpOutcomes');
            const whyEl=document.getElementById('bpWhy');
            const metricsEl=document.getElementById('bpMetrics');
            function render(step){
                titleEl.classList.remove('bp-fade-enter');void titleEl.offsetWidth;titleEl.classList.add('bp-fade-enter');
                textEl.classList.remove('bp-fade-enter');void textEl.offsetWidth;textEl.classList.add('bp-fade-enter');
                titleEl.textContent=step.title;textEl.textContent=step.text;whyEl.textContent=step.why;
                tagsEl.innerHTML=step.tags.map(t=>`<span class="bp-tag">${t}</span>`).join('');
                outEl.innerHTML=step.out.map(o=>`<div class='bp-out-card'><h4>${o.h}</h4><p>${o.p}</p><svg class='bp-out-icon' viewBox='0 0 24 24'>${o.icon}</svg></div>`).join('');
                metricsEl.innerHTML=step.metrics.map(m=>`<div class='p-4 rounded-xl bg-[#f5fbf8] border border-[#d9ebe3]'><strong class='block font-poppins text-emerald-700 text-lg'>${m[0]}</strong><span class='text-11px font-opensans tracking-wide'>${m[1]}</span></div>`).join('');
            }
            nodes.forEach(n=>n.addEventListener('mouseenter',()=>{nodes.forEach(x=>x.classList.remove('active'));n.classList.add('active');render(steps[+n.dataset.step]);}));
            nodes.forEach(n=>n.addEventListener('click',()=>{nodes.forEach(x=>x.classList.remove('active'));n.classList.add('active');render(steps[+n.dataset.step]);}));
        })();
    </script>
</section>

<!-- CTA -->
<section id="cta" class="pt-4 pb-24 lg:pt-12 lg:pb-36 bg-white">
    <div class="container">
        <div class="cta-minimal-wrapper">
            <h2 class="section-title sm">@if(activelang()=="EN") Ready to Take Action? @elseif(activelang()=="KOR") 지금 시작할 준비가 되셨나요? @else Siap Ambil Tindakan? @endif</h2>
            <p class="body-text" style="margin-bottom:34px">@if(activelang()=="EN") Send us a message and our team will respond with a tailored walkthrough. @elseif(activelang()=="KOR") 메시지를 보내주시면 맞춤형 안내를 드립니다. @else Kirim pesan dan tim kami akan merespon dengan demo yang sesuai. @endif</p>
            @if(session('status'))
                <div class="alert-success" role="alert" aria-live="polite">{{ session('status') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert-error" role="alert" aria-live="assertive">@if(activelang()=="EN") Please fix the errors below. @elseif(activelang()=="KOR") 아래 오류를 수정해 주세요. @else Perbaiki error di bawah. @endif</div>
            @endif
            <form action="{{ activelang() == 'EN' ? route('post.pages.it_inventory.en') : (activelang() == 'KOR' ? route('post.pages.it_inventory.kor') : route('post.pages.it_inventory')) }}" method="POST" class="minimal-form" novalidate>
                @csrf
                <div class="m-field {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="@if(activelang()=="EN") Your name @elseif(activelang()=="KOR") 이름 @else Nama Anda @endif">
                    @if($errors->has('name'))<div class="f-error">{{ $errors->first('name') }}</div>@endif
                </div>
                <div class="m-field {{ ($errors->has('email') || $errors->has('corporate_email')) ? 'has-error' : '' }}">
                    <input type="email" name="email" value="{{ old('email', old('corporate_email')) }}" required placeholder="Email address">
                    @if($errors->has('email'))<div class="f-error">{{ $errors->first('email') }}</div>@endif
                    @if($errors->has('corporate_email'))<div class="f-error">{{ $errors->first('corporate_email') }}</div>@endif
                </div>
                <div class="m-field {{ $errors->has('company') ? 'has-error' : '' }}">
                    <input type="text" name="company" value="{{ old('company') }}" required placeholder="@if(activelang()=="EN") Company @elseif(activelang()=="KOR") 회사명 @else Perusahaan @endif">
                    @if($errors->has('company'))<div class="f-error">{{ $errors->first('company') }}</div>@endif
                </div>
                <div class="m-field {{ ($errors->has('phone') || $errors->has('phone_number')) ? 'has-error' : '' }}">
                    <input type="text" name="phone" value="{{ old('phone', old('phone_number')) }}" required placeholder="@if(activelang()=="EN") Phone number @elseif(activelang()=="KOR") 전화번호 @else Nomor telepon @endif">
                    @if($errors->has('phone'))<div class="f-error">{{ $errors->first('phone') }}</div>@endif
                    @if($errors->has('phone_number'))<div class="f-error">{{ $errors->first('phone_number') }}</div>@endif
                </div>
                <div class="m-field m-split {{ $errors->has('message') ? 'has-error' : '' }}">
                    <textarea name="message" required placeholder="@if(activelang()=="EN") Write your message @elseif(activelang()=="KOR") 메세지를 입력하세요 @else Tulis pesan Anda @endif">{{ old('message') }}</textarea>
                    @if($errors->has('message'))<div class="f-error">{{ $errors->first('message') }}</div>@endif
                </div>
                <div class="m-field m-split" style="margin-top:10px;">
                    <button type="submit" class="submit-minimal" id="ctaSubmitBtn"><span class="btn-label">@if(activelang()=="EN") Send message @elseif(activelang()=="KOR") 메세지 보내기 @else Kirim pesan @endif</span><span class="spinner"></span></button>
                </div>
                <div class="m-note m-split">@if(activelang()=="EN") We respect your privacy. @elseif(activelang()=="KOR") 귀하의 개인정보는 안전하게 보호됩니다. @else Data Anda aman dan tidak akan dibagikan. @endif</div>
            </form>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded',function(){
    const cta=document.getElementById('cta');
    if(!cta) return; 
    const alert=cta.querySelector('.alert-success, .alert-error');
    if(alert){
        // Smooth scroll with navbar offset
        alert.scrollIntoView({behavior:'smooth',block:'start'});
        setTimeout(()=>{window.scrollBy({top:-110,behavior:'smooth'});},380);
        // Focus first invalid field if errors present
        if(alert.classList.contains('alert-error')){
             const firstErr=cta.querySelector('.has-error input, .has-error textarea');
             if(firstErr){try{firstErr.focus({preventScroll:true});}catch(e){}}
        }
        // Auto dismiss success after 7s
        if(alert.classList.contains('alert-success')){
             setTimeout(()=>{alert.style.transition='opacity .45s';alert.style.opacity='0';setTimeout(()=>alert.remove(),500);},7000);
        }
    }
      // Loading & double submit guard
      const form=cta.querySelector('form.minimal-form');
      const btn=document.getElementById('ctaSubmitBtn');
      if(form && btn){
          form.addEventListener('submit',function(e){
              if(btn.classList.contains('loading')){e.preventDefault();return false;}
              btn.classList.add('loading');
              btn.setAttribute('disabled','disabled');
          });
      }
});
</script>
@endsection

@section('footer')
@include('systemever/includes/footer')
@endsection
