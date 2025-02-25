@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'FAQ ' . activelang()
])

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
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <form action="{{ route('get.pages.support.support') }}" method="GET">
                        <div class="box-search px-4">
                            <div class="input-group search-faq">
                                <input type="text" class="form-control txt-search" placeholder="Describe your problem?" aria-describedby="basic-addon2" name="q" value="{{get('q')}}">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><img src="{{ asset('assets/img/search.svg') }}" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </form>
               </div>
           </div>
       </div>
    </section>
    @include('systemever/includes/breadcrumbs')
    <section class="section-faq pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 my-3">
                    <h4 style="color: #009944;">{{ count($faq) }} result for "{{get('q')}}"</h4>
                </div>
                <div class="col-lg-12 col-md-12 position-relative box-desc-faq ">
                    <div class="tab-content bg-white px-3 pt-3 pb-5" id="v-pills-tabContent">
                        <div id="accordion-1">
                            @foreach($faq as $k => $v)
                                @php $i = $k; @endphp
                                <div class="card card-faq">
                                    <div class="card-header" id="headcard-{{ $i }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
                                                {{$v->question}}
                                            <i class="fa fa-angle-down"></i>
                                            </button>
                                        </h5>
                                    </div>
                                
                                    <div id="collapse-{{ $i }}" class="collapse " aria-labelledby="headcard-{{ $i }}" data-parent="#accordion-1">
                                        <div class="card-body pt-0 pb-3">
                                            {!!$v->answer!!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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