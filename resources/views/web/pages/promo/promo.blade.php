@extends('web/layouts/main')

@section('custom_css')

@endsection

@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - Promo") }}</title>
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
    @include('web/includes/breadcrumbs')
    <section class="section-article pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-9 title-pages">
                    <h1>Promo</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 overflow-hide">
                    <div class="box-nav-tab">
                        <ul class="nav nav-tabs nav-tabs-article border-bottom-0 mb-lg-5 mb-md-5 mb-3" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == "all" ? 'active' : '' }}" id="menu-tab-all" href="{{ route('get.promo', "all") }}">All</a>
                            </li>
                            @foreach ($cat as $k => $v)
                            <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == slug($v->name . "-" . $v->id) ? 'active' : '' }}" id="menu-tab-{{$k}}" href="{{ route('get.promo', slug($v->name) . "-" . $v->id) }}">{{$v->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active">
                            <div class="row row-min-7 owl-article owl-article-list">
                                @foreach($promo as $v)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="item mb-3 mt-3">
                                        <a href="{{ route("get.promo.detail", slug($v->title . "-". $v->id)) }}">
                                            <img src="{{ uri($v->featured_image) }}" class="w-100" alt="">
                                            <div class="title-article-item pt-3 px-3 pb-3">
                                                <ul class="list-unstyled category-date-article d-flex mb-2">
                                                    @if (activelang() == "ID")
                                                    <li class="category">Periode Promo :</li>
                                                    @else 
                                                    <li class="category">Promo Period :</li>
                                                    @endif
                                                    <li>{{ dateformatsimple($v->period_start) }} - {{ dateformatsimple($v->period_end) }}</li>
                                                </ul>
                                                <h4>{{$v->title}}</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('web/includes/pagination', ['pagination' => $promo])
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