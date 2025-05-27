@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Home ' . activelang()
])

@section('custom_css')


<!--@include('systemever/includes/swiper')-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.css"  />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

    .bc {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;
        color: #000000;
        display: flex;
        align-items: center;
    }

    .bc .active {
        color: #009944;
        font-weight: bold;
    }

    /* .section-demo {
        opacity: 0;
    } */

    .page-content {
        margin-top: 0;
    }

    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }

    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .font-opensans {
        font-family: 'Open Sans', sans-serif;
    }

    .font-inter {
        font-family: 'Inter', sans-serif;
    }

    .container {
        max-width: 1140px;
        margin: auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    .hsd:hover {
        box-shadow: 0px 4px 20px 0px #00000055;
    }

    .aspect-mod {
        aspect-ratio: 12/11;
    }

    .aspect-mod1 {
        aspect-ratio: 12/8;
    }

    .brandswiper {
        width: calc(100% - 100px);
        height: 256px;
        margin-left: auto;
        margin-right: auto;
    }

    .brandswiper .swiper-slide {
        background: #FAFAFA;
        height: calc((100% - 30px) / 2) !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .brandswiperr.swiper-button-disabled {
        filter: grayscale(1);
    }

    .awwardswiper .swiper-pagination .swiper-pagination-bullet {
        height: 4px;
        width: 18px;
        background: #ababab;
        border-radius: 4px;
        transition: all .3s ease;

    }

    .awwardswiper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
        width: 30px;
        background: #009944;

    }

    @media only screen and (max-width: 1024px) {
        .page-content {
            margin-top: 55px;
        }

        .aspect-mod {
            aspect-ratio: 12/8;
        }

        .brandswiper {
            width: calc(100% - 40px);
            height: 120px;
        }

        .awwardswiper .swiper-slide {
            transition: all .3s ease;
        }

        .awwardswiper .swiper-slide-next {
            transform: scale(1.2);
        }

        .awwardswiper .swiper-pagination .swiper-pagination-bullet {
            width: 15px;

        }

        .awwardswiper .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            width: 20px;

        }
    }
</style>
@endsection
@section('content')

<script>
// var scrollTrigger = 60;
// window.onscroll = function() {
//   if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
//     document.querySelector(".section-demo").style.opacity = 1;
//   } else {
//     document.querySelector(".section-demo").style.opacity = 0;
//   }
// };

