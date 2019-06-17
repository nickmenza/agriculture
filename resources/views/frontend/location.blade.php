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
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'ศูนย์กล้าปาล์มน้ำมัน','text_en'=>'OIL PALM PLANTATION CENTER','type'=>7])
    
@endcomponent


<div class="container pt-5 pb-5">
    <div class="row" id="accordion">
        <div class="col-md-5 form-group">
            <div class="d-none d-md-block">
                <h5 class="m-0 p-2" style="color:white;background-color:#0A4B31">ติดต่อสำนักงานขาย</h5>
                <hr class="mt-1 mb-1">
                @foreach ($data as $key => $item)
                    <div class="accordion-header p-2 b-hover" role="button" v-on:click="click('{{$key}}')"
                    {{-- data-toggle="collapse" data-target="#panel-body-{{$key}}" --}}
                    aria-expanded="@if($key==0){{"true"}}@else{{"false"}}@endif">
                        {{$item['title']}}
                    </div>
                @endforeach
            </div>
            <div class="d-block d-md-none">
                <h5 class="m-0 p-2 color-main">ติดต่อสำนักงานขาย</h5>
                <select class="form-control" id="mobile-select" :v-model="selected" v-on:change="change">
                    @foreach ($data as $key => $item)
                    <option value="{{$key}}">
                        {{$item['title']}}
                    </option>
                    @endforeach
                </select>
            </div>
            
        </div>
        <div class="col-md-7 form-group">
            @foreach ($data as $key => $item)
                <div class="accordion-body collapse @if($key==0){{"show"}}@endif" id="panel-body-{{$key}}" data-parent="#accordion" style="">

                    <h6 class="color-main">{{$item['title']}}</h6>
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
                        {{-- <a href="#" class="btn btn-dark">แผนที่รูปภาพ</a> --}}
                    </div>
                    @if($item->iframe)
                        {!! $item->iframe !!}
                    @endif
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
