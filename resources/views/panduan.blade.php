@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('storage/css/halaman-data.css') }}">
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
                    <div class="text-center"><img width="700" src="{{ asset('storage/img/maps.png') }}" alt="">
                    </div>
                </div>

                <div class="mt-3">
                    <div class="mb-2">
                        <span class="bg-info me-2 text-white rounded-circle px-2" style="width: fit-content">
                            2
                        </span>Tekan tombol "Rute", kemudian pilih lokasi Rumah Sakit yang ingin dituju
                    </div>
                    <div class="text-center"><img width="700" src="{{ asset('storage/img/rute.png') }}"alt="">
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
                    <div class="text-center"><img width="700" src="{{ asset('storage/img/saran.png') }}"alt="">
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
@endsection
