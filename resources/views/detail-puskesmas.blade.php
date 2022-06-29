@extends('layouts.app')
@section('content')
    <div class="container">
         @guest
            <a href="{{ route('Map user') }}" class="text-decoration-none text-dark m-4 py-1 btn btn-outline-info me-2">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        @endguest
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #68A7AD">Detail Faskes Kesehatan</div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><i class="nav-icon  fa-solid fa-home"></i> Alamat :<br> {{ $data->alamat }},
                                        Kecamatan {{ $data->tematik->kecamatan }} <br>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="nav-icon  fa-solid fa-hospital"></i> Rawat Inap :<br>
                                        {{ $data->puskesmas ? $data->puskesmas : $data->klinik }} <br> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="nav-icon  fa-solid fa-calendar"></i> Ketersediaan</td>
                                    <td>{{ $data->ketersediaan ? 'TERSEDIA' : 'TIDAK TERSEDIA' }}</td>
                                </tr>
                                <tr>
                                    <td><i class="nav-icon  fa-solid fa-phone"></i> No HP</td>
                                    <td>{{ $data->no_hp }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="">
                        <a href="{{ route('puskesmas') }}" class="btn btn-secondary mt-4">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #68A7AD">Detail Lokasi Faskes Kesehatan</div>
                    <div class="card-body" id="mapid"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #mapid {
            min-height: 500px;
        }

    </style>
@endsection

@push('scripts')
    <!-- Leaflet JavaScript -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <script>
        var map = L.map('mapid').setView([{{ $data->lat }}, {{ $data->long }}],
            {{ config('leafletsetup.detail_zoom_level') }});

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([{{ $data->lat }}, {{ $data->long }}]).addTo(map)

        axios.get('{{ route('api.places.index') }}')
            .then(function(response) {
                //console.log(response.data);
                L.geoJSON(response.data, {
                        pointToLayer: function(geoJsonPoint, latlng) {
                            return L.marker(latlng);
                        }
                    })
                    .bindPopup(function(layer) {
                        //return layer.feature.properties.map_popup_content;
                        return ('<div class="my-2"><strong>Place Name</strong> :<br>' + layer.feature.properties
                            .place_name + '</div> <div class="my-2"><strong>Description</strong>:<br>' + layer
                            .feature.properties.description +
                            '</div><div class="my-2"><strong>Address</strong>:<br>' + layer.feature.properties
                            .address + '</div>');
                    }).addTo(map);
                console.log(response.data);
            })
            .catch(function(error) {
                console.log(error);
            });
    </script>
@endpush
