<header style="background-image: url('{{ asset("assets/img/bg-menu.png") }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-md-flex d-sm-none d-none justify-content-center">
                <ul class="list-unstyled menu-header py-3">
                    <li><a class="menu {{ Request::segment(1)=='about' ? 'active':'' }}" href="{{ route("get.about") }}">About</a></li>
                    <li><a class="menu {{ Request::segment(1)=='product' ? 'active':'' }}" href="{{ route("get.product") }}">Products</a></li>
                    <li><a class="menu {{ Request::segment(1)=='article' ? 'active':'' }}" href="{{ route("get.article") }}">{{ stringlang('Article', 'Artikel') }}</a></li>
                    <li><a href="{{ route("get.home") }}"><img class="logo" src="{{ asset("assets/img/logo.svg") }}" alt="Logo"></a></li>
                    <li><a class="menu {{ Request::segment(1)=='store' ? 'active':'' }}" href="{{ route("get.store") }}">Store</a></li>
                    <li><a class="menu {{ Request::segment(1)=='promo' ? 'active':'' }}" href="{{ route("get.promo") }}">Promo</a></li>
                    <li><a class="menu {{ Request::segment(1)=='faq' ? 'active':'' }}" href="{{ route("get.faq") }}">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a></li>
                    <li class="ml-3">
                      <div class="dropdown dropdown-language">
                        <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div id="en"  class="lang active">EN</div>
                          <div id="in"  class="lang ">IN</div>
                          <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" onclick="select_language('in')" type="button">
                            INDONESIA
                            {{-- <img src="{{ asset('assets/img/ind.svg') }}" alt="IND"> --}}
                          </button>
                          <button class="dropdown-item" onclick="select_language('en')" type="button">
                            ENGLISH
                            {{-- <img src="{{ asset('assets/img/en.svg') }}" alt="ENG"> --}}
                          </button>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 position-relative d-md-none d-flex justify-content-center align-items-center pt-3 pb-4">
      <button class="hamburger berger-menu hamburger--squeeze js-hamburger" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button> 
      <div class="logo-mobile">
        <a href="{{ route('get.index') }}"><img class="logo" src="{{ asset("assets/img/logo.svg") }}" alt="Logo"></a>
      </div>
    </div>
</header>