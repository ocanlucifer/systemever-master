@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <section class="section-article mb-lg-5 mb-md-5 mb-3">
                    <div class="title-section-article mb-lg-4 mb-md-4 mb-3 mt-lg-4 mt-md-4 mt-3">
                        <h3>{{ stringlang('Business Insights', 'Business Insight') }}</h3>
                    </div>
                    <div class="content-article highlight">
                        <img src="{{ asset('assets/img/img-article.png') }}" alt="">
                        <div class="box-caption-article d-flex justify-content-center">
                            <div class="caption-article">
                                <div class="category-article"><a href="{{ url('frontend/business-insight/article/category') }}">TECHNOLOGY</a></div>
                                <div class="desc-article"><a href="{{ url('frontend/business-insight/article/detail') }}">How predictive analytics transforms the way marketers work</a></div>
                                <div class="time-post-article">17m ago · 5 min read</div>
                            </div>
                        </div>
                    </div>
                </section>

                @for ($line = 1; $line <= 2; $line++)
                    <section class="section-article mb-lg-5 mb-md-5 mb-4">
                        <div class="title-section-article mb-3">
                            <h3>{{ $line == 1? 'Highlights':'Popular Article' }}</h3>
                            <div class="see-all">
                                <a href="{{ url('frontend/business-insight/article/category') }}">{{ stringlang('see all >', 'lainnya >') }}</a>
                            </div>
                        </div>
                        <div class="owl-carousel owl-article owl-article-{{ $line }} owl-theme">
                            @for ($i = 1; $i < 5; $i++)
                                <div class="item">
                                    <div class="content-article listing">
                                        <img src="{{ asset('assets/img/img-article.png') }}" alt="">
                                        <div class="box-caption-article d-flex justify-content-center">
                                            <div class="caption-article">
                                                <div class="category-article"><a href="{{ url('frontend/business-insight/article/category') }}">TECHNOLOGY</a></div>
                                                <div class="desc-article"><a href="{{ url('frontend/business-insight/article/detail') }}">How predictive analytics transforms the way marketers work</a></div>
                                                <div class="time-post-article">17m ago · 5 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </section>
                @endfor
                <section class="section-article mb-lg-5 mb-md-5 mb-3">
                    <div class="title-section-article mb-3">
                        <h3>{{ stringlang('Latest Article', 'Artikel Terbaru') }}</h3>
                        <div class="see-all">
                            <a href="{{ url('frontend/business-insight/article/category') }}">{{ stringlang('see all >', 'lainnya >') }}</a>
                        </div>
                    </div>
                    <div class="row d-lg-flex d-md-flex d-none ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="content-article latest">
                                <img src="{{ asset('assets/img/img-article.png') }}" alt="">
                                <div class="box-caption-article d-flex justify-content-center">
                                    <div class="caption-article">
                                        <div class="category-article"><a href="{{ url('frontend/business-insight/article/category') }}">TECHNOLOGY</a></div>
                                        <div class="desc-article"><a href="{{ url('frontend/business-insight/article/detail') }}">How predictive analytics transforms the way marketers work</a></div>
                                        <div class="time-post-article">17m ago · 5 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="content-article latest">
                                <img src="{{ asset('assets/img/img-article.png') }}" alt="">
                                <div class="box-caption-article d-flex justify-content-center">
                                    <div class="caption-article">
                                        <div class="category-article"><a href="{{ url('frontend/business-insight/article/category') }}">TECHNOLOGY</a></div>
                                        <div class="desc-article"><a href="{{ url('frontend/business-insight/article/detail') }}">How predictive analytics transforms the way marketers work</a></div>
                                        <div class="time-post-article">17m ago · 5 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel  owl-article owl-article-latest owl-theme d-lg-none d-md-none d-block ">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="item">
                                <div class="content-article latest">
                                    <img src="{{ asset('assets/img/img-article.png') }}" alt="">
                                    <div class="box-caption-article d-flex justify-content-center">
                                        <div class="caption-article">
                                            <div class="category-article"><a href="">TECHNOLOGY</a></div>
                                            <div class="desc-article"><a href="">How predictive analytics transforms the way marketers work</a></div>
                                            <div class="time-post-article">17m ago · 5 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-5rem mb-5">
                <div class="d-lg-block d-md-block d-sm-none d-none">
                    @include('frontend/pages/article/includes/article_list_side')
                </div>
                @include('frontend/pages/article/includes/article_most_view')
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')
<script>
    var i;
    for (i = 1; i <= 2; i++) {
        $('.owl-article-'+i).owlCarousel({
            loop:true,
            margin:15,
            nav:true,
            navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            dots:false,
            responsive:{
                0:{
                    items:2,
                    stagePadding: 20,
                    nav:false,
                    loop:false
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    }
    $('.owl-article-latest').owlCarousel({
        loop:true,
        margin:15,
        nav:false,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:2,
                stagePadding: 20,
                nav:false,
                loop:false
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