<section class="py-4">
    <div class="container-content">
        <div class="row">
            <div class="col-lg-12 breadcrumbs">
                <ul class="list-unstyled mb-0">
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
            </div>
        </div>
    </div>
</section>