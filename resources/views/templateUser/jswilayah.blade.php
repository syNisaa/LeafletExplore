<script>
        // Inisialisasi peta
        var mapjs1 = L.map('mapjs1').setView([-8.4302204,115.0788364], 8.5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 15,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mapjs1);

// 
        const dataRegencybali = dataBali.map(regency => ({
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

        console.log(dataRegencybali);

        // 
        const geodata = {
            type: "FeatureCollection",
            features: dataRegencybali,
        };

        console.log(geodata);

        function getColor(d) {
            return d > 1200 ? '#4434d1' :
                d > 1000  ? '#5b4dd1' :
                d > 900  ? '#695dcf' :
                d > 700 ? '#7a6fd6' :
                d > 500   ? '#837acf' :
                d > 300   ? '#958cdb' :
                d > 100   ? '#ada5e8' :
                            '#c3beed';
        }

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.luas),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
            
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        geojson = L.geoJson(geodata, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(mapjs1);

        var info = L.control();

            info.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
                this.update();
                return this._div;
            };

            // method that we will use to update the control based on feature properties passed
            info.update = function (props) {
                this._div.innerHTML = '<h6>Luas Wilayah di provinsi Bali</h6>' +  (props ?
                    '<b> Kabupaten / Kota : ' + props.name + '</b><br />' + props.luas + ' km<sup>2</sup>'
                    : 'Select Peta');
            };

            info.addTo(mapjs1);

            var legend = L.control({position: 'bottomright'});

            legend.onAdd = function (mapjs1) {

                var div = L.DomUtil.create('div', 'info legend'),
                    grades = [100, 300, 500, 700,  900, 1000],
                    labels = [];

                // loop through our density intervals and generate a label with a colored square for each interval
                for (var i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                        grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
                }

                return div;
            };

            legend.addTo(mapjs1);

    </script>