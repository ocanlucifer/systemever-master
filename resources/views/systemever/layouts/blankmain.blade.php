<!DOCTYPE html>
<html lang="en">
    <head>
        {!! base64_decode(setting('General Header Script'))!!}
        {!! !empty($spesifice_page_seo) ? base64_decode(setting($spesifice_page_seo)) : '' !!}
        @include('systemever/includes/head')
        <title>SystemEver</title>
        @yield('custom_css')
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="wrapper">
            <div class="page-content">
                @yield('content')
                <div class="box-cart-wa">
                    <div class="item-box d-flex justify-content-end">
                        <a href="https://wa.me/628119717708?text=Hello, I want to know more about SystemEver">
                            <img class="wa" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('systemever/includes/script')
        @yield('custom_js')
        @yield('modal_js_contact')
        @yield('modal_js_download')
        @yield('modal_js_partner')
        @yield('modal_js_quotation')
        @yield('modal_js_demo')
        {!! base64_decode(setting('General Footer Script'))!!}
    </body>
</html>
