<a href="{{ route('get.article.detail', slug($title . "-" . $id)) }}">
    <img src="{{ uri($featured_image) }}" class="w-100 s-rounded-top" alt="">
    <div class="title-article-item pt-3 px-3 pb-3 bg-white">
        <ul class="list-unstyled category-date-article d-flex mb-2">
            @if (!empty($tag))
            <li class="category">{{ucfirst($tag->meta_value)}}</li>
            <li><div class="dot">&centerdot;</div></li>
            @endif
            <li>{{ dateformatsimple($created_at) }}</li>
        </ul>
        <h4>{{$title}}</h4>
    </div>
</a>