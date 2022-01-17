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

        $tapos=$this->homeWisataAlam('TAPOS',3);
        $cilodong=$this->homeWisataAlam('CILODONG',3);
        $cipayung=$this->homeWisataAlam('CIPAYUNG',3);
        $sawangan=$this->homeWisataAlam('SAWANGAN',3);
        $bojongsari=$this->homeWisataAlam('BOJONGSARI',3);
        $sukmajaya=$this->homeWisataAlam('SUKMAJAYA',3);
        $pancoranmas=$this->homeWisataAlam('PANCORANMAS',3);
        $cimanggis=$this->homeWisataAlam('CIMANGGIS',3);
        $beji=$this->homeWisataAlam('BEJI',3);
        $limo=$this->homeWisataAlam('LIMO',3);
        $cinere=$this->homeWisataAlam('CINERE',3);
       


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
  
    public function homeWisataAlam($kecamatan,$category){
        $city = DB::table('profil_wisatas')
        ->where([['category_id', '<=', $category],['alamat', 'like', '%'.$kecamatan.'%']])
        ->get();
        return $city;
    }
}
?>