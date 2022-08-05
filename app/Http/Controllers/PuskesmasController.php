<?php

namespace App\Http\Controllers;

use App\Models\HalamanData as ModelsHalamanData;
use App\Models\Puskesmas;
use App\Models\Tematik;
use CreateHalamanDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PuskesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("puskesmas", [
            'data' => Puskesmas::with('tematik')->get()
        ]);
    }
    public function map()
    {
        $geofile = [];
        $color = [];
        $coor = [];
        $index = 0;
        $index2 = 0;
        $tematik = Tematik::all();
        $data = Puskesmas::all();
        foreach ($tematik as $item) {
            $geofile[$index] = 'storage/' . $item->geojson;
            $index++;
        }
        foreach ($tematik as $item) {
            $color[$item->kecamatan] = $item->warna;
        }
        foreach ($data as $item) {
            $coor[$index2] = [$item->puskesmas? $item->puskesmas : $item->klinik, $item->lat, $item->long];
            $index2++;
        }
        $kecamatan = $tematik->pluck('kecamatan');
        $jumlah = [];
        $count = Tematik::withCount('puskesmas')->get();
        $index = 0;
        foreach ($count as $item) {
            $jumlah[$item->kecamatan] = $item->puskesmas_count;
        }
        return view('maps', [
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor,
            'jumlah' => $jumlah,
            'kecamatan'=> $kecamatan,
            'state' => 1
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tematik = Tematik::all();
        return view('tambah-puskesmas', ['tematik' => $tematik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = "";
        if ($request->hasFile('gambar')) {
            $fileName = $request->gambar->store('public/images');
            $fileName = str_replace("public/", "", $fileName);
        }
        Puskesmas::create([
            'alamat' => $request->alamat,
            'tematik_id' => $request->kecamatan,
            'puskesmas' => $request->puskesmas,
            'klinik' => $request->klinik,
            'ketersediaan' => $request->sedia,
            'no_hp' => $request->no_hp,
            'gambar' => $fileName,
            'long' => $request->long,
            'lat' => $request->lat

        ]);
        return redirect()->route('puskesmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detail-puskesmas', [
            'data' => Puskesmas::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tematik = Tematik::all();
        return view('edit-puskesmas', [
            'data' => Puskesmas::with('tematik')->find($id),
            'id' => $id,
            'tematik' => $tematik,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fileName = "";
        if ($request->hasFile('gambar')) {
            $file_path = storage_path('app/public/' . $request->gambar_lama);
            if (File::exists($file_path)) File::delete($file_path);
            $fileName = $request->gambar->store('public/images');
            $fileName = str_replace("public/", "", $fileName);
        } else {
            $fileName = $request->gambar_lama;
        }
        Puskesmas::find($id)->update([
            'alamat' => $request->alamat,
            'puskesmas' => $request->puskesmas,
            'klinik' => $request->klinik,
            'tematik_id' => $request->kecamatan,
            'ketersediaan' => $request->sedia,
            'no_hp' => $request->no_hp,
            'gambar' => $fileName,
            'long' => $request->long,
            'lat' => $request->lat
        ]);
        return redirect()->route('puskesmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Puskesmas::find($id);
        $file_path = storage_path('app/public/' . $data->gambar);
        if (File::exists($file_path)) File::delete($file_path);
        $data->delete();
        return back();
    }
}
