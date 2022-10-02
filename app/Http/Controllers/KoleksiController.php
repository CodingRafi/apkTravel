<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Video;
use App\Models\koleksi;
use App\Models\Category;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorekoleksiRequest;
use App\Http\Requests\UpdatekoleksiRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class KoleksiController extends Controller
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
    public function create()
    {
        return view("dashboard.koleksi.tambah", [
            "categories" => Category::all(),
            "title" => "Tambah Koleksi",
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekoleksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekoleksiRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:koleksis',
            'jenis' => 'required',
            'parentKategori' => 'required',
            'kepemilikan' => 'required'
        ]);

        
        if($request->parentKategori == 'profilWisata'){
            $validatedData['profil_wisata_id'] = $request->kepemilikan;
        }else if($request->parentKategori == 'berita'){
            $validatedData['berita_id'] = $request->kepemilikan;
        }
    
        Koleksi::create($validatedData);
        if($request->jenis == 'koleksifoto'){
            return redirect('/dashboard/foto/create')->with([
            'kategori' => $request->slug
            ]);
        }else{
            return redirect('/dashboard/video/create')->with([
                'kategori' => $request->slug
            ]);
        }
    }

    public function store2(Request $request){
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:koleksis',
            'jenis' => 'required',
            'keterangan' => 'required'
        ]);

        
        Koleksi::create($validateData);
        if($request->jenis == 'koleksifoto'){
            return redirect('/dashboard/foto/create')->with([
            'kategori' => $request->slug,
            'urlBack' => '/dashboard/config'
            ]);
        }else{
            return redirect('/dashboard/video/create')->with([
                'kategori' => $request->slug,
                'urlBack' => '/dashboard/config'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function show(koleksi $koleksi)
    {
        // dd($koleksi->nama);
        if($koleksi->jenis == 'koleksifoto'){
            $koleksinya = $koleksi->foto;
            return view('dashboard.koleksi.koleksiFoto.show', [
                'koleksinya' => $koleksinya,
                'title' => 'Koleksi Foto',
                'next' => $koleksi->nama,
                "categories" => Category::all(),
                'slug' => $koleksi->slug,
                "kecamatans" => Kecamatan::all(),
            ]);
        }else{
            $koleksinya = $koleksi->video;
            return view('dashboard.koleksi.koleksiVideo.show', [
                'koleksinya' => $koleksinya,
                'title' => 'Koleksi Video',
                'next' => $koleksi->nama,
                "categories" => Category::all(),
                'slug' => $koleksi->slug,
                "kecamatans" => Kecamatan::all(),
            ]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function edit(koleksi $koleksi)
    {
        return view('dashboard.koleksi.edit', [
            'koleksi' => $koleksi,
            "categories" => Category::all(),
            'title' => 'koleksi',
            'next' => 'Edit Koleksi',
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekoleksiRequest  $request
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekoleksiRequest $request, koleksi $koleksi)
    {
        $rules =([
            'nama' => 'required|max:255'
        ]);

        if($request->slug != $koleksi->slug){
            $rules['slug'] = 'required|unique:koleksis';
        }

        $validateData = $request->validate($rules);

        Koleksi::where('id', $koleksi->id)
        ->update($validateData);

        if($koleksi->jenis == 'koleksifoto'){
            return redirect("/dashboard/foto")->with("success", "koleksi berhasil diubah");
        }else{
            return redirect("/dashboard/video")->with("success", "koleksi berhasil diubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(koleksi $koleksi)
    {
        if($koleksi->jenis == 'koleksifoto'){
            $fotos = $koleksi->foto;
            if(count($fotos) > 0){
                foreach ($fotos as $foto) {
                    Storage::delete($foto->filename);
                    Foto::destroy('id' , $foto->id);
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

        if($koleksi->jenis == 'koleksifoto'){
            return redirect('/dashboard/foto');
        }else{
            return redirect('/dashboard/video');
        }
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Koleksi::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }

    // public function ambilData(Request $request){
    //     $koleksi = Koleksi::where('slug' , $request->slug)->get();
    //     return response()->json(['data' => $koleksi[0]]);
    // }
}
