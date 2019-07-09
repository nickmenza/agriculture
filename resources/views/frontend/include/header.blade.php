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
            'text' => 'ข่าวสารและกิจกรรม',
            'link' => url('/news'),
        ],
        [
            'text' => 'คู่มือการจัดสวน',
            'link' => url('/garden'),
        ],
        [
            'text' => 'เกษตรกรตัวอย่าง',
            'link' => url('/agriculturist'),
        ],
        [
            'text' => 'ศูนย์กล้าปาล์มน้ำมัน',
            'link' => url('/location'),
        ],
        [
            'text' => 'ผลิตภัณฑ์',
            'link' => url('/product'),
        ],
        [
            'text' => 'ร่วมงานกับเรา',
            'link' => url('/career'),
        ],
        [
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
<div class="search">
    <form action="{{url('search')}}" method="GET">
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="search" value="{{Input::get('search')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
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
                <li><a href="{{$item['link']}}">{{$item['text']}}</a></li>
            @endforeach
        {{-- <li><a href="#0">Our Team</a></li>
        <li><a href="#0">Work</a></li>
        <li><a href="#0">Services</a></li>
        <li><a href="#0">Contact</a></li> --}}
        </ul>
    </nav>
    <form class="d-flex" action="{{url('search')}}" method="GET">
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="search" value="{{Input::get('search')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
    </form>
    </div>
    
    
</div>