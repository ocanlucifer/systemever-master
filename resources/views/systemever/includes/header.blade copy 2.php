<header>
  <div class="section-demo d-lg-block d-sm-none d-none" style="transition:all .5s ease">
    <div class="container-content-1" style="height:50px">
      <div class="row d-flex align-items-center">
        <div class="col-lg-8">
          {{-- {{seeinindo()}} --}}
          @if (activelang() == "EN")
          Learn how SystemEver fits perfectly into your remote work trip. <a href="{{ route('get.pages.support.video') }}"><b> Watch Tutorial Video.</b></a>
          @else
          Pelajari lebih lanjut bagaimana SystemEver sangat tepat untuk bekerja remote <a href="{{ route('get.pages.support.video') }}"><b> Lihat Video Tutorial.</b></a>
          @endif
        </div>
        <div class="col-lg-4">
          <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-end">
            {{-- <li class="mr-1"><button class="button btn-white-green-demo btn-rounded" data-toggle="modal" data-target="#modal-request-demo">FREE DEMO</button></li> --}}
            <li class="mr-1">
              <a href="https://wa.me/628119717708?text=Hello, I want to know more about system ever" class="wa">
                <img src="{{ asset('assets/fl/wa.svg')}}">
                +628119717708
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
                    {{-- ENG --}}
                    <img src="{{ asset('assets/img/english-icon.png')}}" style="height:18px;"> <strong>EN</strong>
                  </div>
                  <div id="ID" class="lang {{ activelang() == "ID" ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/indonesia-icon.png')}}" style="height:18px;"> <strong>ID</strong>
                  </div>
                  <i class="fa fa-angle-down ml-2"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-language" aria-labelledby="dropdownMenu2">
                  <a class="dropdown-item text-black" style="color:#000" type="button" href="{{seeinindo()}}">
                    <img src="{{ asset('assets/img/indonesia-icon.png')}}" style="height:20px; margin-right:10px;">
                    INDONESIA
                  </a>
                  <a class="dropdown-item text-black" style="color:#000" type="button" href="{{seeineng()}}">
                    <img src="{{ asset('assets/img/english-icon.png')}}" style="height:20px; margin-right:10px;">
                    ENGLISH
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="section-menu d-lg-block d-sm-none d-none">
    <div class="container-content-1">
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <div class="logo">
            <a href="{{ route('get.index') }}">
              <img src="{{ asset('assets/fl/logo.svg') }}" alt="">
            </a>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <ul class="mb-0 list-unstyled d-flex justify-content-end align-items-center">
            <li id="about" class="dropdown-header">
              <a href="{{ route('get.pages.abouts.indonesia_branch') }}" class="{{ Request::segment(1) == 'about' ? 'active':'' }}">{{ stringlang('About', 'Tentang Kami') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header py-4 px-4">
                <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div>
                <div class="isimenu pl-0 pr-4">
                  <ul class="list-unstyled menu-drop">
                    <li>{{ stringlang('About', 'Tentang Kami') }} </li>
                    <li class="{{ Request::segment(2) == 'indonesia-branch' ? 'active':'' }}">
                      <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang('Indonesian Branch', 'Kantor Cabang Indonesia') }}</a>
                      <div class="img-menu img-menu-1">
                        <img src="{{ asset('assets/img/Group656.png') }}" alt="">
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'system-ever' ? 'active':'' }}">
                      <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a>
                      <div class="img-menu img-menu-2">
                        <img src="{{ asset('assets/fl/logo-menu.png') }}" alt="">
                      </div>
                    </li>
                    <li class="{{ Request::segment(2) == 'history' ? 'active':'' }}">
                      <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.history') }}">{{ stringlang('History', 'Sejarah') }}</a>
                      <div class="img-menu img-menu-3">
                        <img src="{{ asset('assets/img/ipo-menu.png') }}" alt="">
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="img-menu-drop" id="menu-img-1">
                  <img class="{{ Request::segment(2) == 'indonesia-branch' ? 'd-none': Request::segment(2) == 'system-ever' ? 'd-none': Request::segment(2) == 'history' ? 'd-none':''}}" src="{{ asset('assets/img/Group656.png') }}" alt="">
                </div>
              </div>
            </li>
            <li id="solutions" class="dropdown-header ">
              <a href="{{ route('get.pages.solutions.accounting_management_systems') }}" class="{{ Request::segment(1) == 'solutions' ? 'active':'' }}">{{ stringlang('Solution', 'Solusi') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header dropbaru py-4 px-4">
                <!-- <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div> -->
                <div class="isimenu isibaru">
                  <a href="{{ route('get.pages.solutions.accounting_management_systems') }}" class="itembaru {{ Request::segment(2) == 'accounting-management-systems' ? 'active':'' }}">
                    {{ stringlang('AccounTax', 'AccounTax') }}

                  </a>
                  <a href="{{ route('get.pages.solutions.bms') }}" class="itembaru {{ Request::segment(2) == 'bms' ? 'active':'' }}">
                    {{ stringlang('Business Management System (BMS)', ' Business Management System (BMS)') }}
                  </a>
                  <a href="{{ route('get.pages.solutions.i5_trading') }}" class="itembaru {{ Request::segment(2) == 'i5-trading' ? 'active':'' }}">
                    {{ stringlang('ERP Trading & Distribution', ' ERP Trading & Distribution') }}
                  </a>
                  <a href="{{ route('get.pages.solutions.i7_manufacture') }}" class="itembaru {{ Request::segment(2) == 'i7-manufacture' ? 'active':'' }}">
                    {{ stringlang('ERP Manufacturing', ' ERP Manufacturing') }}
                  </a>
                </div>
                <div class="sampingbaru">
                  <a href="{{ route('get.pages.solutions.accounting_management_systems') }}" class=" ">
                    <img src="{{ asset('assets/fl/home-grid-accounttax.png')}}" alt="" class=" ">
                    <div class="fxc">
                      <strong>{{ stringlang('AccounTax', 'AccounTax') }}</strong>
                      <p class="">
                        {{ stringlang('Integrated Accounting and Tax Application for Easier Recording and Reporting','Aplikasi Akuntansi dan Pajak Terintegrasi untuk Pencatatan dan Pelaporan Lebih Mudah') }}
                      </p>
                      <span>{{ stringlang('Read more', 'Selengkapnya') }} <img src="{{ asset('assets/fl/more.png')}}" alt=""></span>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li id="service" class="dropdown-header">
              <a href="{{ route('get.pages.services.feature') }}" class="{{ Request::segment(1) == 'service' ? 'active':'' }}">{{ stringlang('Service', 'Layanan') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header py-4 px-4">
                <div class="segitiga">
                  <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                </div>
                <div class="isimenu pl-0 pr-4">
                  <ul class="list-unstyled menu-drop">
                    <li>{{ stringlang('Service', 'Layanan') }}</li>
                    <li class="{{ Request::segment(2) == 'feature' ? 'active':'' }}">
                      <a onclick="imgControl('3')" href="{{ route('get.pages.services.feature') }}">{{ stringlang('SystemEver Feature', 'Fitur SystemEver') }}</a>
                      <div class="img-menu img-menu-1">
                        <img src="{{ asset('assets/img/service1.png') }}" alt="">
                      </div>
                    </li>
                    {{-- <li class="{{ Request::segment(2) == 'customer-industry' ? 'active':'' }}">
                    <a onclick="imgControl('3')" href="{{ route('get.pages.services.customer_industry') }}">{{ stringlang('Customer &  Industry', 'Pelanggan & Industri') }}</a>
                    <div class="img-menu img-menu-3">
                      <img src="{{ asset('assets/img/service1.png') }}" alt="">
                    </div>
            </li> --}}
          </ul>
        </div>
        <div class="img-menu-drop" id="menu-img-3">
          <img class="{{ Request::segment(2) == 'feature' ? 'd-none': Request::segment(2) == 'quality-security' ? 'd-none': Request::segment(2) == 'customer-industry' ? 'd-none':''}}" src="{{ asset('assets/img/service1.png') }}" alt="">
        </div>
      </div>
      </li>
      <!-- <li id="support" class="dropdown-header">
              <a href="{{ route('get.pages.support.video') }}" class="{{ Request::segment(1) == 'support' ? 'active':'' }}">{{ stringlang('Support', 'Dukungan') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
              <div class="dropdown-menu-header py-4 px-4 h-auto">
                  <div class="segitiga">
                    <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                  </div>
                  <div class="isimenu pl-0 pr-4">
                    <ul class="list-unstyled menu-drop">
                      <li>{{ stringlang('Support', 'Dukungan') }}</li>
                      <li class="{{ Request::segment(2) == 'video' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.video') }}">{{ stringlang('Tutorial Video', 'Video Tutorial') }}</a>
                        <div class="img-menu img-menu-1">
                          <img src="{{ asset('assets/img/Group473.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(2) == 'user-manual' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.user_manual') }}">{{ stringlang('User Manual', 'Panduan Pengguna') }}</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(2) == 'support-guide' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.support_guide') }}">{{ stringlang('Support Guide', 'Panduan') }}</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(2) == 'quality-security' ? 'active':'' }}">
                        <a onclick="imgControl('3')" href="{{ route('get.pages.support.quality_security') }}">{{ stringlang('Quality / Security', 'Kualitas/Keamanan') }}</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/service1.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(2) == 'faq' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.support') }}">{{ stringlang('FAQ', 'Tanya Jawab') }}</a>
                        <div class="img-menu img-menu-3">
                          <img src="{{ asset('assets/img/Group473.png') }}" alt="">
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="img-menu-drop" id="menu-img-4">
                    <img class="{{ Request::segment(2) == 'video' ? 'd-none': Request::segment(2) == 'video' ? 'd-none': Request::segment(2) == 'faq' ? 'd-none':''}}" src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                  </div>
              </div>
            </li> -->
      <li class="{{ Request::segment(1) == 'pricing' ? 'active':'' }}"><a href="{{ route('get.pages.pricing.accounting_tax') }}">{{ stringlang('Pricing', 'Harga') }}</a></li>
      <li id="article" class="dropdown-header">
        <a href="{{ route('get.pages.article.professional') }}" class="{{ Request::segment(1) == 'business-insight' ? 'active':'' }}">{{ stringlang('Business Insight', 'Business Insight') }} <img src="{{ asset('assets/fl/down.svg') }}" alt="" class="down"> <img src="{{ asset('assets/fl/up.svg') }}" alt="" class="up"></a>
        <div class="dropdown-menu-header py-4 px-4 ">
          <div class="segitiga">
            <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
          </div>
          <div class="isimenu pl-0 pr-4">
            <ul class="list-unstyled menu-drop">
              <li>{{ stringlang('Business Insight', 'Business Insight') }}</li>
              <li class="{{ Request::segment(2) == 'professional' ? 'active':'' }}">
                <a onclick="imgControl('5')" href="{{ route('get.pages.article.professional') }}">{{ stringlang('Professional', 'Professional') }}</a>
                <div class="img-menu img-menu-2">
                  <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                  <div class="arrow-down position-absolute">
                    <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="{{ Request::segment(2) == 'article' ? 'active':'' }}">
                <a onclick="imgControl('5')" href="{{ route('get.pages.article.article') }}">{{ stringlang('General', 'General') }}</a>
                <div class="img-menu img-menu-1">
                  <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                  <div class="arrow-down position-absolute">
                    <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                  </div>
                </div>
              </li>
              <li class="{{ Request::segment(2) == 'news' ? 'active':'' }}">
                <a onclick="imgControl('5')" href="{{ route('get.pages.article.news') }}">{{ stringlang('News', 'Berita') }}</a>
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
      <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @else Menjadi Mitra @endif</a>
      <a href="{{ route('get.contact') }}" class="fill">@if (activelang() == "EN") Free Demo @else Demo Gratis @endif</a>
    </div>
  </div>
  </div>
  </div>
  <div class="section-menu d-lg-none d-md-block d-sm-block d-block">
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
            <a href="{{ route('get.pages.join_partnership') }}" class="clear">@if (activelang() == "EN") Become Partner @else Menjadi Mitra @endif</a>
            <a href="{{ route('get.contact') }}" class="fill">@if (activelang() == "EN") Free Demo @else Demo Gratis @endif</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>