<div class="row pt-4">
    <div class="col-1">
        <input type="checkbox" name="aggree" value="1" checked> &nbsp;&nbsp;
    </div>
    <div class="col-9 col-lg-10">
        @if (activelang() == "EN")
        <p class="aggrement m-0"></p> I have read and agree to the <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" class="legal-link">Terms & Conditions</a> and <a class="legal-link" href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}">Privacy Policy</a>
        @elseif (activelang() == "KOR")
        <p class="aggrement m-0"></p> 이용약관 및 <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" class="legal-link">개인정보처리방침을</a> 읽고 <a class="legal-link" href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}">동의합니다</a>
        @else
        <p class="aggrement m-0"></p> Kami telah membaca dan menyetujui <a href="{{ route('get.legal', ['slug' => 'terms-and-conditions']) }}" class="legal-link">Aturan & Kondisi</a> dan <a class="legal-link" href="{{ route('get.legal', ['slug' => 'privacy-policy']) }}">Aturan Privasi</a>
        @endif
    </div>
</div>
