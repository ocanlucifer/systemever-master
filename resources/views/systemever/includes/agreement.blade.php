<div class="row pt-4">
    <div class="col-1">
        <input type="checkbox" name="aggree" value="1" checked> &nbsp;&nbsp;
    </div>
    <div class="col-9 col-lg-10">
        @if (activelang() == "EN")
        <p class="aggrement m-0"></p> I have read and agree to the <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" class="legal-link">Terms & Conditions</a> and <a class="legal-link" href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}">Privacy Policy</a>
        @else 
        <p class="aggrement m-0"></p> Kami telah membaca dan menyetujui <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" class="legal-link">Aturan & Kondisi</a> dan <a class="legal-link" href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}">Aturan Privasi</a>
        @endif
    </div>
</div>