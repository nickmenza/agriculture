@extends('backend.layout')

@section('more-style')
    <style>
    </style>
@endsection

@section('content')
    @if(isset($id))
        <form class="card" method="POST" action="{{route($route_name.'.update',$id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
    @else
        <form class="card" method="POST" action="{{route($route_name.'.store')}}" enctype="multipart/form-data">
    @endif
        @csrf
        {{-- <input type="hidden" name="_method" value="PATCH"> --}}
        <input type="hidden" name="id" value="">
        <div class="card-header">
          <h4>{{$title}}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ชื่อผลิตภัณฑ์</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="product_name" value="{{$data->product_name}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ชื่อผลิตภัณฑ์ (EN)</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="product_name_en" value="{{$data->product_name_en}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ชื่อผลิตภัณฑ์เดิม</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="product_name_old" value="{{$data->product_name_old}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">รายละเอียด</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="summernote-simple" name="detail">{!! $data->detail !!}</textarea>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">รูปภาพ</label>
                <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="images" data-show="blah" >
                        @if(Storage::disk('uploads')->exists($data->images))
                            <img id="blah" src="{{Storage::disk('uploads')->url($data->images)}}" style="width:150px">
                        @else
                            <img id="blah" style="width:150px">
                        @endif
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary" type="submit">บันทึก</button>
                <a class="btn btn-danger" href="{{route($route_name.'.index')}}">ยกเลิก</a>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('more-script')
    <script>
        
    </script>
@endsection


