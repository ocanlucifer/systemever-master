  <style>
    html,body {margin:0;padding:0;overflow-x:hidden;}
    
    .section-demo{position:fixed;top:0;left:0;width:100%;z-index:9999;height:60px;background:#000;color:#fff;display:flex;align-items:center;}
    .section-demo .container{display:flex;align-items:center;justify-content:flex-end;gap:12px;font-size:13px;}
    .section-demo a{text-decoration:none;color:#fff;}

    /* .section-menu{position:fixed;top:60px;left:0;width:100%;z-index:998;background:#fff;box-shadow:0px 4px 8px rgba(0,0,0,0.3);} */
    .section-menu{position:fixed;top:0px;left:0;width:100%;z-index:998;background:#fff;box-shadow:0px 4px 8px rgba(0,0,0,0.3);}

    /* Keep mobile sidebar collapse triggers visible */
    .sidebar a.collapsed {
        display: block !important;
    }

    /* Language dropdown styling - appear above menu */
    .dropdown-language {
      position: relative;
    }
    .dropdown-language .dropdown-menu-language {
      position: absolute;
      top: 100%;
      right: 0;
      z-index: 10000;
      min-width: 160px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
      padding: 8px 0;
      margin-top: 8px;
      display: none;
      color: aqua;
    }
    .dropdown-language .dropdown-menu-language.show {
      display: block;
    }
    .dropdown-language .dropdown-menu-language .dropdown-item {
      padding: 10px 16px;
      display: flex;
      align-items: center;
      color: #333;
      text-decoration: none;
      transition: background 0.2s;
    }
    .dropdown-language .dropdown-menu-language .dropdown-item:hover {
      background: #f5f5f5;
    }
    .dropdown-language .lang {
      display: none;
    }
    .dropdown-language .lang.active {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    @media (max-width:768px){
      .section-demo{height:50px;}
      .section-menu{top:0;}

      .section-menu.d-lg-none {
        z-index: 1100;
      }

      .section-menu.d-lg-none .container-content {
        padding-left: 14px;
        padding-right: 14px;
      }

      .section-menu.d-lg-none .col-lg-12 {
        min-height: 56px;
        position: relative;
        justify-content: center !important;
      }

      .section-menu.d-lg-none .col-lg-12 > .d-flex.justify-content-start {
        width: 100%;
        justify-content: center !important;
      }

      .section-menu.d-lg-none .logo img {
        width: auto;
        max-width: 140px;
        height: 24px;
      }

      .section-menu.d-lg-none .hamburger {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        margin-right: 0;
      }

      .sidebar {
        top: 56px;
        bottom: 0;
        width: 85vw;
        max-width: 320px;
        left: 0;
        z-index: 1099;
        padding-top: 0;
        transform: translateX(-110%);
        transition: transform 0.35s ease;
      }

      .sidebar.is-active {
        left: 0;
        transform: translateX(0);
      }

      .sidebar .box-menu-sidebar {
        height: 100%;
        overflow-y: auto;
      }

      .sidebar .box-menu-sidebar ul li .close-sidebar {
        display: none;
      }

      .backdrop {
        top: 56px;
        bottom: 0;
        z-index: 1098;
      }

      body.modal-open {
        overflow: hidden;
      }
    }
  </style>
  <!-- <div class="section-demo d-lg-block d-sm-none d-none" style="transition:all .5s ease">
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
          <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-end"> -->
            {{-- <li class="mr-1"><button class="button btn-white-green-demo btn-rounded" data-toggle="modal" data-target="#modal-request-demo">FREE DEMO</button></li> --}}
            <!-- <li class="mr-1">
              <a href="https://wa.me/6281119971017?text=Hello, I want to know more about system ever" class="wa">
                <img src="{{ asset('assets/fl/wa-number.png')}}" alt="WhatsApp" style="height:auto;max-height:40px;">
              </a>
            </li> -->
            <!-- <li class="mr-1">
              <a href="{{ route('get.demo_page') }}" class="button btn-white-green-demo btn-rounded">
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
            <!-- <li>
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
            </li> -->
          <!-- </ul>
        </div>
      </div>
    </div>
  </div> -->

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
              <a href="{{ route('get.pages.solutions.cloud_erp') }}" class="{{ Request::segment(1) == 'solutions' ? 'active':'' }}">{{ stringlang('Solution', 'Solusi','솔루션') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header dropbaru py-4 px-4" style="box-shadow: 0px 4px 8px 0px #00000011; border-radius:0px 0px 10px 10px">
                <!-- <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div> -->
                <div class="isimenu isibaru">
                  <a href="{{ route('get.pages.solutions.cloud_erp') }}" class="itembaru {{ Request::segment(2) == 'cloud-erp' ? 'active':'' }}">
                    {{ stringlang('ERP', 'ERP', 'ERP') }}
                  </a>
                  <div class="">
                      <a href="{{ route('get.pages.solutions.accounting') }}" class="itembaru {{ Request::segment(2) == 'accounting' ? 'active':'' }}">
                        {{ stringlang('Accounting', 'Accounting', '회계') }}
                      </a>
                  </div>
                  <a href="{{ route('get.pages.solutions.payroll') }}" class="itembaru {{ Request::segment(2) == 'payroll' ? 'active':'' }}">
                    {{ stringlang('Payroll', 'Payroll', '급여') }}
                  </a>
                  <a href="{{ route('get.pages.solutions.evertime') }}" class="itembaru {{ Request::segment(2) == 'attendance' ? 'active':'' }}">
                    {{ stringlang('Attendance', 'Attendance', '근태') }}
                  </a>
                </div>
                <div class="sampingbaru">
                  <!-- <a href="{{ route('get.pages.solutions.accounting') }}" class=" "> -->
                  <a href="{{ route('get.pages.solutions.cloud_erp') }}" class=" ">
                    <img src="{{ asset('assets/img/cloud-logo.png')}}" alt="" class=" ">
                    <div class="fxc">
                      <!-- <strong>{{ stringlang('Accounting', 'Accounting', '회계') }}</strong> -->
                      <strong>{{ stringlang('Cloud ERP', 'Cloud ERP', 'Cloud ERP') }}</strong>
                      <p class="">
                        <!-- {!! stringlang('Integrated Accounting Application', 'Aplikasi Akuntansi Terintegrasi', '통합 회계 애플리케이션') !!} -->
                         {!! stringlang('Integrated ERP Solutions for Sustainable Business Growth', 'Solusi ERP Terintegrasi untuk Pertumbuhan Bisnis yang Berkelanjutan', '지속 가능한 성장을 위한 통합 ERP 솔루션') !!}
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
            <li>
              <div class="dropdown dropdown-language">
                <button class="btn d-flex align-items-center" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div id="EN" class="lang {{ activelang() == "EN" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/english-icon.png')}}" style="height:18px;"> <strong>{{ stringlang('EN','EN','영어') }}</strong>
                  </div>
                  <!-- <div id="ID" class="lang {{ activelang() == "ID" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/indonesia-icon.png')}}" style="height:18px;"> <strong>{{ stringlang('ID','ID','인니') }}</strong>
                  </div> -->
                  <div id="KOR" class="lang {{ activelang() == "KOR" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/korean-flag.png')}}" style="height:18px;"> <strong>{{ stringlang('KOR','KOR','한국어') }}</strong>
                  </div>
                  <i class="fa fa-angle-down ml-2"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-language" aria-labelledby="dropdownMenu2">
                  <!-- <a class="dropdown-item text-black" style="color:#000" type="button" href="{{seeinindo()}}">
                    <img src="{{ asset('assets/img/indonesia-icon.png')}}" style="height:20px; margin-right:10px;">
                    {{ stringlang('INDONESIA','INDONESIA','인도네시아') }}
                  </a> -->
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
            <!-- <li class="ml-1"><a href="https://wa.me/628119717708?text=Hello, I want to know more about system ever" class=" d-flex align-items-center"><img class="wa-header mr-2 h-30" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="">081 197 17708</a></li> -->
          </ul>
        </div>
        <!-- <div class="d-flex actionss">
          {{-- <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @elseif (activelang() == "KOR") 퍼트너 되기 @else Menjadi Mitra @endif</a> --}}
          <a href="{{ route('get.demo_page') }}" class="fill">@if (activelang() == "EN") Free Demo @elseif (activelang() == "KOR") 무료 데모 @else Demo Gratis @endif</a>
        </div> -->
        <div>
          {{-- <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @elseif (activelang() == "KOR") 퍼트너 되기 @else Menjadi Mitra @endif</a> --}}
          <a href="{{ route('get.demo_page') }}" class="fill">
                <img src="{{ asset('assets/img/free-demo.png')}}" style="height:50px;">
              </a>
              
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
          <!-- <div class="d-flex actionss">
            {{-- <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @elseif (activelang() == "KOR") 퍼트너 되기 @else Menjadi Mitra @endif</a> --}}
            <a href="{{ route('get.demo_page') }}" class="fill">@if (activelang() == "EN") Free Demo @elseif (activelang() == "KOR") 무료 데모 @else Demo Gratis @endif</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</header>
