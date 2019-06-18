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
@component('frontend.component.highlight',['text_th'=>'ข่าวสารและกจกรรม','text_en'=>'NEWS AND EVENT','type'=>3])
    
@endcomponent


<div class="container pt-5 pb-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item"><a href="{{url('news')}}" style="color: #0A4B31;">ข่าวสารและกิจกรรม</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$data->article_name}}</li>
        </ol>
    </nav>
    <h4 class="">
        {{$data->article_name}}
    </h4>
    <div class="mb-1" style="color: #929292">
        {{Helper::DateFormatTh(Carbon\Carbon::parse($data->date)->format('d/m/Y'))}}
    </div>
    <div class="d-flex justify-content-center">
    @if(Storage::disk('uploads')->exists($data->images))
        <img src="{{Storage::disk('uploads')->url($data->images)}}" class="mb-2" style="max-width:100%;">
    @else
        {{-- <img src="https://via.placeholder.com/300x300" class="mb-1 w-100"> --}}
    @endif
    </div>
    <div class="mt-2">
        {!! $data->detail !!}
    </div>
</div>

<div class="pallex" style="background-image: url('/images/news-bottom.png');position: relative;">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="position: absolute;background: rgba(0, 0, 0, 0.4);">
        <div class="container text-center">
            <h4>
                คู่มือการจัดการสวน
            </h4>
            <div class="mb-3">
                ฐานข้อมูลและคู่มือต่างๆเกี่ยวกับปาล์มน้ำมัน อยากรู้อะไรค้นหาเลย
            </div>
            <a href="{{url('garden')}}" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>

@endsection

@section('more-script')
@endsection
