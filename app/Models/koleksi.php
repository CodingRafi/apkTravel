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

    public function foto(){
        return $this->hasMany(Foto::class);
    }

    public function video(){
        return $this->hasMany(Video::class);
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
