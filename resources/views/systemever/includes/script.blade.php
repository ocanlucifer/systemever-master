<script src="https://code.jquery.com/jquery-3.4.1.slim.js"  crossorigin="anonymous"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/plugins/TouchSwipe/jquery.touchSwipe.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="{{ asset('assets/js/newcode.js') }}?202210051337"></script>
<script>
function select_language(id){
    $('.lang').removeClass('active');
    $('#'+id).addClass('active');
    console.log("trigger bahasa", id);
    $.get("{{ url('lang') }}/" + id, {}, function(data){
        location.reload();
    });
}
$('.hamburger').click(function(){
    $(this).toggleClass("is-active");
    $('.sidebar').toggleClass("is-active");
    $('body').toggleClass("modal-open");
    $('.backdrop').toggleClass("is-active");
})
$('.close-sidebar').click(function(){
    $('.hamburger').toggleClass("is-active");
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

$(function() {
    $('img').Lazy();
});
// function imgControl(id){
//     $('.img-menu-drop').find('img').css({'display':'block'});
//     $('#menu-img-'+id).find('img').css({'display':'none'});
// }
</script>