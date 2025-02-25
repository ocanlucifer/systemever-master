@extends('systemever/layouts/main', [
    'spesifice_page_seo' => 'Solution i7 ' . activelang()
])

@section('custom_css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')

<section class="py-8 lg:py-16">
        <div class="container">
            <div class="flex flex-col-reverse lg:flex-row items-center "  >
                <div class="w-full lg:w-1/2 flex flex-col gap-5 lg:gap-8 lg:pr-8">
                    <h1
                        class="font-poppins  text-17px lg:text-27px font-bold leading-6 lg:leading-9 text-center lg:text-left">
                        ERP Manufacture : Tingkatkan efisiensi dan poduktivitas bisnis</h1>
                    <div class="flex flex-col gap-2 lg:gap-4">
                        <div class="flex gap-2 lg:gap-4 items-center pl-2 lg:pl-0">
                            <img src="{{ asset('assets/fl/check.png')}}" alt="" class="w-3 aspect-square lg:w-auto">
                            <span class="text-[#626B79] font-opensans text-12px lg:text-16px">Automosasi proses produksi</span>

                        </div>
                        <div class="flex gap-2 lg:gap-4 items-center pl-2 lg:pl-0">
                            <img src="{{ asset('assets/fl/check.png')}}" alt="" class="w-3 aspect-square lg:w-auto">
                            <span class="text-[#626B79] font-opensans text-12px lg:text-16px">Rencanakan, monitor dan kontrol project lewat satu dashboard</span>

                        </div>
                        <div class="flex gap-2 lg:gap-4 items-center pl-2 lg:pl-0">
                            <img src="{{ asset('assets/fl/check.png')}}" alt="" class="w-3 aspect-square lg:w-auto">
                            <span class="text-[#626B79] font-opensans text-12px lg:text-16px">Pantau proses eksport dan import barang secara realtime</span>

                        </div>
                    </div>
                    <div class="flex mt-2 lg:mt-4 justify-center lg:justify-start">
                        <a href=""
                            class="font-montserrat lg:text-16px text-11px inline-flex items-center justify-center h-30px lg:h-48px lg:px-30px px-6  rounded-full bg-[#009944] text-white font-bold mr-4 hover:text-white">Jadwalkan
                            Demo</a>
                        <a href=""
                            class="font-montserrat lg:text-16px text-11px inline-flex items-center justify-center h-30px lg:h-48px lg:px-50px px-6  rounded-full bg-transparent text-[#009944] font-bold border border-[#009944] hover:bg-[#009944] hover:text-white">Hubungi
                            Kami</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 mb-2 lg:mb-0">
                    <div
                        class="lg:h-[433px] lg:w-[696px] w-[90%] aspect-mod1 mx-auto lg:mx-0 overflow-hidden flex items-center justify-center">
                        <video src="{{ asset('assets/fl/i7.png')}}" autoplay muted playsinline loop class=""></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-8 lg:pt-16" x-data="{current:0}">
        <div class="container pb-5 lg:pb-10">
            <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6  leading-6 lg:leading-9">Kontrol aktivitas produksi <br><strong>#JadiLebihMudah</strong> dengan SystemEver</h2>
            <p
                class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[60%] mx-auto leading-4 lg:leading-6">
                Tingkatan produktifitas dan efisiensi proses produksi lewat satu aplikasi</p>
            <div class="justify-between w-full px-14 mt-16 hidden lg:flex">
                <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=0">
                    <img src="{{ asset('assets/fl/tab-input-banyak.png')}}" alt="" :class="current!=0?'filter grayscale-100':''">
                    <span class="font-poppins text-18 font-semibold text-[#01010]">Optimisasi perencanaan produksi</span>
                    <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]"
                        x-show="current==0"></div>
                </div>
                <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=1">
                    <img src="{{ asset('assets/fl/tab-upload-bukti.png')}}" alt="" :class="current!=1?'filter grayscale-100':''">
                    <span class="font-poppins text-18 font-semibold text-[#01010]">Eksport Import modul</span>
                    <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]"
                        x-show="current==1"></div>
                </div>
                <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=2">
                    <img src="{{ asset('assets/fl/tab-digital.png')}}" alt="" :class="current!=2?'filter grayscale-100':''">
                    <span class="font-poppins text-18 font-semibold text-[#01010]">Smart Reporting</span>
                    <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]"
                        x-show="current==2"></div>
                </div>
                <div class="flex gap-4 items-center p-4 cursor-pointer relative" @click="current=3">
                    <img src="{{ asset('assets/fl/tab-visualisasi.png')}}" alt="" :class="current!=3?'filter grayscale-100':''">
                    <span class="font-poppins text-18 font-semibold text-[#01010]">Visualisai operasional secara realtime</span>
                    <div class="w-55px aspect-square rounded-full bg-[#DBF9E8] absolute left-[40%] -bottom-[100%]"
                        x-show="current==3"></div>
                </div>
            </div>
        </div>
        <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==0">
            <div class="w-full h-full">
                <div class="container">
                    <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1);filter:grayscale(1)">
                        <div class="flex flex-col items-center gap-2">
                            <img src="{{ asset('assets/fl/tab-input-banyak.png')}}" alt="" class="h-24px">
                            <span class="text-14px font-poppins font-semibold text-center leading-5">Optimisasi perencanaan produksi</span>
                        </div>
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                    </div>
                    <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                        <div class="w-full lg:w-[45%] px-2">
                            <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">Optimisasi perencanaan produksi</h3>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Perencanaan produksi lebih mudah dan efisien</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Maksimalkan perencanaan produksi lewat manajemen perencanaan bahan baku dan material</p>
                                </div>
                            </div>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Hindari kesalahan perhitungan bahan produksi</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Terhindar dari kesalahan dalam melakukan perencanaan produksi dengan sistem manajemen produksi yang akurat</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Meningkatkan produktifitas</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        DMinimalisasi tingkat kesalahan produksi dan percepat proses produksi dengan automisasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                            <img src="{{ asset('assets/fl/thumb-bms.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==1">
            <div class="w-full h-full">
                <div class="container">
                    <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                        <div class="flex flex-col items-center gap-2">
                            <img src="{{ asset('assets/fl/tab-upload-bukti.png')}}" alt="" class="h-24px">
                            <span class="text-14px font-poppins font-semibold text-center leading-5">Eksport Import modul</span>
                        </div>
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                    </div>
                    <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                        <div class="w-full lg:w-[45%] px-2">
                            <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">Eksport Import modul</h3>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Kegiatan Eksport Import jadi lebih mudah</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Tinggal pakai, modul eksport import selalu update dengan aturan yang berlaku di berbagai negara</p>
                                </div>
                            </div>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Terhindar dari kesalahan nilai tukar</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        ERP Manufacture sangat flexible terhadap perubahan kurs, sehingga akan menghindarkanmu dari kesalahan terhadap nilai tukar</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Proses dan progress eksport dan import bisa dipantau dari mana saja</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Pantau progress dan proses eksport import dari mana saja dan kapan saja lewat satu aplikasi secara realtime</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                            <img src="{{ asset('assets/fl/thumb-bms.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==2">
            <div class="w-full h-full">
                <div class="container">
                    <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                        <div class="flex flex-col items-center gap-2">
                            <img src="{{ asset('assets/fl/tab-upload-bukti.png')}}" alt="" class="h-24px">
                            <span class="text-14px font-poppins font-semibold text-center leading-5">Smart Reporting</span>
                        </div>
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" @click="current++">
                    </div>
                    <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                        <div class="w-full lg:w-[45%] px-2">
                            <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">Smart Reporting</h3>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Laporan produksi jadi lebih mudah</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Laporkan hasil produksi dengan satu kali klik</p>
                                </div>
                            </div>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Identifikasi masalah jadi lebih cepat</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Kesalahan jadi lebih mudah teridentifikasi dengan smart reporting</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Memudahkan pengambilan keputusan</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Tinjau dan putuskan kebijakan secara cepat lewat report yang akurat</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                            <img src="{{ asset('assets/fl/thumb-bms.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#DBF9E8] py-8 lg:py-16 lg:min-h-550px min-h-660px" x-show="current==3">
            <div class="w-full h-full">
                <div class="container">

                    <div class="flex justify-between mb-6 items-center px-4 lg:hidden">
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="transform:scaleX(-1)" @click="current--">
                        <div class="flex flex-col items-center gap-2">
                            <img src="{{ asset('assets/fl/tab-visualisasi.png')}}" alt="" class="h-24px">
                            <span class="text-14px font-poppins font-semibold text-center leading-5">Visualisai operasional secara realtime</span>
                        </div>
                        <img src="{{ asset('assets/fl/tab-arrow.png')}}" alt="" style="filter:grayscale(1)">
                    </div>
                    <div class="flex lg:flex-row flex-col-reverse gap-4 lg:gap-12">
                        <div class="w-full lg:w-[45%] px-2">
                            <h3 class="text-18px lg:text-27px lg:leading-9 leading-6 font-poppins font-medium mb-4 lg:mb-10">Visualisai operasional secara realtime
                            </h3>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Lacak proses operasional bisnis dengan mudah</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Pantau proses bisnis secara realtime dari mana saja dan kapan aja</p>
                                </div>
                            </div>
                            <div class="flex gap-3 lg:gap-4 mb-3 lg:mb-8">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Memudahkan Penggunaan</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Visualisasi proses bisnis lewat Visual-K memudahkan pekerja untuk mengoperasionalkan aplikasi</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 lg:pt-1 pt-2 w-5 aspect-square lg:w-auto"><img
                                        src="{{ asset('assets/fl/check-flower.png')}}" alt=""></div>
                                <div>
                                    <p class="font-semibold text-12px lg:text-17px font-poppins leading-4 lg:leading-6">Identifikasi kesalahan pada proses bisnis</p>
                                    <p
                                        class="text-11px lg:text-17px font-poppins text-[#707070] leading-4 lg:leading-6">
                                        Identifikasi kesalahan lebih cepat dengan proses bisnis yang terpantau secara realtime</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-[55%] lg:pt-10 pt-2">
                            <img src="{{ asset('assets/fl/thumb-multi.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 lg:py-16">
        <div class="container pb-10">
            <h2 class="text-20px lg:text-27px font-poppins font-medium text-center mb-3 lg:mb-6 leading-6 lg:leading-9  lg:px-40">Kontrol seluruh proses bisnis mulai produksi, distribusi dan akuntansi secara real-time</h2>
            <p
                class="font-opensans text-11px lg:text-19px text-[#626B79] text-center lg:max-w-[56%] mx-auto leading-4 lg:leading-7">
                AccounTax menyediakan fitur komprehensif yang memudahkan.</p>
            <div class="w-full lg:w-[90%] mt-4 lg:mt-22 swiper prose-swiper">
                <div class="swiper-wrapper">
                    <div class="!flex lg:flex-row flex-col prose swiper-slide">
                        <div class="w-full lg:w-[50%] flex items-center justify-center relative" >
                            <img src="{{ asset('assets/fl/prose-thumb-bg.png')}}" alt="" class="absolute prosebg">
                            <img src="{{ asset('assets/fl/i71.png')}}" alt="" class="relative proseimg">
                        </div>
                        <div class="w-[90%] lg:w-[50%] flex flex-col justify-center gap-1 lg:gap-4 prosetext mx-auto lg:ml-0" >
                            <h3 class="text-16px lg:text-30px font-poppins font-medium leading-6 lg:leading-10">Kelola proses produksi #JadiLebihMudah</h3>
                            <p class="text-11px lg:text-19px font-opensans text-[#626B79] leading-4 lg:leading-7">Tingkat produktifitas pabrik meningkat, biaya produksi berkurang</p>
                        </div>
                    </div>
                    <div class="!flex lg:flex-row flex-col prose swiper-slide">
                        <div class="w-full lg:w-[50%] flex items-center justify-center relative" >
                            <img src="{{ asset('assets/fl/prose-thumb-bg.png')}}" alt="" class="absolute prosebg">
                            <img src="{{ asset('assets/fl/i72.png')}}" alt="" class="relative proseimg">
                        </div>
                        <div class="w-[90%] lg:w-[50%] flex flex-col justify-center gap-1 lg:gap-4 prosetext mx-auto lg:ml-0" >
                            <h3 class="text-16px lg:text-30px font-poppins font-medium leading-6 lg:leading-10">
                                Target produksi tercapai</h3>
                            <p class="text-11px lg:text-19px font-opensans text-[#626B79] leading-4 lg:leading-7">
                                Target produksi dan permintaan pelanggan bisa dipenuhi dengan mudah karena proses produksi telah terautomisasi</p>
                        </div>
                    </div>
                    <div class="!flex lg:flex-row flex-col prose swiper-slide">
                        <div class="w-full lg:w-[50%] flex items-center justify-center relative" >
                            <img src="{{ asset('assets/fl/prose-thumb-bg.png')}}" alt="" class="absolute prosebg">
                            <img src="{{ asset('assets/fl/i73.png')}}" alt="" class="relative proseimg">
                        </div>
                        <div class="w-[90%] lg:w-[50%] flex flex-col justify-center gap-1 lg:gap-4 prosetext mx-auto lg:ml-0" >
                            <h3 class="text-16px lg:text-30px font-poppins font-medium leading-6 lg:leading-10">Optimalkan kegiatan inventaris di berbagai gudang</h3>
                            <p class="text-11px lg:text-19px font-opensans text-[#626B79] leading-4 lg:leading-7">
                                Pantau ketersedian stock secara real-time sehingga kebutuhkan pabrik bisa terpenuhi</p>
                        </div>
                    </div>
                </div>
                <div class="prose-pagination text-center"></div>
            </div>
        </div>
        <div class="flex justify-center gap-2 lg:gap-4 lg:pb-16">
            <a href=""
                class="font-montserrat inline-flex items-center justify-center h-31px lg:h-48px px-4 lg:px-30px text-11px lg:text-16px  rounded-full bg-transparent text-[#009944] font-bold border border-[#009944] hover:bg-[#009944] hover:text-white">Whatsapp
                Kami</a>
            <a href=""
                class="font-montserrat inline-flex items-center justify-center h-31px lg:h-48px px-4 lg:px-30px text-11px lg:text-16px  rounded-full bg-[#009944] text-white font-bold  hover:text-white">Jadwalkan
                Demo</a>

        </div>
    </section>

    <section class="py-8 lg:py-16 bg-[#FAFAFA]">
        <div class="container">
            <div class="flex lg:flex-row flex-col gap-4 lg:gap-12">
                <div class="w-full lg:w-[40%] px-2 lg:pt-16 pt-2">
                    <img src="{{ asset('assets/fl/bms-img.png')}}" alt="" class="lg:ml-4 lg:mt-12 w-[40%] mx-auto lg:w-auto mb-4 lg:hidden block">
                    <h2
                        class="text-17px lg:text-29px font-medium font-poppins leading-6 lg:leading-9 mb-2 lg:mb-4  lg:text-left text-center">
                        ERP Manufacture</h2>
                    <p
                        class="text-[#626B79] font-opensans text-11px lg:text-19px leading-4 lg:leading-7 lg:max-w-[370px] lg:text-left text-center">
                        Dikembangkan untuk memberikan kemudahan dalam mengelola aktifitas bisnis manufacture di Indonesia</p>
                   
                <img src="{{ asset('assets/fl/bms-img.png')}}" alt="" class="lg:ml-4 lg:mt-12 w-[40%] mx-auto lg:w-auto mb-4 hidden lg:block">
                </div>
                <div class="w-full lg:w-[60%] grid grid-cols-2 gap-y-2 gap-x-6 lg:gap-x-8 px-4 lg:px-0  lg:gap-y-4">
                    <div class="flex flex-col gap-3px lg:gap-6px py-4">
                        <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                            <img src="{{ asset('assets/fl/i5-0-1.png')}}" alt="" class="lg:w-auto w-6"><span
                                class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">General Info</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Biz Unit</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Organization</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Client</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Item</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Closing</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">User defined Authority</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3px lg:gap-6px py-4">
                        <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                            <img src="{{ asset('assets/fl/i5-0-2.png')}}" alt="" class="lg:w-auto w-6"><span
                                class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Accounting</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">COA Structure</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Slip Control</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">General Ledger</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Closing</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Fixed Asset </span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">AR/AP</span>
                        </div>
                    </div>
                    <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                    <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                    <div class="flex flex-col gap-3px lg:gap-6px py-4">
                        <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                            <img src="{{ asset('assets/fl/i5-0-3.png')}}" alt="" class="lg:w-auto w-6"><span
                                class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Costing</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Unit Pricing</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Profit Analyst</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3px lg:gap-6px py-4">
                        <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                            <img src="{{ asset('assets/fl/i5-0-4.png')}}" alt="" class="lg:w-auto w-6"><span
                                class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Sales</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Buyer Management
                            </span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Collection</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Receiving Order</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Revenue</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Export Management</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Sales Record</span>
                        </div>
                    </div>
                    
                    <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                    <div class="h-[1px] bg-[#CCCCCC] w-[90%] lg:w-[80%]"></div>
                    <div class="flex flex-col gap-1 py-4">
                        <div class="flex gap-2 lg:gap-4 items-center  mb-3 lg:mb-4">
                            <img src="{{ asset('assets/fl/i5-0-5.png')}}" alt="" class="lg:w-auto w-6"><span
                                class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Purchasing</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Contract</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Procurement</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Record</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Import</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 py-4">
                        <div class="flex gap-2 lg:gap-4 items-center mb-3 lg:mb-4">
                            <img src="{{ asset('assets/fl/i5-0-6.png')}}" alt="" class="lg:w-auto w-6"><span
                                class="text-11px lg:text-19px font-poppins font-semibold text-[#009944]">Inventory</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Picking Up</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Closing</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Inventory</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Stock Status</span>
                        </div>
                        <div class="flex gap-2 lg:gap-3 items-start">
                            <img src="{{ asset('assets/fl/check-small.png')}}" alt="" class="lg:mt-1 mt-[2px] lg:w-auto w-2">
                            <span
                                class="text-9px lg:text-17px font-medium font-poppins text-[#626B79] leading-3 lg:leading-6">Availability</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="pt-10 lg:pt-20">
        <div class="container">
            <h2 class="text-center text-16px lg:text-29px font-bold font-montserrat text-[#444444] mb-8 lg:mb-16 leading-6">Ribuan bisnis telah menggunakan ERP Manufacture</h2>
                <div class="overflow-auto lg:w-full w-100vw -ml-20px">
                    <div class="grid grid-cols-4 gap-4 lg:max-w-725px mx-auto" style="width: max-content">
                        <div class="flex items-center justify-center h-36px lg:h-70px lg:p-4 p-2 aspect-mod2">
                            <img src="{{ asset('assets/fl/brand-bng.png')}}" alt="" class="h-full">
                        </div>
                        <div class="flex items-center justify-center h-36px lg:h-70px lg:p-4 p-2 aspect-mod2">
                            <img src="{{ asset('assets/fl/brand-inaa.png')}}" alt="" class="h-full">
                        </div>
                        <div class="flex items-center justify-center h-36px lg:h-70px lg:p-4 p-2 aspect-mod2">
                            <img src="{{ asset('assets/fl/brand-staindo.png')}}" alt="" class="h-full">
                        </div>
                        <div class="flex items-center justify-center h-36px lg:h-70px lg:p-4 p-2 aspect-mod2">
                            <img src="{{ asset('assets/fl/brand-qst.png')}}" alt="" class="h-full">
                        </div>
                    </div>
                </div>
            <div class="pt-60 pb-8 lg:pb-16 lg:py-24 relative mt-8 lg:mt-22">
                <img src="{{ asset('assets/fl/testimoni.png')}}" alt="" class="absolute top-0 -left-8">
                <div class="lg:w-700px rounded-2xl ml-auto p-6 pt-8 lg:pl-24 relative bg-white"
                    style="box-shadow: 0px 4px 10px 0px #00000011;">
                    <div class="font-opensans text-15px lg:text-24px text-[#4E4E4E] leading-6 lg:leading-8 mt-2 lg:mt-4 pr-3 relative">
                        <img src="{{ asset('assets/fl/quote.png')}}" alt="" class="absolute -top-5 lg:-top-4 -left-0 lg:-left-16 lg:w-auto w-5">
                        We were introduced to SystemEver AccounTax and finally decided to use it. We will recommend it
                        to our clients. Why? Because all these problems are solved.
                        <img src="{{ asset('assets/fl/quote.png')}}" alt="" class="absolute -bottom-1 -right-1 lg:-right-2 lg:w-auto w-5"
                            style="transform: scale(-1);">
                    </div>
                    <div class="flex mt-4 lg:mt-8 items-center gap-4 lg:gap-6">
                        <img src="{{ asset('assets/fl/testi-0.png')}}" alt="" class="lg:w-auto w-14">
                        <div class="flex flex-col gap-1">
                            <strong class="text-12px lg:text-19px text-[#4E4E4E] font-opensans">QST Agung Jaya</strong>
                            <p class="text-10px lg:text-15px text-[#4E4E4E] font-opensans">Department position</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative min-h-540px lg:min-h-610px pt-12 overflow-hidden">
        <picture class="absolute top-0 left-0 w-full h-610px">
            <source srcset="{{ asset('assets/fl/faq-bg-1.png')}}" media="(min-width: 1024px)" class="w-full h-full object-cover"
                style="object-position: bottom center;" />
            <img src="{{ asset('assets/fl/faq-bg-1-m.png')}}" alt="" class="w-full h-full object-cover"
                style="object-position: bottom center;" />
        </picture>
        <div class="container relative">
            <div class="flex lg:flex-row flex-col">
                <div class="w-full lg:w-[50%] flex flex-col gap-4 justify-center lg:pr-24 pt-4 lg:pt-40 h-full">
                    <h3 class="text-19px lg:text-31px font-semibold font-poppins text-[#444444] text-center lg:text-left">Kenapa SystemEver?</h3>
                    <p class="text-11px lg:text-21px font-inter text-[#757575] leading-4 lg:leading-7 text-center lg:text-left">Sebagai perusahaan yang bertekad menjadi
                        <strong>ERP ABC (Asia Best Cloud)</strong>, SystemEver selalu menjamin kemudahan, keamanan dan kesesuain produk
                        dengan pasar.</p>
                </div>
                <div class="w-full lg:w-[50%] pt-4 lg:pt-0">
                    <div class="w-full lg:w-533px flex flex-col gap-4 lg:gap-6 ml-auto " x-data="{active:0}">
                        <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                            <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-7 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between"
                                :class="active==0?'bg-[#009944] font-bold text-white':''"
                                @click="active=(active==0?null:0)">
                                Apa itu ERP Manufacture? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-9px w-18px"
                                    :class="active==0?'':'filter brightness-50 transform rotate-180'"></div>
                            <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  "
                                :class="active==0?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">ERP Manufacture adalah aplikasi ERP yang diciptakan untuk memudahkan operasional bisnis trading dan distribusi</div>
                        </div>
                        <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                            <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-7 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between"
                                :class="active==1?'bg-[#009944] font-bold text-white':''"
                                @click="active=(active==1?null:1)">
                                Siapa pengguna ERP Manufacture? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt="" class="h-9px w-18px"
                                    :class="active==1?'':'filter brightness-50 transform rotate-180'">
                            </div>
                            <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  "
                                :class="active==1?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">ERP Manufacture adalah aplikasi ERP yang diciptakan untuk memudahkan operasional bisnis trading dan distribusi</div>
                        </div>
                        <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                            <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-7 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between"
                                :class="active==2?'bg-[#009944] font-bold text-white':''"
                                @click="active=(active==2?null:2)">
                                Bagaimana keamanan data ERP Manufacture ? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt=""
                                    class="h-9px w-18px"
                                    :class="active==2?'':'filter brightness-50 transform rotate-180'">
                            </div>
                            <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  "
                                :class="active==2?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">ERP Manufacture adalah aplikasi ERP yang diciptakan untuk memudahkan operasional bisnis trading dan distribusi</div>
                        </div>
                        <div class="flex flex-col rounded-lg bg-white shadow-md overflow-hidden ">
                            <div class="px-4 lg:px-8 text-11px lg:text-19px font-medium font-poppins lg:leading-7 leading-6 min-h-47px lg:min-h-78px cursor-pointer  flex gap-4 items-center justify-between"
                                :class="active==3?'bg-[#009944] font-bold text-white':''"
                                @click="active=(active==3?null:3)">
                                Bagaimana saya menghubungi SystemEver? <img src="{{ asset('assets/fl/faq-arrow.png')}}" alt=""
                                    class="h-9px w-18px"
                                    :class="active==3?'':'filter brightness-50 transform rotate-180'">
                            </div>
                            <div class="px-4 lg:px-8 text-11px lg:text-17px transition-all font-poppins leading-4 lg:leading-6  "
                                :class="active==3?'max-h-100 py-3 lg:py-4':'max-h-0 py-0 overflow-hidden'">ERP Manufacture adalah aplikasi ERP yang diciptakan untuk memudahkan operasional bisnis trading dan distribusi</div>
                        </div>
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