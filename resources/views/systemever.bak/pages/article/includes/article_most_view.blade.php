<section class="section-article">
    <div class="title-section-article mb-3">
        <h3>{{ stringlang('Most View', 'Sering Dilihat') }}</h3>
    </div>
    <div class="box-list-view-article">
        @foreach($popular as $v)
        <div class="list-view">
            <p><a href="{{ route('get.pages.article.article_detail', ['slug' => $v->slug]) }}">{{ $v->title }}</a></p>
            {{-- <small>17m ago</small> --}}
        </div>
        @endforeach
    </div>
</section>