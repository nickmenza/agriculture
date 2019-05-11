@extends('frontend.layout')

@section('more-style')
    {{ Html::style('css/home.css') }}
@endsection

@section('body')

@component('frontend.component.highlight',
    [
        'text_th'=>'บริษัท อาร์ดี เกษตรพัฒนา จำกัด',
        'text_en'=>'จริงใจ คัดสรร พันธุ์ด',
        'path_img'=>'/images/h-home.png',
        'type' => 1
    ])
@endcomponent
<div class="container">
    {{-- <div style="margin-top: -70px;"></div> --}}
    <div class="row con-b p-2" style="margin-top: -70px;" style="background-color:white">
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="/images/h-about.png">
        </div>
        <div class="col-sm-6 col-md-6 mb-3 text-center">
            <img class="w-100" src="/images/h-product.png">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="/images/h-location.png">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="/images/h-garden.png">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="/images/h-ag.png">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="/images/h-new.png">
        </div>
        <div class="col-sm-6 col-md-3 mb-3 text-center">
            <img class="w-100 h-100" src="/images/h-career.png">
        </div>
    </div>
</div>
<div style="background-image: url('/images/h-back.png');margin-top:-150px;padding-top: 180px;padding-bottom:30px">
    <div class="container"> 
        <?php
            $list = [
                [
                    'header' => 'เกี่ยวกับเรา',
                    'header1' => 'ABOUT US',
                    'detail' => 'บริษัท อาร์ดี เกษตรพัฒนา จำกัด ก่อตั้งเมื่อ เดือนเมษายน 2548 โดยมีสองบริษัทในเครือ คือ บริษัท อาร์แอนด์ดี เกษตรพัฒนา จำกัด และบริษัท พาราเมาท์ ออยล์ จำกัด ประกอบกิจการด้านการเกษตร ด้วยการเพาะปลูกและจำหน่ายต้นกล้าปาล์มน้ำมัน และทำสวนปาล์มน้ำมัน ตั้งแต่ปี 2548 จนถึงปัจจุบัน บริษัทฯมีลูกค้าทั่วประเทศ มากกว่า 70 จังหวัด'
                ],
                [
                    'header' => 'ศูนย์กล้าปาล์มน้ำมัน',
                    'header1' => 'OIL PALM PLANTATION CENTER',
                    'detail' => 'ต้นกล้าที่เจริญเติบโตสมบูรณ์ จัดวางในแปลงเพาะอย่างเหมาะสม และได้รับการบำรุงรักษาอย่างดี จะให้ผลผลิตได้อย่างรวดเร็วเมื่อนำไปปลูกในแปลง บริษัทฯ ได้ทำความตกลงและร่วมมือกับแปลงเพาะในเครือข่ายเพื่อรับประกันว่า เกษตรจะได้รับต้นกล้าปาล์มที่มีคุณภาพเท่านั้น'
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
</div>

<img class="w-100 h-100" src="/images/h-backag.png">

<div class="container pt-5 pb-5">
    <div class="row">
        @foreach ($garden as $item)
        <a href="{{url('garden/'.$item->id.'/'.$item->article_name)}}" class="col-sm-6 col-md-4 mb-3">
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
            <label style="height: 55px;overflow: hidden;">
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

@endsection

@section('more-script')
@endsection
