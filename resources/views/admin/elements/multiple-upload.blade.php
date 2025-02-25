@php $id = md5($name) @endphp

<div class="form-group row" style="padding-top:5px;">
    <label class="control-label col-xs-2" style="padding-top:5px; text-align:right">{{$label}}<span class="text-danger">*</span></label>
    <div class="col-sm-9">     
        <div class="preview_{{$id}}_boxes">
            @foreach ($value as $k => $v)
            <img src="{{$v}}" class="preview_{{$id}}" style="width:100px; height:100px; object-fit:cover; border:solid 1px silver; border-radius:5px; margin-bottom:10px;">
            @endforeach
        </div>
        <div class="input_{{$id}}_boxes">
            @foreach ($value as $k => $v)
            <input type="text" class="form-control" name="{{$name}}[]" style="display:none" value={{$v}}>
            @endforeach
        </div>
        <input type="file" multiple class="form-control" id="{{$id}}_upload">
    </div>
</div>

<script>
    $("#{{$id}}_upload").change(function(){
        console.log("initial upload");
        console.log("Le Files" , $('#{{$id}}_upload')[0].files);
        var formData = new FormData();

        $.each($('#{{$id}}_upload')[0].files, function(k,v){
            formData.append('file['+k+']', v);
            console.log("le f", v);
        })
        // formData.append('file[]', $('#{{$id}}_upload')[0].files[0]);
    
        $.ajax({
            url : "{{ route('upload-helper-multiple') }}",
            type : 'POST',
            data : formData,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            success : function(data) {
                console.log("Upload Res : ", data);
                $(".preview_{{$id}}_boxes").html("");
                $(".input_{{$id}}_boxes").html("");
                $.each(data.media_url, function(k,v){
                    html = `<img src="`+v+`" class="preview_{{$id}}" style="width:100px; height:100px; object-fit:cover; border:solid 1px silver; border-radius:5px; margin-bottom:10px;">`;
                    $(".preview_{{$id}}_boxes").append(html);
                    
                    input = `<input type="text" class="form-control" name="{{$name}}[]" style="display:none" value=`+v+`>`
                    $(".input_{{$id}}_boxes").append(input);
                })
            }
        });
    });
    </script>