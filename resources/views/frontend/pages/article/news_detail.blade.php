@extends('frontend/layouts/main')

@section('custom_css')

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
    <div class="row mb-lg-5 mb-md-5 mb-4">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <section class="section-detail-article mb-5">
                <div class="desc-detail-news pt-lg-0 pt-md-0 pt-3">
                    <div class="date">06 /06/ 2021</div>
                    <h3>
                        Nestlé publishes 2020 Annual Report, spotlights sustainability at the Annual General Meeting
                    </h3>
                    <img src="{{ asset('assets/img/img-article.png') }}" alt="">
                    <br/>
                    <br/>
                    <p>One of the best ways to foresee the future is by looking into the past. This is why at the foundation of every marketing strategy lies data – and lots of it. Being able to connect with customers via the right channels and through the right media can make or break a marketing campaign.</p>

                    <p> However, with user behaviors constantly in flux, looking into the future of campaigns has proven to be a greater challenge for marketers.</p>

                    <p>Consumer behaviors and market landscapes have changed rapidly over the last year, and will continue evolving. Segmentation and optimization for marketers are no longer what they were before. Marketers today need to understand the consumers’ fluidity in the new normal and focus on dynamic segmentation and optimization processes.</p>

                    <p>Tracking the shifts in consumer behavior is now an added responsibility for marketers looking to roll out effective marketing campaigns in a volatile world.</p>

                    <p>By leaning on data, they can stay agile and cope with fluctuations as data can help them make sense of these changes and distinguish short-term ones from those that are here to stay.</p>

                    <p>This is where predictive analytics comes in.</p>
                </div>
                <ul class="list-unstyled share-article d-flex justify-content-start align-items-center">
                    <li>Share :</li>
                    <li><a href=""><img src="{{ asset('assets/img/fb.svg') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('assets/img/tw.svg') }}" alt=""></a></li>
                </ul>
            </section>
            <div class="sumber-article pt-lg-5 pt-md-5 pt-4">
                Sumber : <a href=""> https://www.nestle.com/media/pressreleases/allpressreleases/nestle-annual-report-2020</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 pt-5 pl-lg-5 pl-md-5 pl-3">
            @include('frontend/pages/article/includes/article_most_view')
        </div>
    </div>
</div>


@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')

@endsection