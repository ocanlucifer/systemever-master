@extends('systemever/pages/abouts/about', [
    'spesifice_page_seo' => 'About SystemEver ' . activelang(),
    'main_banner' => $data->main_banner,
    'main_banner_title' => $data->main_banner_title,
])

@section('content_about')
<section class="about-systemever mb-lg-5 mb-md-5 mb-sm-4 mb-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
                <h2>{{$data->title}}</h2>
                <p>{{$data->sub_title}}</p>
            </div>
        </div>
        
    </div>
</section>
<section class="section-cabang d-lg-flex d-md-flex d-sm-block d-block">
    <div class="col-lg-6 px-0">
        <img src="{{ asset_to_webp(uri($data->map_photo)) }}" alt="">
    </div>
    <div class="col-lg-6 py-3 px-lg-5 px-md-5 px-sm-4 px-4 d-flex align-items-center justify-content-center">
        <div class="desc-section-cabang">
            <p><b>{!! str_replace("®", "<sup>®</sup>", $data->bold_text_detail)!!}</b></p>
            <p>{!! str_replace("®", "<sup>®</sup>", $data->regular_text_detail)!!}</p>
        </div>
    </div>
</section>
<section class="section-visi-misi py-5 mb-5">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 pr-md-5 pr-0 pl-lg-3 pr-md-3 pl-sm-0 pl-0   pt-lg-4 pt-md-4 pt-sm-3 pt-3
             pt-lg-4 pt-md-4 pt-sm-3  pt-3 border-right-green">
                <div class="box-visi">
                    <div class="title-visi-misi px-lg-0 px-md-0 px-sm-3 px-4 mb-3">{{ stringlang("Vision", "Visi") }}</div>
                    <div class="img-visi mb-lg-3 mb-md-3 mb-0">
                        <img class="img-abc" src="{{ asset('assets/img/image93.png') }}" alt="">
                        <img class="img-erp" src="{{ asset_to_webp(uri($data->vision_photo)) }}" alt="">
                    </div>
                    <div class="px-lg-0 px-md-0 px-sm-3 px-3">
                        <p>{{$data->vision_detail}}</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 py-4 pr-lg-5 pr-md-5 pr-3 pl-lg-3 pr-md-3 pl-sm-3 pl-3 ">
                <div class="box-misi">
                    <div class="title-visi-misi mb-3">{{ stringlang("Mission", "Misi") }}</div>
                    <p>{{ $data->mission }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-medium-business">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-12 mb-5">
                @if (activelang() == "EN")
                <h2>Need ERP Software for Your Small<br/> Medium Business?</h2>
                @else
                <h2>Mengapa SystemEver tepat untuk Usaha <br/>Kecil dan Menengah?</h2>
                @endif
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
                {{-- {{ dd($superiority) }} --}}
                @foreach ($superiority as $v)
                <div class="row mb-4">
                    <div class="col-lg-2 px-0">
                        <img src="{{ url_to_svg(uri($v->icon)) }}" alt="">
                    </div>
                    <div class="col-lg-10 pl-4">
                        {{ $v->description }}
                    </div>
                </div>
                @endforeach
                <div class="row mb-4 pt-3">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-10 justify-content-center">
                        <a class="btn-oval btn-view-detail btn-block text-white text-center btn-white-orange mb-lg-4 m-auto" href="{{ route('get.pages.services.feature') }}">
                            @if (activelang() == "EN")
                            View Detail
                            @else
                            Lihat Detail
                            @endif
                        </a>
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
                    <div class="item home-testimoni">
                        <div class="row">
                            <div class="col-12 d-lg-none d-md-none d-sm-block d-block  px-lg-3 px-md-3 px-4">
                                <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{ $v->name }}">
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3  px-4">
                                <div class="desc-testimoni mb-3 mt-2">
                                    {{ $v->description }}
                                </div>
                                <div class="media media-testimoni d-flex align-items-center">
                                    <img class="mr-3" src="{{ asset_to_webp(uri($v->photo)) }}" alt="{{ $v->name }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0">{{ $v->name }}</h5>
                                        {{ $v->job_title }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 d-lg-block d-md-block d-sm-none d-none">
                                <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{ $v->name }}">
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
@endsection
@section('custom_js')
<script>
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
</script>
@endsection