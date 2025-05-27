<section class="section-consultant">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-lg-start justify-content-sm-center justify-content-center">
                <div class="title-form-consultant">
                    {{-- @if (activelang() == "EN")
                    <h5>{{ stringlang('Talk to Our Consultant', 'Bicarakan pada Konsultan Kami') }}</h5>
                    <h3>Need Bookkeeping Solution <br> for your Busines?</h3>
                    <p>We can help you get to know us better by providing steps to use SystemEver.</p>
                    @else
                    <h5>Hubungi Konsultan Kami</h5>
                    <h3>Butuh Software ERP untuk Bisnis Anda?</h3>
                    <p>Kami dapat membantu Anda mengenal kami lebih baik dengan memberikan langkah-langkah untuk menggunakan SystemEver.</p>
                    @endif --}}
                    <h5>{{ $meta->home_contact_title }}</h5>
                    <h3>{{ $meta->home_contact_question }}</h3>
                    <p>{{ $meta->home_contact_desc }}</p>
                    <div class="d-flex justify-content-lg-start justify-content-md-center justify-content-center pt-0 px-lg-0 px-md-3 px-5">
                        <a href="{{ route('get.contact') }}" class="btn-oval btn-view-detail btn-white-orange btn-block mt-4 text-center">
                        {{ stringlang('Contact Us', 'Hubungi Kami','문의하기') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 box-img-consult position-relative">
                <div class="img-consultant d-flex justify-content-lg-end justify-content-sm-center justify-content-center">
                    <img src="{{ asset_to_webp(asset('assets/img/bussiness-people-working-team-office2.png')) }}" alt="">
                </div>
                <img src="{{ asset('assets/img/Ellipse26.svg') }}" alt="" class="img-dots-1">
                <img src="{{ asset('assets/img/Ellipse36.svg') }}" alt="" class="img-dots-2">
                <img src="{{ asset('assets/img/Ellipse36.png') }}" alt="" class="img-dots-3">
                <img src="{{ asset('assets/img/Ellipse39.svg') }}" alt="" class="img-dots-4">
            </div>
        </div>
    </div>
</section>
