<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nama' => "Wisata Alam",
            "slug" => "wisata-alam"
        ]);

        Category::create([
            'nama' => "Wisata Buatan",
            "slug" => "wisata-buatan"
        ]);

        Category::create([
            'nama' => "Wisata Budaya",
            "slug" => "wisata-budaya"
        ]);

        Category::create([
            'nama' => "Resto",
            "slug" => "resto"
        ]);
        
        Category::create([
            'nama' => "Kuliner",
            "slug" => "kuliner"
        ]);

        Category::create([
            'nama' => "Kafe",
            "slug" => "kafe"
        ]);

        Category::create([
            'nama' => "Oleh Oleh",
            "slug" => "oleh-oleh"
        ]);

        Category::create([
            'nama' => "Berita",
            "slug" => "Berita"
        ]);

        Category::create([
            'nama' => "Hotel",
            "slug" => "hotel"
        ]);

        Category::create([
            'nama' => "Travel",
            "slug" => "travel"
        ]);

        Category::create([
            'nama' => "Berita Pembangunan",
            "slug" => "berita-pembangunan"
        ]);

        Category::create([
            'nama' => "Berita Ekonomi",
            "slug" => "berita-ekonomi"
        ]);

        Category::create([
            'nama' => "Berita Kesos",
            "slug" => "berita-kesos"
        ]);

        Category::create([
            'nama' => "Berita Pemerintahan",
            "slug" => "berita-pemerintahan"
        ]);
    }
}
