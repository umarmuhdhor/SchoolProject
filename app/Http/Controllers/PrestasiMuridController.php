<?php

namespace App\Http\Controllers;

use App\Models\prestasiMurid;
use Illuminate\Http\Request;

class PrestasiMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function display()
    {
        //
        $prestasi = PrestasiMurid::all();
        return view("prestasi")->with("prestasi", $prestasi);
    }
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
        $prestasi = PrestasiMurid::all();
        return view("prestasi")->with("prestasi", $prestasi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data input form mahasiswa
        $validasi = $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "idMurid" => "required",
            "foto" => "image",
        ]);

        $ext = $request->foto->getClientOriginalExtension();

        // Buat nama file baru dengan timestamp atau string acak
        $newFileName = uniqid() . '.' . $ext;

        // Validasi foto menggunakan nama file baru
        $validasi["foto"] = $newFileName;

        // Upload file foto ke dalam folder public
        $request->foto->move(public_path('fotoPrestasiMurid'), $newFileName);

        prestasiMurid::create($validasi);
        return redirect("adminPrestasi")->with("success", "Data Prestasi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(prestasiMurid $prestasiMurid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestasiMurid $prestasiMurid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prestasiMurid $prestasiMurid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestasiMurid $prestasiMurid)
    {
        //
    }
}
