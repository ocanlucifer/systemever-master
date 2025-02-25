@extends('web/layouts/main')

@section('custom_css')

@endsection

@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - Legal") }}</title>
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
    <section class="section-faq pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4  col-md-4 overflow-hide pr-lg-5 pr-md-5">
                   <div class="title-pages">
                       <h1>Support</h1>
                    </div>
                    <div class="box-nav-tab">
                        <div class="nav flex-lg-column flex-md-column nav-side-menu-faq nav-pills mb-lg-0 mb-md-0 mb-sm-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach(legal_page_list() as $k => $v)
                            <a class="nav-link {{ $v->id == $page->id ? 'active' : '' }}" href="{{ route("get.legal", slug($v->title) . "-" . $v->id) }}">{{$v->title}}</a>
                        @endforeach
                        </div>
                    </div>
                </div> 
                <div class="col-lg-8 col-md-8 position-relative box-desc-faq ">
                    <div class="tab-content bg-white px-3 pt-3 pb-5" id="v-pills-tabContent">
                        <div class="tab-pane desc-tcpp fade show active">
                            <h4>
                                {{ $page->title }}
                            </h4>
                            <div class="p-1">
                            {!! $page->body !!}
                            </div>
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

@endsection