@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<div class="bg-gading">
    @include('frontend/includes/breadcrumbs')
    <section class="section-article pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-9 col-md-8 col-sm-8 col-12 title-pages">
                    <h1>{{ stringlang('Article', 'Artikel') }}</h1>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-12 filter-sort-article d-none align-items-center">
                    <select class="filter-article js-states form-control w-100">
                        <option></option>
                        <option>{{ stringlang('Latest Article', 'Artikel Terbaru') }}</option>
                        <option>{{ stringlang('Most View', 'Sering Dilihat') }}</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 overflow-hide">
                    <div class="box-nav-tab">
                        <ul class="nav nav-tabs nav-tabs-article d-flex justify-content-start border-bottom-0 mb-5" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="menu-tab-all" onclick="search_control('all')" data-toggle="tab" href="#all" role="tab" aria-controls="tab-all" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="menu-tab-1" onclick="search_control('1')" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Culinary</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="menu-tab-2" onclick="search_control('2')" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Travel</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="menu-tab-3" onclick="search_control('3')" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Experience</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="menu-tab-4" onclick="search_control('4')" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Attraction</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="menu-tab-5" onclick="search_control('5')" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">Shopping</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="menu-tab-all">
                            <div class=" bg-white mb-4">
                                <div class="media box-banner-article align-items-center">
                                    <img src="{{ asset('assets/img/banner-article.svg') }}" alt="">
                                    <div class="media-body px-4 d-flex justify-content-center align-items-center">
                                        <div class="title-article-item pt-3 px-3 pb-3">
                                            <ul class="list-unstyled category-date-article article-banner d-flex mb-2">
                                                <li class="category"><a href="{{ url('frontend/article') }}">Culinary</a></li>
                                                <li><div class="dot">&centerdot;</div></li>
                                                <li>01 Januari 2021</li>
                                            </ul>
                                           <a href="{{ url('frontend/article-detail') }}"><h3>24 Kuliner khas Jogja yang legendaris dan murah meriah</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @for ($slide = 1; $slide <= 5; $slide++)
                                <div class="section-slide-news mb-lg-5 mb-md-5 mb-sm-2 mb-2">
                                    <h3>
                                        @php
                                            if($slide == 1){
                                                echo 'Berita Terpopuler';
                                            }else if($slide == 2){
                                                echo 'Inspirational Article';
                                            }else if($slide == 3){
                                                echo 'Culinary';
                                            }else if($slide == 4){
                                                echo 'Travel';
                                            }else{
                                                echo 'Experience';
                                            }
                                        @endphp
                                    </h3>
                                    <div class="row">
                                        <div class="owl-carousel owl-article news-populer-{{ $slide }} owl-article-list owl-theme ">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <div class="item mb-3 mt-3">
                                                    <a href="{{ url('frontend/article-detail') }}">
                                                        <img src="{{ asset('assets/img/img-list-article'.$i.'.svg') }}" class="w-100" alt="">
                                                        <div class="title-article-item pt-3 px-3 pb-3">
                                                            <ul class="list-unstyled category-date-article d-flex mb-2">
                                                                <li class="category">
                                                                    @php
                                                                        if($i == 1){
                                                                            echo 'Culinary';
                                                                        }else if($i == 2){
                                                                            echo 'Travel';
                                                                        }else if($i == 3){
                                                                            echo 'Experience';
                                                                        }else if($i == 4){
                                                                            echo 'Attraction';
                                                                        }else{
                                                                            echo 'Shopping';
                                                                        }
                                                                    @endphp
                                                                </li>
                                                                <li><div class="dot">&centerdot;</div></li>
                                                                <li>01 Januari 2021</li>
                                                            </ul>
                                                            <h4>24 Kuliner khas Jogja yang legendaris dan murah meriah</h4>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        @for ($no = 1; $no <= 5; $no++)
                            <div class="tab-pane fade" id="tab-{{ $no }}" role="tabpanel" aria-labelledby="menu-tab-{{ $no }}">
                                <div class="section-slide-news">
                                    <h3>
                                        @php
                                            if($no == 1){
                                                echo 'Culinary';
                                            }else if($no == 2){
                                                echo 'Travel';
                                            }else if($no == 3){
                                                echo 'Experience';
                                            }else if($no == 4){
                                                echo 'Attraction';
                                            }else{
                                                echo 'Shopping';
                                            }
                                        @endphp
                                    </h3>
                                </div>
                                <div class="row row-min-7 owl-article owl-article-list">
                                    @for ($i = 1; $i <= 6; $i++)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 padding-min-7">
                                        <div class="item mb-3 mt-3">
                                            <a href="{{ url('frontend/article-detail') }}">
                                                <img src="{{ asset('assets/img/img-list-article'.$i.'.svg') }}" class="w-100" alt="">
                                                <div class="title-article-item pt-3 px-3 pb-3">
                                                    <ul class="list-unstyled category-date-article d-flex mb-2">
                                                        <li class="category">
                                                            @php
                                                                if($no == 1){
                                                                    echo 'Culinary';
                                                                }else if($no == 2){
                                                                    echo 'Travel';
                                                                }else if($no == 3){
                                                                    echo 'Experience';
                                                                }else if($no == 4){
                                                                    echo 'Attraction';
                                                                }else{
                                                                    echo 'Shopping';
                                                                }
                                                            @endphp
                                                        </li>
                                                        <li><div class="dot">&centerdot;</div></li>
                                                        <li>01 Januari 2021</li>
                                                    </ul>
                                                    <h4>24 Kuliner khas Jogja yang legendaris dan murah meriah</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('footer')
<div class="bg-gading">
    @include('frontend/includes/footer')
</div>
@endsection

@section('custom_js')
<script>
    var i;
    for (i = 1; i <= 5; i++) {
        $('.news-populer-'+i).owlCarousel({
            loop:false,
            margin:0,
            nav:true,
            navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            dots:false,
            responsive:{
                0:{
                    items:1,
                    stagePadding: 50,
                    nav:false,
                    margin:15
                },
                600:{
                    items:1,
                    stagePadding: 120,
                    nav:false,
                    margin:15
                },
                1000:{
                    items:3
                }
            }
        })
    }
  
    $(".filter-article").select2({
        placeholder: "Sort By",
        minimumResultsForSearch: -1,
        width: 'resolve'
    });
    function search_control(id){
        console.log(id)
        if( id == 'all'){
            $('.filter-sort-article').addClass('d-none');
            $('.filter-sort-article').removeClass('d-flex');
        }else{
            $('.filter-sort-article').removeClass('d-none') ;
            $('.filter-sort-article').addClass('d-flex') ;
        }
    }
    // $(document).ready(function(){
    //     $('.filter-sort-article').
    // })
</script>
@endsection