<footer>
    <div class="container pt-5">
        <div class="row mb-4 mx-lg-0 mx-1">
            <div class="col-lg-8 col-md-6 px-lg-4 px-md-4 px-2 border-bottom-dashed">
                <div class="logo-footer pl-lg-2 pl-md-2 pl-0 mb-3">
                    <img class="logo" src="{{ asset('assets/img/logo.svg') }}" alt="Logo Tugu Jogja">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="img-footer d-md-block d-sm-none d-none">
                    <img src="{{ asset('assets/img/img-footer.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row mb-lg-4 mx-lg-0 mx-1 mb-3 ">
            <div class="col-lg-12 border-bottom-dashed">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 pl-lg-5 pl-2 pb-4">
                        <ul class="list-unstyled">
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/icon-map.svg') }}" alt="">
                                <div class="media-body">
                                    <a>  
                                        <b>{{ setting('MAIN_ADDRESS') }}</b>
                                    </a>
                                </div>
                            </li>
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/icon-phone.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a> {{ setting('MAIN_PHONE') }}</a>
                                </div>
                            </li>
                            <li class="media media-footer">
                                <img class="mr-3" src="{{ asset('assets/img/icon-envelope.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="mailto:{{ setting('MAIN_MAIL') }}">{{ setting('MAIN_MAIL') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-5 pb-3 pl-lg-5 pl-2">
                        <ul class="list-unstyled menu-footer float-left w-100 ">
                            <li><a class=" {{ Request::segment(1)=='about' ? 'active':'' }}" href="{{ route("get.about") }}">About</a></li>
                            <li><a class=" {{ Request::segment(1)=='product' ? 'active':'' }}" href="{{ route("get.product") }}">Products</a></li>
                            <li><a class=" {{ Request::segment(1)=='article' ? 'active':'' }}" href="{{ route("get.article") }}">{{ stringlang('Article', 'Artikel') }}</a></li>
                            <li><a class=" {{ Request::segment(1)=='store' ? 'active':'' }}" href="{{ route("get.store") }}">Store</a></li>
                            <li><a class=" {{ Request::segment(1)=='promo' ? 'active':'' }}" href="{{ route("get.promo", "all") }}">Promo</a></li>
                            <li><a class=" {{ Request::segment(1)=='faq' ? 'active':'' }}" href="{{ route("get.faq") }}">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 pl-lg-4  pl-2 pr-lg-5 pr-md-0 pr-5 d-flex justify-content-lg-end justify-content-md-start justify-content-start">
                        <ul class="list-unstyled sosmed">
                            <li><a href="{{ setting('FACEBOOK_LINK') }}" target="_blank"><img src="{{ asset('assets/img/fb.svg') }}" alt="facebook social media"></a></li>
                            <li><a href="{{ setting('INSTAGRAM_LINK') }}" target="_blank"><img src="{{ asset('assets/img/ig.svg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-4 d-lg-flex d-md-flex d-none">
            <div class="col-lg-6 px-lg-4 px-md-4 px-0">
                <div class="copyright">Copyright 2021 © PT Agrinesia Raya</div>
            </div>
            <div class="col-lg-6 px-4  px-lg-3 px-md-3 px-0 d-flex justify-content-end">
                <ul class="list-unstyled term-condition-menu d-flex">
                    @foreach(legal_page_list() as $k => $v)
                    @if ($k > 0)
                        <li><div class="dot">&centerdot;</div></li>
                    @endif
                    <li><a href="{{ route("get.legal", slug($v->title) . "-" . $v->id) }}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row pb-4 d-flex d-md-none d-lg-none mx-lg-0 mx-1">
            <div class="col-lg-6 col-12 px-lg-3 px-md-3 px-1 pb-3 mb-3 d-flex justify-content-start border-bottom-dashed">
                <ul class="list-unstyled term-condition-menu d-flex px-0">
                    @foreach(legal_page_list() as $k => $v)
                    @if ($k > 0)
                        <li><div class="dot">&centerdot;</div></li>
                    @endif
                    <li><a href="{{ route("get.legal", slug($v->title) . "-" . $v->id) }}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6 col-12 px-lg-4 px-md-4 px-1">
                <div class="copyright px-1">Copyright {{ date("Y")}} © PT Agrinesia Raya</div>
            </div>
            
        </div>
    </div>
</footer>