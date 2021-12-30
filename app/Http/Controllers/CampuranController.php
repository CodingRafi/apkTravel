<?php

namespace App\Http\Controllers;

use App\Models\Campuran;
use App\Http\Requests\StoreCampuranRequest;
use App\Http\Requests\UpdateCampuranRequest;

class CampuranController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCampuranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampuranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campuran  $campuran
     * @return \Illuminate\Http\Response
     */
    public function show(Campuran $campuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campuran  $campuran
     * @return \Illuminate\Http\Response
     */
    public function edit(Campuran $campuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampuranRequest  $request
     * @param  \App\Models\Campuran  $campuran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampuranRequest $request, Campuran $campuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campuran  $campuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campuran $campuran)
    {
        //
    }
}
