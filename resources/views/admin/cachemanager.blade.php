@extends('crudbooster::admin_template')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
          Cache Manager
    </div>

    <div class="panel-body">
        <form class="" method="POST" action="{{CRUDBooster::mainpath()}}/setting">
            @csrf

            @foreach($data as $k => $v)
            <div class="row pt-4">
                <div class="col-sm-6">
                    <h4>{{ $k }}</h4>
                </div>
                <div class="col-sm-6">
                    <button name="clear_page" value="{{ $k }}" class="btn btn-primary">Clear cache</button>
                </div>
            </div>
            @endforeach
        </form>
    </div>
</div>

@endsection