<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $permintaan = PermintaanAkses::where('status','proses')->get();
        return view('admin.permintaanAkses.index')->with('permintaan', $permintaan);
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
        $existingRequest = PermintaanAkses::where('idMurid', $request->idMurid)
            ->where('idLatihan', $request->idLatihan)->where('status', 'proses')
            ->exists();

        if ($existingRequest) {
            return redirect()->back()->with("error", "Permintaan akses sudah dikirimkan, silahkan tunggu akses dari admin.");
        }
        // Pengecekan jika ada row yang memiliki idMurid dan idLatihan yang sama lebih dari 3x
        $existingRequestsCount = PermintaanAkses::where('idMurid', $request->idMurid)
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
        PermintaanAkses::create($validasi);

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
    public function edit($id, $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $permintaanAkses = permintaanAkses::find($request->idPermintaan);
        // Validasi input atau langkah lain yang diperlukan
        if ($request->status == 'terima') {
            // Update status pada permintaanAkses
            $permintaanAkses->update(['status' => 'terima']);

            // Pastikan bahwa relasi latihan ada sebelum mencoba update
            if ($permintaanAkses->latihan) {
                $permintaanAkses->latihan->update(['status' => '0']);
            }
        } elseif ($request->status == 'tolak') {
            // Update status pada permintaanAkses
            $permintaanAkses->update(['status' => 'tolak']);

            // Tidak ada perubahan pada latihans jika status ditolak
        }

        return redirect()->route('adminPermintaan.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(permintaanAkses $permintaanAkses)
    {
        //
    }
}
