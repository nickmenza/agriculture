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
    iframe { 
        max-width: 100%;
    }
    .accordion-header.active{
        color: white;
        background-color: #0A4B31;
    }
    @media (max-width: 991.98px) {
        .accordion-header.active{
            margin-bottom: 10px;
        }
    }
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'ศูนย์กล้าปาล์มน้ำมัน','text_en'=>'OIL PALM PLANTATION CENTER','type'=>7])
    
@endcomponent


<div class="container pt-5 pb-5">
    {{-- desktop --}}
    <div class="d-none d-lg-block d-xl-block">
        <div class="row" id="accordion">
            <div class="col-md-5 form-group">
                <h5 class="m-0 p-2" style="color:white;background-color:#0A4B31">ติดต่อสำนักงานขาย</h5>
                @foreach ($data as $key => $item)
                <hr class="mt-1 mb-1">
                    <div class="accordion-header p-2 b-hover @if($key==0){{'active'}}@endif" role="button" v-on:click="click('{{$key}}')"
                    {{-- data-toggle="collapse" data-target="#panel-body-{{$key}}" --}}
                    id="accordion-header-{{$key}}"
                    aria-expanded="@if($key==0){{"true"}}@else{{"false"}}@endif">
                        {{$item['title']}}
                    </div>
                @endforeach
            </div>
            <div class="col-md-7 form-group">
                @foreach ($data as $key => $item)
                    <div class="accordion-body collapse @if($key==0){{"show"}}@endif" id="panel-body-{{$key}}" data-parent="#accordion" style="">

                        <div class="color-main">{{$item['title']}}</div>
                        <hr class="mt-2 mb-2" style="border-top: 1px solid #0A4B31">
                        
                        <div class="d-flex mb-2">
                            <div class="mr-2">
                                <img src="/images/contact2.png" style="width:20px">
                            </div>
                            <div>
                                {{$item['location']}}
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="mr-2">
                                <img src="/images/contact4.png" style="width:20px">
                            </div>
                            <div>
                                {{$item['phone']}}
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="mr-2">
                                <img src="/images/contact3.png" style="width:20px">
                            </div>
                            <div>
                                {{$item['email']}}
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="mb-2">
                            <a target="_blank" href="{{$item['link']}}" class="btn btn-m">Google Map</a>
                            @if(Storage::disk('uploads')->exists($item->images))
                            <a href="{{Storage::disk('uploads')->url($item->images)}}" target="_blank" class="btn btn-m">แผนที่รูปภาพ</a>
                            @else
                            <a href="#" class="btn btn-m">แผนที่รูปภาพ</a>

                            @endif
                        </div>
                        @if($item->iframe)
                            {!! $item->iframe !!}
                        @endif
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="d-block d-lg-none">
        <div class="row" id="accordion1">
            <div class="col-md-12 form-group">
            <h5 class="m-0 p-2" style="color:white;background-color:#0A4B31">ติดต่อสำนักงานขาย</h5>
            </div>
            @foreach ($data as $key => $item)
            <div class="col-md-12">
                <hr class="mt-1 mb-1">
                    <div class="accordion-header p-2 b-hover @if($key==0){{'active'}}@endif" role="button" v-on:click="click1('{{$key}}')"
                    {{-- data-toggle="collapse" data-target="#panel-body1-{{$key}}" --}}
                    id="accordion-header1-{{$key}}"
                    aria-expanded="@if($key==0){{"true"}}@else{{"false"}}@endif">
                        {{$item['title']}}
                    </div>
            </div>
            <div class="col-md-12">
                    <div class="accordion-body collapse @if($key==0){{"show"}}@endif" id="panel-body1-{{$key}}" data-parent="#accordion1" style="">

                        <div class="color-main">{{$item['title']}}</div>
                        <hr class="mt-2 mb-2" style="border-top: 1px solid #0A4B31">
                        
                        <div class="d-flex mb-2">
                            <div class="mr-2">
                                <img src="/images/contact2.png" style="width:20px">
                            </div>
                            <div>
                                {{$item['location']}}
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="mr-2">
                                <img src="/images/contact4.png" style="width:20px">
                            </div>
                            <div>
                                {{$item['phone']}}
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <div class="mr-2">
                                <img src="/images/contact3.png" style="width:20px">
                            </div>
                            <div>
                                {{$item['email']}}
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="mb-2">
                            <a target="_blank" href="{{$item['link']}}" class="btn btn-m">Google Map</a>
                            @if(Storage::disk('uploads')->exists($item->images))
                            <a href="{{Storage::disk('uploads')->url($item->images)}}" target="_blank" class="btn btn-m">แผนที่รูปภาพ</a>
                            @else
                            <a href="#" class="btn btn-m">แผนที่รูปภาพ</a>

                            @endif
                        </div>
                        @if($item->iframe)
                            {!! $item->iframe !!}
                        @endif
                    </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="pallex" style="background-image: url('/images/b-garden.png');position: relative;">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="position: absolute;background: rgba(0, 0, 0, 0.4);">
        <div class="container text-center">
            <h4>
                ผลิตภัณฑ์ของเรา
            </h4>
            <div class="mb-3">
                คัดเลือกหาล์มน้ำมันหลายสายพันธุ์ดีที่สุดจาดทั่วโลกเพื่อเกษตรกรของเรา
            </div>
            <a href="{{url('product')}}" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>


@endsection

@section('more-script')
    <script>
    $(function() {
       
        var accordion = new Vue({
                el: '#accordion',
                data: {
                    selected : 0
                },
                methods : {
                    click : function(id){
                        console.log('click',id)
                        $('.accordion-body').removeClass('show')
                        $('#panel-body-'+id).addClass('show')
                        $('.accordion-header').removeClass('active')
                        $('#accordion-header-'+id).addClass('active')
                    },
                    click1 : function(id){
                        console.log('click',id)
                        $('.accordion-body').removeClass('show')
                        $('#panel-body1-'+id).addClass('show')
                        $('.accordion-header1').removeClass('active')
                        $('#accordion-header1-'+id).addClass('active')
                    },
                    change : function(e){
                        console.log('change',e.target.value)
                        $('.accordion-body').removeClass('show')
                        $('#panel-body-'+e.target.value).addClass('show')
                        

                    }
                },
                created : function () {
                    console.log('start vue')
                }
        });
        var accordion = new Vue({
                el: '#accordion1',
                data: {
                    selected : 0
                },
                methods : {
                    click1 : function(id){
                        console.log('click',id)
                        $('.accordion-body').removeClass('show')
                        $('#panel-body1-'+id).addClass('show')
                        $('.accordion-header').removeClass('active')
                        $('#accordion-header1-'+id).addClass('active')
                    },
                    change : function(e){
                        console.log('change',e.target.value)
                        $('.accordion-body').removeClass('show')
                        $('#panel-body-'+e.target.value).addClass('show')
                        

                    }
                },
                created : function () {
                    console.log('start vue')
                }
        });
    });
    </script>
@endsection
