<x-dashboard>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Appeals</h2>
    @include('partials._search', ['route' => route('warden.dashboard'), 'text'=>"Search Hostals"])
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
        @if($appeals)
            <table class="w-full text-left text-gray-500">
                <thead class="text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">Reg No</th>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Hostel</th>
                    <th scope="col" class="py-3 px-6">Message</th>
                    <th scope="col" class="py-3 px-6">Status</th>
                    <th scope="col" class="py-3 px-6">Approve</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appeals as $appeal)
                    <tr class="bg-white border-b {{$appeal->approved ? "bg-green-100" : "bg-red-100"}}">
                        <td class="py-4 px-6">{{$appeal->student->email}}</td>
                        <td class="py-4 px-6">{{$appeal->student->first_name . " " . $appeal->student->last_name}}</td>
                        <td class="py-4 px-6">{{$appeal->hostal->name}}</td>
                        <td class="py-4 px-6">{{$appeal->message}}</td>
                        <td class="py-4 px-6">{{$appeal->approved ? "approved" : "pending"}}</td>
                        <td class="py-4 px-6 align-content-center">
                            @if(! $appeal->approved)
                                <form method="POST"
                                      action="{{route('admin.dashboard.appeal', ["id"=>$appeal->id])}}">
                                    @csrf
                                    <button
                                        class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-2 mb-2"
                                        type="submit">approve
                                    </button>
                                </form>
                            @else
                                approved
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="mt-6 p-4">
        {{$appeals->links()}}
    </div>
</x-dashboard>
