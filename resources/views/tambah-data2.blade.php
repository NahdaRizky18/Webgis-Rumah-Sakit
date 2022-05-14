@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('data rumah sakit') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="col-md-6 mx-auto">

                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input name="nama_dokter" type="text" class="form-control" required>
                            <input name="rumahsakit" type="hidden" class="form-control" required
                                value="{{ auth()->user()->rumahsakit }}">
                        </div>

                        <div class="form-group">
                            <label>Spesialis</label>
                            <input name="spesialis2" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>poliklinik</label>
                            <input name="poli" type="text" class="form-control" required>
                        </div>
                <button class="btn btn-primary float-end mt-4 w-100" type="submit">Tambah</button>
                    </div>
            </form>
        </div>

    </div>
@endsection
