<x-dashboard>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Hostel Details</h2>
    @include('partials._search', ['route' => route('warden.dashboard'), 'text'=>"Search Hostels"])
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
        @if($hostels)
            <table class="w-full text-left text-gray-500">
                <thead class="text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">Hostel</th>
                    <th scope="col" class="py-3 px-6">address</th>
                    <th scope="col" class="py-3 px-6">room count</th>
                    <th scope="col" class="py-3 px-6">room capacity</th>
                    <th scope="col" class="py-3 px-6">total capacity</th>
                    <th scope="col" class="py-3 px-6">occupants</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hostels as $hostel)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6">{{$hostel->name}}</td>
                        <td class="py-4 px-6">{{$hostel->address}}</td>
                        <td class="py-4 px-6">{{$hostel->room_count}}</td>
                        <td class="py-4 px-6">{{$hostel->room_capacity}}</td>
                        <td class="py-4 px-6">{{$hostel->room_capacity * $hostel->room_count}}</td>
                        <td class="py-4 px-6">{{$hostel->getHostelOccupantCount()}}</td>
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
