<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\mapelGuru;
use App\Models\periode;
use Illuminate\Http\Request;

class MapelGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mapelGuru = mapelGuru::all();
        return view("admin.mapelGuru.index")->with("mapelGuru", $mapelGuru);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kelas = kelas::all();
        $guru = guru::all();
        $periode = periode::all();
        $mapel = mapel::all();


        return view("admin.mapelGuru.create")->with("kelas", $kelas)->with('guru', $guru)->with('periode', $periode)->with('mapel',$mapel);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            "idMapel" => "required",
            "idGuru" => "required",
            'idPeriode' => "required"
        ]);

        mapelGuru::create($validasi);
        return redirect()->back()->with("success", "guru berhasil ditambahkan sebagai pengajar");
    }

    /**
     * Display the specified resource.
     */
    public function show(mapelGuru $mapelGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mapelGuru $mapelGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mapelGuru $mapelGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mapelGuru $mapelGuru)
    {
        //
    }
}
