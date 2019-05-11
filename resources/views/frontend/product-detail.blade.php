@extends('frontend.layout')

@section('more-style')
<style>
    img{
        max-width: 100%;
    }
    .readme{
        border-bottom: 1px solid #0A4B31;
        display: block;
        color: black;
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

<div class="bg-img" style="background-image: url('/images/bg1.png')">
<div class="container pt-5 pb-5">
    <div class="row">
        @for ($i = 0; $i < 6; $i++)
        <a class="col-sm-6 col-md-4 mb-3 text-center" href="#">
            <div style="background-color:white;color:black" class="p-2">
                <img src="https://via.placeholder.com/300x300" class="mb-1">
                <div>
                    ชาร์เลนเจอร์
                </div>
                <div class="color-main">
                    CHALLENGER
                </div>
            </div>
        </a>
        @endfor

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
            <a href="#" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>

@endsection

@section('more-script')
@endsection
