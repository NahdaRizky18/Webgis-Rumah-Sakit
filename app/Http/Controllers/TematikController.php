<?php

namespace App\Http\Controllers;

use App\Models\Tematik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TematikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tematik',[
            'data'=>Tematik::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-tematik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName="";
        if ($request->hasFile('geojson')) {
            $fileName = $request->geojson->store('public/geojson');
            $fileName = str_replace("public/", "", $fileName);
        }
        Tematik::create([
            'kecamatan'=>$request->kecamatan,
            'warna'=>$request->warna,
            'geojson'=>$fileName
        ]);
        return redirect()->route('halaman tematik');
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
        return view('edit-tematik',[
            'data'=>Tematik::find($id),
            'id'=>$id
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
        $fileName="";
        if ($request->hasFile('geojson')) {
            $file_path = storage_path('app/public/' . $request->geojson_lama);
        if (File::exists($file_path)) File::delete($file_path);
            $fileName = $request->geojson->store('public/geojson');
            $fileName = str_replace("public/", "", $fileName);
        }else{
            $fileName = $request->geojson_lama;
        }
        Tematik::find($id)->update([
            'kecamatan'=>$request->kecamatan,
            'warna'=>$request->warna,
            'geojson'=>$fileName
        ]);
        return redirect()->route('halaman tematik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tematik = Tematik::find($id);
        $file_path = storage_path('app/public/' . $tematik->geojson);
        if (File::exists($file_path)) File::delete($file_path);
        $tematik->delete();
        return back();
    }
}
