<?php
    $footer = [
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
            'text' => 'คู่มือการจัดการสวน',
            'link' => url('/garden'),
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
            'text' => 'ข่าวสารและกิจกรรม',
            'link' => url('/news'),
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


<footer class="footer">
    <div class="line pb-3">
        <a href="#">
            <img src="/images/logo.png" class="logo">
        </a>
        @foreach ($footer as $item)
            <a class="link" href="{{$item['link']}}">
                {{$item['text']}}
            </a>
        @endforeach
    </div>
    <div class="mt-3">
        Copyright @ 2019. All right reserved.
    </div>
</footer>