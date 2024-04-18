<?php

namespace App\Http\Controllers;

use App\Models\kegiatanekskul;
use Illuminate\Http\Request;

class KegiatanekskulController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validasi data input form mahasiswa
        $request->validate([
            "judulKegiatan" => "required",
            "ringkasan" => "required",
            "isiKegiatan" => "required",
            "tanggal" => "required",
            "idEkskul" => "required",
            "foto1" => "required",
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
                $file->move('fotoKegiatanEkskul', $newFileName);
            } else {
                // Jika file tidak ada, atur nilai null
                $validasi[$extension] = null;
            }
        }
        // Buat objek Kegiatan dan simpan data ke dalam database
        kegiatanekskul::create([
            'judulKegiatan' => $request->judulKegiatan,
            'ringkasan' => $request->ringkasan,
            'isiKegiatan' => $request->isiKegiatan,
            "idEkskul" => $request->idEkskul,
            "tanggal" => $request->tanggal,
            'foto1' => $validasi['foto1'],
            'foto2' => $validasi['foto2'],
            'foto3' => $validasi['foto3'],
            'foto4' => $validasi['foto4'],
            'foto5' => $validasi['foto5'],
        ]);

        return redirect('adminEkskul')->with("success", "Data Kegiatan berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show($idEkskul)
    {
        //
        return view('admin.ekskul.tambahKegiatan')->with('idEkskul', $idEkskul);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kegiatanekskul $kegiatanekskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kegiatanekskul $kegiatanekskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data KegiatanEkskul berdasarkan ID
        $kegiatan = KegiatanEkskul::find($id);

        // Pastikan data ditemukan
        if (!$kegiatan) {
            return redirect("adminKegiatanEkskul")->with("error", "KegiatanEkskul tidak ditemukan");
        }

        // Array kolom foto yang ingin dihapus
        $fotoColumns = ['foto1', 'foto2','foto3','foto3','foto4','foto5'];

        // Loop untuk menghapus setiap foto
        foreach ($fotoColumns as $fotoColumn) {
            if ($kegiatan->$fotoColumn) {
                $fotoPath = public_path('fotoKegiatanEkskul/') . $kegiatan->$fotoColumn;

                if (file_exists($fotoPath)) {
                    unlink($fotoPath); // Hapus foto dari folder
                }
            }
        }

        // Hapus data dari database
        if ($kegiatan->delete()) {
            return redirect()->back()->with("success", "KegiatanEkskul berhasil dihapus");
        } else {
            return redirect()->back()->with("error", "Gagal menghapus KegiatanEkskul");
        }
    }
}
