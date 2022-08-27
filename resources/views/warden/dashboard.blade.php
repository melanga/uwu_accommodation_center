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
                    <h2>Welcome to warden dashboard {{Auth::user()->first_name}}.</h2>
                    {{--                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">--}}
                    {{--                        @if($hostals)--}}
                    {{--                            <table class="w-full text-left text-gray-500">--}}
                    {{--                                <thead class="text-gray-700 uppercase bg-gray-50">--}}
                    {{--                                <tr>--}}
                    {{--                                    <th scope="col" class="py-3 px-6">Hostal</th>--}}
                    {{--                                    <th scope="col" class="py-3 px-6">Room no</th>--}}
                    {{--                                    <th scope="col" class="py-3 px-6">Bed no</th>--}}
                    {{--                                    <th scope="col" class="py-3 px-6">First Name</th>--}}
                    {{--                                    <th scope="col" class="py-3 px-6">Last Name</th>--}}
                    {{--                                    <th scope="col" class="py-3 px-6">email</th>--}}
                    {{--                                </tr>--}}
                    {{--                                </thead>--}}
                    {{--                                <tbody>--}}
                    {{--                                @foreach($hostals as $hostal)--}}
                    {{--                                    @if(! $hostal->hostalRooms->isEmpty())--}}
                    {{--                                        @foreach($hostal->hostalRooms as $hostalRoom)--}}
                    {{--                                            <tr class="bg-white border-b hover:bg-gray-50">--}}
                    {{--                                                <td class="py-4 px-6">{{$hostal->name}}</td>--}}
                    {{--                                                <td class="py-4 px-6">{{$hostalRoom->room_no}}</td>--}}
                    {{--                                                <td class="py-4 px-6">{{$hostalRoom->bed_no}}</td>--}}
                    {{--                                                <td class="py-4 px-6">{{$hostalRoom->student->first_name}}</td>--}}
                    {{--                                                <td class="py-4 px-6">{{$hostalRoom->student->last_name}}</td>--}}
                    {{--                                                <td class="py-4 px-6">{{$hostalRoom->student->email}}</td>--}}
                    {{--                                            </tr>--}}
                    {{--                                        @endforeach--}}
                    {{--                                    @else--}}
                    {{--                                        <tr class="bg-white border-b hover:bg-gray-50">--}}
                    {{--                                            <td class="py-4 px-6">{{$hostal->name}}</td>--}}
                    {{--                                            <td class="py-4 px-6">{{__("non_allocated")}}</td>--}}
                    {{--                                            <td class="py-4 px-6">{{__("non_allocated")}}</td>--}}
                    {{--                                            <td class="py-4 px-6">{{__("non_allocated")}}</td>--}}
                    {{--                                            <td class="py-4 px-6">{{__("non_allocated")}}</td>--}}
                    {{--                                            <td class="py-4 px-6">{{__("non_allocated")}}</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                    @endif--}}
                    {{--                                @endforeach--}}
                    {{--                                </tbody>--}}
                    {{--                            </table>--}}
                    {{--                        @endif--}}
                    {{--                    </div>--}}
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
                        @if($hostals)
                            <table class="w-full text-left text-gray-500">
                                <thead class="text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 px-6">Hostal</th>
                                    <th scope="col" class="py-3 px-6">address</th>
                                    <th scope="col" class="py-3 px-6">room count</th>
                                    <th scope="col" class="py-3 px-6">room capacity</th>
                                    <th scope="col" class="py-3 px-6">total capacity</th>
                                    <th scope="col" class="py-3 px-6">occupants</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hostals as $hostal)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="py-4 px-6">{{$hostal->name}}</td>
                                        <td class="py-4 px-6">{{$hostal->address}}</td>
                                        <td class="py-4 px-6">{{$hostal->room_count}}</td>
                                        <td class="py-4 px-6">{{$hostal->room_capacity}}</td>
                                        <td class="py-4 px-6">{{$hostal->room_capacity * $hostal->room_count}}</td>
                                        <td class="py-4 px-6">{{$hostal->hostalRooms->count()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="mt-6 p-4">
                        {{$hostals->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
