<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'jadwal',
    ];
    function dokter(){
        return $this->belongsTo(HalamanData2::class,'halaman_data2_id','id');
    }
}
