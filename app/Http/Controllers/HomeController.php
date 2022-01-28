<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Video;
use App\Models\Berita;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\Configurasi;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $rss = app('App\Http\Controllers\RssController')->rss();
        dd($rss);
        $videoWelcome = Video::where('berita_id',3)->get();
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        $wisatas = DB::table('profil_wisatas')->whereNotNull('urutan')->get();

        $config = Configurasi::all();

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
            'videoWelcome'=>$videoWelcome,
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
            'fotos' => $foto,
            'config' => $config,
            'rss' => $rss
    ]);
    }

    public function show(Request $request, $slug){
        if(count(ProfilWisata::where('slug', $slug)->get()) > 0){
            $data = ProfilWisata::where('slug', $slug)->get();
        }else{
            $data = Berita::where('slug', $slug)->get();
        }
        
        $koleksis = $data[0]->koleksi;
        $foto = $data[0]->foto;
        $video = $data[0]->video;
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        $fotos = [];
        $videos = [];
        $koleksiFoto = [];
        $koleksiVideo = [];
        foreach ($koleksis as $koleksi) {
            if($koleksi->jenis == 'koleksifoto'){
                $fotos[] = $koleksi->foto;
            }else{
                $videos[] = $koleksi->video;
            }
        }

        foreach ($koleksis as $koleksi) {
            if($koleksi->jenis == "koleksifoto"){
                $koleksiFoto[] = $koleksi;
            }else{
                $koleksiVideo[] = $koleksi;
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
            'koleksis' => $koleksis,
            'koleksiFoto' => $koleksiFoto,
            'koleksiVideo' => $koleksiVideo,
            'foto' => $foto,
            'video' => $video,
            'fotos' => $fotos,
            'videos' => $videos,
            "categories" => Category::all(),
            'urlBack' => $title->slug
        ]);
    }

    public function show2($slug){
        $wisatas = DB::table('profil_wisatas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        $foto = [];
        
        
        $category = Category::where('slug', $slug)->get()[0];
        $datas = ProfilWisata::where('category_id', $category->id)->get();
        
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        
        foreach($wisatas as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
        }
        
        $fotoData = [];
        
        for ($i=0; $i < count($datas); $i++) { 
            $foto1 = Foto::where('profil_wisata_id', $datas[$i]->id)->get();
            if(count($foto1) == 0){
                $fotoData[] = 'images/jika.jpg';
            }else{
                // dd($foto1);
                $fotoData[] = $foto1[0];
            }
        }
        
        return view('category',[
            "categories" => Category::all(),
            'fotos' => $foto,
            'beritas'=>$beritas,
            'wisatas'=>$wisatas,
            'datas' => $datas,
            'fotoData' => $fotoData,
            'namaHal' => $category->nama                          
        ]);
    }

   
    public function homeWisataAlam($kecamatan,$category){
        $city = DB::table('profil_wisatas')
        ->where([['category_id', '<=', $category],['alamat', 'like', '%'.$kecamatan.'%']])
        ->get();
        return $city;
    }
    public function listHotel(){
        $wisatas = DB::table('profil_wisatas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        $foto = [];

        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        foreach($wisatas as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
        }
        $hotel = DB::table('profil_wisatas')->where('category_id',8)->get();
        return view('listDestinasi',[
            "categories" => Category::all(),
            'fotos' => $foto,
            'beritas'=>$beritas,
            'wisatas'=>$wisatas,
            'hotels'=>$hotel                             
        ]);
    }
     public function indexWelcome(){
       
        $video = Video::where('berita_id',3)->get();
      
        return view('welcome', [
            'video' => $video
        ]);
    }
  
}
?>