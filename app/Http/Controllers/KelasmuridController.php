<?php

namespace App\Http\Controllers;

use App\Models\kelasmurid;
use App\Models\murid;
use Illuminate\Http\Request;

class KelasmuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        dd('tes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            "idKelas" => "required",
            "idMurid" => "required",
            'status' => 'required'
        ]);

        kelasmurid::create($validasi);
        return redirect()->back()->with("success", "murid berhasil ditambahkan kedalam kelas");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jumlahMurid = KelasMurid::where('idkelas', $id)->count();

        // Mengambil murid yang belum tergabung pada kelas tersebut
        $muridNoKelas = Murid::whereNotIn('idMurid', function ($query) {
            $query->select('idMurid')->from('kelasmurids');
        })->get();

        // Atau, jika Anda ingin menyertakan murid yang sudah tergabung di kelas lain dengan status tidak aktif
        // $muridNoKelas = Murid::whereDoesntHave('kelasMurid', function ($query) use ($id) {
        //     $query->where('idkelas', $id)->where('status', 'tidak aktif');
        // })->get();

        return view("admin.kelas.tambahMurid")->with('jumlahMurid', $jumlahMurid)->with('muridNoKelas', $muridNoKelas)->with('idKelas', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelasmurid $kelasmurid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelasmurid $kelasmurid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $kelasmurid = kelasmurid::find($id);

        if ($kelasmurid->delete()) {
            return redirect()->back()->with("success", "murid berhasil ditambahkan kedalam kelas");
        }
    }
}
