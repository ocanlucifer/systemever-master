@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Performance Quality ' . activelang()
])

@section('custom_css')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/assets/fl/style.css')}}">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

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
        max-width: 1140px !important;
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

    .aspect-mod {
        aspect-ratio: 12/11;
    }

    .aspect-mod1 {
        aspect-ratio: 14/8;
    }

    .brandswiper {
        width: calc(100% - 100px);
        height: 256px;
        margin-left: auto;
        margin-right: auto;
    }

    .prose-swiper {
        overflow: visible;
    }

    .prose-swiper .prose-pagination .swiper-pagination-bullet {
        height: 4px;
        width: 18px;
        background: #ababab;
        border-radius: 4px;
        transition: all .3s ease;

    }

    .prose-swiper .prose-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
        width: 30px;
        background: #009944;
    }

    .prose {
        margin-top: -60px;
    }

    .prose .prosebg {
        transform: translateX(-40px);
    }

    .prose .proseimg {
        transform: translateX(-40px);
    }

    .prose:nth-child(even) {
        flex-direction: row-reverse;
    }

    .prose:nth-child(even) .prosebg {
        transform: scaleX(-1) translateX(-10px);
    }

    .prose:nth-child(even) .proseimg {
        transform: translateX(10px);
    }

    .prose-swiper .swiper-wrapper {
        display: block;
    }

    .aspect-mod2 {
        aspect-ratio: 12/5;
    }

    .theshadow {
        box-shadow: 0px 4px 11px 0px rgba(212, 212, 212, 0.25);
    }

    @media only screen and (max-width: 1024px) {

        .prose-swiper {
            overflow: hidden;
        }

        .prose {
            margin-top: 0px;
        }

        .prose-swiper .swiper-wrapper {
            display: flex;
        }

        .aspect-mod {
            aspect-ratio: 12/8;
        }

        .brandswiper {
            width: calc(100% - 40px);
            height: 120px;
        }

        .prose-swiper .prose-pagination .swiper-pagination-bullet {
            width: 15px;

        }

        .prose-swiper .prose-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            width: 20px;

        }

        .swiper-prose {
            overflow: hidden;
        }

        .prose:nth-child(even) {
            flex-direction: column;
        }

        .prose .prosebg {
            display: none;
        }

        .prose .proseimg {
            transform: translateX(0px) scale(.8) !important;
            margin-top: -32px;
            margin-bottom: -16px;
        }

        .container {
            padding-left: 16px;
            padding-right: 16px;
        }
    }
</style>
<style>
    @media (max-width: 1024px) {
        .popage .popitem:last-child {
            border-bottom: transparent;
        }
    }
</style>



@endsection
@section('content')

