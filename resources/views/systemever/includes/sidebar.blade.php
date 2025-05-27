<div class="sidebar">
  <div class="box-menu-sidebar accordion pt-2" id="accordionMenu">
      <ul class="list-unstyled">
          <li>
            <div class="card  d-block">
              <a href="{{ route('get.index') }}" class="d-inline-block">
                <div class="card-header border-bottom-0 pb-2">
                  {{ stringlang("Home", "Beranda") }}
                </div>
              </a>
              <button class="close-sidebar"><img src="{{ asset('assets/img/close-sidebar.svg') }}" alt=""></button>
            </div>
          </li>
          <li>
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-about" aria-expanded="true" aria-controls="collapse-about">
                <div class="card-header">
                  {{ stringlang("About", "Tentang Kami", "회사소개") }} <span class="arrow"><i class="fa fa-angle-down"></i></span>
                </div>
              </a>
              <div id="collapse-about" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li> <a href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang('Indonesian Branch', 'Kantor Cabang Indonesia', '인도네시아 법인') }}</a></li>
                    <li> <a href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a></li>
                    <li> <a href="{{ route('get.pages.abouts.history') }}">{{ stringlang('History', 'Sejarah', '주요 연혁') }}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-solution" aria-expanded="true" aria-controls="collapse-solution">
                <div class="card-header">
                  {{ stringlang('Solution', 'Solusi','솔루션') }} <span class="arrow"><i class="fa fa-angle-down"></i></span>
                </div>
              </a>
              <div id="collapse-solution" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li> <a href="{{ route('get.pages.solutions.accounting_management_systems') }}">{{ stringlang('SystemEver AccounTax ', 'SystemEver AccounTax ') }}</a></li>
                    <!-- <li> <a href="{{ route('get.pages.solutions.bms') }}">{{ stringlang('Business Management System (BMS)', ' Business Management System (BMS)') }}</a></li> -->
                    <li> <a href="{{ route('get.pages.solutions.elearning') }}" ><i class="fa fa-angle-right"></i> {{ stringlang('AccounTax E-Learning', ' AccounTax E-Learning') }}</a></li>
                    <li> <a href="{{ route('get.pages.solutions.i5_trading') }}">{{ stringlang('SystemEver Distribution ERP', ' SystemEver Distribution ERP', 'SystemEver 유통 ERP') }}</a></li>
                    <li> <a href="{{ route('get.pages.solutions.i7_manufacture') }}">{{ stringlang('SystemEver Manufacture ERP', ' SystemEver Manufacture ERP', 'SystemEver 제조 ERP') }}</a></li>
                    {{-- <li> <a href="{{ route('get.pages.solutions.i7_manufacture') }}">{{ stringlang('Integrated Manufacturing', 'Manufaktur Terintegrasi') }}</a></li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li>
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="{{route('get.pages.performance')}}">
                <div class="card-header">
                    {{ stringlang('Performance Quality', 'Performance Quality','성능 품질') }}
                </div>
              </a>
            </div>
          </li>
          <!-- <li>
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-service" aria-expanded="true" aria-controls="collapse-service">
                <div class="card-header">
                  {{ stringlang('Service', 'Layanan') }} <span class="arrow"><i class="fa fa-angle-down"></i></span>
                </div>
              </a>
              <div id="collapse-service" class="collapse" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li> <a href="{{ route('get.pages.services.feature') }}">{{ stringlang('SystemEver Feature', 'Fitur SystemEver') }}</a></li>
                    {{-- <li> <a href="{{ route('get.pages.services.customer_industry') }}">{{ stringlang('Customer &  Industry', 'Pelanggan & Industri') }}</a></li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-support" aria-expanded="true" aria-controls="collapse-support">
                <div class="card-header">
                  {{ stringlang('Support', 'Dukungan') }} <span class="arrow"><i class="fa fa-angle-down"></i></span>
                </div>
              </a>
              <div id="collapse-support" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li> <a href="{{ route('get.pages.support.video') }}">{{ stringlang('Tutorial Video', 'Video Tutorial') }}</a></li>
                    <li> <a href="{{ route('get.pages.support.user_manual') }}">{{ stringlang('User Manual', 'Panduan Pengguna') }}</a></li>
                    <li> <a href="{{ route('get.pages.support.support_guide') }}">{{ stringlang('Support Guide', 'Panduan') }}</a></li>
                    <li> <a href="{{ route('get.pages.support.support') }}">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a></li>
                    <li> <a href="{{ route('get.pages.support.quality_security') }}">{{ stringlang('Quality / Security', 'Kualitas / Keamanan') }}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="card">
              <a class="{{ Request::segment(2)=='pricing' ? 'active':'' }}" href="{{ route('get.pages.pricing.accounting_tax') }}" style="background-color: transparent;">
                <div class="card-header">
                  {{ stringlang('Pricing', 'Harga') }}
                  {{-- <span class="arrow"><i class="fa fa-angle-down"></i></span> --}}
                </div>
              </a>
              {{-- <div id="collapse-pricing" class="collapse" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li> <a href="{{ route('get.pages.pricing.integrated_erp') }}">{{ stringlang('Integrated ERP', 'ERP Terintegrasi')}}</a></li>
                    <li> <a href="{{ route('get.pages.pricing.accounting_tax') }}">{{ stringlang('Accounting & Tax Consulting Services', 'Layanan Akuntansi & Konsultansi Pajak') }}</a></li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </li> -->
          <li>
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-BI" aria-expanded="true" aria-controls="collapse-BI">
                <div class="card-header">
                    {{ stringlang('Business Insight', 'Business Insight', '인사이트') }}  <span class="arrow"><i class="fa fa-angle-down"></i></span>
                </div>
              </a>
              <div id="collapse-BI" class="collapse" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li> <a href="{{ route('get.pages.article.professional','프로페셔널') }}">{{ stringlang('Professional', 'Professional','프로페셔널') }}</a></li>
                    <li> <a href="{{ route('get.pages.article.article') }}">{{ stringlang('Article', 'Artikel', '일반') }}</a></li>
                    <li> <a href="{{ route('get.pages.article.news') }}">{{ stringlang('News', 'Berita', '뉴스') }}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="language">
            <div class="card">
              <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-lang" aria-expanded="true" aria-controls="collapse-lang">
                <div class="card-header head-language">
                  Language <span class="arrow"><i class="fa fa-angle-down"></i></span><span class="simbol-lang cl-blue float-right">{{ stringlang('EN', 'ID', 'KOR') }} &nbsp;&nbsp;</span>
                </div>
              </a>
              <div id="collapse-lang" class="collapse" data-parent="#accordionMenu">
                <div class="card-body">
                  <ul class="list-unstyled choose-language">
                    <li> <a href="{{seeinindo()}}">Indonesian</a></li>
                    <li> <a href="{{seeineng()}}">English</a></li>
                    <li> <a href="{{seeinkor()}}">Korea</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="call-us">
            <div class="card">
              <div class="card-header border-bottom-0">
                    {{-- <li> <a href="">English</a></li> --}}
                Need Help? <span class="c-blue"><a href="tel:+628119717708">Call Us</a></span>
              </div>
            </div>
          </li>
      </ul>
  </div>
</div>
<div class="backdrop"></div>
