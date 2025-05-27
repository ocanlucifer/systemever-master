<div class="modal modal-form fade" id="modal-patner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0 pb-0">
          <div class="modal-title pt-4 mt-2 pl-4 ml-2">
              <h5>{{ stringlang('We are hiring now', 'Kami sedang mencari mitra', '우리는 파트너를 찾고 있습니다') }}</h5>
              <h3>{{ stringlang('Become Our Partner', 'Jadilah Mitra Kami', '우리의 파트너가 되어주세요') }}<br>
               <small>{{ stringlang('to get special offers!', 'untuk mendapatkan penawaran special!', '특별 혜택을 받으려면') }}</small></h3>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/img/close-modal.svg') }}" alt="">
          </button>
        </div>
        <div class="modal-body pb-0 px-5">
            <form action="{{ route('post.form.submit') }}" method="post" id="partner_form">
                @csrf
              <div class="form-group">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Name', 'Nama', '이름') }}</div>
                          <input type="text" name="nama" class="form-control txt-form" placeholder="{{ stringlang('Insert your name', 'Masukkan nama anda', '이름을 입력하세요') }}" required>
                      </div>
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Title', 'Jabatan', '위치') }}</div>
                          <input type="text" name="title" class="form-control txt-form" placeholder="{{ stringlang('Insert your title', 'Masukkan jabatan anda', '당신의 위치를 ​​입력하세요') }}" required>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Phone', 'Telepon', '전화') }}</div>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input type="number" minlength="5" maxlength="13" class="form-control txt-form" placeholder="{{ stringlang('Phone Number', 'Nomor Telepon', '전화 번호') }}" aria-label="{{ stringlang('Phone Number', 'Nomor Telepon') }}" aria-describedby="basic-addon1">
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Email', 'Email', '이메일') }}</div>
                          <input type="text" name="email" class="form-control txt-form" placeholder="{{ stringlang('Insert your email', 'Masukkan email anda', '이메일을 입력하세요') }}" required>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Company','Perusahaan', '회사') }}</div>
                          <input type="text" name="company" class="form-control txt-form" placeholder="{{ stringlang('Insert your Company', 'Masukkan perusahaan anda', '귀하의 회사를 입력하세요') }}" required>
                      </div>
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Experience in ERP?', 'Memiliki Pengalaman di ERP?', 'ERP 사용 경험이 있나요?') }}</div>
                          <div class="d-flex justify-content-start align-items-center">
                            <label class="container-check mb-0 pl-4 mr-4">
                                <input type="radio" name="radio-erp" value="yes" id="">
                                <span class="checkmark-circle"></span>
                                <div class="caption-check">{{ stringlang('Yes', 'Iya', '예') }}</div>
                            </label>
                            <label class="container-check mb-0 pl-4">
                                <input type="radio" name="radio-erp" value="yes" id="">
                                <span class="checkmark-circle"></span>
                                <div class="caption-check">{{ stringlang('No', 'Tidak', '아니요') }}</div>
                            </label>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="label-field">{{ stringlang('Message','Pesan', '메시지') }}</div>
                        <textarea name="message" placeholder="{{ stringlang('Type your message', 'Tulis pesan anda', '메시지를 작성하세요') }}" class="form-control txt-area no-resize" id="" rows="3"></textarea>
                        <div class="mt-3">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_CLIENT_KEY') }}"></div>
                        </div>
                        <input type="hidden" name="type" value="partner form">
                        <input type="hidden" name="from" value="{{ \URL::full() }}">
                        <button type="submit" class="submitme_download_form" style="display:none"></button>
                    </div>
                </div>
                @include('systemever/includes/agreement')
            </div>
          </form>
        </div>
        <div class="modal-footer border-top-0 d-block mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8"><button type="button" class="btn btn-white-orange w-100 btn-submit-modal" onclick="$('.submitme_download_form').click()">{{ stringlang('Submit', 'Kirim', '보내다') }}</button></div>
            </div>

        </div>
      </div>
    </div>
</div>

@section('modal_js_partner')
@include('systemever/includes/modals/modal_form_js', ['pointer' => 'partner_form'])
@endsection
