<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Koleksi;
use App\Models\Category;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.koleksi.koleksifoto.tambah', [
            'title' => 'Koleksi',
            'next' => 'Uploads',
            "categories" => Category::all(),
            'kategori' => session()->get( 'kategori' )
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
        $koleksi = Koleksi::where('slug', $request->kategori)->get()[0];
        $validatedFilename = $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:jpg,jpeg,png|max:501760',
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
            echo'Success';
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
    public function destroy(Foto $foto)
    {
        //
    }
}
