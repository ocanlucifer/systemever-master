@extends('systemever/layouts/blankmain', [
    'spesifice_page_seo' => 'Contact ' . activelang()
])

@section('custom_css')
<style>
    @media only screen and (max-width: 1365px) {
        .contactbg {            
            background-image: url('{{ asset_to_webp(uri('assets/img/contact-img.png')) }}');
            background-position:top center;
            background-size:200%;
            background-repeat:no-repeat;
            min-height: 100vw;
            width: 100%;
            position: fixed;
            z-index: -1;
        }

        .contact-page {
            position: relative;
            top: 0px;
            width: 100%;
            min-height: 100vh;
            background: rgb(0,0,0,0.4);
        }
    }
    @media only screen and (min-width: 1366px) {
        .contactbg {
            background-image: url('{{ asset_to_webp(uri('assets/img/contact-img.png')) }}');
            background-position:top center;
            background-size:100%;
            background-repeat:no-repeat;
            min-height: 100vw;
            width: 50%;
            position: fixed;
        }

        .contact-page {
            position: absolute;
            top: 0px;
            width: 100%;
            min-height: 100vh;
            background: rgb(0,0,0,0.4);
        }
    }

    .page-content {
        margin-top:0px !important;
    }
    .contact-title {
        font-family: Roboto;
        font-style: normal;
        font-weight: bold;
        font-size: 50px;
        line-height: 56px;
        color:#009944;
    }
    .contact-header p {
        font-family: Poppins;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 28px;
        letter-spacing: 0em;
        text-align: left;
        color : #878787;
    }
    .contact-header h2 {
        font-family: Poppins;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: 42px;
        letter-spacing: 0em;
        text-align: left;
        color:#009944;
    }
    .aggrement {
        font-family: Open Sans;
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: 19px;
        letter-spacing: 0em;
        text-align: left;
        color: #878787
    }
