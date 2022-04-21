@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update data', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" type="text" class="form-control" required value="{{ $data->alamat }}">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-select" name="kecamatan" required>
                                <option value="">pilih kecamatan</option>
                                @foreach ($tematik as $kecamatan)
                                    <option {{ $kecamatan->id == $data->tematik->id ? 'selected' : '' }}
                                        value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rumah Sakit</label>
                            <select class="form-select" name="rumahsakit" required>
                                <option value="">pilih Rumah Sakit</option>
                                <option {{ $data->rumah_sakit == 'RSUD TGK.CHICK DITIRO' ? 'selected' : '' }}
                                    value="RSUD TGK.CHICK DITIRO"> RSUD TGK.CHICK DITIRO </option>
                                <option {{ $data->rumah_sakit == 'RSUD ABDULLAH SYAFI' ? 'selected' : '' }}
                                    value="RSUD ABDULLAH SYAFI'I"> RSUD ABDULLAH SYAFI'I </option>
                                <option {{ $data->rumah_sakit == 'RS CITRA HUSADA' ? 'selected' : '' }}
                                    value="RS CITRA HUSADA"> RS CITRA HUSADA </option>
                                <option {{ $data->rumah_sakit == 'RS MUFID' ? 'selected' : '' }} value="RS MUFID"> RS
                                    MUFID
                                </option>
                                <option {{ $data->rumah_sakit == 'RS IBNU SINA' ? 'selected' : '' }} value="RS IBNU SINA">
                                    RS IBNU SINA </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Poliklinik</label>
                            <input name="poliklinik" type="number" class="form-control" required
                                value="{{ $data->jumlah_poliklinik }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kamar</label>
                            <input name="kamar" type="number" class="form-control" required
                                value="{{ $data->jumlah_kamar }}">
                        </div>
                        <div class="form-group">
                            <label>Dokter Umum</label>
                            <input name="umum" type="number" class="form-control" required
                                value="{{ $data->dokter_umum }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No HP</label>
                            <input name="no_hp" value="{{$data->no_hp}}" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Dokter Spesialis</label>
                            <input name="spesialis" type="number" class="form-control" required
                                value="{{ $data->dokter_spesialis }}">
                        </div>
                        <div class="form-group">
                            <label>Perawat</label>
                            <input name="perawat" type="number" class="form-control" required
                                value="{{ $data->perawat }}">
                        </div>
                        <div class="form-group">
                            <label>Masukkan Gambar</label>
                            <input name="gambar" type="file" class="form-control mb-4">
                            <input type="hidden" value="{{ $data->gambar }}" name="gambar_lama">
                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input id="longitude" name="long" type="text" class="form-control" required
                                value="{{ $data->long }}">
                        </div>
                        <div class="form-group">
                            <label>Latitude</label>
                            <input id="latitude" name="lat" type="text" class="form-control" required
                                value="{{ $data->lat }}">
                        </div>
                    </div>
                </div>
                <div class="container mt-4" id="mapid"></div>
                <button class="btn btn-primary float-end mt-4" type="submit">Simpan</button>
            </form>
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
        crossorigin="">
    </script>

    <script>
        let latitude = document.getElementById('latitude').value;
        let longitude = document.getElementById('longitude').value;
        var mapCenter = [
            latitude,
            longitude,
        ];
        var map = L.map('mapid').setView(mapCenter, {{ config('leafletsetup.zoom_level') }});
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var marker = L.marker(mapCenter).addTo(map);

        function updateMarker(lat, lng) {
            marker
                .setLatLng([lat, lng])
                .bindPopup("Your location :" + marker.getLatLng().toString())
                .openPopup();
            return false;
        };
        map.on('click', function(e) {
            let latitude = e.latlng.lat.toString().substring(0, 15);
            let longitude = e.latlng.lng.toString().substring(0, 15);
            $('#latitude').val(latitude);
            $('#longitude').val(longitude);
            updateMarker(latitude, longitude);
        });
        var updateMarkerByInputs = function() {
            return updateMarker($('#latitude').val(), $('#longitude').val());
        }
        $('#latitude').on('input', updateMarkerByInputs);
        $('#longitude').on('input', updateMarkerByInputs);
    </script>
@endpush
