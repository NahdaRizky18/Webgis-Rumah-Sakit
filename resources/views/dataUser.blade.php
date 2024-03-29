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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    .dokter {
        display: none
    }

    .poli:hover .dokter {
        display: inline
    }

    table {
        font-size: 15px !important;
        font-size: 12px !important;
  
    }
</style>

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
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h5>Jadwal Poliklinik</h5>
        </a>
        <a href="{{ route('data dokter') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Data Dokter</h5>
        </a>

        <a href="{{ route('panduan-user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Panduan</h5>
        </a>
    </section>


    <div class="container py-4 ">
        <h4 class=" text-center">Jadwal Poliklinik </h4>
        <div class="row mb-2">
            @foreach ($data as $item)
                <div class="col">
                    <!-- small box -->
                    <a href="{{ route('rs jadwal user', ['id' => $item->id]) }}" style="text-decoration: none">
                        <div class="card p-2 text-black rm text-black" style="background-color:white">

                            <div class="text-center">
                                <img src="{{ asset('/storage/' . $item->gambar) }}" width="150" width="100"
                                    alt="">
                                <h6 class="mt-1">{{ $item->rumah_sakit }}</h6>
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
                            <a href="{{ route('Data user', ['id' => $id]) }}" class="form-control border-0"><i
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
                    <div class="row mt-2 ">
                        @foreach ($kelas as $item)
                            <div class="col-md-4 mb-2 me-0 mx-auto ">
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
                <h4 class=" text-center">Poliklinik yang tersedia</h4>
                @foreach ($list_poli as $item)
                    <div class="col">

                        <div class="card p-3 mb-3 text-white  p-3"
                            style="background-color:{{ $colors2[$loop->index % 5] }}">
                            <div class="inner">
                                <h5>{{ $item->rumahsakit }}</h5>
                            </div>
                            @php
                                $home = new HomeController();
                                $getPoli = $home->getPoli($item->rumahsakit);
                            @endphp
                            @foreach ($getPoli as $itemPoli)
                                @if ($itemPoli->poli != '-' || !$itemPoli->poli)
                                    <p class="mb-0 text-white poli">{{ $itemPoli->poli }} - <span
                                            class="text-info dokter">{{ $itemPoli->nama_dokter }}</span></p>
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
        $('#rumahsakit').change(function() {
            window.location.href = '/maps-data/' + this.value;
        });
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $.fn.setCaret = function(pos) {
            return this.each(function() {
                var elem = this,
                    range;

                if (elem.createTextRange) {
                    range = elem.createTextRange();
                    range.move('character', pos);
                } else {
                    if (elem.selectionStart !== undefined) {
                        elem.setSelectionRange(pos, pos);
                    }
                }
            });
        }

        if (!localStorage.getItem('rating')) {
            Swal.fire({
                    title: `Beri rating!`,
                    text: "Berikan rating untuk rumah sakit",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    showCloseButton: true,
                    showCancelButton: true,
                    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Beri Rating',
                    cancelButtonText: 'Lain kali',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        localStorage.setItem('rating', true);
                        window.location.href = '/'
                    }
                });
        }
    </script>
</body>

</html>
