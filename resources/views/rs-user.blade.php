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
<<<<<<< HEAD
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
=======
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
>>>>>>> be1f6ba13899c2c47e51ea461e3cb60bbb733390
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

        <a href="{{ route('panduan-user') }}" class="text-decoration-none text-white m-3 py-1 me-2 btn">
            <h5>Panduan</h5>
        </a>
    </section>

    <section class="second-section">

        <style>
            .rm {
                transition: transform 0.5s
            }

            .rm:hover {
                transform: scale(1.05);
                cursor: pointer;
            }

        </style>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- small box -->
                    <a href="{{ route('rs jadwal user', ['id' => 1]) }}" style="text-decoration: none">
                        <div class="card p-2 text-white bg-info rm">
                            <div class="inner">
                                <h5>RSUD TGK.CHIK DITIRO</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- ./col -->
                <div class="col">
                    <!-- small box -->
                    <a href="{{ route('rs jadwal user', ['id' => 2]) }}" style="text-decoration: none">
                        <div class="card p-2 text-white bg-success rm">
                            <div class="inner">
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
                            <div class="inner">
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
                            <div class="inner">
                                <h5>RS MUFID</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <!-- small box -->
                    <a href="{{ route('rs jadwal user', ['id' => 5]) }}" style="text-decoration: none">
                        <div class="card p-2 text-white rm text-white" style="background-color: #1c93a5">
                            <div class="inner">
                                <h5>RS IBNU SINA</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- ./col -->
            </div>

        </div>
    </section>
</body>

</html>
