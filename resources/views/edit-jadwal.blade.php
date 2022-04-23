@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update jadwal', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Dokter</label>
                            <select name="halaman_data2_id" class="form-control">
                                <option value="">--pilih dokter--</option>
                                @foreach ($dokters as $item)
                                    <option {{ $data->halaman_data2_id == $item->id ? 'selected' : '' }}
                                        value="{{ $item->id }}">{{ $item->nama_dokter }} ({{ $item->spesialis2 }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jadwal</label>
                            <input name="jadwal" type="datetime-local" class="form-control" required>
                            <input name="user_id" type="hidden" value="{{ auth()->user()->id }}" class="form-control"
                                required>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary float-end mt-4" type="submit">Tambah</button>
            </form>
        </div>

    </div>
@endsection
