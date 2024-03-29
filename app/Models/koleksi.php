<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory,Sluggable;

    protected $guarded =[
        "id"
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function foto(){
        return $this->hasMany(Foto::class);
    }

    public function video(){
        return $this->hasMany(video::class);
    }

    public function profilwisata(){
        return $this->belongsTo(ProfilWisata::class);
    }

    public function berita(){
        return $this->belongsTo(Berita::class);
    }

    public function configurasi(){
        return $this->belongsTo(Configurasi::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
