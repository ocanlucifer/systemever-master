<div x-data="{popup:false}">
    <div class="notice-sticky">
        <div class="notice-sticky-wrap">
            <a href="javascript:void(0)" @click="popup=!popup">
                <img src="{{ asset('assets/fl/hub.png') }}" alt="">
                <span> {{ stringlang('Contact Us', 'Hubungi Kami', '문의하기') }}</span>
            </a>
        </div>
    </div>

    <div class="sitky-popup" x-show="popup" x-cloak>
        <div class="backdr" @click="popup=false"></div>
        <div class="pbody">
            <div class="pclose"  @click="popup=false">
                <img src="{{asset('assets/fl/close.png')}}" alt="">
            </div>
            <div class="pitem"><img src="{{asset('assets/fl/pop-3.png')}}" alt=""><span>{{ stringlang('Send your message via Whatsapp', 'Kirim pesan Anda melalui Whatsapp', 'Whatsapp으로 메시지를 보내세요') }} </span><a href="https://api.whatsapp.com/send/?phone=6281119971017&text=Hello%2C%20I%20am%20interested%20in%20using%20System%20Ever%20Indonesia.%20I%20would%20like%20to%20see%20the%20feature%20details%2C%20benefits%2C%20and%20the%20best%20pricing%20available.%20Could%20you%20assist%20me%3F&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer">Whatsapp</a></div>
            <!-- <div class="pitem"><img src="{{asset('assets/fl/pop-3.png')}}" alt=""></span><a href="{{ route('get.contact') }}">{{ stringlang('Register', 'Daftar', '등록하다') }}</a></div> -->
            <div class="pitem"><img src="{{asset('assets/fl/pop-2.png')}}" alt=""><span> {{ stringlang('Send your message via Email', 'Kirim pesan Anda melalui Email', '이메일을 통해 메시지 보내기') }}</span><a href="mailto://info@systemever.com">{{ stringlang('Email', 'Email', '이메일') }}</a></div>
            <div class="pitem"><img src="{{asset('assets/fl/pop-4.png')}}" alt=""><span> {{ stringlang('Contact Us', 'Hubungi Kami', '문의하기') }}<br>
                    +62 21-5296-2129</span><a href="tel://02152962129">{{ stringlang('Call', 'Telepon', '전화') }}</a></div>
        </div>
    </div>
</div>
