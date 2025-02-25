<div class="sidebar">
    <div class="box-menu-sidebar">
        <ul class="list-unstyled px-2">
            <li><a class=" {{ Request::segment(1)=='about' ? 'active':'' }}" href="{{ route("get.about") }}">About</a></li>
            <li><a class=" {{ Request::segment(1)=='product' ? 'active':'' }}" href="{{ route("get.product") }}">Products</a></li>
            <li><a class=" {{ Request::segment(1)=='article' ? 'active':'' }}" href="{{ route("get.article") }}">{{ stringlang('Article', 'Artikel') }}</a></li>
            <li><a class=" {{ Request::segment(1)=='store' ? 'active':'' }}" href="{{ route("get.store") }}">Store</a></li>
            <li><a class=" {{ Request::segment(1)=='promo' ? 'active':'' }}" href="{{ route("get.promo", "all") }}">Promo</a></li>
            <li><a class=" {{ Request::segment(1)=='faq' ? 'active':'' }}" href="{{ route("get.faq") }}">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a></li>
            <li>
                <div class="dropdown dropdown-language">
                    <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div id="EN-mobile"  class="lang {{ activelang() == "ID" ? 'active' : '' }}">EN</div>
                      <div id="ID-mobile"  class="lang {{ activelang() == "EN" ? 'active' : '' }}">IN</div>
                      <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" onclick="select_language('ID')" type="button">
                        Indonesia
                        {{-- <img src="{{ asset('assets/img/ind.svg') }}" alt="IND"> --}}
                      </button>
                      <button class="dropdown-item" onclick="select_language('EN')" type="button">
                        English
                        {{-- <img src="{{ asset('assets/img/en.svg') }}" alt="ENG"> --}}
                      </button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="backdrop"></div>