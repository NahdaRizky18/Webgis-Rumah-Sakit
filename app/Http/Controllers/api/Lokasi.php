<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Place;
use App\Models\HalamanData;
use Illuminate\Http\Request;

class Lokasi extends Controller
{
    public function index(Request $request)
    {
        $places = HalamanData::all();

        $geoJSONdata = $places->map(function ($place) {
            return [
                'type' => 'Feature',
                'properties' => new Place($place),
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [
                        $place->long,
                        $place->lat,

                    ],
                ],
            ];
        });
        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $geoJSONdata,
        ]);
    }
}
