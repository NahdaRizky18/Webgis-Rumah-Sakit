<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanData extends Model
{
    use HasFactory;
    protected $guarded = [];
    function tematik()
    {
        return $this->belongsTo(Tematik::class, 'tematik_id', 'id');
    }
    public function rumahsakit(){
        return $this->hasMany(Saran::class,'rumah_sakit','rumah_sakit');
    }
}
