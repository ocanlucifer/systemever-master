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
<script>
function select_language(id){
    $('.lang').removeClass('active');
    $('#'+id).addClass('active');
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
</script>