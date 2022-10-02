<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\video;
use App\Models\Berita;
use App\Models\Koleksi;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProfilWisataRequest;
use App\Http\Requests\UpdateProfilWisataRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProfilWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view("dashboard.profil-wisata.tambah", [
            "categories" => Category::all(),
            "title" => $category->nama,
            "slug" => $category->slug,
            "kecamatans" => Kecamatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilWisataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilWisataRequest $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:profil_wisatas',
            'logo' => 'image|file|max:501760',
            'no_telp' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'pengelola' => 'required',
            'category_id' => 'required',
            'instagram' => 'max:255',
            'youtube' => 'max:255',
            'twitter' => 'max:255',
            'facebook' => 'max:255',
            'whatsapp' => 'max:255',
            'website' => 'max:500',
            'email' => 'max:500',
            'kecamatan_id' => 'required',
            'iframe' => 'nullable'
        ]);
        
        $validatedFilename = $request->validate([
            'filename' => 'mimes:jpg,jpeg,png,mp4,mp3|file|max:501760'
        ]);

        if($request->urutan){
            $data = ProfilWisata::where('urutan', $request->urutan)->get();
            if(count($data) > 0){
                if($request->tetap){
                    $affected = ProfilWisata::where('id', $data[0]->id)
                    ->update(['urutan' => null]);
                    $validatedData['urutan'] = $request->urutan;
                }else{
                    $validateData = $request->validate([
                        'urutan' => 'max:10|unique:profil_wisatas' 
                    ]);
                }
            }else{
                $validatedData['urutan'] = $request->urutan;
            }
        }

        if($request->file('logo')){
            $validatedData['logo'] = $request->file('logo')->store('logos');
        }
        // dd($validatedData);
        
        ProfilWisata::create($validatedData);

        if($request->filename){
            $ekstensi = $request->file('filename')->getMimeType();
            $data = ProfilWisata::where('slug', $request->slug)->get()[0];
            if(( $ekstensi== 'image/png' || $ekstensi == 'image/jpg' || $ekstensi == 'image/jpeg')){
                $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                $validatedFilename['profil_wisata_id'] = $data->id;
                Foto::create($validatedFilename);
            }else{
                $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                $validatedFilename['profil_wisata_id'] = $data->id;
                Video::create($validatedFilename);
            }
        }
        

        return redirect('/dashboard')->with('success', 'Profile wisata berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfilWisata  $profilWisata
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilWisata $profilWisata, $slug)
    {
        $data = ProfilWisata::where('slug', $slug)->first();
        $title =  Category::where('id', $data->category_id)->first();
        $koleksi = $data->koleksi;

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
        

        return view('dashboard.profil-wisata.show', [
            'profilWisata' => $data,
            'title' => $title->nama,
            "categories" => Category::all(),
            'next' => $data->nama,
            'foto' => $data->foto,
            'video' => $data->video,
            'urlBack' => $data->category->slug,
            'koleksis' => $koleksi,
            'fotos' => $foto,
            'kecamatan' => Kecamatan::where('id', $data->kecamatan_id)->get(),
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilWisata  $profilWisata
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilWisata $profilWisata, $slug)
    {
        $data = ProfilWisata::where('slug', $slug)->get()[0];
        $title =  Category::where('id', $data->category_id)->get()[0];
        return view('dashboard.profil-wisata.edit', [
            'profilWisata' => $data,
            'title' => $title->nama,
            "categories" => Category::all(),
            'foto' => $data->foto,
            'video' => $data->video,
            'next' => $data->nama,
            "kecamatans" => Kecamatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilWisataRequest  $request
     * @param  \App\Models\ProfilWisata  $profilWisata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilWisataRequest $request, ProfilWisata $profilWisata, $slug)
    {
        $data = ProfilWisata::where('slug', $slug)->get()[0];
        $foto = $data->foto;
        $video = $data->video;

        $rules = ([
            'nama' => 'required|max:255',
            'logo' => 'image|file|max:501760',
            'no_telp' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'pengelola' => 'required',
            'category_id' => 'required',
            'instagram' => 'max:255',
            'youtube' => 'max:255',
            'twitter' => 'max:255',
            'facebook' => 'max:255',
            'whatsapp' => 'max:255',
            'website' => 'max:500',
            'email' => 'max:500',
            'kecamatan_id' => 'required',
            'iframe' => 'nullable'
        ]);

        if($request->slug != $data->slug){
            $rules['slug'] = 'required|unique:profil_wisatas';
        }
        
        $validateData = $request->validate($rules);

        if($request->file('logo')){
            if($request->oldLogo){
                Storage::delete($request->oldLogo);
            }
            $validateData['logo'] = $request->file('logo')->store('logos');
        }

        $validatedFilename = $request->validate([
            'filename' => 'mimes:jpg,jpeg,png,mp4,mp3|file|max:501760'
        ]);

        if($request->urutan){
            $dataUrutan = ProfilWisata::where('urutan', $request->urutan)->get();
            if(count($dataUrutan) > 0){
                if($data->id != $dataUrutan[0]->id){
                    if($request->tetap){
                        $affected = ProfilWisata::where('id', $dataUrutan[0]->id)
                        ->update(['urutan' => null]);
                        $validateData['urutan'] = $request->urutan;
                    }else{
                        $validateData = $request->validate([
                            'urutan' => 'max:10|unique:profil_wisatas' 
                        ]);
                    }
                }else{
                    $validateData['urutan'] = $request->urutan;
                }
            }else{
                $validateData['urutan'] = $request->urutan;
            }
        }

        ProfilWisata::where('id', $data->id)
            ->update($validateData);

        if($request->filename){
            $ekstensi = $request->file('filename')->getMimeType();
            $data = ProfilWisata::where('slug', $request->slug)->get()[0];
            if(( $ekstensi== 'image/png' || $ekstensi == 'image/jpg' || $ekstensi == 'image/jpeg')){
                if(count($foto) > 0){
                    $foto = $foto[0];
                    Storage::delete($foto->filename);
                    $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                    $validatedFilename['profil_wisata_id'] = $data->id;
                    Foto::where('id', $foto->id)
                        ->update($validatedFilename);
                }else{
                    if(count($video) > 0){
                        Storage::delete($video[0]->filename);
                        Video::destroy('id' , $video[0]->id);
                        $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                        $validatedFilename['profil_wisata_id'] = $data->id;
                        Foto::create($validatedFilename);
                    }else{
                        $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                        $validatedFilename['profil_wisata_id'] = $data->id;
                        Foto::create($validatedFilename);
                    }
                }
            }else{
                if(count($video) > 0){
                    $video = $video[0];
                    Storage::delete($video->filename);
                    $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                    $validatedFilename['profil_wisata_id'] = $data->id;
                    Video::where('id', $video->id)
                         ->update($validatedFilename);
                }else{
                    if(count($foto) > 0){
                        Storage::delete($foto[0]->filename);
                        Foto::destroy('id' , $foto[0]->id);
                        $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                        $validatedFilename['profil_wisata_id'] = $data->id;
                        Video::create($validatedFilename);
                    }else{
                        $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                        $validatedFilename['profil_wisata_id'] = $data->id;
                        Video::create($validatedFilename);
                    }
                }
            }
        }
        
        return redirect("/dashboard")->with("success", "Profil wisata berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilWisata  $profilWisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilWisata $profilWisata, $slug)
    {
        $data = ProfilWisata::where('slug', $slug)->get()[0];
        $koleksis = $data->koleksi;
        $foto = $data->foto;
        $video = $data->video;

        foreach ($koleksis as $koleksi) {
            if($koleksi->jenis == 'koleksifoto'){
                $fotoss = $koleksi->foto;
                if(count($fotoss) > 0){
                    foreach ($fotoss as $fotos) {
                        Storage::delete($fotos->filename);
                        Foto::destroy('id' , $fotos->id);
                    }
                }
            }else{
                $videos = $koleksi->video;
                if(count($videos) > 0){
                    foreach($videos as $video){
                        Storage::delete($video->filename);
                        Video::destroy('id' , $video->id);
                    }
                }
            }
            Koleksi::destroy($koleksi->id);
        }

        if($data->logo){
            Storage::delete($data->logo);
        }

        if(count($foto) > 0){
            Foto::destroy('id' , $foto[0]->id);
            Storage::delete($foto[0]->filename);
        }else if(count($video) > 0){
            Video::destroy('id' , $video[0]->id);
            Storage::delete($video[0]->filename);
        }
        ProfilWisata::destroy($data->id);
        return redirect('/dashboard')->with('success', 'Profile wisata berhasil dihapus');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(ProfilWisata::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }

    public function kecamatan(Request $request, $kecamatan){
        $kecamatan1 = Kecamatan::where('nama', $kecamatan)->first();
        $dataWisata = $kecamatan1->profilwisata;
        $hotel = [];
        $destinasi = [];
        $makanan = [];
        $travel = [];
        $oleh = [];

        foreach ($dataWisata as $key => $data) {
            if ($data->category_id == 8) {
                $hotel[] = $data;
            } 
        }

        foreach ($dataWisata as $key => $data) {
            if ($data->category_id == 1 || $data->category_id == 2 || $data->category_id == 3) {
                $destinasi[] = $data;
            } 
        }

        foreach ($dataWisata as $key => $data) {
            if ($data->category_id == 4 || $data->category_id == 5 || $data->category_id == 6) {
                $makanan[] = $data;
            } 
        }

        foreach ($dataWisata as $key => $data) {
            if ($data->category_id == 7) {
                $oleh[] = $data;
            } 
        }

        foreach ($dataWisata as $key => $data) {
            if ($data->category_id == 9) {
                $travel[] = $data;
            } 
        }


        return view('dashboard.kecamatan.index', [
            'datas' => $dataWisata,
            'title' => $kecamatan,
            "kecamatans" => Kecamatan::all(),
            "categories" => Category::all(),
            'hotel' => $hotel,
            'destinasi' => $destinasi,
            'makanan' => $makanan,
            'oleh' => $oleh,
            'travel' => $travel
        ]);
    }

    public function get_data(Request $request, $kategori){
        if ($kategori == 'profilWisata') {
            $profils = ProfilWisata::all();

            return response()->json([
                'data' => $profils
            ], 200);
        }else{
            $berita = Berita::all();

            return response()->json([
                'data' => $berita
            ], 200);
        }
    }
}
