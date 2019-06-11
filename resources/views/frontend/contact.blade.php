@extends('frontend.layout')

@section('more-style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css')}}"/>
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
    .bg-img{
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'ติดต่อเรา','text_en'=>'CONTACT US','type'=>9])
    
@endcomponent
<div class="container contact pt-5 pb-5">
    <div class="b-box">
        <?php
        $list = [
            [
                'img' => 'images/contact1.png',
                'head' => 'PHONE',
                'text' => 'Phone. +662 0195000',
                'link' => 'tel:+662 0195000'
            ],
            [
                'img' => 'images/contact2.png',
                'head' => 'ADDRESS',
                'text' => '782/1 Onnut 17 Suanluang, Suanluang Bangkok 10250',
                'link' => ""
            ],
            [
                'img' => 'images/contact3.png',
                'head' => 'E-MAIL',
                'text' => 'info@.co.th',
                'link' => 'mailto:info@zengroup.co.th'
            ],
        ];
        ?>
        @foreach($list as $key => $value)
        <a class="box-l" @if($key==1)target="_blank"@endif href="@if(isset($value["link"])){{$value["link"]}}@endif">
            <div class="img text-center">
                <img src="{{$value['img']}}">
            </div>
            <div class="head text-center">
                {{$value['head']}}
            </div>
            <div class="text text-center">
                {{$value['text']}}
            </div>
        </a>
        @endforeach
    </div>
    <form class="support" action="{{url()->current()}}" method="POST">
        @csrf
        <h5 class="text-center color-main">
                if you have any questions
                please do not hesitate to contact us
        </h5>
        <div class="form-group">
        </div>
        <div class="form-group">
            <input class="form-control" name="name" placeholder="Your Name">
        </div>
        <div class="form-group">
            <input class="form-control" name="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-m h6" style="width:120px">
                ส่งข้อความ
            </button>
        </div>
    </form>
</div>

<div >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6685.130167139531!2d100.58036850613647!3d13.7446546088866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDQ0JzQzLjAiTiAxMDDCsDM0JzQ2LjEiRQ!5e0!3m2!1sen!2sth!4v1560170983788!5m2!1sen!2sth" style="width:100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3875.8546731439196!2d100.619237!3d13.727247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f773cbadd9e22ef!2sZen+Corporation+Group!5e0!3m2!1sen!2sth!4v1542353128915" style="width:100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
</div>


@endsection

@section('more-script')
@endsection
