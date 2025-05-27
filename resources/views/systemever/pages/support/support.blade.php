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
        <img src="{{ asset_to_webp(asset('assets/img/portrait-woman-customer-service-worker.png')) }}" alt="">
        <div class="caption-banner  d-flex align-items-center">
            <div class="container">
                <h1>{!! stringlang('How can we help <br/> you?', 'Apakah anda membutuhkan bantuan') !!}</h1>
                <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
            </div>
        </div>
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <form action="{{ route('get.pages.support.support') }}" method="GET">
                        <div class="box-search px-lg-4 px-md-4 px-sm-1 px-1">
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
    <div class="d-lg-block d-md-block d-sm-none d-none">
        @include('systemever/includes/breadcrumbs')
    </div>
    <section class="section-faq pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 overflow-hide pr-4">
                   <div class="title-pages mb-4 pl-lg-3 pl-md-3 pl-1">
                       <h3>{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</h3>
                    </div>
                    <div class="box-nav-tab d-lg-block d-md-block d-sm-none d-none">
                        <div class="nav flex-lg-column flex-md-column nav-side-menu-faq nav-pills mb-lg-0 mb-md-0 mb-sm-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($faq_category as $k => $v)
                            <a class="nav-link pl-3 {{ $k == 0 ? 'active' : '' }}" id="pills-{{$k}}" data-toggle="pill" href="#content-{{$k}}" role="tab" aria-controls="content-{{$k}}" aria-selected="{{ $k == 0 ? 'true' : 'false' }}">{{$v->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 position-relative box-desc-faq pt-lg-4 pt-md-4 pt-0 mt-lg-5 mt-md-5 mt-0">
                    {{-- tab desktop --}}
                    <div class="tab-content bg-white px-lg-3 px-md-3 px-1 pt-3 pb-5 d-lg-block d-md-block d-sm-none d-none" id="v-pills-tabContent">
                        @foreach($faq_category as $no => $cat)
                            <div class="tab-pane desc-tcpp fade show {{ $no == 0 ? 'active' : '' }}" id="content-{{$no}}"  role="tabpanel" aria-labelledby="pills-1">
                                <h4>{{$cat->name}}</h4>
                                <div id="accordion-{{$no}}">
                                    @foreach($faq[$cat->id] as $k => $v)
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

                                            <div id="collapse-{{ $i }}" class="collapse " aria-labelledby="headcard-{{ $i }}" data-parent="#accordion-{{$no}}">
                                                <div class="card-body pt-0 pb-1">
                                                    {!!$v->answer!!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- mobile responsive accordion --}}
                    <div id="accordion-menu" class="accordion-faq-menu d-block d-md-none">
                        @foreach($faq_category as $no => $cat)
                            @php $x = $no; @endphp
                            <div class="card card-faq">
                                <div class="card-header" id="headcard-menu-{{ $x }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-menu-{{ $x }}" aria-expanded="true" aria-controls="collapse-menu-{{ $x}}">
                                        <h4>{{$cat->name}}</h4>
                                        <i class="fa fa-angle-down"></i>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse-menu-{{ $x }}" class="collapse " aria-labelledby="headcard-menu-{{ $x }}" data-parent="#accordion-menu">
                                    <div class="card-body pt-0">
                                        <div id="accordion-mb-1" class="accordion-mb">
                                            @foreach($faq[$cat->id] as $k => $v)
                                                @php $n = $k; @endphp
                                                <div class="card card-faq">
                                                    <div class="card-header" id="headcard-mb-{{ $n }}">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-mb-{{ $n }}" aria-expanded="true" aria-controls="collapse-mb-{{ $n }}">
                                                                {{$v->question}}
                                                            <i class="fa fa-angle-down"></i>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse-mb-{{ $n }}" class="collapse " aria-labelledby="headcard-mb-{{ $n }}" data-parent="#accordion-mb-1">
                                                        <div class="card-body">
                                                            {!!$v->answer!!}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
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
