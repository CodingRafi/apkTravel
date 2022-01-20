<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Video;
use App\Models\Koleksi;
use App\Models\Category;
use App\Models\Configurasi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConfigurasiRequest;
use App\Http\Requests\UpdateConfigurasiRequest;

class ConfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksis = Koleksi::where('keterangan', 'config')->get();
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

        return view('dashboard.config.index', [
            "categories" => Category::all(),
            "title" => "Konfigurasi",
            "data" => Configurasi::all(),
            'koleksis' => $koleksis,
            'fotos' => $fotos,
            'videos' => $videos,
            'koleksifoto' => $koleksiFoto,
            'koleksivideo' => $koleksiVideo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConfigurasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfigurasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function show(Configurasi $configurasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Configurasi $configurasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfigurasiRequest  $request
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfigurasiRequest $request, Configurasi $configurasi)
    {
        $data = Configurasi::where('id', $request->key)->get()[0];

        $rules = ([
            'contact' => 'required',
            'alamat' => 'required',
        ]);

        $validateData = $request->validate($rules);

        Configurasi::where('id', $data->id)
        ->update($validateData);

        return redirect("/dashboard/config")->with("success", "Configurasi berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configurasi $configurasi)
    {
        //
    }
}
