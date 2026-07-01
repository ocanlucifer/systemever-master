<!DOCTYPE html>
<html lang="en">

<head>
    {!! base64_decode(setting('General Header Script')) !!}
    @php
        $specificPageSeoHtml = !empty($spesifice_page_seo) ? base64_decode(setting($spesifice_page_seo)) : '';

        if (!empty($social_preview_image)) {
            $specificPageSeoHtml = preg_replace(
                '/<meta\s+(?:property|name)=["\'](?:og:image(?::secure_url|:type|:width|:height)?|twitter:image(?::src)?|twitter:card)["\'][^>]*>\s*/i',
                '',
                $specificPageSeoHtml
            );
        }
    @endphp
    {!! $specificPageSeoHtml !!}
    @if (!empty($article_seo_meta))
        @include('systemever/includes/articleseo', ["article_seo_meta" => $article_seo_meta])
    @endif
    @if (!empty($social_preview_image))
        @php
            $socialPreviewImage = secure_asset($social_preview_image);
        @endphp
        <meta property="og:image" content="{{ $socialPreviewImage }}">
        <meta property="og:image:secure_url" content="{{ $socialPreviewImage }}">
        <meta property="og:image:type" content="{{ $social_preview_image_type ?? 'image/png' }}">
        <meta property="og:image:width" content="{{ $social_preview_image_width ?? '1200' }}">
        <meta property="og:image:height" content="{{ $social_preview_image_height ?? '630' }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="{{ $socialPreviewImage }}">
        <meta name="twitter:image:src" content="{{ $socialPreviewImage }}">
    @endif
    @include('systemever/includes/headwindi')

    <title>{{ !empty($article_seo_meta) ? $article_seo_meta['title'] : 'SystemEver' }}</title>

    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="{{ asset('assets/css/main.css?20220609') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/newcode.css?20220609') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fl/windi.css?20220609') }}" rel="stylesheet" />
    @yield('custom_css')

    <style>
        .abtn:hover {
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
        .bc .active {
            color: #009944;
            font-weight: bold;
        }
        .section-menu {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }
        @media only screen and (max-width: 1024px) {
            .bc {
                margin-top: -16px;
                font-size: 9px;
                gap: 2px;
            }
            .bc img {
                height: 8px;
            }
        }
    </style>

    <!-- ✅ Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MNRFW7MM');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- ✅ Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNRFW7MM"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('systemever/includes/header')
    @include('systemever/includes/sidebar')

    <div class="wrapper" style="min-height:100vh;display:flex;flex-direction:column;">
        <div class="page-content" style="flex:1 0 auto;">
            @yield('content')
            <!-- 
            Example WhatsApp button (for tracking in GTM):
            <div class="box-cart-wa">
                <div class="item-box d-flex justify-content-end">
                    <a href="https://wa.me/628119717708?text=Hello, I want to know more about SystemEver"
                       class="btn-whatsapp">
                        <img class="wa" src="{{ asset('assets/img/whatsapp-icon.png') }}" alt="">
                    </a>
                </div>
            </div>
            -->
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

    {!! base64_decode(setting('General Footer Script')) !!}

    <script>
        AOS.init();
    </script>
    @yield('newsletterjs')
</body>
</html>
