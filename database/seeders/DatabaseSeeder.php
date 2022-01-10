<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Hotel;
use \App\Models\Berita;
use \App\Models\User;

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

    }
}
