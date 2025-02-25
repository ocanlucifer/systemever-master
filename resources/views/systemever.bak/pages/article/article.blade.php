@extends('systemever/pages/article/layout_article', [
    'spesifice_page_seo' => 'Article ' . activelang()
])

@section('custom_css')

@endsection
@section('content_article')
{{-- <div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <section class="section-article mb-lg-5 mb-md-5 mb-3">
                    <div class="title-section-article mb-lg-4 mb-md-4 mb-3 mt-lg-4 mt-md-4 mt-3">
                        <h3>{{ stringlang('Business Insights', 'Business Insight') }}</h3>
                    </div>
                    <div class="content-article highlight">
                        <img src="{{ asset_to_webp(uri($top->main_top_article_en->featured_image)) }}" alt="">
                        <div class="box-caption-article d-flex justify-content-center">
                            <div class="caption-article">
                                <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($top->main_top_article_en->id)[0]}}">{{strtoupper(post_tag($top->main_top_article_en->id)[0])}}</a></div>
                                <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $top->main_top_article_en->slug]) }}">{{$top->main_top_article_en->title}}</a></div>
                            </div>
                        </div>
                    </div>
                </section>

                
                <section class="section-article mb-lg-5 mb-md-5 mb-4">
                    <div class="title-section-article mb-3">
                        <h3>{{ stringlang('Highlights', 'Sorotan') }}</h3>
                        <div class="see-all">
                            <a href="{{ route("get.pages.article.article.mode", ['mode' => 'highlights']) }}">{{ stringlang('see all >', 'lainnya >') }}</a>
                        </div>
                    </div>
                    <div class="owl-carousel owl-article owl-article-highlights owl-theme">
                        @foreach($highlight as $v)
                            <div class="item">
                                <div class="content-article listing">
                                    <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
                                    <div class="box-caption-article d-flex justify-content-center">
                                        <div class="caption-article">
                                            <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($v->id)[0]}}">{{strtoupper(post_tag($v->id)[0])}}</a></div>
                                            <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{$v->title}}</a></div>
                                            {{-- <div class="time-post-article">17m ago · 5 min read</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="section-article mb-lg-5 mb-md-5 mb-4">
                    <div class="title-section-article mb-3">
                        <h3>{{ stringlang('Popular', 'Populer') }}</h3>
                        <div class="see-all">
                            <a href="{{ route("get.pages.article.article.mode", ['mode' => 'popular']) }}">{{ stringlang('see all >', 'lainnya >') }}</a>
                        </div>
                    </div>
                    <div class="owl-carousel owl-article owl-article-popular owl-theme">
                        @foreach($popular as $v)
                            <div class="item">
                                <div class="content-article listing">
                                    <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
                                    <div class="box-caption-article d-flex justify-content-center">
                                        <div class="caption-article">
                                            <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($v->id)[0]}}">{{strtoupper(post_tag($v->id)[0])}}</a></div>
                                            <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{$v->title}}</a></div>
                                            {{-- <div class="time-post-article">17m ago · 5 min read</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="section-article mb-lg-5 mb-md-5 mb-3">
                    <div class="title-section-article mb-3">
                        <h3>{{ stringlang('Latest Article', 'Artikel Terbaru') }}</h3>
                        <div class="see-all">
                            <a href="{{ route("get.pages.article.article.mode", ['mode' => 'lates']) }}">{{ stringlang('see all >', 'lainnya >') }}</a>
                        </div>
                    </div>
                    <div class="row d-lg-flex d-md-flex d-none ">
                        @foreach($lates as $v)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="content-article latest">
                                <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
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
                    <div class="owl-carousel  owl-article owl-article-latest owl-theme d-lg-none d-md-none d-block ">
                        @foreach($lates as $v)
                            <div class="item">
                                <div class="content-article latest">
                                    <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
                                    <div class="box-caption-article d-flex justify-content-center">
                                        <div class="caption-article">
                                            <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($v->id)[0]}}">{{strtoupper(post_tag($v->id)[0])}}</a></div>
                                            <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{$v->title}}</a></div>
                                            {{-- <div class="time-post-article">17m ago · 5 min read</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-5rem mb-5">
                <div class="d-lg-block d-md-block d-sm-none d-none">
                    @include('systemever/pages/article/includes/article_list_side')
                </div>
                @include('systemever/pages/article/includes/article_most_view')
            </div>
        </div>
    </div>
@endsection

{{-- @section('footer')
    @include('systemever/includes/footer')
@endsection --}}

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