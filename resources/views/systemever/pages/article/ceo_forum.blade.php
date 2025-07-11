@extends('systemever/pages/article/layout_article', [
    'spesifice_page_seo' => 'Article' . activelang()
])
{{-- @extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Home ' . activelang()
]) --}}

@section('content_article')
{{-- @section('content') --}}
{{-- <div class="">
    @include('systemever/includes/breadcrumbs')
</div> --}}
<section class="section-article mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11">
                <div class="title-section-article mb-4 mt-4">
                    <h3>{{ stringlang('CEO Forum', 'CEO Forum', 'CEO Forum') }}</h3>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-11">
                <div class="box-news">
                    @foreach($ceo_forum as $v)
                    <div class="list-news row">
                        <div class="col-12 px-0 d-lg-none d-md-none d-sm-block d-block">
                            <div class="date-news ">{{ $v->lang }}</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-4 px-lg-3 px-md-3 px-0">
                            <div class="thumb-wrapper" style="position: relative; width: 100%; padding-top: 66.66%; overflow: hidden; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                <img src="{{ uri($v->image_url) }}" alt="{{ $v->title }}"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                            <div class="date-news d-lg-block d-md-block d-sm-none d-none">{{ $v->lang }}</div>
                            <div class="title-news-list">
                                <a href="{{ route('get.pages.article.ceo_forum_detail', ['id' => $v->id]) }}" class="d-flex justify-content-between">
                                    <h4>{{ strip_tags($v->slider_title) }}</h4>
                                    <img class="arrow-black" src="{{ asset('assets/img/arrow-right-paging.svg') }}" alt="">
                                    <img class="arrow-green" src="{{ asset('assets/img/down-arrow-green.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 d-lg-block d-md-block d-sm-none d-none desc-list-news">
                                    {{ strip_tags($v->title) }} <br>
                                    {{ strip_tags($v->body) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('systemever/includes/pagination', ['pagination' => $pagination])
    </div>
</section>

@endsection

{{-- @section('footer')
    @include('systemever/includes/footer')
@endsection --}}

@section('custom_js')

@endsection
