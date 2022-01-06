<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Video;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
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
        return view("dashboard.berita.tambah", [
            "categories" => Category::all(),
            "title" => "Tambah Berita"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeritaRequest $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        // dd($request);

        $validatedFilename = $request->validate([
            'filename' => 'mimes:jpg,jpeg,png,mp4,mp3|file|max:501760'
        ]);
        
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Berita::create($validatedData);

        if($request->filename){
            $ekstensi = $request->file('filename')->getMimeType();
            $data = Berita::where('slug', $request->slug)->get()[0];
            if(( $ekstensi== 'image/png' || $ekstensi == 'image/jpg' || $ekstensi == 'image/jpeg')){
                $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                $validatedFilename['berita_id'] = $data->id;
                Foto::create($validatedFilename);
            }else{
                $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                $validatedFilename['berita_id'] = $data->id;
                Video::create($validatedFilename);
            }
        }

        return redirect('/dashboard')->with('success', 'Berita baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita, $slug)
    {
        $data = Berita::where('slug', $slug)->get()[0];
        $title =  Category::where('id', $data->category_id)->get()[0];
        return view('dashboard.berita.show', [
            'profilWisata' => $data,
            'title' => $title->nama,
            "categories" => Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita, $slug)
    {
        $data = Berita::where('slug', $slug)->get()[0];
        $title =  Category::where('id', $data->category_id)->get()[0];
        return view('dashboard.berita.edit', [
            'berita' => $data,
            'title' => $title->nama,
            "categories" => Category::all(),
            'foto' => $data->foto,
            'video' => $data->video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeritaRequest  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBeritaRequest $request, Berita $berita, $slug)
    {
        $data = Berita::where('slug', $slug)->get()[0];
        $foto = $data->foto;
        $video = $data->video;

        $rules = ([
            'judul' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if($request->slug != $data->slug){
            $rules['slug'] = 'required|unique:beritas';
        }

        $validateData = $request->validate($rules);

        $validatedFilename = $request->validate([
            'filename' => 'mimes:jpg,jpeg,png,mp4,mp3|file|max:501760'
        ]);

        Berita::where('id', $data->id)
            ->update($validateData);

        if($request->filename){
            $ekstensi = $request->file('filename')->getMimeType();
            $data = Berita::where('slug', $request->slug)->get()[0];
            if(( $ekstensi== 'image/png' || $ekstensi == 'image/jpg' || $ekstensi == 'image/jpeg')){
                if(count($foto) > 0){
                    $foto = $foto[0];
                    Storage::delete($foto->filename);
                    $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                    $validatedFilename['berita_id'] = $data->id;
                    Foto::where('id', $foto->id)
                        ->update($validatedFilename);
                }else{
                    if(count($video) > 0){
                        Storage::delete($video[0]->filename);
                        Video::destroy('id' , $video[0]->id);
                        $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                        $validatedFilename['berita_id'] = $data->id;
                        Foto::create($validatedFilename);
                    }else{
                        $validatedFilename['filename'] = $request->file('filename')->store('imagesUpload');
                        $validatedFilename['berita_id'] = $data->id;
                        Foto::create($validatedFilename);
                    }
                }
            }else{
                if(count($video) > 0){
                    $video = $video[0];
                    Storage::delete($video->filename);
                    $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                    $validatedFilename['berita_id'] = $data->id;
                    Video::where('id', $video->id)
                         ->update($validatedFilename);
                }else{
                    if(count($foto) > 0){
                        Storage::delete($foto[0]->filename);
                        Foto::destroy('id' , $foto[0]->id);
                        $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                        $validatedFilename['berita_id'] = $data->id;
                        Video::create($validatedFilename);
                    }else{
                        $validatedFilename['filename'] = $request->file('filename')->store('videoUploads');
                        $validatedFilename['berita_id'] = $data->id;
                        Video::create($validatedFilename);
                    }
                }
            }
        }
        
        return redirect("/dashboard")->with("success", "Berita berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $slug)
    {
        $data = Berita::where('slug', $slug)->get()[0];
        $foto = $data->foto;
        $video = $data->video;
        if(count($foto) > 0){
            Foto::destroy('id' , $foto[0]->id);
            Storage::delete($foto[0]->filename);
        }else if(count($video) > 0){
            Video::destroy('id' , $video[0]->id);
            Storage::delete($video[0]->filename);
        }
        Berita::destroy($data->id);
        return redirect('/dashboard')->with('success', 'Berita berhasil dihapus');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
