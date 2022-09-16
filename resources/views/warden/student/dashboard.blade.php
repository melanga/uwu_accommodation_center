<x-dashboard>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Student Details</h2>
    @include('partials._search', ['route' => route('warden.dashboard.student'), 'text'=>"Search Students"])
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
        @if($hostelRooms && $hostelRooms->count() > 0)
            <table class="w-full text-left text-gray-500">
                <thead class="text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">email</th>
                    <th scope="col" class="py-3 px-6">Hostel</th>
                    <th scope="col" class="py-3 px-6">Room no</th>
                    <th scope="col" class="py-3 px-6">Bed no</th>
                    <th scope="col" class="py-3 px-6">Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hostelRooms as $hostelRoom)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6">{{$hostelRoom->student_email}}</td>
                        <td class="py-4 px-6">{{$hostelRoom->hostel->name}}</td>
                        <td class="py-4 px-6">{{$hostelRoom->room_no}}</td>
                        <td class="py-4 px-6">{{$hostelRoom->bed_no}}</td>
                        <td class="py-4 px-6">{{$hostelRoom->getStudent() == null ? "unregistered" : $hostelRoom->getStudent()->first_name . " " . $hostelRoom->getStudent()->last_name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="mt-6 p-4">
        {{$hostels->links()}}
    </div>
</x-dashboard>
