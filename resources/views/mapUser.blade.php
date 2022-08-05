<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--

Template 2091 Ziggy

http://www.tooplate.com/view/2091-ziggy

-->
    <title>WEBGIS Rumah Sakit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('storage/css/tooplate-style.css') }}" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
        integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.heat/0.2.0/leaflet-heat.js"></script>

    <script src="{{ asset('storage/js/leaflet-routing-machine/dist/leaflet-routing-machine.min.js') }}"></script>

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
</head>

<body>


    <section class="w-100" style="background-color: #68A7AD">
        <a href="{{ route('welcome') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Home</h5>
        </a>
        <a href="{{ route('Map user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h5>Maps</h5>
        </a>
        <a href="{{ route('rute user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Rute</h5>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Jadwal Poliklinik</h5>
        </a>
        <a href="{{ route('data dokter') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Data Dokter</h5>
        </a>

        <a href="{{ route('panduan-user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Panduan</h5>
        </a>
    </section>

    <section class="second-section p-0">
        <div class="card w-100 m-4 d-block border-0">

            <a href="{{ route('Map user', ['state' => 0]) }}" style="background-color: #E5CB9F"
                class="btn text-white  {{ $state == 0 ? 'btn-success' : 'btn-info' }}">Rumah Sakit</a>
            <a href="{{ route('Map user', ['state' => 1]) }}" style="background-color: #22577E"
                class="btn text-white {{ $state == 1 ? 'btn-success' : 'btn-info' }}">Faskes Rawat Inap</a>
        </div>
        <div class="card m-4" style="background-color: #99C4C8">

            <div class="card-header border-0">
                <h3 class="card-title text-white">
                    <i class="fas fa-map-marker-alt mr-1 "></i>
                    Maps
                </h3>

            </div>
            <div class="card-body">
                <div id="map" style="height: 300px; width: 100%;"></div>
            </div>

        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="https://www.facebook.com/DinasKesehatanPidie"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://dinkes.pidiekab.go.id/"><i class="fa fa-globe"></i></a></li>
                    </ul>
                    <p class="text-white">Nahda Rizky| 2022 </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
</body>

</html>
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

    .info .legend .leaflet-control {
        max-height: 8rem;
        overflow-y: auto;
        padding: 5px;
    }
</style>

<!-- Leaflet JavaScript -->
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
    integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    var datamap = {!! json_encode($data) !!}
    var kecamatan = {!! json_encode($kecamatan) !!}
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

    //pemanggilan legend
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

    function nilai(nilai) {
        var m = '';
        for (var n = 0; n < nilai; ++n) {
            m += '<i class="fa-solid fa-star' +
                (nilai == n + .5 ? '-half' : "") +
                '" aria-hidden="true"></i>';
            "<br/>";
        }
        return m;
    }
    map.addControl(controlSearch);
    for (var i = 0; i < datamap.length; i++) {
        var title = (datamap[i][5] ?
                "<div class='text-center'><img width='200' src='{{ asset('storage/') }}/" +
                datamap[i][5] + "'></div>" : "") + '<div>' + nilai(datamap[i][6]) + '</div>' + datamap[i][0] + "<br/>" +
            datamap[i][3] + "<br/> No HP :" +
            datamap[i][4] + '<br/>' +
            '<a  href="{{ Request::root() }}' + (datamap[i][8] == 'rs' ? '/detail-map/' : '/puskesmas-get/') +
            datamap[i][7] +
            '" class="btn btn-primary text-white me-3 mt-2">Detail</a>' +
            (datamap[i][8] == 'rs' ? '<a  href="{{ Request::root() }}/rs-jadwal-user/' + datamap[i][7] +
                '" class="btn btn-info text-white me-3 mt-2">Jadwal</a>' : ''),
            loc = [datamap[i][1], datamap[i][2]],
            marker = new L.Marker(new L.latLng(loc), {
                title: datamap[i][3]
            });
        marker.bindPopup(title);
        markersLayer.addLayer(marker);
    }
</script>
