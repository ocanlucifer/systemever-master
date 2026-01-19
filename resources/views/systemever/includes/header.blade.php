  <style>
    /* Layout constants */
    :root { --topbar-h:60px; --navbar-h:60px; --header-total:0px; }
    @media (max-width:768px){ :root { --topbar-h:50px; --navbar-h:60px; } }

    html,body {margin:0;padding:0;overflow-x:hidden;width:100%;}
    /* Remove body padding hack; we'll offset first section instead */
    body {padding-top:0;}

    .section-demo{position:fixed;top:0;left:0;width:100%;z-index:999;height:var(--topbar-h);background:#000;color:#fff;display:flex;align-items:center;}
    .section-demo .container{display:flex;align-items:center;justify-content:flex-end;gap:12px;font-size:13px;}
    .section-demo a{text-decoration:none;color:#fff;}

  .section-menu{position:fixed;top:var(--topbar-h);left:0;width:100%;z-index:998;background:#fff;}

    /* Offset the first content section exactly by combined fixed header heights */
  /* Removed margin-top offset (caused white gap). Hero sections will include internal padding using header height vars. */

    /* Ensure no legacy paddings/margins reintroduce left/right gap */
    .wrapper, .page-content {
      padding-top:0 !important;
      padding-left:0 !important;
      padding-right:0 !important;
      margin-left:0 !important;
      margin-right:0 !important;
      box-sizing:border-box;
    }

    /* Apply dynamic offset to first section so content sits below fixed header without hardcoded heights */
  .page-content > section:first-of-type,
  .page-content > *:first-child { padding-top: var(--header-total); margin-top:0 !important; }

    /* Hide left fixed sidebar to remove persistent white bar on the left */
    .sidebar, .backdrop {display:none !important;}
  </style>
  @php $isHome = request()->routeIs('get.index'); @endphp
  @if($isHome)
    <style>
      /* Homepage overrides: remove white navbar background & padding offset to eliminate visible white gap */
      .section-menu{background:transparent !important;box-shadow:none !important;}
      .page-content > section:first-of-type,
      .page-content > *:first-child{padding-top:0 !important;}
      /* Ensure hero/full-bleed sections start under header */
      .hero-home{margin-top:0 !important;}
    </style>
  @endif
  <script>
    // Compute header total height automatically (top black bar + navbar)
    (function(){
      function setHeaderOffset(){
        var topBar = document.querySelector('.section-demo');
        var navBar = document.querySelector('.section-menu');
        var h = (topBar ? topBar.offsetHeight : 0) + (navBar ? navBar.offsetHeight : 0);
        document.documentElement.style.setProperty('--header-total', h + 'px');
      }
      window.addEventListener('load', setHeaderOffset);
      window.addEventListener('resize', setHeaderOffset);
      document.addEventListener('DOMContentLoaded', setHeaderOffset);
    })();
  </script>
  <div class="section-demo d-lg-block d-sm-none d-none" style="transition:all .5s ease">
    <div class="container-content-1" style="height:60px">
      <div class="row d-flex align-items-center">
        <div class="col-lg-8">
          {{-- {{seeinindo()}} --}}
          {{-- @if (activelang() == "EN")
          Learn how SystemEver fits perfectly into your remote work trip. <a href="{{ route('get.pages.support.video') }}"><b> Watch Tutorial Video.</b></a>
          @elseif (activelang() == "KOR")
          SystemEver, 원격 작업에 왜 찰떡인지 <a href="{{ route('get.pages.support.video') }}"><b> 영상 </b> 으로 만나보세요!
          @else
          Pelajari lebih lanjut bagaimana SystemEver sangat tepat untuk bekerja remote <a href="{{ route('get.pages.support.video') }}"><b> Lihat Video Tutorial.</b></a>
          @endif --}}
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-end">
            {{-- <li class="mr-1"><button class="button btn-white-green-demo btn-rounded" data-toggle="modal" data-target="#modal-request-demo">FREE DEMO</button></li> --}}
            <li class="mr-1">
              <a href="https://wa.me/628111997101?text=Hello, I want to know more about system ever" class="wa">
                <img src="{{ asset('assets/fl/wa-number.png')}}" alt="WhatsApp" style="height:auto;max-height:40px;">
              </a>
            </li>
            <!-- <li class="mr-1">
              <a href="{{ route('get.contact') }}" class="button btn-white-green-demo btn-rounded">
              @if (activelang() == "EN")
              FREE&nbsp;DEMO
              @else
              DEMO&nbsp;GRATIS
              @endif
              </a>
            </li>
            <li><a href="{{ route('get.pages.join_partnership') }}" class="button btn-white-green-demo btn-rounded">
              @if (activelang() == "EN")
              BECOME&nbsp;A PARTNER
              @else
              MENJADI&nbsp;MITRA
              @endif
              </a>
            </li> -->
            <li>
              <div class="dropdown dropdown-language">
                <button class="btn d-flex align-items-center" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div id="EN" class="lang {{ activelang() == "EN" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/english-icon.png')}}" style="height:18px;"> <strong>{{ stringlang('EN','EN','영어') }}</strong>
                  </div>
                  <div id="ID" class="lang {{ activelang() == "ID" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/indonesia-icon.png')}}" style="height:18px;"> <strong>{{ stringlang('ID','ID','인니') }}</strong>
                  </div>
                  <div id="KOR" class="lang {{ activelang() == "KOR" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/korean-flag.png')}}" style="height:18px;"> <strong>{{ stringlang('KOR','KOR','한국어') }}</strong>
                  </div>
                  <i class="fa fa-angle-down ml-2"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-language" aria-labelledby="dropdownMenu2">
                  <a class="dropdown-item text-black" style="color:#000" type="button" href="{{seeinindo()}}">
                    <img src="{{ asset('assets/img/indonesia-icon.png')}}" style="height:20px; margin-right:10px;">
                    {{ stringlang('INDONESIA','INDONESIA','인도네시아') }}
                  </a>
                  <a class="dropdown-item text-black" style="color:#000" type="button" href="{{seeineng()}}">
                    <img src="{{ asset('assets/img/english-icon.png')}}" style="height:20px; margin-right:10px;">
                    {{ stringlang('ENGLISH','ENGLISH','영어') }}
                  </a>
                  <a class="dropdown-item text-black" style="color:#000" type="button" href="{{seeinkor()}}">
                    <img src="{{ asset('assets/img/korean-flag.png')}}" style="height:20px; margin-right:10px;">
                    {{ stringlang('KOREA','KOREA','한국어') }}
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="section-menu fixed-top d-lg-block d-sm-none d-none">
    <div class="container-content-1">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <div class="logo">
            <a href="{{ route('get.index') }}">
              <img src="{{ asset('assets/fl/logo.png') }}" alt="">
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <ul class="mb-0 list-unstyled d-flex justify-content-end align-items-center">
            <li id="about" class="dropdown-header">
              <a href="{{ route('get.pages.abouts.indonesia_branch') }}" class="{{ Request::segment(1) == 'about' ? 'active':'' }}">{{ stringlang('About', 'Tentang Kami', '회사소개') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header py-4 px-4">
                <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div>
                <div class="isimenu pl-0 pr-4">
                  <ul class="list-unstyled menu-drop">
                    <li>{{ stringlang('About', 'Tentang Kami','회사소개') }} </li>
                    <li class="{{ Request::segment(2) == 'indonesia-branch' ? 'active':'' }}">
                      <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang('Indonesian Branch', 'Kantor Cabang Indonesia', '인도네시아 법인') }}</a>
                      <div class="img-menu img-menu-1">
                        {{-- <img src="{{ asset('assets/img/Group656.png') }}" alt=""> --}}
                        <img src="{{ asset('assets/fl/logo-menu.png') }}" alt="">
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'system-ever' ? 'active':'' }}">
                      <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a>
                      <div class="img-menu img-menu-2">
                        <img src="{{ asset('assets/fl/logo-menu.png') }}" alt="">
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'history' ? 'active':'' }}">
                      <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.history') }}">{{ stringlang('History', 'Sejarah', '주요 연혁') }}</a>
                      <div class="img-menu img-menu-3">
                        <img src="{{ asset('assets/img/ipo-menu.png') }}" alt="">
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="img-menu-drop" id="menu-img-1">
                  <img class="{{ Request::segment(2) == 'indonesia-branch' ? 'd-none': Request::segment(2) == 'system-ever' ? 'd-none': Request::segment(2) == 'history' ? 'd-none':''}}" src="{{ asset('assets/fl/logo-menu.png') }}" alt="">
                </div>
              </div>
            </li>
            <li id="solutions" class="dropdown-header ">
              <a href="{{ route('get.pages.solutions.accounting_management_systems') }}" class="{{ Request::segment(1) == 'solutions' ? 'active':'' }}">{{ stringlang('Solution', 'Solusi','솔루션') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header dropbaru py-4 px-4" style="box-shadow: 0px 4px 8px 0px #00000011; border-radius:0px 0px 10px 10px">
                <!-- <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div> -->
                <div class="isimenu isibaru">
                  <div class="">
                    <a href="{{ route('get.pages.solutions.accounting_management_systems') }}" class="itembaru {{ Request::segment(2) == 'accounting-management-systems' ? 'active':'' }}">
                      {{ stringlang('SystemEver AccounTax', 'SystemEver AccounTax') }}
                      <!-- <img src="{{ asset('assets/fl/down.svg') }}" alt=""> -->
                    </a>
                    <a href="{{ route('get.pages.solutions.elearning') }}" class="itembaru {{ Request::segment(2) == 'accoutax-elearning' ? 'active':'' }}" style="padd">
                      <img src="{{ asset('assets/fl/down.svg')}}" alt="" style="transform: rotate(-90deg);"> &nbsp;
                      AccounTax E-Learning
                    </a>
                  </div>
                  <!-- <a href="{{ route('get.pages.solutions.bms') }}" class="itembaru {{ Request::segment(2) == 'bms' ? 'active':'' }}">
                    {{ stringlang('Business Management System (BMS)', ' Business Management System (BMS)') }}
                  </a> -->
                  <a href="{{ route('get.pages.solutions.i5_trading') }}" class="itembaru {{ Request::segment(2) == 'i5-trading' ? 'active':'' }}">
                    {{ stringlang('SystemEver Distribution ERP', ' SystemEver Distribution ERP', 'SystemEver 유통 ERP') }}
                  </a>
                  <a href="{{ route('get.pages.solutions.i7_manufacture') }}" class="itembaru {{ Request::segment(2) == 'i7-manufacture' ? 'active':'' }}">
                    {{ stringlang('SystemEver Manufacture ERP', ' SystemEver Manufacture ERP', 'SystemEver 제조 ERP') }}
                  </a>
                </div>
                <div class="sampingbaru">
                  <a href="{{ route('get.pages.solutions.accounting_management_systems') }}" class=" ">
                    <img src="{{ asset('assets/fl/home-grid-accounttax.png')}}" alt="" class=" ">
                    <div class="fxc">
                      <strong>{{ stringlang('SystemEver AccounTax', 'SystemEver AccounTax') }}</strong>
                      <p class="">
                        {!! stringlang('Integrated Accounting and Tax Application for Easier Recording and Reporting','Aplikasi Akuntansi dan Pajak Terintegrasi untuk Pencatatan dan Pelaporan Lebih Mudah', '더욱 쉬운 기록 및 보고를 위한 통합 <br> 회계 및 세무 애플리케이션') !!}
                      </p>
                      <span>{{ stringlang('Read more', 'Selengkapnya', '더 읽어보기') }} <img src="{{ asset('assets/fl/more.png')}}" alt=""></span>
                    </div>
                  </a>
                </div>
              </div>
            </li>

            <li>
              <a href="{{ route('get.pages.performance') }}" class="{{ Request::segment(1) == 'performance-quality' ? 'active':'' }}">{{ stringlang('Performance Quality', 'Performance Quality','성능 품질') }}</a>
            </li>
            
            <li>
              <a href="{{ route('get.pages.it_inventory') }}" class="{{ Request::segment(1) == 'ITInventory' ? 'active':'' }}">{{ stringlang('IT Inventory', 'IT Inventory','IT 인벤토리') }}</a>
            </li>
            
            <li id="article" class="dropdown-header">
              <a href="{{ route('get.pages.article.professional') }}" class="{{ Request::segment(1) == 'business-insight' ? 'active':'' }}">{{ stringlang('Business Insight', 'Business Insight', '인사이트') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header py-4 px-4 ">
                <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div>
                <div class="isimenu pl-0 pr-4">
                  <ul class="list-unstyled menu-drop">
                    <li>{{ stringlang('Business Insight', 'Business Insight','인사이트') }}</li>
                    <li class="{{ Request::segment(2) == 'professional' ? 'active':'' }}">
                      <a onclick="imgControl('5')" href="{{ route('get.pages.article.professional') }}">{{ stringlang('Professional', 'Professional','프로페셔널') }}</a>
                      <div class="img-menu img-menu-2">
                        <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        <div class="arrow-down position-absolute">
                          <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                        </div>
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'article' ? 'active':'' }}">
                      <a onclick="imgControl('5')" href="{{ route('get.pages.article.article') }}">{{ stringlang('General', 'General', '일반') }}</a>
                      <div class="img-menu img-menu-1">
                        <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        <div class="arrow-down position-absolute">
                          <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                        </div>
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'news' ? 'active':'' }}">
                      <a onclick="imgControl('5')" href="{{ route('get.pages.article.news') }}">{{ stringlang('News', 'Berita', '뉴스') }}</a>
                      <div class="img-menu img-menu-2">
                        <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        <div class="arrow-down position-absolute">
                          <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                        </div>
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'news' ? 'active':'' }}">
                      <a onclick="imgControl('5')" href="{{ route('get.pages.article.ceo_forum') }}">{{ stringlang('CEO Forum', 'CEO Forum', 'CEO Forum') }}</a>
                      <div class="img-menu img-menu-2">
                        <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        <div class="arrow-down position-absolute">
                          <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="img-menu-drop position-relative" id="menu-img-5">
                  <img class="{{ Request::segment(2) == 'article' ? 'd-none': Request::segment(2) == 'news' ? 'd-none':''}}" src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                  <div class="arrow-down position-absolute {{ Request::segment(2) == 'article' ? 'd-none': Request::segment(2) == 'news' ? 'd-none':''}}">
                    <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                  </div>
                </div>
              </div>
            </li>
            <!-- <li class="ml-1"><a href="https://wa.me/628119717708?text=Hello, I want to know more about system ever" class=" d-flex align-items-center"><img class="wa-header mr-2 h-30" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="">081 197 17708</a></li> -->
          </ul>
        </div>
        <div class="d-flex actionss">
          {{-- <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @elseif (activelang() == "KOR") 퍼트너 되기 @else Menjadi Mitra @endif</a> --}}
          <a href="{{ route('get.contact') }}" class="fill">@if (activelang() == "EN") Free Demo @elseif (activelang() == "KOR") 무료 데모 @else Demo Gratis @endif</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-menu fixed-top d-lg-none d-md-block d-sm-block d-block">
    <div class="container-content">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
          <div class="d-flex justify-content-start  align-items-center">
            <button class="hamburger berger-menu hamburger--squeeze js-hamburger" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
            <div class="logo">
              <a href="{{ route('get.index') }}">
                <img src="{{ asset('assets/fl/logo.svg') }}" alt="">
              </a>
            </div>
          </div>
          <div class="d-flex actionss">
            {{-- <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @elseif (activelang() == "KOR") 퍼트너 되기 @else Menjadi Mitra @endif</a> --}}
            <a href="{{ route('get.contact') }}" class="fill">@if (activelang() == "EN") Free Demo @elseif (activelang() == "KOR") 무료 데모 @else Demo Gratis @endif</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
