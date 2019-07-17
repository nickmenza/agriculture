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

<div class="bg-img" style="background-image: url('/images/bg-ourproduct.png')">
<div class="container pt-5 pb-5">
    <div class="row">
        @foreach ($products as $item)
        <a class="col-sm-6 col-md-4 mb-3 text-center" href="{{url('product/'.$item->id.'/'.Str::slug($item->product_name_en, '-'))}}">
            <div style="background-color:white;color:black" class="p-2">
                @if(Storage::disk('uploads')->exists($item->images))
                    <img src="{{Storage::disk('uploads')->url(str_replace('product/', 'product/', $item->images))}}" class="mb-1 w-100">
                @else
                    <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
                @endif
                <div style="font-size:20px">
                    {{$item->product_name}}
                </div>
                <div class="color-main mb-2" style="font-size:14px">
                    {{$item->product_name_en}}
                </div>
                <div class="mb-2">
                    <button class="btn btn-dark radius">ข้อมูลเพิ่มเติม</button>
                </div>
            </div>
        </a>
        @endforeach

    </div>
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
