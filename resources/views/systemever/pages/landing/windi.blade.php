<!DOCTYPE html>
<html lang="en">

<head>
    {!! base64_decode(setting('General Header Script')) !!}
    {!! !empty($spesifice_page_seo) ? base64_decode(setting($spesifice_page_seo)) : '' !!}
    @include('systemever/includes/articleseo', ["article_seo_meta" => $article_seo_meta])
    @include('systemever/includes/headwindi')

    <title>{{ !empty($article_seo_meta) ? $article_seo_meta['title'] : 'SystemEver' }}</title>

    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="{{ asset('assets/css/main.css?20220609') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/newcode.css?20220609') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fl/windi.css?20220609') }}" rel="stylesheet" />
    @yield('custom_css')

    <!-- ✅ Google Tag Manager (load GTM only — Analytics & Ads handled inside GTM) -->
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
                height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('systemever/pages/landing/header')

    <div class="wrapper">
        <div class="page-content">
            @yield('content')
        </div>
        @yield('footer')
    </div>

    @include('systemever/includes/script')
    @yield('custom_js')

    {!! base64_decode(setting('General Footer Script')) !!}

    <script>
        AOS.init();
    </script>

    @yield('newsletterjs')
</body>

</html>
