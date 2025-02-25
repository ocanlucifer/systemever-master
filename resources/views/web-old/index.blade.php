@extends('web/layouts/main')

@section('custom_css')

@endsection
@section('content')
    <section class="banner position-relative">
        <div class="bawah-header" style="background-image: url('{{ asset("assets/img/bawah-menu.svg") }}')"></div>
        <div class="owl-carousel banner-owl owl-theme">
            @foreach ($banner as $b)
            <div class="item"><a href=""><img src="{{ uri($b->image_url) }}" alt=""></a></div>
            @endforeach
        </div>
        <div class="batik-after-banner d-flex flex-column" style="background-image: url('{{ asset("assets/img/bawah-banner3.svg") }}')">
           <div class="section-tl section-tl1 d-flex justify-content-center">
                <div class="title-custom tlc-1">
                    @if (activelang() == "ID")
                    <h1 class="child-title ct-1">LEMBUT</h1>
                    @else 
                    <h1 class="child-title ct-1">SOFT</h1>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-bakpia pt-4 position-relative d-flex justify-content-center">
        <div class="bintang bintang-besar bintang-kiri-atas">
            <img src="{{ asset('assets/img/bintang-besar.svg') }}" alt="">
        </div>
        <div class="bintang bintang-besar bintang-kanan-bawah">
            <img src="{{ asset('assets/img/bintang-besar.svg') }}" alt="">
        </div>
        <div class="bintang bintang-medium bintang-kiri">
            <img src="{{ asset('assets/img/bintang-medium.svg') }}" alt="">
        </div>
        <div class="bintang bintang-medium bintang-kanan">
            <img src="{{ asset('assets/img/bintang-medium.svg') }}" alt="">
        </div>
        <div class="bintang bintang-kecil bintang-bawah-kiri">
            <img src="{{ asset('assets/img/bintang-kecil.svg') }}" alt="">
        </div>
        <div class="bintang bintang-kecil bintang-atas-kanan">
            <img src="{{ asset('assets/img/bintang-kecil.svg') }}" alt="">
        </div>
        <div class="vektor-kotak vektor-kotak-kiri">
            <img src="{{ asset('assets/img/Vector-cok-atas-kiri.svg') }}" alt="">
        </div>
        <div class="vektor-kotak vektor-kotak-kanan">
            <img src="{{ asset('assets/img/Vector-cok-atas-kanan.svg') }}" alt="">
        </div>
        <div class="bakpia-blangkon">
            <img src="{{ asset('assets/img/bakpia_blangkon.svg') }}" alt="">
        </div>
        <div class="awan-kanan">
            <img src="{{ asset('assets/img/awan-coklat.svg') }}" alt="">
        </div>
        <div class="bg-splash-coklat" style="background-image: url('{{ asset("assets/img/splash-coklat.png") }}')"></div>
        <div class="fg-splash-coklat" style="background-image: url('{{ asset("assets/img/splash-coklat-fg.png") }}')"></div>
    </section>
    <section class="slide-products position-relative" style="background-image: url('{{ asset("assets/img/bg-coklat.png") }}')">
        <div class="menara-coklat menara-atas">
            <img src="{{ asset('assets/img/menara-coklat.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 pt-2">
                    <div class="title-slide-product text-center mb-5">
                        <div class="title-slide text-uppercase active" id="title-bakpia"><h2>Our Signature Bakpia Kukus</h2></div>
                        <div class="title-slide text-uppercase" id="title-bolu"><h2>Our Signature Bolu Kukus</h2></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="nav nav-tabs nav-tabs-product border-bottom-0 justify-content-center" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-bakpia-tab" onclick="title_slide('title-bakpia')" data-toggle="tab" href="#nav-bakpia" role="tab" aria-controls="nav-bakpia" aria-selected="true">Bakpia Kukus</a>
                            <a class="nav-item nav-link" id="nav-bolu-tab" onclick="title_slide('title-bolu')" data-toggle="tab" href="#nav-bolu" role="tab" aria-controls="nav-bolu" aria-selected="false">Bolu Kukus</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane py-2 fade show active" id="nav-bakpia" role="tabpanel" aria-labelledby="nav-bakpia-tab">
                <div class="owl-carousel  owl-product owl-theme">
                    @foreach ($bakpia as $v) 
                    <div class="item mt-4">
                        <a>
                            <img src="{{ uri($v->featured_image) }}" alt="">
                            <div class="title-product-item text-center pt-5 mt-2">
                                <small>BAKPIA</small><br/>
                                <h4>{{ $v->title }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane py-2 fade" id="nav-bolu" role="tabpanel" aria-labelledby="nav-bolu-tab">
                <div class="owl-carousel owl-product owl-theme">
                    @foreach ($bolu as $v) 
                    <div class="item mt-4">
                        <a>
                            <img src="{{ uri($v->featured_image) }}" alt="">
                            <div class="title-product-item text-center pt-5 mt-2">
                                @if (activelang() == "ID")
                                <small>BOLU KUKUS</small><br/>
                                @else 
                                <small>STEAMED BOLU</small><br/>
                                @endif
                                <h4>{{ $v->title }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="menara-coklat menara-bawah">
            <img src="{{ asset('assets/img/menara-coklat.svg') }}" alt="">
        </div>
    </section>
    <section class="slide-article position-relative" style="background-image:url('{{ asset('assets/img/bg-coklat-gelombang.png') }}')">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12">
                    <div class="title-slide-article text-center pt-3 mb-2">
                        @if (activelang() == "ID")
                        <h2>Selalu Kangen dengan Jogja</h2>
                        @else 
                        <h2>Always Miss Jogja</h2>
                        @endif
                    </div>
               </div>
               <div class="col-lg-12">
                <div class="owl-carousel owl-article owl-theme ">
                    @foreach($article as $v)
                        @include("web/includes/article-card", $v)
                    @endforeach
                </div>
               </div>
           </div>
       </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 pb-4">
                    @if (activelang() == "ID")
                    <a href="{{ route('get.article') }}"><button class="btn-oval btn-coklat">Lihat Semua Artikel</button></a>
                    @else 
                    <a href="{{ route('get.article') }}"><button class="btn-oval btn-coklat">See All</button></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="vektor-article vektor-besar vektor-1">
            <img src="{{ asset('assets/img/Vector-besar-kiri.svg') }}" alt="">
        </div>
        <div class="vektor-article vektor-kecil vektor-2" >
            <img src="{{ asset('assets/img/Vector-kecil.svg') }}" alt="">
        </div>
        <div class="vektor-article vektor-kecil vektor-3">
            <img src="{{ asset('assets/img/Vector-kecil.svg') }}" alt="">
        </div>
        <div class="vektor-article vektor-besar vektor-4">
            <img src="{{ asset('assets/img/Vector-besar-kanan.svg') }}" alt="">
        </div>
    </section>
    <section class="instagram-slide mt-5">
        <div class="owl-carousel owl-posting-ig owl-theme ">
            @foreach($instagram as $v)
                <div class="item mb-5 p-2">
                    <a href="{{ $v->instagram_link }}" target="_blank">
                        <img src="{{ uri($v->image_url) }}" class="w-100" alt="">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    @if (activelang() == "ID")
                    <a href="https://www.instagram.com/bakpiatugujogja/" target="_blank"><button class="btn-oval btn-coklat">Lihat Semua Postingan</button></a>
                    @else 
                    <a href="https://www.instagram.com/bakpiatugujogja/" target="_blank"><button class="btn-oval btn-coklat">See All</button></a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')
<script>
    $('.banner-owl').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
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
        },
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    })
    $('.owl-product').owlCarousel({
        loop:true,
        margin:10,
        stagePadding: 150,
        nav: true,
        navText:["<button class='swipe-left'></button>","<button class='swipe-right'></button>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    $('.owl-article').owlCarousel({
        stagePadding: 145,
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            },
            1900:{
                items:6
            }
        }
    })
    $('.owl-posting-ig').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        },
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    })

    function title_slide(id){
        $('.title-slide').removeClass('active');
        $('#'+id).addClass('active')
    }
