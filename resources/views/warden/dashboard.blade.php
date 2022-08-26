<h2>Welcome to warden dashboard {{Auth::user()->first_name}}.</h2>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
    @if($hostals)
        <table class="w-full text-left text-gray-500">
            <thead class="text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6">Hostal</th>
                <th scope="col" class="py-3 px-6">Room no</th>
                <th scope="col" class="py-3 px-6">Bed no</th>
                <th scope="col" class="py-3 px-6">First Name</th>
                <th scope="col" class="py-3 px-6">Last Name</th>
                <th scope="col" class="py-3 px-6">email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hostals as $hostal)
                @foreach($hostal->hostalRooms as $hostalRoom)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6">{{$hostal->name}}</td>
                        <td class="py-4 px-6">{{$hostalRoom->room_no}}</td>
                        <td class="py-4 px-6">{{$hostalRoom->bed_no}}</td>
                        <td class="py-4 px-6">{{$hostalRoom->student->first_name}}</td>
                        <td class="py-4 px-6">{{$hostalRoom->student->last_name}}</td>
                        <td class="py-4 px-6">{{$hostalRoom->student->email}}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    @endif
</div>
