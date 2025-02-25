@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Support Guide ' . activelang()
])

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset_to_webp(asset('assets/img/portrait-woman-customer-service-worker.png')) }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="mt-3 mb-lg-5 mb-md-5 mb-sm-4 mb-4 pb-lg-3 pb-md-3">
    <div class="container-content">
        <div class="row mb-lg-5 mb-md-5 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <div class="choose-plan text-center">
                    {{ stringlang('Customer Support Guide', 'Panduan untuk Pelanggan') }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset_to_webp(url_to_svg(uri($data->introduction_inquiry_icon))) }}" alt="">
                            <div>
                                <div class="name-item mb-3">
                                    {{$data->introduction_inquiry_title}}
                                </div>
                                <ul class="list-unstyled mb-0 w-100 d-lg-none d-md-none d-sm-block d-block" >
                                    @foreach($data->introduction_inquiry_info as $v)
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="{{ $v->input }}">
                                        <div class="media-body">
                                            @if (empty($v->link))
                                            {{$v->input}}
                                            @elseif ($v->link == "email") 
                                            <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "phone") 
                                            <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "href") 
                                            <a href="{{$v->input}}"> {{$v->input}}</a>
                                            @else
                                            {{$v->input}}
                                            @endif
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3 w-100">
                                @foreach($data->introduction_inquiry_info as $v)
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="{{ $v->input }}">
                                    <div class="media-body">
                                        @if (empty($v->link))
                                        {{$v->input}}
                                        @elseif ($v->link == "email") 
                                        <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                        @elseif ($v->link == "phone") 
                                        <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                        @elseif ($v->link == "href") 
                                        <a href="{{$v->input}}"> {{$v->input}}</a>
                                        @else
                                        {{$v->input}}
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset_to_webp(url_to_svg(uri($data->connection_failure_icon))) }}" alt="{{$data->connection_failure_title}}">
                            <div>
                                <div class="name-item mb-3">
                                    {{$data->connection_failure_title}}
                                </div>
                                <ul class="list-unstyled mb-0 w-100 d-lg-none d-md-none d-sm-block d-block">
                                    @foreach($data->connection_failure_info as $v)
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="{{$v->input}}">
                                        <div class="media-body">
                                            @if (empty($v->link))
                                            {{$v->input}}
                                            @elseif ($v->link == "email") 
                                            <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "phone") 
                                            <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "href") 
                                            <a href="{{$v->input}}"> {{$v->input}}</a>
                                            @else
                                            {{$v->input}}
                                            @endif
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3 w-100">
                                @foreach($data->connection_failure_info as $v)
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="{{$v->input}}">
                                    <div class="media-body">
                                        @if (empty($v->link))
                                        {{$v->input}}
                                        @elseif ($v->link == "email") 
                                        <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                        @elseif ($v->link == "phone") 
                                        <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                        @elseif ($v->link == "href") 
                                        <a href="{{$v->input}}"> {{$v->input}}</a>
                                        @else
                                        {{$v->input}}
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ asset_to_webp(url_to_svg(uri($data->functional_improvement_icon))) }}" alt="">
                            <div>
                                <div class="name-item mb-3">
                                    {{$data->functional_improvement_title}}
                                </div>
                                <ul class="list-unstyled mb-0 d-lg-none d-md-none d-sm-block d-block">
                                    @if (!empty($data->functional_improvement_info))
                                        @foreach($data->functional_improvement_info as $v)
                                        <li class="media media-guide mb-2">
                                            <img class="mr-3" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="{{$v->input}}">
                                            <div class="media-body d-flex">
                                                @if (empty($v->link))
                                                {{$v->input}}
                                                @elseif ($v->link == "email") 
                                                <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                                @elseif ($v->link == "phone") 
                                                <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                                @elseif ($v->link == "href") 
                                                <a href="{{$v->input}}"> {{$v->input}}</a>
                                                @else
                                                {{$v->input}}
                                                @endif
                                            </div>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                                @foreach($data->functional_improvement_info as $v)
                                    @if (!empty($v->image))
                                    <img class="img-master d-block d-md-none" src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3">
                                @foreach($data->functional_improvement_info as $v)
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ asset_to_webp(url_to_svg(uri($v->icon))) }}" alt="{{$v->input}}">
                                        <div class="media-body d-flex">
                                            @if (empty($v->link))
                                            {{$v->input}}
                                            @elseif ($v->link == "email") 
                                            <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "phone") 
                                            <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "href") 
                                            <a href="{{$v->input}}"> {{$v->input}}</a>
                                            @else
                                            {{$v->input}}
                                            @endif
                                        </div>
                                    </li>
                                    @endforeach
                            </ul>
                            @foreach($data->functional_improvement_info as $v)
                                @if (!empty($v->image))
                                <img class="img-master" src="{{ asset_to_webp(uri($v->image)) }}" alt="">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="list-customer-support">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 py-lg-3 py-md-3 py-0 item-list-support d-flex justify-content-start pl-5 align-items-center">
                            <img src="{{ url_to_svg(uri($data->education_inquiry_icon)) }}" alt="{{$data->education_inquiry_title}}">
                            <div>
                                <div class="name-item mb-3">
                                    {{$data->education_inquiry_title}}
                                </div>
                                <ul class="list-unstyled mb-0 w-100 d-lg-none d-md-none d-sm-block d-block">
                                    @foreach($data->education_inquiry_info as $v)
                                    <li class="media media-guide mb-2">
                                        <img class="mr-3" src="{{ url_to_svg(uri($v->icon)) }}" alt="{{$v->input}}">
                                        <div class="media-body">
                                            @if (empty($v->link))
                                            {{$v->input}}
                                            @elseif ($v->link == "email") 
                                            <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "phone") 
                                            <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                            @elseif ($v->link == "href") 
                                            <a href="{{$v->input}}"> {{$v->input}}</a>
                                            @else
                                            {{$v->input}}
                                            @endif
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-flex d-md-flex d-sm-none d-none  align-items-center py-3 pl-5">
                            <ul class="list-unstyled mb-0 pl-3 w-100">
                                @foreach($data->education_inquiry_info as $v)
                                <li class="media media-guide mb-2">
                                    <img class="mr-3" src="{{ url_to_svg(uri($v->icon)) }}" alt="{{$v->input}}">
                                    <div class="media-body">
                                        @if (empty($v->link))
                                        {{$v->input}}
                                        @elseif ($v->link == "email") 
                                        <a href="mailto:{{$v->input}}"> {{$v->input}}</a>
                                        @elseif ($v->link == "phone") 
                                        <a href="tel:{{$v->input}}"> {{$v->input}}</a>
                                        @elseif ($v->link == "href") 
                                        <a href="{{$v->input}}"> {{$v->input}}</a>
                                        @else
                                        {{$v->input}}
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
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