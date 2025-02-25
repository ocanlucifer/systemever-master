@extends('frontend/layouts/main')

@section('custom_css')
<style>
.owl-pain-points .owl-dots{
    padding-top:0px !important;
}
.bg-green-pain-point {
    height:400px;
}
.desc-erp-item ul {
    list-style-image: url('{{ uri('assets/img/Vector.svg') }}');
    padding-left:30px !important;
}
.desc-erp-item ul li {
    display: revert !important;
}
</style>
@endsection
@section('content')
  <section class="section-banner-full mb-lg-5 mb-sm-4 mb-4 position-relative">
    <img src="{{ (uri($banner->image_url)) }}" alt="">
    <div class="caption-banner  d-flex align-items-center">
        <div class="container">
            <h1>Successful ERP<br/>Management</h1>
            <p>Our ERP system has been tested for more than 27 <br/> years and is used by thousands of customers.</p>
        </div>
    </div>
  </section>
  <section class="section-home position-relative over-flow-hide">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-sm-4 mb-4">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center">
                    <h2>SystemEver</h2>
                    <p>Pay Less Get More, Quick and Easy Worldwide Mobility, No more Pain Points!</p>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5">
            <div class="col-lg-12 d-lg-flex d-sm-block d-block px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="col-lg-6 col-12 bg-green pl-0 pr-0">
                    <div class="video-home video-systemever">
                        <iframe 
                         src="https://www.youtube.com/embed/{{get_youtube_id($pain_point['youtube'][0]->youtube)}}" 
                         title="YouTube video player" 
                         frameborder="0" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-12 konsep bg-green d-flex justify-content-center align-items-center">
                   <div class="owl-carousel owl-slide-konsep">
                        @foreach($pain_point['image'] as $v)
                        <div class="item active">
                            <img src="{{ (uri($v->media)) }}" alt="">
                        </div>
                        @endforeach
                   </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center pt-4 mb-lg-5">
            <div class="col-lg-11">
                <ul class="list-unstyled d-flex justify-content-center list-icon">
                    @foreach ($pain_point['icon'] as $v)
                    <li>
                        <img src="{{ (url_to_svg(uri($v->media))) }}" alt="">
                        <p>{{ $v->text }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="img-titik atas">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div>
    <div class="img-titik bawah">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div>
  </section>
  <section class="section-home">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center">
                    <h2>Innovative ERP Solutions</h2>
                    <p>Pay Less Get More, Quick and Easy Worldwide Mobility, <br/>
                        No more Pain Points!</p>
                </div>
            </div>
        </div>
        {{-- <div class="row d-flex justify-content-center ">
            <div class="col-lg-11 pt-4">
                <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp position-relative d-lg-none d-md-none d-sm-block d-block">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-1.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ asset('assets/img/img-erp1.png') }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-11 col-11 pr-lg-0">
                        <div class="title-erp-item mb-lg-5">
                            <h3>i1 AccounTax Service</h3>
                            <p><i>Built for accountants by accountants</i></p>
                        </div>
                        <div class="desc-erp-item mb-lg-5">
                            <p>i1 AccounTax is the cloud accounting ERP <br> that’s ideal for accounting firms.</p>
                            <ul class="list-unstyled">
                                <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Impress clients with professional report.</div></li>
                                <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Delight clients with on time and accurate data.</div></li>
                                <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Help you to reduce tedious and repetitive work.</div></li>
                            </ul>
                        </div>
                        <button class="btn-oval btn-view-detail btn-white-orange mb-lg-4">View Detail</button>
                    </div>
                    <div class="col-lg-7 box-img-erp position-relative d-lg-block d-md-block d-sm-none d-none ">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-1.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ asset('assets/img/img-erp1.png') }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- left --}}
        {{-- <div class="row d-flex justify-content-center pt-5">
            <div class="col-lg-11 pt-4">
                <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp left position-relative">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-2.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ asset('assets/img/img-erp2.png') }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-8 col-sm-11 col-11">
                        <div class="title-erp-item mb-lg-5">
                            <h3>i5 Sales & Distribution ERP</h3>
                            <p><i>Managing Inventory</i></p>
                        </div>
                        <div class="desc-erp-item mb-lg-5">
                            <p>i5 is an integrated Cloud ERP system, from Basic Costing, Sales & Inventory which can be suitable for Trading & Distribution Company.</p>
                            <ul class="list-unstyled">
                                <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Integrated & Real-time.</div></li>
                                <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> No more Pain Managing Inventory, Basic Costing & Consigning.</div></li>
                                <li><img src="{{ asset('assets/img/Vector.svg') }}" alt=""> <div> Help you to reduce tedious and repetitive work.</div></li>
                            </ul>
                        </div>
                        <button class="btn-oval btn-view-detail btn-white-orange mb-lg-4">View Detail</button>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- end left --}}
        @php 
        $link = [
            'i1' => "get.pages.solutions.accounting_management_systems",
            'i5' => "get.pages.solutions.i5_trading",
            'i7' => "get.pages.solutions.i7_manufacture",
        ]
        @endphp
        @foreach($solutions as $v)
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-lg-11 pt-4">
                @if ($v->main_type == "i5")
                <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp left position-relative">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-2.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ (uri($v->main_image)) }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-8 col-sm-11 col-11">
                        <div class="title-erp-item mb-lg-5">
                            <h3>{{ $v->featured_title }}</h3>
                            <p><i>{{ $v->featured_sub_title }}</i></p>
                        </div>
                        <div class="desc-erp-item mb-lg-5">
                            {!! $v->featured_sort_description !!}
                        </div>
                        <a class="btn-oval btn-view-detail btn-block btn-white-orange mb-lg-4" href="{{ route($link[$v->main_type]) }}">View Detail</a>
                    </div>
                </div>
                @else
                <div class="row d-sm-flex justify-content-md-start justify-content-sm-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-sm-10 col-11 box-img-erp position-relative d-lg-none d-md-none d-sm-block d-block ">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-3.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ (uri($v->main_image)) }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-8 col-sm-11 col-11 pr-lg-0">
                        <div class="title-erp-item mb-lg-5">
                            <h3>{{ $v->featured_title }}</h3>
                            <p><i>{{ $v->featured_sub_title }}</i></p>
                        </div>
                        <div class="desc-erp-item mb-lg-5">
                            {!! $v->featured_sort_description !!}
                        </div>
                        <a class="btn-oval btn-view-detail btn-block btn-white-orange mb-lg-4" href="{{ route($link[$v->main_type]) }}">View Detail</a>
                    </div>
                    <div class="col-lg-7 box-img-erp position-relative d-lg-block d-md-block d-sm-none d-none ">
                        <div class="elipsis">
                            <img src="{{ asset('assets/img/elipses.svg') }}" alt=""> 
                        </div>
                        <div class="icon-erp">
                            <img src="{{ asset('assets/img/icon-erp-3.svg') }}" alt="">
                        </div>
                        <div class="img-erp">
                            <img src="{{ (uri($v->main_image)) }}" alt="">
                        </div>
                        <div class="lingkaran">
                            <img src="{{ asset('assets/img/lingkaran.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
  </section>
  <section class="section-business pb-lg-4">
    <div class="container">
        <div class="row pt-lg-5 mb-lg-5">
            <div class="col-lg-12">
                <div class="title-business text-center">
                    <h1>BUSINESS</h1>
                    <h3>Suitable for various types of business</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled list-produk-category">
                    @foreach ($business as $v)
                    <li>
                        <div class="produk-category text-left">
                            <a>
                                <img class="gray" src="{{ (url_to_svg(uri($v->main_image))) }}" alt="">
                                <img class="green" src="{{ (url_to_svg(uri($v->secondary_image))) }}" alt="">
                                {!! $v->description !!}
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
  </section>
  <section class="section-medium-business">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-12 mb-5">
                <h2>Need ERP Software for Your Small<br/> Medium Business?</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-12 px-lg-3 px-sm-0 px-0 d-lg-none d-md-none d-sm-flex d-flex">
                <div class="video-home">
                    <iframe 
                         src="https://www.youtube.com/embed/m3o1KpM2g9w" 
                         title="YouTube video player" 
                         frameborder="0" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 list-medium-business">
                @foreach ($superiority as $v)
                <div class="row mb-4">
                    <div class="col-lg-2 px-0">
                        <img src="{{ (url_to_svg(uri($v->icon))) }}" alt="">
                    </div>
                    <div class="col-lg-10 pl-4">
                        {{ $v->description }}
                    </div>
                </div>
                @endforeach
                <div class="row mb-4 pt-3">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-10">
                        <a href="{{ route("get.pages.services.feature") }}" class="btn-oval btn-view-detail btn-white-orange mb-lg-4">View Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-lg-block d-md-block d-sm-none d-none">
                <div class="video-home">
                    <iframe 
                         src="https://www.youtube.com/embed/m3o1KpM2g9w" 
                         title="YouTube video player" 
                         frameborder="0" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                         allowfullscreen></iframe>                    
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center testimony">
            <div class="col-lg-10 px-lg-5 pt-lg-5 pb-3 box-testimony  px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="owl-carousel owl-testimoni owl-theme">
                    @foreach ($testimony as $v)
                    <div class="item">
                        <div class="row">
                            <div class="col-12 d-lg-none d-md-none d-sm-block d-block  px-lg-3 px-md-3 px-4">
                                <img src="{{ asset('assets/img/img_konsep.png') }}" alt="">
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3  px-4">
                                <div class="desc-testimoni mb-3">
                                    {{ $v->description }}
                                </div>
                                <div class="media media-testimoni d-flex align-items-center">
                                    <img class="mr-3" src="{{ (uri($v->photo)) }}" alt="{{ $v->name }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0">{{ $v->name }}</h5>
                                        {{ $v->job_title }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                                <img src="{{ (uri($v->featured_image)) }}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="alas-testimoni"></div>
  </section>
  <section class="section-award pt-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9">
                <div class="award text-center pt-lg-5 mb-5">
                    <h2>Award</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-lg-10 px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="owl-carousel owl-award owl-theme">
                    @foreach($award as $v)
                    <div class="item">
                        <div class="box-img">
                            <div class="img-aword d-flex justify-content-center">
                                <img src="{{ (uri($v->photo)) }}" alt="">
                            </div>
                        </div>
                        <div class="desc-trophy text-center">
                            {{$v->title}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="section-customer-slide py-4">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-represented owl-theme">
                    @foreach ($customer_logo as $v)
                    <div class="item"><img src="{{ (url_to_svg(uri($v->image))) }}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
  </section>
  @include('frontend/includes/form_request')

  <section class="section-available-country pb-5 mb-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="title-available mb-5 d-lg-block d-md-block d-sm-none d-none">SystemEver Available in 4 Countries</div>
                  <div class="title-available mb-5 d-lg-none d-md-none d-sm-block d-block">SystemEver <br> Available in 4 Countries</div>
              </div>
          </div>
          <div class="row">
            @foreach ($country as $v)
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                <div class="country">
                    <img src="{{ (uri($v->photo)) }}" alt="">
                    <h5>{{ $v->country_name }}</h5>
                    <p><a href="tel:+{{ $v->phone }}">+{{ $v->phone }}</a></p>
                    <p><a href="http://www.{{ $v->website }}/" target="_blank"> {{ $v->website }}</a></p>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')
<script>
$('.owl-pain-point').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
 $('.owl-testimoni').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 80,
            nav:false,
            margin:15,
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
 $('.owl-slide-konsep').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
 $('.owl-award').owlCarousel({
    loop:true,
    margin:30,
    navText:['<img src="{{ asset("assets/img/arrow-left.svg") }}" alt="">','<img src="{{ asset("assets/img/arrow-right.svg") }}" alt="">'],
    nav:false,
    dots:false,
    // autoplay:true,
    // autoplayTimeout:3000,
    // autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            stagePadding: 100,
        },
        600:{
            items:3
        },
        1000:{
            items:4,
            nav:true
        }
    }
})
$('.owl-represented').owlCarousel({
        loop:true,
        margin:50,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })
</script>
@endsection