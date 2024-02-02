<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jabatan;
use App\Models\mapel;
use App\Models\periode;
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
        $jabatan = jabatan::all();
        return view('admin.jabatan.index')->with('jabatan', $jabatan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $guru = guru::all();
        $periode = periode::all();
        $mapel = mapel::all();
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

        jabatan::create($validasi);
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
