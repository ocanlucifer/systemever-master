@extends('web/layouts/main')

@section('custom_css')

@endsection

@section('seogo')
    <title>{{ ordefault($seo->title, "Bakpia Kukus Jogja - FAQ") }}</title>
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
<div class="bg-gading">
    @include('web/includes/breadcrumbs')
    <section class="section-faq pb-5 position-relative">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 col-md-4 pr-lg-5 pr-md-5 overflow-hide">
                   <div class="title-pages"> 
                       <h1>{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</h1>
                    </div>
                    <div class="box-nav-tab">
                        <div class="nav flex-lg-column flex-md-column nav-side-menu-faq nav-pills mb-lg-0 mb-md-0 mb-sm-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @php $c = 0; @endphp
                            @foreach($faq as $k => $fa)
                            @php $c++; @endphp
                            <a class="nav-link {{ $c == 1 ? 'active' : '' }}" id="pills-{{md5($k)}}" data-toggle="pill" href="#content-{{md5($k)}}" role="tab" aria-controls="content-{{md5($k)}}" aria-selected="true">{{$k}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8  position-relative box-desc-faq ">
                    <div class="tab-content bg-white px-3 pt-3 pb-5" id="v-pills-tabContent">
                        @php $c = 0; @endphp
                        @foreach($faq as $k => $fa)
                            @php $c++; @endphp
                            <div class="tab-pane fade {{ $c == 1 ? 'show active' : '' }} }}" id="content-{{ md5($k) }}" role="tabpanel" aria-labelledby="pills-{{ md5($k) }}">
                                <div id="accordion-1">
                                    
                                    @foreach($fa as $v)
                                        @php $i = $v->id; @endphp
                                        <div class="card card-faq">
                                            <div class="card-header" id="headcard-{{ $i }}">
                                                <h5 class="mb-0">
                                                <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
                                                    {{ $v->question }} <i class="fa fa-angle-down"></i>
                                                </button>
                                                </h5>
                                            </div>
                                        
                                            <div id="collapse-{{ $i }}" class="collapse " aria-labelledby="headcard-{{ $i }}" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    {!! $v->answer !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="vektor-faq position-absolute">
            <img src="{{ asset('assets/img/Vektor-faq-3.svg') }}" alt="">
        </div>
        <div class="vektor-faq position-absolute">
            <img src="{{ asset('assets/img/Vektor-faq-1.svg') }}" alt="">
        </div>
        <div class="vektor-faq position-absolute">
            <img src="{{ asset('assets/img/Vektor-faq-2.svg') }}" alt="">
        </div>
        <div class="vektor-faq position-absolute">
            <img src="{{ asset('assets/img/Vektor-faq-3.svg') }}" alt="">
        </div>
        <div class="vektor-faq position-absolute">
            <img src="{{ asset('assets/img/Vektor-faq-4.svg') }}" alt="">
        </div>
        <div class="vektor-faq position-absolute">
            <img src="{{ asset('assets/img/Vektor-faq-2.svg') }}" alt="">
        </div>
    </section>
</div>

@endsection

@section('footer')
<div class="bg-gading">
    @include('web/includes/footer')
</div>
@endsection

@section('custom_js')
<script>
    var controller = new ScrollMagic.Controller();
    $(".section-faq").each(function() {
        var tl = new TimelineMax();
        var child = $(this).find(".vektor-faq");
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
@endsection