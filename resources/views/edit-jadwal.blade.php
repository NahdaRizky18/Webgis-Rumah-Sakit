@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update jadwal',['id'=>$id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hari</label>
                            <select name="hari" class="form-control">
                                <option value="">--pilih hari--</option>
                                <option {{$data->hari == 'Senin'? 'selected':''}} value="Senin">Senin</option>
                                <option {{$data->hari == 'Selasa'? 'selected':''}} value="Selasa">Selasa</option>
                                <option {{$data->hari == 'Rabu'? 'selected':''}} value="Rabu">Rabu</option>
                                <option {{$data->hari == 'Kamis'? 'selected':''}} value="Kamis">Kamis</option>
                                <option {{$data->hari == 'Jumat'? 'selected':''}} value="Jumat">Jumat</option>
                                <option {{$data->hari == 'Sabtu'? 'selected':''}} value="Sabtu">Sabtu</option>
                                <option {{$data->hari == 'Minggu'? 'selected':''}} value="Minggu">Minggu</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Jam</label>
                             <input name="jam" type="time" class="form-control" value="{{$data->jam}}" required>
                        </div>
                    </div>
                </div>  

                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>

    </div>
@endsection
