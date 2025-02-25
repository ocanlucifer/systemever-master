@php
if (!empty($top)) {
    $list = [$top->sec_1_top_article_en, $top->sec_2_top_article_en];
}
@endphp
@foreach($list as $v)
    <div class="content-article side-right mb-4">
        <img src="{{ asset_to_webp(uri($v->featured_image)) }}" alt="{{$v->title}}" onclick="window.location='{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}'">
        <div class="box-caption-article d-flex justify-content-center">
            <div class="caption-article">
                <div class="category-article"><a href="{{ route('get.pages.article.article.search') }}?cat={{post_tag($v->id)[0]}}">{{strtoupper(post_tag($v->id)[0])}}</a></div>
                <div class="desc-article"><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{$v->title}}</a></div>
                {{-- <div class="time-post-article">17m ago · 5 min read</div> --}}
            </div>
        </div>
    </div>
@endforeach