@for ($list = 1; $list <= 2; $list++)
    <div class="content-article side-right mb-4">
        <img src="{{ asset('assets/img/img-article.png') }}" alt="">
        <div class="box-caption-article d-flex justify-content-center">
            <div class="caption-article">
                <div class="category-article"><a href="{{ url('frontend/business-insight/article/category') }}">TECHNOLOGY</a></div>
                <div class="desc-article"><a href="{{ url('frontend/business-insight/article/detail') }}">How predictive analytics transforms the way marketers work</a></div>
                <div class="time-post-article">17m ago · 5 min read</div>
            </div>
        </div>
    </div>
@endfor