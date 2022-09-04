<x-dashboard>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-6">
        @if($students)
            <table class="w-full text-left text-gray-500">
                <thead class="text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">Reg no</th>
                    <th scope="col" class="py-3 px-6">name</th>
                    <th scope="col" class="py-3 px-6">gender</th>
                    <th scope="col" class="py-3 px-6">year</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6">{{$student->reg_no}}</td>
                        <td class="py-4 px-6">{{$student->first_name}} {{$student->last_name}}</td>
                        <td class="py-4 px-6">{{$student->gender}}</td>
                        <td class="py-4 px-6">{{$student->year}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="mt-6 p-4">
        {{$students->links()}}
    </div>
    <section class="layout_padding">
        <div class="container">
            <div class="text-center">
                @if($errors->any())
                    <br>
                    <h5 style="color: red">File uploaded has some errors</h5>
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li> {{$error}}</li>
                        @endforeach
                    </ol>
                @endif
            </div>
            <div class="flex">
                <form method="POST" action="{{route('admin.dashboard.import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex">
                        <label for="exampleFormControlFile1">Upload only .csv</label>
                        <input type="file" name="student_file" class="form-control-file" accept=".csv,.xlsx,.xls"
                               id="exampleFormControlFile1" required>
                        <button type="submit"
                                class="mt-6 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ">
                            Add Students
                        </button>
                    </div>

                </form>
                <form method="POST" action="{{route('admin.dashboard.assignHostels.assign')}}">
                    @csrf
                    <button type="submit"
                            class="mt-6 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ">
                        Assign to Hostels
                    </button>
                </form>
                <form method="POST" action="{{route('admin.dashboard.assignHostels.deleteStudents')}}">
                    @csrf
                    <button type="submit"
                            class="mt-6 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ">
                        Delete All Students
                    </button>
                </form>
                <form method="POST" action="{{route('admin.dashboard.assignHostels.clear')}}">
                    @csrf
                    <button type="submit"
                            class="mt-6 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ">
                        Unassign All Students Hostels
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-dashboard>
