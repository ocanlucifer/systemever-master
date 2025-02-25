<div class="modal modal-form fade" id="modal-request-demo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered" role="document"> --}}
    <div class="modal-dialog modal-dialog modal-dialog-top m-0 m-md-auto" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0 pb-0">
          <div class="modal-title pt-4 mt-lg-2 mt-md-2 mt-0 pl-lg-4 pl-md-4 pl-0 ml-2">
              <h5>Take a coffee break with SystemEver</h5>
              <h3>Request a Demo</h3>
          </div>
          <button type="button" class="close btn-close-modal" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('assets/img/close-modal.svg') }}" alt="">
          </button>
        </div>
        <form action="">
            <div class="modal-body pb-0 px-lg-5 px-md-5 px-4">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-center justify-content-start mb-lg-0 mb-md-0 mb-3">
                            <div class="label-field">{{ stringlang('Name', 'Nama') }}</div>
                            <input type="text" name="nama" class="form-control txt-form" placeholder="{{ stringlang('Insert your name', 'Masukkan nama anda') }}" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-center justify-content-start">
                            <div class="label-field">{{ stringlang('Title', 'Jabatan') }}</div>
                            <input type="text" name="title" class="form-control txt-form" placeholder="{{ stringlang('Insert your title', 'Masukkan jabatan anda') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-center justify-content-start mb-lg-0 mb-md-0 mb-3">
                            <div class="label-field">{{ stringlang('Phone', 'Telepon') }}</div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="text" minlength="5" maxlength="13" class="form-control txt-form" placeholder="{{ stringlang('Phone Number', 'Nomor Telepon') }}" aria-label="{{ stringlang('Phone Number', 'Nomor Telepon') }}" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-center justify-content-start">
                            <div class="label-field">Email</div>
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control txt-form" placeholder="{{ stringlang('Insert your email', 'Masukkan email anda') }}" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-center justify-content-start mb-lg-0 mb-md-0 mb-3">
                            <div class="label-field">{{ stringlang('Company','Perusahaan') }}</div>
                            <input type="text" name="company" class="form-control txt-form" placeholder="{{ stringlang('Insert your Company', 'Masukkan perusahaan anda') }}" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-lg-center align-items-md-center align-items-start justify-content-start">
                            <div class="label-field">{{ stringlang('Experience in ERP?', 'Memiliki Pengalaman di ERP?') }}</div>
                            <div class="d-flex box-radio-erp justify-content-start align-items-center">
                                <label class="container-check mb-0 pl-4 mr-4">
                                    <input type="radio" name="radio-erp" value="yes" id="">
                                    <span class="checkmark-circle"></span>
                                    <div class="caption-check">{{ stringlang('Yes', 'Iya') }}</div>
                                </label>
                                <label class="container-check mb-0 pl-4">
                                    <input type="radio" name="radio-erp" value="yes" id="">
                                    <span class="checkmark-circle"></span>
                                    <div class="caption-check">{{ stringlang('No', 'Tidak') }}</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-lg-block d-md-block d-sm-flex d-flex align-items-center justify-content-start">
                            <div class="label-field">{{ stringlang('Message','Pesan') }}</div>
                            <textarea name="message" placeholder="{{ stringlang('Type your message', 'Tulis pesan anda') }}" class="form-control txt-area no-resize" id="" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0 d-block mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 col-md-8 col-12"><button type="button" class="btn btn-white-orange w-100 btn-submit-modal">{{ stringlang('Submit', 'Kirim') }}</button></div>
                </div>
            </div>
        </form>
      </div>
    </div>
</div>