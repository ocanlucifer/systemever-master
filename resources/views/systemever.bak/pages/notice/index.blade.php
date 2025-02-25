@extends('systemever/layouts/main', [
    'spesifice_page_seo' => []
])

@section('custom_css')
<style>
    @media (max-width: 480px){
        .section-banner-full .caption-banner {
            top: 0px !important;
        }
        .pt-5{
            padding-top: 0px !important; 
        }
    }
</style>
@endsection
@section('content')
<section class="section-banner-full mb-lg-3 position-relative">
    <img src="{{ asset_to_webp(asset('assets/img/banner-notice.jpg')) }}" alt="">
    <div class="caption-banner d-flex align-items-center pt-5">
        <div class="container">
            <h1 style="text-align: center">{{ stringlang('Notice', 'Notice') }}</h1>
        </div>
    </div>
</section>
@include('systemever/includes/breadcrumbs')
<section class="section-home position-relative over-flow-hide section-notice mt-3 mb-4">
    <div class="container-content">
        <div class="notice-head">
            <form action="" id="form-search">
                <div class="notice-action">
                    <div class="na-group">
                        <input class="na-input" type="text" value="{{ app('request')->input('search') ? app('request')->input('search') : '' }}" name="" id="input-search">
                    </div>
                    <button class="na-submit">Search</button>
                </div>
            </form>
        </div>
        <div class="notice-main">
            <div class="nm-count">
                <span>Total {{$data->total()}}</span>
                <div class="na-group">
                    <input type="text" name="cat" id="value-select-notice" hidden>
                    <div class="na-select">
                        <div class="na-select-box" id="select-notice">
                            <span id="na-name" style="text-transform: capitalize">{{ app('request')->input('order') ? app('request')->input('order') : 'Latest' }}</span> <span class="na-select-icon" id="na-icon"></span>
                        </div>
                        <div class="na-select-list d-none" id="select-list-notice">
                            <div class="na-select-value" data-id="1" onclick="window.location.href = '{{ request()->fullUrlWithQuery(['order' => 'latest']) }}'" data-name="latest">
                                Latest
                            </div>
                            <div class="na-select-value" data-id="1" onclick="window.location.href = '{{ request()->fullUrlWithQuery(['order' => 'newest']) }}'" data-name="newest">
                                Newest
                            </div>
                            <div class="na-select-value" data-id="1" onclick="window.location.href = '{{ request()->fullUrlWithQuery(['order' => 'viewed']) }}'" data-name="viewed">
                                Viewed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nm-contain">
                <table class="nm-table">
                    <thead>
                        <tr>
                            <th>
                                Number
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Star Date
                            </th>
                            <th>
                                End Date
                            </th>
                            {{-- <th>
                                Votes
                            </th> --}}
                            <th>
                                Views
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr class="nm-row" onclick="window.location.href = '{{route('get.pages.notice.detail', ['slug' => $item->slug])}}'">
                                <td class="nm-s1">{{ (($data->currentPage()-1)*$data->perPage())+($key+1) }}</td>
                                <td class="nm-s2">{{$item->title}}</td>
                                <td class="nm-s1">{{$item->author}}</td>
                                <td class="nm-s1">{{$item->date_start}}</td>
                                <td class="nm-s1">{{$item->date_end}}</td>
                                {{-- <td class="nm-s1">0</td> --}}
                                <td class="nm-s1">{{ $item->views !== null ? $item->views : 0 }}</td>
                            </tr>
                        @endforeach
                        @if (count($data) == 0)
                            <tr class="nm-row">
                                <td class="nm-s1" colspan="6">Notice Not Found</td>
                            </tr>
                        @endif
                        {{-- <tr class="nm-row" data-title="공간의 경계를 허물고, 시간의 경계를 허물고" data-author="Ksystem" data-date="2021.10.2 15.44" data-views="152" data-image="{{asset('assets/img/banner-about.png')}}">
                            <td class="nm-s1">Notice</td>
                            <td class="nm-s2">공간의 경계를 허물고, 시간의 경계를 허물고, 디바이스의 경계를 허물어 가는 클라우드 세상</td>
                            <td class="nm-s1">Ksystem</td>
                            <td class="nm-s1">2021.2.10</td>
                            <td class="nm-s1">0</td>
                            <td class="nm-s1">161</td>
                        </tr> --}}
                    </tbody>
                </table>
                <div class="nm-pagination">
                    <div class="nmp-wrap">
                        @if ($data->onFirstPage())
                        @else
                            <a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}" class="nmp-first">
                            </a>
                            <a href="{{ request()->fullUrlWithQuery(['page' => $data->currentPage()-1]) }}" class="nmp-prev">
                                Prev
                            </a>
                        @endif
                        @for ($i = 1; $i <= $data->lastPage(); $i++)
                            <?php
                                $half_total_links = floor(6 / 2);
                                $from = $data->currentPage() - $half_total_links;
                                $to = $data->currentPage() + $half_total_links;
                                if ($data->currentPage() < $half_total_links) {
                                $to += $half_total_links - $data->currentPage();
                                }
                                if ($data->lastPage() - $data->currentPage() < $half_total_links) {
                                    $from -= $half_total_links - ($data->lastPage() - $data->currentPage()) - 1;
                                }
                            ?>
                            @if ($from < $i && $i < $to)
                                <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" class="nmp-link {{ ($data->currentPage() == $i) ? 'nmp-active' : '' }}">
                                    {{ $i }}
                                </a>
                            @endif
                        @endfor
                        @if ($data->hasMorePages())
                            <a href="{{ request()->fullUrlWithQuery(['page' => $data->currentPage()+1]) }}" class="nmp-next">
                                Next
                            </a>
                            <a href="{{ request()->fullUrlWithQuery(['page' => $data->lastPage()]) }}" class="nmp-last">
                            </a>
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- @include('systemever.includes.modals.modal_notice') --}}
@endsection

@section('footer')
    @include('systemever/includes/footer')
@endsection

@section('custom_js')
    <script>
        $("#form-search").submit(function(event){
            let val = $("#input-search").val();
            // if(val !== ""){
                let url = "{{ request()->fullUrlWithQuery([]) }}";
                const parseResult = new DOMParser().parseFromString(url, "text/html");
                const parsedUrl = parseResult.documentElement.textContent;

                var newUrl = new URL(parsedUrl);
                var params = new URLSearchParams(newUrl.search);
                params.delete('search');
                params.set('search', val);
                params.toString();
                let go = decodeURIComponent(params);
                let toUrl = "{{route('get.pages.notice')}}"+"?"+params;
                
                window.location.href = toUrl;
            // }
            event.preventDefault();
        });
    </script>
@endsection