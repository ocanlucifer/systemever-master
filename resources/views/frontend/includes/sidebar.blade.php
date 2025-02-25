<div class="sidebar">
    <div class="box-menu-sidebar accordion" id="accordionMenu">
        <ul class="list-unstyled">
            <li>
              <div class="card  d-block">
                <a href="{{ route('frontend.index') }}" class="d-inline-block">
                  <div class="card-header border-bottom-0 pb-2">
                    Home 
                  </div>
                </a>
                <button class="close-sidebar float-right"><img src="{{ asset('assets/img/close-sidebar.svg') }}" alt=""></button>
              </div>
            </li>
            <li>
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-about" aria-expanded="true" aria-controls="collapse-about">
                  <div class="card-header">
                    About <span class="arrow"><i class="fa fa-angle-down"></i></span>
                  </div>
                </a>
                <div id="collapse-about" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li> <a href="{{ url('frontend/about/indonesia-branch') }}">Indonesian Branch</a></li>
                      <li> <a href="{{ url('frontend/about/system-ever') }}">SystemEver</a></li>
                      <li> <a href="{{ url('frontend/about/history') }}">History</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-solution" aria-expanded="true" aria-controls="collapse-solution">
                  <div class="card-header">
                    Solution <span class="arrow"><i class="fa fa-angle-down"></i></span>
                  </div>
                </a>
                <div id="collapse-solution" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li> <a href="{{ url('frontend/solutions/accounting-management-systems') }}">Accounting & Tax Service</a></li>
                      <li> <a href="{{ url('frontend/solutions/i5-trading') }}">Sales / Inventory / Consigning</a></li>
                      <li> <a href="{{ url('frontend/solutions/i7-manufacture') }}">Integrated Manufacturing</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-service" aria-expanded="true" aria-controls="collapse-service">
                  <div class="card-header">
                    Service <span class="arrow"><i class="fa fa-angle-down"></i></span>
                  </div>
                </a>
                <div id="collapse-service" class="collapse" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li> <a href="{{ url('frontend/service/feature') }}">SystemEver Feature</a></li>
                      <li> <a href="{{ url('frontend/service/quality-security') }}">{{ stringlang('Quality / Security', 'Kualitas / Keamanan') }}</a></li>
                      <li> <a href="{{ url('frontend/service/customer-industry') }}">Customer &  Industry</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-support" aria-expanded="true" aria-controls="collapse-support">
                  <div class="card-header">
                    Support <span class="arrow"><i class="fa fa-angle-down"></i></span>
                  </div>
                </a>
                <div id="collapse-support" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li> <a href="{{ url('frontend/support/video') }}">Tutorial Video</a></li>
                      <li> <a href="{{ url('frontend/support/support-guide') }}">Support Guide</a></li>
                      <li> <a href="{{ url('frontend/support/faq') }}">{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-pricing" aria-expanded="true" aria-controls="collapse-pricing">
                  <div class="card-header">
                    Pricing <span class="arrow"><i class="fa fa-angle-down"></i></span>
                  </div>
                </a>
                <div id="collapse-pricing" class="collapse" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li> <a href="{{ url('frontend/pricing/integrated-erp') }}">Integrated ERP</a></li>
                      <li> <a href="{{ url('frontend/pricing/accounting-tax') }}">Accounting & Tax Consulting Services</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-BI" aria-expanded="true" aria-controls="collapse-BI">
                  <div class="card-header">
                    Business Insight <span class="arrow"><i class="fa fa-angle-down"></i></span>
                  </div>
                </a>
                <div id="collapse-BI" class="collapse" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li> <a href="{{ url('frontend/business-insight/article') }}">{{ stringlang('Article', 'Artikel') }}</a></li>
                      <li> <a href="{{ url('frontend/business-insight/news') }}">News</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="language">
              <div class="card">
                <a class="collapsed {{ Request::segment(2)=='about' ? 'active':'' }}" href="#" data-toggle="collapse" data-target="#collapse-lang" aria-expanded="true" aria-controls="collapse-lang">
                  <div class="card-header head-language">
                    Language <span class="arrow"><i class="fa fa-angle-down"></i></span><span class="simbol-lang cl-blue float-right">EN &nbsp;&nbsp;</span>
                  </div>
                </a>
                <div id="collapse-lang" class="collapse" data-parent="#accordionMenu">
                  <div class="card-body">
                    <ul class="list-unstyled choose-language">
                      <li> <a href="">Indonesian</a></li>
                      <li> <a href="">English</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="call-us">
              <div class="card">
                <div class="card-header border-bottom-0">
                  Need Help? <span class="c-blue"><a href="">Call Us</a></span>
                </div>
              </div>
            </li>
        </ul>
    </div>
</div>
<div class="backdrop"></div>