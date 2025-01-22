<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            height: 600px;
        }

    </style>
</head>

<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-8.4535602, 114.4120211], 9);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 15,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const dataBali = @json($list_bali);

        const dataRegencybali = dataBali.map(regency => ({
            type: "Feature",
            properties: {
                name: regency.nama,
                id: regency.id,
                population: regency.jumlah_penduduk,
            },
            geometry: {
                type: regency.type_polygon,
                coordinates:JSON.parse(regency.polygon),
            }
        }));

        console.log(dataRegencybali);

        const geodata = {
            type: "FeatureCollection",
            features: dataRegencybali,
        };

        L.geoJson(geodata).addTo(map);

    </script>
</body>

</html>
