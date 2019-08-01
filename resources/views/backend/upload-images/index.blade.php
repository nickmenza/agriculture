@extends('backend.layout')

@section('more-style')
    <style>
        .select2-container{
            width: 100% !important;
        }
        .dz-image img{
            width: 100%;
        }
        .dz-image{
            border: 1px solid #ededed;
        }
    </style>
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css') }}
@endsection

@section('content')
    <div class="section-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="h4"> {{$title}} </div>
        </div>
        {{-- <div class="d-flex justify-content-between align-items-center mb-2">
            <form method="GET" action="{{route($route_name.'.index')}}" class="">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="ค้นหา..." aria-label="" value="{{Input::get('search')}}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">ค้นหา</button>
                    </div>
                </div>
            </form>
        </div> --}}
        
        <form action="{{url()->full()}}" id="dropzone">
            @csrf 
            <h4>Drop File Here</h4>
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
    <div class="row mt-2">
        <div class="col-12 text-center">
            {{$data->links()}}
        </div>
    </div>
@endsection

@section('more-script')
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js') }}

<script>
    var url ="{{url('/')}}";
    // console.log($("input[name='_token']").val())
    $(function(){
        var myDropzone = new Dropzone("#dropzone",{
            init: function(){
                @foreach ($data as $item)
                    var mockFile = { name: "", size: 12345, type: 'image/jpeg', url: "{{$item['value']}}",id : "{{$item['id']}}" }; 
                    this.options.addedfile.call(this, mockFile);
                    this.options.thumbnail.call(this, mockFile, "{{Storage::disk('uploads')->url($item['path_img'])}}");
                    mockFile.previewElement.classList.add('dz-success');
                    mockFile.previewElement.classList.add('dz-complete');
                    mockFile.previewElement.onclick = function(e,url_t) {
                        window.open('/uploads/'+"{{$item['path_img']}}")
                    }
                @endforeach
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            removedfile: function(file) {
                console.log(file,'removedfile')
                $.ajax({
                    type: 'POST',
                    url: '{{url()->full()}}'+'/'+file.id,
                    data: {
                        '_token' : $("input[name='_token']").val(),
                        '_method' : 'delete',
                    },
                    success: function(data){
                        // console.log('success: ' + data);
                        if(data == 200){
                            file.previewElement.remove();
                        }
                    }
                });
            },
            success: function(file,serverFileName) {
                console.log('complete',file,serverFileName)
                file.url = serverFileName.path_img
                file.id = serverFileName.id
                file.previewElement.onclick = function() {
                    window.open('/uploads/'+file.url)
                }
            }
        });
        $('#dropzone').addClass('dropzone')
        
	})
</script>
@endsection


