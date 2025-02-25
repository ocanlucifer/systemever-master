<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs tabs-varian tab-product d-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(2)=='' ? 'active':'' }}" href="{{ route("get.store") }}">Official Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(2)=='mitra' ? 'active':'' }}" href="{{ route("get.store.mitra") }}">Store Mitra</a>
            </li>
        </ul>
    </div>
</div>