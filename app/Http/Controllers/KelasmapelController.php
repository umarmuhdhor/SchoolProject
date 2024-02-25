<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Kelasmapel;
use App\Models\MapelGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasmapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $kelas = Kelasmapel::all();
        return view('admin.kelasMapel.index')->with('kelas', $kelas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kelas = Kelas::all();
        $mapelGuru = MapelGuru::all();
        return view('admin.kelasMapel.create')->with('guru', $mapelGuru)->with('kelas', $kelas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            "idKelas" => "required",
            "idMapelGuru" => "required",
        ]);

        kelasmapel::create($validasi);
        return redirect()->back()->with("success", "Guru berhasil ditambahkan untuk mengajar kelas tersebut");
    }

    /**
     * Display the specified resource.
     */
    public function show(kelasmapel $kelasmapel)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelasmapel $kelasmapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelasmapel $kelasmapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelasmapel $kelasmapel)
    {
        //
    }

    public function display()
    {
        // Check if a user is currently authenticated
        if (Auth::check()) {
            // Get the ID of the logged-in user
            $userId = Auth::id();
            $idGuru = guru::where('idAkun', $userId)->first()->idGuru;
            $mapelGuruIds = mapelGuru::where('idGuru', $idGuru)->pluck('idMapelGuru')->toArray();
            $kelasMapel = kelasmapel::whereIn('idMapelGuru', $mapelGuruIds)->get();
            return view('guru.pembelajaran.index')->with('kelasMapel', $kelasMapel);
        } else {

            // No user is currently logged in
            // Handle accordingly...
        }
    }
}
