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
        <a href="{{ route('login') }}" class="text-decoration-none text-white m-4 py-1 btn btn-outline-info me-2">
            <h4>Log in</h4>
        </a>
        <a href="{{ route('welcome') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Home</h4>
        </a>
        <a href="{{ route('Map user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Maps</h4>
        </a>
        <a href="{{ route('Data user') }}" class="text-decoration-none text-white m-4 py-1 me-2 btn"
            style="border-bottom:1px solid cyan;">
            <h4>Data</h4>
        </a>
        <a href="#" class="text-decoration-none text-white m-4 py-1 me-2 btn">
            <h4>Panduan</h4>
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
                @foreach ($data->dokter as $item)
                    @if (count($item->jadwal))
                        <div class="col">
                            <!-- small box -->
                            <div class="card p-2 text-white"
                                style="background-color:{{ $colors[$loop->index % 2 == 0] }}">
                                <h5>{{ strtoupper($item->nama_dokter) }}</h5>
                                @foreach ($item->jadwal as $jadwal)
                                    <div class="mb-2">
                                        <p class="mb-0 text-white">Jadwal : {{ $jadwal->jadwal->isoFormat('LLLL') }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
