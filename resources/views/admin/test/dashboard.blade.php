<x-dashboard>
    {{--    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Student Details</h2>--}}
    {{--    @include('partials._search', ['route' => route('warden.dashboard.student'), 'text'=>"Search Students"])--}}
    {{--    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">--}}
    {{--        @if($hostalRooms)--}}
    {{--            <table class="w-full text-left text-gray-500">--}}
    {{--                <thead class="text-gray-700 uppercase bg-gray-50">--}}
    {{--                <tr>--}}
    {{--                    <th scope="col" class="py-3 px-6">Hostal</th>--}}
    {{--                    <th scope="col" class="py-3 px-6">Room no</th>--}}
    {{--                    <th scope="col" class="py-3 px-6">Bed no</th>--}}
    {{--                    <th scope="col" class="py-3 px-6">First Name</th>--}}
    {{--                    <th scope="col" class="py-3 px-6">Last Name</th>--}}
    {{--                    <th scope="col" class="py-3 px-6">email</th>--}}
    {{--                </tr>--}}
    {{--                </thead>--}}
    {{--                <tbody>--}}
    {{--                @foreach($hostalRooms as $hostalRoom)--}}
    {{--                    <tr class="bg-white border-b hover:bg-gray-50">--}}
    {{--                        <td class="py-4 px-6">{{$hostalRoom->hostal->name}}</td>--}}
    {{--                        <td class="py-4 px-6">{{$hostalRoom->room_no}}</td>--}}
    {{--                        <td class="py-4 px-6">{{$hostalRoom->bed_no}}</td>--}}
    {{--                        <td class="py-4 px-6">{{$hostalRoom->student->first_name}}</td>--}}
    {{--                        <td class="py-4 px-6">{{$hostalRoom->student->last_name}}</td>--}}
    {{--                        <td class="py-4 px-6">{{$hostalRoom->student->email}}</td>--}}
    {{--                    </tr>--}}
    {{--                @endforeach--}}
    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--        @endif--}}
    {{--    </div>--}}
    {{--    <div class="mt-6 p-4">--}}
    {{--        {{$hostals->links()}}--}}
    {{--    </div>--}}
</x-dashboard>
