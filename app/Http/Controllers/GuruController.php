<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\mapel;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $guru = Guru::all();
        return view("admin.guru.index")->with("guru", $guru);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapel = Mapel::all();
        $akun = User::all();

        return view("admin.guru.create")->with(["mapel" => $mapel, "akun" => $akun]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "noHp" => "required",
            "email" => "required",
            "deskripsi" => "required",
            "jk" => "required",
            "status" => "required",
            "foto" => "image",
            "idAkun" => "required",
        ]);

        $ext = $request->foto->getClientOriginalExtension();

        // Buat nama file baru dengan timestamp atau string acak
        $newFileName = uniqid() . '.' . $ext;

        // Validasi foto menggunakan nama file baru
        $validasi["foto"] = $newFileName;

        // Upload file foto ke dalam folder public
        $request->foto->move(public_path('fotoGuru'), $newFileName);

        Guru::create($validasi);
        return redirect("adminGuru")->with("success", "Data mahasiswa berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guru $guru)
    {
        //
    }
}
