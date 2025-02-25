<meta name="title" content="{{$article_seo_meta['title']}}">
<meta name="description" content="{{$article_seo_meta['description']}}">
<meta name="keywords" content="{{$article_seo_meta['keywords']}}">
<meta property="og:title" content="{{$article_seo_meta['title']}}">
<meta property="og:description" content="{{$article_seo_meta['description']}}">
<meta property="og:image" content="{{asset($article_seo_meta['image'])}}">
<meta property="og:url" content="{{$article_seo_meta['url']}}" />
@if (setting('fb:app_id'))
<meta property="fb:app_id" content="{{setting('fb:app_id')}}" />
@endif
@if (setting('fb:page_id'))
<meta property="fb:page_id" content="{{setting('fb:page_id')}}" />
@endif
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{$article_seo_meta['title']}}" />
<meta name="twitter:description" content="{{$article_seo_meta['description']}}" />
<meta name="twitter:image" content="{{asset($article_seo_meta['image'])}}" />
<meta name="twitter:image:src" content="{{asset($article_seo_meta['image'])}}" />
{!! !empty($article_seo_meta['script']) && $article_seo_meta['script'] != "-" ? $article_seo_meta['script'] : '' !!}