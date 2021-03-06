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
    .modal-body{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .img-ab{
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0px;
        background-color: rgba(0,0,0,.6);
    }
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'คู่มือการจัดการสวน','text_en'=>'GARDEN MANAGEMENT GUIDE','type'=>6])
    
@endcomponent


<div class="container pt-5 pb-5">
    <div class="row article1">
            @foreach ($ag as $item)
            <?php
            $path_img = 'https://via.placeholder.com/300x300';
            if(Storage::disk('uploads')->exists($item->images)){
                $path_img = Storage::disk('uploads')->url(str_replace('article/', 'article/', $item->images));
            }

            ?>
            @if($item['url'])
                <a href="{{$item['url']}}" target="_blank" class="col-sm-6 col-md-4 mb-3 bbox" data-img = {{$path_img}}>
            @else
                <a href="#" class="col-sm-6 col-md-4 mb-3 bbox" data-img = {{$path_img}}>
            @endif
                <div class="ag">
                    {{-- @if(Storage::disk('uploads')->exists($item->images))
                        <img src="{{Storage::disk('uploads')->url(str_replace('article/', 'article/', $item->images))}}" class="mb-1 w-100 shadow">
                    @else
                        <img src="https://via.placeholder.com/300x300" class="mb-1 w-100 shadow">
                    @endif --}}
                    <img src="{{$path_img}}" class="mb-1 w-100 shadow">
                    <div class="detail">
                        {{$item->article_name}}
                        <br>
                        {!! $item->detail !!}
                    </div>
                </div>
            </a>
            @endforeach
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
            <a href="{{url('location')}}" class="btn btn-dark">ดูรายละเอียด</a>
        </div>
    </div>
</div>

<div class="img-ab" style="display:none">
    <img id="img-modal" src="https://via.placeholder.com/300x300">
</div>

@endsection

@section('more-script')
<script>
    // $( document ).ready(function() {
    //     $('.bbox').click(function(){
    //         // console.log($(this).data().img)
    //         $('#img-modal').attr('src',$(this).data().img)
    //         $('.img-ab').toggle();
    //     })
    //     $('.img-ab').click(function(){
    //         $('.img-ab').toggle();
    //     })
    // });
</script>
@endsection
