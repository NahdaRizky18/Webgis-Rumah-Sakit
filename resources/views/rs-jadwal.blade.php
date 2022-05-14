<?php use App\Http\Controllers\HomeController;
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('home') }}" class="text-decoration-none text-dark m-4 py-1 btn btn-outline-info me-2">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <div class="row">
            @foreach ($data->dokter as $item)
                @if (count($item->jadwal))
                    <div class="col-md-4">
                        <!-- small box -->
                        <div class="card p-2 text-white" style="background-color:{{ $colors[$loop->index % 2 == 0] }}">
                            <h5>{{ $item->nama_dokter }}</h5>
                            @foreach ($item->jadwal as $jadwal)
                                <div class="mb-2">
                                    <p class="mb-0 text-white"> Spesialis {{ $item->spesialis2 }}</p>
                                    <p class="mb-0 text-white">Jadwal : {{ $jadwal->jadwal->isoFormat('dddd') }}
                                        {{ $jadwal->jadwal->isoFormat('LL') }}

                                    </p>
                                    <p class="mb-0 text-white">
                                        Pukul {{ $jadwal->jadwal->isoFormat('H:MM a') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    </div>
@endsection
