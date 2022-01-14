<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->get();
        $kecamatan = Kecamatan::all();
        return view("home",['beritas'=>$beritas,'kecamatan'=>$kecamatan]);
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
