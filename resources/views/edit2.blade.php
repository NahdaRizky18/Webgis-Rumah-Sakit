@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update data2', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mx-auto">
                      
                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input name="nama_dokter" type="text" class="form-control" required
                                value="{{ $data->nama_dokter }}">
                        </div>
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input name="spesialis2" type="text" class="form-control" required value="{{ $data->spesialis2 }}">
                            
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
