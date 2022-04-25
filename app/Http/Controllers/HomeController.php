<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Jadwal;
use App\Models\Tematik;
use App\Models\User;
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
        $colors = ['#495371', '#74959A', '#98B4AA', '#1C658C', '#398AB9'];
        $data = new HalamanData();
        $data2 = new HalamanData2();
        $poli = $data2->where('poli', '!=', '-')->groupBy('poli')->get()->count();
        $dokter = $data->sum(DB::raw('dokter_umum + dokter_spesialis'));
        $perawat = $data->sum(DB::raw('perawat'));
        $list_poli = $data2->groupBy('rumahsakit')->get();
        $geofile = [];
        $color = [];
        $coor = [];
        $index = 0;
        $index2 = 0;
        $tematik = Tematik::all();
        $data = HalamanData::all();
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
        $kecamatan = $tematik->pluck('kecamatan');
        return view('home', [
            'list_poli' => $list_poli,
            'poli' => $poli,
            'dokter' => $dokter,
            'perawat' => $perawat,
            'colors' => $colors,
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor,
            'tematik' => $tematik,
            'kecamatan'=> $kecamatan
        ]);
    }
    public function getPoli($rm)
    {
        $poli = HalamanData2::where('rumahsakit', $rm)->groupBy('poli')->get();
        return $poli;
    }
    public function rs(){
        return view('rs');
    }
   
    public function jadwal($id){
        $rs = "";
        if ($id == 1) {
            $rs = 'RSUD TGK.CHICK DITIRO';
        }else if($id == 2){
            $rs = "RSUD ABDULLAH SYAFI'I";
        } else if ($id == 3) {
            $rs = 'RS CITRA HUSADA';
        } else if ($id == 4) {
            $rs = 'RS MUFID';
        } else if ($id == 5) {
            $rs = 'RS IBNU SINA';
        }
        $colors = ['#495371', '#74959A', '#98B4AA', '#1C658C', '#398AB9'];

        $data = User::where('rumahsakit',$rs)->first();
        return view('rs-jadwal',['data'=>$data,'colors'=>$colors]);
    }
    
}