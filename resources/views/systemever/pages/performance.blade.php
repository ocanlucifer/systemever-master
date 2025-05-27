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
        aspect-ratio: 16/9;
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
    .endtb:last-child{
        border-bottom: none;
    }
    .endtbbb:last-child .endtbb{
        border-bottom: none;
    }
</style>



@endsection
@section('content')

<div x-data="{showx:false, pagex:0,pagessx:[],init(){this.pagessx = Object.values({!!str_replace("\"", "'",json_encode($meta->{'tabs'}))!!}).map(e=>e.title)}}">
    <section class="pt-8 pb-4 lg:pt-16 lg:pb-16">
        <div class="container"><div class="bc"><a href="/">{{ stringlang('Home', 'Beranda', '홈페이지') }}</a><img src="{{asset('assets/fl/bc.png')}}" alt=""><a href="" class="active">{{ stringlang('Performance Quality', 'Performance Quality', '성능 품질') }}</a></div>
            <div class="flex flex-col-reverse lg:flex-row items-center ">
                <div class="w-full lg:w-[40%] flex flex-col gap-3 lg:gap-8 lg:pt-12">
                    <h1 class="font-poppins  text-22px lg:text-37px font-bold leading-6 lg:leading-9 text-center lg:text-left">
                    {{ $meta->{'banner-title'} }}
                    </h1>
                    <div class="flex flex-col gap-2 lg:gap-4">
                        <span class="text-[#626B79] font-opensans text-13px lg:text-19px lg:leading-7 leading-5 lg:text-left text-center">
                        {{ $meta->{'banner-subtitle'} }}
                        </span>
                    </div>
                </div>
                <div class="w-full lg:w-[60%] mb-0 lg:mb-0">
                    <div class="lg:full aspect-mod1 mx-auto lg:mx-0 overflow-hidden flex items-center justify-center lg:pl-8">
                        <video src="{{ $meta->{'banner'} }}" autoplay muted playsinline loop class="transform lg:translate-x-8"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 lg:py-8">
        <div class="container">
            <div class="relative">
                <div class="rounded-full border p-3 px-4 border-[#019641] text-[#019641]  text-13px font-opensans mb-2 lg:hidden block flex items-center" style="height: 45px;" @click="showx=!showx">
                    <span class="w-full" x-text="pagessx[pagex]"></span>
                    <img src="{{asset('/assets/fl/down.svg')}}" alt="" :style="showx ? 'transform:rotate(180deg)' : ''">
                </div>
                <div class="lg:flex-row flex-col justify-between lg:relative absolute lg:border-0 border border-[#CBE5D580] rounded-xl w-full bg-white transition-all popage lg:max-w-760px lg:gap-6  mx-auto" :class="showx ? 'flex' : 'lg:flex hidden'" style="z-index: 1;">
                    <template x-for="(item,i) in pagessx">
                        <div class="lg:rounded-full lg:border border-b lg:border-[#019641] border-[#CBE5D580] flex-1 w-full py-3 lg:px-6 px-2 flex items-center justify-center lg:text-center text-left font-opensans lg:text-16px text-12px lg:leading-6 leading-6 cursor-pointer transition-colors duration-300 popitem" :class="pagex === i ? 'lg:bg-[#019641] lg:text-white lg:font-bold lg:inline hidden' : 'text-[#019641] lg:hover:bg-[#019641] lg:hover:text-white lg:hover:opacity-80'" @click="showx=false,pagex=i">
                            <span x-text="item" class="w-full"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>
    <div x-show="pagex===0">
        <section class="pb-8 pt-4 lg:pt-12 pb-12">
            <div class="container">
                <div class="flex lg:flex-row flex-col lg:gap-16 gap-8 max-w-990px mx-auto items-center">
                    <img src="{{ $meta->{'tab1-certimg'} }}" alt="" class="lg:w-234px w-180px">
                    <div class="lg:text-18px text-13px lg:text-[#333] text-black font-opensans lg:leading-7 leading-5 px-4 lg:px-0">
                    {!! $meta->{'tab1-certdesc'} !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="lg:pb-20 lg:pt-10 pb-10">
            <div class="container">
                <h2 class="lg:text-45px text-21px font-poppins font-bold text-[#019641] text-center lg:mt-8 lg:mb-16 my-6">{!! $meta->{'tab1-second-title'} !!}</h2>
                <div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-8 gap-4 mb-12 font-opensans mt-8">
                    @foreach($meta->{'tab1-test'} as $item)
                    <div class="theshadow bg-white lg:rounded-xl rounded-md flex flex-col items-center justify-start lg:gap-4 gap-2 lg:p-8 px-4 py-6 text-center">
                        <img src="{{$item->icon}}" alt="" class="lg:h-53px h-43px mb-2">
                        <span class="lg:text-18px text-12px font-semibold">{{$item->title}}</span>
                        <span class="lg:text-18px text-12px lg:leading-6 leading-4">{{$item->description}}</span>
                    </div>
                    @endforeach

                </div>
                <br>
                <div class="grid lg:grid-cols-3 grid-cols-1 lg:gap-8 gap-4 font-opensans">
                    @foreach($meta->{'tab1-support'} as $item)
                    <div class="border rounded-xl lg:p-8 p-4 bg-white flex flex-col justify-start items-start lg:gap-3 gap-2 lg:pt-14 pt-8">
                        <img src="{{$item->icon}}" alt="" class="lg:h-42px h-35px mb-2">
                        <span class="text-16px font-bold">{{$item->title}}</span>
                        <span class="lg:text-15px text-12px lg:leading-5 leading-4">{{$item->description}}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <div x-show="pagex===1">
        <section class="pb-12 pt-2 lg:pt-16 lg:pb-16">
            <div class="container">
                <div class="syntable font-opensans rounded-xl overflow-hidden" style="background: linear-gradient(to bottom, #D5F3E200, #D5F3E255);">
                    <div class="lg:px-12 px-4 lg:h-66px h-51px flex items-center justify-start bg-[#019641] lg:text-22px text-14px font-bold text-white">
                        <span>{{ $meta->{'tab2-table1-title'} }}</span>
                    </div>
                    @foreach($meta->{'tab2-table-1'} as $row)
                    <div class="lg:px-6 px-2 endtbbb">
                        <div class="lg:px-6 lg:py-10 px-2 py-6 flex border-b border-[#CBE5D5] endtbb">
                            <div class="w-[30%]">
                                <div class="font-bold lg:text-16px text-10px lg:leading-6 leading-3 pr-2 lg:pr-0">
                                    {{$row->title}}
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="lg:text-16px text-10px lg:leading-6 leading-3">
                                {!!$row->description!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <h3 class="font-inter font-bold lg:text-27px text-14px lg:text-center text-left lg:my-16 my-8 lg:leading-10 leading-5">
                    {{$meta->{'tab2-title2'} }}
                </h3>

                <div class="syntable font-opensans rounded-xl overflow-hidden" style="background: linear-gradient(to bottom, #D5F3E200, #D5F3E255);">
                    <div class="lg:px-6 px-2 lg:h-66px h-45px flex items-center justify-start bg-[#019641] lg:text-20px text-10px font-bold text-white">
                        <div class="lg:w-[20%] w-2/10 lg:px-6 px-3px">
                            <span>Program</span>
                        </div>
                        <div class="lg:w-[24%] w-3/10 lg:px-6 px-3px">
                            <span>Applied country</span>
                        </div>
                        <div class="lg:w-[24%] w-3/10 lg:px-6 px-3px">
                            <span>Category</span>
                        </div>
                        <div class="lg:w-[32%] w-3/10 lg:px-6 px-3px">
                            <span>Explanation</span>
                        </div>
                    </div>
                    <div class="lg:px-6 px-2 lg:text-16px text-10px">
                        @foreach($meta->{'tab2-table22'} as $row)
                        <div class="lg:py-10 py-4 flex border-b border-[#CBE5D5] endtb">
                            <div class="lg:w-[20%] w-2/10 lg:px-6 px-3px lg:font-semibold font-bold lg:leading-6 leading-4">
                                {{$row->col1}}
                            </div>
                            <div class="lg:w-[24%] w-3/10 lg:px-6 px-3px lg:leading-6 leading-4">
                            {{$row->col2}}
                            </div>
                            <div class="lg:w-[24%] w-3/10 lg:px-6 px-3px lg:leading-6 leading-4">
                            {{$row->col3}}
                            </div>
                            <div class="lg:w-[32%] w-3/10 lg:px-6 px-3px lg:leading-6 leading-4">
                            {{$row->col4}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8 lg:py-16 bg-[#FAFAFA]">
            <div class="container">
                <h3 class="font-poppins lg:text-27px text-18px lg:leading-8 leading-6 text-center font-bold lg:mb-16 mb-8">
                   {!!$meta->{'tab2-title3'}!!}</h3>
                <div class="flex items-center gap-4 lg:flex-row flex-col">
                    <div class="lg:w-[60%] w-full flex">
                        <img src="{!!$meta->{'tab2-security'}!!}" alt="" class="lg:block hidden">
                        <img src="{!!$meta->{'tab2-security-mobile'}!!}" alt="" class="block lg:hidden -mr-4 relative">
                    </div>
                    <div class="lg:w-[40%] w-full lg:px-6 px-2 mt-8 lg:mt-0">
                        <div class="flex flex-col lg:gap-6 gap-4 font-poppins">
                            @foreach($meta->{'tab2-security-list'} as $row)
                            <div class="flex lg:gap-6 gap-3 items-start lg:border-0 border-b pb-3 border-[#D8EEE0]">
                                <img src="{{asset('/assets/fl/check.svg')}}" alt="" class="lg:w-auto w-18px mt-1">
                                <div class="lg:text-17px text-12px lg:leading-6 leading-5">
                                    {{$row->title}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('footer')
@include('systemever/includes/footer')
@endsection

@section('custom_js')

@endsection
