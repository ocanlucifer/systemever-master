@extends('systemever/pages/abouts/about')

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
                    <div class="title-visi-misi px-lg-0 px-md-0 px-sm-3 px-4 mb-3">Vision</div>
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
                    <div class="title-visi-misi mb-3">Mission</div>
                    <p>{{ $data->mission }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection