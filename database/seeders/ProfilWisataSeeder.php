<?php

namespace Database\Seeders;

use App\Models\ProfilWisata;
use Illuminate\Database\Seeder;

class ProfilWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        ProfilWisata::create([
            'category_id' => "1",
            "nama" => "Setu Cilodong",
            "slug" => 'setu-cilodong',
            "no_telp" => "081574434628",
            "alamat" => "Cilodong",
            "deskripsi" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam id voluptatum itaque sapiente eos expedita qui libero. Exercitationem neque quaerat quam animi dicta nam! Doloremque quam nesciunt veniam eligendi assumenda reiciendis, numquam aperiam earum id voluptas porro aspernatur rem? Minus ipsam aspernatur neque ducimus aliquam tempora libero beatae, labore maxime ipsa velit adipisci quis placeat accusantium ut deserunt molestiae soluta harum asperiores vero! Eum labore veritatis dolor ducimus aspernatur quibusdam illo exercitationem aut quae, iste quidem, dolore incidunt. Aliquid iste, voluptatibus necessitatibus provident, molestiae, maxime tempore facilis pariatur sed architecto cum! Tempore velit eaque amet enim illum dolorem sint aspernatur.",
            "pengelola" => "Budi",
            "foto/video" => "img.png"
        ]);

        ProfilWisata::create([
            'category_id' => "2",
            "nama" => "Setu Cilangkap",
            "slug" => 'setu-cilangkap',
            "no_telp" => "081574434628",
            "alamat" => "cilangkap",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ipsa voluptates quam exercitationem quia dolor, quasi eligendi distinctio. Placeat, explicabo! Error minus quam expedita facere aliquam blanditiis cupiditate labore ex at quos ut sequi impedit nihil nemo voluptatem sit aspernatur doloribus, eum qui amet tenetur autem. Facere harum quidem rem iste nesciunt cupiditate rerum, fuga corrupti qui ipsam provident excepturi sit. Necessitatibus laboriosam quo dolorum quidem nostrum perspiciatis ut possimus, illum, cupiditate facilis, velit odit! Eveniet sequi dolor blanditiis dignissimos magni iusto numquam nihil adipisci nobis beatae quidem velit libero reiciendis, eligendi, cumque soluta atque ad qui perspiciatis! Quisquam provident rerum voluptas incidunt ducimus repellat iusto est mollitia adipisci ad laudantium aliquam inventore consectetur, natus eaque asperiores laborum sint sequi minus voluptatibus optio. Nulla aspernatur doloribus asperiores minima culpa dolores, iure, ex ea suscipit unde mollitia atque impedit voluptatibus laborum velit, aperiam voluptatum exercitationem voluptate numquam odit inventore in. Tenetur?",
            "pengelola" => "Yudi",
            "foto/video" => "setu.png"
        ]);

        ProfilWisata::create([
            'category_id' => "3",
            "nama" => "Masjid Al-mutaqqin",
            "slug" => 'masjid-al-mutaqqin',
            "no_telp" => "081574434628",
            "alamat" => "cilangkap",
            "deskripsi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ipsa voluptates quam exercitationem quia dolor, quasi eligendi distinctio. Placeat, explicabo! Error minus quam expedita facere aliquam blanditiis cupiditate labore ex at quos ut sequi impedit nihil nemo voluptatem sit aspernatur doloribus, eum qui amet tenetur autem. Facere harum quidem rem iste nesciunt cupiditate rerum, fuga corrupti qui ipsam provident excepturi sit. Necessitatibus laboriosam quo dolorum quidem nostrum perspiciatis ut possimus, illum, cupiditate facilis, velit odit! Eveniet sequi dolor blanditiis dignissimos magni iusto numquam nihil adipisci nobis beatae quidem velit libero ",
            "pengelola" => "Boni",
            "foto/video" => "masjid.png"
        ]);

    }
}
