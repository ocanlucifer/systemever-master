@extends('web/layouts/main')

@section('custom_css')

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
                <div class="col-lg-12">
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
                    <div>
                        <div>
                            <div class="row" id="main-top-article">
                                <div class="col-12 col-sm-12 col-md-8">
                                    <img src="{{ uri($article_lates->featured_image) }}" alt="" class="w-100">
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="">
                                        <div class="title-article-item pt-3 px-3 pb-3">
                                            <ul class="list-unstyled category-date-article article-banner d-flex mb-2">
                                                @if (!empty($article_lates->tag))
                                                <li class="category"><a href="{{ route('get.article.category', $article_lates->tag->meta_value) }}">Culinary</a></li>
                                                <li><div class="dot">&centerdot;</div></li>
                                                @endif
                                                <li>{{dateformat($article_lates->created_at)}}</li>
                                            </ul>
                                           <a href="{{ route('get.article.detail', slug($article_lates->title . "-" . $article_lates->id)) }}"><h3>{{$article_lates->title}}</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-slide-news">
                                <h3 class="mt-4">Berita Terpopuler</h3>
                                <div class="row">
                                    <div class="owl-carousel owl-article news-populer owl-article-list owl-theme ">
                                        @foreach($article_popular as $v)
                                            @include("web/includes/article-card", $v)
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
                                                @include("web/includes/article-card", $v)
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
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
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    $('.inpire-article').owlCarousel({
        loop:true,
        margin:5,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
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