<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory,Sluggable;

    
    protected $guarded =[
        "id"
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function foto(){
        return $this->hasMany(Foto::class);
    }

    public function video(){
        return $this->hasMany(video::class);
    }

    public function koleksi(){
        return $this->hasMany(koleksi::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
