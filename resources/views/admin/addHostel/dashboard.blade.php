<x-dashboard>
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Site Metas -->
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <link rel="shortcut icon" href="images/unilogoheader.png" type="">

        <title> Hostel Management System of UWU </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
              integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
              crossorigin="anonymous">
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

        <!--owl slider stylesheet -->
        <link rel="stylesheet" type="text/css"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <!-- nice select  -->
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
              integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
              crossorigin="anonymous"/>
        <!-- font awesome style -->
        <link href="css/font-awesome.min.css" rel="stylesheet"/>

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet"/>
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet"/>

    </head>

    <body class="sub_page">
    <section class="layout_padding ">
        <div class="container">
            <div class="heading_container heading_center ">
                <h2>
                    Add New Hostel
                </h2>
                <p>
                    for students of Uva wellassa university
                <p>
            </div>

            <div class="justify-content-md-center ">
                <div class="container-student col-md-12 bg-light text-secondary border border-secondary ">


                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif


                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                    @endif

                    <!--table div started-->
                    <div>
                        <br><br>

                        <form class="was-validated" action="{{route('admin.dashboard.addHostal.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Hostel Name</label>
                                <textarea class="form-control is-invalid " id="hostelName" name="hostel_name"
                                          placeholder="Enter the hostel name " required></textarea>
                                <div class="invalid-feedback">

                                </div>
                            </div>

                            <div class="mb-3 ">
                                <br>
                                <div class="row ">
                                    <div class="col ">
                                        <label for="validationTextarea" class="form-label">Hostel Type</label>
                                    </div>

                                    <div class="col">
                                        <div>
                                            <input class="form-check-input" type="radio" name="type" id="radioNoLabel1"
                                                   value="male" aria-label="..." required>
                                            <label for="validationTextarea" class="form-label">Boys</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <input class="form-check-input " type="radio" name="type" id="radioNoLabel1"
                                                   value="female" aria-label="..." required>
                                            <label for="validationTextarea" class="form-label">Girls</label>
                                        </div>
                                    </div>

                                    <div class="col"></div>
                                </div>
                            </div>

                            <div class="mb-3 ">
                                <br>
                                <div class="row ">
                                    <div class="col ">
                                        <label for="validationTextarea" class="form-label">Hostel Level</label>
                                    </div>

                                    <div class="col">
                                        <div>
                                            <input class="form-check-input" type="radio" name="level" id="radioNoLabel1"
                                                   value="100" aria-label="..." required>
                                            <label for="validationTextarea" class="form-label">100 Level</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <input class="form-check-input " type="radio" name="level"
                                                   id="radioNoLabel1" value="200" aria-label="..." required>
                                            <label for="validationTextarea" class="form-label">200 Level</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div>
                                            <input class="form-check-input " type="radio" name="level"
                                                   id="radioNoLabel1" value="300" aria-label="..." required>
                                            <label for="validationTextarea" class="form-label">300 Level</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <input class="form-check-input " type="radio" name="level"
                                                   id="radioNoLabel1" value="400" aria-label="..." required>
                                            <label for="validationTextarea" class="form-label">400 Level</label>
                                        </div>
                                    </div>

                                    <div class="col"></div>
                                </div>
                            </div>

                            <!-- Example single danger button -->

                            <div class="mb-3">

                                <label for="validationTextarea" class="form-label">No. of Rooms of the Hostel</label>
                                <input type="number" id="roomCount" name="no_room" class="form-control is-invalid"
                                       placeholder="Enter the capacity of the hostel" required/>
                                <div class="invalid-feedback">

                                </div>
                            </div>

                            <div class="mb-3">

                                <label for="validationTextarea" class="form-label">Capacity of a Room</label>
                                <input type="number" id="roomCapacity" name="room_capacity"
                                       class="form-control is-invalid" placeholder="Enter the capacity of the hostel"
                                       required/>
                                <div class="invalid-feedback">

                                </div>

                                <br>
                                <div class="mb-3">
                                    <label for="validationTextarea" class="form-label">Address of the Hostel </label>
                                    <textarea class="form-control is-invalid" name="address" id="address"
                                              placeholder="Enter the address of the hostel " required></textarea>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>

                                {{--                                <div class="mb-3">--}}
                                {{--                                    <label for="validationTextarea" class="form-label">Hostal contact number</label>--}}
                                {{--                                    <input type="tel" id="roomCapacity" name="contact_no"--}}
                                {{--                                           class="form-control is-invalid" placeholder="Enter a 10 digit number"--}}
                                {{--                                           maxlength="10" minlength="10" required/>--}}
                                {{--                                    <div class="invalid-feedback">--}}
                                {{--               <span style="color: red"> @error('contact_no'){{$message}}--}}
                                {{--                   @enderror</span>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                {{-- <div class="mb-3">
                                  <label for="validationTextarea" class="form-label">Hostel Type</label>
                                  <input type="text" id="roomCapacity" name="type" class="form-control is-invalid" placeholder="Enter Male/Female"  required/>
                                  <div class="invalid-feedback">

                                  </div> --}}
                            </div>
                            <br>
                            <div class="mb-3">
                                <button class="btn btn-secondary" type="submit">SUBMIT</button>
                            </div>

                        </form>
                    </div>
                    <!--table div end-->
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_admin">
        <div class="container">

            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By Uva Wellassa University
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    </body>

</x-dashboard>
