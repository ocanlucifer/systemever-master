<div class="modal modal-product fade modal-right"" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-large modal-dialog-centered" role="document">
      <div class="modal-content" >
        <div class="modal-body" style="background-image: url('{{ asset("assets/img/bg-modal.svg") }}')">
          <button type="button" style=" background-image: url('{{ asset("assets/img/bg-close-modal.svg") }}" class="close btn-close-modal" data-dismiss="modal" aria-label="Close">
            {{-- <span aria-hidden="true">&times;</span> --}}
            <img src="{{ asset('assets/img/cancel.svg') }}" alt="">
          </button>
          <div class="section-desc-modal text-center pt-5 px-lg-5 px-md-5 px-sm-3 px-3">
            <h4>BAKPIA KUKUS</h4>
            <h3>Original Cokelat</h3>
            <p>Menikmati Bakpia Kukus Tugu Jogja belum lengkap kalau belum coba varian Original Cokelat. Tekstur bakpia yang lembut ditambah dengan pasta cokelat di bagian dalam.</p>
            <img class="img-product" src="{{ asset('assets/img/bakpia_1.svg') }}" alt="">
            <div class="row d-flex justify-content-center mb-3">
              <div class="col-lg-9 box-price-varian py-3">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 price-modal  d-flex align-items-center justify-content-lg-start justify-content-md-center pl-lg-4 pl-md-4 pl-3">
                    Rp 35,000.00
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 varian text-left pl-5 d-flex align-items-center">
                      <div>  
                        <div class="title-varian">Varian</div>
                        <p>Cokelat</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-lg-9">
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <div class="find-by text-center">
                      Dapat ditemukan di
                    </div>
                  </div>
                </div>
                <div class="row d-flex justify-content-center row-min-7 mb-3">
                  <div class="col-lg-5 col-md-5 col-sm-5 col-6 padding-min-7 mb-3">
                    <a href="" class="link-marketplace rounded">
                      <img src="{{ asset('assets/img/tokopedia.svg') }}" alt="">
                    </a>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 col-6 padding-min-7 mb-3">
                    <a href="" class="link-marketplace rounded">
                      <img src="{{ asset('assets/img/shopee.svg') }}" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>