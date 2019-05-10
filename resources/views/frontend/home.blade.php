@extends('frontend.layout')

@section('more-style')
    {{ Html::style('css/home.css') }}
@endsection

@section('body')

@component('frontend.component.highlight',
    [
        'text_th'=>'บริษัท อาร์ดี เกษตรพัฒนา จำกัด',
        'text_en'=>'จริงใจ คัดสรร พันธุ์ด',
        'path_img'=>'/images/h-home.png'
    ])
@endcomponent
<div class="container mb-5" style="marign-top:-50px">
    <div style="margin-top: -70px;"></div>
    <div class="row con-b p-3">
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="https://via.placeholder.com/1000x500">
        </div>
        <div class="col-sm-6 col-md-6 mb-3 text-center">
            <img class="w-100" src="https://via.placeholder.com/1000x500">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="https://via.placeholder.com/1000x500">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="https://via.placeholder.com/1000x500">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="https://via.placeholder.com/1000x500">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="https://via.placeholder.com/1000x500">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="https://via.placeholder.com/1000x500">
        </div>
    </div>
    <?php
        $list = [
            [
                'header' => 'เกี่ยวกับเรา',
                'header1' => 'ABOUT US',
                'detail' => 'dsadsadsa'
            ],
            [
                'header' => 'ศูนย์กล้าปาล์มน้ำมัน',
                'header1' => 'OIL PALM PLANTATION CENTER',
                'detail' => 'dsadsadsa'
            ],
        ];
    ?>
    @foreach ($list as $i => $item)
    <div class="row box-swap">
        <div class="col-md-6 col-12 box-text">
            <h4 class="color-main">
                {{$item['header']}}
            </h4>
            <div class="color-main">
                {{$item['header1']}}
            </div>
            <div>
                {{$item['detail']}}
            </div>
        </div>
        <div class="col-md-6 col-12 box-img">
            @if($i%2 != 0)
            <div class="line">
            </div>
            @endif
            <div>
                <img class="w-100" src="/images/news-bottom.png">
            </div>
            @if($i%2 == 0)
            <div class="line">
            </div>
            @endif
        </div>
    </div>
    @endforeach 
    
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
            <a href="#" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-sm-6 col-md-4 mb-3">
            <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
            <h5 class="color-main">
                JULY 6, 2018
            </h5>
            <h5>
                ประกาศหยุด
            </h5>
            <label>
                ประกาศหยุด
            </label>
            <a href="#" class="readme text-right pb-1">
                อ่านต่อ
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        @endfor

    </div>
</div>

@endsection

@section('more-script')
@endsection
