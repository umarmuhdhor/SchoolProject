<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\informasimapelperkelas;
use App\Models\kelasmapel;
use App\Models\mapelGuru;
use Illuminate\Http\Request;

class InformasimapelperkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $informasi = informasimapelperkelas::where('idKelasMapel',$id);
        return view('guru.pembelajaran.informasi')->with('informasi',$informasi)->with('idKelasMapel',$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(informasimapelperkelas $informasimapelperkelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, informasimapelperkelas $informasimapelperkelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(informasimapelperkelas $informasimapelperkelas)
    {
        //
    }
}
