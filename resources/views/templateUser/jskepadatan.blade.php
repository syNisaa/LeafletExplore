<script>
        // Inisialisasi peta
        var mapjs2 = L.map('mapjs2').setView([-8.4302204,115.0788364], 8.5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 15,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mapjs2);

        const dataRegencybali2 = dataBali.map(regency => ({
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

        console.log(dataRegencybali2);

        const geodata2 = {
            type: "FeatureCollection",
            features: dataRegencybali2,
        };

        console.log(geodata2);
        
        function getColor2(a) {
            return a > 1400 ? '#800026' :
                a > 1200  ? '#BD0026' :
                a > 1000  ? '#E31A1C' :
                a > 800 ? '#FC4E2A' :
                a > 700   ? '#FD8D3C' :
                a > 500   ? '#FEB24C' :
                a > 300   ? '#FED976' :
                            '#FFEDA0';
        }

        function style(feature) {
            return {
                fillColor: getColor2(feature.properties.kepadatan),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        function highlightFeature(d) {
            var layer2 = d.target;

            layer2.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer2.bringToFront();
            info2.update(layer2.feature.properties);
        }

        function resetHighlight(d) {
            geojson2.resetStyle(d.target);
            info2.update();
        }

        function zoomToFeature(d) {
            map.fitBounds(d.target.getBounds());
        }

        function onEachFeature(feature, layer2) {
            layer2.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        geojson2 = L.geoJson(geodata2, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(mapjs2);

        var info2 = L.control();

            info2.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info2'); // create a div with a class "info2"
                this.update();
                return this._div;
            };

            // method that we will use to update the control based on feature properties passed
            info2.update = function (props) {
                this._div.innerHTML = '<h6>Kepadatan Wilayah di provinsi Bali</h6>' +  (props ?
                    '<b> Kabupaten / Kota : ' + props.name + '</b><br /> Luas : ' + props.luas + ' km<sup>2</sup> <br> Penduduk : ' + props.population + ' Jiwa <br> Kepadatan : ' + props.kepadatan + ' /km<sup>2</sup>'
                    : 'Select Peta');
            };

            info2.addTo(mapjs2);

            var legend2 = L.control({position: 'bottomright'});

            legend2.onAdd = function (mapjs2) {

                var div = L.DomUtil.create('div', 'info2 legend2'),
                    grades = [300, 500, 700, 800, 1000, 1200, 1400],
                    labels = [];

                // loop through our density intervals and generate a label with a colored square for each interval
                for (var i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        '<i style="background:' + getColor2(grades[i] + 1) + '"></i> ' +
                        grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
                }

                return div;
            };

            legend2.addTo(mapjs2);

    </script>