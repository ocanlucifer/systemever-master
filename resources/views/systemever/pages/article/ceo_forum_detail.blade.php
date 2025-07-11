@extends('systemever/layouts/main', ['article_seo_meta' => $article_seo_meta])

@section('custom_css')
<style>
    .hero-article-image {
        width: auto;
        max-height: 360px; /* cukup fleksibel */
        height: auto;
        aspect-ratio: 16 / 9; /* jaga proporsi */
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .inline-image {
        float: left;
        width: 200px;
        max-width: 40%;
        height: auto;
        margin-right: 20px;
        margin-bottom: 10px;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .image-meta-box {
        display: flex;
        justify-content: space-between;
        align-items: center; /* penting: sejajarkan vertikal */
        width: 100% !important;
        padding: 12px 16px;
        background-color: #f8f9fa;
        border-radius: 6px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        margin-bottom: 10px;
        gap: 16px;
    }

    .image-meta-box a.btn {
        padding: 4px 8px;
        font-size: 13px;
        background-color: #009944;
    }

    .relative {
        position: relative;
    }

    .article-meta {
        font-size: 14px;
        color: #777;
        margin-bottom: 0.5rem;
    }

    .article-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .desc-detail-article {
        font-size: 14px !important;
        line-height: 1.7 !important;
        color: #333;
        margin-top: 1rem;
        text-align: justify; /* Tambahan ini membuat teks rata kanan-kiri */
    }

    .desc-detail-article img:first-of-type {
        float: left;
        width: 200px;
        max-width: 40%;
        margin-right: 20px;
        margin-bottom: 10px;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .share-article {
        margin-top: 2rem;
    }

    .share-article li {
        margin-right: 10px;
    }

    .share-article li a img {
        width: 28px;
        transition: transform 0.2s ease;
    }

    .share-article li a:hover img {
        transform: scale(1.1);
    }

    .breadcrumbs a {
        color: #007BFF;
        text-decoration: none;
    }

    .breadcrumbs a:hover {
        text-decoration: underline;
    }

    .article-body-wrapper {
        max-width: 100%;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    .article-body-wrapper * {
        max-width: 100%;
        box-sizing: border-box;
    }
    @media (max-width: 576px) {
        .image-meta-box {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .image-meta-box a.btn {
            align-self: center;
        }
    }
</style>
@endsection

@section('content')
<section class="py-4 d-lg-block d-md-block d-sm-none d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 breadcrumbs mb-2">
                <ul class="list-unstyled mt-3 mb-0 d-flex gap-2 align-items-center">
                    <li><i class="fa fa-angle-left mr-1"></i></li>
                    <li><a href="javascript:history.back()">{{ stringlang('Back', 'Kembali') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="section-detail-article mb-5">
                <h1 class="article-title">{{ $data->title }}</h1>

                <div class="desc-detail-article with-floated-image">
                    {{-- Meta box diletakkan setelah gambar (tetap sebelum konten paragraf) --}}
                    {{-- <div class="image-meta-box">
                        <div><strong>{{ $data->slider_title }}</strong></div>
                        <div>{{ $data->presenter }}</div>
                        <div><strong>{{ stringlang('Date', 'Tanggal','일자') }}:</strong> {{ $data->post_date }}</div>
                        @if($data->video_link)
                            <div class="mt-1">
                                <a href="{{ uri($data->video_link) }}" target="_blank" class="btn btn-sm btn-outline-secondary text-white">
                                    {{ stringlang('Watch Full Video', 'Lihat Video Lengkap', '전체강연 보러가기') }}
                                </a>
                            </div>
                        @endif
                    </div> --}}
                    <div class="image-meta-box d-flex align-items-center w-100 position-relative">
                        <div class="flex-grow-1">
                            <div><strong>{{ $data->slider_title }}</strong></div>
                            <div>{{ $data->presenter }}</div>
                            <div><strong>{{ stringlang('Date', 'Tanggal','일자') }}:</strong> {{ $data->post_date }}</div>
                        </div>

                        @php
                            $isValidUrl = filter_var($data->video_link, FILTER_VALIDATE_URL);
                        @endphp

                        <div class="ms-3 position-relative" style="min-width: 180px;">
                            <a href="{{ $isValidUrl ? uri($data->video_link) : '#' }}"
                            target="_blank"
                            class="btn text-white px-4 py-2 {{ !$isValidUrl ? 'disabled' : '' }}"
                            style="
                                font-size: 16px;
                                font-weight: 600;
                                background-color: {{ $isValidUrl ? '#28a745' : '#6c757d' }};
                                pointer-events: {{ $isValidUrl ? 'auto' : 'none' }};
                                opacity: {{ $isValidUrl ? '1' : '0.7' }};
                            ">
                                {{ stringlang('Watch Full Video', 'Lihat Video Lengkap', '전체강연 보러가기') }}
                            </a>

                            @if(!$isValidUrl)
                                <span style="
                                    position: absolute;
                                    bottom: -18px;
                                    left: 35%;
                                    transform: translateX(-50%);
                                    color: red;
                                    font-size: 10px;
                                    white-space: nowrap;
                                ">
                                    {{ stringlang('*Video is not available.', '*Video tidak tersedia', '*영상이 제공되지 않습니다.') }}
                                </span>
                            @endif
                        </div>
                    </div>



                    {{-- Gambar di-float kiri --}}
                    <img src="{{ asset_to_webp(uri($data->image_url)) }}" alt="{{ $data->title }}" class="inline-image" />

                    {{-- Konten artikel --}}
                    <div class="article-body-wrapper">
                        {!! $data->body !!}
                    </div>
                    {{-- {!! $data->body !!} --}}
                    {{-- {!! urldecode(base64_decode($data->body)) !!} --}}
                    {{-- {{ $data->body = strip_tags($data->body, '<p><a><ul><li><br><b><i><strong><em><img><h1><h2><h3><h4><h5><h6><div><span>'); }} --}}
                        {{-- <div style="clear: both;"></div> --}}

                </div>


                <ul class="list-unstyled share-article d-flex align-items-center mt-4">
                    <li><strong>{{ stringlang('Share', 'Bagikan') }} :</strong></li>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('get.pages.article.ceo_forum_detail', ['id' => $data->id])) }}"
                            target="_blank" id="share-fb">
                            <img src="{{ asset('assets/img/fb-share.svg') }}" alt="Facebook Share">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('get.pages.article.ceo_forum_detail', ['id' => $data->id])) }}"
                            target="_blank" id="share-tw">
                            <img src="{{ asset('assets/img/tw-share.svg') }}" alt="Twitter Share">
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection
