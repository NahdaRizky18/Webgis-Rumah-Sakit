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
    <title>Rumah Sakit</title>
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
        <a href="{{ route('welcome') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Home</h4>
        </a>
        <a href="{{ route('Map user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Maps</h4>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Jadwal Poliklinik</h4>
        </a>
        <a href="{{ route('data dokter') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h4>Data Dokter</h4>
        </a>

        <a href="{{route('panduan-user')}}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Panduan</h4>
        </a>
    </section>

    <section class="second-section p-0">

        <div class="card m-4">
            <div class="card-header border-0" style="background-color: #A0BCC2">
                <h3 class="card-title">
                    Data Dokter
                </h3>

            </div>
            <div class="card-body">
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Rumah Sakit</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Poliklinik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->rumahsakit }}</td>
                                <td>{{ $item->nama_dokter }}</td>
                                <td>{{ $item->spesialis2 }}</td>
                                <td>{{ $item->poli }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="https://www.facebook.com/tooplate"><i class="nav-icon fas fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="nav-icon fas fa-twitter"></i></a></li>
                    </ul>
                    <p>Copyright &copy; Dinas Kesehatan Pidie | 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</body>

</html>
