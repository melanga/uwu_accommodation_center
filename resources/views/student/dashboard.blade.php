<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{--            {{ __('Dashboard') }}--}}
            @if(Auth::user()->role == 'student')
                Student Dashboard
            @elseif(Auth::user()->role == 'warden')
                Warden Dashboard
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
            </div>
        </div>
    </div>
</x-app-layout>
