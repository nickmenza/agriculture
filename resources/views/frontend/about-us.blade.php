@extends('frontend.layout')

@section('more-style')
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
        min-height: 250px; 
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
    .bg-img .container{
        max-width: 750px;
    }

    p {
    color: #fff;
    padding: 0 12px;
    width: 280px;
    }
    

   
</style>
    {{ Html::style('css/about-us.css') }}
@endsection


@section('body')
@component('frontend.component.highlight',['text_th'=>'เกี่ยวกับเรา','text_en'=>'ABOUT US','type'=>2])
@endcomponent

<div class="bg-img" style="background-image: url('/images/bg1.png')">
    
    <div class="container pt-5 pb-5">
        <div class="row mb-5">
            <div class="col-md-9">
                    <h6 class="font-bold">เริ่มต้นก้าวแรกในธุรกิจปาล์มน้ำมัน</h6>
                    จากการปลูกสวนยางและปาล์มน้ำมันในสวนจังหวัดสตูล ตั้งแต่ปี พ.ศ. 2530
                    ด้วยความคิดริเริ่มของคุณสุทัศน์ รัชกิจประการ ซึ่งมีพื้นเพเป็นคน จังหวัดสงขลา จากประสบการณ์กว่า 10 ปี 
                    ที่คลุกคลีกับการทำสวนทำให้มองเห็นความสำคัญของปาล์มน้ำมันที่เป็นพืชเศรษฐกิจด้านพลังงานทดแทน 
                    ที่จะมีบทบาทสำคัญในอนาคต ในขณะที่ตลาดในประเทศยังไม่มีผู้ผลิตแปลงเพาะที่ได้มาตรฐาน 
                    เราจึงเริ่มบุกเบิกการทำธุรกิจแปลงเพาะ โดยก่อตั้ง บริษัท อาร์แอนด์ดี เกษตรพัฒนา จำกัด ในปี พ.ศ. 2548 คัดสรรเมล็ดปาล์มสายพันธ์ดี
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 offset-md-3">
                    <label class="font-bold">ในช่วงปี 2548</label>
                    เป็นช่วงที่เกิดความไม่เชื่อมั่นในคุณภาพของสายพันธ์ปาล์มน้ำมันที่มีอยู่ในตลาดประเทศไทย 
                    ในขณะนั้นบริษัทฯ จึงนำเข้าเมล็ดพันธุ์ปาล์มน้ำมันจากประเทศคอสตาริกาและประเทศมาเลเซียเพื่อเพาะเป็นกล้าปาล์มจำหน่ายแก่เกษตรกร  
                    โดยจัดตั้งศูนย์เพาะกล้าปาล์มน้ำมันแห่งแรกที่ ...........................................................  
                    และได้รับการสนับสนุนความรู้ทางวิชาการจาก มหาวิทยาลัย........................  
                    รวมทั้งให้ร่วมมือกับมหาวิทยาลัยในการเข้าจัดเก็บข้อมูลสถิติของปาล์มน้ำมันเพื่องานวิจัย
                    <br>
                    เติบโตอย่างมั่นคงมากว่า 10 ปี ธุรกิจแปลงเพาะได้รับการส่งต่อสู่ทายาทกลุ่มครอบครัวรัชกิจประการ 
                    ภายใต้การบริหารของคุณภัคจิรา รัชกิจประการ ประกอบธุรกิจแปลงเพาะกล้าปาล์มน้ำมัน 
                    ในภาคใต้และสวนปาล์มน้ำมันในตะวันออก ในปี พ.ศ.2558 ทางบริษัทฯยังได้เข้าซื้อกิจการของบริษัท พาราเม้าท์ ออยล์ จำกัด 
                    เพื่อขยายพื้นที่เข้าสู่ภาคใต้ตอนล่างและเปลี่ยนชื่อจาก บริษัท อาร์แอนด์ดี เกษตรพัฒนา เป็น บริษัทอาร์ดี เกษตรพัฒนา จำกัด 
            </div>
        </div>
    </div>
</div>
<div class="pallex" style="background-image: url('/images/product-bottom.png')">
</div>

