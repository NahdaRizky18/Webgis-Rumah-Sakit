<?php

namespace App\Http\Controllers;

use App\Models\HalamanData;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function places()
    {
        $places = HalamanData::orderBy('alamat', 'ASC');
        return datatables()->of($places)
            ->addColumn('action', 'places.buttons')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
