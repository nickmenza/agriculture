@extends('frontend.layout')

@section('more-style')
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css') }}
    {{ Html::style('css/home.css') }}
@endsection

@section('body')
<div class="" style="z-index:-2;position:relative">
@component('frontend.component.highlight',
    [
        'text_th'=>'บริษัท อาร์ดี เกษตรพัฒนา จำกัด',
        'text_en'=>'จริงใจ คัดสรร พันธุ์ด',
        'path_img'=>'/images/h-home.png',
        'type' => 1
    ])
@endcomponent
</div>
<div class="container pt-5 pb-5">
    {{-- <div style="margin-top: -70px;"></div> --}}
    <div class="row con-b pt-3" style="margin-top: -70px;z-index:0" style="background-color:white">
        <div class="col-3 mb-3 text-center">
            <div class="background-new">
                <img class="w-100 h-100" src="{{url('/images/h-about.png')}}">
                <div class="b-detail">
                    <div class="box justify-content-end">
                        <div class="h5 mb-1">
                            เกี่ยวกับเรา
                        </div>
                        <div class="text-uppercase">
                            about us
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 mb-3 text-right">
            <div class="background-new">
                <img class="w-100 h-100" src="{{url('/images/h-product.png')}}">
                <div class="b-detail">
                    <div class="box justify-content-center align-items-end">
                        <div class="h5 mb-1">
                            ผลิตภัณฑ์ของเรา
                        </div>
                        <div class="text-uppercase">
                            OUR PRODUCTs
                        </div>
                        <a href="{{url('/product')}}" class="btn btn-m h6" style="width:120px">
                            ดูรายละเอียด
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-3 mb-3 text-center">
            <div class="background-new">
                <img class="w-100 h-100" src="{{url('/images/h-location.png')}}">
                <div class="b-detail">
                    <div class="box">
                        <div class="h5 mb-1">
                            ศูนย์กล้าปาล์มน้ำมัน
                        </div>
                        <div class="text-uppercase">
                            old palm plantation center
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        $list_a = [
            [
                'text' => 'คู่มือการจัดการสวน',
                'text_en' => 'garden management',
                'img' => url('/images/h-garden.png'),
                'cls' => ''

            ],
            [
                'text' => 'เกษตรตัวอย่าง',
                'text_en' => 'OUR AGRiculturust',
                'img' => url('/images/h-ag.png'),
                'cls' => ''

            ],
            [
                'text' => 'ข่าวสารและกิจกรรม',
                'text_en' => 'news and event',
                'img' => url('/images/h-new.png'),
                'cls' => 'justify-content-end'

            ],
            [
                'text' => 'ร่วมงานกับเรา',
                'text_en' => 'career',
                'img' => url('/images/h-career.png'),
                'cls' => 'justify-content-end'
            ],
        ]
        ?>
        @foreach ($list_a as $item)
            
        <div class="col-6 col-md-3 mb-3 text-center">
            <div class="background-new">
                <img class="w-100 h-100" src="{{$item['img']}}">
                <div class="b-detail">
                    <div class="box {{$item['cls']}}">
                        <div class="h5 mb-1">
                            {{$item['text']}}
                        </div>
                        <div class="text-uppercase">
                            {{$item['text_en']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div style="background-image: url('/images/h-back.png');margin-top:-150px;padding-top: 180px;padding-bottom:30px;z-index: -2;position: relative;">
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

{{-- <img class="w-100 h-100" src="/images/h-backag.png"> --}}
<div class="highlight" style="background-image: url('/images/bg-loop.png');z-index: -2;">
    <div class="container">
        <div class="owl-carousel owl-theme" id="owl-images">
            @foreach ($list_home as $i => $item)
                <div class="item"  data-position="{{$i}}">
                    @if(Storage::disk('uploads')->exists($item->images))
                        <img src="{{Storage::disk('uploads')->url($item->images)}}" class="mb-1 w-100">
                    @else
                        <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
                    @endif
                </div>
            @endforeach
        </div>
        <div class="owl-carousel owl-theme" id="owl-text">
            @foreach ($list_home as $i => $item)
                <div class="item text-center" id="text{{$i}}" data-position1="{{$i}}">
                    {!! $item->detail !!}
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container pt-5 pb-5">
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

@endsection

@section('more-script')
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js') }}
<script>
    $(function() {
        
        $('#owl-images').owlCarousel({
            center: true,
            items:2,
            loop:true,
            margin:10,
            responsive:{
                600:{
                    items:3
                }
            }
        });
        $('#owl-text').owlCarousel({
            center: true,
            items:2,
            loop:true,
            margin:10,
            responsive:{
                600:{
                    items:1
                }
            }
        });
        $(document).on('click', '.owl-item>div', function() {
           console.log( $(this).data())
            $('.owl-carousel').trigger('to.owl.carousel', $(this).data( 'position' ) );
            $('#owl-text').trigger('to.owl.carousel', $(this).data( 'position1' ) );

        });
        
    });
</script>
@endsection
