<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanData2 extends Model
{
    use HasFactory;
    protected $guarded = [];
    function tematik()
    {
        return $this->belongsTo(Tematik::class, 'tematik_id', 'id');
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class,'halaman_data2_id','id');
    }
}
