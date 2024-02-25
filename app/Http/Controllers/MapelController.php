<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mapel = Mapel::all();
        return view("admin.mapel.index")->with("mapel", $mapel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mapel = Mapel::all();
        return view("admin.mapel.create")->with("mapel", $mapel);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data input form mahasiswa
        $validasi = $request->validate([
            "kelas" => "required",
            "mataPelajaran" => "required",
        ]);
        Mapel::create($validasi);
        return redirect("adminMapel")->with("success", "Data mahasiswa berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mapel $mapel)
    {
        //
    }
}
