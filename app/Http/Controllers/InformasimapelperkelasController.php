<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\informasimapelperkelas;
use App\Models\kelasmapel;
use App\Models\kelasmurid;
use App\Models\mapelGuru;
use App\Models\murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasimapelperkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::check()) {
            // Get the ID of the logged-in user
            $userId = Auth::id();
            $idMurid = murid::where('idAkun', $userId)->first()->idMurid;
            $kelas = kelasmurid::where('idMurid', $idMurid)->where('status', 'aktif')->first();
            $kelasMapel = kelasmapel::where('idKelas',$kelas->idKelas)->get();
            return view('murid.pengumumanKelas.index')->with('kelas', $kelas)->with('kelasMapel',$kelasMapel);

        } else {

            // No user is currently logged in
            // Handle accordingly...
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
            'idKelasMapel' => 'required',
            'foto' => 'image',
        ]);

        $ext = $request->foto->getClientOriginalExtension();

        // Buat nama file baru dengan timestamp atau string acak
        $newFileName = uniqid() . '.' . $ext;

        // Validasi foto menggunakan nama file baru
        $validasi["foto"] = $newFileName;

        // Upload file foto ke dalam folder public
        $request->foto->move(public_path('fotoInformasiPerKelas'), $newFileName);

        informasimapelperkelas::create($validasi);
        return redirect()->back()->with("success", "Data Informasi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $informasi = informasimapelperkelas::where('idKelasMapel',$id)->get();
        return view('guru.pembelajaran.informasi')->with('informasi',$informasi)->with('idKelasMapel',$id);
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
        $informasi = informasimapelperkelas::find($id);

        if( $informasi->delete()){
            return redirect()->back()->with("success", "Informasi Berhasil dihapus");
        }
    }
}
