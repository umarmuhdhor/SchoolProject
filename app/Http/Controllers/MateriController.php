<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Guru;
use App\Models\MapelGuru;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $mapel = Mapel::all();
        return view("guru.materi.index")->with("mapel", $mapel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $idMapel = $request->input('idMapel');
        $idMapelGuru = MapelGuru::where('idMapel', $idMapel)->first()->idMapelGuru;
        $loggedInUser = Auth::user();

        if ($loggedInUser) {
            // Jika ada pengguna yang login, cari ID Guru berdasarkan ID User
            $guru = Guru::where('idAkun', $loggedInUser->id)->first();

            if ($guru) {
                // Jika ID Guru ditemukan, dapatkan nilai idGuru
                $idGuru = $guru->idGuru;
            }
        }

        $mapelGuru = MapelGuru::find($idMapelGuru);
        $materi = Materi::where('idMapelGuru', $idMapelGuru)->get();
        return view("guru.materi.create")->with(["materi" => $materi, "mapel" => $mapelGuru, "idGuru" => $idGuru]);
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
            "idMapelGuru" => "required",
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
    public function show(materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(materi $materi)
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
