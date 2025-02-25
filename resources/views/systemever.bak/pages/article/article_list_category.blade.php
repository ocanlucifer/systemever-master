@extends('systemever/layouts/main')

@section('custom_css')

@endsection
@section('content')
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
    <section class="section-article mb-lg-5 mb-md-5 mb-4">
        <div class="container">
            @if (get('cat'))
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="title-section-article mb-4 mt-4">
                        <h3>{{ ucfirst(get('cat')) }}</h3>
                    </div>
                </div>
            </div>
            @endif
            
            <div class="row mb-lg-5 mb-md-5 mb-4 d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        @foreach($data as $v)
                            <div class="col-lg-4 mb-4">
                                <div class="content-article latest">
                                    <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
                                    <div class="box-caption-article d-flex justify-content-center">
                                        <div class="caption-article">
                                            <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{get('cat')}}">{{strtoupper(get('cat'))}}</a></div>
                                            <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{$v->title}}</a></div>
                                            {{-- <div class="time-post-article">17m ago · 5 min read</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('systemever/includes/pagination')
        </div>
    </section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')

@endsection