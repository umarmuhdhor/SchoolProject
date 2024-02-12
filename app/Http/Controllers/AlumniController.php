<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\murid;
use Illuminate\Http\Request;

class AlumniController extends Controller
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
        //validasi data input form mahasiswa
        $validasi = $request->validate([
            "status" => "required",
            "idMurid" => "required",
            "tempatKerja" => "nullable",
            "namaKampus" => "nullable",
            "buktiKelulusan" => "required|mimes:docx,pdf|max:20480"
        ]);

        $ext = $request->buktiKelulusan->getClientOriginalExtension();
        $allowedExtensions = ['docx', 'pdf'];

        if (!in_array($ext, $allowedExtensions)) {
            return redirect()->back()->withInput()->withErrors(['file' => 'File harus berupa dokumen Word (docx) atau PDF.']);
        }
        $newFileName = uniqid() . '.' . $ext;

        $validasi["buktiKelulusan"] = $newFileName;

        $request->buktiKelulusan->move(public_path('buktiKelulusan'), $newFileName);

        alumni::create($validasi);

        // Mengupdate status murid menjadi lulus
        $murid = Murid::find($validasi['idMurid']);
        $murid->status = 'lulus';
        $murid->save();

        return redirect("adminMurid")->with("success", "File berhasil diupload");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $murid = murid::find($id);
        return view("admin.alumni.create")->with("murid", $murid);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumni $alumni)
    {
        //
    }
}
