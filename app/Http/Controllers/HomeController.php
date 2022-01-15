<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Berita;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        $tapos = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%TAPOS%']])
        ->get();

        $cilodong = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%CILODONG%']])
        ->get();

        $cipayung = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%CIPAYUNG%']])
        ->get();

        return view("home",[
            'beritas'=>$beritas,
            'tapos'=>$tapos,
            'cilodong'=>$cilodong,
            'cipayung'=>$cipayung
    ]);
    }

    public function show(Request $request, $slug){
        $data = Category::where('slug', $slug)->get()[0];
        $category = ProfilWisata::where('category_id', $data->id)->get();
        return view('category', [
            'beritas' => db::table('beritas')->latest()->take(4)->get(),
            'categories' => $category
        ]);
    }
  
    // public function wisataAlam(){
    //     $katWisataAlam = ProfilWisata::where('category_id', 1)
    //     ->get();
    //     return view("wisataAlam",['categories'=>$katWisataAlam]);
    // }
}
