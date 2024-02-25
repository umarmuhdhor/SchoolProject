<?php

namespace App\Http\Controllers;

use App\Models\ekskul;
use App\Models\guru;
use App\Models\kegiatanekskul;
use App\Models\murid;
use App\Models\periode;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ekskul = Ekskul::all();
        return view('admin.ekskul.index')->with('ekskul', $ekskul);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $murid = Murid::all();
        $periode = Periode::all();
        $guru = Guru::all();
        return view('admin.ekskul.create')
            ->with('guru', $guru)
            ->with('murid', $murid)
            ->with('periode', $periode);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "status" => "required",
            "deskripsi" => "required",
            "idGuru" => "required",
            "idMurid" => "required",
            "idPeriode" => "required",
            "foto" => "image",
        ]);

        $ext = $request->foto->getClientOriginalExtension();

        // Buat nama file baru dengan timestamp atau string acak
        $newFileName = uniqid() . '.' . $ext;

        // Validasi foto menggunakan nama file baru
        $validasi["foto"] = $newFileName;

        // Upload file foto ke dalam folder public
        $request->foto->move(public_path('LogoEkskul'), $newFileName);
        ekskul::create($validasi);
        return redirect("adminEkskul")->with("success", "Data ekskul berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $kegiatan = Kegiatanekskul::where('idEkskul',$id)->get();
        return view('admin.ekskul.kegiatan')->with('kegiatan', $kegiatan)->with('idEkskul',$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ekskul $ekskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ekskul $ekskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ekskul $ekskul)
    {
        //
    }
}
