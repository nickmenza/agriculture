@extends('backend.layout')

@section('more-style')
    <style>
    </style>
@endsection

@section('content')
    <div class="section-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="h4"> {{$title}} </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <form method="GET" action="{{route($route_name.'.index')}}" class="">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="ค้นหา..." aria-label="" value="{{Input::get('search')}}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">ค้นหา</button>
                    </div>
                </div>
            </form>
            <a href="{{route($route_name.'.create')}}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus-square"></i>เพิ่ม</a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">รูปภาพ</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">รายละเอียด</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th class="text-center" scope="row">{{$item->id}}</th>
                        <th class="text-center" scope="row">
                            @if(Storage::disk('uploads')->exists($item->images))
                            <img src="{{Storage::disk('uploads')->url($item->images)}}" style="width:150px">
                            @endif
                        </th>
                        <td>
                            {{$item->product_name}}
                            @if($item->product_name_en)
                                ({{$item->product_name_en}})
                            @endif
                            <br>
                            ชื่อเดิม : {{$item->product_name_old}}
                        </td>
                        <td>{!!$item->detail!!}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="{{route($route_name.'.edit',$item->id)}}" class="btn btn-icon icon-left btn-primary mr-1"><i class="far fa-edit"></i></a>
                                <form method="POST" action="{{route($route_name.'.destroy',$item->id)}}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 text-center">
            {{$data->links()}}
        </div>
    </div>
@endsection

@section('more-script')
    <script>
    </script>
@endsection


