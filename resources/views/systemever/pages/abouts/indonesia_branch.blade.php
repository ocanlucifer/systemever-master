@extends('systemever/pages/abouts/about', [
    'spesifice_page_seo' => 'About Indonesia Branch ' . activelang(),
    'main_banner' => $data->main_banner,
    'main_banner_title' => $data->main_banner_title,
])
@section('custom_css')
<style>
.abu {
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
    filter: grayscale(1); /* Microsoft Edge and Firefox 35+ */
  }
</style>
@endsection
@section('content_about')
<section class="mb-5">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-4 col-md-4 d-md-block d-sm-none d-none">
                <div class="profile">
                    <div class="img-avatar text-center">
                        <img src="{{ asset_to_webp(uri($data->CRI_photo)) }}" alt="">
                    </div>
                    <div class="name-title text-center">
                        <h5>{{$data->CRI_name}}</h5>
                        <!--<p>Chief in Representative Indonesia</p>-->
                        <p>{{ stringlang("President Director", "President Director", "대표") }}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 pl-lg-5 pl-md-4 pl-sm-3 pl-3">
                <div class="desc-about-branch pb-lg-4 pb-md-4 pb-sm-3 pb-0">
                    <div class="greetings mb-lg-5 mb-md-4 mb-4">
                        <p><b><i>{!!  str_replace("(永林院 )", "</i>(永林院 )<i>", $data->green_text_detail)  !!}</b></i> </p>
                    </div>
                    <hr>
                    <br class="d-lg-block d-md-block d-none">
                    <p>{!! nl2br($data->regular_text_detail) !!}</p>
                    <hr class="d-lg-block d-md-block d-none">
                    <br class="d-lg-block d-md-block d-none">
                    <div class="d-lg-block d-md-block d-sm-none d-none">
                        <img src="{{ asset('assets/fl/logo-simpli.jpeg') }}" alt="" style="height:56px">
                        <!--<img src="{{ asset('assets/img/logo.svg') }}" alt="">-->
                        <!--<div class="slogan">{{ stringlang('Making Your Business Better', 'Making Your Business Better') }}</div>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-md-none d-sm-block d-block">
                <div class="profile mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                    <div class="img-avatar text-center">
                        <img src="{{ asset_to_webp(uri($data->CRI_photo)) }}" alt="">
                    </div>
                    <div class="name-title text-center">
                        <h5>{{$data->CRI_name}}</h5>
                        <!--<p>Chief in Representative Indonesia</p>-->
                        <p>President Director</p>
                    </div>
                </div>
                <div class="d-lg-none d-md-none d-sm-block d-block desc-about-branch">
                    <img src="{{ asset('assets/fl/logo-simpli.jpeg') }}" alt="" >
                    <!--<img src="{{ asset('assets/img/logo.svg') }}" alt="">-->
                    <!--<div class="slogan">{{ stringlang('Making Your Business Better', 'Making Your Business Better') }}</div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mansonry mb-5">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-12 px-lg-3 px-md-3 px-sm-0 px-0">
                <div class="grid">
                    <div class="grid-item">
                        <img class="abu" src="{{ asset_to_webp(uri($data->photo_grid_item->photo)) }}" alt="{{ $v->title }}">
                        <img class="color" src="{{ asset_to_webp(uri($data->photo_grid_item->photo)) }}" alt="{{ $v->title }}">
                        <div class="caption-grid">
                            {{ $data->photo_grid_item->title }}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width2->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width3">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width3->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width3->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width3->title)}}
                        </div>
                    </div>
                    <div class="grid-item">
                        <img class="abu" src="{{ asset_to_webp(uri($data->photo_grid_item_2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->photo_grid_item_2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->photo_grid_item_2->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width3b">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width3_2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width3_2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width3_2->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width4">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width4->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width4->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width4->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width5 d-none d-md-block">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width5->photo)) }}" alt="">
                        <img class="color " src="{{ asset_to_webp(uri($data->grid_item_width5->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width5->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width5 d-block d-md-none">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width7->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width7->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width7->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width6">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width6->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width6->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width6->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width7 d-none d-md-block">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width7->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width7->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width7->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width7 d-block d-md-none">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width5->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width5->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width5->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width8">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width8->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width8->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width8->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width8">
                        <img class="abu" src="{{ asset_to_webp(uri($data->grid_item_width8_2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($data->grid_item_width8_2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($data->grid_item_width8_2->title)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2183752816018!2d106.81931731516377!3d-6.234919795486782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1abd9cef7e5%3A0x50d60ac3fcb86387!2sYounglimwon%20Softlab%20Indonesia!5e0!3m2!1sen!2ssg!4v1624000183530!5m2!1sen!2ssg" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="alamat-map pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="title-map">
                        SystemEver Indonesia
                    </div>
                </div>
                <div class="col-lg-4  mb-3">
                    <div class="desc-map">
                        Address: Menara Jamsostek Tower Selatan lt.12 <br>
                        Jl. Jend. Gatot Subroto kav.38 Jakarta Selatan, 12710
                    </div>
                </div>
                <div class="col-lg-4  mb-3">
                    <div class="desc-map">
                        <a href=""> Email: info@systemever.com</a> <br>
                        <a href=""> Whatsapp: +62-8119717708</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
