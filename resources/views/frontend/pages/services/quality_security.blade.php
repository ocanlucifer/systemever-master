@extends('frontend/layouts/main')

@section('custom_css')
<style>
    /* .alas-background .box-last-content .last-content-service h4 {
        height: 30px !important;
    } */
    .alas-background .box-last-content .last-content-service .apec {
        height: 80px !important;
    }
</style>
@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help<br/> you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="section-home position-relative mt-lg-5 mt-md-4 mt-sm-4 mt-4">
    <div class="container-content">
        <div class="row d-flex justify-content-center mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-9 px-4">
                <div class="info-system-ever text-center">
                    <h3>{{ stringlang('Quality / Security', 'Kualitas / Keamanan') }}</h3>
                </div>
            </div>
        </div>
        <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-tabs-video nav-tabs-feature nav-quality mb-lg-5 mb-md-4 mb-sm-3 mb-3 w-auto">
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto active" data-toggle="tab" href="#tab-menu-1">Cloud Quality <br/> Performance</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-2">Security <br/>Compliance</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-3">APAC CIOoutlook <br/>Top ERP 2018</a>
                    </li>
                    <li class="nav-item mx-lg-4 mx-md-3 mx-1">
                        <a class="nav-link w-auto" data-toggle="tab" href="#tab-menu-4">APAC CIOoutlook<br/> Top ERP 2020</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex mb-lg-5 mb-md-5 mb-sm-4 mb-0">
        <div class="tab-content mb-lg-5 mb-md-4 mb-sm-3 mb-3 w-100">
            <div class="tab-pane active" id="tab-menu-1">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                        <div class="col-lg-12">
                            <div class="media media-quality mb-4">
                                <img class="mr-lg-3 mr-md-3 mr-0" src="{{ asset('assets/img/nipa.png') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                  <h3 class="mt-0">Cloud quality performance</h3>
                                  <p>SystemEver is the Ministry of Science and ICT's Cloud Computing Service Quality Performance Standards (7 criteria: availability, responsiveness, scalability, reliability, service continuity, service support, customer response) from the National IT Industry Promotion Agency (NIPA) The quality performance level has been recognized.</p>
                                  <br class="d-lg-block d-md-block d-none"/>
                                   <p> Issue number: NIPA-CQ-18-001-R, May 2018</p>
                                </div>
                            </div>
                            <table class="table-service">
                                <tr>
                                    <td><b>Service name</b></td>
                                    <td>Cloud SaaS ERP-SystemEver</td>
                                </tr>
                                <tr>
                                    <td><b>Service model</b></td>
                                    <td>Software as a Service (SaaS)</td>
                                </tr>
                                <tr>
                                    <td><b>Service webpage</b></td>
                                    <td>www.systemever.co.kr</td>
                                </tr>
                                <tr>
                                    <td><b>Summary</b></td>
                                    <td>Cloud-based Enterprise Resource Planning (ERP) service that integrates and manages overall business such as personnel, 
                                        salary, accounting, sales, production, materials, purchasing, and income of a company</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                        <div class="col-lg-12">
                            <div class="title-section-tab text-center">
                                <h3>Quality performance test</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row content-quality">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 padding-min-7-mb mb-md-0 mb-3">
                            <div class="box-quality">
                                <img src="{{ asset('assets/img/box.svg') }}" alt="">
                                <div class="caption-box-quality">Availability</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 padding-min-7-mb">
                            <div class="box-quality">
                                <img src="{{ asset('assets/img/reinforcement.svg') }}" alt="">
                                <div class="caption-box-quality">Responsiveness</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 padding-min-7-mb">
                            <div class="box-quality">
                                <img src="{{ asset('assets/img/scalable.svg') }}" alt="">
                                <div class="caption-box-quality">Scalability</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 padding-min-7-mb">
                            <div class="box-quality">
                                <img src="{{ asset('assets/img/responsibility.svg') }}" alt="">
                                <div class="caption-box-quality">Responsibility</div>
                            </div>
                        </div>
                    </div>
                    <div class="row section-alas">
                        <div class="col-lg-12">
                            <div class="title-section-tab text-center">
                                <h3>Checking <br class="d-lg-none d-md-none d-sm-block d-block"> the management system</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alas-background bg-green">
                    <div class="container-content mb-5 d-lg-block d-md-block d-sm-none d-none">
                        <div class="row box-last-content">
                            <div class="col-lg-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset('assets/img/image132.png') }}" alt="">
                                    <div class="desc-last-content px-3">
                                        <h4>Service Continuity</h4>
                                        <p>Securing vision/financial soundness for continued service,
                                        securing internal capabilities/professionalism through internal and 
                                        external training for each field to strengthen service competitiveness</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset('assets/img/image135.png') }}" alt="">
                                    <div class="desc-last-content px-3">
                                        <h4>Service Support</h4>
                                        <p>Provides a multi-device environment for user convenience and secures 
                                            on/offline customer education support system and service user support 
                                            function</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset('assets/img/image133.png') }}" alt="">
                                    <div class="desc-last-content px-3">
                                        <h4>Customer Response</h4>
                                        <p>Secure collection and processing procedures for user requests and complaints</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- mobile --}}
                    <div class="owl-carousel box-last-content owl-checking-management d-lg-none d-md-none d-sm-block d-block">
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset('assets/img/image132.png') }}" alt="">
                                <div class="desc-last-content px-3">
                                    <h4>Service Continuity</h4>
                                    <p>Securing vision/financial soundness for continued service,
                                    securing internal capabilities/professionalism through internal and 
                                    external training for each field to strengthen service competitiveness</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset('assets/img/image135.png') }}" alt="">
                                <div class="desc-last-content px-3">
                                    <h4>Service Support</h4>
                                    <p>Provides a multi-device environment for user convenience and secures 
                                        on/offline customer education support system and service user support 
                                        function</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset('assets/img/image133.png') }}" alt="">
                                <div class="desc-last-content px-3">
                                    <h4>Customer Response</h4>
                                    <p>Secure collection and processing procedures for user requests and complaints</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- endmobile --}}
                </div>
            </div>
            
            <div class="tab-pane container " id="tab-menu-2">
                <div class="row mb-lg-5 mb-md-4 mb-sm-2 mb-2">
                    <div class="col-lg-12">
                        <div class="desc-security-quality">
                            <h3>Security compliance</h3>
                            <p>SystemEver is provided under the security and stability of Microsoft Azure, a Microsoft public cloud service.</p>
                        </div>
                        <table class="table-service d-lg-block d-md-block d-sm-none d-none">
                            <tr>
                                <td><b>Application</b></td>
                                <td>
                                    <ul>
                                        <li>The ERP service applies TLS encryption to ensure the confidentiality and consistency of data in the network section.</li>
                                        <li>To maintain stable service, we have established and operated a high availability architecture, real-time monitoring and vulnerability analysis, and metric analysis system.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Database</b></td>
                                <td>
                                    <ul>
                                        <li>Customer's database is safely stored with TDE (AES-256) encryption, and personal information is strictly managed in accordance with Article 29 of the Personal Information Protection Act and Article 29 of the Information and Communication Network Act.</li>
                                        <li>Customer's password is safely managed by applying one-way encryption (SHA-512).</li>
                                        <li>The customer's database is backed up in near real time and is distributed and stored in data centers around the world.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Host security</b></td>
                                <td>
                                    <ul>
                                        <li>System management is safely managed through firewalls, virtual networks, vaccines, monitoring, auditing, logging, and multi-level access control.</li>
                                        <li>All Azure disks have storage service encryption (SSE) applied to keep your data safe.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Authentication and authorization control</b></td>
                                <td>
                                    <ul>
                                        <li>System access control is strictly controlled by applying minimum privileges only to authorized personnel through a preliminary review management policy for access requests.</li>
                                        <li>All access requests are audited and logged, and can only be accessed through multiple authentication procedures.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Network</b></td>
                                <td>
                                    <ul>
                                        <li>All data stored or transmitted in Azure is encrypted and securely managed.</li>
                                        <li>Azure Cloud provides protection against DDoS attacks through constant traffic monitoring and real-time mitigation of common network level attacks.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Data Center Physical Security</b></td>
                                <td>
                                    <ul>
                                        <li>Azure data center is monitored 24 hours a day, and it is fully equipped with physical security such as fire and earthquake response facilities and access control to safely manage customer data.</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        {{-- mobile --}}
                        <div class="accordion accordion-quality d-lg-none d-md-none d-sm-block d-block" id="accordion-quality">
                            <div class="card card-quality">
                              <div class="card-header" id="acc-head-1">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-1" aria-expanded="true" aria-controls="collapse-quality-1">
                                    Application <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapse-quality-1" class="collapse" aria-labelledby="acc-head-1" data-parent="#accordion-quality">
                                <div class="card-body">
                                    <ul>
                                        <li>The ERP service applies TLS encryption to ensure the confidentiality and consistency of data in the network section.</li>
                                        <li>To maintain stable service, we have established and operated a high availability architecture, real-time monitoring and vulnerability analysis, and metric analysis system.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-head-2">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-2" aria-expanded="false" aria-controls="collapse-quality-2">
                                    Database <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-quality-2" class="collapse" aria-labelledby="acc-head-2" data-parent="#accordion-quality">
                                <div class="card-body">
                                    <ul>
                                        <li>Customer's database is safely stored with TDE (AES-256) encryption, and personal information is strictly managed in accordance with Article 29 of the Personal Information Protection Act and Article 29 of the Information and Communication Network Act.</li>
                                        <li>Customer's password is safely managed by applying one-way encryption (SHA-512).</li>
                                        <li>The customer's database is backed up in near real time and is distributed and stored in data centers around the world.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-head-3">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-3" aria-expanded="false" aria-controls="collapse-quality-3">
                                    Host security <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-quality-3" class="collapse" aria-labelledby="acc-head-3" data-parent="#accordion-quality">
                                <div class="card-body">
                                    <ul>
                                        <li>System management is safely managed through firewalls, virtual networks, vaccines, monitoring, auditing, logging, and multi-level access control.</li>
                                        <li>All Azure disks have storage service encryption (SSE) applied to keep your data safe.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-head-4">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-4" aria-expanded="false" aria-controls="collapse-quality-4">
                                    Authentication and authorization control <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-quality-4" class="collapse" aria-labelledby="acc-head-4" data-parent="#accordion-quality">
                                <div class="card-body">
                                    <ul>
                                        <li>System access control is strictly controlled by applying minimum privileges only to authorized personnel through a preliminary review management policy for access requests.</li>
                                        <li>All access requests are audited and logged, and can only be accessed through multiple authentication procedures.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-head-5">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-5" aria-expanded="false" aria-controls="collapse-quality-5">
                                    Network <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-quality-5" class="collapse" aria-labelledby="acc-head-5" data-parent="#accordion-quality">
                                <div class="card-body">
                                    <ul>
                                        <li>All data stored or transmitted in Azure is encrypted and securely managed.</li>
                                        <li>Azure Cloud provides protection against DDoS attacks through constant traffic monitoring and real-time mitigation of common network level attacks.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-head-6">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-quality-6" aria-expanded="false" aria-controls="collapse-quality-6">
                                    Data Center Physical Security <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-quality-6" class="collapse" aria-labelledby="acc-head-6" data-parent="#accordion-quality">
                                <div class="card-body">
                                    <ul>
                                        <li>Azure data center is monitored 24 hours a day, and it is fully equipped with physical security such as fire and earthquake response facilities and access control to safely manage customer data.</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                        {{-- endmobile --}}
                    </div>
                </div>
                <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="col-lg-12">
                        <div class="desc-security-quality">
                            <h3>Azure compliance</h3>
                            <img src="{{ asset('assets/img/quality-logos.png') }}" alt="" class="w-100 d-block d-md-none">
                            <img src="{{ asset('assets/img/complience.png') }}" class="w-100 d-none d-md-block">
                        </div>
                    </div>
                </div>
                <div class="row mb-md-4 mb-sm-3 mb-3">
                    <div class="col-lg-12">
                        <div class="desc-security-quality">
                            <h3>Compliant with various information protection standards and security controls, 
                                and obtained certifications from government and private industries
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="col-lg-12">
                        <table class="table-certification d-lg-block d-md-block d-sm-none d-none">
                            <thead>
                                <tr>
                                    <th>Program</th>
                                    <th>Applicable country</th>
                                    <th>Type</th>
                                    <th>Explanation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>ISO/IEC 27001 I</b></td>
                                    <td>International</td>
                                    <td>Information protection standard</td>
                                    <td>ISO security standard</td>
                                </tr>
                                <tr>
                                    <td><b>PCI DSS Level 1</b></td>
                                    <td>Financial security certification</td>
                                    <td>Information protection standard</td>
                                    <td>Security standards for Payment Card Industry (PCI), Data Security Standards (DSS)</td>
                                </tr>
                                <tr>
                                    <td><b>SOC 1 SSAE 16 /
                                        ISAE 3402</b></td>
                                    <td>United States of America</td>
                                    <td>Effective security controls</td>
                                    <td>SOC 1 Type 2 of Service Organization Control (SOC), which was the existing SAS70</td>
                                </tr>
                                <tr>
                                    <td><b>SOC 2</b></td>
                                    <td>United States of America</td>
                                    <td>Effective security controls</td>
                                    <td>Azure is SOC 2 Type 2</td>
                                </tr>
                                <tr>
                                    <td><b>FedRAMP / FISMA</b></td>
                                    <td>United States of America</td>
                                    <td>Government security certification</td>
                                    <td>Federal Risk and Authorization Management Program (FedRAMP)</td>
                                </tr>
                                <tr>
                                    <td><b>HIPAA BAA</b></td>
                                    <td>United States of America</td>
                                    <td>Medical institution security certification</td>
                                    <td>Provides HIPAA Business Associate Agreement (BAA) to access Protected Health Information (PHI)</td>
                                </tr>
                                <tr>
                                    <td><b>Section 508 Rehabilitation Act</b></td>
                                    <td>United States of America</td>
                                    <td>Government security certification</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>FERPA</b></td>
                                    <td>United States of America</td>
                                    <td>Information security certification for educational institutions</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>UK G-Cloud IL2</b></td>
                                    <td>England</td>
                                    <td>Government security certification</td>
                                    <td>Impact Level 2 (IL2) certification for G-Cloud supply framework and CloudStore in UK</td>
                                </tr>
                                <tr>
                                    <td><b>EU Safe Harbor
                                        EU Model Clauses</b></td>
                                    <td>Europe</td>
                                    <td>Privacy</td>
                                    <td>Compliance with the seven-clause principles of choice, access, transmission to third parties, security, data integrity and law enforcement.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- mobile --}}
                        <div class="accordion accordion-quality d-lg-none d-md-none d-sm-block d-block" id="accordion-certification">
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-1">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-1" aria-expanded="true" aria-controls="collapse-cert-1">
                                    ISO/IEC 27001 I <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapse-cert-1" class="collapse" aria-labelledby="acc-cert-1" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>International</p>
                                    <h5>Type</h5>
                                    <p>Information protection standard</p>
                                    <h5>Explanation</h5>
                                    <p>ISO security standard</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-2">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-2" aria-expanded="false" aria-controls="collapse-cert-2">
                                    PCI DSS Level 1 <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-2" class="collapse" aria-labelledby="acc-cert-2" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>Financial security certification</p>
                                    <h5>Type</h5>
                                    <p>Information protection standard</p>
                                    <h5>Explanation</h5>
                                    <p>Security standards for Payment Card Industry (PCI), Data Security Standards (DSS)</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-3">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-3" aria-expanded="false" aria-controls="collapse-cert-3">
                                    SOC 1 SSAE 16 / ISAE 3402 <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-3" class="collapse" aria-labelledby="acc-cert-3" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>United States of America</p>
                                    <h5>Type</h5>
                                    <p>Effective security controls</p>
                                    <h5>Explanation</h5>
                                    <p>SOC 1 Type 2 of Service Organization Control (SOC), which was the existing SAS70</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-4">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-4" aria-expanded="false" aria-controls="collapse-cert-4">
                                    SOC 2 <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-4" class="collapse" aria-labelledby="acc-cert-4" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>United States of America</p>
                                    <h5>Type</h5>
                                    <p>Effective security controls</p>
                                    <h5>Explanation</h5>
                                    <p>Azure is SOC 2 Type 2</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-5">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-5" aria-expanded="false" aria-controls="collapse-cert-5">
                                    FedRAMP / FISMA <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-5" class="collapse" aria-labelledby="acc-cert-5" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>United States of America</p>
                                    <h5>Type</h5>
                                    <p>Government security certification</p>
                                    <h5>Explanation</h5>
                                    <p>Federal Risk and Authorization Management Program (FedRAMP)</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-6">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-6" aria-expanded="false" aria-controls="collapse-cert-6">
                                    HIPAA BAA <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-6" class="collapse" aria-labelledby="acc-cert-6" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>United States of America</p>
                                    <h5>Type</h5>
                                    <p>Medical institution security certification</p>
                                    <h5>Explanation</h5>
                                    <p>Provides HIPAA Business Associate Agreement (BAA) to access Protected Health Information (PHI)</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-7">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-7" aria-expanded="false" aria-controls="collapse-cert-7">
                                    Section 508 Rehabilitation Act <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-7" class="collapse" aria-labelledby="acc-cert-7" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>United States of America</p>
                                    <h5>Type</h5>
                                    <p>Government security certification</p>
                                    <h5>Explanation</h5>
                                    <p></p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-8">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-8" aria-expanded="false" aria-controls="collapse-cert-8">
                                    FERPA <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-8" class="collapse" aria-labelledby="acc-cert-8" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>United States of America</p>
                                    <h5>Type</h5>
                                    <p>Information security certification for educational institutions</p>
                                    <h5>Explanation</h5>
                                    <p></p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-9">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-9" aria-expanded="false" aria-controls="collapse-cert-9">
                                    UK G-Cloud IL2 <i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-9" class="collapse" aria-labelledby="acc-cert-9" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>Europe</p>
                                    <h5>Type</h5>
                                    <p>Privacy</p>
                                    <h5>Explanation</h5>
                                    <p>Compliance with the seven-clause principles of choice, access, transmission to third parties, security, data integrity and law enforcement.</p>
                                </div>
                              </div>
                            </div>
                            <div class="card card-quality">
                              <div class="card-header" id="acc-cert-10">
                                <h2 class="mb-0">
                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-cert-10" aria-expanded="false" aria-controls="collapse-cert-10">
                                    EU Safe Harbor EU Model Clauses<i class="fa fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                              <div id="collapse-cert-10" class="collapse" aria-labelledby="acc-cert-10" data-parent="#accordion-certification">
                                <div class="card-body">
                                    <h5>Applicable country</h5>
                                    <p>Europe</p>
                                    <h5>Type</h5>
                                    <p>Privacy</p>
                                    <h5>Explanation</h5>
                                    <p>Compliance with the seven-clause principles of choice, access, transmission to third parties, security, data integrity and law enforcement.</p>
                                </div>
                              </div>
                            </div>
                        </div>
                        {{-- endmobile --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="media media-quality media-framework mb-lg-4 mb-sm-0 mb-0">
                            {{-- <img class="mr-5" src="{{ asset('assets/img/image203.png') }}" alt="Generic placeholder image"> --}}
                            <div class="media-body">
                              <h3 class="mt-0">Microsoft Security Compliance <br> Framework</h3>
                               <ul>
                                   <li>Security objectives are tailored to the needs of business and industry.</li>
                                   <li>Security analysis and best practices are established to detect and respond to threats.</li>
                                   <li>We perform high-level security benchmark analysis to meet compliance.</li>
                                   <li>We continuously obtain certification through constant monitoring and testing.</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="tab-menu-3">
                <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                    <div class="row mb-lg-5 mb-md-4 mb-sm-3 mb-3">
                        <div class="col-lg-12">
                            <div class="media media-quality media-erp mb-4">
                                <img class="mr-5 d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/image201.png') }}" alt="">
                                <div class="media-body pr-lg-4 pr-md-4">
                                    <div class="d-lg-none d-md-none d-sm-flex d-flex align-items-center justify-content-start">
                                        <img class="mr-3" src="{{ asset('assets/img/image201.png') }}" alt="">
                                        <div>
                                            <h3 class="mt-0">Younglimwon Soft Lab, selected as <br>
                                            “Top 10 ERP Solution Provider 2018”</h3>
                                            <h5>Leading ERP Solution and Service Provider Announced by APAC CIO Outlook</h5>
                                        </div>
                                    </div>
                                    <div class="d-lg-block d-md-block d-sm-none d-none">
                                        <h3 class="mt-0">Younglimwon Soft Lab, selected as <br>
                                        “Top 10 ERP Solution Provider 2018”</h3>
                                        <h5>Leading ERP Solution and Service Provider Announced by APAC CIO Outlook</h5>
                                    </div>
                                    <p>While the ERP market has been on a remarkable upward trajectory in ERP adoption and implementation over the past few years, it is difficult to find an ERP that offers reasonable price and value for global small/mid-sized companies.</p>
                                    <p> However, Korea's Younglimwon Soft Lab, which focuses on market strategy, has achieved excellent results in the ERP field by satisfying the demands of the SME market in terms of business management functions. It was evaluated that it made it possible to enter the Japanese, Indonesian and Vietnamese markets with a successful attack.</p>
                                </div>
                            </div>
                            <table class="table-service">
                                <tr>
                                    <td><b>Service name</b></td>
                                    <td>Cloud SaaS ERP-SystemEver</td>
                                </tr>
                                <tr>
                                    <td><b>Service model</b></td>
                                    <td>Software as a Service (SaaS)</td>
                                </tr>
                                <tr>
                                    <td><b>Service webpage</b></td>
                                    <td>www.systemever.co.kr</td>
                                </tr>
                                <tr>
                                    <td><b>Summary</b></td>
                                    <td>Cloud-based Enterprise Resource Planning (ERP) service that integrates and manages overall business such as personnel, 
                                        salary, accounting, sales, production, materials, purchasing, and income of a company</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row section-alas">
                        <div class="col-lg-12">
                            <div class="title-section-tab text-center">
                                <h3>Features of SystemEver seen by APAC CIO outlook</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alas-background bg-green alas-bg-apac">
                    <div class="container-content mb-lg-5 mb-md-4 mb-sm-3 mb-3 d-lg-block d-md-block d-sm-none d-none">
                        <div class="row box-last-content">
                            <div class="col-lg-4 col-md-4">
                                <div class="last-content-service pb-4">
                                    <img class="" src="{{ asset('assets/img/image132.png') }}" alt="">
                                    <div class="desc-last-content-apec px-3">
                                        <h4 class="apec">Delivering technical perfection and business value</h4>
                                        <p>The goal is to provide customers with value including real-time business processing, 
                                            integrated system, planning management, and management accounting of profitability analysis 
                                            through SystemEver, the first and only system in Korea to receive the'Cloud Computing Service 
                                            Quality Certification'.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset('assets/img/image135.png') }}" alt="">
                                    <div class="desc-last-content-apec px-3">
                                        <h4 class="apec">Lower costs, <br> get more</h4>
                                        <p>A rational system that allows you to select and use the necessary modules and 
                                            add modules as your business grows because it is possible to provide a module 
                                            configuration based on a subdivided service according to the customer's needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="last-content-service pb-4">
                                    <img src="{{ asset('assets/img/image133.png') }}" alt="">
                                    <div class="desc-last-content-apec px-3">
                                        <h4 class="apec">Ultimate solution for small <br> and midsize companies</h4>
                                        <p>All business information such as inventory information and cash flow can be checked in real time with SystemEver anytime, anywhere</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- mobile --}}
                    <div class="owl-carousel box-last-content owl-apac d-lg-none d-md-none d-sm-block d-block">
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset('assets/img/image132.png') }}" alt="">
                                <div class="desc-last-content-apec px-3">
                                    <h4>Delivering technical perfection and business value</h4>
                                    <p>The goal is to provide customers with value including real-time business processing, 
                                        integrated system, planning management, and management accounting of profitability analysis 
                                        through SystemEver, the first and only system in Korea to receive the'Cloud Computing Service 
                                        Quality Certification'.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset('assets/img/image135.png') }}" alt="">
                                <div class="desc-last-content-apec px-3">
                                    <h4>Lower costs, <br> get more</h4>
                                    <p>A rational system that allows you to select and use the necessary modules and 
                                        add modules as your business grows because it is possible to provide a module 
                                        configuration based on a subdivided service according to the customer's needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="last-content-service pb-4">
                                <img src="{{ asset('assets/img/image133.png') }}" alt="">
                                <div class="desc-last-content-apec px-3">
                                    <h4>Ultimate solution for small <br class="d-lg-block d-md-block d-sm-none d-none"> and midsize companies</h4>
                                    <p>All business information such as inventory information and cash flow can be checked in real time with SystemEver anytime, anywhere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- endmobile --}}
                </div>
            </div>
            <div class="tab-pane " id="tab-menu-4">
                <div class="container-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="media media-quality media-apac2 border-media pb-5 mb-lg-5 mb-md-5 mb-3">
                                <img class="mr-3 d-lg-block d-md-block d-sm-none d-none" src="{{ asset('assets/img/image202.png') }}" alt="">
                                <div class="media-body pr-lg-5 pr-md-5">
                                    <div class="d-lg-none d-md-none d-sm-flex d-flex align-items-center justify-content-start">
                                        <img class="mr-3" src="{{ asset('assets/img/image202.png') }}" alt="">
                                        <div>
                                            <h3 class="mt-0">Younglimwon Soft Lab, selected as <br>
                                                “Top Cloud Solution Providers 2020”</h3>
                                            <h5>Cloud ERP solution and service provider suitable for the 4th industrial revolution announced by APAC CIO outlook</h5>
                                        </div>
                                    </div>
                                    <div class="d-lg-block d-md-block d-sm-none d-none">
                                        <h3 class="mt-0">Younglimwon Soft Lab, selected as <br>
                                            “Top Cloud Solution Providers 2020”</h3>
                                        <h5>Cloud ERP solution and service provider suitable for the 4th industrial revolution announced by APAC CIO outlook</h5>
                                    </div>
                                     
                                    <p>ERP products designed for the business process of a company can change the growth process of a company by excellently visualizing 
                                        the business functions of the company, and through this, the organization can quickly respond to various technical challenges or 
                                        new market demands. One of these practical and growth-oriented ERP solutions is provided by Younglimwon Soft Lab (hereinafter referred 
                                        to as Younglimwon), a world leader specialized in ERP solutions based on Cloud SaaS.</p>
                                    <p>Founded in 1993, Younglimwon is a solution provider headquartered in Korea, helping SMEs implement the best practices necessary 
                                        for business excellence. It strikes the right balance between meeting customer needs and customizing cost-effective ERP, providing
                                        industry-specific solutions that customers can easily use without modification. In addition, the cloud-based SystemEver and K-System Ace
                                        products provide the competitive advantage you need in enterprise environments with advanced tools to effectively manage business operations.
                                        </p>
                                    <p>Through these innovations, Younglimwon has won national R&D programs twice over the past 10 years. In 2011-13, the World Best Software (WBS) program
                                        received $4.5 million, and the 2015--17 GCS (Global Creative Software) program received $4 million each.</p>
                                    <p>Younglimwon completed the cloud SaaS-based SystemEver and customized K-System Ace ERP products with the corresponding operation module through the support of such national 
                                        R&D programs and accumulated experience in building ERP to respond to various client needs.</p>
                                    <p> Issue number: NIPA-CQ-18-001-R, May 2018</p>
                                    <p>Currently, Younglimwon is providing ERP solutions suitable for the era of the 4th Industrial Revolution to more than 2,000 companies at home and abroad across various industrial 
                                        fields, and aims to become Asia's No. 1 in Southeast Asia such as Malaysia, Vietnam, and Indonesia. We are expanding the follow-up market such as.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-4 mb-md-4  mb-2">
                        <div class="col-lg-12">
                            <div class="desc-security-quality text-center">
                                <h3>Features of Cloud SaaS ERP “SystemEver” <br class="d-lg-block d-md-block d-sm-none d-none"> as seen by APAC CIO Outlook
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="list-features-cloud">
                                <div class="nomer">1</div>
                                <div class="desc-cloud">OneCustomers can select business function modules according to the business environment.</div>
                            </div>
                            <div class="list-features-cloud">
                                <div class="nomer">2</div>
                                <div class="desc-cloud">Due to the Cloud SaaS architecture, you pay according to the business process you use.</div>
                            </div>
                            <div class="list-features-cloud">
                                <div class="nomer">3</div>
                                <div class="desc-cloud">Business processes by industry group are designed to be applied according to the business environment of customers, so they can respond to and manage work that may occur due to the expansion of the company's size.</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="list-features-cloud">
                                <div class="nomer">4</div>
                                <div class="desc-cloud">With the “Process Menu” applied with an intuitive interface, customers can recognize the work flow at a glance.</div>
                            </div>
                            <div class="list-features-cloud">
                                <div class="nomer">5</div>
                                <div class="desc-cloud">Stitch API, an interface hub, provides flexibility in interworking with other systems such as banks, POS, groupware, PDAs, barcodes and MES.</div>
                            </div>
                            <div class="list-features-cloud">
                                <div class="nomer">6</div>
                                <div class="desc-cloud">All business processes are also provided in an optimized mobile environment, providing information sharing, collaboration with colleagues, and task execution functions to field users in real time.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')
<script>
    $('.owl-checking-management').owlCarousel({
        loop:true,
        margin:20,
        stagePadding: 90,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.owl-apac').owlCarousel({
        loop:true,
        margin:20,
        stagePadding: 90,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>

@endsection
