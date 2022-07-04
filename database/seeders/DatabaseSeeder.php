<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Hotel;
use \App\Models\Berita;
use \App\Models\User;
use \App\Models\Configurasi;
use \App\Models\Kecamatan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        User::create([
            'username' => "admin",
            "password" => bcrypt('admin')
        ]);

        Kecamatan::create([
            'nama' => 'Tapos',
            'slug' => 'tapos'
        ]);

        Kecamatan::create([
            'nama' => 'Cilodong',
            'slug' => 'cilodong'
        ]);

        Kecamatan::create([
            'nama' => 'Cipayung',
            'slug' => 'cipayung'
        ]);

        Kecamatan::create([
            'nama' => 'Sawangan',
            'slug' => 'sawangan'
        ]);

        Kecamatan::create([
            'nama' => 'Bojongsari',
            'slug' => 'bojongsari'
        ]);

        Kecamatan::create([
            'nama' => 'Sukmajaya',
            'slug' => 'sukmajaya'
        ]);

        Kecamatan::create([
            'nama' => 'Pancoran Mas',
            'slug' => 'pancoran-mas'
        ]);

        Kecamatan::create([
            'nama' => 'Cimanggis',
            'slug' => 'cimanggis'
        ]);

        Kecamatan::create([
            'nama' => 'Beji',
            'slug' => 'beji'
        ]);

        Kecamatan::create([
            'nama' => 'Limo',
            'slug' => 'limo'
        ]);

        Kecamatan::create([
            'nama' => 'Cinere',
            'slug' => 'cinere'
        ]);

        Configurasi::create([
            "contact" => '0217773610',
            "alamat" => 'Jl. Margonda Raya, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431'
        ]);

    }
}