<div style="background-color:white">
    <div class="container pt-5 pb-5">
        <div class="mb-4">
            <label class="font-bold">ปัจจุบัน บริษัท อาร์ดี เกษตรพัฒนา จำกัด</label> มีธุรกิจแปลงเพาะกล้าและสวนปาล์มน้ำมันทั้งในภาคใต้และภาคตะวันออก  
            โดยมีแปลงเพาะกล้าจำนวน 8 แห่ง คือ 3 แห่งในจังหวัดชุมพร (ศูนย์ละแม ศูนย์สวี และศูนย์ปะทิว)  
            1 แห่ง ในจังหวัดสงขลา (รัตภูมิ) 1 แห่ง ในจังหวัดพัทลุง (ศูนย์พัทลุง) 1 แห่ง ในจังหวัดนครศรีธรรมราช (บ่อล้อ) 
            และ 2 แห่ง ในภาคกลางและตะวันออก (ศูนย์นครนายก ศูนย์ปราจีนบุรี)  ในปี 2559 บริษัทฯได้ขยายแปลงเพาะกล้า 
            และ มีสวนปาล์มเพิ่มอีกหนึ่งแห่งที่จังหวัดสตูล มุ่งมั่นสร้างสรรค์งานบริการและให้ความรู้เกษตรเพื่อยกระดับอุตสาหกรรมปาล์มน้ำมันไทย
        </div>
        <div>
                <label class="font-bold">บริษัท อาร์ดี เกษตรพัฒนา จำกัด</label> มุ่งมั่นที่จะเป็นส่วนหนึ่งของการยกระดับมาตรฐานอุตสาหกรรมปาล์มน้ำมันในประเทศไทย เรามีแปลงสาธิตเพื่อทดสอบสายพันธุ์ปาล์มน้ำมันทั้งในและต่างประเทศจัดเก็บข้อมูลการให้ผลผลิตรวมถึง
                การตอบสนองของแต่ละสายพันธุ์ต่อสภาพพื้นที่ที่แตกต่างกันรวมไปถึงศึกษาดูงานกับหน่วยงานราชการ กลุ่มผู้ผลิตเมล็ดพันธุ์อย่างต่อเนื่อง เพื่อนำความรู้ที่ได้รับมาพัฒนาการเพาะพันธุ์ต้นกล้าที่มีคุณภาพ วิธีการจัดการสวนปาล์มที่มีประสิทธิภาพ และเผยแพร่แนะนำให้ความรู้แก่เกษตรกรได้อย่างถูกต้อง 
        </div>
    </div>
</div>

{{-- <div style="background-image: url('/images/bg-timeline.png');height:400px;">
    <div class="">
        <ul class="progressbar">
            <li class="active">Designer at Google</li>
            <li class="active">Freelance Developer</li>
            <li>Microsoft ???</li>
        </ul>
    </div>
</div> --}}
{{-- <div class="">
    <ul class="progressbar">
        <li class="active">Designer at Google</li>
        <li class="active">Freelance Developer</li>
        <li>Microsoft ???</li>
    </ul>
</div> --}}


<div class="pallex1" style="background-image: url('/images/bg-timeline.png');position: relative;z-index:-2;overflow: hidden;">
    <div class="w-100 h-100 pt-4 pb-4" style="position: absolute;background: rgba(255, 255, 255, 0.4);">
        <div class="container text-center">
            <h4>
                เส้นทางแห่งการเติบโต
            </h4>
            <ul class="progressbar" style="margin-top:50px">
                <li class="active">
                    <i class="fas fa-circle"></i>
                    <div class="detail">
                    <div class="color-main">ก่อตั้งบริษัทอาร์แอนด์ดี เกษตรพัฒนา จำกัด</div>
                    - สำนักงานใหญ่ กรุงเทพฯ<br>
                    - ศูนย์สวี บนพื้นที่ 37 ไร่<br>
                    - ศูนย์ละแม บนพื้นที่ 200 ไร่<br>
                    </div>
                </li>
                <li style="position:absolute;right:-100%"></li>
                <li style="position:absolute;right:-100%"></li>
                <li style="position:absolute;right:-100%"></li>
                <li class="active">
                    <div class="detail">
                    ศูนย์ปะทิว จุดพักกล้า บนพื้นที่ 100 ไร่
                    </div>
                </li>
                <li style="position:absolute;right:-100%"></li>
                <li style="position:absolute;right:-100%"></li>
                <li style="position:absolute;right:-100%"></li>
                <li class="active">
                    <div class="detail">
                    ศูนย์ปราจีนบุรี บนพื้นที่ 3000 ไร่
                    </div>
                </li>
                <li style="position:absolute;right:-100%"></li>
                <li class="active">
                    <div class="detail">
                    <div class="color-main">เข้าซื้อกิจการบริษัท พาราเม้าท์ ออยล์ จำกัด และ
                    เปลี่ยนชื่อทั้ง 3 แห่งเป็น บริษัท อาร์ดี เกษตรพัฒนา จำกัด</div>
                    -	ศูนย์พัทลุง บนพื้นที่ 200 ไร่<br>
                    -	ศูนย์รัตภูมิ บนพื้นที่ 9 ไร่<br>
                    -	ศูนย์บ่อล้อ บนพื้นที่ 19 ไร่<br>
                    -	เปิดแปลงทดสอบสายพันธุ์ ศูนย์นครนายก บนพื้นที่ 1600 ไร่<br>
                    </div>
                </li>
                <li class="active">
                    <i class="fas fa-circle"></i>
                    <div class="detail">
                    ศูนย์สตูล บนพื้นที่ 2350 ไร่ 
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('more-script')
@endsection
