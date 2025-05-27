<footer>
    <div class="footer-cta" style="background:#232323 !important;overflow-x:hidden">
        <div class="container ">
            <img src="{{ asset('assets/fl/city.svg') }}" alt="">
            <div class="row h-100">
                <div class="col-lg-6 col-12 h-lg-100 d-flex align-items-lg-center align-items-end pr-lg-0">
                    <strong>
                        {{-- {!! stringlang('Make Your Business #Easier<br>with System Ever Indonesia', 'Pastikan Bisnismu #JadiLebihMudah<br>bersama System Ever Indonesia') !!} --}}
                        System Ever Indonesia와 <br> 함께 고객기업이 경영을 더 잘하게
                    </strong>
                </div>
                <div class="col-lg-6 col-12 h-lg-100 d-flex align-items-start align-items-lg-center justify-content-end pl-lg-5">
                    {{-- <a href="{!! stringlang('/en/contact', '/contact') !!}"  class="custom-button"> --}}
                        {{-- {!! stringlang('Request Demo', 'Jadwalkan Demo') !!} --}}
                        {{-- 데모 요청 --}}
                    {{-- </a> --}}

                    <a href="https://wa.me/6281119971017?text=Hello, I want to know more about system ever" target="_blank" class="custom-button">
                        <i class="fab fa-whatsapp"></i> &nbsp; 무료 상담 받기
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mx-lg-0 mx-1 pt-5">
            <div class="col-lg-12 mb-lg-4">
                <div class="row pb-4i border-bottom-footer">
                    <div class="col-lg-8 col-12 px-0">
                        <div class="logo-footer pl-0">
                            <img class="logo" src="{{ asset('assets/fl/logo.png') }}" alt="Logo SystemEver" style="height:40px">
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 px-0 mt-4 mt-lg-0">
                        <div class="sosmed-link">
                            <ul class="list-unstyled d-flex justify-content-end">
                                <li><a href="https://www.facebook.com/systemeverid/" target="_blank"><img src="{{ asset('assets/fl/fb.svg') }}" alt=""></a></li>
                                <li><a href="https://www.instagram.com/systemeverid/" target="_blank"><img src="{{ asset('assets/fl/ig.svg') }}" alt=""></a></li>
                                <li><a href="https://id.linkedin.com/company/ylwid" target="_blank"><img src="{{ asset('assets/fl/in.svg') }}" alt=""></a></li>
                                <li><a href="https://www.youtube.com/channel/UCzadpIiDI1LPCp0RVvBeY8Q" target="_blank"><img src="{{ asset('assets/fl/yt.svg') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-4i">
                    <div class="col-lg-5 col-md-4 pb-4 d-flex d-lg-none pl-2">
                        <ul class="list-unstyled menu-footer">
                            <li>
                                <a href="{{ route('get.pages.abouts.indonesia_branch') }}">
                                    {{-- {{ stringlang('About', 'Tentang') }} --}}
                                    회사소개
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.solutions.accounting_management_systems') }}">
                                    {{-- {{ stringlang('Solution', 'Solusi') }} --}}
                                    솔루션
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.services.feature') }}">
                                    {{-- {{ stringlang('Service', 'Layanan') }} --}}
                                    서비스
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.article.article') }}">
                                    {{-- {{ stringlang('Business Insights', 'Business Insight') }} --}}
                                    인사이트
                                </a>
                            </li>
                        </ul>
                        {{-- <ul class="list-unstyled menu-footer">
                            <li>
                                <a href="{{ route('get.pages.support.video') }}"> --}}
                                    {{-- {{ stringlang('Support', 'Dukungan') }} --}}
                                    {{-- 고객지원
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.contact') }}"> --}}
                                    {{-- {{ stringlang('Pricing', 'Harga') }} --}}
                                    {{-- 가격
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.article.article') }}"> --}}
                                    {{-- {{ stringlang('Business Insights', 'Business Insight') }} --}}
                                    {{-- 인사이트
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="col-lg-4 col-md-4 pl-2 pr-lg-5 pr-md-0 pr-5 d-flex justify-content-lg-start justify-content-md-start justify-content-start">
                        <ul class="list-unstyled">
                            <li class="media media-footer mb-4">
                                <img class="mr-3" src="{{ asset('assets/fl/mail.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <b>이메일</b><br />
                                    <a href="mailto:info@systemever.com"> info@systemever.com </a>
                                </div>
                            </li>
                            <li class="media media-footer mb-4">
                                <img class="mr-3" src="{{ asset('assets/fl/wa1.svg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <b>문의</b>
                                    <br />
                                    <a href="tel:+6281119971017">081 119 971 017</a>
                                    <a href="tel:+6221522962129">021 - 5229 621 29</a>
                                </div>
                            </li>
                            <li class="media media-footer mb-4">
                                <img class="mr-3" src="{{ asset('assets/fl/pin.svg') }}" alt="">
                                <div class="media-body">
                                    <b>
                                        {{-- {{ stringlang('Address', 'Alamat') }} --}}
                                        주소
                                    </b>
                                    <br />
                                    <a href="https://g.page/systemever?share" target="_blank">
                                        Menara BP Jamsostek Tower Selatan lt.12 <br />
                                        Jl. Jend. Gatot Subroto kav.38<br />
                                        Jakarta Selatan, 12710
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 pb-3 d-lg-flex d-none">
                        <ul class="list-unstyled menu-footer">
                            <li style="margin-bottom:8px">
                                <strong>
                                    {{-- {{ stringlang('About', 'Tentang') }} --}}
                                    회사소개
                                </strong>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.abouts.indonesia_branch') }}">
                                    {{-- {{ stringlang('About Us', 'Tentang Kami') }} --}}
                                    회사소개
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.solutions.accounting_management_systems') }}">
                                    {{-- {{ stringlang('Solution', 'Solusi') }} --}}
                                    솔루션
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.services.feature') }}">
                                    {{-- {{ stringlang('Service', 'Layanan') }} --}}
                                    서비스
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.article.article') }}">
                                    {{-- {{ stringlang('Business Insights', 'Business Insight') }} --}}
                                    인사이트
                                </a>
                            </li>
                        </ul>
                        {{-- <ul class="list-unstyled menu-footer">
                            <li style="margin-bottom:8px">
                                <strong> --}}
                                    {{-- {{ stringlang('Info', 'Info') }} --}}
                                    {{-- 정보
                                </strong>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.support.video') }}"> --}}
                                    {{-- {{ stringlang('Support', 'Dukungan') }} --}}
                                    {{-- 고객지원
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.contact') }}"> --}}
                                    {{-- {{ stringlang('Pricing', 'Harga') }} --}}
                                    {{-- 가격
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get.pages.article.article') }}"> --}}
                                    {{-- {{ stringlang('Business Insights', 'Business Insight') }} --}}
                                    {{-- 인사이트
                                </a>
                            </li>
                        </ul> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 pl-0 pb-4">
                        <ul class="list-unstyled menu-footer" style="width:100%">
                            <li>
                                <strong>
                                    {{-- {{ stringlang('Get In Touch', 'Tetap Terhubung') }} --}}
                                    문의하세요
                                </strong>
                            </li>
                        </ul>
                        <div class="newsletter">
                            <input type="text" placeholder="이메일을 입력하세요" id="newletter-email">
                            <button id="newsletter-button">구독</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row d-lex">
                <div class="col-12 col-lg-6">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-12">
                                <div>Copyright © PT. System Ever Indonesia. All rights Reserved.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-lg-6 text-right">
                    <div class="copyright">
                        <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" target="_blank" class="text-dark">Terms & Conditions</a> |
                        <a href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}" target="_blank" class="text-dark">Privacy Policy</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>


@section("newsletterjs")
<script>
    $(document).ready(function(){




        $("#newsletter-button").click(function(){
            var form = {
                "_token": "{{ csrf_token() }}",
                "email": $("#newletter-email").val()
            }
            console.log(form)
            $.ajax({
            type:'POST',
            url: '{{ route('get.helper.newsletter') }}',
            data : form,
            success:function(data){
                if (data.code == 200) {
                    Swal.fire({
                        title: 'Success!',
                        text: "Your email has been listed as newsletter member",
                        icon: 'success',
                        confirmButtonColor: '#28a745',
                        confirmButtonText: 'OK'
                    })

                    $("#newletter-email").val("")
                } else {

                    Swal.fire({
                        title: 'Error!',
                        text: data.message,
                        icon: 'warning',
                        confirmButtonColor: '#28a745',
                        confirmButtonText: 'OK'
                    })
                }
            }
        });
        })
    })
</script>

@endsection
