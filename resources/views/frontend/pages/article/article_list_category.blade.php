@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
    <section class="section-article mb-lg-5 mb-md-5 mb-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="title-section-article mb-4 mt-4">
                        <h3>Technology</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-lg-5 mb-md-5 mb-4 d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        @for ($i = 1; $i <=9; $i++)
                            <div class="col-lg-4 mb-4">
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
                </div>
            </div>
            @include('frontend/includes/pagination')
        </div>
    </section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')

@endsection