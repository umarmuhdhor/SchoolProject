<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $informasi = informasi::all();
        return view('admin.informasi.index')->with('informasi', $informasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $informasi = informasi::all();
        return view('admin.informasi.create')->with('informasi', $informasi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input form informasi
        $request->validate([
            "judul" => "required",
            "isiInformasi" => "required",
            "tanggal" => "required|date",
            "file" => "mimes:docx,pdf|max:20480",
            "tujuan" => 'required',
            "foto1" => "required|image",
            "foto2" => "image",
            "foto3" => "image",
            "foto4" => "image",
            "foto5" => "image",
        ]);

        $extensions = ['foto1', 'foto2', 'foto3', 'foto4', 'foto5'];
        $validasi = [];

        foreach ($extensions as $extension) {
            $file = $request->{$extension};

            // Periksa apakah file ada
            if ($file) {
                $ext = $file->getClientOriginalExtension();
                $newFileName = uniqid() . '.' . $ext;
                $validasi[$extension] = $newFileName;
                $file->move(public_path('fotoInformasi'), $newFileName);
            } else {
                // Jika file tidak ada, atur nilai null
                $validasi[$extension] = null;
            }
        }

        if ($request->file) {
            // Validasi dan pengolahan file dokumen
            $ext = $request->file->getClientOriginalExtension();
            $allowedExtensions = ['docx', 'pdf'];

            if (!in_array($ext, $allowedExtensions)) {
                return redirect()->back()->withInput()->withErrors(['file' => 'File harus berupa dokumen Word (docx) atau PDF.']);
            }

            $newFileName = uniqid() . '.' . $ext;
            $request->file->move(public_path('fileInformasi'), $newFileName);
            $validasi["file"] = $newFileName;
        } else {
            $validasi['file'] = null;
        }

        // Buat objek Informasi dan simpan data ke dalam database
        Informasi::create([
            'judul' => $request->judul,
            'isiInformasi' => $request->isiInformasi,
            'tanggal' => $request->tanggal,
            'file' => $validasi['file'],
            'tujuan' => $request->tujuan,
            'foto1' => $validasi['foto1'],
            'foto2' => $validasi['foto2'],
            'foto3' => $validasi['foto3'],
            'foto4' => $validasi['foto4'],
            'foto5' => $validasi['foto5'],
        ]);

        return redirect("adminInformasi")->with("success", "Data Informasi berhasil disimpan");
    }


    /**
     * Display the specified resource.
     */
    public function show(informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(informasi $informasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, informasi $informasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(informasi $informasi)
    {
        //
    }
}
