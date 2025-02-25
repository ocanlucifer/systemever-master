@extends('systemever/pages/article/layout_article', [
    'spesifice_page_seo' => 'About SystemEver ' . activelang()
])

@section('content_article')
{{-- <div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <section class="section-article mb-lg-5 mb-md-5 mb-3">
                    <div class="title-section-article mb-lg-4 mb-md-4 mb-3 mt-lg-4 mt-md-4 mt-3">
                        <h3>{{ stringlang('Professional', 'Professional') }} </h3>
                    </div>
                    <div class="row d-lg-flex d-md-flex">
                        @foreach($article as $v)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="content-article latest">
                                <img src="{{ (uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
                                <div class="box-caption-article d-flex justify-content-center">
                                    <div class="caption-article">
                                        <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($v->id)[0]}}">{{strtoupper(post_tag($v->id)[0])}}</a></div>
                                            <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{$v->title}}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
        @include('systemever/includes/pagination')
    </div>
@endsection
@section('custom_js')
<script>
    var i;
    
    $('.owl-article-highlights').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })

    $('.owl-article-popular').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    
    $('.owl-article-latest').owlCarousel({
        loop:true,
        margin:15,
        nav:false,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })
</script>
@endsection