<?php

namespace App\Http\Controllers;

use App\Models\permintaanAkses;
use Illuminate\Http\Request;

class PermintaanAksesController extends Controller
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
        // Pengecekan jika ada row yang memiliki idMurid dan idLatihan yang sama lebih dari 3x
        $existingRequestsCount = permintaanAkses::where('idMurid', $request->idMurid)
            ->where('idLatihan', $request->idLatihan)
            ->count();

        if ($existingRequestsCount >= 3) {
            return redirect()->back()->with("error", "Permintaan akses tidak dapat dilanjutkan.lebih dari 3 permintaan sudah dikirimkan.");
        }

        // Validasi setelah pengecekan
        $validasi = $request->validate([
            "status" => "required",
            "alasan" => "required",
            "idMurid" => "required",
            "idLatihan" => "required",
        ]);
        // Simpan data jika validasi berhasil
        permintaanAkses::create($validasi);

        return redirect()->back()->with("success", "Permintaan Berhasil dikirimkan");
    }


    /**
     * Display the specified resource.
     */
    public function show(permintaanAkses $permintaanAkses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(permintaanAkses $permintaanAkses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, permintaanAkses $permintaanAkses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permintaanAkses $permintaanAkses)
    {
        //
    }
}
