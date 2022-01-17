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

        // dd($beritas);

        $foto = [];
        foreach($beritas as $berita){
            $foto[] = Foto::where('berita_id', $berita->id)->get();
        }

        $tapos = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%TAPOS%']])
        ->get();

        $cilodong = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%CILODONG%']])
        ->get();

        $cipayung = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%CIPAYUNG%']])
        ->get();

        $sawangan = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%SAWANGAN%']])
        ->get();

        $bojongsari = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%BOJONGSARI%']])
        ->get();

        $sukmajaya = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%SUKMAJAYA%']])
        ->get();

        $pancoranmas = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%PANCORANMAS%']])
        ->get();

        $cimanggis = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%CIMANGGIS%']])
        ->get();

        $beji = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%BEJI%']])
        ->get();

        $limo = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%limo%']])
        ->get();

        $cinere = DB::table('profil_wisatas')
        ->where([['category_id', '<=', '3'],['alamat', 'like', '%CINERE%']])
        ->get();

        return view("home",[
            'beritas'=>$beritas,
            'tapos'=>$tapos,
            'cilodong'=>$cilodong,
            'cipayung'=>$cipayung,
            'sawangan'=>$sawangan,
            'bojongsari'=>$bojongsari,
            'sukmajaya'=>$sukmajaya,
            'pancoranmas'=>$pancoranmas,
            'cimanggis'=>$cimanggis,
            'beji'=>$beji,
            'limo'=>$limo,
            'cinere'=>$cinere,
            'fotos' => $foto
    ]);
    }

    public function show(Request $request, $slug){
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        // dd($beritas);

        $foto = [];
        foreach($beritas as $berita){
            $foto[] = Foto::where('berita_id', $berita->id)->get();
        }

        $data = Berita::where('slug', $slug)->get()[0];
        $title =  Category::where('id', $data->category_id)->get()[0];
        return view('detail.berita', [
            'beritas'=>$beritas,
            'berita' => $data,
            'title' => $title->nama,
            "categories" => Category::all(),
            'fotos'=>$foto,
            'foto' => $data->foto,
            'video' => $data->video,
            'urlBack' => $data->category->slug
        ]);
    }
  
    // public function wisataAlam(){
    //     $katWisataAlam = ProfilWisata::where('category_id', 1)
    //     ->get();
    //     return view("wisataAlam",['categories'=>$katWisataAlam]);
    // }
}
?>