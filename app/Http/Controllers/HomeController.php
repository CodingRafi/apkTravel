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
        $videoWelcome = Video::where('berita_id',3)->get();
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        $wisatas = [];
        for ($i=0; $i < 10; $i++) { 
            $sementara = ProfilWisata::where('urutan', $i+1)->get();
            if(count($sementara) > 0){
                $wisatas[] = $sementara[0];
            }
        }
        // $wisatas[] = DB::table('profil_wisatas')->whereNotNull('urutan')->get()[0];
        // $wisatas[] = ProfilWisata::where('urutan', null)->get();
        for ($i=0; $i < count(ProfilWisata::where('urutan', null)->get()); $i++) { 
            $sementara1 = ProfilWisata::where('urutan', null)->get()[$i];
            $wisatas[] = $sementara1;
        }
        
        $kecamatans = DB::table('kecamatans')->get();
        
        $config = Configurasi::all();
        
        $foto = [];
        foreach($wisatas as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
        }
        // dd($wisatas);
        // $tapos=$this->homeWisataAlam('TAPOS',3);
        // $cilodong=$this->homeWisataAlam('CILODONG',3);
        // $cipayung=$this->homeWisataAlam('CIPAYUNG',3);
        // $sawangan=$this->homeWisataAlam('SAWANGAN',3);
        // $bojongsari=$this->homeWisataAlam('BOJONGSARI',3);
        // $sukmajaya=$this->homeWisataAlam('SUKMAJAYA',3);
        // $pancoranmas=$this->homeWisataAlam('PANCORANMAS',3);
        // $cimanggis=$this->homeWisataAlam('CIMANGGIS',3);
        // $beji=$this->homeWisataAlam('BEJI',3);
        // $limo=$this->homeWisataAlam('LIMO',3);
        // $cinere=$this->homeWisataAlam('CINERE',3);

        $semuaData = [
            'Tapos' => ProfilWisata::where('kecamatan_id', 1)->get(),
            'Cilodong' => ProfilWisata::where('kecamatan_id', 2)->get(),
            'Cipayung' => ProfilWisata::where('kecamatan_id', 3)->get(),
            'Sawangan' => ProfilWisata::where('kecamatan_id', 4)->get(),
            'Bojongsari' => ProfilWisata::where('kecamatan_id', 5)->get(),
            'Sukmajaya' => ProfilWisata::where('kecamatan_id', 6)->get(),
            'Pancoranmas' => ProfilWisata::where('kecamatan_id', 7)->get(),
            'Cimanggis' => ProfilWisata::where('kecamatan_id', 8)->get(),
            'Beji' => ProfilWisata::where('kecamatan_id', 9)->get(),
            'Limo' => ProfilWisata::where('kecamatan_id', 10)->get(),
            'Cinere' => ProfilWisata::where('kecamatan_id', 11)->get()
        ];
        
       
            return view("home",[
                'kecamatans'=>$kecamatans,
                'videoWelcome'=>$videoWelcome,
                'beritas'=>$beritas,
                'wisatas'=>$wisatas,
                'semuaData' => $semuaData,
                'fotos' => $foto,
                'config' => $config,
                'rss' => $rss,
                'jumlah' => 10
        ]);
        //     return view("home",[
        //         'kecamatans'=>$kecamatans,
        //         'videoWelcome'=>$videoWelcome,
        //         'beritas'=>$beritas,
        //         'wisatas'=>$wisatas,
        //         'tapos'=>$tapos,
        //         'cilodong'=>$cilodong,
        //         'cipayung'=>$cipayung,
        //         'sawangan'=>$sawangan,
        //         'bojongsari'=>$bojongsari,
        //         'sukmajaya'=>$sukmajaya,
        //         'pancoranmas'=>$pancoranmas,
        //         'cimanggis'=>$cimanggis,
        //         'beji'=>$beji,
        //         'limo'=>$limo,
        //         'cinere'=>$cinere,
        //         'fotos' => $foto,
        //         'config' => $config,
        //         'rss' => $rss,
        //         'jumlah' => 10
        // ]);
    }

    public function show(Request $request, $slug){
        if(count(ProfilWisata::where('slug', $slug)->get()) > 0){
            $data = ProfilWisata::where('slug', $slug)->get();
        }else{
            $data = Berita::where('slug', $slug)->get();
        }
        
        $rss = app('App\Http\Controllers\RssController')->rss();

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
            'urlBack' => $title->slug,
            'rss' => $rss,
        ]);
    }

    public function show2($slug){
        $wisatas = DB::table('profil_wisatas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        $foto = [];
        
        $rss = app('App\Http\Controllers\RssController')->rss();

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
            'namaHal' => $category->nama,
            'rss' => $rss                          
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

        $rss = app('App\Http\Controllers\RssController')->rss();

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
            'hotels'=>$hotel,
            'rss' => $rss                             
        ]);
    }
     public function indexWelcome(){
       
        $video = Video::where('berita_id',3)->get();
      
        return view('welcome', [
            'video' => $video
        ]);
    }

    public function loadMore(Request $request){
        $wisatas = [];
        for ($i=0; $i < 10; $i++) { 
            $sementara = ProfilWisata::where('urutan', $i+1)->get();
            if(count($sementara) > 0){
                $wisatas[] = $sementara[0];
            }
        }

        // dd($wisatas);
        for ($i=0; $i < count(ProfilWisata::where('urutan', null)->get()); $i++) { 
            $sementara1 = ProfilWisata::where('urutan', null)->get()[$i];
            $wisatas[] = $sementara1;
        }

        $wisatasLoadMore = [];

        if(count($wisatas) <= $request->jumlah ){
            $wisatasLoadMore = $wisatas;
        }else{
            for ($i=0; $i < intVal($request->jumlah); $i++) { 
                $wisatasLoadMore[] = $wisatas[$i];
            }
        }

        $foto = [];
        foreach($wisatasLoadMore as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
        }

        return response()->json([
            'wisatas' => $wisatasLoadMore,
            'fotos' => $foto
        ]);
    }
  
}
?>