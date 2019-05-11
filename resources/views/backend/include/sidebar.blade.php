<?php
$path = '_admin';
$menu = [
    [
        'text' => 'Banner',
        'icon' => 'fas fa-list',
        'link' => url($path.'/banner')
    ],
    [
        'text' => 'ข่าวสารและกิจกรรม',
        'icon' => 'fas fa-list',
        'link' => url($path.'/article?article_type=1')
    ],
    [
        'text' => 'ผลิตภัทณ์',
        'icon' => 'fas fa-list',
        'link' => url($path.'/products')
    ],
    [
        'text' => 'คู่มือการจัดการสวน',
        'icon' => 'fas fa-list',
        'link' => url($path.'/article?article_type=2')
    ],
    [
        'text' => 'เกตษรตัวอย่าง',
        'icon' => 'fas fa-list',
        'link' => url($path.'/article?article_type=3')
    ],
    [
        'text' => 'ศูนย์กล้าปาล์มน้ำมัน',
        'icon' => 'fas fa-list',
        'link' => url($path.'/location')
    ],
    [
        'text' => 'ร่วมงานกับเรา',
        'icon' => 'fas fa-list',
        'link' => url($path.'/career')
    ],
    [
        'text' => 'ติดต่อเรา',
        'icon' => 'fas fa-list',
        'link' => url($path.'/contact')
    ],
];
?>

<div class="main-sidebar sidebar-style-2 sidebar-bg">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">{{config('global.project_nick_name')}}</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">{{config('global.project_nick_name')}}</a>
      </div>
      <ul class="sidebar-menu">
          @foreach ($menu as $key => $item)
            @if(isset($item['submenu']))
                <li class="nav-item dropdown" id="list-menu{{$key}}">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-ellipsis-h"></i> <span>{{$item['text']}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($item['submenu'] as $keysub => $subitem)
                            <li id="list-menu{{$key}}-{{$keysub}}">
                                <a href="{{$subitem['link']}}">{{$subitem['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="" id="list-menu{{$key}}">
                    <a class="nav-link" href="{{$item['link']}}">
                        @if(isset($item['icon']))
                        <i class="{{$item['icon']}}"></i> 
                        @endif
                        <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endif
          @endforeach
        </ul>
    </aside>
</div>