<div>
    <section class="pt-8 pb-4 lg:pt-16 lg:pb-0">
        <div class="container">
            <div class="bc"><a href="/">{{ stringlang('Home', 'Beranda') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="">{{ stringlang('Solution', 'Solusi') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="{{route('get.pages.solutions.accounting_management_systems')}}">{{ stringlang('SystemEver AccounTax', 'SystemEver AccounTax') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="" class="active">AccounTax E-Learning</a></div>
            <div class="flex lg:flex-row flex-col-reverse items-center ">
                <div class="lg:w-[40%] w-full flex flex-col lg:items-start items-center lg:gap-6 gap-4 lg:pr-10 lg:pt-8">
                    <h2 class="font-popins lg:text-37px text-22px font-bold lg:leading-10 leading-6 text-center lg:text-left">
                        {{ $meta->{'banner-title'} }}
                    </h2>
                    <div class="font-opensans lg:text-19px text-14px text-[#626B79] lg:leading-7 leading-5 text-center lg:text-left">{{ $meta->{'banner-subtitle'} }}</div>
                    <a href="{{ $meta->{'banner-button-link'} }}" class="font-montserrat text-[#009944] border-[#009944] font-bold block lg:h-52px h-44px border rounded-full lg:px-12 px-8 lg:text-18px text-12px flex items-center justify-center transition duration-200 hover:bg-[#009944] hover:text-white">{{ $meta->{'banner-button-text'} }}</a>
                </div>
                <!-- <div class="lg:w-[55%] w-full  flex justify-center">
                        <img src="{{ $meta->{'banner'} }}" alt="" class="object-contain lg:w-full w-[90%] mx-auto">
                    </div> -->

                <div class="w-full lg:w-[60%] mb-0 lg:mb-0 pb-2">
                    <div class="lg:full aspect-mod1 mx-auto lg:mx-0 overflow-hidden flex items-center justify-center ">
                        <video src="{{ $meta->{'banner'} }}" autoplay muted playsinline loop class="transform lg:translate-x-8 w-full"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 lg:py-16">
        <div class="container lg:gap-20 gap-10 flex flex-col">
            <div class="flex lg:flex-row flex-col items-center lg:gap-10 gap-4">
                <div class="lg:w-1/2 w-full flex justify-center">
                    <img src="{{ $meta->{'content-image'} }}" alt="" class="lg:w-auto w-180px">
                </div>
                <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center gap-6 lg:pl-10 lg:pt-8">
                    <h2 class="font-opensans lg:text-27px text-16px font-semibold lg:leading-10 leading-6 text-center lg:text-left">
                        {!! $meta->{'content-title'} !!}
                    </h2>
                    <a href="{{ $meta->{'content-button-link'} }}" class="font-montserrat text-[#009944] border-[#009944] font-bold block lg:h-52px h-44px border rounded-full lg:px-12 px-8 lg:text-18px text-12px flex items-center justify-center transition duration-200 hover:bg-[#009944] hover:text-white">{{ $meta->{'content-button-text'} }}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 lg:py-16">

        <div class="container">
            <h2 class="font-poppins lg:text-27px text-20px font-medium text-center lg:leading-8 leading-7">
                {{ $meta->{'title2'} }}
            </h2>

        </div>
        <div class="flex lg:gap-8 gap-4  font-opensans overflow-auto max-w-1200px lg:p-50px p-20px mx-auto">
            @foreach($meta->{'usp'} as $usp)
            <div class="theshadow w-1/4 min-w-160px bg-white lg:rounded-xl rounded-md flex flex-col items-center justify-start lg:gap-4 gap-2 lg:py-8 lg:px-4 p-4 text-center">
                <img src="{{ $usp->{'icon'} }}" alt="" class="lg:h-51px lg:w-51px object-contain h-34px w-34px mb-2">
                <span class="lg:text-18px text-12px font-semibold lg:leading-6 leading-4">{{ $usp->{'title'} }}</span>
                <span class="lg:text-18px text-11px lg:leading-6 leading-4">{{ $usp->{'description'} }}</span>
            </div>
            @endforeach
        </div>
    </section>
    <section class="py-8 lg:py-20 bg-[#FAFAFA]">
        <div class="container">
            <div class="flex flex-col items-center lg:gap-6 gap-5">
                <h2 class="font-poppins font-bold lg:text-45px text-22px text-center text-[#019641]">{{ $meta->{'title3'} }}
                </h2>
                <p class="font-opensans font-semibold lg:text-18px text-12px text-center lg:leading-7 leading-5 ">
                    {{ $meta->{'subtitle3'} }}
                </p>
                <a href="{{ $meta->{'title3-button-link'} }}" class="font-montserrat text-[#009944] border-[#009944] font-bold lg:h-52px h-40px border rounded-full lg:px-12 px-6 lg:text-18px text-12px items-center justify-center  flex transition duration-200 hover:bg-[#009944] hover:text-white">{{ $meta->{'title3-button-text'} }}</a>
                <p class="font-poppins lg:text-27px text-16px font-medium lg:my-12 my-3 ">{{ $meta->{'image-title3'} }}</p>
                <img src="{{ $meta->{'title3-image'} }}" alt="" class="lg:block hidden">
                <img src="{{ $meta->{'title3-image-mobile'} }}" alt="" class="block lg:hidden">
            </div>
        </div>
    </section>
    <section class="py-8 lg:py-24">
        <div class="container">
            <div class="flex flex-col items-center">
                <h2 class="font-poppins lg:font-bold font-medium lg:text-45px text-20px text-center lg:text-[#019641] lg:leading-14 leading-7">
                    {!! $meta->{'title4'} !!}</h2>
                <div class="flex items-center lg:flex-row flex-col-reverse lg:gap-20 gap-10 lg:py-20 py-8 w-full">
                    <div class="flex-1 px-4 lg:px-0">
                        <div class="flex flex-col gap-10 relative ">
                            <div class="h-full border-r border-dashed absolute left-32px border-black -z-1">
                            </div>
                            @foreach($meta->{'title4-list'} as $item)
                            <div class="flex gap-4 items-center">
                                <img src="{{ $item->{'icon'} }}" alt="" class="lg:w-auto w-64px">
                                <div class="flex flex-col lg:gap-3 gap-1">
                                    <strong class="lg:text-20px text-15px leading-5" style="margin-bottom: 2px;">{{ $item->{'title'} }}</strong>
                                    <span class="lg:text-18px text-13px leading-5">{{ $item->{'subtitle'} }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="lg:pr-10">
                        <img src="{{ $meta->{'title4-image'} }}" alt="" class="lg:h-425px h-195px object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('footer')
@include('systemever/includes/footer')
@endsection

@section('custom_js')

@endsection