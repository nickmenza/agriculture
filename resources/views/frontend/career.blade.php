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
    .accordion-header{
        padding: 5px 10px;
    }
    .accordion-header:hover{
        background-color: #0A4B31;
        color: white;
    }
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'ร่วมงานกับเรา','text_en'=>'CAREER','type'=>8])
    
@endcomponent


<div class="container pt-5 pb-5">
    <div class="row" id="accordion">
        <div class="col-5">
            <h5 class="color-main">ตำแหน่งที่เปิดรับ</h5>
            <hr class="mt-1 mb-1">
            @foreach ($data as $key => $item)
                <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{$key}}" aria-expanded="@if($key==0){{"true"}}@else{{"false"}}@endif">
                    {{$item['career_name']}}
                </div>
            @endforeach
            
        </div>
        <div class="col-7">
            @foreach ($data as $key => $item)
                <div class="accordion-body collapse @if($key==0){{"show"}}@endif" id="panel-body-{{$key}}" data-parent="#accordion" style="">
                    <h5 class="color-main">คำอธิบายตำแหน่ง</h5>
                    <div class="pl-3">{{$item->detail}}</div>
                    <h5 class="color-main">สถานที่</h5>
                    <div class="pl-3">{{$item->location}}</div>
                    <h5 class="color-main">คุณสมบัติ</h5>
                    <div class="pl-3">{!!$item->property!!}</div>
                    <div class="form-group"></div>
                    <div class="text-center">
                    <a href="#" class="btn btn-dark">สมัครตำแหน่งนี้</a>
                    </div>
                </div>
            @endforeach
            
            
        </div>
    </div>
</div>

<div class="pallex" style="background-image: url('/images/product-bottom.png');position: relative;">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="position: absolute;background: rgba(0, 0, 0, 0.4);">
        <div class="container text-center">
            <h4>
                ติดต่อเรา
            </h4>
            <div class="mb-3">
                สอบถามข้อมูลต่างๆเกี่ยวกับเราหรือกล้าปาล์มของเรา
            </div>
            <a href="{{url('contact')}}" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>


@endsection

@section('more-script')
@endsection
