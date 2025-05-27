@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution i1 ' . activelang()
])

@section('custom_css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        aspect-ratio: 12/8;
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
    }
</style>
@endsection
@section('content')


{{-- {{ dd($meta) }} --}}

<section class="py-8 lg:py-16">
    <div class="container">
        <div class="bc"><a href="/">{{ stringlang('Home', 'Beranda','홈페이지') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="">{{ stringlang('Solution', 'Solusi','솔루션') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="" class="active">SystemEver AccounTax</a></div>
        <div class="flex flex-col-reverse lg:flex-row items-center "  >
            <div class="w-full lg:w-1/2 flex flex-col gap-5 lg:gap-8 lg:pr-20">
                <h1 class="font-poppins  text-17px lg:text-27px font-bold leading-6 lg:leading-9 text-center lg:text-left">
                    {{ ordefault($meta->main_title ,'Analisa laporan keuangan dan pajak lebih
                    cepat dan tepat dengan software akuntansi dan pajak
                    terintegrasi') }}
                </h1>
                <div class="flex flex-col gap-2 lg:gap-4">
                    @if (!empty($meta->selling_poins))
                    @foreach ($meta->selling_poins as $v)
                    <div class="flex gap-2 lg:gap-4 items-center pl-2 lg:pl-0">
                        <img src="{{ asset('assets/fl/check.png')}}" alt="" class="w-3 aspect-square lg:w-auto">
                        <span class="text-[#626B79] font-opensans text-12px lg:text-16px">
                        {{ $v->selling_poins_text }}
                        </span>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="flex mt-2 lg:mt-4 justify-center lg:justify-start">
                    <a href="{{ ordefault($meta->demo_url, '#') }}" class="font-montserrat lg:text-16px text-11px inline-flex items-center justify-center h-30px lg:h-48px lg:px-20px px-4  rounded-full bg-[#009944] text-white font-bold mr-4 hover:text-white">
                        {{ ordefault($meta->demo_label, 'Jadwalkan Demo') }}
                    </a>
                    <a href="{{ ordefault($meta->see_more_url, '#') }}" class="font-montserrat lg:text-16px text-11px inline-flex items-center justify-center h-30px lg:h-48px lg:px-20px px-4  rounded-full bg-transparent text-[#009944] font-bold border border-[#009944] hover:text-[#009944]">
                        {{ ordefault($meta->see_more_button_label, 'Hubungi Kami') }}

                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 mb-2 lg:mb-0">
                <div class="lg:h-[433px] lg:w-[696px] w-[90%] aspect-mod1 mx-auto lg:mx-0 overflow-hidden flex items-center justify-center">
                    <video src="{{ ordefault($meta->main_banner, asset('assets/fl/accountax2.mp4'))}}" autoplay muted playsinline loop class=""></video>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-8 lg:pt-16" x-data="{current:0}">
    <div class="container pb-5 lg:pb-10">
        <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6">

            {!!  str_replace( "#JadiLebihMudah", "<strong>#JadiLebihMudah</strong>", ordefault($meta->second_section_title, 'Pembukuan #JadiLebihMudah'))  !!}

            {{-- {{ str_replace($meta->second_section_title, "#JadiLebihMudah", "<strong>#JadiLebihMudah</strong>")  }} --}}

        </h2>
        <p class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[55%] mx-auto leading-4 lg:leading-6">
            {{ $meta->second_section_sub_title }}
        </p>

        <div class="justify-between w-full px-28 mt-16 hidden lg:flex">
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=0">
                <img src="{{ uri( ordefault($meta->jurnal_feature_main_icon, 'assets/fl/tab-1.png')) }}" alt="{{ ordefault($meta->jurnal_feature_tab_title, 'Input banyak jurnal sekaligus') }}<" :class="current!=0?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ ordefault($meta->jurnal_feature_tab_title, 'Input banyak jurnal sekaligus') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==0"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=1">
                <img src="{{ uri( ordefault($meta->payment_proof_feature_main_icon, 'assets/fl/tab-2.png'))}}" alt="{{ ordefault($meta->payment_proof_feature_tab_title, 'Upload bukti transaksi') }}" :class="current!=1?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ ordefault($meta->payment_proof_feature_tab_title, 'Upload bukti transaksi') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==1"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=2">
                <img src="{{ uri( ordefault($meta->visualisasi_feature_main_icon, 'assets/fl/tab-3.png') )}}" alt="{{ ordefault($meta->visualisasi_feature_tab_title, 'Visualisasi menu') }}" :class="current!=2?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ ordefault($meta->visualisasi_feature_tab_title, 'Visualisasi menu') }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==2"></div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px " x-show="current==0">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1);filter:grayscale(1)">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('assets/fl/tab-1.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold">{{ ordefault($meta->jurnal_feature_tab_title, 'Input banyak jurnal sekaligus') }}</span>
                    </div>
                    <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[40%] px-2">
                        <h3 class="text-18px lg:text-27px font-poppins font-medium mb-4 lg:mb-10">{{ ordefault($meta->jurnal_feature_tab_title, 'Input banyak jurnal sekaligus') }}</h3>
                        @if (!empty($meta->jurnal_selling_point))
                        @foreach ($meta->jurnal_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ $v->jurnal_selling_point_title }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">{{ $v->jurnal_selling_point_desc }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="w-full lg:w-[60%] lg:pt-10 pt-2">
                        <img src="{{ uri( ordefault($meta->jurnal_feature_main_image,'assets/fl/thumb-input-banyak.png'))}}" alt="{{ ordefault($meta->jurnal_feature_tab_title, 'Input banyak jurnal sekaligus') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px " x-show="current==1">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('assets/fl/tab-2.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold">{{ ordefault($meta->payment_proof_feature_tab_titlem, 'Upload bukti transaksi') }}</span>
                    </div>
                    <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[40%] px-2">
                        <h3 class="text-18px lg:text-27px font-poppins font-medium mb-4 lg:mb-10">{{ ordefault($meta->payment_proof_feature_tab_titlem, 'Upload bukti transaksi') }}</h3>
                        @if (!empty($meta->payment_proof_selling_point))
                        @foreach ($meta->payment_proof_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ $v->payment_proof_selling_point_title }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">{{ $v->payment_proof_selling_point_desc }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="w-full lg:w-[60%] lg:pt-10 pt-2">
                        <img src="{{ uri( ordefault($meta->payment_proof_feature_main_image, 'assets/fl/thumb-upload.png' ))}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px " x-show="current==2">
        <div class="w-full h-full">
            <div class="container">

                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{ asset('assets/fl/tab-3.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold">{{ ordefault($meta->visualisasi_feature_tab_title, 'Visualisasi menu') }}</span>
                    </div>
                    <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="filter:grayscale(1)">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[40%] px-2">
                        <h3 class="text-18px lg:text-27px font-poppins font-medium mb-4 lg:mb-10">
                            {{ ordefault($meta->visualisasi_feature_tab_title, 'Visualisasi menu') }}
                        </h3>
                        @if (!empty($meta->visualisasi_selling_point))
                        @foreach ($meta->visualisasi_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0 w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">
                                    {{ $v->visualisasi_selling_point_title }}
                                </p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                    {{ $v->visualisasi_selling_point_desc }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="w-full lg:w-[60%] lg:pt-10 pt-2">
                        <img src="{{ uri( ordefault($meta->visualisasi_feature_main_image, 'assets/fl/thumb-visualisasi.png'))}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-8 lg:py-16">
    <div class="container pb-10">
        <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6  leading-6 lg:leading-9">
            {{ ordefault($meta->screenshot_section_title, "Proses akuntansi lebih cepat") }}
        </h2>
        <p class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[58%] mx-auto leading-4 lg:leading-7">
            {{ ordefault($meta->screenshot_section_sub_title, 'Automisasi proses pembukuan membuat kegiatan akuntasi lebih cepat dengan tingkat akurasi tinggi.') }}
        </p>
        <div class="w-full lg:w-[90%] mt-8 lg:mt-24 swiper prose-swiper">
            <div class="swiper-wrapper">
                @if (!empty($meta->screenshot_section_list))
                @foreach ($meta->screenshot_section_list as $v)
                <div class="!flex lg:flex-row flex-col prose swiper-slide">
                    <div class="w-full lg:w-[50%] flex items-center justify-center relative" >
                        <img src="{{ asset('assets/fl/prose-thumb-bg.png')}}" alt="" class="absolute prosebg">
                        <img src="{{ uri($v->screenshot_section_list_image )}}" alt="" class="relative proseimg">
                    </div>
                    <div class="w-[90%] lg:w-[50%] flex flex-col justify-center gap-1 lg:gap-4 prosetext mx-auto lg:ml-0" >
                        <h3 class="text-16px lg:text-30px font-poppins font-medium leading-6 lg:leading-8">
                            {{ $v->screenshot_section_list_title }}
                        </h3>
                        <p class="text-11px lg:text-19px font-opensans text-[#626B79] leading-4 lg:leading-7">
                            {{ $v->screenshot_section_list_desc }}
                        </p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="prose-pagination text-center"></div>
        </div>
    </div>
    <div class="flex justify-center gap-2 lg:gap-4 lg:pb-16">
        <a href="{{ ordefault($meta->whatsapp_url, '#')}}" class="font-montserrat inline-flex items-center justify-center h-31px lg:h-48px px-4 lg:px-30px text-11px lg:text-16px  rounded-full bg-transparent text-[#009944] font-bold border border-[#009944] hover:bg-[#009944] hover:text-white">
            {{ ordefault($meta->whatsapp_label, 'Whatsapp Kami') }}
        </a>
        <a href="{{ ordefault($meta->demo_url)}}" class="font-montserrat inline-flex items-center justify-center h-31px lg:h-48px px-4 lg:px-30px text-11px lg:text-16px  rounded-full bg-[#009944] text-white font-bold  hover:text-white">
            {{ ordefault($meta->demo_label, 'Jadwalkan Demo') }}
        </a>
    </div>
</section>

<section class="py-8 lg:py-16 bg-[#FAFAFA]">
    <div class="container">
        <div class="flex lg:flex-row flex-col gap-4 lg:gap-8">
            <div class="w-full lg:w-[40%] px-2">
                <h2 class="text-17px lg:text-29px font-medium font-poppins leading-6 lg:leading-11 mb-4 w-[90%] mx-auto lg:ml-0 lg:max-w-[370px] lg:text-left text-center">
                    {{ ordefault($meta->feature_checklist_title, 'Maksimalkan bisnis Anda dengan fitur lengkap Account Tax') }}
                </h2>
                <p class="text-[#626B79] font-opensans text-11px lg:text-19px leading-4 lg:leading-7 lg:max-w-[370px] lg:text-left text-center">
                    {{ ordefault($meta->feature_checklist_description, 'Dikembangkan untuk memberikan kemudahan dalam mengelola aktifitas akuntansi.')}}
                </p>
                @if (!empty($meta->feature_check_list))
                @php
                $i = 0;
                $features = [];
                foreach ($meta->feature_check_list as $v) {
                    $features[] = $v;
                    $i++;
                }
                @endphp
                @if (!empty($features[0]))
                <div class="lg:flex flex-col gap-1 py-4 my-8 hidden ">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{ uri($features[0]->feature_check_list_icon) }}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">
                            {{ $features[0]->feature_check_list_title }}
                        </span>
                    </div>
                    @php $subfeature = listfromtext($features[0]->feature_check_list_description) @endphp
                    @if (!empty($subfeature))
                    @foreach ($subfeature as $v)
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">
                            {{ $v }}
                        </span>
                    </div>
                    @endforeach
                    @endif
                </div>
                @endif
                @endif
            </div>
            <div class="w-full lg:w-[60%] grid grid-cols-2 gap-y-2 gap-x-6 lg:gap-x-8 px-4 lg:px-0 lg:gap-y-4">
                @if (!empty($features))
                @foreach ($features as $k => $feature)
                @php if ($k == 0) { continue; } @endphp

                <div class="flex flex-col gap-3px lg:gap-6px py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{ uri($feature->feature_check_list_icon)}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">
                            {{ $feature->feature_check_list_title }}
                        </span>
                    </div>
                    @php $subfeature = listfromtext($feature->feature_check_list_description) @endphp
                    @if (!empty($subfeature))
                    @foreach ($subfeature as $v)
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">
                            {{ $v }}
                        </span>
                    </div>
                    @endforeach
                    @endif
                </div>
                @if ($k % 2 == 0)
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                @endif
                @endforeach
                @if (!empty($features[0]))
                <div class="flex flex-col gap-1 py-4 lg:hidden ">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{ uri($features[0]->feature_check_list_icon)}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">
                            {{ $features[0]->feature_check_list_title }}
                        </span>
                    </div>
                    @php $subfeature = listfromtext($features[0]->feature_check_list_description) @endphp
                    @if (!empty($subfeature))
                    @foreach ($subfeature as $v)
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">
                            {{ $v }}
                        </span>
                    </div>
                    @endforeach
                    @endif
                </div>
                @endif
                @endif
            </div>
        </div>
    </div>

</section>
<section class="pt-10 lg:pt-20">
    <div class="container" x-data="{
        brands:[
            @if(!empty($meta->brand_list))
            @foreach ($meta->brand_list as $v)
            '{{ uri($v->brand_list_icon)}}',
            @endforeach
            @endif
        ]
    }">
        <h2 class="text-center text-16px lg:text-29px font-bold font-montserrat text-[#444444] mb-8 lg:mb-16 leading-6">
        {{ ordefault($meta->brand_list_title, '20.000 + bisnis telah menggunakan AccounTax') }}
        </h2>
        <div class="lg:w-full w-100vw lg:ml-0 -ml-20px"  :class="brands.length > 6 ? 'marquee' : ''">
            <div class="flex lg:gap-4 mx-auto " style="width: max-content" :class="brands.length > 6 ? 'track' : ''">
                <template x-for="i in [...Array(brands.length>6?2:1).keys()]">
                <template x-for="brand in brands">
                    <div class="flex items-center justify-center h-36px lg:h-70px lg:p-4 p-2 aspect-mod2">
                        <img :src="brand" alt="" class="h-full object-contain">
                    </div>
                </template>
                </template>
            </div>
        </div>
        <div class="pt-60 pb-8 lg:pb-16 lg:py-24 relative mt-8 lg:mt-22">
            <img src="{{ uri( ordefault($meta->testimony_image, 'assets/fl/testimoni.png'))}}" alt="" class="absolute top-0 lg:-left-8 lg:w-auto w-[70%x]">
            <div class="lg:w-700px rounded-2xl ml-auto p-6 pt-8 lg:pl-24 relative bg-white" style="box-shadow: 0px 4px 10px 0px #00000011;">
                <div class="font-opensans text-15px lg:text-24px text-[#4E4E4E] leading-6 lg:leading-8 mt-2 lg:mt-4 pr-4 relative">
                    <img src="{{ asset('assets/fl/quote.png')}}" alt="" class="absolute -top-5 lg:-top-4 -left-0 lg:-left-16 lg:w-auto w-5">
                    {{ ordefault($meta->testimony_quote, 'We were introduced to SystemEver AccounTax and finally decided to use it. We will recommend it
                    to our clients. Why? Because all these problems are solved.') }}
                    <img src="{{ asset('assets/fl/quote.png')}}" alt="" class="absolute -bottom-1 -right-1 lg:-right-2 lg:w-auto w-5" style="transform: scale(-1);">
                </div>
                <div class="flex mt-4 lg:mt-8 items-center gap-4 lg:gap-6">
                    <img src="{{ uri( ordefault($meta->testimony_company_icon, 'assets/fl/testi-0.png'))}}" alt="" class="lg:w-auto w-14">
                    <div class="flex flex-col gap-1">
                        <strong class="text-12px lg:text-19px text-[#4E4E4E] font-opensans">{{ ordefault($meta->testimony_company_name, 'QST Agung Jaya') }}</strong>
                        <p class="text-10px lg:text-15px text-[#4E4E4E] font-opensans mt-1">{{ ordefault($meta->testimony_company_departement, 'Department position') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative min-h-540px lg:min-h-610px pt-12 overflow-hidden">
    <picture class="absolute top-0 left-0 w-full h-610px">
        <source srcset="{{ asset('assets/fl/faq-bg-1.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover" style="object-position: top center;" />
        <img src="{{ asset('assets/fl/faq-bg-1-m.png')}}" alt="" class="w-full h-full object-cover" style="object-position: top center;" />
    </picture>
    <div class="container relative">
        <div class="flex lg:flex-row flex-col">
            <div class="w-full lg:w-[50%] flex flex-col gap-4 justify-center lg:pr-24 pt-4 lg:pt-40 h-full">
                <h3 class="text-19px lg:text-31px font-semibold font-poppins text-[#444444] text-center lg:text-left">{{ ordefault($meta->faq_title, 'Kenapa SystemEver?') }}</h3>
                <p class="text-11px lg:text-21px font-inter text-[#757575] leading-4 lg:leading-7 text-center lg:text-left">
                    {!! ordefault($meta->faq_sub_title, 'Sebagai perusahaan yang bertekad menjadi
                    <strong>ERP ABC (Asia Best Cloud)</strong>, SystemEver selalu menjamin kemudahan, keamanan dan kesesuain produk
                    dengan pasar.') !!}
                </p>
            </div>
            <div class="w-full lg:w-[50%] pt-4 lg:pt-0">
                <div class="w-full lg:w-533px flex flex-col gap-4 lg:gap-6 ml-auto " x-data="{active:0}">
                    @if (!empty($meta->faq_list))
                    <?php $xs = 0 ?>
                    @foreach ($meta->faq_list as $k => $v)
                    <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                        <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-6 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active=={{$xs}}?'bg-[#009944] font-bold text-white':''" @click="active=(active=={{$xs}}?null:{{$xs}})">
                            {{ $v->faq_list_question }} <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active=={{$xs}}?'':'filter brightness-50 transform rotate-180'"></div>
                        <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active=={{$xs}}?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">
                            {{ $v->faq_list_answer }}
                        </div>
                    </div>
                    <?php $xs++ ?>
                    @endforeach
                    @endif
                    {{-- <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                        <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-6 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active==1?'bg-[#009944] font-bold text-white':''" @click="active=(active==1?null:1)">
                            Siapa pengguna AccounTax? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active==1?'':'filter brightness-50 transform rotate-180'">
                        </div>
                        <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active==1?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">AccounTax hanya bisa digunakan oleh konsultan pajak </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                        <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-6 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active==2?'bg-[#009944] font-bold text-white':''" @click="active=(active==2?null:2)">
                            Bagaimana keamanan AccounTax? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active==2?'':'filter brightness-50 transform rotate-180'">
                        </div>
                        <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active==2?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">Tidak perlu khawatir, SystemEver menggunakan Microsoft Azure yang telah terjamin keamanannya</div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                        <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-6 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between" :class="active==3?'bg-[#009944] font-bold text-white':''" @click="active=(active==3?null:3)">
                            Bagaimana saya menghubungi SystemEver? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-5px w-11px lg:h-9px lg:w-18px" :class="active==3?'':'filter brightness-50 transform rotate-180'">
                        </div>
                        <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  " :class="active==3?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">Anda bisa menghubungi SystemEver lewat WA, Email ataupun telpon yang ada di detail kontak. </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
{{-- @include('systemever/includes/footers') --}}
@include('systemever/includes/footer')
@endsection

@section('custom_js')

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    var init = false;

    function swiperCard() {
        if (window.innerWidth <= 768) {
            console.log(init)
            if (!init) {
                init = true;
                var prose = new Swiper(".prose-swiper", {
                    autoplay: {
                        delay: 3000,
                    },
                    loop: true,
                    slidesPerView: 1,
                    pagination: {
                        el: '.prose-pagination',
                        clickable: true
                    },
                });
            }
        } else if (init) {
            prose.destroy();
            init = false;
        }
    }
    window.addEventListener("resize", swiperCard);
    window.addEventListener("DOMContentLoaded", swiperCard);

</script>
@endsection
