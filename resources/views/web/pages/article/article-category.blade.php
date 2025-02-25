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
                <div class="col-lg-9 title-pages">
                    <h1>{{ stringlang('Article', 'Artikel') }}</h1>
                </div>
                <div class="col-lg-3 filter-sort-article d-flex align-items-center">
                    <select class="filter-article js-states form-control" id="sort">
                        <option value="lates" {{ get('sort') == "lates" ? "selected" : "" }}>{{ stringlang('Latest Article', 'Artikel Terbaru') }}</option>
                        <option value="mostview" {{ get('sort') == "mostview" ? "selected" : "" }}>{{ stringlang('Most View', 'Sering Dilihat') }}</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 table-responsive">
                    <ul class="nav nav-tabs nav-tabs-article border-bottom-0 mb-2" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="menu-tab-all" href="{{ route('get.article') }}">All</a>
                        </li>
                        @foreach ($article_tags as $k => $v)
                        <li class="nav-item">
                          <a class="nav-link {{ Request::segment(2) == slug($v->title) ? 'active' : '' }}" id="menu-tab-{{$k}}" href="{{ route('get.article.category', slug($v->title)) }}">{{$v->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="row owl-articles">                    
                        @foreach($articles as $v)
                        <div class="col-lg-4">
                            <div class="item mb-3 mt-3">
                            @include('web/includes/article-card', $v)
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        @include('web/includes/pagination', ['pagination' => $articles])
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

    $("#sort").change(function(){
        window.location = "?sort=" + $(this).val();
    });
</script>
@endsection