<x-dashboard>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Hostal Details</h2>
    @include('partials._search', ['route' => route('warden.dashboard'), 'text'=>"Search Hostals"])
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
</x-dashboard>
