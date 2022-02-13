<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $colors = ['bg-info','bg-danger','bg-success', 'bg-warning', 'bg-secondary'];
        $data = new HalamanData();
        $data2 = new HalamanData2();
        $poli = $data->sum(DB::raw('jumlah_poliklinik'));
        $dokter = $data->sum(DB::raw('dokter_umum + dokter_spesialis'));
        $perawat = $data->sum(DB::raw('perawat'));
        $list_poli = $data2->groupBy('rumahsakit')->get();
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
        return view('home',[
            'list_poli' => $list_poli,
            'poli'=>$poli,
            'dokter'=> $dokter,
            'perawat'=>$perawat,
            'colors'=>$colors,
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor,
            'tematik' => $tematik,
        ]);
    }
    public function getPoli($rm){
        $poli = HalamanData2::where('rumahsakit',$rm)->groupBy('poli')->get();
        return $poli;
    }
    
}
