<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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
        // Validasi data input form mahasiswa
        $request->validate([
            "judulBerita" => "required",
            "sinopsis" => "required",
            "isiBerita" => "required",
            "thumbnail" => "image",
            "tanggal" => "required",
            "foto1" => "image",
            "foto2" => "image",
            "foto3" => "image",
            "foto4" => "image",
            "foto5" => "image",
        ]);

        $extensions = ['thumbnail', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
        $validasi = [];

        foreach ($extensions as $extension) {
            $file = $request->{$extension};

            // Periksa apakah file ada
            if ($file) {
                $ext = $file->getClientOriginalExtension();
                $newFileName = uniqid() . '.' . $ext;
                $validasi[$extension] = $newFileName;
                $file->move(public_path('fotoBerita'), $newFileName);
            } else {
                // Jika file tidak ada, atur nilai null
                $validasi[$extension] = null;
            }
        }

        // Buat objek Berita dan simpan data ke dalam database
        Berita::create([
            'judulBerita' => $request->judulBerita,
            'sinopsis' => $request->sinopsis,
            'isiBerita' => $request->isiBerita,
            "tanggal" => $request->tanggal,
            'thumbnail' => $validasi['thumbnail'],
            'foto1' => $validasi['foto1'],
            'foto2' => $validasi['foto2'],
            'foto3' => $validasi['foto3'],
            'foto4' => $validasi['foto4'],
            'foto5' => $validasi['foto5'],
        ]);

        return redirect("adminBerita")->with("success", "Data berita berhasil disimpan");
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
    public function edit($id)
    {
        //

        $berita = Berita::find($id);
        return view("admin.berita.edit")->with("berita", $berita);
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
    public function destroy($id)
    {
        // Temukan data berita berdasarkan ID
        $berita = Berita::find($id);

        // Pastikan data ditemukan
        if (!$berita) {
            return redirect("adminBerita")->with("error", "berita tidak ditemukan");
        }

        // Array kolom foto yang ingin dihapus
        $fotoColumns = ['thumbnail','foto1', 'foto2', 'foto3', 'foto3', 'foto4', 'foto5'];

        // Loop untuk menghapus setiap foto
        foreach ($fotoColumns as $fotoColumn) {
            if ($berita->$fotoColumn) {
                $fotoPath = public_path('fotoBerita/') . $berita->$fotoColumn;

                if (file_exists($fotoPath)) {
                    unlink($fotoPath); // Hapus foto dari folder
                }
            }
        }

        // Hapus data dari database
        if ($berita->delete()) {
            return redirect("adminBerita")->with("success", "berita berhasil dihapus");
        } else {
            return redirect("adminBerita")->with("error", "Gagal menghapus berita");
        }
    }
}
