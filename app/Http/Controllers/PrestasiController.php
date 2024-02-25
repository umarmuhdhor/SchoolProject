<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function display()
    {
        //
        $prestasi = Prestasi::all();
        return view("prestasi")->with("prestasi", $prestasi);
    }
    public function index()
    {
        //
        $prestasi = Prestasi::all();
        return view("admin.prestasi.index")->with("prestasi", $prestasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $prestasi = Prestasi::all();
        return view("admin.prestasi.create")->with("prestasi", $prestasi);
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
            "isiPrestasi" => "required",
            "tanggal" => "required",
            "jenis" => "required",
            "foto" => "image",
        ]);

        $ext = $request->foto->getClientOriginalExtension();

        // Buat nama file baru dengan timestamp atau string acak
        $newFileName = uniqid() . '.' . $ext;

        // Validasi foto menggunakan nama file baru
        $validasi["foto"] = $newFileName;

        // Upload file foto ke dalam folder public
        $request->foto->move(public_path('fotoPrestasi'), $newFileName);

        Prestasi::create($validasi);
        return redirect("adminPrestasi")->with("success", "Data Prestasi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestasi $prestasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prestasi $prestasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestasi $prestasi)
    {
        //
    }
}