</script>
<section class="lg:pt-200px lg:pb-140px pt-20px pb-60px relative">
    <picture class="absolute top-0 left-0 w-full lg:h-700px h-380px">
        <source srcset="{{ asset('assets/fl/home-bg-1.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: bottom center;" />
        <img src="{{ asset('assets/fl/home-bg-1-m.png')}}" alt="" class="w-full h-full object-cover" style="object-position: bottom center;" />
    </picture>
    <div class="container relative">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-[60%]  mx-auto">
                <h1 class="font-poppins lg:text-37px  lg:leading-12 lg:text-left  lg:mb-8 lg:mt-8 mb-4 leading-7 text-21px font-bold text-white text-center">
                    {{ ordefault($meta->banner_title, 'Platform Bisnis Berbasis Cloud untuk Operasional Lebih Efektif') }}</h1>
                <p class="font-opensans text-white lg:text-19px lg:mb-16 mb-6 lg:text-left text-center text-11px ">
                    {!! str_replace("#JadiLebihMudah", '<strong>#JadiLebihMudah</strong>', ordefault($meta->banner_subtitle, 'Kelola bisnis <strong>#JadiLebihMudah</strong> dengan SystemEver.')) !!}
                </p>
                <div class="flex gap-4 justify-center lg:justify-start">
                    <a href="{{ ordefault($meta->demo_url, '#') }}" class="font-montserrat inline-flex items-center justify-center lg:h-48px lg:px-70px lg:text-16px text-12px h-28px px-20px rounded-full bg-white hover:text-[#009944] text-[#009944] font-bold">{{ ordefault($meta->demo_label, 'Demo') }}</a>
                    <a href="{{ ordefault($meta->see_more_url, '#') }}" class="font-montserrat inline-flex items-center justify-center lg:h-48px lg:px-70px lg:text-16px text-12px h-28px px-20px rounded-full bg-transparent hover:text-white text-white font-bold border-1 border-white">{{ ordefault($meta->see_more_button_label, 'Selengkapnya') }}</a>
                </div>
            </div>
            <div class="lg:w-[40%] pt-2">
                <div class="lg:h-[372px] lg:w-[550px] w-[72%] aspect-mod1 overflow-hidden flex items-center justify-center mx-auto lg:-mt-10">
                    <video src="{{ ordefault($meta->home_banner, asset('assets/fl/home.mp4')) }}" autoplay muted loop playsinline class=""></video>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container relative">
        <h2 class="text-center text-19px lg:text-29px font-bold font-montserrat text-[#444444]">{{ ordefault($meta->second_title, 'Solusi Mudah Kelola Bisnis') }}</h2>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4 lg:my-20 my-6">
            @if (!empty($meta->solutions_overviews))
                @foreach ($meta->solutions_overviews as $solution)
                @if ($solution->solutions_overviews_list_route !== 'get.pages.solutions.bms')
                <a href="{{ route($solution->solutions_overviews_list_route) }}" class="w-full aspect-mod rounded-md lg:rounded-2xl hsd transition flex flex-col gap-1 lg:gap-4 items-center p-4 group lg:bg-white bg-[#F7F7F7]">
                    <img src="{{ uri($solution->solutions_overviews_list_icon) }}" alt="{{ $solution->solutions_overviews_list_title }}" class="lg:w-320px w-[50%] object-contain aspect-square ">
                    <strong class="group-hover:text-[#009944] text-[#464646] text-14px lg:text-24px font-semibold font-poppins text-center">{{ $solution->solutions_overviews_list_title }}</strong>
                    <p class="text-9px lg:text-17px text-[#5b5b5b] font-opensans text-center w-[90%] leading-3 lg:leading-6">
                        {{ $solution->solutions_overviews_list_desc }}
                    </p>
                </a>
                @endif
                @endforeach
            @endif
            {{-- <a href="{{ route('get.pages.solutions.i5_trading') }}" class="w-full aspect-mod rounded-md lg:rounded-2xl hsd transition flex flex-col gap-1 lg:gap-4 items-center p-4 group lg:bg-white bg-[#F7F7F7]">
                <img src="{{ asset('assets/fl/home-grid-bms.png')}}" alt="" class="lg:w-320px w-[50%] object-contain aspect-square ">
                <strong class="group-hover:text-[#009944] text-[#464646] text-14px lg:text-24px font-semibold font-poppins text-center">Business
                    Management System (BMS)</strong>
                <p class="text-9px lg:text-17px text-[#5b5b5b] font-opensans text-center w-[90%] leading-3 lg:leading-6">
                    Aplikasi berbasis
                    cloud untuk automisasi penagihan</p>
            </a>
            <a href="{{ route('get.pages.solutions.bms') }}" class="w-full aspect-mod rounded-md lg:rounded-2xl hsd transition flex flex-col gap-1 lg:gap-4 items-center p-4 group lg:bg-white bg-[#F7F7F7]">
                <img src="{{ asset('assets/fl/home-grid-trading.png')}}" alt="" class="lg:w-320px w-[50%] object-contain aspect-square ">
                <strong class="group-hover:text-[#009944] text-[#464646] text-14px lg:text-24px font-semibold font-poppins text-center">ERP
                    Trading & Distribution</strong>
                <p class="text-9px lg:text-17px text-[#5b5b5b] font-opensans text-center w-[90%] leading-3 lg:leading-6">
                    Aplikasi ERP untuk
                    kelola bisnis Trading dan Distribusi secara realtime.</p>
            </a>
            <a href="{{ route('get.pages.solutions.i7_manufacture') }}" class="w-full aspect-mod rounded-md lg:rounded-2xl hsd transition flex flex-col gap-1 lg:gap-4 items-center p-4 group lg:bg-white bg-[#F7F7F7]">
                <img src="{{ asset('assets/fl/home-grid-manufacturing.png')}}" alt="" class="lg:w-320px w-[50%] object-contain aspect-square ">
                <strong class="group-hover:text-[#009944] text-[#464646] text-14px lg:text-24px font-semibold font-poppins text-center">ERP
                    Manufacturing</strong>
                <p class="text-9px lg:text-17px text-[#5b5b5b] font-opensans text-center w-[90%] leading-3 lg:leading-6">
                    ERP berbasis cloud
                    untuk efisiensi bisnis manufaktur.</p>
            </a> --}}
        </div>
    </div>
