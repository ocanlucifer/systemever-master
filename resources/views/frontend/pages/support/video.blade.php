@extends('frontend/layouts/main')

@section('custom_css')
<link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/portrait-woman-customer-service-worker.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1>{{ stringlang('How can we help<br/> you?', 'Apa yang bisa kami bantu') }}</h1>
            <p>Tutorial Video</p>
        </div>
    </div>
</section>
<div class="d-lg-block d-md-block d-sm-none d-none">
    @include('frontend/includes/breadcrumbs')
</div>
<section class="section-video">
    <div class="container">
        <div class="row mb-lg-5">
            <div class="col-lg-8 col-md-8 col-sm-8 col-8 my-lg-0 my-md-0 my-3">
                <div class="title-page-video ">Video</div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-4 col-4 my-lg-0 my-md-0 my-3 position-relative">
                <form action="" class="w-100 d-flex justify-content-end">
                    <div class="input-group search-video active d-lg-flex d-md-flex d-sm-none d-none">
                        <input type="text" class="form-control txt-search" placeholder="{{ stringlang('Search', 'Pencarian')}}" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn" type="submit"><img src="{{ asset('assets/img/icon-search.svg') }}" alt=""></button>
                        </div>
                    </div>
                    <div id="search-video-mobile" class="input-group search-video d-lg-none d-md-none d-sm-flex d-flex">
                        <input type="text" class="form-control txt-search" placeholder="{{ stringlang('Search', 'Pencarian')}}" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn" type="button" onclick="toggle_active()"><img src="{{ asset('assets/img/icon-search.svg') }}" alt=""></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-5 position-relative">
                <div class="owl-carousel owl-tabs-video owl-theme">
                    @foreach (['Accounting', 'Operating', 'Corporate', 'Master', 'Purchase', 'Sales'] as $k => $v)
                    <div class="item">
                        <a class="nav-link {{ $k == 0 ? 'active' : '' }}">{{$v}}</a>
                    </div>
                    @endforeach
                </div>
                <div class="tab-content">
                    @for ($tab = 1; $tab <= 6; $tab++)
                        <div class="tab-pane container {{ $tab == 1 ? 'active':'' }}" id="tab-menu-{{ $tab }}">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-12 px-lg-3 px-md-3 px-0">
                                    <div class="tab-content" id="v-pills-tabContent-{{ $tab }}">
                                        @for ($i = 1; $i <=4; $i++)
                                            <div class="tab-pane fade {{ $i == 1 ? 'show active':'' }} " id="v-video-{{ $i }}-{{ $tab }}" role="tabpanel" aria-labelledby="v-video-tab-{{ $i }}-{{ $tab }}">
                                                <div class="video-list mb-4">
                                                    <iframe class="youtube-video"
                                                    src="https://www.youtube.com/embed/m3o1KpM2g9w" 
                                                    title="YouTube video player" controls="0"
                                                    frameborder="0" 
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                    allowfullscreen></iframe>
                                                </div>
                                                <div class="d-lg-flex d-md-flex d-sm-block d-block">
                                                    <div class="desc-video d-lg-block d-md-block d-sm-none d-none">
                                                        <h4>Sales & Distribution</h4>
                                                        <p>Lorem Ipsum simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                                    </div>
                                                    <div class="share-video text-right d-lg-block d-md-block d-sm-none d-none">
                                                        <ul class="list-unstyled d-flex justify-content-start align-items-center">
                                                            <li><a href="#" class="sharer" id="share-fb" ><img src="{{ asset('assets/img/fb-share.svg') }}" alt=""></a></li>
                                                            <li><a href="#" class="sharer" id="share-tw"><img src="{{ asset('assets/img/tw-share.svg') }}" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="d-lg-none d-md-none d-sm-block d-block">
                                                        <button class="btn desc-video text-left px-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseDescVideo" aria-expanded="false" aria-controls="collapseDescVideo">
                                                            <h4>Sales & Distribution <i class="fa fa-angle-down"></i></h4>
                                                        </button>
                                                        <div class="collapse desc-video collapse-desc-vid" id="collapseDescVideo">
                                                            <div class="card card-body row">
                                                                <p>Lorem Ipsum simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                                                <div class="share-video text-right">
                                                                    <ul class="list-unstyled d-flex justify-content-start align-items-center">
                                                                        <li><a href="#" class="sharer" id="share-fb" ><img src="{{ asset('assets/img/fb-share.svg') }}" alt=""></a></li>
                                                                        <li><a href="#" class="sharer" id="share-tw"><img src="{{ asset('assets/img/tw-share.svg') }}" alt=""></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-12 px-lg-3 px-md-3 px-sm-0 px-0">
                                    <div class="nav nav-pills nav-list-video" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        @for ($i = 1; $i <=8; $i++)
                                            <a class="nav-link {{ $i == 1 ? 'active':'' }}" id="v-video-tab-{{ $i }}-{{ $tab }}" onclick="stopPlayer()" data-toggle="pill" href="#v-video-{{ $i }}-{{ $tab }}" role="tab" aria-controls="v-video-{{ $i }}-{{ $tab }}" aria-selected="true">
                                                <div class="playlist d-flex justify-content-start">
                                                    <div class="check">
                                                        @if ($i %  2 == 0)
                                                        <img src="{{ asset('assets/img/check.svg') }}" alt="">
                                                        @else 
                                                        <img src="{{ asset('assets/img/check-gray.svg') }}" alt="">
                                                        @endif
                                                    </div>
                                                    <div class="img-video-playlist position-relative">
                                                        <img src="{{ asset('assets/img/img-play-video.png') }}" alt="">
                                                        <div class="play-icon-list">
                                                            <img src="{{ asset('assets/img/playlist.svg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="caption-video-list">
                                                        <h5>SAP SD Training | SAP SD Sales and Distribution</h5>
                                                        <p>03.00</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')
