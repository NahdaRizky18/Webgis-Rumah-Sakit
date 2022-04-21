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
    <title>Ziggy HTML Template</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('storage/css/tooplate-style.css') }}" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
     <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"
        integrity="sha512-Abr21JO2YqcJ03XGZRPuZSWKBhJpUAR6+2wH5zBeO4wAw4oksr8PRdF+BKIRsxvCdq+Mv4670rZ+dLnIyabbGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.heat/0.2.0/leaflet-heat.js"></script>

    <script src="{{ asset('storage/js/leaflet-routing-machine/dist/leaflet-routing-machine.min.js') }}">
    </script>

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #map {
            min-height: 600px;
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

        .leaflet-routing-container {
            background-color: white;
            padding: 1rem
        }

        .leaflet-right {
            max-width: 50%;
        }

    </style>
</head>

<body>

    <a href="{{ route('login') }}"
        class="text-decoration-none text-white position-absolute m-4 py-1 btn btn-outline-info">
        <h4>Log in</h4>
    </a>
    <section class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Welcome To Ziggy</h2>
                        <div class="line-dec"></div>
                        <span>This is clean &amp; professional html template</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="second-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('Map user') }}" class="btn btn-outline-info py-2">
                        <div class="service-item">
                            <div class="icon">
                                <i class="fa-solid fa-map-location h1"></i>
                            </div>
                            <h4>Maps</h4>
                            <p>Aliquam ex velit, viverra eu tristique vel, rhoncus nec ligula. In vel massa sed dolor
                                pharetra interdum vitae posuere.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-7">
                    <a href="{{ route('Data user') }}" class="btn btn-outline-info py-2">
                        <div class="service-item">
                            <div class="icon">
                                <i class="fa-solid fa-database h1"></i>
                            </div>
                            <h4>Data</h4>
                            <p>Sed pulvinar ipsum id leo volutpat, in convallis lectus molestie. Aliquam nisi sapien,
                                faucibus eu consequat id, egestas vitae augue.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="btn btn-outline-info py-2">
                        <div class="service-item">
                            <div class="icon">
                                <i class="fa-solid fa-book h1"></i>
                            </div>
                            <h4>Panduan</h4>
                            <p>Aliquam ex velit, viverra eu tristique vel, rhoncus nec ligula. In vel massa sed dolor
                                pharetra interdum vitae posuere.</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="sixth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form action="{{route('post saran')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="rm">Rumah sakit</label>
                            <input type="text" id="rm" class="form-control shadow" required disabled>
                            <input type="hidden" id="rm_id" name="rumah_sakit" required>
                        </div>
                          <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input name="email" id="email" class="form-control shadow"/>
                        </div>
                        <div class="form-group mt-4">
                            <label for="nilai">Nilai</label>
                            <select name="nilai" id="nilai" class="form-control shadow" required>
                                <option value="">--Pilih Nilai--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="komentar">Komentar</label>
                            <textarea name="komentar" id="komentar" class="form-control shadow" cols="30" rows="10"></textarea>
                        </div>
                        <button class="mt-2 btn btn-primary float-end">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="https://www.facebook.com/tooplate"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p>Copyright &copy; 2017 Company Name

                        | Design: <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
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
        for (var i = 0; i < data.length; i++) {
            marker = new L.marker([data[i][1], data[i][2]], {
                    icon: icon
                })
                .bindPopup("<strong>" + data[i][3] +
                    '</strong><br/> <div class="text-center"></div><button class="w-100 btn btn-outline-primary mt-1" onclick="return keSini(&quot;' +
                    data[i][4] + '&quot;,&quot;' + data[i][3] + '&quot;)">Pilih</button>')
                .addTo(map);
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

        function keSini(id, rm) {
            document.getElementById('rm').value = rm;
            document.getElementById('rm_id').value = rm;
        }

        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            control.setWaypoints(L.latLng(latitude, longitude))
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            updateMarker(latitude, longitude);

        });
    </script>
</body>

</html>
