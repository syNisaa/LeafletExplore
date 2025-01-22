<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>


</head>
    <style>
        #map { height: 600px; }
    </style>
<body>
    <div id="map"></div>


 <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   
    <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet-src.js"></script>

    <script>
        var map2 = L.map('map').setView([-8.4535602, 114.4120211], 9);
        L.tileLayer(
            'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 15,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map2);

        const regencies = @json($list_bali);

        const regencyData = regencies.map(regency => ({
            type: "Feature",
            geometry: {
                type: regency.type_polygon,
                coordinates: JSON.parse(regency.polygon),
            },
            properties: {
                name: regency.nama,
                id: regency.id,
            }
            
        }));

        const geojson = {
            type: "FeatureCollection",
            features: regencyData,
            ),
        };

        // console.log(geojson);

        L.geoJson(geojson).addTo(map);

    </script>
</body>

</html>
