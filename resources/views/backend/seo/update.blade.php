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
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">เลือกประเภท</label>
                <div class="col-sm-12 col-md-7">
                        <select class="custom-select" name="type">
                            <option value="">กรุณาเลือก</option>
                            @foreach ($list_type as $key => $item)
                            <option value="{{$key}}" @if($data->type == $key)selected @endif>{{$item}}({{$key}})</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keyword</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
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


