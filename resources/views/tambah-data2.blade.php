@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card p-4">
            <form action="{{ route('data rumah sakit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-select" name="tematik_id" required>
                                <option value="">pilih kecamatan</option>
                                @foreach ($tematik as $kecamatan)
                                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rumah Sakit</label>
                            <select class="form-select" name="rumahsakit" required>
                                <option value="">pilih Rumah Sakit</option>
                                <option value="RSUD TGK.CHICK DITIRO"> RSUD TGK.CHICK DITIRO </option>
                                <option value="RSUD ABDULLAH SYAFI'I"> RSUD ABDULLAH SYAFI'I </option>
                                <option value="RS CITRA HUSADA"> RS CITRA HUSADA </option>
                                <option value="RS MUFID"> RS MUFID</option>
                                <option value="RS IBNU SINA"> RS IBNU SINA </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input name="nama_dokter" type="text" class="form-control" required>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input name="spesialis2" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>poliklinik</label>
                            <input name="poli" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>

    </div>


@endsection
