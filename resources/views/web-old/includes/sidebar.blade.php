<div class="sidebar">
    <div class="box-menu-sidebar">
        <ul class="list-unstyled">
            <li><a class=" {{ Request::segment(2)=='about' ? 'active':'' }}" href="{{ url('frontend/about') }}">About <i class="fa fa-angle-right"></i></a></li>
            <li><a class=" {{ Request::segment(2)=='product' ? 'active':'' }}" href="{{ url('frontend/product') }}">Products <i class="fa fa-angle-right"></i></a></li>
            <li><a class=" {{ Request::segment(2)=='article' ? 'active':'' }}" href="{{ url('frontend/article') }}">Article <i class="fa fa-angle-right"></i></a></li>
            <li><a class=" {{ Request::segment(2)=='store' ? 'active':'' }}" href="{{ url('frontend/store/official-store') }}">Store <i class="fa fa-angle-right"></i></a></li>
            <li><a class=" {{ Request::segment(2)=='promo' ? 'active':'' }}" href="{{ url('frontend/promo') }}">Promo <i class="fa fa-angle-right"></i></a></li>
            <li><a class=" {{ Request::segment(2)=='faq' ? 'active':'' }}" href="{{ url('frontend/faq') }}">FAQ <i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>
</div>
<div class="backdrop"></div>