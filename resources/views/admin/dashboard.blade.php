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
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
                        @if($hostels)
                            <table class="w-full text-left text-gray-500">
                                <thead class="text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 px-6">Hostel</th>
                                    <th scope="col" class="py-3 px-6">Room no</th>
                                    <th scope="col" class="py-3 px-6">Bed no</th>
                                    <th scope="col" class="py-3 px-6">First Name</th>
                                    <th scope="col" class="py-3 px-6">Last Name</th>
                                    <th scope="col" class="py-3 px-6">email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hostels as $hostel)
                                    @foreach($hostel->hostelRooms as $hostelRoom)
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="py-4 px-6">{{$hostel->name}}</td>
                                            <td class="py-4 px-6">{{$hostelRoom->room_no}}</td>
                                            <td class="py-4 px-6">{{$hostelRoom->bed_no}}</td>
                                            <td class="py-4 px-6">{{$hostelRoom->student->first_name}}</td>
                                            <td class="py-4 px-6">{{$hostelRoom->student->last_name}}</td>
                                            <td class="py-4 px-6">{{$hostelRoom->student->email}}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
