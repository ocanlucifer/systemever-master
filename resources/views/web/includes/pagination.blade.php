@php
$p = $pagination->toArray();
// dd($p);
@endphp

@if (!empty($p) && $p['last_page'] > 1)
<div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul class="list-unstyled pagination">
            @if (!empty($p['prev_page_url']))
            <li><a class="prev" href="{{$p['prev_page_url']}}"><i class="fa fa-angle-left"></i></a></li>
            @endif
            @for($i = 1; $i <= $p['last_page']; $i++)
            <li><a href="{{$p['path']}}?page={{$i}}" class="{{ $i == $p['current_page'] ? 'active' : '' }}">{{$i}}</a></li>
            @endfor
            @if (!empty($p['next_page_url']))
            <li><a class="next" href="{{$p['next_page_url']}}"><i class="fa fa-angle-right"></i></a></li>
            @endif
        </ul>
    </div>
</div>
@endif

{{-- {{  dd($pagination->toArray())  }} --}}