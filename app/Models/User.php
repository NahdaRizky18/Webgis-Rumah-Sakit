<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'level',
        'email',
        'password',
        'rumahsakit'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function rumahsakit(){
        return $this->belongsTo(HalamanData2::class,'halaman_data2_id','id');
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class,'user_id','id');
    }
    public function dokter(){
        return $this->hasMany(HalamanData2::class,'rumahsakit','rumahsakit');
    }
    public function ruangan(){
        return $this->hasMany(Ruangan::class,'user_id','id');
    }
}
