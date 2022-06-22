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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('storage/css/tooplate-style.css') }}" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>


    <section class="w-100" style="background-color: #68A7AD">
        <a href="{{ route('welcome') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Home</h5>
        </a>
        <a href="{{ route('Map user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Maps</h5>
        </a>
        <a href="{{ route('rute user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
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

        <div class="card m-4" style="background-color: #99C4C8">

            <div class="card-header border-0">
                <h3 class="card-title text-white">
                    <i class="fas fa-map-marker-alt mr-1  "></i>
                    Untuk Melihat Rute Pilih Titik Lokasi lalu Klik Kesini
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
                        <li><a href="https://www.facebook.com/DinasKesehatanPidie"><i class="fa fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://dinkes.pidiekab.go.id/"><i class="fa fa-globe"></i></a></li>
                    </ul>
                    <p class="text-white">Dinas Kesehatan Kabupaten Pidie | 2022 </p>
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

    .leaflet-right .leaflet-control {
        max-height: 8rem;
        overflow-y: auto;
        padding: 5px;
    }
</style>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.heat/0.2.0/leaflet-heat.js"></script>

<script src="{{ asset('storage/js/leaflet-routing-machine/dist/leaflet-routing-machine.min.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.css" />
<script src="https://unpkg.com/leaflet-search@2.3.7/dist/leaflet-search.src.js"></script>
<script type="text/javascript">
    var s = [5.3811231139126, 95.958859920501];
    var data = {!! json_encode($data) !!}
    var map = L.map('map').setView(
        s, 11
    );
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
    var info = L.control();
    info.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'info');
        this.update();
        return this._div;
    };
    //menampilkan pop up info tematik
    info.update = function(props) {
        this._div.innerHTML = '<h4>Kecamatan</h4>' + (props ?
            '<b>' + props.NAMOBJ + '</b><br />' + props.MhsSIF + ' orang' :
            'Gerakkan mouse Anda');
    };
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
    var icon = L.icon({
        iconUrl: "{{ asset('storage/img/hospital.png') }}",
        iconSize: [38, 38], // size of the icon

    });
    var userMarker = new L.marker();

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
    var latPoint = "";
    var longPoint = "";

    function updateMarker(lat, lng) {
        latPoint = lat;
        longPoint = lng;
        userMarker
            .setLatLng([lat, lng]);
        return false;
    };
    // var dataPoint = [];
    // for (var i = 0; i < data.length; i++) {
    //     dataPoint[i] = L.latLng(data[i][1], data[i][2]);
    // }
    var control = L.Routing.control({
        waypoints: [],
        routeWhileDragging: true,
    });
    control.addTo(map);

    function keSini(lat, lng) {
        var latLng = L.latLng(lat, lng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
    }

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        control.setWaypoints(L.latLng(latitude, longitude))
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });
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

    for (var i = 0; i < data.length; i++) {
        var title = data[i][3],
            loc = [data[i][1], data[i][2]],
            marker = new L.Marker(new L.latLng(loc), {
                title: title,
                icon: icon
            });
        marker.bindPopup("<strong>" + data[i][3] +
            "</strong><br/><button class='w-100 btn btn-outline-primary mt-1' onclick='return keSini(" + data[i][
                1
            ] + "," + data[i][2] + ")'>Ke Sini</button>");
        markersLayer.addLayer(marker);
    }
</script>
