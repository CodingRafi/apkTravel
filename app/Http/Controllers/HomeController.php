<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->get();
        return view("home",['beritas'=>$beritas]);
    }

    public function wisataAlam(){
        $katWisataAlam = ProfilWisata::where('category_id', 1)
        ->get();
        return view("wisataAlam",['categories'=>$katWisataAlam]);
    }

    public function wisataBuatan(){
        $katWisataBuatan = ProfilWisata::where('category_id', 2)
        ->get();
        return view("wisataBuatan",['categories'=>$katWisataBuatan]);
    }

    public function wisataBudaya(){
        $katWisataBudaya = ProfilWisata::where('category_id', 3)
        ->get();
        return view("wisataBudaya",['categories'=>$katWisataBudaya]);
    }

    public function resto(){
        $katResto = ProfilWisata::where('category_id', 4)
        ->get();
        return view("resto",['categories'=>$katResto]);
    }

    public function kuliner(){
        $katKuliner = ProfilWisata::where('category_id', 5)
        ->get();
        return view("kuliner",['categories'=>$katKuliner]);
    }

    public function kafe(){
        $katKafe = ProfilWisata::where('category_id', 6)
        ->get();
        return view("kafe",['categories'=>$katKafe]);
    }

    public function oleholeh(){
        $katOleholeh = ProfilWisata::where('category_id', 7)
        ->get();
        return view("oleholeh",['categories'=>$katOleholeh]);
    }
    
    public function hotel(){
        // $hotel = Category::where('id', 8)
        // ->get();
        $katHotel = ProfilWisata::where('category_id', 8)
        ->get();
        return view("hotel",['categories'=>$katHotel]);
    }

    public function travel(){
        $katTravel = ProfilWisata::where('category_id', 9)
        ->get();
        return view("travel",['categories'=>$katTravel]);
    }
}
