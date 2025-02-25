@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="section-article mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11">
                <div class="title-section-article mb-4 mt-4">
                    <h3>News</h3>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-11">
                <div class="box-news">
                    @for ($i = 1; $i < 6; $i++)
                    <div class="list-news row">
                        <div class="col-12 px-0 d-lg-none d-md-none d-sm-block d-block">
                            <div class="date-news ">www.antaranews.com | 06 /06/ 2021</div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-4 px-lg-3 px-md-3 px-0">
                            <img src="{{ asset('assets/img/img-article.png') }}" class="w-100">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                            <div class="date-news d-lg-block d-md-block d-sm-none d-none">www.antaranews.com | 06 /06/ 2021</div>
                            <div class="title-news-list">
                                <a href="{{ url('frontend/business-insight/news/detail') }}" class="d-flex justify-content-between">
                                    <h4>Nestlé publishes 2020 Annual Report, sustainability at the Annual General Meeting</h4> 
                                    <img class="arrow-black" src="{{ asset('assets/img/arrow-right-paging.svg') }}" alt="">
                                    <img class="arrow-green" src="{{ asset('assets/img/down-arrow-green.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 d-lg-block d-md-block d-sm-none d-none desc-list-news">
                                    One of the best ways to foresee the future is by looking into the past. This is why at the foundation of every marketing strategy lies data – and lots of it. Being able to connect with customers via the right channels and through the right media can make...
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