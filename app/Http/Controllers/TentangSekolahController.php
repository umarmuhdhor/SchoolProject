<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use App\Models\tentangsekolah;
use Illuminate\Http\Request;

class TentangSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tentangSekolah = tentangsekolah::all();
        return view("admin.tentangSekolah.index")->with('tentangSekolah',$tentangSekolah);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $prestasi = prestasi::all();
        return view("admin.prestasi.create")->with("prestasi", $prestasi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "tentang" => "required",
            "deskripsi" => "required",
        ]);
        tentangSekolah::create($validasi);
        return redirect("adminTentangSekolah")->with("success", "Data Sekolah berhasil disimpan");
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
    public function destroy($id)
    {
        //
        $tentangSekolah = tentangSekolah::find($id);

        if( $tentangSekolah->delete()){
            return redirect("adminTentangSekolah")->with("success", "Tentang Sekolah Berhasil DiHapus");
        }
    }
}
