@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <form action="{{ route('update rumahsakit', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama user</label>
                            <input name="name" type="text" class="form-control" value="{{ $data->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" value="{{ $data->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Rumah Sakit</label>
                            <select name="rumahsakit" class="form-control">
                                <option value="">pilih Rumah Sakit</option>
                                <option {{ $data->rumahsakit == 'RSUD TGK.CHICK DITIRO' ? 'selected' : '' }}
                                    value="RSUD TGK.CHICK DITIRO"> RSUD TGK.CHICK DITIRO </option>
                                <option {{ $data->rumahsakit == "RSUD ABDULLAH SYAFI'I" ? 'selected' : '' }}
                                    value="RSUD ABDULLAH SYAFI'I"> RSUD ABDULLAH SYAFI'I </option>
                                <option {{ $data->rumahsakit == 'RS CITRA HUSADA' ? 'selected' : '' }}
                                    value="RS CITRA HUSADA"> RS CITRA HUSADA </option>
                                <option {{ $data->rumahsakit == 'RS MUFID' ? 'selected' : '' }} value="RS MUFID"> RS MUFID
                                </option>
                                <option {{ $data->rumahsakit == 'RS IBNU SINA' ? 'selected' : '' }} value="RS IBNU SINA"> RS
                                    IBNU SINA </option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary float-end mt-4" type="submit">Ubah</button>
            </form>
        </div>

    </div>
@endsection