<script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>
<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60b6db005769090011550c2c&product=video-share-buttons' async='async'></script>
<script>
    function toggle_active(){
        $('#search-video-mobile').toggleClass('active');
    }
$('.owl-tabs-video').owlCarousel({
    stagePadding: 20,
    loop:false,
    margin:5,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:2,
            nav:false
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})
var htmlPlayer = document.getElementsByTagName('video');

function pausePlayer() {
  for(var i = 0; i < htmlPlayer.length; i++){
    htmlPlayer[i].pause();
    
  }
}

function stopPlayer(){
// console.log('cek')
  $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
}

$('.btn-share').on('click', function(e){
	$(".float-circle").removeClass("no-animation");
	$(".float-circle").toggleClass("open");
});
$('.share-alt').on('click', function(e){
	$(".branch").removeClass("no-animation");
	$('.branch').toggleClass("open");
});

document.addEventListener("DOMContentLoaded", function(event) { 

    // Uses sharer.js 
    //  https://ellisonleao.github.io/sharer.js/#twitter  
    var url = window.location.href;
    var title = document.title;
    var subject = "Read this good article";
    var via = "yourTwitterUsername";
    //console.log( url );
    //console.log( title );

    //facebook
    // $('#share-wa').attr('data-url', url).attr('data-title', title).attr('data-sharer', 'whatsapp');
    //facebook
    $('#share-fb').attr('data-url', url).attr('data-sharer', 'facebook');
    //twitter
    $('#share-tw').attr('data-url', url).attr('data-title', title).attr('data-via', via).attr('data-sharer', 'twitter');
    //linkedin
    // $('#share-li').attr('data-url', url).attr('data-sharer', 'linkedin');
    // google plus
    // $('#share-gp').attr('data-url', url).attr('data-title', title).attr('data-sharer', 'googleplus');
    // email
    //   $('#share-em').attr('data-url', url).attr('data-title', title).attr('data-subject', subject).attr('data-sharer', 'email');

    //Prevent basic click behavior
    $( ".sharer button" ).click(function() {
    event.preventDefault();
    });
    
    
    // only show whatsapp on mobile devices  
    var isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
        isMobile = true;
    }

    if ( isMobile == true ) {
    $("#share-wa").hide();
    }
});
const button = document.getElementById('slide');

$('.arrow-left').on('click', function(e){
    document.getElementById('container-tab').scrollLeft -= 20;
});
$('.arrow-right').on('click', function(e){
  document.getElementById('container-tab').scrollLeft += 20;
});
window.onload = function(){
    Draggable.create("#content-tab",{
    type:"scrollLeft"
  });
};
</script>
@endsection