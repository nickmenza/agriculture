
<?php
$path = 'https://via.placeholder.com/1000x500';
if(isset($path_img)){
    if(Storage::disk('images')->exists($path_img)){
        $path = Storage::disk('images')->url($path_img);
    }
}
?>
{{-- <div class="highlight" style="background-image: url('{{$path}}');">
    <div class="color-main text-center">
        <h3 class="mb-1">
            @if(isset($text_th))
            {{$text_th}}
            @endif
        </h3>
        <label class="">
            @if(isset($text_en))
            {{$text_en}}
            @endif
        </label>
    </div>
    <div class="ro">
        <div class="border-r left" style="transform: rotate(10deg);">
        </div>
        <div class="border-r right" style="transform: rotate(-10deg);">
        </div>
    </div>
</div> --}}

<div class="triangle-fluid" style="background: transparent url('{{$path}}') center center;">
    <div style="min-height: 350px;">
    </div>
    <div class="triangle-container">
        <div class="triangle triangle-left"></div>
        <div class="triangle triangle-right"></div>
    </div>
</div>