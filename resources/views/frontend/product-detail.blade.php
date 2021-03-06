@extends('frontend.layout')

@section('more-style')
<style>
    img{
        max-width: 100%;
    }
    .pallex{
        color: white;
        min-height: 400px; 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .bg-img{
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'ผลิตภัณฑ์','text_en'=>'OUR PRODUCT','type'=>4])
    
@endcomponent

<div style="background-color: #F7F7F7;">
<div class="container pt-5 pb-5" style="">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item"><a href="{{url('product')}}" style="color: #0A4B31;">ผลิตภัณฑ์</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$data->product_name}}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <div style="background-color:white;color:black" class=" p-2">
                @if(Storage::disk('uploads')->exists($data->images))
                <img src="{{Storage::disk('uploads')->url($data->images)}}" class="mb-1 w-100">
                @else
                    <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <h4 class="color-main mt-2">{{$data->product_name}} ( {{$data->product_name_en}} )</h4>
            <h5 class="">ชื่อเดิม ​: {{$data->product_name_old}}</h5>
            <div class="form-group">
            </div>
            <div class="" style="line-height:2" data-id="{{$data->id}}">
                {!! $data->detail !!}
            </div>
        </div>
    </div>
</div>
</div>

<div class="container pt-5 pb-5">
    <h5 class="text-center color-main pb-3">ผลิตภัณฑ์แนะนำ</h5>
    <div class="row article1">
        @foreach ($products as $item)
        <a class="col-sm-6 col-md-3 mb-3 text-center" href="#" >
            <div style="background-color:white;color:black" class="p-2">
                @if(Storage::disk('uploads')->exists($item->images))
                    <img src="{{Storage::disk('uploads')->url(str_replace('product/', 'product/300/', $item->images))}}" class="mb-1 w-100">
                @else
                    <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
                @endif
                <div>
                    {{$item->product_name}}
                </div>
                <div class="color-main">
                    {{$item->product_name_en}}
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div class="pallex" style="background-image: url('/images/product-bottom.png');position: relative;">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="position: absolute;background: rgba(0, 0, 0, 0.4);">
        <div class="container text-center">
            <h4>
                ศูนย์กล้าปาล์มน้ำมันเรา
            </h4>
            <div class="mb-3">
                เกษตรกรผู้สนใจสามารถสั่งซื้อและเยี่ยมชมกระบวนการเพาะกล้าปาล์มน้ำมันได้แล้ววันนี้..ทุกสาขาทั่วไทย
            </div>
            <a href="{{url('location')}}" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>

@endsection

@section('more-script')
@endsection
