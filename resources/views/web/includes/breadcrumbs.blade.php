<section class="mb-4 pt-lg-5 pt-md-5 pt-sm-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 breadcrumbs">
                <ul class="list-unstyled">
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