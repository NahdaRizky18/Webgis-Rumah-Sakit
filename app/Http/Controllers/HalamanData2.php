<?php

namespace App\Http\Controllers;

use App\Models\HalamanData2 as ModelsHalamanData2;
use App\Models\Tematik;
use CreateHalamanDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HalamanData2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("halaman-data2", [
            'data' => ModelsHalamanData2::with('tematik')->get()
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
        return view('tambah-data2', ['tematik' => $tematik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsHalamanData2::create($request->all());
        return redirect()->route('halaman data2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        return view('edit2', [
            'data' => ModelsHalamanData2::with('tematik')->find($id),
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
        ModelsHalamanData2::find($id)->update($request->all());
        return redirect()->route('halaman data2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsHalamanData2::find($id)->delete();
        return back();
    }
}
