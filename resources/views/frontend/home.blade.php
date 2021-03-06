@extends('frontend.layout')

@section('more-style')
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css') }}
    {{ Html::style('css/home.css?v=1') }}
    <style>
        @media (max-width: 575.98px){
            .highlight.main {
                min-height: 200px !important;
            }
        }
    </style>
@endsection

@section('body')


<div class="" >

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banner as $key => $item)
                <?php
                    $path = 'https://via.placeholder.com/1000x500';
                    if(Storage::disk('uploads')->exists($item->images)){
                        $path = Storage::disk('uploads')->url($item->images);
                    }
                    $text_th = $item->banner_name;
                    $text_en = $item->banner_name_en;
                ?>
                <div class="carousel-item @if($key == 0){{"active"}}@endif">
                    <img class="d-block w-100" src="{{$path}}">
                    <div class="text-center" style="color:white;position: absolute;left: 0;right: 0;top: 40%;">
                            <h3 class="mb-1 carousel-title">
                                @if(isset($text_th))
                                {{$text_th}}
                                @endif
                            </h3>
                            <label class="">
                                @if(isset($text_en))
                                {{$text_en}}
                                @endif
                            </label>
                        </div>
                </div>
            @endforeach
           
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>

{{-- @component('frontend.component.highlight',
    [
        'text_th'=>'บริษัท อาร์ดี เกษตรพัฒนา จำกัด',
        'text_en'=>'จริงใจ คัดสรร พันธุ์ด',
        'path_img'=>'/images/h-home.png',
        'type' => 1
    ])
@endcomponent --}}
</div>


