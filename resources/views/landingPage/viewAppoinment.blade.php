<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="landingPage/css/linearicons.css">
    <link rel="stylesheet" href="landingPage/css/owl.carousel.css">
    <link rel="stylesheet" href="landingPage/css/themify-icons.css">
    <link rel="stylesheet" href="landingPage/css/font-awesome.min.css">
    <link rel="stylesheet" href="landingPage/css/nice-select.css">
    <link rel="stylesheet" href="landingPage/css/nouislider.min.css">
    <link rel="stylesheet" href="landingPage/css/bootstrap.css">
    <link rel="stylesheet" href="landingPage/css/main.css">

    <!-- start calender cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />


    <!-- end calender cdn links -->
</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-controll" id="docName">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item "><a class="nav-link" href="/viewCatergoryHome">Product Catergory</a>

                            <li class="nav-item "><a class="nav-link" href="/viewUserPrescription">Prescription</a></li>
                            <li class="nav-item "><a class="nav-link" href="/viewDoctor">Our Doctors</a></li>
                            <li class="nav-item active"><a class="nav-link" href="viewAppoinment">Appoinment</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                            <li class="nav-item"> @if (Route::has('login'))

                                @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>

                                @endauth

                                @endif</li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Contact Us</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Contact</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap_bottom">
        <div class="container">
            <br>
            <!-- Signup modal content -->
            <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="text-center mt-2 mb-4">
                                <a href="index.html" class="text-success">
                                    <span><img class="mr-2" src="../assets/images/logo-icon.png" alt="" height="18"><img
                                            src="../assets/images/logo-text.png" alt="" height="18"></span>
                                </a>
                            </div>

                            <form class="pl-3 pr-3" action="{{ url ('makeAppointment')}}" method="POST">
                                @csrf


                                <div class="form-group">
                                    <label for="docName">Doctor Name</label>
                                    <select name="docName" id="docName" class="custom-select" required>
                                        <option value="">--Select Doctor Name--</option>

                                       @foreach($joins as $join)                                            
                                            <option value="{{$join->id}}">{{$join->docName}}</option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="pName">Patient Name</label>
                                    <input class="form-control" type="text" id="pName" name="pName" required
                                        placeholder="Enter Your Name">
                                </div>

                                <div class="form-group">
                                    <label for="pAge">Patient age</label>
                                    <input class="form-control" type="text" id="pAge" name="pAge" required
                                        placeholder="Enter Your Age">
                                </div>
                                
                                <div class="form-group">
                                    <label for="pMobile">Patient TelPhone Number</label>
                                    <input class="form-control" type="text" id="pMobile" name="pMobile" required
                                        placeholder="Enter Your Mobile/Home TelePhone Number">
                                </div>
                                
                                <div class="form-group">
                                    <label for="pAddress">Patient Address</label>
                                    <input class="form-control" type="text" id="pAddress" name="pAddress" required
                                        placeholder="Enter Your Address">
                                </div>
                                
                                <div class="form-group">
                                    <label for="pGender">Patient Gender</label>
                                    <select name="pGender" id="pGender" class="custom-select">
                                        <option value="">-- Select Your Gender --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="pStatus">Patient  Status</label>
                                    <select name="pStatus" id="pStatus" class="custom-select">
                                        <option value="">-- Select Your Status</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="appointmentDate">Select Appointment Date  </label>
                                    <input class="form-control" type="date" id="appointmentDate" name="appointmentDate" required
                                        >
                                </div>

                                
                                <div class="form-group">
                                    <label for="appointmentTime">Select Appointment Time  </label>
                                    <input class="form-control" type="time" id="appointmentTime" name="appointmentTime" required
                                       >
                                </div>



                                <div class="form-group text-center">
                                    <button class="btn btn-primary" type="submit">Make An Appointment</button>
                                </div>

                            </form>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="btn-list">
                <!-- Custom width modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup-modal">Make An Appointment</button>

            </div>
            <br>
            <div id="calender">

            </div>

        </div>
    </section>
    <!--================Contact Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->


    <script src="landingPage/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="landingPage/js/vendor/bootstrap.min.js"></script>
    <script src="landingPage/js/jquery.ajaxchimp.min.js"></script>
    <script src="landingPage/js/jquery.nice-select.min.js"></script>
    <script src="landingPage/js/jquery.sticky.js"></script>
    <script src="landingPage/js/nouislider.min.js"></script>
    <script src="landingPage/js/jquery.magnific-popup.min.js"></script>
    <script src="landingPage/js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="landingPage/js/gmaps.min.js"></script>
    <script src="landingPage/js/main.js"></script>

    <!-- Calender js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var booking = @json($events);
            $('#calender').fullCalendar({
                header: {
                    left: 'prev, next, today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
                events: booking,
                
            });
        
            $('.fc-event').css('font-size','20px');    
            $('.fc-event').css('color','white');    
         
            
        });

    </script>


    <!-- end calender js -->
</body>

</html>
