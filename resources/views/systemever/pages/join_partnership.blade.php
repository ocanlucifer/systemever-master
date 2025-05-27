@extends('systemever/layouts/main')

@section('custom_css')
<style>
    .abu {
        filter: gray; /* IE6-9 */
        -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
        filter: grayscale(1); /* Microsoft Edge and Firefox 35+ */
    }
    .fz-20 {
        font-size: 20px !important;
    }
</style>
@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ uri($data->partnership_banner) }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ $data->partnership_banner_title }}</h1>
            <p>{{ $data->partnership_banner_subtitle }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-content-parnership">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-12 px-lg-3 px-md-3 px-3">
                <div class="info-system-ever border-title-parnership pt-lg-4 pt-md-4 pt-4 pb-lg-4 pb-md-4 pb-3 px-lg-3 px-md-3 px-1 mb-4">
                    <h3>{{ $data->partnership_title }}</h3>
                </div>
                <div class="desc-page-partnership px-lg-3 px-md-3 px-1 pb-lg-5">
                    <h4>{!! nl2br($data->partnership_subtitle) !!}</h4>
                </div>
            </div>
        </div>
        {{-- <div class="row  mb-4">
            <div class="col-lg-12 px-lg-3 px-md-3 px-4">
               <section class="section-partnership border-title-parnership  px-lg-3 px-md-3 px-1">
                    <h4>{{ stringlang('Integrated ERP', 'ERP Terintegrasi') }} </h4>
                    <h5>{{ stringlang('[i5 Trading & Distribution; i7 Management Manufacturing]', '[i5 Perdagangan & Distribusi; i7 Manufaktur Manajement]') }} </h5>
                    <div class="row">
                        <div class="col-lg-4 address-partnership">
                            <img src="{{ asset('assets/img/SIT.png') }}" alt="">
                            <h5>PT. SIT Global Systems</h5>
                            <p>Grand Wijaya Center <br>
                                Block F.41 3rd Floor No.11 <br>
                                Kebayoran Baru, South Jakarta - 12160
                            </p>
                        </div>
                    </div>
               </section>
            </div>
        </div> --}}
    </div>
</section>
<section class="section-list-explanation">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-7">
                <ul class="list-group list-group-partnership">
                    @php $i = 0 @endphp
                    @foreach ($data->partnership_feature_list as $v)
                        @if ($i % 2 == 0)
                        <li class="list-group-item">
                            {{-- <a href="{{ $v->partnership_feature_list_url }}"> --}}
                                <img class="left" src="{{ url_to_svg($v->partnership_feature_list_icon) }}" alt=""/>
                                {{$v->partnership_feature_list_title}}
                            {{-- </a> --}}
                        </li>
                        @else
                        <li class="list-group-item">
                            {{-- <a href="{{ $v->partnership_feature_list_url }}"> --}}
                                {{$v->partnership_feature_list_title}}
                                <img class="left" src="{{ url_to_svg($v->partnership_feature_list_icon) }}" alt=""/>
                            {{-- </a> --}}
                        </li>
                        @endif
                        @php $i++ @endphp
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-5 d-lg-flex d-md-flex d-sm-none d-none align-items-center">
                <div class="img-partnership">
                    <img src="{{ uri($data->partnership_feature_image) }}" alt="" />
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-partner-benefit">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-3 px-md-3 px-4">
                <div class="desc-benefit d-lg-none d-md-none d-block">
                    <h3>{{ $data->partnership_benefit_title }}</h3>
                </div>
                <div class="img-partner">
                    <img src="{{ uri($data->partnership_benefit_image) }}" alt="{{ $data->partnership_benefit_title }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-3 px-md-3 px-4">
                <div class="desc-benefit pl-lg-4 pl-md-4 pl-0">
                    <h3 class="d-lg-block d-md-block d-none">{{ $data->partnership_benefit_title }}</h3>
                    <p>{{  $data->partnership_benefit_subtitle }}</p>
                    @if (!empty($data->partnership_benefit_list))
                        @foreach ($data->partnership_benefit_list as $list)
                        <div class="media media-partner-benefit">
                            <img class="mr-3" src="{{ asset('assets/img/check-hijau.svg') }}">
                            <div class="media-body">
                            <h5 class="mt-0">{{ $list->partnership_benefit_list_title }}</h5>
                                {!! nl2br($list->partnership_benefit_list_desc) !!}
                            </div>
                        </div>
                        @endforeach
                    @endif
                    <button class="btn-oval btn-view-detail btn-join-us btn-white-orange mb-lg-4 ml-md-4 ml-0 mt-lg-5 mt-md-5 mt-3" data-toggle="modal" data-target="#modal-patner">{{ stringlang('Join Us', 'Gabung Sekarang', '우리와 함께하세요') }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-content-parnership">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-12 px-lg-3 px-md-3 px-4">
               <section class="section-partnership px-lg-3 px-md-3 px-1">
                    <h4>{{ $data->partnership_consulting_partner }} </h4>
                    {{-- <h5>[i1 AccounTax Service] </h5> --}}
                    <div class="row">
                        @if (!empty($data->partnership_consulting_partner_list))
                            @foreach ($data->partnership_consulting_partner_list as $v)
                            <div class="col-lg-4 address-partnership">
                                <img src="{{ uri($v->partnership_consulting_partner_list_logo) }}" alt="{{ $v->partnership_consulting_partner_list_name }}">
                                <h4 class="fz-20 mb-1">{!! $v->partnership_consulting_partner_list_type ? $v->partnership_consulting_partner_list_type : '&nbsp' !!}</h4>
                                <h5>{{ $v->partnership_consulting_partner_list_name }}</h5>
                                <p>{!! nl2br($v->partnership_consulting_partner_list_address) !!}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
               </section>
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
                        <img class="abu" src="{{ asset_to_webp(uri($photo->photo_grid_item->photo)) }}" alt="{{ $v->title }}">
                        <img class="color" src="{{ asset_to_webp(uri($photo->photo_grid_item->photo)) }}" alt="{{ $v->title }}">
                        <div class="caption-grid">
                            {{ $photo->photo_grid_item->title }}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width2->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width3">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width3->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width3->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width3->title)}}
                        </div>
                    </div>
                    <div class="grid-item">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->photo_grid_item_2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->photo_grid_item_2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->photo_grid_item_2->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width3b">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width3_2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width3_2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width3_2->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width4">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width4->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width4->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width4->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width5 d-none d-md-block">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width5->photo)) }}" alt="">
                        <img class="color " src="{{ asset_to_webp(uri($photo->grid_item_width5->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width5->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width5 d-block d-md-none">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width7->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width7->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width7->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width6">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width6->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width6->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width6->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width7 d-none d-md-block">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width7->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width7->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width7->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width7 d-block d-md-none">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width5->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width5->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width5->title)}}
                        </div>
                    </div>
                    {{-- <div class="grid-item grid-item--width8">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width8->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width8->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width8->title)}}
                        </div>
                    </div>
                    <div class="grid-item grid-item--width8">
                        <img class="abu" src="{{ asset_to_webp(uri($photo->grid_item_width8_2->photo)) }}" alt="">
                        <img class="color" src="{{ asset_to_webp(uri($photo->grid_item_width8_2->photo)) }}" alt="">
                        <div class="caption-grid">
                            {{($photo->grid_item_width8_2->title)}}
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')


@endsection
