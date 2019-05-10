
<?php
$path = 'https://via.placeholder.com/1000x500';
if(isset($path_img)){
    if(Storage::disk('images')->exists($path_img)){
        $path = Storage::disk('images')->url($path_img);
    }
}
?>
<div class="highlight" style="background-image: url('{{$path}}');">
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
</div>