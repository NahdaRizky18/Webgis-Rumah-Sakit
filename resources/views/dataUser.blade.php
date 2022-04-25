<?php use App\Http\Controllers\HomeController;
?>
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
</head>
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

</style>

<body>


    <section class="w-100" style="background-color: #2B333F">
                <a href="{{ route('welcome') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Home</h4>
        </a>
        <a href="{{ route('Map user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Maps</h4>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h4>Jadwal Poliklinik</h4>
        </a>
        <a href="{{ route('data dokter') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Data Dokter</h4>
        </a>
        <a href="#" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Panduan</h4>
        </a>
    </section>


    <div class="container py-4">
        <h4>Poliklinik yang tersedia</h4>
        <div class="row mb-2">
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal user', ['id' => 1]) }}" style="text-decoration: none">
                    <div class="card p-2 text-white bg-info rm">
                        <div class="text-center">
                            <h5>RSUD TGK.CHICK DITIRO</h5>
                        </div>
                    </div>
                </a>
            </div>

            <!-- ./col -->
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal user', ['id' => 2]) }}" style="text-decoration: none">
                    <div class="card p-2 text-white bg-success rm">
                        <div class="text-center">
                            <h5>RSUD ABDULLAH SYAFI'I </h5>
                        </div>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal user', ['id' => 3]) }}" style="text-decoration: none">
                    <div class="card p-2 text-white bg-warning rm">
                        <div class="text-center">
                            <h5>RS CITRA HUSADA</h5>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal user', ['id' => 4]) }}" style="text-decoration: none">
                    <div class="card p-2 text-white rm text-white" style="background-color: #74959A">
                        <div class="text-center">
                            <h5>RS MUFID</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal user', ['id' => 5]) }}" style="text-decoration: none">
                    <div class="card p-2 text-white rm text-white" style="background-color: #1c93a5">
                        <div class="text-center">
                            <h5>RS IBNU SINA</h5>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
        </div>
        <div>
            <div class="mb-2 card">
                <div class="card-header">

                    <label>Daftar informasi ketersediaan tempat tidur</label>
                </div>
                <div class="card-body">

                    <select name="rumahsakit" id="rumahsakit" class="form-control">
                        <option value="">pilih Rumah Sakit</option>
                        <option {{ $id == 1 ? 'selected' : '' }} value="1"> RSUD TGK.CHICK DITIRO </option>
                        <option {{ $id == 2 ? 'selected' : '' }} value="2"> RSUD ABDULLAH SYAFI'I </option>
                        <option {{ $id == 3 ? 'selected' : '' }} value="3"> RS CITRA HUSADA </option>
                        <option {{ $id == 4 ? 'selected' : '' }} value="4"> RS MUFID</option>
                        <option {{ $id == 5 ? 'selected' : '' }} value="5"> RS IBNU SINA </option>
                    </select>
                    @if (count($kelasData))
                        <div>
                            <a href="{{ route('Data user',['id'=>$id]) }}" class="form-control border-0"><i class="fa-solid fa-arrow-left"></i></a>
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
                            <div class="col-md-3 mb-2 ">
                                <a href="{{ route('Data user', ['id' => $id, 'kelas_id' => $item->kelas]) }}"
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

            <div class="row">
                <h4>Poliklinik yang tersedia</h4>
                @foreach ($list_poli as $item)
                    <div class="col">

                        <div class="card p-3 mb-3 text-white  p-3"
                            style="background-color:{{ $colors[$loop->index % 2 == 0] }}">
                            <div class="inner">
                                <h5>{{ $item->rumahsakit }}</h5>
                            </div>
                            @php
                                $home = new HomeController();
                                $getPoli = $home->getPoli($item->rumahsakit);
                            @endphp
                            @foreach ($getPoli as $item)
                                @if ($item->poli != '-' || !$item->poli)
                                    <p class="mb-0 text-white">{{ $item->poli }}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
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
                    <p class="text-white">Copyright &copy; 2017 Company Name

                        | Design: <a href="https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $('#rumahsakit').change(function() {
            window.location.href = '/maps-data/' + this.value;
        });
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
</body>

</html>
