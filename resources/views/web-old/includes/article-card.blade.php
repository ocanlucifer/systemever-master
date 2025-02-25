<div class="item mb-5 mt-5">
    <a href="{{ route('get.article.detail', slug($title . "-" . $id)) }}">
        <img src="{{ uri($featured_image) }}" class="w-100" alt="">
        <div class="title-article-item pt-3 px-3 pb-3">
            <ul class="list-unstyled category-date-article d-flex mb-2">
                @if (!empty($tag))
                <li class="category">{{ucfirst($tag->meta_value)}}</li>
                <li><div class="dot">&centerdot;</div></li>
                @endif
                <li>{{ dateformat($created_at) }}</li>
            </ul>
            <h4>{{$title}}</h4>
        </div>
    </a>
</div>