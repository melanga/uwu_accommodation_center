<!DOCTYPE html>
<html>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>

</head>

<body>

<div class="hero_area">
    <div class="bg-box">
        <img src="images/bg.jpg" alt="uva_wellassa_university.jpg">
    </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container flex justify-content-around">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="/">
            <span>
              <img src="images/unilogo.png" alt="uva_wellassa_university.jpg" class="navbarlogo">
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{--                    <ul class="navbar-nav  mx-auto ">--}}
                    {{--                        <li class="nav-item active">--}}
                    {{--                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a class="nav-link" href="/hostels">Hostels</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a class="nav-link" href="/">About</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a class="nav-link" href="/addStudents">Students</a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    @if(! Auth::user())
                        <div class="user_option">
                            <a href="{{route('login')}}" class="order_online">
                                Log In
                            </a>
                        </div>
                    @else
                        <div class="user_option">
                            <a href="{{route('dashboard')}}" class="order_online">
                                Dashboard
                            </a>
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->

    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Corel Beauty
                                    </h1>
                                    <p>
                                        a Boys hostel with 76 rooms
                                    </p>
                                    {{--                                    <div class="btn-box">--}}
                                    {{--                                        <a href="" class="btn1">--}}
                                    {{--                                            See More...--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Silvertips
                                    </h1>
                                    <p>
                                        a Boys hostel with 54 rooms
                                    </p>
                                    {{--                                    <div class="btn-box">--}}
                                    {{--                                        <a href="" class="btn1">--}}
                                    {{--                                            See More--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Blue Sapphire
                                    </h1>
                                    <p>
                                        a Girls Hostel
                                    </p>
                                    {{--                                    <div class="btn-box">--}}
                                    {{--                                        <a href="" class="btn1">--}}
                                    {{--                                            See More--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Cattleya
                                    </h1>
                                    <p>
                                        a Girls Hostel
                                    </p>
                                    {{--                                    <div class="btn-box">--}}
                                    {{--                                        <a href="" class="btn1">--}}
                                    {{--                                            See more--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                    <li data-target="#customCarousel1" data-slide-to="3"></li>
                </ol>
            </div>
        </div>

    </section>
    <!-- end slider section -->
</div>
<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        Contact Adminstration
                    </h4>
                    <div class="contact_link_box">
                        <i class="fa fa-user-circle-o"></i>
                        <h6>Male -Warden</h6>
                        <a href="tel:123-456-7890">
                            <p class="wardencontact">
                                Name +94 77 34 45 234
                            </p>
                        </a>
                        <h6>Male - Sub Wardens</h6>
                        <a href="tel:123-456-7890">
                            <p class="wardencontact">
                                Name +94 77 34 45 234
                            </p>
                        </a>
                        <a href="tel:123-456-7890">
                            <p class="wardencontact">
                                Name +94 77 34 45 234
                            </p>
                        </a>
                        <i class="fa fa-user-circle-o"></i>
                        <h6>Female - Warden</h6>
                        <a href="tel:123-456-7890">
                            <p class="wardencontact">
                                Name +94 77 34 45 234
                            </p>
                        </a>
                        <h6>Female - Sub Wardens</h6>
                        <a href="tel:123-456-7890">
                            <p class="wardencontact">
                                Name +94 77 34 45 234
                            </p>
                        </a>
                        <a href="tel:123-456-7890">
                            <p class="wardencontact">
                                Name +94 77 34 45 234
                            </p>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="contact_link_box">
                    <a href="" class="footer-logo">
                        <img src="images/unilogo.png" alt="uva_wellassa_university.jpg" class="footerunilogo">
                    </a>
                    <h2>
                        Hostel Management System
                    </h2>
                    <p>
                        This is a catelogue of hostel facilites available at Uva Wellassa University of Srilanka
                    </p>
                    <div class="footer_social">
                        <p>Go to VLE </p>
                        <a href="https://vle.uwu.ac.lk/">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="footer_social">
                        <p>Go to University Website</p>
                        <a href="https://www.uwu.ac.lk/">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h4>
                    Open Hours
                </h4>
                <p>
                    Everyday
                </p>
                <p>
                    For Boys - 06.00 am to 10.00 pm
                </p>
                <p>
                    For Girls - 06.00 am to 07.30 pm
                </p>
            </div>
        </div>
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

</html>
