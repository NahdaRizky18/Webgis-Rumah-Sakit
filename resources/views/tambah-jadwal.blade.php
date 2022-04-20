@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('store jadwal') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hari</label>
                            <select name="hari" class="form-control">
                                <option value="">--pilih hari--</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Jam</label>
                             <input name="jam" type="time" class="form-control" required>
                             <input name="user_id" type="hidden" value="{{auth()->user()->id}}" class="form-control" required>
                        </div>
                    </div>
                </div>  

                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>

    </div>
@endsection
