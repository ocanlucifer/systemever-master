<div class="modal modal-form fade" id="modal-download-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0 pb-0">
          <div class="modal-title pt-4 mt-2 pl-4 ml-2">
                <h5>{{ stringlang("Download Brochure", "Unduh Brosur") }}</h5>
                <h3>{!! stringlang('Upgrade Your Business with <br> SystemEver & Get Exclusive <br> Benefit!', 'Tingkatkan Bisnismu dengan<br> SystemEver & Dapatkan<br>Benefitnya') !!}</h3>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/img/close-modal.svg') }}" alt="">
          </button>
        </div>
        <div class="modal-body pb-0 px-5">
          <form action="{{ route('post.form.submit') }}" method="post" id="download_form">
              <div class="form-group">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="label-field">{{ stringlang('Name', 'Nama') }}</div>
                          <input type="text" name="nama" class="form-control txt-form" placeholder="{{ stringlang('Insert your name', 'Masukkan nama anda') }}" required>
                      </div>
                      <div class="col-lg-6">
                        <div class="label-field">Email</div>
                        <input type="text" name="email" class="form-control txt-form" placeholder="{{ stringlang('Insert your email', 'Masukkan email anda') }}" required>
                        <input type="hidden" name="type" value="download">
                        <input type="hidden" name="lang" id="lang" value="">
                        <input type="hidden" name="from" value="{{ \URL::full() }}">
                        @csrf
                        <button type="submit" class="submitme_download_form" style="display:none"></button>
                      </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-12">
                      <label class="">Brochure Language </label>
                    </div>
                    @if (!empty($lang_option))
                    @foreach ($lang_option as $v)
                    <div class="col-9 col-md-4 mt-2 mt-md-0">
                      <div class="langselect langselect-{{$v->key}} p-3 border"  data-key="{{$v->key}}">
                        <i class="fa fa-circle i-inactive"></i> <span class="lang-span">{{$langlist[$v->key]}}</span>
                      </div>
                    </div>
                    @endforeach
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="mt-3">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_CLIENT_KEY') }}"></div>
                      </div>
                    </div>
                  </div>
                  @include('systemever/includes/agreement')
              </div>
          </form>
          {{-- <input type="checkbox"> I agree --}}
        </div>
        <div class="modal-footer border-top-0 d-block mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8"><button type="button" class="btn btn-white-orange w-100 btn-submit-modal" onclick="$('.submitme_download_form').click()">{{ stringlang('Submit', 'Kirim') }}</button></div>
            </div>
          
        </div>
      </div>
    </div>
</div>

@section('modal_js_download')
@include('systemever/includes/modals/modal_form_js', ['pointer' => 'download_form'])
@endsection