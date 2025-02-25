<footer>
    <div class="container">
        <div class="row mb-4 mx-lg-0 mx-1">
            <div class="col-lg-8 col-md-6 px-4 border-bottom-dashed">
                <div class="logo-footer pl-2 mb-3">
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
                    <div class="col-lg-4 col-md-6 pl-lg-5 pl-4 pb-4">
                        <ul class="list-unstyled">
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/icon-map.svg') }}" alt="">
                                <div class="media-body">
                                    <a href="">  
                                            <b>PT Agrinesia Raya</b><br/>
                                        Sleman - 55282, Indonesia
                                    </a>
                                </div>
                            </li>
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/icon-phone.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href=""> 0811 1500 625</a>
                                </div>
                            </li>
                            <li class="media media-footer">
                                <img class="mr-3" src="{{ asset('assets/img/icon-envelope.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <a href="">consumer.care@bakpiakukustugu.com </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-5 pb-4 pl-lg-5 pl-4">
                        <ul class="list-unstyled menu-footer float-left w-100 ">
                            <li><a href="">About</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">Promo</a></li>
                            <li><a href="">{{ stringlang('Article', 'Artikel') }}</a></li>
                            <li><a href="">Store</a></li>
                            <li><a href="">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 pl-lg-4  pl-2 pr-lg-5 pr-md-0 pr-5 d-flex justify-content-lg-end justify-content-md-start justify-content-start">
                        <ul class="list-unstyled sosmed">
                            <li><a href=""><img src="{{ asset('assets/img/fb.svg') }}" alt=""></a></li>
                            <li><a href=""><img src="{{ asset('assets/img/ig.svg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-4 d-lg-flex d-md-flex d-none">
            <div class="col-lg-6 px-4">
                <div class="copyright">Copyright 2021 © PT Agrinesia Raya</div>
            </div>
            <div class="col-lg-6 px-4 d-flex justify-content-end">
                <ul class="list-unstyled term-condition-menu d-flex">
                    <li><a href="">Terms & conditions</a></li>
                    <li><div class="dot">&centerdot;</div></li>
                    <li><a href="">Privacy plicy</a></li>
                </ul>
            </div>
        </div>
        <div class="row pb-4 d-flex d-md-none d-lg-none mx-lg-0 mx-1">
            <div class="col-lg-6 col-12 px-3 pb-3 mb-3 d-flex justify-content-start border-bottom-dashed">
                <ul class="list-unstyled term-condition-menu d-flex px-1">
                    <li><a href="">Terms & conditions</a></li>
                    <li><div class="dot">&centerdot;</div></li>
                    <li><a href="">Privacy plicy</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-12 px-4">
                <div class="copyright">Copyright 2021 © PT Agrinesia Raya</div>
            </div>
            
        </div>
    </div>
</footer>