<p><b> ได้รับข้อความติดต่อจากคุณ {{$request->name}} </b></p>
{{-- <p><b>{{ 'คุณ '. $request->name .' มีการ contact เข้ามา' }}</b></p> --}}
<br>
<div>ชื่อผู้ติดต่อ : {{ $request->name }} </div>
<div>โทรศัพท์ : {{ $request->phone }}</div>
<div>อีเมล : {{ $request->email }}</div>
<div>หัวข้อ : {{ $request->subject }}</div>
<div>ข้อความ : {{ $request->message }}</div>
