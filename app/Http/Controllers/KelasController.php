<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\murid;
use App\Models\periode;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelas = Kelas::all();
        return view("admin.kelas.index")->with("kelas", $kelas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kelas = Kelas::all();
        $guru = Guru::all();
        $periode = Periode::all();
        return view("admin.kelas.create")->with("kelas", $kelas)->with('guru', $guru)->with('periode', $periode);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            "namaKelas" => "required",
            "tingkat" => "required",
            "idGuru" => "required",
            "idPeriode" => "required",
        ]);

        Kelas::create($validasi);
        return redirect("adminKelas")->with("success", "Data kelas berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil data kelas berdasarkan ID dengan relasi yang dibutuhkan
        $kelas = Kelas::with(['guru', 'murids', 'periode'])->findOrFail($id);

        // Menghitung jumlah murid dalam kelas
        $jumlahMurid = $kelas->murids->count();

        // Menggabungkan dataMurids dengan idKelasMurid
        $muridsCollection = $kelas->murids->map(function ($murid) {
            // Mendapatkan atribut-atribut dari model pivot
            $pivotAttributes = $murid->pivot->getAttributes();

            // Menambahkan atribut idKelasMurid ke model murid
            $murid->idKelasMurid = $pivotAttributes['idKelasMurid'];

            return $murid;
        });

        return view("admin.kelas.detail", [
            'kelas' => $kelas,
            'jumlahMurid' => $jumlahMurid,
            'dataMurids' => $muridsCollection,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas $kelas)
    {
        //
    }
}
