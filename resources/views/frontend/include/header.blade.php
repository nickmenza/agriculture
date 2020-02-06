<?php
    $header = [
        [
            'id' => 'menu-main',
            'text' => 'หน้าหลัก',
            'link' => url('/'),
        ],
        [
            'id' => 'menu-about',
            'text' => 'เกี่ยวกับเรา',
            'link' => url('/about-us'),
        ],
        [
            'id' => 'menu-news',
            'text' => 'ข่าวสารและกิจกรรม',
            'link' => url('/news'),
        ],
        [
            'id' => 'menu-garden',
            'text' => 'คู่มือการจัดสวน',
            'link' => url('/garden'),
        ],
        [
            'id' => 'menu-agriculturist',
            'text' => 'เกษตรกรตัวอย่าง',
            'link' => url('/agriculturist'),
        ],
        [
            'id' => 'menu-location',
            'text' => 'ศูนย์กล้าปาล์มน้ำมัน',
            'link' => url('/location'),
        ],
        [
            'id' => 'menu-product',
            'text' => 'ผลิตภัณฑ์',
            'link' => url('/product'),
        ],
        [
            'id' => 'menu-career',
            'text' => 'ร่วมงานกับเรา',
            'link' => url('/career'),
        ],
        [
            'id' => 'menu-contact',
            'text' => 'ติดต่อเรา',
            'link' => url('/contact'),
        ],
    ];
?>
{{-- <nav class="header fixed-top " style="background-image: url('/images/h-home.png')">
    
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
        <nav class="navbar" id="navbar">
                <a href="{{url('/contact')}}" class="h-contact">
                    ติดต่อเรา
                </a>
                <div class="main">
                    <a href="{{url('/')}}">
                    <img src="/images/logo.png" class="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
        </nav>
    </div>
</nav> --}}
<div class="d-none d-md-block">
<div class="search" id="search_">
    <form action="{{url('search')}}" method="GET" id="des_search">
            <i class="fas fa-search" data-id="#des_search"></i>
            <input type="text" class="form-control" name="search" placeholder="ค้นหาบทความ, ผลิตภัณฑ์" value="" 
            autocomplete="off"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </form>
</div>
</div>
<div id="button-nav" class="hamburger">
    <span class="burger"></span>
    <span class="burger"></span>
    <span class="burger"></span>
</div>
    
<div class="content" id="nav-content">
    <div class="flex">
    <nav>
        <ul id="links" class="navigation">
            <li style="margin-top:13px" class="text-center"><a href="#">
                <img src="/images/logo.png" class="logo" style="width: 50px;">
            </a></li>
            @foreach ($header as $item)
                <li><a id="{{$item['id']}}" href="{{$item['link']}}">{{$item['text']}}</a></li>
            @endforeach
        </ul>
    </nav>
    <div class="d-block d-md-none">
        <form class="search" action="{{url('search')}}" method="GET" id="mo_search">
            <i class="fas fa-search" data-id="#mo_search"></i>
            <input type="text" class="form-control" name="search" placeholder="ค้นหาบทความ, ผลิตภัณฑ์" value="" 
            autocomplete="off"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </form>
    </div>
    </div>
    
    
</div>