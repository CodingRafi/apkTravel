<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            "judul" => "Pemkot Depok Pasang 10.696 Lampu PJU Sepanjang Tahun 2021",
            "slug" => "pemkot-depok-pasang-10696-lampu-pju-sepanjang-tahun-2021",
            "excerpt" => "berita.depok.go.id- Sepanjang tahun 2021, Dinas Perhubungan (Dishub) Kota Depok telah memasang sebanyak 10.696 lampu Penerangan Jalan Umum (PJU). Lampu PJU ini tersebar pada Jalan Protokol di 11 kecamatan se-Kota Depok. Kepala Dishub Kota Depok, Eko Herwiyanto mengatakan, tahun 2020, lampu PJU yang terpasang di Kota Depok sebanyak 10.696 lampu PJU. 
            
            “Berdasarkan kajian, Kota Depok membutuhkan 23 ribu lampu PJU untuk menerangi seluruh titik jalan, sehingga masih menyisakan kurang lebih 12 ribu yang belum terpasang,” ucapnya kepada berita.depok.go.id, Jumat (31/12/21).
            
            Dirinya menjelaskan, untuk 12 ribu lampu PJU yang belum terpasang juga sudah dipetakan.",
            "category_id" => "14",
            "image" => "img.png",
            "body" => "berita.depok.go.id- Sepanjang tahun 2021, Dinas Perhubungan (Dishub) Kota Depok telah memasang sebanyak 10.696 lampu Penerangan Jalan Umum (PJU). Lampu PJU ini tersebar pada Jalan Protokol di 11 kecamatan se-Kota Depok. Kepala Dishub Kota Depok, Eko Herwiyanto mengatakan, tahun 2020, lampu PJU yang terpasang di Kota Depok sebanyak 10.696 lampu PJU. 
            
            “Berdasarkan kajian, Kota Depok membutuhkan 23 ribu lampu PJU untuk menerangi seluruh titik jalan, sehingga masih menyisakan kurang lebih 12 ribu yang belum terpasang,” ucapnya kepada berita.depok.go.id, Jumat (31/12/21).
            
            Dirinya menjelaskan, untuk 12 ribu lampu PJU yang belum terpasang juga sudah dipetakan. Yakni terdiri dari 3.000 titik adalah lampu PJU di jalan-jalan protokol dan  9.900 titik terletak di jalan lingkungan.
            
            Selain itu, sambung Eko, pihak kelurahan juga sudah didelegasikan untuk menangani pemasangan PJU jalan lingkungan. Sesuai Peraturan Menteri Dalam Negeri (Permendagri), masing-masing kelurahan telah mendapatkan pagu anggaran. 
            
            “Untuk mengejar kebutuhan PJU di jalan lingkungan, bisa melalui kelurahan karena mereka punya pagu anggarannya sendiri dan lebih tahu prioritas lokasinya,” jelasnya.
            
            Eko menambahkan, pihaknya juga terus melakukan pemeliharaan lampu PJU. Untuk itu, belasan personel  disiagakan untuk memantau lampu PJU di Kota Depok.
            
            “Demi memelihara kondisi lampu PJU yang sudah terpasang 15 personel disiagakan dengan armada empat mobil crane, dan satu mobil crane besar,” tambahnya.
            
            Terakhir, Eko berpesan, masyarakat juga dapat melapor jika terdapat lampu PJU yang tidak berfungsi. Pihaknya menyediakan call center 02178900083 yang dapat diakses pada jam kerja. Kemudian, bisa juga menghubungi layanan Emergency Call 112 dan aplikasi Sigap milik Kota Depok. 
            
            “Belasan petugas yang bersiaga itu dibagi berdasarkan wilayah timur dan barat. Sebanyak 15 orang dibagi dua wilayah, barat di Pancoran Mas, Sawangan, Limo, Bojongsari, dan Cinere. Kalau timur itu Sukmajaya, Cilodong, Tapos, dan Cimanggis,” tutupnya. (JD03/ED02/EUD02)"
        ]);
    }
}
