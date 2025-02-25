@extends('web/layouts/main')

@section('custom_css')

@endsection

@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - About") }}</title>
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

    <section class="banner-about position-relative">
        <div class="bawah-header" style="background-image: url('{{ asset("assets/img/bawah-menu.svg") }}')"></div>
        <img src="{{ asset('assets/img/banner-about.png') }}" alt="">
        <div class="batik-after-banner batik-about d-flex flex-column" style="background-image: url('{{ asset("assets/img/bawah-banner-coklat.svg") }}')"></div>
        <div class="section-tl position-absolute bottom-0 section-tl1 d-flex justify-content-center">
            <div class="title-custom title-about cl-white tlc-1">
                @if (activelang() == "ID")
                <h2 class="child-title ct-1 text-uppercase">Bakpia Kukus PERTAMA DI JOGJA</h2>
                @else
                <h2 class="child-title ct-1 text-uppercase">Bakpia Kukus FIRST IN JOGJA</h2>
                @endif
            </div>
        </div>
    </section>

    <section class="section-greeting-about position-relative d-flex justify-content-center" style="background-image: url('{{ asset("assets/img/bg-coklat.png") }}')">
        
        <div class="bakpia-blangkon bakpia-about">
            <img src="{{ asset('assets/img/bakpia_blangkon.svg') }}" alt="">
        </div>

        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-3.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-4.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-1.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-2.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-1.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-4.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-3.svg') }}" alt="">
        </div>
        <div class="bintang-coklat">
            <img src="{{ asset('assets/img/bc-2.svg') }}" alt="">
        </div>

        <div class="gelombang-kuning">
            <img src="{{ asset("assets/img/gelombang-kuning.svg") }}" alt="">
        </div>
    </section>

    <section class="section-journey position-relative"  style="background-image: url('{{ asset("assets/img/bg-kuning.svg") }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-1 title-journey text-uppercase">
                    <h3>Our Journey</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-9 offset-lg-3 pr-0">
            <div class="owl-carousel our-journey-owl owl-theme">
                @foreach($product_journey as $k => $v)
                <div class="item">
                    <div class="media {{ $k == 0 ? 'position-relative' : '' }} p-3 pt-4">
                        <img src="{{ uri($v->featured_image) }}" alt="" class="mr-lg-4 mr-md-4 mr-sm-0 mr-0 mt-3 mb-3 rounded-circle">
                        <div class="media-body ">
                            <h2>{{ $v->title }}</h2>
                            <h5>{{ $v->sub_title }}</h5>
                            <p>{{ $v->body }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if (activelang() == "ID")
            <div class="title-dots d-lg-flex d-md-flex d-sm-none d-none justify-content-center">
                <div class="child-title-dots active" id="ctd-0" style="margin-left: -40px;">Bahan Baku</div>
                <div class="child-title-dots" id="ctd-1" style="margin-left: -20px;">Proses Produksi</div>
                <div class="child-title-dots" id="ctd-2" style="margin-left: -15px;">Produk Jadi</div>
                <div class="child-title-dots" id="ctd-3" style="margin-left: -20px;">Distribusi</div>
                <div class="child-title-dots" id="ctd-4" style="margin-left: -65px;">Pelayanan dan Kepuasan Konsumen</div>
            </div>
            @else 
            <div class="title-dots d-lg-flex d-md-flex d-sm-none d-none justify-content-center">
                <div class="child-title-dots active" id="ctd-0" style="margin-left: -40px;">Ingredient</div>
                <div class="child-title-dots" id="ctd-1" style="margin-left: -20px;">Production Proccess</div>
                <div class="child-title-dots" id="ctd-2" style="margin-left: -15px;">Finish Product</div>
                <div class="child-title-dots" id="ctd-3" style="margin-left: -20px;">Distribution</div>
                <div class="child-title-dots" id="ctd-4" style="margin-left: -65px;">Service and Customer Satisfaction</div>
            </div>
            @endif
        </div>
        <div class="awan-journey">
            <img src="{{ asset('assets/img/awan1.svg') }}" alt="">
        </div>
        <div class="awan-journey d-none">
            <img src="{{ asset('assets/img/awan2.svg') }}" alt="">
        </div>
        <div class="awan-journey d-none">
            <img src="{{ asset('assets/img/awan3.svg') }}" alt="">
        </div>
        <div class="awan-journey">
            <img src="{{ asset('assets/img/awan1.svg') }}" alt="">
        </div>
        <div class="awan-journey">
            <img src="{{ asset('assets/img/awan2.svg') }}" alt="">
        </div>
        <div class="awan-journey">
            <img src="{{ asset('assets/img/awan3.svg') }}" alt="">
        </div>
    </section>
    <section class="section-varian-rasa pt-5" style="background-image: url('{{ asset("assets/img/gelombang-putih.svg") }}')">
        <div class="container">
            <div class="row d-flex- justify-content-center">
                <div class="col-lg-9 pt-lg-5 pt-md-5 pt-3">
                    <div class="row">
                        {{-- mobile tabs --}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-4 d-md-none d-sm-block d-block pt-lg-5 pt-md-5 pt-0">
                            <ul class="nav nav-tabs d-flex justify-content-center tabs-varian">
                                <li class="nav-item">
                                  <a class="nav-link active" onclick="select_slide('slide-bakpia');$('.varian-bakpia-0').click();" data-toggle="tab" href="#varian-bakpia">Bakpia Kukus</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" onclick="select_slide('slide-bolu');$('.varian-bolu-0').click();" data-toggle="tab" href="#varian-bolu">Bolu Kukus</a>
                            </ul>
                              
                              <!-- Tab panes -->
                            <div class="tab-content tab-varian-content text-center pt-4">
                                <div class="tab-pane container px-0 active" id="varian-bakpia">
                                    <h4 class="surprize-title text-left"></h4>
                                    <p class="surprize-descript text-left"></p>
                                </div>
                                <div class="tab-pane container px-0 fade" id="varian-bolu">
                                    <h4 class="surprize-title text-left"></h4>
                                    <p class="surprize-descript text-left"></p>
                                </div>
                            </div>
                        </div>
                        {{-- end mobile --}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 pt-md-0 pt-sm-5 pt-5">
                            <div class="box-varian active text-center" id="slide-bakpia">
                                <h5>Bakpia Kukus</h5>

                                <h4 class="flavor-title">{{ $flavour_bakpia[0]->product->title }}</h4>
                                <img src="{{ uri($flavour_bakpia[0]->main_image) }}" class="w-90 image-varian">
                                
                                <div class="varian text-center mt-4 mb-3">
                                    @if (activelang() == "ID")
                                    Varian Rasa
                                    @else
                                    Flavors
                                    @endif
                                </div>
                                
                                <div class="row justify-content-center">
                                    @foreach ($flavour_bakpia as $k => $v)
                                    <div class="m-25">
                                        <img src="{{ uri($v->icon) }}" class="flavor-icon flavor-icon-{{$v->id}} select-varian varian-bakpia-{{$k}}" data-img="{{ uri($v->main_image) }}" data-title="{{$v->product->title}}" data-data="{{ base64_encode(json_encode($v)) }}">
                                    </div>
                                    @endforeach
                                </div>                                
                            </div>
                            <div class="box-varian text-center" id="slide-bolu">
                                <h5>Bolu Kukus</h5>

                                <h4 class="flavor-title">{{ $flavour_bolu[0]->product->title }}</h4>
                                <img src="{{ uri($flavour_bolu[0]->main_image) }}" class="w-90 image-varian">
                                
                                <div class="varian text-center mt-4 mb-3">
                                    @if (activelang() == "ID")
                                    Varian Rasa
                                    @else
                                    Flavors
                                    @endif
                                </div>
                                <div class="row justify-content-center">
                                    @foreach ($flavour_bolu as $k => $v)
                                    <div class="m-25">
                                        <img src="{{ uri($v->icon) }}" class="flavor-icon flavor-icon-{{$v->id}} select-varian varian-bolu-{{$k}}" data-img="{{ uri($v->main_image) }}" data-title="{{$v->product->title}}" data-data="{{ base64_encode(json_encode($v)) }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- dekstop tabs --}}
                        <div class="col-lg-6 col-md-6 d-md-block d-sm-none d-none pt-5">
                            <ul class="nav nav-tabs tabs-varian">
                                <li class="nav-item">
                                  <a class="nav-link active" onclick="select_slide('slide-bakpia');$('.varian-bakpia-0').click();" data-toggle="tab" href="#varian-bakpia">Bakpia Kukus</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" onclick="select_slide('slide-bolu');$('.varian-bolu-0').click();" data-toggle="tab" href="#varian-bolu">Bolu Kukus</a>
                            </ul>
                              
                              <!-- Tab panes -->
                              <div class="tab-content tab-varian-content text-center pt-4">
                                <div class="tab-pane container px-0 active" id="varian-bakpia">
                                    <h4 class="surprize-title text-left"></h4>
                                    <p class="surprize-descript text-left"></p>
                                </div>
                                <div class="tab-pane container px-0 fade" id="varian-bolu">
                                    <h4 class="surprize-title text-left"></h4>
                                    <p class="surprize-descript text-left"></p>
                                </div>
                              </div>
                        </div>
                        {{-- end dekstop --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="vektor-kotak vektor-varian-kiri">
            <img src="{{ asset('assets/img/Vector-cok-atas-kiri.svg') }}" alt="">
        </div>
        <div class="vektor-kotak vektor-varian-kanan">
            <img src="{{ asset('assets/img/Vector-cok-atas-kanan.svg') }}" alt="">
        </div>
    </section>
@endsection

@section('footer')
    @include('web/includes/footer')
@endsection

@section('custom_js')
<script>
    $('.our-journey-owl').owlCarousel({
        loop:false,
        margin:10,
        stagePadding: 100,
        nav:false,
        dots:true,
        onDragged: callback,
        responsive:{
            0:{
                items:1,
                stagePadding: 0,
            },
            600:{
                items:1,
                stagePadding: 80,
            },
            1000:{
                items:1
            }
        }
    })
    function callback(event) {
        // $('.our-journey-owl').find(".owl-dots").find('button.owl-dot.active').addClass('current');
        var index = $('.our-journey-owl').find(".owl-dots").find('button.owl-dot.active').index( this );
        // console.log('index',index)
        $('.child-title-dots').removeClass('active');
        $('#ctd-'+index).addClass('active');
        // $('.owl-dot').removeClass('current');
        // console.log("active page", event.page.index);
        // for (i = 0; i < event.page.index; i++) {
        //     $('#ctd-'+ i).addClass('current');
        // }
    }
    $(".carousel").swipe({

        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');

        },
        allowPageScroll:"vertical"

    });
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


    $(".section-greeting-about").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".bintang-coklat");
        tl.to(child, 1, { y: -50, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "70%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
    $(".section-journey").each(function() {
        var tl = new TimelineMax();
        var awan = $(this).find(".awan-journey");
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
    $(".section-varian-rasa").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-kotak");
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
    
    $(document).ready(function(){
        var width = window.innerWidth,
        height = window.innerHeight;
        // console.log( width + ' : ' + height );
        if (width <= 480) {
            $(".section-greeting-about").each(function() {
                var tl = new TimelineMax();
                var bakpia = $(this).find(".bakpia-blangkon");
                tl.to(bakpia, 1, { y: 100, ease: Linear.easeNone });
            var scene = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 0.4,
                duration: "40%"
            })
                .setTween(tl)
                // .addIndicators()
                .addTo(controller);
            });
        }else{
            $(".section-greeting-about").each(function() {
                var tl = new TimelineMax();
                var bakpia = $(this).find(".bakpia-blangkon");
                tl.to(bakpia, 1, { y: 220, ease: Linear.easeNone });
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
        $('.our-journey-owl').find(".owl-dots").find('button.owl-dot').each(function(i) {
            if ( i === 0 ) {
            // $(this).addClass('current');
            }
        });
        $('.carousel').carousel({ interval: false });
    })
    $('.our-journey-owl').find(".owl-dots").find('button.owl-dot').click(function(){
        // $(this).addClass('current');
        var index = $('.our-journey-owl').find(".owl-dots").find('button.owl-dot').index( this );
        // console.log('index',index)
        $('.child-title-dots').removeClass('active');
        $('#ctd-'+index).addClass('active');
    })
    
    function select_slide(id){
        $('.box-varian').removeClass('active');
        $('#'+id).addClass('active')
    }
</script>

<script>
$(".select-varian").click(function(){
    var lang_active = '{{ activelang() }}';
    var data = $(this).attr("data-data");
    var obj = JSON.parse(window.atob(data));
    console.log("data", obj);
    var image = $(this).attr("data-img");
    var title = $(this).attr("data-title");
    $(".image-varian").attr("src", image);
    $(".flavor-title").html(title);
    $(".flavor-icon").removeClass("flavor-icon-active");
    if (lang_active == "ID") {
        $(".surprize-title").html(obj.title_id);
        $(".surprize-descript").html(obj.description_id);
    } else {
        $(".surprize-title").html(obj.title_en);
        $(".surprize-descript").html(obj.description_en);
    }
     
    $(this).addClass("flavor-icon-active");

});

$(".varian-bakpia-0").click();
</script>
@endsection