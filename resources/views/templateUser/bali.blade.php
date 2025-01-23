<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""></style>

    <style>
        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            line-height: 18px;
            color: #555;
        }
        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        /* 2 */
        .info2 {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info2 h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend2 {
            line-height: 18px;
            color: #555;
        }
        .legend2 i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        /* 3 */
        .info3 {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info3 h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend3 {
            line-height: 18px;
            color: #555;
        }
        .legend3 i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        /* 3 */
        .info4 {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info4 h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend4 {
            line-height: 18px;
            color: #555;
        }
        .legend4 i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }
    </style>

    <style>

        #mapjs1 {
            height: 400px;
            width: 450px;
        }

        #mapjs2 {
            height: 400px;
            width: 450px;
        }

        #mapjs3 {
            height: 400px;
            width: 450px;
        }

        #mapjs4 {
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

    <title>EXPLORE BALI - INDONESIA</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

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
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">General Indonesia</a></li>
                            <li><a href="/bali"  class="active">Discover Bali</a></li>
                            <li><a href="/alldata">All Data</a></li>
                            <li><a href="/team">Our Team</a></li>
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


    <div class="popular-categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-3">

                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/bali.png')}}"
                                                        alt=""></span>
                                                Luas Wilayah Bali
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/kepadatan.png')}}"
                                                        alt=""></span>
                                                Kepadatan Penduduk
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/wisata.png')}}"
                                                        alt=""></span>
                                                Wisata Bali
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/provinsi.png')}}"
                                                        alt=""></span>
                                                Pantai Bali
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-9 align-self-center">
                                    <ul class="nacc">

                                        <!-- Wilayah Bali - mapjs1 -->
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>9 - Wilayah Bali</h4>
                                                                <p>Bali memiliki 9 wilayah yang memikat. Denpasar, pusat budaya modern; Badung, surga pantai; Gianyar, seni dan tradisi; Tabanan, sawah dan pura indah; Bangli, Danau Batur nan damai; Karangasem, Gunung Agung megah; Klungkung, sejarah Bali; Buleleng, pantai utara eksotis; dan Jembrana, pesona alam liar.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center container">
                                                            <div class="right-image map" id="mapjs1">                
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>

                                        <!-- Kepadatan -->
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Luas <sup>vs</sup> Populasi</h4>
                                                                <p>Bali memiliki kepadatan penduduk rata-rata sekitar 750-850 jiwa/km². Wilayah paling padat adalah Denpasar, dengan kepadatan hingga 6000 jiwa/km², karena menjadi pusat ekonomi dan budaya. Sementara itu, Bangli dan Jembrana lebih jarang penduduk, sekitar 200-400 jiwa/km², karena banyak area pegunungan dan hutan. </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image" id="mapjs2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Wisata -->
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Bali: Harmoni Alam dan Budaya</h4>
                                                                <p>Balimenawarkan keindahan wisata yang memadukan pantai menawan, sawah hijau, dan pura megah. Kekayaan budaya, tarian, dan tradisi adat melengkapi pesona alamnya, menjadikan Bali destinasi impian yang memikat hati wisatawan.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image" id="mapjs3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <!-- Pantai -->
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Pantai Bali: Destinasi Tropis dengan Pesona Abadi</h4>
                                                                <p>Setiap pantai memiliki karakter unik yang memikat wisatawan. Kejernihan air laut, pemandangan matahari terbenam, dan keramahan budaya lokal menjadikan pantai-pantai di Bali destinasi tropis yang selalu dikenang. Baik untuk berselancar, snorkeling, atau sekadar bersantai, pesona abadi pantai Bali selalu memanjakan siapa saja yang datang.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image" id="mapjs4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mapjs1 -> LuasWilayah -->
    <script> 
        const dataBali = @json($list_bali);
    </script>
    
    @include('templateUSer.jspantai');
    @include('templateUSer.jswisata');
    @include('templateUSer.jskepadatan');
    @include('templateUSer.jswilayah');

    <!-- Mapjs2 -> Kepadatan -->

    <!-- Mapjs3 -> Wisata -->

    <!-- Scripts -->
    <script src="{{asset('css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('css/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('css/assets/js/animation.js')}}"></script>
    <script src="{{asset('css/assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('css/assets/js/custom.js')}}"></script>

</body>

</html>
