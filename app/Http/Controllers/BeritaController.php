<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Berita::create($validatedData);

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
            "categories" => Category::all()
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
        $rules = ([
            'judul' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if($request->slug != $data->slug){
            $rules['slug'] = 'required|unique:beritas';
        }

        $validateData = $request->validate($rules);

        Berita::where('id', $data->id)
            ->update($validateData);
        
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
        $data = Berita::where('slug', $slug)->get();
        Berita::destroy($data[0]->id);
        return redirect('/dashboard')->with('success', 'Berita berhasil dihapus');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