//======= scroll magic scroll effect=======//
    var controller = new ScrollMagic.Controller();
    // Create scenes in jQuery each() loop
    $(".section-tl").each(function(i) {
    var inner = $(this).find(".child-title");
    var outer = $(this).find(".title-custom");
    var tl = new TimelineMax();
    
    tl.from(outer, 0.25, { scaleX: 0 });
    tl.from(inner, 0.65, { yPercent: 50, ease: Back.easeOut });
    
    new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.15,
        duration: "10%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });

    

    $(".section-bakpia").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".bintang");
        tl.to(child, 1, { y: -200, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "40%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
    $(".section-bakpia").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-kotak-kanan");
        tl.to(child, 1, { y: -100, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "40%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });

    $(".section-bakpia").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-kotak-kiri");
        tl.to(child, 1, { y: -200, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "40%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });

    $(".slide-article").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-article ");
        tl.to(child, 1, { y: -250, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "50%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });

    $(".slide-products").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".menara-coklat");
        tl.to(child, 1, { y: -200, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "50%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
    $(".section-bakpia").each(function() {
        var tl = new TimelineMax();
        var awan = $(this).find(".awan-kanan");
        tl.to(awan, 1, { x: 250, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "100%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
    $(".section-bakpia").each(function() {
        var tl = new TimelineMax();
        var bakpia = $(this).find(".bakpia-blangkon");
        tl.to(bakpia, 1, { y: 200, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "50%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });

</script>
@endsection