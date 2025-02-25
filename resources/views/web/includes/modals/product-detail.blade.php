<div class="modal modal-product fade modal-right" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-large modal-dialog-centered" role="document">
    <div class="modal-content" >
      <div class="modal-body" style="background-image: url('{{ asset("assets/img/bg-modal.svg") }}')">
        <button type="button" style=" background-image: url('{{ asset("assets/img/bg-close-modal.svg") }}" class="close btn-close-modal" data-dismiss="modal" aria-label="Close">
          {{-- <span aria-hidden="true">&times;</span> --}}
          <img src="{{ asset('assets/img/cancel.svg') }}" alt="">
        </button>
        <div class="section-desc-modal text-center pt-5 px-5">
          <h4 class="modal-type"></h4>
          <h3 class="modal-title"></h3>
          <p class="modal-desc"></p>
          <div class="product-bg mb-4">
            <img class="img-product modal-product">
          </div>
          <div class="row d-flex justify-content-center mb-3">
            <div class="col-lg-9 box-price-varian py-3">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 price-modal  d-flex align-items-center justify-content-lg-start justify-content-md-center pl-lg-4 pl-md-4 pl-3 modal-price">
                  
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 varian text-left pl-2 d-flex align-items-center">
                    <div class="w-100">  
                      <div class="title-varian text-center">
                        @if (activelang() == "ID")
                        Varian
                        @else 
                        Variant
                        @endif
                      </div>
                      <p class="modal-varian text-center"></p>
                    </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-lg-9 box-price-varian py-3">
              <div class="row">
                <div class="col-lg-6 price-modal text-left d-flex align-items-center pl-4 modal-price"></div>
                <div class="col-lg-6 varian text-left pl-5 d-flex align-items-center">
                    <div>  
                      <div class="title-varian">Varian</div>
                      <p class="modal-varian"></p>
                    </div>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-12 p-0">
              <div class="row mb-3">
                <div class="col-lg-12">
                  <div class="find-by text-center">
                    @if (activelang() == "ID")
                    <h1 class="child-title ct-1" style="font-size: 17px;">Dapat ditemukan di</h1>
                    @else 
                    <h1 class="child-title ct-1" style="font-size: 17px;">Find here</h1>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row d-flex justify-content-center row-min-7 mb-3">
                <div class="col-6 col-lg-5 padding-min-7 mb-3">
                  <a href="" class="link-marketplace rounded modal-tokopedia" target="_blank">
                    <img src="{{ asset('assets/img/tokopedia.svg') }}" alt="">
                  </a>
                </div>
                <div class="col-6 col-lg-5 padding-min-7 mb-3">
                  <a href="" class="link-marketplace rounded modal-shopee" target="_blank">
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