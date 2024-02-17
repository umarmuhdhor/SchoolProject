<?php

namespace App\Http\Controllers;

use App\Models\p5;
use Illuminate\Http\Request;

class P5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $p5 = p5::all();
        return view("admin.p5.index")->with("p5", $p5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.p5.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validasi data input form mahasiswa
         $request->validate([
            "judul" => "required",
            "isi" => "required",
            "tanggal" => "required",
            "foto1" => "image",
            "foto2" => "image",
            "foto3" => "image",
            "foto4" => "image",
            "foto5" => "image",
        ]);

        $extensions = ['foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
        $validasi = [];

        foreach ($extensions as $extension) {
            $file = $request->{$extension};

            // Periksa apakah file ada
            if ($file) {
                $ext = $file->getClientOriginalExtension();
                $newFileName = uniqid() . '.' . $ext;
                $validasi[$extension] = $newFileName;
                $file->move(public_path('fotoP5'), $newFileName);
            } else {
                // Jika file tidak ada, atur nilai null
                $validasi[$extension] = null;
            }
        }

        // Buat objek Berita dan simpan data ke dalam database
        p5::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            "tanggal" => $request->tanggal,
            'foto1' => $validasi['foto1'],
            'foto2' => $validasi['foto2'],
            'foto3' => $validasi['foto3'],
            'foto4' => $validasi['foto4'],
            'foto5' => $validasi['foto5'],
        ]);

        return redirect("adminP5")->with("success", "Data p5 berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(p5 $p5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(p5 $p5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, p5 $p5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(p5 $p5)
    {
        //
    }
}
