<x-dashboard>
    <div class="w-full grid place-items-center">
        <div
            class="w-full sm:max-w-md space-y-4 py-8 mt-12 px-6 bg-slate-900 text-white shadow-md overflow-hidden sm:rounded-lg">
            @if($hostalRoom)
                <h2 class="text-xl">Hostal Name: {{$hostal->name}}</h2>
                <h4>Room No: {{$hostalRoom->room_no}}</h4>
                <h4>Bed No: {{$hostalRoom->bed_no}}</h4>
                <h4>Location: {{$hostal->address}}</h4>
            @else
                <h4>Hostel Room is not yet Allocated</h4>
            @endif
        </div>
        @if($hostalRoom)
            <button
                class="mt-12 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 focus:outline-none dark:focus:ring-orange-800"
                onclick="window.location.href='{{route('student.appeal')}}'">appeal for change of hostal
            </button>
        @endif
    </div>
</x-dashboard>
