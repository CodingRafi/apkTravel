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
            'nama' => 'Tapos'
        ]);

        Kecamatan::create([
            'nama' => 'Cilodong'
        ]);

        Kecamatan::create([
            'nama' => 'Cipayung'
        ]);

        Kecamatan::create([
            'nama' => 'Sawangan'
        ]);

        Kecamatan::create([
            'nama' => 'Bojongsari'
        ]);

        Kecamatan::create([
            'nama' => 'Sukmajaya'
        ]);

        Kecamatan::create([
            'nama' => 'Pancoranmas'
        ]);

        Kecamatan::create([
            'nama' => 'Cimanggis'
        ]);

        Kecamatan::create([
            'nama' => 'Beji'
        ]);

        Kecamatan::create([
            'nama' => 'Limo'
        ]);

        Kecamatan::create([
            'nama' => 'Cinere'
        ]);

        Configurasi::create([
            "contact" => '0217773610',
            "alamat" => 'Jl. Margonda Raya, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431'
        ]);

    }
}
