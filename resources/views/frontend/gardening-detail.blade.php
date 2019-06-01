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
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'คู่มือการจัดการสวน','text_en'=>'GARDEN MANAGEMENT GUIDE','type'=>5])
    
@endcomponent


<div class="container pt-5 pb-5">
    <h4 class="text-center color-main">
        {{$data->article_name}}
    </h4>
    <div class="text-center" style="color: #929292">
        {{Helper::DateFormatTh(Carbon\Carbon::parse($data->date)->format('d/m/Y'))}}
    </div>
    <div>
        {!! $data->detail !!}
    </div>
</div>

<div class="container pb-5">
    <h5 class="text-center color-main">บทความล่าสุด</h5>
    <div class="row">
        @foreach ($garden as $item)
            
        <a href="{{url('garden/'.$item->id.'/'.Helper::make_slug($item->article_name))}}" class="col-sm-6 col-md-4 mb-3">
            @if(Storage::disk('uploads')->exists($item->images))
                <img src="{{Storage::disk('uploads')->url($item->images)}}" class="mb-1 w-100">
            @else
                <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
            @endif
            <h5 class="color-main">
                {{Carbon\Carbon::parse($item->date)->format('F d, Y')}}
            </h5>
            <h5>
                {{$item->article_name}}
            </h5>
            <label class="article-overflow">
                {!! $item->detail !!}
            </label>
            <div class="readme text-right pb-1">
                อ่านต่อ
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>
        @endforeach

    </div>
</div>

<div class="pallex" style="background-image: url('/images/product-bottom.png');position: relative;">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="position: absolute;background: rgba(0, 0, 0, 0.4);">
        <div class="container text-center">
            <h4>
                ผลิตภัณฑ์ของเรา
            </h4>
            <div class="mb-3">
                คัดเลือกหาล์มน้ำมันหลายสายพันธุ์ดีที่สุดจาดทั่วโลกเพื่อเกษตรกรของเรา
            </div>
            <a href="#" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>


@endsection

@section('more-script')
@endsection
