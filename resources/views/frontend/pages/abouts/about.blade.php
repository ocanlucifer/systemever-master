@extends('frontend/layouts/main')

@section('custom_css')

@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset('assets/img/banner-about.png') }}" alt="">
    <div class="caption-banner d-flex align-items-center">
        <div class="container">
            <h1>About</h1>
        </div>
    </div>
</section>
<section class="d-lg-block d-md-block d-sm-none d-none">
  @include('frontend/includes/breadcrumbs')
</section>
<section class="section-menu-about mt-lg-5 mt-md-5 mt-sm-4 mt-4 mb-lg-5 mb-md-5 mb-sm-4 mb-4">
    <div class="container">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul class="list-unstyled menu-about d-flex justify-content-center">
                <li><a class="{{ Request::segment(3) == 'indonesia-branch' ? 'active':'' }}" href="{{ route('frontend.pages.abouts.indonesia_branch') }}">Indonesia Branch </a></li>
                <li><a class="{{ Request::segment(3) == 'system-ever' ? 'active':'' }}" href="{{ route('frontend.pages.abouts.system_ever') }}">SystemEver</a></li>
                <li><a class="{{ Request::segment(3) == 'history' ? 'active':'' }}" href="{{ route('frontend.pages.abouts.history') }}">History</a></li>
            </ul>
        </div>
    </div>
</section>
@yield('content_about')
@endsection

@section('footer')
    @include('frontend/includes/footer')
@endsection

@section('custom_js')

<script>
  // Get a reference to the <path>
var path = document.querySelector('#line-path');

// Get length of path... ~577px in this demo
var pathLength = path.getTotalLength();
// Make very long dashes (the length of the path itself)
path.style.strokeDasharray = pathLength + ' ' + pathLength;

// Offset the dashes so the it appears hidden entirely
path.style.strokeDashoffset = pathLength;

// When the page scrolls...
window.addEventListener("scroll", function(e) {
 
 // What % down is it? 
 var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
   console.log((document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight))
 // Length to offset the dashes
 var drawLength = pathLength * scrollPercentage;
 
 // Draw in reverse
 path.style.strokeDashoffset = pathLength - drawLength;
  // ... at bottom of scrolling function

  // When complete, remove the dash array, otherwise shape isn't quite sharp
  if (scrollPercentage >= 0.99) {
    path.style.strokeDasharray = "none";
  } else {
    path.style.strokeDasharray = pathLength + ' ' + pathLength;
  }
});
 
 // Get the id of the <path> element and the length of <path>
// var triangle = document.querySelector('path');
// var length = triangle.getTotalLength();

// // The start position of the drawing
// triangle.style.strokeDasharray = length;

// // Hide the triangle by offsetting dash. Remove this line to show the triangle before scroll draw
// triangle.style.strokeDashoffset = length;

// // Find scroll percentage on scroll (using cross-browser properties), and offset dash same amount as percentage scrolled
// window.addEventListener("scroll", myFunction);

// function myFunction() {
// var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

//   var draw = length * scrollpercent;
  
//   // Reverse the drawing (when scrolling upwards)
//   triangle.style.strokeDashoffset = length - draw;
// }

// var path = document.querySelectorAll('path'), 
// 		percentScroll;

// $(path).each(function(){
//   this.style.strokeDasharray = this.getTotalLength();
//   this.style.strokeDashoffset = this.getTotalLength();
// });

// window.onscroll = function(){
//   percentScroll = window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
	
//   $(path).each(function(){
//     this.style.strokeDashoffset = Math.floor(this.getTotalLength() * (1 - percentScroll));
//   });
// }
</script>
@endsection