<header>
  <div class="section-demo d-lg-block d-sm-none d-none">
    <div class="container-content">
      <div class="row d-flex align-items-center">
        <div class="col-lg-8">Learn how SystemEver fits perfectly into your remote work trip. <a href="{{ route('frontend.pages.support.video') }}"><b> Learn more.</b></a></div>
        <div class="col-lg-4">
          <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-end">
            <li class="mr-1"><button class="button btn-white-green-demo btn-rounded" data-toggle="modal" data-target="#modal-request-demo">FREE DEMO</button></li>
            <li><a href="{{ route('get.pages.join_partnership') }}"><button class="button btn-white-green-demo btn-rounded">BECOME A PARTNER</button></a></li>
            <li>
              <div class="dropdown dropdown-language">
                <button class="btn d-flex align-items-center" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div id="en"  class="lang active">ENG</div>
                  <div id="in"  class="lang ">IND</div>
                  <i class="fa fa-angle-down ml-2"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-language" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" onclick="select_language('in')" type="button">
                    INDONESIA
                  </button>
                  <button class="dropdown-item" onclick="select_language('en')" type="button">
                    ENGLISH
                  </button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>  
  </div>

  <div class="section-menu d-lg-block d-sm-none d-none">
    <div class="container-content">
      <div class="row">
        <div class="col-lg-3 d-flex align-items-center">
          <div class="logo">
            <a href="{{ route('get.index') }}">
              <img src="{{ asset('assets/img/logo.svg') }}" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-9 d-flex justify-content-end">
          <ul class="mb-0 list-unstyled d-flex justify-content-end align-items-center">
            <li id="about" class="dropdown-header">
              <a href="" class="{{ Request::segment(2) == 'about' ? 'active':'' }}">About</a>
              <div class="dropdown-menu-header py-4 px-4">
                  <div class="segitiga">
                    <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                  </div>
                  <div class="isimenu pl-0 pr-4">
                    <ul class="list-unstyled menu-drop">
                      <li>About </li>
                      <li class="{{ Request::segment(3) == 'indonesia-branch' ? 'active':'' }}" >
                        <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.indonesia_branch') }}">Indonesian Branch</a>
                        <div class="img-menu img-menu-1">
                          <img src="{{ asset('assets/img/Group656.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'system-ever' ? 'active':'' }}">
                        <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.system_ever') }}">SystemEver</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/systemever.jpg') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'history' ? 'active':'' }}">
                        <a onclick="imgControl('1')" href="{{ route('get.pages.abouts.history') }}">History</a>
                        <div class="img-menu img-menu-3">
                          <img src="{{ asset('assets/img/ipo-menu.png') }}" alt="">
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="img-menu-drop" id="menu-img-1">
                    <img class="{{ Request::segment(3) == 'indonesia-branch' ? 'd-none': Request::segment(3) == 'system-ever' ? 'd-none': Request::segment(3) == 'history' ? 'd-none':''}}" src="{{ asset('assets/img/Group656.png') }}" alt="">
                  </div>
              </div>
            </li>
            <li id="solutions" class="dropdown-header">
              <a href="" class="{{ Request::segment(2) == 'solutions' ? 'active':'' }}">Solution</a>
              <div class="dropdown-menu-header py-4 px-4">
                  <div class="segitiga">
                    <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                  </div>
                  <div class="isimenu pl-0 pr-4">
                    <ul class="list-unstyled menu-drop">
                      <li>Solutions</li>
                      <li class="{{ Request::segment(3) == 'accounting-management-systems' ? 'active':'' }}">
                        <a onclick="imgControl('2')" href="{{ route('get.pages.solutions.accounting_management_systems') }}">Accounting & Tax Service</a>
                        <div class="img-menu img-menu-1">
                          <img src="{{ asset('assets/img/img-erp1.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'i5-trading' ? 'active':'' }}">
                        <a onclick="imgControl('2')" href="{{ route('get.pages.solutions.i5_trading') }}">Sales / Inventory / Consigning</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/img-erp2.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'i7-manufacture' ? 'active':'' }}">
                        <a onclick="imgControl('2')" href="{{ route('get.pages.solutions.i7_manufacture') }}">Integrated Manufacturing</a>
                        <div class="img-menu img-menu-3">
                          <img src="{{ asset('assets/img/two-colleagues-factory.png') }}" alt="">
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="img-menu-drop" id="menu-img-2">
                    <img class="{{ Request::segment(3) == 'accounting-management-systems' ? 'd-none': Request::segment(3) == 'i5-trading' ? 'd-none': Request::segment(3) == 'i7-manufacture' ? 'd-none':''}}" src="{{ asset('assets/img/img-erp1.png') }}" alt="">
                  </div>
              </div>
            </li>
            <li id="service" class="dropdown-header">
              <a href="" class="{{ Request::segment(2) == 'service' ? 'active':'' }}">Service</a>
              <div class="dropdown-menu-header py-4 px-4">
                  <div class="segitiga">
                    <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                  </div>
                  <div class="isimenu pl-0 pr-4">
                    <ul class="list-unstyled menu-drop">
                      <li>Service</li>
                      <li class="{{ Request::segment(3) == 'feature' ? 'active':'' }}">
                        <a onclick="imgControl('3')" href="{{ route('get.pages.services.feature') }}">SystemEver Feature</a>
                        <div class="img-menu img-menu-1">
                          <img src="{{ asset('assets/img/service1.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'quality-security' ? 'active':'' }}">
                        <a onclick="imgControl('3')" href="{{ route('get.pages.support.quality_security') }}">{{ stringlang('Quality / Security', 'Kualitas / Keamanan') }}</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/service1.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'customer-industry' ? 'active':'' }}">
                        <a onclick="imgControl('3')" href="{{ route('get.pages.services.customer_industry') }}">Customer &  Industry</a>
                        <div class="img-menu img-menu-3">
                          <img src="{{ asset('assets/img/service1.png') }}" alt="">
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="img-menu-drop" id="menu-img-3">
                    <img class="{{ Request::segment(3) == 'feature' ? 'd-none': Request::segment(3) == 'quality-security' ? 'd-none': Request::segment(3) == 'customer-industry' ? 'd-none':''}}" src="{{ asset('assets/img/service1.png') }}" alt="">
                  </div>
              </div>
            </li>
            <li id="support" class="dropdown-header">
              <a href="" class="{{ Request::segment(2) == 'support' ? 'active':'' }}">Support</a>
              <div class="dropdown-menu-header py-4 px-4">
                  <div class="segitiga">
                    <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                  </div>
                  <div class="isimenu pl-0 pr-4">
                    <ul class="list-unstyled menu-drop">
                      <li>Support</li>
                      <li class="{{ Request::segment(3) == 'video' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.video') }}">Tutorial Video</a>
                        <div class="img-menu img-menu-1">
                          <img src="{{ asset('assets/img/Group473.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'support-guide' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.support_guide') }}">Support Guide</a>
                        <div class="img-menu img-menu-2">
                          <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'faq' ? 'active':'' }}">
                        <a onclick="imgControl('4')" href="{{ route('get.pages.support.support') }}">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a>
                        <div class="img-menu img-menu-3">
                          <img src="{{ asset('assets/img/Group473.png') }}" alt="">
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="img-menu-drop" id="menu-img-4">
                    <img class="{{ Request::segment(3) == 'video' ? 'd-none': Request::segment(3) == 'video' ? 'd-none': Request::segment(3) == 'faq' ? 'd-none':''}}" src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                  </div>
              </div>
            </li>
            <li class="{{ Request::segment(2) == 'pricing' ? 'active':'' }}"><a href="{{ route('get.pages.pricing.integrated_erp') }}">Pricing</a></li>
            <li id="article" class="dropdown-header">
              <a href="" class="{{ Request::segment(2) == 'business-insight' ? 'active':'' }}">Business Insight</a>
              <div class="dropdown-menu-header py-4 px-4 ">
                  <div class="segitiga">
                    <img src="{{ asset('assets/img/Rectangle.svg') }}" alt="">
                  </div>
                  <div class="isimenu pl-0 pr-4">
                    <ul class="list-unstyled menu-drop">
                      <li>Business Insight</li>
                      <li class="{{ Request::segment(3) == 'article' ? 'active':'' }}">
                        <a onclick="imgControl('5')" href="{{ route('get.pages.article.article') }}">{{ stringlang('Article', 'Artikel') }}</a>
                        <div class="img-menu img-menu-1">
                          <img src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                          <div class="arrow-down position-absolute">
                            <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                          </div>
                        </div>
                      </li>
                      <li class="{{ Request::segment(3) == 'news' ? 'active':'' }}">
                        <a onclick="imgControl('5')" href="{{ route('get.pages.article.news') }}">News</a>
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
                    <img class="{{ Request::segment(3) == 'article' ? 'd-none': Request::segment(3) == 'news' ? 'd-none':''}}" src="{{ asset('assets/img/img-menu-support.png') }}" alt="">
                    <div class="arrow-down position-absolute {{ Request::segment(3) == 'article' ? 'd-none': Request::segment(3) == 'news' ? 'd-none':''}}">
                      <a href=""><img src="{{ asset('assets/img/arrow-down.svg') }}" alt=""></a>
                    </div>
                  </div>
              </div>
            </li>
            <li class="ml-4"><a href="" class=" d-flex align-items-center"><img class="wa-header mr-2" src="{{ asset('assets/img/icon-wa-header.svg') }}" alt=""> +621 77799988</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-menu d-lg-none d-md-block d-sm-block d-block">
    <div class="container-content">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center px-lg-3 px-md-3 px-sm-3 px-3">
          <div class="d-flex justify-content-start  align-items-center">
            <button class="hamburger berger-menu hamburger--squeeze js-hamburger" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> 
            <div class="logo">
              <a href="{{ route('get.index') }}">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="">
              </a>
            </div>
          </div>
          <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-end">
            <li><button class="button btn-black-green-demo btn-rounded" data-toggle="modal" data-target="#modal-request-demo">FREE DEMO</button></li>
            <li><a href="{{ url('frontend/join-partnership') }}"><button class="button btn-black-green-demo btn-rounded">BECOME A PARTNER</button></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>