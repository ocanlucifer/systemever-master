@extends('frontend/pages/pricing/pricing')

@section('custom_css')
<style>
    .bg-oren-merah {
        background-color: #E66F3B !important;
    }
</style>
@endsection

@section('content_pricing')
<section class="mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="title-account account-tax bg-merah-oren mb-3">
                    Accounting & Tax Consulting Service
                </div>
                <div class="box-price bg-oren-merah pt-lg-5 pt-md-4 pt-4 pb-4">
                    <div class="start-form">Start from</div>
                    <h1>4<span class="digit2">.5</span><small>juta </small><span class="permonth"> per month</span></h1>
                </div>
                <div class="row row-min-7 d-flex">
                    <div class="col-sm-12 padding-min-7">
                        <div class="box-service">
                            <div class="header-service">Optional Service</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7">
                        <div class="box-service h-100">
                            <div>
                                <div class="header-service bg-oren-merah header-service-title-big">Accounting Service</div>
                            </div>
                            <div class="body-service box-nav-tab py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Invoicing, Collection</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Bookkeeping</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Income Statement</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Balance sheet</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Cash Flow</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Management</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 padding-min-7">
                        <div class="box-service h-100">
                            <div>
                                <div class="header-service bg-oren-merah header-service-title-big">Tax Service</div>
                            </div>
                            <div class="body-service box-nav-tab py-lg-4 py-md-4 py-3 px-lg-4 px-md-4 px-2">
                                <ul class="list-unstyled">
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Filling late Taxes / <br> Tax returns</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Personal Taxes</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Business Taxes</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list">Tax Advisory</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list"> PPH 21 personal</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list"> PPH 23</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list"> PPH 26</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list"> PPH 4(2)</div></li>
                                    <li><img src="{{ asset('assets/img/check-join2.png') }}" alt=""><div class="list"> PPN</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="box-final-price px-3 py-2 text-center">
                            The final price will be determinated according to the service you choose
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-service mb-5">
                            <div class="header-service">Support Software Included</div>
                            <div class="body-service support p-4">
                                <ul class="support-list">
                                    <li><div class="list">Usage of i1 AccounTax Service</div></li>
                                    <li><div class="list">5 Users</div></li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn-oval btn-request btn-oren-merah btn-get-question-account w-100" data-toggle="modal" data-target="#modal-request-quotation">Get Quotation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection