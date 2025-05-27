@extends('systemever/layouts/main', ['spesifice_page_seo' => $spesifice_page_seo])

@section('custom_css')

@endsection
@section('content')
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-menu-about pt-lg-5 pt-md-4 pt-3 pb-lg-5 pb-md-4 pb-4">
    <div class="container">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="list-unstyled menu-about d-flex justify-content-center mb-0">
                <li><a class="{{ Request::segment(2) == 'professional' ? 'active':'' }} {{ Request::segment(3) == 'professional' ? 'active':'' }}" href="{{ route('get.pages.article.professional') }}">{{ stringlang("Professional", "Professional", "프로페셔널") }}</a></li>
                <li><a class="{{ Request::segment(2) == 'article' ? 'active':'' }} {{ Request::segment(3) == 'article' ? 'active':'' }}" href="{{ route('get.pages.article.article') }}">{{ stringlang("General", "General", "일반") }} </a></li>
                <li><a class="{{ Request::segment(2) == 'news' ? 'active':'' }} {{ Request::segment(3) == 'news' ? 'active':'' }}" href="{{ route('get.pages.article.news') }}">{{ stringlang("News", "Berita", "뉴스") }} </a></li>
            </ul>
        </div>
    </div>
</section>
@yield('content_article')
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')

@endsection
