@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update data2', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select class="form-select" name="tematik_id" required>
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
                                <option {{ $data->rumahsakit == 'RSUD TGK.CHICK DITIRO' ? 'selected' : '' }}
                                    value="RSUD TGK.CHICK DITIRO"> RSUD TGK.CHICK DITIRO </option>
                                <option {{ $data->rumahsakit == 'RSUD ABDULLAH SYAFI' ? 'selected' : '' }}
                                    value="RSUD ABDULLAH SYAFI'I"> RSUD ABDULLAH SYAFI'I </option>
                                <option {{ $data->rumahsakit == 'RS CITRA HUSADA' ? 'selected' : '' }}
                                    value="RS CITRA HUSADA"> RS CITRA HUSADA </option>
                                <option {{ $data->rumahsakit == 'RS MUFID' ? 'selected' : '' }} value="RS MUFID"> RS
                                    MUFID
                                </option>
                                <option {{ $data->rumahsakit == 'RS IBNU SINA' ? 'selected' : '' }} value="RS IBNU SINA">
                                    RS IBNU SINA </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input name="nama_dokter" type="text" class="form-control" required
                                value="{{ $data->nama_dokter }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input name="spesialis2" type="text" class="form-control" required
                                value="{{ $data->spesialis2 }}">
                        </div>
                        <div class="form-group">
                            <label>poliklinik</label>
                            <input name="poli" type="text" class="form-control" required value="{{ $data->poli }}">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-end mt-4" type="submit">Simpan</button>
            </form>
        </div>

    </div>


@endsection
