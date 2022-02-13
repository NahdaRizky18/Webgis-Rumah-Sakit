@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('storage/css/halaman-data.css') }}">


    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Rumah Sakit</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('tambah data') }}" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i> <span>Masukkan Data Baru</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>Kecamatan</th>
                            <th>Alamat</th>
                            <th>Rumah Sakit</th>
                            <th>Jumlah Poliklinik</th>
                            <th>Jumlah kamar</th>
                            <th>Dokter Umum</th>
                            <th>Dokter Spesialis</th>
                            <th>perawat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $item->tematik->kecamatan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->rumah_sakit }}</td>
                                <td>{{ $item->jumlah_poliklinik }}</td>
                                <td>{{ $item->jumlah_kamar }}</td>
                                <td>{{ $item->dokter_umum }}</td>
                                <td>{{ $item->dokter_spesialis }}</td>
                                <td>{{ $item->perawat }}</td>
                                <td class="w-25">

                                    <form action="{{ route('delete data', ['id' => $item->id]) }}" method="get">
                                        <a href="{{ route('detail map', ['id' => $item->id]) }}"
                                            class="edit"><i class="fas fa-map-marker-alt text-danger"></i></a>
                                        <a href="{{ route('edit data', ['id' => $item->id]) }}" class="edit"><i
                                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <button type="submit" class="delete show_confirm border-0 p-0 bg-transparent"><i
                                                class="material-icons" data-toggle="tooltip"
                                                title="Delete">&#xE872;</i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->

    {{-- ModalEdit --}}

    <!-- Delete Modal HTML -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Anda yakin ingin menghapus data ini`,
                    text: "Data akan hilang secara permanen",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
        $(document).ready(function() {
            $('#table').DataTable(
                pageLength: 50
            );
        });
    </script>
@endsection
