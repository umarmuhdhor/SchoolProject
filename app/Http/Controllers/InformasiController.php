<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $informasi = informasi::all();
        return view('admin.informasi.index')->with('informasi', $informasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $informasi = informasi::all();
        return view('admin.informasi.create')->with('informasi', $informasi);
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
    public function show(informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(informasi $informasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, informasi $informasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(informasi $informasi)
    {
        //
    }
}
