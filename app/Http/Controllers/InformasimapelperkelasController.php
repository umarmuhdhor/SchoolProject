<?php

namespace App\Http\Controllers;

use App\Models\informasimapelperkelas;
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
        return view('guru.pembelajaran.create');
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

        $informasi = informasimapelperkelas::where('idKelasMurid',$id);
        return view('guru.pembelajaran.informasi')->with('informasi',$informasi);
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
