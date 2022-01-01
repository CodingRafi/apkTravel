<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded =[
        "id"
    ];

    public function campuran(){
        return $this->hasMany(Campuran::class);
    }

    public function berita(){
        return $this->hasMany(Berita::class);
    }
}