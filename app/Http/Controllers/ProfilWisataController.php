<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Foto;
use App\Models\Video;
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
            "slug" => $category->slug
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
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:profil_wisatas',
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
            'website' => 'max:500'
        ]);

        $validatedFilename = $request->validate([
            'filename' => 'mimes:jpg,jpeg,png,mp4,mp3|file|max:501760'
        ]);
        
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
        $data = ProfilWisata::where('slug', $slug)->get()[0];
        $title =  Category::where('id', $data->category_id)->get()[0];
        return view('dashboard.profil-wisata.show', [
            'profilWisata' => $data,
            'title' => $title->nama,
            "categories" => Category::all()
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
            'video' => $data->video
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
            'website' => 'max:500'
        ]);

        if($request->slug != $data->slug){
            $rules['slug'] = 'required|unique:profil_wisatas';
        }

        $validateData = $request->validate($rules);

        $validatedFilename = $request->validate([
            'filename' => 'mimes:jpg,jpeg,png,mp4,mp3|file|max:501760'
        ]);

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
        $foto = $data->foto;
        $video = $data->video;
        if(count($foto) > 0){
            Foto::destroy('id' , $video[0]->id);
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
}
