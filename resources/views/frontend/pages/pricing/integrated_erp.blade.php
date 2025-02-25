@extends('frontend/pages/pricing/pricing')

@section('custom_css')
@endsection

@section('content_pricing')
<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-4 px-md-3 px-3 mb-lg-0 mb-md-0 mb-5">
                <div class="title-account bg-merah-redup mb-5">
                    i5 Trading and Distribution ERP
                </div>
                <div class="row pt-lg-3 pt-md-3 pt-0 row-min-7-mb">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        <div class="box-price bg-yellow pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-yellow">Standard</div>
                            </div>
                            <div class="start-form">Monthly</div>
                            <h2>1<span class="digit2">.9</span><small>juta </small><span class="permonth"> per month</span></h2>
                        </div>
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4">
                            <div class="body-service support border-bottom py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-4">
                                    <li><div class="list">5 users</div></li>
                                    <li><div class="list">Free up to 100GB</div></li>
                                </ul>
                                <button class="btn-oval bg-yellow btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">Get Quotation</button>
                            </div>
                            <div class="body-service box-nav-tab integrated py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i5-trading-body">
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Accounting</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Purchase</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Sales</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Inventory</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Consigning</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Import</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Export</div></li>
                                    <li><img src="{{ asset('assets/img/check-yellow.svg') }}" alt=""><div class="list">Merchandise Cost</div></li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-yellow w-100" data-toggle="modal" data-target="#modal-request-demo">Request Demo</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        <div class="box-price bg-marun pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-marun">Enterprise</div>
                            </div>
                            <div class="start-form">Monthly</div>
                            <h2>3<span class="digit2">.5</span><small>juta </small><span class="permonth"> per month</span></h2>
                        </div>
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4">
                            <div class="body-service support border-bottom py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-4">
                                    <li><div class="list">5 users</div></li>
                                    <li><div class="list">Free up to 100GB</div></li>
                                </ul>
                                <button class="btn-oval  bg-marun btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">Get Quotation</button>
                            </div>
                            <div class="body-service box-nav-tab integrated py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i5-trading-body">
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Accounting</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Purchase</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Sales</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Inventory</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Consigning</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Import</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Export</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Merchandise Cost</div></li>
                                    <li><img src="{{ asset('assets/img/check-marun.svg') }}" alt=""><div class="list">Total Cost</div></li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-marun w-100" data-toggle="modal" data-target="#modal-request-demo">Request Demo</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 px-lg-4 px-md-3 px-3">
                <div class="title-account bg-blue-medium mb-5" id="pricing-i7">
                    i7 Manufacturing ERP
                </div>
                <div class="row pt-lg-3 pt-md-3 pt-0 row-min-7-mb">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        <div class="box-price bg-light-blue pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-light-blue">Standard</div>
                            </div>
                            <div class="start-form">Monthly</div>
                            <h2>6<span class="digit2">.5</span><small>juta </small><span class="permonth"> per month</span></h2>
                        </div>
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4">
                            <div class="body-service support border-bottom  py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-4">
                                    <li><div class="list">5 users</div></li>
                                    <li><div class="list">Free up to 100GB</div></li>
                                </ul>
                                <button class="btn-oval bg-light-blue btn-get-quotation" data-toggle="modal" data-target="#modal-request-quotation">Get Quotation</button>
                            </div>
                            <div class="body-service box-nav-tab integrated py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i7-manufacture-body">
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Accounting</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Purchase</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Sales</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Inventory</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Consigning</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Import</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Export</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Production Cost</div></li>
                                    <li><img src="{{ asset('assets/img/check-light-blue.svg') }}" alt=""><div class="list">Production</div></li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-light-blue w-100" data-toggle="modal" data-target="#modal-request-demo">Request Demo</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7-mb">
                        <div class="box-price bg-blue pt-lg-5 pt-md-4 pt-4 pb-4">
                            <div class="box-grade">
                                <div class="grade grade-blue">Enterprise</div>
                            </div>
                            <div class="start-form">Monthly</div>
                            <h2>8<span class="digit2">.5</span><small>juta </small><span class="permonth"> per month</span></h2>
                        </div>
                        <div class="box-service px-2 mb-lg-5 mb-md-5 mb-sm-4 mb-4">
                            <div class="body-service support border-bottom  py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="support-list mb-4">
                                    <li><div class="list">5 users</div></li>
                                    <li><div class="list">Free up to 100GB</div></li>
                                </ul>
                                <button class="btn-oval bg-blue btn-get-quotation">Get Quotation</button>
                            </div>
                            <div class="body-service box-nav-tab integrated  py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2 i7-manufacture-body">
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Accounting</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Purchase</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Sales</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Inventory</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Consigning</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Import</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Export</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Production Cost</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Production</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Subcontract</div></li>
                                    <li><img src="{{ asset('assets/img/check-biru.svg') }}" alt=""><div class="list">Total Cost of Profitability Analysis</div></li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-blue w-100" data-toggle="modal" data-target="#modal-request-demo">Request Demo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection