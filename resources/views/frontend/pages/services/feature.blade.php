@extends('frontend/pages/services/service')

@section('content_services')
<section class="section-home position-relative over-flow-hide mt-5 mb-4">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center">
                    <h3>{{ stringlang('Unique Selling Point', 'Kelebihan Produk') }}</h3>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5 d-flex mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-green pl-0 pr-0">
                <div class="video-home feature">
                    <iframe 
                        src="https://www.youtube.com/embed/m3o1KpM2g9w" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    {{-- <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        height="400"
                        poster="{{ asset('assets/img/video.png') }}"
                        data-setup="{}"
                    >
                        <source src="{{ asset('assets/video/react_video.mp4') }}" type="video/mp4" />
                        {{-- <source src="MY_VIDEO.webm" type="video/webm" /> --}}
                        {{-- <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                        >
                        </p>
                    </video>  --}}
                </div>
            </div>
            <div class="col-lg-6 konsep feature bg-green d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/img_konsep.png') }}" alt="">
            </div>
            <div class="col-lg-12 pt-4">
                <div class="caption-img-konsep text-center">Visual-K™  Process Map</div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 d-flex justify-content-start align-items-start desc-map py-lg-3 py-md-3 py-sm-1 px-4">
                <img src="{{ asset('assets/img/check-hijau.svg') }}" alt="">
                <p>Self-design (add, delete or change icon) your business process in <b>One Page</b>.</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 d-flex justify-content-start align-items-start desc-map py-lg-3 py-md-3 py-sm-1 px-4">
                <img src="{{ asset('assets/img/check-hijau.svg') }}" alt="">
                <p>You do not need the traditional pull-down menu which is rather complicated.</p>
            </div>
        </div>
    </div>
    {{-- <div class="img-titik atas">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div>
    <div class="img-titik bawah">
        <img src="{{ asset('assets/img/titik-titik.svg') }}" alt="">
    </div> --}}
  </section>
  <section class="section-work-environment mb-lg-5 mb-md-4 mb-sm-3 mb-4">
      {{-- <div class="container-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="img-proses-map">
                    <img src="{{ asset('assets/img/Group579.png') }}" alt="">
                </div>
            </div>
        </div>
      </div> --}}
    <div class="container">
        <div class="row d-flex">
            <div class="box-list-proses-map">
                <div class="list">Self-Design</div>
                <div class="list">Visibly</div>
                <div class="list">User Friendly</div>
            </div>
            <div class="col-lg-9">
                {{-- <div class="img-circle-hijau">
                    <img src="{{ asset('assets/img/Ellipse141.png') }}" alt="">
                </div> --}}
                <div class="img-map mb-3">
                    <img src="{{ asset('assets/img/Group690.svg') }}" alt="">
                </div>
                <div class="caption-img-map-proses bg-green">
                    Suitable to the implement work environment
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="step-feature d-lg-flex d-md-flex d-sm-block d-block">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-green py-lg-5 py-md-4 py-sm-3 py-3 d-md-block d-none">
            <div class="img-step-feature my-3 pl-lg-5 pl-md-4 pl-sm-0 pl-0">
                <img src="{{ asset('assets/img/Picture.png') }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-green-old py-lg-5 py-md-4 py-sm-3 py-3 d-md-flex d-block align-items-center">
            <div class="img-step-feature my-3 pl-lg-5 pl-md-4 pl-sm-0 pl-0 d-md-none d-block">
                <img src="{{ asset('assets/img/Picture.png') }}" alt="">
            </div>
            <div class="box-list-step my-3">
                <div class="list-step mb-4">
                    <div class="title-list d-flex justify-content-start align-items-center mb-3">
                        <img src="{{ asset('assets/img/lonceng.svg') }}" alt="">
                        <div>
                            <h4>Number Alarm</h4>
                            <p>The number at the Process Icon tells the number of tasks that are not processed yet.</p>
                        </div>
                    </div>
                </div>
                <div class="list-step mb-4">
                    <div class="title-list d-flex justify-content-start align-items-center mb-3">
                        <img src="{{ asset('assets/img/panlock.svg') }}" alt="">
                        <div>
                            <h4>Authority Control</h4>
                            <p> ‘Lock’ means you do not have authority to access this screen.</p>
                        </div>
                    </div>
                </div>
                <div class="list-step">
                    <div class="title-list d-flex justify-content-start align-items-center mb-3">
                        <img src="{{ asset('assets/img/stepbystep.svg') }}" alt="">
                        <div>
                            <h4>Step-by-step</h4>
                            <p>Follow the process map to Entry or Inquiry the data and complete the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <section>
    <div class="container-content">
        <div class="row  mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12 mt-lg-5 mt-md-4 mt-sm-3 mt-3">
                <div class="caption-img-konsep text-center">Features</div>
            </div>
        </div>
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-tabs-video nav-tabs-feature mb-lg-5 mb-md-4 mb-sm-3 mb-3 w-auto">
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" data-toggle="tab" href="#tab-menu-1">Mobile App</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link  w-auto" data-toggle="tab" href="#tab-menu-2">Multilingual</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link  w-auto" data-toggle="tab" href="#tab-menu-3">Multi-currency</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex mb-lg-5 mb-md-5 mb-4">
        <div class="tab-content w-100">
            <div class="tab-pane active" id="tab-menu-1">
                <div class="container-content mb-lg-5 mb-md-4 mb-3">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-12 pl-lg-5 pl-md-5 pl-3">
                            <div class="desc-tab-mobile px-md-0 px-3">
                                <p>SystemEver offer a free mobile app designed to be used the same as the web version. With a smart phone, you can handle your business data real-time.</p> 
                                <div class="row mt-lg-5 mt-md-4 mt-3">
                                    <div class="col-lg-6 col-md-6 col-6 mb-4">
                                        <div class="items-mobile pb-4">
                                            <img src="{{ asset('assets/img/sharing.svg') }}" alt="">
                                            <p>Information sharing</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 mb-4">
                                        <div class="items-mobile pb-4">
                                            <img src="{{ asset('assets/img/effective.svg') }}" alt="">
                                            <p>Effective</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 mb-4">
                                        <div class="items-mobile border-bottom-0 pb-4">
                                            <img src="{{ asset('assets/img/file.svg') }}" alt="">
                                            <p>Real-time data</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6 mb-4">
                                        <div class="items-mobile border-bottom-0 pb-4">
                                            <img src="{{ asset('assets/img/computer.svg') }}" alt="">
                                            <p>Integrated</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="img-mobile-apps text-center">
                                <img src="{{ asset('assets/img/Ellipse142.png') }}" class="latar-hijau" alt="">
                                <img src="{{ asset('assets/img/image196.png') }}" class="mobile-apps" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex d-md-flex d-sm-block d-bloc">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-0 pr-md-0 pr-3">
                        <div class="img-mobile d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                            <img class="mr-3" src="{{ asset('assets/img/Group494.png') }}" alt="">
                            <img src="{{ asset('assets/img/Group533.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                        <div class="row bg-green-medium">
                            <div class="col-lg-12 px-lg-5 px-md-4 px-4 py-4">
                                <ul class="list-unstyled list-feature-mobile">
                                    <li><img src="{{ asset('assets/img/check-white.svg') }}" alt=""><div>Inventory, Funds, Order, Payment, etc in one hand.</div></li>
                                    <li><img src="{{ asset('assets/img/check-white.svg') }}" alt=""><div>Quick Approval </div></li>
                                    <li><img src="{{ asset('assets/img/check-white.svg') }}" alt=""><div>Real-time report, Analytics,Work Progress, etc.</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container " id="tab-menu-2">
                <div class="img-multilingual text-center">
                    <img class="d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/Group498.png') }}" alt="">
                    <img class="d-lg-none d-md-none d-sm-block d-block" src="{{ asset('assets/img/Group755.png') }}" alt="">
                </div>
            </div>
            <div class="tab-pane container " id="tab-menu-3">
                <div class="desc-multi-currency">
                    <p>Currency can be added in 'Currency Reg.'<br/>
                        Supports currency exchange rate reception function through 'Exchange Rate Reg.'
                    </p>
                    <img class="d-lg-block d-md-block d-sm-none d-none" src="{{  asset('assets/img/Group584.png') }}" alt="">
                    <img class="d-lg-none d-md-none d-sm-block d-block" src="{{  asset('assets/img/Group692.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection