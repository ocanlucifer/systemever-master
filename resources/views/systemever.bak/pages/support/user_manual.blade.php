@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'User Manual ' . activelang()
])
@section('custom_css')
<style>
    .manual-main-body img {
        max-width: 100%;
    }
</style>
@endsection
@section('content')
<section class="section-banner-full mb-lg-1 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner  d-flex align-items-center">
        <div class="container">
            <h1>How can we help <br/> you?</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('systemever/includes/breadcrumbs')
</div>
<section class="section-faq pb-5">
    <div class="container">
        <div class="row mb-4 d-lg-flex d-md-flex d-sm-none d-none">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 overflow-hide pr-4">
               <div class="title-pages mb-4 pl-lg-3 pl-md-3 pl-1"> 
                   <h3>{!!stringlang('User Manual', 'Panduan Pengguna')!!}</h3>
                </div>
                <div class="box-nav-tab d-lg-block d-md-block d-sm-none d-none">
                    <div class="nav flex-lg-column flex-md-column nav-side-menu-faq nav-pills mb-lg-0 mb-md-0 mb-sm-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($data as $k => $v)
                        <a class="nav-link pl-3 {{ $k == 0 ? 'active' : '' }}" id="pills-{{ $v->id }}" data-toggle="pill" href="#content-{{ $v->id }}" role="tab" aria-controls="content-{{ $v->id }}" aria-selected="{{ $k == 0 ? 'true' : 'false' }}">{{ $v->title }}</a>
                        @endforeach
                        {{-- <a class="nav-link pl-3" id="pills-2" data-toggle="pill" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false">Easy to attach document / picture file in Journal Entry</a>
                        <a class="nav-link pl-3" id="pills-3" data-toggle="pill" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Easy to edit Chart of Account</a>
                        <a class="nav-link pl-3" id="pills-4" data-toggle="pill" href="#content-4" role="tab" aria-controls="content-4" aria-selected="false">Easy to change financial statement language</a>
                        <a class="nav-link pl-3" id="pills-5" data-toggle="pill" href="#content-5" role="tab" aria-controls="content-5" aria-selected="false">Easy to execute depreciation</a> --}}
                    </div>
                </div>
            </div> 
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 position-relative box-desc-faq pt-lg-4 pt-md-4 pt-0 mt-lg-5 mt-md-5 mt-0">
                {{-- tab desktop --}}
                <div class="tab-content bg-white px-lg-3 px-md-3 px-1 pt-3 pb-5 d-lg-block d-md-block d-sm-none d-none" id="v-pills-tabContent">
                    @foreach($data as $k => $v)
                    <div class="tab-pane desc-tcpp fade show {{ $k == 0 ? 'active' : '' }}" id="content-{{ $v->id }}"  role="tabpanel" aria-labelledby="pills-{{ $v->id }}">
                        <h4>{{ $v->title }}</h4>
                        <div class="manual-main-body">
                            {!! $v->body !!}
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="tab-pane desc-tcpp fade" id="content-2"  role="tabpanel" aria-labelledby="pills-2">
                        <h4>Easy to attach document/picture file in Journal Entry</h4>
                        <p>
                            In the new era, physical storage for is no longer necessary. Moreover, that would likely to be more less efficient and ineffective. 
                            AccounTax enables you to save your physical documents or evidences by attach them in every journal even in each line of Journal. 
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab2.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div>
                    <div class="tab-pane desc-tcpp fade" id="content-3"  role="tabpanel" aria-labelledby="pills-3">
                        <h4>Easy to edit Chart of Account</h4>
                        <p>
                            AccounTax Chart of Account is designed to fulfill your company needs, but sometimes cash & bank accounts or expense accounts the company have another preferences. 
                            AccounTax accommodate you to customized it to fit your company needs.
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab3.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div>
                    <div class="tab-pane desc-tcpp fade" id="content-4"  role="tabpanel" aria-labelledby="pills-4">
                        <h4>Easy to change financial statement language</h4>
                        <p>
                            If you have needs to provide the financial statements for the foreign employee, do not change or translate it yourself. 
                            AccounTax enables you to serve financial statement in several language (English, Korean, Bahasa). Simply just choose it in financial statements as picture below.
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab4.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div>
                    <div class="tab-pane desc-tcpp fade" id="content-5"  role="tabpanel" aria-labelledby="pills-5">
                        <h4>Easy to Execute Depreciation</h4>
                        <p>
                            Depreciation is an accounting method used to allocate the cost of an asset over its useful life which may alter the original cost of a fixed asset.
                            If you find it difficult to calculate the depreciation of business assets, or you have too many assets that make it difficult for you to calculate the value of each asset. 
                            In AccounTax we have the solution to simply calculate and generate the depreciation Journal automatically. 
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab5.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- mobile responsive --}}
        <div class="row mb-4 d-lg-none d-md-none d-sm-flex d-flex">
            <div class="col-12 overflow-hide pr-4" id="menu_user_guide_mobile">
                <div class="back-to-list">
                    <a href="javascript:;" onclick="backToList()"> <img src="{{ asset('assets/img/arrow-left-green.svg') }}" alt=""> Back</a>
                </div>
                <div class="title-pages mt-4 mb-4"> 
                    <h3>{!!stringlang('User Manual', 'Panduan Pengguna')!!}</h3>
                </div>
                <ul class="list-group list-nav-group-user-guide-mobile">
                    @foreach ($data as $k => $v)
                    <li class="list-group-item"><a href="javascript:;" onclick="showContent('{{ $v->id }}')"><div> {{ $v->title }}</div> <i class="fa fa-angle-right"></i></a></li>
                    @endforeach
                    {{-- <li class="list-group-item"><a href="javascript:;" onclick="showContent('2')"><div> Easy to attach document / picture file in Journal Entry</div><i class="fa fa-angle-right"></i></a></li>
                    <li class="list-group-item"><a href="javascript:;" onclick="showContent('3')"><div> Easy to edit Chart of Account</div><i class="fa fa-angle-right"></i></a></li>
                    <li class="list-group-item"><a href="javascript:;" onclick="showContent('4')"><div> Easy to change financial statement language </div><i class="fa fa-angle-right"></i></a></li>
                    <li class="list-group-item"><a href="javascript:;" onclick="showContent('5')"><div> Easy to execute depreciation</div><i class="fa fa-angle-right"></i></a></li> --}}
                </ul>
                <div class="card-content-mobile">
                    @foreach ($data as $k => $v)
                    <div class="desc-tcpp desc-content-um-mobile" id="content-mobile-{{ $v->id }}">
                        <h4>{{ $v->title }}</h4>
                        <div class="manual-main-body">
                            {!! $v->body !!}
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="desc-tcpp desc-content-um-mobile" id="content-mobile-2">
                        <h4>Easy to attach document/picture file in Journal Entry</h4>
                        <p>
                            In the new era, physical storage for is no longer necessary. Moreover, that would likely to be more less efficient and ineffective. 
                            AccounTax enables you to save your physical documents or evidences by attach them in every journal even in each line of Journal. 
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab2.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div>
                    <div class="desc-tcpp desc-content-um-mobile" id="content-mobile-3">
                        <h4>Easy to edit Chart of Account</h4>
                        <p>
                            AccounTax Chart of Account is designed to fulfill your company needs, but sometimes cash & bank accounts or expense accounts the company have another preferences. 
                            AccounTax accommodate you to customized it to fit your company needs.
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab3.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div>
                    <div class="desc-tcpp desc-content-um-mobile" id="content-mobile-4">
                        <h4>Easy to change financial statement language</h4>
                        <p>
                            If you have needs to provide the financial statements for the foreign employee, do not change or translate it yourself. 
                            AccounTax enables you to serve financial statement in several language (English, Korean, Bahasa). Simply just choose it in financial statements as picture below.
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab4.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
                    </div>
                    <div class="desc-tcpp desc-content-um-mobile" id="content-mobile-5">
                        <h4>Easy to Execute Depreciation</h4>
                        <p>
                            Depreciation is an accounting method used to allocate the cost of an asset over its useful life which may alter the original cost of a fixed asset.
                            If you find it difficult to calculate the depreciation of business assets, or you have too many assets that make it difficult for you to calculate the value of each asset. 
                            In AccounTax we have the solution to simply calculate and generate the depreciation Journal automatically. 
                        </p>
                        <p><img src="{{ asset('assets/img/img-um-tab5.png') }}" alt=""/></p>
                        <p>
                            Good Luck!
                        </p>
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
<script>
    function backToList(){
        $('.back-to-list').removeClass('active');
        $('.list-nav-group-user-guide-mobile').removeClass('hidden');
        $('.card-content-mobile').removeClass('active');
        $('.desc-content-um-mobile').removeClass('active');
    }
    function showContent(id){
        $('.back-to-list').addClass('active');
        $('.list-nav-group-user-guide-mobile').addClass('hidden');
        $('.card-content-mobile').addClass('active');
        $('.desc-content-um-mobile').removeClass('active');
        $('#content-mobile-'+id).addClass('active');
    }
</script>
@endsection