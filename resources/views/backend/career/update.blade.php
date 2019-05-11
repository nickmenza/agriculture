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
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ตำแหน่ง</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="career_name" value="{{$data->career_name}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">คำอธิบาย</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="detail" value="{{$data->detail}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">สถานที่</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="location" value="{{$data->location}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">คุณสมบัติ</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="summernote-simple" name="property">{!! $data->property !!}</textarea>
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


