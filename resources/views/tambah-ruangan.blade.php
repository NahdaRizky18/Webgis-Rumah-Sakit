@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('store ruangan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Ruangan</label>
                             <input name="name" type="tect" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                             <input name="kelas" type="tect" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas</label>
                             <input name="kapasitas" type="number" class="form-control" required>
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Tersedia</label>
                             <input name="tersedia" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tersedia Laki-laki</label>
                             <input name="tersedia_lk" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tersedia Perempuan</label>
                             <input name="tersedia_pr" type="number" class="form-control" required>
                             <input name="user_id" type="hidden" value="{{auth()->user()->id}}" class="form-control" required>
                        </div>
                    </div>
                </div>  

                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>

    </div>
@endsection
