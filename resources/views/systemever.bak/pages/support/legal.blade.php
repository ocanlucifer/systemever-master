@extends('systemever/layouts/main')

@section('custom_css')
<style>
    .box-desc-faq .tab-content {
        box-shadow : none !important;
    }

    .card-faq .card-header {
        border-bottom: 0px solid #D9D9D9 !important;
        border-top: 1px solid #D9D9D9;
    }
</style>
@endsection
@section('content')
    <section class="section-banner-full mb-lg-1 position-relative">
        <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
        <div class="caption-banner  d-flex align-items-center">
            <div class="container">
                <h1>{!! stringlang('Making Your <br>Business Better', 'Jadikan Bisnismu <br> Lebih Baik') !!}</h1>
                <p>{{ stringlang('Growth Together with your Business', 'Tumbuh Bersama dengan Bisnis anda') }}</p>
            </div>
        </div>
    </section>
    @include('systemever/includes/breadcrumbs')
    <section class="section-faq pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3 col-md-4 overflow-hide pr-4">
                   <div class="title-pages mb-4 pl-3"> 
                       <h3>Legal</h3>
                    </div>
                    <div class="box-nav-tab">
                        <div class="nav flex-lg-column flex-md-column nav-side-menu-faq nav-pills mb-lg-0 mb-md-0 mb-sm-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($post as $k => $v)
                            <a class="nav-link pl-3 {{ $v->slug == $slug ? 'active' : '' }}" id="pills-{{$k}}" data-toggle="pill" href="#content-{{$k}}" role="tab" aria-controls="content-{{$k}}" aria-selected="{{ $k == 0 ? 'true' : 'false' }}">{{$v->title}}</a>
                            @endforeach
                        </div>
                    </div>
                </div> 
                <div class="col-lg-9 col-md-8 position-relative box-desc-faq pt-md-4 mt-md-5">
                    <div class="tab-content bg-white px-3 pt-md-3 pb-5" id="v-pills-tabContent">
                    @foreach($post as $no => $cat)
                        <div class="tab-pane desc-tcpp fade show {{ $cat->slug == $slug ? 'active' : '' }}" id="content-{{$no}}"  role="tabpanel" aria-labelledby="pills-1">
                            <h4 class="pl-0">{{$cat->title}}</h4>
                            <div id="accordion-{{$no}}">
                               {!!$cat->body!!}
                            </div>
                        </div>
                    @endforeach
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