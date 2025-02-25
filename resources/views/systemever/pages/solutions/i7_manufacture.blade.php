@extends('systemever/layouts/windi', [
'spesifice_page_seo' => 'Solution i7 ' . activelang()
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

{{-- {{ dd($meta) }} --}}

@section('content')
<section class="py-8 lg:py-16">
    <div class="container">
        <div class="bc"><a href="/">{{ stringlang('Home', 'Beranda') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="">{{ stringlang('Solution', 'Solusi') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="" class="active">SystemEver Manufacturing ERP</a></div>
        <div class="flex flex-col-reverse lg:flex-row items-center "  >
            <div class="w-full lg:w-1/2 flex flex-col gap-5 lg:gap-8 lg:pr-8">
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
                    <video src="{{ ordefault($meta->main_banner, asset('assets/fl/i7.mp4'))}}" autoplay muted playsinline loop class=""></video>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-8 lg:pt-16" x-data="{current:0}">
    <div class="container pb-5 lg:pb-10">
        <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6  leading-6 lg:leading-9">
            {!!  str_replace( "#JadiLebihMudah", "<strong>#JadiLebihMudah</strong>", ordefault($meta->second_section_title, 'Kontrol aktivitas produksi <br><strong>#JadiLebihMudah</strong> dengan SystemEver'))  !!}
        </h2>
        
        <p class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[60%] mx-auto leading-4 lg:leading-6">
            {{ $meta->second_section_sub_title }}</p>
        <div class="justify-between w-full px-14 mt-16 hidden lg:flex">
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=0">
                <img src="{{uri( ordefault($meta->production_plan_main_icon, 'assets/fl/tab-9.png') )}}" alt="" :class="current!=0?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ $meta->production_plan_tab_title }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==0"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=1">
                <img src="{{ uri($meta->export_import_feature_main_icon) }}" alt="" :class="current!=1?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ $meta->export_import_feature_tab_title }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==1"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=2">
                <img src="{{ uri($meta->smart_report_feature_main_icon)}}" alt="" :class="current!=2?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ $meta->smart_report_feature_tab_title }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==2"></div>
            </div>
            <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=3">
                <img src="{{ uri($meta->visual_operational_feature_main_icon)}}" alt="" :class="current!=3?'filter grayscale-100':''">
                <span class="font-poppins text-18 font-semibold text-[#01010]">{{ $meta->visual_operational_feature_tab_title }}</span>
                <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]" x-show="current==3"></div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==0">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1);filter:grayscale(1)">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-9.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ $meta->production_plan_tab_title }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ $meta->production_plan_tab_title }}</h3>
                        @if (!empty($meta->production_plan_selling_point))
                        @foreach ($meta->production_plan_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ $v->production_plan_selling_point_title }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ $v->production_plan_selling_point_desc }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{uri($meta->production_plan_main_image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==1">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-6.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ $meta->export_import_feature_tab_title }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ $meta->export_import_feature_tab_title }}</h3>

                        @if (!empty($meta->export_import_selling_point))
                        @foreach ($meta->export_import_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ $v->export_import_selling_point_title }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ $v->export_import_selling_point_desc }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{ uri($meta->export_import_feature_main_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==2">
        <div class="w-full h-full">
            <div class="container">
                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-10.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ $meta->smart_report_feature_tab_title }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ $meta->smart_report_feature_tab_title }}</h3>
                        @if (!empty($meta->smart_report_selling_point))
                        @foreach ($meta->smart_report_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ $v->smart_report_selling_point_title }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ $v->smart_report_selling_point_desc }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif

                       
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{uri($meta->smart_report_feature_main_image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==3">
        <div class="w-full h-full">
            <div class="container">

                <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                    <div class="flex flex-col items-center gap-2">
                        <img src="{{asset('assets/fl/tab-3.png')}}" alt="" class="h-24px">
                        <span class="text-14px font-poppins font-semibold text-center leading-5">{{ $meta->visual_operational_feature_tab_title }}</span>
                    </div>
                    <img src="{{asset('assets/fl/tab-arrow.png')}}" alt="" style="filter:grayscale(1)">
                </div>
                <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                    <div class="w-full lg:w-[45%] px-2">
                        <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">{{ $meta->visual_operational_feature_tab_title }}
                        </h3>
                        @if (!empty($meta->visual_operational_selling_point))
                        @foreach ($meta->visual_operational_selling_point as $v)
                        <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                            <div class="flex-shrink-0  w-5 aspect-square lg:w-auto"><img src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                            <div>
                                <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6 mb-1">{{ $v->visual_operational_selling_point_title }}</p>
                                <p class="text-11px lg:text-17px font-poppins text-[#707070] leading-5 lg:leading-6">
                                    {{ $v->visual_operational_selling_point_desc }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                        <img src="{{ uri($meta->visual_operational_feature_main_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-8 lg:py-16">
    <div class="container pb-10">
        <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6 leading-6 lg:leading-9  lg:px-40">{{ ordefault($meta->screenshot_section_title, 'Kontrol proses bisnis mulai dari keuangan, inventaris, dan akuntansi secara real-time') }}</h2>
        <p class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[56%] mx-auto leading-4 lg:leading-7">
            {{ ordefault($meta->screenshot_section_sub_title, 'AccounTax menyediakan fitur komprehensif yang memudahkan.') }}</p>
        <div class="w-full lg:w-[90%] mt-4 lg:mt-22 swiper prose-swiper">
            <div class="swiper-wrapper">
                <!--<div class="!flex lg:flex-row flex-col prose swiper-slide">-->
                <!--    <div class="w-full lg:w-[50%] flex items-center justify-center relative" >-->
                <!--        <img src="{{asset('assets/fl/prose-thumb-bg.png')}}" alt="" class="absolute prosebg">-->
                <!--        <img src="{{asset('assets/fl/i71.png')}}" alt="" class="relative proseimg">-->
                <!--    </div>-->
                <!--    <div class="w-[90%] lg:w-[50%] flex flex-col justify-center gap-1 lg:gap-4 prosetext mx-auto lg:ml-0" >-->
                <!--        <h3 class="text-16px lg:text-30px font-poppins font-medium leading-6 lg:leading-10">Kelola proses produksi #JadiLebihMudah</h3>-->
                <!--        <p class="text-11px lg:text-19px font-opensans text-[#626B79] leading-4 lg:leading-7">Tingkat produktifitas pabrik meningkat, biaya produksi berkurang</p>-->
                <!--    </div>-->
                <!--</div>-->
                @if (!empty($meta->screenshot_section_list))
                @foreach ($meta->screenshot_section_list as $v)
                <div class="!flex lg:flex-row flex-col prose swiper-slide">
                    <div class="w-full lg:w-[50%] flex items-center justify-center relative" >
                        <img src="{{ asset('assets/fl/prose-thumb-bg.png')}}" alt="" class="absolute prosebg">
                        <img src="{{ uri( ordefault($v->screenshot_section_list_image, 'assets/fl/i51.png'))}}" alt="" class="relative proseimg">
                    </div>
                    <div class="w-[90%] lg:w-[50%] flex flex-col justify-center gap-1 lg:gap-4 prosetext mx-auto lg:ml-0" >
                        <h3 class="text-16px lg:text-30px font-poppins font-medium leading-6 lg:leading-10">{{ $v->screenshot_section_list_title }}</h3>
                        <p class="text-11px lg:text-19px font-opensans text-[#626B79] leading-4 lg:leading-7">{{ $v->screenshot_section_list_desc }} </p>
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
        <a href="{{ ordefault($meta->demo_url, '#') }}" class="font-montserrat inline-flex items-center justify-center h-31px lg:h-48px px-4 lg:px-30px text-11px lg:text-16px  rounded-full bg-[#009944] text-white font-bold  hover:text-white">
            {{ ordefault($meta->demo_label, 'Jadwalkan Demo') }}
        </a>

    </div>
</section>

<section class="py-8 lg:py-16 bg-[#FAFAFA]">
    <div class="container">
        <div class="flex lg:flex-row flex-col gap-4 lg:gap-12">
            <div class="w-full lg:w-[40%] px-2 lg:pt-16 pt-2">
                <img src="{{asset('assets/fl/bms-img.png')}}" alt="" class="lg:ml-4 lg:mt-12 w-[40%] mx-auto lg:w-auto mb-4 lg:hidden block">
                <h2 class="text-17px lg:text-29px font-medium font-poppins leading-6 lg:leading-9 mb-2 lg:mb-4  lg:text-left text-center">
                    {{ ordefault($meta->feature_checklist_title, 'ERP Trading & Distribution') }}
                </h2>
                <p class="text-[#626B79] font-opensans text-11px lg:text-19px leading-4 lg:leading-7 lg:max-w-[370px] lg:text-left text-center">
                    {{ ordefault($meta->feature_checklist_description, 'Dikembangkan untuk memberikan kemudahan dalam mengelola aktifitas bisnis Trading dan Distribusi.') }}</p>

                <img src="{{ uri(ordefault($meta->feature_checklist_image, 'assets/fl/bms-img.png'))}}" alt="" class="lg:ml-4 lg:mt-12 w-[40%] mx-auto lg:w-auto mb-4 hidden lg:block">
            </div>
            @php
            $i = 0;
            $features = [];
            foreach ($meta->feature_check_list as $v) {
                $features[] = $v;
                $i++;
            }
            @endphp
            <div class="w-full lg:w-[60%] grid grid-cols-2 gap-y-2 gap-x-6 lg:gap-x-8 px-4 lg:px-0  lg:gap-y-4">
                @if (!empty($features))
                @foreach ($features as $k => $feature)
                {{-- @php if ($k == 0) { continue; } @endphp --}}
                <div class="flex flex-col gap-3px lg:gap-6px py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{ uri($feature->feature_check_list_icon)}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">
                            {{ $feature->feature_check_list_title }}
                        </span>
                    </div>
                    @php $subfeature = listfromtext($feature->feature_check_list_description) @endphp
                    @if (!empty($subfeature))
                        @foreach ($subfeature as $v)
                        @php if (empty($v)) { continue; } @endphp
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">
                                {{ $v }}
                            </span>
                        </div>
                        @endforeach
                    @endif
                </div>
                @if ($k % 2 != 0)
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                @endif
                @endforeach
                @endif
                {{-- <div class="flex flex-col gap-3px lg:gap-6px py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{asset('assets/fl/i5-0-1.png')}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">General Info</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Biz Unit</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Organization</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Client</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Item</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Closing</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">User defined Authority</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3px lg:gap-6px py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{asset('assets/fl/i5-0-2.png')}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Accounting</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">COA Structure</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Slip Control</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">General Ledger</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Closing</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Fixed Asset </span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">AR/AP</span>
                    </div>
                </div>
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                <div class="flex flex-col gap-3px lg:gap-6px py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{asset('assets/fl/i5-0-3.png')}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Costing</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Unit Pricing</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Profit Analyst</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3px lg:gap-6px py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{asset('assets/fl/i5-0-4.png')}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Sales</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Buyer Management
                        </span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Collection</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Receiving Order</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Revenue</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Export Management</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Sales Record</span>
                    </div>
                </div>

                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                <div class="flex flex-col gap-1 py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{asset('assets/fl/i5-0-5.png')}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Purchasing</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Contract</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Procurement</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Record</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Import</span>
                    </div>
                </div>
                <div class="flex flex-col gap-1 py-4">
                    <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                        <img src="{{asset('assets/fl/i5-0-6.png')}}" alt="" class="lg:w-auto w-6"><span class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Inventory</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Picking Up</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Closing</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Inventory</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Stock Status</span>
                    </div>
                    <div class="flex gap-2 lg:gap-3 items-start">
                        <img src="{{asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                        <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Availability</span>
                    </div>
                </div> --}}
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
        {{ ordefault($meta->brand_list_title, 'Ribuan bisnis telah menggunakan ERP Manufacture') }}
    </h2>
        <div class="lg:w-full w-100vw lg:ml-0 -ml-20px"  :class="brands.length > 6 ? 'marquee' : ''">
            <div class="flex lg:gap-4   mx-auto " style="width: max-content" :class="brands.length > 6 ? 'track' : ''">
                <template x-for="i in [...Array(brands.length>6?2:1).keys()]">
                <template x-for="brand in brands">
                    <div class="flex items-center justify-center h-36px lg:h-70px lg:p-4 p-2 aspect-mod2">
                        <img :src="brand" alt="" class="h-full object-contain">
                    </div>
                </template>
                </template>
            </div>
        </div>
        <div class="pt-60 pb-8 lg:pb-16 lg:py-24 relative mt-8 lg:mt-16">
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
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
                    slidesPerView: 1,
                    autoplay: {
                        delay: 3000,
                    },
                    loop: true,
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