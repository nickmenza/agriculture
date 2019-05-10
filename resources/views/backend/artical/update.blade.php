@extends('backend.layout')

@section('more-style')
    <style>
    </style>
@endsection

@section('content')
    <form class="card" method="POST" action="{{route($route_name.'.store')}}">
        @csrf
        {{-- <input type="hidden" name="_method" value="PATCH"> --}}
        <input type="hidden" name="id" value="">
        <div class="card-header">
          <h4>{{$title}}</h4>
        </div>
        <div class="card-body">
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">วันที่</label>
                <div class="col-sm-12 col-md-7">
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">หัวข้อ</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="article_name">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">รายละเอียด</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="summernote-simple" name="detail"></textarea>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary" type="submit">บันทึก</button>
                <button class="btn btn-danger" type="submit">ยกเลิก</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('more-script')
    <script>
    </script>
@endsection


