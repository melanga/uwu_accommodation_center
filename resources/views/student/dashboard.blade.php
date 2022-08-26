<h1>Hello {{$student->first_name}}</h1>
@if($hostalRoom)
    <h2>Hostal Name: {{$hostalRoom->hostal->name}}</h2>
    <h4>Room No: {{$hostalRoom->room_no}}</h4>
    <h4>Bed No: {{$hostalRoom->bed_no}}</h4>
    <h4>Location: {{$hostalRoom->hostal->address}}</h4>
@else
    <h4>Hostal Room is not yet Allocated</h4>
@endif

