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
                             <select name="halaman_data2_id" class="form-control">
                                <option value="">--pilih kelas--</option>
                                <option value="VVIP">VVIP</option>
                                <option value="VIP">VIP</option>
                                <option value="UTAMA">UTAMA</option>
                                <option value="KELAS I">KELAS I</option>
                                <option value="KELAS II">KELAS II</option>
                                <option value="KELAS III">KELAS III</option>
                                <option value="ICU">ICU</option>
                                <option value="ICCU">ICCU</option>
                                <option value="NICU">NICU</option>
                                <option value="PICU">PICU</option>
                                <option value="IGD">IGD</option>
                                <option value="UGD">UGD</option>
                                <option value="BERSALIN">BERSALIN</option>
                                <option value="HCU">HCU</option>
                                <option value="ISOLASI">ISOLASI</option>
                            </select>
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
