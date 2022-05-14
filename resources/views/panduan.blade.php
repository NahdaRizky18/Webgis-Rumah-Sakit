@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('storage/css/halaman-data.css') }}">
    <div class="container">

        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-1">
                            <h4 class="bg-info text-white rounded-circle px-2" style="width: fit-content">
                                1
                            </h4>
                        </div>
                        <div class="col-md-6">
                            Text
                        </div>
                    </div>
                    <img width="200" src="{{ asset('storage/img/left-image.png') }}" alt="">
                </div>
                <div class="col">
                </div>
            </div>

        </div>

    </div>
@endsection
