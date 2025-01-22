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

    <title>EXPLORE INDONESIA - BALI</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/templatemo-plot-listing.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/owl.css')}}">

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
                            <li><a href="/" class="active">General Indonesia</a></li>
                            <li><a href="/bali">Discover Bali</a></li>
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
                                                        src="{{asset('css/assets/images/provinsi.png')}}"
                                                        alt=""></span>
                                                Provinsi
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/gempa.png')}}"
                                                        alt=""></span>
                                                Gempa Bumi
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/gunung.png')}}"
                                                        alt=""></span>
                                                Gunung Berapi Indonesia
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{asset('css/assets/images/bandara.png')}}"
                                                        alt=""></span>
                                                Bandara Internasional
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
                                                                <p>Indonesia terdiri dari 38 provinsi yang membentang dari Sabang hingga Merauke, mencakup keindahan alam dan kekayaan sumber daya.</p>
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
                                                                        marker.bindPopup("<b>" + province.name + "</b><br> Luas Provinsi :" + province.luas + "<br> Jumlah Penduduk Provinsi :" + province.populasi + "<br> Kepdatan /km Provinsi :" + province.kepadatan + "<br> Penduduk Perempuan :" + province.jumlah_perempuan+ "<br> Penduduk Laki Laki:" + province.jumlah_pria);
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
                                                                <h4>Bencana Alam -15 Gempa Bumi</h4>
                                                                <p>Gempa bumi merupakan bencana alam yang sering terjadi di Indonesia, berikut 15 data gempa bumi 1 tahun terakhir <br><b><small>Source : https://github.com/infoBMKG</small></b></p>
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
                                                                <h4>99 - Gunung Berapi Aktif Di Indonesia</h4>
                                                                <p>Indonesia memiliki 99 gunung berapi aktif yang menjadi bagian dari Cincin Api Pasifik, menawarkan keindahan sekaligus tantangan alam. Menurut data, gunung berapi ini tersebar banyak dipulau jawa dan sumatra</p>
                                                                
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
                                                        <h4>17 - Bandara Internasional Di Indonesia</h4>
                                                        <p>Indonesia memiliki 17 bandara internasional yang tersebar di berbagai wilayah, berperan sebagai pintu gerbang utama bagi wisatawan dan pelaku bisnis dari dalam maupun luar negeri. Bandara-bandara ini mendukung mobilitas, pariwisata, dan pertumbuhan ekonomi di nusantara.</p>
                                                        
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
        <div class="col-lg-12">
            <div class="sub-footer">
                <p>STT NF - SISTEM INFORMASI GEOGRAFIS - UAS 2025 <br> Design by: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a>
                </p>
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
