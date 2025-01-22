<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        body {
            font-family: 'Times New Roman';
        }

        #map {
            height: 400px;
            width: 450px;
        }

        #map2 {
            height: 400px;
            width: 450px;
        }

        #map3 {
            height: 400px;
            width: 450px;
        }

        #map4 {
            height: 400px;
            width: 450px;
        }

    </style>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Plot Listing HTML5 Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/templatemo-plot-listing.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/owl.css')}}">
    <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                        <img src="{{asset('css/assets/images/logo.png')}}" alt="">
                        </a>

                        <ul class="nav">
                            <li><a href="/">General Indonesia</a></li>
                            <li><a href="/bali">Discover Bali</a></li>
                            <li><a href="/alldata">All Data</a></li>
                            <li><a href="/team" class="active">Our Team</a></li>
                            <li>
                                <div class="main-white-button"><a href="/admin">ADMIN</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container team">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card " style="max-width: 530px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('css/assets/images/1.jpg')}}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ANGGUN OKTAVIANI</h5>
                                        <p class="card-text"><small>0110121108 - Frontend Developer <br> SISTEM
                                                INFORMASI <br></small></p> <br> <i class="fa fa-linkedin"></i> | <i
                                            class="fa fa-github"></i> | <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card " style="max-width: 530px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('css/assets/images/1.jpg')}}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ANISA</h5>
                                        <p class="card-text"><small>0110121108 - Backend Developer <br> SISTEM INFORMASI
                                                <br></small></p> <br> <a href="https://www.linkedin.com/in/inianisa/"><i class="fa fa-linkedin"></a></i>

                                                | <a href="https://github.com/syNisaa/"><i class="fa fa-github"></i></a> 
                                                
                                                | <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card " style="max-width: 530px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('css/assets/images/1.jpg')}}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">INDRIE ANASTASYA</h5>
                                        <p class="card-text"><small>0110121108 - Data Engginer <br> SISTEM
                                                INFORMASI <br></small></p> <br> <i class="fa fa-linkedin"></i> | <i
                                            class="fa fa-github"></i> | <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card " style="max-width: 530px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('css/assets/images/1.jpg')}}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">SALMA SANIYYAH</h5>
                                        <p class="card-text"><small>0110121108 - Frontend Developer <br> SISTEM INFORMASI
                                                <br></small></p> <br> <i class="fa fa-linkedin"><a
                                                href="https://www.linkedin.com/in/inianisa/"></a></i> | <a
                                            href="github.com/syNisaa/"><i class="fa fa-github"></i></a> | <i
                                            class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <!-- Scripts -->
            <script src="{{asset('css/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('css/assets/js/owl-carousel.js')}}"></script>
            <script src="{{asset('css/assets/js/animation.js')}}"></script>
            <script src="{{asset('css/assets/js/imagesloaded.js')}}"></script>
            <script src="{{asset('css/assets/js/custom.js')}}"></script>

</body>

</html>
