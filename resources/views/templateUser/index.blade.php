<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        body{
            font-family:'Times New Roman';
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
                        <a href="index.html" class="logo"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active">General Indonesia</a></li>
                            <li><a href="/bali">Discover Bali</a></li>
                            <li><a href="listing.html">All Data</a></li>
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
                                                        src="{{asset('css/assets/images/search-icon-02.png')}}"
                                                        alt=""></span>
                                                Provinsi
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/search-icon-03.png')}}"
                                                        alt=""></span>
                                                <!-- Bahasa Daerah, Makanan Daerah Penduduk-->
                                                Gempa Bumi
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/search-icon-04.png')}}"
                                                        alt=""></span>
                                                ---
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/search-icon-05.png')}}"
                                                        alt=""></span>
                                                Traveling
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 align-self-center">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>38 - Provinsi Di Indonesia </h4>
                                                                <p>You can feel free to download, edit and apply this
                                                                    template for your website. Please tell your friends
                                                                    about TemplateMo website.</p>
                                                                <div class="main-white-button"><a
                                                                        href="/exploreProvinsi"><i
                                                                            class="fa fa-eye"></i> Explore More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center container">
                                                            <div class="right-image map" id="map">
                                                                <script>
                                                                    var map2 = L.map('map').setView([-
                                                                        0.3155398750904368,
                                                                        117.1371634207888
                                                                    ], 4);
                                                                    L.tileLayer(
                                                                        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                                            maxZoom: 10,
                                                                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                                                        }).addTo(map2);

                                                                    var provinces = @json($list_provinsi);
                                                                    console.log(provinces);
                                                                    provinces.forEach(function (province) {
                                                                        var marker = L.marker([province
                                                                            .latitude, province
                                                                            .longitude
                                                                        ]).addTo(map2);
                                                                        marker.bindPopup(province.name);
                                                                    });

                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Bencana Alam - Gempa Bumi</h4>
                                                                <p>Plot Listing is a responsive Bootstrap 5 website
                                                                    template that included 4 different HTML pages. This
                                                                    template is provided by TemplateMo website. You can
                                                                    apply this layout for your static or dynamic CMS
                                                                    websites.</p>
                                                                <div class="main-white-button"><a href="#"><i
                                                                            class="fa fa-eye"></i> Discover More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image" id="map2">
                                                                <script>
                                                                    var map = L.map('map2').setView([-
                                                                        0.3155398750904368,
                                                                        117.1371634207888
                                                                    ], 5);
                                                                    L.tileLayer(
                                                                        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                                            maxZoom: 5,
                                                                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                                                        }).addTo(map);

                                                                    let datas = {!!file_get_contents("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json") !!}
                                                                    console.log(datas);

                                                                    let gempas = datas.Infogempa.gempa;
                                                                    let number = 1;
                                                                    gempas.forEach(gempa => {
                                                                        let koordinat = gempa.Coordinates.split(
                                                                            ",");
                                                                        let _lat = koordinat[0];
                                                                        let _lon = koordinat[1];
                                                                        let marker = L.marker([_lat, _lon])
                                                                            .addTo(map);

                                                                        marker.bindPopup(" Wilayah : " + gempa
                                                                            .Wilayah + "<br>Waktu : " +
                                                                            gempa.Tanggal + "<br> Jam :" +
                                                                            gempa.Jam +
                                                                            "<br> Kedalaman Pergeseran : " +
                                                                            gempa.Kedalaman +
                                                                            "<br> Lintang Wilayah : " +
                                                                            gempa.Lintang +
                                                                            "<br> Potensi : " + gempa
                                                                            .Potensi +
                                                                            "<br><b> Magnitudo : " + gempa
                                                                            .Magnitude);
                                                                    });

                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Gunung Berapi Aktif Di Indonesia</h4>
                                                                <p>Did you know? You can get the best free HTML
                                                                    templates on Too CSS blog. Visit the blog pages and
                                                                    explore fresh and latest website templates.</p>
                                                                <div class="main-white-button"><a href="listing.html"><i
                                                                            class="fa fa-eye"></i> More Listing</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image map" id="map3">
                                                                <script>
                                                                    var map3 = L.map('map3').setView([-7.2399502,111.6459185
                                                                    ], 7);
                                                                    L.tileLayer(
                                                                        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                                            maxZoom: 15,
                                                                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                                                        }).addTo(map3);

                                                                    var gunung = @json($list_gunung);
                                                                    console.log(gunung);
                                                                    gunung.forEach(function (gunung) {
                                                                        var circle = L.circle([gunung.latitude,gunung.longitude], {
                                                                            color: 'red',
                                                                            fillColor: '#f03',
                                                                            fillOpacity: 0.5,
                                                                            radius: 7000
                                                                        }).addTo(map3);
                                                                        // var marker = L.marker([gunung.latitude,gunung.longitude]).addTo(map3);
                                                                        circle.bindPopup(" <b>Gunung  " +gunung.nama + "</b><br> Tinggi Gunung : " +gunung.tinggi_meter + " Meter <br> Estimasi Letusan Terakhir : " +gunung.estimasi_letusan_terakhir);
                                                                    });

                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-5 align-self-center">
                                                    <div class="left-text">
                                                        <h4>17 - Bandara Di Indonesia</h4>
                                                        <p>Image credits go to Unsplash website that provides free stock photos for anyone. Images used in this Plot Listing template are from Unsplash.</p>
                                                        <div class="main-white-button"><a href="#"><i class="fa fa-eye"></i> Discover More</a></div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                            <div class="right-image map" id="map4">
                                                                <script>
                                                                    var map4 = L.map('map4').setView([-4.4700565,109.0664455
                                                                    ], 6);
                                                                    L.tileLayer(
                                                                        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                                            maxZoom: 15,
                                                                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                                                        }).addTo(map4);

                                                                    var bandara = @json($list_bandara);
                                                                    console.log(bandara);
                                                                    bandara.forEach(function (bandara) {
                                                                        var circle2 = L.circle([bandara.latitude,bandara.longitude], {
                                                                            color: 'blue',
                                                                            fillColor: '#b1b1fc',
                                                                            fillOpacity: 0.5,
                                                                            radius: 15000
                                                                        }).addTo(map4);
                                                                        // var marker = L.marker([bandara.latitude,bandara.longitude]).addTo(map4);
                                                                        circle2.bindPopup(" <b>Bandara  " +bandara.nama + "</b><br> Provinsi: " +bandara.provinsi );
                                                                    });

                                                                </script>
                                                            </div>
                                                            </div>
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



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="{{asset('css/assets/images/black-logo.png')}}" alt="Plot Listing">
                        </div>
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing"
                                target="_parent">Plot Listing template</a> is useful for your website, please <a
                                rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a
                            little via PayPal.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-us">
                        <h4>Contact Us</h4>
                        <p>27th Street of New Town, Digital Villa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#">010-020-0340</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#">090-080-0760</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
                            <br>
                            Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{asset('css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('css/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('css/assets/js/animation.js')}}"></script>
    <script src="{{asset('css/assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('css/assets/js/custom.js')}}"></script>

</body>

</html>
