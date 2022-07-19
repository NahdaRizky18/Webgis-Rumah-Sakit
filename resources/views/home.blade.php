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
                                <img src="{{ asset('/storage/' . $item->gambar) }}" width="150" width="100"
                                    alt="">
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
@endsection
@section('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
       .rm {
        transition: transform 0.5s
    }

    .rm:hover {
        transform: scale(1.05);
        cursor: pointer;
    }
    .dokter {
        display: none
    }

    .poli:hover .dokter {
        display: inline
    }
    </style>
@endsection
@push('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $('#rumahsakit').change(function() {
            window.location.href = '/home/' + this.value;
        });
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
    </script>
  
@endpush