<div class="container pt-5 pb-5">
    {{-- <div style="margin-top: -70px;"></div> --}}
    <div class="row con-b pt-3" style="margin-top: -70px;z-index:0" style="background-color:white">
        <a href="{{url('about-us')}}" class="order-2 order-md-1 col-6 col-md-3 mb-3 text-center b-hover" >
            <div class="background-new" style="background-image: url({{url('/images/h-about.png')}})">
                {{-- <img class="w-100 h-100" src="{{url('/images/h-about.png')}}"> --}}
                <div class="b-detail">
                    <div class="box justify-content-end">
                        <div class="h5 mb-1">
                            เกี่ยวกับเรา
                        </div>
                        <div class="text-uppercase" style="font-size:12px">
                            about us
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="{{url('product')}}"  class="order-1 order-md-2 col-md-6 mb-3 text-right b-hover">
            <div class="background-new" style="background-image: url({{url('/images/h-product.png')}})">
                {{-- <img class="w-100 h-100" src="{{url('/images/h-product.png')}}"> --}}
                <div class="b-detail">
                    <div class="box justify-content-center align-items-end">
                        <div class="h5 mb-1">
                            ข้อมูลสายพันธุ์
                        </div>
                        <div class="text-uppercase" style="font-size:12px">
                            OUR PRODUCTs
                        </div>
                        <div href="{{url('/product')}}" class="btn btn-dark h6 mt-2" style="width:120px; font-size:14px" id="home-our-product">
                            ดูรายละเอียด
                        </div>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="{{url('location')}}" class="order-3 order-md-3 col-6 col-md-3 mb-3 text-center b-hover" id="home-old-palm-center">
            <div class="background-new" style="background-image: url({{url('/images/h-location.png')}})">
                {{-- <img class="w-100 h-100" src="{{url('/images/h-location.png')}}"> --}}
                <div class="b-detail">
                    <div class="box">
                        <div class="h5 mb-1">
                            ศูนย์กล้าปาล์มน้ำมัน
                        </div>
                        <div class="text-uppercase" style="font-size:12px">
                            old palm plantation center
                        </div>
                    </div>
                </div>
            </div>
        </a>
        
        <?php
        $list_a = [
            [
                'id' => 'home-old-palm-management',
                'text' => 'คู่มือการจัดการสวนปาล์มน้ำมัน',
                'text_en' => 'OIL PALM PLANTATION MANAGEMENT',
                'img' => url('/images/h-garden.png'),
                'cls' => '',
                'url' => url('/garden'),

            ],
            [
                'id' => 'home-our-agr',
                'text' => 'เกษตรกรตัวอย่าง',
                'text_en' => 'OUR AGRiculturust',
                'img' => url('/images/h-ag.png'),
                'cls' => '',
                'url' => url('/agriculturist'),

            ],
            [
                'id' => 'home-new-event',
                'text' => 'ข่าวสารและกิจกรรม',
                'text_en' => 'news and event',
                'img' => url('/images/h-new.png'),
                'cls' => 'justify-content-end',
                'url' => url('/news'),

            ],
            [
                'id' => 'home-career',
                'text' => 'ร่วมงานกับเรา',
                'text_en' => 'career',
                'img' => url('/images/h-career.png'),
                'cls' => 'justify-content-end',
                'url' => url('/career'),

            ],
        ]
        ?>
        @foreach ($list_a as $item)
            
        <a href="{{$item['url']}}" class="order-4 col-6 col-md-3 mb-3 text-center b-hover" id="{{$item['id']}}">
            <div class="background-new more" style="background-image: url({{$item['img']}});">
                {{-- <img class="w-100 h-100" src="{{$item['img']}}"> --}}
                <div class="b-detail">
                    <div class="box {{$item['cls']}}">
                        <div class="h5 mb-1">
                            {{$item['text']}}
                        </div>
                        <div class="text-uppercase" style="font-size:12px">
                            {{$item['text_en']}}
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
<div style="background-image: url('/images/h-back.png');margin-top:-150px;padding-top: 170px;padding-bottom:30px;z-index: -2">
    <div class="container"> 
        <?php
            $list = [
                [
                    'header' => 'เกี่ยวกับเรา',
                    'header1' => 'ABOUT US',
                    'img' => url('images/news-bottom.png'),
                    'detail' => 'บริษัท อาร์ดี เกษตรพัฒนา จำกัด ก่อตั้งเมื่อ เดือนเมษายน 2548 โดยมีสองบริษัทในเครือ คือ บริษัท อาร์แอนด์ดี เกษตรพัฒนา จำกัด และบริษัท พาราเมาท์ ออยล์ จำกัด ประกอบกิจการด้านการเกษตร ด้วยการเพาะปลูกและจำหน่ายต้นกล้าปาล์มน้ำมัน และทำสวนปาล์มน้ำมัน ตั้งแต่ปี 2548 จนถึงปัจจุบัน บริษัทฯมีลูกค้าทั่วประเทศ มากกว่า 70 จังหวัด',
                    'link' => url('about-us'),
                ],
                [
                    'header' => 'ศูนย์กล้าปาล์มน้ำมัน',
                    'header1' => 'OIL PALM PLANTATION CENTER',
                    'img' => url('images/home-down.jpg'),
                    'detail' => 'ต้นกล้าที่เจริญเติบโตสมบูรณ์ จัดวางในแปลงเพาะอย่างเหมาะสม และได้รับการบำรุงรักษาอย่างดี จะให้ผลผลิตได้อย่างรวดเร็วเมื่อนำไปปลูกในแปลง บริษัทฯ ได้ทำความตกลงและร่วมมือกับแปลงเพาะในเครือข่ายเพื่อรับประกันว่า เกษตรจะได้รับต้นกล้าปาล์มที่มีคุณภาพเท่านั้น',
                    'link' => url('location'),
                ],
            ];
        ?>
        @foreach ($list as $i => $item)
        <div class="row box-swap" style="margin-bottom:15px">
            <div class="col-md-6 col-12 box-text">
                <h4 class="color-main m-0">
                    {{$item['header']}}
                </h4>
                <div class="color-main mb-2" style="font-size:13px">
                    {{$item['header1']}}
                </div>
                <div style="font-size:15px">
                    {{$item['detail']}}
                </div>
                <div style="font-size:15px">
                    @if($i%2 != 0)
                    <a href="{{$item['link']}}" style="color:#0A4B31">
                    <i class="fas fa-chevron-left"></i>
                        อ่านต่อ
                    </a>
                    @else
                    <a href="{{$item['link']}}" style="color:#0A4B31">
                        อ่านต่อ
                    <i class="fas fa-chevron-right"></i>
                    </a>
                    @endif
                    
                </div>
            </div>

            <div class="col-md-6 col-12 box-img">
                @if($i%2 != 0)
                <div class="line">
                </div>
                @endif
                <div>
                    <img class="w-100" src="{{$item['img']}}">
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
                    <a href="@if($item['url']){{$item['url']}}@else{{""}}@endif">
                    @if(Storage::disk('uploads')->exists($item->images))
                        {{-- <img src="{{Storage::disk('uploads')->url($item->images)}}" class="mb-1 w-100"> --}}
                        <img src="{{Storage::disk('uploads')->url(str_replace('article/', 'article/300/', $item->images))}}" class="mb-1 w-100">
                    @else
                        <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
                    @endif
                    </a>
                    <br>
                    <div class="item1 text-center">
                        {!! $item->article_name !!}
                        <br>
                        {!! $item->detail !!}
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="owl-carousel owl-theme" id="owl-text">
            @foreach ($list_home as $i => $item)
                <div class="item text-center" id="text{{$i}}" data-position1="{{$i}}">
                    {!! $item->article_name !!}
                    <br>
                    {!! $item->detail !!}
                </div>
            @endforeach
        </div> --}}
    </div>
</div>
<div class="container pt-5 pb-5">
    <h3 class="text-center color-main">
        คู่มือการจัดสวน
    </h3>
    <h6 class="text-center color-main">
        GARDENING GUIDE
    </h6>
    <div class="row form-group"></div>
    <div class="row article1">
        @foreach ($garden as $item)
        
        <a href="{{url('garden/'.$item->id.'/'.Helper::make_slug($item->article_name))}}" class="col-sm-12 col-md-4 mb-3">
            @if(Storage::disk('uploads')->exists($item->images))
                {{-- <img src="{{Storage::disk('uploads')->url($item->images)}}" class="mb-1 w-100"> --}}
                <img src="{{Storage::disk('uploads')->url($item->images)}}" class="mb-1 w-100">
            @else
                <img src="https://via.placeholder.com/300x230" class="mb-1 w-100">
            @endif
            <h5 class="color-main" style="font-size:14px">
                {{Carbon\Carbon::parse($item->date)->format('F d, Y')}}
            </h5>
            <h5 class="ellipsis">
                {{$item->article_name}}
            </h5>
            <label class="article-overflow">
                {!! $item->detail !!}
            </label>
            <div class="readme text-right pb-1" style="font-size:14px">
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
            autoplay:true,
            responsive:{
                768:{
                    items:3
                },
                200:{
                    items:1
                }
            }
        });
        $(document).on('click', '.owl-item>div', function() {
            $('.owl-carousel').trigger('to.owl.carousel', $(this).data( 'position' ) );

        });
        
    });
</script>
@endsection
