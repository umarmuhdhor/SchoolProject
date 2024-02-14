<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\mapel;
use App\Models\materi;
use App\Models\guru;
use App\Models\kelasmapel;
use App\Models\kelasmurid;
use App\Models\murid;
use Illuminate\Http\Request;

class MateriMuridController extends Controller
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
            $idKelas = kelasmurid::where('idMurid', $idMurid)->where('status', 'aktif')->first()->idKelas;
            $KelasMapel = kelasmapel::where('idKelas', $idKelas)
                ->join('mapel_gurus', 'kelasmapels.idMapelGuru', '=', 'mapel_gurus.idMapelGuru')
                ->join('mapels', 'mapel_gurus.idMapel', '=', 'mapels.idMapel')
                ->join('gurus', 'mapel_gurus.idGuru', '=', 'gurus.idGuru')
                ->get(['mapel_gurus.idMapelGuru', 'mapels.mataPelajaran', 'gurus.nama', 'mapels.kelas']);

            return view("murid.materi.index")->with("mapel", $KelasMapel);
        } else {
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data input form mahasiswa
        $validasi = $request->validate([
            "namaMateri" => "required",
            "namaFile" => "required",
            "deskripsi" => "required",
            "idGuru" => "required",
            "idMapel" => "required",
            "file" => "required|mimes:docx,pdf|max:20480"
        ]);

        $ext = $request->file->getClientOriginalExtension();
        $allowedExtensions = ['docx', 'pdf'];

        if (!in_array($ext, $allowedExtensions)) {
            return redirect()->back()->withInput()->withErrors(['file' => 'File harus berupa dokumen Word (docx) atau PDF.']);
        }
        $newFileName = uniqid() . '.' . $ext;

        $validasi["file"] = $newFileName;

        $request->file->move(public_path('materi'), $newFileName);

        Materi::create($validasi);
        return redirect("guruMateri")->with("success", "File berhasil diupload");
    }

    /**
     * Display the specified resource.
     */
    public function show($idMapelGuru)
    {
        // Menggunakan join untuk mengambil data dari tabel terkait

        
        $materi = Materi::join('mapel_gurus', 'materis.idMapelGuru', '=', 'mapel_gurus.idMapelGuru')
            ->join('mapels', 'mapel_gurus.idMapel', '=', 'mapels.idMapel')
            ->join('gurus', 'mapel_gurus.idGuru', '=', 'gurus.idGuru')
            ->where('materis.idMapelGuru', $idMapelGuru)
            ->get(['materis.*', 'mapels.mataPelajaran', 'gurus.nama']);
        // Mengirimkan data materi ke view
        return view("murid.materi.daftarMateri")->with("materi", $materi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(materi $materi)
    {
        //
    }
}
