<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Informasimapelperkelas;
use App\Models\Kelasmapel;
use App\Models\Kelasmurid;
use App\Models\MapelGuru;
use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasimapelperkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function display($id)
    {
        $informasi = Informasimapelperkelas::where('idKelasMapel', $id)->get();

        return view('murid.pengumumanKelas.informasi')->with('informasi', $informasi);
    }
    public function index()
    {
        //
        if (Auth::check()) {
            $userId = Auth::id();
            $idMurid = Murid::where('idAkun', $userId)->first()->idMurid;
            $kelas = Kelasmurid::where('idMurid', $idMurid)->where('status', 'aktif')->first();
            $kelasMapel = Kelasmapel::where('idKelas', $kelas->idKelas)->get();
            return view('murid.pengumumanKelas.index')->with('kelas', $kelas)->with('kelasMapel', $kelasMapel);
        } else {
        }
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
        $validasi =  $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'jenis' => 'required',
            'idKelasMapel' => 'required',
            'foto' => 'image',
        ]);
        if ($request->foto) {
            $ext = $request->foto->getClientOriginalExtension();

            // Buat nama file baru dengan timestamp atau string acak
            $newFileName = uniqid() . '.' . $ext;

            // Validasi foto menggunakan nama file baru
            $validasi["foto"] = $newFileName;

            // Upload file foto ke dalam folder public
            $request->foto->move(public_path('fotoInformasiPerKelas'), $newFileName);
        } else {
            $validasi["foto"] = null;
        }
        Informasimapelperkelas::create($validasi);
        return redirect()->back()->with("success", "Data Informasi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $informasi = Informasimapelperkelas::where('idKelasMapel', $id)->get();
        return view('guru.pembelajaran.informasi')->with('informasi', $informasi)->with('idKelasMapel', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(informasimapelperkelas $informasimapelperkelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, informasimapelperkelas $informasimapelperkelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $informasi = Informasimapelperkelas::find($id);

        if ($informasi->delete()) {
            return redirect()->back()->with("success", "Informasi Berhasil dihapus");
        }
    }
}
