<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilWisata;
use App\Models\Category;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Video;

class DashboardController extends Controller
{
    public function index(){
        return view("dashboard.dashboard", [
            "categories" => Category::all(),
            "title" => "Dashboard",
            "foto" => count(Foto::all()),
            "video" => count(Video::all()),
            "berita" => count(Berita::all()),
            "wisataAlam" => count(ProfilWisata::where('category_id', 1)->get()),
            "wisataBuatan" => count(ProfilWisata::where('category_id', 2)->get()),
            "wisataBudaya" => count(ProfilWisata::where('category_id', 3)->get()),
            "resto" => count(ProfilWisata::where('category_id', 4)->get()),
            "kuliner" => count(ProfilWisata::where('category_id', 5)->get()),
            "kafe" => count(ProfilWisata::where('category_id', 6)->get()),
            "olehOleh" => count(ProfilWisata::where('category_id', 7)->get()),
            "hotel" => count(ProfilWisata::where('category_id', 8)->get()),
            "travel" => count(ProfilWisata::where('category_id', 9)->get()),
            "beritaPembangunan" => count(Berita::where('category_id', 10)->get()),
            "beritaEkonomi" => count(Berita::where('category_id', 11)->get()),
            "beritaKesos" => count(Berita::where('category_id', 12)->get()),
            "beritaPemerintahan" => count(Berita::where('category_id', 13)->get()),
        ]);
    }
}
