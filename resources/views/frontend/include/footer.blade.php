<?php
    $footer = [
        [
            'text' => 'หน้าหลัก',
            'link' => '#',
        ],
        [
            'text' => 'เกี่ยวกับเรา',
            'link' => '#',
        ],
        [
            'text' => 'เกษตรกรตัวอย่าง',
            'link' => '#',
        ],
        [
            'text' => 'ศูนย์กลางปาล์มน้ำมัน',
            'link' => '#',
        ],
        [
            'text' => 'ผลิตภัณฑ์',
            'link' => '#',
        ],
        [
            'text' => 'ข่าวสารและกิจกรรม',
            'link' => '#',
        ],
        [
            'text' => 'ติดต่อเรา',
            'link' => '#',
        ],
    ];
?>


<footer class="footer">
    <div class="line pb-3">
        <a href="#">
            <img src="/images/logo.png" class="logo">
        </a>
        @foreach ($footer as $item)
        <a href="{{$item['link']}}">
            {{$item['text']}}
        </a>
        @endforeach
    </div>
    <div class="mt-3">
        Copyright @ 2019. All right reserved.
    </div>
</footer>