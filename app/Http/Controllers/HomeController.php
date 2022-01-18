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

       
        $wisatas = DB::table('profil_wisatas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        $foto = [];
        foreach($wisatas as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
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
            'wisatas'=>$wisatas,
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
        if(count(ProfilWisata::where('slug', $slug)->get()) > 0){
            $data = ProfilWisata::where('slug', $slug)->get();
        }else{
            $data = Berita::where('slug', $slug)->get();
        }

        $koleksi = $data[0]->koleksi;
        $foto = $data[0]->foto;
        $video = $data[0]->video;
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        $fotos = [];
        $videos = [];
        if(count($koleksi) > 0){
            for($i = 0; $i < count($koleksi); $i++){
                if($koleksi[$i]->jenis == 'koleksifoto'){
                    if(count($koleksi[$i]->foto) == 0){
                        $fotos[] = [
                            'fotoGada' => '/images/jika.jpg'
                        ];
                    }else{
                        $fotos[] = [
                            'fotoAda' => $koleksi[$i]->foto
                        ];
                    }
                }else{
                    if(count($koleksi[$i]->video) == 0){
                        $videos[] = [
                            'videoGada' => "/images/jika.jpg"
                        ];
                    }else{
                        $videos[] = [
                            'videoAda' => $koleksi[$i]->video
                        ];
                    }
                }
            }
        }

        $title =  Category::where('id', $data[0]->category_id)->get()[0];
        if($data[0]->category_id >= 10){
            $halaman = 'detail.berita';
        }else{
            $halaman = 'detail.wisata';
        }
        return view($halaman, [
            'beritas'=>$beritas,
            'title' => $title->nama,
            'data' => $data,
            'koleksis' => $koleksi,
            'foto' => $foto,
            'video' => $video,
            'fotos' => $fotos,
            'videos' => $videos,
            "categories" => Category::all(),
            'urlBack' => $title->slug
        ]);
    }

    public function show2(){
        $wisatas = DB::table('profil_wisatas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        $foto = [];
        foreach($wisatas as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
        }
        
        return view('category',[
            "categories" => Category::all(),
            'fotos' => $foto                                     
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