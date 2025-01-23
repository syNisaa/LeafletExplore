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

    <title>EXPLORE Bali - Data </title>

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
                            <li><a href="/alldata"  class="active">All Data</a></li>
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
<body>
<div class="container team">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<h5 class="card-header">
									Data Provinsi
								</h5>
								<div class="card-body">
									<p class="card-text">
                                    Dengan 38 provinsi, Indonesia adalah negara kepulauan terbesar di dunia, membentang lebih dari 5.000 km dari Sabang hingga Merauke!
									</p>
								</div>
								<div class="card-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#provinsiModal">Lihat Data</button>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<h5 class="card-header">
									Data Gunung AKtif
								</h5>
								<div class="card-body">
									<p class="card-text">
                                    Indonesia adalah rumah bagi 99 gunung berapi aktif, termasuk Gunung Merapi yang dikenal sebagai salah satu gunung teraktif di dunia!
									</p>
								</div>
								<div class="card-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#gunungModal">Lihat Data</button>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<h5 class="card-header">
									Data Bandara Internasional
								</h5>
								<div class="card-body">
									<p class="card-text">
										Indonesia memiliki banyak bandara, tetapi bandara internasional hanya 17 yang bisa mengantar kamu untuk menjelajah dunia!
									</p>
								</div>
								<div class="card-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#bandaraModal">Lihat Data</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-md-4">
							<div class="card">
								<h5 class="card-header">
									Data Bali
								</h5>
								<div class="card-body">
									<p class="card-text">
										Bali terbagi menjadi 9 wilayah, dan bali memiliki daya tarik tersendiri di Indonesia
									</p>
								</div>
								<div class="card-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#baliModal">Lihat Data</button>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    <!-- Modal Provinsi-->
    <div class="modal fade" id="provinsiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">38 Provinsi Indonesia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama </th>
                    <th scope="col">Luas</th>
                    <th scope="col">Populasi</th>
                    <th scope="col">Kepadatan</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list_provinsi as $lp)
                    <tr>
                        <th scope="row">{{ $lp->name }}</th>
                        <td>{{ $lp->luas }}</td>
                        <td>{{ $lp->populasi }}</td>
                        <td>{{ $lp-> kepadatan}}</td>
                    </tr>
                @endforeach
                </script>
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Gunung-->
    <div class="modal fade" id="gunungModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Gunung Aktif Di Indonesia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama </th>
                    <th scope="col">Tinggi Gunung</th>
                    <th scope="col">Populasi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list_gunung as $lg)
                    <tr>
                        <th scope="row">{{ $lg->nama }}</th>
                        <td>{{ $lg->tinggi_meter }} MDPL</td>
                        <td>{{ $lg->estimasi_letusan_terakhir }}</td>
                    </tr>
                @endforeach
                </script>
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Bandara -->
    <div class="modal fade" id="bandaraModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">17 Bandara Internasional Indonesia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama </th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list_bandara as $lb)
                    <tr>
                        <th scope="row">{{ $lb->nama }}</th>
                        <td>{{ $lb->provinsi }}</td>
                        <td>{{ $lb->latitude }}</td>
                        <td>{{ $lb->longitude }}</td>
                    </tr>
                @endforeach
                </script>
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Bali-->
    <div class="modal fade" id="baliModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">38 Provinsi Indonesia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama </th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Populasi</th>
                    <th scope="col">Kepadatan</th>
                    <th scope="col">Wisata Favorite</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list_bali as $ll)
                    <tr>
                        <th scope="row">{{ $ll->nama }}</th>
                        <td>{{ $ll->luas }}</td>
                        <td>{{ $ll->jumlah_penduduk }}</td>
                        <td>{{ $ll-> kepadatan}}</td>
                        <td>{{ $ll-> tempat_wisata}}</td>
                    </tr>
                @endforeach
                </script>
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{asset('css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('css/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('css/assets/js/animation.js')}}"></script>
    <script src="{{asset('css/assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('css/assets/js/custom.js')}}"></script>
</body>
</html>