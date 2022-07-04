<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\Berita;
use App\Models\Koleksi;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\ProfilWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorevideoRequest;
use App\Http\Requests\UpdatevideoRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksi = Koleksi::where('jenis', 'koleksivideo')->get();

        $video = [];
        for($i = 0; $i < count($koleksi); $i++){
            if(count($koleksi[$i]->video) == 0){
                $video[] = [
                    'videoGada' => '/images/jika.jpg'
                ];
            }else{
                $video[] = [
                    'videoAda' => $koleksi[$i]->video
                ];
            }
        }
    
        $profilWisata = ProfilWisata::all();
        $berita = Berita::all();

        return view("dashboard.koleksi.koleksiVideo.index", [
            "categories" => Category::all(),
            "title" => 'Koleksi Video',
            "koleksies" => $koleksi,
            "videos" => $video,
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
    public function create()
    {
        return view('dashboard.koleksi.koleksivideo.tambah', [
            'title' => 'Koleksi',
            'next' => 'Uploads',
            "categories" => Category::all(),
            'kategori' => session()->get( 'kategori' ),
            "kecamatans" => Kecamatan::all(),
        ]);
    }

    public function buat($slug)
    {
        return view('dashboard.koleksi.koleksivideo.tambah', [
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
     * @param  \App\Http\Requests\StorevideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevideoRequest $request)
    {
        if(isset($request->slug)){
            $slug = $request->slug;
        }else{
            $slug = $request->kategori;
        }
        $koleksi = Koleksi::where('slug', $slug)->get()[0];
        $validatedFilename = $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:mp4,mp3|file|max:501760',
        ]);
        
        if ($request->hasfile('filename')) { 
            foreach ($request->file('filename') as $file) {
                if ($file->isValid()) {
                    $filename = $file->store('videoUploads');    
                    // dd('oke');
                    Video::create([
                        'koleksi_id' => $koleksi->id,
                        'filename' => $filename
                    ]); 
                }
            }          
            return redirect('/dashboard/video');
        }else{
            echo'Gagal';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevideoRequest  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevideoRequest $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video, Request $request)
    {
        Storage::delete($video->filename);
        Video::destroy($video->id);
        return redirect('/dashboard/koleksi/' . $request->slug);
    }
}
