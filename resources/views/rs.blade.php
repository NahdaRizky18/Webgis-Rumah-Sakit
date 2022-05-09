<?php use App\Http\Controllers\HomeController;
?>
@extends('layouts.app')

@section('content')
    <style>
        .rm {
            transition: transform 0.5s
        }

        .rm:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal', ['id' => 1]) }}" style="text-decoration: none">
                    <div class="small-box bg-info rm">
                        <div class="inner">
                            <p>RSUD TGK.CHIK DITIRO</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- ./col -->
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal', ['id' => 2]) }}" style="text-decoration: none">
                    <div class="small-box bg-success rm">
                        <div class="inner">
                            <p>RSUD ABDULLAH SYAFI'I </p>
                        </div>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal', ['id' => 3]) }}" style="text-decoration: none">
                    <div class="small-box bg-warning rm">
                        <div class="inner">
                            <p>RS CITRA HUSADA</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal', ['id' => 4]) }}" style="text-decoration: none">
                    <div class="small-box rm text-white" style="background-color: #74959A">
                        <div class="inner">
                            <p>RS MUFID</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <!-- small box -->
                <a href="{{ route('rs jadwal', ['id' => 5]) }}" style="text-decoration: none">
                    <div class="small-box rm text-white" style="background-color: #1c93a5">
                        <div class="inner">
                            <p>RS IBNU SINA</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
        </div>

    </div>
@endsection
