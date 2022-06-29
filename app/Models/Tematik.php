<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tematik extends Model
{
    use HasFactory;
    protected $fillable = [
        'kecamatan',
        'warna',
        'geojson'
    ];
    function data()
    {
        return $this->hasMany(HalamanData::class, 'tematik_id', 'id');
    }
}
