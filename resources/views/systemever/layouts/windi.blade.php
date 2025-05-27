<!DOCTYPE html>
<html lang="en">

<head>
    {!! base64_decode(setting('General Header Script'))!!}
    {!! !empty($spesifice_page_seo) ? base64_decode(setting($spesifice_page_seo)) : '' !!}
    @include('systemever/includes/articleseo', ["article_seo_meta" => $article_seo_meta])
    @include('systemever/includes/headwindi')
    {{-- {{ dd($article_seo_meta) }} --}}
    <title>{{ !empty($article_seo_meta) ? '' . $article_seo_meta['title'] : 'SystemEver ' }}</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="{{ asset('assets/css/main.css?20220609') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/newcode.css?20220609') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fl/windi.css?20220609') }}" rel="stylesheet" />
    @yield('custom_css')
    <style>
        .abtn:hover{
            color: initial !important;
        }
        .bc {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 19px;
            color: #000000;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 16px;
        }
        .bc a{

        }
        .bc .active {
            color: #009944;
            font-weight: bold;
        }
        .section-menu {
            /* background-color: #D4F1E4; */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Tambahkan drop shadow */
        }

        @media only screen and (max-width: 1024px) {
            .bc{
                margin-top: -16px;
                font-size: 9px;
            gap: 2px;
            }
            .bc img{
                height: 8px;
            }
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y37PHLQ09S"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Y37PHLQ09S');
    </script>
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
    <script>
    AOS.init();
    </script>
    @yield('newsletterjs')
</body>

</html>
