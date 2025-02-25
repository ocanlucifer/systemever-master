@extends('frontend/layouts/main')

@section('custom_css')
<style>
    .box-desc-faq .tab-content {
        box-shadow : none !important;
    }

    .card-faq .card-header {
        border-bottom: 0px solid #D9D9D9 !important;
        border-top: 1px solid #D9D9D9;
    }
</style>
@endsection
@section('content')
    <section class="section-banner-full mb-lg-1 position-relative">
        <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
        <div class="caption-banner  d-flex align-items-center">
            <div class="container">
                <h1>How can we help <br/> you?</h1>
                <p>{{ stringlang('Running your business is now easier than ever', 'Menjalankan bisnis anda kini lebih mudah dari sebelumnya') }}</p>
            </div>
        </div>
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <form action="">
                        <div class="box-search px-lg-4 px-md-4 px-sm-1 px-1">
                            <div class="input-group search-faq">
                                <input type="text" class="form-control txt-search" placeholder="Describe your problem?" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><img src="{{ asset('assets/img/search.svg') }}" alt=""></button>
                                </div>
                            </div>
                        </div>
                    </form>
               </div>
           </div>
       </div>
    </section>
    <div class="d-lg-block d-md-block d-sm-none d-none">
        @include('frontend/includes/breadcrumbs')
    </div>
    <section class="section-faq pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 overflow-hide pr-4">
                   <div class="title-pages mb-4 pl-lg-3 pl-md-3 pl-1"> 
                       <h3>{!!stringlang('FAQ', 'Tanya&nbsp;Jawab')!!}</h3>
                    </div>
                    <div class="box-nav-tab d-lg-block d-md-block d-sm-none d-none">
                        <div class="nav flex-lg-column flex-md-column nav-side-menu-faq nav-pills mb-lg-0 mb-md-0 mb-sm-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link pl-3 active" id="pills-1" data-toggle="pill" href="#content-1" role="tab" aria-controls="content-1" aria-selected="true">How to use</a>
                            <a class="nav-link pl-3 " id="pills-2" data-toggle="pill" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false">Data, security, storage</a>
                            <a class="nav-link pl-3" id="pills-3" data-toggle="pill" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Consulting and development inquiry</a>
                            <a class="nav-link pl-3" id="pills-3" data-toggle="pill" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Product information</a>
                            <a class="nav-link pl-3" id="pills-3" data-toggle="pill" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Cost/Price/Use Fee</a>
                            <a class="nav-link pl-3" id="pills-3" data-toggle="pill" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Charging / Unpaid /Cancellation / Refund</a>
                            <a class="nav-link pl-3" id="pills-3" data-toggle="pill" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Customer Support</a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 position-relative box-desc-faq pt-lg-4 pt-md-4 pt-0 mt-lg-5 mt-md-5 mt-0">
                    {{-- tab desktop --}}
                    <div class="tab-content bg-white px-lg-3 px-md-3 px-1 pt-3 pb-5 d-lg-block d-md-block d-sm-none d-none" id="v-pills-tabContent">
                        <div class="tab-pane desc-tcpp fade show active" id="content-1"  role="tabpanel" aria-labelledby="pills-1">
                            <h4>How to Use</h4>
                            <div id="accordion-1">
                                @for ($i = 1; $i <= 6; $i++)
                                    <div class="card card-faq">
                                        <div class="card-header" id="headcard-{{ $i }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
                                                @php 
                                                    if($i == 1){
                                                        echo 'I have to place an order for each store (directly managed store or affiliated store), do I have to pay an additional cost for each store? ';
                                                    }else if($i == 2){
                                                        echo 'What is the standard for one month (one month)?';
                                                    }else if($i == 3){
                                                        echo 'What is a concurrent user?';
                                                    }else if($i == 4){
                                                        echo 'What is the difference between general users and ESS users?';
                                                    }else if($i == 5){
                                                        echo 'Is there a free trial period?';
                                                    }else{
                                                        echo 'Can I use it on a daily basis?';
                                                    }
                                                @endphp
                                                <i class="fa fa-angle-down"></i>
                                                </button>
                                            </h5>
                                        </div>
                                    
                                        <div id="collapse-{{ $i }}" class="collapse " aria-labelledby="headcard-{{ $i }}" data-parent="#accordion-1">
                                            <div class="card-body">
                                                Each store can be counted as a general user of ERP and additional general users can be purchased at the head office as needed.
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        @for ($tab = 2; $tab <= 3; $tab++)
                            <div class="tab-pane desc-tcpp fade" id="content-{{ $tab }}" role="tabpanel" aria-labelledby="pills-{{ $tab }}">
                                <h4>
                                    {{ $tab == 2 ? 'Terms & Conditions': 'Privacy Policy' }}
                                </h4>
                                <p>Syarat dan Ketentuan ini merupakan perjanjian antara pengguna (“Anda”) dan PT Ruang Raya Indonesia (“Kami”), 
                                    yaitu sebuah perseroan terbatas yang didirikan dan beroperasi secara sah berdasarkan hukum 
                                    Negara Republik Indonesia dan berdomisili di DKI Jakarta, Indonesia. 
                                    Syarat dan Ketentuan ini mengatur Anda saat mengakses dan menggunakan aplikasi, 
                                    situs web (www.ruangguru.com dan situs web lain yang Kami kelola), fitur, teknologi, 
                                    konten dan produk yang Kami sediakan (selanjutnya, secara Bersama-sama disebut sebagai “Platform”),
                                </p>

                                <p>Harap membaca Syarat dan Ketentuan ini secara seksama sebelum Anda mulai menggunakan Platform Kami, karena peraturan ini berlaku pada penggunaan Anda terhadap Platform Kami.</p>
                                
                                <p>Syarat dan Ketentuan ini mencakup hal-hal sebagai berikut:<br/>
                                Pembukaan Akun Anda<br/>
                                Informasi Pribadi Anda<br/>
                                Akses terhadap Platform Kami<br/>
                                Penggunaan yang Dilarang<br/>
                                Hak Kekayaan Intelektual<br/>
                                Pengunggahan Konten Pada Platform Kami<br/>
                                Layanan Interaktif<br/>
                                Laporan Kemungkinan Pelanggaran<br/>
                                Tindakan yang Kami Anggap Perlu<br/>
                                Membuat Link ke Platform Kami<br/>
                                Link Pihak Ketiga Pada Platform Kami<br/>
                                Tanggung Jawab Anda<br/>
                                Batasan Tanggung Jawab Kami<br/>
                                Keadaan Kahar (Force Majeure)<br/>
                                Hukum yang Berlaku<br/>
                                Ketentuan Lainnya<br/>
                                Cara Menghubungi Kami</p>
                                
                                <p>Anda harus berusia minimal 18 (delapan belas) tahun atau sudah menikah dan 
                                    tidak berada di bawah perwalian atau pengampuan agar Anda secara hukum memiliki kapasitas dan berhak untuk mengikatkan diri pada Syarat dan Ketentuan ini. 
                                    Jika Anda tidak memenuhi ketentuan tersebut, maka tindakan Anda mendaftar,
                                     mengakses, menggunakan atau melakukan aktivitas lain dalam Platform Kami harus 
                                     dalam sepengetahuan, pengawasan dan persetujuan yang sah dari orang tua atau wali 
                                     atau pengampu Anda. Orang tua, wali atau pengampu yang memberikan persetujuan bagi 
                                     Anda yang berusia di bawah 18 (delapan belas) tahun bertanggung jawab secara penuh 
                                     atas seluruh tindakan Anda dalam penggunaan dan akses terhadap Platform.
                                </p>
                                
                               <p> Dengan mendaftar dan/atau menggunakan Platform Kami, maka Anda dan/atau orang tua, 
                                   wali atau pengampu Anda (jika Anda berusia di bawah 18 tahun) dianggap telah membaca, mengerti, memahami dan menyetujui semua isi dalam Syarat dan Ketentuan ini.
                               </p>
                                
                                <p>Dengan menyetujui Syarat dan Ketentuan ini, Anda juga menyetujui Syarat dan Ketentuan tambahan,
                                     termasuk Syarat dan Ketentuan atas setiap Layanan, dan perubahannya yang merupakan bagian yang 
                                     tidak terpisahkan dari Syarat dan Ketentuan ini (selanjutnya, Syarat dan Ketentuan, 
                                     Syarat dan Ketentuan tambahan, dan perubahannya secara bersama-sama disebut sebagai 
                                     “Syarat dan Ketentuan”). Meskipun merupakan satu kesatuan, Syarat dan Ketentuan tambahan 
                                     akan berlaku dalam hal terdapat perbedaan dengan Syarat dan Ketentuan.
                                </p>
                                <p>Jika Anda tidak menyetujui Syarat dan Ketentuan ini, Kami berhak untuk menghentikan akses dan 
                                    penggunaan Anda terhadap Platform Kami.
                                </p>
                                <p>A. PEMBUKAAN AKUN ANDA</p>
                                
                                <p>Sebelum menggunakan Platform, Anda menyetujui Syarat dan Ketentuan ini dan Kebijakan Privasi, 
                                    dan mendaftarkan diri Anda dengan memberikan informasi yang Kami butuhkan. Saat melakukan pendaftaran, 
                                    Kami akan meminta Anda untuk memberikan nama lengkap, alamat surat elektronik dan nomor telepon genggam 
                                    pribadi Anda. Kami juga dapat menghentikan penggunaan Platform jika dikemudian hari data-data yang Anda 
                                    berikan kepada Kami terbukti tidak benar.
                                </p>
                               <p> Sistem Kami akan membuatkan akun pada Platform (“Akun”) untuk Anda yang dapat digunakan untuk menggunakan 
                                   Platform dan memesan layanan melalui Platform.
                               </p>
                               <p> Dalam hal Anda telah keluar dari Akun Anda, maka Anda perlu memasukan alamat surat elektronik yang ada 
                                   berikan pada saat mendaftarkan diri Anda dan memasukan password.
                               </p>
                                <p>Akun Anda hanya dapat digunakan oleh Anda, sehingga Anda tidak dapat mengalihkannya 
                                    kepada orang lain dengan alasan apa pun. Kami berhak menolak untuk memfasilitasi 
                                    Layanan jika Kami mengetahui atau mempunyai alasan yang cukup untuk menduga bahwa Anda 
                                    telah mengalihkan atau membiarkan Akun Anda digunakan oleh orang lain.
                                </p>
                               <p> Keamanan dan kerahasiaan Akun Anda, termasuk nama terdaftar, alamat surat elektronik terdaftar, 
                                   nomor telepon genggam terdaftar sepenuhnya merupakan tanggung jawab pribadi Anda. 
                                   Segala kerugian dan risiko yang ada akibat kelalaian Anda dalam menjaga keamanan dan 
                                   kerahasiaan sebagaimana disebutkan ditanggung oleh Anda dan/atau orang tua, wali atau 
                                   pengampu Anda (jika Anda berusia di bawah 18 
                               </p>
                            </div>
                        @endfor
                    </div>
                    {{-- mobile responsive accordion --}}
                    <div id="accordion-menu" class="accordion-faq-menu">
                        @for ($x = 1; $x <= 6; $x++)
                            <div class="card card-faq">
                                <div class="card-header" id="headcard-menu-{{ $x }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-menu-{{ $x }}" aria-expanded="true" aria-controls="collapse-menu-{{ $x}}">
                                        @php 
                                            if($x == 1){
                                                echo 'How to use ';
                                            }else if($x == 2){
                                                echo 'Data, security, storage';
                                            }else if($x == 3){
                                                echo 'Product information';
                                            }else if($x == 4){
                                                echo 'Cost/Price/Use Fee';
                                            }else if($x == 5){
                                                echo 'Charging / Unpaid /Cancellation / Refund';
                                            }else{
                                                echo 'Customer Support';
                                            }
                                        @endphp
                                        <i class="fa fa-angle-down"></i>
                                        </button>
                                    </h5>
                                </div>
                            
                                <div id="collapse-menu-{{ $x }}" class="collapse " aria-labelledby="headcard-menu-{{ $x }}" data-parent="#accordion-menu">
                                    <?php if($x == 1) {?>
                                        <div class="card-body pt-0">
                                            <div id="accordion-mb-1" class="accordion-mb">
                                                @for ($n = 1; $n <= 6; $n++)
                                                    <div class="card card-faq">
                                                        <div class="card-header" id="headcard-mb-{{ $n }}">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link w-100 d-flex align-items-center position-relative text-left collapsed" data-toggle="collapse" data-target="#collapse-mb-{{ $n }}" aria-expanded="true" aria-controls="collapse-mb-{{ $n }}">
                                                                @php 
                                                                    if($n == 1){
                                                                        echo 'I have to place an order for each store (directly managed store or affiliated store), do I have to pay an additional cost for each store? ';
                                                                    }else if($n == 2){
                                                                        echo 'What is the standard for one month (one month)?';
                                                                    }else if($n == 3){
                                                                        echo 'What is a concurrent user?';
                                                                    }else if($n == 4){
                                                                        echo 'What is the difference between general users and ESS users?';
                                                                    }else if($n == 5){
                                                                        echo 'Is there a free trial period?';
                                                                    }else{
                                                                        echo 'Can I use it on a daily basis?';
                                                                    }
                                                                @endphp
                                                                <i class="fa fa-angle-down"></i>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    
                                                        <div id="collapse-mb-{{ $n }}" class="collapse " aria-labelledby="headcard-mb-{{ $n }}" data-parent="#accordion-mb-1">
                                                            <div class="card-body">
                                                                Each store can be counted as a general user of ERP and additional general users can be purchased at the head office as needed.
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="card-body">
                                            Each store can be counted as a general user of ERP and additional general users can be purchased at the head office as needed.
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')

@endsection