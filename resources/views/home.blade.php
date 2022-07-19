<?php use App\Http\Controllers\HomeController;
?>
@extends('layouts.app')

@section('content')
    <style>
        .rm {
            transition: transform 0.5s
        }

        .rm:hover {
            transform: scale(1.05);
            cursor: pointer;
        }


        .tableFixHead {
            overflow: auto;
            height: 100px;
        }

        .tableFixHead thead th {
            position: sticky;
            top: 0;
            z-index: 1;
        }

        /* Just common table stuff. Really. */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px 16px;
        }

        th {
            background: #eee;
        }

        .search-input {
            color: black;
        }
    </style>
    <div class="container py-2">
        <h4 class=" text-center">Jadwal Poliklinik </h4>
        <div class="row mb-2">
            @foreach ($rs as $item)
                <div class="col">
                    <!-- small box -->
                    <a href="{{ route('rs jadwal', ['id' => $item->id]) }}" style="text-decoration: none">
                        <div class="card p-2 text-white text-white" style="background-color: #5584AC">
                            <div class="text-center">
                                <p>{{ $item->rumah_sakit }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            <!-- ./col -->
        </div>
        <div>
            <div class="mb-2 card">
                <div class="card-header" style="background-color:#A0BCC2">

                    <label>Daftar informasi ketersediaan tempat tidur</label>
                </div>
                <div class="card-body">

                    <select name="rumahsakit" id="rumahsakit" class="form-control">
                        <option value="">Pilih Rumah Sakit</option>
                        <option {{ $id == 1 ? 'selected' : '' }} value="1"> RSUD TGK.CHIK DITIRO </option>
                        <option {{ $id == 2 ? 'selected' : '' }} value="2"> RSUD ABDULLAH SYAFI'I </option>
                        <option {{ $id == 3 ? 'selected' : '' }} value="3"> RS CITRA HUSADA </option>
                        <option {{ $id == 4 ? 'selected' : '' }} value="4"> RS MUFID</option>
                        <option {{ $id == 5 ? 'selected' : '' }} value="5"> RS IBNU SINA </option>
                    </select>
                    @if (count($kelasData))
                        <div>
                            <a href="{{ route('home', ['id' => $id]) }}" class="form-control border-0"><i
                                    class="fa-solid fa-arrow-left"></i></a>
                        </div>
                        <div class="my-2 border" style="max-height:15rem;overflow-y:auto">
                            <table class="tableFixHead ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Ruangan</th>
                                        <th>Kapasitas</th>
                                        <th>Tersedia</th>
                                        <th>Tersedia Laki-laki</th>
                                        <th>Tersedia Perempuan</th>
                                        <th>Update Terakhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelasData as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->kapasitas }}</td>
                                            <td>{{ $item->tersedia }}</td>
                                            <td>{{ $item->tersedia_lk }}</td>
                                            <td>{{ $item->tersedia_pr }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <div class="row mt-2">
                        @foreach ($kelas as $item)
                            <div class="col-md-4 mb-1 me-0 mx-auto ">
                                <a href="{{ route('home', ['id' => $id, 'kelas_id' => $item->kelas]) }}"
                                    style="text-decoration: none">
                                    <div class="card p-2 text-center rm"
                                        style="background-color:{{ $loop->iteration % 2 == 0 ? $colors[0] : $colors[1] }}">
                                        <h3 class="text-white">{{ $ruangan[$item->kelas] }}</h3>
                                        <h3 class="text-white">{{ $item->kelas }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- small box -->


        </div>
        <div>
            <section class="col connectedSortable">
                <div class="card" style="background-color: #99C4C8">
                    <div class="card-header border-0">
                        <h4 class="card-title">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Maps
                        </h4>

                    </div>
                    <div class="card-body">
                        <div id="map" style="height: 500px; width: 100%;"></div>
                    </div>

                </div>
            </section>
        </div>

    </div>
@endsection
@section('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
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

        .leaflet-right .leaflet-control {
            max-height: 8rem;
            overflow-y: auto;
            padding: 5px;
        }
    </style>
@endsection
@push('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $('#rumahsakit').change(function() {
            window.location.href = '/home/' + this.value;
        });
    </script>
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
        var kecamatan = {!! json_encode($kecamatan) !!}
        var datamap = {!! json_encode($data) !!}
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
        info.update = function(props) {
            this._div.innerHTML = '<h4>Lokasi Rumah Sakit </h4>' + (props ?
                '<b>' + props.NAMOBJ + '</b><br />' :
                'Gerakkan mouse Anda');
        };

        info.addTo(map);

       function style(feature) {
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7,
                fillColor: color[feature.properties.NAMOBJ]
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

        //pemanggilan legend
        legend.onAdd = function(map) {

            var div = L.DomUtil.create('div', 'info legend'),
                grades = [0, 12, 25, 37, 50, 62, 75, 87], //pretty break untuk 8
                from, to;
            labels = []
            for (var i = 0; i < kecamatan.length; i++) {
                labels.push(
                    '<i style="background:' + color[kecamatan[i]] + '"></i> - Rumah sakit ' + jumlah[kecamatan[i]]);
            }

            div.innerHTML = '<h4>Legenda:</h4>' + labels.join('<br>');
            return div;
        };


        legend.addTo(map);
        var markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);
        var controlSearch = new L.Control.Search({
            position: 'topleft',
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
        for (var i = 0; i < datamap.length; i++) {
            var title = datamap[i][0],
                loc = [datamap[i][1], datamap[i][2]],
                marker = new L.Marker(new L.latLng(loc), {
                    title: title
                });
            marker.bindPopup(title);
            markersLayer.addLayer(marker);
        }
    </script>
@endpush
