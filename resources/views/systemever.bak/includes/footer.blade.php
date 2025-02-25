<footer>
    <div class="container">
        <div class="row mb-lg-4 mx-lg-0 mx-1 mb-3 pt-5">
            <div class="col-lg-12 border-bottom-footer">
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 pl-0 pb-4">
                        <div class="logo-footer pl-0 mb-4">
                            <img class="logo" src="{{ asset('assets/img/logo.svg') }}" alt="Logo SystemEver">
                        </div>
                        <div class="sosmed-link">
                            <ul class="list-unstyled d-flex justify-content-start">
                                <li><a href="https://id.linkedin.com/company/ylwid" target="_blank"><img src="{{ asset('assets/img/linkedin.svg') }}" alt=""></a></li>
                                <li><a href="https://www.youtube.com/channel/UCzadpIiDI1LPCp0RVvBeY8Q" target="_blank"><img src="{{ asset('assets/img/youtube.svg') }}" alt=""></a></li>
                                <li><a href="https://www.instagram.com/systemeverid/" target="_blank"><img src="{{ asset('assets/img/instagram.svg') }}" alt=""></a></li>
                                <li><a href="https://www.facebook.com/systemeverid/" target="_blank"><img src="{{ asset('assets/img/facebook.svg') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 pb-3">
                        <ul class="list-unstyled menu-footer float-left w-100 ">
                            <li><a href="{{ route('get.pages.abouts.indonesia_branch') }}">{{ stringlang('About', 'Tentang Kami') }}</a></li>
                            <li><a href="{{ route('get.pages.support.video') }}">{{ stringlang('Support', 'Dukungan') }}</a></li>
                            <li><a href="{{ route('get.pages.solutions.accounting_management_systems') }}">{{ stringlang('Solution', 'Solusi') }}</a></li>
                            <li><a href="{{ route('get.pages.pricing.integrated_erp') }}">{{ stringlang('Pricing', 'Harga') }}</a></li>
                            <li><a href="{{ route('get.pages.services.feature') }}">{{ stringlang('Service', 'Layanan') }}</a></li>
                            <li><a href="{{ route('get.pages.article.article') }}">{{ stringlang('Business Insights', 'Business Insight') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 pl-lg-4  pl-2 pr-lg-5 pr-md-0 pr-5 d-flex justify-content-lg-end justify-content-md-start justify-content-start">
                        <ul class="list-unstyled">
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/envelope.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <b>Email</b><br/>
                                    <a href="mailto:info@systemever.com"> info@systemever.com </a>
                                </div>
                            </li>
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/icon-wa-footer.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <b>Whatsapp</b>
                                    <br/>
                                    <a href="tel:+628119717708">08119717708</a>
                                </div>
                            </li>
                            <li class="media media-footer mb-3">
                                <img class="mr-3" src="{{ asset('assets/img/icon-map-footer.svg') }}" alt="">
                                <div class="media-body">
                                    <a href="https://g.page/systemever?share" target="_blank">  
                                        <b>{{ stringlang('Address', 'Alamat') }}</b>
                                        <br/>
                                        Menara Jamsostek Tower Selatan lt.12 <br/>
                                        Jl. Jend. Gatot Subroto kav.38<br/>
                                        Jakarta Selatan, 12710
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-4 d-lg-flex d-md-flex d-none">
            <div class="col-12 col-lg-6">
                <div class="copyright">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ uri('assets/img/younglimwon.png') }}" class="w-100">
                        </div>
                        <div class="col-10">
                            <div>Copyright © YoungLimWon Soft Lab Co., Ltd. All rights Reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-right">
                <div class="copyright">
                    <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" target="_blank" class="text-dark">Terms & Conditions</a> | 
                    <a href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}" target="_blank" class="text-dark">Privacy Policy</a>
                </div>
            </div>
        </div>
        
    </div>
</footer>