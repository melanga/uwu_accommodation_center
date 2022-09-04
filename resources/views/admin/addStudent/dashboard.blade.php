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
                    <th scope="col" class="py-3 px-6">hostal</th>
                    <th scope="col" class="py-3 px-6">room no</th>
                    <th scope="col" class="py-3 px-6">bed no</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-4 px-6">{{$student->reg_no}}</td>
                        <td class="py-4 px-6">{{$student->first_name}} {{$student->last_name}}</td>
                        <td class="py-4 px-6">{{$student->gender}}</td>
                        <td class="py-4 px-6">{{$student->year}}</td>
                        <td class="py-4 px-6">{{$student->hostel}}</td>
                        <td class="py-4 px-6">{{$student->room_no}}</td>
                        <td class="py-4 px-6">{{$student->bed_no}}</td>
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
            {{--            <div class="heading_container heading_center">--}}
            {{--                <h2>--}}
            {{--                    Hostel Information--}}
            {{--                </h2>--}}
            {{--                <p>--}}
            {{--                    for students of Uva wellassa university--}}
            {{--                <p>--}}
            {{--            </div>--}}

            {{--            <div class="justify-content-md-center ">--}}
            {{--                <div class="container-student col-md-12 bg-secondary ">--}}
            {{--                    <!--Div 1 started-->--}}
            {{--                    <div class="row">--}}


            {{--                        <!-- DropDown Started -->--}}

            {{--                        <div class="col">--}}
            {{--                            <div class="dropdown">--}}
            {{--                                <br>--}}
            {{--                                <button class="btn btn-light dropdown-toggle" href="#" role="button"--}}
            {{--                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"--}}
            {{--                                        aria-expanded="false">--}}
            {{--                                    Hostel Name--}}
            {{--                                </button>--}}

            {{--                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
            {{--                                    <a class="dropdown-item" href="#">Blueapphire</a>--}}
            {{--                                    <a class="dropdown-item" href="#">Catelia</a>--}}
            {{--                                    <a class="dropdown-item" href="#">Kedella</a>--}}
            {{--                                </div>--}}

            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <!-- DropDown End -->--}}

            {{--                        <!-- form-check started -->--}}
            {{--                        <div class="col">--}}

            {{--                        </div>--}}
            {{--                        <!-- form-check End -->--}}
            {{--                        <div class="col"></div>--}}
            {{--                        <div class="col"></div>--}}
            {{--                        <div class="col"></div>--}}

            {{--                        <div class="col">--}}
            {{--                            <div class="form-check">--}}
            {{--                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
            {{--                                <label class="form-check-label" for="flexCheckDefault">--}}
            {{--                                    Available--}}
            {{--                                </label>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                    </div>--}}
            {{--                    <!--Div 1 end-->--}}

            {{--                    <!--table div started-->--}}
            {{--                    <div>--}}
            {{--                        <br><br>--}}
            {{--                        <table class="table table-bordered table-hover table-secondary ">--}}

            {{--                            <td class="table-active">Reg No.</td>--}}
            {{--                            <td class="table-active">Name</td>--}}
            {{--                            <td class="table-active">Gender</td>--}}
            {{--                            <td class="table-active">Year</td>--}}
            {{--                            <td class="table-active">Hostel</td>--}}
            {{--                            <td class="table-active">Room No</td>--}}
            {{--                            <td class="table-active">Bed No</td>--}}


            {{--                            @foreach ($students as $student)--}}
            {{--                                <tr>--}}
            {{--                                    <td>{{$student->reg_no}}</td>--}}
            {{--                                    <td>{{$student->first_name}} {{$student->last_name}}</td>--}}
            {{--                                    <td>{{$student->gender}}</td>--}}
            {{--                                    <td>{{$student->year}} Year</td>--}}
            {{--                                    <td>{{$student->hostel}}</td>--}}
            {{--                                    <td>{{$student->room_no}}</td>--}}
            {{--                                    <td>{{$student->bed_no}}</td>--}}
            {{--                                </tr>--}}

            {{--                            @endforeach--}}


            {{--                        </table>--}}
            {{--                    </div>--}}
            {{--                    <!--table div end-->--}}

            {{--                    <div>--}}
            {{--                        <div class="container container-student col-md-6 bg-dark">--}}


            {{--                            <div class="row">--}}
            {{--                                <div class="col">--}}
            {{--                                    Total Students: {{count($students)}}--}}
            {{--                                </div>--}}
            {{--                                --}}{{-- <div class="col">--}}
            {{--                                  Assigned:{{count($students)}}--}}
            {{--                                </div> --}}
            {{--                                <div class="col">--}}

            {{--                                </div>--}}
            {{--                                <div class="col">--}}

            {{--                                </div>--}}
            {{--                                <div class="col">--}}

            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                </div>--}}
            {{--            </div>--}}
            {{--            file upload eror--}}
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
            <div class="user_option appealbutton">
                <form method="POST" action="{{route('admin.dashboard.import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload only .csv</label>
                        <input type="file" name="student_file" class="form-control-file" accept=".csv,.xlsx,.xls"
                               id="exampleFormControlFile1" required>
                    </div>
                    <button type="submit" class="order_online">Add Students</button>
                </form>

                {{-- <a href="" class="order_online">
                   ADD STUDENTS
                 </a> --}}
            </div>
        </div>
    </section>
</x-dashboard>
