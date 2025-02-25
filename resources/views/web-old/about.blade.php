@extends('web/layouts/main')

@section('custom_css')

@endsection
@section('content')

    <section class="banner-about position-relative">
        <div class="bawah-header" style="background-image: url('{{ asset("assets/img/bawah-menu.svg") }}')"></div>
        <img src="{{ uri($banner->value) }}" alt="">
        <div class="batik-after-banner d-flex flex-column" style="background-image: url('{{ asset("assets/img/bawah-banner-coklat.svg") }}')"></div>
        <div class="section-tl position-absolute bottom-0 section-tl1 d-flex justify-content-center">
            <div class="title-custom title-about cl-white tlc-1">
                @if (activelang() == "ID")
                <h2 class="child-title ct-1 text-uppercase">Bakpia Kukus PERTAMA DI JOGJA</h2>
                @else 
                <h2 class="child-title ct-1 text-uppercase">Steamed Bakpia FIRST IN JOGJA</h2>
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
                @foreach($product_journey as $v)
                <div class="item">
                    <div class="media p-3 pt-4">
                        <img src="{{ uri($v->featured_image) }}" alt="" class="mr-4 mt-3 rounded-circle">
                        <div class="media-body ">
                            <h2>{{ $v->title }}</h2>
                            <h5>{{ $v->sub_title }}</h5>
                            <p>{{ $v->body }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="title-dots d-flex justify-content-center">
                <div class="child-title-dots active" id="ctd-0" style="margin-left: -40px;">Bahan Baku</div>
                <div class="child-title-dots" id="ctd-1" style="margin-left: -20px;">Proses Produksi</div>
                <div class="child-title-dots" id="ctd-2" style="margin-left: -15px;">Produk Jadi</div>
                <div class="child-title-dots" id="ctd-3" style="margin-left: -20px;">Distribusi</div>
                <div class="child-title-dots" id="ctd-4" style="margin-left: -65px;">Pelayanan dan Kepuasan Konsumen</div>
            </div>
        </div>
        <div class="awan-journey">
            <img src="{{ asset('assets/img/awan1.svg') }}" alt="">
        </div>
        <div class="awan-journey d-none">
            <img src="{{ asset('assets/img/awan2.svg') }}" alt="">
        </div>
        <div class="awan-journey">
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
                <div class="col-lg-9 pt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-varian active text-center" id="slide-bakpia">
                                <h5>Bakpia</h5>

                                <h4 class="flavor-title">{{ $flavour_bakpia[0]->product->title }}</h4>
                                <img src="{{ uri($flavour_bakpia[0]->main_image) }}" class="w-100 image-varian">
                                
                                <div class="varian text-center">Varian Rasa</div>
                                <div class="row justify-content-center">
                                    @foreach ($flavour_bakpia as $k => $v)
                                    <div class="m-1">
                                        <img src="{{ uri($v->icon) }}" class="flavor-icon select-varian varian-bakpia-{{$k}}" data-img="{{ uri($v->main_image) }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="box-varian text-center" id="slide-bolu">
                                <h5>Bolu</h5>
                                <h4 class="flavor-title">{{ $flavour_bolu[0]->product->title }}</h4>
                                <img src="{{ uri($flavour_bolu[0]->main_image) }}" class="w-100 image-varian">
                                
                                <div class="varian text-center">Varian Rasa</div>
                                <div class="row justify-content-center">
                                    @foreach ($flavour_bolu as $k => $v)
                                    <div class="m-1">
                                        <img src="{{ uri($v->icon) }}" class="flavor-icon select-varian varian-bolu-{{$k}}" data-img="{{ uri($v->main_image) }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-5">
                            <ul class="nav nav-tabs tabs-varian">
                                <li class="nav-item">
                                  <a class="nav-link active" onclick="$('#slide-bakpia').show();$('#slide-bolu').hide();$('.varian-bakpia-0').click();" data-toggle="tab" href="#varian-bakpia">Bakpia Kukus</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" onclick="$('#slide-bakpia').hide();$('#slide-bolu').show();$('.varian-bolu-0').click();" data-toggle="tab" href="#varian-bolu">Bolu Kukus</a>
                                </ul>
                              
                              <!-- Tab panes -->
                              <div class="tab-content tab-varian-content pt-4">
                                <div class="tab-pane container px-0 active" id="varian-bakpia">
                                    <h4>Isian yang meleleh<br/> di mulut sebagai<br/> <span>elemen of surprise.</span></h4>
                                    <p>Bakpia Kukus Tugu Jogja hadir dengan cita rasa baru, melengkapi khasanah kuliner Jogja. 
                                    Diproses melalui pengukusan, sehingga menghasilkan bakpia dengan perpaduan lembut dan empuk pada 
                                    tekstur kulit terluar, serta varian isi yang langsung meleleh saat digigit.</p>
                                </div>
                                <div class="tab-pane container px-0 fade" id="varian-bolu">
                                    <h4>Isian yang meleleh<br/> di mulut sebagai<br/> <span>elemen of surprise.</span></h4>
                                    <p>Bakpia Kukus Tugu Jogja hadir dengan cita rasa baru, melengkapi khasanah kuliner Jogja. 
                                    Diproses melalui pengukusan, sehingga menghasilkan bakpia dengan perpaduan lembut dan empuk pada 
                                    tekstur kulit terluar, serta varian isi yang langsung meleleh saat digigit.</p>
                                </div>
                              </div>
                        </div>
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
    // $('.owl-varian').owlCarousel({
    //     loop:false,
    //     margin:10,
    //     nav:false,
    //     dots:true,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:1
    //         },
    //         1000:{
    //             items:1
    //         }
    //     }
    // })
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
        $('.our-journey-owl').find(".owl-dots").find('button.owl-dot').each(function(i) {
        
            if ( i === 0 ) {
            $(this).addClass('current');
            }
        });
        $('.carousel').carousel({ interval: false });
    })
    $('.our-journey-owl').find(".owl-dots").find('button.owl-dot').click(function(){
        $(this).addClass('current');
        var index = $('.our-journey-owl').find(".owl-dots").find('button.owl-dot').index( this );
        console.log('index',index)
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
    var image = $(this).attr("data-img");
    $(".image-varian").attr("src", image);
});
</script>
@endsection