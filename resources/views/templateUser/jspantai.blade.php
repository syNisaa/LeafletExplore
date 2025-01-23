<script>
        // Inisialisasi peta
        var mapjs4 = L.map('mapjs4').setView([-8.4302204,115.0788364], 8.5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 15,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mapjs4);

        const dataRegencybali4 = dataBali.map(regency => ({
            type: "Feature",
            properties: {
                name: regency.nama,
                id: regency.id,
                population: regency.jumlah_penduduk,
                luas: regency.luas,
                kepadatan: regency.kepadatan,
                wisata: regency.tempat_wisata,
                jumlah_wisata: regency.jumlah_wisata,
                jumlah_pantai: regency.jumlah_pantai,
                pantai: regency.pantai,
                ciri: regency.ciri,
                
            },
            geometry: {
                type: regency.type_polygon,
                coordinates: JSON.parse(regency.polygon),
            }
        }));

        console.log(dataRegencybali4);

        const geodata4 = {
            type: "FeatureCollection",
            features: dataRegencybali4,
        };

        console.log(geodata4);
        
        function getColor4(a) {
            return a > 10 ? '#0f90b8' :
                a > 8  ? '#30b9e3' :
                a > 6  ? '#4acff7' :
                a > 4 ? '#6bcbe8' :
                a > 2   ? '#8ed7ed' :
                a > 1   ? '#afe9fa' :
                            '#bfe9f5';
        }

        function style(feature) {
            return {
                fillColor: getColor4(feature.properties.jumlah_pantai),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        function highlightFeature(d) {
            var layer4 = d.target;

            layer4.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer4.bringToFront();
            info4.update(layer4.feature.properties);
        }

        function resetHighlight(d) {
            geojson4.resetStyle(d.target);
            info4.update();
        }

        function zoomToFeature(d) {
            map.fitBounds(d.target.getBounds());
        }

        function onEachFeature(feature, layer4) {
            layer4.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        geojson4 = L.geoJson(geodata4, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(mapjs4);

        var info4 = L.control();

            info4.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info4'); // create a div with a class "info4"
                this.update();
                return this._div;
            };

            // method that we will use to update the control based on feature properties passed
            info4.update = function (props) {
                this._div.innerHTML = '<h6>Pantai Bali </h6>' +  (props ?
                    '<b> Kabupaten / Kota : ' + props.name + '</b><br /> Jumlah Pantai : ' + props.jumlah_pantai + '<br> Pantai Populer : ' + props.pantai + ' <br> Ciri Khas : ' + props.ciri + ''
                    : 'Select Peta');
            };

            info4.addTo(mapjs4);

            var legend4 = L.control({position: 'bottomright'});

            legend4.onAdd = function (mapjs4) {

                var div = L.DomUtil.create('div', 'info4 legend4'),
                    grades = [1,2,4,6,8,10],
                    labels = [];

                // loop through our density intervals and generate a label with a colored square for each interval
                for (var i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        '<i style="background:' + getColor4(grades[i] + 1) + '"></i> ' +
                        grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
                }

                return div;
            };

            legend4.addTo(mapjs4);

    </script>