</style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 p-0">
                <div class="contactbg"></div>
                <div class="contact-page p-0 p-lg-5 pt-5">
                    <a href="{{ route('get.index') }}" class="ml-5 mb-5 d-block"><img src="{{ uri('assets/img/logo-white.svg') }}"></a>
                    <h1 class="contact-title mx-5">{!! stringlang('Making<br>Your Business<br>Better', 'Buat<br>Bisnismu<br>Lebih Baik') !!}</h1>
                    <p class="mx-5 my-4 text-white">
                        {{ stringlang("We provide our customers with the best solution and
                        satisfactory service for competent business management.", 
                        "Kami memberikan kepada pelangga solusi & layanan terbaik ,serta keberhasilan Anda adalah dasar kesuksesan Kami.") }}
                    </p>
                    <p class="mx-5 my-4 text-white">
                        {{ stringlang("Keeping in mind that customers’ prosperity is the
                        foundation of our success, we prosper along with our
                        customers based on sound management, and pursue
                        happiness of life, hand in hand with our family as well.", 
                        "SystemEver – Making Your Business Better") }}
                    </p>
                    <div class="text-center">
                        <img src="{{ asset_to_webp(uri('assets/img/systemever-ball.png')) }}" class="my-5 w-50">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-5 bg-white main-body-col">
                <div class="form bg-white p-0 p-lg-5">
                    <div class="contact-header mb-4">
                        <p>{{ stringlang('Take a coffee break with SystemEver', 'Hubungi Kami Sekarang!') }}</p>
                        <h2>{{ stringlang('Complete the Form Below and We Will Follow up Soon!', 'Lengkapi form di bawah ini dan Kami akan segera menghubungi Anda.') }}</h2>
                    </div>
                    <div class="contact-body ">
                        <form action="{{ route('post.form.submit') }}" method="post" id="contact_us_form">
                            @csrf
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-6 mb-3">
                                          <div class="label-field">{{ stringlang('Name', 'Nama') }}</div>
                                          <input type="text" name="nama" id="input_nama" class="form-control txt-form" placeholder="{{ stringlang('Insert your name', 'Masukkan nama anda') }}" required>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="label-field">{{ stringlang('Title', 'Jabatan') }}</div>
                                          <input type="text" name="title" id="input_title" class="form-control txt-form" placeholder="{{ stringlang('Insert your title', 'Masukkan jabatan anda') }}">
                                      </div>
                                  </div>
                              </div>
                
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="label-field">{{ stringlang('Phone', 'Telepon') }}</div>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">+62</span>
                                            </div>
                                            <input type="number" name="phone" id="input_phone" minlength="5" maxlength="13" class="form-control txt-form" placeholder="{{ stringlang('Phone Number', 'Nomor Telepon') }}" aria-label="{{ stringlang('Phone Number', 'Nomor Telepon') }}" aria-describedby="basic-addon1" required>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="label-field">Email</div>
                                          <input type="text" name="email" id="input_email" class="form-control txt-form" placeholder="{{ stringlang('Insert your email', 'Masukkan email anda') }}" required>
                                      </div>
                                  </div>
                              </div>
                
                              <div class="form-group">
                                  <div class="row">
                                      <div class="col-lg-6 mb-3">
                                          <div class="label-field">{{ stringlang('Company','Perusahaan') }}</div>
                                          <input type="text" name="company" id="input_company" class="form-control txt-form" placeholder="{{ stringlang('Insert your Company', 'Masukkan perusahaan anda') }}" >
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="label-field">{{ stringlang('Industries','Industri') }}</div>
                                        <input type="text" name="industries" id="input_industries" class="form-control txt-form" placeholder="{{ stringlang('Insert your Industries', 'Masukkan industri anda') }}">
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="label-field w-100">{{ stringlang('Experience in ERP?', 'Memiliki Pengalaman menggunakan ERP?') }}</div>
                                        <div class="d-flex justify-content-start align-items-center">
                                          <label class="container-check mb-0 pl-4 mr-4">
                                              <input type="radio" name="radio-erp" id="input_radio_yes" value="yes">
                                              <span class="checkmark-circle"></span>
                                              <div class="caption-check">{{ stringlang('Yes', 'Ya') }}</div>
                                          </label>
                                          <label class="container-check mb-0 pl-4">
                                              <input type="radio" name="radio-erp" id="input_radio_no" value="no">
                                              <span class="checkmark-circle"></span>
                                              <div class="caption-check">{{ stringlang('No', 'Tidak') }}</div>
                                          </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                
                              <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="label-field">{{ stringlang('Message','Pesan') }}</div>
                                        <textarea name="message" id="input_message" placeholder="{{ stringlang('Type your message', 'Tulis pesan anda') }}" class="form-control txt-area no-resize" id="" rows="3"></textarea>
                                        <input type="hidden" name="type" id="input_type" value="contact">
                                        <input type="hidden" name="from" id="input_from" value="{{ \URL::full() }}">
                                        <div class="mt-3">
                                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_CLIENT_KEY') }}"></div>
                                        </div>
                                    </div>
                                </div>
                                @include('systemever/includes/agreement')
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <button id="submit" disabled type="submit" class="btn btn-white-orange w-100 btn-submit-modal" onclick="$('.submitme_contact_us_form').click()">{{ stringlang('Submit', 'Kirim') }}</button>
                                    </div>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection

@section('custom_js')
@include('systemever/includes/modals/modal_form_js', ['pointer' => 'contact_us_form'])
<script>
setInterval(function(){
    //height check
    var height = $(".main-body-col").css("height");
    var width = $(window).width();
    $(".contactbg").css("height", height);
    if (width > 480) {
        $(".contact-page").css("height", height);
    }


    //disbaled button check
    var no_empty_input = true;
    var input_nama = $("#input_nama").val();
    if (!input_nama) {
        no_empty_input = false;
    }
    // var input_title = $("#input_title").val();
    // if (!input_title) {
    //     no_empty_input = false;
    // }
    var input_phone = $("#input_phone").val();
    if (!input_phone) {
        no_empty_input = false;
    }
    var input_email = $("#input_email").val();
    if (!input_email) {
        no_empty_input = false;
    }
    // var input_company = $("#input_company").val();
    // if (!input_company) {
    //     no_empty_input = false;
    // }
    // var input_industries = $("#input_industries").val();
    // if (!input_industries) {
    //     no_empty_input = false;
    // }
    // var input_radio_yes = $("#input_radio_yes").is(':checked');
    // var input_radio_no = $("#input_radio_no").is(':checked');
    
    // if (input_radio_yes == false && input_radio_no == false) {
    //     no_empty_input = false;
    // }
    // var input_message = $("#input_message").val();
    // if (!input_message) {
    //     no_empty_input = false;
    // }

    if (no_empty_input) {
        $("#submit").prop("disabled", false);
    } else {
        $("#submit").prop("disabled", true);
    }

}, 1000)
</script>
@endsection