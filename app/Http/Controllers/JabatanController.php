<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use App\Models\Mapel;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jabatan = Jabatan::all();
        return view('admin.jabatan.index')->with('jabatan', $jabatan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $guru = Guru::all();
        $periode = Periode::all();
        $mapel = Mapel::all();
        return view('admin.jabatan.create')->with('guru', $guru)->with('periode',$periode)->with('mapel',$mapel);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $validasi =  $request->validate([
            'jabatan' => 'required',
            'idGuru' => 'required',
            'tahunMenjabat' => 'required',
            'status' => 'required',
        ]);

        Jabatan::create($validasi);
        return redirect("adminJabatan")->with("success", "Data Jabatan berhasil disimpan");

    }

    /**
     * Display the specified resource.
     */
    public function show(jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jabatan $jabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jabatan $jabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jabatan $jabatan)
    {
        //
    }
}
