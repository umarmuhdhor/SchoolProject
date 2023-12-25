<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function display()
    {
        //
        $berita = Berita::all();
        return view("welcome")->with("berita", $berita);
    }
    public function index()
    {
        //
        $berita = Berita::all();
        return view("admin.berita.index")->with("berita", $berita);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $berita = Berita::all();
        return view("admin.berita.create")->with("berita", $berita);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data input form mahasiswa
        $validasi = $request->validate([
            "judulBerita" => "required",
            "sinopsis" => "required",
            "isiBerita" => "required",
            "foto" => "image",
        ]);

        $ext = $request->foto->getClientOriginalExtension();

        // Buat nama file baru dengan timestamp atau string acak
        $newFileName = uniqid() . '.' . $ext;

        // Validasi foto menggunakan nama file baru
        $validasi["foto"] = $newFileName;

        // Upload file foto ke dalam folder public
        $request->foto->move(public_path('foto'), $newFileName);

        Berita::create($validasi);
        return redirect("berita")->with("success", "Data mahasiswa berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(berita $berita)
    {
        //
    }
}
