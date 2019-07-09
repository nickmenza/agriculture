@extends('frontend.layout')

@section('more-style')
<style>
    img{
        max-width: 100%;
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
    .bg-img{
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
@endsection


@section('body')

<div class="form-group"></div>

<div class="container pt-5 pb-5">
    <h1>
        บทความ
    </h1>
    <div class="row article1">
            @foreach ($garden as $item)
            <a href="{{url('garden/'.$item->id.'/'.Helper::make_slug($item->article_name))}}" class="col-sm-6 col-md-4 mb-3">
                @if(Storage::disk('uploads')->exists($item->images))
                    {{-- <img src="{{Storage::disk('uploads')->url(str_replace('article/', 'article/300/', $item->images))}}" class="mb-1 w-100"> --}}
                    <img src="{{Storage::disk('uploads')->url($item->images)}}" class="mb-1 w-100">
                @else
                    <img src="https://via.placeholder.com/300x230" class="mb-1 w-100">
                @endif
                <h5 class="color-main">
                    {{Carbon\Carbon::parse($item->date)->format('F d, Y')}}
                </h5>
                <h5 class="ellipsis">
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
    {{$garden->links()}}
</div>


<div style="background-color: #ededed;">
<div class="container pt-5 pb-5" style="">
    <h1>
        ผลิตภัณฑ์
    </h1>
    <div class="row">
        @foreach ($products as $item)
        <a class="col-sm-6 col-md-4 mb-3 text-center" href="{{url('product/'.$item->id.'/'.Str::slug($item->product_name_en, '-'))}}">
            <div style="background-color:white;color:black" class="p-2">
                @if(Storage::disk('uploads')->exists($item->images))
                    <img src="{{Storage::disk('uploads')->url(str_replace('product/', 'product/', $item->images))}}" class="mb-1 w-100">
                @else
                    <img src="https://via.placeholder.com/300x300" class="mb-1 w-100">
                @endif
                <div style="font-size:18px">
                    {{$item->product_name}}
                </div>
                <div class="color-main" style="font-size:14px">
                    {{$item->product_name_en}}
                </div>
            </div>
        </a>
        @endforeach

    </div>
    {{$products->links()}}

</div>
</div>


@endsection

@section('more-script')
@endsection
