<script src="http://code.jquery.com/jquery-3.4.1.slim.js"  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{ asset('assets/plugins/bootstrap4/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/plugins/owl/owl.carousel.min.js') }}"></script>
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineMax.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/jquery.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/plugins/TouchSwipe/jquery.touchSwipe.js') }}"></script>
@php 
$js_link_list = [
    "http://code.jquery.com/jquery-3.4.1.slim.js",
    "https://code.jquery.com/jquery-3.2.1.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js",
    asset("assets/plugins/bootstrap4/js/bootstrap.js"),
    asset("asset('assets/plugins/owl/owl.carousel.min.js"),
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/jquery.gsap.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js",
    "http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js",
    "http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js",
    "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js",
    asset("assets/plugins/TouchSwipe/jquery.touchSwipe.js"),
];
@endphp

<script>//<![CDATA[
function loadDeferScript(o){var d=document.createElement("script");d.src=o,document.body.appendChild(d)}function downloadJSAtOnload(){
    @foreach($js_link_list as $v)
    loadDeferScript("{{$v}}"),
    @endforeach
}window.addEventListener?window.addEventListener("load",downloadJSAtOnload,!1):window.attachEvent?window.attachEvent("onload",downloadJSAtOnload):window.onload=downloadJSAtOnload;
//]]>
</script>

<script>
function select_language(id){
    $('.lang').removeClass('active');
    $('#'+id).addClass('active');
    console.log("id : ", id);
    $.get("{{ url('lang') }}/" + id, function(data){        
        console.log("data : ", data);
        location.reload();
    });
}
$('.hamburger').click(function(){
    $(this).toggleClass("is-active");
    $('.sidebar').toggleClass("is-active");
    $('body').toggleClass("modal-open");
    $('.backdrop').toggleClass("is-active");
})
function toggle_cart(){
    $('.box-cart-wa').toggleClass('w-auto');
    $('.arrow').toggleClass('rotate');
}
$(document).ready(function() {
    $(window).on('scroll', function(){
        $('.dropdown-language').removeClass('show');
        $('.dropdown-menu-language').removeClass('show');
    });
});
</script>