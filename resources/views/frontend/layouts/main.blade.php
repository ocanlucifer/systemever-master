<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend/includes/head')
        <title>SystemEver</title>
        @yield('custom_css')
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    </head>
    <body>
        @include('frontend/includes/header')
        @include('frontend/includes/sidebar')
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
            @yield('footer')
            @include('frontend/includes/modals/partner_form')
            @include('frontend/includes/modals/request_demo')
            @include('frontend/includes/modals/contact_us')
            @include('frontend/includes/modals/download_form')
        </div>
        @include('frontend/includes/script')
        @yield('custom_js')
        @yield('formscript')
        @yield('modal_js')
    </body>
</html>