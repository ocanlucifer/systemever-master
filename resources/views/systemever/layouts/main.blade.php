<!DOCTYPE html>
<html lang="en">
    <head>
        {!! base64_decode(setting('General Header Script'))!!}
        {!! !empty($spesifice_page_seo) ? base64_decode(setting($spesifice_page_seo)) : '' !!}
        @include('systemever/includes/articleseo', ["article_seo_meta" => $article_seo_meta])
        @include('systemever/includes/head')
        {{-- {{ dd($article_seo_meta) }} --}}
        <title>{{ !empty($article_seo_meta) ? '' . $article_seo_meta['title'] : 'SystemEver ' }}</title>
        @yield('custom_css')
        <style>
            .section-menu {
                /* background-color: #D4F1E4; */
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Tambahkan drop shadow */
            }
        </style>
        <script src="//unpkg.com/alpinejs" defer></script>
        <link href="{{ asset('assets/css/main.css?20220609') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/newcode.css?20220609') }}" rel="stylesheet" />
        <!-- <link href="{{ asset('assets/fl/windi.css?20220609') }}" rel="stylesheet" /> -->
    </head>
    <body>
        @include('systemever/includes/header')
        @include('systemever/includes/sidebar')
        <div class="wrapper">
            <div class="page-content">
                @yield('content')
                <!-- <div class="box-cart-wa">
                    <div class="item-box d-flex justify-content-end">
                        <a href="https://wa.me/628119717708?text=Hello, I want to know more about SystemEver">
                            <img class="wa" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="">
                        </a>
                    </div>
                </div> -->
            </div>
            @yield('footer')
            @include('systemever/includes/modals/partner_form')
            @include('systemever/includes/modals/request_demo')
            @include('systemever/includes/modals/contact_us')
            @include('systemever/includes/modals/download_form')
        </div>
        @include('systemever/includes/script')
        @yield('custom_js')
        @include('systemever.includes.modals.notice_sticky')
        @yield('modal_js_contact')
        @yield('modal_js_download')
        @yield('modal_js_partner')
        @yield('modal_js_quotation')
        @yield('modal_js_demo')
        {!! base64_decode(setting('General Footer Script'))!!}
        <!-- </body></html> -->
    </body>
</html>
