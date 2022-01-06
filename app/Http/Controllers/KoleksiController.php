<?php

namespace App\Http\Controllers;

use App\Models\koleksi;
use App\Models\Category;
use Illuminate\Http\Request;
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
            "title" => "Tambah Koleksi"
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
            'slug' => 'required|unique:beritas',
            'jenis' => 'required'
        ]);

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function show(koleksi $koleksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function edit(koleksi $koleksi)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\koleksi  $koleksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(koleksi $koleksi)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Koleksi::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