</section>
<section class="py-8 lg:py-20 bg-[#F9F9F9]">
    <div class="container">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-[50%]">
                <img src="{{ ordefault($meta->virtual_k_pre_image, uri('assets/fl/home-visual-k.png'))}}" alt="" class="mx-auto -ml-2 lg:ml-8">
            </div>
            <div class="lg:w-[45%] flex flex-col justify-center gap-4 lg:gap-6 p-4">
                <h2 class="font-poppins text-14px lg:text-24px text-[#408E61]">{{ ordefault($meta->virtual_k_pre_title, 'Visual-K by Systemever')}}</h2>
                <h3 class="font-poppins text-16px lg:text-27px leading-6 lg:leading-9 font-medium">{{ ordefault($meta->virtual_k_title, 'Visualisasi
                    penggunaan sistem untuk
                    menjamin produk bisa dioperasikan oleh siapapun.') }}</h3>
                <p class="font-opensans text-11px lg:text-19px leading-4 lg:leading-7 text-[#626B79]">
                    {{ ordefault($meta->virtual_k_sub_title, 'Tingkatkan
                    efisiensi kelola bisnis
                    dengan sistem yang mudah digunakan.') }}
                </p>
            </div>
        </div>
    </div>
</section>
<section class="relative pt-8 lg:pt-20 lg:min-h-850px" style="overflow:hidden">
    <picture class="absolute lg:top-40 left-0 w-full h-670px lg:block hidden">
        <source srcset="{{ ordefault($meta->faq_banner, uri('assets/fl/home-faq.png'))  }}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: top center;" />
        <img src="{{ ordefault($meta->faq_banner, uri('assets/fl/home-faq.png')) }}" alt="" class="w-full h-full object-cover" style="object-position: top center;" />
    </picture>
    <div class="container relative">
        <img src="{{ ordefault($meta->faq_banner, uri('assets/fl/home-faq.png')) }}" alt="" class="mx-auto w-[100%] mb-4 lg:hidden">
        <img src="{{ asset('assets/fl/selengkapnya.png')}}" alt="" class="mx-auto w-[100%] -bottom-8 absolute left-0 -z-1 lg:hidden">
        <h2 class="text-center text-19px lg:text-29px font-bold font-montserrat text-[#444444] mb-4 lg:mb-6 leading-6 lg:leading-8 px-2">
            {{ ordefault($meta->faq_title, 'Dipercaya oleh berbagai
            bisnis di segala jenis industri') }}
        </h2>
        <p class="text-10px lg:text-19px text-[#757575] font-inter text-center lg:w-[70%] mx-auto mb-8 lg:mb-16 leading-4 lg:leading-7">
            {{ ordefault($meta->faq_sub_title, 'SystemEver hadir
            untuk memudahkan semua bisnis dan perusahaan di Indonesia untuk dapat terus berkembang.') }}
            </p>
        <div class="lg:w-533px flex flex-col gap-4 lg:gap-6 ml-auto pb-4 " x-data="{active:0,showall:false}">
            @if (!empty($meta->faq_list))
            <?php $xs = 0 ?>
            @foreach ($meta->faq_list as $k => $v)
            <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins leading-4 lg:leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active=={{$xs}}?'bg-[#009944] font-bold text-white':''" @click="active=(active=={{$xs}}?null:{{$xs}})">
                    {{$v->faq_list_question}}<img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active=={{$xs}}?'':'filter brightness-50 transform rotate-180'"></div>
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active=={{$xs}}?'max-h-100 py-4':'max-h-0 py-0 overflow-hidden'">{{ $v->faq_list_answer }}</div>
            </div>
            <?php $xs++ ?>
            @endforeach
            @endif
            {{-- <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins leading-4 lg:leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active==1?'bg-[#009944] font-bold text-white':''" @click="active=(active==1?null:1)">
                    Apakah sistem bekerja secara realtime? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active==1?'':'filter brightness-50 transform rotate-180'">
                </div>
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active==1?'max-h-100 py-4':'max-h-0 py-0 overflow-hidden'">Iya, seluruh produk SystemEver akan mengupdate data secara realtime. </div>
            </div>
            <div class="flex-col rounded-lg bg-white shadow-md overflow-hidden " :class="showall?'flex':'lg:flex hidden'">
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins leading-4 lg:leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active==2?'bg-[#009944] font-bold text-white':''" @click="active=(active==2?null:2)">
                    Bagaimana keamanan produk SystemEver? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active==2?'':'filter brightness-50 transform rotate-180'">
                </div>
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active==2?'max-h-100 py-4':'max-h-0 py-0 overflow-hidden'">Tidak perlu khawatir, SystemEver menggunakan Microsoft Azure yang telah terjamin keamanannya</div>
            </div>
            <div class="flex-col rounded-lg bg-white shadow-md overflow-hidden " :class="showall?'flex':'lg:flex hidden'">
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins leading-4 lg:leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active==3?'bg-[#009944] font-bold text-white':''" @click="active=(active==3?null:3)">
                    Bagaimana saya menghubungi SystemEver? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active==3?'':'filter brightness-50 transform rotate-180'">
                </div>
                <div class="py-4 px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active==3?'max-h-100 py-4':'max-h-0 py-0 overflow-hidden'">Anda bisa menghubungi SystemEver lewat WA, Email ataupun telpon yang ada di detail kontak. </div>
            </div> --}}
            <div class="text-13px font-poppins font-bold text-[#009944] text-center mt-4 lg:hidden flex justify-center" @click="location.href = '{{  route("get.pages.support.support") }}'" :class="showall?'hidden':''">Lihat Selengkapnya</div>
        </div>
    </div>
</section>
<section class="py-8 lg:py-20">
    <div class="container">
        <div class="flex lg:flex-row flex-col">
            <div class="lg:w-[35%] flex flex-col justify-center items-start gap-5 lg:gap-8 lg:pr-16">
                <h2 class="text-[#444444] text-19px font-poppins lg:text-28px font-semibold leading-7 lg:leading-9 text-center lg:text-left">
                    {{ ordefault($meta->brand_list_title, '2000+ bisnis di dunia telah menggunakan
                    produk kami') }}
                </h2>
                <a href="{{ ordefault($meta->brand_list_title_button_target_url, '#') }}" class="h-40px lg:h-48px px-6 rounded-full bg-[#009944] text-white font-montserrat font-bold text-13px lg:text-15px flex items-center justify-center mx-auto lg:mx-0 hover:text-white">
                    {{ ordefault($meta->brand_list_title_button_target_label, 'Gabung Sekarang')}}
                </a>
            </div>
            <div class="lg:w-[65%] flex items-center mt-8 lg:mt-0">
                <div class="brandswiperr swipprev">
                    <img src="{{ asset('assets/fl/slide-act.png')}}" alt="" class="w-9px h-18px transform rotate-180">
                </div>
                <div class="swiper brandswiper">
                    <div class="swiper-wrapper">
                        @if (!empty($meta->brand_list))
                        @foreach ($meta->brand_list as $v)
                        <div class="swiper-slide p-1">
                            <img src="{{ uri($v->brand_list_icon) }}" alt="" class="h-full w-full" style="object-fit:contain">
                        </div>
                        @endforeach
                        @endif
                        {{-- <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-inaa.png')}}" alt="" class="h-full lg:h-auto">
                        </div>
                        <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-staindo.png')}}" alt="" class="h-full lg:h-auto">
                        </div>
                        <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-qst.png')}}" alt="" class="h-full lg:h-auto">
                        </div>
                        <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-bng.png')}}" alt="" class="h-full lg:h-auto">
                        </div>
                        <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-inaa.png')}}" alt="" class="h-full lg:h-auto">
                        </div>
                        <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-staindo.png')}}" alt="" class="h-full lg:h-auto">
                        </div>
                        <div class="swiper-slide p-1">
                            <img src="{{ asset('assets/fl/brand-qst.png')}}" alt="" class="h-full lg:h-auto">
                        </div> --}}
                    </div>
                </div>
                <div class="brandswiperr swipnext">
                    <img src="{{ asset('assets/fl/slide-act.png')}}" alt="" class="w-9px h-18px">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-8 lg:py-16 bg-[#F1F9F1]">
    <div class="container overflow-hidden">
        <h2 class="text-center text-19px lg:text-36px font-bold font-poppins mb-3 lg:mb-6">
            {{ ordefault($meta->home_award_title, 'Kami adalah yang Terbaik') }}
        </h2>
        <p class="text-14px lg:text-19px text-[#757575] font-inter text-center  lg:w-[66%] mx-auto mb-6 lg:mb-12 leading-5 lg:leading-7">
            {{ ordefault($meta->home_award_desc, 'Selama 30 tahun kami terus berinovasi dan melakukan pengembangan produk untuk menyesuaikan kebutuhan pasar.') }}
        </p>
        <div class="swiper awwardswiper !pb-8 lg:!pb-0">
            <div class="swiper-wrapper">
                @if(!empty($award))
                    @foreach ($award as $v)
                    <div class="swiper-slide aspect-mod">
                        <img src="{{ uri($v->photo)}}" alt="{{ $v->title }}">
                    </div>
                    @endforeach
                @endif
                {{-- <div class="swiper-slide aspect-mod">
                    <img src="{{ asset('assets/fl/award-2.png')}}" alt="">
                </div>
                <div class="swiper-slide aspect-mod">
                    <img src="{{ asset('assets/fl/award-3.png')}}" alt="">
                </div>
                <div class="swiper-slide aspect-mod">
                    <img src="{{ asset('assets/fl/award-4.png')}}" alt="">
                </div>
                <div class="swiper-slide aspect-mod">
                    <img src="{{ asset('assets/fl/award-5.png')}}" alt="">
                </div>
                <div class="swiper-slide aspect-mod">
                    <img src="{{ asset('assets/fl/award-6.png')}}" alt="">
                </div>
                <div class="swiper-slide aspect-mod">
                    <img src="{{ asset('assets/fl/award-7.png')}}" alt="">
                </div> --}}
            </div>
            <div class="swiper-pagination !-bottom-0 lg:!bottom-4"></div>
        </div>
    </div>
</section>
<section class="py-8 lg:py-16">
    <div class="container">
        <h2 class="text-center text-19px lg:text-29px lg:leading-9 leading-6 font-bold font-poppins text-[#444444]">{{ ordefault($meta->poin_of_sale_title, 'Selalu Menawarkan Kemudahan') }}</h2>
        <div class="mt-4 lg:mt-40 rounded-xl flex lg:flex-row flex-col gap-4 lg:gap-8 lg:shadow-lg">
            @if (!empty($meta->poin_of_sale_list))
            @foreach ($meta->poin_of_sale_list as $v)
            <div class="flex lg:flex-col flex-row gap-4 items-center justify-center lg:justify-start lg:w-1/3 lg:p-8 ml-10 lg:ml-0 bg-white shadow lg:shadow-none p-4 rounded-md">
                <picture class="lg:-mt-24 -ml-10 lg:ml-0">
                    <source srcset="{{ uri($v->poin_of_sale_list_icon)}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: bottom center;" />
                    <img src="{{ asset($v->poin_of_sale_list_icon)}}" alt="{{ $v->poin_of_sale_list_title }}" class="aspect-square m-auto object-cover w-[65px] lg:w-auto" style="object-position: bottom center;" />
                </picture>
                <div class="flex flex-col items-center flex-1 gap-1 lg:gap-2">
                    <strong class="font-poppins font-semibold text-12px lg:text-19px text-left lg:text-center leading-5 lg:leading-7 w-full lg:w-[70%]">
                        {{ $v->poin_of_sale_list_title }}
                    </strong>
                    <p class="font-poppins text-10px lg:text-14px text-[#5b5b5b]  text-left lg:text-center leading-4 lg:leading-5  lg:mb-8">
                        {{ $v->poin_of_sale_list_desc }}
                    </p>
                </div>
            </div>
            @endforeach
            @endif
            {{-- <div class="flex lg:flex-col flex-row gap-4 items-center justify-center lg:justify-start lg:w-1/3 lg:p-8 ml-10 lg:ml-0 bg-white shadow lg:shadow-none p-4 rounded-md">
                <picture class="lg:-mt-24 -ml-10 lg:ml-0">
                    <source srcset="{{ asset('assets/fl/usp-aman.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: bottom center;" />
                    <img src="{{ asset('assets/fl/usp-aman-m.png')}}" alt="" class="w-full h-full object-cover" style="object-position: bottom center;" />
                </picture>
                <div class="flex flex-col items-center flex-1 gap-1 lg:gap-2">
                    <strong class="font-poppins font-semibold text-12px lg:text-19px text-left lg:text-center leading-5 lg:leading-7 w-full lg:w-[70%]">Keamanan Data Terjamin </strong>
                    <p class="font-poppins text-10px lg:text-14px text-[#5b5b5b]  text-left lg:text-center leading-4 lg:leading-5  lg:mb-8">SystemEver menggunakan cloud Microsoft Azure yang sudah terjamin keamanannya.</p>
                </div>
            </div>
            <div class="flex lg:flex-col flex-row gap-4 items-center justify-center lg:justify-start lg:w-1/3 lg:p-8 ml-10 lg:ml-0 bg-white shadow lg:shadow-none p-4 rounded-md">
                <picture class="lg:-mt-24 -ml-10 lg:ml-0">
                    <source srcset="{{ asset('assets/fl/usp-mudah.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: bottom center;" />
                    <img src="{{ asset('assets/fl/usp-mudah-m.png')}}" alt="" class="w-full h-full object-cover" style="object-position: bottom center;" />
                </picture>
                <div class="flex flex-col items-center flex-1 gap-1 lg:gap-2">
                    <strong class="font-poppins font-semibold text-12px lg:text-19px text-left lg:text-center leading-5 lg:leading-7 w-full lg:w-[70%]">Sistem yang Mudah Digunakan</strong>
                    <p class="font-poppins text-10px lg:text-14px text-[#5b5b5b]  text-left lg:text-center leading-4 lg:leading-5  lg:mb-8">Seluruh produk SystemEver dilengkapi Visual-K yang memudahkan pengguna dalam mengoperasionalkan aplikasi.</p>
                </div>
            </div> --}}
        </div>
    </div>

</section>

@include('systemever/includes/modals/intro')
@endsection

@section('footer')
@include('systemever/includes/footer')
@endsection


@section('custom_js')




<!--<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
console.log(Swiper);
    var brandss = new Swiper(".brandswiper", {
        slidesPerView: 2,
        grid: {
            rows: 2,
        },
        navigation: {
            nextEl: '.swipnext',
            prevEl: '.swipprev',
        },
        breakpoints: {
            0: {
                spaceBetween: 10,
            },
            1024: {
                spaceBetween: 30,
            },
        }
    });
    var awardss = new Swiper(".awwardswiper", {

        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        }
    });

    var userAgent = navigator.userAgent.toLowerCase();
    var isMac = /mac|iphone|ipad|ipod/.test(userAgent);
    if(isMac){
        $('.page-content section video').css('filter','brightness(.94) hue-rotate(-2deg)')
    }else{
        $('.page-content section video').css('filter','brightness(1.01) hue-rotate(-1deg)')
    }
</script>
<style>
    .page-content section .aspect-mod1.overflow-hidden.flex{
        max-width: 270px;
    }
    @media(min-width: 1024px){
        .page-content section .aspect-mod1.overflow-hidden.flex{
            max-width: 550px;
        }
    }
</style>

@endsection
