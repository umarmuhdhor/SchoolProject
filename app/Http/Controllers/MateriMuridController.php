<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\mapel;
use App\Models\materi;
use App\Models\guru;
use Illuminate\Http\Request;

class MateriMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function display()
    // {
    //     //
    //     $mapel = Mapel::find($idMapel);
    //     $materi = Materi::where('idMapel', $idMapel)->get();
    //     return view("guru.materi.create")->with(["materi" => $materi, "mapel" => $mapel]);
    // }

    public function index()
    {
        //
        $mapel = Mapel::all();
        return view("murid.materi.index")->with("mapel", $mapel);
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
