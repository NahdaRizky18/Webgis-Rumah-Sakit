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
    <title>Rumah Sakit Kabupaten Pidie</title>
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
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!-- Leaflet CSS -->
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
            font-style: bold;
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


    <section class="w-100" style="background-color: #68A7AD">
        <a href="{{ route('welcome') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Home</h5>
        </a>
        <a href="{{ route('Map user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
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

        <a href="{{ route('panduan-user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h5>Panduan</h5>
        </a>
    </section>

    <section class="second-section" style=" background-color: #dededc">
        <div class="container">
            <div class="card p-4">
                <h3><b>Anda Sebagai Masyarakat</b></h3>
                <div class="mt-2">
                    <div class="mb-2">
                        <span class="bg-info me-2 me-2 text-white rounded-circle px-2" style="width: fit-content">
                            1
                        </span> Tekan tombol "Maps" untuk melihat Lokasi Rumah sakit
                    </div>
                    <div class="text-center"><img width="700" src="{{ asset('storage/img/maps.png') }}"
                            alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            2
                        </span>Tekan tombol "Rute", kemudian pilih lokasi Rumah Sakit yang ingin dituju
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/rute.png') }}"alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            3
                        </span>Tekan tombol "Jadwal Poliklinik" lalu pilih Rumah Sakit untuk melihat jadwal poliklinik
                    </div>
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            4
                        </span> Pilih Rumah Sakit terlebih dahulu untuk melihat ketersedian "Tempat Tidur"
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/jadwal.png') }}"alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            5
                        </span>Berikan penilaian dengan memberikan bintang dan komentar pada combo box saran
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/saran.png') }}"alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3 container">
            <div class="card p-4">
                <div class="col">
                    <h3><b> Anda sebagai Pihak Dinas Kesehatan</b></h3>
                </div>
                <div class="mt-2">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            1
                        </span>Login menggunakan Akun Admin
                    </div>
                    <div class="text-center"><img width="700" src="{{ asset('storage/img/login dinkes.png') }}"
                            alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            2
                        </span>Pada halaman "Dashboard" berisi informasi jadwal poliklinik dan kesedian ruangan dan
                        tempat tidur
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/dashboard.png') }}"alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            3
                        </span>Pada halaman "Maps" berisi beberapa informasi seperti peta Rumah sakit dan puskesmas dan
                        Rute
                    </div>
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            4
                        </span> Pada halaman "Data" berisi data rumah sakit, data faskes rawat inap, data kecamatan,
                        dan data user rumah sakit.
                        Dinas kesehatan juga dapat melakukan "edit", "tambah" dan "delete" pada data.
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/halaman maps.png') }}"alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3 container">
            <div class="card p-4">
                <h3><b>Anda Sebagai Pihak Rumah Sakit </b></h3>
                <div class="mt-2">
                    <div class="mb-2">
                        <span class="bg-info me-2 me-2 text-white rounded-circle px-2" style="width: fit-content">
                            1
                        </span> Login menggunakan Akun Rumah Sakit
                    </div>
                    <div class="text-center"><img width="700" src="{{ asset('storage/img/loginrs.png') }}"
                            alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            2
                        </span> Pada Halaman "Jadwal" sebegai tempat menginput data jadwal poliklinik di rumah sakit
                    </div>
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            3
                        </span> Pada Halaman "Data Dokter" sebagai tempat menginput data dokter spesialis
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/jadwalrs.png') }}"alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            4
                        </span>Pada Halaman "Ruangan" sebagai tempat mengimput data ketersedian ruangan dan tempat tidur
                    </div>
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            5
                        </span> Pada Halaman "Saran" berisi saran yang diberikan oleh masyarakat
                    </div>
                    <div class="text-center"><img width="700"
                            src="{{ asset('storage/img/ruangan.png') }}"alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="https://www.facebook.com/DinasKesehatanPidie"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://dinkes.pidiekab.go.id/"><i class="fa fa-globe"></i></a></li>
                    </ul>
                    <p class="text-white">Nahda Rizky | 2022 </p>
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
