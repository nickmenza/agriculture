<?php
    $footer = [
        [
            'id' => 'footer-home',
            'text' => 'หน้าหลัก',
            'link' => url('/'),
        ],
        [
            'id' => 'footer-about',
            'text' => 'เกี่ยวกับเรา',
            'link' => url('/about-us'),
        ],
        [
            'id' => 'footer-agriculturist',
            'text' => 'เกษตรกรตัวอย่าง',
            'link' => url('/agriculturist'),
        ],
        [
            'id' => 'footer-garden',
            'text' => 'คู่มือการจัดสวน',
            'link' => url('/garden'),
        ],
        [
            'id' => 'footer-location',
            'text' => 'ศูนย์กล้าปาล์มน้ำมัน',
            'link' => url('/location'),
        ],
        [
            'id' => 'footer-product',
            'text' => 'ผลิตภัณฑ์',
            'link' => url('/product'),
        ],
        [
            'id' => 'footer-news',
            'text' => 'ข่าวสารและกิจกรรม',
            'link' => url('/news'),
        ],
        [
            'id' => 'footer-career',
            'text' => 'ร่วมงานกับเรา',
            'link' => url('/career'),
        ],
        [
            'id' => 'footer-contact',
            'text' => 'ติดต่อเรา',
            'link' => url('/contact'),
        ],
    ];
?>


<footer class="footer">
    <div class="line pb-3">
        <a href="#">
            <img src="/images/logo.png" class="logo">
        </a>
        @foreach ($footer as $item)
            <a class="link" href="{{$item['link']}}" id="{{$item['id']}}">
                {{$item['text']}}
            </a>
        @endforeach
    </div>
    <div class="line1">
    </div>
    <div class="mt-3">
        Copyright @ 2019. All right reserved.
    </div>
</footer>