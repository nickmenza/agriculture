<?php
    $header = [
        [
            'text' => 'หน้าหลัก',
            'link' => url('/'),
        ],
        [
            'text' => 'เกี่ยวกับเรา',
            'link' => url('/about-us'),
        ],
        [
            'text' => 'เกษตรกรตัวอย่าง',
            'link' => url('/agriculturist'),
        ],
        [
            'text' => 'ศูนย์กลางปาล์มน้ำมัน',
            'link' => url('/location'),
        ],
        [
            'text' => 'ผลิตภัณฑ์',
            'link' => url('/product'),
        ],
        [
            'text' => 'ข่าวสารและกิจกรรม',
            'link' => url('/news'),
        ],
        [
            'text' => 'ติดต่อเรา',
            'link' => url('/contact'),
        ],
    ];
?>
<nav class="header fixed-top " style="background-image: url('/images/h-home.png')">
    
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="p-4" style="">
            <div class="header-link">
                @foreach ($header as $item)
                   <a href="{{$item['link']}}">
                        {{$item['text']}}
                   </a> 
                @endforeach
            </div>
        </div>
    </div>
    <nav class="navbar">
            <a href="{{url('/contact')}}" class="h-contact">
                ติดต่อเรา
            </a>
            <div class="main">
                <img src="/images/logo.png" class="logo">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
    </nav>
</div>
</nav>
