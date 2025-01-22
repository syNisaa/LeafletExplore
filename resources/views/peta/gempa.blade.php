<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style>
        #map { height: 450px; }
         
        body{
            text-align:center;
            font-family: Times New Roman;
        }
    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <h1> <b> 15 GEMPA TERKINI DI INDONESIA</b></h1>
        <h5>Sumber Data : https://data.bmkg.go.id/gempabumi/ </h5>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 5,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            let datas = {!! file_get_contents("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json") !!} 
            console.log(datas);

            let gempas = datas.Infogempa.gempa;
            let number = 1;
            gempas.forEach(gempa => {
                let koordinat = gempa.Coordinates.split(",");
                let _lat = koordinat[0];
                let _lon = koordinat[1];
                let marker = L.marker([_lat,_lon]).addTo(map);
                
                marker.bindPopup(" Wilayah : " + gempa.Wilayah + "<br>Waktu : " + gempa.Tanggal + "<br> Jam :" + gempa.Jam + "<br> Kedalaman Pergeseran : " + gempa.Kedalaman + "<br> Lintang Wilayah : " + gempa.Lintang + "<br> Potensi : " + gempa.Potensi + "<br><b> Magnitudo : " + gempa.Magnitude );
            });

            

        </script>
    </body>
</html>