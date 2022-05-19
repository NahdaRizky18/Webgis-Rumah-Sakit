<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use App\Models\HalamanData2;
use App\Models\Saran;
use App\Models\Tematik;
use App\Models\User;
use Illuminate\Http\Request;

class GuessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panduanUser()
    {
        return view('panduanUser');
    }
    public function index()
    {
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
            $nilai = 0;
            if ($item->rumahsakit->sum('nilai')) {
                $nilai = $item->rumahsakit->sum('nilai') / $item->rumahsakit->count();
            }
            $coor[$index2] = [$item->alamat, $item->lat, $item->long, $item->rumah_sakit, $item->id, $nilai];
            $index2++;
        }
        return view('welcome', [
            'geofile' => $geofile,
            'color' => $color,
            'data' => $coor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Saran::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function rsUser()
    {
        return view('rs-user');
    }
    public function jadwalUser($id)
    {
        $rs = "";
        $d = HalamanData::find($id);
        $colors = ['#495371', '#74959A', '#98B4AA', '#1C658C', '#398AB9'];

        $data = User::whereHas('dokter')->where('rumahsakit', $d->rumah_sakit)->first();
        return view('rs-jadwal-user', ['data' => $data, 'colors' => $colors]);
    }
    public function dokter()
    {
        $data = HalamanData2::all();
        return view('dataDokterUser', ['data' => $data]);
    }
}
