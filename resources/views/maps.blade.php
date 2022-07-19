@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <div id="map"></div>
        </div>
    </div>
@endsection
@section('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #map {
            min-height: 500px;
        }

        .leaflet-control-attribution {
            display: none !important
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            text-align: left;
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        .search-input {
            color: black;
        }
    </style>
@endsection

@push('scripts')
    <!-- Leaflet JavaScript -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
        integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
    <script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>
    <script type="text/javascript">
        var s = [5.3811231139126, 95.958859920501];
        var color = {!! json_encode($color) !!};
        var data = {!! json_encode($data) !!}
        var jumlah = {!! json_encode($jumlah) !!}
        var map = L.map('map').setView(
            s, 11
        );


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        var info = L.control();

        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
        //menampilkan pop up info tematik


        function style(feature) {
            warna = "";
            if (jumlah[feature.properties.NAMOBJ] == 0) {
                warna = 'red';
            } else if (jumlah[feature.properties.NAMOBJ] >= 1 && jumlah[feature.properties.NAMOBJ] <= 2) {
                warna = 'yellow';
            } else if (jumlah[feature.properties.NAMOBJ] >= 3) {
                warna = 'green';
            }
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7,
                fillColor: warna
            };

        }
        //memunculkan highlight pada peta
        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            if (!L.Browser.ie && !L.Browser.opera) {
                layer.bringToFront();
            }

            info.update(layer.feature.properties);
        }

        var geojson;

        function resetHighlight(e) {
            geojsonLayer.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.bindPopup('', {
                maxHeight: 200
            }), layer.bindTooltip(feature.properties.NAMOBJ, {
                permanent: true,
                direction: 'center',
                className: 'bg-transparent border-0 text-white shadow-none font-weight-bold'
            });
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }
        var geojsonLayer = new L.GeoJSON.AJAX({!! json_encode($geofile) !!}, {
            style: style,
            onEachFeature: onEachFeature
        });
        geojsonLayer.addTo(map);

        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function(map) {

            var div = L.DomUtil.create('div', 'info legend'),
                grades = [0, 12, 25, 37, 50, 62, 75, 87], //pretty break untuk 8
                from, to;
            labels = []

            labels.push('<i style="background:red"></i> - Tidak Tersedia Rumah Sakit/Faskes');
            labels.push('<i style="background:yellow"></i> - Tersedia 1-2 Rumah Sakit/Faskes');
            labels.push('<i style="background:green"></i> - Tersedia >3 Rumah Sakit/Faskes');

            div.innerHTML = '<h4>Legenda:</h4>' + labels.join('<br>');
            return div;
        };


        legend.addTo(map);
        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);
        var controlSearch = new L.Control.Search({
            position: 'topright',
            layer: markersLayer,
            initial: false,
            zoom: 12,
            marker: false,
            autoType: false
        });
        controlSearch.on('search:locationfound', function(e) {

            e.layer.openPopup();

        }).on('search:collapsed', function(e) {});
        map.addControl(controlSearch);
        for (var i = 0; i < data.length; i++) {
            var title = data[i][0],
                loc = [data[i][1], data[i][2]],
                marker = new L.Marker(new L.latLng(loc), {
                    title: title
                });
            marker.bindPopup(title);
            markersLayer.addLayer(marker);
        }
    </script>
@endpush
