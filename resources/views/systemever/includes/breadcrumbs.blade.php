<section class="py-4">
    <div class="container-content">
        <div class=" mt-lg-5 mt-0">
            <!-- <div class="col-lg-12 breadcrumbs">
                <ul class="list-unstyled mb-0 ">
                    @php 
                    $i = 0; 
                    $count = count($breadcrumbs) 
                    @endphp
                    @foreach ($breadcrumbs as $key => $value)
                    @php 
                        $i++
                        
                    @endphp
                        <li><a href="{{ url($value['link'])}}">{{ $value['label'] }}</a> <i class="fa fa-angle-right {{ $i != $count ? 'd-inline-block':'d-none' }}"></i></li>
                    @endforeach
                </ul>
            </div> -->
            <div class="bc">
                @php 
                    $i = 0; 
                    $count = count($breadcrumbs) 
                    @endphp
                    @foreach ($breadcrumbs as $key => $value)
                    @php 
                        $i++
                    @endphp
                        <a href="{{ url($value['link'])}}" class="{{ $i != $count ? '':'active' }}">{{ $value['label'] }}</a> {!! $i != $count ? '<img src="'.asset('assets/fl/bc.png').'" alt="">':'' !!}
                    @endforeach
            </div>

        </div>
    </div>
</section>