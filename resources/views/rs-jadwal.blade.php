<?php use App\Http\Controllers\HomeController;
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($data->dokter as $item)
                <div class="col">
                    <!-- small box -->
                    <div class="small-box text-white" style="background-color:{{ $colors[$loop->index] }}">
                        <div class="inner">
                            <h4>{{ strtoupper($item->nama_dokter) }}</h4>
                            @foreach ($item->jadwal as $jadwal)
                                <div class="mb-2">
                                      <p class="mb-0 text-white">Jadwal : {{ $jadwal->jadwal->isoFormat('LLLL') }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
