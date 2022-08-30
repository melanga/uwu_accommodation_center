<x-dashboard>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <h1>Hello {{$student->first_name}}</h1>
        @if($hostalRoom)
            <h2>Hostal Name: {{$hostalRoom->hostal->name}}</h2>
            <h4>Room No: {{$hostalRoom->room_no}}</h4>
            <h4>Bed No: {{$hostalRoom->bed_no}}</h4>
            <h4>Location: {{$hostalRoom->hostal->address}}</h4>
        @else
            <h4>Hostal Room is not yet Allocated</h4>
        @endif
    </div>
    <button
        class="mt-6 text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 focus:outline-none dark:focus:ring-cyan-800"
        onclick="window.location.href='{{route('student.appeal')}}'">appeal for change of hostal
    </button>
</x-dashboard>
