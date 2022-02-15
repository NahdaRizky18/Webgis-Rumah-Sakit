<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Tematik;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function map(){
   
        $geofile = [];
        $color = [];
        $coor = [];
        $index = 0;
        $index2 = 0;
        $tematik = Tematik::all();
        $data = HalamanData2::all();
        foreach ($tematik as $item) {
            $geofile[$index] = 'storage/' . $item->geojson;
            $index++;
        }
        foreach ($tematik as $item) {
            $color[$item->kecamatan] = $item->warna;
        }
        foreach ($data as $item) {
            $coor[$index2] = [$item->alamat, $item->lat, $item->long];
            $index2++;
        }

        return view('mapUser', [
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor
        ]);
    }
    public function data()
    {
        $colors = ['#495371', '#74959A', '#98B4AA', '#1C658C', '#398AB9'];
        $data = new HalamanData();
        $data2 = new HalamanData2();
        $poli = $data2->where('poli', '!=', '-')->groupBy('poli')->get()->count();
        $dokter = $data->sum(DB::raw('dokter_umum + dokter_spesialis'));
        $perawat = $data->sum(DB::raw('perawat'));
        $list_poli = $data2->groupBy('rumahsakit')->get();
      
        return view('dataUser', [
            'list_poli' => $list_poli,
            'poli' => $poli,
            'dokter' => $dokter,
            'perawat' => $perawat,
            'colors' => $colors,
        ]);
    }
}
