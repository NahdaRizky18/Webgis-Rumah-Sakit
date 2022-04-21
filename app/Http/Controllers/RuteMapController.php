<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\Puskesmas;
use Illuminate\Http\Request;

class RuteMapController extends Controller
{
    public function rumahsakit(){
        $coor = [];
        $arr = [];
        $index = 0;
        $data = HalamanData::all();

        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long, $item->rumah_sakit];
            $index++;
        }
        return view('rute', [
            'geofile' => [],
            'color' => [],
            'data' => $info,
        ]);
    }
    public function puskesmas()
    {
        $coor = [];
        $arr = [];
        $index = 0;
        $data = Puskesmas::all();

        foreach ($data as $item) {
            $info[$index] = [$item->alamat, $item->lat, $item->long, $item->puskesmas ? $item->puskesmas : $item->klinik];
            $index++;
        }
        return view('rute', [
            'geofile' => [],
            'color' => [],
            'data' => $info,
        ]);
    }
}
