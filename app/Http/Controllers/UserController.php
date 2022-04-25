<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Puskesmas;
use App\Models\Ruangan;
use App\Models\Tematik;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function map($state = 0)
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
        if ($state) {
            $data = Puskesmas::all();
        } else {
            $data = HalamanData::all();
        }
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
            'list_poli' => $list_poli,
            'poli' => $poli,
            'dokter' => $dokter,
            'perawat' => $perawat,
            'colors' => $colors,
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor,
            'tematik' => $tematik,
            'state'=>$state
        ]);
    }
    public function data($id = null, $kelas_id = null)
    {
        $rs = "";
        if ($id == 1) {
            $rs = 'RSUD TGK.CHICK DITIRO';
        } else if ($id == 2) {
            $rs = "RSUD ABDULLAH SYAFI'I";
        } else if ($id == 3) {
            $rs = 'RS CITRA HUSADA';
        } else if ($id == 4) {
            $rs = 'RS MUFID';
        } else if ($id == 5) {
            $rs = 'RS IBNU SINA';
        }
        $colors = ['#495371', '#398AB9'];
        $data = new HalamanData();
        $data2 = new HalamanData2();
        $poli = $data2->where('poli', '!=', '-')->groupBy('poli')->get()->count();
        $dokter = $data->sum(DB::raw('dokter_umum + dokter_spesialis'));
        $perawat = $data->sum(DB::raw('perawat'));
        $list_poli = $data2->groupBy('rumahsakit')->get();
        $user = User::where('rumahsakit', $rs)->first();
        $kelas = $user->ruangan->unique('kelas');
        $kelasData = Ruangan::where('kelas', $kelas_id)->get();
        $ruangan = [];
        foreach ($user->ruangan as $item) {
            if (isset($ruangan[$item->kelas])) {
                $ruangan[$item->kelas] += $item->tersedia;
            } else {
                $ruangan[$item->kelas] = $item->tersedia;
            }
        }
        return view('dataUser', [
            'list_poli' => $list_poli,
            'poli' => $poli,
            'dokter' => $dokter,
            'perawat' => $perawat,
            'colors' => $colors,
            'kelas' => $kelas,
            'ruangan' => $ruangan,
            'kelasData' => $kelasData,
            'id' => $id
        ]);
    }
}
