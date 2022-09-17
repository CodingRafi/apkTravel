<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Berita;
use App\Models\Koleksi;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksi = Koleksi::select('koleksis.*', 'profil_wisatas.nama as nama_profil', 'beritas.judul as nama_berita')->where('jenis', 'koleksifoto')->join('profil_wisatas', 'profil_wisatas.id', 'koleksis.profil_wisata_id')->leftJoin('beritas', 'beritas.id', 'koleksis.berita_id')->get();
            $foto = [];
            for($i = 0; $i < count($koleksi); $i++){
                if(count($koleksi[$i]->foto) == 0){
                    $foto[] = [
                        'fotoGada' => '/images/jika.jpg'
                    ];
                }else{
                    $foto[] = [
                        'fotoAda' => $koleksi[$i]->foto
                    ];
                }
            }
        

            $profilWisata = ProfilWisata::all();
            $berita = Berita::all();

        return view("dashboard.koleksi.koleksiFoto.index", [
            "categories" => Category::all(),
            "title" => 'Koleksi Foto',
            "koleksies" => $koleksi,
            "fotos" => $foto,
            "profilwisatas" => $profilWisata,
            "beritas" => $berita,
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dashboard.koleksi.koleksiFoto.tambah', [
            'title' => 'Koleksi',
            'next' => 'Uploads',
            "categories" => Category::all(),
            'kategori' => session()->get( 'kategori' ),
            'urlBack' => session()->get('urlBack'),
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    public function buat($slug)
    {
        return view('dashboard.koleksi.koleksiFoto.tambah', [
            'title' => 'Koleksi',
            'next' => 'Uploads',
            "categories" => Category::all(),
            'kategori' => session()->get( 'kategori' ),
            'slug' => $slug,
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFotoRequest $request)
    {
        if(isset($request->slug)){
            $slug = $request->slug;
        }else{
            $slug = $request->kategori;
        }
        $koleksi = Koleksi::where('slug', $slug)->get()[0];
        $validatedFilename = $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:jpg,jpeg,png|file|max:5120',
        ]);

        
        if ($request->hasfile('filename')) { 
            foreach ($request->file('filename') as $file) {
                if ($file->isValid()) {
                    $filename = $file->store('imagesUpload');
                    Foto::create([
                        'koleksi_id' => $koleksi->id,
                        'filename' => $filename
                    ]); 
                }
            }          
            if($request->urlBack){
                return redirect($request->urlBack);
            }else{
                return redirect('/dashboard/foto');
            }
        }else{
            echo'Gagal';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFotoRequest  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFotoRequest $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto, Request $request)
    {
        Storage::delete($foto->filename);
        Foto::destroy($foto->id);
        return redirect('/dashboard/koleksi/' . $request->slug);
    }
}
