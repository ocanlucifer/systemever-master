<!DOCTYPE html>
<html lang="en">
    <head>        
        @include('web/includes/head')
        @yield('seogo')
        @yield('custom_css')
        <link href="{{ uri('assets/css/main.css') . "?" . date("YmdHis") }}" rel="stylesheet" />
    </head>
    <body>
        @include('web/includes/header')
        @include('web/includes/sidebar')
        <div class="wrapper">
            <div class="page-content">
                @yield('content')
                <div class="box-cart-wa">
                    <div class="item-box">
                        <ul class="list-unstyled d-flex">
                            <li class="d-flex align-items-center justify-content-center pr-0 li-arrow">
                                <button type="button" onclick="toggle_cart()" class="arrow d-flex align-items-center"><i class="fa fa-angle-right"></i></button>
                            </li>
                            <li class="cart d-flex align-items-center"><a onclick="toggle_cart()"><img src="{{ asset('assets/img/cart.svg') }}" alt=""></a></li>
                            <li class="pr-1"><a href="{{ setting('SHOPEE_LINK') }}" target="_blank"><img src="{{ asset('assets/img/shopee-icon.svg') }}" alt=""></a></li>
                            <li class="pl-1"><a href="{{ setting('TOKOPEDIA_LINK') }}" target="_blank"><img src="{{ asset('assets/img/tokped-icon.svg') }}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="item-box d-flex justify-content-end">
                        <a href="{{ setting('WHATSAPP_LINK') }}" target="_blank">
                            <img class="wa" src="{{ asset('assets/img/wa.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            @yield('footer')
        </div>
        @include('web/includes/script')
        @yield('custom_js')
        <!-- </body></html> --> 
    </body>
</html>