<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $guarded =[
        "id"
    ];

    public function profilwisata(){
        return $this->belongsTo(ProfilWisata::class);
    }

    public function berita(){
        return $this->belongsTo(Berita::class);
    }

    public function koleksi(){
        return $this->hasMany(Koleksi::class);
    }
}
