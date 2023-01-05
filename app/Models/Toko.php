<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'toko';

    protected $fillable = [
        'nama_toko', 'slug', 'no_telp', 'alamat', 'foto'
    ];

    protected $hidden = [];

    public function toko_desa() {
        return $this->hasMany(Toko::class, 'toko_id', 'id');
    }
}
