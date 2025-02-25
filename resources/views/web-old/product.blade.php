@extends('web/layouts/main')

@section('custom_css')

@endsection
@section('content')
<section class="banner-about position-relative">
    <div class="bawah-header" style="background-image: url('{{ asset("assets/img/bawah-menu.svg") }}')"></div>
    <img src="{{ asset('assets/img/banner-product.svg') }}" alt="">
    <div class="batik-after-banner d-flex flex-column" style="background-image: url('{{ asset("assets/img/bawah-banner3.svg") }}')"></div>
</section>
@include('web/includes/breadcrumbs')

<section class="product-list mb-5 pb-5 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs tabs-varian tab-product d-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="nav-link active" onclick="select_slide('slide-bakpia')" data-toggle="tab" href="#varian-bakpia">Bakpia Kukus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="select_slide('slide-bolu')" data-toggle="tab" href="#varian-bolu">Bolu Kukus</a>
                    </li>
                </ul>
                    
                    <!-- Tab panes -->
                <div class="tab-content tab-product-list pt-4">
                    <div class="tab-pane container px-0 active" id="varian-bakpia">
                        <div class="row">
                            @foreach ($bakpia as $v)
                            <div class="col-lg-4 item-product position-relative mb-4">
                                <a data-toggle="modal" data-target="#exampleModalCenter" class="product-modal" data-product="{{ base64_encode(json_encode($v->toArray())) }}">
                                    <img class="img-product" src="{{ uri($v->featured_image) }}" alt="">
                                    @if (!empty($v->recomended))
                                    <div class="like"><img src="{{ asset('assets/img/like.svg') }}" alt=""></div>
                                    @endif
                                    <div class="title-product text-center text-uppercase">{{$v->type}}</div>
                                    <div class="subtitle-product text-center ">{{$v->title}}</div>
                                    <div class="harga-product text-center ">Rp {{ nominal($v->price) }}</div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane container px-0 fade" id="varian-bolu">
                        <div class="row">
                            @foreach ($bolu as $v)
                            <div class="col-lg-4 item-product position-relative mb-4">
                                <a data-toggle="modal" data-target="#exampleModalCenter" class="product-modal" data-product="{{ base64_encode(json_encode($v->toArray())) }}">
                                    <img class="img-product" src="{{ uri($v->featured_image) }}" alt="">
                                    @if (!empty($v->recomended))
                                    <div class="like"><img src="{{ asset('assets/img/like.svg') }}" alt=""></div>
                                    @endif
                                    <div class="title-product text-center text-uppercase">{{$v->type}}</div>
                                    <div class="subtitle-product text-center ">{{$v->title}}</div>
                                    <div class="harga-product text-center ">Rp {{ nominal($v->price) }}</div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vektor-product position-absolute">
        <img src="{{ asset('assets/img/Vector-product1.svg') }}" alt="">
    </div>
    <div class="vektor-product position-absolute">
        <img src="{{ asset('assets/img/Vector-product2.svg') }}" alt="">
    </div>
    <div class="vektor-product position-absolute">
        <img src="{{ asset('assets/img/Vector-product3.svg') }}" alt="">
    </div>
    <div class="vektor-product position-absolute">
        <img src="{{ asset('assets/img/Vector-product3.svg') }}" alt="">
    </div>
    <div class="vektor-product position-absolute">
        <img src="{{ asset('assets/img/Vector-product1.svg') }}" alt="">
    </div>
    <div class="vektor-product position-absolute">
        <img src="{{ asset('assets/img/Vector-product2.svg') }}" alt="">
    </div>
</section>
@include('web/includes/modals/product-detail')
@endsection

@section('footer')
    @include('web/includes/footer')
@endsection

@section('custom_js')
<script>
    var controller = new ScrollMagic.Controller();
    $(".product-list").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-product");
        tl.to(child, 1, { y: -100, ease: Linear.easeNone });
    var scene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.4,
        duration: "100%"
    })
        .setTween(tl)
        // .addIndicators()
        .addTo(controller);
    });
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
    $(".modal-product").attr("src", object.featured_image);
    $(".modal-varian").html(object.varian);
    $(".modal-price").html("Rp" + formatRupiah(object.price));
    $(".modal-tokopedia").attr("href", object.tokopedia_url);
    $(".modal-shopee").attr("href", object.shopee_url);
});

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