@extends('web/layouts/main')

@section('seogo')
        <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja") }}</title>
        @if (!empty($seo->description))
        <meta name="description" content="{{ $seo->description }}" itemprop="description" />
        @endif
        @if (!empty($seo->keyword))
        <meta name="keywords" content="{{ $seo->keyword }}" itemprop="keywords" />
        @endif
        @if (!empty($seo->title))
    	<meta property="og:title" content="{{ $seo->title }}" />
        @endif
    	<meta property="og:image" content="{{ asset("assets/img/logo.png") }}" />
        @if (!empty($seo->description))
        <meta property="og:description" content="{{ $seo->description }}" />
        @endif
    	<meta property="og:url" content="{{ $url }}" />
@endsection


@section('content')
    <section class="banner position-relative">
        <div class="bawah-header" style="background-image: url('{{ asset("assets/img/bawah-menu.svg") }}')"></div>
        <div class="owl-carousel banner-owl owl-theme d-none d-sm-none d-md-block d-lg-block">
            @foreach ($banner as $v)
            <div class="item"><a href="{{ $v->redirect_url}}"><img src="{{ uri($v->image_url) }}" alt="{{ $v->title }}"></a></div>
            @endforeach
        </div>
        <div class="owl-carousel banner-owl owl-theme carousel-mobile d-block d-sm-block d-md-none d-lg-none">
            @foreach ($banner_mobile as $v)
            <div class="item"><a href="{{ $v->redirect_url}}"><img src="{{ uri($v->image_url) }}" alt="{{ $v->title }}"></a></div>
            @endforeach
        </div>
        <div class="batik-after-banner d-flex flex-column" style="background-image: url('{{ asset("assets/img/bawah-banner3.svg") }}')">
           <div class="section-tl section-tl1 d-flex justify-content-center">
                <div class="title-custom tlc-1">
                    <h1 class="child-title ct-1">{{lang(['ID' => 'LEMBUT', 'EN' => 'SOFT'])}}</h1>
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
        
        <div class="bg-splash-coklat" style="background-image: url('{{ asset("assets/img/splash-coklat.png") }}')"></div>
        <div class="fg-splash-coklat" style="background-image: url('{{ asset("assets/img/splash-coklat-fg.png") }}')"></div>
    </section>
    <section class="slide-products position-relative" style="background-image: url('{{ asset("assets/img/bg-coklat.png") }}')">
        <div class="menara-coklat menara-atas">
            <img src="{{ asset('assets/img/menara-coklat.svg') }}" alt="">
        </div>
        <div class="awan-kanan">
            <img src="{{ asset('assets/img/awan-coklat.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 pt-2">
                    <div class="title-slide-product text-center mb-lg-5 mb-md-5 mb-sm-3 mb-3">
                        <div class="title-slide text-uppercase active" id="title-bakpia">
                            <h2 class="d-lg-block d-md-block d-sm-none d-none">Our Signature Bakpia Kukus</h2>
                            <h2 class="d-lg-none d-md-none d-sm-block d-block">Our Signature <br/> Bakpia Kukus</h2>
                        </div>
                        <div class="title-slide text-uppercase" id="title-bolu">
                            <h2 class="d-lg-block d-md-block d-sm-none d-none">Our Signature Bolu Kukus</h2>
                            <h2 class="d-lg-none d-md-none d-sm-block d-block">Our Signature <br/>  Bolu Kukus</h2>
                        </div>
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
                    <div class="item mt-2 p-3">
                        <a data-toggle="modal" data-target="#exampleModalCenter" class="product-modal" data-product="{{ base64_encode(json_encode($v->toArray())) }}">
                            <img src="{{ uri($v->featured_image) }}" alt="">
                            <div class="title-product-item text-center pt-2 mt-4">
                                <small>BAKPIA KUKUS</small><br/>
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
                    <div class="item mt-2 p-3">
                        <a data-toggle="modal" data-target="#exampleModalCenter" class="product-modal" data-product="{{ base64_encode(json_encode($v->toArray())) }}">
                            <img src="{{ uri($v->featured_image) }}" alt="">
                            <div class="title-product-item text-center pt-2 mt-4">
                                <small>BOLU KUKUS</small><br/>
                                <h4>{{ $v->title }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div class="menara-coklat menara-bawah">
            <img src="{{ asset('assets/img/menara-coklat.svg') }}" alt="">
        </div> --}}
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
               <div class="col-lg-12 px-lg-3 px-md-3 px-0">
                    <div class="owl-carousel owl-article owl-theme ">
                        @foreach($article as $v)
                        <div class="item mb-5 mt-5">
                            @include("web/includes/article-card", $v)
                        </div>
                        @endforeach
                    </div>
               </div>
           </div>
       </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-lg-5 mb-md-5 mb-sm-4  mb-3 pb-lg-4 pb-md-4 pb-3">
                    <a href="{{ route("get.article") }}"><button class="btn-oval btn-coklat">
                        @if (activelang() == "ID")
                        Lihat Semua Artikel
                        @else 
                        See All
                        @endif
                    </button></a>
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
    <section class="instagram-slide mt-lg-5 mt-md-5 mt-sm-4 mt-4">
        <div class="owl-carousel owl-posting-ig owl-theme ">
            @foreach($instagram as $v)
                <div class="item mb-5 p-2">
                    <a href="{{ $v->instagram_link }}" target="_blank">
                        <img src="{{ uri($v->image_url) }}" class="w-100" alt="">
                        <div class="ig-caption">
                           {{ base64_decode($v->body) }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 pb-lg-0 pb-md-0 pb-sm-4 pb-4">
                    <a href="https://www.instagram.com/bakpiatugujogja" target="_blank"><button class="btn-oval btn-coklat">
                        @if (activelang() == "ID")
                        Lihat Semua Postingan
                        @else 
                        See Instagram Feed
                        @endif    
                    </button></a>
                </div>
            </div>
        </div>
    </section>
@include('web/includes/modals/product-detail')
@endsection

@section('footer')
    @include('web/includes/footer')
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
                items:1,
                stagePadding: 60,
                nav:false,
                margin:5,
                loop:true
            },
            600:{
                items:1,
                nav:false,
                loop:true
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
                items:1,
                stagePadding: 70,
                margin:15,
                loop:true
            },
            600:{
                stagePadding: 100,
                items:1,
                loop:true
            },
            800:{
                stagePadding: 80,
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    $('.owl-posting-ig').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1,
                stagePadding: 90,
                margin: 15,
                loop:true
            },
            600:{
                items:3,
                loop:true
            },
            1000:{
                items:4
            },
            1920:{
                items:6
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
        var awan = $(this).find(".awan-kanan");
        tl.to(awan, 1, { x: 250, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "30%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
    $(".section-bakpia").each(function() {
        var tl = new TimelineMax();
        var bakpia = $(this).find(".bakpia-blangkon");
        tl.to(bakpia, 1, { y: 120, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "50%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
$(document).ready(function(){
    var width = window.innerWidth,
        height = window.innerHeight;
        // console.log( width + ' : ' + height );
        if (width <= 480) {
            $(".slide-products").each(function() {
            var tl = new TimelineMax();
            var child = $(this).find(".menara-coklat");
            tl.to(child, 1, { y: -200, ease: Linear.easeNone });
            var scene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 0.4,
                duration: "100%"
            })
                .setTween(tl)
                // .addIndicators()
                .addTo(controller);
            });
        }else{
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
        }
})
</script>

<script>
    $(".product-modal").click(function(){
        var data = $(this).attr("data-product");
        data_decode = atob(data);
        console.log("data_decode", data_decode);
        object = JSON.parse(data_decode);
        console.log("data", object)
        $(".modal-type").html(object.type);
        $(".modal-title").html(object.title);
        $(".modal-desc").html(object.description);
        if (object.detail_image) {
            $(".modal-product").attr("src", object.detail_image);
        } else {
            $(".modal-product").attr("src", object.featured_image);
        }
        $(".modal-varian").html(capitalizeFirstLetter(object.varian.toLowerCase()));
        $(".modal-price").html("Rp" + formatRupiah(object.price));
        $(".modal-tokopedia").attr("href", object.tokopedia_url);
        $(".modal-shopee").attr("href", object.shopee_url);
    });
    
    function capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
    
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.toString().replace(/[^,\d]/g, ''),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
    
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
    
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    </script>
@endsection