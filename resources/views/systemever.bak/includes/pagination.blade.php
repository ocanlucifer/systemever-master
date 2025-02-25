{{-- {{ dd($pagination) }} --}}
<div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul class="list-unstyled pagination">
            <li class="prev-arrow"><a href="{{$pagination['prev_page_url']}}"><img src="{{ asset('assets/img/arrow-right-paging.svg') }}" alt=""></a></li>
            {{-- <li class="prev-arrow"><a href="{{$pagination['first_page_url']}}"><img src="{{ asset('assets/img/arrow-right-paging.svg') }}" alt=""></a></li> --}}
            {{-- <li class="prev"><a href="{{$pagination['prev_page_url']}}">prev</a></li> --}}
            @for($i=1;$i<=$pagination['last_page'];$i++)
                <li class="page"><a href="?page={{$i}}" class="{{ $i == $pagination['current_page'] ? 'active' : '' }}">{{$i}}</a></li>
            @endfor
            {{-- <li class="next"><a href="{{$pagination['next_page_url']}}">next</a></li> --}}
            {{-- <li class="next-arrow"><a href="{{$pagination['last_page_url']}}"><img src="{{ asset('assets/img/arrow-right-paging.svg') }}" alt=""></a></li> --}}
            <li class="next-arrow"><a href="{{$pagination['next_page_url']}}"><img src="{{ asset('assets/img/arrow-right-paging.svg') }}" alt=""></a></li>
        </ul>
    </div>
</div>