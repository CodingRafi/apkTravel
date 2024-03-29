<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\video;
use App\Models\Berita;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\Configurasi;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

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
            $sementara = ProfilWisata::select('profil_wisatas.*', 'categories.nama AS jenis')->where('urutan', $i+1)->leftJoin('categories', 'profil_wisatas.category_id', 'categories.id')->get();
            if(count($sementara) > 0){
                $wisatas[] = $sementara[0];
            }
        }
        for ($i=0; $i < count(ProfilWisata::where('urutan', null)->get()); $i++) { 
            $sementara1 = ProfilWisata::select('profil_wisatas.*', 'categories.nama AS jenis')->where('urutan', null)->leftJoin('categories', 'profil_wisatas.category_id', 'categories.id')->get()[$i];
            $wisatas[] = $sementara1;
        }
        
        $kecamatans = DB::table('kecamatans')->get();
        
        $config = Configurasi::all();
        
        $foto = [];
        foreach($wisatas as $wisata){
            $foto[] = Foto::where('profil_wisata_id', $wisata->id)->get();
        }

        $semuaData = [
            'tapos' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 1)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'cilodong' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 2)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'cipayung' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 3)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'sawangan' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 4)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'bojongsari' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 5)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'sukmajaya' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 6)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'pancoran-mas' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 7)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'cimanggis' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 8)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'beji' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 9)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'limo' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 10)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get(),
            'cinere' => ProfilWisata::select('profil_wisatas.*', 'fotos.filename')->where('kecamatan_id', 11)->leftJoin('fotos','profil_wisatas.id','fotos.profil_wisata_id')->get()
        ];

        $hotel = [];
        $destinasi = [];
        $makanan = [];
        $oleh = [];
        $travel = [];

        foreach ($semuaData as $key => $value) {
            $hotel[$key] = [];
            foreach ($value as $key1 => $data) {
                if ($data->category_id == 8) {
                    $hotel[$key][] = $data;
                } 
            }
        }

        foreach ($semuaData as $key => $value) {
            $destinasi[$key] = [];
            foreach ($value as $key1 => $data) {
                if ($data->category_id == 1 || $data->category_id == 2 || $data->category_id == 3) {
                    $destinasi[$key][] = $data;
                } 
            }
        }

        foreach ($semuaData as $key => $value) {
            $makanan[$key] = [];
            foreach ($value as $key1 => $data) {
                if ($data->category_id == 4 || $data->category_id == 5 || $data->category_id == 6) {
                    $makanan[$key][] = $data;
                } 
            }
        }

        foreach ($semuaData as $key => $value) {
            $oleh[$key] = [];
            foreach ($value as $key1 => $data) {
                if ($data->category_id == 7) {
                    $oleh[$key][] = $data;
                } 
            }
        }

        foreach ($semuaData as $key => $value) {
            $travel[$key] = [];
            foreach ($value as $key1 => $data) {
                if ($data->category_id == 9) {
                    $travel[$key][] = $data;
                } 
            }
        }

        $datas = ProfilWisata::all();

        $fotoData = [];
        
        for ($i=0; $i < count($datas); $i++) { 
            $foto1 = Foto::where('profil_wisata_id', $datas[$i]->id)->get();
            if(count($foto1) == 0){
                $fotoData[] = 'images/jika.jpg';
            }else{
                $fotoData[] = $foto1[0];
            }
        }

        return view("test",[
            'kecamatans'=>$kecamatans,
            'videoWelcome'=>$videoWelcome,
            'beritas'=>$beritas,
            'wisatas'=>$wisatas,
            'fotos' => $foto,
            'config' => $config,
            'rss' => $rss,
            'jumlah' => 10,
            'hotel'=> $hotel,
            'destinasi' => $destinasi,
            'makanan' => $makanan,
            'oleh' => $oleh,
            'travel' => $travel,
            'fotoData' => $fotoData,
            'jml_all_wisata' => ProfilWisata::count()
        ]);
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
        $beritaLainnya = [];
        $beritaTerkait = [];
        if($data[0]->category_id >= 10){
            $halaman = 'detail.berita';
            $beritaLainnya = Berita::where('id', '!=', $data[0]->id)
            ->orderBy('updated_at', 'desc')
            ->take(4)
            ->get();

            $beritaTerkait = Berita::select('beritas.*')->where('categories.id', $data[0]->category_id)->join('categories', 'categories.id', 'beritas.category_id')->take(4)->orderBy('beritas.created_at', 'desc')->where('beritas.id', '!=', $data[0]->id)->get();
        }else{
            $halaman = 'detil';
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
            'beritaLainnya' => $beritaLainnya,
            'beritaTerkait' => $beritaTerkait,
            'jml_all_wisata' => ProfilWisata::count()
        ]);
    }

    public function show2($slug){
        if(count(ProfilWisata::where('slug', $slug)->get()) > 0){
            $data = ProfilWisata::where('slug', $slug)->get();
        }else{
            $data = Berita::where('slug', $slug)->get();
        }
        
        $rss = app('App\Http\Controllers\RssController')->rss();

        $category = Category::where('slug', $slug)->get()[0];
        $datas = ProfilWisata::where('category_id', $category->id)->get();
        
        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        

        $wisatas = [];
        $foto = [];

        for ($i=0; $i < 10; $i++) { 
            $sementara = ProfilWisata::select('profil_wisatas.*', 'categories.nama AS jenis')->where('urutan', $i+1)->leftJoin('categories', 'profil_wisatas.category_id', 'categories.id')->get();
            if(count($sementara) > 0){
                $wisatas[] = $sementara[0];
            }
        }

        for ($i=0; $i < count(ProfilWisata::where('urutan', null)->get()); $i++) { 
            $sementara1 = ProfilWisata::select('profil_wisatas.*', 'categories.nama AS jenis')->where('urutan', null)->leftJoin('categories', 'profil_wisatas.category_id', 'categories.id')->get()[$i];
            $wisatas[] = $sementara1;
        }

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

        // $liat=ProfilWisata::all();
        // dd($wisatas);
        
        return view('category',[
            "categories" => Category::all(),
            'fotos' => $foto,
            'beritas'=>$beritas,
            'wisatas'=>$wisatas,
            'datas' => $datas,
            'fotoData' => $fotoData,
            'namaHal' => $category->nama,
            'rss' => $rss,
            'jumlah' => 10,      
            'jml_all_wisata' => ProfilWisata::count()                    
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
            'rss' => $rss,
            'jml_all_wisata' => ProfilWisata::count()                             
        ]);
    }

    public function indexWelcome(){
        $video = Video::where('berita_id',3)->get();
      
        return view('welcome', [
            'video' => $video,
            'jml_all_wisata' => ProfilWisata::count()
        ]);
    }

    public function loadMore(Request $request){
        $wisatas = [];
        for ($i=0; $i < 10; $i++) { 
            $sementara = ProfilWisata::select('profil_wisatas.*', 'categories.nama as jenis')->where('profil_wisatas.urutan', $i+1)->leftJoin('categories', 'categories.id', 'profil_wisatas.category_id')->first();
            // ! maslahnya ada di loopingnya
            if($sementara){
                $wisatas[] = $sementara;
            }
        }
        
        for ($i=0; $i < count(ProfilWisata::where('urutan', null)->get()); $i++) { 
            $sementara1 = ProfilWisata::select('profil_wisatas.*', 'categories.nama as jenis')->where('urutan', null)->leftJoin('categories', 'categories.id', 'profil_wisatas.category_id')->get()[$i];
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

    public function showAll(Request $request){

        if (request('kategori') || request('search')) {
            $profils = ProfilWisata::select('profil_wisatas.*')->filter(request(['search', 'kategori']))->join('categories', 'categories.id', 'profil_wisatas.category_id')->get();
        }else{
            $profils = ProfilWisata::orderBy('created_at', 'desc')->get();
        }

        $beritas = DB::table('beritas')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();

        $categories = Category::all();

        return view('show_all', [
            'profils' => $profils,
            'categories' => $categories,
            'beritas' => $beritas,
        ]);
    }
}
?>