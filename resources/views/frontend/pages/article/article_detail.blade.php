@extends('systemever/layouts/main')

@section('custom_css')
<style>
.section-detail-article .desc-detail-article .tags li a {
    width: auto !important;
}
.desc-detail-article p span {
    font-family: "Open Sans", sans-serif !important;
}
</style>
@endsection
@section('content')
<section class="py-5 d-lg-block d-md-block d-sm-none d-none">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-12 breadcrumbs">
                <ul class="list-unstyled mb-0">
                    <li><i class="fa fa-angle-left mr-0"></i> <a href="javascript:history.back()">{{ stringlang('Back', 'Kembali') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="title-section-article d-lg-none d-md-none d-sm-block d-block mb-lg-4 mb-md-4 mb-3 mt-lg-4 mt-md-4 mt-3">
                <h3>{{ stringlang('Article', 'Artikel') }}</h3>
            </div>
            <section class="section-detail-article mb-lg-5 mb-md-5 mb-4">
                <div class="title-detail-article mb-4 row-mb">
                    <img src="{{ uri($data->featured_image) }}" alt="{{$data->title}}">
                    <div class="caption-article-detail px-lg-0 px-md-0 px-sm-3 px-3">
                        <div class="category-article mb-lg-2 mb-md-2 mb-1"><a href="{{ route('get.pages.article.article.search') }}?cat={{ ucfirst($data->category()->get()->pluck("meta_value")[0]) }}">{{ ucfirst($data->category()->get()->pluck("meta_value")[0]) }}</a></div>
                        <h3>{{$data->title}}</h3>
                    </div>
                </div>
                <div class="desc-detail-article">

                    {!! urldecode(base64_decode($data->body)) !!}

                    <ul class="list-unstyled tags d-flex justify-content-start mt-lg-5 mt-md-5 mt-4 mb-lg-5 mb-md-5 mb-4">
                        @foreach($meta as $v)
                        <li><a href="{{ route('get.pages.article.article.search') }}?cat={{$v}}">{{ucfirst($v)}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <ul class="list-unstyled share-article d-flex justify-content-start align-items-center">
                    <li>Share :</li>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('get.pages.article.article_detail', ['slug' => $data->slug])) }}" target="_blank" class="sharer" id="share-fb" ><img src="{{ asset('assets/img/fb-share.svg') }}" alt=""></a></li>
                    <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(route('get.pages.article.article_detail', ['slug' => $data->slug])) }}" target="_blank" class="sharer" id="share-tw"><img src="{{ asset('assets/img/tw-share.svg') }}" alt=""></a></li>
                </ul>
            </section>
           
            <section class="section-article mb-lg-5 mb-md-5 mb-4">
                <div class="title-section-article mb-4">
                    <h3>{{ stringlang('Related Article', 'Artikel Terkait') }}</h3>
                </div>
                <div class="owl-carousel owl-article owl-article-1 owl-theme">
                    @foreach ($related as $v)
                        <div class="item">
                            <div class="content-article listing">
                                <img src="{{ uri($v->featured_image) }}" alt="{{$v->title}}">
                                <div class="box-caption-article d-flex justify-content-center">
                                    <div class="caption-article">
                                        <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($v->id)[0]}}">{{strtoupper(post_tag($v->id)[0])}}</a></div>
                                        <div class="desc-article"><a href="{{route('get.pages.article.article_detail', ['slug' => $v->slug])}}">{{$v->title}}</a></div>
                                        {{-- <div class="time-post-article">17m ago · 5 min read</div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="col-lg-4 pl-4">
            <div class="d-lg-block d-md-block d-sm-none d-none">
                @include('systemever/pages/article/includes/article_list_side')
            </div>
            @include('systemever/pages/article/includes/article_most_view')
        </div>
    </div>
</div>


@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')
<script>
    $('.owl-article-1').owlCarousel({
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
</script>
@endsection