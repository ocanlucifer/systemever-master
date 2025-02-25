@extends('web/layouts/main')

@section('custom_css')

@endsection


@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - Article") }}</title>
    @if (!empty($seo->description))
    <meta name="description" content="{{ $seo->description }}" itemprop="description" />
    @endif
    @if (!empty($seo->keyword))
    <meta name="keywords" content="{{ $seo->keyword }}" itemprop="keywords" />
    @endif
    @if (!empty($seo->title))
    <meta property="og:title" content="{{$seo->title}}" />
    @endif
    <meta property="og:image" content="{{ asset("assets/img/logo.png") }}" />
    @if (!empty($seo->description))
    <meta property="og:description" content="{{ $seo->description }}" />
    @endif
    <meta property="og:url" content="{{ $url }}" />
@endsection


@section('content')
<div class="bg-gading">
    @include('frontend/includes/breadcrumbs')
    <section class="section-article pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 title-pages">
                    <h1>{{ stringlang('Article', 'Artikel') }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 table-responsive">
                    <ul class="nav nav-tabs nav-tabs-article border-bottom-0 mb-5" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="menu-tab-all" href="{{ route('get.article') }}">All</a>
                        </li>
                        @foreach ($article_tags as $k => $v)
                        <li class="nav-item">
                          <a class="nav-link" id="menu-tab-{{$k}}" href="{{ route('get.article.category', slug($v->title)) }}">{{$v->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div>
                        <div>
                            <div class="row" id="main-top-article">
                                <div class="col-12 col-sm-12 col-md-8 box-banner-article">
                                    <a href="{{ route('get.article.detail', slug($article_lates->title . "-" . $article_lates->id)) }}">
                                        <img src="{{ uri($article_lates->featured_image) }}" class="w-100 s-rounded" alt="{{$article_lates->title}}">
                                    </a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="">
                                        <div class="title-article-item pt-3 px-3 pb-3">
                                            <ul class="list-unstyled category-date-article article-banner d-flex mb-2">
                                                @if (!empty($article_lates->tag))
                                                <li class="category"><a href="{{ route('get.article.category', $article_lates->tag->meta_value) }}">Culinary</a></li>
                                                <li><div class="dot">&centerdot;</div></li>
                                                @endif
                                                <li>{{dateformatsimple($article_lates->created_at)}}</li>
                                            </ul>
                                           <a href="{{ route('get.article.detail', slug($article_lates->title . "-" . $article_lates->id)) }}"><h3>{{$article_lates->title}}</h3></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="section-slide-news">
                                        <h3 class="mt-4">Berita Terpopuler</h3>
                                        <div class="row">
                                            <div class="owl-carousel owl-article news-populer owl-article-list owl-theme ">
                                                @foreach($article_popular as $v)
                                                    <div class="item mb-3 mt-3">
                                                    @include("web/includes/article-card", $v)
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
        
                                    @foreach ($article_custom_panel as $panel)
                                    <div class="section-slide-news">
                                        <h3>{{$panel['title']}}</h3>
                                        <div class="row">
                                            <div class="owl-carousel owl-article inpire-article owl-article-list owl-theme ">
                                                @if (!empty($panel['data']))
                                                    @foreach ($panel['data'] as $v)
                                                        <div class="item mb-3 mt-3">
                                                        @include("web/includes/article-card", $v)
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>


                            @foreach ($article_tags as $k => $tag)
                                @php $cat_articles = $article_by_tags(slug($tag->title)); @endphp
                                @if (!empty($cat_articles) && count($cat_articles) > 0)
                                <div class="section-double-news section-slide-news mb-lg-5 mb-md-5 mb-sm-2 mb-2">
                                    <h3>{{ $tag->title }}</h3>
                                    <div class="row">
                                        @foreach ($cat_articles as $v)
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="bg-white mb-3">
                                                <div class="media box-double-article align-items-center">
                                                    <a href="{{ route("get.article.detail", slug($v->title . "-" . $v->id)) }}">
                                                        <img src="{{ uri($v->featured_image) }}" alt="" class="">
                                                    </a>
                                                    <div class="media-body px-lg-4 px-md-4 px-sm-3 px-3 d-flex justify-content-center align-items-center">
                                                        <div class="title-article-item article-double pt-lg-3 pt-md-0 pt-sm-0 px-lg-2 px-md-2 px-0 pb-2">
                                                            <ul class="list-unstyled category-date-article d-flex mb-lg-2 mb-md-4 mb-sm-4 mb-2">
                                                                @if (!empty($v->tag))
                                                                <li class="category">{{ucfirst($v->tag->meta_value)}}</li>
                                                                <li><div class="dot">&centerdot;</div></li>
                                                                @endif
                                                                <li>{{ dateformatsimple($v->created_at) }}</li>
                                                            </ul>
                                                        <a href="{{ route("get.article.detail", slug($v->title . "-" . $v->id)) }}"><h4>{{ $v->title }}</h4></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>
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
<script>
    $('.news-populer').owlCarousel({
        loop:true,
        margin:5,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                stagePadding: 70,
                nav:false,
                margin:15,
                items:1
            },
            600:{
                stagePadding: 70,
                nav:false,
                margin:15,
                items:1
            },
            1000:{
                items:3
            }
        }
    })
    $('.inpire-article').owlCarousel({
        loop:true,
        margin:5,
        nav:false,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                stagePadding: 70,
                nav:false,
                margin:15,
                items:1
            },
            600:{
                stagePadding: 70,
                nav:false,
                margin:15,
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $(".filter-article").select2({
        placeholder: "Sort By",
        minimumResultsForSearch: -1
    });
</script>
@endsection