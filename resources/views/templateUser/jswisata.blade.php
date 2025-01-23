<script>
        // Inisialisasi peta
        var mapjs3 = L.map('mapjs3').setView([-8.4302204,115.0788364], 8.5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 15,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mapjs3);

        const dataRegencybali3 = dataBali.map(regency => ({
            type: "Feature",
            properties: {
                name: regency.nama,
                id: regency.id,
                population: regency.jumlah_penduduk,
                luas: regency.luas,
                kepadatan: regency.kepadatan,
                wisata: regency.tempat_wisata,
                jumlah_wisata: regency.jumlah_wisata,
                
            },
            geometry: {
                type: regency.type_polygon,
                coordinates: JSON.parse(regency.polygon),
            }
        }));

        console.log(dataRegencybali3);

        const geodata3 = {
            type: "FeatureCollection",
            features: dataRegencybali3,
        };

        console.log(geodata3);
        
        function getColor3(b) {
            return b > 50 ? '#3a8c51' :
                b > 40 ? '#63cf81' :
                b > 30  ? '#74e895' :
                b > 20 ? '#9cf7b6' :
                b > 10   ? '#b0f5c4' :
                        '#cbf5d7';
        }

        function style(feature) {
            return {
                fillColor: getColor3(feature.properties.jumlah_wisata),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        function highlightFeature(d) {
            var layer3 = d.target;

            layer3.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer3.bringToFront();
            info3.update(layer3.feature.properties);
        }

        function resetHighlight(d) {
            geojson3.resetStyle(d.target);
            info3.update();
        }

        function zoomToFeature(d) {
            map.fitBounds(d.target.getBounds());
        }

        function onEachFeature(feature, layer3) {
            layer3.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        geojson3 = L.geoJson(geodata3, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(mapjs3);

        var info3 = L.control();

            info3.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info3'); // create a div with a class "info3"
                this.update();
                return this._div;
            };

            // method that we will use to update the control based on feature properties passed
            info3.update = function (props) {
                this._div.innerHTML = '<h6>Kepadatan Wilayah di provinsi Bali</h6>' +  (props ?
                    '<b> Kabupaten / Kota : ' + props.name + '</b><br /> Jumlah Wisata : ' + props.jumlah_wisata + '<br> Wisata Favorite : ' + props.wisata 
                    : 'Select Peta');
            };

            info3.addTo(mapjs3);

            var legend3 = L.control({position: 'bottomright'});

            legend3.onAdd = function (mapjs3) {

                var div = L.DomUtil.create('div', 'info3 legend3'),
                    grades = [10, 20, 30, 40, 50],
                    labels = [];

                // loop through our density intervals and generate a label with a colored square for each interval
                for (var i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        '<i style="background:' + getColor3(grades[i] + 1) + '"></i> ' +
                        grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
                }

                return div;
            };

            legend3.addTo(mapjs3);

    </script>