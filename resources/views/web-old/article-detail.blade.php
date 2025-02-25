@extends('web/layouts/main')

@section('custom_css')

@endsection
@section('content')
<div class="bg-gading">
    @include('web/includes/breadcrumbs')
    <section class="section-article pb-5 mb-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-9 title-pages">
                    <h1>{{ stringlang('Article', 'Artikel') }}</h1>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12 banner-about">
                    <img src="{{ uri($article->featured_image) }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-article-item desc-article pt-3 pb-3">
                        <ul class="list-unstyled category-date-article article-banner d-flex mb-2">
                            @foreach ($tag as $v)
                            <li class="category">{{ $v->meta_value }}</li>
                            @endforeach
                            <li><div class="dot">&centerdot;</div></li>
                            <li>{{dateformat($article->created_at)}}</li>
                        </ul>
                        <h3>{{ $article->title }}</h3>
                           
                        {!! $article->body !!}
                       
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <ul class="list-unstyled nav-tabs-article tags-article d-flex justify-content-start">
                        @foreach ($tag as $v)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == slug($v->meta_value) ? 'active' : '' }}" href="{{ route('get.article.category', slug($v->meta_value)) }}">{{ucfirst($v->meta_value)}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled share-article d-flex align-items-center justify-content-start">
                        <li>Share :</li>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}" target="_blank"><img src="{{ asset('assets/img/share-fb.svg') }}" alt=""></a></li>
                        <li><a href="https://twitter.com/intent/tweet?url={{$url}}" target="_blank"><img src="{{ asset('assets/img/share-tw.svg') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-slide-news pb-5"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{ stringlang('Related Article', 'Artikel Terkait') }}</h3>
                </div>
            </div>
            <div class="row  owl-article owl-article-list">
                @foreach($related as $v)
                    <div class="col-lg-4 padding-min-7">
                        @include('web/includes/article-card', $v)
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@endsection

@section('footer')
<div class="bg-gading">
    @include('web/includes/footer')
</div>
@endsection

@section('custom_js')

@endsection