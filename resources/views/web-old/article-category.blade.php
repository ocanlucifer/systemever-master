@extends('web/layouts/main')

@section('custom_css')

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
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-tabs-article border-bottom-0 mb-5" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="menu-tab-all" href="{{ route('get.article') }}">All</a>
                        </li>
                        @foreach ($article_tags as $k => $v)
                        <li class="nav-item">
                          <a class="nav-link {{ Request::segment(2) == slug($v->title) ? 'active' : '' }}" id="menu-tab-{{$k}}" href="{{ route('get.article.category', slug($v->title)) }}">{{$v->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="row owl-article">                    
                        @foreach($articles as $v)
                        <div class="col-lg-4 padding-min-7">
                            @include('web/includes/article-card', $v)
                        </div>
                        @endforeach
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

    $("#sort").change(function(){
        window.location = "?sort=" + $(this).val();
    });
</script>
@endsection